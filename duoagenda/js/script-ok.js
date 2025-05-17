window.addEventListener('DOMContentLoaded', function () {
  mostrarPopup();
});

function mostrarPopup() {
  const overlay = document.createElement('div');
  overlay.style.position = 'fixed';
  overlay.style.bottom = '20px';
  overlay.style.right = '20px';
  overlay.style.maxWidth = '300px';
  overlay.style.backgroundColor = '#f0fdf4';
  overlay.style.color = '#2e7d32';
  overlay.style.padding = '1em 1.2em';
  overlay.style.border = '1px solid #a5d6a7';
  overlay.style.borderRadius = '10px';
  overlay.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.2)';
  overlay.style.zIndex = 1000;
  overlay.style.fontFamily = "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
  overlay.style.display = 'flex';
  overlay.style.flexDirection = 'column';
  overlay.style.alignItems = 'center';
  overlay.style.opacity = '1';
  overlay.style.transition = 'opacity 0.5s ease';

  const icono = document.createElement('div');
  icono.textContent = '✅';
  icono.style.fontSize = '2em';
  icono.style.marginBottom = '0.3em';

  const parrafo = document.createElement('p');
  parrafo.textContent = "¡Completado con éxito!";
  parrafo.style.margin = 0;
  parrafo.style.textAlign = 'center';

  overlay.appendChild(icono);
  overlay.appendChild(parrafo);
  document.body.appendChild(overlay);

  // 🕒 Cerrar automáticamente a los 3 segundos con desvanecimiento
  setTimeout(() => {
    overlay.style.opacity = '0';
    setTimeout(() => {
      if (document.body.contains(overlay)) {
        document.body.removeChild(overlay);
      }
    }, 500); // esperar a que termine el fade-out
  }, 3000);
}
