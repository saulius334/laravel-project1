import './bootstrap';

const mainContent = document.querySelector('.--content');
const mainForm = mainContent.querySelector('form');

mainContent.querySelectorAll('select').forEach(e => {
    e.addEventListener('change', () => {
        mainForm.submit()
    })
})
