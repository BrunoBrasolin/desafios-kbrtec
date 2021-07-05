document.querySelectorAll(".phone .group").forEach((group) =>
    group.addEventListener("click", function () {
        document.querySelectorAll(".phone .group").forEach((group) => {
            group.classList.remove("active");
        });
        this.classList.add("active");
    })
);
