var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require('gulp-rename');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var autoPrefixer = require('gulp-autoprefixer');
var cssComb = require('gulp-csscomb');
var cmq = require('gulp-merge-media-queries');
var cleanCss = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');
var print = require('gulp-print');
var sassGlob = require('gulp-sass-glob');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var gutil = require('gulp-util');
var ftp = require('vinyl-ftp');

var docs = '../assets/';
var subfolder = 'css';

gulp.task('sass', function () {
    subfolder = 'css';
    gulp.src(['./css/main.scss'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        // .pipe(sourcemaps.init())
        .pipe(sassGlob())
        .pipe(sass())
        .pipe(autoPrefixer())
        .pipe(cssComb())
        .pipe(cmq({log: true}))
        .pipe(concat('main.css'))
        .pipe(gulp.dest(docs + 'css/'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(cleanCss())
        // .pipe(sourcemaps.write())
        .pipe(gulp.dest(docs + 'css/'))
        .pipe(reload({stream: true}))
});

gulp.task('js', function () {
    gulp.src(['./js/*.js'])
        .pipe(concat('main.js'))
        .pipe(gulp.dest(docs + 'js/'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(uglify())
        .pipe(gulp.dest(docs + 'js/'))
        .pipe(reload({stream: true}));
});

gulp.task('images', function () {
    gulp.src(['./img/**/*'])
        .pipe(print())
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(imagemin({
            optimizationLevel: 3,
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()],
            interlaced: true
        }))
        .pipe(gulp.dest(docs + 'img/'))
});

gulp.task('fonts', function () {
    return gulp.src('./fonts/**/*.*')
        .pipe(gulp.dest(docs + 'fonts/'))
});

gulp.task('vendor-copy', function () {
   /* return gulp.src('./node_modules/@fortawesome/fontawesome/index.js')
        .pipe(gulp.dest(docs + 'js/'))*/
});

gulp.task('vendor', function () {
   /* gulp.src(['./node_modules/@fortawesome/fontawesome/styles.css'])
        .pipe(plumber({
            handleError: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(cssComb())
        .pipe(cmq({log: true}))
        .pipe(concat('vendor.css'))
        .pipe(gulp.dest(docs + 'css/'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(cleanCss())
        .pipe(gulp.dest(docs + 'css/'));*/
});

gulp.task('deploy-ftp', function () {

    var conn = ftp.create({
        host: 'grol55wy.beget.tech',
        user: 'grol55wy',
        password: 'liDDJhuJ',
        parallel: 10,
        log: gutil.log
    });

    const path = '/truecustoms.infoblog72.ru/public_html/wp-content/themes/truecustoms/assets/';

    var globs = [
        '../assets/' + subfolder + '/**'
    ];

    conn.rmdir(path + subfolder, function (e) {
        if (e === undefined) {
            return gulp.src(globs, {base: '.', buffer: false})
                .pipe(conn.newer(path)) // only upload newer files
                .pipe(conn.dest(path));
        }
        return console.log(e);
    });
});

gulp.task('watch', function () {
    browserSync.init({
        proxy: 'http://truecustoms.infoblog72.ru'
    });
    gulp.watch('../**/*.php').on('change', browserSync.reload);
    gulp.watch(['./css/**/*.scss', './css/main.scss'], ['sass', 'deploy-ftp']);
    gulp.watch('./js/*.js', ['js']);
    gulp.watch('./img/**/*', ['images']);
});

gulp.task('default', ['sass', 'js', 'images', 'fonts', 'vendor-copy', 'vendor', 'watch']);