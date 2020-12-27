// =========================================================================
// GOOGLE TAG MANAGER - <head>
// =========================================================================
function add_gtag_to_head() { ?>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-XXXXXXX');</script>
    <!-- End Google Tag Manager -->
<?php } 
add_action('wp_head', 'add_gtag_to_head');
 
 
// =========================================================================
// GOOGLE TAG MANAGER - <body>
// =========================================================================
function add_gtag_to_body() { ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-XXXXXXX"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
<?php } 
add_action('wp_body_open', 'add_gtag_to_body');

<!--GOOGLE CONVERSION TRACKING CODE-->
<?php if (is_page(xxxxx) ) { ?>
       <div class="tracking-code">
            
       </div>
<?php } ?>
