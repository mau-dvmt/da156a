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