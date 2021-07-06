feather.replace();

document.querySelectorAll(".phone .group").forEach((group) =>
    group.addEventListener("click", function () {
        document.querySelectorAll(".phone .group").forEach((group) => {
            group.classList.remove("active");
        });
        this.classList.add("active");
    })
);

const glideConfig = {
    type: 'carousel',
    perView: 3,
    gap: 15
}

new Glide(".glide", glideConfig).mount();
