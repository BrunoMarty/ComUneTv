
    <div class="row">

<div class="col-md-9">
<!--    data-setup='{}'-->
<video
    id="my-player"
    class="video-js"
    controls
    preload="auto"
    poster="//vjs.zencdn.net/v/oceans.png"
    data-setup='{}'>
  <source src="//vjs.zencdn.net/v/oceans.mp4" type="video/mp4"></source>
  <source src="//vjs.zencdn.net/v/oceans.webm" type="video/webm"></source>
  <source src="//vjs.zencdn.net/v/oceans.ogv" type="video/ogg"></source>
  <p class="vjs-no-js">
    To view this video please enable JavaScript, and consider upgrading to a
    web browser that
    <a href="http://videojs.com/html5-video-support/" target="_blank">
      supports HTML5 video
    </a>
  </p>
</video>
</div>


	<div class="col-md-3 "
<fieldset>
     <div id="conversation">
         <?php
         foreach($chat as $mess):
             echo "<ul>".$mess['id_user'].":".$mess['content']."</ul>";
         endforeach;
         ?>
     </div><br />
      <form id="send" action="#" method="post">
        <input type="text" class="form-control" id="message">
        <button type="button" class="form-control" id="envoyer" title="Envoyer">Send</button>
      </form>
</fieldset>

<script>
$('#envoyer').click(function() {

    var nom = 0;
    var message = $('#message').val();
    var data = {"1": message};
    $.ajax({
        url: '/index.php/refresh_chat',
        type: 'POST',
        data: data,

        success: function (data) {
            console.log(data)
            $('#conversation').empty()
            $('#conversation').append(data)
        },
        error: function (data) {
            console.log("erreuuuuuuuuuuuuuuuuur" + data.toString());
        }
    });
})
</script>
</div>
</div>
