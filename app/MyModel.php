<?php namespace App;

use Illuminate\Database\Eloquent\Model;

/**
* Created MyModel class
*/
class MyModel extends Model
{

	protected $fillable = ['name', 'phone', 'secretAttribute', 'password'];

	protected $hidden = ['secretAttribute', 'password'];
	
	function __construct(argument)
	{
		# code...
	}
}