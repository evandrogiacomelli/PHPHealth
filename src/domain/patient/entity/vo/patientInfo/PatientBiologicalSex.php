<?php

namespace Domain\Patient\Entity\VO\PatientInfo;

class PatientBiologicalSex
{
    private const MALE = 'male';
    private const FEMALE = 'female';
    private const INTERSEX = 'intersex';
    private const UNKNOWN = 'unknown';

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function create(string $value): self
    {
        $normalized = strtolower(trim($value));
        self::validate($normalized);

        return new self($normalized);
    }

    private static function validate(string $value): void
    {
        if (!in_array($value, self::allowed(), true)) {
            throw new \InvalidArgumentException('Invalid biological sex');
        }
    }

    private static function allowed(): array
    {
        return [
            self::MALE,
            self::FEMALE,
            self::INTERSEX,
            self::UNKNOWN,
        ];
    }

    public function toString(): string
    {
        return $this->value;
    }
}
