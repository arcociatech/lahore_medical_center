<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicalController extends Controller
{
    // Home view
    public function home()
    {
        return view('home.index');
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
        return view('blog.index');
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
}
