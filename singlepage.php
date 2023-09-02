<!doctype html>
<html lang="en">
   <head>
      <!-- header CDN links -->
      <?php include 'includes/header.php'?>
      <!-- header CDN links -->
      <title>Shop</title>
   </head>
   <body>
      <!-- navigation bar -->
      <?php include 'includes/navbar.php'?>
      <!-- navigation bar -->


      <?php include 'includes/footer.php'?>
      <!-- footer -->
      <!-- footer CDN links -->
      <?php include 'includes/footer_script.php'?>
      <!-- footer CDN links -->
      <script type="text/javascript" src="https://qmixi.github.io/slide-nav/dist/slideNav.js"></script>
      <script type="text/javascript">
            var dataset = ee.ImageCollection("CIESIN/GPWv411/GPW_Population_Count").first();
            var raster = dataset.select('population_count');
            var raster_vis = {
              "max": 1000.0,
              "palette": [
                "ffffe7",
                "86a192",
                "509791",
                "307296",
                "2c4484",
                "000066"
              ],
              "min": 0.0
            };
            Map.setCenter(79.1, 19.81, 3);
            Map.addLayer(raster, raster_vis, 'population_count');

      </script>
   </body>
</html>