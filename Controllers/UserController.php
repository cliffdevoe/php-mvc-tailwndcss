<?php
// Inclui o modelo e a visão necessários
require_once BASE_PATH . '/Models/UserModel.php';
require_once BASE_PATH . '/Views/user/UserView.php';

// Classe que representa o Controlador (lógica de negócio)
class UserController {
    private $model; // Instância do modelo
    private $view;  // Instância da visão

    // Construtor inicializa o modelo e a visão
    public function __construct() {
        $this->model = new UserModel();
        $this->view = new UserView();
    }

    // Método principal que obtém dados do modelo e passa para a visão
    public function index() {
        $users = $this->model->getAllUsers(); // Recupera todos os usuários
        $this->view->render($users); // Renderiza a visão com os dados
    }
}