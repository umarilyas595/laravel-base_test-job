<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\User;

class PagesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) { 
        $province = $request->input('province');
        
        //Validate Phone Number
        Validator::extend('CanadaPhone', function($attribute, $value, $parameters) {
            $pattern = "/^(?:\(\d{3}\)|\d{3}-)\s?\d{3}-\d{4}$/";
            $match = preg_match($pattern, $value);
            return $match;
        });
        
        //Validate Postal Codes
        Validator::extend('CanadaPostCode', function($attribute, $value, $parameters) {
            $pattern = "/^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$/";
            $match = preg_match($pattern, $value);
            return $match;
        });
        
        //Validate Salery Values
        Validator::extend('Pricevalidate', function($attribute, $value, $parameters) {
            $pattern = "/^[+-]?[0-9]{1,3}(?:[0-9]*(?:[.,][0-9]{2})?|(?:,[0-9]{3})*(?:\.[0-9]{2})?|(?:\.[0-9]{3})*(?:,[0-9]{2})?)$/";
            $match = preg_match($pattern, $value);
            return $match;
        });
        
        //Validate Extra Salery Values
        Validator::extend('PriceExtravalidate', function($attribute, $value, $parameters) {
            $pattern = "/^[+-]?[0-9]{1,3}\s?(?:[0-9]*(?:[.,][0-9]{2})?|(?:,[0-9]{3})*(?:\.[0-9]{2})?|(?:\.[0-9]{3})*(?:,[0-9]{2})?)$/";
            $match = preg_match($pattern, $value);
            return $match;
        });
        
        
        $rules = array(
            'name' => 'required|min:2',
            'province' => 'required',
            'phone' => 'required|CanadaPhone',
            'postal_code' => 'required|CanadaPostCode'
        );
        
        //For Salery Conditional Validation
        if ($province == 'Québec') {
            $rules['salary'] = 'required|PriceExtravalidate';
        } else {
            $rules['salary'] = 'required|Pricevalidate';
        }

        $messages = array(
            '*.required' => 'This is required field.',
            'name.min' => 'Name must be longer then 2 charecter.',
            'phone.canada_phone' => 'allowed formats = (416) 123-4567 OR (416)123-4567 OR 416-123-4567',
            'postal_code.canada_post_code' => 'Please enter a valid canada post code.',
            'salary.pricevalidate' => 'Please enter a valid amount format.',
            'salary.price_extravalidate' => 'Please enter a valid amount format.'
        );
        //Call Request Validator
        $this->validate($request, $rules, $messages);

        //Save User

        $update_user = $request->input('user_id');
        
        if(empty($update_user)){
            $user = new User();
        }else{
            $user = User::find($update_user);
        }

        $user->name = $request->input('name');
        $user->province = $request->input('province');
        $user->phone = $request->input('phone');
        $user->postal_code = $request->input('postal_code');
        $user->salary = $request->input('salary');
        $user->save();

        return view('info_success', ['data' => $user, 'message' => 'Your data is saved.Go to listing page to see.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show() {
        return view('add_info');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $user_data = User::find($id);
        return view('edit_info', ['data' => $user_data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id) {

        $user = User::find($user_id);

        if ($user) {
            $user->delete();
            return response()->json(['status' => 'success', 'message' => 'User deleted successfully.']);
        } else {
            return response()->json(['status' => 'error', 'message' => 'User deleted successfully.']);
        }
    }

    public function productList(Request $request) {
        $users = User::paginate(10);
        if ($request->ajax()) {
            return view('pre_user_result', compact('users'));
        }
        return view('userlist', compact('users'));
    }

}
