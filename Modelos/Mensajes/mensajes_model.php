<?php
class MensajesModel {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function obtenerMensajes() {
        $sql = "SELECT * FROM mensaje";
        $result = $this->conn->query($sql);

        $mensajes = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $mensajes[] = $row;
            }
        }

        return $mensajes;
    }
}
?>
