<head>

<style type="text/css">

/* Navigation Style */

.dropdown{position:relative; width:100%; height:50px; border:1px solid #666666; font-size:14px; color:#ffffff; background-color:#000000}

/* Base Level Drop Down Menu */

.dropdown ul {padding:0; margin:0; list-style: none}

.dropdown ul li {float:left; position:relative}

.dropdown ul li a { border-right:1px solid #666666; padding:17px; display:block; text-decoration:none; color:#000; text-align:center; color:#fff}

.dropdown ul li a:hover {color:#ffffff; background:#232323}

/* Second Level Drop Down Menu */

.dropdown ul li ul {display: none}

.dropdown ul li:hover ul { font-size:13px; display:block; position:absolute; top:51px; min-width:150px; left:0}

.dropdown ul li:hover ul li a {display:block; background:#000; color:#ffffff; width:175px; text-align:left}

.dropdown ul li:hover ul li a:hover {background:#666666; color:#ffffff}

/* Third Level Drop Down Menu */

.dropdown ul li:hover ul li ul {display: none}

.dropdown ul li:hover ul li:hover ul { display:block; position:absolute; left:210px; top:0}

</style>
</head>

<body>
<p>
<div class="dropdown">
<ul>
	  <li><a href="#">Home</a></li>
	  <li><a href="#">About</a></li>
	  
	  <li><a href="#">Download</a>
		   <ul>
			     <li><a href="#">Anime</a></li>
			     <li><a href="#">Manga</a></li>
			     <li><a href="#">Games</a></li>
		  </ul>
	 </li>
	 
	  <li><a href="#">Linh tinh</a>
		    <ul>
				<li><a href="#">Anh</a>
					<ul>
				 		<li><a href="#">Wallpaper</a></li>
				 		<li><a href="#">Scene</a></li>
				 		<li><a href="#">Poster</a></li>
					</ul>
	  			</li>
    
  			</ul>
	 </li>
</ul>
</div>

</body>
