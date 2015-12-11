// To Do: In HTML integrieren, Test ob * funktioniert. Derzeit noch nicht auf aktuellen Ladestand abgestimmt
// nimmt außerdem das komplette Fenster ein. Test mit Logo + Schrift im Bild hat nicht funktioniert, da muss noch geschaut werden wie man das Logo am Besten einbindet.
// Anpassung für responsive folgen in Absprache mit Alex.

/*
* === Feedback Alpers, Dez 11 ===
* 
* Hier gilt im Grunde das selbe wie beim Kommentar zu 909keys_new, aber ich formuliere es nochmal anders:
* 
* Sinn des Controllers (also bei Ihnen des JS-Teils) ist es, die Funktionalität zu realisieren,
* damit die Elemente des Modells (also des HTML-Teils) interaktiv werden.
* Wenn Sie dagegen versuchen, in JS die Anzeige von Bildern und Texten zu realisieren,
* dann übernehmen Sie den Modell-Teil. Nebenbei folgt daraus, dass kaum noch etwas in HTML
* zu programmieren wäre, wodurch Ihr Partner keine Leistung mehr erbringen kann.
*
* Konzentrieren Sie sich deshalb bitte darauf, die Reaktion der Anwendung zu realisieren.
* Für die Anzeige bzw. das Abspielen von Sounds sind in HTML die <figure>-Container verantwortlich.
*
* Aber bitte nicht missverstehen: Die Änderungen, die sich aufgrund der Interaktionen von Nutzern ergeben
* sind durchaus Ihre Aufgabe. So müssen Sie beispielsweise die Änderungen bzw. den Austausch von Elementen
* programmieren. Den entsprechenden HTML-Code sollte dann aber wieder Ihr Partner implementieren.
*
* Auch hier gilt: Missverstehen Sie das bitte nicht; Sie könnten wahrscheinlich die gesamte Anwendung
* in JS entwickeln. Ziel dieses Projektes ist es aber, dass Sie lernen, sich als Teil eines Teams 
* voll und ganz auf die Entwicklung Ihrer Bereiche zu konzentrieren und dabei darauf zu vertrauen,
* dass die übrigen Teammitglieder das gleiche in Ihren Bereichen tun.
*
* === Feedback Alpers, Ende ===
*/

var qdots = ["", ".", "..", "..."];

// ** bug -v (es muss noch gelöst werden, dass man das Logo einbindet. Bisher habe ich keine zufriedenstellende Lösung gefunden.)
function show_image(src) {
    var logo = document.createElement("logo");
    logo.src = "images/Logo.png";

    document.body.appendChild(img);
}
// ** bug ^-
window.addEventListener('load', function() {
  var canvas = document.createElement("canvas"),
      context = canvas.getContext('2d');

  function resize() {
    canvas.width  = window.innerWidth;
    canvas.height = window.innerHeight;
  } resize();

  window.addEventListener('resize', resize);

  document.body.appendChild(canvas);

  function rad(deg) {
    return (deg * 0.0174532925);
  }

  function deg(rad) {
    return (rad * 57.2957795);
  }

  +(function test(time) {
    var x = .5 + canvas.width / 2,
        y = .5 + canvas.height / 2,
        d = (((time || Date.now()) / 3) % 720),
        text, m;
// kreis, font, textausrichtung, Futura oder gar Helvetica? zu testen: Webfonts
    context.lineCap = 'round';
    context.lineWidth = 3;
    context.font = '500 14px Futura';
    context.textBaseline = 'middle';

    context.fillStyle = 'rgba(38, 38, 38, .9)';
    context.fillRect(0, 0, canvas.width, canvas.height);
    context.beginPath();
      if(d < 360) {
        context.arc(x, y, 50, 0, rad(d));
      } else {
        context.arc(x, y, 50, rad(d - 360), 0);
      }
      context.strokeStyle = context.fillStyle = '#cecece';
      context.stroke();
    context.closePath();
    
    // bug **
    show_image;
    text = 'Loading Drum Machine', m = context.measureText(text);
    context.fillText(text + qdots[Math.floor(d / 180)], (x - (m.width / 2)), y);

    requestAnimFrame(test);
  }());
})
