// require('./bootstrap');
require('./bootstrap');

// Add this function for the mobile toggle
window.toggleNavbar = function() {
    document.querySelector('.navbar-collapse').classList.toggle('show');
}