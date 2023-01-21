<footer class="">
        <div class="footer-left">
            <div>
              <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/graphics/hut%20and%20splodge.svg" class="hover-scale">
                </a>
            </div>

            <div class="flex-col  icon-cont ">
                <div class="">
                    <a href="https://www.instagram.com/lachozachula/?hl=en" >
                        <i class="fa fa-instagram hover-scale" aria-hidden="true"></i>
                    </a>
                    <a href="https://www.facebook.com/chozachula">
                        <i class="fa fa-facebook-square hover-scale" aria-hidden="true"></i>
                    </a>
                    <a href="mailto:info@lachozachula.org?subject=Hello" target="_blank">
                        <i class="fa fa-envelope-o hover-scale" aria-hidden="true"></i>
                    </a>
                </div>

                <a href="https://www.google.co.uk/maps/place/El+Paredon,+Guatemala/@13.9178738,-91.0764125,17z/data=!3m1!4b1!4m5!3m4!1s0x8588c81ecab28771:0x88aebceea748d47e!8m2!3d13.9185706!4d-91.0747782?hl=en" target="_blank" class="">
                <div class="address mt10">
                    <p>La Choza Chula,</p>
                    <p>El Paredón, Guatemala</p>
                    <p>© La Choza Chula <?php echo date("Y");?></p>
                    <p>Registered community interest company no. 487948</p>
				
                </div>
                </a>
				
			<div class="mt1">
				
				<p >La Choza Chula are members of the</p>
				
				<p class="andrewcodes">  <a href="https://www.accountsandlegal.co.uk/" target="_blank"><span>Accounts and Legal Entrepreneur’s Club (ALEC)</span></a> </p>
				<p>an exclusive club run by small business accountant, Accounts and Legal. </p>
					 
					 
				</div>
				
					
				
            </div>
        </div>







        <div class="footer-right">



            <div class="footer-right-row">

                <ul class="">
                    <p class="li-title">La Choza Chula</p>
                        <?php get_template_part( 'template-parts/footer-menu'); ?>
                </ul>

                <ul>
                    <p class="li-title">Contact Us</p>
                    <li><a href="">email</a></li>
                    <li><a href="https://www.instagram.com/lachozachula/?hl=en" target="_blank">instagram</a></li>
                    <li><a href="https://www.facebook.com/chozachula/?fref=ts" target="_blank">facebook</a></li>
                    <li><a href="https://www.google.co.uk/maps/place/El+Paredon,+Guatemala/@13.9178738,-91.0764125,17z/data=!3m1!4b1!4m5!3m4!1s0x8588c81ecab28771:0x88aebceea748d47e!8m2!3d13.9185706!4d-91.0747782?hl=en" target="_blank">map</a></li>

                </ul>
            </div><!--.footer-right-row-->
            <p class="andrewcodes">this website was made by <a href="http://www.andrewcodes404.com/" target="_blank"><span>&#126;andrewcodes404.com&#126;</span></a></p>
        </div><!--.footer-right-col-->
    </footer>

<?php wp_footer(); ?>
</body>
</html>
