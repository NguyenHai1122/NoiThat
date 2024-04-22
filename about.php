<?php

session_start();

// if (isset($_SESSION['auth'])) {
//     $_SESSION['message'] = "Bạn đã đăng nhập rồi!";
//     header('Location: index.php');
//     exit();
// }

include('includes/header.php');
?>
<main role="main" class="mb-2">


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="image-overlay">
                    <img src="https://nhaxinh.com/wp-content/uploads/2021/11/nha-xinh-gioi-thieu-chat-luong-251121.jpg"
                        alt="Background Image">
                    <div class="overlay-text">
                        <h1>Welcome to Nội thất Đông Á</h1>
                        <p>Chào bạn đã đến với chúng tôi.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Block content -->
    <div class="container mt-2">
        <h1 class="text-center">Giá trị và sự khác biệt</h1>
        <hr>
        <div class="row">
            <div class="col col-md-12">
                <h5 class="text-center">Ra đời từ ý tưởng tạo nên sự khác biệt, Nội Thất Đông Á đã giữ vững và phát triển
                    trở thành vị trí hàng đầu trong thị trường nội thất Việt Nam. Đến nay, Nội thất việt đã có nhiều cửa
                    hàng quy mô và chuyên nghiệp tại các thành phố lớn là Hà Nội .</h5>
                <p class="text-center">Với mong muốn phát triển thương hiệu Việt bằng nội lực, Nhà Xinh đã chú trọng vào
                    thiết kế và sản xuất nội thất trong nước. Danh mục sản phẩm của Nội thất việt thường xuyên được đổi
                    mới và cập nhật, liên tục cung cấp cho khách hàng các dòng sản phẩm theo xu hướng mới nhất. Do chính
                    người Việt thiết kế và sản xuất, nội thất thương hiệu Nội thất việt luôn phù hợp với cuộc sống Á
                    Đông, đem đến sự tiện nghi hoàn hảo trong mọi không gian sống.</p>
                <div class="text-center">
                    <a href="index.php" class="btn btn-primary btn-lg">Ghé thăm Bán Nội Thất <i class="fa fa-forward"
                            aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        
        </div>
    </div>
    <!-- End block content -->
</main>
<?php include('includes/footer.php'); ?>