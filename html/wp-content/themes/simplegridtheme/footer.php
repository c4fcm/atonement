    </div><!--//content_container-->

    

    <div id="footer">

        <div class="footer_widgets_cont">

        

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer') ) : ?>       

        

            <div class="footer_box">

                <h3>Widget Footer</h3>

                <p>Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box.</p>

            </div><!--//footer_box-->

            

            <div class="footer_box">

                <h3>Widget Footer</h3>

                <p>Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box.</p>

            </div><!--//footer_box-->



            

            <?php endif; ?>                

            

            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Last') ) : ?>       

            

            <div class="footer_box footer_box_last">

                <h3>Widget Footer</h3>

                <p>Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box. Please use widget to setup this text box.</p>

            </div><!--//footer_box-->            

            

            <?php endif; ?>                

            

            <div class="clear"></div>

        

        </div><!--//footer_widgets_cont-->

    

        <div class="footer_copyright">
            <a href="http://civic.mit.edu"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/c4cm-badge.gif"/></a>
        </div>

    </div><!--//footer-->



</div><!--//main_container-->



<?php wp_footer(); ?>

</body>

</html>