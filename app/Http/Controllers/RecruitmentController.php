<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RecruitmentRequest;
use App\Models\Recruitment;
use App\Models\Kind;
use App\Models\Prefecture;
use Illuminate\Support\Facades\Auth;

class RecruitmentController extends Controller
{
    public function index(Recruitment $recruitment)
    {
        return view('recruitments/index')->with(['recruitments' => $recruitment->getPaginateByLimit()]); 
    }
    
    public function show(Recruitment $recruitment)
    {
        return view('recruitments.show')->with(['recruitment' => $recruitment]);
    }

    public function create(Kind $kind , Prefecture $prefecture)
    {
        return view('recruitments.create')->with(['kinds' => $kind->get(),
        'prefectures' => $prefecture->get(),
        ]);
    }
    
    public function store(Recruitment $recruitment, RecruitmentRequest $request)
    {
        $input = $request['recruitment'];
        $id = Auth::id();
        $input["user_id"] = $id;
        $recruitment->fill($input)->save();
        return redirect('/recruitments/' . $recruitment->id);
    }
    
    public function edit(Recruitment $recruitment , Kind $kind , Prefecture $prefecture)
    {
        return view('recruitments.edit')->with(['recruitment' => $recruitment,'kinds' => $kind->get(),
        'prefectures' => $prefecture->get(),
        ]);
    }
    
    public function update(RecruitmentRequest $request, Recruitment $recruitment)
    {
        $input_recruitment = $request['recruitment'];
        $recruitment->fill($input_recruitment)->save();
    
        return redirect('/recruitments/' . $recruitment->id);
    }
    
    public function delete(Recruitment $recruitment)
    {
        $recruitment->delete();
        return redirect('/home');
    }
}

