<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;


class Seoquery extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'seoquery';

    public function position(): MorphMany
    {
        return $this->morphMany(Position::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }
}
