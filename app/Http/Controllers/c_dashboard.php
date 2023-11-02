<?php

namespace App\Http\Controllers;

use App\Models\transactions;
use Illuminate\Http\Request;

class c_dashboard extends Controller
{
    /**
     * Display the number of return visitors.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function return_visitor ()
    {
        $transaction = new transactions();
        $roleCount = $transaction->get_role_count();
//        print_r($roleCount);
        return view('v_dashboard', ['roleCount' => $roleCount]);
    }

}
