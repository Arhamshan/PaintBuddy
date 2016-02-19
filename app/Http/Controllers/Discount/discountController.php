<?php

namespace App\Http\Controllers\Discount;

use DB;
use Illuminate\Http\Request;
use auth; 
use App;
use App\User;
use Illuminate\Foundation\Validattion\ValidateRequests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Support\MessageBag;
use App\Http\Controllers\Discount\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\HttpResponse;
use Illuminate\Http\Request\CreateRegisterRequest;
use Illuminate\Routing\Route;
use Mail;
use Illuminate\Routing\Redirector;
use Session;



class discountController extends Controller{
	public function discount(){
		$item = DB::table('items')->select('itName')->get();
		$tday1 = date('Y-m-d');	
		$td = 0;
		$id = 1;
		DB::table('discount')->where('edate', '<', $tday1)->delete();
       	return view('pages/Discount/discountpage16', ['item' => $item, 'td' =>$td, 'id' => $id ]);
	}

	public function addDiscount(Request $request){
		$table1 = null; 
		$td = 0;
		$id =1;
		$item = DB::table('items')->select('itName')->get();
		$validate = validator::make(input::all(), array('Percentage' => 'required|numeric|min:5|max:75', 'start_date' => 'required|date', 'end_date' => 'required|date|after:start_date' ));
		if ($validate->fails()) 
		{
			
			return view('pages\Discount\discountpage16', ['table2' => $table1, 'item' => $item, 'td'=> $td, 'id'=>$id])->withErrors($validate);
		}

		else{
			
			$icat= $request->input('itmcat');
			$disctyp= $request->input('disctyp');
			$Percentage= $request->input('Percentage');
			$sdate= $request->input('start_date');
			$edate= $request->input('end_date');

			$imag = DB::table('items')->where('itName', '=', $icat)->value('imPath');  // get the datadabase
			
			$itid = DB::table('items')->where('itName', '=', $icat)->value('itID');  // get the datadabase
			
			$price = DB::table('items')->where('itName', '=', $icat)->value('price');
			$iprice;

			$disc = ($Percentage/100.0)*$price;
			$iprice= $price-$disc;

			$itemid = DB::table('discount')->select('itid')->get();

			foreach($itemid as $itemid1) 
			{//dd($itemid1);

				if($itid= $itemid1) {
					$id = 0;
					return view('pages\Discount\discountpage16', ['table2' => $table1, 'item' => $item, 'td'=> $td, 'id' => $id])->withErrors($validate);;
				}

			}

			$id = 1;
			$td = DB::table('discount')->insert(array('iname'=>$icat, 'dtype'=>$disctyp, 'ipersentage'=>$Percentage, 'iprice'=>$iprice, 'imgpath'=>$imag, 'sdate'=>$sdate, 'edate'=>$edate, 'itid' => $itid));
			//print_r($td);	
			return view('pages\Discount\discountpage16', ['table2' => $table1, 'item' => $item, 'td'=> $td, 'id' => $id])->withErrors($validate);;
		}
}

	public function viewDiscount(Request $request){
   	
		$table1 = DB::table('discount')->get();
		$item = DB::table('items')->select('itName')->get();
		$td = 0;
		$id = 1;
		$validate = validator::make(input::all(), array());
        return view('pages\Discount\discountpage16', ['table2' => $table1, 'item' => $item, 'td' => $td, 'id' => $id])->withErrors($validate);
    	//dd($table1);
		//pri}nt_r($table1[0]->did);deleteDiscount
	}
	public function displaydiscount(){
		$tday1 = date('Y-m-d');	
		DB::table('discount')->where('edate', '<', $tday1)->delete();
		$end = DB::table('discount')->select('edate')->first();
		$tday = date('Y-m-d');
		$diplaydisc = DB::table('items')->join('discount', 'discount.itid', '=', 'items.itID')->select('items.price', 'discount.iprice', 'discount.imgpath', 'discount.ipersentage', 'discount.edate' )->get();
		return View('pages/Discount/displaydiscount9', ['diplaydisc' => $diplaydisc]); //'iprice1' => $iprice1, 'dprice1' => $dprice1, 'did1' => $did1, 'end' => $end, 'tday' => $tday]);
	}

	public function viewpromotion(){
		return View('pages/Discount/viewPromotion4');

	}
	
	public function registerpromotion(){
		$validate2 = null; // validator::make(input::all(), array('fname' => 'required', 'lname' => 'required', 'email' => 'required|email', 'contact_number' => 'required', 'address' => 'required' ));

			if ($validate2->fails()) {
				return view('pages\Discount\registerpromotion9')->withErrors($validate2);
			}

		}
	public function enterpromotion(){
		$validate2 =  validator::make(input::all(), array('fname' => 'required')); //, 'lname' => 'required', 'email' => 'required|email', 'contact_number' => 'required', 'address' => 'required' ));
			if ($validate2->fails()) {
				return view('pages\Discount\registerpromotion9')->withErrors($validate2);
	    	
			}
	}


public function regpromotion(Request $request){
		$validate2 = validator::make(input::all(), array('first_name' => 'required|alpha_num', 'last_name' => 'required|alpha_num', 'email' => 'required|email', 'contact_number' => 'required|max:10', 'address' => 'required' ));
		if ($validate2->fails()) {
			return view('pages\Discount\registerpromotion9')->withErrors($validate2);
    	
		}
		
			$fname= $request->input('first_name');
			$lname= $request->input('last_name');
			$email= $request->input('email');
			$cno= $request->input('contact_number');
			$address= $request->input('address');

			$rp = DB::table('regpromotion')->insert(array('fname'=>$fname, 'lname'=>$lname, 'email'=>$email, 'phone'=>$cno, 'address'=>$address ));
		
			echo "Validation Passed";
	
	}



	public function assigndiscount(){
		
		return View('pages/Discount/assignPromotion1');

}
}







#DB::table('name')->groupBy('column')->get()
