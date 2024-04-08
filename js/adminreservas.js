// Array de objetos con los datos de las reservas
const reservas = [
    { nombre: 'Juan', apellidoPaterno: 'Pérez', apellidoMaterno: 'Gómez', correo: 'juan@example.com', fecha: '2024-04-08', hora: '12:00', personas: 4, zona: 'Terraza', mesa: 3, estado:'Ejecutada'},
    // Agrega más objetos aquí
];

// Función para construir la tabla
function construirTabla() {
    const tablaContainer = document.getElementById('tabla-container');
    const tabla = document.createElement('table');
    tabla.classList.add('table', 'table-striped','custom-table');

    // Crea el encabezado de la tabla
    const encabezado = `
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Correo</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Número de Personas</th>
                <th>Zona</th>
                <th>Mesa</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
    `;
    tabla.insertAdjacentHTML('beforeend', encabezado);

    // Crea el cuerpo de la tabla
    const cuerpoTabla = document.createElement('tbody');
    reservas.forEach(reserva => {
        const fila = `
            <tr>
                <td>${reserva.nombre}</td>
                <td>${reserva.apellidoPaterno}</td>
                <td>${reserva.apellidoMaterno}</td>
                <td>${reserva.correo}</td>
                <td>${reserva.fecha}</td>
                <td>${reserva.hora}</td>
                <td>${reserva.personas}</td>
                <td>${reserva.zona}</td>
                <td>${reserva.mesa}</td>
                <td>${reserva.estado}</td>
                <td class="d-flex align-items-center"> <!-- Agrega la clase d-flex para hacer los botones flexibles -->
                    <button class="btn btn-danger me-1">Cancelar</button> <!-- Agrega la clase me-1 para espacio entre botones -->
                    <button class="btn btn-warning me-1">En curso</button> <!-- Agrega la clase me-1 para espacio entre botones -->
                    <button class="btn btn-info me-1">Pendiente</button> <!-- Agrega la clase me-1 para espacio entre botones -->
                    <button class="btn btn-success">Ejecutada</button>
                </td>
            </tr>
        `;
        cuerpoTabla.insertAdjacentHTML('beforeend', fila);
    });

    tabla.appendChild(cuerpoTabla);
    tablaContainer.appendChild(tabla);
}

// Llama a la función para construir la tabla cuando el documento esté listo
document.addEventListener('DOMContentLoaded', construirTabla);
