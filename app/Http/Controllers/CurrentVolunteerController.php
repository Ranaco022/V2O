<?php

namespace App\Http\Controllers;

use App\Volorg;
use App\Model\CurrentVolunteer;
use Illuminate\Http\Request;

class CurrentVolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         $currentvolunteers = CurrentVolunteer::with('volorg')->get();
       // $currentvolunteers = CurrentVolunteer::all();
        return view('currentvolunteer/index')->with('currentvolunteers', $currentvolunteers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('currentvolunteer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        CurrentVolunteer::create([
                'lastName' => $request->lastName,
                'firstName' => $request->firstName,
                'homeAddress' => $request->homeAddress,
                'cellNumber' => $request->cellNumber,
                'emailAddress' => $request->emailAddress,
                'hoursWorked' => $request->hoursWorked,
                'comment' => $request->comment
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
        $currentvolunteer = CurrentVolunteer::findOrFail($id);
        return view('currentvolunteer/show')->with('currentvolunteer', $currentvolunteer);
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
        $currentvolunteer = CurrentVolunteer::findOrFail($id);
        return view('currentvolunteer/edit')->with('currentvolunteer', $currentvolunteer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $currentvolunteer = CurrentVolunteer::find($id);

        //var_dump($interest);
        $currentvolunteer->firstName = $request->firstName;
        $currentvolunteer->lastName = $request->lastName;
        $currentvolunteer->homeAddress = $request->homeAddress;
        $currentvolunteer->cellNumber = $request->cellNumber;
        $currentvolunteer->emailAddress = $request->emailAddress;
        $currentvolunteer->hoursWorked = $request->hoursWorked;
        $currentvolunteer->comments = $request->comments;
        $currentvolunteer->save();

        //var_dump($interest);
        return redirect ('/currentvolunteer/'.$id);
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
        $currentvolunteer = CurrentVolunteer::findOrFail($id);
        $currentvolunteer->delete();
        return redirect()->back();
    }
}
