<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class vehicles extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $primaryKey = 'vehi_id';
    protected $fillable = ['vehi_id', 'vehi_type', 'vehi_registration', 'vehi_brand', 'vehi_color'];
}
