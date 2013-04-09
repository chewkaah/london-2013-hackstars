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



<!-- videos -->

<div id="geopalz-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>GeoPalz</h3>
	</div>
	<div class="modal-body">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/iln6upLMGWg?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>


<div id="recbob-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>RecBob</h3>
	</div>
	<div class="modal-body">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/mNOBYnGKof0?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>


<div id="chroma-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Chroma</h3>
	</div>
	<div class="modal-body">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/rn3zS3YZ3bM?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>


<div id="fitdeck-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>FitDeck</h3>
	</div>
	<div class="modal-body">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/hwoYN6wZaDM?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div id="sprout-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Sprout Wellness Solutions</h3>
	</div>
	<div class="modal-body">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/mQn9hoqCykQ?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div id="gorecess-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>GoRecess</h3>
	</div>
	<div class="modal-body">
		<iframe width="560" height="315" src="http://www.youtube.com/embed/TT983-1GH8k?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>
</div>

<div id="highfive-video" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>High Five</h3>
	</div>
	<div class="modal-body"><iframe width="560" height="315" src="http://www.youtube.com/embed/mNOBYnGKof0?rel=0" frameborder="0" allowfullscreen></iframe></div>
</div>

<!-- end videos -->



<div id="slide">
	<div class="container">
		<div class="twelve columns offset-by-two text-center">
			<h2> STALK US </h2>
		</div>
		<div class="ten columns offset-by-three">
			<p class="lead"> <a target="_blank" href="https://docs.google.com/file/d/0B_tSN1VYzUDuLVB2dGxMRmJtT1U/edit?usp=sharing"> <i class='icon-list-alt'> </i> Get the overview deck.</a></p>
			<p class="lead"> <i class='icon-play-circle'> </i> Watch the videos.</p>
			<ul>
				<li> <a href="#geopalz-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> GeoPalz</a> </li>
				<li> <a href="#recbob-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> RecBob</a> </li>
				<li> <a href="#chroma-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> Chroma</a> </li>
				<li> <a href="#fitdeck-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> FitDeck</a> </li>
				<li> <a href="#sprout-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> Sprout</a> </li>
				<li> <a href="#gorecess-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> GoRecess</a> </li>
				<li> <a href="#highfive-video" role="button" data-toggle="modal"> <i class="icon-play"> </i> High Five</a> </li>
			</ul>

			<div id="slide-up"><a href="#"><i class="icon-remove-sign"></i></a></div>
		</div>
	</div>
</div>

<div id="top">
	<div class="container">
		<div class="sixteen columns">
			<div id="logo" class='logo'></div>
		</div>

		<div class="ten columns offset-by-three text-center">
			<h1 class="text-center">NIKE<span class='plus'>+</span> ACCELERATOR</h1>

			<div class="spacer" style="height: 36px;"> </div>
			<button id="learn-more" class='button button-blue'>Learn More About Teams</button>

			<p class="lead">Look at all these good looking people! If you'd like to study people's names, click "Teach Me!". Names will disappear until you mouse over someone's mug.</p>

			<button id="teach" class='button button-blue button-large'>Teach Me!</button>
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
		 		$faces[] = array('name' => 'Dylan Boyd','title' => 'Managing Director','email' => 'dylan.boyd@techstars.com','phone' => '(555) 555-5555','linkedin' => '','twitter' => '@dtboyd','img' => array('src' => 'img/management/boyd.png','class' => 'left-40 top-5'));
		 		$faces[] = array('name' => 'Gregg Cochran','title' => 'Program Manager','email' => 'gregg.cochran@techstars.com','phone' => '(555) 555-5555','linkedin' => '','twitter' => '@GreggCochran','img' => array('src' => 'img/management/cochran.jpeg','class' => 'left-5 top-5 height-150'));

		 		print_faces($faces);
		 	?>

			


			<!---------------- ---------------------->

			<h2 class="name dark text-center faint-border">MENTORS</h2>


			<h3 class="name dark text-center">Mentor In Residence</h3>
			<?php
		 		$faces = array();
		 		$faces[] = array('name' => 'David L. Stern','title' => 'Clearstone Venture Partners','email' => 'davidstern@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/dsternf','twitter' => '','img' => array('src' => 'img/mentors/stern.jpg','class' => 'height-140 bottom-0'));

		 		print_faces($faces);
		 	?>


			<h3 class="name dark text-center faint-border">Nike+ Mentors</h3>

			<?php
				$faces = array();
			
