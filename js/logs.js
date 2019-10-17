function cria_nome_id(id){
  var trem = "#";
 trem = trem.concat(id);
 trem = trem.concat("_descrica_conta");
return trem;
}

function validacao(){
  var str = "Deu ruim vacilãooo"
  return str;
}

 function monta_log(){
      str = '<div class="tab_descricao"><div class="titulo_log">Titulo Log</div>';
      for(i=0; i<100; i++){
        if(i%10 == 0){
          str+= '<div class="linha_log">'+i+' /teste/ação/tal->'+'<div class="linha_log linha_filho_log">'+i+'/teste_linha_de linha _ancadeada/ação/tal->'+1*1+'</div>'+'</div>'
        }
        str+= '<div class="linha_log">'+i+' /teste/ação/tal->TESTE COM LINHA DE SAIDA GRANDE PRA VER SE N FICA MUIOTO ZUAAADOOOOOoooooooo00000000000000000000000</div>'
      }
      str+= '</div>';
      return str;
 }

$(document).ready( function() {
  // alert("ta rodando");
var linhas = $(".bt_abre_descricao");

      // $('.seta_baixo').click(function() {
      //   $(this).rotate({ endDeg:180, persist:true });
      //   }, function() {
      //   $(this).rotate({ endDeg:360 });
      // });

      $('.bt_abre_descricao').click(function (){
        var id = $(this).attr("id");
        var botao = this;
        var str = cria_nome_id(id);
         if ( !$(str).is(":visible") ){
         }
         $.each( $(".bt_abre_descricao"), function() {
             if(id == this.id){
               var str = cria_nome_id(this.id);
               if ( $(str).is(":visible") ){
                 //comprecao animada da dav q contem a descricao de cada conta. (Obs ela ja dexa i displa visivel ou invisivel ao fim)
                 $(str).animate({
                   height: "toggle"
                 }, 300, function() {
                 });
               }
               else{

                 var tabela_descricao = monta_log();
                  $(str).html(tabela_descricao);
                  $(str).animate({
                    height: "toggle"
                  }, 300, function() {
                  });
               }
             }
         });
      });



      // $("#btn_salvar").click(function (){
      //   // alert("jkkjbnkjb");
      //     if (validacao() != ''){
      //       // $(".resultado_validacao").html('<div class="caixa_mensagem_negativa"><div class="icone_mensagem"><i class="far fa-times-circle"></i></div><div class="texto_mensagem">'+ validacao()+' </div></div>');
      //       $(".texto_mensagem").html('Deu ruim espero q fique centralizado');
      //       $(".resultado_validacao").animate({
      //           height: "toggle"
      //         }, 100, function() {
      //         });
      //     }
      //     else{
      //       $(".resultado_validacao").html('<div class="caixa_mensagem_positiva"><div class="icone_mensagem"><i class="far fa-check-circle"></i></div><div class="texto_mensagem">Operação efetuada com sucesso </div></div>');
      //       $(".resultado_validacao").animate({
      //           height: "toggle"
      //         }, 100, function() {
      //         });
      //     }
      //  });

});
