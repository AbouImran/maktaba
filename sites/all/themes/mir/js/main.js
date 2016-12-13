var Drupal = Drupal || {};
(function ($,Drupal) {
  Drupal.behaviors.mir = {
    attach: function (context, settings){
			function play(audiofile){
				var audio_player = document.getElementById('audio-player');
				audio_player.removeAttribute("src");
			 	audio_player.src = audiofile;
			 	audio_player.play();
			}
    }
  }
})(jQuery,Drupal);
