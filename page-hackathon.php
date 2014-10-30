<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package datadays
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>
			<div class="row">
			<div class="col-md-4 hackathon hackathon-citadel">
  			
    	 
  			<h3>Citadel</h3>
  			<p class="hackathon-short">Create an app that works across the whole of Europe!<br/><br/>
  			4 cities in Europe - Athens, Manchester, Ghent or Issy-les-Moulineaux - are publishing their data to make it possible to create an app that will work in your city!<br/><br/>
  		  Join  Citadel the Move.  Make an app for your city.  And win in a place in the finals during the Data Days conference in Ghent, Belgium. The winner will take home a prize of 5000 EUR and a trip to one of the four pilot cities to test the app there!</p>
  		  
  		   <div class="hackathon-logo"><img src="http://datadays.netslet.com/wp-content/uploads/2013/11/CITADEL-LOGO-1_v1.0.png" alt="CITADEL LOGO-1_v1.0" width="150" class="alignnone img-responsive" /></div>
  			
  		  
  		  
  		  <button type="button" class="btn btn-default" data-href="/hackathon-citadel">Take the challenge!</button>
  		  <button type="button" class="btn btn-default" data-href="http://www.citadelonthemove.eu/en-us/thehub/opendata.aspx">Get the data</button>
			</div>
		  <div class="col-md-4 hackathon hackathon-vkbo">
  			
  			<h3>VKBO</h3>
  			<p class="hackathon-short">Are you a programmer or designer? A hacker through and through?<br/><br/>
  		  If so you can be the first to start working on what may well be Flanders most valuable data set – the VKBO, ‘the Enhanced Crossroads Bank for Enterprises’ – in which all enterprises, schools, hospitals etc. are geographically localised. Using the VKBO and Uit datasets in Vlaanderen, you can develop an application, produce mashups or create visualisations and present them to the public.</p>
  		  
  		  <div class="hackathon-logo"><img src="http://datadays.netslet.com/wp-content/uploads/2013/11/leeuwVO_G_G.png" alt="leeuwVO_G_G" width="150" class="alignnone img-responsive" /></div>
  		
  		  
  		  <button type="button" class="btn btn-default" data-href="hackathon-vkbo">Take the challenge!</button>
  		  <button type="button" class="btn btn-default" data-href="hackathon-vkbo-data">Get the data</button>
			</div>
		  <div class="col-md-4 hackathon hackathon-idrops">
  			
  			<h3>Business Lounge</h3>
  			<p class="hackathon-short">On the 18th of february the brightest and best open data start-ups will be invited to exhibit and pitch their business ideas at the Apps for Europe Business Lounge in Ghent, Belgium at DataDays 2014.<br/><br/>Where the sick were once treated, Open Data evengelists are now pampered. The building is a perfect blend of old and new. Set within the 13th century monastery, The Business Lounge will seek to boost the most viable startup propositions developed during the last year of hack events, innovation challenges and start up competitions. A Business Lounge programme that puts start-ups and developers in front of investors, experts and mentors to help them refine their business propositions. During this Business Lounge a winner is chosen to present his/her work at the International Business Lounge in Manchester.</p> 
			  
			  <div class="hackathon-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/apps4eu.png" alt="Apps4EU" width="150" class="alignnone img-responsive" /></div>
  			
			  
			  <button type="button" class="btn btn-default" data-href="http://www.datadays.eu/take-the-appsforeurope-challenge/">Take the challenge!</button>
			  <button type="button" class="btn btn-default" data-href="hackathon-apps4eu-programme">See the programme</button>
			</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); NO SIDEBAR! ?>
<?php get_footer(); ?>
