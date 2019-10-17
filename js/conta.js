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

$(document).ready( function() {
  // alert("ta rodando");
var linhas = $(".bt_abre_descricao");

      $('.seta_baixo').click(function() {
        $(this).rotate({ endDeg:180, persist:true });
        }, function() {
        $(this).rotate({ endDeg:360 });
      });

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

                 var tabela_descricao = '<table class="tab_descricao"><tr><th>Login</th> <th>Telefone</th> <th>E-mail contato</th> <th>E-mail institucional</th></tr> <td>rvieira</td> <td>27-99888-7400</td> <td>branobonet77tt@gmail.com</td> <td>...</td></table>'
                  $(str).html(tabela_descricao);
                  $(str).animate({
                    height: "toggle"
                  }, 300, function() {
                  });
               }
             }
         });
      });



      $("#btn_salvar").click(function (){
        // alert("jkkjbnkjb");
          if (validacao() != ''){
            // $(".resultado_validacao").html('<div class="caixa_mensagem_negativa"><div class="icone_mensagem"><i class="far fa-times-circle"></i></div><div class="texto_mensagem">'+ validacao()+' </div></div>');
            $(".texto_mensagem").html('Deu ruim espero q fique centralizado');
            $(".resultado_validacao").animate({
                height: "toggle"
              }, 100, function() {
              });
          }
          else{
            $(".resultado_validacao").html('<div class="caixa_mensagem_positiva"><div class="icone_mensagem"><i class="far fa-check-circle"></i></div><div class="texto_mensagem">Operação efetuada com sucesso </div></div>');
            $(".resultado_validacao").animate({
                height: "toggle"
              }, 100, function() {
              });
          }
       });

});
