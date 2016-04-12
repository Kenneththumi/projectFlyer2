<?php

namespace App\Http\Controllers;

use App\Flyer;
use App\Photo;
use App\UploadedFile;
use Illuminate\Http\Request;
use App\Http\Controllers\Utilities\Country;
use Illuminate\Http\Requests;


use App\Http\Requests\FlyerRequest;
use App\Http\Controllers\Controller;

class  flyersController extends Controller
{

    public function __construct(){

         $this->middleware('auth');
    }


    public function index()
    {

    }


    public function create()
    {
        flash()->overlay("Welcome Aboard", "Thank you for signing up.");

        return view('flyersCreate');
    }


    public function store(FlyerRequest $request)
    {
        Flyer::create($request->all());

        //flash("Success!", "Your flyer has been created.");

        flash()->success('Success!', 'Your flyer has been created.');

        return redirect()->back();
    }


    public function show($zip, $street)
    {

        $flyer = Flyer::locatedAt($zip, $street);
        //return Flyer::where(compact('zip','street'))->first();
        /*$flyer=Flyer::where(compact('zip','street'))->first();*/
        return view('show', compact('flyer'));
    }

    public function addPhoto(Request $request, $zip, $street)
    {
         $this->validate($request, [
            'photo' => 'required|mimes:jpg, jpeg, png, bmp, png'
        ]);

        //dd($request->all());
        $photo= Photo::fromForm($request->file('photo'));

        Flyer::locatedAt($zip, $street)->addPhoto($photo);



        return 'Done';
    }


    public function edit($id)
    {
        //
    }


    public function update(FlyerRequest $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
