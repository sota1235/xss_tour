var originAlert = window.alert;

window.alert = function (string) {
  originAlert(string);
};
