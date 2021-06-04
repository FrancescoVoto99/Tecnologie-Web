<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InsertAdminRequeste;
use App\Http\Requests\UpdateAdminRequeste;
use App\Http\Requests\InsertFAQRequeste;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Models\FAQs;
use App\Models\Resources\FAQ;

class AmmController extends Controller
{ 
   

    public function __construct() {
        $this->middleware('can:isAmm');
        $this->_FAQModel = new FAQs;
        
        
    }

    public function index() {
        return view('amm');
    }
    
    public function addAdmin() {
        return view('auth.registerAdmin');
                       
    }
    
    public function storeAdmin(InsertAdminRequeste $request) {

        $user = new User;
        
        $user->fill($request->validated());
        $user->password=Hash::make($request->get('password'));
        $user->role = 'admin';
        
        $user->save();

        return redirect()->action('AmmController@showAllAdmin');
    }
    
    public function editAdmin($id_admin) {
        $user=User::where('id',$id_admin)->first();
        return view('editAdmin')
                            ->with('user', $user);
                       
    }
    public function updateAdmin(UpdateAdminRequeste $request, $id_admin) {

        $user = User::find($id_admin);
        $user->fill($request->validated());
        $user->password=Hash::make($request->get('password'));
        $user->save();

        return redirect()->action('AmmController@showAllAdmin');
    }
   
    public function showAllUser() {
       $users=User::where('role','user')->get();
       
        
        return view('allUser')
                       ->with('users', $users);
    }
    
    public function showAllAdmin() {
       $users=User::where('role','admin')->get();
       
        
        return view('allAdmin')
                       ->with('users', $users);
    }
    
    public function deleteUser($id_user){
       
       $user = User::find($id_user);
        $user->delete();
       if($user->role== 'user')
        return redirect()->action('AmmController@showAllUser');           
       else
           return redirect()->action('AmmController@showAllAdmin'); 
           
    }
    
        public function addFAQ() {
        return view('FAQ.insertFAQ');
                       
    }
  

    public function storeFAQ(InsertFAQRequeste $request) {
        
        $faq = new FAQs;
        
        $faq->fill($request->validated());
        $faq->save();


        return redirect()->action('PublicController@showFAQ');
    }
    public function editFAQ($id_faq) {
        
        $faq = $this->_FAQModel->getFAQbyid($id_faq);
        return view('editFAQ')
                            ->with('faq',$faq);
                       
    }
    
    public function storeeditFAQ(InsertFAQRequeste $request) {
        $faq = FAQ::find($request->get('id'));
        $faq->fill($request->validated());
        $faq->save();

        return redirect()->action('PublicController@showFAQ');
    
}
        public function deletFAQ($id_faq){
       $this->_FAQModel->deletEvent($id_faq);
        return redirect()->action('PublicController@showFAQ');
                        
    }
    }
