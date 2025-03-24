window.addEventListener("DOMContentLoaded", () => {
    let elem = document.querySelector("#hero-content");
    let flkty = new Flickity(elem, {
        // options
        cellAlign: "left",
        contain: true,
        wrapAround: true,
        contain: true,
        autoPlay: 2000
    });
});
