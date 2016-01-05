<!DOCTYPE html>
<html>

<head>
	<title>AXS Delta Chapter</title>

	<style>
		/* remove standard margin and padding provided by browser */
		*
		{
			margin: 0;
			padding: 0;
		}

		/* set the background to be black and extend throughout the whole page */
		html
		{
			background-color: black;
			background-size: cover;
		}

		/* style for page banner */
		#header
		{
			background-color: steelblue;
			height: 125px;
			min-width: 100%;
			margin-top: 15px;
		}

		/* style for logos in page banner */
		.logo
		{
			height: 125px;
			width: 125px;
		}


	</style>
</head>

<body>
	<div id="header">
		<div class="logo">
			<img id="leftLogo" src="AXECoatOfArms.png" alt="AXECoatOfArms">
		</div>
	</div>
	@yield( 'content' )
</body>