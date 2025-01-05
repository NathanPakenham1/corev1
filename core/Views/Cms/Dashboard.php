<?php include 'Includes/cms_header.php'?>

<section class="dashboard">
    <div class="container-fluid" style="padding-left: 0">
        <div class="row">
           <div class="col-sm-4 col-md-2">
                <?php include 'Includes/cms_sidebar.php'?>
           </div>
            <div class="col-sm-8 col-md-10">
                page content
                <form method="POST" action="/cms/logout">
                    <input type="hidden" name="csrf_name" value="<?= $csrf_name ?>">
                    <input type="hidden" name="csrf_value" value="<?= $csrf_value ?>">
                    <button class="btn-main">Logout</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'Includes/cms_footer.php'?>