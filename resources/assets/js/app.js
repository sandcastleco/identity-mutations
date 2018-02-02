if ($(window).width() > 480) {
  var animationTiming = 1000;
  var $panels = $('.panel');
  var $panelBodies = $('.panel-body');
  var $container = $('.panel-container');
  var $currentPanel = $('.show');
  var $body = $('body');

  function initStyles() {
    $container.addClass('flex vh-80');
    $panels.addClass('js');
    $panelBodies.hide().css({
      'opacity': 0
    });
    showPanelBody($currentPanel);
  }

  initStyles();

  function showPanelBody(panel, delay, cb) {
    var delay = delay || 0;
    var panelBody = panel.find('.panel-body');
    panelBody.show(delay, function() {
      panelBody.animate({
        opacity: "1"
      }, animationTiming / 2, cb);
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

  function togglePanel() {
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
  }

  $(document).ready(function() {
    $panels.click(togglePanel);
  });
}
