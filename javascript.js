document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('.appointment-form');
    form.addEventListener('submit', function(event) {
        const name = document.querySelector('#name').value;
        const email = document.querySelector('#email').value;
        const date = document.querySelector('#date').value;
        const time = document.querySelector('#time').value;

        if (!name || !email || !date || !time) {
            alert('Harap lengkapi semua field.');
            event.preventDefault();
        }
    });
});
