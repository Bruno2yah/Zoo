<?php

require_once(__DIR__ . '/../Dao/Conexao.php');
require_once(__DIR__ . '/../Dao/territorioDao.php');


class TerritorioController{

    public function index(){
        try {
            // Insere o usuário no banco de dados
            $territorios = TerritorioDao::selectAll();
            // Retorna uma resposta de sucesso com os dados do usuário inserido
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode($territorios);
        } catch (Exception $e) {
            // Se ocorrer um erro durante a inserção, retorna uma resposta de erro com a mensagem de exceção
            http_response_code(500);
            echo json_encode(['mensagem' => 'Erro ao pegar territorios: ' . $e->getMessage()]);
        }
    }


}