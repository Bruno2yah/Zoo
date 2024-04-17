<?php 
session_start();
  require_once("../../componentes/modal.php");
  require_once '../../dao/UserDao.php';
  
  if(!empty($_POST)){
    $id_Territorio = $territorioDao['idTerritorio'];
    var_dump($id_Territorio);
    $nomeTerritorio = $territorioDao['nomeTerritorio'];
    $imagem_Territorio = $territorioDao['imgTerritorio'];
    }else{
      $id_Territorio = '';
      $nomeTerritorio = '';
      $imagem_Territorio = '';
    }


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FilmeOn - Adm</title>
  <link rel="short icon" href="./../../img/site/logo.png" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"> <!-- CSS Projeto -->
  <link rel="stylesheet" href="css/style.css">
</head>

<body style="justify-content: center; align-items: center; height: 100vh ">
  <?php 
      include('./../../componentes/header-adm.php');
  ?>
  <div class="container-fluid" style="height: 90vh">
    <div class="row h-100">
      <?php 
      include('./../../componentes/menu-adm.php');
      ?>
      <div class="col-md-10  p-4 borber">
        <div class="card">
          <form method="post" action="process.php" enctype="multipart/form-data" class="needs-validation" novalidate>
            <div class="card-header ">
              <strong>INFORMAÇÕES DO TERRITORIO</strong>
              <input type="text" name="idUser" id="idUser" placeholder="id" value="<?=$id_Territorio?>">
              <input type="text" name="nomeFoto" id="nomeFoto" value="<?=$imagem_Territorio?>">
              <input type="text" value="<?=$id_Territorio?'ATUALIZAR':'SALVAR'?>" name="acao" >

            </div>
            <div class="card-body row bg-black d-flex justify-content-center align-items-center w-100">
              <div class="col-md-2   text-center" >
                <div class="bg-white rounded border" >
                <img id="preview" src="../../imgs/territorio/<?=$imagem_Territorio!="" ? $imagem_Territorio: 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label for="nome" class="col-form-label">Nome do Territorio:</label>
                    <input type="text" class="form-control" name="nomeTerritorio" maxlength="50" id="nome" value="<?=$nomeTerritorio?>"
                      required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                <div class="row mt-5 ">
                  <div class="col-md-2">
                  <input type="file" name="foto" accept="image/*" class="custom-file-input">
                  </div>
                  <div class=" text-end  col-md-10">
                  <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
                  <input type="submit" class=" btn btn-success" value="Salvar">
                </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  <script type="text/javascript" src="./../../js/jquery.mask.min.js"></script>
  <script type="text/javascript" src="./../../js/personalizar.js"></script>
  <script type="text/javascript" src="./../../js/modal.js"></script>

</body>

</html>