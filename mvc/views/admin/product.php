<?php require APP_ROOT . '/views/admin/inc/head.php'; ?>

<body>
    <?php require APP_ROOT . '/views/admin/inc/sidebar.php'; ?>

    <div class="main-content">
        <header>
            <div class="search-wrapper">
                <span class="ti-search"></span>
                <input type="search" placeholder="Search">
            </div>

            <div class="social-icons">
                <span class="ti-bell"></span>
                <span class="ti-comment"></span>
                <div></div>
            </div>
        </header>

        <main>
            <section class="recent">
                <div class="activity-grid">
                    <div class="activity-card">
                        <a href="<?= URL_ROOT . '/productManage/add' ?>" class="button right">Thêm mới</a>
                        <h3>Danh sách sản phẩm</h3>
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Mã</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Hình ảnh</th>
                                        <th>Trạng thái</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($data['productList'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= ++$count ?></td>
                                            <td><?= $value['id'] ?></td>
                                            <td><?= $value['name'] ?></td>
                                            <td><img class="img" src="<?= URL_ROOT . '/public/images/' . $value['image'] ?>" alt=""></td>
                                            <?php
                                            if ($value['status']) { ?>
                                                <td><span class="active">Kích hoạt</span></td>
                                            <?php } else { ?>
                                                <td><span class="block">Khóa</span></td>
                                            <?php }
                                            ?>
                                            <td>
                                                <?php
                                                if ($value['status']) { ?>
                                                    <a class="button-red" href="<?= URL_ROOT . '/productManage/changeStatus/' . $value['id'] ?>">Khóa</a>
                                                <?php } else { ?>
                                                    <a class="button-green" href="<?= URL_ROOT . '/productManage/changeStatus/' . $value['id'] ?>">Mở</a>
                                                <?php }
                                                ?>
                                                </a>
                                                <a class="button-green" href="<?= URL_ROOT . '/productManage/addColorSize/' . $value['id'] ?>">Thêm mới (màu, size)</a>
                                                <a class="button" href="<?= URL_ROOT . '/productManage/edit/' . $value['id'] ?>">Sửa</a>
                                                <a class="button-normal" href="<?= URL_ROOT . '/productManage/detail/' . $value['id'] ?>">Chi tiết</a>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            <a href="<?= URL_ROOT ?>/productManage?page=<?= (isset($_GET['page'])) ? (($_GET['page'] <= 1) ? 1 : $_GET['page'] - 1) : 1 ?>">&laquo;</a>
                            <?php
                            for ($i = 1; $i <= $data['countPaging']; $i++) {
                                if (isset($_GET['page'])) {
                                    if ($i == $_GET['page']) { ?>
                                        <a class="active" href="<?= URL_ROOT ?>/productManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php } else { ?>
                                        <a href="<?= URL_ROOT ?>/productManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php  }
                                } else {
                                    if ($i == 1) { ?>
                                        <a class="active" href="<?= URL_ROOT ?>/productManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php  } else { ?>
                                        <a href="<?= URL_ROOT ?>/productManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php   } ?>
                                <?php  } ?>
                            <?php }
                            ?>
                            <a href="<?= URL_ROOT ?>/productManage?page=<?= (isset($_GET['page'])) ? ($_GET['page'] == $data['countPaging'] ? $_GET['page'] : $_GET['page'] + 1) : 2 ?>">&raquo;</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>