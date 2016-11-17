/* --------- RESET ------------- */

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, 
pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, img, ins, kbd, q, 
s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset,  
form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td  

{ margin: 0; padding: 0; border: 0; outline: 0; font-weight: inherit; font-style: inherit; font-size: 100%; font-family: inherit; vertical-align: baseline; }

ol, ul { 
	list-style: none; 
}

textarea { 
	overflow: auto; 
}
*:focus {
	outline: none;
}
html { 
	overflow-y: scroll;
}

/* --------- DOCUMENT ---------------------------------- */
body {
	font: normal 87.5%/18px Helvetica, Verdana, sans-serif;
	color: #666666;
}
.page {
	width: 860px;
	padding: 50px 50px 15px 50px;
	margin: auto;
}

a:link {
	color: #003D79;
	text-decoration: none;
}
a:visited {
	color: #003D79;
	text-decoration: none;
}
a:hover {
	color: #4C719B;
	text-decoration: underline;
}
a:active {
	color: #4C719B;
	text-decoration: none;
}



/* --------- HEADER ---------------------------------- */
.header {
	background: transparent;
	width: 100%;
	height: 110px;
	position: relative;
}
.header #practice {
	text-indent: -9999px;
}
.header h3 {
	position: absolute;
	font-size: .856em;
	text-indent: -9999px;
	top: -30px;
	left: 428px;
}
.header h3 a {
	height: 13px;
	width: 200px;
	display: block;
	background: url(/images/nav_drop.png) no-repeat 0 -275px;
}
.header h3 a:visited {
	background: url(/images/nav_drop.png) no-repeat 0 -275px;
}
.header h3 a:hover {
	background: url(/images/nav_drop.png) no-repeat 0 -314px;
}
.header h3 a:active {
	background: url(/images/nav_drop.png) no-repeat 0 -314px;
}

.header h1  {
	width: 285px;
	height: 190px;
	padding-top:50px;
	position: absolute;
	top: 110px;
	left: 0;
}
.header .location li {
	float: left;
}
.header .location {
	font-size: .856em;
	position: absolute;
	top: -30px;
	right: -8px;
	overflow: hidden;
}
.header .location .locnyc {
	text-indent: -9999px;
	height: 13px;
	width: 60px;
	margin-right: 5px;
	display: block;
	background: url(/images/nav_drop.png) no-repeat 0 -288px;
}
.header .location .locnyc:visited {
	background: url(/images/nav_drop.png) no-repeat 0 -288px;
}
.header .location .locnyc:hover {
	background: url(/images/nav_drop.png) no-repeat 0 -327px;
}
.header .location .locnyc:active {
	background: url(/images/nav_drop.png) no-repeat 0 -327px;
}




.header .location .loclon {
	text-indent: -9999px;
	height: 13px; 
	width: 54px;
	display: block;
	background: url(/images/nav_drop.png) no-repeat 0 -301px;
}
.header .location .loclon:visited {
	background: url(/images/nav_drop.png) no-repeat 0 -301px;
}
.header .location .loclon:hover {
	background: url(/images/nav_drop.png) no-repeat 0 -340px;
}
.header .location .loclon:active {
	background: url(/images/nav_drop.png) no-repeat 0 -340px;
}

.header .location .locbos {
	text-indent: -9999px;
	height: 13px; 
	width: 50px;
	display: block;
	background: url(/images/nav_drop.png) no-repeat 0 -447px;
}
.header .location .locbos:visited {
	background: url(/images/nav_drop.png) no-repeat 0 -447px;
}
.header .location .locbos:hover {
	background: url(/images/nav_drop.png) no-repeat 0 -459px;
}
.header .location .locbos:active {
	background: url(/images/nav_drop.png) no-repeat 0 -459px;
}


/* --------- NAVIGATION ---------------------------------- */

#main.nav {
	height: 23px;
	position: absolute;
	top: -11px;
	right: 0;
	border-top: #ccc 1px solid;
	padding-top: 5px;
	min-width: 436px;

}
#main.nav li {
	display: inline-block;
	padding: 0;
}

