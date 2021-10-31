<?php

namespace splittlogic\bs5extras\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

use splittlogic\pv\bs5extras;
use splittlogic\bs5\bs5;

class bs5extrasController extends Controller
{


  public function index ()
  {

    $x = new bs5;

    $content = 'BS 5 Extras';

    return view('bs5extras::blank',['content' => $content]);

  }


}
