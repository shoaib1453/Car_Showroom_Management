 // Intersection Observer for smooth reveal
 const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.5 });

  // Target all elements with the 'reveal' class
  document.querySelectorAll('.reveal').forEach((element) => {
    observer.observe(element);
  });