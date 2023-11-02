<?php
/*
* cards.php
* Cards database collection
* @input :
* @output :
* Cards database collection
* @author : pisit namsiri 64160168
* @Create Date : 2023-04-07
*/
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class cards extends Model
{
    use HasFactory;

    protected $table = 'cards';

    protected $primaryKey = 'card_id';

    protected $fillable = ['card_id', 'card_is_active'];

    /*
   * This function get all data and return that data.
   * @author : pisit namsiri 64160168
   * @Create Date : 2023-04-07
   */
    public function show_all_cards(): Collection
    {
        return DB::table('cards')->select('*')->get();
    }
}
