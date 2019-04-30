$(document).ready(function() {
  var toggles = $("#checklist input[type=checkbox]");

  toggles.change(update_toggles);
  update_toggles();

  function update_toggles() {
    $("#score").text($("#checklist input[type=checkbox]:checked").length + " / " + toggles.length);
  }
});
