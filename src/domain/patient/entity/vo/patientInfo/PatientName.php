<?php

class PatientName
{
    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public static function create(string $value): self {
        self::validate($value);
        return new self($value);
    }

    private static function validate(string $value): void {
       if ($value == '') {
           throw new InvalidArgumentException('Name cannot be empty');
       }
    }

    public function toString(): string {
        return $this->value;
    }

}