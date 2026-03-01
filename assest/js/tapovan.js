document.addEventListener('DOMContentLoaded', () => {

    const sections = document.querySelectorAll('section, header');
    const navbarHeight = document.querySelector('.navbar').offsetHeight;

    // Function to show only selected section
    function showSection(id) {
        sections.forEach(sec => sec.style.display = 'none'); // Hide all
        const active = document.getElementById(id);
        if (active) active.style.display = 'block'; // Show selected
        fadeIn(active); // Optional fade-in effect
    }

    // Fade-in function
    function fadeIn(element) {
        if (!element) return;
        element.style.opacity = 0;
        element.style.transform = 'translateY(20px)';
        element.style.display = 'block';
        setTimeout(() => {
            element.style.transition = 'opacity 0.8s ease-out, transform 0.8s ease-out';
            element.style.opacity = 1;
            element.style.transform = 'translateY(0)';
        }, 50);
    }

    // Default show Home section
    showSection('home');

    // Navbar links click
    document.querySelectorAll('.nav-links a').forEach(link => {
        link.addEventListener('click', e => {
            e.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            showSection(targetId);
            history.pushState(null, null, `#${targetId}`); // optional: update URL hash
        });
    });

});

// login system
const SCRIPT_URL = "https://script.google.com/macros/s/AKfycbzxhNIsbKertqt75jTQIuOPRsfYRczhtQNAiHYExv2z6TUNfvVF3Tzds445kZL8PtMx/exechttps://script.google.com/macros/s/AKfycbxlkZA9uh7AAiWPQRizezvltC-gpbK0BbWXHJNy6tYGjh4STBFCswCh1Tka6l_k8wTS/exec";

function login() {
  const role = document.getElementById("role").value;
  const userId = document.getElementById("userid").value;
  const password = document.getElementById("password").value;

  fetch(SCRIPT_URL, {
    method: "POST",
    body: JSON.stringify({
      action: "login",
      role: role,
      user_id: userId,
      password: password
    })
  })
  .then(res => res.json())
  .then(data => {
    if (data.status === "success") {
      document.getElementById("result").innerHTML =
        "✅ Login Successful <br>Date: " + data.date + "<br>Time: " + data.time;
    } else {
      document.getElementById("result").innerHTML =
        "❌ Invalid User ID or Password";
    }
  })
  .catch(err => {
    document.getElementById("result").innerText = "Error connecting to server";
  });
}



