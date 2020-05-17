<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function getListContact()
    {
        $data['contact'] = Contact::where('state',0)->orderby('id','DESC')->paginate(3);
        return view('backend.contact.contact',$data);
    }
    public function getProcessed()
    {
        $data['processeds'] = Contact::where('state',1)->orderby('updated_at','DESC')->paginate(3);
        return view('backend.contact.processed',$data);
    }
    public function getXuLy(request $r, $id)
    {
        $contact = Contact::find($id);
        $contact->state = 1;
        $contact->save();
        return redirect(route('processed'));
    }
    public function postContact(ContactRequest $r)
    {
        $contact = new Contact();
    	$contact->name = $r->name;
    	$contact->email = $r->email;
    	$contact->national = $r->national;
    	$contact->message = $r->message;
    	$contact->state = 0;
    	$contact->save();
    	return redirect()->back()->with('lienhe','Gửi thành công');
    }
}
