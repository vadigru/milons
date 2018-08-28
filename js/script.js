let img = document.querySelector(`.logo>img`);
let menu = document.querySelector(`.menu`);
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

window.addEventListener(`scroll`, bringmenu);

function bringmenu() {
  let width = document.body.offsetWidth;
  if (width >= 1024) {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
      document.querySelector(`header`).style.top = `-100px`;
      document.querySelector(`.bcc`).style.backgroundColor = `rgba(255, 224, 130, 0.8)`;
    } else {
      document.querySelector(`header`).style.top = `0`;
      document.querySelector(`.bcc`).style.backgroundColor = `rgba(255, 224, 130)`;
    }
  }
}
