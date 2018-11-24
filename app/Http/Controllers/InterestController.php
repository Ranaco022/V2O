<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Interest;
use App\Http\Controllers\User;
use App\Http\Requests\InterestCreateRequest;

class InterestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		/*$interests = User::find(1)->vointerests;
		
		foreach ($interests as $interest)
		
		{
			echo "His interest: ". $interest->name;
		}*/
		$interests = Interest::all();
		return view('interest/index')->with('interests', $interests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('interest/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InterestCreateRequest $request)
    {
        //
		Interest::create([
			'lastName' => $request->lastName,
			'firstName' => $request->firstName,
			'email' => $request->email,
			'interest' => $request->interest
			]
		);
		return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		
		$interest = Interest::findOrFail($id);
		return view('interest/show')->with('interest', $interest);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$interest = Interest::findOrFail($id);
		return view('interest/edit')->with('interest', $interest);
		
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InterestCreateRequest $request, $id)
    {
        //
		$interest = Interest::find($id);
		
		//var_dump($interest);
		$interest->firstName = $request->firstName;
		$interest->lastName = $request->lastName;
		$interest->email = $request->email;
		$interest->interest = $request->interest;
		$interest->save();
		
		//var_dump($interest);
		return redirect ('/interest/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$interest = Interest::findOrFail($id);
		$interest->delete();
		return redirect()->back();
    }
}
