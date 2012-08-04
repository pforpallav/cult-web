<?php
/*
Template Name: GC-Tally
*/
?>

<?php get_header(); ?>


<h1 class="title" style="margin: 0 20px">GC Tally</h1>
<p style="margin: 0 20px"><em>2011-12</em></p>


<div class="gc-table" style="padding: 10px">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//docs.google.com/spreadsheet/tq?key=0Aht9sFMTaCiNdFpCTUNXRmFweTRFT1BndzN2WFdZaEE&transpose=1&headers=1&range=A2%3AO9&gid=0&pub=1","options":{"vAxes":[{"useFormatFromData":true,"viewWindowMode":"pretty","viewWindow":{}},{"useFormatFromData":true,"viewWindowMode":"pretty","viewWindow":{}}],"booleanRole":"certainty","fontName":"Tahoma","height":500,"animation":{"duration":0},"domainAxis":{"direction":1},"legend":"right","width":940,"focusTarget":"category","hAxis":{"useFormatFromData":true},"isStacked":true},"state":{},"chartType":"ColumnChart","chartName":"Chart 1"} </script>

<?php comments_template(); ?>
</div>
<?php get_footer(); ?>