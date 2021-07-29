<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Http\Controllers\Input;

class HasilSwabController extends Controller
{
    function hasilSwab() {
        return view('hasil-swab.cek');
    }

    function cekSwab(Request $request) {
        $request->validate([
            'nik'=>'required|min:16|max:16'
        ]);

        $result = Result::where('nik', '=', $request->nik)->latest()->count() > 0;
        $data = Result::where('nik', '=', $request->nik)->orderByDesc('created_at')->limit(1)->first();

        if($data){
            // return view('hasil-swab.cek');
            return view('hasil-swab.hasilswab')->with('data', $data);
        } else {
            //return view('hasil-swab.hasilswab')->with('fail', 'Hasil Swab PCR masih dalam proses.');
            return back()->with('fail', 'Hasil Swab PCR masih dalam proses.');
        }

        // if($request){
        //     return view('hasil-swab.hasilswab')->with('data', $data);
        // } else {
        //     return view('hasil-swab.cek');
        // }

        //dd($data);

        // if($result){
        //     if($data){

        //     }
        // } else {
        //     return back()->with('fail', 'Hasil Swab PCR masih dalam proses');
        // }

        // if($result){
        //     return back()->with('success', 'found');
        // } else{
        //     return back()->with('fail', ' not found');
        // }   

 
        // if($user){
        //     if(Hash::check($request->password, $user->password)){

        //         $request->session()->put('LoggedUser', $user->id);
        //         return redirect('profile'); 

        //     }else{
        //         return back()->with('fail', 'Invalid password');
        //     }
        // }else{
        //     return back()->with('fail', 'No account found for this email');
        // }

        // if($query){
        //     return back()->with('success', 'Hasil Swab PCR Anda Positif');
        // } else {
        //     return back()->with('fail', 'Hasil Swab PCR Anda Positif');
        // }
    }

    
}
