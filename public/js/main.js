function toggleMobileMenu() {
    const menu = document.getElementById("mobileMenu");
    menu.classList.toggle("hidden");
}

// reset and forgot script


 document.getElementById("show-reset").onclick = function() {
    document.getElementById("forgot-section").classList.add("hidden");
    document.getElementById("reset-section").classList.remove("hidden");
  };
  document.getElementById("show-forgot").onclick = function() {
    document.getElementById("reset-section").classList.add("hidden");
    document.getElementById("forgot-section").classList.remove("hidden");
  };

  document.getElementById("forgot-form").onsubmit = function(e) {
    e.preventDefault();
    document.getElementById("forgot-success").classList.remove("hidden");
  };

  document.getElementById("reset-form").onsubmit = function(e) {
    e.preventDefault();
    const pass = document.getElementById("reset-password").value;
    const confirm = document.getElementById("reset-confirm").value;
    if (pass !== confirm) {
      alert("Passwords do not match!");
      return;
    }
    document.getElementById("reset-success").classList.remove("hidden");
  };

  
// Toggle password visibility
  document.addEventListener('DOMContentLoaded', function () {
    const passwordInput = document.getElementById('passwordInput');
    const togglePassword = document.getElementById('togglePassword');

    togglePassword.addEventListener('click', function () {
      const isPassword = passwordInput.getAttribute('type') === 'password';
      passwordInput.setAttribute('type', isPassword ? 'text' : 'password');

      const icon = this.querySelector('i');
      icon.classList.toggle('fa-eye');
      icon.classList.toggle('fa-eye-slash');
    });
  });

