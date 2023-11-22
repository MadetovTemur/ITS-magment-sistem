<?php 


namespace App\Validator;

class Validator
{
	private array $errors = [];

    private array $data;

    public function validate(array $data, array $rules): bool
    {
        $this->errors = [];
        $this->data = $data;

        foreach ($rules as $key => $rule) {
            $rules = $rule;

            foreach ($rules as $rule) {
                $rule = explode(':', $rule);

                $ruleName = $rule[0];
                $ruleValue = $rule[1] ?? null;

                $error = $this->validateRule($key, $ruleName, $ruleValue);

                if ($error) {
                    $this->errors[$key][] = $error;
                }
            }
        }

        return empty($this->errors);
    }

    public function errors(): array
    {
        return $this->errors;
    }

    private function validateRule(string $key, string $ruleName, string $ruleValue = null): string|false
    {
        $value = $this->data[$key];

        switch ($ruleName) {
            case 'required':
                if (empty($value)) {
                    return "<div class='alert alert-danger' role='alert'> Field $key is required </div>";
                }
                break;
            case 'min':
                if (strlen($value) < $ruleValue) {
                    return "<div class='alert alert-danger' role='alert'> Field $key must be at least $ruleValue characters long </div>";
                }
                break;
            case 'max':
                if (strlen($value) > $ruleValue) {
                    return "<div class='alert alert-danger' role='alert'> Field $key must be at most $ruleValue characters long </div>";
                }
                break;
            case 'email':
                if (! filter_var($value, FILTER_VALIDATE_EMAIL)) {
                    return "<div class='alert alert-danger' role='alert'> Field $key must be a valid email address </div>";
                }
                break;
            case 'confirmed':
                if ($value !== $this->data["{$key}_confirmation"]) {
                    return "<div class='alert alert-danger' role='alert'> Field $key must be confirmed </div>";
                }
                break;
            case 'sum':
                # todo
                break;
        }

        return false;
    }
}