#main.nav .subnav {
	background: #fff;
	border: 1px solid #e1e1e1;
	padding: 5px 5px 10px 10px;
	z-index: 500;
	position: absolute;
	display: none;
}
#main.nav .press .subnav a {
	display: block;
	height: 9px;
	margin: 7px 0;
	width: 118px;
}
#main.nav .team .subnav a {
	display: block;
	height: 9px;
	margin: 7px 0;
	width: 87px;
}

#main.nav .press .subnav {
	top: 28px;
	right: 7px;
}
#main.nav .team .subnav {
	top: 28px;
	right: 108px;
}
#main.nav .subnav li {
	display: block;
	padding: 0 10px 0 10px;
}
#main.nav .team .subnav ul {
	float: left;
	padding: 0 5px;
}
#main.nav .team:hover ul {
	display: block;
}
#main.nav .press:hover ul {
	display: block;
}

.nav a {
	display: inline-block;
	text-indent: -9999px;
	height: 23px;
}
.nav .home a:link {
	width: 103px;
	background: url(/images/navigation.png) no-repeat 0 0;
}
.nav .home a:visited {
	width: 103px;
	background: url(/images/navigation.png) no-repeat 0 0;
}
.nav .home a:hover {
	width: 103px;
	background: url(/images/navigation.png) no-repeat 0 -23px;
}
.nav .home a:active {
	width: 103px;
	background: url(/images/navigation.png) no-repeat 0 -46px;
}
.nav .home#current a {
	width: 103px;
	background: url(/images/navigation.png) no-repeat 0 -23px;
}
.nav .approach a:link {
	width: 93px;
	background: url(/images/navigation.png) no-repeat -103px 0;
}
.nav .approach a:visited {
	width: 93px;
	background: url(/images/navigation.png) no-repeat -103px 0;
}
.nav .approach a:hover {
	width: 93px;
	background: url(/images/navigation.png) no-repeat -103px -23px;
}
.nav .approach a:active {
	width: 93px;
	background: url(/images/navigation.png) no-repeat -103px -46px;
}
.nav .approach#current a {
	width: 93px;
	background: url(/images/navigation.png) no-repeat -103px -23px;
}
.nav .team a:link {
	width: 66px;
	background: url(/images/navigation.png) no-repeat -196px 0;
}
.nav .team a:visited {
	width: 66px;
	background: url(/images/navigation.png) no-repeat -196px 0;
}
.nav .team a:hover {
	width: 66px;
	background: url(/images/navigation.png) no-repeat -196px -23px;
}
.nav .team a:active {
	width: 66px;
	background: url(/images/navigation.png) no-repeat -196px -46px;
}
.nav #current.team #team_current {
	width: 66px;
	background: url(/images/navigation.png) no-repeat -196px -23px;
}
.nav .team:hover a {
	width: 66px;
	background: url(/images/navigation.png) no-repeat -196px -23px;
}
.nav .specialties a:link {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -262px 0;
}
.nav .specialties a:visited {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -262px 0;
}
.nav .specialties a:hover {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -262px -23px;
}
.nav .specialties a:active {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -262px -46px;
}
.nav .specialties#current a {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -262px -23px;
}
.nav .press a:link {
	width: 81px;
	background: url(/images/navigation.png) no-repeat -338px 0;
}
.nav .press a:visited {
	width: 81px;
	background: url(/images/navigation.png) no-repeat -338px 0;
}
.nav .press a:hover {
	width: 81px;
	background: url(/images/navigation.png) no-repeat -338px -23px;
}
.nav .press a:active {
	width: 81px;
	background: url(/images/navigation.png) no-repeat -338px -46px;
}
.nav .press#current #drop {
	width: 81px;
	background: url(/images/navigation.png) no-repeat -338px -23px;
}
.nav .press:hover a {
	width: 81px;
	background: url(/images/navigation.png) no-repeat -338px -23px;
}
.nav .contact a:link {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -419px 0;
}
.nav .contact a:visited {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -419px 0;
}
.nav .contact a:hover {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -419px -23px;
}
.nav .contact a:active {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -419px -46px;
}
.nav .contact#current a {
	width: 77px;
	background: url(/images/navigation.png) no-repeat -419px -23px;
}

