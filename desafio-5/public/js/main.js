"use strict";

feather.replace();
document.querySelectorAll(".phone .group").forEach(function (group) {
  return group.addEventListener("click", function () {
    document.querySelectorAll(".phone .group").forEach(function (group) {
      group.classList.remove("active");
    });
    this.classList.add("active");
  });
});
var glideConfig = {
  type: 'carousel',
  perView: 3,
  gap: 15
};
new Glide(".glide", glideConfig).mount();