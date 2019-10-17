
$(document).ready( function(){
  //---------tamanho da tela atual
   var largura =  $(document).width();
   $(window).resize(function() {
     // código que será executado quando o browser for redimensionado.


   });

//----------descomprimir e compime botoes menu com click no mobile
  // $(".btn_menu").mouseleave(function (){
  //   if(largura > 1000){
  //     if ( $(this).is(":visible") ){
  //       $(this).children("ul").css("visibility","visible");
  //       $(this).children("ul").animate({
  //           height: "toggle"
  //         }, 100, function() {
  //         });
  //       $(this).children("ul").css("display","none");
  //     }
  //     // $(this).children("ul").css("display","none");
  //   }
  // });

//----------descomprimir botoes menu com click no desktop
  $(".btn_menu").mouseenter(function (){
     // var largura =  $(document).width();
     if(largura >= 1000){
       // alert("ta aqui dentro");
       $(".btn_menu").mouseleave(function (){
         $(this).children("ul").css("visibility","hidden");
       });

       $(this).children("ul").css("visibility","visible");
       // $(this).children("ul").animate({
       //     height: "toggle"
       //   }, 100, function() {
       //   });

       $(this).children("ul").css("position","absolute");
           // alert("vai mosra");
      }
    });


  //----------comprimir botoes menu com click no desktop
  $(".btn_menu").click( function (){
    var largura =  $(document).width();
  if(largura  < 1000){
    // alert(largura);
    $(this).children("ul").css("visibility","visible");
    $(this).children("ul").animate({
        height: "toggle"
      }, 100, function() {
      });
    $(this).children("ul").css("position","relative");
  }
  });

//-------------------descomprecao e comprime dropdow padrao
  $(".btn_dropdown").click( function() {
    var id = $(this).attr("id");
    var idenificador_classe= ".";
    id = idenificador_classe.concat(id);
      $(id).animate({
          height: "toggle"
        }, 100, function() {
        });
  });

  $(this).children("ul").css("display","none");

});
