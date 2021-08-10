<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests\AddCustomerValidation;
use Illuminate\Support\Facades\Log;


class CustomerController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($items){
    
        if (request()->has('field') && request()->has('search'))
        {
            $field = request()->field;
            $search = request()->search;

            $customers = Customer::where($field, 'LIKE', '%'.$search.'%')
            ->orderBy('id','desc')
            ->paginate($items)
            ->appends([
                'field'  => request('field'),
                'search' => request('search')
                ]);
        }
        else 
        {
            $customers = Customer::orderBy('id','desc')
            ->paginate($items);
        }

        if($customers)
        {
            return response()->json([

                'success' => true,
                'message' => 'Operation succeeded',
                'data'    => $customers,
            ],200);
        }
        else
        {
            return response()->json([

                'success' => false,
                'message' => 'Operation failed',
            ],500);
        }
    }





    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddCustomerValidation $request){
        
        Log::info($request->all());
        // dd();
        $customer = new Customer;
        $customer->fill($request->all());
        
        if ($customer->save())
        {
            return response()->json([

                'success' => true,
                'message' => 'Operation succeeded',
                'data'    => $customer,
            ],200);
        }
        else
        {
            return response()->json([

                'success' => false,
                'message' => 'Operation failed',
            ],500);
        }
    }





    public function getAverage($range){

        $all_customers = Customer::count();
        $customers_data = Customer::where('created_at', '>', Carbon::now()->subDays($range))->get('created_at'); 
        $customer = $customers_data->count();
        
        if($range == 1)
        {
            $average = $customer / 24;
            $timeFrame = 'Per Hour';
        }
        elseif($range == 7)
        {
            $average = $customer / 7;
            $timeFrame = 'Per Day';

        }
        elseif($range == 30)
        {
            $average = $customer / 4;
            $timeFrame = 'Per Week';

        }
        elseif($range == 90)
        {
            $average = $customer / 3;
            $timeFrame = 'Per Month';
        }
        elseif($range == 365)
        {
            $average = $customer / 12;
            $timeFrame = 'Per Month';
        }

        if ($customers_data)
        {
            return response()->json([

                'success'    => true,
                'message'    => 'Operation succeeded',
                'data'       => $customers_data,
                'total'      => $customer,
                'average'    => $average,
                'time_frame' => $timeFrame,
                'all_customers' => $all_customers,
            ],200);
        }
        else
        {
            return response()->json([

                'success' => false,
                'message' => 'Operation failed',
            ],500);
        }
    }
}
