class personSlider {
  constructor(gridSelector, nameSelector, copySelector, peopleSelector, slidersSelector, sliderIndexes, controlPrevSelector, controlNextSelector) {
    this.grid = document.querySelector(gridSelector);
    this.sliderNames = document.querySelectorAll(nameSelector);
    this.copy = Array.from(this.grid.querySelectorAll(copySelector));
    this.people = Array.from(this.grid.querySelectorAll(peopleSelector));
    this.sliders = Array.from(document.querySelectorAll(slidersSelector));
    this.sliderIndexes = Array.from(document.querySelectorAll(sliderIndexes));
    this.controlPrev = document.querySelector(controlPrevSelector);
    this.controlNext = document.querySelector(controlNextSelector);
    this.currentIndex = 0;
  }

  init() {
    this.setListeners();
  }

  // TODO: Make sure params are needed instead of using this inside method.
  setListeners() {
    this.controlPrev.addEventListener('click', () => {
      this.handlePrev();
    });
    this.controlNext.addEventListener('click', () => {
      this.handleNext();
    });
  }

  handlePrev() {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.people.length - 1;
    }
    this.setActiveClass();
  }

  handleNext() {
    this.currentIndex++;
    if (this.currentIndex > this.people.length - 1) {
      this.currentIndex = 0;
    }
    this.setActiveClass();
  }

  setActiveClass() {
    this.sliderNames.forEach((name, i) => {
      name.classList.toggle('active', i === this.currentIndex);
    });
    this.copy.forEach((pTag, i) => {
      pTag.classList.toggle('active', i === this.currentIndex);
    });
    this.people.forEach((person, i) => {
      person.classList.toggle('active', i === this.currentIndex);
    });
    this.sliders.forEach((slide, i) => {
      slide.classList.toggle('active', i === this.currentIndex);
    });
    this.sliderIndexes.forEach((slideIndex, i) => {
      slideIndex.classList.toggle('active', i === this.currentIndex);
    });
  }}


class imageSlider {
  constructor(parent, slidesSelector, currentImageNumElSelector, totalImageNumElSelector, controlPrevSelector, controlNextSelector) {
    this.slides = Array.from(parent.querySelectorAll(slidesSelector));
    this.currentImageNumEl = parent.querySelector(currentImageNumElSelector);
    this.totalImageNumEl = parent.querySelector(totalImageNumElSelector);
    this.controlPrev = parent.querySelector(controlPrevSelector);
    this.controlNext = parent.querySelector(controlNextSelector);
    this.currentIndex = 0;
    this.totalImageNum = this.slides.length;
  }

  init() {
    this.setTotalPageNum();
    this.setListeners();
  }

  setListeners() {
    this.controlPrev.addEventListener('click', () => {
      this.handlePrev();
    });
    this.controlNext.addEventListener('click', () => {
      this.handleNext();
    });
  }

  handlePrev() {
    this.currentIndex--;
    if (this.currentIndex < 0) {
      this.currentIndex = this.slides.length - 1;
    }
    this.setActiveClass(this.slides);
    this.setCurrentImageNum(this.currentImageNumEl, this.currentIndex);
  }

  handleNext() {
    this.currentIndex++;
    if (this.currentIndex > this.slides.length - 1) {
      this.currentIndex = 0;
    }
    this.setActiveClass();
    this.setCurrentImageNum();
  }

  setActiveClass() {
    this.slides.forEach((slide, i) => {
      slide.classList.toggle('active', i === this.currentIndex);
    });
  }

  setCurrentImageNum() {
    this.currentImageNumEl.innerHTML = this.currentIndex + 1;
  }

  setTotalPageNum() {
    this.totalImageNumEl.innerHTML = this.totalImageNum;
  }}


// TODO: Rethink how you instantiate this
const personSliderInstance = new personSlider(
'.portfolio-slider__left-cont__grid',
'.portfolio-slider__left-cont__name-cont__name span',
'.portfolio-slider__left-cont__grid__copy p',
'.js-person',
'.portfolio-slider__image-slider-cont__slider',
'.portfolio-slider__image-slider-cont__controls-cont__index',
'.portfolio-slider__left-cont__name-cont__controls__prev',
'.portfolio-slider__left-cont__name-cont__controls__next');

personSliderInstance.init();

const imageSliders = document.querySelectorAll('.portfolio-slider__image-slider-cont__slider');

Array.from(imageSliders).forEach(slider => {
  slider = new imageSlider(
  slider,
  '.js-slide',
  '.js-current-image-num',
  '.js-total-image-num',
  '.portfolio-slider__image-slider-cont__slider__controls-cont__prev',
  '.portfolio-slider__image-slider-cont__slider__controls-cont__next');

  slider.init();
});