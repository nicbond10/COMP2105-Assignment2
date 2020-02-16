<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assignment 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Styling for the page and animation -->
  <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
  <!-- Stage (container) for the animation -->
  <div class="container">
    <!-- Area that the ball will move inside of -->
    <div id="ball-container">
      <!-- The shadow of the ball -->
      <div id="ball-shadow">
      </div>
      <!-- The actual ball -->
      <div id="ball">
      </div>
    </div>
  </div><!-- end animation container -->
  <!-- Container for the begin animation button -->
  <div class="button-container">
    <button class="pulse" id="beginButton">Bounce The Ball!</button>
  </div>
  <!-- Call in the script that will trigger the animation on button click -->
  <script src="bounce.js"></script>
</body>
</html>
