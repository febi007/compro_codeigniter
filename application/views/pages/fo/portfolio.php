 <!--=============== WORK ===============-->
 <section class="work section" id="work">
            <span class="section__subtitle">My Portfolio</span>
            <h2 class="section__title">Recent Works</h2>

            <div class="work__filters">
                <span class="work__item active-work" data-filter='all'>All</span>
                <span class=" work__item" data-filter='.web'>Web Base</span>
                <span class=" work__item" data-filter='.android'>Android</span>
                <span class=" work__item" data-filter='.design'>Design Graphic</span>
            </div>
    
            <div class="work__container container grid">
            <?php
            foreach($dataPort as $data){
            ?>
                <div class="work__card mix <?php echo $data->kategori?>">
                    <img src="<?php echo $data->images?>" alt="" class="work__img">

                    <h3 class="work__title"><?php echo $data->judul?></h3>
                    <p class="work__title"><?php echo $data->deskripsi?></p>


                    <!-- <a href="#" class="work__button">
                        Demo <i class='bx bx-right-arrow work__icon'></i>
                    </a> -->
                </div>
                <?php }
            ?>
            </div>
        </section>