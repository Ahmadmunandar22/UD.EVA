<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        
        <title>login admin</title>

        <!--memangggil bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <!--bootstrap icon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <!--custom css-->
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
        <div id="form" class="pt-5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col col-8 p-4 bg-light">
                        <h2 class=" mb-4">Login Admin</h2>
                        <form action="action.login.php" method="POST">

                        <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input id="email" class="form-control" type="email" placeholder="email" required name="email"/>
                            </div>

                        <div class="form-group mb-2">
                            <label for="password">password</label>
                            <input id="password" class="form-control" type="password" placeholder="password" required name="password"/>
                        </div>


                <input name="submit" type="submit" value="kirim" class="btn btn-primary" />

            </form>

        </div>

    </div>

</div>

</div>
    </body>
</html>