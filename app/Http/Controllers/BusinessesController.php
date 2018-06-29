<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Business;

class BusinessesController extends Controller
{
    public function index()
    {


        $limit = 6;

        $mostPopular = Business::selectData()->withCount(['orders'])->orderBy('orders_count', 'desc')->limit($limit)->get();

        $mostProfitable = Business::selectData()->orderBy('roi', 'desc')->limit($limit)->get();

        return view('main', ['mostPopular' => $mostPopular, 'mostProfitable' => $mostProfitable]);


    }
}
