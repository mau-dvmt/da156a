<h2>Föreläsning 10 - Ramverk och bibliotek</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.2696%; padding-top: 58px;"><iframe src="https://www.slideshare.net/slideshow/embed_code/key/2DIlvmk8fqVvoY" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no"></iframe></div>

<hr>

<p>
  <a href="/resources/pdf/2024-Ramverk.pdf">Föreläsningen finns att ladda ner här</a>
</p>

<hr>

<h3>Länkar till några av de ramverk som nämndes under föreläsningen</h3>
<ul>
    <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
    <li><a href="https://tailwindcss.com/">Tailwindcss</a></li>
    <li><a href="https://foundation.zurb.com/">Foundation</a></li>
    <li><a href="http://materializecss.com/">MaterlializeCSS</a></li>
    <li><a href="https://semantic-ui.com">Semantic UI</a></li>
</ul>

<h4>Dagens exempel</h4>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
    &lt;!doctype html&gt;
&lt;html lang=&quot;en&quot;&gt;
  &lt;head&gt;
    &lt;meta charset=&quot;utf-8&quot;&gt;
    &lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1&quot;&gt;
    &lt;title&gt;Bootstrap demo&lt;/title&gt;
    &lt;link href=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css&quot; rel=&quot;stylesheet&quot; integrity=&quot;sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH&quot; crossorigin=&quot;anonymous&quot;&gt;
    &lt;link href=&quot;style.css&quot; rel=&quot;stylesheet&quot;&gt;
  &lt;/head&gt;
  &lt;body&gt;

    &lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
    &lt;div class=&quot;modal-dialog&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
        &lt;div class=&quot;modal-header&quot;&gt;
          &lt;h1 class=&quot;modal-title fs-5&quot; id=&quot;exampleModalLabel&quot;&gt;Kontakta mig&lt;/h1&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn-close&quot; data-bs-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-body&quot;&gt;
            &lt;form&gt;
                &lt;label for=&quot;username&quot; class=&quot;form-label&quot;&gt;Epost: &lt;/label&gt;
                &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;username&quot; name=&quot;username&quot;&gt;
            &lt;/form&gt;
        &lt;/div&gt;
        &lt;div class=&quot;modal-footer&quot;&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-bs-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
          &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Skicka&lt;/button&gt;
        &lt;/div&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;

    &lt;nav class=&quot;navbar bg-dark navbar-expand-lg bg-body-tertiary&quot; data-bs-theme=&quot;dark&quot;&gt;
        &lt;div class=&quot;container-fluid&quot;&gt;
          &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
          &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-bs-toggle=&quot;collapse&quot; data-bs-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
            &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
          &lt;/button&gt;
          &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
            &lt;ul class=&quot;navbar-nav me-auto mb-2 mb-lg-0&quot;&gt;
              &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link active&quot; aria-current=&quot;page&quot; href=&quot;#&quot;&gt;Home&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
              &lt;/li&gt;
              &lt;li class=&quot;nav-item dropdown&quot;&gt;
                &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; data-bs-toggle=&quot;dropdown&quot; aria-expanded=&quot;false&quot;&gt;
                  Dropdown
                &lt;/a&gt;
                &lt;ul class=&quot;dropdown-menu&quot;&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;hr class=&quot;dropdown-divider&quot;&gt;&lt;/li&gt;
                  &lt;li&gt;&lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;&lt;/li&gt;
                &lt;/ul&gt;
              &lt;/li&gt;
              &lt;li class=&quot;nav-item&quot;&gt;
                &lt;a class=&quot;nav-link disabled&quot; aria-disabled=&quot;true&quot;&gt;Disabled&lt;/a&gt;
              &lt;/li&gt;
            &lt;/ul&gt;
            &lt;form class=&quot;d-flex&quot; role=&quot;search&quot;&gt;
              &lt;input class=&quot;form-control me-2&quot; type=&quot;search&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot;&gt;
              &lt;button class=&quot;btn btn-outline-success&quot; type=&quot;submit&quot;&gt;Search&lt;/button&gt;
            &lt;/form&gt;
          &lt;/div&gt;
        &lt;/div&gt;
      &lt;/nav&gt;

    &lt;h1&gt;Hello, world!&lt;/h1&gt;

    &lt;main class=&quot;container&quot; &gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-bs-toggle=&quot;modal&quot; data-bs-target=&quot;#exampleModal&quot;&gt;
            Kontakta mig
          &lt;/button&gt;
          
        &lt;form&gt;
            &lt;label for=&quot;username&quot; class=&quot;form-label&quot;&gt;Anv&auml;ndarnamn: &lt;/label&gt;
            &lt;input class=&quot;form-control&quot; type=&quot;text&quot; id=&quot;username&quot; name=&quot;username&quot;&gt;
            &lt;button class=&quot;btn btn-primary&quot;&gt;Logga in&lt;/button&gt;
        &lt;/form&gt;

        &lt;table class=&quot;table table-striped&quot;&gt;
            &lt;thead&gt;
              &lt;tr&gt;
                &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
              &lt;/tr&gt;
            &lt;/thead&gt;
            &lt;tbody&gt;
              &lt;tr&gt;
                &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
                &lt;td&gt;Mark&lt;/td&gt;
                &lt;td&gt;Otto&lt;/td&gt;
                &lt;td&gt;@mdo&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
                &lt;td&gt;Jacob&lt;/td&gt;
                &lt;td&gt;Thornton&lt;/td&gt;
                &lt;td&gt;@fat&lt;/td&gt;
              &lt;/tr&gt;
              &lt;tr&gt;
                &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
                &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
                &lt;td&gt;@twitter&lt;/td&gt;
              &lt;/tr&gt;
            &lt;/tbody&gt;
          &lt;/table&gt;
    &lt;/main&gt;


    &lt;script src=&quot;https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js&quot; integrity=&quot;sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz&quot; crossorigin=&quot;anonymous&quot;&gt;&lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</code></pre>

<!--

<h3>Dagens exempel</h3>

<p>Ni kan ladda ner dagens exempel i sin helhet <a href="/lectures/10/ramverk-2023.zip">här</a>, eller surfa till vår demosida som använder bootstrap <a href="/lectures/10/bootstrap-2023/index.html">här</a>.</p>

<hr>
<h2>Förra årets föreläsning</h2>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.1972%;"><iframe src="https://speakerdeck.com/player/32e220c477b94179b442eb70835077f3" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="encrypted-media;"></iframe></div>

<hr>

<div style="left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;"><iframe src="https://www.youtube.com/embed/Q0yOE82Qes4?rel=0" style="top: 0; left: 0; width: 100%; height: 100%; position: absolute; border: 0;" allowfullscreen scrolling="no" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture;"></iframe></div>

<hr>

<h3>Länk till de ramverk som nämndes under föreläsningen</h3>
<ul>
    <li><a href="http://getbootstrap.com/">Bootstrap</a></li>
    <li><a href="https://foundation.zurb.com/">Foundation</a></li>
    <li><a href="http://materializecss.com/">MaterlializeCSS</a></li>
    <li><a href="https://semantic-ui.com">Semantic UI</a></li>
</ul>

<h2>Dagens exempel</h2>

<p>Ni kan ladda ner dagens exempel i sin helhet <a href="/lectures/10/l10.zip">här</a>.</p>

<h3>Bootstrap</h3>

<h4>HTML</h4>
<p>
    <a href="/lectures/10/bootstrap/index.html">Här hittar du exemplet live (högerklicka > visa sidkälla för att se källkoden)</a>
</p>

-->