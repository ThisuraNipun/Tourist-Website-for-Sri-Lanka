<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tourist Guide Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1a2a4b;
        }
        .login-container {
            width: 90%;
            max-width: 900px;
            min-height: 600px;
            background-color: #1a2a4b;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
        }
        .image-section {
            background-image: url('uploaded:IMG_6106-1000x750.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }
        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 1.5rem;
        }
        .login-form-section {
            background-color: #2a3a5b;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }
        .social-icons {
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        .social-icons:hover {
            filter: grayscale(0%);
        }
        .form-control:focus {
            box-shadow: none;
            border-color: white;
            color: white;
        }
        .form-control::placeholder {
            color: #d1d5db;
        }
        @media (max-width: 768px) {
            .image-section {
                height: 300px;
                border-top-right-radius: 1.5rem;
                border-bottom-left-radius: 0;
            }
            .login-form-section {
                border-top-right-radius: 0;
                border-bottom-left-radius: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="d-flex align-items-center justify-content-center min-vh-100 p-4">
        <!-- Login Container -->
        <div class="login-container d-flex flex-column flex-md-row">
            <!-- Left Image Section -->
            <div class="image-section col-12 col-md-6 position-relative">
                <div class="image-overlay rounded-4"></div>
                <div class="d-flex flex-column justify-content-end h-100 p-5 text-white position-relative" style="z-index: 1;">
                    <h1 class="display-5 fw-bold lh-base drop-shadow mb-5">
                        TRAVEL IS THE ONLY THING YOU BUY THAT MAKES YOU RICHER
                    </h1>
                    <div class="d-flex gap-3">
                        <a href="#" class="social-icons p-2 rounded-circle border border-white d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-instagram fa-xl text-white"></i>
                        </a>
                        <a href="#" class="social-icons p-2 rounded-circle border border-white d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-twitter fa-xl text-white"></i>
                        </a>
                        <a href="#" class="social-icons p-2 rounded-circle border border-white d-flex align-items-center justify-content-center">
                            <i class="fa-brands fa-facebook-f fa-xl text-white"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Form Section -->
            <div class="login-form-section col-12 col-md-6 p-5 d-flex flex-column justify-content-center">
                <h2 class="text-white text-center mb-4 fw-bold">LOGIN</h2>

                <div class="d-flex gap-4 mb-4 justify-content-center">
                    <a href="#" class="text-secondary hover:text-white transition-colors duration-300">
                        <i class="fa-brands fa-google fa-2xl"></i>
                    </a>
                    <a href="#" class="text-secondary hover:text-white transition-colors duration-300">
                        <i class="fa-brands fa-twitter fa-2xl"></i>
                    </a>
                    <a href="#" class="text-secondary hover:text-white transition-colors duration-300">
                        <i class="fa-brands fa-facebook-f fa-2xl"></i>
                    </a>
                    <a href="#" class="text-secondary hover:text-white transition-colors duration-300">
                        <i class="fa-brands fa-linkedin-in fa-2xl"></i>
                    </a>
                </div>

                <p class="text-secondary text-center mb-4">or use your email account</p>

                <form>
                    <!-- Email Input -->
                    <div class="mb-4 position-relative">
                        <input type="email" class="form-control bg-transparent border-0 border-bottom border-secondary text-white py-2" id="email" placeholder="Email">
                        <i class="fa-solid fa-envelope text-secondary position-absolute end-0 top-50 translate-middle-y me-3"></i>
                    </div>

                    <!-- Password Input -->
                    <div class="mb-4 position-relative">
                        <input type="password" class="form-control bg-transparent border-0 border-bottom border-secondary text-white py-2" id="password" placeholder="Password">
                        <i class="fa-solid fa-lock text-secondary position-absolute end-0 top-50 translate-middle-y me-3"></i>
                    </div>

                    <div class="d-flex justify-content-end mb-4">
                        <a href="#" class="text-secondary text-sm hover:text-white text-decoration-none">Forgot Your Password?</a>
                    </div>

                    <!-- Submit Button -->
                    <div class="d-grid">
                        <button type="submit" class="btn btn-light text-primary rounded-pill py-3 fw-bold shadow-sm">
                            ENTER
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
