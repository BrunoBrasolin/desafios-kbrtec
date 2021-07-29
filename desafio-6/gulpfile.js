const gulp = require('gulp'),
	sass = require('gulp-sass'),
	webp = require('gulp-webp'),
	autoprefixer = require('gulp-autoprefixer'),
	uglify = require('gulp-uglify'),
	svgmin = require('gulp-svgmin'),
	webserver = require('gulp-webserver');

const paths = {
	dev: {
		scss: 'assets/resources/scss/**/*.scss',
		js: 'assets/resources/js/**/*.js',
		img: 'assets/resources/images/**',
		svg: 'assets/resources/svg/**',
	},
	dist: {
		css: 'assets/public/css/',
		js: 'assets/public/js',
		img: 'assets/public/images/',
		svg: 'assets/public/svg/',
	},
};

function compScss() {
	return gulp
		.src(paths.dev.scss)
		.pipe(sass({ outputStyle: 'compressed' }).on('error', sass.logError))
		.pipe(autoprefixer())
		.pipe(gulp.dest(paths.dist.css));
}

function compJs() {
	return gulp
		.src(paths.dev.js)
		.pipe(uglify())
		.pipe(gulp.dest(paths.dist.js));
}

function compImg() {
	return gulp.src(paths.dev.img).pipe(webp()).pipe(gulp.dest(paths.dist.img));
}

function minifySvg() {
	return gulp.src(paths.dev.svg).pipe(svgmin()).pipe(gulp.dest(paths.dist.svg));
}

function serve() {
	return gulp.src('./').pipe(
		webserver({
			port: 5555,
			livereload: true,
			directoryListing: {
				enable: true,
				path: './index.html',
			},
			open: true,
		})
	);
}

function watchFiles() {
	serve();
	gulp.watch(paths.dev.scss, gulp.series('compScss'));
	gulp.watch(paths.dev.js, gulp.series('compJs'));
	gulp.watch(paths.dev.img, gulp.series('compImg'));
	gulp.watch(paths.dev.svg, gulp.series('minifySvg'));
}

gulp.task('compScss', compScss);
gulp.task('compJs', compJs);
gulp.task('compImg', compImg);
gulp.task('minifySvg', minifySvg);
gulp.task('watch', watchFiles);
gulp.task('default', gulp.series('watch'));
