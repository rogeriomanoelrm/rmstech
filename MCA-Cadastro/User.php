<?php

class User extends Conn
{
    public ?PDO $conn = null; // Tipo específico do PDO
    public array $formData;

    public function list(): array
    {
        $this->conn = $this->connectDb();
        if ($this->conn === null) {
            die('Erro: Não foi possível conectar ao banco de dados.');
        }
        $query_users = "SELECT id, marca, modelo, defeito, telefone FROM teste ORDER BY id ASC LIMIT 40";
        $result_users = $this->conn->prepare($query_users);
        $result_users->execute();
        return $result_users->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id): bool
    {
        $this->conn = $this->connectDb();
        if ($this->conn === null) {
            die('Erro: Não foi possível conectar ao banco de dados.');
        }
        $query_delete_user = "DELETE FROM teste WHERE id = :id";
        $delete_user = $this->conn->prepare($query_delete_user);
        $delete_user->bindParam(':id', $id);
        $delete_user->execute();

        return $delete_user->rowCount() > 0;
    }

    public function index(): bool
    {
        var_dump($this->formData);
        $this->conn = $this->connectDb();
        if ($this->conn === null) {
            die('Erro: Não foi possível conectar ao banco de dados.');
        }
        $query_user = "INSERT INTO teste (marca, modelo, defeito, telefone) VALUES (:marca, :modelo, :defeito, :telefone)";
        $add_user = $this->conn->prepare($query_user);
        $add_user->bindParam(':marca', $this->formData['marca']);
        $add_user->bindParam(':modelo', $this->formData['modelo']);
        $add_user->bindParam(':defeito', $this->formData['defeito']);
        $add_user->bindParam(':telefone', $this->formData['telefone']);
        $add_user->execute();

        return $add_user->rowCount() > 0;
    }
}
