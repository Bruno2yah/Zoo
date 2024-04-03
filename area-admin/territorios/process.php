<?php
require_once (__DIR__ . '../../../Dao/territorioDao.php');

require_once( __DIR__.'../../../Model/territorio.php');

 //require_once '../../model/Mensagem.php';

$territorio = new Territorio();
 //$msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
       $territorioDao = TerritorioDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
       $territorio->setNomeTerritorio($_POST['nomeTerritorio']);
       $territorio->setImagemTerritorio($territorio->salvarImagem($_POST['nomeFoto'])); 

    var_dump($_POST);
    try {
       $territorioDao = TerritorioDao::insert($territorio);
      //$msg->setMensagem("Usuário Salvo com sucesso.", "bg-success");
      header("Location: index.php");
    } catch (Exception $e) {
     echo 'Exceção capturada: ',  $e->getMessage(), "\n";
      //$msg->setMensagem("Verifique os dados Digitados.", "bg-danger");
      //header("Location: register.php");
    } 
    break;
  case 'ATUALIZAR':
        //pode validar as informações
        $territorio->setNomeTerritorio($_POST['nomeTerritorio']);
        $territorio->setImagemTerritorio($territorio->salvarImagem($_POST['nomeFoto'])); 
        var_dump($_POST);
        try {
         $territorioDao = TerritorioDao::update($_POST['idUser'],$territorio);
          //$msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
        } catch (Exception $e) {
          var_dump($_POST);
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
       $territorioDao = territorioDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>