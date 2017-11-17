<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ESTABLISHMENT_TBL';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'fiscal_user_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'fiscal_user_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}
