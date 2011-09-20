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
	
	<div id="header"><div><div class="container">
		
		<div id="socialIcons">
			<a href="#"><img src="templates/grogs/images/facebook.png" width="28" height="27"></a>
			&nbsp;
			<a href="#"><img src="templates/grogs/images/twitter.png" width="27" height="27"></a>
		</div>	
		
		<img id="slogan" src="templates/grogs/images/slogan.png" width="380" height="75" alt="Slogan">
			
	</div></div></div>	
	
	<div id="body"><div><div><div class="container">
		<div id="component">
			<jdoc:include type="component" />
		</div><!-- end component -->
		
		<div id="sidebar">
			<jdoc:include type="modules" name="sidebar" style="xhtml" />
		</div><!-- end sidebar -->
		<div class="clear"></div>
		
		<div id="footer">
			<jdoc:include type="modules" name="footer" style="xhtml" />
			
			<div class="floatleft">
				<p>Copyright &copy; <?php echo date('Y') ?> MacPherson's Restaurant.  All Rights Reserved.</p>
			</div>

			<div class="floatright">
				<p>Site by <a href="http://ccistudios.com" target="_blank">CCI Studios</a></p>
			</div>
			<div class="clear"></div>
		</div><!-- end footer -->
	</div></div></div></div><!-- end body -->
	

</body>
</html>