<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'product';

//    protected $primaryKey = 'uuid';
//
//    public function getKeyType()
//    {
//        return 'string';
//    }


    public function property(): MorphMany
    {
        return $this->morphMany(Property::class, 'parentable');
//        return $this->hasMany(Property::class);
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }

}
