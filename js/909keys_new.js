// 909keys gekürzt, ggf noch verbuggt, keine duplikate mehr. wird morgen weiter geführt

function playSound(sample, source, trigger, key){

var context = new AudioContext();
// var sample;
var getSound = new XMLHttpRequest(); // Sample wird per XMLHttpRequest geladen
getSound.open("GET", source, true);
getSound.responseType = "arraybuffer"; // umwandlung in binärdarstellung
getSound.onload = function() {
  context.decodeAudioData(getSound.response, function(buffer){
    sample = buffer; // Audio in einer Variable speichern.
  });
}
getSound.send(); // Anfrage + Sample laden

window.addEventListener("keydown",onKeyDown); // Event Listener für Tastendruck
document.getElementById(trigger).addEventListener("click",onClick); // Event Listener für Triggerpad 1

function onKeyDown(e){
  switch (e.keyCode) {
    // X
    case key:
      var playSound = context.createBufferSource();
      playSound.buffer = sample;
      playSound.connect(context.destination);  // Sample mit Ausgabe koppeln
      playSound.start(0); // sofort abspielen delay(0)
      break;
  }
}

// to do: play sound onClick/touch DONE!!!
function onClick(e){
  var playSound = context.createBufferSource();
  playSound.buffer = sample;
  playSound.connect(context.destination);
  playSound.start(0);
}

}());

// oben angegebene funktion mit unten stehenden variablen/daten ausführen.. to do: weiterführen

(function(){

    playSound("closedHH", "sounds/909/Hihat-909-Closed.wav", "trigger3", "85");
}

}());
