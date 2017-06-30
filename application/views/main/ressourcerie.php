<h1>Com.Une.TV</h1>
<!--    data-setup='{}'-->

    <?php foreach($videos as $video): ?>
<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 film">
    <a href="<?php echo base_url(); ?>/video/<?php echo $video['id_VI']; ?>"><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><p>Toto</p>
        </div></a>
</div>


<?php endforeach; ?>
