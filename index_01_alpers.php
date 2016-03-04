<!DOCTYPE html>
<html lang="en">

	<head>
		<title>DrumMachineWT</title>
		<link rel=stylesheet href="css/screen.css">
	</head>

	<body ontouchstart="">
    <a href=about.html title=DrumMachine>About</a>
    <figure id = "devicebody">
		<section id = "devicecontent">
		<section id = "SelectorSection">
		<?php
			$values = array("A", "B", "C");
			$names = array("Kick", "Snare", "Claps", "Hihat Closed", "Hihat Open", "Crash", "Tom", "Ride", "Woods", "FX");
			
			foreach($values as $value){
				$a = "<section id = \"dropDown1\" class = \"dropDowns\">";
				echo($a);
				$b = "<select class = \"dDs\">";
				echo($b);
				foreach($names as $name){
					for($i = 1; $i < 4; $i++){
						$c = "<option value = \"".$i.">".$name." ".$value."</option>";
						echo($c);
					}
				}
				echo("</select>");
				echo("</section>");
			}
		?>

		<!--Die Codeminimierung mittels PHP ist hier nicht ohne weiteres möglich,
		da jeder "Kanal" individuell arbeitet.-->

<!--
=== Feedback Alpers, Mär 4 ===

Der oben notierte Code ist also nicht umsetzbar?
(Von Syntaxfehlern einmal abgesehen.)

Zur Erinnerung: PHP ist ein Hypertext-Prozessor. Das bedeutet,
dass Sie darin HTML auf effiziente Weise generieren können.

Zentral geht es mir aber um etwas anderes: Als HTML'er/in ist es
Ihre Aufgabe, die Struktur und Semantik der Webanwendung zu programmieren.
Wenn die Strukur aber letztlich nur aus ein oder zwei Dutzend
Absätzen besteht, die bis auf einige Bezeichner identisch sind 
und die im Grunde keinerlei
Aspekte von HTML5 sinnvoll einsetzen, dann ist deren Programmierung
reines copy paste und damit keine Leistung, die einem Projekt von 80 oder
auch nur 50 Stunden Arbeitsaufwand entspricht.

Es gibt Gruppen, deren HTML'er(innen) nicht viel mehr programmiert haben,
aber dort war dann wenigstens in Ansätzen erkennbar, dass HTML5
sinnvoll eingesetzt wurde und das kann ich bei Ihnen leider noch nicht
erkennen.

=== Feedback Alpers, Ende ===
-->

		<!--
		=== Feedback Alpers, Feb 12 ===

		Bei der Nutzung von PHP geht es nicht nur um die Auswertung von Eingabe oder die Programmierung
		der Funktionalität von einzelnen Elementen. Sie können dort genau wie in Java z.B. mit Hilfe von Arrays und Variablen und einer (hier dreifach
		verschachtelten) Schleife HTML-Code generieren. Hier als kleinen Tipp zur Umsetzung der entsprechende Java-Code:

		for (int i = 1; i < 4; i++) return "<option value = \"", i, ...

		=== Feedback Alpers, Ende ===
		-->

        <!--TriggerPadSection-->
        <?php
        function generateHTML($id_suffix = '', $class = '')
        {
            $main_array = array(
                array('id' => 'Kick', 'value' => 'X'),
                array('id' => 'Snare', 'value' => 'Y'),
                array('id' => 'Claps', 'value' => 'U'),
                array('id' => 'HihatClosed', 'value' => 'D'),
                array('id' => 'HihatOpen','value' => 'P'),
                array('id' => 'Tom1','value' => 'A'),
				array('id' => 'Tom2','value' => 'K'),
                array('id' => 'Tom3','value' => 'M'),
                array('id' => 'Crash','value' => 'V'),
                array('id' => 'Ride','value' => 'I'),
                array('id' => 'Woods','value' => 'T'),
                array('id' => 'FX','value' => 'E')
            );

            echo '<section id="TriggerPadSection">';
			
            foreach ($main_array as $key => $row) {
				echo '<input id = "' . $id_suffix . $row['id'] . '" class = "' . $class . '" value="' . $row['value'] . '" readonly>';
            }
            echo '</section>';
        }
        ?>

		<!--
		=== Feedback Alpers, Feb 12 ===

		Auch hier: Einfach eine Schleife nutzen.

		Aber: Auch der <button>-Container ist eher HTML4.01. Nutzen Sie bitte für alle Eingabemöglichkeiten von NutzerInnen
		den <input>-Container.

		=== Feedback Alpers, Ende ===
		-->

