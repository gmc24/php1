<?php
$test = getTestimonials(3);?>

<div id="testimonials" class="container-fluid test_bg">
    <hr class="test-delimeter">
    <div class="container">
        <div class="row test-container">

            <div class="col-md-6 testimonial-block">

                <input type="radio" id="test-switcher-1" name="switcher">
                <input type="radio" id="test-switcher-2" name="switcher">
                <input type="radio" id="test-switcher-3" name="switcher">

                <div class="test-mask">
                    <?php _vardump($test);
                    foreach ($test as $key => $value) {?>
                    <div class="test-item">
                        <img src="<?=$value['avatar']?>" alt="<?=$value['author']?>">
                        <blockquote>
                            <p><?=$value['test_text']?></p>
                            <cite><?=$value['author']?><br><span><?=$value['author_from']?></span></cite>
                        </blockquote>
                    </div>
                    <?};?>
                </div>


                <div class="test-nav">
                    <label for="test-switcher-1"><span class="line"></span></label>
                    <label for="test-switcher-2"><span class="line"></span></label>
                    <label for="test-switcher-3"><span class="line"></span></label>
                </div>

                <a class="all-testimonials" href="alltestimonials.php">All testimonials</a>

            </div>

            <div class="subscribe-block col-md-6">
                <div class="subscribe-title">subscribe<br><span>for our newsletters and promotion</span></div>
                <div class="email-block">
                    <input type="email" placeholder="Enter Your Email">
                    <a class="subscribe-btn" href="#">Subscribe</a>
                </div>
            </div>

        </div>
    </div>

</div>