<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $table="users";


    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'branchid',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */


    protected $casts = [
        'password' => 'string',
        'role' => 'string'
    ];

    public function isAdmin()
    {
        return $this->role === 'Admin';
    }
        public function isApprover()
    {
        return $this->role === 'Approver';
    }

    public function isEncoder()
    {
        return $this->role === 'Encoder';
    }
    public function getRoleAttribute($value)
    {
        return ucfirst($value);
    }
    public function getRoleAsString()
{
    return $this->isAdmin() ? 'Admin' : ($this->isApprover() ? 'Approver' : ($this->isEncoder() ? 'Encoder' : ''));
}
}
