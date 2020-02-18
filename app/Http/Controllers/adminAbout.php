<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\team;
use App\manpower;
use App\equipment;
use Alert;

class adminAbout extends Controller
{
    public function __construct()
        {
            $this->middleware('auth');
        }
    public function adminAbout(){
       // $usename = Auth::user()->id;
        //if(Auth::user()->role == 'admin'){
        $team_info = team::all();
        $mnList = manpower::all();
        $eqList = equipment::all();
        $send['team_info']=$team_info;
        $send['mnList']=$mnList;
        $send['eqList']=$eqList;

        return view ('admin.adminAbout',$send);
       // }else{
            //abort(401);
       // }
}
    //
    public function addTeamInfo(Request $request){                                      //ADD
        if($request->hasFile('team_img')){
            $FileNameWithExt = $request->file('team_img')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('team_img')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('team_img')->storeAs('public/team_img',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';

        }
            $save_team = new team;
            $save_team->member_name = $request->input('team_name');
            $save_team->member_title = $request->input('team_title');
            $save_team->member_img = $fileNameToStore;
            $save_team->fb_link = $request->input('team_fb');
            $save_team->twitter_link = $request->input('team_twitter');
            $save_team->linkedin_link = $request->input('team_linkedin');
            $save_team->messages = $request->input('team_messages');
            $save_team->status = 0;
            $save_team->created_at = date('Y-m-d h:i:s');
            $save_team->updated_at = date('Y-m-d h:i:s');

            $save_team->save();
            Alert::success('New Record is added', 'Success');
            return redirect('adminAbout');
   }
   public function editTeamInfo(Request $request, $id){
    $update_team = team::find($id);

    if($request->hasFile('team_img')){
        $FileNameWithExt = $request->file('team_img')->getClientOriginalName();
        $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('team_img')->getClientOriginalExtension();
        $fileNameToStore =  $filename.'_'.time().'.'.$extension;
        $path = $request->file('team_img')->storeAs('public/team_img',$fileNameToStore);

        $update_team->member_name = $request->input('teamEdit_name');
        $update_team->member_title = $request->input('teamEdit_title');
        $update_team->member_img = $fileNameToStore;
        $update_team->fb_link = $request->input('teamEdit_fb');
        $update_team->twitter_link = $request->input('teamEdit_twitter');
        $update_team->linkedin_link = $request->input('teamEdit_linkedin');
        $update_team->messages = $request->input('teamEdit_messages');
        $update_team->created_at = date('Y-m-d h:i:s');
        $update_team->updated_at = date('Y-m-d h:i:s');
    }else{
        $update_team->member_name = $request->input('teamEdit_name');
        $update_team->member_title = $request->input('teamEdit_title');
        $update_team->fb_link = $request->input('teamEdit_fb');
        $update_team->twitter_link = $request->input('teamEdit_twitter');
        $update_team->linkedin_link = $request->input('teamEdit_linkedin');
        $update_team->messages = $request->input('teamEdit_messages');
        $update_team->updated_at = date('Y-m-d h:i:s');

    }
        
        $update_team->save();
        Alert::success('New Record is updated', 'Success');
        return redirect('adminAbout');
}
   public function deleteTeamInfo(Request $request, $id){                           //DELETE
            $delete_team = team::find($id);
            $delete_team->delete();
            Alert::success('Your Record is Removed', 'Success');
            return redirect('adminAbout');

}
public function updateStatusTeam(Request $request, $id){
     $update_team = team::find($id);
     $update_team->status = $request->input('state');
    $update_team->save();
    Alert::success('Your Record is Updated', 'Success');
    return redirect('adminAbout');

}
public function addManpowerInfo(Request $request){                                              //ADD

    $save_manpower = new manpower;
    $save_manpower->designation = $request->input('mn_designation');
    $save_manpower->quantity = $request->input('mn_quantity');
    $save_manpower->created_at = date('Y-m-d h:i:s');
    $save_manpower->updated_at = date('Y-m-d h:i:s');

    $save_manpower->save();
    Alert::success('Your Record Added Successfully', 'Success');

    return redirect('adminAbout');
    }

    public function editManpowerInfo(Request $request, $id){                                              //EDIT

        $update_manpower = manpower::find($id);
        $update_manpower->designation = $request->input('mnEdit_designation');
        $update_manpower->quantity = $request->input('mnEdit_quantity');
        $update_manpower->updated_at = date('Y-m-d h:i:s');
    
        $update_manpower->save();
        Alert::success('Your Record Updated Successfully', 'Success');
    
        return redirect('adminAbout');
        }
        public function deleteManpowerInfo(Request $request, $id){                           //DELETE
            $delete_manpower = manpower::find($id);
            $delete_manpower->delete();
            Alert::success('Your Record is Removed', 'Success');
            return redirect('adminAbout');

}
public function addEquipmentInfo(Request $request){                                              //ADD

    $save_equipment = new equipment;
    $save_equipment->equip_name = $request->input('eq_name');
    $save_equipment->quantity = $request->input('eq_quantity');
    $save_equipment->created_at = date('Y-m-d h:i:s');
    $save_equipment->updated_at = date('Y-m-d h:i:s');

    $save_equipment->save();
    Alert::success('Your Record Added Successfully', 'Success');

    return redirect('adminAbout');
    }

    public function editEquipmentInfo(Request $request, $id){                                              //EDIT

        $update_equipment = equipment::find($id);
        $update_equipment->equip_name = $request->input('eEdit_equipName');
        $update_equipment->quantity = $request->input('eEdit_quantity');
        $update_equipment->updated_at = date('Y-m-d h:i:s');

        $update_equipment->save();
        Alert::success('Your Record Updated Successfully', 'Success');
    
        return redirect('adminAbout');
        }
        public function deleteEquipmentInfo(Request $request, $id){                           //DELETE
            $delete_equipment = equipment::find($id);
            $delete_equipment->delete();
            Alert::success('Your Record is Removed', 'Success');
            return redirect('adminAbout');

}
}
