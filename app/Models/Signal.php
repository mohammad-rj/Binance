<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signal extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mark',
        'mode',
        'receivetime',
        'entrymin',
        'entrymax',
        'firstprofit',
        'secondprofit',
        'thirdprofit',
        'lossprofit',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
    ];
}
