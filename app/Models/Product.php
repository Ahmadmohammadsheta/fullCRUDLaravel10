<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'sale_price',
        'created_by',
        'upated_by',
    ];

    /**
     * @return Attribute;
     */
    protected function category(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["1", "2"][$value],
        );
    }

    /**
     * @return Attribute;
     */
    protected function createdBy(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  $value ? User::find($value)->name : 'self',
            set: fn ($value) =>  auth()->id() ?: '',
        );
    }

    /**
     * @return Attribute;
     */
    protected function updatedBy(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  $value ? User::find($value)->name : 'non',
            set: fn ($value) =>  auth()->id() ?: '',
        );
    }

}
