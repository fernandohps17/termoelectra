(() => {
    const openModal = document.querySelectorAll('.modal_active');
    const modal = document.querySelector('.modal1');
    const closeModal = document.querySelector('.modal_close');
    const windowClose = document.getElementById("window_modal_close");
    const formulario = document.getElementById('formul');
    // obtienes el fomulaio

    const modalToggle = (modal, close, formulario) => {
        modal.classList.toggle('modal--show')

        if (close) {
            // limpias el fomulaio
            formulario.reset();
        }
    }

    // console.log(windowClose)
    closeModal.addEventListener('click', (e) => {
        modalToggle(modal, true, formulario)
    })

    windowClose.addEventListener('click', (e) => {
        modalToggle(modal, true, formulario)
    })

    openModal.forEach(item => {
        item.addEventListener('click', (e) => {
            modalToggle(modal)
        });
    });



})()