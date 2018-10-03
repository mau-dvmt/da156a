<h2>Föreläsning 10 - Ramverk och bibliotek</h2>
<iframe src="//www.slideshare.net/slideshow/embed_code/key/btzOXe2HTnSNHA" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht18-da156a-frameworks" title="HT18 - DA156A - Frameworks" target="_blank">HT18 - DA156A - Frameworks</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>

<hr>

<h3>Länk till de ramverk som nämndes under föreläsningen</h3>
<ul>
    <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
    <li><a href="https://foundation.zurb.com/">Foundation</a></li>
    <li><a href="http://materializecss.com/">MaterlializeCSS</a></li>
</ul>

<h2>Dagens exempel</h2>

<h3>Todo-lista</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/9/slideshow/index.html">Här hittar du exemplet live</a>
</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;!-- Required meta tags --&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;&gt;

    &lt;!-- Bootstrap CSS --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css&quot; integrity=&quot;sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO&quot; crossorigin=&quot;anonymous&quot;&gt;
    &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;title&gt;Hello, world!&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;nav class=&quot;navbar navbar-expand-lg navbar-dark bg-dark&quot;&gt;
        &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Min todo-lista&lt;/a&gt;
        &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
        &lt;/button&gt;

        &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
            &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;
            &lt;li class=&quot;nav-item active&quot;&gt;
                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Home &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
            &lt;/li&gt;
            &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
            &lt;/li&gt;
            &lt;/ul&gt;
            &lt;form class=&quot;form-inline my-2 my-lg-0&quot;&gt;
            &lt;input class=&quot;form-control mr-sm-2&quot; type=&quot;search&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot;&gt;
            &lt;button class=&quot;btn btn-outline-success my-2 my-sm-0&quot; type=&quot;submit&quot;&gt;Search&lt;/button&gt;
            &lt;/form&gt;
        &lt;/div&gt;
        &lt;/nav&gt;
    &lt;div class=&quot;container&quot;&gt;
        &lt;h1&gt;Hello, world!&lt;/h1&gt;
        &lt;form&gt;
            &lt;div class=&quot;form-group&quot;&gt;
                &lt;label for=&quot;item&quot;&gt;Vad vill du l&auml;gga till f&ouml;r syssla?&lt;/label&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;item&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Skriv syssla h&auml;r...&quot;&gt;
            &lt;/div&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; id=&quot;save-item&quot;&gt;Spara&lt;/button&gt;
        &lt;/form&gt;

        &lt;hr&gt;
        &lt;ul id=&quot;list-of-items&quot;&gt;
        &lt;/ul&gt;
    &lt;/div&gt;

    &lt;!-- Optional JavaScript --&gt;
    &lt;!-- jQuery first, then Popper.js, then Bootstrap JS --&gt;
    &lt;script src=&quot;https://code.jquery.com/jquery-3.3.1.slim.min.js&quot; integrity=&quot;sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js&quot; integrity=&quot;sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js&quot; integrity=&quot;sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>JavaScript</h4>
<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
$("#save-item").on("click", function() {
    var item = $("#item").val();
    $("#list-of-items").append(`<li>
        ${item}
        <button type="button" class="btn btn-danger btn-sm delete-item">X</button>
    </li>`)
});

$("#list-of-items").on("click", ".delete-item", function() {
    $(this).parent().remove();
});
</code></pre>

<h4>CSS</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
.container {
    padding-top: 10px;
}

#list-of-items li {
    height: 50px;
}

#list-of-items button {
    float: right;
}
</code></pre>