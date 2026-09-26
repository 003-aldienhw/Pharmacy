<?php

namespace App\DTO;

class DoctorProfileDTO{
    public function __construct(
        public string $namaLengkap,
        public string $NIK,
        public string $tanggalLahir,
        public string $jenisKelamin,
        public string $alamatLengkap,
        public string $nomorHP,
        public string $sip,
        public string $poli,
        public string $spesialis
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