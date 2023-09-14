<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recruitment;

class RecruitmentController extends Controller
{
    public function index(Recruitment $recruitment)
    {
        return view('recruitments/index')->with(['recruitments' => $recruitment->getPaginateByLimit()]); 
    }
    
    public function show(Recruitment $recruitment)
    {
        return view('recruitments/show')->with(['recruitment' => $recruitment]);
    }
    
    public function create()
    {
        return view('recruitments.create');
    }
    
    public function store(Request $request, Recruitment $recruitment)
    {
        $input = $request['recruitment'];
        $recruitment->fill($input)->save();
        return redirect('/recruitments/' .  $recruitment->id);
    }
}
