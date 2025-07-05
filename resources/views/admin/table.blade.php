<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>dashboard/youthcenter Darkar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />



  

    

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@400;700&display=swap" rel="stylesheet">

    <!-- Icons and Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libs CSS -->
    <link href="{{ asset('dashboard-assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard-assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

    <!-- Bootstrap + Template CSS -->
    <link href="{{ asset('dashboard-assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard-assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">B W L Darakaey</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('assets/img/logo.jpg')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>Ajam yeahyea</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.dashboard') }}"  class="nav-item nav-link "><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        
                        <div class="dropdown-menu bg-transparent border-0">
                            
                        </div>
                    </div>
                  
                     <a href="{{ route('admin.table') }}"  class="nav-item nav-link active"><i class="fa fa-table me-2"></i>course Tables </a>
                     <a href="{{ route('admin.contacttable') }}"  class="nav-item nav-link "><i class="fa fa-table me-2"></i>contact table </a>
                    <a href="{{ route('admin.logout') }}"  class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>log out</a>
                    <div class="nav-item dropdown">
                    
                        <div class="dropdown-menu bg-transparent border-0">
                        
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="hhh.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>

                

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('assets/img/logo.jpg')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ route('admin.logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->






            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                      
                        <form method="GET" action="{{ route('admin.dashboard') }}" class="d-none d-md-flex ms-4">
                    <input type="text" name="search" value="{{ request('search') }}" class="form-control border-0"  placeholder="Search">
                    
                </form>
                      
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-dark">
                                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                    <th class="px-4 py-2 text-right border-b bg-gray-200">ناڤ</th>
                                    <th class="px-4 py-2 text-right border-b bg-gray-200">تەمەن</th>
                                    <th class="px-4 py-2 text-right border-b bg-gray-200">رەگەز</th>
                                    <th class="px-4 py-2 text-right border-b bg-gray-200">ژمارا موبایلێ</th>
                                    <th class="px-4 py-2 text-right border-b bg-gray-200">ناڤچە</th>
                                    <th class="px-4 py-2 text-right border-b bg-gray-200">خۆل</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registrations as $reg)
                                <tr>
                                    <td><input class="form-check-input" type="checkbox"></td>
                                     <td >{{ $reg->name }}</td>
                                    <td >{{ $reg->age }}</td>
                                    <td>{{ $reg->gender }}</td>
                                    <td>{{ $reg->phone }}</td>
                                    <td>{{ $reg->location }}</td>
                                    <td>{{ $reg->course }}</td>
                                    <td>
                                       
                                          <form action="{{ route('admin.dashboard.destroy', $reg->id) }}" method="POST" onsubmit="return confirm('تۆ پشت راستی تە دڤێت ژێ ببی؟');">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger">ژێبرن</button>
                                        </form>
                                    </td>
                                </tr>
                                 @endforeach
                                
                            </tbody>
                         
                        </table>
                         <form method="GET" action="{{ route('export.registrations') }}">
            <label> خۆلی هەلبژیرە:</label>
            <select name="course" class="border px-2 py-1 rounded">
                <option value=""> هەمی خۆل</option>
                   <option value="سەرتراشی">سەرتراشی</option>
                    <option value="ئنگلیزی">ئنگلیزی</option>
                    <option value=" ئنگلیزیا زاروکان">ئنگلیزی زاروکان</option>
                    <option value="دروار">دروار</option>
                    <option value="کومپیوتەر">کومپیوتەر</option>
                    <option value="روپیڤان">روپیڤان</option>
                    <option value="قارەمانیا مینزەدێ">قارەمانیا مینزەدێ</option>
                <!-- أضف الدورات اللي عندك -->
            </select>

    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">
       هەلگرتن   Excel
    </button>
</form>

                       

                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->


           



        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

 <!-- JS Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('dashboard-assets/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('dashboard-assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Main JS -->
    <script src="{{ asset('dashboard-assets/js/main.js') }}"></script>
</body>

</html>