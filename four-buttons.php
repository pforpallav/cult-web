<?php
    require_once('general_functions.php');
    require_once('database.php');
	require_once('templates/headerplusmenu.php');
?>

<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml'>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<title>IMEQX - International Machinary Equipment Exchange</title>
<!--<link href='https://fonts.googleapis.com/css?family=Signika' rel='stylesheet' type='text/css'>-->
<link href='style.css' rel='stylesheet' type='text/css' />
<link href='tabs.css' rel='stylesheet' type='text/css' />
<link href='searchfield.css' rel='stylesheet' type='text/css' />
<link href='newlisting.css' rel='stylesheet' type='text/css' />
<link href="searchstyle.css" rel="stylesheet" type="text/css" />
<link href="banner.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' href='custom-theme/jquery-ui-1.8.21.custom.css' type='text/css'>
<script src="external/jquery.bgiframe-2.1.2.js"></script>
<script src='jquery-1.6.2.js'></script>
<script src="ui/jquery.ui.core.js"></script>
<script src="ui/jquery.ui.widget.js"></script>
<script src="ui/jquery.ui.mouse.js"></script>
<script src="ui/jquery.ui.draggable.js"></script>
<script src="ui/jquery.ui.position.js"></script>
<script src="ui/jquery.ui.resizable.js"></script>
<script src="ui/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script type="text/javascript" src="mapfunction.js"></script>
<script src="ui/jquery.ui.dialog.js"></script>
<script src="ui/jquery.ui.slider.js"></script>
<script src="ui/jquery.ui.button.js"></script>
<script src='searchfield.js' type='text/javascript'></script>
<script src="misc.js" type='text/javascript'></script>
<script src="misc2.js" type='text/javascript'></script>

</head>

<body bgcolor='#cccccc'>

<div id='main' align='center'>
<?php
connect();
			$q1 = "SELECT * FROM projects";
			$r1 = mysql_query($q1) or die('Cannot fetch details. ' . mysql_error());
			$c1 = mysql_num_rows($r1);
			
			$q2 = "SELECT * FROM vehicle_table";
			$r2 = mysql_query($q2) or die('Cannot fetch details. ' . mysql_error());
			$c2 = mysql_num_rows($r2);
?>


	<div id='blank' style='height: 125px;'>
	</div>
    
    
	<div class='four-buttons-wrapper'>
    	
    </div>

	    
<?php require_once("footer.php"); ?>  