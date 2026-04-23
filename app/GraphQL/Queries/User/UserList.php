<?php

declare(strict_types=1);

namespace App\GraphQL\Queries\User;

use App\Models\User;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Query;

class UserList extends Query
{
    protected $attributes = [
        'name' => 'UserList',
        'description' => 'A query',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('UserType'));
    }

    public function args(): array
    {
        return [

        ];
    }

    public function resolve($root, array $args)
    {

        return User::all();
    }
}