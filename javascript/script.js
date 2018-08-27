$(document).ready(function(){
    /*
        Fix the navigation "You are here"
    */
	var i = 0;
	$(".nav a").each(function(){
		if($(this).attr("href") == getFileName()){
			$(this).parent().addClass("active");
			i++;
		}
	});
	if(i == 0){
		if(getFileName() == "modules.php"){
			$("#menuModules").parent().addClass("active");
		}else{
			$("#startLink").parent().addClass("active");
		}
	}
    
    /*
        Auto generates the submenu on chosen pages
    */
    $(".submenu-area").append("<div class='sticky-areas'><h2>Innehåll</h2><div class='list-group submenu'></div></div>");
    $.each($(".create-submenu h1, .create-submenu h2, .create-submenu h3, .create-submenu h4, .create-submenu h5, .create-submenu h6"), function(){
        var tagName = $(this).prop("tagName");
        var id = ($(this).text()).replace(/\s+/g,"-").replace(/å/g, 'a').replace(/Å/g, 'A').replace(/ä/g, 'a').replace(/Ä/g, 'A').replace(/ö/g, 'o').replace(/Ö/g, 'O').replace(/&/g, '').replace(/,/g, '').replace(/\./g,'').replace(/\:/g,'');
        console.log(id);
        $(this).append("<span class='link-fix' id='"+id+"'></span>");
        $(".submenu").append('<a class="list-group-item sub-menu-item size-'+tagName+'" href="#'+id+'">'+$(this).text()+'</a>');
    });

    /*
        Makes the sub menu sticky
    */
    if($(window).width() > 1000){
        $(".sticky-areas").sticky({ topSpacing: 60 });
    }
    /*
        Animates the "scroll to" on links
    */
    $('a[href^="#"]').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 500, 'swing', function () {
	        window.location.hash = target;
	    });
	});
    
    /*
        Makes the todo stuff crazy - so you can't miss them
    */
    var i = 0;
    setInterval(function(){
        if(i % 2 == 0){
            $(".todo").addClass("todo2");
        }else{
            $(".todo").removeClass("todo2");        }
        i++;
    }, 500);
    
    /*
        Creates tooltips on "title"-attributes
    */
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    
    /* 
        Makes "open in code pen"-buttons (taken from here: http://blog.codepen.io/documentation/api/prefill/)
    */
    $("pre.codepen").each(function() {

        // Do nothing
        return false;
        
        var el = $(this),
           type = el.data("type"),
           codeInside = el.find("code"),
           isCodeInside = codeInside.length, // does it or not?
           HTML = "",
           CSS = "",
           JS = "";
        
        if (type == "html") {
          if (codeInside) {
            HTML = codeInside.html();
          } else {
            HTML = el.html();
          }
        } else if (type == "css") {
          if (codeInside) {
            CSS = codeInside.html();
          } else {
            CSS = el.html();
          }
        } else if (type == "js") {
          if (codeInside) {
            JS = codeInside.html();
          } else {
            JS = el.html();
          }
        }
        
        var data = {
          html: HTML,
          css: CSS,
          js: JS
        };
        
        var JSONstring = JSON.stringify(data)
            // Quotes will screw up the JSON
            .replace(/"/g, "&​quot;") // careful copy and pasting, I had to use a zero-width space here to get markdown to post this.
            .replace(/'/g, "&apos;");
        
        var form = 
          '<form action="http://codepen.io/pen/define" method="POST" target="_blank">' + 
            '<input type="hidden" name="data" value=\'' + 
              JSONstring + 
              '\'>' + 
            '<input type="submit" value="Öppna i CodePen" class="codepen-mover-button btn btn-sm" style="float:right; margin-top:-10px;">' +
          '</form>';
        
        el.append(form);
        
        /*
        $(".codepen-mover-button").hide();
        $("pre").on("mouseover", function(){
            $(this).find(".codepen-mover-button").show();
        });
        $("pre").on("mouseleave", function(){
            $(".codepen-mover-button").hide();
        });
        */
    });
    
});

function getFileName() {
	//this gets the full url
	var url = document.location.href;
	//this removes the anchor at the end, if there is one
	url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
	//this removes the query after the file name, if there is one
	url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
	//this removes everything before the last slash in the path
	url = url.substring(url.lastIndexOf("/") + 1, url.length);
	//return
	return url;
}