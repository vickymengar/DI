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
                    <button class="btn btn-danger me-1" onclick="cancelarReserva(${reserva.id})">Cancelar</button> <!-- Agrega la clase me-1 para espacio entre botones -->
                    <button class="btn btn-warning me-1" onclick="marcarEnCurso(${reserva.id})">En curso</button> <!-- Agrega la clase me-1 para espacio entre botones -->
                    <button class="btn btn-info me-1" onclick="marcarPendiente(${reserva.id})">Pendiente</button> <!-- Agrega la clase me-1 para espacio entre botones -->
                    <button class="btn btn-success" onclick="marcarEjecutada(${reserva.id})">Ejecutada</button>
                </td>
            </tr>
        `;
        cuerpoTabla.insertAdjacentHTML('beforeend', fila);
    });

    tabla.appendChild(cuerpoTabla);
    tablaContainer.appendChild(tabla);
}

// Funciones para los botones
function cancelarReserva(id) {
    // Aquí puedes realizar alguna acción con la reserva que tiene el ID proporcionado, como cancelarla
    console.log("Cancelar reserva con ID:", id);
}

function marcarEnCurso(id) {
    // Aquí puedes realizar alguna acción con la reserva que tiene el ID proporcionado, como marcarla como "En curso"
    console.log("Marcar reserva como En curso con ID:", id);
}

function marcarPendiente(id) {
    // Aquí puedes realizar alguna acción con la reserva que tiene el ID proporcionado, como marcarla como "Pendiente"
    console.log("Marcar reserva como Pendiente con ID:", id);
}

function marcarEjecutada(id) {
    // Aquí puedes realizar alguna acción con la reserva que tiene el ID proporcionado, como marcarla como "Ejecutada"
    console.log("Marcar reserva como Ejecutada con ID:", id);
}

// Llama a la función para construir la tabla cuando el documento esté listo
document.addEventListener('DOMContentLoaded', construirTabla);
