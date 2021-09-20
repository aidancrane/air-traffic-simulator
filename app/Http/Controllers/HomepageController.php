<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class HomepageController extends Controller
{
  function Landing()
  {
    return view('landing');
  }

  function LandingCurrentSessions()
  {
    // Show current flight sessions
    //$sets = Set::where('owner_id', auth()->user()->id);
    //return datatables()->eloquent($sets)
    //->addColumn('flashcard_count', function (Set $set) {
    //    return count($set->flashcards()->get());
    //})
    //->toJson();
    return "";
  }

}
