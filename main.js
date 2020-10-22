"use strict";

//variabler
let experiencesEl = document.getElementById("experiences");
let addExpbtn = document.getElementById("addExp");
let placeInput= document.getElementById("place");
let nameInput= document.getElementById("name");
let categoryInput= document.getElementById("category");
let starteduInput= document.getElementById("startedu");
let stopeduInput= document.getElementById("stopedu");


//eventlistener
window.addEventListener("load", getExperiences);
addExpbtn.addEventListener("click", addExp);

//functions
function getExperiences(){
    experiencesEl.innerHTML='';
    
    fetch('http://localhost/projekt%20WUIII/apiProjekt/api/experiences.php')
    .then(response => response.json())
    .then(data => {
        data.records.forEach(experiences => {
            experiencesEl.innerHTML+=
            `<div class= "experiences"><tr>
        Plats:${experiences.place}
        Namn:${experiences.name}
        Kategori:${experiences.category}
        Start:${experiences.startedu}
        Stop:${experiences.stopedu}
        <button class='btn btn-danger delete-product-button'id="${experiences.id}" onClick="deleteExperience(${experiences.id})">Radera</button>
        <button class='btn btn-info m-r-10px update-product-button' id="${experiences.id}" onClick="updateExperience(${experiences.id})">Uppdatera</button>
        </tr></div>´;
        </table>`;
 
       
        })
    })
}

function deleteExperience(id){
    fetch(`http://localhost/projekt%20WUIII/apiProjekt/api/experiences.php?id=`+ id,{
        method:'DELETE',
    })
    .then(response =>response.json())
    .then(data => {
        getExperiences();
    })
    .catch(error=>{
        console.log("Error:", error);
    })
}

function addExp(){
    let place = placeInput.value;
    let name = nameInput.value;
    let category= categoryInput.value;
    let startedu= starteduInput.value;
    let stopedu= stopeduInput.value;

    let exp = {'place':place, 'name':name, 'category':category, 'startedu':startedu, 'stopedu':stopedu};

    fetch('http://localhost/projekt%20WUIII/apiProjekt/api/experiences.php',{
        method:"POST",
        body: JSON.stringify(exp),
    })
    .then(response =>response.json())
    .then (data =>{
        getExperiences();
    })
    .catch(error => {
        console.log('Error:', error);
    })

}