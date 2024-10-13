let index = 0;

function mostrarImagenes() {
    const imagenes = document.querySelectorAll('.imagenes img');
    const totalImagenes = imagenes.length;

    index = (index + totalImagenes) % totalImagenes;

    const offset = -index * 100;
    document.querySelector('.imagenes').style.transform = `translateX(${offset}%)`;
}

function cambiarImagen(direction) {
    const imagenes = document.querySelectorAll('.imagenes img');
    const totalImagenes = imagenes.length;
    
    index += direction;
    
    if (index < 0) {
        index = totalImagenes - 1; // Ir a la última imagen
    } else if (index >= totalImagenes) {
        index = 0; // Volver a la primera imagen
    }
    mostrarImagenes();
}

// Mostrar la primera imagen al cargar
mostrarImagenes();