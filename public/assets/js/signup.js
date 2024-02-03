document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {

      // validimi emrit
      const firstName = document.getElementById("first-name").value.trim();
      if (!firstName) {
        alert("Please enter your first name.");
        event.preventDefault();
        return;
      }

      // validimi mbiemrit
      const lastName = document.getElementById("last-name").value.trim();
      if (!lastName) {
        alert("Please enter your last name.");
        event.preventDefault();
        return;
      }

      // validimi emailit
      const email = document.getElementById("email").value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
        return;
      }

      // validimi passit
      const password = document.getElementById("new-password").value;
      const passwordRegex = /[a-z0-9]{8,}/;
      if (!passwordRegex.test(password)) {
        alert("Please enter a valid password with at least 8 characters.");
        event.preventDefault();
        return;
      }

      // validimi terms and conditions/ e kqyr checkboxin a o checked
      const termsCheckbox = document.getElementById("terms-and-conditions");
      if (!termsCheckbox.checked) {
        alert("Please accept the terms and conditions.");
        event.preventDefault();
        return;
      }
    });
  });