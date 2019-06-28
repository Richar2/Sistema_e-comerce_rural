<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class UsersValidator.
 *
 * @package namespace App\Validators;
 */
class UsersValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'email_user' => 'required|unique:users,email_user'
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
