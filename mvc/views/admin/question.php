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
                        <h3>Danh sách hỏi đáp</h3>
                        <div class="table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên khách hàng</th>
                                        <th>nội dung</th>
                                        <th>Phản hồi</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 0;
                                    foreach ($data['questionList'] as $key => $value) {
                                    ?>
                                        <tr>
                                            <td><?= ++$count ?></td>
                                            <td><?= $value['fullName'] ?></td>
                                            <td><?= $value['content'] ?></td>
                                            <?php
                                            if ($value['reply']) { ?>
                                                <td><span class="active"><?= $value['reply'] ?></span></td>
                                            <?php } else { ?>
                                                <td><span class="block">Chưa có phản hồi</span></td>
                                            <?php }
                                            ?>
                                            <td>
                                            <?php
                                            if ($value['reply']) { ?>
                                                <a class="button-normal" href="<?= URL_ROOT . '/questionManage/reply/' . $value['id'] ?>">Chi tiết/Sửa</a>
                                                <a class="button-red" href="<?= URL_ROOT . '/questionManage/delete/' . $value['id'] ?>">Xóa</a>
                                            <?php } else { ?>
                                                <a class="button-normal" href="<?= URL_ROOT . '/questionManage/reply/' . $value['id'] ?>">Phản hồi</a>
                                            <?php }
                                            ?>
                                            </td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination">
                            <a href="<?= URL_ROOT ?>/categoryManage?page=<?= (isset($_GET['page'])) ? (($_GET['page'] <= 1) ? 1 : $_GET['page'] - 1) : 1 ?>">&laquo;</a>
                            <?php
                            for ($i = 1; $i <= $data['countPaging']; $i++) {
                                if (isset($_GET['page'])) {
                                    if ($i == $_GET['page']) { ?>
                                        <a class="active" href="<?= URL_ROOT ?>/categoryManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php } else { ?>
                                        <a href="<?= URL_ROOT ?>/categoryManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php  }
                                } else {
                                    if ($i == 1) { ?>
                                        <a class="active" href="<?= URL_ROOT ?>/categoryManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php  } else { ?>
                                        <a href="<?= URL_ROOT ?>/categoryManage?page=<?= $i ?>"><?= $i ?></a>
                                    <?php   } ?>
                                <?php  } ?>
                            <?php }
                            ?>
                            <a href="<?= URL_ROOT ?>/categoryManage?page=<?= (isset($_GET['page'])) ? ($_GET['page'] == $data['countPaging'] ? $_GET['page'] : $_GET['page'] + 1) : 2 ?>">&raquo;</a>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>
</body>

</html>