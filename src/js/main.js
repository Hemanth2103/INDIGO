document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("toggle").addEventListener("click", () => {
      const element = document.getElementById("menu");
      if (element.classList.contains("block")) {
        element.classList.remove("block");
        element.classList.add("hidden");
      } else {
        element.classList.remove("hidden");
        element.classList.add("block");
      }
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("toggleoff").addEventListener("click", () => {
      const element = document.getElementById("menu");
      if (element.classList.contains("block")) {
        element.classList.remove("block");
        element.classList.add("hidden");
      } else {
        element.classList.remove("hidden");
        element.classList.add("block");
      }
    });
  });

  document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("dismiss").addEventListener("click", () => {
      const element = document.getElementById("banner");
      if (element.classList.contains("block")) {
        element.classList.remove("block");
        element.classList.add("hidden");
      } else {
        element.classList.remove("hidden");
        element.classList.add("block");
      }
    });
  });

  const lightSwitches = document.querySelectorAll('.light-switch');
  if (lightSwitches.length > 0) {
    lightSwitches.forEach((lightSwitch, i) => {
      if (localStorage.getItem('dark-mode') === 'true') {
        lightSwitch.checked = true;
      }
      lightSwitch.addEventListener('change', () => {
        const { checked } = lightSwitch;
        lightSwitches.forEach((el, n) => {
          if (n !== i) {
            el.checked = checked;
          }
        });
        if (lightSwitch.checked) {
          document.documentElement.classList.add('dark');
          localStorage.setItem('dark-mode', true);
        } else {
          document.documentElement.classList.remove('dark');
          localStorage.setItem('dark-mode', false);
        }
      });
    });
  }

  if (localStorage.getItem('dark-mode') === 'true' || (!('dark-mode' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.querySelector('html').classList.add('dark');
} else {
    document.querySelector('html').classList.remove('dark');
}

const $prevButton = document.getElementById('data-carousel-prev');
const $nextButton = document.getElementById('data-carousel-next');

$prevButton.addEventListener('click', () => {
    carousel.prev();
});

$nextButton.addEventListener('click', () => {
    carousel.next();
});

function alertbox() {
  prompt("Enter your email address to suscribe");
  alert("Thanks for suscribing!!");
}

