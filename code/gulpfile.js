const { src, dest, parallel, series, watch, lastRun } = require('gulp');
// const ejs = require('gulp-twig');
const ejs = require('gulp-ejs');
const indent = require('gulp-html-beautify');
const rename = require('gulp-rename');
const sass = require('gulp-sass');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const mmq = require('gulp-merge-media-queries');
const imagemin = require('gulp-imagemin');
const pngquant = require('imagemin-pngquant');
const mozjpeg = require('imagemin-mozjpeg');
const browserSync = require('browser-sync');
const ssi = require('connect-ssi');
const minifyCSS = require('gulp-csso');
const del = require('del');
const concat = require('gulp-concat');



// localhost起動　browserSyncTask()
// 自動リロード　browserReloadTask()
// 画像圧縮　imgTask()
// ejs→htmlコンパイル　ejsHtmlTask()
// ejs→wp_templateコンパイル　ejsWpTask()
// scssコンパイル　scssTask()

function browserSyncTask(done){
    browserSync.init({
        server: {
            baseDir: 'public',
            middleware: [
                ssi({
                    baseDir: 'public',
                    notify: false, //通知
                    ext: ".html"
                })
            ]
        },
        port: 4000,
        reloadOnRestart: true
    });
    done();
}
function browserReloadTask(done){
    browserSync.reload();
    done();
}

function imgTask() {
    return src('src/img/**/*', { since: lastRun(imgTask) })
    .pipe(imagemin([
        pngquant('85-90'),
        mozjpeg({
            quality: 85,
            progressive: true
        }),
        imagemin.svgo(
            {
                plugins: [
                    // viewBox属性を削除する（widthとheight属性がある場合）。
                    // 表示が崩れる原因になるので削除しない。
                    { removeViewBox: false },
                    // <metadata>を削除する。
                    // 追加したmetadataを削除する必要はない。
                    { removeMetadata: false },
                    // SVGの仕様に含まれていないタグや属性、id属性やvertion属性を削除する。
                    // 追加した要素を削除する必要はない。
                    { removeUnknownsAndDefaults: false },
                    // コードが短くなる場合だけ<path>に変換する。
                    // アニメーションが動作しない可能性があるので変換しない。
                    { convertShapeToPath: false },
                    // 重複や不要な`<g>`タグを削除する。
                    // アニメーションが動作しない可能性があるので変換しない。
                    { collapseGroups: false },
                    // SVG内に<style>や<script>がなければidを削除する。
                    // idにアンカーが貼られていたら削除せずにid名を縮小する。
                    // id属性は動作の起点となることがあるため削除しない。
                    { cleanupIDs: false },
                ]
            }
        ),
        imagemin.optipng(),
        imagemin.gifsicle()
    ]))
    .pipe(dest('public/assets/img'))
}

function ejsHtmlTask() {
    var html = true;
    return src(['src/ejs/**/*.ejs', '!src/ejs/components/**/*.ejs', '!src/ejs/_**/*', '!src/ejs/**/_*'])
    .pipe(ejs())
    .pipe(indent({
        indent_size: 4,
        // indent_with_tabs: true
    }))
    .pipe(rename(function(path){
        path.extname = ".html";
    }))
    .pipe(dest('public'))
}
function ejsWpTask() {
    return src(['src/ejs/**/*.ejs', '!src/ejs/**/_*', '!src/ejs/_**/*', 'src/ejs/_layouts/header.ejs', 'src/ejs/_layouts/footer.ejs'])
    .pipe(ejs())
    .pipe(indent({
        indent_size: 4,
        // indent_with_tabs: true
    }))
    .pipe(rename(function(path){
        path.extname = ".php";
    }))
    .pipe(dest('public/wp_themes'))
}
function ejsWpTask2() {
    return src(['src/ejs/**/*.php'])
    .pipe(dest('public/wp_themes'))
}
function ejsWpTask3() {
    return src(['src/ejs/style.css'])
    .pipe(dest('public/wp_themes'))
}
function ejsWpTask4() {
    return src('src/ejs/screenshot.png')
    .pipe(imagemin([
        pngquant('85-90'),
        mozjpeg({
            quality: 85,
            progressive: true
        }),
        imagemin.optipng(),
        imagemin.gifsicle()
    ]))
    .pipe(dest('public/wp_themes'))
}

function scssTask() {
    return src('src/scss/**/*.scss', { sourcemaps: true })
    .pipe(sass({
        outputStyle: "expanded",
        sourcemaps: true
    }))
    .pipe( postcss([ autoprefixer({
        // ☆IEは11以上、Androidは4.4以上
        // その他は最新2バージョンで必要なベンダープレフィックスを付与する
        "overrideBrowserslist": ["last 2 versions", "ie >= 11", "Android >= 4"],
        cascade: false,
        grid: "autoplace"
    }) ]) )
    // .pipe(mmq())
    // .pipe(minifyCSS())
    .pipe(dest('public/assets/css', { sourcemaps: './maps' }))
}

function jsTask() {
    return src('src/javascript/*.js', { sourcemaps: true })
        .pipe(dest('public/assets/js', { sourcemaps: true }))
}
// function jsTask() {
//     return src('src/javascript/*.js', { sourcemaps: true })
//         .pipe(concat('app.min.js'))
//         .pipe(dest('public/assets/js', { sourcemaps: true }))
// }
// function tsTask(_config) {
//     // typescriptトランスコンパイル設定ファイルの読み込み
//     const tsconfig = ts.createProject('./tsconfig.json');
//     return ()=> {
//         // tsファイルをes5の内容へ変換、指定先へ変換結果を出力
//         return gulp.src("typescriptファイルパスの指定")
//         .pipe(tsconfig()).js 
//         .pipe(gulp.dest("出力先パスの設定"));
//     };
// }
// gulp.task('ts', tsTask());

function watchEjsTask(){
    watch('src/ejs/**/*.ejs',
    series(
        parallel(ejsHtmlTask),
        browserReloadTask
        )
    )
}
function watchCssTask(){
    watch('src/scss/**/*.scss',
    series(
        parallel(scssTask),
        browserReloadTask
        )
    )
}
function watchJsTask(){
    watch('src/javascript/**/*.js',
    series(
        parallel(jsTask),
        browserReloadTask
        )
    )
}
function watchImgTask(){
    watch('src/img/**/*',
    series(
        parallel(imgTask),
        browserReloadTask
        )
    )
}

exports.default = parallel(
    watchEjsTask, watchCssTask, watchJsTask, watchImgTask, browserSyncTask
);
exports.wp_template = parallel(
    ejsWpTask, ejsWpTask2, ejsWpTask3, ejsWpTask4,
);
exports.img = parallel(
    imgTask
);