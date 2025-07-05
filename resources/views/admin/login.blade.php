@extends('layouts.app')
@section('title', '  چوونا ژور بۆ ئەدمێن')
@section('content')


  <main class="main">

<!-- Login Admin Section -->
<section id="admin-login" class="section bg-light py-5">
  <div class="container" data-aos="fade-up">

    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card shadow p-4">
          <h3 class="text-center mb-4 text-success"><i class="bi bi-shield-lock-fill me-2"></i> چوونا ژور  تنێ  ئەدمێن </h3>

          <form method="POST" action="{{ route('admin.login') }}" class="needs-validation" novalidate>
            @csrf
 
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">ئیمێل</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" class="form-control" name="email" id="email" required placeholder="example@email.com">
              </div>
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label"> ژمارا نهینی</label>
              <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" class="form-control" name="password" id="password" required placeholder="••••••••">
              </div>
            </div>

            <!-- Submit Button -->
            <div class="d-grid">
              <button type="submit" class="btn btn-success btn-lg">
                <i class="bi bi-box-arrow-in-right me-1"></i> چوونا ژور
              </button>
            </div>
          </form>

        </div>
      </div>
    </div>

  </div>
</section>

  </main>

@endsection