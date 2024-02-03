document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      // validimi emailit
      const email = document.getElementById("email").value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
        return;
      }

      // validimi passiiit
      const password = document.getElementById("password").value;
      const passwordRegex = /[a-z0-9]{8,}/;
      if (!passwordRegex.test(password)) {
        alert("Please enter a valid password with at least 8 characters.");
        event.preventDefault();
        return;
      }
    });
  });