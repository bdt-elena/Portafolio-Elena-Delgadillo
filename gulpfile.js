const { src, dest, watch, parallel } = require('gulp');

const sass = require('gulp-sass')(require('sass'));

const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');
const sourcemaps = require('gulp-sourcemaps');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

function css(){
    return src(paths.scss)
    .pipe( sass({outputStyle: 'expanded'}))
    .pipe(  dest('public/build/css') );
}

function imagenes() {
    return src(paths.imagenes)
        .pipe( cache(imagemin({ optimizationLevel: 3})))
        .pipe( dest('public/build/img'))
}

function versionWebp( done ) {
    const opciones = {
        quality: 50
    };
    src('src/img/**/*.{png,jpg}')
        .pipe( webp(opciones) )
        .pipe( dest('public/build/img') )
    done();
}

function versionAvif( done ) {
    const opciones = {
        quality: 50
    };
    src('src/img/**/*.{png,jpg}')
        .pipe( avif(opciones) )
        .pipe( dest('public/build/img') )
    done();
}

function javascript() {
    return src(paths.js)
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest('public/build/js'));
}

function dev(done){
    watch(paths.scss, css);
    watch( paths.js, javascript );
    watch( paths.imagenes, imagenes)
    done()
}

exports.css = css;
exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.javascript = javascript;
exports.dev = parallel(css,javascript, versionWebp, versionAvif, imagenes, dev);
exports.build = parallel(css,javascript, versionWebp, versionAvif, imagenes);