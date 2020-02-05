<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class User
 * @package App\Models
 * @version February 5, 2020, 12:58 pm UTC
 *
 * @property string name
 * @property integer role
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string image
 * @property string remember_token
 */
class User extends Model
{
    use SoftDeletes;

    public $table = 'users';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'role',
        'email',
        'email_verified_at',
        'password',
        'image',
        'remember_token'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'role' => 'integer',
        'email' => 'string',
        'email_verified_at' => 'datetime',
        'password' => 'string',
        'image' => 'string',
        'remember_token' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'role' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    
}
