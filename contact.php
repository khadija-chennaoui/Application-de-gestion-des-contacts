<!-- ********************L'origine de table contact********************* -->
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
    <?php include('navcont.php');?>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark mt-5 col-3 mx-auto d-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New Contact
    </button>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Remplir le formulaire suivant </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card mt-5 mb-3 pt-3 pb-3  d-block rounded-3 border border-2 border-dark " style="width: 29rem;">
                        <?php include('conn.php');
                        $model = new Ajout();
                        $insert = $model->insert(); ?>
                        <form class="row g-3 mx-2" method="POST" action="contact.php" id="form3">
                            <h3>Add Contact:</h3>
                            <div class="col-md-6">
                                <label for="nam" class="fw-bold">Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="nam" id="nam">
                                <p id="msg"></p>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="fw-bold">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter Phone" name="phone" id="phone">
                                <p id="mrg"></p>
                            </div>
                            <div class="col-12">
                                <label for="email" class="fw-bold">Email</label>
                                <input type="text" class="form-control" placeholder="Your email" name="email" id="email">
                                <p id="emil"></p>
                            </div>
                            <div class="col-12">
                                <label for="adrs" class="fw-bold">Address</label>
                                <input type="text" class="form-control" placeholder="Enter address" name="adrs" id="adrs">
                                <p id="ad"></p>
                            </div>

                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary mb-4">Save</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <h2 class="mt-4 mx-2">Contact lists :</h2>
    <div class="d-flex justify-content-center align-items-center"> 
        <div class="card mt-5  pt-3 pb-2 rounded-3  border-2 border-dark" style="width: 80%; overflow-x: auto;">   
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">Name</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" class="text-center">Phone</th>
                        <th scope="col" class="text-center">Address</th>
                        <th scope="col" class="text-center"></th>
                        <th scope="col" class="text-center"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $model = new Model();
                    $rows = $model->fetch($_SESSION['id']);
                    if($rows)
                    {
                    foreach ($rows as $row){
                    ?>
                        <tr>
                            <td class="text-nowrap text-center"> <?php echo $row['nam']; ?></td>
                            <td class="text-nowrap text-center"> <?php echo $row['phone']; ?></td>
                            <td class="text-nowrap text-center"> <?php echo $row['email']; ?></td>
                            <td class="text-nowrap text-center"> <?php echo $row['adrs']; ?></td>
                            <td class="text-nowrap text-center">
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge bg-success">Edit</a>
                                <a href="delet.php?id=<?php echo $row['id'];?>"  class="badge bg-danger">Delete</a>
                            </td>
                        </tr>
                    <?php
                    }
                }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script type="text/javascript" src="validcont.js"></script>
</body>

</html>