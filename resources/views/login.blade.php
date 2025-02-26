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

    <div class="container d-flex justify-content-center align-items-center" style="min-height: 60vh; padding-top: 10px; padding-bottom: 10px;">
        <div class="col-lg-6 col-md-8 col-sm-10">
        <div class="card shadow-lg rounded-4">
            <div class="card-header text-center">
                <h4 class="card-title">Form Login</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('login') }}" method="POST" enctype="multipart/form-data" class="form-valide-with-icon needs-validation" novalidate>
                    @csrf
                    <!-- Email -->
                    <div class="mb-3">
                        <label class="text-label form-label" for="email">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" id="email" required>
                            <div class="invalid-feedback">Please Enter an email address.</div>
                        </div>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label class="text-label form-label" for="password">Password *</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" id="password" required>
                            <span class="input-group-text show-pass" id="togglePassword" style="cursor: pointer;">
                                <i class="fa fa-eye-slash"></i>
                            </span>
                            <div class="invalid-feedback">Please Enter a password.</div>
                        </div>
                    </div>

                    <script>
                    document.getElementById("togglePassword").addEventListener("click", function () {
                        let passwordInput = document.getElementById("password");
                        let icon = this.querySelector("i");

                        if (passwordInput.type === "password") {
                            passwordInput.type = "text";
                            icon.classList.remove("fa-eye-slash");
                            icon.classList.add("fa-eye");
                        } else {
                            passwordInput.type = "password";
                            icon.classList.remove("fa-eye");
                            icon.classList.add("fa-eye-slash");
                        }
                    });
                    </script>


                    <div class="form-group mb-0">
                        <div class="custom-checkbox p-0">
                        <input id="checkbox1" type="checkbox">
                        <label class="text-muted" for="checkbox1">Remember password</label>
                        </div><a class="link" href="{{ route('reset-password') }}">Forgot password?</a>
                        <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="{{ route('register') }}">Create Account</a></p>
                    </div>

                    <!-- Tombol Submit -->
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('login') }}" class="btn btn-secondary">Batal</a>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


   <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer top-center">
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
