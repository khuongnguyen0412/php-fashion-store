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
                        <h3>Thống kê</h3>
                        <div class="form">
                            <form action="<?= URL_ROOT . '/statisticManage/index' ?>" method="POST">
                                <label for="type">Chọn hình thức</label>
                                <select name="type" id="type">
                                    <option value="revenue">Doanh thu</option>
                                </select>
                                <input type="submit" value="Chọn">
                                <a href="<?= URL_ROOT . '/categoryManage' ?>" class="back">Trở về</a>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </main>

    </div>
</body>

</html>