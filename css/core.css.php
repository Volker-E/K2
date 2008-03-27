<?php require('gzip-header-css.php'); ?>

/* This file contains the core CSS elements for K2 */

/*- Page Structure */

* {
	padding: 0;
	margin: 0;
	}

img {
	border: 0;
	}

body {
	font: 62.5% 'Lucida Grande', Verdana, Arial, Sans-Serif; /* Resets 1em to 10px */
	color: #444;
	background: #EDEDED;
	text-align: center;
	}

body.lang-ar,
body.lang-fa,
body.lang-he,
body.lang-hi,
body.lang-km,
body.lang-ko,
body.lang-ja,
body.lang-th,
body.lang-zh {
	font-size: 75%; /* Resets 1em to 12px */
	}

#page {
	background: white;
	text-align: left;
	margin: 0 auto;
	padding: 20px 0 10px;
	position: relative;
	border: 1px solid #ddd;
	border-top: none;
	clear: both;
	}

.columns-one #page {
	width: 560px;
	}

.columns-two #page {
	width: 780px;
	}

.columns-three #page {
	width: 950px;
	}

#header {
	padding: 0;
	margin: 0;
	position: relative;
	height: 200px;
	background: #3371A3;
	background-position: top right;
	}

.content {
	padding: 0 20px;
	}

#primary {
	position: relative;
	float: left;
	width: 500px;
	padding: 10px;
	}

* html #primary {
	display: inline;
	}

.columns-three #primary {
	padding: 10px;
	}

.columns-one .secondary {
	width: 240px;
	border-top: 1px solid #eee;
	}

.columns-three #sidebar-2 {
	width: 150px;
	}

.secondary {
	width: 200px;
	float: left;
	font-size: 1em;
	line-height: 1.5em;
	color: #666;
	position: relative;
	padding: 0 10px;
	overflow: hidden;
	}

.comments {
	text-align: left;
	padding: 30px 0 0;
	position: relative;
	}

/*- Main Menu in Header */

ul.menu {
	margin: 0;
	padding: 0;
	position: absolute;
	bottom: 0;
	left: 20px;
	width: 90%;
	}

ul.menu li {
	display: inline;
	margin: 0;
	}

ul.menu,
ul.menu li a {
	padding: 5px 15px 6px;
	}

ul.menu li a {
	font-size: 1em;
	color: white;
	margin: 0;
	}

ul.menu li a:hover {
	background: #333;
	color: #eee !important;
	text-decoration: none;
	}

ul.menu li.current_page_item a,
ul.menu li.current_page_item a:hover {
	color: #333 !important;
	background: white;
	text-decoration: none;
	}

/*- Sidebar Subpages Menu */

.sb-pagemenu ul {
	margin-left: 10px;
	}

.sb-pagemenu ul ul {
	margin-top: 2px;
	}

.sb-pagemenu ul ul .page_item {
	margin-left: 10px;
	padding: 0;
	}

.sb-pagemenu .current_page_item {
	}

/*- Headings */

h1, h2, h3, h4 {
	font-family: 'Trebuchet MS', Verdana, Sans-Serif;
	}

h1 { /* H1 is the title in the header */
	font-size: 3em;
	font-weight: bold;
	letter-spacing: -1px;
	margin: 0;
	padding: 75px 40px 0;
	}

h1, h1 a, h1 a:hover, h1 a:visited,
#header .description {
	text-decoration: none;
	color: white;
	}

h1 a:hover {
	text-decoration: underline;
	}

#header .description { /* Description in header */
	font-size: 1em;
	margin: 0 40px;
	}

h2 { /* H2 is what kind of page you are on. Eg. 'Monthly Archive'. */
	text-align: center;
	font-size: 2.5em;
	font-weight: bold;
	letter-spacing: -1px;
	}

#rollingarchives.emptypage {
	display: none;
	}

.page-head {
	margin: 20px 0;
	}

.archivepages {
	color: #999;
	display: block;
	font-size: .45em;
	font-weight: normal;
	letter-spacing: 0;
	text-transform: lowercase;
	margin-top: 2px;
	}

.secondary h4 { /* Secondary H4 is sidebar headlines */
	font-size: 1.5em;
	font-weight: normal;
	padding: 0;
	display: block;
	margin-bottom: 5px;
	}

#primary h3, #primary h4, .single #primary .k2-asides h3 { /* H3 is entry headlines. H4 is comments and replyform headlines */
	font-size: 2.4em;
	font-weight: normal;
	letter-spacing: -1px;
	}

