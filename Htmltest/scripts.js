// Function to handle form submit
document.querySelector("#survey-form").addEventListener("submit", function(event) {
    event.preventDefault();
  
    // Get form values
    var question1 = document.  
    var question2 = document.querySelector("#question-2").value;
    var question3 = document.querySelector("#question-3").value;
  
    // Calculate overall satisfaction score
    var overallSatisfaction = (question1 + question2 + question3) / 3;
  
    // Display results
    document.querySelector("#overall-satisfaction").innerHTML = "Tu nivel de satisfacción general es: " + overallSatisfaction;
    document.querySelector("#connection-with-loved-ones").innerHTML = "Tu nivel de conexión con seres queridos y amigos es: " + question2;
    document.querySelector("#fulfillment-with-activities").innerHTML = "Tu nivel de realización y entusiasmo con tus actividades es: " + question3;
  
    // Provide personalized recommendations
    if (overallSatisfaction < 2) {
      document.querySelector("#recommendations").innerHTML = "Te recomendamos buscar actividades que te hagan sentir más satisfecho y conectado con los demás.";
    } else if (overallSatisfaction < 3) {
      document.querySelector("#recommendations").innerHTML = "Te recomendamos trabajar en mejorar tu conexión con seres queridos y amigos y en encontrar más actividades que te hagan sentir realizado.";
    } else if (overallSatisfaction < 4) {
      document.querySelector("#recommendations").innerHTML = "Te recomendamos seguir fortaleciendo tus relaciones y encontrar más actividades que te hagan sentir realizado.";
    } else {
      document.querySelector("#recommendations").innerHTML = "¡Felicidades! Parece que tienes una buena satisfacción general, conexión con seres queridos y realización con tus actividades. Sigue haciendo lo que te hace feliz.";
    }
  });
  