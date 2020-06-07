export default function menu(menuHambSelector, menuSelector) {
  const menuHamb = document.querySelector(menuHambSelector);
  const menu = document.querySelector(menuSelector);

  if (!menuHamb || !menu) return null;

  menuHamb.addEventListener('click', (e) => {
    e.preventDefault();

    menu.classList.toggle('ativo');
    menuHamb.classList.toggle('ativo');
  });
}
