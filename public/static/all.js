var originAlert = window.alert;

window.alert = function (string) {
  originAlert(string);
  document.getElementById('success-space').style.display = 'block';
};
