<?php
session_start();

// Nếu người dùng đã đăng nhập nhưng lại vào login.php hoặc register.php
if (isset($_SESSION['message'])) {
    echo "<script>
        alert('" . htmlspecialchars($_SESSION['message'], ENT_QUOTES) . "');
    </script>";
    unset($_SESSION['message']); // Xóa thông báo sau khi hiển thị
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ong Nhỏ | Ong nhỏ, tri thức lớn</title>
    <link href="http://localhost/OngNho/css/styles.css" rel="stylesheet">
    <link href="http://localhost/OngNho/css/index.css " rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web/css/all.css">
    <link rel="icon" type="image/x-icon" href="img/logo/Ongnho-icon.png">
</head>

<body style="background-color: #FFF9EC">
    <!-- HEADER -->
    <header>
        <div class="container" style="background-color: #FFF9EC;">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <!-- LOGO -->
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                    <img src="img/logo/Ongnho-logo.png" class="bi me-2" height="100px" role="img" aria-label="Bootstrap">
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <!-- KHÁM PHÁ -->
                    <li class="nav-item">
                        <a href="search.php" class="nav-link text-dark d-flex flex-column align-items-center">
                            <i class="fa-solid fa-magnifying-glass fa-3x mb-2"></i>
                            <span>Khám phá</span>
                        </a>
                    </li>

                    <!-- VỀ CHÚNG MÌNH -->
                    <li class="nav-item">
                        <a href="about-us.php" class="nav-link text-dark d-flex flex-column align-items-center">
                            <i class="fa-solid fa-users fa-3x mb-2"></i>
                            <span>Về chúng mình</span>
                        </a>
                    </li>

                    <!-- LIÊN LẠC -->
                    <li class="nav-item">
                        <a href="contact-us.php" class="nav-link text-dark d-flex flex-column align-items-center">
                            <i class="fa-regular fa-address-book fa-3x mb-2"></i>
                            <span>Liên lạc</span>
                        </a>
                    </li>
                </ul>


                <!-- USER -->
                <div class="position-relative">
                    <?php if (isset($_SESSION['email'])): ?>
                        <!-- User Avatar -->
                        <img src="img/user.png" class="user-pic" id="userPic" alt="User Avatar" aria-label="User Menu">

                        <!-- Menu Dropdown -->
                        <div class="sub-menu-wrap" id="subMenu" aria-hidden="true">
                            <div class="sub-menu">
                                <!-- Thông tin người dùng -->
                                <div class="user-info">
                                    <img src="img/user.png" alt="User Avatar">
                                    <h4><?= htmlspecialchars($_SESSION['full_name']); ?></h4>
                                </div>

                                <ul>
                                    <li><a href="#"><i class="fa-solid fa-user"></i> Hồ sơ</a></li>
                                    <li><a href="user_settings.php"><i class="fa-solid fa-cog"></i> Cài đặt tài khoản</a></li>
                                    <li><a href="#"><i class="fa-solid fa-life-ring"></i> Trung tâm hỗ trợ</a></li>
                                    <li><a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>

                    <?php else: ?>
                        <a href="login.php"
                            class="btn me-2"
                            aria-label="Login"
                            style="padding: 20px 20px; border: 2px solid #feca73; background-color: transparent; color: #feca73; text-decoration: none; transition: background-color 0.3s, color 0.3s;"
                            onmouseover="this.style.backgroundColor='#feca73'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#feca73';">
                            Đăng nhập
                        </a>
                        <a href="role-select.php" class="btn" aria-label="Sign-up" style="padding: 20px 20px; background-color: #feca73;">Đăng ký</a>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </header>

    <!-- BANNER -->
    <div class="banner">
        <div class="container py-5 banner">
            <div class="row align-items-center">
                <!-- Hình ảnh -->
                <div class="col-md-6 text-center">
                    <img src="img/banner.jpg" class="img-fluid rounded shadow" alt="Banner học tập" style="max-height: 400px; object-fit: cover;">
                </div>

                <!-- Nội dung -->
                <div class="col-md-6">
                    <h3 class="display-6 fw-normal">
                        Chia sẻ kiến thức,<br>khơi nguồn đam mê,<br>học tập hiệu quả cho
                        <span class="display-6 fw-bold text-decoration-underline">mọi người!</span>
                    </h3>


                    <p class="lead fw-light">
                        Sứ mệnh của chúng tôi là cung cấp tài liệu học tập miễn phí, giúp học sinh và những người đam mê học hỏi có thể tiếp cận kiến thức một cách dễ dàng.<br><br>
                        Chúng tôi cam kết tạo ra một môi trường học tập năng động, sáng tạo, giúp mọi người không chỉ học hỏi một cách hiệu quả mà còn cảm thấy hứng thú và đam mê với quá trình học tập.
                    </p>
                    <a class="btn btn-outline-primary btn-lg" href="#">Bắt đầu học</a>
                </div>
            </div>
        </div>
    </div>

    <!-- TÍNH NĂNG -->
    <section class="features">
        <div class="container my-10 features">
            <div class="text-center mb-4">
                <h1>Một số tính năng nổi bật</h1>
                <br>
                <hr>
            </div>

            <div class="row text-center">
                <div class="col-md-4 mb-4">
                    <div class="">
                        <div class="card-body">
                            <i class="fas fa-book fa-3x text-danger mb-3"></i>
                            <h3 class="card-title">Bài học tương tác</h3><br>
                            <p class="card-text">
                                Những nội dung học tập được thiết kế một cách sinh động và trực quan, giúp học sinh dễ dàng tiếp thu kiến thức.
                                Các bài học không chỉ mang tính giáo dục mà còn tạo cảm giác hào hứng, khiến việc học trở nên thú vị hơn.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="">
                        <div class="card-body">
                            <i class="fas fa-trophy fa-3x text-warning mb-3"></i>
                            <h3 class="card-title">Theo dõi tiến trình</h3><br>
                            <p class="card-text">
                                Cung cấp công cụ phân tích chi tiết giúp phụ huynh và học sinh dễ dàng theo dõi tiến độ học tập.
                                Mỗi bài học hoàn thành sẽ được ghi nhận, giúp bạn hiểu rõ điểm mạnh và những phần cần cải thiện.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="">
                        <div class="card-body">
                            <i class="fas fa-users fa-3x text-primary mb-3"></i>
                            <h3 class="card-title">Hỗ trợ cộng đồng</h3><br>
                            <p class="card-text">
                                Kết nối với các bậc phụ huynh, giáo viên và học sinh khác trong cộng đồng học tập trực tuyến.
                                Trao đổi kinh nghiệm, hỗ trợ lẫn nhau và cùng nhau xây dựng một môi trường học tập hiệu quả hơn.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GIÁO VIÊN -->
    <div>
        <div class="text-center mb-4">
            <h1>Hỗ trợ nhiều tính năng dành cho tất cả mọi người</h1>
        </div>

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <!-- Chữ bên trái -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title text-start text-primary pe-3">Giáo viên</h6>
                        <h1 class="mb-4">
                            Dễ dàng giảng dạy<br>
                            và quản lý lớp học</h1>
                        <p class="mb-4">
                            Ong nhỏ chúng mình cung cấp một loạt các công cụ tiên tiến, giúp giáo viên phát huy tối đa khả năng giảng dạy và nâng cao hiệu quả công tác giảng dạy của mình.
                            Chúng tôi không chỉ tập trung vào việc hỗ trợ học sinh, mà còn cam kết tạo ra những công cụ mạnh mẽ giúp giáo viên truyền đạt kiến thức một cách hiệu quả nhất.
                        </p>

                        <div class="row gy-2 gx-4 mb-4">
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Quản lý khóa học</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tạo bài kiểm tra và đánh giá</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Tương tác với học sinh</p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Cộng tác với các giáo viên khác</p>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="sign-up/teacher.php">Bắt đầu quản lý lớp học tại đây</a>
                    </div>

                    <!-- Ảnh bên phải -->
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/index/teacher.jpg" alt="" style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NGƯỜI HỌC VÀ HỌC SINH-->
        <div class="py-5 custom-spacing">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/index/student.jpg" alt="" style="object-fit: cover;">
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="section-title text-start text-primary pe-3">Người học và học sinh</h6>
                        <h1 class="mb-4">Dễ dàng tiếp thu kiến thức</h1>
                        <p class="mb-4">
                            &bull; Nội dung các bài giảng được kiểm soát một cách chặt chẽ và nghiêm ngặt nhằm đảm bảo rằng tất cả kiến thức được truyền đạt là chính xác và đáng tin cậy.<br>
                            &bull; Mỗi bài giảng không chỉ được biên soạn cẩn thận mà còn được trình bày một cách mạch lạc và dễ hiểu, giúp người học dễ dàng tiếp thu thông tin.<br>
                            &bull; Thêm vào đó, kiến thức được trình bày ngắn gọn, súc tích, giúp người học có thể học mọi lúc, mọi nơi, mà không gặp phải bất kỳ rào cản nào về thời gian hay không gian.
                        </p>


                        <a class="btn btn-primary py-3 px-5 mt-2" href="sign-up/student.php">Bắt đầu quản lý lớp học tại đây</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- VỀ CHÚNG MÌNH-->
    <section class="custom-spacing" id="about_us">
        <div class="container" style="background-color: #feca73">
            <div class="row align-items-center gx-4">
                <!-- Hình ảnh bên trái -->
                <div class="col-md-5">
                    <div class="ms-md-2 ms-lg-5">
                        <figure>
                            <img class="img-fluid rounded-3" src="img/index/hello.jpg" alt="Đẹp trai" style="object-fit: cover; height: 500px;">
                            <figcaption class="text-center text-white">Nhà sáng lập Herculis</figcaption>
                        </figure>
                    </div>
                </div>

                <!-- Nội dung bên phải -->
                <div class="col-md-6 offset-md-1">
                    <div class="ms-md-2 ms-lg-5 ">
                        <span class="fw-bold">Câu chuyện của chúng mình</span>
                        <h2 class="display-5 fw-bold">Về Ong nhỏ</h2>
                        <p class="fs-5 fst-italic mb-4">"Làm thế nào để trẻ em có thể học tập miễn phí?"</p>
                        <p class="fs-5 mb-4">
                            Đây là câu hỏi mà chúng tôi đã trăn trở từ lâu.
                            Trong bối cảnh lạm phát gia tăng và chi phí sinh hoạt không ngừng tăng, chúng tôi nhận thấy rằng nhiều gia đình đang gặp khó khăn trong việc cho con cái họ tiếp cận giáo dục.
                            Vì vậy, chúng tôi quyết định xây dựng Herculis — một sản phẩm mà chúng tôi vô cùng tâm huyết.
                            Chúng tôi cam kết không ngừng nỗ lực để cải tiến dịch vụ mỗi ngày, mang lại cơ hội học tập miễn phí và dễ dàng tiếp cận tri thức cho mọi người, đặc biệt là cho trẻ em, giúp các em phát triển và học hỏi mà không bị rào cản về tài chính.
                        </p>

                        <a class="btn btn-primary py-3 px-5 mt-2" href="about-us.php">Đọc tiếp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CON SỐ KHÔNG NÓI DỐI-->
    <section class="achievements ">
        <div class="py-5 py-xl-8 achievements">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <h2 class="mb-4 display-5 text-center">Thành tựu nổi bật</h2>
                        <p class="text-secondary mb-5 text-center lead fs-4">
                            Những con số này được thu thập trong suốt thời gian thành lập và phát triển của trang web.
                        </p>
                        <hr class="w-50 mx-auto mb-5 mb-xl-9" ">
                    </div>
                </div>
            </div>

            <div class=" container overflow-hidden">
                        <div class="row gy-5 gy-md-6 gy-lg-0">
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle" style="height: 250px;">
                                        <i class="fa-regular fa-face-smile fa-3x"></i>
                                    </div>
                                    <h5 class="display-6 fw-bold m-1">1 triệu</h5>
                                    <p class="text-secondary m-0">Học sinh và người học đang theo học tạo Ong Nhỏ</p>
                                </div>
                            </div>

                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle" style="height: 250px;">

                                    </div>
                                    <h5 class="display-6 fw-bold m-1">1890+</h5>
                                    <p class="text-secondary m-0">Issues Solved</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle" style="height: 250px;">
                                        <i class="fa-solid fa-user-graduate"></i>
                                    </div>
                                    <h5 class="display-6 fw-bold m-1">99,99%</h5>
                                    <p class="text-secondary m-0">Bạn nhỏ đỗ vào các trường trung học cơ sở khi theo học tại Ong Nhỏ</p>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3">
                                <div class="text-center">
                                    <div class="d-flex align-items-center justify-content-center bg-primary mb-3 mx-auto bsb-circle" style="height: 250px;">
                                        <i class="fa-solid fa-award"></i>
                                    </div>
                                    <h5 class="display-6 fw-bold m-1">100+</h5>
                                    <p class="text-secondary m-0">Số giải thưởng trong và ngoài nước Ong Nhỏ đã đạt được</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>

    <!-- ĐÁNH GIÁ -->
    <section class="gradient-custom">
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12">
                    <div class="text-center mb-4 pb-2">
                        <h1>Mọi người nói gì về Herculis</h1>
                        <p>
                            Đây là những phản hồi thật lòng từ một số người học đối với dịch vụ của chúng tôi<br>
                            Chúng tôi luôn luôn lắng nghe tất cả ý kiến từ người dùng, dù tốt hay xấu (nhưng chúng tôi thích nghe điều tốt hơn).
                        </p>
                    </div>

                    <div class="text-center mb-4 pb-2">
                        <i class="fas fa-quote-left fa-3x"></i>
                    </div>

                    <div class="card">
                        <div class="card-body px-4 py-5">
                            <div id="carouselDarkVariant" class="carousel slide carousel-dark" data-bs-ride="carousel">
                                <!-- Indicators -->
                                <div class="carousel-indicators mb-0">
                                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                </div>

                                <!-- Inner -->
                                <div class="carousel-inner pb-5">
                                    <!-- Review 1: Cristiano Ronaldo -->
                                    <div class="carousel-item active">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10 col-xl-8">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="img/review/Cristiano Ronaldo.jpg"
                                                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Cristiano Ronaldo" width="220" />
                                                    </div>
                                                    <div class="col-lg-7 text-center text-lg-start mx-auto">
                                                        <h4 class="mb-4">Cristiano Ronaldo</h4>
                                                        <p class="mb-0 pb-3">
                                                            Là một cầu thủ luôn bận rộn, tôi rất ấn tượng với sự linh hoạt và hiệu quả của dịch vụ học online này.
                                                            Nội dung bài học dễ hiểu, sáng tạo, giúp tôi học nhanh chóng dù lịch trình kín.
                                                            Đây là nền tảng tuyệt vời để phát triển không chỉ trên sân cỏ mà cả trong cuộc sống!
                                                        </p>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review 2: Taylor Swift -->
                                    <div class="carousel-item">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10 col-xl-8">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="img/review/Taylor Swift.jpg"
                                                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Taylor Swift" height="220" />
                                                    </div>
                                                    <div class="col-lg-7 text-center text-lg-start mx-auto">
                                                        <h4 class="mb-4">Taylor Swift</h4>
                                                        <p class="mb-0 pb-3">
                                                            Là một nghệ sĩ yêu trẻ em, tôi rất cảm kích trước cách mà trang web này biến việc học trở thành
                                                            một cuộc phiêu lưu sáng tạo. Nội dung thú vị và dễ hiểu, đặc biệt phù hợp với trí tò mò của trẻ.
                                                            Tôi tin rằng nền tảng này không chỉ giúp trẻ học tốt mà còn khuyến khích các em phát triển
                                                            sự tự tin và khả năng sáng tạo vượt trội.
                                                        </p>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review 3: John Smith -->
                                    <div class="carousel-item">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10 col-xl-8">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="img/review/Sơn Tùng MTP.png"
                                                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="John Smith" height="220" />
                                                    </div>
                                                    <div class="col-lg-7 text-center text-lg-start mx-auto">
                                                        <h4 class="mb-4">Sơn Tùng M-TP</h4>

                                                        <p class="mb-0 pb-3">
                                                            Âm nhạc và học tập đều cần cảm hứng, và tôi tìm thấy sự kết hợp hoàn hảo giữa hai điều này trên nền tảng học tập này.
                                                            Cách tiếp cận sáng tạo và đầy năng lượng giúp trẻ em không chỉ học mà còn nuôi dưỡng đam mê.
                                                            Hãy luôn giữ cho trái tim mình rực cháy, bởi vì “Sky is the limit!”.
                                                        </p>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review 4: Elon Musk -->
                                    <div class="carousel-item">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10 col-xl-8">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="img/review/Elon Musk.jpg"
                                                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Elon Musk" height="220" />
                                                    </div>
                                                    <div class="col-lg-7 text-center text-lg-start mx-auto">
                                                        <h4 class="mb-4">Elon Musk</h4>
                                                        <p class="mb-0 pb-3">
                                                            Tôi tin rằng công nghệ có thể thay đổi thế giới, và nền tảng học tập này là minh chứng tuyệt vời.
                                                            Nó cung cấp một cách tiếp cận mới, đầy sáng tạo và thú vị, giúp trẻ em học hỏi hiệu quả và phát triển
                                                            khả năng tư duy logic vượt trội.
                                                        </p>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Review 5: Emma Watson -->
                                    <div class="carousel-item">
                                        <div class="row d-flex justify-content-center">
                                            <div class="col-lg-10 col-xl-8">
                                                <div class="row">
                                                    <div class="col-lg-4 d-flex justify-content-center">
                                                        <img src="img/review/Emma Watson.png"
                                                            class="rounded-circle shadow-1 mb-4 mb-lg-0" alt="Emma Watson" height="220" />
                                                    </div>
                                                    <div class="col-lg-7 text-center text-lg-start mx-auto">
                                                        <h4 class="mb-4">Emma Watson</h4>
                                                        <p class="mb-0 pb-3">
                                                            Giáo dục là sức mạnh, và tôi rất vui khi thấy một nền tảng hỗ trợ trẻ em học hỏi một cách dễ dàng và
                                                            đầy cảm hứng như thế này. Đây là một bước tiến lớn trong việc mang lại tri thức cho mọi trẻ em,
                                                            bất kể xuất thân hay hoàn cảnh.
                                                        </p>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <i class="fas fa-quote-right fa-3x"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER -->
    <footer class="text-center text-lg-start" id="footer">
        <div class="container p-4" >
            <div class="row my-4">
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

                    <div class="bg-white shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto"
                        style="width: 250px; height: 150px;">
                        <img src="img/logo/Ongnho-logo.png" height="150px" alt="" loading="lazy" />
                    </div>

                    <p class="text-center">
                        Sứ mệnh của chúng tôi là giúp cho mọi trẻ em trên thế giới đều có thể học tập.
                    </p>
                </div>

                <!-- ĐƯỜNG DẪN NHANH -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Đường dẫn nhanh</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="#!" class="text-dark">Bắt đầu học</a>
                        </li>
                        <li class="mb-2">
                            <a href="about-us.php" class="text-dark">Về chúng mình</a>
                        </li>
                    </ul>
                </div>

                <!-- HỖ TRỢ -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Hỗ trợ</h5>

                    <ul class="list-unstyled">
                        <li class="mb-2">
                            <a href="" class="text-dark">Trung tâm hỗ trợ</a>
                        </li>
                        <li class="mb-2">
                            <a href="support/privacy-policy.php" class="text-dark">Chính sách quyền riêng tư</a>
                        </li>
                        <li class="mb-2">
                            <a href="" class="text-dark">FAQ</a>
                        </li>
                        <li class="mb-2">
                            <a href="contact-us.php" class="text-dark">Liên lạc</a>
                        </li>
                    </ul>
                </div>

                <!-- LIÊN LẠC -->
                <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                    <h5 class="text-uppercase mb-4">Liên lạc với chúng tôi</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p><i class="fas fa-map-marker-alt pe-2"></i>55 Đ. Giải Phóng, Đồng Tâm, Hai Bà Trưng, Hà Nội</p>
                        </li>
                        <li>
                            <p><i class="fas fa-phone pe-2"></i>024 3863 0001</p>
                        </li>
                        <li>
                            <p><i class="fas fa-envelope pe-2 mb-0"></i>contact@herculis.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.1)">
            &copy; 2024 Copyright Ong Nhỏ.
        </div>
    </footer>


    <script src="js/hello.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>