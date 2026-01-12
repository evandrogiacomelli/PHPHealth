<?php

class PatientSocialSecurity
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
        return preg_replace('/\D/', '', $value);
    }
    private static function validate(string $value): void {

        //implementar uma validação melhor aqui.
        if (strlen($value) != 11) {
            throw new \InvalidArgumentException("Value must be 11 digits");
        }
    }

    public function toString(): string {
        return $this->value;
    }
}