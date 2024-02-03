document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      
      const email = document.getElementById("email").value.trim();
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Please enter a valid email address.");
        event.preventDefault();
        return;
      }


      const name = document.getElementById("name").value.trim();
      const message = document.getElementById("message").value.trim();

      if (name === "") {
        alert("Please enter your name.");
        event.preventDefault();
        return;
      }

      if (message === "") {
        alert("Please enter your message.");
        event.preventDefault();
        return;
      }
    });
  });