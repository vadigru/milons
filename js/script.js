(function () {
  let logo = document.querySelector(`.logo`);
  let wrapper = document.querySelector(`.wrapper`);
  let menu = wrapper.querySelector(`.menu`);
  let club = wrapper.querySelector(`#club`);
  let scheduel = wrapper.querySelector(`#schedule`);
  let logoSpan = document.querySelector(`.logo>span`);
  let width = document.body.offsetWidth;

  let menuClose = function () {
    menu.classList.remove(`show`);
    club.checked = false;
    scheduel.checked = false;
  };

  let menuBring = function () {
    if (width >= 1024) {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector(`header`).style.top = `-100px`;
        document.querySelector(`.bcc`).style.backgroundColor = `rgba(255, 224, 130, 0.9)`;
      } else {
        document.querySelector(`header`).style.top = `0`;
        document.querySelector(`.bcc`).style.backgroundColor = `rgba(255, 224, 130)`;
      }
    }
  };

  logo.addEventListener(`click`, function (evt) {
    if (width <= 1024) {
      evt.preventDefault();
      if (!menu.classList.contains(`show`)) {
        menu.classList.add(`show`);
        logo.classList.add(`menu_btn`);
        logoSpan.classList.add(`menu_btn`);
      } else {
        menu.classList.remove(`show`);
        logo.classList.remove(`menu_btn`);
        logoSpan.classList.remove(`menu_btn`);
      }
    }
  });

  document.addEventListener(`click`, function (evt) {
    if (!evt.target.classList.contains(`menu_btn`)) {
      menuClose();
    }
  });

  document.addEventListener(`swiped-up`, menuClose);
  window.addEventListener(`scroll`, menuBring);
})();
