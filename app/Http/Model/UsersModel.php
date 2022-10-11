<?php
namespace App\Http\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;
class UsersModel extends \Eloquent implements Authenticatable
{
	use AuthenticableTrait;
    protected $table = 'users';
}
?>