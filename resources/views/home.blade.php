<!-- home.blade.php -->
@extends('layouts.app')
@section('title', '  بنگەهێ و وەرزش و لاوان - دەرکاری')
@section('content')
      <main class="main">
        @if(session('success'))
  <div class="alert alert-success text-center mt-4">
    {{ session('success') }}
  </div>
@endif

<section id="hero" class="hero section py-5">
  <div class="container">
    <div class="row gy-4 align-items-center">

      <!-- الجهة النصية -->
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">

        <!-- العنوان مع شارة التوثيق -->
        <h1 class="mb-3 d-flex align-items-center">
          <span>بنگەهێ وەرزش ولاوان-دەرکاری</span>
          <i class="bi bi-patch-check-fill text-success ms-2 fs-3" title="Verified"></i>
        </h1>

        <!-- نص تعريفي -->
        <p class="mb-4">
          دێ رابیت ب ڤەکرن چەندین خۆلین جودا جودا،  
        </p>

        <!-- زر التسجيل -->
        <div class="d-flex">
          <a href="{{ route('register.form') }}" class="btn btn-success px-4 py-2 rounded-pill">
            <i class="bi bi-pencil-square me-1"></i> خۆ تومارکرن
          </a>
        </div>

      </div>

      <!-- الصورة -->
      <div class="col-lg-6 order-1 order-lg-2 hero-img text-center" data-aos="zoom-out" data-aos-delay="100">
        <img src="{{ asset('assets/img/here.png') }}" class="img-fluid animated" alt="Hero Image">
      </div>

    </div>
  </div>
</section>


    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
               <img src="{{ asset('assets/img/m1.png') }}" class="img-fluid animated" alt="Hero Image">
          </div><!-- End Service Item -->

           <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
               <img src="{{ asset('assets/img/m2.png') }}" class="img-fluid animated" alt="Hero Image">
          </div><!-- End Service Item -->


           <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
               <img src="{{ asset('assets/img/m3.png') }}" class="img-fluid animated" alt="Hero Image">
          </div><!-- End Service Item -->


        </div>

      </div>

    </section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>دەربارەی خۆلان<br></span>
        <h2>هندەك ژ  ئامارێن مە یێت بنگەهی</h2>
      </div><!-- End Section Title -->


    </section><!-- /About Section -->

    <!-- Stats Section -->
    <section id="stats" class="stats section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="{{ $totalStudents }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>رێژا بەشداربوویان دخۆلاندا</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="8" data-purecounter-duration="1" class="purecounter"></span>
              <p>هەژمارا خۆلان</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="12" data-purecounter-duration="1" class="purecounter"></span>
              <p>هەژمارا ماموستایان ژبۆ دانا خۆلان</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="18" data-purecounter-duration="1" class="purecounter"></span>
              <p>فەرمانبەرێن بنگەهی</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- /Stats Section -->

    <!-- Services Section -->
    <section id="services" class="services section light-background">

      <!-- Section Title -->

      <div class="container">

        <div class="row gy-4">

           <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
               <img src="{{ asset('assets/img/m4.png') }}" class="img-fluid animated" alt="Hero Image">
          </div><!-- End Service Item -->


           <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
               <img src="{{ asset('assets/img/m5.png') }}" class="img-fluid animated" alt="Hero Image">
          </div><!-- End Service Item -->


          

         



        </div>

      </div>

    </section><!-- /Services Section -->


    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">

      <div class="container">
        <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
          <div class="col-xl-10">
            <div class="text-center">
              <h3>ژبو پەیوەندی کرنێ کلیك بکە</h3>
              <p>ژبو ئاخڤتن دگەل فەرمانبەرێ مە یێ بنگەهێ وەرزش و لاوان - دەرکارێ ل خارێ کلیك بکە</p>
              <a class="cta-btn btn btn-success" href="tel:07507189829">Call</a>

            </div>
          </div>
        </div>
      </div>

    </section><!-- /Call To Action Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <span>فەرمانبەرێت مە </span>
        <h2>فەرمانبەرێت مە</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

         

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/f1.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Nichervan muhamed salih</h4>
                <span>Rivabari bingahe </span>
                <div class="social">
                
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/f2.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ajam yeahyea kendal</h4>
                <span>chalaky</span>
                <div class="social">
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Team Member -->

        </div>

      </div>

    </section><!-- /Team Section -->


  </main>

@endsection
