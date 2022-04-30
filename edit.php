
<!-- ********************Edit One  Contact********************* -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php include('navcont.php'); ?>
    <div class="card mt-5 mb-3 pt-3 pb-3 mx-auto d-block rounded-3 border border-2 border-dark " style="width: 29rem;">
                    <?php include('conn.php');
                        $model = new Ajout();
                        $id=$_REQUEST['id'];
                        $row = $model->edit($id);
                        if (isset($_POST['update'])) {
                            $data['id'] = $id;
                            $data['nam']  = $_POST['nam'];
                            $data['phone']  = $_POST['phone'];
                            $data['email']  = $_POST['email'];
                            $data['adrs']  = $_POST['adrs'];
                           $update = $model->update($data);
                           header("Location: contact.php");
                         }
                        ?>
                        <form class="row g-3 mx-2" method="POST"  id="form3">
                            <h2 class="mt-4">contacts</h2>
                            <p>Contact list : </p>
                            <h3>Add contact:</h3>
                            <div class="col-md-6">
                                <label for="nam" class="fw-bold">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" value="<?php  echo $row['nam']?>" name="nam" id="nam">
                                <p id="msg"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="fw-bold">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter Phone"value="<?php  echo $row['phone']?>" name="phone" id="phone">
                                <p id="mrg"></p>
                            </div>
                            <div class="col-12">
                                <label for="email" class="fw-bold">Email</label>
                                <input type="text" class="form-control" placeholder="Your email"value="<?php  echo $row['email']?>" name="email" id="email">
                                <p id="emil"></p>
                            </div>
                            <div class="col-12">
                                <label for="adrs" class="fw-bold">Address</label>
                                <input type="text" class="form-control" placeholder="Enter address"value="<?php  echo $row['adrs']?>" name="adrs" id="adrs">
                                <p id="ad"></p>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="update" class="btn btn-primary mb-4">Save</button>
                            </div>
                        </form>
                    </div>
    <script type="text/javascript" src="validcont.js"></script>

</body>

</html>