<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-fluid" style="background-color: #764AF1;">
        <div class="row">
            <div class="col-lg-12 text-center text-info">
                <nav class="navbar navbar-dark" style="background-color: #764AF1;">
                    <a class="navbar-brand" href="#"><i class="bi bi-house-fill"></i></a>
                    <div class="btn-group">
                    <div class="dropdown float-right">
                        <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #9772FB;">
                            <i class="bi bi-person-square"></i> {{ Auth::user()->nama_user ?? '' }}
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/user">Data Pengguna</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </div>
                </div>
                </nav>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-white">
        <div class="row" style="background-color: #9772FB;">
            <div class="col-lg-2 col-md-3 col-sm-4 col-12 px-3" style="background-color: #764AF1;">
                <div class="row text-left">
                    <div class="col-lg-11 col-md-3 col-sm-4 col-12 vh-100">
                        <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical"
                            style="background-color: #764AF1;">
                            <a class="nav-link text-white rounded-0 p-2 {{ ($cek === 'home') ? 'active':'' }}"
                                href="/home">Home</a>
                            <a class="nav-link text-white rounded-0 p-2 {{ ($cek === 'dosen') ? 'active':'' }}"
                                href="/dosen">Dosen</a>
                            <a class="nav-link text-white rounded-0 p-2 {{ ($cek === 'mahasiswa') ? 'active':'' }}"
                                href="/mahasiswa">Mahasiswa</a>
                            <a class="nav-link text-white rounded-0 p-2 {{ ($cek === 'matakuliah') ? 'active':'' }}"
                                href="/matakuliah">Matakuliah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-10 col-md-9 col-sm-8 col-12 vh-100 mt-2 text-left text-white"
                style="background-color: #9772FB;">
                {{-- Aticle --}}
                @yield('content')
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