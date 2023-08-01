document.addEventListener('DOMContentLoaded', () => {
  const slider = document.querySelector('#slider');
  const prevBtn = document.querySelector('.arrowPrev');
  const nextBtn = document.querySelector('.arrowNext');

  let currentPosition = 0;

  const updateSliderPosition = () => {
    slider.style.transform = `translateX(-${currentPosition * 100}%)`;
  };

  const nextSlide = () => {
    currentPosition++;
    if (currentPosition > slider.children.length - 1) {
      currentPosition = 0;
    }
    updateSliderPosition();
  };

  const previousSlide = () => {
    currentPosition--;
    if (currentPosition < 0) {
      currentPosition = slider.children.length - 1;
    }
    updateSliderPosition();
  };

  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', previousSlide);

  // Mostrar el primer slide al cargar la página
  updateSliderPosition();
});
