document.getElementById("loginBtn").addEventListener("click", function(e){
    e.preventDefault();
    const role = document.getElementById("role").value;
    const user = document.getElementById("userid").value;
    const pass = document.getElementById("password").value;

    fetch("login.php", {
        method:"POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `role=${role}&user=${user}&pass=${pass}`
    })
    .then(res => res.text())
    .then(data => {
        alert(data); // success or invalid
    });
});


