<?php
// File: Models/UserModel.php
// Classe que representa o Modelo (responsável pelos dados)
class UserModel {
    // Array mockado simulando um banco de dados de usuários
    private $users = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ['id' => 3, 'name' => 'Bob Johnson', 'email' => 'bob@example.com']
    ];

    // Método para retornar todos os usuários
    public function getAllUsers() {
        return $this->users;
    }
}
?>