#primary .entry-content h3 {
	font-size: 1.8em;
	font-weight: normal;
	margin-top: 25px;
	}

#primary .entry-content h4 {
	font-size: 1.5em;
	font-weight: normal;
	margin-top: 25px;
	}

#primary .k2-asides h3 {
	font-size: 1.6em;
	font-weight: normal;
	}

.entry-head {
	margin-top: 10px;
	}

body.page .entry-content h3 {
	font-size: 1.7em;
	display: block;
	padding: 15px 0 0;
	}

body.page .entry-content h4 {
	font-size: 1.5em;
	display: block;
	padding: 15px 0 0;
	}

.secondary div {
	margin: 20px 0 0;
	padding: 0;
	position: relative;
	}

.skiplink {
	display: none;
	}

#primary .metalink a, #primary .metalink a:visited, /* The Metalink class takes care of the comments, edit, rss and trackback links next to the titles */
.secondary .metalink a, .secondary .metalink a:visited,
.secondary span a, .secondary span a:visited {
	color: #999;
	font-weight: normal;
	}

#primary .hentry .entry-head .metalink {
	font-size: 1.8em;
	letter-spacing: -1px;
	text-transform: lowercase;
	margin-left: 15px;
	}

#primary .k2-asides .entry-head .metalink {
	font-size: 1.4em;
	}

.single #primary .k2-asides .entry-content {
	font-size: 1.5em;
	color: #999;
	}

.comment-meta {
	margin: 0 15px 0 0;
	float: none;
	}

.comment-login, .comment-welcomeback {
	margin-top: 15px;
	color: #777;
}

#comment-personaldetails {
	margin-top: 10px;
}

.feedicon { /* Next to Comment Section Headline */
	border: 0 !important;
	padding: 0 !important;
	}

.feedlink { /* On the sidebar */
	border: none;
	padding: 2px;
	padding-right: 20px;
	background: url('../images/feed.png') right center no-repeat;
	height: 16px;
	position: absolute;
	top: 0;
	right: 0;
	color: #777;
	}

.feedlink span {
	visibility: hidden;
	}

.feedlink:hover span {
	visibility: visible;
	}

.secondary .k2-asides {
	margin: 0;
	padding: 0 0 10px;
	word-spacing: -1px;
	}

.secondary .k2-asides p {
	display: inline;
	}

.secondary .k2-asides .metalink {
	padding-left: 0px;
	}

.secondary span a {
	margin-left: 10px;
	}

.page-head .entry-edit {
	position: absolute;
	right: 0;
	margin-top: -20px;
	}

.entry-edit a {
	border: none;
	padding: 2px;
	padding-left: 23px;
	background: url('../images/pencil.png') left center no-repeat;
	height: 16px;
	}

.comment-edit a {
	border: none;
	padding: 2px;
	padding-left: 23px;
	margin-left: 10px;
	background: url('../images/comment_edit.png') left center no-repeat;
	height: 16px;
	}

h2, h2 a, h2 a:visited,
h3, h3 a, h3 a:visited,
h4, h4 a, h4 a:visited {
	color: #444;
	}

h2, h2 a, h2 a:hover, h2 a:visited,
h3, h3 a, h3 a:hover, h3 a:visited,
h4, h4 a, h4 a:hover, h4 a:visited {
	text-decoration: none;
	}

.entry-meta { /* Time and category for blog entries */
	font-size: 1em;
	line-height: 1.6em;
	display: block;
	margin-top: 1px;
	color: #bbb;
	}

.entry-meta div {
	display: inline;
	}

.meta-start {
	padding: 2px 0 2px 20px ;
	background: url('../images/time.png') left top no-repeat;
	}

.entry-date abbr {
	border: 0;
	color: #777;
	}

.entry-author {
	display: none;
	}

.entry-author address {
	display: inline;
	font-style: normal;
	}

.entry-category {
	text-transform: lowercase;
	margin-right: 10px;
	}

.entry-meta a, .comment-meta a {
	color: #777;
	}

.commentslink {
	padding: 2px 0 2px 20px;
	background: url('../images/comment.png') left center no-repeat;
	margin-right: 10px;
	}

.quoter_comment {
	padding: 2px 0 2px 20px;
	background: url('../images/comment.png') left center no-repeat;
	margin-left: 5px;
	}

.entry-tags {
	display: block;
	margin: 2px 0;
	padding: 0 0 0 20px;
	background: url('../images/tag_blue.png') left center no-repeat;
	}

