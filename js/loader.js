// To Do: In HTML integrieren, Test ob * funktioniert. Derzeit noch nicht auf aktuellen Ladestand abgestimmt
// nimmt außerdem das komplette Fenster ein. Test mit Logo + Schrift im Bild hat nicht funktioniert, da muss noch geschaut werden wie man das Logo am Besten einbindet.
// Anpassung für responsive folgen in Absprache mit Alex.

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
