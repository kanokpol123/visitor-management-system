<?php
/*
* v_login.blade.php
* Login by username and password.
* @input:
* @output:
* @author: Pisit Namsiri 64160168
* @Create Date: 2023-04-04;
*/
namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;


class user_controller extends Controller
{
    public function login(Request $req)
    {
        $username = $req->input('username');
        $password = $req->input('password');
        $usr = new users();
        $allusr = $usr->show_all_users();
        foreach ($allusr as $i) {
            if ($username === $i->user_username && $password === $i->user_password) {
                switch ($i->user_role_id) {
                    case 1:
                        $url = url('v_select_menu');
                        return redirect($url);
                    case 2:
                        $url = url('v_dashboard');
                        return redirect($url);
                }
            }
        }
        return view('v_login');
    }
}
