<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\NoticeBoard;

class MedicalController extends Controller
{
    // Home view
    public function home()
    {
        $blog = Blog::get();
        $notice_board=NoticeBoard::get();
        return view('home.index',compact('blog','notice_board'));
    }

    // Departments view
    public function department()
    {
        return view('department.index');
    }

    // Patients Services view
    public function patients_services()
    {
        return view('patients_services.index');
    }

    // Patients appointment view
    public function patients_appointment()
    {
        return view('patients_appointment.index');
    }

    // Our Doctor view
    public function patients_our_doctor()
    {
        return view('patients_our_doctor.index');
    }

    // Our Doctor view
    public function patients_pricing()
    {
        return view('patients_pricing.index');
    }

    // Blog view
    public function blog()
    {
        $blog = Blog::get();
        return view('blog.index',compact('blog'));
    }

    // Blog Detail view
    public function blog_detail($id)
    {
        $id=decrypt($id);
        $blog = Blog::find($id);
        return view('blog_detail.index',compact('blog'));
    }

    // Contact view
    public function contact()
    {
        return view('contact.index');
    }

    // Doctor1 view
    public function doctor1()
    {
        return view('doctor1.index');
    }

    // Doctor2 view
    public function doctor2()
    {
        return view('doctor2.index');
    }

    // Doctor3 view
    public function doctor3()
    {
        return view('doctor3.index');
    }

    // Doctor3 view
    public function doctor4()
    {
        return view('doctor4.index');
    }

    // Doctor3 view
    public function doctor5()
    {
        return view('doctor5.index');
    }

    // Doctor3 view
    public function machinery()
    {
        return view('machinery.index');
    }
}