<!--
=== Feedback Alpers, Mär 4 ===

Schauen Sei mal ganz scharf nach oben und überlegen Sie dann, wie
Sie hier mit einer simplen Schleifen Zeilen sparen können.

=== Feedback Alpers, Ende ===
-->

<!--
=== Feedback Alpers, Mär 4 ===

Oben habe ich die Einrückungen mit Tabulatoren überarbeitet, damit
das Ganze einheitlich ist (Sie hatte zum Teil Leerstellen drin).
Bitte adaptieren Sie das im restlichen Code, damit der leichter lesbar ist.

=== Feedback Alpers, Ende ===
-->
		
        <section id ="faderSection">
          <?php
              for($i = 1; $i < 13; $i++) {
                ?>
                  <input id = "fader<?php echo $i; ?>" type=range min=0 max=100 value=75 step=1 onchange="outputUpdate(value)" orient="vertical">
                  <output id = "volume<?php echo $i; ?>" for = "fader<?php echo $i; ?>"></output>
              <?php
            } //for loop ende
          ?>
        </section>

        <!--PanningSection-->
        <section id ="panningSection">
          <?php
              for($i = 1; $i < 13; $i++) {
                ?>
                  <input id = "pan<?php echo $i; ?>" type=range min=-100 max=100 value=0 step=1 onchange="outputUpdate(value)" orient="horizontal">
                  <output id = "volume<?php echo $i; ?>" for = "pan<?php echo $i; ?>"></output>
              <?php
            } //for loop ende
          ?>
        </section>

        <!--GlobalSection-->
          <section id = "globalsect"></section>

        <!--SequenzerSection-->
            <section id ="SequenzerSection">

              <?php

                  for($i = 1; $i < 17; $i++) {
                    ?>
                      <input id = "step<?php echo $i; ?>" class = "seqButtons" value="<?php echo $i; ?>" readonly>
                  <?php
                } //for loop ende
              ?>

            </section>
          </section>
        </figure>
	<!-- drumkey test js import, am Ende des body Tags aufgrund von DOM -->
	<script src="js/909keys.js" type="text/javascript" language="javascript"></script>

	
<!--
=== Feedback Alpers, Mär 4 ===

*räusper* Wie war das doch noch mit JavaScript in HTML5? *räusper*

=== Feedback Alpers, Ende ===
-->


	</body>
</html>

<!--
=== Feedback Alpers, Dez 11 ===

(erledigt) Das ist leider ausschließlich HTML 4.01 ...

Wichtig ist außerdem, dass Sie mit dem HTML-Teil eine eigene Leistung für das Projekt erbringen;
das ist mit den Mitteln von HTML 5 auch gut möglich.
Wenn dagegen sowohl die Funktionalität als auch die Struktur der Anwendung letztlich durch den
JavaScript-Teil realisiert wird, dann genügt das leider nicht.

=== Feedback Alpers, Ende ===
-->

<!--
=== Feedback Alpers, Jan 20 ===

Zum Feedback vom 11. Dez. kann ich nichts hinzufügen. Außer vielleicht, dass das wiederholte
Einfügen nahezu oder vollständig identischer Blöcke ein klares Anzeichen dafür ist, dass Sie
nicht verstehen, wie Sie hier mit wenigen Zeilen Code (z.B. in PHP) all die überflüssigen Doubletten
entfernen können.

=== Feedback Alpers, Ende ===
-->

<!--
=== Antwort auf Feedback Alexander L., Jan 22 ===

Ich habe nun die <div>-Container durch diverse HTML 5 Alternativen ersetzt.
Das Verhindern der kopierten HTML-Blöcke ist nur mit HTML und CSS leider nicht möglich,
da jedes einzelne Element individuell von JS angesprochen werden muss.
Uns ist unklar, weshalb sie im HTML Feedback auf eine Integration von PHP eingehen,
obwohl sie ausdrücklich klargemacht haben, dass jeder nur in einer Sprache schreiben dürfe und
auf keinen Fall Sprachübergreifend.
PHP würde zum einen eine weitere Sprache einbringen und zum anderen nach unserem
Verständnis eher unter das Aufgabengebiet des, für den JS-Anteil zuständigen Gruppenmitgliedes, fallen.
Könnten sie mir erläutern, was genau ich nun noch ändern, bzw. ergänzen müsste, um das Projekt
bestehen zu können?
Vielen Dank
Alexander Luebbe
=== Antwort auf Feedback, Ende ===
-->

