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
                        <h3>Thêm mới Size</h3>
                        <div class="form">
                            <form action="<?= URL_ROOT . '/sizeManage/add' ?>" method="POST">
                                <p class="<?= $data['cssClass'] ?>"><?= isset($data['message']) ? $data['message'] : "" ?></p>
                                <label for="name">Tên Size</label>
                                <input type="text" id="name" name="name" required>
                                <input type="submit" value="Lưu">
                                <a href="<?= URL_ROOT . '/sizeManage' ?>" class="back">Trở về</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>
</body>

</html>