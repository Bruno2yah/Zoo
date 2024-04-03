<?php 
session_start();
  require_once("../../componentes/modal.php");
  require_once '../../dao/territorioDao.php';
  $territorios = TerritorioDao::selectAll();
  
  if(!empty($_POST)){
    $id_Animal = $animalDao['idAnimal'];
    $nomeAnimal = $animalDao['nomeAnimal'];
    $descricaoAnimal = $animalDao['descricaoAnimal'] ;
    $epocaAcasalamentoAnimal	= $animalDao['epocaAcasalamentoAnimal'];
    $mediaVidaAnimal	= $animalDao['mediaVidaAnimal'];
    $imagem_Animal = $animalDao['imgAnimal'];
    }else{
      $id_Animal = '';
      $nomeAnimal = '';
      $descricaoAnimal = ''; 
      $epocaAcasalamentoAnimal	= '';
      $mediaVidaAnimal	= '';
      $imagem_Animal = '';
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
            <div class="card-header">
              <strong>INFORMAÇÕES DO USUÁRIO</strong>
              <input type="text" name="idUser" id="idUser" placeholder="id" value="<?=$id_Animal?>">
              <input type="text" name="nomeFoto" id="nomeFoto" value="<?=$imagem_Animal?>">
              <input type="text" value="<?=$id_Animal?'ATUALIZAR':'SALVAR'?>" name="acao" >

            </div>
            <div class="card-body row bg-black" style="align-items: center; justify-content: center; ">
              <div class="col-md-2   text-center" >
                <div class="bg-white rounded border" >
                <img id="preview" src="../../imgs/animal/<?=$imagem_Animal!="" ? $imagem_Animal: 'padrao.png';?>" alt="..."
                    class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
                </div>
              </div>
              <div class=" col-md-10">
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label for="nome" class="col-form-label">Nome do Animal:</label>
                    <input type="text" class="form-control" name="nomeAnimal" maxlength="50" id="nome" value="<?=$nomeAnimal?>"
                      required>
                    <div class="invalid-feedback">
                      Nome Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="sobrenome" class="col-form-label">Epoca de Acasalamento:</label>
                    <input type="text" class="form-control" name="epocaAcasalamentoAnimal" maxlength="50" id="sobrenome"
                      value="<?=$epocaAcasalamentoAnimal?>" required>
                    <div class="invalid-feedback">
                      Sobrenome Inválido
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="nasc" class="col-form-label">Media da Vida:</label>
                    <input type="text" class="form-control" name="mediaVidaAnimal" id="nasc" value="<?=$mediaVidaAnimal?>" required>
                    <div class="invalid-feedback">
                      Data Inválido
                    </div>
                  </div>
                <div class="row p-0 m-0 justify-content-center align-items-center d-flex"> 
                  <div class="col-md-8">
                    <label for="senha" class="col-form-label">descricaoAnimal</label>
                    <input type="text" class="form-control" name="descricaoAnimal" value="<?=$descricaoAnimal?>" 
                      id="senha" required>
                    <div class="invalid-feedback">
                      Descricao Inválido
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label for="territorio" class="col-form-label">Territorio</label>
                    <select name="territorio" id="territorio" class="form-select">
                      <option selected>Selecione o território</option>
                      <?php foreach($territorios as $territorio){?>
                        <option value=<?=$territorio[0]?>><?=$territorio[1]?></option>                 
                      <?php }?>
                   </select>
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