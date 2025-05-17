function confirmarEliminacion(idContacto) {
  const overlay = document.createElement('div');
  overlay.style.position = 'fixed';
  overlay.style.top = 0;
  overlay.style.left = 0;
  overlay.style.width = '100%';
  overlay.style.height = '100%';
  overlay.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
  overlay.style.display = 'flex';
  overlay.style.justifyContent = 'center';
  overlay.style.alignItems = 'center';
  overlay.style.zIndex = 1000;

  const popup = document.createElement('div');
  popup.style.background = '#f0fdf4';
  popup.style.padding = '2em';
  popup.style.borderRadius = '12px';
  popup.style.textAlign = 'center';
  popup.style.boxShadow = '0 8px 20px rgba(0,0,0,0.2)';
  popup.style.fontFamily = "'Segoe UI', Tahoma, Geneva, Verdana, sans-serif";
  popup.style.maxWidth = '360px';
  popup.style.width = '90%';

  const icono = document.createElement('div');
  icono.textContent = '⚠️';
  icono.style.fontSize = '2.2em';
  icono.style.marginBottom = '0.5em';

  const mensaje = document.createElement('p');
  mensaje.textContent = "¿Estás seguro de que deseas eliminar este contacto?";
  mensaje.style.color = '#2e7d32';
  mensaje.style.fontWeight = 'bold';
  mensaje.style.marginBottom = '1.5em';

  const botones = document.createElement('div');
  botones.style.display = 'flex';
  botones.style.justifyContent = 'center';
  botones.style.gap = '1em';

  const btnCancelar = document.createElement('button');
  btnCancelar.textContent = "Cancelar";
  btnCancelar.style.padding = '0.6em 1.2em';
  btnCancelar.style.border = 'none';
  btnCancelar.style.borderRadius = '6px';
  btnCancelar.style.backgroundColor = '#c8e6c9';
  btnCancelar.style.color = '#2e7d32';
  btnCancelar.style.cursor = 'pointer';
  btnCancelar.style.transition = 'background-color 0.3s ease';
  btnCancelar.onmouseover = () => btnCancelar.style.backgroundColor = '#a5d6a7';
  btnCancelar.onmouseout = () => btnCancelar.style.backgroundColor = '#c8e6c9';
  btnCancelar.onclick = () => document.body.removeChild(overlay);

  const btnAceptar = document.createElement('button');
  btnAceptar.textContent = "Eliminar";
  btnAceptar.style.padding = '0.6em 1.2em';
  btnAceptar.style.border = 'none';
  btnAceptar.style.borderRadius = '6px';
  btnAceptar.style.backgroundColor = '#e53935'; // rojo suave
  btnAceptar.style.color = 'white';
  btnAceptar.style.cursor = 'pointer';
  btnAceptar.style.fontWeight = 'bold';
  btnAceptar.style.transition = 'background-color 0.3s ease';
  btnAceptar.onmouseover = () => btnAceptar.style.backgroundColor = '#c62828';
  btnAceptar.onmouseout = () => btnAceptar.style.backgroundColor = '#e53935';
  btnAceptar.onclick = function () {
    document.formTablaGral.txtClave.value = idContacto;
    document.formTablaGral.txtOpe.value = 'b';
    document.formTablaGral.submit();
    document.body.removeChild(overlay);
  };

  botones.appendChild(btnCancelar);
  botones.appendChild(btnAceptar);

  popup.appendChild(icono);
  popup.appendChild(mensaje);
  popup.appendChild(botones);
  overlay.appendChild(popup);
  document.body.appendChild(overlay);
}
