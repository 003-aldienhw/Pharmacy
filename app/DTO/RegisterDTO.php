<?php

namespace App\DTO;

class RegisterDTO{
    public function __construct(
        public string $email,
        public string $username,
        public string $password,
        public string $role
    ){}

    public static function fromArray($data){
        $constructor = (new \ReflectionClass(self::class))
            ->getConstructor();

        $allowed = array_map(
            fn ($param) => $param->getName(),
            $constructor->getParameters()
        );
        return new self(
            ...array_intersect_key(
                $data,
                array_flip($allowed)
            )
        );
    }

    public function toArray(): Array{
        return get_object_vars($this);
    }
}