<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> FUC Hospital de Alvorada</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- css hospital -->
    <link href="/index.php/home?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
    <link href="/index.php/home?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />
    <link href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
    <link href="http://www.hospitaldealvorada.com.br/index.php/component/search/?Itemid=640&amp;format=opensearch" rel="search" title="Buscar Hospital de Alvorada" type="application/opensearchdescription+xml" />

    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/layout.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/joomla.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/system/system.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/template.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/menu/menu.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/gk.stuff.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/vm.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/style1.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/typography/typography.style1.css" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/typography/typography.iconset.style1.css" type="text/css" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300" type="text/css" />
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/small.desktop.css" media="(max-width: 1100px)" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/tablet.css" media="(max-width: 1030px)" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/small.tablet.css" media="(max-width: 820px)" />
    <link rel="stylesheet" href="http://www.hospitaldealvorada.com.br/templates/gk_storebox/css/mobile.css" media="(max-width: 580px)" />

    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>




    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <style type="text/css">

        #gkPageContent{
            width: 50%;
            margin: 0 auto;
        }

        .childcontent .gkcol { width: 220px; }

        body,
        html, 
        body button, 
        body input, 
        body select, 
        body textarea,
        .header,
        .gkMenu > ul li div.childcontent li,
        .featured-view .spacer h3, 
        .latest-view .spacer h3, 
        .topten-view .spacer h3, 
        .related-products-view .spacer h3, 
        .browse-view .row .product .spacer h2,
        .category-view .row .category .spacer h2 { font-family: 'Roboto Condensed', Arial, sans-serif; }
        h1,h2,h3,h4,h5,h6,
        .box.bigtitle .header,
        .gkMenu > ul > li,
        h3.catProductTitle,
        .catProductPrice,
        .product-overlay span,
        #product-tabs li { font-family: 'Open Sans', Arial, sans-serif; }
        .blank { font-family: Verdana, Geneva, sans-serif; }
        .blank { font-family: Arial, Helvetica, sans-serif; }
        @media screen and (max-width: 772.5px) {
            #k2Container .itemsContainer { width: 100%!important; } 
            .cols-2 .column-1,
            .cols-2 .column-2,
            .cols-3 .column-1,
            .cols-3 .column-2,
            .cols-3 .column-3,
            .demo-typo-col2,
            .demo-typo-col3,
            .demo-typo-col4 {width: 100%; }
        }
        #gkContentWrap { width: 100%; }
        .gkPage { max-width: 1100px; }{}




    </style>
</head>
<body>
    <body data-tablet-width="1030" data-mobile-width="580" data-layout="center">    


        <div id="gkMainWrap" class="gkPage">
            <div>
                <div id="gkHeader">
                    <div id="gkHeaderNav" class="gkAbsoluteHeader">                     
                        <h2>
                            <a href="http://www.hospitaldealvorada.com.br/ " id="gkLogo">
                               <!--  <img src="http://www.hospitaldealvorada.com.br/images/layout/logo.png" alt="Hospital de Alvorada" /> -->

                                <img src='{{ asset("storage/logos/logo3.png") }}' style="width:100%;" alt="Hospital de Alvorada" />
                            </a>
                        </h2>
                    </div>

                    <div id="single-item">
                        <div><img src="http://www.hospitaldealvorada.com.br/modules/mod_image_show_gk4/cache/banners.t1gk-is-656.jpg"></div>
                        <div><img src="http://www.hospitaldealvorada.com.br/modules/mod_image_show_gk4/cache/banners.t2gk-is-656.jpg"></div>

                    </div>

                    <main class="py-4">
                        @yield('content')
                    </main>

                </div>
                
            </section>

        </div>

    </div>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">

        $('#single-item').slick({

            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            fade: true,
            cssEase: 'linear',
            arrows: false
        });
    </script>

</body>
</html>
