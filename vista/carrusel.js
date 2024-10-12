let index = 0;

function mostrarImagenes() {
    const imagenes = document.querySelectorAll('.imagenes img');
    if (index >= imagenes.length) { index = 0; }
    if (index < 0) { index = imagenes.length - 1; }
    const offset = -index * 100;
    document.querySelector('.imagenes').style.transform = `translateX(${offset}%)`;
}

function cambiarImagen(direction) {
    index += direction;
    mostrarImagenes();
}

// Mostrar la primera imagen al cargar
mostrarImagenes();