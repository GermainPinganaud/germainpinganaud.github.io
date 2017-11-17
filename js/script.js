$(document).ready(function() {

  //      ---------------
  //      EVENT LISTENERS
  //      ---------------
  //Quand on clic sur le bouton menu
  $("button[id='menu-button']").on("click", function() {
    $("header[id='menu-bar']").removeClass("hidden");
    // $("header[id='menu-bar']").addClass("menu");
  });
});
