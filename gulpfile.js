const gulp = require("gulp")
const sass = require("gulp-sass")

// Compile SASS
gulp.task("sass", ()=>{
    return gulp.src("sass/*.sass")
        .pipe(sass().on("error", sass.logError))
        .pipe(gulp.dest("css"))
})

gulp.task("default", ()=>{
    gulp.start("sass")      
    gulp.watch("sass/*", ()=>{
        gulp.start("sass")    
    })
})