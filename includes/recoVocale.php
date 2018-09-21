<!-- <form id="labnol" method="get" action="https://www.google.com/search">
<div class="speech">
<input type="text" name="q" id="transcript" placeholder="Speak" />
<img onclick="startDictation()" src="//i.imgur.com/cHidSVu.gif" />
</div>
</form>

<!-- HTML5 Speech Recognition API -->

<!-- <script>
function startDictation() {

if (window.hasOwnProperty('webkitSpeechRecognition')) {

var recognition = new webkitSpeechRecognition();

recognition.continuous = false;
recognition.interimResults = false;

recognition.lang = "en-US";
recognition.start();

recognition.onresult = function(e) {
document.getElementById('transcript').value
                       = e.results[0][0].transcript;
recognition.stop();
document.getElementById('labnol').submit();
};

recognition.onerror = function(e) {
recognition.stop();
}

}
} -->

<!-- <div class ="container">
    <div class="row">
        <div class="span12">

              <a href="#" id="btn" class="btn btn-primary">Recherche</a>

        </div>
      </div>
    </div> -->

<script type="text/javascript" src="https//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript"  src="voc.js"></script>
