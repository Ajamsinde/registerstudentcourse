@extends('layouts.app')

@section('title', ' فورما توماركرنا خولان')

@section('content')

 <div class="container section-title" data-aos="fade-up">
        <span>
          فورما تومارکرنا خولان
        </span>
        <h2>تومارکرن ژبۆ خولان</h2>
      </div><!-- End Section Title -->



    <form method="POST" action="{{ route('register.store') }}" class="space-y-6">
     @csrf
  <div class="row gy-4">

    <!-- الاسم -->
    <div class="col-md-6">
      <label for="name" class="pb-2">ناڤ</label>
      <input type="text" name="name" id="name" class="form-control" required>
      @error('name') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- العمر -->
    <div class="col-md-6">
      <label for="age" class="pb-2">تەمەن</label>
      <input type="number" name="age" id="age" class="form-control" required>
      @error('age') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- الجنس -->
    <div class="col-md-6">
      <label for="gender" class="pb-2">رەگەز</label>
      <select name="gender" id="gender" class="form-control" required>
        <option value="">-- هەلبژێرە --</option>
        <option value="ذكر">نێر</option>
        <option value="أنثى">مێ</option>
      </select>
      @error('gender') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- رقم الهاتف -->
    <div class="col-md-6">
      <label for="phone" class="pb-2">ژمارەی تەلەفۆن</label>
      <input type="text" name="phone" id="phone" class="form-control" required>
      @error('phone') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- العنوان -->
    <div class="col-md-12">
      <label for="location" class="pb-2">ناڤچە / شوێن</label>
      <input type="text" name="location" id="location" class="form-control" required>
      @error('location') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- اختيار الدورة -->
    <div class="col-md-12">
      <label for="course" class="pb-2">کورس</label>
      <select name="course" id="course" class="form-control" required>
        <option value="">-- هەلبژێرە کورس --</option>
        <option value="سەرتراشی">سەرتراشی</option>
        <option value="ئنگلیزی">ئنگلیزی</option>
         <option value=" ئنگلیزیا زاروکان">ئنگلیزی زاروکان</option>
         <option value="دروار">دروار</option>
         <option value="کومپیوتەر">کومپیوتەر</option>
         <option value="روپیڤان">روپیڤان</option>
         <option value="قارەمانیا مینزەدێ">قارەمانیا مینزەدێ</option>
          

        <!-- يمكنك إضافة المزيد -->
      </select>
      @error('course') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    <!-- زر الإرسال -->
    <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-success">تۆمار کردن</button>
    </div>

  </div>
</form>



@endsection