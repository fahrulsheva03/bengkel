function redirectToListingPage() {
    const input = document.getElementById("search").value.trim().toLowerCase();
    const featuredBengkels = [
      "Autotech Service Center",
      "Velocity Motors Garage",
      "WheelMaster Workshop",
      "Precision Auto Care Hub",
    ];
  
    const foundBengkel = featuredBengkels.find((bengkel) =>
      bengkel.toLowerCase() === input
    );
  
    if (foundBengkel !== undefined) {
      const encodedInput = encodeURIComponent(foundBengkel);
      window.location.href = `listing.php?caviarSearch=${encodedInput}`;
    } else {
      alert("Workshop not found or invalid input!");
    }
  }
  
  document.querySelector("form").addEventListener("submit", function (event) {
    event.preventDefault(); 
    redirectToListingPage(); 
  });