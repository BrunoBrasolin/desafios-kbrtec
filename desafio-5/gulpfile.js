const gulp = require("gulp"),
  sass = require("gulp-sass"),
  webp = require("gulp-webp"),
  autoprefixer = require("gulp-autoprefixer"),
  concat = require("gulp-concat"),
  minify = require("gulp-minify"),
  svgmin = require("gulp-svgmin"),
  babel = require("gulp-babel");

const paths = {
  dev: {
    scss: "resources/scss/**/*.scss",
    js: "resources/js/**/*.js",
    img: "resources/images/**",
    svg: "resources/svg/**",
  },
  dist: {
    css: "public/css/",
    js: "public/js",
    img: "public/images/",
    svg: "public/svg/",
  },
};

function compScss() {
  return gulp
    .src(paths.dev.scss)
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest(paths.dist.css));
}

function compJs() {
  return gulp
    .src(paths.dev.js)
    .pipe(concat("main.js"))
    .pipe(
      babel({
        presets: ["@babel/env"],
      })
    )
    .pipe(minify())
    .pipe(gulp.dest(paths.dist.js));
}

function compImg() {
  return gulp.src(paths.dev.img).pipe(gulp.dest(paths.dist.img));
}

function convertToWebp() {
  return gulp.src(paths.dev.img).pipe(webp()).pipe(gulp.dest(paths.dist.img));
}

function minifySvg() {
  return gulp.src(paths.dev.svg).pipe(svgmin()).pipe(gulp.dest(paths.dist.svg));
}


function watchFiles() {
  gulp.watch(paths.dev.scss, gulp.series("compScss"));
  gulp.watch(paths.dev.js, gulp.series("compJs"));
  gulp.watch(paths.dev.img, gulp.series("compImg"));
  gulp.watch(paths.dev.img, gulp.series("convertToWebp"));
  gulp.watch(paths.dev.svg, gulp.series("minifySvg"));
}

gulp.task("compScss", compScss);
gulp.task("compJs", compJs);
gulp.task("compImg", compImg);
gulp.task("convertToWebp", convertToWebp);
gulp.task("minifySvg", minifySvg);
gulp.task("watch", watchFiles);
gulp.task("default", gulp.series("watch"));