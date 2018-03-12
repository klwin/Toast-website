<?php
/** 
 * The theme footer.
 * 
 * @package bootstrap-basic4
 */
?>
            </div><!--.site-content-->


            <footer id="site-footer" class="site-footer page-footer" role="contentinfo">
                <div id="footer-row" class="row">
                    <!--put copyright date and blog name-->
                    <div class="col-md-6 footer-left">
                        <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('name'); ?></p>
                    </div>
                    <div class="col-md-6 footer-right text-right">
                        <?php dynamic_sidebar('footer-right'); ?> 
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            </footer><!--.page-footer-->


        <!--wordpress footer-->
        <?php wp_footer(); ?> 
        <!--end wordpress footer-->
    </body>
</html>