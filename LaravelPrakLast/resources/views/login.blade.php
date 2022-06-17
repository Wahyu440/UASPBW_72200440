<!doctype html>
<html lang="en">

<head>
    <title>Login Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="background-color: #9772FB;">
            <div class="col-lg-12 col-md-9 col-sm-8 col-12 vh-100 mt-2 text-left text-white"
                style="background-color: #9772FB;">
                <form action="/user/ceklogin" method="POST">
                    @csrf
                    <br>
                    <br>
                    <br>
                    <br>
                    @if (session('alertLogout'))
                    <div class="alert alert-primary alert-dismissible fade show" role="alert">
                        <strong>{{ session('alertLogout') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <br>
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                                <div class="card text-white" style="border-radius: 1rem; background-color: #764AF1;">
                                    <div class="card-body p-5 text-center">
                                        <div class="mb-md-5 mt-md-4 pb-5">
                                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                            <p class="text-white-50 mb-5">Please enter your email and password!</p>

                                            <div class="form-outline form-white mb-4">
                                                <input type="email" id="typeEmailX" name="email"
                                                    class="form-control form-control-lg" placeholder="Email" />
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="password" id="typePasswordX" name="password"
                                                    class="form-control form-control-lg" placeholder="Password" />
                                            </div>
                                            <button class="btn btn-outline-light btn-lg px-5"
                                                type="submit">Login</button>

                                            <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                                <a href="#!" class="text-white"><i
                                                        class="fab fa-facebook-f fa-lg"></i></a>
                                                <a href="#!" class="text-white"><i
                                                        class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                            </div>
                                        </div>
                                        <div>
                                            <p class="mb-0">Don't have an account? <a href="#!"
                                                    class="text-white-50 fw-bold">Sign Up</a>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="text-center text-white fixed-bottom" style="background-color: #764AF1;">
        <!-- Grid container -->
        <div class="container"></div>
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center">
            © Copyright : Wahyu Vivacious
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>