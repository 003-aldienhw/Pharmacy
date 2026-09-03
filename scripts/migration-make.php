<?php
// Usage: php make-migrations.php create migration_name

$cmd = $argv[1] ?? null;
$name = $argv[2] ?? null;

if ($cmd !== 'create' || !$name) {
    echo "Usage:\n  php make-migrations.php create migration_name\n";
    exit(1);
}

$migrationsDir = __DIR__ . '/../Database/migrations';
$upDir = $migrationsDir . '/up';
$downDir = $migrationsDir . '/down';

if (!is_dir($upDir)) mkdir($upDir, 0755, true);
if (!is_dir($downDir)) mkdir($downDir, 0755, true);

$files = glob($upDir . '/*.php');
$max = 0;
if ($files !== false) {
    foreach ($files as $f) {
        $base = basename($f);
        if (preg_match('/^(\d+)_/', $base, $m)) {
            $n = intval($m[1]);
            if ($n > $max) $max = $n;
        }
    }
}

$next = str_pad($max + 1, 3, '0', STR_PAD_LEFT);
$slug = preg_replace('/[^a-z0-9_]+/','_',strtolower($name));
$upFile = "$upDir/{$next}_{$slug}_up.php";
$downFile = "$downDir/{$next}_{$slug}_down.php";

$upTemplate = <<<'PHP'
<?php

require_once __DIR__ . '/../../connectdb.php';

// Migration UP: %s

$sql = "";

$stmt = $conn->query($sql);

PHP;

$downTemplate = <<<'PHP'
<?php

require_once __DIR__ . '/../../connectdb.php';

// Migration DOWN: %s

$sql = "";

$stmt = $conn->query($sql);

PHP;

file_put_contents($upFile, sprintf($upTemplate, $name));
file_put_contents($downFile, sprintf($downTemplate, $name));

echo "Created: $upFile\n";
echo "Created: $downFile\n";

// Append require_once entries to migrations index files now located next to this script
// Index files: migration-up.php and migration-down.php (in this `scripts/` directory)
$upIndex = __DIR__ . '/migration-up.php';
$downIndex = __DIR__ . '/migration-down.php';
// The created migration files live under ../Database/migrations/up and ../Database/migrations/down
$upRequireLine = "require_once \"../Database/migrations/up/{$next}_{$slug}_up.php\";\n";
$downRequireLine = "require_once \"../Database/migrations/down/{$next}_{$slug}_down.php\";\n";

// Ensure up.php exists and append if not present
if (file_exists($upIndex)) {
    $content = file_get_contents($upIndex);
    if (strpos($content, $upRequireLine) === false) {
        file_put_contents($upIndex, rtrim($content, "\n") . "\n" . $upRequireLine);
        echo "Appended to up index: $upIndex\n";
    }
} else {
    file_put_contents($upIndex, "<?php\n\n" . $upRequireLine);
    echo "Created up index: $upIndex\n";
}

// Ensure down.php exists and append if not present
if (file_exists($downIndex)) {
    $content = file_get_contents($downIndex);
    if (strpos($content, $downRequireLine) === false) {
        file_put_contents($downIndex, rtrim($content, "\n") . "\n" . $downRequireLine);
        echo "Appended to down index: $downIndex\n";
    }
} else {
    file_put_contents($downIndex, "<?php\n\n" . $downRequireLine);
    echo "Created down index: $downIndex\n";
}
