<?php

namespace App\GraphQL\Mutations;

use App\Models\Property;

final class CreateProperty
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

        return Property::create($data);
    }
}
