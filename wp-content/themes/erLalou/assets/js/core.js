jQuery(document).ready(function($) {
  $('.slide').on('click', function() {
    if(!$(this).hasClass('-active')) {
      $('.slide').each(function () {
        $(this).removeClass('-active');
      });
      $(this).addClass('-active');
    }
  })

  var MenuController = (function () {
    function MenuController(menuId) {
      this.menuId = menuId;
      this.menuElement = $(menuId);
      this.openBtn = this.menuElement.find('#open_button');
      this.closeBtn = this.menuElement.find('#close_button');
    }

    MenuController.prototype.attachOpenButtonControl = function () {
      this.openBtn.on('click', function () {
        $('#menuPrincipal #main_menu')
          .removeClass('hide')
          .css('z-index', '10')
          .css('overflow-y', 'scroll');
        $('body').css('overflow', 'hidden');
      });
    };

    MenuController.prototype.attachCloseButtonControl = function () {
      this.closeBtn.on('click', function () {
        $('#menuPrincipal #main_menu')
          .addClass('hide')
          .css('z-index', '-1')
          .css('overflow', 'initial');
        $('body').css('overflow', '');
      });
    };
    return MenuController;
  }());

  var menuController = new MenuController("#menuPrincipal");
  menuController.attachOpenButtonControl();
  menuController.attachCloseButtonControl();
});
