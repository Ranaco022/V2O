<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Auth;
use App\Model\CurrentVolunteer;
use App\Model\VolunteerProfile;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Volorg;
use App\Volunteer;

class VolorgController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:volorg');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $volorg = Volorg::with('currentvolunteer')->get();
        return view('volorg')->with('volorg', $volorg);
    }
    
    public function showMatched()
    {
        /*$matched_volunteers = DB::table('volunteers')
        ->join('volorgs', function ($join) {
        $join->on('volorgs.required_skills', '=', 'volunteer_profile.interest1')
            ->orOn('volorgs.required_skills', '=', 'volunteer_profile.interest2');

        })
            ->orderBy('volunteers.lastName')
            ->get();

        // ->orOn ('volorgs.required_skills', '=', 'volunteers.interest3')
            //->orOn('volorgs.required_skills', '=', 'volunteers.interest4')
            //->orOn('volorgs.required_skills', '=', 'volunteers.interest5');


        $unique = $matched_volunteers->unique('email');
        $unique->values()->all();*/
        $id = Auth::id();
        $volorg = Volorg::findOrFail($id);
        $volunteers = VolunteerProfile::with('volunteer')->get();
         echo $volorg;
        //$matched_volunteers = $volunteer;


        return view('matchedvolunteers')->with('volunteers', $volunteers)->with('volorg', $volorg);
    }


}
