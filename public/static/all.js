var originAlert = window.alert;

window.alert = function (string) {
  originAlert(string);
  if (string === 'xss') {
    document.getElementById('success-space').style.display = 'block';
  }
};
