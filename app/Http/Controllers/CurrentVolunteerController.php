<?php

namespace App\Http\Controllers;

Use Auth;
use App\Volorg;
use Illuminate\Support\Facades\DB;
use App\Model\CurrentVolunteer;
use Illuminate\Http\Request;

class CurrentVolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:volorg');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();

        $currentvolunteers = CurrentVolunteer::WHERE('volorg_id',$id)->get();


         //$currentvolunteers = CurrentVolunteer::with('volorg')->get();
       // $currentvolunteers = CurrentVolunteer::all();


        return view('currentvolunteer/index')->with('user', $id)->with('currentvolunteers', $currentvolunteers);
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
        $id = Auth::id();
        $currentvolunteer = CurrentVolunteer::WHERE('volorg_id',$id)->get();
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
        $user_id = Auth::id();
        $currentvolunteer = CurrentVolunteer::WHERE('volorg_id',$user_id)->get();
        echo $currentvolunteer;
        /*if ($id != $currentvolunteer->volorg_id) {
            return redirect('/vorlorg')->with('error', 'unauthorized Page');
        }*/

        return view('currentvolunteer/edit')->with('user',$user_id)->with('currentvolunteer', $currentvolunteer);
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
