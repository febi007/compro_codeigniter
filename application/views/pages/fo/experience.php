 <!--=============== SKILLS ===============-->
 <section class="skills section" id="skills">
            <span class="section__subtitle">My Abilities</span>
            <h2 class="section__title">My Experience</h2>
            
            <div class="skills__container container grid" >
            <?php
            foreach($dataExperience as $data){
            ?>
                <div class="skills__content" >
                    <h3 class="skills__title"><?php echo $data->nama_perusahaan?></h3>
                    <p class="skills__title2"><?php echo $data->role?></p>



                    <div class="skills__box">
                        <div class="skills__group">
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>
                                <div>
                                    <h3 class="skills__name"><?php echo $data->jobdesk1?></h3>
                                </div>
                            </div> 
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>
                                <div>
                                    <h3 class="skills__name"><?php echo $data->jobdesk2?></h3>
                                </div>
                            </div> 
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>
                                <div>
                                    <h3 class="skills__name"><?php echo $data->jobdesk3?></h3>
                                </div>
                            </div> 
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>
                                <div>
                                    <h3 class="skills__name"><?php echo $data->jobdesk4?></h3>
                                </div>
                            </div> 
                            <div class="skills__data">
                                <i class='bx bxs-badge-check'></i>
                                <div>
                                    <h3 class="skills__name"><?php echo $data->jobdesk5?></h3>
                                </div>
                            </div> 
                             
                        </div>
                    </div>
                </div>
                <?php }
            ?>
            </div>
         
               
        </section>