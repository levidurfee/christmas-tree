<?php
if(isset($_GET['size'])) {
  $size = $_GET['size'];
  if(is_int($size)) {
    if($size > 70) {
      $size = 35;
    }
  }
} else {
  $size = 35;
}
if(isset($_GET['snow'])) {
  $snow = false;
} else {
  $snow = true;
}
?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Christmas Tree</title>
  <meta name="description" content="Christmas Tree">
  <meta name="author" content="Levi Durfee">
  <link rel='canonical' href='https://levi.lol/christmas/'/>
  <meta property="og:title" content="Christmas Tree"/>
  <meta property="og:image" content="https://tlcdn.net/l/zOEUnA.png"/>
  <meta property="og:url" content="https://levi.lol/christmas/"/>
  <meta property="og:description" content="Levi's Christmas Tree"/>

  <link rel="stylesheet" href="tree.css?v=1.2">

  <!--[if lt IE 9]>
  <script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]--> 
</head>

<body>
	<h1>Levi's Christmas Tree</h1>
	<div>
    <p><span class="star">*</span></p>
		<?php
      for($i=1;$i<$size;$i++) {
        if($i % 2 == 0) {
          $row = ' rowEven';
        } else {
          $row = ' rowOdd';
        }
        echo '<p class="row' . $row . '">';
        for($x=0;$x<$i;$x++) {
          $rand = mt_rand(0, 99);

          echo '<span class="';
          if(($x % 2) == 0 ) {
            echo 'even';
          } else {
            echo 'odd';
          }
          if(($x != 0) AND ($x != $i) AND ($snow == true)) {
            if($rand % 2 == 0) {
              echo ' large';
            }
          }
          echo '">';
          echo '*';
          echo '</span>';
        }
        echo "</p>";
      }
    ?>
    <p class="brown">*</p>
    <p class="brown">*</p>
    <p class="brown">*</p>
    <p class="brown">*********</p>
	</div>
</body>
</html>