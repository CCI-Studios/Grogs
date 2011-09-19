<!DOCTYPE html>
<html lang="en">
<head>
	
	<link rel="stylesheet" href="templates/grogs/css/template.css" type="text/css">
	
</head>

<body class="<?php echo $wide ?>">
	
	<div class="container"><div id="header_links">
		<jdoc:include type="modules" name="headerlinks" style="xhtml" />		
	</div></div>
		
		<div class="clear"></div>
		
	<div id="nav">
		<div id="navcontainer">			
			<jdoc:include type="modules" name="nav" style="xhtml" />
		</div>
	</div>
	
	<div id="header"><div><div class="container"></div></div></div>	
	
	<div id="bg">
		
	<div id="head_container">
		<div id="tableSetup"><img src="templates/grogs/images/tableclothSetup.png" width="853" height="488" alt="TableclothSetup"></div>
		<div id="reservedIcon"><img src="templates/grogs/images/reserved_icon.png" width="148" height="87" alt="Reserved Icon"></div>
	</div>
	
	
	
	<div class="container"><div id="component">
		
<jdoc:include type="component" />

	</div>
	
	<div id="sidebar">
		
		<jdoc:include type="modules" name="sidebar" style="xhtml" />
			
	</div>
	</div>
	
		<div class="clear"></div>
	
	<div id="footer">
		
		<jdoc:include type="modules" name="footer" style="xhtml" />
		
		
		<div class="floatleft">
			<p>Copyright &copy; <?php echo date('Y') ?> MacPherson's Restaurant.  All Rights Reserved.</p>
		</div>
		
		<div class="floatright">
			<p>Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</p>
		</div>
	</div>
	</div>
	
	
</body>
</html>