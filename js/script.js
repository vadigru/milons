let img = document.querySelector(".logo>img");
let menu = document.querySelector(".menu");
let wrapper = document.querySelector(`.wrapper`);

wrapper.addEventListener(`click`, function (evt) {
  if (evt.target === img) {
    menu.classList.toggle(`hidden`);
  }
});

document.addEventListener(`click`, function (evt) {
  if (!evt.target.classList.contains(`menu_btn`) || evt.target.tagName === `img`) {
    menu.classList.remove(`hidden`);
  }
});
