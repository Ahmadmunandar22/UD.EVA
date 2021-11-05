<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        
        <title>registrasi admin</title>

        <!--memangggil bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--bootstrap icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--custom css-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <!-- Navbar brand -->
                <a class="navbar-brand" href="#">
                <img src="logo.jpg" style="max-height:80px;" />
                </a>

                <!-- Navbar toggler -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>

                <!-- Navbar collapse -->
                <div class="collapse navbar-collapse" id="navbarSupporteedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">login admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="form" class="pt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col col-8 p-4 bg-light">
                        <form action="action.register.php" method="POST">
                            <div class="form-group mb-2">
                                <label for="nama">Nama Lengkap</label>
                                <input name="nama" id="nama" class="form-control" type="text" placeholder="Nama Lengkap" required>
                            </div>

                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input name="email" id="email" class="form-control" type="email" placeholder="email"  required>
                            </div>


                            <div class="form-group mb-2">
                                <label for="password">password</label>
                                <input name="password" id="password" class="form-control" type="password" placeholder="password" required>
                            </div>
                            <div class="form-group mb-2">
                                <label for="repassword">konfirmasi password</label>
                                <input name="repassword" id="repassword" class="form-control" type="password" placeholder="ulangi password" required>
                            </div>
                            <input name="submit" type="submit" value="kirim" class="btn btn-primary mt-4">

                        </form>

                    </div>

                </div>

            </div>

        </div>
    </body>
</html>