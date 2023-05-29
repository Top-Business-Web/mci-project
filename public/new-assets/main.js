// slider functionality

var sliderImages = document.querySelectorAll(".slide"),
  arrowRight = document.querySelector(".slider-body .icon-right"),
  arrowLeft = document.querySelector(".slider-body .icon-left"),
  currentImage = 0;

// clear all images

function reset() {
  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (
      var _iterator = sliderImages[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true
    ) {
      var img = _step.value;

      img.style.display = "none";
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }
}


function startSlide() {
  //call the clear function
  reset();

  //intialize the first image
  sliderImages[0].style.display = 'block';
}

//show prev image 

function slideLeft() {
  reset();

  sliderImages[currentImage - 1].style.display = 'block';
  currentImage--;
}

//left arrow event listner

arrowLeft.addEventListener('click', function () {
  if (currentImage === 0) {
    currentImage = sliderImages.length;
  }

  slideLeft();
});

//show next image 

function slideRight() {
  reset();

  sliderImages[currentImage + 1].style.display = 'block';
  currentImage++;
}

//right arrow event listner

arrowRight.addEventListener('click', function () {
  if (currentImage === sliderImages.length - 1) {
    currentImage = -1;
  }

  slideRight();
});

//call the slide function
startSlide();

//hamburger menu 

var menu = document.getElementsByClassName('icon-menu'),
  navBar = document.getElementsByClassName('main-header__nav'),
  closeMenu = document.getElementsByClassName('icon-close'),
  navItems = document.querySelectorAll('.main-header__nav--item');
closeMenu[0].style.display = 'none';

menu[0].addEventListener('click', function () {
  navBar[0].style.display = 'inline-block';
  navBar[0].style.width = '80%';
  
  setTimeout(function () {
    
    closeMenu[0].style.display = 'inline-block';
    
    for (var i = 0; i < navItems.length; i++) {
      navItems[i].classList.add('showItem');
    }
  }, 500);

});

closeMenu[0].addEventListener('click', function () {
  setTimeout(function() {
    closeMenu[0].style.display = 'none';
    navBar[0].style.width = '0';
  }, 300);

  for (var i = 0; i < navItems.length; i++) {
      navItems[i].classList.remove('showItem');
  }
});

// about view on scroll

var aboutDes = document.querySelector('.about__describtion'),
    aboutCTA = document.querySelector('.about__btn'),
    aboutImg = document.querySelector('.about__image'),
    windowHeight = window.innerHeight;

window.addEventListener('scroll', function() {
  if (window.pageYOffset + (windowHeight) >= (aboutDes.offsetTop + 250)) {
    setTimeout(function(){
      aboutDes.style.opacity = '1';
    }, 300);
    
    setTimeout(function(){
      aboutCTA.style.opacity = '1';
    }, 800);
    
    setTimeout(function(){
      aboutImg.style.opacity = '1';
      aboutImg.style.transform = 'translate(0, 0)';
      aboutImg.style.WebkitTransform = 'translate(0, 0)';
    }, 300);
  }
});

// services view on scroll

var servicesSec = document.querySelector('.services'),
    servicesCTA = document.querySelector('.services__btn'),
    serviceReached = servicesSec.offsetTop;

window.addEventListener('scroll', function() {
  if (window.pageYOffset + (windowHeight) >= (serviceReached + 250)) {
    servicesSec.classList.remove('hide-services');
    servicesSec.classList.add('show-services');
    
    setTimeout(function() {
      servicesCTA.style.opacity = '1';
    }, 1000);
  }
  
});


// products slide

var arrowRight = document.querySelector(".products .icon-right"),
  scroller = document.querySelector('.scroll'),
  products = document.querySelectorAll('.products__box'),
  windowWidth = document.body.clientWidth,
  productsOffset = ((products[0].offsetWidth + 16) * products.length) - (windowWidth / 2);

scroller.addEventListener('scroll', function () {
  if (scroller.scrollLeft >= (productsOffset)) {
    scroller.scroll({
      left: 0,
      behavior: 'smooth'
    });
  }
});

arrowRight.addEventListener('click', function () {
  scroller.scrollBy({
    left: +256,
    behavior: 'smooth'
  });
});

arrowLeft.addEventListener('click', function () {
  scroller.scrollBy({
    left: -256,
    behavior: 'smooth'
  });
});

// products view on scroll

var productsSec = document.querySelector('.products'),
    productReached = productsSec.offsetTop;

window.addEventListener('scroll', function() {
  
  
  if (window.pageYOffset + (windowHeight) >= (productReached + 250)) {
      productsSec.classList.remove('hide-products');
      productsSec.classList.add('show-products');
  }
  
});

//back to top functionality

var toTop = document.getElementsByClassName('footer__to-top');

toTop[0].addEventListener('click', function () {

  window.scroll({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
});

var footer = document.querySelector('.footer'),
    footerReached = footer.offsetTop;

window.addEventListener('scroll', function() {
  if (window.pageYOffset + (windowHeight) >= (footerReached + 41.5)) {
    toTop[0].style.top = 'auto';
    toTop[0].style.bottom = '2rem';
    toTop[0].style.position = 'fixed';
  }
  else {
    toTop[0].style.top = '-22.5px';
    toTop[0].style.bottom = 'auto';
    toTop[0].style.position = 'absolute';
  }
});

