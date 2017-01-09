/**
 * Created by USER on 1/9/2017.
 */
var gulp = require('gulp');

gulp.task('default', function() {
    var d = new Date();
    var gulpTS = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

    console.log('task last rua at: ' + gulpTS);
});