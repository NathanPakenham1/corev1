<?php include_once 'Includes/inc_header.php' ?>

<section class="subpage-top">
    <div class="container">
        <h2><?php echo htmlspecialchars($title) ?></h2>
        <p><?php echo htmlspecialchars($text) ?></p>
    </div>
</section>

<section class="contact-main">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-wrp">
                    <h2>Please let us know if you have a question</h2>
                    <p>Complete the form above or contact us using the details below.</p>
                    <br>
                    <div>Phone: <?php echo $config['telephone'] ?></div>
                    <div>Email: <?php echo $config['email'] ?></div>

                    <form>
                        <label>
                            Name:
                            <input  name="name">
                        </label>
                        <label>
                            Telephone:
                            <input  name="telephone">
                        </label>
                        <label>
                            Email:
                            <input  name="emai">
                        </label>
                        <label>
                            Message:
                            <textarea name="message"></textarea>
                        </label>
                        <button class="btn-main">Submit Form</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d320876.47026410693!2d-3.371726041559748!3d51.07436653257199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x486d89d8d54094bf%3A0xb8c449cb04e31a99!2sSomerset%2C%20UK!5e0!3m2!1sen!2sde!4v1736095701043!5m2!1sen!2sde" width="600" height="450" style="border:0; max-width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url('/images/cta.jpg') center;">
    <div class="container">
        <h2>This is a Banner heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, enim, maiores! Asperiores beatae est labore minus nam reprehenderit rerum suscipit.</p>
        <a href="/contact-us" class="btn-main">Contact Us</a>
    </div>
</section>

<?php include_once 'Includes/inc_footer.php' ?>
