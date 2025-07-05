@extends('layouts.app')
@section('title', '  پەیوەندی کرن ب مە')
@section('content')


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>بنگەهێ وەرزش و لاوان - دەرکارێ</span>
        <h2>پەیوەندی کرن بمە</h2>
        <p>ژبو هه ر تێبینیەکێ یان هه ر بسیارەکێ ل ڤێرێ مە ئاگادار بکە</p>
      </div><!-- End Section Title -->


      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>ناڤ و نیشان</h3>
                  <p>زاخو- دەرکارێ</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>ژمارا موبایلێ</h3>
                  <p>07507189829</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>ئیمێل</h3>
                  <p>darkaryouthcenter@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            
       @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif
            <form action="{{ route('contact.submit') }}" method="POST">        
            @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">ناڤ</label>
                  <input type="text" name="name" id="name" class="form-control" required="">
                  @error('name') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">ئیمێل </label>
                  <input type="email" class="form-control" name="email" id="email" required="">
                  @error('email') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">بابەت</label>
                  <input type="text" class="form-control" name="subject" id="subject" required="">
                  @error('subject') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">نامە</label>
                  <textarea class="form-control" name="message" rows="10" id="message" required=""></textarea>
                   @error('message') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                 
                </div>
 <div class="col-md-12 text-center">
      <button type="submit" class="btn btn-success">تۆمار کردن</button>
    </div>
              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->
@endsection






