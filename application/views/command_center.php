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
		<div class="resource-blurb" id="encounter" role="article">
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

		<div class="resource-blurb" id="npc" role="article">
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
		
		<div class="resource-blurb" id="location" role="article">
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
							<dd>Generates a simple map based on party level and # of members. Generates traps and doors and descriptions.</dd>
							<dd><b>Inputs:</b> Dungeon Name, level, party size, motif, random seed, map style, grid, layout, size, peripheral egress (y/n), stairs (y/n), room layout, room size, doors, corridors, remove deadends (y/n).</dd>
							<dd><b>Outputs:</b> Exports an html with highlighting and hyperlinking capabilities for rooms. TSV output is an options for impoting into dungeon painter studio. Also offers a print of the map with a view for DM and a view for players as PNG.</dd>
							<dd><b>Side Note:</b> Map size of "fine" can be used for a house layout.</dd>
						</dl>
					</dd>
				<dt><b>Taverns/Inns</b></dt>
					<dd>
						<dl>
							<dt><a href="donjon.bin.sh/fantasy/inn">donjon random inn generator</a></dt>
							<dd>Upon load, auto generates a text description random inn. May remake the inn by refreshing the page or changing any of the options.</dd>
							<dd><b>Inputs:</b> Inn type, patron type</dd>
							<dd><b>Outputs:</b> A text description of the generated inn including: the inn's name, location, description, innkeeper, menu items, patrons (brief npc text description), and rumors.
						</dl>
						<dl>
							<dt><a href="inkwellideas.com/free-tools/random-inn-generator-floorplan">inkwellideas floorplan generator</a></dt>
							<dd>Generates a combination of images to assemble a floor plan of an inn.</dd>
							<dd><b>Inputs:</b> Inn length, inn width, 2nd level (random/y/n), 2nd floor open area (random/open/filled), 2nd floor connected rooms (random/yes/no), 2nd floor secret door (random/yes/no), indoor privies (random/yes/no), cellar (random/yes/no), backroom (random/yes/no), back exit (random/yes/no), hearth (random/yes/no), common room - if large length (random/yes/no), 1st floor rooms - if large length and width (random/yes/no), density (random/crowded/average/sparse).</dd>
							<dd><b>Outputs:</b> A sketch combination of images assembled into a floor plan of an in with labels. A key is provided explaining the labels for special features on the map.
						</dl>
					</dd>
				<dt><b>World Map</b></dt>
					<dd>
						<dl>
							<dt><a href="http://www.d20srd.org/fantasy/world/">d20srd generate fantasy world</a></dt>
							<dd>A fantastic resource that generates a tiled world map with terrain, locations, and labels into a PNG that may be saved (via right click).</dd>
							<dd><b>Inputs:</b> world name, random seed, map style (atlas/antique), font (default/black castle/cloister black/english runes/livingstone/morris roman/angerthas/tengwar), % water(1-100), % ice (1-100), geography (yes/no), rivers (yes/no), cities and castles (yes/no), hex grid (check box), label map (check box), random button</dd>
							<dd><b>Outputs:</b> A PNG world map with labels (if desired) is displayed. It is can be downloaded as a complete png by "saving the image as".</dd>
						</dl>
					</dd>
			</dl>
		</div>
		
		<div class="resource-blurb" id="everything-else" role="article">
			<h3>Everything Else</h3>
			<dl>
				<dt><b>donjon</b></dt>
					<dd>
						<dl>
							<dt><a href="https://donjon.bin.sh/5e/random/">donjon generator</a></dt>
						</dl>
					</dd>
				<dt><b>autorolls table</b></dt>
					<dd>
						<dl>
							<dt><a href="https://autorolltables.github.io/#">auto rolls table</a></dt>
							<dd>Great for TONS of descriptions of things based on 5e roll tables, from plot hooks to loot to useless objects and settlements....etc.</dd>
						</dl>
					</dd>
			</dl>
		</div>

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




<!-- <div id="container"> -->
<!--     <h1>Welcome to the DM's Assistant for 5e!</h1> -->

<!--     <div id="body"> -->
<!--     <a href="http://improved-initiative.com/e/jg8fbjp6"> Improved Initiative for Encounters </a> -->

<!--     </div> -->

<!-- </div> -->

</body>

</html>