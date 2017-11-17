<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Userstamps;
use App\Models\Machine;
use App\Models\Establishment;

class Transaction extends Model
{
    use Userstamps;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'TRANSACTION_TBL';
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'establishment_id',
        'machine_id',
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
        'establishment_id',
        'machine_id',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the machine that owns the transaction.
     */
    public function machine()
    {
        return $this->belongsTo(Machine::class, 'machine_id');
    }

    /**
     * Get the establishment that owns the transaction.
     */
    public function establishment()
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }
}
