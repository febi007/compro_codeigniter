<!--=============== ABOUT ===============-->
        <section class="about section" id="about">
            <span class="section__subtitle">My Intro</span>
            <h2 class="section__title">About Me</h2>

            <div class="about__container container grid">
                <img src="<?php echo $dataAbout->images?>" alt="" class="about__img">

                <div class="about__data">
                    <!-- <div class="about__info">
                        <div class="about__box">
                            <i class='bx bx-award about__icon'></i>
                            <h3 class="about__title">Experience</h3>
                            <span class="about__subtitle">8 Years Working</span>
                        </div>
                        <div class="about__box">
                            <i class='bx bx-briefcase-alt about__icon'></i>
                            <h3 class="about__title">Completed</h3>
                            <span class="about__subtitle">48+ Projects</span>
                        </div>
                        <div class="about__box">
                            <i class='bx bx-support about__icon'></i>
                            <h3 class="about__title">Support</h3>
                            <span class="about__subtitle">Online 24/7</span>
                        </div>
                    </div> -->
                    <h3>
                    <?php echo $dataAbout->judul?>
                    </h3>
                    <p class="about__description">
                    <?php echo $dataAbout->deskripsi?>
                    </p>

                    <a href="#contact" class="button about__button-contact">Contact Me</a>
                </div>
            </div>
        </section>