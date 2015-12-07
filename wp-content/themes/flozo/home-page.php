<?php
/*
Template Name: Home
*/
?>


<?php get_header(); ?>
<?php if(ot_get_option( 'feature_image_1' ) != ''){ ?>
<script class="secret-source">
        jQuery(document).ready(function($) {
          $('.feature').bjqs({
            height      : 410,
            width       : 960,
            responsive  : true,
            showmarkers : false,
            usecaptions : false,
            animtype : 'slide',
            randomstart :false
          });
        });
</script>
<div class="feature">
	<ul class="bjqs">
		<li><img src="<?php echo ot_get_option( 'feature_image_1' ); ?>"/><p><?php echo ot_get_option( 'feature_text_1' ); ?></p></li>
		<?php if(ot_get_option( 'feature_image_2' ) != ''){ ?><li><img src="<?php echo ot_get_option( 'feature_image_2' ); ?>"/><p><?php echo ot_get_option( 'feature_text_2' ); ?></p></li><?php } ?>
		<?php if(ot_get_option( 'feature_image_3' ) != ''){ ?><li><img src="<?php echo ot_get_option( 'feature_image_3' ); ?>"/><p><?php echo ot_get_option( 'feature_text_3' ); ?></p></li><?php } ?>
		<?php if(ot_get_option( 'feature_image_4' ) != ''){ ?><li><img src="<?php echo ot_get_option( 'feature_image_4' ); ?>"/><p><?php echo ot_get_option( 'feature_text_4' ); ?></p></li><?php } ?>
		<?php if(ot_get_option( 'feature_image_5' ) != ''){ ?><li><img src="<?php echo ot_get_option( 'feature_image_5' ); ?>"/><p><?php echo ot_get_option( 'feature_text_5' ); ?></p></li><?php } ?>
	</ul>

</div>
<?php } ?>
<div id="content">

		<div class="home">
		<h2><span style="background-color:<?php echo ot_get_option( 'main_colour' ); ?>;">Mission Statement</span></h2>
		<div class="statement">
			<h1>Our Mission</h2>
			<div class="text" title="Mission Statement">
				Gulf State Analytics (GSA) is a Washington, DC-based geopolitical risk consultancy which assesses risks and opportunities among Gulf Cooperation Council (GCC) states for lenders, traders, investors, policymakers, and other parties. In today’s volatile environment, stakeholders demand current, objective, and independent assessments of the GCC’s complex state of affairs. Our team of renowned economists, political scientists, former diplomats, and regional experts distinguish between fact and fiction to provide timely insights into current events in the GCC.
			</div>
		</div>


		<div class="delivery">
			<h1>GSA’s monthly monitor delivers</h2>
			<ul class="list">
				<li>Monthly summaries of economic, environmental, political, security, and social developments in Bahrain, Kuwait, Oman, Qatar, Saudi Arabia, and the United Arab Emirates</li>
				<li>In-depth analytical reporting by renowned experts exclusively for GSA subscribers that offer insights into cutting edge topics</li>
			</ul>
			<ul class="list">
				<li>Analysis that goes beyond headlines to bring subscribers insight into geopolitical implications of daily events, thereby empowering stakeholders in the GCC to maximize opportunities and mitigate risk</li>
				<li>Information collected from on-the-ground sources and local media with thoughtful analysis</li>
			</ul>
		</div>

    <div class="logo-carousel">
      <h1>Gulf State Analytics Referenced In</h1>
      <div class="logos">
        <div class="row">
          <a href="http://www.ft.com/"><img src="http://gulfstateanalytics.com/wp-content/uploads/2015/12/Financial-Times.jpg"></a>
          <a href="http://www.wsj.com/"><img src="http://gulfstateanalytics.com/wp-content/uploads/2015/12/WSJ.png"></a>
          <a href="http://www.bloomberg.com/"><img style="position: relative; top: 4px; left: 19px;" src="http://gulfstateanalytics.com/wp-content/uploads/2015/02/Bloomberg-Logo.jpg"></a>
          <a href="http://www.reuters.com/"><img style="position: relative; top: -4px;" src="http://gulfstateanalytics.com/wp-content/uploads/2015/12/Reuters_logo-1024x245.png"></a>
          <a href="http://www.arabianbusiness.com/"><img src="http://gulfstateanalytics.com/wp-content/uploads/2015/12/ArabianBusiness.png"></a>
        </div>
      </div>
    </div>

			</div>


	</div>
<?php get_footer(); ?>
