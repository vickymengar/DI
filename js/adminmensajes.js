// Función para construir la tabla de mensajes
function construirTablaMensajes() {
    const tablaContainer = document.getElementById('tabla-mensajes-container');
    const tabla = document.createElement('table');
    tabla.classList.add('table', 'table-striped', 'custom-table'); // Agrega la clase custom-table

    // Crea el encabezado de la tabla
    const encabezado = `
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Mensaje</th>
            </tr>
        </thead>
    `;
    tabla.insertAdjacentHTML('beforeend', encabezado);

    // Crea el cuerpo de la tabla
    const cuerpoTabla = document.createElement('tbody');
    mensajes.forEach(mensaje => {
        const fila = `
            <tr>
                <td>${mensaje.nombre}</td>
                <td>${mensaje.correo}</td>
                <td>${mensaje.asunto}</td>
                <td>${mensaje.mensaje}</td>
            </tr>
        `;
        cuerpoTabla.insertAdjacentHTML('beforeend', fila);
    });

    tabla.appendChild(cuerpoTabla);
    tablaContainer.appendChild(tabla);
}

// Llama a la función para construir la tabla cuando el documento esté listo
document.addEventListener('DOMContentLoaded', construirTablaMensajes);
