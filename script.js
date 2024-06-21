// JavaScript

// Función para actualizar el perfil del usuario
async function guardarCambios() {
    const userId = document.getElementById('userId').value;
    const formData = new FormData(document.getElementById('perfilForm'));
    formData.append('userId', userId); // Agregamos el ID al FormData
    try {
        const response = await fetch('configuracion.php', {
            method: 'POST',
            body: formData
        });
        const userData = await response.json();
        if (userData.error) {
            alert(userData.error);
        } else {
            alert('Datos actualizados correctamente');
        }
    } catch (error) {
        console.error('Error:', error);
    }
}

// Función para mostrar los datos del usuario en los campos de entrada
async function verDatosUsuario() {
    const userId = document.getElementById('userId').value;
    try {
        const response = await fetch(`configuracion.php?userId=${userId}`);
        const userData = await response.json();
        if (userData.error) {
            alert(userData.error);
        } else {
            document.getElementById('name').value = userData.nombre;
            document.getElementById('apc').value = userData.apellidos;
            document.getElementById('address').value = userData.direccion;
            document.getElementById('phone').value = userData.telefono;
            document.getElementById('email').value = userData.correo_electronico;
        }
    } catch (error) {
        console.error('Error:', error);
    }
}