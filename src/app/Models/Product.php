<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'product';

    public function property(): MorphMany
    {
        return $this->morphMany(Property::class, 'parentable');
    }

    public function price(): MorphMany
    {
        return $this->morphMany(Price::class, 'parentable');
    }

    public function unit(): MorphOne
    {
        return $this->morphOne(Unit::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
