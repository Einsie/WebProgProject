<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliyhteisö</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="/./style/site.css">



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="/./js/myjs.js"></script>
</head>
</head>

<body class="customaBody">

    <nav class="navbar navbar-expand-md position-sticky navbar-light">
        <div class="navbar-brand nav-link">
            <h1><a href="/./index.php">Peliyhteisö</a></h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapse" aria-expanded="false" aria-controls="multiCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="multiCollapse">
            <div class="navbar-nav">
                <a class="nav-item dropdown-item" href="/./info/info.php">Info</a>
                <a class="nav-item dropdown-item" href="/./games/games.php">Pelit</a>
                <a class="nav-item dropdown-item" href="/./feedback/feedback.php">Palaute</a>
            </div>

            <div class="navbar-nav">
                <a class="nav-item dropdown-item" href="/./signup/signup.php">Rekisteröidy</a>
            </div>
        </div>
    </nav>
    <div>

    </div>

    <div class="container" id="firstContainer">
        <div class="row">
            <h1>Rekisteröidy</h1>
            <div class="col">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Sähköpostiosoite</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nimi@esimerkki.com">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Anna 4-15 kirjaimininen salasana ilman välilyöntejä">
                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Toista salasana">
                    <button type="submit" class="btn btn-primary mb-3">Sumbit</button>
                </div>
            </div>


        </div>

    </div>


    <footer>

    </footer>

</body>

</html>