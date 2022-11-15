<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
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
        // $request->validate([
        //     'images'        => 'required',
        //     'title'         => 'required',
        //     'description'   => 'required',
        //     'quantity'      => 'required',
        //     'price'         => 'required',
        //     'features'      => 'required',
        // ]);
        $input = $request->except('tag');

        // dd($input);

        if($input['tags'])
        {
            dd(json_encode($input['tags']));
        }

        if(isset($request->images))
        {
            $images = [];
            $destinationFilePath = '/uploads/products/' ;
            foreach ($input['images'] as $key => $image)
            {
                $extension = $image->getClientOriginalExtension();
                $baseNameImage = pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME);
                $name = Str::slug($baseNameImage, '-');
                $imageFileName = $name.'.'.$extension;
               
                // image path
                $imageUrl = $destinationFilePath . $imageFileName;
    
                // store value
                $images[$key]= [ 
                    $imageUrl 
                ];
            }
    
            dd(json_encode($images));
        }

        if(isset($request->features))
        {    
            dd(json_encode($input['features']));
        }

        
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
