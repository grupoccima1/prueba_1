const days = document.getElementById("days");
const hours = document.getElementById("hours");
const mins = document.getElementById("mins");
const seconds = document.getElementById("seconds");

const lanzamiento = '14 dic 2022 12:00:00';  


function countTimer(){
    const lanzamientoDate = new Date(lanzamiento);
    const currentDate = new Date();
    const totalSeconds = (lanzamientoDate - currentDate) / 1000;
    const daysCalc =  Math.floor(totalSeconds / 3600 / 24);
    const hoursCalc =  Math.floor(totalSeconds / 3600) % 24;
    const minsCalc =  Math.floor(totalSeconds / 60) % 60;
    const secondsCalc =  Math.floor(totalSeconds % 60);

    days.innerHTML = daysCalc;
    hours.innerHTML = hoursCalc;
    mins.innerHTML = minsCalc;
    seconds.innerHTML = secondsCalc;
}

countTimer();
setInterval (countTimer, 1000);