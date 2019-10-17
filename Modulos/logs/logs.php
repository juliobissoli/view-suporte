<html>
<title>Suporte 1</title>
<link rel="shortcut icon" HREF="../../imagens/logo_title.png"/>
<header>
  <meta charset="utf-8">
  <?php include("../../base_header.php") ?>

  <!-- <link href="/css/conta.css", rel="stylesheet"> -->
  <link href="../../css/logs.css", rel="stylesheet">
  <!-- <script type="text/javascript" src="/js/base.js"></script> -->
  <script type="text/javascript" src="../../js/logs.js"></script>
</header>

<!--==================topo ============= -->

<!-- ==========Bara superio comprimida -->
<?php include("../../base.php") ?>
        <div class="modulo_area_eventos">

          <div class="titulo_add">
              Logs
          </div>


          <div class="alinha_espasado selecao_filtro">

                <div class="dropdown  celula">
                  <div class="titulo_input">
                    Codigo:
                  </div>
                  <input   type="text" placeholder='Filtre por "codigo" ' name="" value="">
              </div>

              <div class="dropdown celula">
                <div class="titulo_input">
                  Usuario:
                </div>
              <div class="janela usuario_janela" id="usuaio_janela_expandido">
                  <input   type="text" placeholder=' Filtre por "nome"' name="" value="">
                  <div class="usuaio_janela_expandido expandido">
                    <a>1</a>
                    <a>2</a>
                  </div>
              </div>
            </div>

            <div class="input_data celula">
              <div class="titulo_input">
                Inicio:
              </div>
                <input type="date">
            </div>
            <div class="input_data celula">
              <div class="titulo_input">
                Fim:
              </div>
                <input type="date">
            </div>


              <div class="filtro celula">
                <div class="titulo_input " placeholder= 'dia/mes/ano'>
                    Status:
                </div>

                <select class="btn ls-custom-select">
                  <option value="volvo"> 0</option>
                  <option value="saab"> 1</option>
                </select>
              </div>

              <div class="btn_filtar_log celula">
                  <a href="/view_conta_add.php" class="btn ">Filtar</a>
              </div>

          </div>





          <table class="tabela">
              <tr>
                <th class="mod_capo_codgo"> Codigo </th>
                <th class="mod_capo_codgo"> Usuario </th>
                <th class="mod_capo_codgo"> Data </th>
                <th class="mod_capo_codgo"> Hora </th>
                <th class="mod_capo_codgo"> Operação </th>

                <th class="mod_capo_codgo"> Modulo </th>
                <th class="mod_capo_codgo"> Status </th>
              </tr>
              <div class="linha_tabela">
                <tr>
                  <td class="mod_capo_codgo" id="id_conta">52</td>
                  <td class="mod_capo_codgo">rvieira</td>
                  <td class="mod_capo_codgo">26/08/2019</td>
                  <td class="mod_capo_codgo">20:26</td>
                  <td class="mod_capo_codgo">Editar</td>

                  <td class="mod_capo_codgo">Conta</td>
                  <td class="mod_capo_codgo">1</td>

                <td class="seta_baixo 52" id="52">
                  <label class="bt_abre_descricao" id="52" for="bt_abre_descricao"><i class="fas fa-info"></i></label></td>
                </td>
                  <!-- <bottom>&#8897;</botton></td> -->
                </tr>
                <tr>
                    <td  colspan="8">
                      <div class="descrica_conta" id="52_descrica_conta">
                      </div>
                    </td>
                </tr>
            </div>

            <div class="linha_tabela">
              <tr>
                <td class="mod_capo_codgo" id="id_conta">53</td>
                <td class="mod_capo_codgo">rvieira</td>
                <td class="mod_capo_codgo">26/08/2019</td>
                <td class="mod_capo_codgo">20:26</td>
                <td class="mod_capo_codgo">Editar</td>

                <td class="mod_capo_codgo">Conta</td>
                <td class="mod_capo_codgo">1</td>

              <td class="seta_baixo 52" id="53">
                <label class="bt_abre_descricao" id="53" for="bt_abre_descricao"><i class="fas fa-info"></i></label></td>
              </td>
                <!-- <bottom>&#8897;</botton></td> -->
              </tr>
              <tr>
                  <td  colspan="8">
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

  <?php include("../../base_fim.php") ?>
