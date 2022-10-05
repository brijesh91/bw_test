<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function index()
    {
        $shapes = explode(',', env('SHAPES'));
        return view('step1', compact('shapes'));
    }

    public function step2(Request $request)
    {
        $data = $request->all();
        if (isset($data['shape']) && !empty($data['shape'])) {
            session(['shape' => ucwords($data['shape'])]);

            $config = config('shapesConfig');
            $shapeValues = [];

            if (isset($config) && !empty($config)) {
                if (array_key_exists($data['shape'], $config)) {
                    $shapeValues = $config[$data['shape']];
                    return view('step2', compact('shapeValues'));
                }
            }
        }

        $shapes = explode(',', env('SHAPES'));
        return view('dashboard', compact('shapes'));
    }

    public function step3(Request $request)
    {
        $data = $request->all();
        $shape = strtolower(session('shape'));
        $area = "";
        switch ($shape) {
            case 'rectangle':
                $area = ((float)$data['length'] * (float)$data['breadth']);
                session(['dynamicText' => 'length and breadth of '.$data['length'].','.$data['breadth']]); 
                break;
            case 'square':
                $area = (float)$data['side'] ** 2;
                session(['dynamicText' => 'side of '.$data['side']]); 
                break;
            case 'circle':
                $radius = (float)$data['diameter']/2;
                $area = (float)env('PI') * $radius ** 2;
                session(['dynamicText' => 'diameter of '.$data['diameter']]); 
                break;
            case 'ellipse':
                $area = (float)env('PI') * (float)$data['axis_1'] * (float)$data['axis_2'];
                session(['dynamicText' => 'axis_1 and axis_2 of '.$data['axis_1'].','.$data['axis_2']]); 
                break;
        }

        return view('step3', compact('area'));
    }
}
