<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caseinfo;
use App\Workbasket;

class SelectController extends Controller
{
    public function simple()
    {
    	
    	//$todolist = Todolist::with('task_detail')->get();

    	//declare instances drpd modal Todolist
    	$caseinfo = Caseinfo::with('caseinfo')->get();

      $workBasketlList = Workbasket::with('caseinfo')->get();
    	// where
    	//$todolistWhere = Todolist::where('title','LIKE','%Test%')->where('status','In Progress')->get();

		// To make query in looping
		//value adalah setiap 1 row daripada todolist
		//todolist tu amik daripada todolist yg dah declare all kt atas

    	/*foreach ($todolist as $key => $value) {
    		//task_detail yg first tu kena sama nama dgn method yang dideclare dalam modal
    		//task_detail yang kedua tu tak kisah apa-2 sebab dia variable
    		foreach ($value->task_detail as $key => $task_detail) {
    			//task_detail dua dua nama variable
    			echo $task_detail->task_detail_id." -> ".$task_detail->details."<br>";
    		}
    	}*/

    	
    	foreach ($workBasketlList as $key => $workbasket) {
    		foreach ($workbasket as $key => $caseinfo) {
    			echo $workbasket->caseinfo->casetype."->".$workbasket->time."<br>";
    		}
    	}


    	dd($workBasketlList);
    }

    public function index()
    {
        //Akan keluar lazy load
        //$taskdetails = Task_detail::all();
        //Akan keluar eager load
        //$taskdetails = Task_detail::with('todolist')->get();

        //where untuk keluarkan details yg ada perkataan Deliver
        //$taskdetail = Task_detail::where('details','LIKE','%Deliver%')->get();

        $workbasket = Workbasket::with('caseinfo')->whereHas('caseinfo');

        return view('home', compact('workbasket'));

        
    }
}
