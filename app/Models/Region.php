<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Region extends Model
{
    protected $table = 'regions';

    use HasFactory;


    public $timestamps = false;

    public $incrementing = false;

    protected $fillable = [
        'id',
        'name',
        'arName',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function townships()
    {
        return $this->hasMany(Township::class);
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => LaravelLocalization::getCurrentLocale() === 'ar' ? $this->arName : $value,
        );
    }
}
