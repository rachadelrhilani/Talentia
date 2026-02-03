<?php

namespace App\Http\Controllers;

use App\Models\Joboffer;
use Illuminate\Http\Request;

class JobController extends Controller
{
     public function index()
    {
        $jobs = Joboffer::where('is_closed', false)->latest()->get();
        return view('candidat.jobs.index', compact('jobs'));
    }

    public function show(Joboffer $job)
    {
        return view('candidat.jobs.show', compact('job'));
    }
}
