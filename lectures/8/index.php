<h2>Föreläsning 8 - Att bygga en webbsida</h2>

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
        &lt;title&gt;Star Wars&lt;/title&gt;
        &lt;link href=&quot;https://fonts.googleapis.com/css?family=Montserrat&quot; rel=&quot;stylesheet&quot;&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;

    &lt;body&gt;
        &lt;header&gt;
            &lt;nav id=&quot;navigation&quot;&gt;
                &lt;a href=&quot;index.html&quot; id=&quot;logo&quot;&gt;Star Wars&lt;/a&gt;
                &lt;a href=&quot;#&quot; id=&quot;menu-trigger&quot;&gt;&lt;img src=&quot;images/if_th-menu-outline_216423.png&quot; alt=&quot;menu icon&quot;&gt;&lt;/a&gt;
                &lt;div id=&quot;menu&quot;&gt;
                    &lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;
                    &lt;a href=&quot;#&quot;&gt;Join&lt;/a&gt;
                    &lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;
                    &lt;input type=&quot;search&quot; placeholder=&quot;Search here...&quot;&gt;
                &lt;/div&gt;
            &lt;/nav&gt;
        &lt;/header&gt;

        &lt;div id=&quot;jumbo&quot;&gt;
            &lt;article&gt;
                &lt;h1&gt;You don&apos;t believe in the force, do you?&lt;/h1&gt;
                &lt;p&gt;A tremor in the Force. The last time I felt it was in the presence of my old master. I need your help, Luke. She needs your help. I&apos;m getting too old for this sort of thing. I&apos;m surprised you had the courage to take the responsibility yourself.&lt;/p&gt;
                &lt;a href=&quot;#&quot;&gt;Join us!&lt;/a&gt;
            &lt;/article&gt;
        &lt;/div&gt;

        &lt;main id=&quot;movies&quot;&gt;
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
        &lt;/main&gt;

        &lt;footer&gt;
            &lt;article id=&quot;footer-navigation&quot;&gt;
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
  /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
    background: #45484d; /* Old browsers */
    background: -moz-linear-gradient(top, #45484d 0%, #000000 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top, #45484d 0%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom, #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */

    height: 50px;
    line-height: 50px;
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    box-shadow: 0 0 10px #000;
}

#navigation {
    width: auto;
    max-width: 1200px;
    margin: auto;
}

#logo {
    float: left;
    display: block;
    color: #eee;
    text-decoration: none;
}

#menu {
    float: right;
}

#menu > a {
    display: block;
    float: left;
    color: #eee;
    text-decoration: none;
    padding: 0 20px;
    transition: 0.5s all;
}

#menu > a:hover {
    background-color: #000;
}

#menu > input {
    height: 40px;
    border-radius: 5px;
    border: 0px;
    padding-left: 10px;
}

#jumbo {
    height: 450px;
    background-image: url("images/starwars-fanart.jpg");
    background-position: center;
    border-bottom: 10px solid #000;
    box-shadow: 0 0 10px #000;

    display: flex;
    justify-content: center;
    align-items: center;
}

#jumbo > article {
    width: 50%;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 20px;
    padding: 20px;
    box-sizing: border-box;
    text-align: center;
    opacity: 0;
    transition: 0.5s all;
}

#jumbo:hover article {
    opacity: 1;
}

#jumbo > article > a {
    display: block;
    width: 200px;
    background-color: #333;
    color: #eee;
    margin: auto;
    padding: 10px;
}

#movies {
    display: flex;
    flex-wrap: wrap;

    width: auto;
    max-width: 1200px;
    margin: auto;
}

#movies > h2 {
    width: 100%;
    border-bottom: 2px solid #000;
    padding: 15px 0;
}

#movies > figure {
    width: 23%;
    margin: 1%;
    box-shadow: 0 0 5px #333;
    background-color: #fff;
    transition: 0.5s all;
    font-size: 12px;
}

#movies > figure:hover {
    width: 25%;
    margin: 0%;
    box-shadow: 0 0 15px #000;
    font-size: 14px;
}

#movies > figure > h3 {
    background-color: #000;
    color: #eee;
    margin: 0px;
    text-align: center;
    padding: 10px 0;
}

#movies > figure > img {
    float: left;
    margin-right: 5px;
    height: cal(100%-25px);
}

#movies > figure > figcaption {
    /* font-size: 12px; */
}

body > footer {
    background-color: #000;
    color: #eee;
    box-shadow: 0 0 10px #000;
}

#footer-navigation {
    width: auto;
    max-width: 1200px;
    margin: 25px auto 0px auto;

    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

#footer-navigation a {
    color: #eee;
}

#menu-trigger {
    display: none;
}

@media screen and (max-width: 1000px) {
    #movies > figure {
        width: 31.3%;
    }
}

@media screen and (max-width: 650px) {
    #movies > figure {
        width: 48%;
    }
}

@media screen and (max-width: 540px) {
    #jumbo {
        background-size: cover;
    }

    #movies > figure {
        width: 100%;
        margin: 10px 0;
    }

    #footer-navigation {
        grid-template-columns: 1fr;
    }

    #jumbo > article {
        width: 90%;
    }

    #logo {
        padding-left: 5px;
    }

    #menu {
        position: fixed;
        top: 50px;
        left: 0px;
        right: 0px;
        background-color: #000;

        height: 0px;
        overflow: hidden;
        transition: 0.5s all;
    }

    #menu > a {
        width: 100%;
        float: none;
    }

    #menu > input {
        width: 99%;
    }

    #menu-trigger {
        float: right;
        color: #eee;
        text-decoration: none;
        padding-right: 5px;
        display: block;
    }

    #menu-trigger img {
        max-width: 50px;
    }

    #menu-trigger:focus + #menu, #menu:hover {
        height: 220px;
    }
}
</code></pre>
