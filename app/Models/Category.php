<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = ['name'];

    public function articles(): HasMany
    {
        return $this->hasMany(Articles::class);
    }

    public function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucwords($value),
            set: null,
        );
    }
}
