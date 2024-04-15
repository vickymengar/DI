<?php
// modelo_reservas.php

class ReservasModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function obtenerReservas() {
        $reservas = array();

        // Realiza la consulta SQL para obtener las reservas con el nombre de la zona
        $sql = "SELECT r.ID,r.Nombre, r.ApellidoP, r.ApellidoM, r.Correo, r.Fecha, r.Hora, r.No_Personas, z.Nombre   AS NombreZona, r.ID_Mesa, r.Estado
                FROM reservacion r
                INNER JOIN zona z ON r.ID_Zona = z.ID";
        $resultado = $this->conexion->query($sql);

        // Verifica si hay resultados y los almacena en un arreglo
        if ($resultado && $resultado->num_rows > 0) {
            while ($fila = $resultado->fetch_assoc()) {
                $reservas[] = $fila;
            }
        }

        return $reservas;
    }

    // Otras funciones para agregar, actualizar y eliminar reservas

    public function cambiarEstadoReserva($idReserva, $nuevoEstado) {
        $sql = "UPDATE reservacion SET Estado = ? WHERE ID = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("si", $nuevoEstado, $idReserva);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
}
?>
