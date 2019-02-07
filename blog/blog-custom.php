
<?php
/*
 * Template Name: Featured Article
 * Template Post Type: post, page, product
 */
global $ins_opt;
?>
<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
if (has_post_format('gallery', $post->ID)) {
  $main_class = 'blog-gallary-page';
  $img_class = 'blog-gallery-box';
}
elseif (has_post_format('video', $post->ID) || has_post_format('audio', $post->ID) || has_post_format('quote', $post->ID)){
  $main_class = 'blog-page';
  $img_class = 'blog-img-box';
}else{
  $main_class = 'blog-page';
  $img_class = '';
}
?>

<?php 
$archive_year  = get_the_time('Y'); 
$archive_month = get_the_time('m'); 
$archive_day   = get_the_time('d'); 
?>


<?php if ( has_post_thumbnail($post->ID) ) { 
              $single_blog_bg =   'style="background-image: url('.get_the_post_thumbnail_url().');"'; 

 }else{
              $single_blog_bg =   ''; 
}  ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>Click Gold World</title>
    <link href="../css/stansberry-external.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="../css/base.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,700,700i" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
        crossorigin="anonymous">
    <style>
      .adv-kicker {
        color: #aaa;
        font-family: "ProximaNova", arial, sans-serif;
        font-size: 16px;
        display: block;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin: 0 auto;
        margin: -15px auto 0;
    }
    </style>
    <!-- Start Visual Website Optimizer Asynchronous Code -->
    <script type='text/javascript'>
        var _vwo_code = (function () {
            var account_id = 130021,
                settings_tolerance = 2000,
                library_tolerance = 2500,
                use_existing_jquery = false,
                /* DO NOT EDIT BELOW THIS LINE */
                f = false,
                d = document;
            return {
                use_existing_jquery: function () {
                    return use_existing_jquery;
                },
                library_tolerance: function () {
                    return library_tolerance;
                },
                finish: function () {
                    if (!f) {
                        f = true;
                        var a = d.getElementById('_vis_opt_path_hides');
                        if (a) a.parentNode.removeChild(a);
                    }
                },
                finished: function () {
                    return f;
                },
                load: function (a) {
                    var b = d.createElement('script');
                    b.src = a;
                    b.type = 'text/javascript';
                    b.innerText;
                    b.onerror = function () {
                        _vwo_code.finish();
                    };
                    d.getElementsByTagName('head')[0].appendChild(b);
                },
                init: function () {
                    settings_timer = setTimeout('_vwo_code.finish()', settings_tolerance);
                    var a = d.createElement('style'),
                        b =
                        'body{opacity:0 !important;filter:alpha(opacity=0) !important;background:none !important;}',
                        h = d.getElementsByTagName('head')[0];
                    a.setAttribute('id', '_vis_opt_path_hides');
                    a.setAttribute('type', 'text/css');
                    if (a.styleSheet) a.styleSheet.cssText = b;
                    else a.appendChild(d.createTextNode(b));
                    h.appendChild(a);
                    this.load('//dev.visualwebsiteoptimizer.com/j.php?a=' + account_id + '&u=' +
                        encodeURIComponent(d.URL) + '&r=' + Math.random());
                    return settings_timer;
                }
            };
        }());
        _vwo_settings_timer = _vwo_code.init();
    </script>
    <!-- End Visual Website Optimizer Asynchronous Code -->
    <script async src="//www.storygize.net/a/8c48fda1-6e14-40e0-92df-a4f2c5d31e26/abdo.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/hopstatic/js/highlight.pack.js"></script>
    <script type="text/javascript" src="https://s3.amazonaws.com/hopstatic/js/ScrollMagic.js"></script>
    <!-- <script type="text/javascript" src="https://s3.amazonaws.com/hopstatic/js/debug.addIndicators.js"></script> -->
    <script src="https://static.cloudsna.com/store/PROD/js/dynamizer.js"></script>
    <!-- start Mixpanel -->
    <script type="text/javascript">
        (function (e, a) {
            if (!a.__SV) {
                var b = window;
                try {
                    var c, l, i, j = b.location,
                        g = j.hash;
                    c = function (a, b) {
                        return (l = a.match(RegExp(b + "=([^&]*)"))) ? l[1] : null
                    };
                    g && c(g, "state") && (i = JSON.parse(decodeURIComponent(c(g, "state"))), "mpeditor" === i.action &&
                        (b.sessionStorage.setItem("_mpcehash", g), history.replaceState(i.desiredHash || "", e.title,
                            j.pathname + j.search)))
                } catch (m) {}
                var k, h;
                window.mixpanel = a;
                a._i = [];
                a.init = function (b, c, f) {
                    function e(b, a) {
                        var c = a.split(".");
                        2 == c.length && (b = b[c[0]], a = c[1]);
                        b[a] = function () {
                            b.push([a].concat(Array.prototype.slice.call(arguments,
                                0)))
                        }
                    }
                    var d = a;
                    "undefined" !== typeof f ? d = a[f] = [] : f = "mixpanel";
                    d.people = d.people || [];
                    d.toString = function (b) {
                        var a = "mixpanel";
                        "mixpanel" !== f && (a += "." + f);
                        b || (a += " (stub)");
                        return a
                    };
                    d.people.toString = function () {
                        return d.toString(1) + ".people (stub)"
                    };
                    k =
                        "disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user"
                        .split(" ");
                    for (h = 0; h < k.length; h++) e(d, k[h]);
                    a._i.push([b, c, f])
                };
                a.__SV = 1.2;
                b = e.createElement("script");
                b.type = "text/javascript";
                b.async = !0;
                b.src = "undefined" !== typeof MIXPANEL_CUSTOM_LIB_URL ? MIXPANEL_CUSTOM_LIB_URL : "file:" === e.location
                    .protocol && "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//) ?
                    "https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js" :
                    "//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";
                c = e.getElementsByTagName("script")[0];
                c.parentNode.insertBefore(b, c)
            }
        })(document, window.mixpanel || []);
        mixpanel.init("285ec6de65689b5bf5160fc38d13e1ae");
    </script><!-- end Mixpanel -->
    <script>
        var cid = 'MKT372192';
        var eid = 'MKT376535';
    </script>
    <script type="text/javascript">
        var ssaUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') +
            'pixel-a.basis.net/iap/7908c83969593ed8';
        new Image().src = ssaUrl;
        (function (d) {
            var syncUrl = ('https:' == document.location.protocol ? 'https://' : 'http://') +
                'pixel-a.basis.net/dmp/asyncPixelSync';
            var iframe = d.createElement('iframe');
            (iframe.frameElement || iframe).style.cssText = "width: 0; height: 0; border: 0;";
            iframe.src = "javascript:false";
            d.body.appendChild(iframe);
            var doc = iframe.contentWindow.document;
            doc.open().write('<body onload="window.location.href=\'' + syncUrl + '\'">');
            doc.close();
        })(document);
    </script>

