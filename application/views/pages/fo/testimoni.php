<!--=============== TESTIMONIALS ===============-->
<section class="testimonial section">
            <span class="section__subtitle">My clients say</span>
            <h2 class="section__title">Testimonials</h2>

            <div class="testimonial__container container swiper">
                <div class="swiper-wrapper">
                <?php
            foreach($dataTest as $data){
            ?>
                    <div class="testimonial__card swiper-slide">
                        <img src="<?php echo $data->images?>" alt="" class="testimonial__img">

                        <h3 class="testimonial__name"><?php echo $data->nama?></h3>
                        <p class="testimonial__description">
                        <?php echo $data->pesan?>
                        </p>
                    </div>
                    <?php }
            ?>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </section>