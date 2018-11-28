<?php

namespace App\Http\Controllers;



use App\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:volunteer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $volunteers = Volunteer::with('volorg')->get();
        foreach ($volunteers as $volunteer)

		{
            echo $volunteer->volorg->name;


        }
        return view('volunteer/index')->with('volunteers', $volunteers);;
    }
}
