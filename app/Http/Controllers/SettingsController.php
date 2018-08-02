<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;
class SettingsController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function showSettings(){
        $settings = Setting::all();
        return view('admin.settings')->with('settings',$settings);
    }

    public function createSettings(){
        return view('admin.create-settings');
    }

    public function editSettings(){
        $setting = Setting::find(1);
        return view('admin.update-settings')->with('setting',$setting);
    }

    public function updateSettings(Request $request){
        $this->validate($request,[
            'coupon'=>'required',
            'vat'=>'required|numeric',
            'dollar_to_naira'=>'required|numeric',
            'euro_to_naira'=>'required|numeric',
        ]);


        $settings = Setting::find(1);
        
        $settings->coupon = $request->coupon;
        $settings->vat  = $request->vat;
        $settings->dollar_to_naira =$request->dollar_conversion;
        $settings->euro_to_naira = $request->euro_conversion;

        $settings->save();

        Session::flash('status','Settings Updated Successfully!');
        return redirect()->route('admin:settings');
    }

    public function saveSettings(Request $request){

        $this->validate($request,[
            'coupon'=>'required',
            'vat'=>'required|numeric',
            'dollar_to_naira'=>'required|numeric',
            'euro_to_naira'=>'required|numeric',
        ]);


        $settings = Setting::create([
            'coupon'=>$request->coupon,
            'vat'=>$request->vat,
            'dollar_to_naira'=>$request->dollar_to_naira,
            'euro_to_naira'=>$request->euro_to_naira
        ]);

        $settings->save();

        Session::flash('status','Settings Saved Successfully!');

        return redirect()->route('admin:settings');
    }

}
