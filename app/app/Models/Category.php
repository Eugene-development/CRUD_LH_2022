<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'category';

    protected $primaryKey = 'uuid';

    public function getKeyType()
    {
        return 'string';
    }


    public function product(): MorphMany
    {
        return $this->morphMany(Product::class, 'parentable');
    }

    public function parentable(): MorphTo
    {
        return $this->morphTo();
    }

}
