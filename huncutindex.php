<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blender</title>
    <link href="huncutstyle.css" rel="stylesheet" type="text/css">
	<link rel="icon" type="image/x-icon" href="https://freepngimg.com/save/59906-icons-linux-rendering-computer-graphics-blender-3d/1080x1080">
</head>
<body>
    <header class="HEAD STTEXT">
        <h1>Blender</h1>
		<div>
		<a class="HL-INLINE" href="huncutindex.php">Alapok</a>
		<a class="HL-INLINE" href="huncuttutorial.php">Tutoriál</a>
		<a class="HL-INLINE" href="huncutsimulation.php">Szimulációk</a>
		</div>
    </header>

    <div class="PANEL-LEFT STTEXT">
        <img height="100%" id="leftpanel"> </img>
    </div>
    <div class="PANEL-RIGHT STTEXT">
		<img height="100%" id="rightpanel"> </img>
    </div>

    <main class="MAIN STTEXT">
        A Blender egy ingyenes és nyílt forráskódú 3D grafikai szoftver, amely lehetővé teszi a felhasználók számára a modellkészítést, az animáció készítést, a textúrázást, a szimulációt és a vizualizációt. A programot széles körben használják a játékfejlesztés, az animációs filmek és az építészet területén. A Blender rendelkezik számos szerszámmal és funkcióval, amelyeket a felhasználók testre szabhatnak és bővíthetnek. Az utóbbi években a Blender jelentősen fejlődött, és az egyik legnépszerűbb 3D grafikai szoftver lett.
		<br> <br>
		<a class="BTEXT" href="https://blender.org">Töltsd le a blendert.</a>
		<br> <br>
		<img src="https://geryan.hu/uploads/blendershowcase.png">
		<br>
		<video src="https://geryan.hu/uploads/demo.mp4" type="video/mp4" controls> </video>
	</main>

    <footer class="FOOT TTEXT">
        Blender is a free and open-source 3D graphics software that allows users to create models, animations, textures, simulations, and visualizations. The program is widely used in game development, animation films, and architecture. Blender has a wide range of tools and features that users can customize and expand. In recent years, Blender has made significant progress and has become one of the most popular 3D graphics software.
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
