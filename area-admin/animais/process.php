<?php
require_once (__DIR__ . '../../../Dao/animalDao.php');

require_once( __DIR__.'../../../Model/Animal.php');

 //require_once '../../model/Mensagem.php';

$animal = new Animal();
 //$msg = new Mensagem();

  //var_dump($_POST); 


 switch ($_POST["acao"]) {
  case 'DELETE':
   try {
       $animalDao = animalDao::delete($_POST['idDeletar']);
        header("Location: index.php");
    } catch (Exception $e) {
      echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
    break;

  case 'SALVAR':
    //pode validar as informações
       $animal->setNomeAnimal($_POST['nomeAnimal']);
       $animal->setImagemAnimal($animal->salvarImagem($_POST['nomeFoto'])); 
       $animal->setEpocaAcasalamentoAnimal($_POST['epocaAcasalamentoAnimal']);
       $animal->setDescricaoAnimal($_POST['descricaoAnimal']);
       $animal->setMediaVidaAnimal($_POST['mediaVidaAnimal']);
       $animal->setIdTerritorio($_POST['territorio']);
    var_dump($_POST);
    try {
       $animalDao = AnimalDao::insert($animal);
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
        $animal->setNomeAnimal($_POST['nomeAnimal']);
        $animal->setImagemAnimal($animal->salvarImagem($_POST['nomeFoto'])); 
        $animal->setEpocaAcasalamentoAnimal($_POST['epocaAcasalamentoAnimal']);
        $animal->setDescricaoAnimal($_POST['descricaoAnimal']);
        $animal->setMediaVidaAnimal($_POST['mediaVidaAnimal']);
        $animal->setIdTerritorio($_POST['territorio']);
        try {
         $animalDao = AnimalDao::update($_POST["idUser"],$animal);
          //$msg->setMensagem("Usuário Atualizado com sucesso.", "bg-success");
          header("Location: index.php");
          var_dump($_POST);
        } catch (Exception $e) {
         echo 'Exceção capturada: ',  $e->getMessage(), "\n";

        } 
    break;

  case 'SELECTID':

    try {
       $animalDao = AnimalDao::selectById($_POST['id']);
        // Configura as opções do contexto da solicitação
        include('register.php');
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    } 

  
    break;


  }




 

?>