function validateForm() {
    let isValid = true;

    let height = document.getElementById("height").value;
    let age = document.getElementById("age").value;
    let liabilityYes = document.getElementById("liabilityYes").checked;
    let liabilityNo = document.getElementById("liabilityNo").checked;

    if (height <= 120) {
        document.getElementById("heightError").innerText = "La altura debe ser superior a 120 cm.";
        isValid = false;
    } else {
        document.getElementById("heightError").innerText = "";
    }

    if (age <= 16 || age >= 80) {
        document.getElementById("ageError").innerText = "La edad debe ser mayor a 16 años y menor a 80 años.";
        isValid = false;
    } else {
        document.getElementById("ageError").innerText = "";
    }

    if (!liabilityYes && !liabilityNo) {
        document.getElementById("liabilityError").innerText = "Debe elegir una opción para la responsabilidad.";
        isValid = false;
    } else {
        document.getElementById("liabilityError").innerText = "";
    }

    return isValid;
}
