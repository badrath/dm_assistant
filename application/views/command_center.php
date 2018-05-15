<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Dm's Assistant 5e</title>
    <link rel="stylesheet" media="screen" href="assets\css\Revolution.rob.zg.css">

	<!-- <link rel="alternate" type="application/rss+xml" title="RSS" href="http://www.csszengarden.com/zengarden.xml"> -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Robert Marini">
	<meta name="description" content="A collection of resources with integration between them for making a 5e DM's life better.">
	<meta name="robots" content="all">

</head>

<div class="page-wrapper">

	<section class="intro" id="zen-intro">

		<header role="banner">
            <h1>DM's Assistant 5e</h1>
			<h2>The Beauty of <abbr title="Cascading Style Sheets">CSS</abbr> Design</h2>
		</header>

		<div class="preamble" id="zen-preamble" role="article">
            <h3>Some Assistant(s)?</h3>
            <b>You step into The Invulnerable Vagrant and Pumat Sol(s) greet you:</b>
            <blockquote>
                <p>
                <i>
                    So, uh, I hear yer lookin' for an assistant fer yer uh Masterin' of Dungeons there, or-what-have-you.
                    <br>
                    Well, I'm sure we got somethin' round here that can help ya out, noo problem.
                </i>
                </p>
            </blockquote>
		</div>
	</section>

	<div class="main supporting" id="tools" role="main">
		<div class="explanation" id="encounter" role="article">
			<h3>Encounter Running</h3>
			<dl>
			<dt><b>Roll Initiative!</b>
				<dd>
					<dl>
						<dt><a href="http://improved-initiative.com/e/jg8fbjp6">Improved Initiative</a></dt>
						<dd>Fantastic way to run an encounter and share limited information with players online.</dd>
						<dd><b>Inputs:</b> A JSON file. Allows for custom monsters, spells, attacks, parties, and encounter saving.</dd>
						<dd><b>Outputs:</b> An interactive experience to run an encounter to its finality.</dd>
					</dl>
				</dd>
			</dl>
		</div>

		<div class="participation" id="npc" role="article">
			<h3>NPCs</h3>
			<dl>
    			<dt><b>Descriptions</b></dt>
    				<dd>
    					<dl>
    						<dt><a href="https://autorolltables.github.io/#">roll tables: itemized npc descriptions generation</a></dt>
    						<dd>Best for minor npc generation. Each input is very well developed and detailed. All combined could create a very detailed NPC.</dd>
    						<dd><b>Inputs (Mutually Exclusive):</b> Random NPC Names, Motivations, Appearance, Jobs by locations.</dd>
    						<dd><b>Outputs: (Mixed).</b>
    					</dl>
    				</dd>
    				
        			<dd>
            			<dl>
            				<dt><a href="http://npcgenerator.azurewebsites.net/">azure: npc description generation</a></dt>
            				<dd>"Bullet list" style generation for npc's.</dd>
            				<dd><b>Inputs:</b> Race, Sex, Alignment, Plot hook type, Occupation (Profession or Class).</dd>
            				<dd><b>Outputs:</b> Description, Personality Traits, Ability Scores, Relationships, Alignment Tendencies, Plot Hook</dd>
            			</dl>
        			</dd>
        		
    			<dt><b>Stat Blocks</b></dt>
        			<dd>
    					<dl>
    						<dt><a href="https://rpgtinker.com/index.php">rpgtinker: npc stat block (major) generation</a></dt>
    						<dd>Great for generating a complete npc stat block for combat</dd>
    						<dd><b>Inputs:</b>
    							<dl>
    								<dt>Template</dt>
    									<dd>Used for custom attribute array distribution, armor, melee and ranged weapons, and special features.</dd>
    								<dt>Race</dt>
    									<dd>Racial buffs</dd>
    								<dt>Attribute Array</dt>
    									<dd>How the attribute points should be rolled for or artificially chosen.</dd>
    								<dt>Number of Hit Dice</dt>
    									<dd>Generally chosen by the size of the character.</dd>
    								<dt>Hit Dice Type</dt>
    									<dd>Dice type, generally chosen by the size of the NPC.</dd>
    							</dl>
    						</dd>
    						<dd><b>Outputs:</b> Fully formed almost PC level major NPC including gear and spells...Everything you could want for combat EXCEPT special/magic gear.</dd>
    					</dl>
    				</dd>
			</dl>
		</div>
		
		<div class="participation" id="location" role="article">
			<h3>Locations</h3>
			<dl>
				<dt><b>Population Centers</b></dt>
					<dd>
						<dl>
							<dt><a href="http://wizardawn.and-mag.com/tool_ftown.php">wizardawn settlement generator</a></dt>
							<dd>Generates a number labeled map with ruling structure, paragraph style npc descriptions, guilds, guards, churches and merchants with stocked items.</dd>
							<dd><b>Inputs:</b> Settlement name, map type (city, keep, or village), map width, map height (or a map file), populate (y/n), features (rulers, merchants, guilds, guards, and/or churches), sea side (y/n), stock merchants (y/n), and races in settlement.</dd>
							<dd><b>Outputs:</b> A numbered .png map with the selected input information. Page with all the information can be saved as a raw html and retain the map.</dd>
						</dl>
					</dd>
					
				<dt><b>Dungeons</b></dt>
					<dd>
						<dl>
							<dt><a href="http://donjon.bin.sh/5e/dungeon/">donjon random dungeon generator</a></dt>
							<dd>LEFT OFF HERE</dd>
							<dd><b></b></dd>
							<dd><b></b></dd>
						</dl>
					</dd>
			</dl>
		</div>
		
		<div class="benefits" id="zen-benefits" role="article">
			<h3>Benefits</h3>
			<p>Why participate? For recognition, inspiration, and a resource we can all refer to showing people how amazing <abbr title="Cascading Style Sheets">CSS</abbr> really can be. This site serves as equal parts inspiration for those working on the web today, learning tool for those who will be tomorrow, and gallery of future techniques we can all look forward to.</p>
		</div>

		<div class="requirements" id="zen-requirements" role="article">
			<h3>Requirements</h3>
			<p>Where possible, we would like to see mostly <abbr title="Cascading Style Sheets, levels 1 and 2">CSS 1 &amp; 2</abbr> usage. <abbr title="Cascading Style Sheets, levels 3 and 4">CSS 3 &amp; 4</abbr> should be limited to widely-supported elements only, or strong fallbacks should be provided. The CSS Zen Garden is about functional, practical <abbr title="Cascading Style Sheets">CSS</abbr> and not the latest bleeding-edge tricks viewable by 2% of the browsing public. The only real requirement we have is that your <abbr title="Cascading Style Sheets">CSS</abbr> validates.</p>
			<p>Luckily, designing this way shows how well various browsers have implemented <abbr title="Cascading Style Sheets">CSS</abbr> by now. When sticking to the guidelines you should see fairly consistent results across most modern browsers. Due to the sheer number of user agents on the web these days &#8212; especially when you factor in mobile &#8212; pixel-perfect layouts may not be possible across every platform. That&#8217;s okay, but do test in as many as you can. Your design should work in at least IE9+ and the latest Chrome, Firefox, iOS and Android browsers (run by over 90% of the population).</p>
			<p>We ask that you submit original artwork. Please respect copyright laws. Please keep objectionable material to a minimum, and try to incorporate unique and interesting visual themes to your work. We&#8217;re well past the point of needing another garden-related design.</p>
			<p>This is a learning exercise as well as a demonstration. You retain full copyright on your graphics (with limited exceptions, see <a href="http://www.mezzoblue.com/zengarden/submit/guidelines/">submission guidelines</a>), but we ask you release your <abbr title="Cascading Style Sheets">CSS</abbr> under a Creative Commons license identical to the <a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="View the Zen Garden's license information.">one on this site</a> so that others may learn from your work.</p>
			<p role="contentinfo">By <a href="http://www.mezzoblue.com/">Dave Shea</a>. Bandwidth graciously donated by <a href="http://www.mediatemple.net/">mediatemple</a>. Now available: <a href="http://www.amazon.com/exec/obidos/ASIN/0321303474/mezzoblue-20/">Zen Garden, the book</a>.</p>
		</div>

		<footer>
			<a href="http://validator.w3.org/check/referer" title="Check the validity of this site&#8217;s HTML" class="zen-validate-html">HTML</a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer" title="Check the validity of this site&#8217;s CSS" class="zen-validate-css">CSS</a>
			<a href="http://creativecommons.org/licenses/by-nc-sa/3.0/" title="View the Creative Commons license of this site: Attribution-NonCommercial-ShareAlike." class="zen-license">CC</a>
			<a href="http://mezzoblue.com/zengarden/faq/#aaa" title="Read about the accessibility of this site" class="zen-accessibility">A11y</a>
			<a href="https://github.com/mezzoblue/csszengarden.com" title="Fork this site on Github" class="zen-github">GH</a>
		</footer>

	</div>


	<aside class="sidebar" role="complementary">
		<div class="wrapper">

			<div class="design-selection" id="design-selection">
				<h3 class="select">Select a Design:</h3>
				<nav role="navigation">
					<ul>
					<li>
						<a href="/221/" class="design-name">Mid Century Modern</a> by						<a href="http://andrewlohman.com/" class="designer-name">Andrew Lohman</a>
					</li>					<li>
						<a href="/220/" class="design-name">Garments</a> by						<a href="http://danielmall.com/" class="designer-name">Dan Mall</a>
					</li>					<li>
						<a href="/219/" class="design-name">Steel</a> by						<a href="http://steffen-knoeller.de" class="designer-name">Steffen Knoeller</a>
					</li>					<li>
						<a href="/218/" class="design-name">Apothecary</a> by						<a href="http://trentwalton.com" class="designer-name">Trent Walton</a>
					</li>					<li>
						<a href="/217/" class="design-name">Screen Filler</a> by						<a href="http://elliotjaystocks.com/" class="designer-name">Elliot Jay Stocks</a>
					</li>					<li>
						<a href="/216/" class="design-name">Fountain Kiss</a> by						<a href="http://jeremycarlson.com" class="designer-name">Jeremy Carlson</a>
					</li>					<li>
						<a href="/215/" class="design-name">A Robot Named Jimmy</a> by						<a href="http://meltmedia.com/" class="designer-name">meltmedia</a>
					</li>					<li>
						<a href="/214/" class="design-name">Verde Moderna</a> by						<a href="http://www.mezzoblue.com/" class="designer-name">Dave Shea</a>
					</li>					</ul>
				</nav>
			</div>

			<div class="design-archives" id="design-archives">
				<h3 class="archives">Archives:</h3>
				<nav role="navigation">
					<ul>
						<li class="next">
							<a href="/102/page1">
								Next Designs <span class="indicator">&rsaquo;</span>
							</a>
						</li>
						<li class="viewall">
							<a href="http://www.mezzoblue.com/zengarden/alldesigns/" title="View every submission to the Zen Garden.">
								View All Designs							</a>
						</li>
					</ul>
				</nav>
			</div>

			<div class="zen-resources" id="zen-resources">
				<h3 class="resources">Resources:</h3>
				<ul>
					<li class="view-css">
						<a href="/102/102.css" title="View the source CSS file of the currently-viewed design.">
							View This Design&#8217;s <abbr title="Cascading Style Sheets">CSS</abbr>						</a>
					</li>
					<li class="css-resources">
						<a href="http://www.mezzoblue.com/zengarden/resources/" title="Links to great sites with information on using CSS.">
							<abbr title="Cascading Style Sheets">CSS</abbr> Resources						</a>
					</li>
					<li class="zen-faq">
						<a href="http://www.mezzoblue.com/zengarden/faq/" title="A list of Frequently Asked Questions about the Zen Garden.">
							<abbr title="Frequently Asked Questions">FAQ</abbr>						</a>
					</li>
					<li class="zen-submit">
						<a href="http://www.mezzoblue.com/zengarden/submit/" title="Send in your own CSS file.">
							Submit a Design						</a>
					</li>
					<li class="zen-translations">
						<a href="http://www.mezzoblue.com/zengarden/translations/" title="View translated versions of this page.">
							Translations						</a>
					</li>
				</ul>
			</div>
		</div>
	</aside>


</div>

<!--

	These superfluous divs/spans were originally provided as catch-alls to add extra imagery.
	These days we have full ::before and ::after support, favour using those instead.
	These only remain for historical design compatibility. They might go away one day.
		
-->
<div class="extra1" role="presentation"></div><div class="extra2" role="presentation"></div><div class="extra3" role="presentation"></div>
<div class="extra4" role="presentation"></div><div class="extra5" role="presentation"></div><div class="extra6" role="presentation"></div>




<div id="container">
    <h1>Welcome to the DM's Assistant for 5e!</h1>

    <div id="body">
    <a href="http://improved-initiative.com/e/jg8fbjp6"> Improved Initiative for Encounters </a>

    </div>

</div>

</body>

</html>