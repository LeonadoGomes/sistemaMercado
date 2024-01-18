function verificarTecla(e) {
    e = e || window.event;
    if (e.keyCode === 116) {
        var linkElement = document.querySelector('.nav-link');
        if (linkElement) {
            window.location.href = linkElement.getAttribute('href');
            return false;
        }
    }
    return true;
}

document.addEventListener('keydown', verificarTecla);
