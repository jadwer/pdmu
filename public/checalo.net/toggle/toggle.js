// funcion par el toggle cambia la vista del estilo del css
function toggle() {
  let menu = document.getElementById('main-menu');
  if (menu.style.display === 'block') {
    menu.style.display = 'none';
  } else {
    menu.style.display = 'block';
  }
}
