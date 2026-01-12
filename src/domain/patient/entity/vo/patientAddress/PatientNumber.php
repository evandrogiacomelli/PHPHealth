<?php

class PatientNumber
{
    private string $value;

    private function __construct(string $value) {
        $this->value = $value;
    }

    public static function create(string $value): self {
        $normalized = self::normalize($value);
        self::validate($normalized);
        return new self($normalized);
    }

    private static function normalize(string $value): string {
        $value = strtoupper(trim($value));
        return preg_replace('/\s+/', ' ', $value);
    }

    private static function validate(string $value): void {
        if ($value === '') {
            throw new \InvalidArgumentException('Street number cannot be empty');
        }

        // rever essa validação, "123, 45A, 12-B, S/N"
        // e se não tiver número?
        if (!preg_match('/^\d+([A-Z]|-[A-Z])?$/', $value)) {
            throw new \InvalidArgumentException('Invalid street number');
        }
    }

    public function toString(): string {
        return $this->value;
    }
}