<?php
    $title = "Edit News & Blog - Tayouth";
    include('../middleware/admin_middleware.php');
    include('inc/header.php');
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Edit News & Blog</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">News & Blog</li>
        <li class="breadcrumb-item">Edit News & Blog</li>
    </ol>
    <div class="row mt-3">
        <div class="col-lg-12">
            <?php
                if (isset($_GET['id'])) {

                    $id = $_GET['id']; // fetch item with id.
                    $tbl_blog = getAllBlogId("tbl_blog", $id);

                    if (mysqli_num_rows($tbl_blog) > 0) {

                        $data = mysqli_fetch_array($tbl_blog);
                        ?>
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit News & Blog Form</h4>
                                </div>
                                <div class="card-body">
                                    <form action="code.php" method="POST" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <input type="hidden" name="tbl_blog_id" value="<?= $data['id'] ?>">
                                                    <label class="form-label">News ID</label>
                                                    <input disabled type="text" name="id" value="<?= $data['id'] ?>" class="form-control" placeholder="Enter Item Name" disable>

                                                    <label class="form-label">Title</label>
                                                    <input type="text" name="title" value="<?= $data['title'] ?>" class="form-control" placeholder="Enter News & Blog Title">

                                                    <label class="form-label">Links</label>
                                                    <input type="text" name="links" value="<?= $data['links'] ?>" class="form-control" placeholder="Enter News & Blog links">
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Description</label>
                                                    <textarea rows="4" type="text" name="description" class="form-control" placeholder="Description"><?= $data['description'] ?></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-group col-lg-12 mb-2">
                                                <input type="file" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                <input type="hidden" name="old_image" value="<?= $data['image'] ?>">
                                            </div>
                                        </div>

                                        <div class="col-lg-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-outline-primary" name="update_blog_btn" title="Update News & Blog"><i class="fa-solid fa-check"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        <?php
                    } else {
                        redirect("all_blog.php", "Item Not Found");
                    }
                } else {
                    redirect("all_blog.php", "ID Missing from URL");
                }
            ?>
        </div>
    </div>
</div>
<?php
include('inc/footer.php');
?>