<?php

namespace App\Http\Controllers\SocialNetwork;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//FormResquest
use App\FormResquest\Category\CategoryGet;
use App\FormResquest\Category\CategoryPost;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->all();
        $validate = CategoryPost::validate($data, 'store', '');
        if($validate=='false'){
            $message = array('type'=>'Error de validacion');
        }else{
            $message = CategoryPost::save($data);
        }
        return $message;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();
        $validate = PharmacyPost::validate($data, 'update', $id);
        if($validate=='false'){
            $message = array('type'=>'Error de validacion');
        }else{
            try {
                $message = PharmacyPost::update($data, $id); 
            } catch (\Illuminate\Database\QueryException $e) {
                $message = array('type'=>'Error de base de datos');
            }
        }
        return $message;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try {
            $message = CategoryPost::delete($id); 
        } catch (\Illuminate\Database\QueryException $e) {
            $message = array('type'=>'Error de base de datos');
        }
        return $message;
    }
}
