<?php

namespace App\Http\Controllers;

use App\Models\Nine; 
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NineController extends Controller
{
    public function index()
    {
        $data = Nine::all();
        return view('nine', ['users' => $data]);
    }

    public function store(Request $request) 
    {
        $info = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email', Rule::unique('nine', 'email')],
            'password' => ['required', 'min:3', 'max:10'],
        ]);

      
        $info['password'] = bcrypt($info['password']);

        
        if ($info) {
            $user = Nine::create($info);
            return back()->with('success', 'User created successfully');
        }
    }

    //edit
    public function edit(Nine $nine){
        return view('edit', ['users'=>$nine]);
    }

    // update users record

    public function update(Request $request, Nine $nine){
        $formfields = $request->validate([
            'lastname' => 'required',
            'firstname'=>'required',
            'email'=>['required','email'],
        ]);
        if($formfields){
            $nine->update($formfields);
            return redirect('dnine')->with('message','users record updated successfully');
        }
    }

    // delete users record

    public function destroy(Nine $nine){
        $nine -> delete();
        return back()->with('message','users record deleted successfully');
    }
}
