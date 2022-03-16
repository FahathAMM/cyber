<?php

namespace App\Http\Controllers\admin;

use App\Forms\UserForm;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\Field;
use App\Http\Controllers\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Routing\Controller as BaseController;

class FormController extends Controller
{
    // public function index()
    // {
    //     return view('pages.form-builder.index');
    // }

    public function form(FormBuilder $formBuilder)
    {
        // $form = $formBuilder->create(\App\Forms\UserForm::class, [
        //     'method' => 'POST',
        //     'url' => url('dashboard'),
        //     'action' => url('dashboard')
        // ]);

        // return view('pages.form-builder.index', compact('form'));
        return view('pages.form-builder.index');
    }



    public function createForm(FormBuilder $formBuilder, Request $request)
    {
        // return $request->all();
        // return $g['sd'] = $request->input('types');

        $collection = collect($request->input('types'));

        // $chunks = $collection->sliding(1);

        return  $collection->toArray();





        // $myArray = explode(',', 'dfd,df,df');
        // return  $myArray;
        $form = $formBuilder->createByArray(
            [
                $request->all()
            ],
            [
                'method' => 'POST',
                'url' => url('dashboard')
            ]
        );

        return view('pages.form-builder.form', compact('form'));
    }
}
