    <?php 

    include("db.php");

    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM task WHERE id = $id";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $title = $row['title'];
            $description = $row['description'];
        }
    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];

        $query = "UPDATE task SET title = '$title', description = '$description' WHERE id = $id";
        mysqli_query($conn, $query);
        
        $_SESSION['message'] = 'Task Updated Succesfully';
        $_SESSION['message_color'] = 'info'; //warning
        
        header("Location: index.php");
    }
        
    ?>

    <?php include("includes/header.php") ?>

    <div class="container p-4">
        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="card card-body">
                    <form action="edit_task.php?id=<?php echo $_GET['id']; ?>" method="POST">
                        <div class="form-group">
                            <input type="text" name="title" value="<?php echo $title; ?>" 
                            class="form-control" placeholder="Update Title" required>
                        </div>
                        <div class="mb-3"></div> <!-- line break -->
                        <div class="form-group">
                            <textarea name="description" rows="4" class="form-control" 
                            placeholder="Update Description"><?php echo $description; ?></textarea>
                        </div>
                        <div class="mb-3"></div> <!-- line break -->
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-success" name="update">
                                Update 
                            </button>
                            <a href="index.php" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("includes/footer.php") ?>