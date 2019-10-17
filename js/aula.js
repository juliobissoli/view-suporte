///---------------Parte relacionada a tabela de marcacao de aula
var dias_semana_comprinido = ["DON", "SEG", "TER", "QUA", "QUI", "SEX", "SAB"];


function decodifica_id_aula(id){
var  t = id.split(',');
  // alert(t[0]);
  var dias_semana = ["Doningo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sabado"];
  var dia_hora = dias_semana[t[1]]+ " as " + t[0] ;
  return (dia_hora);
}

//Monta a pimeira li9nha da tabela com os mes dia e dia da dia_semana
//Deve-se criar uma foma de inserir mes e dia atualizados (aparttir da data atual)
function monta_cabecalho(){
  var str = '<tr><th><div class="primeira-coluna horario"> Horario</div></th>'
  var i;
  for(i = 0; i < 7; i++){
    if(i == 0 || i == 6){
      str = str + '<th class="fds"><div class="coluna"><div class="mes">Jul </div><div class="dia_mes">'+i+'</div><div class="dia_semana">'+dias_semana_comprinido[i]+'<div> </div> </th>'
    }
    else str = str + '<th><div class="coluna"><div class="mes">Jul </div><div class="dia_mes">'+i+'</div><div class="dia_semana">'+dias_semana_comprinido[i]+'<div> </div> </th>'
  }
  str = str +'</tr>'
  return str;
}

//Dev ser feita uma de diferenciar as as celulas q estão disponiveis, indiponiveis e ocupadas
//Essa funcao cria como padrao todas as celulas como disponiveis
function monta_horario_semana(linha){
  var i;
  var str;
  for(i=0; i<7; i++){
  // alert(aulas_marcadas[linha][i]);
    if(i == 0 || i==6){
      str += '  <td class="fds"> <div class="celula" id="'+linha+','+i+'"><div class="disponivel"></div></div></td>';
    }
    else   str += '  <td> <div class="celula" id="'+linha+','+i+'"><div class="disponivel"></div></div></td>';
  }
  return str;
}

function monta_linhas(){
  var i, str = '';
  for(i=7; i<=19; i++){
    str+='<tr>';
      str = str + '<td> <div class="celula horario"> '+i+':00 ~ '+(i+1)+':00</div></td>';
      str+= monta_horario_semana(i);
      str+='</tr>'
  }
  return str;
}

function monta_tabela(){
  var tabela =  monta_cabecalho();
  tabela = tabela  + monta_linhas();
  return tabela;
}

var largura = $(window).width();
$(document).ready( function(){
  // var largura = screen.width;
  // ta_aqui();
  // alert(largura.type);
  var str_tabela= monta_tabela();


    $("#tabela_marcacao_aula").html(str_tabela);

  //-------------Montar tabela depois que selecionar a disciplina------------------
  // $("#disciplina_selcinada").click( function() {
  //   var str_tabela= monta_tabela();
  //   $("#tabela_marcacao_aula").html(str_tabela);
  // });


  // Marca e desmarca aulas
  $(".celula").click(function (){
    // alert($(this).children("div").attr("class"));

    if($(this).children("div").attr("class") == "disponivel"){
      alert("Aula marcada "+ decodifica_id_aula($(this).attr("id")));
      $(this).children("div").css("display","none");
      $(this).html('<div  class="marcada"><i class="far fa-check-circle"></i></div>');
    }
   else if($(this).children("div").attr("class") == "marcada"){
      alert("Aula desmarcada "+ decodifica_id_aula($(this).attr("id")));
      $(this).children("div").css("display","none");
      $(this).html('<div  class="disponivel"></div>');
    }

  });


  //-------------------expacao do menu mobile
    // $(".btn_menu").click( function (){
    // // var t =  $(document).width();
    // // largura += 3000;
    // // alert(largura);
    //    //if(largura < 1000){
    //      // alert("vraus");
    //         $(this).children("ul").css("visibility","visible");
    //         $(this).children("ul").animate({
    //             height: "toggle"
    //           }, 100, function() {
    //           });
    //         $(this).children("ul").css("position","relative");
    //    //}
    // });

  //-------------------dropdown

  // $(".btn_dropdown").click( function() {
  //   var id = $(this).attr("id");
  //   var idenificador_classe= ".";
  //   id = idenificador_classe.concat(id);
  //   // alert(largura);
  //     $(id).animate({
  //         height: "toggle"
  //       }, 100, function() {
  //       });
  // });

});