</head>

<body>


    

    <div class="showcase-intro">
        <img alt="Showcase Image" class="showcase-image" src="img/showcase-nyse.jpg" />


        <section class="showcase-inner three-line">
            <div class="headline-holder">
                <p class="adv-kicker">Advertorial</p>
                <h1>Reclusive Millionaire Warns: "Get Out of Cash Now"</h1>
                <p class="byline">By Brian Mansfield | January 9, 2019</p>
            </div>
        </section>
    </div>



    <article>

        <div class="share-container">
            <a class="item" id="share-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Finvestingoutlook.co%2Farticle-get-out-of-cash.html">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="item" id="share-twitter" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Finvestingoutlook.co%2Farticle-get-out-of-cash.html%2F&amp;text=Reclusive+Millionaire+Warns:+Get+Out+of+Cash+Now">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="item" id="share-email" href="/cdn-cgi/l/email-protection#be81cdcbdcd4dbddca83f79b8c8ed4cbcdca9b8c8ecddfc99b8c8ecad6db9b8c8ed3d1cdca9b8c8ed7d0ddccdbdad7dcd2db9b8c8ecdcad1ccc79b8c8ed1d09b8c8ef7d0c8dbcdcad7d0d9f1cbcad2d1d1d590ddd190909098dfd3ce85dcd1dac783ecdbddd2cbcdd7c8db9b8c8ef3d7d2d2d7d1d0dfd7ccdb9b8c8ee9dfccd0cd9b8dff9b8c8e9b8c8cf9dbca9b8c8ef1cbca9b8c8ed1d89b8c8efddfcdd69b8c8ef0d1c99b8c8c9b8efa9b8eff9b8efa9b8effd6cacacecd849191d7d0c8dbcdcad7d0d9d1cbcad2d1d1d590ddd191dfcccad7ddd2db93d9dbca93d1cbca93d1d893dddfcdd690d6cad3d2">
                <i class="fas fa-envelope"></i>
            </a>
        </div>

        <div class="main-middle subpage">

            <div class="col-content centered ">

                <div class="sidebar">
                    <img src="img/image-wall_st.jpg" alt="5G is going to change every aspect of your life.">
                    <p>Steve Sjuggerud's <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            getSource(urlParams["cid"], urlParams["eid"]);
                        </script>latest prediction</a> has caught many Wall Street analysts off guard.
                    </p>
                </div>

                <p><span class="dropcap">S</span>omething strange is going on in the financial system.</p>
                <p>And according to <em>The Financial Times</em>, it's about to send a massive flood of cash into the
                    pockets of the most prepared Americans.</p>
                <p>What exactly is going on and <script>
                        getSource(urlParams["cid"], urlParams["eid"]);
                    </script>what does it mean for your money?</a></p>
                <p>I recently met up with former hedge fund manager, Dr. Steve Sjuggerud &mdash; one of the most
                    widely-followed financial analysts in the world.</p>
                <p>Today, he shuns the spotlight and lives on a remote island off the Florida coast. And he's built a
                    new life... and a substantial fortune... by sharing a series of eerie predictions. Many of which
                    have proven correct.</p>

                <p class="bullets">In January of 2000, he wrote: "We are at the peak of most likely the greatest
                    financial mania that will ever be seen in our lifetimes." Next thing you know, the NASDAQ fell more
                    than 75%.</p>
                <p class="bullets">On November 1, 2002, he said, "I expect a real estate bubble to take hold. We don't
                    know how far it will go. But it has likely just begun." You probably remember what happened next
                    &mdash; home prices soared.</p>
                <p class="bullets">Then on Friday, March 20, 2009 &mdash; at the peak of the financial panic, he wrote:
                    "You want to own stocks right now." Stocks have nearly tripled since.</p>

                <p>But his <script>
                        getSource(urlParams["cid"], urlParams["eid"]);
                    </script>latest prediction has caught many Americans completely off-guard.</a></p>
                <p>Dr. Sjuggerud says, "Missing out <script>
                        getSource(urlParams["cid"], urlParams["eid"]);
                    </script>on what's about to happen</a> is going to be a huge, huge source of regret in the months
                    ahead."</p>
                <p>He told me, over the next year or two, there's going to be a panic &mdash; but not the kind of panic
                    most people expect. In fact, it's already begun.</p>
                <p>Dr. Sjuggerud is an intensely private man. But he was recently prodded by a friend &mdash; one of
                    the most successful investment analysts in the world &mdash; to <script>
                        getSource(urlParams["cid"], urlParams["eid"]);
                    </script>share the details of his stunning research with the general public.</a></p>
                <p>I should warn you: What he has to say is controversial... and not at all what you'll hear from the
                    mainstream press. But for the time being, you can view his presentation, <script>
                        getSource(urlParams["cid"], urlParams["eid"]);
                    </script>right here.</a></p>

                <script>
                    getSource(urlParams["cid"], urlParams["eid"]);
                </script><img style="margin-top: 40px; max-width: 600px;" alt="View his presentation by clicking here"
                    class="content-chart" src="img/image-wow-screenshot.jpg" /></a>





                <div class="multi-lines">
                    <div class="multi-lines_lines">&nbsp;</div>
                    <div class="multi-lines_lines">&nbsp;</div>
                    <div class="multi-lines_lines">&nbsp;</div>
                </div>

                <section class="related">
                    <h3 class="home-header">Recent Articles</h3>
                    <a href="article-tech-revolution.html" class="related-box">
                        <div class="related-img">
                            <img src="img/reco_8.jpg" />
                        </div>
                        <div class="related-copy">
                            <h4>This Keystone Technology Will Spark the Next Industrial Revolution</h4>
                            <p>This new technology is going to be the centerpiece of an entire new generation of
                                groundbreaking technologies...</p>
                        </div>
                    </a>



                    <a href="article-political-event.html" class="related-box">
                        <div class="related-img">
                            <img src="img/reco_5.jpg" />
                        </div>
                        <div class="related-copy">
                            <h4>This Political Event Will be Unlike Anything We've Seen in 50 Years </h4>
                            <p>Do you ever feel—despite the supposed economic "recovery" of recent years—that something
                                in America is still not quite right? If so, you are not alone.</p>
                        </div>
                    </a>
                </section>





            </div>





        </div>

    </article>

    <footer>
        <div class="bottom-footer">
            <img src="img/logo.png" alt="Investing Outlook">

            <p><a href="about.html" name="About Us" aria-label="About Us">About Us</a> | <a href="privacy.html" name="Privacy Policy"
                    aria-label="Privacy Policy">Privacy Policy</a> | <a href="contact.html" name="Contact Us"
                    aria-label="Contact Us">Contact Us</a></p>
            <p>&copy; 2018 Winans Media, LLC. All Rights Reserved. Protected by copyright laws of the United States and
                international treaties.</p>

            <p>This website may only be used pursuant to the subscription agreement and any reproduction, copying, or
                redistribution (electronic or otherwise, including on the world wide web), in whole or in part, is
                strictly prohibited without the express written permission of Winans Media, LLC. </p>


        </div>
    </footer>
    <script>
        mixpanel.track('Advertorial Page', {
            'Campaign Name': 'SIR 5G - August 2018',
            'EID': urlParams["eid"]
        });
    </script>

    <script>
        $(function () {
            $(".toggle-nav").click(function () {
                event.preventDefault();
                $("html").toggleClass("nav-floating");
                $(".side-navigation").toggleClass("slide-out");

            });
            $(document).on('scroll', function () {
                if ($(document).scrollTop() > 50) {
                    $('.logo-regular').addClass('scrolled');
                    $('.logo-icon').addClass('scrolled');
                } else {
                    $('.logo-regular').removeClass('scrolled');
                    $('.logo-icon').removeClass('scrolled');
                }
            });
        });
    </script>
    <script>
        var controller = new ScrollMagic.Controller();
    </script>

    <script>
        $(function () { // wait for document ready
            // build scene
            var scene = new ScrollMagic.Scene({
                    triggerElement: ".main-middle"
                })
                .setPin(".share-container")
                .addIndicators({
                    name: "2 (duration: 0)"
                }) // add indicators (requires plugin)
                .addTo(controller);
        });
    </script>



    <script>
        var urlParams;
        (window.onpopstate = function () {
            var match,
                pl = /\+/g, // Regex for replacing addition symbol with a space
                search = /([^&=]+)=?([^&]*)/g,
                decode = function (s) {
                    return decodeURIComponent(s.replace(pl, " "));
                },
                query = window.location.search.substring(1);

            urlParams = {};
            while (match = search.exec(query))
                urlParams[decode(match[1])] = decode(match[2]);
        })();
    </script>
    <!-- Segment Pixel - Stansberry Remarketing Pixel - DO NOT MODIFY -->
    <img src="https://secure.adnxs.com/seg?add=16638667&t=2" width="1" height="1" />
    <!-- End of Segment Pixel -->
</body>

</html>