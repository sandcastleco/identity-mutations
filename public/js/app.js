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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(1);
module.exports = __webpack_require__(2);


/***/ }),
/* 1 */
/***/ (function(module, exports) {

if ($(window).width() > 480) {
  var initStyles = function initStyles() {
    $container.addClass('flex vh-80');
    $panels.addClass('js');
    $panelBodies.hide().css({
      'opacity': 0,
      'overflow': 'scroll'
    }).addClass('vh-80');
    showPanelBody($currentPanel);
  };

  var showPanelBody = function showPanelBody(panel, delay, cb) {
    var delay = delay || 0;
    var panelBody = panel.find('.panel-body');
    panelBody.show(delay, function () {
      panelBody.animate({
        opacity: "1"
      }, animationTiming / 2, cb);
    });
  };

  var hidePanelBody = function hidePanelBody(panel, cb) {
    var panelBody = panel.find('.panel-body');
    panelBody.animate({
      opacity: "0"
    }, animationTiming / 2, function () {
      panelBody.hide();
      cb();
    });
  };

  var togglePanel = function togglePanel() {
    var $newPanel = $(this);
    if (!$newPanel.hasClass('show') && !$body.hasClass('active')) {
      $body.addClass('active');
      hidePanelBody($currentPanel, function () {
        $currentPanel.removeClass('show');
        $newPanel.addClass('show');
        showPanelBody($newPanel, animationTiming, function () {
          $body.removeClass('active');
        });
        $currentPanel = $newPanel;
      });
    }
  };

  var animationTiming = 1000;
  var $panels = $('.panel');
  var $panelBodies = $('.panel-body');
  var $container = $('.panel-container');
  var $currentPanel = $('.show');
  var $body = $('body');

  initStyles();

  $(document).ready(function () {
    $panels.click(togglePanel);
  });
}

/***/ }),
/* 2 */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ })
/******/ ]);