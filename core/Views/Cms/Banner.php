<?php include 'Includes/cms_header.php'?>

    <section class="dashboard">
        <div class="container-fluid" style="padding-left: 0">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <?php include 'Includes/cms_sidebar.php'?>
                </div>
                <div class="col-sm-8 col-md-10">
                    <div class="banner-edit">
                        <form method="POST" action="">
                            <input type="hidden" name="csrf_name" value="<?= htmlspecialchars($csrf_name) ?>">
                            <input type="hidden" name="csrf_value" value="<?= htmlspecialchars($csrf_value) ?>">
                            <input type="hidden" name="_method" value="PATCH">

                            <label>
                                Banner Text
                                <textarea name="bannertext"><?php echo htmlspecialchars($banner['bannertext']) ?></textarea>
                            </label>

                            <button class="btn-main">Update Banner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'Includes/cms_footer.php'?>