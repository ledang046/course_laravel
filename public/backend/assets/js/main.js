$.noConflict();
jQuery(document).ready(function($) {

	"use strict";

	[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {
		new SelectFx(el);
	});

	jQuery('.selectpicker').selectpicker;

	$('.search-trigger').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').addClass('open');
	});

	$('.search-close').on('click', function(event) {
		event.preventDefault();
		event.stopPropagation();
		$('.search-trigger').parent('.header-left').removeClass('open');
	});

	$('.equal-height').matchHeight({
		property: 'max-height'
	});

	// var chartsheight = $('.flotRealtime2').height();
	// $('.traffic-chart').css('height', chartsheight-122);


	// Counter Number
	$('.count').each(function () {
		$(this).prop('Counter',0).animate({
			Counter: $(this).text()
		}, {
			duration: 3000,
			easing: 'swing',
			step: function (now) {
				$(this).text(Math.ceil(now));
			}
		});
	});


	 
	 
	// Menu Trigger
	$('#menuToggle').on('click', function(event) {
		var windowWidth = $(window).width();   		 
		if (windowWidth<1010) { 
			$('body').removeClass('open'); 
			if (windowWidth<760){ 
				$('#left-panel').slideToggle(); 
			} else {
				$('#left-panel').toggleClass('open-menu');  
			} 
		} else {
			$('body').toggleClass('open');
			$('#left-panel').removeClass('open-menu');  
		} 
			 
	}); 

	 
	$(".menu-item-has-children.dropdown").each(function() {
		$(this).on('click', function() {
			var $temp_text = $(this).children('.dropdown-toggle').html();
			$(this).children('.sub-menu').prepend('<li class="subtitle">' + $temp_text + '</li>'); 
		});
	});


	// Load Resize 
	$(window).on("load resize", function(event) { 
		var windowWidth = $(window).width();  		 
		if (windowWidth<1010) {
			$('body').addClass('small-device'); 
		} else {
			$('body').removeClass('small-device');  
		} 
		
	});

    

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
    
    /**
     * Sắp xếp theo id
     * 
     */ 
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

    /**
     * Sắp xếp theo id
     * 
     */ 
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


  
 
});