.nav .media_nav a:link, #side_nav .media_nav a:link {
	width: 80px;
	background: url(/images/nav_drop.png) no-repeat 0px -12px;
}
.nav .media_nav a:visited, #side_nav .media_nav a:visited {
	width: 80px;
	background: url(/images/nav_drop.png) no-repeat 0px -12px;
}
.nav .media_nav a:hover, #side_nav .media_nav a:hover {
	width: 80px;
	background: url(/images/nav_drop.png) no-repeat 0px -12px;
}
.nav .media_nav a:active, #side_nav .media_nav a:active {
	width: 80px;
	background: url(/images/nav_drop.png) no-repeat 0px -36px;
}

.nav .news_nav a:link, #side_nav .news_nav a:link {
	background: url(/images/nav_drop.png) no-repeat 0px 0;
}
.nav .news_nav a:visited, #side_nav .news_nav a:visited {

	background: url(/images/nav_drop.png) no-repeat 0px 0;
}
.nav .news_nav a:hover, #side_nav .news_nav a:hover {

	background: url(/images/nav_drop.png) no-repeat 0px 0;
}
.nav .news_nav a:active, #side_nav .news_nav a:active {

	background: url(/images/nav_drop.png) no-repeat 0px -24px;
}

.nav .published_nav a:link, #side_nav .published_nav a:link {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -16px;
}
.nav .published_nav a:visited, #side_nav .published_nav a:visited {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -16px;
}
.nav .published_nav a:hover, #side_nav .published_nav a:hover {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -16px;
}
.nav .published_nav a:active, #side_nav .published_nav a:active {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -80px;
}

.nav .press_nav a:link, #side_nav .press_nav a:link {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -32px;
}
.nav .press_nav a:visited, #side_nav .press_nav a:visited {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -32px;
}
.nav .press_nav a:hover, #side_nav .press_nav a:hover {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -32px;
}
.nav .press_nav a:active, #side_nav .press_nav a:active {
	width: 76px;
	background: url(/images/nav_drop.png) no-repeat 0px -96px;
}

.nav .david_nav a:link, #side_nav .david_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -48px;
}
.nav .david_nav a:visited, #side_nav .david_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -48px;
}
.nav .david_nav a:hover, #side_nav .david_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -48px;
}
.nav .david_nav a:active, #side_nav .david_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -72px;
}

.nav .darryl_nav a:link, #side_nav .darryl_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -60px;
}
.nav .darryl_nav a:visited, #side_nav .darryl_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -60px;
}
.nav .darryl_nav a:hover, #side_nav .darryl_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -60px;
}
.nav .darryl_nav a:active, #side_nav .darryl_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -84px;
}

.nav .neil_nav a:link, #side_nav .neil_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -96px;
}
.nav .neil_nav a:visited, #side_nav .neil_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -96px;
}
.nav .neil_nav a:hover, #side_nav .neil_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -96px;
}
.nav .neil_nav a:active, #side_nav .neil_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -120px;
}

.nav .harriet_nav a:link, #side_nav .harriet_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -108px;
}
.nav .harriet_nav a:visited, #side_nav .harriet_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -108px;
}
.nav .harriet_nav a:hover, #side_nav .harriet_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -108px;
}
.nav .harriet_nav a:active, #side_nav .harriet_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -132px;
}

.nav .tory_nav a:link, #side_nav .tory_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -144px;
}
.nav .tory_nav a:visited, #side_nav .tory_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -144px;
}
.nav .tory_nav a:hover, #side_nav .tory_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -144px;
}
.nav .tory_nav a:active, #side_nav .tory_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -168px;
}

.nav .anne_nav a:link, #side_nav .anne_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -156px;
}
.nav .anne_nav a:visited, #side_nav .anne_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -156px;
}
.nav .anne_nav a:hover, #side_nav .anne_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -156px;
}
.nav .anne_nav a:active, #side_nav .anne_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -180px;
}

.nav .ted_nav a:link, #side_nav .ted_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -192px;
}
.nav .ted_nav a:visited, #side_nav .ted_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -192px;
}
.nav .ted_nav a:hover, #side_nav .ted_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -192px;
}
.nav .ted_nav a:active, #side_nav .ted_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -216px;
}

.nav .laura_nav a:link, #side_nav .laura_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -204px;
}
.nav .laura_nav a:visited, #side_nav .laura_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -204px;
}
.nav .laura_nav a:hover, #side_nav .laura_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -204px;
}
.nav .laura_nav a:active, #side_nav .laura_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -228px;
}

