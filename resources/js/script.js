const sizes = document.querySelectorAll('.size');
const input = document.getElementById('selected-size');
const btn = document.getElementById('buy-btn');

sizes.forEach(size => {
        size.addEventListener('click', () => {
            sizes.forEach(s => s.classList.remove('active'));
            size.classList.add('active');

            input.value = size.dataset.size;

            btn.disabled = false;
        });
});