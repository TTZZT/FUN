document.addEventListener('DOMContentLoaded', function () {
  // Initialize Swiper
  var swiper = new Swiper(".main-slider .mySwiper", {
    spaceBetween: 30,
    effect: "fade",
    navigation: false,
    autoplay: {
      delay: 5000,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  // Initialize Owl Carousel
  if (typeof $.fn.owlCarousel === 'function') {
    $(".partners .owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [
        '<span class="fas fa-chevron-left "></span>',
        '<span class="fas fa-chevron-right "></span>',
      ],
      dots: false,
      autoplay: true,
      autoplayTimeout: 3000,
      autoplaySpeed: 1000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 3,
        },
        1000: {
          items: 6,
        },
      },
    });
  } else {
    console.error('Owl Carousel is not properly loaded.');
  }

  // Form wizard
  const nxtBtn = document.querySelectorAll(".nxt-btn");
  const prevBtn = document.querySelectorAll(".prev-btn");
  const progress = document.getElementById("Progress");
  const formStep = document.querySelectorAll(".form-step");
  const progressStep = document.querySelectorAll(".progress-step");

  let formStepNum = 0;

  nxtBtn.forEach((nxt) => {
    nxt.addEventListener("click", () => {
      formStepNum++;
      updateFormStep();
      updateProgress();
    });
  });

  prevBtn.forEach((prev) => {
    prev.addEventListener("click", () => {
      formStepNum--;
      updateFormStep();
      updateProgress();
    });
  });

  function updateFormStep() {
    formStep.forEach((fstep) => {
      fstep.classList.contains("form-active") &&
        fstep.classList.remove("form-active");
    });

    formStep[formStepNum].classList.add("form-active");
  }

  function updateProgress() {
    progressStep.forEach((pstep, idx) => {
      if (idx <= formStepNum) {
        pstep.classList.add("progress-active");
      } else pstep.classList.remove("progress-active");
    });

    const proStepActive = document.querySelectorAll(".progress-active");
    progress.style.width = ((proStepActive.length - 0.6) / (progressStep.length - 0.6)) * 100 + "%";
  }

  // Function to reapply file input event listeners
  function applyFileInputEventListeners() {
    const fileInputElements = document.querySelectorAll('.ux-js-a-file-upload__input-file');
    const textInputElements = document.querySelectorAll('.ux-js-a-file-upload__input-text');

    fileInputElements.forEach((fileInputElement, index) => {
      fileInputElement.addEventListener('change', (event) => {
        const textInputElement = textInputElements[index];
        const fileInputElementValue = fileInputElement.value;
        const fileName = fileInputElementValue.split('\\').pop().split('/').pop();
        textInputElement.value = fileName;
      });
    });
  }

  // Function to initialize date picker for dynamically added elements
  function initializeDatepicker() {
    if (typeof $.fn.datepicker === 'function') {
      $('.datepicker').datepicker({
        clearBtn: true,
        format: "dd/mm/yyyy"
      });
    } else {
      console.error('jQuery UI Datepicker is not properly loaded.');
    }
  }

  // Remove button functionality
  $(document).on('click', '.removebtn', function () {
    if ($('.duplicate-row').length > 1) {
      $(this).parents('.duplicate-row').remove();
    }
  });

  // Call functions to apply event listeners and initialize date picker
  applyFileInputEventListeners();
  initializeDatepicker();

  // Event listener for the "Add" button
  var addButton = document.getElementById('addButton');
  if (addButton) {
    addButton.addEventListener('click', function () {
      var multiArea = document.querySelector('.duplicate-row:last-child');
      var clone = multiArea.cloneNode(true);

      var inputs = clone.querySelectorAll('input');
      inputs.forEach(function (input) {
        input.value = '';
      });

      multiArea.parentNode.insertBefore(clone, multiArea.nextSibling);

      applyFileInputEventListeners();
      initializeDatepicker();
    });
  } else {
    console.error('Element with ID "addButton" not found.');
  }
});
