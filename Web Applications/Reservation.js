// Get all the seat elements
const seats = document.querySelectorAll('.seat');

// Initialize an array to keep track of the booked seats
const bookedSeats = [];

// Function to handle seat selection
function selectSeat() {
  // Toggle the 'selected' class on the clicked seat
  this.classList.toggle('selected');

  // Check if the seat is already booked
  if (this.classList.contains('booked')) {
    alert('This seat is already booked!');
    return;
  }

  // Get the seat number
  const seatNumber = parseInt(this.innerText);

  // Check if the seat is already selected
  if (bookedSeats.includes(seatNumber)) {
    // Seat was previously selected, so remove it from the array
    const index = bookedSeats.indexOf(seatNumber);
    bookedSeats.splice(index, 1);
  } else {
    // Seat is newly selected, so add it to the array
    bookedSeats.push(seatNumber);
  }

  // Enable or disable the payment links based on seat selection
  const onlinePaymentLink = document.getElementById('onlinePayment');
  const offlinePaymentLink = document.getElementById('offlinePayment');

  if (bookedSeats.length > 0) {
    onlinePaymentLink.href = 'online.php';
    offlinePaymentLink.href = 'offline.php';
  } else {
    onlinePaymentLink.removeAttribute('href');
    offlinePaymentLink.removeAttribute('href');
  }
}

// Add event listeners to each seat
seats.forEach(seat => {
  seat.addEventListener('click', selectSeat);
});
