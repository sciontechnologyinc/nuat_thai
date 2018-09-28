<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branches;
use App\User;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    /**
     *  Only authenticated users can access this controller
     */
    public function __construct(){
        $this->middleware('auth');
    }
    
    /**
     * Show Dashboard View
     *
     * @return View
     */
    public function index(){
        
        $t_branches = Branches::all()->count();
        $t_users = User::all()->count();


        return view('dashboard.index')
            ->with([
                't_branches'                =>  $t_branches,
  
            ]);
    }

    /**
     *  get the sub month of the given integer
     */
    private function getPrevDate($num){
        return Carbon::now()->subMonths($num)->toDateTimeString();
    }
}
