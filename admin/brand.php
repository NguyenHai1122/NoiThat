<?php
include('includes/header.php');
include('../middleware/adminMiddleware.php');

?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Thương hiệu</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>

                                <th>ID</th>
                                <th>Tên thương hiệu</th>
                                <th>Tùy chỉnh</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $brand = getAll("brand");
                            if (mysqli_num_rows($brand) > 0) {
                                foreach ($brand as $item) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?= $item['id'] ?>
                                        </td>
                                        <td>
                                            <?= $item['name'] ?>
                                        </td>
                                        <td>
                                            <a href="edit-brand.php?id=<?= $item['id']; ?>" class="btn btn-primary">Sửa</a>
                                           <form action="code.php" method="POST">
                                                <input type="hidden" name="brand_id" value="<?= $item['id'] ?>">
                                                <button type="submit" class="btn btn-danger" name="delete_brand">Xóa</button>
                                           </form>
                                        </td>

                                    </tr>
                                    <?php
                                }
                            } else {
                                echo "Không có danh mục";
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('includes/footer.php');
?>