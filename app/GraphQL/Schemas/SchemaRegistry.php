<?php 
namespace App\GraphQL\Schemas;

class SchemaRegistry
{
    public static function queries(): array
    {
        return [
            \App\GraphQL\Queries\User\UserList::class,
        ];
    }

    public static function mutations(): array
    {
        return [
            // \App\GraphQL\Mutations\User\CreateUserMutation::class,
        ];
    }

    public static function types(): array
    {
        return [
            // \App\GraphQL\Types\User\UserType::class,
        ];
    }
}