<h2>Föreläsning 10 - Att bygga en webbsida</h2>

<hr>

<p>Det finns ingen powerpoint till dagens föreläsning, men exempelsidan som vi byggde kan ni komma åt på olika sätt:</p>

<ul>
    <li>
        <a href="/lectures/10/Example/index.html">Ni kan surfa till den här</a>
    </li>
    <li>
        <a href="/lectures/10/ex.zip">Ni kan ladda ner hela webbsidan i en ZIP-fil här</a>
    </li>
    <li>
        Eller studera källkoden nedan
    </li>
</ul>


<h3>HTML</h3>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;meta charset=&quot;utf-8&quot;&gt;
		&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;
		&lt;title&gt;Exempelsida&lt;/title&gt;
		&lt;link href=&quot;https://fonts.googleapis.com/css?family=Montserrat&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;link href=&quot;style.css&quot; type=&quot;text/css&quot; rel=&quot;stylesheet&quot;&gt;
		&lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;header&gt;
			&lt;nav&gt;
				&lt;a href=&quot;index.html&quot; id=&quot;logo&quot;&gt;Star Wars&lt;/a&gt;
				&lt;ul id=&quot;menu&quot;&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;active&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Death star&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Hall of fame&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Connections&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Join us&lt;/a&gt;&lt;/li&gt;
					&lt;li&gt;
						&lt;input type=&quot;search&quot; name=&quot;query&quot; id=&quot;search-box&quot; placeholder=&quot;Search here...&quot;&gt;
					&lt;/li&gt;
				&lt;/ul&gt;
				&lt;a href=&quot;#&quot; id=&quot;menu-btn&quot;&gt;Meny&lt;/a&gt;
			&lt;/nav&gt;
		&lt;/header&gt;

		&lt;div id=&quot;jumbo&quot;&gt;
			&lt;article&gt;
				&lt;h1&gt;You don't believe in the Force, do you?&lt;/h1&gt;
				&lt;p&gt;A tremor in the Force. The last time I felt it was in the presence of my old master. I need your help, Luke. She needs your help. I'm getting too old for this sort of thing. I'm surprised you had the courage to take the responsibility yourself.&lt;/p&gt;
				&lt;a href=&quot;#&quot; id=&quot;join-us-btn&quot;&gt;Join us!&lt;/a&gt;
			&lt;/article&gt;
		&lt;/div&gt;

		&lt;article id=&quot;movies&quot;&gt;
			&lt;h2&gt;Movies&lt;/h2&gt;
			&lt;figure&gt;
				&lt;h3&gt;I. The phantom menace&lt;/h3&gt;
				&lt;img src=&quot;images/1.png&quot; alt=&quot;Episode 1&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;h3&gt;II. Attack of the clones&lt;/h3&gt;
				&lt;img src=&quot;images/2.png&quot; alt=&quot;Episode 2&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;h3&gt;III. Revenge of the sith&lt;/h3&gt;
				&lt;img src=&quot;images/3.png&quot; alt=&quot;Episode 3&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;h3&gt;IV. A new hope&lt;/h3&gt;
				&lt;img src=&quot;images/4.png&quot; alt=&quot;Episode 4&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;h3&gt;V. The empire strikes back&lt;/h3&gt;
				&lt;img src=&quot;images/5.png&quot; alt=&quot;Episode 5&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;h3&gt;VI. A new hope&lt;/h3&gt;
				&lt;img src=&quot;images/6.png&quot; alt=&quot;Episode 6&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
			&lt;figure&gt;
				&lt;h3&gt;VII. The force awakens&lt;/h3&gt;
				&lt;img src=&quot;images/7.png&quot; alt=&quot;Episode 7&quot;&gt;
				&lt;figcaption&gt;
					Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.
				&lt;/figcaption&gt;
			&lt;/figure&gt;
		&lt;/article&gt;

		&lt;footer&gt;
			&lt;article&gt;
				&lt;section id=&quot;links&quot;&gt;
					&lt;h4&gt;Links&lt;/h4&gt;
					&lt;ul&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Death Star&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Hall of fame&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Connections&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Join us&lt;/a&gt;&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/section&gt;
				&lt;section&gt;
					&lt;h4&gt;Official links&lt;/h4&gt;
					&lt;ul&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;starwars.com&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;deathstarproject.com&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;yodastinks.com&lt;/a&gt;&lt;/li&gt;
						&lt;li&gt;&lt;a href=&quot;#&quot;&gt;jointhedarksida.com&lt;/a&gt;&lt;/li&gt;
					&lt;/ul&gt;
				&lt;/section&gt;
				&lt;section&gt;
					&lt;h4&gt;Contact us&lt;/h4&gt;
					&lt;p&gt;Simply visit the death star&lt;/p&gt;
				&lt;/section&gt;
			&lt;/article&gt;
		&lt;/footer&gt;

	&lt;/body&gt;
&lt;/html&gt;
</code></pre>


<h3>CSS</h3>
<h4>style.css</h4>
<pre class="language-css line-numbers codepen" data-type="html"><code class="language-css line-numbers">
body{
	margin: 0px;
	background-image: url("images/brushed.png");
	font-family: 'Montserrat', sans-serif;
}

body > header{
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
	background: #45484d; /* Old browsers */
	background: -moz-linear-gradient(top,  #45484d 0%, #000000 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top,  #45484d 0%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom,  #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */

	height: 50px;
	line-height: 50px;
	position: fixed;
	top: 0px;
	left: 0px;
	right: 0px;
	box-shadow: 0 0 5px #666;
}

body > header > nav{
	max-width: 1200px;
	margin: auto;
	padding: 0 10px;
}

#menu{
	margin: 0px;
	padding: 0px;
	float: right;
}

