<?php

namespace App\Http\Controllers\SocialNetwork;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\SocialNetwork\Pharmacy;

use App\FormResquest\Pharmacy\PharmacyGet;
use App\FormResquest\Pharmacy\PharmacyPost;


class PharmacyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        $buscar=$request->input('buscar');
        $type=$request->input('type');
        //paginate es para hacer la paginacion
        $data_array['pharmacy'] = Pharmacy::buscar($buscar,$type)->orderBy('id','asc')->paginate(10);
        //dd($data_array);
        
        return view('pharmacy.index',$data_array)->with($request->only(['buscar','type']));
        /*
        $sql['pharmacy']= Pharmacy::All();
        return view('pharmacy.pharmacy',$sql);
        */
        
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
        $validate = PharmacyPost::validate($data, 'store', '');
        if($validate=='false'){
            $message = array('type'=>'Error de validacion');
        }else{
            $message = PharmacyPost::save($data);
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
        try {
            $message = PharmacyPost::edit($id);
            //$message->delete(); 
        } catch (\Illuminate\Database\QueryException $e) {
            $message = array('type'=>'Error al editar');
        }
        return $message;
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
            $message = PharmacyPost::delete($id);
            //$message->delete(); 
        } catch (\Illuminate\Database\QueryException $e) {
            $message = array('type'=>'Error de base de datos');
        }
        return $message;
    }
}
