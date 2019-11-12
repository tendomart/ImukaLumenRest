<?php
namespace App\Http\Controllers;
 
use App\Deals;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class DealsController extends Controller{
//Create a Deal
	public function createDeal(Request $request){
 
        $deals = Deals::Create($request->all());
    	return response()->json($deals);
 
	}
 

    //Return all deals
	public function getAllDeals(Request $request){
        return response()->json(['deals' =>  User::all()], 200);
        //$deals = Deals::find($request->all());
    	//return response()->json($deals);
 
	}
    //Update a deal
	public function updateDeal(Request $request, $id){
    	$deal  = Deals::find($id);
    	$deal->name = $request->input('name');
    	$deal->detail = $request->input('detail');
        $deal->company_name = $request->input('company_name');
        $deal->company_type=$request->input('company_type');
        $deal->industry=$request->input('industry');
        $deal->address=$request->input('address');
        $deal->phone=$request->input('phone');
        $deal->email=$request->input('email');
        $deal->amount_to_raise=$request->input('amount_to_raise');
        $deal->company_cover_photo=$request->input('company_cover_photo');
        $deal->company_details=$request->input('company_details');
        //checkboxes
        $deal->business_plan=$request->input('business_plan');
        $deal->memo_of_understanding=$request->input('memo_of_understanding');
        $deal->cert_of_registration=$request->input('cert_of_registration');
        $deal->financial_state=$request->input('financial_state');
        $deal->cash_flow=$request->input('cash_flow');
        $deal->contract_doc=$request->input('contract_doc');
        $deal->certified_audit_acc=$request->input('certified_audit_acc');
    	$deal->save();
 
    	return response()->json($deal);
	}  

    //Delete a deal
	public function deleteDeal($id){
    	$deal  = Deals::find($id);
    	$deal->delete();
 
    	return response()->json('Deal Removed successfully.');
	}

	public function index(){
 
    	$deals  = Deals::all();
 
    	return response()->json($deals);
 
	}
}
?>