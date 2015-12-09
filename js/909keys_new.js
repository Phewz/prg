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


// oben angegebene funktion mit unten stehenden variablen/daten ausführen.. sample, source, trigger-div, key - to do: weiterführen

// Kick
(function(){

    playSound("kick", "sounds/909/Kick-909.wav", "trigger1", "88");
}

// HihatOpen-909
(function(){

    playSound("openHH", "sounds/909/Hihat-909-Open.wav", "trigger2", "89");
}

// closed HiHat
(function(){

    playSound("closedHH", "sounds/909/Hihat-909-Closed.wav", "trigger3", "85");
}

// Clap
(function(){

    playSound("clap", "sounds/909/Clap-909.wav", "trigger4", "68");
}

// Snare
(function(){

    playSound("snare", "sounds/909/Snare-909.wav", "trigger5", "81");
}

// LowTom
(function(){

    playSound("tomLow", "sounds/909/Tom-909-Low.wav", "trigger6", "87");
}

// MidTom
(function(){

    playSound("tomMid", "sounds/909/Tom-909-Mid.wav", "trigger7", "69");
}

// HiTom
(function(){

    playSound("tomHi", "sounds/909/Tom-909-Hi.wav", "trigger8", "82");
}

// Shaker
(function(){

    playSound("shaker", "sounds/909/Shaker-909.wav", "trigger9", "84");
}

// Ride
(function(){

    playSound("ride", "sounds/909/Ride-909.wav", "trigger10", "71");
}

// Snare
(function(){

    playSound("snare", "sounds/909/Snare-909.wav", "trigger11", "72");
}

// Wood
(function(){

    playSound("wood", "sounds/909/Wood-909.wav", "trigger12", "83");
}


}());
