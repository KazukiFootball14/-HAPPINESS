<?php

namespace App\Http\Controllers;
use App\Models\Kind;

class KindController extends Controller

public function index(Kind $kind)
{
    return view('kind.index')->with(['recruitments' => $kind->getBykind()]);
}