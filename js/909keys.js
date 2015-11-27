/*
Bisher gilt dies nur für ein Kit, es gibt wohl auch eine Möglichkeit dies per Selektor umzusetzen
Hierbei lässt sich dann wie geplant zwischen verschiedenen Sample-Kits auswählen.
Ich baue das die Tage ein. Wichtig ist, dass das hier erst mal läuft. Besprechen wir beim nächsten Treffen.
Die Tastenanschläge sind nicht direkt für das Endprodukt geplant, da dies nicht systemunabhängig ist.
Diese wurden eingebaut um die Funktion zu testen. Smartphone-Ersatz ist geplant.
// X oder // Y etc. geben die zu drückende Taste an.

addon 21.11:
sounds per klick/touch auf triggerpads.

html elemente:
trigger1 = Kick
trigger2 = HihatOpen-909
trigger3 = HihatClosed-909
trigger4 = Clap

to do:
trigger5 = Tom low
trigger6 = Tom mid
trigger7 = Tom high
trigger8 = rim 

- Effekte, Panning und erstes Sequencing (Abspielen der Noten nach vorgegebenem Tempo) folgen die Tage. 
Panning und Effekte wurden schon getestet aber sind im SSD crash verloren gegangen. Folgt Anfang kommender Woche (KW 49)
Der Code wird wie in 909key_new.js schon angefangen auch noch verkürzt und optimiert

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
document.getElementById("trigger1").addEventListener("click",onClick); // Event Listener für Triggerpad 1

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

// to do: play sound onClick/touch DONE!!!
function onClick(e){
  var playSound = context.createBufferSource();
  playSound.buffer = kick;
  playSound.connect(context.destination);
  playSound.start(0);
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
document.getElementById("trigger2").addEventListener("click",onClick); // Event Listener für Triggerpad 2

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

// to do: play sound onClick/touch DONE!!!
function onClick(e){
  var playSound = context.createBufferSource();
  playSound.buffer = openHH;
  playSound.connect(context.destination);
  playSound.start(0);
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
document.getElementById("trigger3").addEventListener("click",onClick); // Event Listener für Triggerpad 3

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

// to do: play sound onClick/touch DONE!!!
function onClick(e){
  var playSound = context.createBufferSource();
  playSound.buffer = closedHH;
  playSound.connect(context.destination);
  playSound.start(0);
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
document.getElementById("trigger4").addEventListener("click",onClick); // Event Listener für Triggerpad 4

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

function onClick(e){
  var playSound = context.createBufferSource();
  playSound.buffer = clap;
  playSound.connect(context.destination);
  playSound.start(0);
}


}());
