document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    const preferredDateInput = document.getElementById('preferred-date');

    // Ensure the selected date is not in the past
    preferredDateInput.addEventListener('input', () => {
      const today = new Date().toISOString().split('T')[0];
      if (preferredDateInput.value < today) {
        preferredDateInput.setCustomValidity("Date cannot be in the past.");
      } else {
        preferredDateInput.setCustomValidity("");
      }
    });

    // On form submission
    form.addEventListener('submit', (e) => {
      const carModel = document.getElementById('car-model').value;

      if (carModel === "--Select Car--") {
        e.preventDefault();
        alert("Please select a car model before submitting the form.");
      }
    });
  });