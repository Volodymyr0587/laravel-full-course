<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    // use HasFactory;

    // protected $table = 'foobar';
    // protected $primaryKey = 'uuid';

    public $incrementing = false;

    // protected $connection = 'second';

    protected $fillable = [
        'id', 'name',
    ];

    // protected $guarded = [];

    // protected $hidden = [
    //     'price'
    // ];

    // protected $casts = [
    //     'price' => 'float',
    //     'active' => 'boolean',
    //     'sort' => 'integer',
    //     'active_at' => 'date',
    // ];

    // protected $dates = [
    //     'active_at',
    // ];
}
