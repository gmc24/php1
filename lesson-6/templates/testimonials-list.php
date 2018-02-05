<?php
$test = getTestimonials(5);
?>

        <div class="testimonials-list">
                <? foreach ($test as $key => $value) {?>
                    <div class="test-item">
                        <img src="<?=$value['avatar']?>" alt="<?=$value['author']?>">
                        <blockquote>
                            <p><?=$value['test_text']?></p>
                            <cite><?=$value['author']?><br><span><?=$value['author_from']?></span></cite>
                        </blockquote>
                    </div>
                <?};?>
            </div>

