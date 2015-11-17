/*

geplant:
Es gibt eine Sequenz von 4 Takten mit je 4 Schlägen. Die Sequenz wird mit dem vorgegebenen Tempo abgespielt.
Nach einnem Durchlauf wird diese wieder von vorne abgespielt.
Es handelt sich hier also um eine sich wiederholende Sequenz aus insgesamt 16 Schlägen in einem 4/4 Takt.


if 1 = play sound
else = skip sound

tempo gibt geschwindigkeit in BPM an. Auslagerung in clock.js

 */

/*

geplant:
Es gibt eine Sequenz von 4 Takten mit je 4 Schlägen. Die Sequenz wird mit dem vorgegebenen Tempo abgespielt.
Nach einnem Durchlauf wird diese wieder von vorne abgespielt.
Es handelt sich hier also um eine sich wiederholende Sequenz aus insgesamt 16 Schlägen in einem 4/4 Takt.


if 1 = play sound
else = skip sound

tempo gibt geschwindigkeit in BPM an. Auslagerung in clock.js

 */

 (function(){
	 
	 var StepSequencer = function(canvasID, tempoID, formID) {
		 
		 var canvas = document.getElementById(canvasID);
		 var screen = canvas.getContext("2d");
		 var audioContext = new AudioContext();
		 // red, grey
		 var color = [{active : ["FF0000"], off : ["#D3D3D3"]}];
		 
		 // Eigenschaften
		 this.channels = {};
		 this.samples = {};
		 
		 
	 }
	 
 }
