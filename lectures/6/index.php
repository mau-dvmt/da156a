<h2>Föreläsning 6 - Layout med CSS (2)</h2>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/dn3FWWECg6cStk" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

	<hr>

	<a href="/resources/pdf/6-23.pdf">Ladda ner föreläsningen här</a>

<hr>

<h3>Videoinspelning från förra året</h3>
<p><strong>OBSERVERA</strong> att inspelningen är från förra året och all information om kursen som nämns, bör dubbelkollas.</p>
<p>Delen om CSS grids börjar <code>1:21:50</code> i videon nedan</p>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/gB8MDOCm8Rk?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share;"></iframe></div>

<hr> 

<h4>Exempel från videon ovan</h4>
<p>Ni kan surfa till dagens olika exempel på länkarna nedan (titta gärna på sidkällan & CSS):</p>

<ol>
	<li><a href="/lectures/6/ex2/1-Animationer/">Animation</a></li>
	<li><a href="/lectures/6/ex2/2-Flexbox/">Flexbox</a></li>
	<li><a href="/lectures/6/ex2/3-Grids/">Grid</a></li>
</ol>

<p> Ni kan ladda ner alla exempel i ZIP-format <a href="/lectures/6/6-23.zip">här</a></p>


<h3>Exempel från dagens föreläsning</h3>

<h4>Exempel 1 - Animation</h4>
<h5>HTML - index.html</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Animationer&lt;/title&gt;
        &lt;link href=&quot;reset.css&quot; rel=&quot;stylesheet&quot;&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;images&quot;&gt;
            &lt;figure&gt;
                &lt;img src=&quot;images/island.jpg&quot; alt=&quot;Island&quot;&gt;
                &lt;figcaption&gt;Island&lt;/figcaption&gt;
            &lt;/figure&gt;
            &lt;figure&gt;
                &lt;img src=&quot;images/malta.jpg&quot; alt=&quot;Malta&quot;&gt;
                &lt;figcaption&gt;Malta&lt;/figcaption&gt;
            &lt;/figure&gt;
            &lt;figure&gt;
                &lt;img src=&quot;images/newcastle.jpg&quot; alt=&quot;Newcastle&quot;&gt;
                &lt;figcaption&gt;Newcastle&lt;/figcaption&gt;
            &lt;/figure&gt;
            &lt;figure&gt;
                &lt;img src=&quot;images/usa.jpg&quot; alt=&quot;USA&quot;&gt;
                &lt;figcaption&gt;USA&lt;/figcaption&gt;
            &lt;/figure&gt;
        &lt;/div&gt;

        &lt;div id=&quot;box-btn&quot;&gt;F&ouml;r muspekaren &ouml;ver h&auml;r&lt;/div&gt;

        &lt;div id=&quot;box&quot;&gt;&lt;/div&gt;
        
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS - style.css</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
#images {
    /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#e4f5fc+0,bfe8f9+50,9fd8ef+51,2ab0ed+100;Blue+Gloss+%235 */
    background: linear-gradient(to bottom,  #e4f5fc 0%,#bfe8f9 50%,#9fd8ef 51%,#2ab0ed 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */

    overflow: hidden;
}

#images > figure {
    position: relative;
    width: 20%;
    margin: 2.5%;
    float: left;
    -webkit-border-radius: 25px;
    border-radius: 25px;

    border: 5px solid white;
    box-sizing: border-box;

    -webkit-box-shadow: 0 0 10px 0 #3B3B3B;
    box-shadow: 0 0 10px 0 #3B3B3B;

    -moz-transform: rotate(15deg);
    -webkit-transform: rotate(15deg);
    -o-transform: rotate(15deg);
    -ms-transform: rotate(15deg);
    transform: rotate(15deg);

    opacity: 0.5;

    transition: all 1s;

    overflow: hidden;
}

#images > figure:hover {
    opacity: 1;

    /* Taget från CSS 3-generator */
    transform: rotate(-15deg);
}

#images > figure > img {
    max-width: 100%;
}

