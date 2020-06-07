/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./app/index.js":
/*!**********************!*\
  !*** ./app/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./style.scss */ \"./app/style.scss\");\n/* harmony import */ var _style_scss__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_style_scss__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _js_menu__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./js/menu */ \"./app/js/menu.js\");\n/* harmony import */ var _js_toggleCheckbox__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./js/toggleCheckbox */ \"./app/js/toggleCheckbox.js\");\n/* harmony import */ var _js_carrossel__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./js/carrossel */ \"./app/js/carrossel.js\");\n/* harmony import */ var _js_modernizr__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./js/modernizr */ \"./app/js/modernizr.js\");\n/* harmony import */ var _js_modernizr__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(_js_modernizr__WEBPACK_IMPORTED_MODULE_4__);\n\r\n\r\n\r\n\r\n\r\n\r\nObject(_js_menu__WEBPACK_IMPORTED_MODULE_1__[\"default\"])('.menu-hamb', '.menu-menutopo-container');\r\nObject(_js_toggleCheckbox__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\r\n  '.proposta .wpcf7-checkbox .wpcf7-list-item',\r\n  '.wpcf7-list-item-label'\r\n);\r\n\r\nObject(_js_carrossel__WEBPACK_IMPORTED_MODULE_3__[\"default\"])(\r\n  '.seminovos-home .carrossel',\r\n  '.seminovos-home .carrossel-wrapper',\r\n  '.seminovos-home .carrossel-item',\r\n  '.seminovos-home .carrossel-left',\r\n  '.seminovos-home .carrossel-right'\r\n);\r\n\r\nObject(_js_carrossel__WEBPACK_IMPORTED_MODULE_3__[\"default\"])(\r\n  '.seminovos-more .carrossel',\r\n  '.seminovos-more .carrossel-wrapper',\r\n  '.seminovos-more .carrossel-item',\r\n  '.seminovos-more .carrossel-left',\r\n  '.seminovos-more .carrossel-right'\r\n);\r\n\r\nObject(_js_carrossel__WEBPACK_IMPORTED_MODULE_3__[\"default\"])(\r\n  '.oportunidades-home .carrossel',\r\n  '.oportunidades-home .carrossel-wrapper',\r\n  '.oportunidades-home .carrossel-item',\r\n  '.oportunidades-home .carrossel-left',\r\n  '.oportunidades-home .carrossel-right'\r\n);\r\n\r\nObject(_js_carrossel__WEBPACK_IMPORTED_MODULE_3__[\"default\"])(\r\n  '.blog-home .carrossel',\r\n  '.blog-home .carrossel-wrapper',\r\n  '.blog-home .carrossel-item',\r\n  '.blog-home .carrossel-left',\r\n  '.blog-home .carrossel-right'\r\n);\r\n\n\n//# sourceURL=webpack:///./app/index.js?");

/***/ }),

