<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registration;
use Image;
use Session;
use App\Education;


class RegistrationController extends Controller
{
    public function index()
    {

        return view('registration');
        
    }

    public function store(Request $request)
    {

// dd($request);
        $registration=new Registration;
        $variable=$request->toArray();
        foreach ($variable as $key => $value) {
           if($key!='_token' & $key!='board' & $key!='exam_passed' & $key!='institution' & $key!='percentage' & $key!='year_of_passing' & $key!='image_name' & $key!='sign_name')
            $registration->$key=$value;
        }



        $image=$request->file('image_name');
        $filename='registration'.'-'.rand().time().'.'.$image->getClientOriginalExtension();//part of image intervention library
        $location=public_path('/images/registration/'.$filename);

        $image2=$request->file('sign_name');

        $filename2='registration'.'-'.rand().time().'.'.$image2->getClientOriginalExtension();//part of image intervention library
        $location2=public_path('/images/registration/'.$filename2);

        // use $location='images/'.$filename; on a server
        $registration->image_name=$filename;
        $registration->sign_name=$filename2;
        // dd($image);

        Image::make($image2)->save($location2);
        Image::make($image)->save($location);

        // $doctor->image=$filename;
        $registration->save();

        $appid=date('dmy',strtotime($registration->created_at)).$registration->id;
        $registration->applicant_id=$appid;
        $registration->save();

        foreach ($variable['exam_passed'] as $key => $value) {
            
        // dd($variable['board'][$key]);
        $education=new Education;
        $education->exam_passed=$value;
        $education->board=$variable['board'][$key];
        $education->institution=$variable['institution'][$key];
        $education->year_of_passing=$variable['year_of_passing'][$key];
        $education->percentage=$variable['percentage'][$key];
        $education->applicant_id=$registration->id;
        $education->save();

        }

        session::flash('success', 'Your Registration is Successfull!');
        return redirect()->route('student-registration.index');
    

    }
}
