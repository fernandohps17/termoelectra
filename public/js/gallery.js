(() => {
    const listImages = document.querySelectorAll("#galery img");
    const containerImageShow = document.getElementById("fullImg");
    const containerSourceShow = document.getElementById("fullSource");
    const containerShowImage = document.getElementById("containerShowImage");
    const closeShowImage = document.getElementById("closeShowImage");

    const showImage = (image) => {
        containerImageShow.src = image.src;
        containerSourceShow.srcset = image.src;

        containerShowImage.style.display = "flex";
    }

    listImages.forEach(image => {
        image.addEventListener('click', () => showImage(image))
    });

    closeShowImage.addEventListener('click', () => {
        containerShowImage.style.display = "none";
    })
    
})();


function modal() {
    this.modal = document.querySelector(".ful-img");
    window.addEventListener("click", (e) => {
        e.target == this.modal ? (this.modal.style.display = "none") : "";
    });
}

(() => {
    modal();
})();