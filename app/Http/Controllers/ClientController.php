<?php

namespace App\Http\Controllers;

use App\User;
use App\Adding_meals;
use App\meals_order;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //clients page
    function clients(){
        return view('client.clients');
    }

    //guest page
    function guest(){
        return view('client.guest');
    }

    //guest shop
    function guest_shop(){
        return view('client.guest_shop');
    }

    //user profile page
    function user_profile(){
        return view('client.user_profile');
    }

    //hungry page
    function hungry(){
        return view('client.hungry');
    }

    //shop page
    function shop(){
        // $id = auth()->user()->id;
        $data=Adding_meals::orderBy('id','desc')->get();
        return view('shops.shop')->with('data',$data);
    }


    // look meals page
    function look_meal(){
        $data=Adding_meals::orderBy('id','desc')->get();
        return view('client.look_meal')->with('data',$data);
    }

    // look content
    function look_content($id){
        $result = Adding_meals::findOrFail($id);
        return view('client.look_content')->with('data',$result);
    }

    // order info
    function order_info(Request $request){
        $id = auth()->user()->id;
        $user_id = $request->user_id;
        $a=User::findOrFail($user_id)->where('id',$user_id)->value('card_number');
        $data = [
            'user_id' => $user_id,
            'user_name' => $request->user_name,
            'email'=> $request->user_email,
            'address' => $request->user_address,
            'contact'=>$request->user_contact,
            'card_number'=>$a,
            'meals_id'=>$request->id,
            'meals_name'=>$request->name,
            'price'=>$request->price
        ];
        $item = [
            'order_user' => $request->id
        ];

        meals_order::create($data);
        User::findOrFail($id)->update($item);
        return redirect()->route('look_meal')->with('success','Order Success!!');
    }

    // delete order
    function delete_order($id){
        meals_order::findOrFail($id)->delete();
        return back()->with('delete','Delete Success!');
    }

    // user order lists
    function user_order_lists(){
        $id = auth()->user()->id;
        $result = meals_order::where('user_id',$id)->get();
        return view('client.user_order_lists')->with('data',$result);
    }


}
