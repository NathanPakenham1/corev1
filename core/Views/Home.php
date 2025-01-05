<?php include_once 'Includes/inc_header.php' ?>

    <section class="home-hero">
        <div class="owl-carousel">
            <div><img src="/images/placeholder.jpeg" alt="Image 1"></div>
            <div><img src="/images/placeholder.jpeg" alt="Image 1"></div>
            <div><img src="/images/placeholder.jpeg" alt="Image 1"></div>
        </div>
    </section>

    <script>
        $(document).ready(function(){
            $(".owl-carousel").owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 10000
            });
        });
    </script>

    <section class="home-text">
        <div class="container">
            <h2>This is a sub heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, enim, maiores! Asperiores beatae est labore minus nam reprehenderit rerum suscipit.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ipsa laboriosam nam nemo nostrum quidem, vel voluptas? Adipisci aliquid atque est ex illum iure nemo nobis non odio recusandae, ut!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat ipsa laboriosam nam nemo nostrum quidem, vel voluptas? Adipisci aliquid atque est ex illum iure nemo nobis non odio recusandae, ut!</p>
            <a href="/about-us" class="btn-main">About Us</a>
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

    <section class="text-info">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="title">This is title</div>
                    <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, velit.</div>
                </div>
                <div class="col-md-4">
                    <div class="title">This is title</div>
                    <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, velit.</div>
                </div>
                <div class="col-md-4">
                    <div class="title">This is title</div>
                    <div class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia, velit.</div>
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

    <section class="cta-banner" style="background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.3)), url('/images/cta.jpg') center;">
        <div class="container">
            <h2>This is a Banner heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus, enim, maiores! Asperiores beatae est labore minus nam reprehenderit rerum suscipit.</p>
            <a href="/contact-us" class="btn-main">Contact Us</a>
        </div>
    </section>


<?php include_once 'Includes/inc_footer.php' ?>
