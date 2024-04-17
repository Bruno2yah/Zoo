<?php

header('Access-Control-Allow-Origin: *');

require_once (__DIR__ . '../../Dao/Conexao.php');    
    class AnimalDao{
        public static function insert($animal){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbanimal (nomeAnimal,imgAnimal,descricaoAnimal,epocaAcasalamentoAnimal,mediaVidaAnimal,fk_idTerritorio) VALUES (?,?,?,?,?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $animal->getNomeAnimal());
            $stmt->bindValue(2, $animal->getImagemAnimal());
            $stmt->bindValue(3, $animal->getDescricaoAnimal());
            $stmt->bindValue(4, $animal->getEpocaAcasalamentoAnimal());
            $stmt->bindValue(5, $animal->getMediaVidaAnimal());
            $stmt->bindValue(6, $animal->getIdTerritorio());
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbanimal";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbanimal WHERE idAnimal = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbanimal WHERE idAnimal = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $animal){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbanimal SET 
            nomeAnimal = ?,
            imgAnimal = ?,
            descricaoAnimal = ?,
            epocaAcasalamentoAnimal = ?,
            mediaVidaAnimal = ?,
            fk_idTerritorio	= ?
            WHERE idAnimal = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $animal->getNomeAnimal());
            $stmt->bindValue(2, $animal->getImagemAnimal());
            $stmt->bindValue(3, $animal->getDescricaoAnimal());
            $stmt->bindValue(4, $animal->getEpocaAcasalamentoAnimal());
            $stmt->bindValue(5, $animal->getMediaVidaAnimal());
            $stmt->bindValue(6, $animal->getIdTerritorio());
            $stmt->bindValue(7, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
        public static function selectAllApi($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbanimal where fk_idTerritorio = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetchAll();
        }
       
    }
?>