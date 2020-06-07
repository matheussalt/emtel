import './style.scss';
import menu from './js/menu';
import toggleCheckbox from './js/toggleCheckbox';
import carrossel from './js/carrossel';
import './js/modernizr';

menu('.menu-hamb', '.menu-menutopo-container');
toggleCheckbox(
  '.proposta .wpcf7-checkbox .wpcf7-list-item',
  '.wpcf7-list-item-label'
);

carrossel(
  '.seminovos-home .carrossel',
  '.seminovos-home .carrossel-wrapper',
  '.seminovos-home .carrossel-item',
  '.seminovos-home .carrossel-left',
  '.seminovos-home .carrossel-right'
);

carrossel(
  '.seminovos-more .carrossel',
  '.seminovos-more .carrossel-wrapper',
  '.seminovos-more .carrossel-item',
  '.seminovos-more .carrossel-left',
  '.seminovos-more .carrossel-right'
);

carrossel(
  '.oportunidades-home .carrossel',
  '.oportunidades-home .carrossel-wrapper',
  '.oportunidades-home .carrossel-item',
  '.oportunidades-home .carrossel-left',
  '.oportunidades-home .carrossel-right'
);

carrossel(
  '.blog-home .carrossel',
  '.blog-home .carrossel-wrapper',
  '.blog-home .carrossel-item',
  '.blog-home .carrossel-left',
  '.blog-home .carrossel-right'
);
