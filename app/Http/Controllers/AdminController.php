<?php

namespace App\Http\Controllers;

use App\User;
use App\meals_order;
use App\Adding_meals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    function admin_page(){
        return view('Admin.Admin_page');
    }

    //admin profile page
    function admin_profile(Request $request){
        $id = Auth()-> user()->id;
        $data = User::findOrFail($id);
        return view('Admin.admin_profile')->with('data',$data);
    }

    //Manage Premium User page
    function manage_user_level(){
        $datas = User::get();
        return view('Admin.manage_user_level')->with('data',$datas);
    }

    //Add meals page
    function add_meals(){
        return view('Admin.add_meals');
    }

    //Order lists page
    function order_lists(){
        $result = meals_order::get();
        return view('Admin.order_lists')->with('data',$result);
    }

    // Change Password
    function change_password(Request $request){

        $validator = Validator::make($request->all(), [
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $id = Auth()->user()->id;
        $old_password = $request->old_password;
        $new_password = $request->new_password;
        $confirm_password = $request->confirm_password;
        
       
        $data = User::findOrFail($id);
        if(!Hash::check($old_password,$data->password)){
            return back()->with('password','Old password does not match!');
        }else if($new_password !== $confirm_password){
            return back()->with('password','New password and Confirm password does not match!');
        }else if(!(strlen($new_password) >= 6 && strlen($confirm_password) >= 6)){
            return back()->with('password','Password length must be at least 6!');
        }else{
            $hash_make_password = Hash::make($new_password);
            $item = [
                'password' => $hash_make_password
            ];
            User::findOrFail($id)->Update($item);
            return back()->with('Pass_change','Change password completed!');
        }
    }

    // Update account
    function update_account(Request $request){
        $id = $request->id;
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number'=>$request->contact
        ];
        User::findOrFail($id)->update($data);
        return back()->with('update','Update Account Success!');
    }

    // delete user info
    function delete_user_info($id){
        User::findOrFail($id)->delete();
        return back()->with('delete_user_info','Delete Success!');
    }

    // update user info

    function update_user_info($id){
        $data = User::findOrFail($id);
        return view('admin.update_premium_user')->with('data',$data);
    }

    // update premium user info
    function update_premium_user_info(Request $request){
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'isAdmin'=> 'required',
            'premium' => 'required',
            'pro' => 'required',
            'starter' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect(url('update_user_info/'.$id))
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'isAdmin'=> $request->isAdmin,
            'premium_user' => $request->premium,
            'pro_user' => $request->pro,
            'starter_user' => $request->starter
        ];
        $premium = $request->premium;
        $Admin = $request->isAdmin;
        $pro = $request->pro;
        $starter = $request->starter;
        if(($premium==0 || $premium==1) && ($pro==0 || $pro==1) && ($starter==0 || $starter==1) && ($Admin==1 || $Admin==0)){
            User::findOrFail($id)->Update($data);
            return redirect()->route('manage_user_level')->with('update_premium_user_success',"Update Success!");
        }else{
            return back()->with('validation_error','1 or 0 must be fill in Admin field and Premium user field and Pro user fields and Starter user field!');
        }
    }

    //insert meals
    function insert_meals(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'photo' => 'required',
            'Price' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('add_meals')
                        ->withErrors($validator)
                        ->withInput();
        }

        $file = $request->file("photo");
        $filename = uniqid()."_" .$file->getClientOriginalName();
        $file->move(public_path().'/photos/',$filename);
        $data = [
            'user_id' => $request->user_id,
            'name' => $request->name,
            'photo' => $filename,
            'price' => $request->Price
        ];
        Adding_meals::create($data);
        return back()->with('success','Insert Meals Success');
    }

    // premium user page
        function premium_user(){
            return view('Admin.premium_user');
        }

    // upgrate to premium user
    function upgrate_to_premium_user(Request $request){
        $id = $request->user_id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'payment' => 'required',
            'premium_user' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('premium_user')
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = [
            'premium_user'=> $request->premium_user
        ];

        $payment = $request->payment;
        $item = [
            'card_number' => $request->payment
        ];
         if((strlen($payment)<16) || (strlen($payment)>16)){

            return back()->with('payment_error','Visa Card or Credit Card field must be 16 characters!');
        }else{

            User::findOrFail($id)->update($item);
        }
        $Premium = $request->premium_user;
        if($Premium==0 || $Premium==1){
            User::findOrFail($id)->update($data);
            return redirect()->route('premium_user')->with('success','Premium user upgrade success!!');
        }else{
            return back()->with('validation_error','1 or 0 must be fill in premium user field!');
        }   
        
    }
    // pro user page
    function pro_user(){
        return view('Admin.pro_user');
    }

    // upgrate to pro user
    function upgrate_to_pro_user(Request $request){
        $id = $request->user_id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'payment' => 'required',
            'pro_user' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('pro_user')
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = [
            'pro_user'=> $request->pro_user
        ];
        $payment = $request->payment;
        $item = [
            'card_number' => $request->payment
        ];
        if((strlen($payment)<16) || (strlen($payment)>16)){
            return back()->with('payment_error','Visa Card or Credit Card field must be 16 characters!');
        }else{

            User::findOrFail($id)->update($item);
        }
        $Pro = $request->pro_user;
        if($Pro==0 || $Pro==1){
            User::findOrFail($id)->update($data);
            return redirect()->route('pro_user')->with('success','Pro user upgrade success!!');
        }else{
            return back()->with('validation_error','1 or 0 must be fill in pro user field!');
        }   
        
    }
    // starter user page
    function starter_user(){
        return view('Admin.starter_user');
    }

    // upgrate to starter user
    function upgrate_to_starter_user(Request $request){
        $id = $request->user_id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'payment' => 'required',
            'starter_user' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('starter_user')
                        ->withErrors($validator)
                        ->withInput();
        }
        $data = [
            'starter_user'=> $request->starter_user
        ];
        $payment = $request->payment;
        $item = [
            'card_number' => $request->payment
        ];
        if((strlen($payment)<16) || (strlen($payment)>16)){
            return back()->with('payment_error','Visa Card or Credit Card field must be 16 characters!');
        }else{

            User::findOrFail($id)->update($item);
        }
        $Starter = $request->starter_user;
        if($Starter==0 || $Starter==1){
            User::findOrFail($id)->update($data);
            return redirect()->route('starter_user')->with('success','Starter user upgrade success!!');
        }else{
            return back()->with('validation_error','1 or 0 must be fill in starter user field!');
        }   
        
    }

}
