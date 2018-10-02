<h2>Föreläsning 9 - JavaScript i webbutveckling</h2>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/tVmVITC3wwaOPO" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht18-da156a-webben-och-javascript" title="HT18 - DA156A - Webben och JavaScript" target="_blank">HT18 - DA156A - Webben och JavaScript</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h2>Dagens exempel</h2>

<h3>Bildspel</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/9/slideshow/index.html">Här hittar du exemplet live</a>
</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt; 
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt;Bildspel&lt;/title&gt;
        &lt;script src=&quot;https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js&quot;&gt;&lt;/script&gt;
        &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
        &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;div id=&quot;slideshow&quot;&gt;
            &lt;img src=&quot;images/1.jpg&quot; id=&quot;active&quot; alt=&quot;an image&quot;&gt;
            &lt;img src=&quot;images/2.jpg&quot; alt=&quot;an image&quot;&gt;
            &lt;img src=&quot;images/3.jpg&quot; alt=&quot;an image&quot;&gt;
        &lt;/div&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>JavaScript</h4>
<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
setInterval(function(){
    /*
        Kod här inne, körs var 3:e sekund
    */

    // 1) Letar upp elementet (bilden) med id: active och sparar det i variabeln "currentImage"
    var currentImage = $("#active");

    // 2) Kontrollerar om bilden har ett syskon efter sig i DOM-trädet
    if (currentImage.next().length > 0 ) {
        // 2a) Det finns en bild som nästkommande syskon, ge det nästkommande syskonet id:t "active"
        currentImage.next().attr("id", "active");
    } else {
        // 2b) Det finns ingen nästa bild, ge den första bilden av syskonen id:t "active"
        $("#slideshow").children().first().attr("id", "active");
        /*
            Förklaring av kodraden ovan:
            $("#slideshow")         => Letar upp elementet med id "slideshow"
            .children()             => Hämtar alla barn till elementet med id "slideshow"
            .first()                => Hämtar det första barnet (första bilden)
            .attr("id", "active")   => Tilldelar den första bilden attributet "id" med värdet "active"
        */
    }

    // 3) Ta bort attributet id på aktiv bild
    currentImage.removeAttr("id");
}, 3000)
</code></pre>

<h4>CSS</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
#slideshow {
    width: 500px;
    margin: auto;
    position: relative;
}

#slideshow img {
    max-width: 100%;
    position: absolute;
    opacity: 0;
    transition: 0.5s all;
}

img#active {
    opacity: 1;
}
</code></pre>
