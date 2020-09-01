<?php

namespace App\Customer\Repositories;
use App\issue\Issue;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Http\Request;

class CustomerRepository {


    public function all(){
        return auth()->user()->issues;
    }

    public function create($data){
       return Issue::create($data);    
    }

    public function show($id){
        return Issue::find($id) ?? null;
    }
    
}
