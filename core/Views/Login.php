<?php include_once 'Includes/inc_header.php' ?>

<div class="container">
    <h1>
        <?php echo htmlspecialchars($key1) ?>
    </h1>

    <!-- In your form -->
    <form method="POST" action="/cms/login">
        <input type="hidden" name="csrf_name" value="<?= $csrf_name ?>">
        <input type="hidden" name="csrf_value" value="<?= $csrf_value ?>">
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="password" placeholder="Your Password">
        <button type="submit">Submit</button>
    </form>
</div>

<?php include_once 'Includes/inc_footer.php' ?>
