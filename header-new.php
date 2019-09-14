<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/public.css" type="text/css" media="screen" />
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
	<?php wp_body_open(); ?>
	<script>
        /*window.intercomSettings = {
            app_id: "rqr1i205",
        };*/
    </script>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WCVGTLD" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
	<div id="top" class="utility-nav">
        <div class="container-md layout-row layout-align-space-between-center">
			<?php
			wp_nav_menu( array(
				'container'      => false,
				'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
				'menu'			 => 'utility-nav-left',
			) );

			wp_nav_menu( array(
				'container'      => false,
				'items_wrap'     => '<ul id="%1$s">%3$s</ul>',
				'menu'			 => 'utility-nav-right',
			) );
			?>
        </div>
    </div>
    <header id="header" class="header-new 
    	<?php 
			if (is_home()) {
				echo "initial-transparent--white";
			}
		?>
    ">
        <div class="container-md">
			<a href="/" class="logo">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/transform-logo.svg" alt="Dark Transform.vn Logo" />
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/transform-white-logo.svg" class="light-overlay" alt="White Transform.vn Logo" />
            </a>
            <a href="javascript:void(0)" title="Toggle Menu" class="lp-button lp-button--icon mobile-menu-toggle">
                <i class="mdi mdi-close"></i>
                <i class="mdi mdi-menu showing"></i>
            </a>
            <menu id="menu" class="menu">
                <div id="menu-wrapper" class="menu-wrapper layout-gt-sm-row">
					<?php
					wp_nav_menu(array(
						'container'      => false,
						'items_wrap'     => '<ul id="%1$s" class="navs flex-gt-sm">%3$s</ul>',
						'menu'			 => 'primary-nav',
						'link_before'	 => '<span>',
						'link_after'	 => '</span>',
					));
					?>
                    <div class="menu-right flex-gt-sm-none">
                        <div class="dashboard">
                            <a href="/login?returnUrl=@Request.Url.AbsolutePath" class="lp-button lp-button--primary lp-button--small">Đăng nhập</a>
                        </div>
                    </div>
                </div>
            </menu>
        </div>
    </header>
    <div class="page">
        <div class="view-container">
