<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HelloworldController extends Controller
{
    /**
     * Show the helloworld page.
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $this->result='';
        if ($request->input('submit'))
        {
            $radius = $request->input('radius');
            $pi 	= 	3.14159;
	    $area1	= 	$pi * $radius * $radius;
	    $this->result = $area1;
            $input = $request->all();
        }
        $this->result1='';
        if($request->input('submit1'))
		{
			$base = $request->input('base');
			$height = $request->input('height');
			$this->result1 = ($base*$height)/2;
                        $input = $request->all();
		}
                return view('calculator_view')->withResult($this->result)->withResult1($this->result1);
    }
}