/***/ "./app/js/carrossel.js":
/*!*****************************!*\
  !*** ./app/js/carrossel.js ***!
  \*****************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return carrossel; });\nfunction carrossel(\r\n  carrosselSelector,\r\n  carrosselWrapperSelector,\r\n  itemsSelector,\r\n  leftSelector,\r\n  rightSelector\r\n) {\r\n  const carrossel = document.querySelector(carrosselSelector);\r\n  const carrosselWrapper = document.querySelector(carrosselWrapperSelector);\r\n  const itens = document.querySelectorAll(itemsSelector);\r\n  const leftButton = document.querySelector(leftSelector);\r\n  const rightButton = document.querySelector(rightSelector);\r\n  let position = 0;\r\n  let move = 0;\r\n  let margem = 0;\r\n\r\n  console.log(carrossel, itens);\r\n\r\n  if (!carrossel || !itens || !leftButton || !rightButton) return null;\r\n\r\n  if (window.innerWidth < 768) {\r\n    move = 1;\r\n  } else if (window.innerWidth < 1050) {\r\n    move = 2;\r\n    margem = 16;\r\n  } else {\r\n    move = 3;\r\n    margem = 21;\r\n  }\r\n\r\n  itens.forEach((item) => {\r\n    item.style.setProperty(\r\n      'width',\r\n      `${carrossel.clientWidth / move - margem}px`\r\n    );\r\n  });\r\n\r\n  window.addEventListener('resize', (e) => {\r\n    if (window.innerWidth < 768) {\r\n      move = 1;\r\n    } else if (window.innerWidth < 1050) {\r\n      move = 2;\r\n      margem = 16;\r\n    } else {\r\n      move = 3;\r\n      margem = 21;\r\n    }\r\n\r\n    itens.forEach((item) => {\r\n      item.style.setProperty(\r\n        'width',\r\n        `${carrossel.clientWidth / move - margem}px`\r\n      );\r\n    });\r\n  });\r\n\r\n  rightButton.addEventListener('click', (e) => {\r\n    e.preventDefault();\r\n\r\n    if (position < itens.length - move) {\r\n      position++;\r\n\r\n      carrosselWrapper.style.setProperty(\r\n        'transform',\r\n        `translate3d(calc(-${(carrossel.clientWidth * position) / move}px - ${\r\n          (32 * position) / move\r\n        }px), 0, 0)`\r\n      );\r\n    }\r\n  });\r\n\r\n  leftButton.addEventListener('click', (e) => {\r\n    e.preventDefault();\r\n\r\n    if (position > 0) {\r\n      position--;\r\n\r\n      carrosselWrapper.style.setProperty(\r\n        'transform',\r\n        `translate3d(calc(-${(carrossel.clientWidth * position) / move}px - ${\r\n          (32 * position) / move\r\n        }px), 0, 0)`\r\n      );\r\n    }\r\n  });\r\n}\r\n\n\n//# sourceURL=webpack:///./app/js/carrossel.js?");

/***/ }),

/***/ "./app/js/menu.js":
/*!************************!*\
  !*** ./app/js/menu.js ***!
  \************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return menu; });\nfunction menu(menuHambSelector, menuSelector) {\r\n  const menuHamb = document.querySelector(menuHambSelector);\r\n  const menu = document.querySelector(menuSelector);\r\n\r\n  if (!menuHamb || !menu) return null;\r\n\r\n  menuHamb.addEventListener('click', (e) => {\r\n    e.preventDefault();\r\n\r\n    menu.classList.toggle('ativo');\r\n    menuHamb.classList.toggle('ativo');\r\n  });\r\n}\r\n\n\n//# sourceURL=webpack:///./app/js/menu.js?");

/***/ }),

