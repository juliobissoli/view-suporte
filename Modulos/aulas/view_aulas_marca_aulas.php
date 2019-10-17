<html>
<title>Suporte 1 </title>
<link rel="shortcut icon" HREF="../../imagens/logo_title.png"/>
<header>
  <meta charset="utf-8">
  <?php include("../../base_header.php"); ?>
  <link href="/css/conta.css", rel="stylesheet">
  <link href="/css/aula.css", rel="stylesheet">
  <!-- <script type="text/javascript" src="/js/base.js"></script> -->
  <script type="text/javascript" src="/js/aula.js"></script>

</header>

<?php include("../../base.php"); ?>

<div class="conta_area_eventos">
    <div class="titulo_add">
        Marcação de Aulas
    </div>

        <div class="tres-caixa ">
            <div class="caixa3-direita">
                <i class="fas fa-angle-double-left btn"></i>
            </div>
            <div class="caixa3-centro">
              <div class="dropdown disciplina">
                Disciplina:
                <div class="janela disciplina_janela" >
                  <input type="text" placeholder='Nome da disciplina' name="" value="">
                  <div class="disciplina_janela_expandido expandido">
                    <a>Disciplina com none grande</a>
                    <a>Disciplina com none grande</a>
                  </div>
                </div>

              <div class="btn_icone btn btn_dropdown" id="disciplina_janela_expandido" for="btn_dropdown"><button class="btn" type="button" name="button"><i class="fas fa-angle-down"></i></button></div>
              <!-- <button type="button" name="button" class="btn btn_disciplna">Disciplina   <i class="fas fa-angle-down"></i></button> -->

              </div>

              <div class="dropdown labgrad">
                Lab:
              <div class="janela labgrad_janela " >
                  <input type="text" placeholder='lab' name="" value="">
                  <div class="labgrad_janela_expandido expandido">
                    <a>1</a>
                    <a>2</a>
                  </div>
              </div>

              <div class="btn_icone btn btn_dropdown" id="labgrad_janela_expandido"><button class="btn" type="button" name="button"><i class="fas fa-angle-down"></i></button></div>
              <!-- <button type="button" name="button" class="btn btn_disciplna">Disciplina   <i class="fas fa-angle-down"></i></button> -->

              </div>

            </div>
            <div class="caixa3-esquerda">
            <i class="fas fa-angle-double-right  btn"></i>
            </div>

        </div>



          <table class="tabela" id="tabela_marcacao_aula">
          </table>

        </div>
<?php include("../../base_fim.php"); ?>
