<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use App\Business;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

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

    public function show(Request $request)
    {

        $request->validate([
            'offset' => 'nullable|integer',
        ]);

        $limit = 6;

        $businesses = Business::selectData()->orderBy('created_at', 'desc')->limit($limit);

        if ($request->input('offset')){
            $businesses = $businesses->offset($request->input('offset'));
        }

        $businesses = $businesses->get();

        $responseData = [
            'businesses' => $businesses,
            'count' => Business::getActiveCount(),
        ];

        if ($request->ajax()){

            $html = '';

            foreach($businesses as $business){

                $view = View::make('parts.business_preview', ['business' => $business]);
                $html .= $view->render();
            }

            return array_merge($responseData, ['html' => $html]);
        }

        return view('parts.businesses', $responseData);

    }

    public function viewBusiness($id)
    {
        $business = Business::find($id);
        if($business->id) return view('parts.show_business', ['business' => $business]);
        else return abort(404);

    }

    public function startBusiness($id )
    {

        $maxPrice = Business::getMaxPrice($id);
        $business = Business::find($id);
        if($business->id) return view('parts.start_business', ['business' => $business, 'maxPrice' => $maxPrice]);
        else return abort(404);
    }


}
