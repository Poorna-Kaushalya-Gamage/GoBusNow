// Retrieve the dropdown and text box elements
var dropdownFrom = document.getElementById("dropdown_from");
var dropdownTo = document.getElementById("dropdown_to");
var date1Input = document.getElementById("date1");
var date2Input = document.getElementById("date2");
var numberInput = document.getElementById("number-input");

// Add an event listener to the dropdowns
dropdownFrom.addEventListener("change", updateTextFields);
dropdownTo.addEventListener("change", updateTextFields);

// Function to update the text fields
function updateTextFields() {
  // Get the selected values from the dropdowns
  var selectedFrom = dropdownFrom.value;
  var selectedTo = dropdownTo.value;

  // Make an AJAX request to retrieve the data based on the selected values
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);

        // Update the text fields with the retrieved data
        date1Input.value = data.date1;
        date2Input.value = data.date2;
        numberInput.value = data.number;
      } else {
        // Handle error cases
      }
    }
  };

  // Make sure both dropdowns have valid values selected
  if (selectedFrom && selectedTo) {
    // Send the AJAX request to the server
    xhr.open("GET", "getData.php?from=" + selectedFrom + "&to=" + selectedTo, true);
    xhr.send();
  }
}
