document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      // validimi username
      const username = document.getElementById("username").value.trim();
        if (!username) {
            alert("Please enter your username.");
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