// ----------------------------------- MAPA -----------------------------------------------------------

(() => {
    setTimeout(() => {
        mapGoogle('map1', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2983.543208502235!2d2.288577!3d41.6007638!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4c7c2e1a50c35%3A0x543bd2399c95a867!2sCarrer%20de%20Llevant%2C%2076%2C%2008402%20Granollers%2C%20Barcelona%2C%20Espa%C3%B1a!5e0!3m2!1ses-419!2sve!4v1692198031411!5m2!1ses-419!2sve');
    }, 4000);
})();

function mapGoogle(element, map) {
    var iframeTag = document.createElement('iframe');
    iframeTag.title = 'Mapa'
    iframeTag.src = map;

    document.getElementById(element).appendChild(iframeTag);
    // document.getElementById('cardMap').style.display = 'grid';
}