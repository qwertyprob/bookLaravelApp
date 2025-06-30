  //dropdown по скроллу закрывается
  
  window.addEventListener('scroll', function () {
    const dropdown = bootstrap.Dropdown.getInstance(document.querySelector('#userDropdown'));
    if (dropdown) {
      dropdown.hide();
    }
  });