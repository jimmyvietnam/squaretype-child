		</div>
        <footer class="footer-new">
            <div class="container-md">
                <div class="footer-new-links layout-gt-sm-row layout-align-space-between-center">
                    <a href="/">
			<?php csco_get_retina_image( $logo_id, array( 'alt' => get_bloginfo( 'name' ) ) ); ?>
		    </a>
		    <?php
		    wp_nav_menu( array(
		    'container'      => 'div',
		    'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
		    'menu'			 => 'footer',
		    ) );
		    ?>
                </div>
                <div class="footer-new-legal layout-gt-sm-row">
                    <div class="footer-new-legal-copy flex-gt-sm">
			<p class="footer-new-copyright">©2019 Transform Asia Pte. Ltd, all rights reserved.</p>
			<p class="footer-new-trademarks"><?php echo do_shortcode( $footer_text ); ?></p>
		    </div>
                    <div class="built-mn flex-gt-sm-none">
                        <div class="built-mn-graphic"></div>
                        <div class="built-mn-text">
                            Make by
                            <br />Transform
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        /*(function (e, t, o, n, p, r, i) { e.visitorGlobalObjectAlias = n; e[e.visitorGlobalObjectAlias] = e[e.visitorGlobalObjectAlias] || function () { (e[e.visitorGlobalObjectAlias].q = e[e.visitorGlobalObjectAlias].q || []).push(arguments) }; e[e.visitorGlobalObjectAlias].l = (new Date).getTime(); r = t.createElement("script"); r.src = o; r.async = true; i = t.getElementsByTagName("script")[0]; i.parentNode.insertBefore(r, i) })(window, document, "https://diffuser-cdn.app-us1.com/diffuser/diffuser.js", "vgo");
        vgo('setAccount', '66267832');
        vgo('setTrackByDefault', true);*/
    </script>
	<?php wp_footer(); ?>
</body>
</html>
