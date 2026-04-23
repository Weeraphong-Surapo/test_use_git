<?php

declare(strict_types=1);

namespace App\GraphQL\Mutations\User;

use App\Models\User;
use Closure;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Illuminate\Support\Facades\Hash;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Mutation;

class CreateUser extends Mutation
{
    protected $attributes = [
        'name' => 'CreateUser',
        'description' => 'A mutation',
    ];

    public function type(): Type
    {
        return GraphQL::type('UserType');
    }

    public function args(): array
    {
        return [
            'input' => [
                'type' => GraphQL::type('UserInput'),
            ],
        ];
    }

    public function resolve($root, array $args, $context, ResolveInfo $resolveInfo, Closure $getSelectFields)
    {
        $input = $args['input'];

        $user = new User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        if (isset($input['password'])) {
            $user->password = Hash::make($input['password']);
        } else {
            $user->password = Hash::make('password123');
        }
        $user->save();

        return $user;
    }
}