.nav .adwoa_nav a:link, #side_nav .adwoa_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -240px;
}
.nav .adwoa_nav a:visited, #side_nav .adwoa_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -240px;
}
.nav .adwoa_nav a:hover, #side_nav .adwoa_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -240px;
}
.nav .adwoa_nav a:active, #side_nav .adwoa_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -264px;
}

.nav .marcus_nav a:link, #side_nav .marcus_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -367px;
}
.nav .marcus_nav a:visited, #side_nav .marcus_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -367px;
}
.nav .marcus_nav a:hover, #side_nav .marcus_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -367px;
}
.nav .marcus_nav a:active, #side_nav .marcus_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -355px;
}
	
.nav .jiayin_nav a:link, #side_nav .jiayin_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -391px;
}
.nav .jiayin_nav a:visited, #side_nav .jiayin_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -391px;
}
.nav .jiayin_nav a:hover, #side_nav .jiayin_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -391px;
}
.nav .jiayin_nav a:active, #side_nav .jiayin_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -379px;
}		

.nav .davids_nav a:link, #side_nav .davids_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -439px;
}
.nav .davids_nav a:visited, #side_nav .davids_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -439px;
}
.nav .davids_nav a:hover, #side_nav .davids_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -439px;
}
.nav .davids_nav a:active, #side_nav .davids_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -427px;
}

.nav .nick_nav a:link, #side_nav .nick_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -415px;
}
.nav .nick_nav a:visited, #side_nav .nick_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -415px;
}
.nav .nick_nav a:hover, #side_nav .nick_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -415px;
}
.nav .nick_nav a:active, #side_nav .nick_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -403px;
}		

.nav .john_nav a:link, #side_nav .john_nav a:link {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -426px;
}
.nav .john_nav a:visited, #side_nav .john_nav a:visited {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -426px;
}
.nav .john_nav a:hover, #side_nav .john_nav a:hover {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -426px;
}
.nav .john_nav a:active, #side_nav .john_nav a:active {
	width: 87px;
	background: url(/images/nav_drop.png) no-repeat 0px -437px;
}


			
.nav .subnav li:hover,
#side_nav li:hover {
	background: url(/images/current.png) no-repeat 0px -11px;;
}
#team #side_nav li,
#press #side_nav li,
#media #side_nav li {
	padding-left: 15px;
}	
#team #side_nav #current {
	background: url(/images/current.png) no-repeat 0px -11px;
}
#press #side_nav #current {	
	background: url(/images/current.png) no-repeat 0px -11px;
}
#media #side_nav #current {
	background: url(/images/current.png) no-repeat 0px -11px;
}
#side_nav a {
	display: block;
	text-indent: -9999px;
	height: 9px;
	margin: 7px 0;
}
#side_nav h4 {
	text-indent: -9999px;
	padding-top : 0px;
	border-top: 1px solid #ccc;
}
#side_nav ul {
	padding-left: 10px;
	z-index: 300;
}

/* --------- UI ---------------------------------- */
.more {
	text-transform: uppercase;
	font-size: .7em;
	width: 70px;
	height: 16px;
	display: block;
	float: right;
	padding-left: 15px;
	margin-top: 15px;
}
.more:link {
	background: url(/images/read_more.png) no-repeat 0 -13px;
}
.more:visited {
	background: url(/images/read_more.png) no-repeat 0 -13px;
}
.more:hover {
	background: url(/images/read_more.png) no-repeat 0px 1px;
}
.more:active {
	background: url(/images/read_more.png) no-repeat 0 2px;
}
#approach aside#paper_download {
	position: absolute;
	left: 50px;
	top: 400px;	
}
#approach aside#paper_download span {
	font-size: .8em;	
	display: block;
	width: 200px; 	
	margin: 10px 2px;
	line-height: 16px;	
}

#approach aside#paper_download img {
	width: 150px; 
	height: 194px;
}
#approach aside#paper_download a.img {
	border: 1px solid #ccc;
	padding: 0;
	position: relative;
	top: 0;
	left: 0;	
	margin: 2px;
	display: block;
	width: 150px; 
	height: 194px;	
}
#approach aside#paper_download a:first-child:hover {
	box-shadow: 0 0 2px 3px #f1f1f1;
}
#approach aside#paper_download a:last-child em {
	font-style: italic;
}

