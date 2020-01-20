<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\owner;
use App\company;
use Alert;


class adminPage extends Controller
{
    public function adminArea(){

        $owner_info = owner::all();
        $send['owner_info']=$owner_info;
        return view ('admin.adminHome',$send);
    }
    public function addOwnerInfo(Request $request){

         $save_owner = new owner;
         $save_owner->name = $request->input('o_name');
         $save_owner->address = $request->input('o_address');
         $save_owner->cellno = $request->input('o_cellno');
         $save_owner->email = $request->input('o_email');
         $save_owner->job_description1 = $request->input('o_description1');
         $save_owner->created_at = date('Y-m-d h:i:s');
         $save_owner->updated_at = date('Y-m-d h:i:s');

         $save_owner->save();
         Alert::success('New Record is added', 'Success');
         return redirect('adminHome');
    }

    public function deleteOwnerInfo(Request $request, $id){
        $delete_owner = owner::find($id);
        $delete_owner->delete();
        Alert::success('Your Record is Removed', 'Success');


        return redirect('adminHome');

    }

    public function adminWorks(){
        $show_company = company::all();
        $send['company_info']=$show_company;
        return view('admin.adminWorks',$send);
    }
    public function addCompanyProfile(Request $request){

                if($request->hasFile('c_image')){
                    $FileNameWithExt = $request->file('c_image')->getClientOriginalName();
                    $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
                    $extension = $request->file('c_image')->getClientOriginalExtension();
                    $fileNameToStore =  $filename.'_'.time().'.'.$extension;
                    $path = $request->file('c_image')->storeAs('public/c_logo',$fileNameToStore);
                }else{
                    $fileNameToStore = 'noimage.jpg';

                }
         $save_company = new company;
         $save_company->c_name = $request->input('c_name');
         $save_company->c_description = $request->input('c_description');
         $save_company->c_logo = $fileNameToStore;
         $save_company->created_at = date('Y-m-d h:i:s');
         $save_company->updated_at = date('Y-m-d h:i:s');

         $save_company->save();
        return redirect('adminWorks');
    }

    public function deleteCompanyInfo(Request $request, $id){
        $delete_company = company::find($id);
        $delete_company->delete();
        Alert::success('Your Record is Removed', 'Success');


        return redirect('adminWorks');

    }
    //
}
