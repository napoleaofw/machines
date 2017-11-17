<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Traits\Userstamps;
use App\Models\Establishment;
use App\Models\Machine;
use App\Models\Transaction;

class User extends Authenticatable
{
    use Notifiable, Userstamps;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'USER_TBL';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id',
        'password',
        'remember_token',
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
        'password',
        'remember_token',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    /**
     * Get the establishments for the fiscal user.
     */
    public function establishments()
    {
        return $this->hasMany(Establishment::class, 'fiscal_user_id');
    }

    /**
     * Get the created establishments by the user.
     */
    public function createdEstablishments()
    {
        return $this->hasMany(Establishment::class, 'created_by');
    }

    /**
     * Get the created machines by the user.
     */
    public function createdMachines()
    {
        return $this->hasMany(Machine::class, 'created_by');
    }

    /**
     * Get the created transactions by the user.
     */
    public function createdTransactions()
    {
        return $this->hasMany(Transaction::class, 'created_by');
    }

    /**
     * Get the created users by the user.
     */
    public function createdUsers()
    {
        return $this->hasMany(User::class, 'created_by');
    }

    /**
     * Get the updated establishments by the user.
     */
    public function updatedEstablishments()
    {
        return $this->hasMany(Establishment::class, 'updated_by');
    }

    /**
     * Get the updated machines by the user.
     */
    public function updatedMachines()
    {
        return $this->hasMany(Machine::class, 'updated_by');
    }

    /**
     * Get the updated transactions by the user.
     */
    public function updatedTransactions()
    {
        return $this->hasMany(Transaction::class, 'updated_by');
    }

    /**
     * Get the updated users by the user.
     */
    public function updatedUsers()
    {
        return $this->hasMany(User::class, 'updated_by');
    }
}
