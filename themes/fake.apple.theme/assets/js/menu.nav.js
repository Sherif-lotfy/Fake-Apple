document.addEventListener('DOMContentLoaded', function() {
  // Create overlay element
  var overlay = document.createElement('div');
  overlay.className = 'overlay';
  document.body.appendChild(overlay);

  // Get all menu items
  var menuItems = document.querySelectorAll('.main-nav .menu-item');

  menuItems.forEach(function(menuItem) {
      menuItem.addEventListener('mouseover', function() {
          overlay.style.display = 'block';
      });
      menuItem.addEventListener('mouseout', function() {
          overlay.style.display = 'none';
      });
  });
});