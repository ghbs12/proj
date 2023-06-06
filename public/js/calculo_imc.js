function calculateBMI() {
    var weight = document.getElementById("weight").value;
    var height = document.getElementById("height").value;
    
    if (weight === "" || height === "") {
      document.getElementById("result").innerHTML = "Preencha todos os campos.";
      return;
    }
    
    height = height / 100; // Convert height to meters
    var bmi = weight / (height * height);
    bmi = bmi.toFixed(2); // Round to 2 decimal places
    
    var category;
    if (bmi < 18.5) {
      category = "Abaixo do peso";
    } else if (bmi < 25) {
      category = "Peso normal";
    } else if (bmi < 30) {
      category = "Sobrepeso";
    } else {
      category = "sobrepeso";
    }
    
    var resultText = "Seu IMC é: " + bmi + "<br>" + "Categoria: " + category;
    document.getElementById("result").innerHTML = resultText;
}