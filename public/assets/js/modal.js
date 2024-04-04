document.addEventListener("DOMContentLoaded", function () {
    const modalOpener = document.getElementById('show-modal');
    const modal = document.getElementById('modal');
    const modalCloser = document.getElementById('modal-closer');
    
    modalOpener.addEventListener("click", function () {
        modal.classList.remove('hidden');
    }) 

    modalCloser.addEventListener("click", function () {
        modal.classList.add('hidden');
    })
})