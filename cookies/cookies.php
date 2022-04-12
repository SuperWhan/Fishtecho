<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<title>Set Cookies</title></head><body>

<h3>Following are the 5 recently visited products !</h3>
<?php
	error_reporting(E_ERROR | E_PARSE);

	    $visited_pages=array();
    	$visited_count=array();
    	$count=0;
      foreach( $_COOKIE as $key=>$value){
          $visited_pages[$count]=$key;
          $visited_count[$key]=$value;
          $count++;
      }
      asort($visited_count);
      $visited_count=array_reverse($visited_count);
  		for($x = 6; $x >=0; $x--) {
      	if($visited_pages[$x] == "fish1")
      		print("<a href=\"categories/fish1.php\">
                <p> California Halibut</p>
                </a> <hr>");
  		  elseif($visited_pages[$x] == "fish2")
          print("<a href=\"categories/fish2.php\">
                <p> Leopard Shark</p>
                </a> <hr>");
        elseif($visited_pages[$x] == "fish3")
          print("<a href=\"categories/fish3.php\">
                <p> Lingcod</p>
                </a> <hr>");
        elseif($visited_pages[$x] == "fish4")
          print("<a href=\"categories/fish4.php\">
                <p> Rock Fish</p>
                </a> <hr>");
  		  elseif($visited_pages[$x] == "fish5")
          print("<a href=\"categories/fish5.php\">
                <p> Yellow Fin tuna</p>
                </a> <hr>");
      	elseif($visited_pages[$x] == "fish6")
          print("<a href=\"categories/fish6.php\">
                <p> Rock Crab</p>
                </a> <hr>");
		}
		 print("</br></br><h3>Following are top 5 visited products !</h3>");
		$x=0;
		foreach ($visited_count as $key => $val) {
			if($x<7){
        if($key == "fish1")
          print("<a href=\"categories/fish1.php\">
                <p> California Halibut</p>
                </a><p>Number of hits = $val</p> <hr>");
        elseif($key == "fish2")
          print("<a href=\"categories/fish2.php\">
                <p> Leopard Shark</p>
                </a><p>Number of hits = $val</p><hr>");
        elseif($key == "fish3")
          print("<a href=\"categories/fish1.php\">
                <p> Lingcod</p>
                </a><p>Number of hits = $val</p><hr>");
        elseif($key == "fish4")
          print("<a href=\"categories/fish4.php\">
                <p> Rock Fish</p>
                </a><p>Number of hits = $val</p><hr>");
        elseif($key == "fish5")
          print("<a href=\"categories/fish5.php\">
                <p> Yellow Fin tuna</p>
                </a><p>Number of hits = $val</p><hr>");
        elseif($key == "fish6")
          print("<a href=\"categories/fish6.php\">
                <p> Rock Crab</p>
                </a><p>Number of hits = $val</p><hr>");
      		$x++;
    		}
		}


?>

</body>
</html>
