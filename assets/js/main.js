document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.deletebtn');
    deleteButtons.forEach(function(btn) {
        btn.addEventListener('click', function(event) {
            if (!confirm('Are you sure you want to delete the data ?')) {
                event.preventDefault();
            }
        });
    });

    const password = document.getElementById('pass');
    const show = document.getElementById('checkpass');
    if (password && show) {
        show.addEventListener('change', function() {
            password.type = this.checked ? "text" : "password";
        });
    }

    const logoutbtn = document.getElementById('logoutbtn'); 
    if (logoutbtn) {
        logoutbtn.addEventListener('click', function(event) {
            if (!confirm('Are you sure you want to Logout ?')) {
                event.preventDefault();
            }
        });
    }
});