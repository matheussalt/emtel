export default function carrossel(
  carrosselSelector,
  carrosselWrapperSelector,
  itemsSelector,
  leftSelector,
  rightSelector
) {
  const carrossel = document.querySelector(carrosselSelector);
  const carrosselWrapper = document.querySelector(carrosselWrapperSelector);
  const itens = document.querySelectorAll(itemsSelector);
  const leftButton = document.querySelector(leftSelector);
  const rightButton = document.querySelector(rightSelector);
  let position = 0;
  let move = 0;
  let margem = 0;

  if (!carrossel || !itens || !leftButton || !rightButton) return null;

  if (window.innerWidth < 768) {
    move = 1;
  } else if (window.innerWidth < 1050) {
    move = 2;
    margem = 16;
  } else {
    move = 3;
    margem = 21;
  }

  itens.forEach((item) => {
    item.style.setProperty(
      'width',
      `${carrossel.clientWidth / move - margem}px`
    );
  });

  window.addEventListener('resize', (e) => {
    if (window.innerWidth < 768) {
      move = 1;
    } else if (window.innerWidth < 1050) {
      move = 2;
      margem = 16;
    } else {
      move = 3;
      margem = 21;
    }

    itens.forEach((item) => {
      item.style.setProperty(
        'width',
        `${carrossel.clientWidth / move - margem}px`
      );
    });
  });

  rightButton.addEventListener('click', (e) => {
    e.preventDefault();

    if (position < itens.length - move) {
      position++;

      carrosselWrapper.style.setProperty(
        'transform',
        `translate3d(calc(-${(carrossel.clientWidth * position) / move}px - ${
          (32 * position) / move
        }px), 0, 0)`
      );
    }
  });

  leftButton.addEventListener('click', (e) => {
    e.preventDefault();

    if (position > 0) {
      position--;

      carrosselWrapper.style.setProperty(
        'transform',
        `translate3d(calc(-${(carrossel.clientWidth * position) / move}px - ${
          (32 * position) / move
        }px), 0, 0)`
      );
    }
  });
}
