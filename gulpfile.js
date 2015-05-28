var gulp         = require('gulp'),
	prefix       = require('gulp-autoprefixer'),
	imagemin     = require('gulp-imagemin'),
	livereload   = require('gulp-livereload'),
	minify       = require('gulp-minify-css'),
	newer        = require('gulp-newer'),
	pixrem       = require('gulp-pixrem'),
	rename	     = require('gulp-rename'),
	sass         = require('gulp-sass'),
	sourcemaps   = require('gulp-sourcemaps'),
	uglify       = require('gulp-uglify'),
	uglifyConcat = require('gulp-uglifyjs'),
	gutil        = require('gulp-util'),
	pngcrush     = require('imagemin-pngcrush'),
	onError      = function (err) {
		gutil.log(gutil.colors.yellow(err));
		this.emit('end');
	};


// ==================== STYLE ==================== //

var styleSrc   = 'styles/*.scss',
	styleDest  = '.';

gulp.task('styleSrc', function() {
	return gulp.src(styleSrc)
		.pipe(sourcemaps.init())
		.pipe(sass().on('error', onError))
		.pipe(prefix("last 2 versions", "> 1%", "ie 8"))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest(styleDest))
		.pipe(livereload());
});


gulp.task('styleDist', function() {
	return gulp.src(styleSrc)
		.pipe(sass().on('error', onError))
		.pipe(minify({
			noAdvanced: true // disable advanced features (ie removing pixel fallbacks for rems)
		}))
		.pipe(pixrem('16px', {atrules: true})) // default is 16px
		.pipe(prefix("last 2 versions", "> 1%", "ie 8"))
		.pipe(gulp.dest(styleDest))
		.pipe(livereload());
});


// ==================== OPTIMIZE IMAGES ==================== //

var imgSrc  = './img/src/',
	imgDest = './img/dist';

gulp.task('imagemin', function () {
	return gulp.src(imgSrc)
		.pipe(newer(imgDest))
		.pipe(imagemin({
			optimizationLevel: 4,
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [pngcrush()]
		}))
		.pipe(gulp.dest(imgDest));
});


// ==================== WATCH ==================== //

gulp.task('watchSrc', function() {
	livereload.listen();

	gulp.watch(
		styleSrc,
		['styleSrc']
	);

	gulp.watch(
		imgSrc,
		['imagemin']
	);

});

gulp.task('watchDist', function() {
	livereload.listen();

	gulp.watch(
		styleSrc,
		['styleDist']
	);

	gulp.watch(
		imgSrc,
		['imagemin']
	);

});


gulp.task('default', ['styleSrc', 'imagemin', 'watchSrc']);
gulp.task('dist', ['styleDist', 'imagemin', 'watchDist']);

