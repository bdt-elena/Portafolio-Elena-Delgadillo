<main class="projects">

     <div class="nav">
        <div>
            <a href="/">Inicio</a>
            <p>></p>
        </div>
        <div>
            <a href="/projects">Proyectos</a>
        </div>
    </div>
    <h2 >Proyectos</h2>
    <p>En este apartado se encuentran algunos de los proyectos que he realizado en estos ultimos años. Desarrollo Web, Edición, Ilustración y Animación 2D. Así como puedo trabajar en proyectos de desarrollo web también puedo desenvolverme como Ilustrador, Editor y Animador 2D por computadora.</p>

    <p>En el apartado de web, podrá clickear para conocer más sobre los proyectos publicados (herramientas utilizadas, funcionalidad y breve descripción).</p>
    <p>Este portafolio solo es una muestra sencilla de lo que puedo hacer en distintas áreas. Actualmente me encuentro trabajando en más proyectos para mostrar proximamente por aquí. Asi que... Éche un vistazo y espero sea de su agrado.</p>

  

    <div class="projects__section">
    <h3 style="margin-bottom: 0;">Paginas Web & Diseño Web</h3>
    <div class="swiper">
  
        <div class="swiper-wrapper">
            <?php foreach($projects as $project) {?>
                <div class="swiper-slide content">
                    <a href="/project?id=<?php echo $project->id; ?>">
                        
                        <picture>
                            <source srcset="../build/img/<?php echo $project->imagen;?>.avif" type="image/avif">
                            <source srcset="../build/img/<?php echo $project->imagen; ?>.webp" type="image/webp">
                            <img  width="200" height="300" src="../build/img/<?php echo $project->imagen;?>.jpg" alt="">
                        </picture>
                        <div class="content__text">
                            <h4><?php echo $project->nombre; ?></h4>
                            <p><?php echo $project->descripcion; ?></p>
                        </div>
                    </a>
                </div>
            <?php } ?>
            ...
        </div>

        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>

    <h3 style="margin-top: 20px;">Banners & Publicidad</h3>
        <div class="image-projects">
            <div class="image-projects__gallery">
                <?php include __DIR__ . '/../templates/galery.php'; ?>    
            </div>
        </div>

    <h3>Ilustración</h3>
        <div class="image-projects">
            
        <div class="art">
            <div class="art__pri">
                
            </div>
            <div class="art__sec">
            
                <?php foreach($projectsArt as $projectA){ ?>
                    <div>
                        <img loading="lazy"  class="image-projects__img" src="../build/img/illustration/<?php echo $projectA->nombre;?>" alt="illustration img">
                    </div>
                <?php } ?>
            </div>
        </div>
            
        </div>
    <h3>Animación 2D</h3>
        <div class="animation">
            <div class="animation__videos">
                <div id="video1">
                    <video controls src="/video/defleppard.mp4">
                        Tu navegador no admite el elemento <code>video</code>
                    </video>
                    <h4>Animated Photograph</h4>
                    <p>After Effects, Toon Boom H & CSP</p>
                </div>
                <div id="video2">
                    <video controls src="/video/porsiempre.mp4">
                        Tu navegador no admite el elemento <code>video</code>
                    </video>
                    <h4>Por Siempre - Animación Toon Boom</h4>
                    <p>After Effects, Toon Boom H & CSP</p>
                </div>
                <div id="video3">
                    <video controls src="/video/nostalgiclove.mp4">
                        Tu navegador no admite el elemento <code>video</code>
                    </video>
                    <h4>Nostalgic love Project</h4>
                    <p>Clip Studio Paint & After Effects</p>
                </div>
            </div>
        </div>
    </div>
    
</main>

