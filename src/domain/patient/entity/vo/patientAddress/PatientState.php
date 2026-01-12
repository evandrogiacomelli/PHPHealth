<?php

namespace Domain\Patient\Entity\VO\PatientAddress;

class PatientState
{
    private string $value;

    private function __construct(string $value) {
        $this->value = $value;
    }

    public static function create(string $value) {
        $normalized = self::normalize($value);
        self::validate($normalized);
        return new self($normalized);
    }

    private static function normalize(string $value): string {
        return strtoupper(trim($value));
    }
    private static function validate(string $value): void {
        if (!preg_match('/^[A-Z]{2}$/', $value)) {
            throw new \InvalidArgumentException('State must be a 2-letter UF');
        }
    }

    public function toString(): string {
        return $this->value;
    }
}
