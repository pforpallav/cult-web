<?php
/*
Template Name: Look Back
*/
?>

<?php get_header(); ?>
<script>
function highlight(clicked){
	var nodes =	document.getElementById("menu-main-menu-3").childNodes;
	for(i=0; i < nodes.length; i++)
	{
		if(nodes.item(i).nodeName == "LI")
			nodes.item(i).setAttribute("class", "non-active");
	}
	clicked.setAttribute("class", "active")
}
</script>
<div class="nav nav-bottom tab-timeline">
    <ul id="menu-main-menu-3" class="menu clear-block">
    	<li class="menu-PAF active" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0Aht9sFMTaCiNdFI0TjlfeW9YQVNUeVRBSkpUY1B5d2c&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>PAF</i></a></li>
        <li class="menu-dram" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0AgD0pCEm39vrdG9jQVdmUExVTDZGRjlpamJjVGJJQWc&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>Dram</i></a></li>
        <li class="menu-dance" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0Aht9sFMTaCiNdFI0TjlfeW9YQVNUeVRBSkpUY1B5d2c&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>Dance</i></a></li>
        <li class="menu-filmmedia" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0Ahr2oqkcAhh6dG1hRnlEVmtRY2pmZUNvQ2FLWS1tdlE&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>Film/Media</i></a></li>
        <li class="menu-music" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0Aht9sFMTaCiNdFI0TjlfeW9YQVNUeVRBSkpUY1B5d2c&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>Music</i></a></li>
        <li class="menu-pfa" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0AkKsiaXn5ceSdG9NUjFTMmg1bEpGTEpqR2tVeW5KQnc&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>PFA</i></a></li>
		<li class="menu-pfa" onclick="highlight(this)"><a target="timeline_frame" href="http://embed.verite.co/timeline/?source=0AgJ_FAjQUyaGdFhPVkp6aDhRbVkzR3Zyb3k3aGNfMGc&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650"><i>Debating</i></a></li>
    </ul>
</div>

<iframe src='http://embed.verite.co/timeline/?source=0Aht9sFMTaCiNdFI0TjlfeW9YQVNUeVRBSkpUY1B5d2c&font=Bevan-PotanoSans&maptype=toner&lang=en&width=900&height=650' width='900' height='650' frameborder='0' id="timelineFrame" name="timeline_frame">
</iframe>
  
  
    <div style='margin: 0 40px;'>
		<?php comments_template(); ?>
    </div>
<?php get_footer(); ?>
      