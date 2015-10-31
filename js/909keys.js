/*
Bisher gilt dies nur für ein Kit, es gibt wohl auch eine Möglichkeit dies per Selektor umzusetzen
Hierbei lässt sich dann wie geplant zwischen verschiedenen Sample-Kits auswählen.
Ich baue das die Tage ein. Wichtig ist, dass das hier erst mal läuft. Besprechen wir beim nächsten Treffen.  
*/


// Kick 909
(function(){

var context = new AudioContext();
var kick;
var getSound = new XMLHttpRequest(); // Sample wird per XMLHttpRequest geladen
getSound.open("GET", "sounds/909/Kick-909.wav", true);
getSound.responseType = "arraybuffer"; // umwandlung in binärdarstellung
getSound.onload = function() {
  context.decodeAudioData(getSound.response, function(buffer){
    kick = buffer; // Audio in einer Variable speichern.
  });
}
getSound.send(); // Anfrage + Sample laden

window.addEventListener("keydown",onKeyDown); // Event Listener für Tastendruck

function onKeyDown(e){
  switch (e.keyCode) {
    // X
    case 88:
      var playSound = context.createBufferSource();
      playSound.buffer = kick;
      playSound.connect(context.destination);  // Sample mit Ausgabe koppeln
      playSound.start(0); // sofort abspielen delay(0)
    break;
  }
}
}());

// HihatOpen-909

(function(){

var context = new AudioContext();
var openHH;
var getSound = new XMLHttpRequest();
getSound.open("GET", "sounds/909/Hihat-909-Open.wav", true);
getSound.responseType = "arraybuffer";
getSound.onload = function() {
  context.decodeAudioData(getSound.response, function(buffer){
    openHH = buffer;
  });
}
getSound.send();

window.addEventListener("keydown",onKeyDown);

function onKeyDown(e){
  switch (e.keyCode) {
    // Y
    case 89:
      var playSound = context.createBufferSource();
      playSound.buffer = openHH;
      playSound.connect(context.destination);
      playSound.start(0);
    break;
  }
}
}());

// HihatClosed-909

(function(){

var context = new AudioContext();
var closedHH;
var getSound = new XMLHttpRequest();
getSound.open("GET", "sounds/909/Hihat-909-Closed.wav", true);
getSound.responseType = "arraybuffer";
getSound.onload = function() {
  context.decodeAudioData(getSound.response, function(buffer){
    closedHH = buffer;
  });
}
getSound.send();

window.addEventListener("keydown",onKeyDown);

function onKeyDown(e){
  switch (e.keyCode) {
    // U
    case 85:
      var playSound = context.createBufferSource();
      playSound.buffer = closedHH;
      playSound.connect(context.destination);
      playSound.start(0);
    break;
  }
}
}());

// Clap

(function(){

var context = new AudioContext();
var clap;
var getSound = new XMLHttpRequest();
getSound.open("GET", "sounds/909/Clap-909.wav", true);
getSound.responseType = "arraybuffer";
getSound.onload = function() {
  context.decodeAudioData(getSound.response, function(buffer){
    clap = buffer;
  });
}
getSound.send();

window.addEventListener("keydown",onKeyDown);

function onKeyDown(e){
  switch (e.keyCode) {
    // D
    case 68:
      var playSound = context.createBufferSource();
      playSound.buffer = clap;
      playSound.connect(context.destination);
      playSound.start(0);
    break;
  }
}
}());
