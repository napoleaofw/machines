<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Userstamps;
use App\Models\Establishment;
use App\Models\Transaction;

class Machine extends Model
{
    use Userstamps;
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'MACHINE_TBL';
    
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'establishment_id',
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
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the establishment that owns the machine.
     */
    public function establishment()
    {
        return $this->belongsTo(Establishment::class, 'establishment_id');
    }

    /**
     * Get the transactions for the machine.
     */
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'machine_id');
    }
}
