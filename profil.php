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
    <?php  include('navcont.php')?>
 <p class="fs-3 mt-5 mx-3">Welcome, <?php echo $_SESSION['name'];?> !!</p>
 <p class="fs-4 mt-3 mx-3">Your profile :</p>   

 <table class="table">
   
  <tbody>
    <tr>
      <th scope="row">Username :</th>
      <td><?php echo $_SESSION['name'];?></td>
      
    </tr>
    <tr>
    <th scope="row">Signup date :</th>
      <td><?php include('conn.php');
        $model = new Model();
         $model->Date();
        ?></td>
    </tr>
    <tr>
    <th scope="row">Last login :</th>
    
      <td><?php
       echo $_SESSION['date'];?></td>
    </tr>
  </tbody>
</table>
    <script type="text/javascript" src="valid.js"></script>
</body>

</html>