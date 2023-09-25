  <!--=============== SERVICES ===============-->
  <section class="services section">
            <span class="section__subtitle">My Services</span>
            <h2 class="section__title">SKILLS</h2>

            <div class="services__container container grid">
                
            <?php
            foreach($dataSkill as $data){
            ?>
                <div class="services__card">
                    <h3 class="services__title"><?php echo $data->nama_skill?></h3>

                    <span class="services__button">
                        See More <i class='bx bx-right-arrow services__icon'></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class='bx bx-x services__modal-close'></i>

                            <h3 class="services__modal-title"><?php echo $data->nama_skill?></h3>

                            <p class="services__modal-description">
                            <?php echo $data->deskripsi?>
                            </p>

                            <!-- <ul class="services__modal-list">
                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I develop the user interfaces.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Web Page design and development.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I create the UX element interactions.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        I position your company brand.
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class='bx bx-check-circle'></i>
                                    <p class="services__modal-info">
                                        Create modern 3-D experiences.
                                    </p>
                                </li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <?php }
            ?>
            </div>
        </section>