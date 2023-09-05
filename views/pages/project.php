<main class="project-selected">
    <div class="nav">
        <div>
            <a href="/">Inicio</a>
            <p>></p>
        </div>
        <div>
            <a href="/projects">Proyectos</a>
            <p>></p>
        </div>
        <div>
            <a><?php echo $project->nombre; ?></a>
        </div>
    </div>
    <h2><?php echo $project->nombre; ?></h2>

    <!--Introduccion al proyecto-->
    <div class="project-selected__introduction">
        <p>Frontend & UI/X Design by Elena Delgadillo</p>
        <div class="project-selected__enc">
            <div>
                <div class="project-selected__img">
                    <picture>
                        <source srcset="/build/img/<?php echo $project->imagen; ?>.avif" type="image/avif">
                        <source srcset="/build/img/<?php echo $project->imagen; ?>.webp" type="image/webp">
                        <img loading="lazy" width="200" height="300" src="/build/img/<?php echo $project->imagen; ?>" alt="Imagen principal">
                    </picture>
                </div>
                <div class="computer"></div>
                <div class="computer__body"></div>
                <div class="computer__floor"></div>
            </div>
            <div class="project-selected__desc">
                <h3>Descripción</h3>
                <p><?php echo $project->descripcion; ?></p>

                
                
            </div>
            
        </div>
    </div>

    <h3>Funcionalidad</h3>
    <p><?php echo $project->funcionalidad; ?></p>
    <h3 style="margin-bottom: 20px;">Vistas Desktop</h3>

    <!--Galeria desktop-->
    <div class="project-selected__desktop-gallery">
        <?php foreach($images as $image){ ?>
        <div>
            <picture>
                <source srcset="/build/img/<?php echo $image->imagen; ?>.avif" type="image/avif">
                <source srcset="/build/img/<?php echo $image->imagen; ?>.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="/build/img/<?php echo $image->imagen; ?>" alt="Imagenes del Proyecto">
            </picture>
        </div>
        <?php } ?>
    </div>

    <!--Informacion de herramientas y clicks-->
    <div class="project-selected__info">
        
        <div class="project-selected__lista">
            <h3>Tecnologías y Herramientas</h3>

            <input id="toolsHidden" type="hidden" name="tags" value="<?php echo $project->tecnologias ?? ''; ?>"> 

            <ul id="listaTools">
                
            </ul>
        </div>
        
        <div>
            <h3>Ver Proyecto</h3>
            <div class="project-selected__icons">
                    <div>
                        <?php if($project->github != ''){ ?>
                        <a href="<?php echo $project->github; ?>">
                            <img src="https://cdn-icons-png.flaticon.com/512/25/25231.png" alt="Logo github">
                        </a>
                        <?php } ?>
                    </div>
                    <div>
                        <?php if($project->netlify != ''){ ?>
                        <a href="<?php echo $project->netlify; ?>">
                            <img src="https://seeklogo.com/images/N/netlify-logo-BD8F8A77E2-seeklogo.com.png" alt="Logo Netlify">
                        </a>
                        <?php } ?>
                    </div>
            </div>
        </div>
        
    </div>
   
    <!--Galeria responsiva-->
    

    <?php if($responsive){ ?>
    <div>
        <h3>Vistas en Dispositivos Móviles</h3>
        <p>Una muestra de las vistas en dispositivos móviles.</p>
        <div class="project-selected__mobile-gallery">
            <?php foreach($responsive as $imagen){ ?>
            <div class="project-selected__picture">
                <picture>
                    <source srcset="/build/img/<?php echo $imagen->imagen;?>.avif" type="image/avif">
                    <source srcset="/build/img/<?php echo $imagen->imagen;?>.webp" type="image/webp">
                    <img loading="lazy" width="200" height="300" src="/build/img/<?php echo $imagen->imagen;?>" alt="Imagenes Mobile">
                </picture>
            </div>
            <?php } ?>
        </div>
    </div>
    <?php } ?>

    

</main>

<?php
$script = '
    
    
    <script src="/build/js/herramientas.js"></script>
';

?>