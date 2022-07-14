<?php
include 'foo.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#create"><i class="fa fa-plus"></i></button>
                <table class="table table-striped table-hover mt-2">
                    <thead class="table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        <?php
                            foreach ($result as $res){ 
                        ?>
                                <tr>
                                    <td><?php echo $res -> id; ?></td>
                                    <td><?php echo $res -> name; ?></td>
                                    <td><?php echo $res -> email; ?></td>
                                    <td>
                                        <a href="id?=<?php echo $res -> id; ?>" data-bs-toggle="modal" data-bs-target="#edit<?php echo $res -> id; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                        <a href="id?=<?php echo $res -> id; ?>" data-bs-toggle="modal" data-bs-target="#delete<?php echo $res -> id; ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>

                                <!-- Modal edit -->
                                <div class="modal fade" id="edit<?php echo $res -> id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update notice</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="?id=<?php echo $res -> id; ?>" method="POST">
                                                    <div class="form-group">
                                                        <label for="create-name">Name</label>
                                                        <input type="text" class="form-control" name="name" id="create-name" value="<?php echo $res -> name; ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="create-email">Email</label>
                                                        <input type="text" class="form-control" name="email" id="create-email" value="<?php echo $res -> email; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="edit">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal delete -->
                                <div class="modal fade" id="delete<?php echo $res -> id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete notice №<?php echo $res -> id; ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form action="?id=<?php echo $res -> id; ?>" method="POST">
                                                
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<!-- Modal add -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add notice</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="foo.php" method="POST">
                    <div class="form-group">
                        <label for="create-name">Name</label>
                        <input type="text" class="form-control" name="name" id="create-name">
                    </div>
                    <div class="form-group">
                        <label for="create-email">Email</label>
                        <input type="text" class="form-control" name="email" id="create-email">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="add">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

    <script src="https://kit.fontawesome.com/c280da5458.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>