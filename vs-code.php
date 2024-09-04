<?php
include "_header.php";
?>

<div class="row">
	<div class="col-lg-8 create-submenu">
		<h2>Visual Studio Code</h2>

    <p>
      Visual Studio Code är en textredigerare från Microsoft, som är gratis och öppen källkod. Den är kraftfull och har många funktioner, kanske lite för många i början. Vi har därför satt ihop en liten guide för att komma igång.
    </p>

    <h3>Installation</h3>
    <p>
      Gå till <a href="https://code.visualstudio.com/">Visual Studio Code</a> och ladda ner programmet. Installera det som vilket annat program som helst.
    </p>

    <h3>Grundläggande användning</h3>
    <p>
      När du öppnar programmet ser du en ganska tom skärm. I mitten finns en vit yta där du skriver din kod. Till vänster finns en meny med filer och mappar, och till höger finns en meny med verktyg och inställningar.
    </p>
    <p>
      För att skapa en ny fil, tryck på <strong>File</strong> och sedan <strong>New file</strong>. Skriv din kod och spara filen genom att trycka på <strong>File</strong> och sedan <strong>Save</strong>, alternativt klicka Ctrl + S (för Windows) eller Cmd + S (för macOS).
    </p>

    <h3>Kortkommandon</h3>
    <p>
      Visual Studio Code har många kortkommandon för att snabbt navigera och skriva kod. Här är några exempel:
    </p>
    <ul>
      <li>Ctrl + C (Cmd + C) - Kopiera</li>
      <li>Ctrl + V (Cmd + V) - Klistra in</li>
      <li>Ctrl + Z (Cmd + Z) - Ångra</li>
      <li>Ctrl + S (Cmd + S) - Spara</li>
      <li>Ctrl + F (Cmd + F) - Sök</li>
      <li>Ctrl + Shift + F (Cmd + Shift + F) - Sök i filer</li>
      <li>Ctrl + P (Cmd + P) - Öppna fil</li>
      <li>Ctrl + Shift + P (Cmd + Shift + P) - Öppna kommandorad</li>
      <li>Ctrl + Shift + I (Cmd + Shift + I) - Formatera kod</li>
    </ul>

    <h3>Inställningar</h3>
    <p>
      Du kan ändra inställningar för Visual Studio Code genom att trycka på <strong>File</strong> och sedan <strong>Preferences</strong>. Här kan du ändra saker som färgschema, teckensnitt och kortkommandon. Vi skulle rekommendera att du kollar igenom inställningarna och ser vad som passar dig bäst, men undvik att ändra kortkommandon för dessa kan vara bra att lära sig.
    </p>

    <h4>Auto Save</h4>
    <p>
      En inställning som kan vara bra att ändra är <strong>Auto Save</strong>. När denna inställning är påslagen sparar Visual Studio Code automatiskt dina ändringar, så att du inte behöver trycka på Spara-knappen hela tiden. Du kan ändra inställningen genom att trycka på <strong>File</strong> och sedan <strong>Auto Save</strong>. Alternativt kan du trycka på Ctrl + Shift + P (Cmd + Shift + P) och skriva <strong>Auto Save</strong>.
    </p>

    <h4>Auto Close Tag</h4>
    <p>
      En annan inställning som kan vara bra att ändra är <strong>Auto Close Tag</strong>. När denna inställning är påslagen stänger Visual Studio Code automatiskt HTML-taggar när du skriver dem. Denna inställning är på som standard, men om du vill går den att stänga av. Du kan ändra inställningen genom att trycka på <strong>File</strong> och sedan <strong>Preferences</strong> och sedan <strong>Settings</strong>. Sök efter <strong>Auto Close Tag</strong> och bocka ur rutan.
    </p>

    <h3>Themes</h3>
    <p>
      Visual Studio Code har stöd för olika teman, som ändrar färgschemat på texten. Du kan ändra tema genom att trycka på <strong>File</strong> och sedan <strong>Preferences</strong> och sedan <strong>Color Theme</strong>. Välj ett tema som passar dig bäst.
    </p>

    <h3>Extensions</h3>
    <p>
      Visual Studio Code har stöd för extensions, som är tillägg som lägger till extra funktioner. Du kan installera extensions genom att trycka på <strong>View</strong> och sedan <strong>Extensions</strong>. Sök efter en extension och tryck på <strong>Install</strong> för att installera den.
    </p>
    <p>
      Det kan vara bra att vänta lite med att installera extensions tills du har lärt dig grunderna i Visual Studio Code, eftersom de kan vara lite överväldigande i början, men det finns många bra extensions som kan underlätta ditt arbete. Här är listan på några extensions som vi rekommenderar:
    </p>

    <ul>
      <li><a href="https://marketplace.visualstudio.com/items?itemName=ritwickdey.LiveServer">Live Server</a> - Startar en live-server som uppdateras automatiskt när du sparar</li>
      <li><a href="https://marketplace.visualstudio.com/items?itemName=formulahendry.auto-rename-tag">Auto Rename Tag</a> - Uppdaterar motsvarande HTML-taggar när du ändrar en</li>
      <li><a href="https://marketplace.visualstudio.com/items?itemName=CelianRiboulet.webvalidator">W3C Validation</a> - Validerar din HTML-kod mot W3C-standarden</li>
    </ul>

	</div>
	<div class="col-lg-4 submenu-area"></div>
</div>

<?php
include "_footer.php";
?>
