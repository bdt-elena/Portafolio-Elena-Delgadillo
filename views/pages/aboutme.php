<main class="aboutme">
    <div class="nav">
        <div>
            <a href="/">Inicio</a>
            <p>></p>
        </div>
        <div>
            <a href="/aboutme">Sobre Mí</a>
         
        </div>
    </div>
    <h2>Sobre Mí</h2>

    <div class="aboutme__content">
        <div class="aboutme__img">
            <img src="../build/img/elena.jpg" alt="Image Elena">
            <p>Entrevista exposicion de proyectos de Programación web 2 y Animación de Escenarios para la EXPO LMAD 2023 (mejores proyectos del año de la Facultad de Ciencias Físico Matemáticas UANL)</p>
        </div>

        <div class="aboutme__text">
            <h4>Elena Delgadillo</h4>
            <p>Licenciada en Multimedia y Animación Digital de la Facultad de
            Ciencias Físico Matemáticas de la UANL. Me enfoco en el Desarrollo Web e Ilustración Digital, pero también me gusta
            crear Animaciones y editar vídeos o imagenes.</p>

            <h4>Herramientas</h4>
            <div  id="galeria" class="aboutme__skills">
                <ul class="galeria-imagenes"></ul>
            </div>

            <h4>Educación y Cursos</h4>
            <div class="aboutme__education">
                <div class="aboutme__education--border">
                    <p class="aboutme__education--title">Licenciatura en Multimedia y Animación Digital</p>
                    <p class="aboutme__education--desc">Facultad de Ciencias Físico Matemáticas</p>
                    <p class="aboutme__education--date">Completed</p>
                </div>
                
                <div class="aboutme__education--border">
                    <p class="aboutme__education--title">Curso en Desarrollo Web (Udemy)</p>
                    <p class="aboutme__education--desc">Creación de Multiples Proyectos con SASS, PHP, JS, etc.</p>
                    <p class="aboutme__education--date">Completed</p>

                    <div class="aboutme__certificate">
                    <a href="https://www.udemy.com/s/?hash=UC-c2455cfc-a848-40b0-9315-e36fb19a7a4c">Ver Certificado</a>
                    </div>
                </div>
                
                <div class="aboutme__education--border">
                    <p class="aboutme__education--title">Curso React JS</p>
                    <p class="aboutme__education--date">Actualidad</p>
                </div>
                
            </div>

            <h4>Enlaces</h4>
            <div class="aboutme__social">
                <?php include __DIR__ . '/../templates/redes.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php
$script = '
    <script src="/build/js/gallery.js"></script>
';

?>