<?php include '../function.php'; ?>

<?php 

    if (isset($_SESSION['login']['status']) == true){
        redirect('admin/index.php');
    }

    if (isset($_POST['login'])){
        prosesLogin();
    }

?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        html,
        body { height: 100%;}

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
            font-size: 3.5rem;
            }
        }

       
        body {
            display: flex;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #f5f5f5;
        }

        .form-login {
            width: 100%;
            max-width: 350px;
            padding: 15px;
            margin: auto;
        }

        .form-login .form-floating:focus-within {
            z-index: 2;
        }

        .form-login input[type="email"] {
            margin-bottom: -1px;
            border-radius: 15px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-login input[type="password"] {
            margin-bottom: 10px;
            border-radius: 15px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>
</head>
<body class="text-center">
    <main class="form-login">
        <form method="POST" name="login" action="">
            <img class="mb-3" src="<?= base_url('assets/images/FKOM.png') ?>" alt="" width="130">
            <h1 class="h3 mb-3">Form Login</h1>

            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="email" name="email">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" name="login" type="submit">LOGIN</button>
            <p class="mt-5 mb-3 text-muted">&copy; 2021 - ANDREY ANDRIANSYAH</p>
        </form>
    </main>    
  </body>
</html>
