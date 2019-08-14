<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class CommonReftableController extends Controller
{

	public function getReftableBM($reftablename)
	{

         $Refcode = DB::select('select refcode, descbm from reftable where tablerefcode = ? order by refcode', [$reftablename]);
	  

         return $Refcode;
	}

	public function getReftableEN($reftablename)
	{
		$Refcode = DB::select('select refcode, descen from reftable where tablerefcode = ? order by refcode', [$reftablename]);

       return $Refcode;
	}

	public function getValReftableBM($reftablename,$rcvVal)
	{

       $Refcode = DB::select('select refcode,descbm from  reftable where tablerefcode = ? and refcode = ?',[$reftablename,$rcvVal]) ;
       return $Refcode;
	}

	public function getValReftableEN($reftablename,$rcvVal)
	{

         $Refcode = DB::select('select refcode,descen from  reftable where tablerefcode = ? and refcode = ?',[$reftablename,$rcvVal]) ;

		return $Refcode;
	}

}