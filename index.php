<html>
<head>
<title>Opdracht</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
</head>
</html>


<?php
date_default_timezone_set("Europe/Amsterdam");
$time = date("H:i");

if ($time > "05:59" && $time < "11:59"){
    echo "<div class = 'center'><h1>Goede morgen!</h1><h2>Het is nu ", $time, "</h2></div>";
    echo '<body class = "morning"></body>';
}
elseif ($time > "11:59" && $time < "17:59"){
    echo "<div class = 'center'><h1>Goede middag!</h1><h2>Het is nu ", $time, "</h2></div>";
    echo '<body class = "afternoon"></body>';
}
elseif ($time > "17:59"  && $time < "23:59"){
    echo "<div class = 'center'><h1>Goede avond!</h1><h2>Het is nu ", $time, "</h2></div>";
    echo '<body class = "evening"></body>';
}
else{
    echo "<div class = 'center'><h1>Goede nacht!</h1><h2>Het is nu ", $time, "</h2></div>";
    echo '<body class = "night"></body>';
}

?>