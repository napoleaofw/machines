<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Userstamps;
use App\Models\Machine;
use App\Models\Transaction;
use App\Models\User;

class Establishment extends Model
{
    use Userstamps;

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

    /**
     * Get the fiscal user that owns the establishment.
     */
    public function fiscal()
    {
        return $this->belongsTo(User::class, 'fiscal_user_id');
    }

    /**
     * Get the machines for the establishment.
     */
    public function machines()
    {
        return $this->hasMany(Machine::class, 'establishment_id');
    }

    /**
     * Get the transactions for the establishment.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'establishment_id');
    }
}