/* --------- LAYOUT ---------------------------------- */
#main.section {
	width: 575px;
	height: auto;
	margin-left: 285px;
}
.aside {
	margin-top: 0px;
	width: 200px;
	padding-right: 85px;
	height: auto;
	position: absolute;
	top: 378px;
	font-size: .714em;
	line-height: 16px;
	z-index: 1000;
}
.footer {
	width: 100%;
	margin-top: 25px;
	border-top: 1px solid #ccc;
	padding: 15px 0;
	font-size: .714em;
	position: relative;
	overflow: hidden;
}
.footer h3 {
	position: absolute;
	left: -9999px;
}
.footer h4 {
	color: #4C719B;
}
.footer:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
.footer #locations:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
	
.footer #locations li {
	float: left;
	padding-right: 30px;
}
.footer #locations {
	float: left;
	width: 285px;
}
.footer #practice_areas h4 {
	margin-left: 15px;
}
.footer #practice_areas {
	float: left;
	padding-left: 15px;
	width: 285px;
	border-left: 1px solid #ccc;
}
.footer #practice_areas li {
	margin-left: 15px;
	list-style-image: url(/images/bullet.png);
}
.footer cite { 
	position: absolute;
	bottom: 0px;
	right: 0;
}
.footer cite a { 
	color: #B3B3B3;
}
.footer cite a:link {
	color: #b3b3b3;
	text-decoration: none;
}
.footer cite a:visited {
	color: #b3b3b3;
	text-decoration: none;
}
.footer cite a:hover {
	color: #003D79;
	text-decoration: underline;
}
.footer cite a:active {
	color: #4C719B;
	text-decoration: none;
} 

/* --------- home ------------------ */
#home {
	background: #fff url(/images/practices_bg.png) no-repeat 50px 50px;
}
#home #main.section {
	overflow: hidden;
	font-size: .857em;
	min-height: 610px;
	margin-bottom: 25px;
}
#home #main.section h2 {
	height: 17px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 100% 0;
}
#home .aside {
	top: 438px;
}
#home #main.section img {
	padding: 15px;
}
#home #main.section div {
	width: 275px;
	float: left;
}
#home #main.section div p {
	margin-bottom: 15px;
}
#home #main.section .l_col {
	margin-right: 25px;
}

#home #press_box h3 {
	height: 18px;
	width: 115px;
	margin-bottom: 15px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0px -17px;
}
#home #press_box h4 {
padding-top : 15px;
border-top: 1px solid #ccc;
border-bottom: none;
font-weight: bold;
}
#home #press_box cite {
	margin: 15px 0 0 0;
	display: block;
	font-style: italic;
}
#home #press_box cite .title {
	margin-bottom: 15px;
}
#home #press_box cite span {
	display: block;
	font-style: italic;
}
#home .article p {
	margin-top : 15px;
}

#slideshow {
 border: 1px solid #B3B3B3;
 height: 261px;
 margin: 33px 0 25px 0;
 position: relative;	
}
#slideshow img {
	position:absolute;
    top:0;
    left:0;
    z-index:8;
	opacity:0.0;
}
#slideshow img.active {
    z-index:10;
	opacity:1.0;
	padding-top: 3px;
}
#slideshow img.last-active {
    z-index:9;
}

#error {
	background: #fff url(/images/practices_bg.png) no-repeat 50px 50px;
}
#error #main.section {
	overflow: hidden;
	font-size: .857em;
	min-height: 570px;
	margin-bottom: 25px;
}
#error #main.section h2 {
	height: 17px;
	text-indent: -9999px;
/*	background: url(/images/headers.png) no-repeat 100% 0;*/
}
#error .aside {
	top: 438px;
}
#error #main.section img {
	padding: 15px;
}
#error #main.section div {
	margin-top: 100px;
	width: 475px;
	float: left;
}
#error #main.section div p {
	margin-bottom: 15px;
}

/* --------- our team ------------------ */
#team {
	background: #fff url(/images/team_bg.png) no-repeat 50px 50px;
}
#team #main.section h2 {
	height: 17px;
	text-indent: -9999px;
}
#team #main.section:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
#team .lineup:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
#team .lineup {
	margin-top: 33px;
