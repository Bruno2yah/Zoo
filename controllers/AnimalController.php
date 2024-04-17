<?php

require_once(__DIR__ . '/../Dao/Conexao.php');
require_once(__DIR__ . '/../Dao/animalDao.php');


class AnimalController{

    public function index(){
        try {
             // Verifica se o ID do usuário foi fornecido através da requisição GET
             if (!isset($_POST['id'])) {
                throw new Exception('ID do usuário não foi fornecido');
            }
    
            // Obtém o ID do usuário da requisição GET
            $id = $_POST['id'];
            // Insere o usuário no banco de dados
            $animal = AnimalDao::selectAllApi($id);
            // Retorna uma resposta de sucesso com os dados do usuário inserido
            http_response_code(200);
            header('Content-Type: application/json');
            echo json_encode($animal);
        } catch (Exception $e) {
            // Se ocorrer um erro durante a inserção, retorna uma resposta de erro com a mensagem de exceção
            http_response_code(500);
            echo json_encode(['mensagem' => 'Erro ao pegar animal: ' . $e->getMessage()]);
        }
    }
    public function show()
    {
        try {
            // Verifica se o ID do usuário foi fornecido através da requisição GET
            if (!isset($_POST['id'])) {
                throw new Exception('ID do usuário não foi fornecido');
            }
    
            // Obtém o ID do usuário da requisição GET
            $id = $_POST['id'];
    
            // Obtém as informações do usuário com base no ID
            $animal = animalDao::selectById($id);
    
            // Verifica se o usuário foi encontrado
            if (!$animal) {
                // Se o usuário não for encontrado, retorna uma resposta de erro
                http_response_code(404);
                echo json_encode(['mensagem' => 'Usuário não encontrado']);
                return;
            }
    
            // Retorna uma resposta de sucesso com os dados do usuário
            http_response_code(201);
            header('Content-Type: application/json');
            echo json_encode($animal);
    
        } catch (Exception $e) {
            // Se ocorrer um erro, retorna uma resposta de erro com a mensagem de exceção
            http_response_code(500);
            echo json_encode(['mensagem' => 'Erro ao buscar usuário: ' . $e->getMessage()]);
        }
    }
    


}