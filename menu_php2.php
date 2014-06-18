<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

<!--CSS -->
<link rel="stylesheet" href="menu_styles.css" type="text/css" />
<style>
</style>

<body>
<?php

//create array of navbar headings
$menu= array('home',"about","contact","home2","home3");
$arrlength=count($menu);


//loop headings into html menu with CSS styles
for($x=0;$x<$arrlength;$x++) {

echo   '<div id="container">';
echo   '<ul id="menu">';
echo "<li><a>  $menu[$x] </a> </li>";
echo '</ul>';
echo '</div>';
}
?> 

</body>
</html>
