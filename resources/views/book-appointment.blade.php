<!doctype html>
<html lang="en">
<head>
  <title>Narayani Dental &amp; Skin Centere</title>
  <link rel="icon" type="image/x-icon" href="/images/favicon.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    

  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="fonts/flaticon-covid/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border curr-active" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    
    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <div class="mb-0 site-logo"><a href="/" class="mb-0">Narayani<span class="text-primary">.</span> </a></div>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="/#home" class="nav-link">Home</a></li>
                <li class="active"><a href="/book-appointment" class="nav-link">Book Appointment</a></li>
                <li><a href="/#about" class="nav-link">About Us</a></li>


                <li><a href="/#gallary" class="nav-link">Our Gallary</a></li>
                <li><a href="/#contact" class="nav-link">Contact</a></li>
                <li><a href="/login" class="nav-link">Login</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

        </div>
      </div>

    </header>

    

    <div class="hero-v1" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-lg-6 mx-auto text-center text-lg-left">
            <span class="d-block subheading">Narayani Dental &amp; Skin Centere</span>
            <h1 class="heading mb-3">Beautiful Smiles Begin Here!</h1>
            <p class="mb-5">Narayani Dental &amp; Skin Centere is a top and well known Dentist and Dental Clinic in Kendrapara HO.</p>

          </div>
        </div>
      </div>
    </div>


    <div class="site-section" id="book">
        <div class="container">
          <div class="row mb-5">
            <div class="col-lg-7 mx-auto text-center">
              <span class="subheading">Let's Get Checked</span>
              <h2 class="mb-4 section-heading">Book Appointment</h2>
            </div>
          </div>
          <div class="container">
            <div class="mb-3">
              @if(Session::has('message'))
                  <div class="alert alert-success">
                      {{ session()->get('message') }}
                  </div>
              @elseif(Session::has('error_message'))
                  <div class="alert alert-danger">
                      {{ session()->get('error_message') }}
                  </div>
              @endif
            </div>
          </div>
          <form  class="info" action="{{ route('add-appointment') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Appointment Details
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <div class="form-group row">
                                  <div class="col-lg-6 pt-3">
                                    <label for="date">Appointment Date</label>
                                    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date" placeholder="Select Date" minDate="0">
                                    @error('date')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                  </div>
                                  <div class="col-lg-6 pt-3">
                                    <label for="time">Appointment Time</label>
                                    <select class="custom-select form-control @error('time') is-invalid @enderror" name="time" id="time">
                                      <option value="">Select Appointment Time</option>
                                      <option>Morning</option>
                                      <option>Afternoon</option>
                                      <option>Evening</option>
                                    </select>
                                    @error('time')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-lg-6 pt-3">
                                    <label for="category">Category</label>
                                    <select class="custom-select form-control @error('category') is-invalid @enderror" name="category" id="category">
                                      <option value="">Select Appointment Category</option>
                                      <option value="skin" {{ app('request')->input('category') == "skin" ? 'selected' : '' }}>Skin Care</option>
                                      <option value="dental" {{ app('request')->input('category') == "dental" ? 'selected' : '' }}>Dental Care</option>
                                    </select>
                                    @error('category')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                    @enderror
                                  </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Patient Details
                            </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                              
                              <div class="form-group row">
                                <div class="col-lg-6 pt-3">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Patient Name">
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                                <div class="col-lg-6 pt-3">
                                  <label for="age">Age</label>
                                  <input type="number" class="form-control @error('age') is-invalid @enderror" name="age" id="age" placeholder="Patient Age">
                                  @error('age')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <div class="col-lg-6 pt-3">
                                  <label for="phone">Phone Number</label>
                                  <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Phone Number">
                                  @error('name')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                                <div class="col-lg-6 pt-3">
                                  <label for="email">Email Address</label>
                                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email Address">
                                  @error('email')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <div class="col-lg-6 pt-3">
                                  <label for="gender">Gender</label>
                                  <select class="custom-select form-control @error('gender') is-invalid @enderror" name="gender" id="gender">
                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                  </select>
                                  @error('gender')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                                <div class="col-lg-6 pt-3">
                                  <label for="family_members_count">Family members count</label>
                                  <input type="number" class="form-control @error('family_members_count') is-invalid @enderror" name="family_members_count" id="family_members_count" placeholder="Family members count">
                                  @error('family_members_count')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                              </div>
                              
                              <div class="form-group row">
                                <div class="col-lg-6 pt-3">
                                  <label for="address">Address</label>
                                  <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Address">
                                  @error('address')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                                <div class="col-lg-6 pt-3">
                                  <label for="password">Password</label>
                                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password">
                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          {{ $message }}
                                      </span>
                                  @enderror
                                </div>
                              </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-lg-12">
                    <p><button type="submit" class="btn btn-primary" style="float: right;">Confirm Appointment</button></p>
                </div>
            </div>
          </form>
        </div>
      </div>

      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
            <div class="border-top">
              <p class="copyright"><small>
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> Narayani Dental & Skin Centere. All Rights Reserved.</small></p>

              </div>
            </div>

          </div>
        </div>
      </div>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>

  <script src="js/main.js"></script>


</body>
</html>