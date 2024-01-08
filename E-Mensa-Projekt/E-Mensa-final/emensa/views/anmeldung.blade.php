<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Login Form in PHP With Session</title>
</head>
<body style="background:#CCC;">

<div class="container">
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card bg-dark mt-5">
                <div class="card-title bg-primary text-white mt-5">
                    <h3 class="text-center py-3">Login Form in PHP </h3>
                </div>

                <?php
                if($_GET['Empty']==true)
                {
                ?>
                <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>
                <?php
                }
                ?>


                <?php
                if($_GET['Invalid']==true)
                {
                ?>
                <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>
                <?php
                }
                ?>

                <div class="card-body">
                    <form action=" /anmeldung_verfizierenController" method="post">
                        <input type="email" name="Email" placeholder=" User E-Mail adress" class="form-control mb-3">
                        <input type="password" name="Password" placeholder=" Password" class="form-control mb-3">
                        <button class="btn btn-success mt-3" name="Login">Anmeldung</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
