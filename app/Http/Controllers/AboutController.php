<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
    public function edit()
    {
        $about = About::all();
        return response()->view('admin.pages.about',['about'=>$about,'com'=>'pages','list'=>'about']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        About::where('id',(int)$id)->update([
            'content' => $request->input('content'),
            'name' => $request->input('name')
        ]);
        if(request()->hasFile(key:'images')){
            $path ="images\about/";
            $iamges = request()->file(key: 'images');
            $iamges->move(base_path('public\images\about/'),$iamges->getClientOriginalName());
            $path = $path . $iamges->getClientOriginalName();
            About::where('id',(int)$id)->update([
                'images' => $path,
            ]);
        }
        session()->flash('msg', 'Update Successfully!!!!');
        return redirect()->back();
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
