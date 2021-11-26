<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    
    {


        
        // $posts= new Post;
        

        // $data = $posts->data();
        

        //
       $profile =DB::insert("INSERT InTO profile (`name`,`phone`, `city`,`country`)VALUES(:name, :phone, :city, :country)",[
           'name'=> 'irfan qasim',
           'phone'=>'12324564557',
           'city'=>'jhelum',
           'country'=>'Pakistan'
       ]);
       dd($profile);
        return view ('posts.index',compact('data'));
         

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)

    {
        $request->flash();
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogPost $request)
    {
        
        // return $request->file('photo')->store ('images','public');
        // $filename = sprintf ('profile_%s.jpg',random_int(1,1000));
        // if($request->hasfile('photo'))
        // return $request->file('photo')->storeAs ('images','$filename', 'public');
        // $data = [ 'imran','age'=>40];
        // // return response ("<h2>hello,world</h2>",200)->withheaders([
        // //     'content-type'=>'text/html',

        // // ]);
        // return $data;
        // return view ('posts.show',compact ('data'));


    
        

        // $request->validated();
        return back ()->with('message','your form  has been sucessfully submitted ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= [
            'name'=>'ahahd jalbani',
            'age'=> 40

        ];

        return view ('posts.show',compact('data'));
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
    public function update(StoreBlogPost $request, $id)
    {
        //
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
    }
}
