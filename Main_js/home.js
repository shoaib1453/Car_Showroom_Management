// Using IntersectionObserver to trigger the 'visible' class when sections enter the viewport
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.5 }); // Trigger when 50% of the element is visible

  // Target all elements with the 'reveal' class
  document.querySelectorAll('.reveal').forEach((element) => {
    observer.observe(element);
  });