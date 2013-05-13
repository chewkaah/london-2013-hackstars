<?php


$faces = array();
$faces[] = array('name' => '','title' => '','email' => '','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => '','class' => ''));

function print_faces($faces)
{
	foreach($faces as $face)
	{
		echo "<div class='four columns people'>
			<div class='non-rollover'>
				<div class='profile-pic'> <img src='{$face['img']['src']}' class='{$face['img']['class']}' /> </div>
				<h3 class='name'>{$face['name']}</h3>
				<div class='profile-extra'>
					<div class='profile-title'>{$face['title']}</div>
					<div class='profile-icons'>";

					if($face['email'] != '')
						echo "<a class='email' title='{$face['email']}' href='mailto:{$face['email']}'> <i class='icon-envelope'></i> </a>";

					if($face['linkedin'] != '')
						echo "<a class='linkedin' href='{$face['linkedin']}'> <i class='icon-linkedin-sign'></i> </a>";

					if($face['twitter'] != '')
						echo "<a class='twitter' title='{$face['twitter']}' href='http://www.twitter.com/". substr($face['twitter'],1) . "'> <i class='icon-twitter'></i> </a>";
					
					echo "</div>
				</div>
			</div>
		</div>";
	}
}

?>



<!DOCTYPE html>
<!-- saved from url=(0041)http://hackstars.herokuapp.com/facestars/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<title>FaceStars</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.css">
	
	<link rel="stylesheet" href="css/styles.css">
	
	<link rel="shortcut icon" href="http://hackstars.herokuapp.com/facestars/images/favicon.ico">
</head>
<body>


<div id="top">
	<div class="container">
		<div class="ten columns offset-by-three text-center">
			<h1 class="text-center">TechStars Boulder 2013</h1>

			<div class="spacer" style="height: 36px;"> </div>

			<p class="lead">Look at all these good looking people!</p>
		</div>
	</div>
	</div><!-- end top -->

	<div id="content">
	<div class="container">
		<div class="gradient-border"></div>
		<div id="list">

			<!---------------- ---------------------->
			<h2 class="name dark text-center">MANAGEMENT</h2>
		 	<?php
		 		$faces = array();
		 		$faces[] = array('name' => 'Luke Beatty','title' => 'Managing Director','email' => 'luke.beatty@techstars.com','phone' => '(555) 555-5555','linkedin' => 'http://www.linkedin.com/pub/luke-beatty/56/147/57a','twitter' => '@luke_beatty','img' => array('src' => 'img/beatty.jpg','class' => 'height-140 bottom-0 left-25'));
		 		$faces[] = array('name' => 'Eugene Wan','title' => 'Program Manager','email' => 'eugene.wan@techstars.com','phone' => '(555) 555-5555','linkedin' => 'http://www.linkedin.com/pub/eugene-wan/47/24b/62a','twitter' => '@EugeneWan','img' => array('src' => 'https://s3.amazonaws.com/founders-techstars-images/003E000000aDJCKIA4.jpg','class' => 'height-150 bottom-0 left-0'));
		 		$faces[] = array('name' => 'Luke Vernon','title' => 'Entrepreneur In Residence','email' => 'davidstern@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/lvernon','twitter' => '','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/2/000/10a/39a/3274681.jpg','class' => 'height-150 top-5 left-0'));

		 		print_faces($faces);
		 	?>

			<!---------------- COMPANIES ---------------------->
			<h2 class="name dark text-center faint-border">COMPANIES</h2>

			<?php
		 		$faces = array();
		 		$faces[] = array('name' => '','title' => '','email' => '','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => '','class' => ''));

		 		$faces = array();

				$faces['adsnative'] = array('title' => 'AdsNative','url' => 'http://www.adsnative.com/','faces' => array());
				$faces['adsnative']['faces'][] = array('name' => 'Dhawal Mujumdar','title' => '','email' => 'dhawal@adsnative.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/dhawalm','twitter' => '@idhawal','img' => array('src' => 'img/mujumdar.png','class' => 'height-140 bottom-0'));
				$faces['adsnative']['faces'][] = array('name' => 'Kuldeep Kapade','title' => '','email' => 'kuldeep@adsnative.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/kuldeepkapade','twitter' => '','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/2/000/00b/027/231edba.jpg','class' => 'height-150 top-5 left-0'));
                $faces['adsnative']['faces'][] = array('name' => 'Satish Polisetti','title' => '','email' => 'satish@adsnative.com','phone' => '','linkedin' => 'https://www.linkedin.com/in/polisettisatish','twitter' => '@sat_p','img' => array('src' => 'https://m1-s.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1d2/096/12ec34c.jpg','class' => 'height-150 top-5 left-0'));

				$faces['augur'] = array('title' => 'Augur','url' => 'http://www.augur.io','faces' => array());
				$faces['augur']['faces'][] = array('name' => 'Nawar Alsafar','title' => '','email' => 'nawar@augur.io','phone' => '','linkedin' => 'http://www.linkedin.com/in/alsafar','twitter' => '@gohackyourself','img' => array('src' => 'img/alsafar.jpg','class' => 'height-150 top-5 right-15'));
				$faces['augur']['faces'][] = array('name' => 'Roger Pincombe','title' => '','email' => 'roger@augur.io','phone' => '','linkedin' => 'http://www.linkedin.com/in/rogerpincombe','twitter' => '@OkGoDoIt','img' => array('src' => 'img/pincombe.jpg','class' => 'height-150 left-5 top-5'));
 				$faces['augur']['faces'][] = array('name' => 'Stefan Koenig','title' => '','email' => 'stefan@augur.io','phone' => '','linkedin' => 'http://www.linkedin.com/in/stefankoenig/','twitter' => '@koenigst','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/5/000/210/0f7/15184ae.jpg','class' => 'height-150 top-5 left-10'));

				$faces['brandfolder'] = array('title' => 'Brandfolder','url' => 'http://www.brandfolder.com','faces' => array());
				$faces['brandfolder']['faces'][] = array('name' => 'Brian Parks','title' => '','email' => 'brian.parks@brandfolder.com','phone' => '','linkedin' => 'www.linkedin.com/in/parksbrian/','twitter' => '@parkstweet','img' => array('src' => 'img/parks.jpg','class' => 'height-150 top-5 left-10'));
				$faces['brandfolder']['faces'][] = array('name' => 'Ryan Urabe','title' => '','email' => 'ryan@brandfolder.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/urabe.jpg','class' => 'height-150 bottom-0'));
				$faces['brandfolder']['faces'][] = array('name' => 'Paul Arterburn','title' => '','email' => 'paul@brandfolder.com','phone' => '','linkedin' => 'http://linkedin.com/in/paularterburn','twitter' => '@parterburn','img' => array('src' => 'img/arterburn.jpg','class' => 'top-15 height-160'));

				$faces['elihuu'] = array('title' => 'Elihuu','url' => 'http://elihuu.com','faces' => array());
				$faces['elihuu']['faces'][] = array('name' => 'Alex Henry','title' => '','email' => 'alex@elihuu.com','phone' => '','linkedin' => '','twitter' => '@meetelihuu','img' => array('src' => 'img/henry.jpg','class' => 'height-150 bottom-0 left-5'));
				$faces['elihuu']['faces'][] = array('name' => 'Dorian Ferlauto','title' => '','email' => 'dorian@elihuu.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/dorian-j-ferlauto/18/873/56','twitter' => '@dorianjferlauto','img' => array('src' => 'img/ferlauto.jpg','class' => 'height-150 bottom-0'));
				$faces['elihuu']['faces'][] = array('name' => 'John Ipson','title' => '','email' => 'john@elihuu.com','phone' => '','linkedin' => '','twitter' => '@ipsonic','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));

				$faces['givengoods'] = array('title' => 'Given Goods','url' => 'http://www.givengoods.co','faces' => array());
				$faces['givengoods']['faces'][] = array('name' => 'Cameron Houser','title' => '','email' => 'cammy@givengoods.co','phone' => '','linkedin' => 'http://www.linkedin.com/pub/cameron-houser/28/81a/b07','twitter' => '@cameronhouser','img' => array('src' => 'img/houser.jpg','class' => 'height-160 bottom-0'));
				$faces['givengoods']['faces'][] = array('name' => 'Riley End','title' => '','email' => 'riley@givengoods.co','phone' => '','linkedin' => 'http://www.linkedin.com/pub/riley-end/30/978/678','twitter' => '@rileyend','img' => array('src' => 'img/end.jpg','class' => 'height-160 left-5 bottom-0'));

				$faces['goodapril'] = array('title' => 'GoodApril','url' => 'http://goodapril.com','faces' => array());
				$faces['goodapril']['faces'][] = array('name' => 'Benny Joseph','title' => '','email' => 'benny@goodapril.com','phone' => '','linkedin' => 'www.linkedin.com/in/bennyvenatjoseph/','twitter' => '@bvj','img' => array('src' => 'img/joseph.jpg','class' => 'height-140 bottom-0'));
				$faces['goodapril']['faces'][] = array('name' => 'Mitch Fox','title' => '','email' => 'mitch@goodapril.com ','phone' => '','linkedin' => 'www.linkedin.com/in/mitchellwfox/','twitter' => '@mitchellwfox','img' => array('src' => 'img/fox.png','class' => 'height-150 bottom-0'));

				$faces['hull'] = array('title' => 'hull.io','url' => 'http://www.hull.io','faces' => array());
				$faces['hull']['faces'][] = array('name' => 'Romain Dardour','title' => '','email' => 'romain@hull.io','phone' => '','linkedin' => 'http://fr.linkedin.com/in/rdardour/','twitter' => '@rdardour','img' => array('src' => 'img/dardour.jpg','class' => 'height-150 bottom-0 left-5'));
				$faces['hull']['faces'][] = array('name' => 'Stephane Bellity','title' => '','email' => 'stephane@hull.io','phone' => '','linkedin' => 'http://www.linkedin.com/in/sbellity','twitter' => '@sbellity','img' => array('src' => 'img/bellity.jpg','class' => 'height-150 bottom-0 left-5'));

				$faces['lechat'] = array('title' => 'LeChat','url' => 'http://www.lechat.im','faces' => array());
				$faces['lechat']['faces'][] = array('name' => 'Andrei Soroker','title' => '','email' => 'andrei@lechat.im','phone' => '','linkedin' => 'http://linkedin.com/in/soroker','twitter' => '@abs','img' => array('src' => 'img/soroker.jpg','class' => ''));
				$faces['lechat']['faces'][] = array('name' => 'Peter Hizalev','title' => '','email' => 'peter@lechat.im','phone' => '','linkedin' => 'http://www.linkedin.com/in/hizalev','twitter' => '@petrohi','img' => array('src' => 'img/hizalev.jpg','class' => ''));

				$faces['prediculous'] = array('title' => 'Prediculous','url' => 'http://prediculous.com','faces' => array());
				$faces['prediculous']['faces'][] = array('name' => 'Taylor McLemore','title' => '','email' => 'taylor@prediculous.com','phone' => '','linkedin' => 'www.linkedin.com/in/taylormclemore/','twitter' => '@T2theMac','img' => array('src' => 'img/mclemore.jpg','class' => 'height-140 bottom-0'));
				$faces['prediculous']['faces'][] = array('name' => 'Howie Spielman','title' => '','email' => 'howie@prediculous.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/hspielman','twitter' => '@hspielman','img' => array('src' => 'img/spielman.png','class' => 'height-140 bottom-0'));

				$faces['shopventory'] = array('title' => 'Shopventory','url' => 'http://www.shopventory.com','faces' => array());
				$faces['shopventory']['faces'][] = array('name' => 'Bach Le','title' => '','email' => 'bach@shopventory.com','phone' => '','linkedin' => 'www.linkedin.com/pub/bach-le/2/363/a24/','twitter' => '@Bach_Le','img' => array('src' => 'img/le.jpg','class' => 'height-150 bottom-0'));
				$faces['shopventory']['faces'][] = array('name' => 'Rares Saftoiu','title' => '','email' => 'rares@shopventory.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/rsaftoiu','twitter' => '@RaresMan','img' => array('src' => 'img/saftoiu.jpg','class' => 'height-150 bottom-0'));

				$faces['snowshoe'] = array('title' => 'SnowShoe','url' => 'http://www.snowshoestamp.com','faces' => array());
				$faces['snowshoe']['faces'][] = array('name' => 'Claus Moberg','title' => '','email' => 'claus@snowshoestamp.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/clausmoberg','twitter' => '@clausmoberg','img' => array('src' => 'img/moberg.jpg','class' => 'height-160 bottom-0'));
				$faces['snowshoe']['faces'][] = array('name' => 'Isaac Ray','title' => '','email' => 'isaac@snowshoestamp.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/isaac-ray/54/ba/907','twitter' => '','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/4/000/17b/3ca/12e8189.jpg','class' => 'height-150 top-5 left-0'));
				$faces['snowshoe']['faces'][] = array('name' => 'Jami Morton','title' => '','email' => 'jami@snowshoestamp.com','phone' => '','linkedin' => 'www.linkedin.com/pub/jami-morton/1a/b49/a02/','twitter' => '','img' => array('src' => 'img/morton.jpg','class' => 'height-180 bottom-0 left-30'));
				$faces['snowshoe']['faces'][] = array('name' => 'Sheradyn Mikul','title' => '','email' => 'sheradyn@snowshoestamp.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/stmikul','twitter' => '','img' => array('src' => 'http://www.snowshoestamp.com/wp-content/uploads/2012/11/sheradyn.jpg','class' => 'height-150 top-5 left-10'));

				$i = 0;
				foreach($faces as $company => $companyArray)
				{
					//<h3 class='name dark text-center faint-border'>FitDeck</h3>
					$class = ($i != 0) ? 'faint-border' : '';
					echo "<h3 class='name dark text-center {$class}'><a href='{$companyArray['url']}'>{$companyArray[title]}</a></h3>";

					print_faces($companyArray['faces']);


					$i++;
				}

		 	?>

			<!---------------- ASSOCIATES ---------------------->
			<h2 class="name dark text-center faint-border">ASSOCIATES</h2>

			<?php
		 		$faces = array();
		 		$faces[] = array('name' => 'Brad Thorson','title' => '','email' => 'bbthorson@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/bbthorson','twitter' => '@bbthorson','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
				$faces[] = array('name' => 'Aswin Natajaran','title' => '','email' => 'aswin.nataraj@gmail.com','phone' => '','linkedin' => 'www.linkedin.com/pub/aswin-natarajan/22/42/a66
','twitter' => '@heyaswin','img' => array('src' => 'http://m.c.lnkd.licdn.com/media/p/7/000/208/00e/37ea6c2.jpg','class' => 'height-150 top-5 left-10'));
				$faces[] = array('name' => 'Jordan Burt','title' => '','email' => 'jburt07@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jordanburt','twitter' => '@J_M_Burt','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/8/000/25b/135/148576e.jpg','class' => 'height-150 top-5 left-0'));
				$faces[] = array('name' => 'Dalia Mitra','title' => '','email' => 'dalia82@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/daliamitra','twitter' => '','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/3/000/20b/066/0f441b5.jpg','class' => 'height-150 top-5 left-0'));

		 		print_faces($faces);
		 	?>


			<!---------------- HackStars ---------------------->
			<h2 class="name dark text-center faint-border">HackStars</h2>

			<?php
		 		$faces = array();
		 		$faces[] = array('name' => 'Chase Courington','title' => '','email' => '','phone' => '','linkedin' => 'http://www.linkedin.com/in/chasecourington','twitter' => '@chasecourington','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/2/000/245/109/0c48d2c.jpg','class' => 'height-100 top-5 left-40'));
                $faces[] = array('name' => 'Royce Haynes','title' => '','email' => 'royce.haynes@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/roycehaynes','twitter' => '@roycehaynes','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/5/000/1f2/205/069bb80.jpg','class' => 'height-150 top-5 left-14'));
                $faces[] = array('name' => 'Crystal Chang','title' => '','email' => 'crystalschang@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/crystal-chang/b/113/20b','twitter' => '@crystalschang','img' => array('src' => 'http://m.c.lnkd.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1f4/17d/29f30fe.jpg','class' => 'height-140 top-5 rigth-5'));
                $faces[] = array('name' => 'Alex Mark','title' => '','email' => '','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));

		 		print_faces($faces);
		 	?>

		</div><!-- End List -->

		<!-- Footer -->
		<div class="gradient-border"></div>
		<!-- End Footer -->

	</div><!-- End Container -->
	</div><!-- End Content -->

	<footer class='main-footer'>
	</footer>

	<script src="js/jquery-17.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/jquery-17.min.js">\x3C/script>')</script>
	<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
	<script>
		$('#learn-more').on("click", function(e) {
			e.preventDefault();
			$('#slide').animate({marginTop: 0});
		});

		$('#slide-up').on("click", function(e) {
			e.preventDefault();
			$('#slide').animate({marginTop: '-300%'});
		});

		toggleNames = function() {
			$(this).toggleClass('active');
			$('.people').toggleClass('white');

			if ($(this).hasClass('active')) {
				$(this).removeClass('button-blue');
				$(this).addClass('button-green');
				$(this).html("I'm done!");
			} else {
				$(this).removeClass('button-green');
				$(this).addClass('button-blue');
				$(this).html("Teach me!");
			}
		}
		$('#teach').on("click", toggleNames);
	</script>

</body></html>