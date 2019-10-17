<html>
<title>Suporte 1</title>
<link rel="shortcut icon" HREF="/imagens/logo_title.png"/>
<header>
<?php include("../../base_header.php");  ?>
  <link href="/css/conta.css", rel="stylesheet">
  <!-- <script type="text/javascript" src="/js/base.js"></script> -->
  <script type="text/javascript" src="/js/aula.js"></script>

</header>

<?php include("../../base.php"); ?>
        <div class="conta_area_eventos">
          <div class="titulo_add">
              Minahas Aulas
          </div>


          <table class="tabela">
              <tr>
                <th class="codgo_conta"> Disciplina </th>
                <th class="nome_conta"> Data </th>
                <th class="acao_conta"> Hora </th>
              </tr>
              <div class="linha_tabela">
                <tr>
                  <td class="codgo_conta" id="id_conta">52</td>
                  <td class="nome_conta">TEORIA DOS GRAFOS</td>
                <td class="acao_conta">
                  <div class="btn_icone"><a href="view_conta_edita.html" class="btn-primary"><i class="far fa-edit"></i>Editar </i></a></div>
                  <div class="btn_icone"><a href="#" id="52" class="btn-danger remover_conta "> <i class="fas fa-trash-alt"></i> Remover</a></div>
                </td>
                <td class="seta_baixo 52" id="52">
                  <label class="bt_abre_descricao" id="52" for="bt_abre_descricao"><i class="fas fa-angle-down"></i></label></td>
                </td>
                  <!-- <bottom>&#8897;</botton></td> -->
                </tr>
                <tr>
                    <td  colspan="5">
                      <div class="descrica_conta" id="52_descrica_conta">
                      </div>
                    </td>
                </tr>
            </div>

            <div class="linha_tabela">
              <tr>
                  <td class="codgo_conta" id="id_conta">53</td>
                  <td class="nome_conta">ALGORITMOS NUMERICOS </td>
                  <td class="acao_conta">
                  <div class="btn_icone"><a href="view_conta_edita.html" class="btn-primary"><i class="far fa-edit"></i>Editar</a></div>
                  <div class="btn_icone"><a href="#" id="53" class="btn-danger remover_conta"><i class="fas fa-trash-alt"></i>Remover</a></div>
                </td>
                <td class="seta_baixo 53">
                  <label class="bt_abre_descricao" id="53" for="bt_abre_descricao"><i class="fas fa-angle-down"></i></label>

                </td>
                  <!-- <bottom>&#8897;</botton></td> -->
                </tr>
                <tr>
                    <td  class="linha_descricao" id="53" colspan="5">
                      <div class="descrica_conta" id="53_descrica_conta">
                      </div>
                    </td>
                </tr>
            </div>

          </table>


<!-- ++++++++++++++++++++++ paginacao--------->

          <div class="alinha_espasado">
            <div class="titulo_input">
              Pagina 1 de 133 pagians.
            </div>
            <div id="demo"  class="paginacao pagination">

                          <a class="btn_icone"><i class="fas fa-angle-double-left"></i></a>
                          <a href="/conta?pagina=1" class="btn_icone  pag_atual">1</a>
                          <a href="/conta?pagina=2" class="btn_icone">2</a>
                          <a href="/conta?pagina=3" class="btn_icone">3</a>
                          <a class="btn_icone"><i class="fas fa-angle-double-right"></i></a>
            </div>

            <div class="dropdown dropdown_paginacao">
              Ir para pagina:
            <div class="janela paginacao_janela " >
                <input type="text" placeholder='lab' name="" value="1" id="paginacao_janela_expandido">
                <div class="paginacao_janela_expandido expandido" >
                  <a>1</a>
                  <a>2</a>
                </div>
            </div>
            <div class="btn_icone btn btn_dropdown" id="paginacao_janela_expandido"><button class="btn" type="button" name="button">Ir</button></div>
            </div>

          </div>


          </div>
          <?php include("../../base_fim.php"); ?>