/***/ "./app/js/modernizr.js":
/*!*****************************!*\
  !*** ./app/js/modernizr.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("!function(e,n,A){function o(e,n){return typeof e===n}function t(){var e,n,A,t,a,i,l;for(var f in r)if(r.hasOwnProperty(f)){if(e=[],n=r[f],n.name&&(e.push(n.name.toLowerCase()),n.options&&n.options.aliases&&n.options.aliases.length))for(A=0;A<n.options.aliases.length;A++)e.push(n.options.aliases[A].toLowerCase());for(t=o(n.fn,\"function\")?n.fn():n.fn,a=0;a<e.length;a++)i=e[a],l=i.split(\".\"),1===l.length?Modernizr[l[0]]=t:(!Modernizr[l[0]]||Modernizr[l[0]]instanceof Boolean||(Modernizr[l[0]]=new Boolean(Modernizr[l[0]])),Modernizr[l[0]][l[1]]=t),s.push((t?\"\":\"no-\")+l.join(\"-\"))}}function a(e){var n=u.className,A=Modernizr._config.classPrefix||\"\";if(c&&(n=n.baseVal),Modernizr._config.enableJSClass){var o=new RegExp(\"(^|\\\\s)\"+A+\"no-js(\\\\s|$)\");n=n.replace(o,\"$1\"+A+\"js$2\")}Modernizr._config.enableClasses&&(n+=\" \"+A+e.join(\" \"+A),c?u.className.baseVal=n:u.className=n)}function i(e,n){if(\"object\"==typeof e)for(var A in e)f(e,A)&&i(A,e[A]);else{e=e.toLowerCase();var o=e.split(\".\"),t=Modernizr[o[0]];if(2==o.length&&(t=t[o[1]]),\"undefined\"!=typeof t)return Modernizr;n=\"function\"==typeof n?n():n,1==o.length?Modernizr[o[0]]=n:(!Modernizr[o[0]]||Modernizr[o[0]]instanceof Boolean||(Modernizr[o[0]]=new Boolean(Modernizr[o[0]])),Modernizr[o[0]][o[1]]=n),a([(n&&0!=n?\"\":\"no-\")+o.join(\"-\")]),Modernizr._trigger(e,n)}return Modernizr}var s=[],r=[],l={_version:\"3.6.0\",_config:{classPrefix:\"\",enableClasses:!0,enableJSClass:!0,usePrefixes:!0},_q:[],on:function(e,n){var A=this;setTimeout(function(){n(A[e])},0)},addTest:function(e,n,A){r.push({name:e,fn:n,options:A})},addAsyncTest:function(e){r.push({name:null,fn:e})}},Modernizr=function(){};Modernizr.prototype=l,Modernizr=new Modernizr;var f,u=n.documentElement,c=\"svg\"===u.nodeName.toLowerCase();!function(){var e={}.hasOwnProperty;f=o(e,\"undefined\")||o(e.call,\"undefined\")?function(e,n){return n in e&&o(e.constructor.prototype[n],\"undefined\")}:function(n,A){return e.call(n,A)}}(),l._l={},l.on=function(e,n){this._l[e]||(this._l[e]=[]),this._l[e].push(n),Modernizr.hasOwnProperty(e)&&setTimeout(function(){Modernizr._trigger(e,Modernizr[e])},0)},l._trigger=function(e,n){if(this._l[e]){var A=this._l[e];setTimeout(function(){var e,o;for(e=0;e<A.length;e++)(o=A[e])(n)},0),delete this._l[e]}},Modernizr._q.push(function(){l.addTest=i}),Modernizr.addAsyncTest(function(){function e(e,n,A){function o(n){var o=n&&\"load\"===n.type?1==t.width:!1,a=\"webp\"===e;i(e,a&&o?new Boolean(o):o),A&&A(n)}var t=new Image;t.onerror=o,t.onload=o,t.src=n}var n=[{uri:\"data:image/webp;base64,UklGRiQAAABXRUJQVlA4IBgAAAAwAQCdASoBAAEAAwA0JaQAA3AA/vuUAAA=\",name:\"webp\"},{uri:\"data:image/webp;base64,UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAABBxAR/Q9ERP8DAABWUDggGAAAADABAJ0BKgEAAQADADQlpAADcAD++/1QAA==\",name:\"webp.alpha\"},{uri:\"data:image/webp;base64,UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA\",name:\"webp.animation\"},{uri:\"data:image/webp;base64,UklGRh4AAABXRUJQVlA4TBEAAAAvAAAAAAfQ//73v/+BiOh/AAA=\",name:\"webp.lossless\"}],A=n.shift();e(A.name,A.uri,function(A){if(A&&\"load\"===A.type)for(var o=0;o<n.length;o++)e(n[o].name,n[o].uri)})}),t(),a(s),delete l.addTest,delete l.addAsyncTest;for(var p=0;p<Modernizr._q.length;p++)Modernizr._q[p]();e.Modernizr=Modernizr}(window,document);\n\n//# sourceURL=webpack:///./app/js/modernizr.js?");

/***/ }),

/***/ "./app/js/toggleCheckbox.js":
/*!**********************************!*\
  !*** ./app/js/toggleCheckbox.js ***!
  \**********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return toggleCheckbox; });\nfunction toggleCheckbox(selector, span) {\r\n  const checkboxInputs = document.querySelectorAll(selector);\r\n\r\n  if (!checkboxInputs[0]) return null;\r\n\r\n  checkboxInputs.forEach((input) => {\r\n    input.addEventListener('click', (e) => {\r\n      if (e.path[0].className !== 'wpcf7-list-item-label')\r\n        input.classList.toggle('ativo');\r\n    });\r\n  });\r\n}\r\n\n\n//# sourceURL=webpack:///./app/js/toggleCheckbox.js?");

/***/ }),

/***/ "./app/style.scss":
/*!************************!*\
  !*** ./app/style.scss ***!
  \************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./app/style.scss?");

/***/ }),

/***/ 0:
/*!****************************!*\
  !*** multi ./app/index.js ***!
  \****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("module.exports = __webpack_require__(/*! ./app/index.js */\"./app/index.js\");\n\n\n//# sourceURL=webpack:///multi_./app/index.js?");

/***/ })

/******/ });