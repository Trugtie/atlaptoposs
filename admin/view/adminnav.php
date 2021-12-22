<header>
    <nav class="nav" id="nav">
        <a href="#" class="logo">
            <img src="../../view/images/logo.png" alt="">
        </a>
        <div class="clock">
            <div class="name"><?php echo $username ?></div>
            <div class="time" id="runningTime"></div>
        </div>
        <div class="ul">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="./admin.php">TỔNG QUAN</a>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        <i class="fa-solid fa-laptop"></i>
                                        QUẢN LÝ SẢN PHẨM<i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="info"><a href="quanlysanpham.php"><i class="fa-solid fa-pen-to-square"></i>XEM THÔNG TIN</a></div>
                                    <div class="info"><a href="./addproduct.php"><i class="fa-solid fa-plus"></i>THÊM LAPTOP</a></div>
                                    <div class="info"><a href="./addaccessories.php"><i class="fa-solid fa-plus"></i>THÊM PHỤ KIỆN</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa-solid fa-user-group"></i>QUẢN LÝ KHÁCH HÀNG<i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="info"><a href="./quanlykhachhang.php"><i class="fa-solid fa-pen-to-square"></i>XEM THÔNG TIN</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa-solid fa-cart-shopping"></i>QUẢN LÝ ĐƠN HÀNG<i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="info"><a href="./quanlydonhang.php"><i class="fa-solid fa-pen-to-square"></i>XEM THÔNG TIN</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        <i class="fa-solid fa-gifts"></i>QUẢN LÝ KHUYẾN MÃI<i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="info"><a href="./quanlykhuyenmai.php"><i class="fa-solid fa-pen-to-square"></i>XEM THÔNG TIN</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        <i class="fa-solid fa-comment"></i>QUẢN LÝ FEEDBACK<i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="info"><a href="./quanlyfeedback.php"><i class="fa-solid fa-pen-to-square"></i>XEM THÔNG TIN</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- <li class="nav-item">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="fa-solid fa-address-card"></i>QUẢN LÝ NHÂN VIÊN<i class="fa-solid fa-angle-down"></i>
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="info"><a href="./quanlynhanvien.php"><i class="fa-solid fa-pen-to-square"></i>XEM THÔNG TIN</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li> -->
                <?php echo $quanlynhanvien; ?>
            </ul>
        </div>
        <form action="../controller/logoutController.php">
        <div class="Exit"><button name="dangxuat" class="btnExit"> ĐĂNG XUẤT</button></div>
        </form>
    </nav>

</header>