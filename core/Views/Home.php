<?php include_once 'Includes/inc_header.php' ?>

    <div class="container">
        <h1>This Is The Home Page</h1>
        <?php echo htmlspecialchars($key1) ?>
        <?php echo htmlspecialchars($key2) ?>

        <!-- In your form -->
        <form method="POST" action="/submit">
            <input type="hidden" name="csrf_name" value="<?= $csrf_name ?>">
            <input type="hidden" name="csrf_value" value="<?= $csrf_value ?>">
            <input type="text" name="name" placeholder="Your Name">
            <button type="submit">Submit</button>
        </form>

        <?php
            if(isset($_SESSION['id'])) {
                echo $_SESSION['name'];
            }
        ?>
    </div>

<?php include_once 'Includes/inc_footer.php' ?>
