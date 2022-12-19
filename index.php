<?php include("db.php") ?>

<!DOCTYPE html5>
<html lang="en">

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">

                <?php if (isset($_SESSION['message'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        Task Saved Succesfully
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

        </div>
    </div>
</div>

<?php include("includes/footer.php") ?>