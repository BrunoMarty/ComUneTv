<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<h1><?php echo $video['name_VI']; ?></h1>
<p>Réalisateur : <?php echo $video['realisateur_VI']; ?></p>
<p>Durée : <?php echo $video['duree_VI']; ?>minuntes</p>
<p>Résumé : <?php echo $video['description_VI']; ?>minuntes</p>
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
<?php foreach($coms as $com): ?>
<p><?php echo $com['content']; ?></p>
    
<?php endforeach; ?>
</div>

