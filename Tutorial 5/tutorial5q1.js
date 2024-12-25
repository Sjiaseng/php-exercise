function toCelcius(){
    let F = document.getElementById("fah").value;
    let result = (F-32)*5/9;
    
    let finalResult = document.getElementById("result");
    finalResult.innerHTML = result + " Fahrenheit";
}