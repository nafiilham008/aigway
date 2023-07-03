var currentLocation = location.pathname;

var buttonHome = document.getElementById('button-home');
var buttonKatalog = document.getElementById('button-katalog');
var buttonAbout = document.getElementById('button-about');

if ('/' === currentLocation) {
    if (buttonHome) {
        buttonHome.style.setProperty("--before-width", "80%");
        buttonHome.style.setProperty("font-weight", "bold");
    }
} else if ('/katalog' === currentLocation) {
    if (buttonKatalog) {
        buttonKatalog.style.setProperty("--before-width", "80%");
        buttonKatalog.style.setProperty("font-weight", "bold");
    }
} else if ('/tentang' === currentLocation) {
    if (buttonAbout) {
        buttonAbout.style.setProperty("--before-width", "80%");
        buttonAbout.style.setProperty("font-weight", "bold");
    }
} else {
}