<!--
=== Feedback Alpers, Feb 12 ===

Die Aufgabenstellung bestand nicht darin, dass Sie für die verschiedenen Teile des Projekts nicht sinnvoll
unterschiedliche Sprachen nutzen durften, sondern darin, dass jeder sich auf die eigene Aufgabe konzentrieren sollte.
Das ist zu 99,9% gleichbedeutend mit der Programmierung in nur einer Sprache.

ABER:

1.) Wenn Sie das selbe Codefragment an verschiedenen Stellen (ggf. in verschiedenen HTML-Dokumenten) einsetzen,
dann ist die einzige Möglichkeit, um redundanten Code zu vermeiden die, dass Sie dieses Codefragment in
einer eigenständigen Datei speichern und an allen relevanten Stellen mit dem PHP-Befehl include(dateiname) einfügen.
Das hat aber mit der Programmierung in PHP nichts zu tun.

2.) Wenn Sie an mehreren Stellen im HTML-Code nahezu gleichen Code verwenden, also z.B. Zeilen, die sich nur durch einen Text unterscheiden,
dann programmieren Sie diesen Code einmal in HTML und derjenige, der den PHP-Teil programmiert nimmt dann diese HTML-Teile
und speichert die unterschiedlichen Fragmente z.B. als Elemente eines Arrays.
Dann generiert er/sie durch eine Schleife oder Rekursion über das Array die einzelnen Zeilen des HTML-Codes.

3.) Ich habe zu keinem Zeitpunkt gesagt, dass Sie Ihre Code-Fragmente nicht in die Dateien in anderen Programmiersprachen
einfügen dürfen, damit dann der jeweils andere Teampartner diese Code-Fragmenten sinnvoll in den eigenen Teil integriert.
Das GEGENTEIL ist der Fall: Sie müssen (siehe 2.) regelmäßig Codefragmente in unterschiedlichen Programmiersprachen mischen,
um eine echte Zusammenarbeit zu realisieren.

Noch etwas bezüglich Ihrer Frage, wie Sie PHP einbinden sollen, vor dem Hintergrund, dass ich doch gefordert hätte, dass
Sie nur eine Sprache verwenden sollen. Das ist so nicht richtig. Ich habe zwei Dinge bezüglich der Programmierung des
Controller-Teils gesagt:

a) Ich hatte gesagt, dass Sie keinen fremden Code nutzen sollen und hier insbesondere angegeben, dass Sie keine Frameworks
verwenden sollten, sondern wirklich alles selbst entwickeln sollten. In diesem Zusammenhang habe ich betont, dass das nicht
die normale Arbeitsweise in Softwareprojekten wäre. Als Grund für diese Einschränkung habe ich angegeben, dass Sie zumindest einmal in Ihrem Studium
den Code Ihrer Projekte vollständig selbst entwickelt haben sollten, während Sie später in aller Regel eine Vielzahl an
Bibliotheken und Frameworks verwenden werden, ohne zu wissen, wie die bestimmte Aufgaben lösen. Denn als MedieninformatikerInnen
müssen Sie später im Stande sei, je nach Bedarf fremde Software anzupassen und das können Sie nur, wenn Sie solche grundlegenden
Aufgaben selbst realisiert haben.

b) Zum anderen habe ich Sie vor der Verwendung von JavaScript gewarnt, weil Sie sich hier wesentlich
intensiver und ohne Unterstützung durch mich einarbeiten müssten. Diese Warnung galt insbesondere vor dem Hintergrund,
dass JavaScript eine Sprache ist, in der Sie für eine Vielzahl an Aufgaben auf Frameworks angewiesen sind. Um das sinnvoll
zu tun müssen Sie aber Programmieren 1 und 2 erfolgreich bestanden haben. Wenn Sie sich dann dennoch für diesen Weg entscheiden,
muss Ihnen klar sein, dass bestimmte Aussagen von mir irritierend sein können. Das liegt dann aber nicht an meinen Aussagen,
sondern daran, dass Sie sich für einen schwierigen Sonderweg entschieden haben.

--- Noch etwas bezüglich der <div>-Container ---

Oben schreiben Sie, dass Sie die entfernt hätten, dabei nutzen Sie sie immer noch für nahezu jeden Absatz. Das ist veraltet.
Nutzen Sie bitte grundsätzlich nur dann <div>-Container, wenn es wirklich keinen sinnvoll nutzbaren Container in HTML5 gibt.

=== Feedback Alpers, Ende ===
-->
