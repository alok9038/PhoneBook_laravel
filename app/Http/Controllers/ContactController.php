<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index(Request $request)
    {
        $search = $request->search;
        if(isset($_GET['search'])):
            $data['records'] = Contact::where('name','LIKE',"%$search%")->get();
        else:
        $data['records'] = Contact::all();
        endif;
        return view('home',$data);
    }

    
    public function create()
    {
        $data['records'] = Contact::all();
        return view('insertContact',$data);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'logo' => 'mimes:jpg,png',
        ]);

        //image insertion
        $filename = time() . "." . $request->dp->extension();
        $request->dp->move(public_path("dp"),$filename);
        
        $c = new Contact();
        $c->name = $request->name;
        $c->contact = $request->contact;
        $c->dp = $filename;
        $c->save();

        return redirect()->back();
    }

    public function show(Contact $contact)
    {
        $data['r'] = $contact;
        //$data['r'] = Contact::where(['id'=>$contact])->first();
        $data['records'] = Contact::orderBy('name', 'asc')->get();
        return view('viewContact',$data);
    }

    
    public function edit(Contact $contact)
    {
        //
    }

    
    public function update(Request $request, Contact $contact)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required',
            'logo' => 'mimes:jpg,png',
        ]);

        //image insertion
        
        
        $c = $contact;
        $c->name = $request->name;
        $c->contact = $request->contact;

        if ($request->hasFile('dp')) {

        $filename = time() . "." . $request->dp->extension();
        $request->dp->move(public_path("dp"),$filename);

        $c->dp = $filename;
        }
        $c->save();

        return redirect()->route('contact.index');
    }

    
    public function destroy(Contact $contact)
    {
        
        $contact->delete();
        return redirect()->back();
    }
}
