<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Registration;
use App\Models\Contact;
class AdminController extends Controller
{


     public function courseSummary()
    {
        // حساب المجموع الكلي للطلاب في جميع الدورات
        $totalStudents = Registration::count();

        return view('home', compact('totalStudents'));
    }

    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $admin = DB::table('admins')->where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_logged_in', true);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['email' => 'بيانات الدخول غير صحيحة']);
    }

  public function dashboard(Request $request)
{


    if (!Session::get('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }

    // الحصول على قيمة البحث من الطلب
    $search = $request->get('search');
    
    // تصفية البيانات إذا تم تقديم استعلام بحث
    if ($search) {
        $registrations = DB::table('registrations')
            ->where('name', 'like', "%{$search}%")  // تصفية بالاسم
            ->orWhere('course', 'like', "%{$search}%") // تصفية بالدورة
            ->get();
    } else {
        // إذا لم يكن هناك بحث، إحضار جميع المسجلين
        $registrations = DB::table('registrations')->get();
    }

   // return view('admin.dashboard', compact('registrations'));

   // ✅ إحصائيات
    $totalRegistrations = DB::table('registrations')->count();
    $uniqueCourses = DB::table('registrations')->distinct('course')->count();
    $totalMales = DB::table('registrations')->where('gender', 'ذكر')->count();
    $totalFemales = DB::table('registrations')->where('gender', 'أنثى')->count();
   $registrationsByCourse = DB::table('registrations')
    ->select('course', DB::raw('count(*) as total'))
    ->groupBy('course')
    ->get();
    

return view('admin.dashboard', compact(
    'registrations', 
    'totalRegistrations', 
    'uniqueCourses', 
    'totalMales', 
    'totalFemales',
    'registrationsByCourse' // هنا
));

}


    public function logout()
    {
        Session::forget('admin_logged_in');
        return redirect()->route('admin.login.form');
    }

        public function table()
    {

         if (!Session::get('admin_logged_in')) {
        return redirect()->route('admin.login.form');
    }

    // الحصول على قيمة البحث من الطلب
     


   // return view('admin.dashboard', compact('registrations'));

   $registrations = DB::table('registrations')->get();
    

return view('admin.table', compact('registrations'));
    }


     public function destroy($id)
    {
        $registration = Registration::findOrFail($id);
        $registration->delete();

        return redirect()->route('admin.table')->with('success', 'تم الحذف بنجاح');
    }



     public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacttable', compact('contacts'));
    }


}