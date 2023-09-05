<?php foreach($projects as $project) {?>
<div class="project__content">
    <a href="/project?id=<?php echo $project->id; ?>">
        
        <picture>
            <source srcset="../build/img/<?php echo $project->imagen;?>.avif" type="image/avif">
            <source srcset="../build/img/<?php echo $project->imagen; ?>.webp" type="image/webp">
            <img loading="lazy" width="200" height="300" src="../build/img/<?php echo $project->imagen;?>.jpg" alt="">
        </picture>
        <div class="project__text">
            <h4><?php echo $project->nombre; ?></h4>
            <p><?php echo $project->descripcion; ?></p>
        </div>
    </a>
</div>
<?php } ?>

