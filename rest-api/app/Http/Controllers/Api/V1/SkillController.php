<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(){
        return response()->json("Skill index");       
    }

    public function store(StoreSkillRequest $request){
        Skill::create($request->validated());
        return response()->json("Skill created successfully");
    }
}
