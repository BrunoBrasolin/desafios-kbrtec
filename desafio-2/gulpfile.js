const gulp = require("gulp"),
  sass = require("gulp-sass"),
  autoprefixer = require("gulp-autoprefixer"),
  concat = require("gulp-concat"),
  minify = require("gulp-minify"),
  babel = require("gulp-babel");

const paths = {
  dev: {
    scss: "assets/scss/**/*.scss",
    js: "assets/js/**/*.js",
    img: "assets/img/**",
  },
  dist: {
    css: "public/css/",
    js: "public/js",
    img: "public/img/",
  },
};

function compScss() {
  return gulp
    .src(paths.dev.scss)
    .pipe(autoprefixer())
    .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
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


function watchFiles() {
  gulp.watch(paths.dev.scss, gulp.series("compScss"));
  gulp.watch(paths.dev.js, gulp.series("compJs"));
  gulp.watch(paths.dev.img, gulp.series("compImg"));
}

gulp.task("compScss", compScss);
gulp.task("compJs", compJs);
gulp.task("compImg", compImg);
gulp.task("watch", watchFiles);
gulp.task("default", gulp.series("watch"));
