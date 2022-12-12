<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    function show (visitor $visitor) {
        $visitor->visitsCounter()->increment();

        return view('', ['visitor' => $visitor]);
    }

//@php
//$visitor = new visitor();
//$visitor->show();
//@endphp

//<p class="invisible">{{ $visitor }}</p>-->
}
