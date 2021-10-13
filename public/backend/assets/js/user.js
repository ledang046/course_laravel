jQuery.noConflict();
jQuery(document).ready(function($) {    
    /**
     * Sắp xếp theo id
     * 
     */ 
    $.ajax({
        url: 'http://localhost/course_laravel/public/api/users',
        method: 'GET',
        dataType: 'json',
    })
    .success(function(data) { 
        document.getElementById("test").innerHTML = data.html;
        console.log(data.status);
    })
    .error(function() {
        alert("fail");
    });

    $('#arrange_id_asc').on('click', function(event) {
        $.ajax({
            url: 'http://localhost/course_laravel/public/api/arrangeuser/id/asc',
            method: 'GET',
            dataType: 'json',
        })
        .success(function(data) {
            document.getElementById("test").innerHTML = data.html;
            console.log(data.status);
        })  
        .error(function() {
            alert("fail");
        }); 
    });
    $('#arrange_id_desc').on('click', function(event) {
        $.ajax({
            url: 'http://localhost/course_laravel/public/api/arrangeuser/id/desc',
            method: 'GET',
            dataType: 'json',
        })
        .success(function(data) {
            document.getElementById("test").innerHTML = data.html;
            console.log(data.status);
        })
        .error(function() {
            alert("fail");
        }); 
    });
    $('#arrange_name_asc').on('click', function(event) {
        $.ajax({
            url: 'http://localhost/course_laravel/public/api/arrangeuser/name/asc',
            method: 'GET',
            dataType: 'json',
        })
        .success(function(data) {
            document.getElementById("test").innerHTML = data.html;
            console.log(data.status);
        })
        .error(function() {
            alert("fail");
        }); 
    });
    $('#arrange_name_desc').on('click', function(event) {
        $.ajax({
            url: 'http://localhost/course_laravel/public/api/arrangeuser/name/desc',
            method: 'GET',
            dataType: 'json',
        })
        .success(function(data) {
            document.getElementById("test").innerHTML = data.html;
            console.log(data.status);
        })
        .error(function() {
            alert("fail");
        }); 
    });

    $('#6').on('click', function(event) {
        alert("hello");
    });
    
});