<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Skill;
use App\Portfoli;
use Illuminate\Support\Facades\DB;
use View;
use Mail;

class ResumeController extends Controller
{
    public function profile(Request $request){
    	$data1 = $request->file;
    	$temp = $data1->getClientOriginalName();
    	$data1->move('images/',$temp);

    	$data = new Profile();
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->job = $request->job;
    	$data->fb = $request->fb;
    	$data->link = $request->link;
    	$data->about = $request->about;
    	$data->age = $request->age;
    	$data->address = $request->address;
    	$data->lang = $request->lang;
    	$data->file = $temp;
    	$data->ph = $request->ph;
    	$data->save();
    	dd('done');
    }

    public function port(Request $request){
        $img = $request->img;
        $new_img = rand().'.'.$img->extension();
        $img->move('images/',$new_img);


        $data = new Portfoli();
        $data->name = $request->name;
        $data->name2 = $request->field;
        $data->web = $request->link;
        $data->file = $new_img;
        $data->save();
        dd("Updated");


    }



    public function skill(Request $request){
        $skill = $request->all();
        $data = $skill['about'];

        $add =  new Skill();
        $add->skill = $data;
        $add->save();

        dd('Success');


        $new = explode(',', $data);
        $skill = [];
        foreach ($new as $key) {
            $temp = explode('-', $key);
            array_push($skill, $temp);
        }

        /*$data = $this->index();
        return View::make("skill", compact('skill','data'));*/

        dd($skill);
    }


    public function index(){
    	$results = DB::select('select max(id) as temp from profiles');
    	$id = $results[0]->temp;

    	$display = DB::select('select * from profiles where id = ?', [$id]);
    	$data = $display[0];

    	return View::make("index", compact('data'));
    }


    public function viewSkill(){
        $results = DB::select('select max(id) as temp from skills');
        $id = $results[0]->temp;

        $display = DB::select('select * from skills where id = ?', [$id]);
        $data = $display[0];

        $data1 = $data->skill;

        $new = explode(',', $data1);
        $skill = [];
        foreach ($new as $key) {
            $temp = explode('-', $key);
            $temp[0] = strtoupper($temp[0]);
            array_push($skill, $temp);
        }

        $data = $this->index();
        $data = $data->data;
        
        return View::make("skills", compact('skill','data'));
        
        
    }



    public function viewPort(){
        $results = DB::select('select * from portfolis');
        $data = $this->index();
        $data = $data->data;
        return View::make("portfolio", compact('results','data'));
    }

    public function mail(Request $request){
        $details = [
            'name' => $request->name,
            'title' => $request->subject,
            'body' => $request->message,
            'mail' => $request->email
        ];
        // Mail::to('karthickraja.gm@gmail.com')->send(new \App\Mail\MyTestMail($details));
        return redirect()->back()->with('success', 'Thanks for contact. I will reach you soon...');
    }


}
