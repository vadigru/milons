(function () {
  let logo = document.querySelector(`.logo`);
  let wrapper = document.querySelector(`.wrapper`);
  let menu = wrapper.querySelector(`.menu`);
  let club = wrapper.querySelector(`#club`);
  let scheduel = wrapper.querySelector(`#schedule`);
  let logoMenu = document.querySelector(`.logo .logo_menu .fas`);
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
        document.querySelector(`.bcc`).style.boxShadow = `none`;
      } else {
        document.querySelector(`header`).style.top = `0`;
        document.querySelector(`.bcc`).style.backgroundColor = `rgba(255, 224, 130)`;
        document.querySelector(`.bcc`).style.boxShadow = `0 2px 5px -4px #312783`;
      }
    }
  };

  logo.addEventListener(`click`, function () {
    if (width <= 1024) {
      if (!menu.classList.contains(`show`)) {
        menu.classList.add(`show`);
        logoMenu.classList.add(`menu_btn`);
      } else {
        menu.classList.remove(`show`);
        logoMenu.classList.remove(`menu_btn`);
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
