const gulp = require("gulp")
const sass = require("gulp-sass")

// Compile SASS
gulp.task("sass", ()=>{
    return gulp.src("src/style.sass")
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest("dist"))
})

gulp.task("default", ()=>{
    gulp.start("sass")      
    gulp.watch("sass/*", ()=>{
        gulp.start("sass")    
    })
})