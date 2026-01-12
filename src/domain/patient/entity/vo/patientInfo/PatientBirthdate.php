<?php

class PatientBirthdate
{
    private \DateTimeImmutable $value;

    private function __construct(\DateTimeImmutable $value)
    {
        $this->value = $value;
    }

    public static function create(string $value): self {

        try {
            $date = new \DateTimeImmutable($value);
        } catch (\Exception $e) {
            throw new \InvalidArgumentException('Invalid birthdate format.');
        }

        self::validate($date);

        return new self($date);
    }

    private static function validate(\DateTimeImmutable $value): void {
        $today = new \DateTimeImmutable('today');
        if ($value > $today) {
            throw new \InvalidArgumentException('Birthdate cannot be in the future.');
        }
    }

    public function age(): int {
        return $this->value->diff(new \DateTimeImmutable('today'))->y;
    }

    public function __toString(): string {
        return $this->value->format("Y-m-d");
    }
}