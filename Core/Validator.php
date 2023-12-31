<?php

namespace Core;

class Validator
{
    protected array $errors = [];

    public function string(string $value, string $field, int $min = 1, float $max = INF ): void {
        if (strlen($value) < $min) {
            $this->errors[] = "$field needs to be longer than $min character(s)";
        } else if (strlen($value) > $max) {
            $this->errors[] = "$field needs to be shorter than $max characters";
        }
    }

    public function email(string $email): void {
        $result = filter_var($email, FILTER_VALIDATE_EMAIL);
        if (!$result) {
            $this->errors[] = "'$email' is not a valid email address";
        }
    }

    public function errors(): array
    {
        return $this->errors;
    }
}