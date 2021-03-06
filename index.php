<!DOCTYPE html>
<html lang="en">

  <head>
    <title>DrumMachineWT</title>
    <!-- JS: css anpassungen? wie besprochen -->
    <link rel="stylesheet" type="text/css" href="css/screen.css">


  </head>

  <body ontouchstart="">
    <!-- JS-To-Do: ladeanimation integrieren, aktueller stand siehe loader.js -->

    <a href="about.html" title="DrumMachine">About</a>

    <figure id = "devicebody">
      <section id = "devicecontent">



        <!--SelectorSection-->
        <!--Umschreiben in PHP Code-->
        <section id = "SelectorSection">

          <section id = "dropDown1" class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Kick A</option>
                 <option value = "2">Kick B</option>
                 <option value = "3">Kick C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Snare A</option>
                 <option value = "2">Snare B</option>
                 <option value = "3">Snare C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Claps A</option>
                 <option value = "2">Claps B</option>
                 <option value = "3">Claps C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Hihat Closed A</option>
                 <option value = "2">Hihat Closed B</option>
                 <option value = "3">Hihat Closed C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Hihat Open A</option>
                 <option value = "2">Hihat Open B</option>
                 <option value = "3">Hihat Open C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Tom1 A</option>
                 <option value = "2">Tom1 B</option>
                 <option value = "3">Tom1 C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Tom2 A</option>
                 <option value = "2">Tom2 B</option>
                 <option value = "3">Tom2 C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Tom3 A</option>
                 <option value = "2">Tom3 B</option>
                 <option value = "3">Tom3 C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Crash A</option>
                 <option value = "2">Crash B</option>
                 <option value = "3">Crash C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Ride A</option>
                 <option value = "2">Ride B</option>
                 <option value = "3">Ride C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">Woods A</option>
                 <option value = "2">Woods B</option>
                 <option value = "3">Woods C</option>
            </select>
          </section>

          <section class = "dropDowns">
            <select class = "dDs">
                 <option value = "1">FX A</option>
                 <option value = "2">FX B</option>
                 <option value = "3">FX C</option>
            </select>
          </section>
        </section>

<!--Die Codeminimierung mittels PHP ist hier nicht ohne weiteres möglich,
da jeder "Kanal" individuell arbeitet.-->


<!--
=== Feedback Alpers, Feb 12 ===

Bei der Nutzung von PHP geht es nicht nur um die Auswertung von Eingabe oder die Programmierung
der Funktionalität von einzelnen Elementen. Sie können dort genau wie in Java z.B. mit Hilfe von Arrays und Variablen und einer (hier dreifach
verschachtelten) Schleife HTML-Code generieren. Hier als kleinen Tipp zur Umsetzung der entsprechende Java-Code:

for (int i = 1; i < 4; i++) return "<option value = \"", i, ...

=== Feedback Alpers, Ende ===
-->

        <!--TriggerPadSection-->
        <!--PHP Code -->
        <?php
        function generateHTML($id_suffix = '', $class = '')
        {
            $main_array = array(
                0 => array(
                    'id' => 'Kick',
                    'value' => 'X'
                ),
                1 => array(
                    'id' => 'Snare',
                    'value' => 'Y'
                ),
                2 => array(
                    'id' => 'Claps',
                    'value' => 'U'
                ),
                3 => array(
                    'id' => 'HihatClosed',
                    'value' => 'D'
                ),
                4 => array(
                    'id' => 'HihatOpen',
                    'value' => 'P'
                ),
                5 => array(
                    'id' => 'Tom1',
                    'value' => 'A'
                ),
                6 => array(
                    'id' => 'Tom2',
                    'value' => 'K'
                ),
                7 => array(
                    'id' => 'Tom3',
                    'value' => 'M'
                ),
                8 => array(
                    'id' => 'Crash',
                    'value' => 'V'
                ),
                9 => array(
                    'id' => 'Ride',
                    'value' => 'I'
                ),
                10 => array(
                    'id' => 'Woods',
                    'value' => 'T'
                ),
                11 => array(
                    'id' => 'FX',
                    'value' => 'E'
                )
            );

            echo '<section id="TriggerPadSection">';
            foreach ($main_array as $key => $row) {
                echo '<input id = "' . $id_suffix . $row['id'] . '" class = "' . $class . '" value="' . $row['value'] . '" readonly>';
            }
            echo '</section>';
        }

        //Code zum auslagern:
        //generateHTML('trigger', 'triggers');
        ?>


        <!--ALTER HTML CODE TRIGGERSECTION
        <section id= "TriggerPadSection">
          <input id = "triggerKick" class = "triggers" value="X" readonly>
          <input id = "triggerSnare" class = "triggers" value="Y" readonly>
          <input id = "triggerClaps" class = "triggers" value="U" readonly>
          <input id = "triggerHihatClosed" class = "triggers" value="D" readonly>
          <input id = "triggerHihatOpen" class = "triggers" value="P" readonly>
          <input id = "triggerTom1" class = "triggers" value="A" readonly>
          <input id = "triggerTom2" class = "triggers" value="K" readonly>
          <input id = "triggerTom3" class = "triggers" value="M" readonly>
          <input id = "triggerCrash" class = "triggers" value="V" readonly>
          <input id = "triggerRide" class = "triggers" value="I" readonly>
          <input id = "triggerWoods" class = "triggers" value="T" readonly>
          <input id = "triggerFX" class = "triggers" value="E" readonly>
        </section>
-->



		<!--
		=== Feedback Alpers, Feb 12 ===

		Auch hier: Einfach eine Schleife nutzen.

		Aber: Auch der <button>-Container ist eher HTML4.01. Nutzen Sie bitte für alle Eingabemöglichkeiten von NutzerInnen
		den <input>-Container.

		=== Feedback Alpers, Ende ===
  -->

        <!--FaderSection-->

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
  </body>

</html>

<!--
=== Feedback Alpers, Dez 11 ===

Das ist leider ausschließlich HTML 4.01; in HTML 5 kommen <div>-Container nur noch selten vor.
Es ist leider auch nicht klar, warum Sie diese Massen an <div>-Containern verwenden.
Wo sollen Nutzer mit der Anwendung interagieren?

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
