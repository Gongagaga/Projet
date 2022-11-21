<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contacts;

class ContactUsFormController extends Controller {
    // Create Contact Form
    public function createForm(Request $request) {
      return view('home');
    }
    
    
    
    public function ContactUsForm(Request $request) {
       // dd($request);
        $contacts=new Contacts;
        $request->validate([
             'email' => 'required|email',
             'subject'=>'required|max:25',
             'message' => 'required'
         ]);
         $contacts->email= $request->email;
         $contacts->subject= $request->subject;
         $contacts->message= $request->message;
         $contacts->save();
   
        return back()->with('Merci !', 'Nous avons reçu votre message.');
    }
    
    // public function Teste(){
        
    //     $c=contacts::all();
    //     dd ($c);
    // }

    public function index(){
        
        $contacts=Contacts::all();
        // dd ($contacts);
        return view('admin.admin', ['contacts' => $contacts]);
        
        
    }

    public function destroy(Request $request, $id)
    {       
        $user = Contacts::findOrFail($id);
        $user->delete();
        
        return redirect()->route('admin.contact');
        
    }
    
}