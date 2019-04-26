function getCategories() {

    //vuce podatke sa api DetailsController, prikazuje 

    
    fetch('/KatalogLaptopova/KatalogLaptopova/nedelja01/api/categories/', {
        credentials: "include"
    })
    .then(response => response.json())
    .then(json => {
        displayCategories(json);
    });
}

function displayCategories(data)
{

    
     var elm = document.getElementById("category");

     
     //ocisti tekst
     elm.innerText ='';
     for (let d of data['categories'])
     {
        var a = document.createElement("a");
        a.setAttribute('href','aaa');
        a.innerText = d['name'];
        elm.appendChild(a);
     }
}