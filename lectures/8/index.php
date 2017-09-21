<h2>Föreläsning 10 - Att bygga en webbsida</h2>

<hr>

<p>Det finns ingen powerpoint till dagens föreläsning, men exempelsidan som vi byggde kan ni komma åt på olika sätt:</p>

<ul>
    <li>
        <a href="/lectures/8/ex/index.html">Ni kan surfa till den här</a>
    </li>
    <li>
        <a href="/lectures/8/ex.zip">Ni kan ladda ner hela webbsidan i en ZIP-fil här</a>
    </li>
    <li>
        Eller studera källkoden nedan
    </li>
</ul>


<h3>HTML</h3>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
    &lt;!doctype html&gt;
    &lt;html&gt;
    	&lt;head&gt;
    		&lt;meta charset=&quot;utf-8&quot;&gt;
    		&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
    		&lt;title&gt;Star Wars&lt;/title&gt;
    		&lt;link href=&quot;https://fonts.googleapis.com/css?family=Montserrat&quot; rel=&quot;stylesheet&quot;&gt;
    		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    	&lt;/head&gt;

    	&lt;body&gt;
    		&lt;header&gt;
    			&lt;nav id=&quot;main-nav&quot;&gt;
    				&lt;a href=&quot;index.html&quot;&gt;Star Wars&lt;/a&gt;
    				&lt;a href=&quot;#&quot; id=&quot;show-menu&quot;&gt;Menu&lt;/a&gt;
    				&lt;ul&gt;
    					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Death star&lt;/a&gt;&lt;/li&gt;
    					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Hall of fame&lt;/a&gt;&lt;/li&gt;
    					&lt;li&gt;&lt;a href=&quot;#&quot;&gt;Join us&lt;/a&gt;&lt;/li&gt;
    					&lt;li&gt;&lt;input type=&quot;search&quot; placeholder=&quot;Search here...&quot;&gt;&lt;/li&gt;
    				&lt;/ul&gt;
    			&lt;/nav&gt;
    		&lt;/header&gt;
    		&lt;div id=&quot;jumbo&quot;&gt;
    			&lt;article&gt;
    				&lt;h1&gt;You don't believe in the Force, do you?&lt;/h1&gt;
    				&lt;p&gt;A tremor in the Force. The last time I felt it was in the presence of my old master. I need your help, Luke. She needs your help. I'm getting too old for this sort of thing. I'm surprised you had the courage to take the responsibility yourself.&lt;/p&gt;
    				&lt;a href=&quot;#&quot; id=&quot;join-us-btn&quot;&gt;Join us!&lt;/a&gt;
    			&lt;/article&gt;
    		&lt;/div&gt;

    		&lt;div class=&quot;br&quot;&gt;&lt;/div&gt;

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
    				&lt;section&gt;
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
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
    body {
    	margin: 0px;
    	font-family: 'Montserrat', sans-serif;
    	background-image: url("images/brushed.png");
    }

    body > header {
    	height: 50px;
    	line-height: 50px;
    	position: fixed;
    	top: 0;
    	left: 0;
    	right: 0;
    	box-shadow: 0 0 20px #000;

    	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
    	background: #45484d; /* Old browsers */
    	background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    }

    #main-nav {
    	max-width: 1200px;
    	margin: auto;
    	padding: 0 10px;
    }

    #main-nav > a {
    	float: left;
    	color: #eee;
    	text-decoration: none;
    }

    #main-nav > ul {
    	float: right;
    	list-style: none;
    	margin: 0px;
    	padding: 0px;
    }

    #main-nav > ul > li {
    	float: left;
    }

    #main-nav > ul > li > a{
    	padding: 0 20px;
    	display: block;
    	color: #eee;
    	text-decoration: none;
    	transition: all 0.5s;
    }

    #main-nav > ul > li > a:hover {
    	background-color: #000;
    }

    #main-nav > ul > li  > input{
    	width: 125px;
    	transition: all 0.5s;
    	border-radius: 5px;
    	border: 0px;
    	padding: 8px;
    	margin-left: 20px;
    }

    #main-nav > ul > li  > input:focus{
    	width: 250px;
    }

    #show-menu {
    	display: none;
    }

    #jumbo {
    	height: 450px;
    	width: 100%;
    	background-image: url("images/starwars-fanart2.jpg");
    	background-position: center;

    	display: flex;
    	align-items: center;
    	justify-content: center;
    }

    #jumbo > article {
    	width: 50%;
    	background-color: rgba(255, 255, 255, 0.8);
    	padding: 20px;
    	box-sizing: border-box;
    	border-radius: 10px;
    	text-align: center;
    }

    #join-us-btn {
    	width: 200px;
    	color: #333;
    	background-color: #eee;
    	height: 40px;
    	line-height: 40px;
    	display: block;
    	border: 2px #999 solid;
    	margin: auto;
    }

    .br {
    	height: 10px;
    	width: 100%;
    	background-color: #111;
    	box-shadow: 0 0 20px #000;
    }

    #movies {
    	max-width: 1200px;
    	margin: auto;
    	padding: 10px;

    	display: flex;
    	flex-wrap: wrap;
    	align-items: center;
    	justify-content: flex-start;
    }

    #movies > figure {
    	width: 23%;
    	margin: 2% 1%;
    	background-color: #fff;
    	box-shadow: 0 0 5px #333;
    }

    #movies > figure > h3{
    	background-color: #000;
    	color: #eee;
    	margin: 0px;
    	padding: 10px;
    }

    #movies > figure > img{
    	float: left;
    	margin-right: 5px;
    }

    #movies > figure > figcaption {
    	padding: 5px;
    	font-size: 12px;
    }

    #movies > h2 {
    	width: 100%;
    	border-bottom: 2px solid #000;
    	padding: 10px;
    }

    body > footer  {
    	background-color: #000;
    	box-shadow: 0 0 20px #000;
    	overflow: hidden;
    	margin-top: 20px;
    }

    body > footer  > article {
    	max-width: 1200px;
    	margin: auto;
    	color: #eee;
    }

    body > footer  > article > section {
    	width: calc(100%/3);
    	float: left;
    }

    body > footer  > article a {
    	color: #fff;
    }

    @media screen and (min-width: 601px) and (max-width: 900px) {
    	#main-nav > ul > li > a{
    		font-size: 12px;
    		padding: 0 5px;
    	}

    	#main-nav > ul > li  > input{
    		width: 120px;
    	}

    	#main-nav > ul > li  > input:focus{
    		width: 120px;
    	}

    	#movies > figure {
    		width: calc((10%/3)/2);
    		width: 30%;
    	}
    }

    @media screen and (max-width: 600px) {
    	#main-nav > ul {
    		position: fixed;
    		top: 49px;
    		left: 0;
    		right: 0;
    		background-color: #000;
    		box-shadow: 0 0 10px #000;
    		max-height: 0px;
    		overflow: hidden;
    		transition: all 0.5s;
    	}

    	#main-nav > ul > li {
    		float: none;
    		width: 100%;
    	}

    	#main-nav > ul > li  > input{
    		width: 96%;
    		margin: 0 2%;
    	}

    	#main-nav > ul > li  > input:focus{
    		width: 96%;
    		margin: 0 2%;
    	}

    	#main-nav > #show-menu {
    		float: right;
    		display: block;
    	}

    	#show-menu:hover + ul {
    		max-height: 300px;
    	}

    	#show-menu + ul:hover {
    		max-height: 300px;
    	}

    	#jumbo > article {
    		width: 90%;
    		margin-top: 49px;
    	}

    	#movies > figure {
    		width: 100%;
    	}

    	body > footer > article > section {
    		width: 100%;
    		float: none;
    		padding: 10px;
    		box-sizing: border-box;
    	}
    }
</code></pre>
