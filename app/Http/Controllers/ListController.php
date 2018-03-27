<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ENumber;
class ListController extends Controller
{
    public function listing()
    {
      
            $view = view('list');

    
            
           $all_enumbers = Enumber::all();
            
            

            $view->enumbers = $all_enumbers;
    
            return $view;
            
        
    }
}
