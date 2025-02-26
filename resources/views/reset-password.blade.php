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
                <div><a class="logo" href="{{ route('reset-password') }}"><img class="img-fluid for-light" src="{{ asset('assets/img/logo/logo-1.png') }}" alt="looginpage"><img class="img-fluid for-dark" src="{{ asset('assets/img/logo/logo.png') }}" alt="looginpage"></a></div>
                <div class="login-main">
                  <form class="theme-form" action="{{ route('password.reset.submit') }}" method="POST">
                    @csrf <!-- Laravel CRSF Token -->
                    <input type="hidden" name="token" value="{{ $token }}">
                    <h4>Reset Your Password</h4>
                <div class="row">
                    <h6 class="mt-4">Create Your Password</h6>
                    <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" name="email" required placeholder="Test@gmail.com" value="{{ request()->get('email') }}">
                      </div>
                    <div class="form-group">
                      <label class="col-form-label">New Password</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="password" name="password" required placeholder="*********">
                        @error('password')
                          <small class="text-danger">
                              <div class="error">{{ $message }}</div>
                          </small>
                        @enderror
                        <div class="show-hide"><span class="show"></span></div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-form-label">New Password Confirmation</label>
                      <input class="form-control" type="password" name="password_confirmation" required placeholder="*********">
                      @error('password_confirmation')
                        <small class="text-danger">
                            <div class="error">{{ $message }}</div>
                        </small>
                        @enderror
                    </div>
                    <button class="btn btn-primary btn-block w-100" type="submit">Reset</button>
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
