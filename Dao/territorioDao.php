<?php

header('Access-Control-Allow-Origin: *');

require_once (__DIR__ . '../../Dao/Conexao.php');
    
    class TerritorioDao{
        public static function insert($territorio){
            $conexao = Conexao::conectar();
            $query = "INSERT INTO tbterritorio (nomeTerritorio,imgTerritorio) VALUES (?,?)";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $territorio->getNomeTerritorio());
            $stmt->bindValue(2, $territorio->getImagemTerritorio());
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function selectAll(){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbterritorio";
            $stmt = $conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public static function selectById($id){
            $conexao = Conexao::conectar();
            $query = "SELECT * FROM tbterritorio WHERE idTerritorio = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }
        public static function delete($id){
            $conexao = Conexao::conectar();
            $query = "DELETE FROM tbterritorio WHERE idTerritorio = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $id);
            return  $stmt->execute();
        }
        public static function update($id, $territorio){
            $conexao = Conexao::conectar();
            $query = "UPDATE tbterritorio SET 
            nomeTerritorio = ?,
            imgTerritorio = ?
            WHERE idTerritorio = ?";
            $stmt = $conexao->prepare($query);
            $stmt->bindValue(1, $territorio->getNomeTerritorio());
            $stmt->bindValue(2, $territorio->getImagemTerritorio());
            $stmt->bindValue(3, $id); // Certifique-se de que o ID seja o terceiro valor
            return $stmt->execute();
        }
       
    }
?>