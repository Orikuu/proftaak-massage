// Dark theme
document.getElementById('mode').addEventListener('change', function () {
    let darkThemeEnabled = document.body.classList.toggle('dark-theme');
    localStorage.setItem('dark-theme-enabled', darkThemeEnabled);
 })
$("#mode").click(function() {
    document.getElementById('header').classList.toggle("bg-dark", "dark-theme");
    document.getElementById('company-name').classList.toggle("text-white");
})
if (JSON.parse(localStorage.getItem('dark-theme-enabled'))) {
    document.body.classList.add('dark-theme');
    document.getElementById('header').classList.add('bg-dark', 'dark-theme');
    document.getElementById('company-name').classList.add('text-white');
}
var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
    $checkboxes = $("#checkbox-container :checkbox");

$checkboxes.on("change", function(){
  $checkboxes.each(function(){
    checkboxValues[this.id] = this.checked;
  });
  
  localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
});
// On page load
$.each(checkboxValues, function(key, value) {
  $("#" + key).prop('checked', value);
});