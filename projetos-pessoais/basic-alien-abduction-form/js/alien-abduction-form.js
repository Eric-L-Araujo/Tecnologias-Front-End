
const form = document.querySelector("form");
const contactInput = document.querySelector("#contact");
const contactInputs = document.querySelectorAll("form #contact-type");

const data = {
  name: "",
  date: "",
  contact: "",
  email: "",
  phone: "",
  other: "",
  description: "",
  term: false
}

form.addEventListener("submit", submit);
contactInput.addEventListener("change", onContactChange);


/**
 * Handles contact type change event.
 * Sets the contact type property of the data object
 * and toggles the visibility of the contact type input fields
 * @param {ChangeEvent} event - change event
 */
function onContactChange(event) {
  data.contact = event.target.value;

  for (const input of contactInputs) {
    if (input.children.namedItem(data.contact)) {
      input.classList.remove("hidden");
    } else {
      input.classList.add("hidden");
    }
  }
}

/**
 * Validates the form data.
 * Checks if the inputs meet the required criteria.
 * Returns true if validation passes, otherwise false.
 */
function validate() {
  // validate inputs here

  if (data.term) {
    console.log("Accepted");
    return true;
  }

  return false;
}

/**
 * Handles form submission by
 * 1. Preventing the default form submission action
 * 2. Iterating over the data object and setting each property
 *    to the corresponding form input value
 * 3. Validating the data with the validate function
 * 4. Saving the data to local storage with the saveData function
 * @param {SubmitEvent} event - the form submission event
 */
function submit(event) {
  const dataKeys = Object.keys(data);
  let valid = false;

  event.preventDefault();

  for (let i = 0; i < dataKeys.length; i++) {
    data[dataKeys[i]] = event.target[dataKeys[i]].value;
  }

  valid = validate();

  if (valid) {
    saveData();
  } else {
    alert("Please fill out all required fields and check the silence term.");
  }
}

function saveData() {
  localStorage.setItem(`abduction-${data.name}`, JSON.stringify(data));
  alert("Data saved successfully!");
}