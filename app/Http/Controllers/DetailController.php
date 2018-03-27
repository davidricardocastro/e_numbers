<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ENumber;

class DetailController extends Controller
{
    public function show($id)
    {
        $view = view('detail');
        
        $enumber = ENumber::findOrFail($id);
        
        $view->enumber = $enumber;       
        
        return $view;
    }


}
