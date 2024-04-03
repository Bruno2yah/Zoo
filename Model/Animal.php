<?php

class Animal{
    private $idAnimal,$nomeAnimal,$imagemAnimal,$descricaoAnimal,$epocaAcasalamentoAnimal,$mediaVidaAnimal, $idTerritorio;

    
    public function getIdAnimal() {
        return $this->idAnimal;
    }

    public function setIdAnimal($idAnimal) {
        $this->idAnimal = $idAnimal;
    }
    public function getNomeAnimal() {
        return $this->nomeAnimal;
    }

    public function setNomeAnimal($nomeAnimal) {
        $this->nomeAnimal = $nomeAnimal;
    }



    public function getImagemAnimal() {
        return $this->imagemAnimal;
    }

    public function setImagemAnimal($imagemAnimal) {
        $this->imagemAnimal = $imagemAnimal;
    }

    public function getDescricaoAnimal() {
        return $this->descricaoAnimal;
    }

    public function setDescricaoAnimal($descricaoAnimal) {
        $this->descricaoAnimal = $descricaoAnimal;
    }

    public function getEpocaAcasalamentoAnimal() {
        return $this->epocaAcasalamentoAnimal;
    }

    public function setEpocaAcasalamentoAnimal($epocaAcasalamentoAnimal) {
        $this->epocaAcasalamentoAnimal = $epocaAcasalamentoAnimal;
    }

    public function getMediaVidaAnimal() {
        return $this->mediaVidaAnimal;
    }

    public function setMediaVidaAnimal($mediaVidaAnimal) {
        $this->mediaVidaAnimal = $mediaVidaAnimal;
    }
    public function getIdTerritorio() {
        return $this->idTerritorio;
    }

    public function setIdTerritorio($idTerritorio) {
        $this->idTerritorio = $idTerritorio;
    }








    public function salvarImagem($novo_nome){

        if(empty($_FILES['foto']['size']) != 1){

            if($novo_nome == ""){
                $novo_nome = md5(time()).".jpg";
            }

            $diretorio = "../../imgs/animal/";

            $nomeCompleto = $diretorio.$novo_nome;

            move_uploaded_file($_FILES['foto']['tmp_name'],$nomeCompleto);
            return $novo_nome;
        }
        else{
            return $novo_nome;
        }
    }
    
  
    
}

?>