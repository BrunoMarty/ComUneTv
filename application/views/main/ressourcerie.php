
<!--    data-setup='{}'-->

                <?php// foreach($videos as $video): ?>
            <!-- <a href="<?php// echo base_url(); ?>video/<?php// echo $video['id_VI']; ?>"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p>Toto</p>
            </div></a></div> -->

            <?php// endforeach; ?>





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

        <div class="col-md-3">


        <h4> Programmation </h4>
        <img src="/img/mini.jpg" class="col-md-3 img " alt="video" width="80%">
        <img src="/img/mini.jpg" class="col-md-3 img " alt="video" width="80%">
        <img src="/img/mini.jpg" class="col-md-3 img " alt="video" width="80%">


       </div>
