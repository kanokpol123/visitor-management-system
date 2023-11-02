<?php
/*
* users.php
* Users database collection
* @input :
* @output :
* Users database collection
* @author : pisit namsiri 64160168
* @Create Date : 2023-04-07
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class users extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $primaryKey = 'user_id';
    protected $fillable = ['user_id', 'user_role_id', 'user_name', 'user_username', 'user_password'];

    /*
    * This function ues select to get some data in attribute and
    * return that data for check login is vaild via UserController
    * @author : pisit namsiri 64160168
    * @Create Date : 2023-04-07
    */
    public function show_all_users(): Collection
    {
        return DB::table('users')->select('user_role_id','user_username', 'user_password')->get();
    }
}