.entry-tags a {
	text-transform: lowercase;
	}

/*- Primary Contents */

.hentry {
	margin: 0;
	padding: 5px 0 15px;
	position: relative;
	}

.entry-content {
	font-size: 1.2em;
	line-height: 1.8em;
	text-align: justify;
	color: #444;
	}

.entry-content p,
.entry-content ul,
.entry-content ol,
.entry-content div,
.entry-content blockquote {
	margin: 13px 0;
	}

.k2-asides .entry-content p,
.k2-asides .entry-content ul,
.k2-asides .entry-content ol,
.k2-asides .entry-content div,
.k2-asides .entry-content blockquote {
	margin: 5px 0;
	}

/* Google Maps Support */
.entry-content .map div {
	margin: 0;
	}

.single .k2-asides .entry-content p,
.single .k2-asides .entry-content ul,
.single .k2-asides .entry-content ol,
.single .k2-asides .entry-content div,
.single .k2-asides .entry-content blockquote {
	margin: 13px 0;
	}

.metalinks {
	margin-top: 3px;
	}


.attachment img,
.attachment-thumbnail,
.entry-content .gallery img {
	padding: 3px;
	border: 1px solid #ccc;
	}

.attachment img:hover,
.attachment-thumbnail:hover,
.entry-content .gallery img:hover {
	padding: 2px;
	border: 2px solid #27d;
	}


/*- Comments */

.commentsrsslink {
	background: url('../images/feed.png') left top no-repeat;
	padding: 2px 0 2px 20px;
	margin-right: 10px;
	height: 16px;
	}

.trackbacklink {
	background: url('../images/arrow_refresh.png') left top no-repeat;
	padding: 2px 0 2px 20px;
	height: 16px;
	}

.commentsrsslink a, .trackbacklink a {
	color: #999;
	padding: 2px;
	}

.nopassword {
	text-align: center;
	}

#commentlist {
	margin: 0;
	padding: 10px 0 20px;
	position: relative;
	}

#commentlist li {
	margin: 10px 0 0;
	padding: 10px 10px 5px;
	list-style: none;
	}

#commentlist li .comment-content {
	padding: 10px 0;
	font-size: 1.2em;
	line-height: 1.8em;
	}

.comment-content p,
.comment-content ul,
.comment-content ol,
.comment-content div,
.comment-content blockquote {
	margin: 13px 0;
	}

#commentlist li .comment-meta {
	padding: 2px 0 2px 20px;
	background: url('../images/time.png') left center no-repeat;
	display: block;
	}

#commentlist li img {
	padding: 0;
	border: none;
	}

#commentlist li .gravatar {
	float: right;
	margin: -5px 0 0;
	}

#commentlist li .commentauthor {
	font-size: 1.5em;
	font-weight: bold;
	letter-spacing: -1px;
	}

#commentlist li .counter {
	display: none;
	font: normal 1.5em 'Century Gothic', 'Lucida Grande', Arial, Helvetica, Sans-Serif;
	color: #999;
	float: left;
	width: 35px;
	}

li.byuser {
	background: #f6f7f8;
	}

li.bypostauthor {
	background: #eee;
	}

li.bypostauthor blockquote {
	color: #333;
	background: url('../images/quote.png') no-repeat 10px 0;              
	}
	 
#pinglist {
	font-size: 1.2em;
	padding: 0;
	margin: 10px 0 10px;
	background: #f6f7f8;
	}

#pinglist li {
	margin-left: 40px;
	padding: 7px 0;
	list-style: none;
	}

#pinglist li small {
	font-size: 0.8em;
	display: block;
	}

#pinglist li .counter {
	display: none;
	}

#pinglist li span.favatar img {
	margin-left: -25px;
	border: none;
	padding: 0;
	float: left;
	}

#pinglist li img {
	padding: 0;
	border: none;
	}
	
#leavecomment, .comments #loading, #comments-closed-msg {
	text-align: center;
	margin: 30px 0 20px !important;
	color: #ddd;
	font-size: 2em;
	letter-spacing: -2px;
	}

.comments #loading {
	margin-top: 20px !important;
	}

#comments-closed-msg {
	margin-bottom: 40px !important;
	}

.comments #commenterror {
	display: none;
	line-height: 2.0;
	padding: 5px;
	color: #FF0000;
	background-color: #FFFF99;
}

.comments #commentload {
	display: none;
	padding-top: 3px;
	float: right;
	vertical-align: middle;
	height: 18px;
	width: 18px;
	background: url('../images/spinner.gif') center center no-repeat;
}

