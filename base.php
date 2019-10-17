<!-- <html>
<title>Suporte 1</title>
<link rel="shortcut icon" HREF="/imagens/logo_title.png"/>
<header>
  <meta charset="utf-8">
  <link href="/css/padronizacoes.css", rel="stylesheet">
  <link href="/css/base.css", rel="stylesheet">
  <link href="/css/mobile-base.css", rel="stylesheet">
  <link href="/css/conta.css", rel="stylesheet">
  <link href="/css/aula.css", rel="stylesheet">

  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script type="text/javascript" src="jquery-3.1.0.min.js"></script>
  <script src="https://kit.fontawesome.com/d9c369bd27.js"></script><!-- Link para servidor de icones  -->
  <!-- <script type="text/javascript" src="conta.js"></script>
  <script type="text/javascript" src="/js/base.js"></script>
  <script type="text/javascript" src="/js/aula.js"></script>

</header> -->

<!--==================topo ============= -->

<!-- ==========Bara superio comprimida -->
<div class="barra_superior_comprimida" id="barra_superior_comprimida">

  <ul>
    <input type="checkbox" id="bt_login" onclick="alternaMenu()">
    <li><label for="bt_login">LOGIN</li>
  </ul>
    <a href="index.php"><img src="/imagens/logo.jpeg"   width="50" height="50"/></a>
</div>


<!-- =============login comprimido-->
<div class="login_comprimida" id="login_comprimida" >
  <label>Usuario:</a>
     <input type="text" id="login"  />
    <label>Senha:</a>
    <input type="password" id="login"  />
    <div id="botao"><label><input type="submit" value="login" id="entrar"></div>
  </div>


<!-- botao de descomprecao da caixa de funcoes -->
<input type="checkbox" id="bt_menu">
<label for="bt_menu">&#9776;</label>



<!--==================topo ============= -->

 <//?php include "includes/topo.php";?>

<div id=barra_superior>
        <div class="topo-esquerda">
          <div class="imagem">
            <a href="/"><img src="/imagens/logo.jpeg"   width="82" height="80"/></a>
          </div>
          <div class="descricao-topo">
            <p>LAR</p>
            Laboratório de Administração de Redes<br>
            Departamento de Informatica (UFES)<br>
          </div>
        </div>
        <div class="topo-direita">
            <div class="login" >
              <label> Usuario: <input type="text" id="login"  /></label>
              <label>Senha: <input type="password" id="login"  /></label>
              <label> <input class="btn-login" type="submit" value="login" id="entra"></label>
            </div>
        </div>
</div>


 <!--+==============Funcos ===============-->
  <//?php include "includes/barra_lateral.php";?>

  <nav class="menu">
    <ul>
      <li><a>Horarios Reservas</a></li>
      <li class="btn_menu"><a>Aulas</a>
        <ul>
          <li><a href="/Modulos/aulas/view_aulas_marca_aulas.php">Marcação de Aulas</a></li>
          <li><a href="/Modulos/aulas/view_aulas_minhas_aulas.php">Minhas Aulas</a></li>
        </ul>
      </li>
      <li class="btn_menu"><a>Administrativo</a>
        <ul>
          <li><a href="/Modulos/conta/conta.php">Conta</a></li><!-- View_conta-->
          <li><a href="/Modulos/periodo/periodo.php">Período</a></li><!-- Viwe_perido  -->
          <li><a href="/Modulos/disciplina/disciplina.php">Disciplina</a></li><!-- Viwe_perido  -->
          <li><a href="/Modulos/horarios/horarios.php">Horários</a></li><!-- Viwe_perido  -->
          <li><a href="/Modulos/logs/logs.php">Logs</a></li><!-- Viwe_perido  -->
        </ul>
      </li>
    </ul>
  </nav>

<!--+======= Area de Trabalho ---------->

<div class="tht">
  <h2>Sistema THT</h2>
  <div class="tht_caicxa">
    <h3>CT-6</h3>
    <table border="1">
        <tr>
          <td>Temperatura..:</td>
          <td>??</td>
        </tr>
        <tr>
          <td>Umidade........:</td>
          <td>??</td>
        </tr>
        <tr>
          <td>Tensão...........:</td>
          <td>??</td>
        </tr>
      </table>
  </div>

  <div class="tht_caicxa">
    <h3>CT-7</h3>
    <table border="1">
        <tr>
          <td>Temperatura..:</td>
          <td>??</td>
        </tr>
        <tr>
          <td>Umidade........:</td>
          <td>??</td>
        </tr>
        <tr>
          <td>Tensão............:</td>
          <td>??</td>
        </tr>
      </table>
  </div>

  <div class="tht_caicxa">
    <h3>CT-9</h3>
    <table border="1">
        <tr>
          <td>Temperatura..:</td>
          <td>??</td>
        </tr>
        <tr>
          <td>Umidade........:</td>
          <td>??</td>
        </tr>
        <tr>
          <td>Tensão............:</td>
          <td>??</td>
        </tr>
      </table>
  </div>

  <div class="status">
    Atualizado em: 00/00/0000
    <img vspace="35px" hspace="15px" src="/imagens/1.png"/>
  </div>
</div>

<div class="area_de_trabalho">
  <div class="area_delimitada">
      <div class="area_de_eventos">
        <!--ate aqui são as parte comuns a todas as paginas  -->

        <!-- Parte pra finalizar tudo -->
      <!-- </div>

  </div>
</div>

</html> -->