/*	width: 460px;*/	width: 575px;
	text-align: center;
	float: right;
}
#team .lineup li:hover {
	opacity: .9;
}
#team .lineup li {
	cursor: pointer;
	background: #4C719B;
	text-align: center;
	width: 105px;
	height: 200px;
	display: block;
	float: left;
	position: relative;
	margin: 0 0 10px 10px;
}
#team .lineup li h4 {
	color: #fff;
	position: absolute;
	font-size: .714em;
	width: 105px;
	text-align: center;
	bottom: 0;
	left: 0;
	background: rgba(0, 61, 121, 0.8);
}
#team .lineup li h4 a {
	color: #fff;
	text-decoration: none;
}
#team .lineup .empty {
	background: #fff;
}
/*#team .lineup#li_bottom {
	position: relative;
	margin-top: 15px;
	left: -115px;
	width: 690px;
}*/

/* --------- bios ------------------ */
#team #main.section {
	position: relative;
}
#team #main.section .highlight h2 {
	width: 200px;
	margin-bottom: 25px;
	padding-left: 395px;
	font-size: 1.5em;
	height: 17px;
	text-indent: 0px;
	font-weight: normal;
}
#team .highlight .photo {
	position: absolute;
	top: 0;
	bottom: 0;
}
#team .highlight {
	position: relative;
	color:  #fff;
	padding: 30px 0;
	margin: 50px 0 33px 0;
	width: 575px;
	height: 270px;
	background: #003D79;
}
#team .highlight a:link {
	color: #fff;
	text-decoration: underline;
}
#team .highlight a:hover {
	color: #daedff;
	text-decoration: underline;
}
#team .highlight a:visited {
	color: #fff;
	text-decoration: underline;
}
#team .highlight ul {
	width: 200px;
	padding-left: 395px;
	font-size: .786em;
}
#team .highlight ul li {
	padding: 5px 0;
}
#team .highlight .inquire {
	margin-top: 160px;
}
#team .control {
	position: absolute;
	top: -23px;
	right: -5px;


}
#team .control p {
	float: left;
	margin: 0px 10px 5px 0px;
	font-size: .744em;
	line-height: 17px;
	vertical-align: middle;
}

#team .control .next {
	display: block;
	padding-right: 15px;
	background: url(/images/bio_nav.png) no-repeat 100% -13px;
}
#team .control .prev {
	display: block;
	padding-left: 15px;
	background: url(/images/bio_nav.png) no-repeat 0 0px;
}
#team .control a {
	text-decoration: none;
}
#team .control .next:hover {
		background: url(/images/bio_nav.png) no-repeat 100% -42px;
}
#team .control .prev:hover {
		background: url(/images/bio_nav.png) no-repeat 0 -29px;
}
#team .bio {
	width: 360px;
	padding-right: 15px;
	font-size: .856em;
	float: left;
}
#team .bio p,
#team .extra p {
	margin-bottom: 15px;
}
#team .extra {
	color: #003D79;
	width: 170px;
	font-size: .856em;	
	float: left;
	padding: 0 15px;
}
#team .extra img {
	margin-bottom: 15px;
}

/* --------- approach ------------------ */
#approach {
	position: relative;
	background: #fff url(/images/approach_bg.png) no-repeat 50px 50px;
}
#approach #main.section:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
	
#approach #main.section h2 {
	margin: 50px 0 15px 0;
	width: 345px;
	height: 45px;
	font-weight: normal;
	background: url(/images/approach_headline.png) 0 0;
	text-indent: -9999px;
}	
#approach #main.section img {
	position: relative;
	top: -60px;
	padding: 15px;
	border: 1px solid #B3B3B3;
	float: right;
	width: 170px;
	height: 443px;
}
#approach #main.section div {
	width: 345px;
	font-size: .856em;
}
#approach #main.section p {
	margin-bottom: 15px;
}

/* --------- specialties------------------ */
#specialties {
	background: #fff url(/images/specialties_bg.png) no-repeat 50px 50px;
}
#specialties #main.section:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
	
