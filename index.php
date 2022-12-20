<?php include("db.php") ?>

<!DOCTYPE html5>
<html lang="en">

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['message'] ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php session_unset(); } ?>

                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Task Title" autofocus>
                    </div> <br>
                    <div class="form-group">
                        <textarea name="description" rows="2" class="form-control"
                            placeholder="Task Description"></textarea>
                    </div> <br>
                    <input class="btn btn-success btn-block" type="submit" name="save_task" value="Save Task">
                </form>

            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT * FROM task";
                    $result_tasks = mysqli_query($conn, $query);

                    while($column = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                            <td>
                                <?php echo $column['id'] ?>
                            </td>
                            <td>
                                <?php echo $column['title'] ?>
                            </td>
                            <td>
                                <?php echo $column['description'] ?>
                            </td>
                            <td>
                                <?php echo $column['created_at'] ?>
                            </td>
                            <td>
                                <a href="./edit_task.php?id=<?php echo $column['id'] ?>">
                                    <i class="fas fa-marker"></i>
                                </a> &nbsp; &nbsp;
                                <a style="color: red;" href="./delete_task.php?id=<?php echo $column['id'] ?>">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>    
        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>