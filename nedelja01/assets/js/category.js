
// var currentChosen = 1;
// var categoryElements = [];
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
     categoryElements = [];
     
     //ocisti tekst
     elm.innerText ='';
     for (let d of data['categories'])
     {
        var a = document.createElement("a");
        categoryElements.push(a);
        var category_id = d['category_id'];
        a.setAttribute('href',"http://localhost/KatalogLaptopova/KatalogLaptopova/nedelja01/laptop/category.category_id/"+category_id);
        a.innerText = d['name'];
        // a.onclick = function(a)
        // {
        //     //alert(categoryElements);
        //     for (let e of categoryElements)
        //     {
        //         //alert(e);
        //         e.style.color = 'black';
        //     //    e.setAttribute('background-color','black');
        //     //     e.setAttribute('color','red');
                
        //     }
        //     a.style.color = 'red';
        //     alert(a);
        // }
        elm.appendChild(a);
     }
}
