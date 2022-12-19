<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto&amp;display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>Ma Maison autonome</title>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "http:\/\/old2.commonsupport.com\/solartech\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.2.17"}
        };
        !function (e, a, t) {
            var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

            function s(e, t) {
                var a = String.fromCharCode;
                p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
                e = i.toDataURL();
                return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
            }

            function c(e) {
                var t = a.createElement("script");
                t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
            }

            for (o = Array("flag", "emoji"), t.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
                if (!p || !p.fillText) return !1;
                switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
                    case"flag":
                        return s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) ? !1 : !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
                    case"emoji":
                        return !s([55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340], [55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340])
                }
                return !1
            }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
            t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
                t.DOMReady = !0
            }, t.supports.everything || (n = function () {
                t.readyCallback()
            }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
                "complete" === a.readyState && t.readyCallback()
            })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
        }(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' href='{{ asset('wp-includes/css/dist/block-library/style.min35eb.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href="{{ asset('wp-includes/css/dist/block-library/theme.min35eb.css') }}" type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('wp-content/plugins/woocommerce/assets/css/blocks/stylef4e1.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('wp-content/plugins/contact-form-7/includes/css/stylesbdeb.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('wp-content/plugins/revslider/public/assets/css/settings84f5.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-layout-css' href='{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerce-layoutf4e1.css?ver=3.6.7') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'
          href='{{ asset('wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreenf4e1.css?ver=3.6.7') }}'
          type='text/css' media='only screen and (max-width: 768px)'/>
    <link rel='stylesheet' id='woocommerce-general-css'
          href='{{ asset('wp-content/plugins/woocommerce/assets/css/woocommercef4e1.css?ver=3.6.7') }}' type='text/css'
          media='all'/>
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required {
            visibility: visible;
        }
    </style>
    <link rel='stylesheet' id='animate-css' href='{{ asset('wp-content/themes/solartech/css/animate35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css' href='{{ asset('wp-content/themes/solartech/css/bootstrap.min35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-select-css' href='{{ asset('wp-content/themes/solartech/css/bootstrap-select.min35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='custom-animate-css' href='{{ asset('wp-content/themes/solartech/css/custom-animate35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-awesome-css' href='{{ asset('wp-content/themes/solartech/css/font-awesome.min35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='energy-style-css' href='{{ asset('wp-content/themes/solartech/plugins/energy-icon/style35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='hover-css' href='{{ asset('wp-content/themes/solartech/css/hover-min35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='icomoon-css' href='{{ asset('wp-content/themes/solartech/css/icomoon35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='imp-css' href='{{ asset('wp-content/themes/solartech/css/imp35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-touchspin-css' href='{{ asset('wp-content/themes/solartech/css/jquery.bootstrap-touchspin35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='jquery-fancybox-css' href='{{ asset('wp-content/themes/solartech/css/jquery.fancybox.min35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='mcustomscrollbar-css' href='{{ asset('wp-content/themes/solartech/css/jquery.mCustomScrollbar.min35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='magnific-popup-css' href='{{ asset('wp-content/themes/solartech/css/magnific-popup35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-css' href='{{ asset('wp-content/themes/solartech/css/owl35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='owl-theme-default-css' href='{{ asset('wp-content/themes/solartech/css/owl.theme.default35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='polyglot-language-switcher-css'
          href='{{ asset('wp-content/themes/solartech/assets/language-switcher/polyglot-language-switcher35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='nouislider-css' href='{{ asset('wp-content/themes/solartech/assets/price-filter/nouislider35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='timepicker-css' href='{{ asset('wp-content/themes/solartech/assets/timepicker/timePicker35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='energy-icon-style-css' href='{{ asset('wp-content/themes/solartech/plugins/energy-icon/style35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='fix-css' href='{{ asset('wp-content/themes/solartech/css/fix35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='woocommerce-css' href='{{ asset('wp-content/themes/solartech/css/woocommerce35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='solartech-main-style-css' href='{{ asset('wp-content/themes/solartech/style35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='solartech-tut-css' href='{{ asset('wp-content/themes/solartech/css/tut35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='solartech-custom-css' href='{{ asset('wp-content/themes/solartech/css/custom35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='solartech-edit-css' href='{{ asset('wp-content/themes/solartech/css/edit35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='solartech-gutenberg-css' href='{{ asset('wp-content/themes/solartech/css/gutenberg35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='solartech-ma-css' href='{{ asset('wp-content/themes/solartech/css/ma35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='home-page-responsive-css' href='{{ asset('wp-content/themes/solartech/css/home-page-responsive35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='navigation-responsive-css' href='{{ asset('wp-content/themes/solartech/css/navigation-responsive35eb.css?ver=5.2.17') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='solartech-responsive-css' href='{{ asset('wp-content/themes/solartech/css/responsive35eb.css?ver=5.2.17') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='kc-general-css' href='{{ asset('wp-content/plugins/kingcomposer/assets/frontend/css/kingcomposer.min76ed.css?ver=2.9.5') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='kc-animate-css' href='{{ asset('wp-content/plugins/kingcomposer/assets/css/animate76ed.css?ver=2.9.5') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='kc-icon-1-css' href='{{ asset('wp-content/themes/solartech/plugins/energy-icon/style76ed.css?ver=2.9.5') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='kc-icon-2-css' href='{{ asset('wp-content/themes/solartech/css/icomoon76ed.css?ver=2.9.5') }}' type='text/css' media='all'/>
    <link rel='stylesheet' id='kc-icon-3-css' href='{{ asset('wp-content/plugins/kingcomposer/assets/css/icons76ed.css?ver=2.9.5') }}' type='text/css' media='all'/>
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jquery4a5f.js?ver=1.12.4-wp') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min84f5.js?ver=5.4.8.1') }}'></script>
    <script type='text/javascript' src='{{ asset('wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min84f5.js?ver=5.4.8.1') }}'></script>
    <noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important;
            }
        </style>
    </noscript>
    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({height: f})
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };</script>
    <script type="text/javascript"></script>
    <style type="text/css" id="kc-css-general">
        .kc-off-notice {
            display: inline-block !important;
        }

        .kc-container {
            max-width: 1170px;
        }</style>
    <style type="text/css" id="kc-css-render"></style>
    @livewireStyles
</head>
<body class="home page-template page-template-tpl-king-composer page-template-tpl-king-composer-php page page-id-12 kingcomposer kc-css-system woocommerce-no-js">
<!-- =======Body Property  ===-->

<div class="body_class">
    <!-- =======Boxed/FullWidth add extra div in footer ===-->
    <div class="page-wrapper ">
        {{ $slot }}
    </div>
</div>

<script type="text/javascript">
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
</script>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/old2.commonsupport.com\/solartech\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"cached":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scriptsbdeb.js?ver=5.1.3'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min44fd.js?ver=2.70'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {"ajax_url":"\/solartech\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/solartech\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"http:\/\/old2.commonsupport.com\/solartech\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.minf4e1.js?ver=3.6.7'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/solartech\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/solartech\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.minf4e1.js?ver=3.6.7'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/solartech\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/solartech\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_de296cf6c268d9c26eee76496b23437f","fragment_name":"wc_fragments_de296cf6c268d9c26eee76496b23437f","request_timeout":"5000"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.minf4e1.js?ver=3.6.7'></script>
<script type='text/javascript' src='wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/appear35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/bootstrap.bundle.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/bootstrap.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/bootstrap-select.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/wow35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.magnific-popup.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/html5shiv35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/isotope35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.bootstrap-touchspin35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.counterup.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.countTo35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.easing.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.enllax.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.fancybox35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.mCustomScrollbar.concat.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.mixitup.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/jquery.paroller.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/owl35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/waypoints.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/assets/language-switcher/jquery.polyglot.language.switcher35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/assets/price-filter/nouislider35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/assets/timepicker/timePicker35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/home-scripts35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/themes/solartech/js/script35eb.js?ver=5.2.17'></script>
<script type='text/javascript'>
    if( ajaxurl === undefined ) var ajaxurl = "wp-admin/admin-ajax.html";
</script>
<script type='text/javascript' src='wp-includes/js/comment-reply.min35eb.js?ver=5.2.17'></script>
<script type='text/javascript' src='wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min76ed.js?ver=2.9.5'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min35eb.js?ver=5.2.17'></script>
@livewireScripts
</body>
</html>
