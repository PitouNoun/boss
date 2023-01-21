<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;
class PageController extends Controller
{
    //
    public function showIndex()
    {
        return view('index');
    }
    public function showAbout()
    {
        return view('pages.about');
    }
    public function showBlog()
    {
        return view('pages.blog');
    }
    public function showClass()
    {
        return view('pages.class');
    }
    public function showContact()
    {
        return view('pages.contact');
    }
    public function showGallery()
    {
        return view('pages.gallery');
    }
    public function showSingle()
    {

        return view('pages.single');
    }
    public function showTeam()
    {

        return view('pages.team');
    }
    public function showList()
    {
        $list = DB::select("select * from student_data");
        return view('pages.studentList',['lists'=> $list]);
    }
    public function msgList()
    {
        $list = DB::select("select * from contact");
        return view('pages.messageList',['lists'=> $list]);
    }

    public function sendForm(Request $re)
    {
        $contact = new Contact();
        $contact->fullname = $re->fullname;
        $contact->email = $re->email;
        $contact->subject = $re->subject;
        $contact->message = $re->message;
        $contact->save();
        return redirect('/contact')->with('status','Data from Contact has been successfully inserted into the database');
    }
}
