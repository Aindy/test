<?php
$objCompany = new Company();
$company = $objCompany->getCompany();

$objNews = new News();
$cats = $objNews->getCategories();

//$objProject = new Project();
//$inds = $objProject->getIndustry();

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ФОНД ИМЕНИ ШЕЙХА ЗАЙЕДА ПО ПОДДЕРЖКЕ ПРЕДПРИНИМАТЕЛЬСТВА И ИННОВАЦИЙ">
    <meta name="author" content="Ислам Дудаев">
    <title>Фонд имени Шейха Зайеда</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/application.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
	<script type="text/javascript">
		<?php 
    if($_GET['ind'] > 0) {
      if ($_GET['id'] > 0) {
        echo "var id = $_GET[id];";
      }
      else {
        echo "var ind = $_GET[ind];";
        echo "var id = 0;";
      }
    }
    else {
      if ($_GET['id'] > 0) {
        echo "var id = $_GET[id]";
      }
      else {
        echo "var ind = 0;";
        echo "var id = 0;";
      }
    }
    ?>
	</script>
	<script type="text/javascript" src="pages/map_js.js"></script>
</head>

<body>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-105222775-1', 'auto');
	  ga('send', 'pageview');
	</script>
	
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	    (function (d, w, c) {
	        (w[c] = w[c] || []).push(function() {
	            try {
	                w.yaCounter45731241 = new Ya.Metrika({
	                    id:45731241,
	                    clickmap:true,
	                    trackLinks:true,
	                    accurateTrackBounce:true
	                });
	            } catch(e) { }
	        });
	
	        var n = d.getElementsByTagName("script")[0],
	            s = d.createElement("script"),
	            f = function () { n.parentNode.insertBefore(s, n); };
	        s.type = "text/javascript";
	        s.async = true;
	        s.src = "https://mc.yandex.ru/metrika/watch.js";
	
	        if (w.opera == "[object Opera]") {
	            d.addEventListener("DOMContentLoaded", f, false);
	        } else { f(); }
	    })(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/45731241" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
	
	
