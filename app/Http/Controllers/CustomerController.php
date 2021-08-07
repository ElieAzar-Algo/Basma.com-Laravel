<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Carbon\Carbon;


class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($items)
    {
        
        if (request()->has('field') && request()->has('search'))
        {
            $field = request()->field;
            $search = request()->search;

            $customers = Customer::where($field, 'LIKE', '%'.$search.'%')
            ->orderBy('id','desc')
            ->paginate($items)
            ->appends([
                'field'=> request('field'),
                'search'=> request('search')
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
    public function store(Request $request)
    {
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

    public function getAverage($range)
    {
        
        $customer = Customer::where('created_at', '>', Carbon::now()->subDays($range))->count(); 
        
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

        if ($customer)
        {
            return response()->json([

                'success' => true,
                'message' => 'Operation succeeded',
                'total'    => $customer,
                'average'    => $average,
                'time_frame'    => $timeFrame,
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
