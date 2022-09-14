<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;

final class CreateCategory
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $data = [
            'uuid' => $args['uuid'],
            'key' => $args['key'],
            'value' => $args['value'],
            'slug' => \Str::slug($args['value']),
        ];

        return Category::create($data);
    }
}
