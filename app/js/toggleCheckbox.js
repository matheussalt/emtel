export default function toggleCheckbox(selector, span) {
  const checkboxInputs = document.querySelectorAll(selector);

  if (!checkboxInputs[0]) return null;

  checkboxInputs.forEach((input) => {
    input.addEventListener('click', (e) => {
      if (e.path[0].className !== 'wpcf7-list-item-label')
        input.classList.toggle('ativo');
    });
  });
}
