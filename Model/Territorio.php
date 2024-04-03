<?php

class Territorio{
    private $idTerritorio,$nomeTerritorio,$imagemTerritorio;

    
    public function getIdTerritorio() {
        return $this->idTerritorio;
    }

    public function setIdTerritorio($idTerritorio) {
        $this->idTerritorio = $idTerritorio;
    }
    public function getNomeTerritorio() {
        return $this->nomeTerritorio;
    }

    public function setNomeTerritorio($nomeTerritorio) {
        $this->nomeTerritorio = $nomeTerritorio;
    }
    public function getImagemTerritorio() {
        return $this->imagemTerritorio;
    }

    public function setImagemTerritorio($imagemTerritorio) {
        $this->imagemTerritorio = $imagemTerritorio;
    }
    public function salvarImagem($novo_nome){

        if(empty($_FILES['foto']['size']) != 1){

            if($novo_nome == ""){
                $novo_nome = md5(time()).".jpg";
            }

            $diretorio = "../../imgs/territorio/";

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