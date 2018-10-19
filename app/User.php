<?php

/**
 * Created by Reliese Model.
 * Date: Thu, 18 Oct 2018 13:44:15 +0000.
 */

namespace App;

use Reliese\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class User
 * 
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 * @property string $gender
 * @property string $avatar
 * @property string $password
 * @property \Carbon\Carbon $last_login
 * @property \Carbon\Carbon $created_at
 *
 * @package App\Models
 */
class User extends Authenticatable
{
	protected $primaryKey = 'user_id';
	public $timestamps = false;

	protected $dates = [
		'last_login'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'phone',
		'email',
		'gender',
		'avatar',
		'password',
		'last_login'
	];
}
