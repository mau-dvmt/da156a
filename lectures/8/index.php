<h2>Föreläsning 8 - Att bygga en webbsida</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/sThhKrDMhZc?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

<p>Det finns ingen powerpoint till dagens föreläsning, men exempelsidan som vi byggde kan ni komma åt på olika sätt:</p>

<ul>
    <li>
        <a href="/lectures/8/ex/index.html">Ni kan surfa till den här</a>
    </li>
    <li>
        <a href="/lectures/8/8-ex.zip">Ni kan ladda ner hela webbsidan i en ZIP-fil här</a>
    </li>
    <li>
        Eller studera källkoden nedan
    </li>
</ul>


<h3>HTML</h3>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Star Wars&lt;/title&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.googleapis.com&quot;&gt;
        &lt;link rel=&quot;preconnect&quot; href=&quot;https://fonts.gstatic.com&quot; crossorigin&gt;
        &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Quicksand&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
        &lt;link href=&quot;reset.css&quot; rel=&quot;stylesheet&quot;&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;wrapper&quot;&gt;
            &lt;header&gt;
                &lt;nav&gt;
                    &lt;a href=&quot;index.html&quot;&gt;Star Wars&lt;/a&gt;

                    &lt;a href=&quot;#&quot; id=&quot;menu-btn&quot; class=&quot;mobile-only&quot;&gt;Menu&lt;/a&gt;

                    &lt;div id=&quot;menu&quot;&gt;
                        &lt;a href=&quot;#&quot;&gt;Home&lt;/a&gt;
                        &lt;a href=&quot;#&quot;&gt;Death star&lt;/a&gt;
                        &lt;a href=&quot;#&quot;&gt;Contact&lt;/a&gt;
                        &lt;input type=&quot;search&quot; placeholder=&quot;Search here...&quot;&gt;
                    &lt;/div&gt;
                &lt;/nav&gt;
            &lt;/header&gt;

            &lt;section id=&quot;jumbo&quot;&gt;
                &lt;article&gt;
                    &lt;h2&gt;You don't believe in the force, do you?&lt;/h2&gt;
                    &lt;p&gt;A tremor in the Force. The last time I felt it was in the presence of my old master. I need your help, Luke. She needs your help. I'm getting too old for this sort of thing. I'm surprised you had the courage to take the responsibility yourself.&lt;/p&gt;
                    &lt;a href=&quot;#&quot;&gt;Join us&lt;/a&gt;
                &lt;/article&gt;
            &lt;/section&gt;

            &lt;main&gt;
                &lt;h1&gt;Movies&lt;/h1&gt;
                &lt;figure&gt;
                    &lt;h3&gt;I. The phantom menace&lt;/h3&gt;
                    &lt;img src=&quot;images/1.png&quot; alt=&quot;Poster - Star Wars: Episode I&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
                &lt;figure&gt;
                    &lt;h3&gt;II. Attack of the clones&lt;/h3&gt;
                    &lt;img src=&quot;images/2.png&quot; alt=&quot;Poster - Star Wars: Episode 2&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
                &lt;figure&gt;
                    &lt;h3&gt;III. Revenge of the sith&lt;/h3&gt;
                    &lt;img src=&quot;images/3.png&quot; alt=&quot;Poster - Star Wars: Episode 3&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
                &lt;figure&gt;
                    &lt;h3&gt;IV. A new hope&lt;/h3&gt;
                    &lt;img src=&quot;images/4.png&quot; alt=&quot;Poster - Star Wars: Episode 4&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
                &lt;figure&gt;
                    &lt;h3&gt;V. The empire strikes back&lt;/h3&gt;
                    &lt;img src=&quot;images/5.png&quot; alt=&quot;Poster - Star Wars: Episode 5&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
                &lt;figure&gt;
                    &lt;h3&gt;VI. Return of the Jedi&lt;/h3&gt;
                    &lt;img src=&quot;images/6.png&quot; alt=&quot;Poster - Star Wars: Episode 6&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
                &lt;figure&gt;
                    &lt;h3&gt;VII. The force awakens&lt;/h3&gt;
                    &lt;img src=&quot;images/7.png&quot; alt=&quot;Poster - Star Wars: Episode 7&quot;&gt;
                    &lt;p&gt;Lucas ipsum dolor sit amet yoda darth lando k-3po skywalker hutt calrissian endor darth sidious. Cade fett darth c-3po antilles. Wedge kenobi binks skywalker hutt windu kenobi organa.&lt;/p&gt;
                &lt;/figure&gt;
            &lt;/main&gt;

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
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>


<h3>CSS</h3>
<h4>style.css</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
body {
    font-family: 'Quicksand', sans-serif;
    background-image: url(images/brushed.png);
}

