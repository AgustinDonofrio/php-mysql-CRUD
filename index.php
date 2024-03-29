<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<div class="constainer p-4">

    <div class="row">

        <div class="col-md-4">

            <?php if(isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?=$_SESSION['message_color']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" 4aria-label="Close"></button>
                </div>
            <?php session_unset(); }?>

            <div class="card card-body">
                <form action="save_task.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control"
                        placeholder="Task Title" autofocus required>
                    </div>
                    <div class="mb-3"></div> <!-- line break -->
                    <div class="form-group">
                        <textarea name="description" rows="4" class="form-control"
                        placeholder="Task Description"></textarea>
                    </div>
                    <div class="mb-3"></div> <!-- line break -->
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>

        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th> Title </th>
                        <th> Description </th>
                        <th> Created At </th>
                        <th> Actions </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM task";
                    $result_tasks = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_tasks)) { ?>
                        <tr>
                        <td> <?php echo $row['title']?> </td>
                        <td> <?php echo $row['description']?> </td>
                        <td> <?php echo $row['created_at']?> </td>
                        <td>
                            <a href="edit_task.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                                <i class="fas fa-marker"></i>
                            </a>
                            <a href="#" class="btn btn-danger" onclick="confirmDelete(<?php echo $row['id']?>)">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>

</div>

<script>
    function confirmDelete(taskId) {
        var confirmation = confirm("Are you sure you want to delete this task?");
        if (confirmation) {
            window.location = "delete_task.php?id=" + taskId;
        }
    }
</script>

<?php include("includes/footer.php") ?>