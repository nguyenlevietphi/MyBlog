<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>My Blog</title>
    <link rel="stylesheet" href="./styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="./styles/css/styles.css">
    <script type="text/javascript" src="./styles/js/jquery.js"></script>
</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="nav">
            <li class="active"><a href="index.php">My Blog</a></li>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
        <div class='span9 main'>
            <?php include ROOT . DS . 'views' . DS . $template_file; ?>
        </div>
        </div>
  </div>
</body>
</html>