.comments form {
	clear: both;
	padding: 1px 0 10px;
	margin: 0;
	}

.comments input[type=text], .comments textarea {
	font: 1.2em 'Courier New', Courier, Monospace;
	padding: 3px;
	color: #777;
	}

input[type=text]:focus, textarea:focus {
	background: #fff;
	color: #333;
	border-color: #666;
	}

.comments form input[type=text] {
	width: 45%;
	margin: 5px 5px 1px 0;
	}

.comments textarea {
	width: 100%;
	margin: 10px 0;
	}

.comments form #submit {
	margin: 0;
	float: right;
	}

#footer {
	clear: both;
	margin: 0 auto;
	padding: 20px 0 40px;
	text-align: center;
	color: #777;
	}

#footer p {
	line-height: 1.6em;
	}

#footer a {
	color: #888;
	border-bottom: 1px solid #ccc;
	font-weight: bold;
	}

#footer a:hover {
	border: none;
	text-decoration: none;
	color: #000;
	}

/*- Links */

#primary a:hover, #primary a:visited:hover,
.secondary a:hover, .secondary a:visited:hover {
	text-decoration: underline;
	}

h2 a:hover, h2 span a:hover {
	color: #27d !important;
	}

a {
	color: #27d;
	text-decoration: none;
	}

.entry-content a:visited {
	color: #b41;
	}

/*- Various Tags and Classes */

.clear {
	clear: both;
	margin: 0;
	padding: 0;
	}

.center {
	text-align: center;
	}

.alignright {
	float: right;
	}
	
.alignleft {
	float: left
	}

img.center, img[align="center"] {
	display: block;
	margin-left: auto;
	margin-right: auto;
	}
	
img.alignright, img[align="right"] {
	padding: 4px;
	margin: 0 0 2px 7px;
	display: inline;
	}

img.alignleft, img[align="left"] {
	padding: 4px;
	margin: 0 7px 2px 0;
	display: inline;
	}
	
img.noborder {
	border: none !important;
	}

small {
	font-size: 0.9em;
	line-height: 1.5em;
	}

small, strike {
	color: #777;
	}
	
code {
	font: 1.1em 'Courier New', Courier, Monospace;
	}

blockquote {
	margin: 20px 0;
	padding: 0 20px 0 50px;
	color: #333;
	background: url('../images/quote.png') no-repeat 10px 0;
	border: none;
	}

hr {
	display: none;
	}

.navigation {
	text-align: center;
	margin: 10px 0;
	padding: 0;
	width: 100%;
	}

.comments .navigation {
	margin: 10px 0;
	}

.navigation .nav-previous,
.navigation .left {
	float: left;
	width: 50%;
	text-align: left;
	}

.navigation .nav-next,
.navigation .right {
	float: right;
	width: 50%;
	text-align: right;
	}

.navigation p {
	margin: 0;
	padding: 0;
	}

.navigation a {
	color: #999;
	}

.alert {
	background: #FFF6BF;
	border-top: 2px solid #FFD324;
	border-bottom: 2px solid #FFD324;
	text-align: center;
	margin: 10px auto;
	padding: 5px 20px;
	}

img.wp-smiley {
	border: none !important;
	padding: 0 0 0 5px !important;
	}

/*- Begin Lists */
.archive-list {
	list-style: none;
	margin: 10px 0 0 0 !important;
	padding-left: 0px !important;
	}

.archive-list li {
	display: block;
	float: left;
	margin: 0 10px 0 0 !important;
	padding: 2px 0 2px 10px !important;
	width: 150px;
	}

.archive-list li:hover {
	background-color: #EDEDED;
	}

.entry-content ol, .entry-content ul {
	padding: 0 0 0 35px;
	}

.entry-content ol li, .entry-content ul li {
	margin: 0 0 3px;
	padding: 0;
	}

.secondary div p {
	margin-top: 0.5em;
	}

.secondary ul, .secondary ol, .secondary div div {
	margin: 5px 0 0;
	padding-left: 0;
	}

.secondary ul ul, .secondary ol ol, secondary div div {
	margin: 0 0 0 10px;
	}
       
.secondary ul ul ul, .secondary ol ol ol, secondary div div div {
	margin: 0 0 0 20px;
	}


.secondary ol {
	margin-left: 15px;
	}

.secondary ul li, .secondary ol li {
	margin: 0;
	padding: 1px 0;
	}
	
.secondary ul li {
	list-style-type: none;
	list-style-image: none;
	}

