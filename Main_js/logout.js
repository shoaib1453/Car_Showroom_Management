  function confirmLogout(event) {
      event.preventDefault(); // Prevent the default action of the link
      let confirmAction = confirm("Are you sure you want to log out?");
      if (confirmAction) {
          window.location.href = "../php/logout.php"; // Redirect only if confirmed
      }
  }
