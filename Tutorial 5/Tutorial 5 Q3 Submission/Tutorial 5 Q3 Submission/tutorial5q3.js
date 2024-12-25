function change_background(){
    var currentDate = new Date();
    var currentHour = currentDate.getHours();
    console.log(currentHour);

    let greeting = document.getElementById("greeting");
    let background = document.getElementById("background");

    if(currentHour >= 6 && currentHour < 12){
        background.style.backgroundImage = "url('morning.jpg')";
        greeting.innerHTML="Good Morning!";
    } 
    else if(currentHour >= 12 && currentHour < 17){
        background.style.backgroundImage = "url('afternoon.jpg')";
        greeting.innerHTML="Good Afternoon!";
    } 
    else if(currentHour >= 17 && currentHour < 22){
        background.style.backgroundImage = "url('evening.jpg')";
        greeting.innerHTML="Good Evening!";
    } 
    else if(currentHour >= 22 && currentHour < 6){
        document.body.style.backgroundImage = "url('night.jpg')";
        greeting.innerHTML="Good Night!";
    } 
}

change_background()





