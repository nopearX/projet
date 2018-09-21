(function ($) {

//met le bouton dans une variable le dollard pour savoir qu'il s'agit d'objet jQuerie
  var $btn = $('#btn');
  if('webkitSpeechRecognition' in window){
      var recognition =  new webkitSpeechRecognition();
      recognition.lang ='fr-FR';
      recognition.continuous = false;
      recognition.interimResults = false;,


      $btn.click(function(e){
        e.preventdefault();
        recognition.start();
      });

      recognition.onresult = function(event){
        console.log(event);
      }

  }else{
    $btn.hide();
  }

})(jquery);
