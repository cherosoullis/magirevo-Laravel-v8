<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Redirect;
use Auth;

class ContactController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth', ['except' => ['create','store']]);
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $contact = Contact::orderBy('created_at', 'desc')->get();

        return view('contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
    'name' => 'required',
    'email' => 'required|email',
    'subject' => 'required',
    'comment' => 'required',
    'captcha' => 'required|captcha'
    ],[
      'name.required' => 'Είναι απαραίτητo να καταχωρηθεί όνομα',
      'email.required' => 'Είναι απαραίτητo να καταχωρηθεί ηλεκτρονικό ταχυδρομείο',
      'subject.required' => 'Είναι απαραίτητo να καταχωρηθεί θέμα',
      'comment.required' => 'Είναι απαραίτητo να καταχωρηθεί κείμενο',
      'captcha.required' => 'Είναι απαραίτητo να καταχωρηθεί captcha',
      'captcha.captcha' => 'Το captcha δεν είναι ορθό',

    ]);

      $contact = new Contact;
      // dd('hitagaix');
      $contact->name = $request->input('name');
      $contact->email = $request->input('email');
      $contact->category = $request->input('category');
      $contact->subject = $request->input('subject');
      $contact->comment = $request->input('comment');
      // dd($request);
      if($request->file()) {
        // dd('has file');
            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('contact', $fileName, 'public');//contact is the folder to be stored

            // $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $contact->file = '/storage/' . $filePath;
          }

      $contact->save();

      return Redirect::back()->with('success','Το μήνυμα σας έχει σταλεί με επιτυχία');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {

        return view ('contact.show', compact('contact'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->back();
    }

    public function reloadCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }
}
