import './bootstrap';

const mainContent = document.querySelector('.--content');

if(mainContent) {
    const mainForm = mainContent.querySelector('form')
    mainContent.querySelectorAll('select').forEach(a => {
        a.addEventListener('change', () => mainForm.submit())
    })
}
