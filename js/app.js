var app = {
  init: function() {
    app.button = document.querySelector('#toggle');
    app.button.addEventListener('click', app.switchTo);
  },

  switchTo: function(evt) {
    if (app.button.className === "picturemode") {
      app.button.className = "listmode";
      app.listElements = document.querySelectorAll('.listpicture');
      app.imgElements = document.querySelectorAll('.picture');

      app.listElements.forEach(function (element) {
        element.classList.remove('listpicture');
        element.classList.add('list');
      });

      app.imgElements.forEach(function(element) {
        element.classList.remove('picture');
        element.classList.add('picturelist');
      });
    } else {
      app.button.className = "picturemode";
      app.listElements = document.querySelectorAll('.list');
      app.imgElements = document.querySelectorAll('.picturelist');

      app.listElements.forEach(function (element) {
        element.classList.remove('list');
        element.classList.add('listpicture');
      });

      app.imgElements.forEach(function(element) {
        element.classList.remove('picturelist');
        element.classList.add('picture');
      });
    }
  }
};

app.init();