#images > figure > figcaption {
    color: white;
    text-align: center;
    position: absolute;

    left: 0;
    right: 0;
    bottom: 0;
    height: 0px;

    background-color: rgba(0, 0, 0, 0.8);

    transition: all 1s;
}

#images > figure:hover figcaption {
    height: 20px;
}

#box-btn {
    background-color: yellow;
    width: 200px;
    padding: 30px;
    margin: 50px auto;
    text-align: center;
    cursor: pointer;
}

#box {
    background-color: red;
    height: 50px;
    width: 50px;
    position: absolute;
    left: 0px;
    transform: rotate(0deg);
}

#box-btn:hover + #box {
    animation: run 1s infinite;
}

@keyframes run {

    0% {
        background-color: red;
        left: 0px;
        transform: rotate(0deg);
    }

    80% {
        background-color: aqua;
        width: 100px;
        height: 100px;
        left: calc(100% - 100px);
        transform: rotate(360deg);
    }

    100% {
        background-color: red;
        left: 0px;
        width: 50px;
        height: 50px;
        transform: rotate(0deg);
    }
    
}
</code></pre>

<h5>CSS - reset.css</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
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

<h4>Exempel 2 - Flexbox (1)</h4>
<h5>HTML</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Flexbox&lt;/title&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;nav id=&quot;menu&quot;&gt;
            &lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
            &lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
            &lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
            &lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;
            &lt;a href=&quot;#&quot;&gt;L&auml;nk&lt;/a&gt;

            &lt;input type=&quot;search&quot;&gt;
        &lt;/nav&gt;

        &lt;div id=&quot;login&quot;&gt;
            &lt;form action=&quot;#&quot;&gt;
                &lt;h1&gt;Logga in&lt;/h1&gt;
                &lt;label for=&quot;username&quot;&gt;Anv&auml;ndarnamn:&lt;/label&gt;
                &lt;input type=&quot;text&quot; id=&quot;username&quot; name=&quot;username&quot;&gt;
                &lt;label for=&quot;password&quot;&gt;L&ouml;senord:&lt;/label&gt;
                &lt;input type=&quot;password&quot; id=&quot;password&quot; name=&quot;password&quot;&gt;
                &lt;input type=&quot;submit&quot; value=&quot;Logga in&quot;&gt;
            &lt;/form&gt;
        &lt;/div&gt;

    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
body {
    margin: 0;
}

#menu {
    background-color: aqua;
    padding: 20px;
    display: flex;

    flex-direction: row;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
}

#menu > a {
    padding: 10px;
    background-color: yellow;
    color: black;
    margin: 5px;
}

#menu > input {
    margin-left: auto;
}

#login {
    height: 100vh;
    width: 100vw;

    display: flex;
    justify-content: center;
    align-items: center;
}

#login > form {
    padding: 50px;
    background-color: #eee;
    height: 200px;
    width: 400px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 10px;
}
</code></pre>


<h4>Exempel 3 - Flexbox (2)</h4>
<h5>HTML</h5>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;CSS 3 - Flexbox&lt;/title&gt;
        &lt;meta charset=&quot;ut-8&quot;&gt;
		&lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;images&quot;&gt;
            &lt;img id=&quot;super&quot; src=&quot;images/1.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/2.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/3.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/4.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/5.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/6.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/7.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/8.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/9.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/10.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/11.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/12.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img src=&quot;images/13.jpg&quot; alt=&quot;Bild&quot;&gt;
            &lt;img id=&quot;big&quot; src=&quot;images/14.jpg&quot; alt=&quot;Bild&quot;&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h5>CSS</h5>
<pre class="language-css line-numbers" data-type="css"><code class="language-css line-numbers">
#images {
	display: flex;
	flex-wrap: wrap;
	gap: 10px;
}

#images > img {
	width: 200px;
	height: 200px;
	flex-grow: 1;
	object-fit: cover;
}

#big {
	flex-grow: 10 !important;
}

#super {
	width: 100% !important;
	height: 400px !important;
}
</code></pre>
