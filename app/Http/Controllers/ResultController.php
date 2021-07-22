<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\ResultsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\DataTables\ResultDataTable;

class ResultController extends Controller
{
    function index(ResultDataTable $dataTable){
        return $dataTable->render('result.index');
    }

    function add(){
        return view('result.add');
    }

    function import(){
        Excel::Import(new ResultsImport, request()->file('file'));
        return redirect()->back();
    }
}
