<?php

declare(strict_types=1);

namespace App\GraphQL\Inputs\User;

use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\InputType;

class UserInput extends InputType
{
    protected $attributes = [
        'name' => 'UserInput',
        'description' => 'An example input',
        'isOneOf' => false,
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::int(),
            ],
        ];
    }
}