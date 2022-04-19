<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include('nav.php'); ?>
    <div id="login">
        <?php
        include('conn.php');
        $model = new Model();
        $delet = $model->login();
        ?>
        <div class="col-5 mx-auto" style="width: 400px;">
            <form class="container-fluid" method="POST" id="form2">
                <h2 class="text-center mb-5 mt-4"> Authenticate </h2>
                <div class="mb-3 ">
                    <label for="user" class="form-label">Username</label>
                    <input type="text" class="form-control" name="user" id="name">
                    <p id="mgs"></p>
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" name="pass" id="pass">
                    <p id="pasw"></p>
                </div>
                <button class="btn btn-primary d-grid  col-12 mx-auto mt-5 mb-5" type="submit" name="submit">Login</button>
                <p class="mt-4 mb-5">No account ??? <a href="sign.php" class="text-danger"> Sign up </a> here .</p>
            </form>
        </div>
    </div>
    
    <script type="text/javascript" src="validation.js"></script>
</body>

</html>