ol li {
	list-style: decimal outside;
	}

.sb-links ul li {
	margin-top: 20px;
	}

.sb-links ul ul li {
	margin-top: 0;
	}

/*- Search Form and Livesearch */

#search {
	margin-top: 20px;
	}

#search h4 {
	display: none;
	}

#searchform {
	display: block;
	position: relative;
	height: 20px;
	}

input[type=text], textarea {
	color: #444;
	padding: 1px;
	margin: 0;
	}

#s {
	width: 79%;
	font-size: 1.1em;
	}

#s.livesearch {
	position: absolute;
	top: 0;
	width: 88%;
	}

#searchreset {
	position: absolute;
	right: 0px;
	height: 19px;
	width: 16px;
	background: url('../images/reset-fff.png') center center no-repeat;
	}

#searchload {
	position: absolute;
	right: 0;
	top: 0;
	height: 18px;
	width: 18px;
	background: url('../images/spinner.gif') center center no-repeat;
	}

.livesearchform input[type=submit] {
	margin: 0;
	}

#searchcontrols {
	text-align: center;
	padding: 1px;
	background: #ddd;
	}

#searchcontrols small {
	margin: 0;
	padding: 0;
	}

/*- Attachment */
.entry-content .attachment { 
	text-align: center; 
	}

/* CSS Beyond this point is for various supported plugins and not the 'core' K2 template */


/*-
	Links Module
*/

.sb-links h4 {
	display: none;
	}

.linkcat h4 {
	display: inline;
	}

.linkcat ul {
	margin-top: 7px !important;
	}




/*-
	Brian's Latest Comments
	http://meidell.dk/archives/2004/09/12/brians-latest-comments/
*/

#brians-latest-comments ul li span a, #brians-latest-comments ul li small a,
.sb-comments-blc ul li span a, .sb-comments-blc ul li small a {
	color: #999;
	font-weight: normal;
	word-spacing: -1px;
	}

#brians-latest-comments ul li,
.sb-comments-blc ul li {
	margin-bottom: 6px;
}

#brians-latest-comments ul li > a[title="Go to the comments of this entry"],
.sb-comments-blc ul li > a[title="Go to the comments of this entry"] {
	position: absolute;
	right:0;
	color: #999;
}

.activityentry {
	font-size: 1.1em;
	}

div#latest-comments small {
	display: block;
	margin: 0;
	font-weight: normal;
	line-height: 1.5em;
	}


/*-
	FlickrRSS
*/

.sb-flickr div {
	margin-top: 10px !important;
	}

.sb-flickr div img {
	padding: 5px;
}

.sb-flickr div a {
	}
	
.sb-flickr div a img {
	margin: 0px 5px;
}

/*
	Calendar Module
*/

#wp-calendar {
	width: 100%;
	}

#wp-calendar td {
	color: #ccc;
	}

#wp-calendar td, #wp-calendar th {
	text-align: center;
	padding: 2px 0;
	}

#wp-calendar a {
	display: block;
	}

#wp-calendar caption {
	font-size: 1.5em;
	font-weight: bold;
	padding: 10px;
	}

#wp-calendar #prev {
	text-align: left;
	}

#wp-calendar #next {
	text-align: right;
	}
	
#wp-calendar #today {
	background: #f3f3f3;
	}

/*
	Ultimate Tag Warrior
	K2 removes UTW's default tags for more default control.
*/

.localtags, .technoratitags {
	display: none;
	}

/*
	Contact Form
*/

.contactform {
	width: 100%; 
	position: relative;
	}

.contactleft {
	width: 15%; 
	text-align: right;
	clear: both; 
	float: left; 
	display: inline; 
	padding: 4px; 
	margin: 5px 0; 
	}

.contactright {
	width: 70%; 
	text-align: left;
	float: right; 
	display: inline; 
	padding: 4px; 
	margin: 5px 0; 
	}
	
.contacterror {
	border: 1px solid #ff0000;
	}

/* Noteworthy */

.category-noteworthy h3.entry-title {
	background: url('../images/heart.png') no-repeat right center;
	padding-right: 25px;
	display: inline;
}

.noteworthyLink { margin-left: 5px }


/* Tag Cloud Module */

.sb-wptagcloud ul {
	line-height: 2em;
	text-align: justify;
	}

.sb-wptagcloud li {
	display: inline;
	}

.sb-wptagcloud a {
	padding: 0 2px;
	white-space: nowrap;
	text-transform: lowercase;
	}
