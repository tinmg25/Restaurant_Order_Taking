<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dishes = Dish::orderBy('id','desc')->get();
        return view('order_form',compact('dishes'));
    }

    public function submit(Request $request)
    {
        $request->all();
    }
}
