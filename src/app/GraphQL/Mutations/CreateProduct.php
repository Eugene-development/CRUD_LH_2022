<?php

namespace App\GraphQL\Mutations;

use App\Models\Product;

final class CreateProduct
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
            'active' => $args['active'],
            'value' => $args['value'],
            'slug' => \Str::slug($args['value']),
        ];

        return Product::create($data);
    }
}