#wrapper > header {
    position: fixed;
    left: 0px;
    right: 0px;
    top: 0px;
    box-shadow: 0 0 10px #666;

    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#45484d+0,000000+100;Black+3D+%231 */
    background: #45484d; /* Old browsers */
    background: -moz-linear-gradient(top,  #45484d 0%, #000000 100%); /* FF3.6-15 */
    background: -webkit-linear-gradient(top,  #45484d 0%,#000000 100%); /* Chrome10-25,Safari5.1-6 */
    background: linear-gradient(to bottom,  #45484d 0%,#000000 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#45484d', endColorstr='#000000',GradientType=0 ); /* IE6-9 */
}

#wrapper > header > nav {
    display: flex;
    max-width: 1200px;
    margin: auto;
}

#wrapper > header input {
    margin: 10px 0;
    border-radius: 5px;
    border: 0px;
    padding-left: 5px;
    width: 150px;
    transition: all 0.5s;
}

#wrapper > header input:focus {
    width: 200px;
}

#wrapper > header a {
    color: #eee;
    text-decoration: none;
    line-height: 50px;
    padding: 0 15px;
}

#wrapper > header a:hover {
    background-color: black;
}

#menu {
    margin-left: auto;
    display: flex;
}

#jumbo {
    height: 400px;
    padding-top: 50px;
    background-image: url(images/starwars-fanart2.jpg);
    background-position: center;

    display: flex;
    justify-content: center;
    align-items: center;

    border-bottom: 10px solid black;
    box-shadow: 0 0 10px #666;
}

#jumbo > article {
    background-color: rgba(255, 255, 255, 0.8);
    width: 50%;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px #666;
}

#jumbo > article > h2 {
    text-align: center;
    font-weight: bold;
    font-size: 24px;
    margin-bottom: 10px;
}

#jumbo > article > a {
    display: block;
    background-color: #333;
    color: #fff;
    margin: 20px auto 0px auto;
    width: 50%;
    text-align: center;
    padding: 10px;
    box-shadow: 0 0 10px #666;
}

#wrapper > main {
    display: flex;
    flex-wrap: wrap;
    max-width: 1200px;
    margin: auto;
}

#wrapper > main > h1 {
    width: 100%;
    font-size: 36px;
    font-weight: bold;
    border-bottom: 2px solid black;
    margin: 20px 0px;
}

#wrapper > main > figure {
    width: 23%;
    margin: 1%;

    border: 1px solid black;
    background-color: white;
    box-sizing: border-box;
    box-shadow: 0 0 5px #666;

    flex-grow: 1;
}

#wrapper > main > figure > h3 {
    background-color: black;
    color: #eee;
    padding: 5px;
}

#wrapper > main > figure > img {
    float: left;
    margin-right: 5px;
}

#wrapper > main > figure > p {
    padding: 5px;
    font-size: 14px;
}

#wrapper > footer {
    background-color: black;
    box-shadow: 0 0 10px #666;
    margin-top: 20px;
}

#wrapper > footer > article {
    max-width: 1200px;
    margin: auto;
    padding: 20px;

    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

#wrapper > footer, #wrapper > footer a {
    color: white;
}

#wrapper > footer h4 {
    font-size: 20px;
    font-weight: bold;
}

.mobile-only {
    display: none;
}


@media screen and (max-width: 850px) {
    #wrapper > main > figure {
        width: 48%;
    }
}

@media screen and (max-width: 600px) {
    #wrapper > header > nav {
        flex-direction: column;
    }

    #menu {
        flex-direction: column;
        margin-left: 0px;
    }

    #wrapper > header > nav input {
        width: 96%;
        margin: 2%;
        padding: 10px;
    }

    #wrapper > header > nav input:focus {
        width: 96%;
    }

    .mobile-only {
        display: block;
    }

    #menu-btn {
        position: fixed;
        right: 0px;
        top: 0px;
    }

    #menu {
        height: 0px;
        overflow: hidden;
        transition: 0.5s all;
    }

    #menu-btn:focus + #menu, #menu:hover {
        height: 205.44px;
    }

    #wrapper > main > figure {
        width: 100%;
    }

    #wrapper > footer > article {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    #jumbo > article {
        width: 80%;
    }
}
</code></pre>

<h4>reset.css</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
/* http://meyerweb.com/eric/tools/css/reset/ 
   v2.0 | 20110126
   License: none (public domain)
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed, 
figure, figcaption, footer, header, hgroup, 
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure, 
footer, header, hgroup, menu, nav, section {
	display: block;
}
body {
	line-height: 1;
}
ol, ul {
	list-style: none;
}
blockquote, q {
	quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
	content: '';
	content: none;
}
table {
	border-collapse: collapse;
	border-spacing: 0;
}
</code></pre>