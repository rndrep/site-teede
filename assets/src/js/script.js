$(function() {

$("#block2").css( "display", "none");

$("#tab1" ).click(function() {
	$("#tab2" ).removeClass("active_button");
	$("#tab1" ).addClass("active_button");
	$("#block1").css( "display", "block");
	$("#block2").css( "display", "none");
});

$( "#tab2" ).click(function() {
	$("#tab1" ).removeClass("active_button");
	$("#tab2" ).addClass("active_button");
	$("#block1").css( "display", "none");
	$("#block2").css( "display", "block");
});


    //$(function() {
        // Owl Carousel
        //var owl = $(".owl-carousel");
        //owl.owlCarousel({
$(document).ready(function(){$(function() {countup2("counte", $(".counte").text());countup2("countu", $(".countu").text());countup2("counto", $(".counto").text());countup2("counta", $(".counta").text());countup2("countf", $(".countf").text());countup2("counts", $(".counts").text());countup2("countt", $(".countt").text());countup2("countq", $(".countq").text());countup2("counti", $(".counti").text());});	
$('.sem-more').click(function(e) {
          e.preventDefault();

          var that = this;
          var container = $(that).parents('.container');
          var target = container.children('.target');
          
          if ($(that).is('.animate')) {

            $(that).addClass('disabled').text('...');
              target.addClass('animated tdFadeInRight');

              target.one('webkitAnimationEnd oanimationend msAnimationEnd animationend', function(e) {
                $(that).removeClass('disabled animate').addClass('reset').text('Скрыть');
              });

          } else {

            $(that).removeClass('reset').addClass('animate').text('Узнать больше');
            target.attr('class', '').addClass('target');

          }
          
        });

        $('.animationlist').change(function(){
          var that = this;
          var container = $(that).parents('.container');
          
          container.find('button').attr('class', '').addClass('animate').text('Animate');
          container.children('.target').attr('class', '').addClass('target');
        });
$('#gal').owlCarousel({
            //items: 4,
            margin: 10,
            loop: true,
            autoplay: true,
            speed: 5000,
            nav: true,
            navText: [
                '<span class="arrow-owl arrow-left"></span>',
                '<span class="arrow-owl arrow-right"></span>'
            ],


responsive:{ 
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
 

        });

        	$('#his').owlCarousel({
            //items: 5,
            margin: 10,
            loop: true,
            //autoplay: true,
            speed: 5000,
            nav: true,
            navText: [
                '<span class="arrow-owl arrow-left"></span>',
                '<span class="arrow-owl arrow-right"></span>'
            ],


responsive:{ 
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:5
            }
        }
 

        });
        	$(window).scroll(function() {
		if($(this).scrollTop() > 300) {
		$('#goTop').fadeIn();
		} else {
		$('#goTop').fadeOut();
		}
	});
	
	$('#goTop').click(function() {
		$('body,html').animate({scrollTop:0},700);
	});
!function(t){t.extend(t.easing,{spincrementEasing2:function(t,a,e,n,r){return a===r?e+n:n*(-Math.pow(2,-10*a/r)+1)+e}}),t.fn.spincrement2=function(a){function e(t,a){if(t=t.toFixed(a),a>0&&"."!==r.decimalPoint&&(t=t.replace(".",r.decimalPoint)),r.thousandSeparator)for(;o.test(t);)t=t.replace(o,"$1"+r.thousandSeparator+"$2");return t}var n={from:0,to:null,decimalPlaces:null,decimalPoint:".",thousandSeparator:"",duration:1e3,leeway:50,easing:"spincrementEasing2",fade:!0,complete:null},r=t.extend(n,a),o=new RegExp(/^(-?[0-9]+)([0-9]{3})/);return this.each(function(){var a=t(this),n=r.from;a.attr("data-from")&&(n=parseFloat(a.attr("data-from")));var o;if(a.attr("data-to"))o=parseFloat(a.attr("data-to"));else if(null!==r.to)o=r.to;else{var i=t.inArray(r.thousandSeparator,["\\","^","$","*","+","?","."])>-1?"\\"+r.thousandSeparator:r.thousandSeparator,l=new RegExp(i,"g");o=parseFloat(a.text().replace(l,""))}var c=r.duration;r.leeway&&(c+=Math.round(r.duration*(2*Math.random()-1)*r.leeway/100));var s;if(a.attr("data-dp"))s=parseInt(a.attr("data-dp"),10);else if(null!==r.decimalPlaces)s=r.decimalPlaces;else{var d=a.text().indexOf(r.decimalPoint);s=d>-1?a.text().length-(d+1):0}a.css("counter",n),r.fade&&a.css("opacity",0),a.animate({counter:o,opacity:1},{easing:r.easing,duration:c,step:function(t){a.html(e(t*o,s))},complete:function(){a.css("counter",null),a.html(e(o,s)),r.complete&&r.complete(a)}})})}}(jQuery);
        function countup2(className){
        var countBlockTop2 = $("."+className).offset().top;
        var windowHeight2 = window.innerHeight;
        var show2 = true;
                    
        $(window).scroll( function (){
            if(show2 && (countBlockTop2 < $(window).scrollTop() + windowHeight2)){ 
                show2 = false;
                        
                $('.'+className).spincrement2({
                    from: 1,
                    duration: 4000,
                });
            }
        })  
    }

    

        
                
   





    });

   // $('.btn .btn-warning').html('r');

// bootbox.dialog({
//   message: "Custom message",
//   title: "Custom title",
//   buttons: {
//     danger: {
//       label: "Custom Cancel",
//       className: "btn-danger",
//       callback: function() {
//         //do something
//       }
//     },
//     main: {
//       label: "Custom OK",
//       className: "btn-primary",
//       callback: function() {
//         //do something else
//       }
//     }
//   }
// });

// $("a .glyphicon-trash").click(function(e) { console.log('delete');
// 	 e.preventDefault();
//    bootbox.confirm({
//      title: "danger - danger - danger",
//      message: "Are you sure of this?",
//      buttons: {
//         cancel: {
//         label: "Cancel",
//         className: "btn-default pull-right"
//      },
//      confirm: {
//         label: "Delete",
//         className: "btn-danger pull-left"
//     }
//   },
//   callback: function(result) {
//     // Do your stuff here
//   }
// });
// });




//  buttons: {
//             confirm: {
//                 label: 'Yes',
//                 className: 'btn-danger'
//             },
//             cancel: {
//                 label: 'No',
//                 className: 'btn-success pull-right  margin-left-10px'
//             }
// }

//     bootbox.confirm({
//      title: "danger - danger - danger",
//      message: "Are you sure of this?",
//      buttons: {
//         cancel: {
//         label: "Cancel",
//         className: "btn-default pull-right"
//      },
//      confirm: {
//         label: "Delete",
//         className: "btn-danger pull-left"
//     }
//   },
//   callback: function(result) {
//     // Do your stuff here
//   }
// });
  

   // $(".delete-button").on("click",function(e){
   // e.preventDefault();
   // var modelId = $(this).data('id');
   // bootbox.alert("Hello world!", function() {
   //      console.log("Alert Callback");
   // });
	// bootbox.alert("Hello world!");

   // Run bootbox.alert() here!!
   // Based on the bootbox result, you can decide to fire the initial event again:
   // $(this).unbind('submit').submit()
// });

 //  	yii.confirm = function (message, ok, cancel) {

	//     bootbox.confirm(
	//         {
	//             message: message,
	//             buttons: {
	//                 confirm: {
	//                     label: "OK"
	//                 },
	//                 cancel: {
	//                     label: "Cancel"
	//                 }
	//             },
	//             callback: function (confirmed) {
	//                 if (confirmed) {
	//                     !ok || ok();
	//                 } else {
	//                     !cancel || cancel();
	//                 }
	//             }
	//         }
	//     );
	//     // confirm will always return false on the first call
	//     // to cancel click handler
	//     return false;
	// }


      // --- Delete action (bootbox) ---
    // yii.confirm = function (message, ok, cancel) {
    //     var title = $(this).data("title");
    //     var confirm_label = $(this).data("ok");
    //     var cancel_label = $(this).data("cancel");

    //     bootbox.confirm(
    //         {
    //             title: title,
    //             message: message,
    //             buttons: {
    //                 confirm: {
    //                     label: confirm_label,
    //                     className: 'btn-danger btn-flat'
    //                 },
    //                 cancel: {
    //                     label: cancel_label,
    //                     className: 'btn-default btn-flat'
    //                 }
    //             },
    //             callback: function (confirmed) {
    //                 if (confirmed) {
    //                     !ok || ok();
    //                 } else {
    //                     !cancel || cancel();
    //                 }
    //             }
    //         }
    //     );
    //     // confirm will always return false on the first call
    //     // to cancel click handler
    //     return false;
    // }


 // $.ajax({
	//      method: "GET", // метод HTTP, используемый для запроса
	//      url: "/frontntb/web/js/example.json", // строка, содержащая URL адрес, на который отправляется запрос
	//      dataType: 'json',
	//      success: function(data){
 //    		console.log(data);
 //  		}

	//     })

	// $.getJSON('http://js/example.json', function(data){

	// 		console.log(data);

	// 		console.log('dd');
	// })

	// var data_img;
	
	// $.ajax({
	//   dataType: "text",
	//   async : false,
	//   url: '/js/example.json',
	//   success: function(data){
	//   	// var data == $.parseJSON(data);
	//   	// var data = jQuery.parseJSON(data);	
	//   	// console.log(data)

	//   	data_img = JSON.parse( data );

	//   	$.each(data_img, function(index, element) {
	//   		index_gallery = index;

	//   		if (data_img[index_gallery].type_gallery == "all"){ 

	//         	$(".gallery-grid").append("<div class='galleryAllPhoto'></div>");

	// 		  	$.each(data_img[index_gallery].photos, function(index, element) {
	// 		  		index_img = index; 
	// 	            name_gallery = data_img[index_gallery].name_gallery;
	// 	            el_href = data_img[index_gallery].photos[index_img].href;
	// 	            description = data_img[index_gallery].photos[index_img].description; 

	// 		        $(".gallery-grid div:eq("+ index_gallery +")").append("<a href = " + el_href + " data-lightbox = " + name_gallery + " title =  " + "'" + description + "'" +" > <img src=" + el_href + " /> </a>");
	// 			})   

	//         }  else if (data_img[index_gallery].type_gallery == "one"){

	//         		$(".gallery-grid").append("<div class='galleryFirstPhoto'></div>");

	// 	        	$.each(data_img[index_gallery].photos, function(index, element) {  
	// 	        		index_img = index; 
	// 	        	  	name_gallery = data_img[index_gallery].name_gallery;
	// 		            el_href = data_img[index_gallery].photos[index_img].href;
	// 		            description1 = data_img[index_gallery].photos[index_img].description; 

	// 			        $(".gallery-grid div:eq("+ index_gallery +")").append("<a href = " + el_href + " data-lightbox = " + name_gallery + " title =  " + "'" + description1 + "'" +" > <img src=" + el_href + " /> </a>");

	// 	          	}) 
	//         } 

			

	//     }) 

	//   },


	//   error: function(jqXHR, exception){
	//   	console.log(jqXHR.status);
	//   }
	// });



	// js$('body').on('click', 'a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]', function(index) {
	// 	description = data_img[0].photos[$(this).index()].description;
	// 	console.log(description);
	// 	js$(".lb-details").append("<span class = 'description'>" + description + "</span>");
	// 	console.log(data_img[0].photos[$(this).index()].description);	

 //    });



     

});