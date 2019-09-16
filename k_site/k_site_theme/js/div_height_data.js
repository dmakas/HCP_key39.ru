$(function checkForChanges() {
  var height = $( '#k-private-1' ).height() + 80;
  $( '#k-private-2' ).height(height);
  setTimeout(checkForChanges, 100);
});
checkForChanges();
