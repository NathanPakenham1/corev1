<?php include_once 'Includes/inc_header.php' ?>

<section class="subpage-top">
    <div class="container">
        <h2><?php echo htmlspecialchars($title) ?></h2>
        <p><?php echo htmlspecialchars($text) ?></p>
    </div>
</section>

<section class="image-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="/images/cta.jpg" alt="image" >
            </div>
            <div class="col-md-6">
                <div class="content-wrp">
                    <h3>This is a Image Block</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis et possimus qui similique sunt tempore? A debitis libero reprehenderit?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis et possimus qui similique sunt tempore? A debitis libero reprehenderit?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis et possimus qui similique sunt tempore? A debitis libero reprehenderit?</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="image-text">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="content-wrp">
                    <h3>This is a Image Block</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis et possimus qui similique sunt tempore? A debitis libero reprehenderit?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis et possimus qui similique sunt tempore? A debitis libero reprehenderit?</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae corporis et possimus qui similique sunt tempore? A debitis libero reprehenderit?</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="/images/cta.jpg" alt="image" >
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <h2>This is a reviews heading</h2>
        <div class="owl-carousel">
            <div>
                <h3>This is a Review</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequuntur harum iure?</p>
            </div>
            <div>
                <h3>This is a Review</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequuntur harum iure?</p>
            </div>
            <div>
                <h3>This is a Review</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequuntur harum iure?</p>
            </div>
            <div>
                <h3>This is a Review</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequuntur harum iure?</p>
            </div>
            <div>
                <h3>This is a Review</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequuntur harum iure?</p>
            </div>
            <div>
                <h3>This is a Review</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam animi consequuntur harum iure?</p>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            items: 4,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 10000
        });
    });
</script>

<section class="cta-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url('/images/cta.jpg') center;">
    <div class="container">
        <h2>This is a Banner heading</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, enim, maiores! Asperiores beatae est labore minus nam reprehenderit rerum suscipit.</p>
        <a href="/contact-us" class="btn-main">Contact Us</a>
    </div>
</section>

<?php include_once 'Includes/inc_footer.php' ?>
