<?php
/**
 * Template Name: Product Application
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>

<!-- Begin Page Content -->

<div class="application-slider">
	<div class="container-fluid">
		<div class="row appRow">
			<div class="col-md-12">

			</div>
		</div>
	</div>
</div>

<div class="applications">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2>e-Zn Included in the 2019 Cleantech “50 to Watch” List</h2>
				<p>Toronto, Ontario – 24 September, 2019:  e-Zn, an energy storage technology company, is named to Cleantech Group’s New 50 to Watch List.</p>
				<p>The 50 to Watch is an annual list of the most promising early-stage private companies delivering high-impact solutions. The innovators on the list are creating new technologies and business models that could change every aspect of how we live; from what we eat to how we consume, from how we build our homes to how we travel.</p>
				<p> “We are very honoured to make this prestigious list of companies changing the world for the better.  This recognition is wonderful encouragement for our company to continue working hard to bring our solution to market and reduce the world’s dependency on fossil fuels,” says James Larsen, CEO.</p>
				<p><b>“50 to watch companies give their all to achieve profitable impact. They tackle pressing global challenges with creative pragmatism and dedication. Together, they form a roadmap to a more sustainable future,”</b> said Jules Besnainou, Director, Cleantech Group. To arrive at the companies on the list, Cleantech Group put together a diverse panel of more than 20 early-stage innovation experts from five continents. The Expert Panel nominated the companies they were most impressed with, focusing on high-impact solutions. Next, those nominations were combined with Cleantech Group nominations and added to research on early-stage public awards. The resulting 500 nominations were put through qualitative and impact filters. All nominations were weighted according to their relevance, keeping a sectoral and geographical balance. The Expert Panel then reviewed and scored a shortlist of 140 companies to arrive at the final 50.</p>

				<div class="app-list">
					<ul>
						<li>The complete list of 50 companies was revealed on 24 September 2019</li>
						<li>For detailed information on e-Zn’s outlook as an innovator, <a href="http://info.cleantech.com/50-to-Watch-2019-report-download.html?utm_campaign=50%20to%20Watch%2019&utm_medium=links&utm_source=PR_Kit">visit Cleantech Group’s market intelligence platform i3</a> and search for “e-Zn”.</li>
						<li><a href="http://info.cleantech.com/50-to-Watch-2019-report-download.html?utm_campaign=50%20to%20Watch%2019&utm_medium=links&utm_source=PR_Kit">Download the report</a></li>
					</ul>
				</div>

				<h4>About Cleantech Group</h4>
				<p>Cleantech&reg; Group provides research, consulting and events to catalyze opportunities for sustainable growth powered by innovation. At every stage from initial strategy to final deals, we bring corporate change makers, investors, governments and stakeholders from across the ecosystem the access and customized support they need to thrive in a more digitized, de-carbonized and resource-efficient future.</p>

			</div>
		</div>
	</div>
</div>

<!-- End Page Content -->

<?php

get_footer();
