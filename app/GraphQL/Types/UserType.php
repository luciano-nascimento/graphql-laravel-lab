<?php

declare(strict_types=1);

namespace App\GraphQL\Types;

use Rebing\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;
use App\Models\User;

class UserType extends GraphQLType
{
    protected $attributes = [
        'name' => 'User',
        'description' => 'A type',
        'model' => User::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'O id do usuário no banco'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'O nome do usuário no banco'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'O email do usuário no banco'
            ]
        ];
    }
}
