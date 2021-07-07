feather.replace();

document.querySelectorAll(".phone .group").forEach((group) =>
    group.addEventListener("click", function () {
        document.querySelectorAll(".phone .group").forEach((group) => {
            group.classList.remove("active");
        });
        this.classList.add("active");
    })
);

const glideConveniadosConfig = {
    type: 'carousel',
    perView: 3,
    gap: 15
}
new Glide(".glide-conveniados", glideConveniadosConfig).mount();


const glideNoticiasConfig = {
    type: 'slider',
    perView: 3,
    gap: 20,
    dots: '.dots',
    infinite: false
}
new Glide(".glide-noticias", glideNoticiasConfig).mount();