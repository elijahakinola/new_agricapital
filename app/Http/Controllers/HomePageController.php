<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\Contact;
use Mail;

class HomePageController extends Controller
{
    //
    public function index() {
        return view ('welcome');
    }
    public function about_us() {
        return view ('about_us');
    }
    public function services() {
        return view ('services');
    }
    public function farmers_corner() {
        return view ('farmers_corner');
    }
    public function media() {
        return view ('media');
    }
    public function contact_us() {
        return view ('contact_us');
    }

    public function contactUS(Request $request){

        // SEOTools::setTitle('Home');
        // SEOTools::setDescription('This is my page description');

       $this->validate(request(), array(
            'name' => 'required',
            'phone_number'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required',
        //     'g-recaptcha-response' => 'required|captcha'
        ));

        $agricapital = new Contact();
        $agricapital->fullname = request()->name;
        $agricapital->email = request()->email;
        $agricapital->phone = request()->phone_number;
        $agricapital->comment = request()->message;
        $agricapital->save();

        /** Store information to include in mail in $data as an array */
        $data = array(
            'fullname' => request()->name,
            'email' => request()->email,
            'phone' => request()->phone_number,
            'comment' => request()->message,
            'created_at' => $agricapital->created_at,
            'myMail' => 'promiseezema11@gmail.com'
        );

        /** Send message to the admin */
        Mail::send('emails.contact-notification', $data, function ($m) use ($data) {
            $m->to($data['myMail'])->subject('Contact Notification');
        });

        /* return back */
        return redirect()->back()->with('success_report', 'Contact Form Submitted Successfully... We will get in touch shortly, Thank you.');
    }
    public function faq() {
        return view ('faq');
    }
    public function steps_to_register() {
        return view ('steps_to_register');
    }
    public function application_form() {
        return view ('application_form');
    }

    public function applicationFORM(Request $request){

        // SEOTools::setTitle('Home');
        // SEOTools::setDescription('This is my page description');

        $this->validate($request, array(
            'title' => 'required',
            'surname'=> 'required',
            'first_name'=> 'required',
            'other_name'=> 'required',
            'home_address'=> 'required',
            'farm_address'=> 'required',
            'town_city'=> 'required',
            'state'=> 'required',
            'date_of_birth'=> 'required',
            'lga'=> 'required',
            'contract_crops'=> 'required',
            'farming_initiative'=> 'required',
            'phone_number'=> 'required',
            'email'=> 'required',
            'sex'=> 'required',
            'kin_full_name'=> 'required',
            'kin_email'=> 'required',
            'kin_phone_number'=> 'required',
            'kin_relationship'=> 'required',
            'kin_occupation'=> 'required',
            'land_size'=> 'required',
            'contract_agreement'=> 'required',
            // 'g-recaptcha-response' => 'required|captcha'
        ));

        $agricapital = new Application();
        $agricapital->title = strtolower(request()->title);
        $agricapital->surname = strtolower(request()->surname);
        $agricapital->firstname = strtolower(request()->first_name);
        $agricapital->othername = strtolower(request()->other_name);
        $agricapital->gender = strtolower(request()->sex);
        $agricapital->email = strtolower(request()->email);
        $agricapital->telephone = strtolower(request()->phone_number);
        $agricapital->home_address = strtolower(request()->home_address);
        $agricapital->farm_address = strtolower(request()->farm_address);
        $agricapital->lga = strtolower(request()->lga);
        $agricapital->city = strtolower(request()->town_city);
        $agricapital->state = strtolower(request()->state);
        $agricapital->bday = strtolower(request()->date_of_birth);
        $agricapital->interested_crop = strtolower(request()->contract_crops);
        $agricapital->farming_initiative = strtolower(request()->farming_initiative);
        $agricapital->available_size = strtolower(request()->land_size);
        $agricapital->kin_name = strtolower(request()->kin_full_name);
        $agricapital->kin_email = strtolower(request()->kin_email);
        $agricapital->kin_phone = strtolower(request()->kin_phone_number);
        $agricapital->kin_relationship = strtolower(request()->kin_relationship);
        $agricapital->kin_occupation = strtolower(request()->kin_occupation);
        $agricapital->consent_approval = strtolower(request()->contract_agreement);
        
        $agricapital->save();  
        
        /** Store information to include in mail in $data as an array */
        $data = array(
            'title' => request()->title,
            'surname' => request()->surname,
            'firstname' => request()->first_name,
            'othername' => request()->other_name,
            'sex' => request()->sex,
            'birth_day' => request()->date_of_birth,
            'email' => request()->email,
            'phone_number' => request()->phone_number,
            'home_address' => request()->home_address,
            'lga' => request()->lga,
            'city' => request()->town_city,
            'state' => request()->state,
            'farm_address' => request()->farm_address,
            'farming_initiative' => request()->farming_initiative,
            'interested_crop' => request()->contract_crops,
            'available_size' => request()->land_size,
            'consent_approval' => request()->contract_agreement,
            'kin_name' => request()->kin_full_name,
            'kin_email' => request()->kin_email,
            'kin_phone' => request()->kin_phone_number,
            'kin_occupation' => request()->kin_occupation,
            'kin_relationship' => request()->kin_relationship,
            'created_at' => $agricapital->created_at,
            'myMail' => 'promiseezema11@gmail.com'
        );

        /** Send message to the admin */
        Mail::send('emails.application-notification', $data, function ($m) use ($data) {
            $m->to($data['myMail'])->subject('Application Notification');
        });
        
        return redirect()->back()->with('Application Form Submitted Successfully... We will get in touch shortly, Thank you.');
    }

    public function news() {
        return view ('news');
    }
    public function gallery() {
        return view ('gallery');
    }
    public function frontend() {
        return view ('frontend');
    }
}
