<!DOCTYPE html><html lang="en"><head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Mulyagiri">
	<meta property="og:title" content="Mulyagiri">
	<meta property="og:description" content="Mulyagiri">
	<meta property="og:image" content="Mulyagiri">
	<meta name="format-detection" content="Mulyagiri">
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<!-- PAGE TITLE HERE -->
	<title>Mulyagiri</title>
	<!-- FAVICONS ICON -->
<link rel="shortcut icon" type="image/png" href="{{ asset('assets/images/logo/mulyagiri.png') }}">

<!-- Nice Select CSS -->
<link href="{{ asset('assets/css/nice-select.css') }}" rel="stylesheet">

<!-- Owl Carousel CSS -->
<link href="{{ asset('assets/css/owl.carousel.css') }}" rel="stylesheet">

<!-- Style CSS -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}">

<style>
    html, body {
height: 100%;
display: flex;
flex-direction: column;
}

.container {
flex-grow: 1;
display: flex;
justify-content: center;
align-items: center;
padding-top: 50px;
padding-bottom: 50px;
}

.footer {
width: 100%;
text-align: center;
padding: 20px 0;
background: #f8f9fa;
position: relative;
bottom: 0;
}

    </style>


</head>
<body>

    <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">
            <div class="login-card login-dark">
              <div>
                <div><a class="logo" href="{{ route('reset-password') }}"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/mulyagiri.png') }}" style="width: 80px" alt="loginpage"><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/mulyagiri.png') }}" style="width: 80px" alt="loginpage"></a></div>
                <div class="login-main">
                  <form class="theme-form" action="{{ route('reset-password.submit') }}" method="POST">
                    @csrf <!-- Laravel CRSF Token -->
                    <h4>Reset Your Password</h4>
                    <div class="form-group">
                      <label class="col-form-label">Enter Your Email</label>
                      <div class="row">
                        <div class="col-8 col-sm-9">
                          <input name="email" class="form-control mb-1" type="tel" required placeholder="your email@gmail.com">
                            @error('email')
                                <small class="text-danger">
                                    <div class="error">{{ $message }}</div>
                                <small>
                            @enderror
                        </div>
                        <div class="col-12">
                          <div class="text-end">
                          </div>
                        </div>
                      </div>
                    </div>
                <div class="row">
                      <button class="btn btn-primary btn-block w-100" type="submit">Send</button>
                    </div>
                    <p class="mt-4 mb-0 text-center">Already have an password?<a class="ms-2" href="{{ route('login')}}">Sign in</a></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


   <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed & Developed by <a href="https://dexignlab.com/" target="_blank">DexignLab</a> 2022</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


	</div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
 <!-- Required vendors -->

<script src="{{ asset('assets/js/global.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('assets/js/apexchart.js') }}"></script>

<script src="{{ asset('assets/js/Chart.bundle.min.js') }}"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('assets/js/jquery.peity.min.js') }}"></script>

<!-- Dashboard 1 -->


<script src="{{ asset('assets/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/js/dlabnav-init.js') }}"></script>
<script src="{{ asset('assets/js/demo.js') }}"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>


<script>
    ClassicEditor
        .create(document.querySelector('#editor1'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>




</body></html>


