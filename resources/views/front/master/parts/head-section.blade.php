
<!--css-->
<link href="{{asset('/front')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('/front')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('/front')}}/css/font-awesome.css" rel="stylesheet">
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="{{asset('/front')}}/js/jquery.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!--search jQuery-->
<script src="{{asset('/front')}}/js/main.js"></script>
<!--search jQuery-->
<script src="{{asset('/front')}}/js/responsiveslides.min.js"></script>
<script>
    $(function () {
        $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: true,
        });
    });
</script>
<!--mycart-->
<script type="text/javascript" src="{{asset('/front')}}/js/bootstrap-3.1.1.min.js"></script>
<!-- cart -->
<script src="{{asset('/front')}}/js/simpleCart.min.js"></script>
<!-- cart -->
<!--start-rate-->
<script src="{{asset('/front')}}/js/jstarbox.js"></script>
<link rel="stylesheet" href="{{asset('/front')}}/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
    jQuery(function() {
        jQuery('.starbox').each(function() {
            var starbox = jQuery(this);
            starbox.starbox({
                average: starbox.attr('data-start-value'),
                changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                ghosting: starbox.hasClass('ghosting'),
                autoUpdateAverage: starbox.hasClass('autoupdate'),
                buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                stars: starbox.attr('data-star-count') || 5
            }).bind('starbox-value-changed', function(event, value) {
                if(starbox.hasClass('random')) {
                    var val = Math.random();
                    starbox.next().text(' '+val);
                    return val;
                }
            })
        });
    });
</script>
<!--//End-rate-->