<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Signup extends Controller
{
    public function index()
    {
        $customers = '';
        $url = url('/signup');
        $title = 'Signup';
        $data = compact('customers', 'url', 'title');
        return view('/auth/signup')->with($data);
    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',

                // process-1
                // 'password' => 'required|confirmed',
                // 'password_confirmation' => 'required',
                // process-2
                // 'password' => 'required',
                // 'password_confirmation' => 'required|same:password',
            ]
        );
        echo '<pre>';
        print_r($request->all());

        // insert query
        $user = new Customer();
        $user->name = $request['name'];
        $user->mobile = $request['mobile'];
        $user->email = $request['email'];
        $user->save();

        return redirect('/viewdata');
    }

    public function view()
    {
        $customers = Customer::all();
        // echo '<pre>';
        // print_r($customers->toArray());
        // die;
        $data = compact('customers');
        return view('viewdata')->with($data);
    }

    public function delete($id)
    {
        $customers = Customer::find($id);
        // echo '<pre>';
        // print_r($customers);
        if (!is_null($customers)) {
            $customers->delete();
        }
        return redirect()->back();
    }

    public function edit($id)
    {
        $customers = Customer::find($id);
        // echo '<pre>';
        // print_r($customers);
        if (is_null($customers)) {
            return redirect()->back();
        } else {
            $url = url('/update') . '/' . $id;
            $title = 'Update';
            $data = compact('customers', 'url', 'title');
            return view('/auth/signup')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'mobile' => 'required',
                'email' => 'required|email',
            ]
        );

        // update 
        $customers = Customer::find($id);
        $customers->name = $request['name'];
        $customers->mobile = $request['mobile'];
        $customers->email = $request['email'];
        $customers->save();

        return redirect('/viewdata');
    }
}
