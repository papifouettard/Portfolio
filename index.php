<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" />
		<link rel="stylesheet" href="MiseEnPage/style.css" type="text/css" charset="utf-8" />
        <title>L.M.SAMSON</title>
	</head>
	<body>

		<aside class="asideD">
		</aside>


		<aside class="asideG">	
		</aside>


		<header>
			<?php switch($_GET['pg'])
			{
					case "home":?>
						<h1>Accueil</h1>
					<?php	break;
					
					case "CV":?>
						<h1>Curriculum Vitae</h1>
					<?php	break;
					
					case "dip":?>
						<h1>Diplôme/Certification</h1>
					<?php	break;
					
					case "exp":?>
						<h1>Expérience Professionnelle</h1>
					<?php	break;
					
					case "contact":?>
						<h1>Contact</h1>
					<?php	break;

					default:?>
						<h1>Accueil</h1>
					<?php	break;	
			}?>
		</header>		
		

		<nav> 
			<ul>
				<a href="index.php?pg=home">
					<li <?php if($_GET['pg']=='home'){?> class="navdeb navselect"<?php }else{?>class="navdeb"<?php };?>>Accueil</li>
				</a>
				<a href="index.php?pg=CV">
					<li <?php if($_GET['pg']=='CV'){?> class="navmil navselect"<?php }else{?>class="navmil"<?php };?>>Curriculum Vitae</li>
				</a>
				<a href="index.php?pg=dip">
					<li <?php if($_GET['pg']=='dip'){?> class="navmil navselect"<?php }else{?>class="navmil"<?php };?>>Diplôme/Certification</li>
				</a>
				<a href="index.php?pg=exp">
					<li <?php if($_GET['pg']=='exp'){?> class="navmil navselect"<?php }else{?>class="navmil"<?php };?>>Expérience professionnelle</li>
				</a>
				<a href="index.php?pg=contact">
					<li <?php if($_GET['pg']=='contact'){?> class="navfin navselect"<?php }else{?>class="navfin"<?php };?>>Me contacter</li>
				</a>
			</ul>
		</nav>
		

		<section>
			<?php 
			switch($_GET['pg'])
			{
					case "home":
						include("home.php");
						break;
					
					case "CV":
						include("CV.php");
						break;
					
					case "dip":
						include("dip.php");
						break;
					
					case "exp":
						include("exp.php");
						break;
					
					case "contact":
						include("contact.php");
						break;

					default:
						include("home.php");
						break;	
			}
			?>
		</section>


		<footer>
			<p id="copyright">Copyright &copy; 2015 Louis-Michel SAMSON </p> 
			<div id="social">
				<a href="index.php?pg=contact"><img class="social" src="MiseEnPage/image/ctc.png" /></a>
				<a href="https://www.facebook.com/louismichel.samson" onclick="window.open(this.href); return false;"><img class="social" src="MiseEnPage/image/fb.png" /></a>
				<a href="https://plus.google.com/u/0/103393859228571929422/posts" onclick="window.open(this.href); return false;"><img class="social" src="MiseEnPage/image/ggl.png"  /></a>
			</div>
		</footer>
	</body>
</html>

