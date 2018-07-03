<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use App\Business;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BusinessesController extends Controller
{
    public function index()
    {


        $limit = 6;

        $mostPopular = Business::selectData()->withCount(['orders'])->orderBy('orders_count', 'desc')->limit($limit)->get();

        $mostProfitable = Business::selectData()->orderBy('roi', 'desc')->limit($limit)->get();

        $jobs_created = DB::table('cms_settings')->where('name', 'jobs_created')->first()->content;

        $lives_impact = DB::table('cms_settings')->where('name', 'lives_impacted')->first()->content;

        return view('main', [     'mostPopular' => $mostPopular,
                                        'mostProfitable' => $mostProfitable,
                                        'jobs_created' => $jobs_created,
                                        'lives_impact' => $lives_impact
            ]);


    }

    public function show()
    {
        $businesses = Business::latest()->paginate(12);
        if(Auth::guest()) return redirect('login');
        else return view('parts.businesses', ['businesses' => $businesses]);



    }

    public function viewBusiness($id)
    {
        $business = Business::find($id);
        if(Auth::guest()) return redirect('login');
        else return view('parts.show_business', ['business' => $business]);
    }


}
