$(document).ready(function() {
  //      ---------------
  //      EVENT LISTENERS
  //      ---------------
  //Quand on clic sur le bouton menu
  $('button[id="menu-button"]').on('click', function() {
    if ($('header[id="menu-bar"]').is(':visible')) {
      $('header[id="menu-bar"]').addClass('hidden');
    } else {
      $('header[id="menu-bar"]').removeClass('hidden');
    }
  });
});