#specialties #main.section h2 {
	margin: 50px 0 15px 0;
	width: 345px;
	height: 45px;
	font-weight: normal;
	background: url(/images/approach_headline.png) 0 0;
	text-indent: -9999px;
}	
#specialties #main.section img {
	position: relative;
	top: -60px;
	padding: 15px;
	border: 1px solid #B3B3B3;
	float: right;
}
#specialties #main.section div {
	width: 345px;
	font-size: .856em;
}
#specialties #main.section p {
	margin: 10px 0 15px 0;
}
#specialties #main.section h4 {
	font-weight: bold;
}

#specialties .practice_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -148px;
}
#specialties .functional_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -129px;
}
#specialties .markets_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -110px;
}

/* --------- press ------------------ */
#press {
	background: #fff url(/images/press_bg.png) no-repeat 50px 50px;
}
#press #main.section:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
	
#press #main.section h2 {
	margin: 50px 0 15px 0;
	width: 345px;
	height: 68px;
	font-weight: normal;
	background: url(/images/press_headline.png) 0 0;
	text-indent: -9999px;
}	
#press #main.section img {
	position: relative;
	top: -80px;
	padding: 15px;
	border: 1px solid #B3B3B3;
	float: right;
	width: 170px;
	/*height: 443px;*/
}
#press #main.section div {
	width: 345px;
	font-size: .856em;
	min-height: 250px;
}
#press #main.section p {
	margin-bottom: 0px;
}
#press #main.section h3 {
	margin-bottom: 5px;
}
#press #main.section h4 {
	font-weight: bold;
}

#press #main.section .divide {
	display: block;
	line-height: 16px;
	text-transform: uppercase;
	font-size: .7em;
	margin: 5px 0 25px 0;
	padding-left: 15px;
	vertical-align: baseline;
}

#press #main.section .divide:link {
		background: url(/images/read_more.png) no-repeat 0px -13px;
}
#press #main.section .divide:visited {
		background: url(/images/read_more.png) no-repeat 0px -13px;
}
#press #main.section .divide:hover {
		background: url(/images/read_more.png) no-repeat 0px 2px;
}
#press #main.section .divide:active {
		background: url(/images/read_more.png) no-repeat 0px 2px;
}
#press #main.section .divide_last {
	text-transform: uppercase;
	font-size: .714em;
	font-size: .856em;
	padding: 5px 0;
	margin-bottom: 25px;
}
#press #main.section  {
	padding: 0px 0;
}
#press #main.section li {
	padding-bottom: 15px;
}
#press #main.section cite {
	display: block;
	padding-top: 5px;
	font-style: italic;
}
#press cite em {
	font-style: italic;
	font-weight: bold;
}
#press .news_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -56px;
}
#press .press_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -37px;
}
#press .published_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -73px;
}
#press .media_head {
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -92px;
}

#press #main.section ol {
	margin-top: 15px;
}
#press #submit { 
	margin-left: 10px;
	width: 130px;
	cursor: pointer;
	vertical-align: middle;
	height: 20px;
	background: #003D79;
	color: #fff;
	border: none;
}
#press #submit:hover {
	background: #4C719B;
}

#press #main.section .article h3 {
	color: #4C719B; 
	font-size: 1.143em;
}
#press #main.section .article {
	float: left;
	width: 345px;
	margin-top: 50px;
	position: relative;
}
#press #main.section .article div {
	font-size: 1em;
} 
#press #main.section .article p {
	margin-bottom: 10px;
}
#press #main.section div.info {
	float: right;
	width: 208px;
	margin-top: 50px;
	margin-left: 20px;
}
#press #main.section div.box {
width: 178px;
font-size: inherit;
padding: 15px;
border: 1px solid #dbdbdb;	
}


#press #main.section .info li {
	padding: 0px 0;
}
#press #main.section .info .pdf a {
	display: block;
	padding-left: 17px;
	line-height: 18px;
	background: url(../images/pdf_icon.png) no-repeat 0 0;
}
#press #main.section .info .pdf a:link {
	background: url(../images/pdf_icon.png) no-repeat 0 0;
}
#press #main.section .info .pdf a:visited {
	background: url(../images/pdf_icon.png) no-repeat 0 0;
}
#press #main.section .info .pdf a:hover {
	background: url(../images/pdf_icon.png) no-repeat 0 -17px;
}
#press #main.section .info .pdf {
	margin-top: 15px;
}
#press #main.section .view .photo {
	margin: 0;
}
#press #main.section .info img {
	
	border: 1px solid #e4e4e4;
	float: none;
	padding: 0;
	margin: 25px 0 0 0;
	top: 0;
}

