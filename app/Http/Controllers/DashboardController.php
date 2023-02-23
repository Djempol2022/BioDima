<?php

namespace App\Http\Controllers;
use App\Models\Form_Garansi;
use App\Models\Form_Member;
use Illuminate\Http\Request;

class DashboardController extends Controller
{   
    public function adminformgaransi(){
        $form_garansi = Form_Garansi::get();
        return view ('backend.pages.formgaransi',compact('form_garansi'));
    }
    public function adminformmember(){
        $form_member = Form_Member::get();
        return view ('backend.pages.formmember',compact('form_member'));
    }
    
}
