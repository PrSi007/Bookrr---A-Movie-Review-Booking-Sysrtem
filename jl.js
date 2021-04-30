var drawBG = function () {
    var Model = function () {
      this.width = Model.getWidth();
      this.height = Model.getHeight();
      this.color = "800,  0,  0";
      this.alpha = ".23";
      this.img = "http://www.charlesstrube.com/i/ava.jpg";
      return this;
    };
    Model.getHeight = function () {
      var viewportheight = window.innerHeight;
      return viewportheight;
    };
    Model.getWidth = function () {
      var viewportwidth = window.innerWidth;
      return viewportwidth;
    };
    Model.load = function () {
      var model = new Model();
      return model;
    };
    var View = function (data) {
      this.model = data;
      var height = data.height;
      var width = data.width;
      var circleSize = this.circleSize(height, width);
      this.size = {
        x1: width / 4,
        y1: height / 8,
        r1: 0,
  
        x2: width / 4,
        y2: height / 8,
        r2: circleSize / 2,
  
        x3: width / 1.2,
        y3: height / 1.2,
        r3: 0,
  
        x4: width / 1.1,
        y4: height / 1.1,
        r4: circleSize / 3.5
      };
      return this;
    };
    View.load = function (data) {
      var view = new View(data);
      return view;
    };
  
    View.prototype.render = function () {
      var height = this.model.height,
        width = this.model.width,
        color = this.model.color,
        alpha = this.model.alpha,
        src = this.model.img,
        x1 = this.size.x1,
        y1 = this.size.y1,
        r1 = this.size.r1,
        x2 = this.size.x2,
        y2 = this.size.y2,
        r2 = this.size.r2,
        x3 = this.size.x3,
        y3 = this.size.y3,
        r3 = this.size.r3,
        x4 = this.size.x4,
        y4 = this.size.y4,
        r4 = this.size.r4,
        canvas = document.getElementById("bg"),
        context = canvas.getContext("2d");
  
      canvas.height = height;
      canvas.width = width;
      //this.image(context, src, width, height);
      this.radialGradient(
        context,
        x1,
        y1,
        r1,
        x2,
        y2,
        r2,
        color,
        alpha,
        width,
        height
      );
      this.radialGradient(
        context,
        x3,
        y3,
        r3,
        x4,
        y4,
        r4,
        color,
        alpha,
        width,
        height
      );
    };
  
    View.prototype.circleSize = function (height, width) {
      var circleSize;
      if (height >= width) {
        circleSize = height;
      } else {
        circleSize = width;
      }
      return circleSize;
    };
    View.prototype.radialGradient = function (
      context,
      x1,
      y1,
      r1,
      x2,
      y2,
      r2,
      color,
      alpha,
      width,
      height
    ) {
      var radialGradient = context.createRadialGradient(x1, y1, r1, x2, y2, r2);
      radialGradient.addColorStop(0, "rgba(" + color + ",  " + alpha + ")");
      radialGradient.addColorStop(1, "rgba(" + color + ",  0)");
      context.fillStyle = radialGradient;
      context.fillRect(0, 0, width, height);
    };
    View.prototype.image = function (context, src, width, height) {
      var image = null;
      function drawImgBg() {
        image = new Image();
        image.src = src;
        image.addEventListener("load", drawImage);
      }
      function drawImage() {
        var imgWidth = this.width,
          imgHeight = this.height,
          widthByHeight = imgWidth / imgHeight,
          sizeY = height * 0.8,
          sizeX = sizeY * widthByHeight;
        context.drawImage(image, 0, 0, sizeX, sizeY);
      }
      drawImgBg();
    };
    var controller = function () {
      var model = Model.load();
      var view = View.load(model);
      view.render();
    };
    window.addEventListener("resize", controller);
    controller();
  };
  var scroll = function () {
    var Model = function () {
      this.currentPosition = Model.getCurrentPosition();
      this.height = Model.getHeight();
      this.width = Model.getWidth();
      this.elem = document.getElementById("fade");
      this.elemHeight = Model.getElemHeight(this.elem);
      this.elemCurrentPosition = Model.getElemCurrentPosition(this.elem);
      return this;
    };
    Model.getHeight = function () {
      var viewportheight = window.innerHeight;
      return viewportheight;
    };
    Model.getWidth = function () {
      var viewportwidth = window.innerWidth;
      return viewportwidth;
    };
    Model.getElemHeight = function (data) {
      var elemHeight = data.clientHeight;
      return elemHeight;
    };
    Model.getElemCurrentPosition = function (data) {
      var elemCurrentPosition = data.offsetTop;
      return elemCurrentPosition;
    };
    Model.getCurrentPosition = function () {
      var currentPosition =
        window.pageYOffset || document.documentElement.scrollTop;
      return currentPosition;
    };
    Model.load = function () {
      var model = new Model();
      return model;
    };
    var View = function (data) {
      this.model = data;
      var height = this.model.height,
        width = this.model.width,
        currentPosition = this.model.currentPosition,
        elemHeight = this.model.elemHeight,
        elemCurrentPosition = this.model.elemCurrentPosition,
        startZero,
        startOne,
        endOne,
        endZero;
      if (width <= 600) {
        startZero = ((-elemCurrentPosition + currentPosition) * 100) / elemHeight;
        startOne =
          ((-elemCurrentPosition + currentPosition + (height * 10) / 100) * 100) /
          elemHeight;
        endOne =
          ((-elemCurrentPosition + currentPosition + (height * 90) / 100) * 100) /
          elemHeight;
        endZero =
          ((-elemCurrentPosition + currentPosition + height) * 100) / elemHeight;
      } else {
        startZero = (currentPosition * 100) / elemHeight;
        startOne = ((currentPosition + (height * 10) / 100) * 100) / elemHeight;
        endOne = ((currentPosition + (height * 90) / 100) * 100) / elemHeight;
        endZero = ((currentPosition + height) * 100) / elemHeight;
      }
      this.data = {
        startZero: startZero,
        startOne: startOne,
        endOne: endOne,
        endZero: endZero
      };
      return this;
    };
    View.load = function (data) {
      var view = new View(data);
      return view;
    };
    var controller = function () {
      var model = Model.load();
      var view = View.load(model);
      view.render();
    };
    View.prototype.render = function () {
      var elem = this.model.elem,
        startZero = this.data.startZero,
        startOne = this.data.startOne,
        endOne = this.data.endOne,
        endZero = this.data.endZero,
        styleChrome =
          "-webkit-linear-gradient(top, rgba(0,0,0,0) " +
          startZero +
          "%, rgba(0,0,0,1) " +
          startOne +
          "%, rgba(0,0,0,1) " +
          endOne +
          "%, rgba(0,0,0,0) " +
          endZero +
          "%)";
      elem.style.WebkitMaskImage = styleChrome;
    };
    controller();
    window.addEventListener("scroll", controller);
    window.addEventListener("resize", controller);
  };
  /*
      disable the scroll opacity
      webkit only
   */
  drawBG();
  scroll();
  