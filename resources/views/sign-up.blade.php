<!DOCTYPE html><html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Sign Up - Create Account</title>
                    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;600&display=swap" rel="stylesheet">
                        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
                            <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
                                </head>
                                    <body>
                                        <div class="container-fluid p-0">
                                    <div class="row m-0">
                                <div class="col-12 p-0">
                            <div class="login-card">
                        <div>
                    <div class="login-main">
                <form class="theme-form" method="POST" action="{{ route('register') }}">
            <h4>Create Your Account</h4>
        <p>Enter your personal details to create an account</p>
            @csrf
                <!-- Full Name -->
                    <div class="form-group">
                        <label for="name" class="col-form-label pt-0">Your Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Full Name" required>
                                @error('name')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                            </div>
                                                <!-- Email -->
                                            <div class="form-group">
                                        <label for="email" class="col-form-label">Email Address</label>
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email@example.com" required>
                                @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                <!-- Password -->
            <div class="form-group">
        <label for="password" class="col-form-label">Password</label>
            <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="*********" required>
                @error('password')
                    <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                            </div>
                                <!-- Confirm Password -->
                                    <div class="form-group">
                                        <label for="password_confirmation" class="col-form-label">Confirm Password</label>
                                            <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder="*********" required>
                                        </div>
                                    <!-- Privacy Policy -->
                                <div class="form-group mb-0">
                            <div class="custom-checkbox">
                        <input type="checkbox" name="terms" id="terms" required>
                    <label for="terms" class="text-muted">I agree to the <a href="#">Privacy Policy</a>
                </label>
            </div>
        </div>
            <!-- Submit Button -->
                <button class="btn btn-primary btn-block w-100 mt-3" type="submit" href="">Create Account</button>
                    <p class="mt-4 mb-0 text-center">Already have an account?
                        <a href="{{ route('login') }}">Sign In</a>
                            </p>
                                </form>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Scripts -->
                <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
            <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
        </body>
            </html>
