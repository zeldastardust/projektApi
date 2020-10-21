"use strict"

//variabler
let experiencesEl = document.getElementById("experiences");

//eventlistener
window.addEventListener("load", getExperiences);

//functions
function getExperiences(){
    experiencesEl.innerHTML='';

    fetch('http://localhost/projekt%20WUIII/apiProjekt/api/experiences.php')
    .then(response => response.json())
    .then(data =>{
        data.forEach(experiences=>{
            console.log(experiences)
        })
    })
}