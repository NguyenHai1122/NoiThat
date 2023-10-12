<?php 

session_start();
include('includes/header.php'); 
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <?php
                if (isset($_SESSION['message'])) {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Hey</strong> <?= $_SESSION['message']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php
                unset($_SESSION['message']);
                }
                ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Đăng kí tài khoản</h4>
                    </div>
                    <div class="card-body">
                        <form action="function/authcode.php" method="POST">


                            <div class="mb-3">
                                <label class="form-label">Tên</label>
                                <input type="text" name="name" class="form-control" placeholder="Nhập tên tài khoản...">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Số điện thoại</label>
                                <input type="number" name="phone" class="form-control"
                                    placeholder="Nhập số điện thoại...">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Nhập Email..."
                                    id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Nhập mật khẩu..." id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" name="cpassword" class="form-control"
                                    placeholder="Nhập lại mật khẩu..." id="exampleInputPassword1">
                            </div>

                            <button type="submit" name="register_btn" class="btn btn-primary">Đăng ký</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>