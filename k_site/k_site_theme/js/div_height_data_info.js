$(function checkForChanges2() {
  var height2 = $( '#k-info-1' ).height();
  $( '#k-info-2' ).height(height2);
  setTimeout(checkForChanges2, 100);
});
checkForChanges2();
