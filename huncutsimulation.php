<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blender szimulációk</title>
    <link href="huncutstyle.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="https://freepngimg.com/save/59906-icons-linux-rendering-computer-graphics-blender-3d/1080x1080">
</head>
<body>
    <header class="HEAD STTEXT">
		<div class="TLDECCONT">
			<img src="https://geryan.hu/uploads/huncutdec.png" class="TLDEC">
		</div>
        <h1>Blender Szimulációk</h1>
		<div class="MENUTHING">
			<a class="HL-INLINE" href="huncutindex.php">Alapok</a>
			<a class="HL-INLINE" href="huncuttutorial.php">Tutoriál</a>
			<a class="HL-INLINE" href="huncutsimulation.php">Szimulációk</a>
		</div>
    </header>

    <div class="PANEL-LEFT STTEXT">
        <img class="PANELIMAGE" id="leftpanel"> </img>
    </div>
    <div class="PANEL-RIGHT STTEXT">
		<img class="PANELIMAGE" id="rightpanel"> </img>
    </div>

    <main class="LONG-MAIN STTEXT">
        A Blenderben van lehetőséged arra, hogy szimulálj egy fizikai eseményt. Ezek lehetnek 
		<br> <br>
		<ol>
			<li>Fizikai szimuláció </li>
			<li>Szövet szimuláció </li>
			<li>Törés szimuláció </li>
			<li>Particle szimuláció </li>
			<li>Test szimuláció </li>
		</ol>
		<h2>PÉLDÁK:</h2>
		<video src="https://geryan.hu/uploads/demobreak.mp4" type="video/mp4" controls> </video>
		<video src="https://geryan.hu/uploads/demowind.mp4" type="video/mp4" controls> </video>
		<video src="https://geryan.hu/uploads/demoboom.mp4" type="video/mp4" controls> </video>
	</main>

    <footer class="FOOT TTEXT">
		<p>
        	Blender is a free and open-source 3D graphics software that allows users to create models, animations, textures, simulations, and visualizations. The program is widely used in game development, animation films, and architecture. Blender has a wide range of tools and features that users can customize and expand. In recent years, Blender has made significant progress and has become one of the most popular 3D graphics software.
		</p>
	</footer>
</body>
	<script>
	var i = 0;
	setInterval(Tick, 1000)
	function Tick()
	{
		switch(i)
		{
			case 0:
				document.getElementById("leftpanel").src = "https://geryan.hu/uploads/adred.png";
				document.getElementById("rightpanel").src = "https://geryan.hu/uploads/adred.png";
				break;
			case 1:
				document.getElementById("leftpanel").src = "https://geryan.hu/uploads/adgreen.png";
				document.getElementById("rightpanel").src = "https://geryan.hu/uploads/adgreen.png";
				break;
			case 2:
				document.getElementById("leftpanel").src = "https://geryan.hu/uploads/adblue.png";
				document.getElementById("rightpanel").src = "https://geryan.hu/uploads/adblue.png";
				break;	
			default:
				break;
		}
		i++;
		if(i > 2)
		{
			i = 0;
		}
		console.log(i);
	}
	</script>
</html>
