<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Squaretype
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<script>
    /*
        !function(){var analytics=window.analytics=window.analytics||[];if(!analytics.initialize)if(analytics.invoked)window.console&&console.error&&console.error("Segment snippet included twice.");else{analytics.invoked=!0;analytics.methods=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready","alias","debug","page","once","off","on"];analytics.factory=function(t){return function(){var e=Array.prototype.slice.call(arguments);e.unshift(t);analytics.push(e);return analytics}};for(var t=0;t<analytics.methods.length;t++){var e=analytics.methods[t];analytics[e]=analytics.factory(e)}analytics.load=function(t,e){var n=document.createElement("script");n.type="text/javascript";n.async=!0;n.src="https://cdn.segment.com/analytics.js/v1/"+t+"/analytics.min.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(n,a);analytics._loadOptions=e};analytics.SNIPPET_VERSION="4.1.0";
          analytics.load("51nPgT3NL0NNv0x65qVW1hvYrBixQyQm");
          analytics.page();
          }}();

        (function (w, d, s, l, i) { w[l] = w[l] || []; w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' }); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = !0; j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f) })(window, document, 'script', 'dataLayer', 'GTM-WCVGTLD');

        (function () { var w = window; var ic = w.Intercom; if (typeof ic === "function") { ic('reattach_activator'); ic('update', w.intercomSettings); } else { var d = document; var i = function () { i.c(arguments); }; i.q = []; i.c = function (args) { i.q.push(args); }; w.Intercom = i; var l = function () { var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = 'https://widget.intercom.io/widget/rqr1i205'; var x = d.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x); }; if (w.attachEvent) { w.attachEvent('onload', l); } else { w.addEventListener('load', l, false); } } })();
        */
    </script>
</head>

<body <?php body_class(); ?>>
<script>
        /*window.intercomSettings = {
            app_id: "rqr1i205",
        };*/
    </script>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCVGTLD" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

<?php do_action( 'csco_site_before' ); ?>

<div id="page" class="site">

	<?php do_action( 'csco_site_start' ); ?>

	<div class="site-inner">

		<?php do_action( 'csco_header_before' ); ?>
		<div id="top" class="utility-nav">
			<div class="container-md layout-row layout-align-space-between-center">
            <?php
				wp_nav_menu( array(
				'container'      => false,
				'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
				'menu'			 => 'top-nav-left',
                ) );

                wp_nav_menu( array(
                    'container'      => false,
                    'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
                    'menu'			 => 'top-nav-right',
                ) );
                ?>
			</div>
		</div>
		<header id="masthead" class="site-header">
			<?php
			if ( 'large' === get_theme_mod( 'header_layout', 'large' ) ) {
				get_template_part( 'template-parts/headers/header-large' );
			} else {
				get_template_part( 'template-parts/headers/header-default' );
			}
			?>
		</header><!-- #masthead -->

		<?php do_action( 'csco_header_after' ); ?>

		<div class="site-primary">

			<?php do_action( 'csco_site_content_before' ); ?>

			<div <?php csco_site_content_class(); ?>>

				<?php do_action( 'csco_site_content_start' ); ?>

				<div class="cs-container">

					<?php do_action( 'csco_main_content_before' ); ?>

					<div id="content" class="main-content">

						<?php do_action( 'csco_main_content_start' ); ?>