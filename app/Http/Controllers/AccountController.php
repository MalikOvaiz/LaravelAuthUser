<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccountController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$error=false;
		$message=[];
		$account=new \App\Account;
		if(\Request::has('name') )
		{
    		$account->name=\Request::get('name');
    	}else{$error=true;$message[]="Parameter Name not found";}
    	if(\Request::has('cnic') )
		{
    		$account->cnic=\Request::get('cnic');
    	}else{$error=true;$message[]="Parameter CNIC not found";}
    	if(\Request::has('uid') )
		{
    		$account->uid=\Request::get('uid');
    	}else{$error=true;$message[]="Parameter UID not found";}

    	if($error==false)
    	{
    		$account->save();
    	}

  		return \Response::json(array('error' => $error,'message' =>$message),200);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
