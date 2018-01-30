
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');
//
// window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });

var animationTiming = 1000;
var $panels = $('.panel');
var $currentPanel = $('.show');
var $body = $('body');

showPanelBody($currentPanel);

function showPanelBody(panel, delay, cb) {
  var delay = delay || 0;
  var panelBody = panel.find('.panel-body');
  panelBody.show(delay, function() {
    panelBody.animate({
      opacity: "1"
    }, animationTiming, cb);
  });
}

function hidePanelBody(panel, cb) {
  var panelBody = panel.find('.panel-body');
  panelBody.animate({
    opacity: "0"
  }, animationTiming / 2, function() {
    panelBody.hide();
    cb();
  });
}

$panels.click(function() {
  var $newPanel = $(this);
  if (!$newPanel.hasClass('show') && !$body.hasClass('active')) {
    $body.addClass('active');
    hidePanelBody($currentPanel, function() {
      $currentPanel.removeClass('show');
      $newPanel.addClass('show');
      showPanelBody($newPanel, animationTiming, function() {
        $body.removeClass('active');
      });
      $currentPanel = $newPanel;
    });
  }
});
