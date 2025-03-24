const toggleButton = document.getElementById('menu-toggle');
const navMenu = document.getElementById('nav-menu');
const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

// Toggle mobile menu open/close
toggleButton.addEventListener('click', () => {
  navMenu.classList.toggle('show');
});

// Toggle dropdowns on click only
dropdownToggles.forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault();

    // Close other open dropdowns if needed
    dropdownToggles.forEach(otherBtn => {
      if (otherBtn !== btn) {
        otherBtn.parentElement.classList.remove('show');
      }
    });

    // Toggle the clicked dropdown
    const dropdown = btn.parentElement;
    dropdown.classList.toggle('show');
  });
});