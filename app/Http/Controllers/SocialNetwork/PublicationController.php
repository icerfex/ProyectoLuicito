<?php

namespace App\Http\Controllers\SocialNetwork;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//acceder al formResquest
use App\FormResquest\Publication\PublicationPost;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*$data = $request->all();
        $validation = PublicationPost::validation($data);
        if($validation -> fail()){
            $message = array('error'=>'fallo');
        }else{
            $message = PublicationPost::save($data);
        }*/

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
        /*switch ($id) {
            case 'All':
                # code...
                break;
            
            case 'Only':
                # code...
                break;
        }*/
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
        /*$data = $request->all();
        $validation = PublicationPost::validation($data);
        if($validation -> fail()){
            $message = array('error'=>'fallo');
        }else{
            $message = PublicationPost::update($id, $data);
        }*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$message = PublicationPost::update($id);
    }
}
