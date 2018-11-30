<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Auth;
use App\Model\CurrentVolunteer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Volorg;
use App\Volunteer;
use App\Model\VolunteerProfile;

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
        //$matched_volunteers = Volorg::with('volunteer')->get();
        //$matched_volunteers = //where('volorg_id',$id)->get();
        $volunteers = VolunteerProfile::with('volunteer')->get();
        $volorg = Volorg::findOrFail($id);
        //echo $volorg->required_skills;

       /* foreach ($volunteers as $volunteer)
        {
            $volunteer_interest1 = $volunteer->interest1;
            $volunteer_interest2 = $volunteer->interest1;
            $volorg_interest = $volorg->required_skills;

            if(($volunteer_interest1 == $volorg_interest) OR ($volunteer_interest2 == $volorg_interest) )
            {
                $matched_volunteers = $volunteer;
                echo $matched_volunteers;

            }

        }*/

        //$matched_volunteers = Volorg::with('volunteer')->get();

      /*  foreach($matched_volunteers as $matched_volunteer)
        {
           // echo $matched_volunteer->email;

        }*/
        $matched_volunteers = $volunteers;
        return view('matchedvolunteers')->with('matched_volunteers', $matched_volunteers)->with('volorg',$volorg);
    }


}
