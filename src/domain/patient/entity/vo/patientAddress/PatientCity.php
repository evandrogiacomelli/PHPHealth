<?php

class PatientCity
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
        $value = trim($value);
        $value = preg_replace('/\s+/', ' ', $value);
        return $value;
    }

    private static function validate(string $value): void {
        if ($value === '') {
            throw new \InvalidArgumentException('city cannot be empty');
        }
        if (strlen($value) < 2) {
            throw new \InvalidArgumentException('city address must be at least 2 characters long');
        }
        if (strlen($value) > 60) {
            throw new \InvalidArgumentException('city address must be less than 60 characters long');
        }
    }

    public function toString(): string {
        return $this->value;
    }
}