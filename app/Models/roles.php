<?php
/*
* roles.php
* Roles database collection
* @input :
* @output :
* Roles database collection
* @author : pisit namsiri 64160168
* @Create Date : 2023-04-07
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class roles extends Model
{
    use HasFactory;

    protected $table = 'roles';
    protected $primaryKey = 'role_id';
    protected $fillable = ['role_id', 'role_name'];

    /*
   * This function get all data and return that data.
   * @author : pisit namsiri 64160168
   * @Create Date : 2023-04-07
   */
    public function show_all_roles(): Collection
    {
        return DB::table('roles')->select('*')->get();
    }
}
