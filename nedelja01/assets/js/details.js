function getStorageDetails(id) {

    //vuce podatke sa api DetailsController, prikazuje 

    fetch('/KatalogLaptopova/KatalogLaptopova/nedelja01/api/details/' + id, {
        credentials: "include"
    })
    .then(response => response.json())
    .then(json => {
        displayDetails(json,id);
    });
}

function displayDetails(data,id)
{
    var elm = document.getElementById("Details"+id);
    elm.innerText ='';
    //alert(data);
    var currentDiskNumber = 0;
    for (let d of data['storagies'])
    {
        currentDiskNumber++;
        var disk = document.createElement("h1");
        disk.innerText = 'Disk: '+ currentDiskNumber;
        elm.appendChild(disk);


        //alert(d);
        var type = document.createElement("p");
        type.innerText = 'type: '+ d['type'];
        elm.appendChild(type);
        var capacity = document.createElement("p");
        capacity.innerText = 'capacity: '+ d['capacity'];
        elm.appendChild(capacity);
 
    
    }
    var currentPortNumber =0;
    for (let d of data['ports'])
    {
        currentPortNumber++;
        var port = document.createElement("h1");
        port.innerText = 'Port: '+ currentPortNumber;
        elm.appendChild(port);


        //alert(d);
        var type = document.createElement("p");
        type.innerText = 'type: '+ d['type'];
        elm.appendChild(type);
 
    
    }


    // var p = document.createElement("p");
    // p.innerText="AAAAAAAA";
    // elm.appendChild(p);
    
}