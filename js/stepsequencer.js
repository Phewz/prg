/*

geplant:
Es gibt eine Sequenz von 4 Takten mit je 4 Schlägen. Die Sequenz wird mit dem vorgegebenen Tempo abgespielt.
Nach einnem Durchlauf wird diese wieder von vorne abgespielt.
Es handelt sich hier also um eine sich wiederholende Sequenz aus insgesamt 16 Schlägen in einem 4/4 Takt.

tempo gibt geschwindigkeit in BPM an. Auslagerung in clock.js?

wichtige Info: derzeit noch komplett verbuggt. Weiter ausgearbeiteter Stand ist mit SSD Crash verloren gegangen, 
da in der letzten Stunde vor Crash kein Commit gesendet wurde. Aber: Notizen sind noch vorhanden. 
Wird eingebaut sobald Ersatz-SSD da ist! Treffen am Freitag + Samstag steht jedoch noch! @Alex.
Pizza bestelle ich :>

HTML IDs wie besprochen

 */

 (function(){
	 
	 var StepSequencer = function(canvasID, tempoID, formID) {
		 
		 var canvas = document.getElementById(canvasID);
		 var screen = canvas.getContext("2d");
		 var audioContext = new AudioContext();
		 // Rot, Grau
		 var color = [{active : ["FF0000"], off : ["#D3D3D3"]}];
		 
		 // Eigenschaften
		 this.channels = {};
		 this.samples = {};
		 
		 
		 this.mouseInput = new SequencerMouseInput(canvas, this);
		 this.ticker = new Ticker();
		 
		 // Step Eigenschaften
		 var self = this;
		 var startSequencer = function() {
			 self.step();	 
		 };
		 
		 // Sequencer zeichnen, 60fps
		 this.runUpdate = function() {
			 self.draw(screen);
		 }
		 this.ticker.every(17, this.runUpdate);
		 
		 // Takt angeben
		 
		 var lastID;
		 this.setTempo = function(tempo){
			 // Tempo anpassen
			 tempo = (tempo < 0) ? 0 : ((tempo > 300) ? 300 : tempo);
			 this.ticker.delete(lastID);
			 lastID = this.ticker.every(this.tempoToTimestep(tempo), startSequencer);
		 }
		 
		this.setupUI(formId);
		this.displayView = "all";
		 
		this.tempoSelect = document.getElementById(tempoId);
		this.setupEventHandlers();
		};
 }