#menu-btn{
	display: none;
}

#menu > li{
	float: left;
	list-style: none;
}

#menu > li > a{
	display: block;
	color: #eee;
	padding: 0 20px;
	text-decoration: none;
	transition: 0.5s all;
}

#menu > li > a:hover{
	background-color: #666;
}

#menu > li > a.active{
	background-color: #000;
}

#logo{
	font-size: 24px;
	color: #fff;
	font-style: bold;
	text-decoration: none;
	float: left;
}

#search-box{
	height: 30px;
	margin-top: 10px;
	margin-left: 20px;
	border: 0px;
	border-radius: 5px;
	width: 150px;
	padding-left: 10px;
	transition: 0.5s all;
}

#search-box.active{
	width: 250px;
}

#jumbo{
	width: 100%;
	height: 450px;
	background-image: url("images/starwars-fanart2.jpg");
	background-position: center;
	overflow: hidden;
}

#jumbo > article{
	width: 50%;
	padding: 20px;
	border-radius: 10px;
	margin: 125px auto 0px auto;
	background-color: rgba(255, 255, 255, 0.7);
	text-align: center;
}

#join-us-btn{
	width: 100px;
	text-align: center;
	padding: 10px;
	color: #000;
	text-decoration: none;
	margin: 10px auto 0px auto;
	display: block;
	box-shadow: 0 0 3px #999;
	background-color: #fff;
	transition: 0.5s all;
}

#join-us-btn:hover{
	background-color: #ccc;
}

#movies{
	max-width: 1200px;
	margin: 0 auto 30px auto;
	overflow: hidden;
	padding: 10px;
}

#movies  > h2{
	border-bottom: 2px solid #666;
	padding: 10px 0px;
}

#movies > figure{
	width: 23%;
	margin: 1%;
	float: left;
	background-color: #fff;
	box-shadow: 0 0 5px #999;
	overflow: hidden;
}

#movies > figure > h3{
	text-align: center;
	background-color: #000;
	color: #eee;
	margin: 0px;
	padding: 10px 0px;
	clear: both;
	font-size: 16px;
}

#movies > figure  > img{
	float: left;
	margin-right: 5px;
}

#movies > figure  > figcaption{
	font-size: 10px;
	padding: 10px;
}

body > footer{
	background-color: #000;
	box-shadow: 0 0 50px #666;
	clear: both;
	color: #eee;
	overflow: hidden;
}

body > footer > article{
	max-width: 1200px;
	margin: auto;
	padding: 10px;
}

body > footer > article  > section{
	width: calc(100%/3);
	float: left;
}

body > footer > article  > section a{
	color: #fff;
}

@media screen and (max-width: 600px){
	#menu{
		position: fixed;
		top: 49px;
		left: 0px;
		right: 0px;
		max-height: 0px;
		overflow: hidden;
		background-color: #000;
		box-shadow: 0 5px 5px #666;
		transition: 0.5s all;
	}

	#menu.show{
		max-height: 300px;
	}

	#menu > li{
		width: 100%;
		float: none;
	}

	#search-box, #search-box.active{
		width: 90%;
		margin: 10px 5%;
	}

	#menu-btn{
		display: block;
		float: right;
		color: #eee;
		text-decoration: none;
		padding: 0 10px;
	}

	#jumbo{
		height: 336px;
	}

	#jumbo > article{
		width: 100%;
		padding: 10px 0px;
		margin-top: 50px;
		border-radius: 0px;
	}

	#movies  > h2{
		text-align: center;
	}

	#movies > figure{
		width: 100%;
		margin-left: 0px;
		margin-right: 0px;
	}

	body > footer > article > section{
		width: 100%;
		text-align: center;
	}

	body > footer > article > section > ul{
		list-style: none;
		margin: 0px;
		padding: 0px;
	}
}
</code></pre>

<h3>JavaScript</h3>
<pre class="language-javascript line-numbers codepen" data-type="javascript"><code class="language-javascript line-numbers">
/*
	När sidan laddats klar körs funktionen "start"
*/
window.onload = start;

/*
	Funktionen start knyter händelserna
	- onfocus (när ett <input>-element är markerat)
	- onblur (när ett <input>-element blir avmarkerat)
	till funktionen "animateSearchBox", samt händelsen
	- onclick (när man klickar på ett element)
	till funktionen "showHideMenu"
*/
function start(){
	var searchBox = document.querySelector("#search-box"); // Letar upp elementet med id "search-box" och sparar det i variabeln "searchBox"
	searchBox.onfocus = animateSearchBox; // När elmenetet i searchBox blir i fokus körs funktionen "animateSearchBox"
	searchBox.onblur = animateSearchBox; // När elmenetet i searchBox blir ur fokus körs funktionen "animateSearchBox"

	var menuBtn = document.querySelector("#menu-btn"); // Letar upp elementet med id "menu-btn" och sparar det i variabeln "menuBtn"
	menuBtn.onclick = showHideMenu; // När elmenetet i menuBtn klickas på körs funktionen "showHideMenu"
}

/*
	Funktionen lägger till klassen "active" till elementet som triggade funktionen om denna klass ej finns på elmentet redan, annars (om elementet har klassen "active" tas klassen bort)
*/
function animateSearchBox(){
	if(this.className == "active"){
		this.className = "";
	}else{
		this.className = "active";
	}
}

/*
	Funktionen lägger till klassen "active" till elementet som triggade funktionen om denna klass ej finns på elmentet redan, annars (om elementet har klassen "active" tas klassen bort)
*/
function showHideMenu(){
	var menu = document.querySelector("#menu");
	if(menu.className == ""){
		menu.className = "show";
	}else{
		menu.className = "";
	}
}
</code></pre>
