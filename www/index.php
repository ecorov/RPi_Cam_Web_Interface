<!DOCTYPE html>

<html>
   <head>
      <meta name="viewport" content="width=550, initial-scale=1">
      <link rel="stylesheet" href="css/style_minified.css" />
      <script src="js/script.js"></script>
      <script src="js/pipan.js"></script>
   </head>
   <body onload="setTimeout('init(0,25,1);', 100);">

      
      <div class="container-fluid text-center liveimage">
         <img id="mjpeg_dest" onclick="toggle_fullscreen(this);" src="cam_pic.php?time=time()&amp;pDelay=40000">
         <div id="main-buttons" >
            <input id="video_button" type="button" class="btn btn-primary">
            <input id="image_button" type="button" class="btn btn-primary">
            <input id="timelapse_button" type="button" class="btn btn-primary">
            <input id="md_button" type="button" class="btn btn-primary">
            <input id="halt_button" type="button" class="btn btn-danger">
         </div>
      </div>
      <a href="preview.php" class="btn btn-default">Download Videos and Images</a>
   </body>
</html>
