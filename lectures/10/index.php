<h2>Föreläsning 10 - Ramverk och bibliotek</h2>
<iframe src="//www.slideshare.net/slideshow/embed_code/key/FWcllD57WSN1Ja" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/AntonTibblin/ht19-da156a-ramverk-och-bibliotek" title="HT19 - DA156A - Ramverk och bibliotek" target="_blank">HT19 - DA156A - Ramverk och bibliotek</a> </strong> from <strong><a href="https://www.slideshare.net/AntonTibblin" target="_blank">Anton Tibblin</a></strong> </div>
<hr>

<h3>Länk till de ramverk som nämndes under föreläsningen</h3>
<ul>
    <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
    <li><a href="https://foundation.zurb.com/">Foundation</a></li>
    <li><a href="http://materializecss.com/">MaterlializeCSS</a></li>
    <li><a href="https://semantic-ui.com">Semantic UI</a></li>
</ul>

<h2>Dagens exempel</h2>

<h3>Bootstrap</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/10/bootstrap/index.html">Här hittar du exemplet live</a>
</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;!-- Required meta tags --&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1, shrink-to-fit=no&quot;&gt;

    &lt;!-- Bootstrap CSS --&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css&quot; integrity=&quot;sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T&quot; crossorigin=&quot;anonymous&quot;&gt;
    &lt;link href=&quot;https://fonts.googleapis.com/css?family=Dancing+Script&amp;display=swap&quot; rel=&quot;stylesheet&quot;&gt;
    &lt;link rel=&quot;stylesheet&quot; href=&quot;style.css&quot;&gt;
    &lt;title&gt;Hello, world!&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;!-- Modal --&gt;
    &lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
      &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
        &lt;div class=&quot;modal-content&quot;&gt;
          &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Dina kontaktuppgifter&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
              &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
          &lt;/div&gt;
          &lt;div class=&quot;modal-body&quot;&gt;
            &lt;form&gt;
              &lt;div class=&quot;form-group&quot;&gt;
                &lt;label for=&quot;formGroupExampleInput&quot;&gt;Namn&lt;/label&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;formGroupExampleInput&quot; placeholder=&quot;Namn h&auml;r...&quot;&gt;
              &lt;/div&gt;
              &lt;div class=&quot;form-group&quot;&gt;
                &lt;label for=&quot;formGroupExampleInput2&quot;&gt;Epost&lt;/label&gt;
                &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;formGroupExampleInput2&quot; placeholder=&quot;Empost h&auml;r...&quot;&gt;
              &lt;/div&gt;
            &lt;/form&gt;
          &lt;/div&gt;
          &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;

    &lt;nav class=&quot;navbar navbar-expand-lg navbar-dark bg-dark&quot;&gt;
      &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Min demosida&lt;/a&gt;
      &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarNav&quot; aria-controls=&quot;navbarNav&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
        &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
      &lt;/button&gt;
      &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarNav&quot;&gt;
        &lt;ul class=&quot;navbar-nav&quot;&gt;
          &lt;li class=&quot;nav-item active&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Home &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;About&lt;/a&gt;
          &lt;/li&gt;
          &lt;li class=&quot;nav-item&quot;&gt;
            &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Contact&lt;/a&gt;
          &lt;/li&gt;
        &lt;/ul&gt;
      &lt;/div&gt;
    &lt;/nav&gt;

    &lt;div class=&quot;container&quot;&gt;
        &lt;div class=&quot;jumbotron&quot;&gt;
          &lt;h1 class=&quot;display-4&quot;&gt;Hello, world!&lt;/h1&gt;
          &lt;p class=&quot;lead&quot;&gt;This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-placement=&quot;right&quot; data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;
            Popover on top
          &lt;/button&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModal&quot;&gt;
            Kontakta oss f&ouml;r pris p&aring; produkten
        &lt;/button&gt;
        &lt;/div&gt;

        &lt;section class=&quot;row&quot;&gt;
          &lt;div class=&quot;card col-4&quot;&gt;
            &lt;img src=&quot;https://lumiere-a.akamaihd.net/v1/images/5d61767e19c1fd0001ac8082-image_fba96c13.jpeg?region=0%2C0%2C1536%2C864&amp;width=960&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
              &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
              &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
              &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class=&quot;card col-4&quot;&gt;
            &lt;img src=&quot;https://lumiere-a.akamaihd.net/v1/images/5d61767e19c1fd0001ac8082-image_fba96c13.jpeg?region=0%2C0%2C1536%2C864&amp;width=960&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
              &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
              &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
              &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;

          &lt;div class=&quot;card col-4&quot;&gt;
            &lt;img src=&quot;https://lumiere-a.akamaihd.net/v1/images/5d61767e19c1fd0001ac8082-image_fba96c13.jpeg?region=0%2C0%2C1536%2C864&amp;width=960&quot; class=&quot;card-img-top&quot; alt=&quot;...&quot;&gt;
            &lt;div class=&quot;card-body&quot;&gt;
              &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
              &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
              &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
            &lt;/div&gt;
          &lt;/div&gt;
        &lt;/section&gt;
    &lt;/div&gt;

    &lt;nav class=&quot;navbar navbar-light bg-light&quot;&gt;
      &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Fixed bottom&lt;/a&gt;
    &lt;/nav&gt;

   

    &lt;!-- Optional JavaScript --&gt;
    &lt;!-- jQuery first, then Popper.js, then Bootstrap JS --&gt;
    &lt;script src=&quot;https://code.jquery.com/jquery-3.3.1.slim.min.js&quot; integrity=&quot;sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js&quot; integrity=&quot;sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
    &lt;script src=&quot;https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js&quot; integrity=&quot;sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;

    &lt;script src=&quot;script.js&quot;&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<h4>JavaScript</h4>
<pre class="language-javascript line-numbers" data-type="javascript"><code class="language-javascript line-numbers">
$(function () {
  $('[data-toggle="popover"]').popover()
})
</code></pre>

<h4>CSS</h4>
<pre class="language-css line-numbers" data-type="html"><code class="language-css line-numbers">
body {
    font-family: 'Dancing Script', cursive;
}

body > .navbar {
    box-shadow: 0 0 10px #333;
}

body > .container {
    margin-top: 20px;
}
</code></pre>