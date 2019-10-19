<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FasouliUser as User;
use App\UserContributions as UCauses;
use App\Causes as Causes;
use App\Company as Company;

class FasouliController extends Controller
{

	// Get user in fasouli
    public function getFasouli(){
    	$user = User::where('code','123456789')->first();

    	$causes = UCauses::all();

    	return view('client',['user'=>$user,'causes'=>$causes]);
    }

    public function postFasouli(Request $request){
	    $user = User::where('code','123456789')->first();
	    $causes = UCauses::all();

	    if ($request->envCheck == "envCheck"){
	    	$user->environment = 1;
	    }else{
	    	$user->environment = 0;
	    }

	    if ($request->healthCheck == 'healthCheck'){
	    	$user->health = 1;
	    }else{
	    	$user->health = 0;
	    }

	    if ($request->edCheck == 'edCheck'){
	    	$user->education = 1;
	    }else{
	    	$user->education = 0;
	    }

	    if ($request->anCheck == 'anCheck'){
	    	$user->animals = 1;
	    }else{
	    	$user->animals = 0;
	    }

	    if ($request->disCheck == 'disCheck'){
	    	$user->disasters = 1;
	    }else{
	    	$user->disasters = 0;
	    }

	    if ($request->hmCheck == 'hmCheck'){
	    	$user->homeless = 1;
	    }else{
	    	$user->homeless = 0;
	    }

	    $user->cause_amount = $request->cause_amount;
	    $user->fasouli_amount = $request->fasouli_amount;
	    $user->save();
	    return view('client',['user'=>$user,'causes'=>$causes]);
    }


    // NON-PROFIT VIEWS

    // Getting causes
    public function getNonProfit()
    {	
    	$past_causes = Causes::where("is_active","=",0)->get();
    	$active_causes = Causes::where("is_active","=",1)->get();

    	return view('nonprofit',['past_causes'=>$past_causes,'active_causes'=>$active_causes]);
    }

    // Creating a new cause
    public function postNonProfit(Request $request)
    {

      $category = "";
      if ($request->category == "Animals"){
        $category = "animals";
      }

      if ($request->category == "Global Disasters"){
        $category = "disasters";
      }

      if ($request->category == "Education"){
        $category = "education";
      }

      if ($request->category == "Environment"){
        $category = "environment";
      }

      if ($request->category == "Homeless"){
        $category = "homeless";
      }

      if ($request->category == "Health"){
        $category = "health";
      }
    	$cause = new Causes;
    	$cause->title = $request->title;
    	$cause->image = $request->thumbnail;
    	$cause->description = $request->description;
    	$cause->category = $category;
    	$cause->amount_asking = $request->amount;
    	$cause->amount_raised = 0;
    	$cause->is_active = 1;
    	$cause->save();

    	$past_causes = Causes::where("is_active","=",0)->get();
    	$active_causes = Causes::where("is_active","=",1)->get();

    	return view('nonprofit',['past_causes'=>$past_causes,'active_causes'=>$active_causes]);
    }

    // Store VIEWS
    public function postStoreBuy(Request $request)
    {
    	$user = User::where('code','123456789')->first();
      $user_contribution = new UCauses;
      $company = Company::where('name','=','Amazon')->first();    	

    	$my_causes = [];

  		if ($user->environment == 1){
  			$my_causes[] = "environment";
  		}

  		if ($user->education == 1){
  			$my_causes[] = "education";
  		}

  		if ($user->animals == 1){
  			$my_causes[] = "animals";
  		}

  		if ($user->disasters == 1){
  			$my_causes[] = "disasters";
  		}

  		if ($user->health == 1){
  			$my_causes[] = "health";
  		}

  		if ($user->homeless == 1){
  			$my_causes[] = "homeless";
  		}

  		// get random index from array $my_causes
  		$randIndex = array_rand($my_causes);

    	$donate_cause =  $my_causes[$randIndex]; // Use Algorithm in the future

    	$cause = Causes::where("is_active","=",1)
    							->where('category',"=",$donate_cause)
    							->first();

      $cause->amount_raised = $cause->amount_raised + $user->cause_amount*2 ;//company match;
      $cause->save();

      $uc = UCauses::where('title',$cause->title)->first();

      if($uc == null){
        $user_contribution->title = $cause->title;
        $user_contribution->image = $cause->image;
        $user_contribution->description = $cause->description;
        $user_contribution->save();
      }

      $matched = $donate_cause . "_matched";
      $company->$donate_cause = $company->$donate_cause + $user->cause_amount;
      $company->$matched  = $company->$matched + $user->cause_amount; // change to company cause amount later
      $company->save();

    	return view('/store');
    }


    // MERCHANT VIEW
    public function getMerchant()
    {
      $merchant = Company::where('name','=','Amazon')->first();
      $active_causes = Causes::where('is_active','=',1)->get();
      $past_causes = Causes::where('is_active','=',0)->get();

    	return view('merchant',['merchant'=>$merchant,'active_causes'=>$active_causes,'past_causes'=>$past_causes]);
    }
}
