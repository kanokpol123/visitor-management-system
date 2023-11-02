<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class transactions extends Model
{
    use HasFactory;
    protected $table = 'transactions';
    protected $primaryKey = 'trans_id';
    protected $fillable = ['trans_id', 'trans_visitor_id', 'trans_vehi_id', 'trans_card_id', 'trans_user_id'
        , 'trans_company', 'trans_purpose', 'trans_remark' , 'trans_phone_number', 'trans_duration'
        , 'trans_check_out', 'trans_check_in'];

    public function get_role_count()
    {
        return DB::table('roles')
            ->selectRaw('count(*)')
            ->where('role_id', '=', 2)
            ->value('role_id');
    }
}