/* --------- media ------------------ */
#media {
	background: #fff url(/images/press_bg.png) no-repeat 50px 50px;
}
#media #main.section:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
	
#media #main.section h2 {
	margin: 50px 0 15px 0;
	width: 345px;
	height: 68px;
	font-weight: normal;
	background: url(/images/press_headline.png) 0 0;
	text-indent: -9999px;
}
#media .media_head {
	margin-bottom: 25px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -92px;
}
#media #main.section p {
	margin-bottom: 25px;
	font-size: .856em;
	margin-bottom: 15px;
}
#media #main.section h5 {
	padding: 0;
	margin-top: 5px;
	font-size: .714em;
}

#media .headshots:after {
    content: ".";
    display: block;
    height: 0;
    clear: both;
    visibility: hidden;
}
#media .headshots li {
	width: 153px;
	height: 190px;
	float: left;
	margin: 0 20px 45px 0;
	position: relative;
}
#media .headshots li img {
	border: none;
	padding: 0;
	margin: 0;
}
#media .headshots .download {
	position: absolute;
	height: 15px;
	top: 172px;
	width: 153px;
}
#media .headshots .download a {
	background: #003d79;
	background: rgba(0, 61, 121, 0.8);
	display: inline-block;
	color: #ffffff;
	text-align: center;
	width: 153px;
}
#media .headshots .download a:link {
	background: rgba(0, 61, 121, 0.8);
}
#media .headshots .download a:visited {
	background: rgba(0, 61, 121, 0.8);
}
#media .headshots .download a:hover {
	background: rgba(123, 166, 214, 0.8);
}
#media .headshots .download a:active {
	background: rgba(123, 166, 214, 0.8);
}

/* --------- contact ------------------ */
#contact {
	background: #fff url(/images/contact_bg.png) no-repeat 50px 50px;
}
#contact .l_col {
	float: left;
	width: 345px;
}
#contact .r_col {
	float: right;
	font-size: .856em;
	margin-bottom: 25px;
}
#contact .r_col ul {
	margin-bottom: 20px;
}
#contact .intro { 
	font-size: .856em;
	margin-bottom: 15px;
}
#contact label {
	color: #666;
	font-size: .856em;
	display: block;
	margin-bottom: 3px;
}
#contact .notice {
	padding-top: 20px;
	clear: both;
	float: none;
	font-size: .856em;
	margin-left: 285px;
	width: 560px;
}
#contact input, 
#contact textarea {
	width: 345px;
	margin-bottom: 15px;
	border: 1px solid #ccc;
}
#contact input {
	height: 20px;
}
#contact textarea {
	height: 150px;
}
#contact input:focus, 
#contact textarea:focus {
	background: #e5e5e5;
}
#contact form {
	margin-bottom: 15px;
}
#contact #submit { 
	width: 50%;
	cursor: pointer;
	vertical-align: middle;
	height: 25px;
	background: #003D79;
	color: #fff;
	border: none;
}
#contact #submit:hover {
	background: #4C719B;
}

#contact strong {
	font-weight: bold;
}
#contact .tel {
	padding-bottom: 5px;
	margin-bottom: 5px;
/*	border-bottom: 1px solid #ccc;*/
}
#contact #main.section .img {

	margin: 50px 0 25px 0;
	padding: 15px;
	border: 1px solid #B3B3B3;
}
#contact .ny_head {
	height: 18px;
	margin-bottom: 7px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -110px;
}
#contact .lon_head {
	height: 18px;
	margin-bottom: 7px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -128px;
}
#contact .bos_head {
	height: 18px;
	margin-bottom: 7px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -147px;
}
#contact .la_head {
	height: 18px;
	margin-bottom: 7px;
	text-indent: -9999px;
	background: url(/images/headers.png) no-repeat 0 -168px;
}
#contact .error {
	font-size: .856em;
	margin: 10px 0;
	background: #ffe7e7;
	border: 1px solid #f2bfbf;
	padding: 10px;
}
#contact .error h4 {
	font-weight: bold;
	margin-bottom: 5px;
}