$faces[] = array('name' => 'Dave Altarescu','title' => 'US Director of Marketing, Spotify','email' => 'dave@spotify.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/dave-altarescu/0/714/79a','twitter' => '@davebalt','img' => array('src' => 'img/mentors/altarescu.jpg','class' => 'height-140 bottom-0 left-45'));
$faces[] = array('name' => 'Dennis Bajec','title' => 'Chief Creative Officer, Resource','email' => 'dbajec@resource.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/dennis-bajec/0/169/8a8','twitter' => '','img' => array('src' => 'img/mentors/bajec.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Luke Beatty','title' => 'Managing Director, TechStars','email' => 'Luke.Beatty@TechStars.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/luke-beatty/56/147/57a','twitter' => '','img' => array('src' => 'img/mentors/beatty.jpg','class' => 'height-140 bottom-0 left-25'));
$faces[] = array('name' => 'Katia Beauchamp','title' => 'Co-Founder, Birchbox','email' => 'katia@birchbox.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/katiaververis','twitter' => '@katiawb','img' => array('src' => 'img/mentors/beauchamp.jpg','class' => 'height-140 bottom-0 left-10'));
$faces[] = array('name' => 'Russell Benaroya','title' => 'Founder, Everymove','email' => 'russell@everymove.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/russellbenaroya','twitter' => '@rbenaroya','img' => array('src' => 'img/mentors/benaroya.jpg','class' => 'height-140 bottom-0 left-30'));
$faces[] = array('name' => 'Bryan Biniak','title' => 'Global Vice President &amp; General Manager, Nokia','email' => '','phone' => '','linkedin' => 'http://www.linkedin.com/in/bryanbiniak','twitter' => '@bbiniak','img' => array('src' => 'img/mentors/biniak.jpg','class' => 'height-140 bottom-0 left-30'));
$faces[] = array('name' => 'Dylan Casey','title' => 'Director of Product Management, Path','email' => 'dylan@path.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/dylan-casey/0/138/2b8','twitter' => '@dylancasey','img' => array('src' => 'img/mentors/casey.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Tim Chang','title' => 'Managing Director, Mayfield Fund','email' => 'tchang@mayfield.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/tim-chang/0/11/16a','twitter' => '@timechange','img' => array('src' => 'img/mentors/chang.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Tom Clarke','title' => 'President of New Business Ventures, Nike','email' => 'Tom.Clarke@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/tom-clarke/3/b04/b77','twitter' => '','img' => array('src' => 'img/mentors/clarke.jpg','class' => 'height-140 bottom-0 left-30'));
$faces[] = array('name' => 'Jeff Clavier','title' => 'Founder, SoftTech VC','email' => 'jeff.clavier@softtechvc.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jeffclavier','twitter' => '@jeff','img' => array('src' => 'img/mentors/clavier.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'David Cohen','title' => 'Founder and CEO, TechStars','email' => 'David.Cohen@techstars.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/davidgcohen','twitter' => '@davidcohen','img' => array('src' => 'img/mentors/cohen.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Hoby Darling','title' => 'Nike+ Sport GM','email' => 'Hoby.Darling@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/profile/view?id=14987530','twitter' => '','img' => array('src' => 'img/mentors/darling.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Chris DeVore','title' => 'General Partner, Founders Co-Op','email' => 'chrisd@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/devore','twitter' => '@crashdev','img' => array('src' => 'img/mentors/devore.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Andy Donner','title' => 'Partner, Physic Ventures','email' => 'adonner@PhysicVentures.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/andy-donner/0/512/352','twitter' => '@andydonner','img' => array('src' => 'img/mentors/donner.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Dave Drach','title' => 'VP, TechStars','email' => 'Dave.Drach@TechStars.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/davedrach','twitter' => '@DaveDrach','img' => array('src' => 'img/mentors/drach.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Esther Dyson','title' => 'Principal, EDventure','email' => 'edyson@edventure.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/estherdyson','twitter' => '@edyson','img' => array('src' => 'img/mentors/dyson.jpg','class' => 'height-140 bottom-0 left-10'));
$faces[] = array('name' => 'Ricky Engelberg','title' => 'Experience Director, Digital Sport, Nike','email' => 'Ricky.Engelberg@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/rickyengelberg','twitter' => '@rje7','img' => array('src' => 'img/mentors/engelberg.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Tim Enwall','title' => 'CEO of Mobiplug','email' => 'tenwall@mobiplug.co','phone' => '','linkedin' => 'http://www.linkedin.com/pub/tim-enwall/0/b3/1b1','twitter' => '@BWEnwall','img' => array('src' => 'img/mentors/enwall.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Brad Feld','title' => 'Managing Director, Foundry Group','email' => 'brad@foundrygroup.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/bfeld','twitter' => '@bfeld','img' => array('src' => 'img/mentors/feld.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Tim Ferriss','title' => 'Author, Advisor, Investor','email' => 'timferriss@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/timferriss','twitter' => '@tferriss','img' => array('src' => 'img/mentors/ferriss.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Matt Galligan','title' => 'Founder, Circa, SimpleGeo, and Socialthing','email' => 'matt@circanews.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/mattgalligan','twitter' => '@mg','img' => array('src' => 'img/mentors/galligan.jpg','class' => 'height-140 bottom-0 left-10'));
$faces[] = array('name' => 'Greg Gottesman','title' => 'Managing Director, Madrona Venture Capital','email' => 'greg@madrona.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/greggottesman','twitter' => '@greggottesman','img' => array('src' => 'img/mentors/gottesman.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Alex Himel','title' => 'Engineering Manager, Facebook','email' => 'ahimel@fb.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/alex-himel/3/941/611','twitter' => '@ahimel','img' => array('src' => 'img/mentors/himel.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Hannah Jones','title' => 'VP Sustainable Business &amp; Innovation, Nike','email' => 'Hannah.Jones@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/hannah-jones/4/430/6b2','twitter' => '@hjones_nike','img' => array('src' => 'img/mentors/jones.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Brian Kirkbride','title' => 'Director of Business Development, Digital Sport, Nike','email' => 'Brian.Kirkbride@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/brian-kirkbride/1/aaa/258','twitter' => '','img' => array('src' => 'img/mentors/kirkbride.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Missy Krasner','title' => 'Executive in Residence, Morgenthaler Ventures','email' => 'mkrasner@morgenthaler.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/missykrasner','twitter' => '@missykras','img' => array('src' => 'img/mentors/krasner.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Mark Leavitt','title' => 'PDX Quantified Self, Entrepreneur','email' => 'mark@markleavitt.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/markleavitt','twitter' => '@markleavitt','img' => array('src' => 'img/mentors/leavitt.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Howard Lindzon','title' => 'CEO, Stocktwits','email' => 'howard@lindzon.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/howardlindzon','twitter' => '@howardlindzon','img' => array('src' => 'img/mentors/lindzon.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'T.A. McCaann','title' => 'CEO, Gist','email' => 'tam@gist.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/tamccann','twitter' => 'tamccann','img' => array('src' => 'img/mentors/mccaan.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Jane McGonigal','title' => 'Chief Creative Officer, SuperBetter Labs. Author, Game Designer','email' => 'jane@avantgame.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/jane-mcgonigal/36/b8/90a','twitter' => '@avantgame','img' => array('src' => 'img/mentors/mcgonigal.jpg','class' => 'height-140 bottom-0 left-10'));
$faces[] = array('name' => 'Lesa Mitchell','title' => 'Vice President, Innovation &amp; Networks, Kauffman Foundation','email' => 'LMitchell@kauffman.org','phone' => '','linkedin' => 'http://www.linkedin.com/in/lesamitchell','twitter' => '@lesamitchell','img' => array('src' => 'img/mentors/mitchell.jpg','class' => 'height-140 bottom-0 left-10'));
$faces[] = array('name' => 'B.J. Naedele','title' => 'Nike+ FuelBand GM','email' => 'BJ.Naedele@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/b-j-naedele/1/2a4/735','twitter' => '','img' => array('src' => 'img/mentors/naedele.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Stefan Olander','title' => 'VP Digital Sport, Nike','email' => 'Stefan.Olander@nike.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/mentors/olander.jpg','class' => 'height-140 bottom-0 left-30'));
$faces[] = array('name' => 'Nicole Otto','title' => 'Sr. Director Consumer Digital Tech, Nike','email' => 'Nicole.Otto@nike.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/mentors/otto.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Russ Pillar','title' => 'Operating Partner, The Raine Group','email' => 'rpillar@raine.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/mentors/pillar.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Katie Rae','title' => 'Managing Director, TechStars','email' => 'Katie@techstars.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/katierae','twitter' => '@ktrae','img' => array('src' => 'img/mentors/rae.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Eli Rubel','title' => 'Founder, CEO, Glider (formerly Superb.ly)','email' => 'eli@glider.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/erubel','twitter' => '@eli_rubel','img' => array('src' => 'img/mentors/rubel.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Andy Sack','title' => 'Managing Director, TechStars','email' => 'Andy@techstars.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/andy-sack/0/14/522','twitter' => '@andysack','img' => array('src' => 'img/mentors/sack.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Bijan Salehizadeh','title' => 'Managing Director, Navimed Capital','email' => 'bijan@navimed.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/bijans','twitter' => '@bijans','img' => array('src' => 'img/mentors/salehizadeh.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Ryan Sarver','title' => 'Product/BD, Platform Team, Twitter','email' => 'rsarver@twitter.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/rsarver','twitter' => '@rsarver','img' => array('src' => 'img/mentors/sarver.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Chris Satchell','title' => 'Consumer Technology Officer, Nike','email' => 'Chris.Satchell@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/chrissatchell','twitter' => '','img' => array('src' => 'img/mentors/satchell.jpg','class' => 'height-140 bottom-0 left-50'));
$faces[] = array('name' => 'Naveen Selvadurai','title' => 'Co-founder, Foursquare','email' => 'n@naveenium.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/naveen','twitter' => '@naveen','img' => array('src' => 'img/mentors/selvadurai.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Mark Solon','title' => 'General Partner, TechStars','email' => 'mark.solon@techstars.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/mark-solon/5/aa5/117','twitter' => '@marksolon','img' => array('src' => 'img/mentors/solon.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Jesse Stollak','title' => 'Global Digital Brand and Innovation Director, Nike','email' => 'Jesse.Stollak@nike.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jps007','twitter' => '','img' => array('src' => 'img/mentors/stollak.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'J.R. Storment','title' => 'CCO and Founder, Cloudability','email' => 'jr@cloudability.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jrstorment','twitter' => '@stormental','img' => array('src' => 'img/mentors/storment.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Stephanie Tilenius','title' => 'Executive-in-Residence, Kleiner Perkins Caufield &amp; Byers','email' => 'stilenius@kpcb.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/stephanie-tilenius/0/1b/3b4','twitter' => '@stilenius','img' => array('src' => 'img/mentors/tilenius.jpg','class' => 'height-140 bottom-0 left-20'));
$faces[] = array('name' => 'Richard Ting','title' => 'Global Executive Creative Director, Mobile &amp; Social Platforms, RGA','email' => 'RichardT@rga.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/richard-ting/1/506/1a2','twitter' => '@flytip','img' => array('src' => 'img/mentors/ting.jpg','class' => 'height-140 bottom-0 left-15'));
$faces[] = array('name' => 'Liz Valentine','title' => 'CEO, The Swift Collective','email' => 'liz@swiftcollective.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/liz-valentine/6/734/a81','twitter' => '','img' => array('src' => 'img/mentors/valentine.jpg','class' => 'height-140 bottom-0 left-0'));
$faces[] = array('name' => 'Jud Valeski','title' => 'CEO, Gnip','email' => 'jud@gnip.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jvaleski','twitter' => '@jvaleski','img' => array('src' => 'img/mentors/valeski.jpg','class' => 'height-140 bottom-0 left-30'));
$faces[] = array('name' => 'Paul Winsper','title' => 'Director SPARQ Performance, Nike','email' => 'Paul.Winsper@sparqtraining.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/mentors/winsper.jpg','class' => 'height-140 bottom-0 left-30'));
			
				print_faces($faces);
			?>

			<h3 class="name dark text-center faint-border">More Mentors</h3>

			<?php
		 		$faces = array();

$faces[] = array('name' => 'Dave Allen','title' => 'Director, Interactive Strategy at North, Inc.','email' => 'dallen@north.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/pampelmoose','twitter' => '@DaveAtNORTH','img' => array('src' => 'img/portland/allen.jpg','class' => ''));
$faces[] = array('name' => 'Dylan Anderson','title' => 'CFO, Chirpify and MobileRQ','email' => 'dylanand@yahoo.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/dylananderson','twitter' => '@quackaddicts','img' => array('src' => 'img/portland/anderson.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Toby Barnes','title' => 'Experienced Product Director &amp; Digital Strategist, AKQA','email' => 'toby.barnes@akqa.com','phone' => '','linkedin' => 'http://uk.linkedin.com/in/tobybarnes','twitter' => '@tobybarnes','img' => array('src' => 'img/portland/barnes.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Phineas Barnes','title' => 'First Round Capital','email' => 'Phin@firstround.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/phineasbarnes','twitter' => '@phineasb','img' => array('src' => 'img/portland/barnes-phineas.jpg','class' => 'height-150 bottom-0 left-10'));
$faces[] = array('name' => 'James Burton','title' => 'Senior Account Director, AKQA','email' => 'james.burton@akqa.com','phone' => '','linkedin' => 'http://uk.linkedin.com/in/jmburton','twitter' => '','img' => array('src' => 'img/portland/burton.jpg','class' => ''));
$faces[] = array('name' => 'Glenn Butler','title' => 'CTO, VendScreen','email' => 'glenn@vendscreen.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/glenndbutler','twitter' => '@Glenn_D_Butler','img' => array('src' => 'img/portland/butler.jpg','class' => ''));
$faces[] = array('name' => 'Amber Case','title' => 'Director, Esri','email' => 'case@caseorganic.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/caseorganic','twitter' => '@caseorganic','img' => array('src' => 'img/portland/case.jpg','class' => ''));
$faces[] = array('name' => 'Michelle Childs','title' => 'UX Designer, Wieden + Kennedy','email' => 'MichelleLChilds@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/michellechilds','twitter' => '@michellechilds','img' => array('src' => 'img/portland/childs.jpg','class' => ''));
$faces[] = array('name' => 'Ben Diggles','title' => 'Director of Digital Marketing, Webtrends','email' => 'Benjamin.Diggles@Webtrends.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/mrdiggles','twitter' => '@mrdiggles','img' => array('src' => 'img/portland/diggles.jpg','class' => ''));
$faces[] = array('name' => 'Lou Doctor','title' => 'CEO and Co-Founder of CrowdSupply','email' => 'lou.doctor@crowdsupply.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/lou-doctor/5/902/1b1','twitter' => 'pdxlou','img' => array('src' => 'img/mentors/doctor.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Dave Dyer','title' => 'Managing Partner and Chief Strategist, MANIFESTO','email' => 'dave@manifestoagency.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/dave-dyer/3/732/658','twitter' => '@TravelMoth','img' => array('src' => 'img/portland/dyer.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Josh Friedman','title' => 'CEO, Gigapan','email' => 'technojosh@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/technojosh','twitter' => '@technojosh','img' => array('src' => 'img/portland/friedman.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'John Funk','title' => 'Entrepreneur','email' => 'john.funk@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/funky1','twitter' => '','img' => array('src' => 'img/portland/funk.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Mark Ganz','title' => 'CEO, Cambia Health Solutions, Inc.','email' => '','phone' => '','linkedin' => 'http://www.linkedin.com/pub/mark-ganz/26/687/960','twitter' => '','img' => array('src' => 'img/portland/ganz.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Steve Gehlen','title' => 'Director of Marketing, HealthSparq','email' => 'steve@gehlen.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/stevegehlen','twitter' => '@SteveGehlen','img' => array('src' => 'img/portland/gehlen.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Renny Gleeson','title' => 'Global Director, Wieden+Kennedy <br>Co-Founder, PIE','email' => 'renny.gleeson@wk.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/rennygleeson','twitter' => '@rgleeson','img' => array('src' => 'img/portland/gleeson.jpg','class' => ''));
$faces[] = array('name' => 'Doug Gould','title' => 'Growth and Partnerships at Cloudability	Bus Dev','email' => 'doug@cloudability.com','phone' => 'douwgould','linkedin' => 'http://www.linkedin.com/in/dougwgould','twitter' => '','img' => array('src' => 'img/mentors/gould.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Katherine Gray','title' => 'Content Strategist, Babcock &amp; Jenkins','email' => 'thenewcivilization@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/katherinegray','twitter' => '@katgray','img' => array('src' => 'img/portland/gray-kathryn.jpg','class' => ''));
$faces[] = array('name' => 'Aaron Gray','title' => 'SaaS Product Design Leader, Thunderhead.com','email' => 'aaron.s.gray@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/aaronsgray','twitter' => '@agray','img' => array('src' => 'img/portland/gray-aaron.jpg','class' => 'height-150 bottom-0 left-20'));
$faces[] = array('name' => 'Todd Greco','title' => 'UX Director, Ziba Design','email' => 'Mrballistic@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/toddgreco','twitter' => '@mrBallistic','img' => array('src' => 'img/portland/greco.jpg','class' => 'height-150 bottom-0 left-15'));
$faces[] = array('name' => 'Jason Grigsby','title' => 'Mobile Strategist, Cloud Four','email' => 'jason@cloudfour.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/grigs','twitter' => '@grigs','img' => array('src' => 'img/portland/grigsby.jpg','class' => 'height-150 bottom-0 left-10'));
$faces[] = array('name' => 'Jeff Hardison','title' => 'VP of Marketing and Bus. Dev., Meridian, Inc.','email' => 'jeff@meridianapps.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/jeff-hardison/1/753/236','twitter' => '@jshardison','img' => array('src' => 'img/portland/hardison.jpg','class' => ''));
$faces[] = array('name' => 'Joe Heitzeberg','title' => 'Instigator, Hustler &amp; Bitweaver at Dizzy Dinosaurs','email' => 'jheitzeb@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/joeheitzeberg','twitter' => '@jheitzeb','img' => array('src' => 'img/portland/heitzeberg.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Mike Herrick','title' => 'SVP of Engineering, Urban Airship','email' => 'mherrick@urbanairship.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/mikeherrick','twitter' => '@herrick66','img' => array('src' => 'img/portland/herrick.jpg','class' => ''));
$faces[] = array('name' => 'Matt Hickman','title' => 'VP Business Development, Yesmail','email' => 'matthickmanpdx@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/matt-hickman/2/613/b7b','twitter' => '','img' => array('src' => 'img/portland/hickman.jpg','class' => ''));
$faces[] = array('name' => 'Brent Hiegelke','title' => 'Marketing, Urban Airship','email' => 'brent@urbanairship.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
$faces[] = array('name' => 'Ryan Hildebrand','title' => 'Director of Finance, Simple','email' => 'rhildebrand@simple.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/mrryanhildebrand','twitter' => '@hollywoodcpa','img' => array('src' => 'img/portland/hildebrand.jpg','class' => 'height-150 bottom-0 left-15'));
$faces[] = array('name' => 'Eric Hilerns','title' => 'Co-Founder, Design Week Portland','email' => 'eric@pinch.nu','phone' => '','linkedin' => 'http://www.linkedin.com/in/hillerns','twitter' => '@Designspeaks','img' => array('src' => 'img/portland/hillerns.jpg','class' => ''));
$faces[] = array('name' => 'Matt Hixson','title' => 'Co-Founder and CEO, Tellagence','email' => 'matt@tellagence.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/matthixson','twitter' => '@matthixson','img' => array('src' => 'img/portland/hixson.jpg','class' => ''));
$faces[] = array('name' => 'JD Hooge','title' => 'Partner / Executive Creative Director, Instrument','email' => 'jd@weareinstrument.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jdhooge','twitter' => '@jdhooge','img' => array('src' => 'img/portland/hooge.jpg','class' => ''));
$faces[] = array('name' => 'Greg Huey','title' => 'Business Development / Amazon Web Services','email' => 'greghuey@amazon.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/greg-huey/0/33/59b','twitter' => '','img' => array('src' => 'img/mentors/huey.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Jonathan Hum','title' => 'Head of Planning, AKQA','email' => 'Jonathan.Hum@akqa.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/jonathan-hum/0/6b3/ab8','twitter' => '@jonathanhum','img' => array('src' => 'img/portland/hum.jpg','class' => ''));
$faces[] = array('name' => 'Arwa Jumkawala','title' => 'Marketing Viz, Vizify','email' => 'arrs@vizify.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/arwajumkawala','twitter' => '@arrsPDX','img' => array('src' => 'img/portland/jumkawala.jpg','class' => ''));
$faces[] = array('name' => 'Luke Kanies','title' => 'CEO, Puppet Labs','email' => 'luke@madstop.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/lukekanies','twitter' => '@puppetmasterd','img' => array('src' => 'img/portland/kanies.jpg','class' => ''));
$faces[] = array('name' => 'James Keller','title' => 'Director of Mobile UX, WalmartLabs','email' => 'semaphoria@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/semaphoria','twitter' => '@semaphoria','img' => array('src' => 'img/portland/keller.jpg','class' => ''));
$faces[] = array('name' => 'Nitin Khanna','title' => 'CEO, MergerTech','email' => 'nkhanna@mergertech.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/nitin-khanna/0/b96/158','twitter' => '@n_khanna','img' => array('src' => 'img/portland/khanna.jpg','class' => 'height-160 bottom-0'));
$faces[] = array('name' => 'Gene Kim','title' => 'Author, Researcher, Speaker, Director, DevOps Enthusiast','email' => 'genek@realgenekim.me','phone' => '','linkedin' => 'http://www.linkedin.com/in/realgenekim','twitter' => '@RealGeneKim','img' => array('src' => 'img/portland/kim.jpg','class' => ''));
$faces[] = array('name' => 'Nancy King','title' => 'Startup Recruiter','email' => 'nancy@nelking.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/nelking','twitter' => '@nelking','img' => array('src' => 'img/portland/king.jpg','class' => ''));
$faces[] = array('name' => 'Marshall Kirkpatick','title' => 'CEO, Little Bird','email' => 'marshall@getlittlebird.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/marshallkirkpatrick','twitter' => '@marshallk','img' => array('src' => 'img/portland/kirkpatrick.jpg','class' => ''));
$faces[] = array('name' => 'Scott Kosinski','title' => 'Managing Director, Amazon Sports & Outdoors Retail','email' => 'scottko@amazon.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/scott-kosinski/0/790/a2','twitter' => '','img' => array('src' => 'img/mentors/kosinski.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Scott Kveton','title' => 'CEO, Urban Airship','email' => 'scott@urbanairship.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/kveton','twitter' => '@kveton','img' => array('src' => 'img/portland/kveton.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Vince LaVecchia','title' => 'Partner &amp; Director of Operations, Instrument','email' => 'vince@weareinstrument.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/vincelavecchia','twitter' => '@vincelavecchia','img' => array('src' => 'img/portland/lavecchia.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Kent Lewis','title' => 'President &amp; Founder of Anvil &amp; Formic Media ','email' => 'kent@anvilmediainc.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/kentlewis','twitter' => '@kentjlewis','img' => array('src' => 'img/portland/lewis.jpg','class' => ''));
$faces[] = array('name' => 'Justin Lewis','title' => 'Partner, Instrument','email' => 'justin@weareinstrument.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/justinmlewis','twitter' => '@justin_lewis','img' => array('src' => 'img/portland/lewis-justin.jpg','class' => ''));
$faces[] = array('name' => 'Soren Macbeth','title' => 'Chief Data Scientist, Yieldbot','email' => 'soren@dopeness.org','phone' => '','linkedin' => 'http://www.linkedin.com/in/sorenmacbeth','twitter' => '@sorenmacbeth','img' => array('src' => 'img/portland/macbeth.jpg','class' => 'height-160 top-20 left-15'));
$faces[] = array('name' => 'Sasha Mace','title' => 'Director of Product Strategy, Urban Airship','email' => 'sasha@urbanairship.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/sashamace','twitter' => '','img' => array('src' => 'img/portland/mace.jpg','class' => ''));
$faces[] = array('name' => 'Andrew Mager','title' => 'Chief Listening Officer, Spotify','email' => 'mager@spotify.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/magerleagues','twitter' => '@mager','img' => array('src' => 'img/portland/mager.jpg','class' => 'height-150 bottom-0 left-10'));
$faces[] = array('name' => 'Paul Maiorana','title' => 'Vice President, Automattic','email' => 'pm@automattic.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/pmaiorana','twitter' => '@pmaiorana','img' => array('src' => 'img/portland/maiorana.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Sheryl Maloney','title' => 'Program Manager &amp; Strategist, TenFour','email' => 'sheryl.maloney@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/sherylmaloney','twitter' => '@sherylmaloney','img' => array('src' => 'img/portland/maloney.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Jeff Martens','title' => 'CEO, CPUsage ','email' => 'jeff@cpusage.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/jmartens','twitter' => '@Jmartens','img' => array('src' => 'img/portland/martens.jpg','class' => 'height-150 bottom-0 left-10'));
$faces[] = array('name' => 'Donna Moore','title' => 'Executive Director, Digital Living Network Alliance','email' => 'Donna@global-dlna.org','phone' => '','linkedin' => 'http://www.linkedin.com/pub/donna-moore/7/983/a03','twitter' => '','img' => array('src' => 'img/portland/moore.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Kevin Murphy','title' => 'Director of Digital Strategies, CMD','email' => 'murphypdx@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/murphypdx','twitter' => '@KevMurphy','img' => array('src' => 'img/portland/murphy.jpg','class' => ''));
$faces[] = array('name' => 'Kelley Myers','title' => 'Global Digital Marketing, Social Media at Starbucks','email' => 'kelleymyers@live.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/kelley-myers/4/354/325','twitter' => '@Kelley_Myers','img' => array('src' => 'img/portland/myers.jpg','class' => ''));
$faces[] = array('name' => 'Mohan Nair','title' => 'CIO, Cambia Health Solutions','email' => '','phone' => '','linkedin' => 'http://www.linkedin.com/pub/mohan-nair/8/681/63a','twitter' => '','img' => array('src' => 'img/portland/nair.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Erik Onnen','title' => 'VP Architecture, Urban Airship','email' => 'erik@urbanairship.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/eonnen','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
$faces[] = array('name' => 'Paresh Patel','title' => 'Founder of Vendscreen','email' => 'paresh@vendnext.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/pareshkpatel','twitter' => 'drpareshpatel','img' => array('src' => 'img/mentors/patel.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Bill Piwonka','title' => 'Vice President Marketing, Janrain','email' => 'bpiwonka@janrain.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/bpiwonka','twitter' => '@bpiwonka','img' => array('src' => 'img/portland/piwonka.jpg','class' => 'left-40'));
$faces[] = array('name' => 'Tim Priest','title' => 'President, CMO Strategy Group','email' => 'timpriest@cmostrategygroup.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/tim-priest/19/7b7/534','twitter' => '@timpriestCMO','img' => array('src' => 'img/portland/priest.jpg','class' => 'height-140 bottom-0 left-5'));
$faces[] = array('name' => 'Gina Rau','title' => 'Marketing, Janrain','email' => 'ginamrau@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/ginarau','twitter' => '@ginarau','img' => array('src' => 'img/portland/rau.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Bill Reid','title' => 'VP Product Management, Numera','email' => 'Breid@numera.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/bill-reid/1/8a/462','twitter' => '','img' => array('src' => 'img/portland/reid.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Ian Schafer','title' => 'CEO, Deep Focus','email' => 'Ian@deepfocus.net','phone' => '','linkedin' => 'http://www.linkedin.com/in/ianschafer','twitter' => '@ischafer','img' => array('src' => 'img/portland/schafer.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Dave Selden','title' => 'Creative Director, Pop Art','email' => 'Dave.Selden@popart.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/daveselden','twitter' => '@daveselden','img' => array('src' => 'img/portland/selden.jpg','class' => 'left-20 top-20'));
$faces[] = array('name' => 'Ron Sherman','title' => 'Senior Relationship Manager at Silicon Valley Bank','email' => 'r.sherman@svb.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/ron-sherman/11/a23/658','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 bottom-0 left-0'));
$faces[] = array('name' => 'Phil Shevrin','title' => 'VP,Technology at SoftBank Capital','email' => 'Phil_Shevrin@softbank.com','phone' => '','linkedin' => '','twitter' => 'philknows','img' => array('src' => 'img/mentors/shevrin.jpg','class' => 'height-150 bottom-0 left-35'));
$faces[] = array('name' => 'Michael Shirley','title' => 'Creative Director, AKQA Portland','email' => 'Michael.Shirley@akqa.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/michaelshirley','twitter' => '@michaelshirley','img' => array('src' => 'img/portland/shirley.jpg','class' => ''));
$faces[] = array('name' => 'Todd Silverstein','title' => 'Cofounder &amp; CEO, Vizify','email' => 'todd@vizify.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/toddsilverstein','twitter' => '@vizify','img' => array('src' => 'img/portland/silverstein.jpg','class' => ''));
$faces[] = array('name' => 'Lindsay Smith','title' => 'CEO, Massive Media','email' => 'Lyns.w.smith@gmail.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/portland/smith-lindsay.png','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Rich Smith','title' => 'Platform Manager | Business Development, First Round Capital','email' => 'richard@firstround.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/richard-smith/2/706/525','twitter' => '@_richsmith','img' => array('src' => 'img/portland/smith.jpg','class' => ''));
$faces[] = array('name' => 'Tyesha Snow','title' => 'Experience Design and Digital Strategy Consultant','email' => 'Tyeshasnow@gmail.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/tyeshasnow','twitter' => '@tyeshasnow','img' => array('src' => 'img/portland/snow.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Vidya Spandana','title' => 'Management Consulting','email' => 'vid@neppalli.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/vidyaspandana','twitter' => '@www_Vidya_TV','img' => array('src' => 'img/portland/spandana.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Tom Sperry','title' => 'Rogue Venture Partners','email' => 'tlcs99@hotmail.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
$faces[] = array('name' => 'Joe Staples','title' => 'Executive Creative Director, Wieden + Kennedy','email' => 'joe.staple@wk.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/joe-staples/4/b83/181','twitter' => '@mrjoestaples','img' => array('src' => 'img/portland/staples.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Barb Stark','title' => 'Director of Culture, Urban Airship','email' => 'barb@urbanairship.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/barb-stark/4/a13/961','twitter' => '@iBarbStark','img' => array('src' => 'img/portland/stark.jpg','class' => 'height-180 top-40 left-40'));
$faces[] = array('name' => 'Joe Stump','title' => 'CEO &amp; Cofounder, Sprint.ly, Inc.','email' => 'joe@sprint.ly','phone' => '','linkedin' => 'http://www.linkedin.com/in/joestump','twitter' => '@joestump','img' => array('src' => 'img/portland/stump.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Scott Townsend','title' => 'Director Of Marketing, Urban Airship','email' => 'scott.townsend@urbanairship.com','phone' => '','linkedin' => 'http://www.linkedin.com/pub/scott-townsend/1/862/4b6','twitter' => '@scottwtownsend','img' => array('src' => 'img/portland/townsend.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Rick Turoczy','title' => 'Co-Founder, PIE (Portland Incubator Experiment)','email' => 'rick@piepdx.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/turoczy','twitter' => '@turoczy','img' => array('src' => 'img/portland/turoczy.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Nigel Warson-Hill','title' => 'Presentation Technical Architect, AKQA','email' => 'Nigel.Warson-Hill@akqa.com','phone' => '','linkedin' => 'http://uk.linkedin.com/in/nigelwarsonhill','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
$faces[] = array('name' => 'Jared Wiener','title' => 'Industry Liason at PDC (Portland Development Commission)','email' => 'wienerj@pdc.us','phone' => '','linkedin' => 'http://www.linkedin.com/pub/jared-wiener/6/936/155','twitter' => 'jaredcweiner','img' => array('src' => 'img/mentors/weiner.jpg','class' => 'height-150 bottom-0'));
$faces[] = array('name' => 'Alex Williams','title' => 'Director, Creative &amp; Digital Strategy, Trendline Interactive','email' => 'alex@trendlineinteractive.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/emailmarketingstrategy','twitter' => '@alexcwilliamns','img' => array('src' => 'img/portland/williams.jpg','class' => 'height-140 bottom-0'));
$faces[] = array('name' => 'Eric Winquist','title' => 'CEO, Jama Software','email' => 'ewinquist@jamasoftware.com','phone' => '','linkedin' => 'http://www.linkedin.com/in/winquist','twitter' => '@portlanderic','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
$faces[] = array('name' => 'Raven Zachary','title' => 'Product, Walmart Labs','email' => 'raven@raven.me','phone' => '','linkedin' => 'http://www.linkedin.com/in/ravenzachary','twitter' => '@ravenme','img' => array('src' => 'img/portland/zachary.jpg','class' => 'height-140 bottom-0'));

		 		print_faces($faces);
		 	?>

	






			<!---------------- COMPANIES ---------------------->
			<h2 class="name dark text-center faint-border">COMPANIES</h2>

			<?php
		 		$faces = array();
		 		$faces[] = array('name' => '','title' => '','email' => '','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => '','class' => ''));


		 		$faces = array();
				$faces['fuelgooder'] = array('title' => 'FitCause','url' => 'http://www.gofitcause.com','faces' => array());
				$faces['fuelgooder']['faces'][] = array('name' => 'Laura Temel','title' => 'CEO','email' => 'laura@gofitcause.com','phone' => '917-685-7744','linkedin' => 'http://www.linkedin.com/pub/laura-temel/42/b53/523','twitter' => '@lauratemel','img' => array('src' => 'img/linkedin/fuelgooder-laura-temel.jpg','class' => 'height-140 bottom-0'));
				$faces['fuelgooder']['faces'][] = array('name' => 'Matt Cantor','title' => 'COO','email' => 'matt@gofitcause.com','phone' => '914-474-1696','linkedin' => 'http://www.linkedin.com/pub/matthew-cantor/11/62/224','twitter' => '@mattycantor','img' => array('src' => 'img/linkedin/fuelgooder-matt-cantor.jpg','class' => 'bottom-0 left-15'));
				$faces['fuelgooder']['faces'][] = array('name' => 'Michael Ni','title' => 'Back-end Developer','email' => 'mike@gofitcause.com','phone' => '626-922-6456','linkedin' => 'http://www.linkedin.com/pub/michael-ni/5/aa/85b','twitter' => '@mike_ni','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
				$faces['fuelgooder']['faces'][] = array('name' => 'Alan DeLonga','title' => 'Front-end Developer','email' => 'alan@gofitcause.com','phone' => '805 304 4693','linkedin' => 'http://www.linkedin.com/pub/alan-delonga/19/a61/501','twitter' => '@ImaginationBlur','img' => array('src' => 'img/linkedin/fuelgooder-alan-delonga.jpg','class' => 'height-170 top-5'));

				$faces['fitdeck'] = array('title' => 'FitDeck','url' => 'http://www.fitdeck.com','faces' => array());
				$faces['fitdeck']['faces'][] = array('name' => 'Phil Black','title' => 'CEO','email' => 'phil@fitdeck.com','phone' => '858-761-5825','linkedin' => 'http://www.linkedin.com/in/philipablack','twitter' => '@fitdeck','img' => array('src' => 'img/linkedin/fitdeck-phil-black.jpg','class' => 'height-160 top-5 left-15'));
				$faces['fitdeck']['faces'][] = array('name' => 'Joel Lenorovitz','title' => 'CTO','email' => 'Joellenorovitz@fitdeck.com','phone' => '303-514-4489','linkedin' => 'http://www.linkedin.com/pub/joel-lenorovitz/3/a84/b35/','twitter' => '@andrewraphael','img' => array('src' => 'img/linkedin/fitdeck-joe-lenorovitz.jpg','class' => 'height-150 left-5 top-5'));
				$faces['fitdeck']['faces'][] = array('name' => 'Andrew Small','title' => 'Developer','email' => 'Andrewsmall@fitdeck.com','phone' => '952-484-9856','linkedin' => 'http://www.linkedin.com/pub/andrew-small/4/863/718','twitter' => '@andrewraphael','img' => array('src' => 'img/linkedin/fitdeck-andrew-small.jpg','class' => 'height-140 bottom-0'));

				$faces['sprout'] = array('title' => 'Sprout Wellness Solutions','url' => 'http://www.sproutatwork.com','faces' => array());
				$faces['sprout']['faces'][] = array('name' => 'Christina Winkels','title' => 'VP Operations','email' => 'c.winkels@sproutatwork.com','phone' => '1-416-553-1304','linkedin' => '','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
				$faces['sprout']['faces'][] = array('name' => 'Tom Blake','title' => 'CEO','email' => 't.blake@sproutatwork.com','phone' => '1-416-236-2181','linkedin' => 'http://ca.linkedin.com/pub/tom-blake/1/9b6/651?trk=pub-pbmap','twitter' => '','img' => array('src' => 'img/linkedin/sprout-tom-blake.jpg','class' => 'height-150 bottom-0'));
				$faces['sprout']['faces'][] = array('name' => 'Martha Switzer','title' => 'VP Marketing','email' => 'm.switzer@sproutatwork.com','phone' => '1-604-365-4112','linkedin' => 'http://ca.linkedin.com/pub/martha-switzer/25/b13/a90','twitter' => '','img' => array('src' => 'img/linkedin/sprout-martha-switzer.jpg','class' => 'top-15 height-160'));
				$faces['sprout']['faces'][] = array('name' => 'Yas Yeganegi','title' => 'Business Development Manager','email' => 'y.yeganegi@sproutatwork.com','phone' => '1-604-616-1552','linkedin' => 'http://www.linkedin.com/profile/view?id=74724500&trk=hb_tab_pro_top','twitter' => '','img' => array('src' => 'img/linkedin/sprout-yas-yeganegi.jpg','class' => 'height-140 bottom-10'));
				$faces['sprout']['faces'][] = array('name' => 'John Schuett','title' => 'Product Manager','email' => 'j.schuett@sproutatwork.com','phone' => '1-604-307-3483','linkedin' => 'http://www.linkedin.com/pub/john-schuett/5/742/a38','twitter' => '@johnschuett','img' => array('src' => 'img/linkedin/sprout-john-schuett.jpg','class' => 'height-150 bottom-0'));
				$faces['sprout']['faces'][] = array('name' => 'John Ryan','title' => 'Senior Developer','email' => 'j.ryan@sproutatwork.com','phone' => '1-778-232-8239','linkedin' => 'http://www.linkedin.com/pub/john-ryan/65/479/47a','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));
				$faces['sprout']['faces'][] = array('name' => 'William Mellbourne','title' => 'Senior Developer','email' => 'w.melbourne.sproutatwork.com','phone' => '1-604-398-6030','linkedin' => 'http://www.linkedin.com/pub/will-melbourne/17/664/237','twitter' => '','img' => array('src' => 'img/linkedin/sprout-will-mellbourne.jpg','class' => 'height-160 bottom-0'));

				$faces['highfive'] = array('title' => 'HighFive','url' => 'http://highfive.me','faces' => array());
				$faces['highfive']['faces'][] = array('name' => 'Brent Gilmore','title' => 'CEO','email' => 'brent@highfive.me','phone' => '919-451-9458','linkedin' => 'http://www.linkedin.com/in/brentbgilmore','twitter' => '@brentgilmore','img' => array('src' => 'img/linkedin/highfive-brent-gilmore.jpg','class' => 'height-150 bottom-0'));
				$faces['highfive']['faces'][] = array('name' => 'Jo Albright','title' => 'CTO/Lead Developer','email' => 'jo@highfive.me','phone' => '404.434.5021','linkedin' => 'http://www.linkedin.com/in/joalbright','twitter' => '@joalbright','img' => array('src' => 'img/linkedin/highfive-jo-albright.jpg','class' => ''));
				$faces['highfive']['faces'][] = array('name' => 'Katie Pietrowski','title' => 'COO','email' => 'katie@highfive.me','phone' => '774-212-0863','linkedin' => 'http:// www.linkedin.com/in/katiepietrowski','twitter' => '@ktpietrowski','img' => array('src' => 'img/linkedin/highfive-katie-pietrowski.jpg','class' => 'height-140 bottom-0'));


				$faces['recbob'] = array('title' => 'RecBob','url' => 'http://www.recbob.com','faces' => array());
				$faces['recbob']['faces'][] = array('name' => 'Nick Silhacek','title' => 'Game Master','email' => 'nick@recbob.com','phone' => '402.326.8097','linkedin' => 'http://www.linkedin.com/in/nicksilhacek','twitter' => '@nicksilhacek','img' => array('src' => 'img/linkedin/recbob-nick-silhacek.jpg','class' => 'height-150 bottom-0'));
				$faces['recbob']['faces'][] = array('name' => 'John Schnipkoweit','title' => 'CEO & Quarterback','email' => 'john@recbob.com','phone' => '319-533-6186','linkedin' => 'http://www.linkedin.com/pub/john-schnipkoweit/a/805/4a9/','twitter' => '@jschnip','img' => array('src' => 'img/linkedin/recbob-john-schnipkoweit.jpg','class' => 'height-150 bottom-0'));
				$faces['recbob']['faces'][] = array('name' => 'Chris Quartier','title' => 'Commissioner of Code','email' => 'chris@recbob.com','phone' => '217-898-9829','linkedin' => 'http://www.linkedin.com/pub/christopher-quartier/42/4b/33b','twitter' => '@cquartier','img' => array('src' => 'img/linkedin/recbob-christopher-quartier.jpg','class' => 'height-160 bottom-0'));
				$faces['recbob']['faces'][] = array('name' => 'Alex Frazier','title' => 'Manager of fun','email' => 'Alex@RecBob.com','phone' => '319-929-4631','linkedin' => 'http://www.linkedin.com/in/alexjfrazier','twitter' => '@AlexJFrazier','img' => array('src' => 'img/linkedin/recbob-alex-frazier.jpg','class' => 'height-140 bottom-0'));
				$faces['recbob']['faces'][] = array('name' => 'Brad Candullo','title' => 'Pixel Pitcher','email' => 'bradc@recbob.com','phone' => '845.664.0018','linkedin' => 'http://www.linkedin.com/pub/brad-candullo/17/2a7/23b','twitter' => '@candullo','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));


				$faces['chroma'] = array('title' => 'Chroma','url' => 'http://chroma.io','faces' => array());
				$faces['chroma']['faces'][] = array('name' => 'Michael Merrill','title' => 'Project Manager','email' => 'mike@chroma.io','phone' => '503-380-2727','linkedin' => 'http://www.linkedin.com/in/kmikeym/','twitter' => '@kmikeym','img' => array('src' => 'img/linkedin/chroma-mike-merrill.jpg','class' => 'height-140 bottom-0'));
				$faces['chroma']['faces'][] = array('name' => 'Marcus Estes','title' => 'CEO','email' => 'marcus@chroma.io ','phone' => '971-309-5894','linkedin' => 'http://www.linkedin.com/in/popmechanic','twitter' => '@marcusestes','img' => array('src' => 'img/linkedin/chroma-marcus-estes.jpg','class' => 'height-150 bottom-0'));


				$faces['gorecess'] = array('title' => 'GoRecess','url' => 'http://www.gorecess.com','faces' => array());
				$faces['gorecess']['faces'][] = array('name' => 'Megan Smyth','title' => 'CEO','email' => 'megan@gorecess.com','phone' => '917-660-6026','linkedin' => 'http://www.linkedin.com/pub/megan-smyth/0/114/9a','twitter' => '@MeganSmyth1','img' => array('src' => 'img/linkedin/gorecess-megan-smyth.jpg','class' => 'height-150 bottom-0 left-5'));
				$faces['gorecess']['faces'][] = array('name' => 'Bill Arzt','title' => 'COO','email' => 'bill@gorecess.com','phone' => '202-497-2626','linkedin' => 'http://www.linkedin.com/in/billarzt','twitter' => '@a4acw','img' => array('src' => 'img/linkedin/gorecess-arzt-bill.jpg','class' => 'height-150 bottom-0 left-10'));
				$faces['gorecess']['faces'][] = array('name' => 'Matt Robinson','title' => 'Lead Engineer','email' => 'matt@gorecess.com','phone' => '585-750-5017','linkedin' => '','twitter' => '@robinsonmatty','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));


				$faces['incomparablethings'] = array('title' => 'Incomparable Things','url' => 'http://www.incomparablethings.com','faces' => array());
				$faces['incomparablethings']['faces'][] = array('name' => 'Alex Howell','title' => 'CEO','email' => 'alex@incomparablethings.com','phone' => '917-747-5708','linkedin' => 'http://www.linkedin.com/in/alejohowell/','twitter' => '@alejohowell','img' => array('src' => 'img/linkedin/incomparablethings-alex-howell.jpg','class' => ''));
				$faces['incomparablethings']['faces'][] = array('name' => 'Nick Park','title' => 'CTO','email' => 'nick@incomparablethings.com','phone' => '408-564-9855','linkedin' => 'http://www.linkedin.com/in/nckpark/','twitter' => '@nckpark','img' => array('src' => 'img/linkedin/incomparablethings-nick-park.jpg','class' => ''));
				$faces['incomparablethings']['faces'][] = array('name' => 'Veronica Velasquez','title' => 'Creative Director','email' => 'v2@incomparablethings.com','phone' => '917-202-7908','linkedin' => 'http://www.linkedin.com/in/veronicavelasquez/','twitter' => '@verosoraptor','img' => array('src' => 'img/linkedin/incomparablethings-veronica-velasquez.jpg','class' => 'height-150 bottom-0'));


				$faces['jpluscorp'] = array('title' => 'JPlus','url' => 'http://jpluscorp.com','faces' => array());
				$faces['jpluscorp']['faces'][] = array('name' => 'Keith Rumjahn','title' => 'CEO','email' => 'keith@jpluscorp.com','phone' => '(852) 9720 1234','linkedin' => 'http://hk.linkedin.com/in/rumjahn/','twitter' => '@krumjahn','img' => array('src' => 'img/linkedin/jplus-keith-rumjahn.jpg','class' => 'height-140 bottom-0'));
				$faces['jpluscorp']['faces'][] = array('name' => 'Theodore Lo','title' => 'Business Development','email' => 'theodore@coachba.se','phone' => '(852) 6077 8800','linkedin' => 'http://hk.linkedin.com/in/keungzhe852','twitter' => '','img' => array('src' => 'img/linkedin/jplus-theodore-lo.jpg','class' => 'height-140 bottom-0'));
				$faces['jpluscorp']['faces'][] = array('name' => 'Blues Zhou','title' => 'CTO','email' => 'blues@jpluscorp.com','phone' => '136 2231 4442 (Shenzhen, China)','linkedin' => '','twitter' => '','img' => array('src' => 'img/question.jpg','class' => 'height-150 top-5 left-40'));

				$faces['geopalz'] = array('title' => 'GEOPALZ','url' => 'http://www.geopalz.com','faces' => array());
				$faces['geopalz']['faces'][] = array('name' => 'Richard Schmelzer','title' => 'CEO/President','email' => 'rich@geopalz.com','phone' => '720-839-7785','linkedin' => 'http://ttp://www.linkedin.com/in/richschmelzer','twitter' => '@twitter.com/GeoPalz','img' => array('src' => 'img/linkedin/geopalz-rich-schmelzer.jpg','class' => 'height-160 bottom-0'));
				$faces['geopalz']['faces'][] = array('name' => "Zan O'Leary",'title' => 'Co-Founder/COO','email' => 'zan@geopalz.com','phone' => '303-949-5709','linkedin' => 'http://www.linkedin.com/in/www.linkedin.com/in/zanoleary/','twitter' => '','img' => array('src' => 'img/linkedin/geopalz-zan-oleary.png','class' => 'height-170 bottom-0 left-80'));
				$faces['geopalz']['faces'][] = array('name' => 'Genie Peshkova','title' => 'Product Manager','email' => 'genie@geopalz.com','phone' => '303-949-5709','linkedin' => 'http://www.linkedin.com/in/geniepeshkova/','twitter' => '','img' => array('src' => 'img/linkedin/geopalz-genie-peshkova.jpg','class' => 'height-160 bottom-0 left-5'));
				$faces['geopalz']['faces'][] = array('name' => 'Igor Vartanov','title' => ' Lead Software Engineer ','email' => 'igor@geopalz.com','phone' => '7.960.100.9939','linkedin' => 'http://ru.linkedin.com/pub/igor-vartanov/14/b67/4aa','twitter' => '','img' => array('src' => 'img/linkedin/geopalz-igor-vartanov.jpg','class' => 'height-160 bottom-0 left-10'));


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
		 		$faces[] = array('name' => 'Tyesha Snow','title' => '','email' => 'floriddesigns@gmail.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/portland/snow.jpg','class' => 'height-140 bottom-0'));
				$faces[] = array('name' => 'Alan Cassinelli','title' => '','email' => 'alan.cassinelli@gmail.com','phone' => '5037489948','linkedin' => 'http://www.linkedin.com/in/alancassinelli/','twitter' => '@alancassinelli','img' => array('src' => 'img/associates/cassinelli-alan.jpg','class' => 'height-150 bottom-0'));
				$faces[] = array('name' => 'Lynsey Smith','title' => '','email' => 'lyns.w.smith@gmail.com','phone' => '5038031282','linkedin' => 'http://https://www.linkedin.com/profile/view?id=110236449','twitter' => '@miss_lynsey','img' => array('src' => 'img/associates/smith-lynsey.jpg','class' => 'height-150 bottom-0'));
				$faces[] = array('name' => 'Kyle Morrow','title' => '','email' => 'kyle@thirsttees.com','phone' => '5039306833','linkedin' => 'http://www.linkedin.com/in/kylemorrow/','twitter' => '@KyMorrow','img' => array('src' => 'img/associates/morrow-kyle.jpg','class' => 'height-150 bottom-0'));
				$faces[] = array('name' => 'Alexander Klein','title' => '','email' => 'aoklein90@gmail.com','phone' => '2066978077','linkedin' => 'http://www.linkedin.com/profile/view?id=156473608&trk=hb_tab_pro_top','twitter' => '','img' => array('src' => 'img/associates/klein-alexander.jpg','class' => 'height-150 bottom-0'));
				$faces[] = array('name' => 'Danielle Alexander','title' => '','email' => 'danielle.nicole.alexander@gmail.com','phone' => '','linkedin' => '','twitter' => '','img' => array('src' => 'img/associates/alexander-danielle.jpg','class' => 'height-140 bottom-0'));

		 		print_faces($faces);
		 	?>


			<!---------------- HackStars ---------------------->
			<h2 class="name dark text-center faint-border">HackStars</h2>

			<?php
		 		$faces = array();
		 		$faces[] = array('name' => 'Drew Lanenga','title' => '','email' => 'drew.lanenga@gmail.com','phone' => '385-985-4356','linkedin' => 'http://www.linkedin.com/in/drewlanenga','twitter' => '','img' => array('src' => 'img/hackstars/lanenga.jpg','class' => 'height-150 bottom-0'));

		 		print_faces($faces);
		 	?>

		</div><!-- End List -->

		<!-- Footer -->
		<div class="gradient-border"></div>
		<div class="footer">
			<p class="pwd_by_subcopy">Powered by <a href="http://www.techstars.com/poweredby/" class="pwd_by_techstars"><img src="img/tech_stars.jpg" /></a> <br />#1 Accelerator in the World</p>
		</div>
		<!-- End Footer -->

	</div><!-- End Container -->
	</div><!-- End Content -->

	<footer class='main-footer'>
		&copy; 2013 NIKE, INC. ALL RIGHTS RESERVED
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