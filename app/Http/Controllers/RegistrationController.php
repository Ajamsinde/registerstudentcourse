<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Registration;

class RegistrationController extends Controller
{

    public function create()
{
    // جلب الكورسات المفتوحة فقط (أقل من 35 طالب)
    $availableCourses = \App\Models\Registration::select('course')
        ->groupBy('course')
        ->havingRaw('COUNT(*) < 35')
        ->pluck('course');

    return view('register', compact('availableCourses'));
}

    public function form()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
          'name' => ['required', 'regex:/^[\p{Arabic}\s]+$/u', 'unique:registrations,name'],
        'age' => ['required', 'integer', 'min:8'],
        'gender' => ['required'],
        'phone' => ['required'],
        'location' => ['required'],
        'course' => ['required'],
    ], [
        'name.required' => 'پێدڤیە ناڤێ  خۆ بنڤیسی',
        'name.regex' => 'پێدڤیە ناڤێ خۆ ب پیتین  عربی یان کوردی بنڤیسی',
        'name.unique' => 'ئەڤ ناڤە هاتیە تومارکرن بەری نوکە ببورە',
        'age.min' => 'ببورە نەشیێ ناڤێ خۆ توماربکی ژبەر ژیێ تە کەمتر ژ 8 ساڵە',
    ]);

        $count = \App\Models\Registration::where('course', $validated['course'])->count();

        if ($count >= 120) {
            return redirect()->back()->withErrors(['course' => 'ببورە  ئەڤ خۆلە یا هاتی گرتن ژبەر  کو رێژەکا زورا خو تومارکری'])->withInput();
        }

        Registration::create($validated);

        return redirect()->route('thank', ['name' => $request->name, 'course' => $request->course, 'phone' => $request->phone]);
    }



    }


