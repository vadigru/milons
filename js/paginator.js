(function () {
  let newURL = window.location.protocol + `//` + window.location.host + `` + window.location.pathname + window.location.search;
  let pageNumbers = document.querySelectorAll(`.page_number>a`);

  if (pageNumbers) {
    pageNumbers[0].classList.add(`active`);
  }

  [].forEach.call(pageNumbers, function (item) {
    if (item.href === newURL) {
      pageNumbers[0].classList.remove(`active`);
      item.classList.add(`active`);
    }
  });
})();
