<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\owner;
use App\company;
use App\project;
use App\projectImage;
use App\projectDetails;
use App\news;
use DB;
use Alert;
use Gate;



class adminPage extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function adminArea(){

        // if (Gate::allows('isAdmin')) {
        // }

        if (Auth::check()) {
            $owner_info = owner::all();
            $img_info = projectImage::all();
            $projectDetails_info = projectDetails::all();
            $news_info = news::all();
            $send['news_info']= $news_info;
            $send['owner_info']=$owner_info;
            $send['img_info']=$img_info;
            $send['projectDetails_info']=$projectDetails_info;
    
            return view ('admin.adminHome',$send);
        }
       
    }
    //----------------------Owner Information Section-------------------------------------//
    public function addOwnerInfo(Request $request){                             //ADD                            
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
    public function editOwersInfo(Request $request,$id){                        //EDIT
        $update_owner = owner::find($id);
        $update_owner->name = $request->input('o_name');
        $update_owner->address = $request->input('o_address');
        $update_owner->cellno = $request->input('o_cellno');
        $update_owner->email = $request->input('o_email');
        $update_owner->job_description1 = $request->input('o_description1');
        $update_owner->created_at = date('Y-m-d h:i:s');
        $update_owner->updated_at = date('Y-m-d h:i:s');
        $update_owner->save();
        Alert::success('New Record is Udated', 'Success');
        return redirect('adminHome');
    }
    public function updateStatus_owner(Request $request, $id){                  //UPDATE STATUS
        $updateStatus_owner = owner::find($id);
        $updateStatus_owner->status = $request->input('state');
        $updateStatus_owner->save();
        Alert::success('Your Status Has Been Updated', 'Success');
        return redirect('adminHome');

        }
    public function deleteOwnerInfo(Request $request, $id){                     //DELETE
        $delete_owner = owner::find($id);
        $delete_owner->delete();
        Alert::success('Your Record is Removed', 'Success');


        return redirect('adminHome');

    }
   //----------------------End Of Owner Information Section-------------------------------------//
      //----------------------News  Section-------------------------------------//
      public function addNewsInfo(Request $request){                                 //ADD

        if($request->hasFile('news_image')){
            $FileNameWithExt = $request->file('news_image')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('news_image')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('news_image')->storeAs('public/news_image',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';

        }
        $save_news = new news;
        $save_news->news_title = $request->input('news_title');
        $save_news->news_link = $request->input('news_link');
        $save_news->news_img = $fileNameToStore;
        $save_news->status = 0;
        $save_news->created_at = date('Y-m-d h:i:s');
        $save_news->updated_at = date('Y-m-d h:i:s');

        $save_news->save();
        Alert::success('New Record is added', 'Success');
        return redirect('adminHome');
    }
    public function updateStatusNews(Request $request, $id){                  //UPDATE STATUS
        $updateStatus_news = news::find($id);
        $updateStatus_news->status = $request->input('state');
        $updateStatus_news->save();
        Alert::success('Your Status Has Been Updated', 'Success');
        return redirect('adminHome');

        }
        public function editNewsInfo(Request $request, $id){                                 //EDIT
            $update_news = news::find($id);
            if($request->hasFile('news_image')){
                $FileNameWithExt = $request->file('news_image')->getClientOriginalName();
                $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('news_image')->getClientOriginalExtension();
                $fileNameToStore =  $filename.'_'.time().'.'.$extension;
                $path = $request->file('news_image')->storeAs('public/news_image',$fileNameToStore);
                $update_news->news_title = $request->input('newsEdit_title');
                $update_news->news_link = $request->input('newsEdit_link');
                $update_news->news_img = $fileNameToStore;
                $update_news->updated_at = date('Y-m-d h:i:s');

            }else{
                $update_news->news_title = $request->input('newsEdit_title');
                $update_news->news_link = $request->input('newsEdit_link');
                $update_news->updated_at = date('Y-m-d h:i:s');
            }
            
    
            $update_news->save();
            Alert::success('Record has been updated', 'Success');
            return redirect('adminHome');
        }
        public function deleteNewsInfo(Request $request, $id){                     //DELETE
            $delete_news = news::find($id);
            $delete_news->delete();
            Alert::success('Your Record is Removed', 'Success');
    
    
            return redirect('adminHome');
    
        }
   //----------------------Owner IntroImage  Section-------------------------------------//
    public function addImageInfo(Request $request){                                 //ADD

        if($request->hasFile('img_name')){
            $FileNameWithExt = $request->file('img_name')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img_name')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('img_name')->storeAs('public/img_name',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';

        }
        $save_img = new projectImage;
        $save_img->img_title = $request->input('img_title');
        $save_img->img_name = $fileNameToStore;
        $save_img->status = 0;
        $save_img->created_at = date('Y-m-d h:i:s');
        $save_img->updated_at = date('Y-m-d h:i:s');

        $save_img->save();
        Alert::success('New Record is added', 'Success');
        return redirect('adminHome');
    }
    public function editImageInfo(Request $request, $id){                  //UPDATE STATUS
        $updateStatus_images = projectImage::find($id);
        if($request->hasFile('img_name')){
            $FileNameWithExt = $request->file('img_name')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img_name')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('img_name')->storeAs('public/img_name',$fileNameToStore);

            $updateStatus_images->img_title = $request->input('edit_img_title');
            $updateStatus_images->img_name = $fileNameToStore;
            //$updateStatus_images->status = 0;
            $updateStatus_images->created_at = date('Y-m-d h:i:s');
            $updateStatus_images->updated_at = date('Y-m-d h:i:s');

        }else{
            $updateStatus_images->img_title = $request->input('edit_img_title');
            //$updateStatus_images->img_name = $fileNameToStore;
            //$updateStatus_images->status = 0;
            $updateStatus_images->created_at = date('Y-m-d h:i:s');
            $updateStatus_images->updated_at = date('Y-m-d h:i:s');
        }
        
        $updateStatus_images->save();
        Alert::success('New Record Has Been Updated', 'Success');
        return redirect('adminHome');

        }
    public function deleteImagesInfo(Request $request, $id){                        //DELETE
        $delete_images = projectImage::find($id);
        $delete_images->delete();
        Alert::success('Your Record is Removed', 'Success');
        return redirect('adminHome');
     }
    public function updateStatusImages(Request $request, $id){                      //UPDATE STATUS
        $update_images = projectImage::find($id);
        $update_images->status = $request->input('state');
        $update_images->save();
        Alert::success('Your Record is Updated', 'Success');
        return redirect('adminHome');

        }
      //----------------------End Of Owner IntroImage  Section-------------------------------------//
 
      //----------------------Project Details  Section-------------------------------------//
    public function addProjectDetailsInfo(Request $request){                            //ADD

        if($request->hasFile('project_img')){
            $FileNameWithExt = $request->file('project_img')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('project_img')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('project_img')->storeAs('public/project_img',$fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';

        }
        $save_PDetails = new projectDetails;
        $save_PDetails->work_category = $request->input('category');
        $save_PDetails->work_title = $request->input('title');
        $save_PDetails->work_img = $fileNameToStore;
        $save_PDetails->work_description = $request->input('description');
        $save_PDetails->status = 0;
        $save_PDetails->created_at = date('Y-m-d h:i:s');
        $save_PDetails->updated_at = date('Y-m-d h:i:s');

        $save_PDetails->save();
        Alert::success('New Record is added', 'Success');
        return redirect('adminHome');
   }
   public function updateStatus_PDetails(Request $request, $id){                            //UPDATE STATUS
        $update_PDetails = projectDetails::find($id);
        $update_PDetails->status = $request->input('state');
        $update_PDetails->save();
        Alert::success('Your Record is Updated', 'Success');
        return redirect('adminHome');

    }
    public function deleteProjectDetailsInfo(Request $request, $id){                        //DELETE
        $delete_PDetails = projectDetails::find($id);
        $delete_PDetails->delete();
        Alert::success('Your Record is Removed', 'Success');
        return redirect('adminHome');

    }
    public function editProjectDetailsInfo(Request $request,$id){                            //EDIT
        $update_PDetails = projectDetails::find($id);

        if($request->hasFile('project_img')){
            $FileNameWithExt = $request->file('project_img')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('project_img')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('project_img')->storeAs('public/project_img',$fileNameToStore);

            //$update_PDetails = new projectDetails;
            $update_PDetails->work_category = $request->input('category');
            $update_PDetails->work_title = $request->input('title');
            $update_PDetails->work_img = $fileNameToStore;
            $update_PDetails->work_description = $request->input('description');
           //update_PDetails->status = 0;
            $update_PDetails->created_at = date('Y-m-d h:i:s');
            $update_PDetails->updated_at = date('Y-m-d h:i:s');
            }
        else{
            //$update_PDetails = new projectDetails;
            $update_PDetails->work_category = $request->input('category');
            $update_PDetails->work_title = $request->input('title');
            //update_PDetails->work_img = $fileNameToStore;
            $update_PDetails->work_description = $request->input('description');
            //update_PDetails->status = 0;
            $update_PDetails->created_at = date('Y-m-d h:i:s');
            $update_PDetails->updated_at = date('Y-m-d h:i:s');

            }
        
        $update_PDetails->save();
        Alert::success('New Record is updated', 'Success');
        return redirect('adminHome');
   }
    //----------------------End Of Project Details  Section-------------------------------------//

    public function adminWorks(){
        $show_company = company::all();
        $show_project = project::all();

        $send['company_info']=$show_company;
        $send['project_info']=$show_project;


        return view('admin.adminWorks',$send);
    }
    public function addCompanyProfile(Request $request){                                        //ADD

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
         Alert::success('New Record is added', 'Success');
        return redirect('adminWorks');
    }
    public function editCompanyProfile(Request $request,$id){                                        //EDIT
        $update_company = company::find($id);
        if($request->hasFile('c_image')){
            $FileNameWithExt = $request->file('c_image')->getClientOriginalName();
            $filename = pathinfo($FileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('c_image')->getClientOriginalExtension();
            $fileNameToStore =  $filename.'_'.time().'.'.$extension;
            $path = $request->file('c_image')->storeAs('public/c_logo',$fileNameToStore);

            $update_company->c_name = $request->input('c_name_edit');
            $update_company->c_description = $request->input('c_description_edit');
            $update_company->c_logo = $fileNameToStore;
            $update_company->created_at = date('Y-m-d h:i:s');
            $update_company->updated_at = date('Y-m-d h:i:s');
        }else{
            $update_company->c_name = $request->input('c_name_edit');
            $update_company->c_description = $request->input('c_description_edit');
            $update_company->created_at = date('Y-m-d h:i:s');
            $update_company->updated_at = date('Y-m-d h:i:s');

        }
        
        $update_company->save();
        Alert::success('New Record is updated', 'Success');
        return redirect('adminWorks');
        }

    public function deleteCompanyInfo(Request $request, $id){                                   //DELETE
        $delete_company = company::find($id);
        $delete_company->delete();
        Alert::success('Your Record is Removed', 'Success');


        return redirect('adminWorks');

    }
    public function addProjectInfo(Request $request){                                              //ADD

        $save_project = new project;
        $save_project->fk_cid =$request->input('fk_id') ;
        $save_project->p_name = $request->input('p_name');
        $save_project->p_contract_ref = $request->input('p_ref');
        $save_project->p_dateofcontract = $request->input('p_doc');
        $save_project->p_nameofwork = $request->input('p_nameOfWork');
        $save_project->p_contract_value = $request->input('p_contractValue');
        $save_project->created_at = date('Y-m-d h:i:s');
        $save_project->updated_at = date('Y-m-d h:i:s');

        $save_project->save();
        Alert::success('Your Record Added Successfully', 'Success');

        return redirect('adminWorks');
        }


        public function editProjectInfo(Request $request, $id){                             //EDIT                             //ADD

            $update_project = project::find($id);
            $update_project->fk_cid =$request->input('fk_id') ;
            $update_project->p_name = $request->input('pedit_name');
            $update_project->p_contract_ref = $request->input('pedit_ref');
            $update_project->p_dateofcontract = $request->input('pedit_doc');
            $update_project->p_nameofwork = $request->input('pedit_nameOfWork');
            $update_project->p_contract_value = $request->input('pedit_contractValue');
            $update_project->created_at = date('Y-m-d h:i:s');
            $update_project->updated_at = date('Y-m-d h:i:s');
    
            $update_project->save();
            Alert::success('Your Record Updated Successfully', 'Success');
    
            return redirect('adminWorks');
            }

        public function deleteProjectInfo(Request $request, $id){                                   //DELETE
            $delete_project = project::find($id);
            $delete_project->delete();
            Alert::success('Your Record is Removed', 'Success');
    
    
            return redirect('adminWorks');
    
        }

        
    //
}
