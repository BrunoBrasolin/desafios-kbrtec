"use strict";

document.querySelectorAll(".phone .group").forEach(function (group) {
  return group.addEventListener("click", function () {
    document.querySelectorAll(".phone .group").forEach(function (group) {
      group.classList.remove("active");
    });
    this.classList.add("active");
  });
});