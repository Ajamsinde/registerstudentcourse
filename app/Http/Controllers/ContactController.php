<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
       $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);
       
    Contact::create($request->only('name', 'email', 'subject', 'message'));
   //  dd($request->all());
        // يمكنك هنا إرسال رسالة أو حفظ البيانات في قاعدة البيانات
        // مثال بسيط: فقط إظهار رسالة نجاح
        // return redirect()->back()->with('success', 'ناما تە گەهشت ، ل نیزیك دێ بەرسفا تە هێتە دان');
        return redirect('/')->with('success', 'ناما تە گەهشت ، ل نیزیك دێ بەرسفا تە هێتە دان');
    }
}
