function modalOpen(currentModal) {
    const modalOpenAll = document.querySelectorAll('[data-container-open-modal]');
    modalOpenAll.forEach(modalOpen => {
        modalClose(modalOpen);
    });
    
    document.documentElement.classList.add("lock");
    currentModal.setAttribute('data-container-open-modal', '');
    currentModal.addEventListener('click', (event) => {
        if (!event.target.closest('[data-content-modal]')) {
            modalClose(currentModal);
        }
    }); 
}

function modalClose(currentModal) {
	const playerAll  = document.querySelectorAll('[data-player]');
	playerAll.forEach ((item) => {
		videoPause(item);
	});
    document.documentElement.classList.remove("lock");
    currentModal.removeAttribute('data-container-open-modal');
}