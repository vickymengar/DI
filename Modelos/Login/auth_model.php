<?php
class AuthModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function verifyCredentials($email, $password) {
        $email = $this->conn->real_escape_string($email);
        $password = $this->conn->real_escape_string($password);

        $sql = "SELECT * FROM administrador WHERE Correo='$email' AND Contrasenia='$password'";
        $result = $this->conn->query($sql);

        return ($result->num_rows == 1);
    }
}
?>
