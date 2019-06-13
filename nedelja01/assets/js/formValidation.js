// function validateFormLaptop() {
//     document.getElementById('alert-holder').innerText = '';

//     let status = true;

//     // Primer za prva tri polja

//     let forename = document.getElementById('forename');
//     forename.classList.remove('is-invalid');
//     if (forename.value.length < 2 || forename.value.length > 60) {
//         //showAlert('Nije ispravno ime. Mora da bude od 2 do 60 karaktera duzine.');
//         forename.classList.add('is-invalid');
//         status = false;
//     }

//     let surname = document.getElementById('surname');
//     surname.classList.remove('is-invalid');
//     if (surname.value.length < 2 || surname.value.length > 60) {
//         //showAlert('Nije ispravno prezime. Mora da bude od 2 do 60 karaktera duzine.');
//         surname.classList.add('is-invalid');
//         status = false;
//     }

//     let phone = document.getElementById('phone');
//     phone.classList.remove('is-invalid');
//     if (!phone.value.match(/^\+[0-9]{6,24}$/)) {
//         //showAlert('Nije ispravan broj telefona. Mora da pocinje sa + iza kojeg sledi od 6 do 24 cifara.');
//         phone.classList.add('is-invalid');
//         status = false;
//     }

//     return status;
// }

function validateStorageForm()
{
    // id="storage_capacity" value="8" min="0" max="2000" step="100"
    //HDD SSD
    
    
    let status = true;
    
    let storage_type = document.getElementById('storage_type');
    storage_type.classList.remove('is-invalid');
    //alert(storage_type.value);
    if( !(storage_type.value =="HDD" || storage_type.value =="SSD") )
    {
        
        storage_type.classList.add('is-invalid')
        status = false;
    }
    let storage_capacity = document.getElementById('storage_capacity');
    storage_capacity.classList.remove('is-invalid');
    if( isNaN(storage_capacity.value) ||  storage_capacity.value < 100 || storage_capacity.value >2000  )
    {
        storage_capacity.classList.add('is-invalid')
        status = false;
    }


    //alert(status);
    return status;

}

function validatePortForm()
{
    let status = true;
    let port_type = document.getElementById('port_type');
    port_type.classList.remove('is-invalid');
    //alert(storage_type.value);
    if( !(port_type.value =="HDMI" || port_type.value =="VGA" || port_type.value =="DVI" || port_type.value =="Video Port" || port_type.value =="USB C") )
    {
        
        port_type.classList.add('is-invalid')
        status = false;
    }

    return status;

}

function validateGPUForm() {

    let status = true;

    let model = document.getElementById('model');
    model.classList.remove('is-invalid')
    if (!model.value.match(/^[A-Za-z][A-Za-z0-9 ]{0,244}$/)) {
        //showAlert('Nije ispravan broj telefona. Mora da pocinje sa + iza kojeg sledi od 6 do 24 cifara.');
        model.classList.add('is-invalid');
        status = false;
    }

    let gpu_type = document.getElementById('gpu_type');
    gpu_type.classList.remove('is-invalid');
    //alert(storage_type.value);
    if( !(gpu_type.value =="integrated" || gpu_type.value =="external") )
    {
        
        gpu_type.classList.add('is-invalid')
        status = false;
    }

    let video_memory = document.getElementById('video_memory');
    video_memory.classList.remove('is-invalid');
    if( isNaN(video_memory.value) ||  video_memory.value < 1 || video_memory.value >64  )
    {
      
        video_memory.classList.add('is-invalid')
        status = false;
    }
    



    return status;
}

function validateCPUForm()
{
    let status = true;


    let manufacturer = document.getElementById('manufacturer');
    manufacturer.classList.remove('is-invalid')
    if (!manufacturer.value.match(/^[A-Za-z][A-Za-z0-9 ]{0,244}$/)) {
        manufacturer.classList.add('is-invalid');
        status = false;
    }

    
    let model = document.getElementById('model');
    model.classList.remove('is-invalid')
    if (!model.value.match(/^[[A-Za-z][A-Za-z0-9 ]{0,244}$/)) {
        
        model.classList.add('is-invalid');
        status = false;
    }



    let frequency = document.getElementById('frequency');
    frequency.classList.remove('is-invalid');
    if( isNaN(frequency.value) ||  frequency.value < 1 || frequency.value >10  )
    {
      
        frequency.classList.add('is-invalid')
        status = false;
    }

    let core_count = document.getElementById('core_count');
    core_count.classList.remove('is-invalid');
    if( isNaN(core_count.value) ||  core_count.value < 1 || core_count.value >64  )
    {
      
        core_count.classList.add('is-invalid')
        status = false;
    }


    return status;
};
function validateDisplayForm()
{
    //alert("AAA");
    let status = true;

    let screen_size = document.getElementById('screen_size');
    screen_size.classList.remove('is-invalid');
    //alert(isNaN(screen_size.value));
    if( isNaN(screen_size.value) ||  screen_size.value < 1 || screen_size.value >64  )
    {
      
        screen_size.classList.add('is-invalid')
        status = false;
    }


    let resolution = document.getElementById('resolution');
    resolution.classList.remove('is-invalid')
    if (!resolution.value.match(/^[1-9][0-9]{1,3}x[1-9][0-9]{1,3}$/)) {
        
        resolution.classList.add('is-invalid');
        status = false;
    }



    let is_touchscreen = document.getElementById('is_touchscreen');
    is_touchscreen.classList.remove('is-invalid');
    if( isNaN(is_touchscreen.value) ||  is_touchscreen.value < 0 || is_touchscreen.value >1  )
    {
      
        is_touchscreen.classList.add('is-invalid')
        status = false;
    }

    return status;
}

function validateLaptopForm()
{
    let status = true;

    let name = document.getElementById('name');
    name.classList.remove('is-invalid')
    if (!name.value.match(/^[A-Za-z][A-Za-z0-9 ]{0,244}$/)) {
        
        name.classList.add('is-invalid');
        status = false;
    }



    let price = document.getElementById('price');
    price.classList.remove('is-invalid');
    if( isNaN(price.value) ||  price.value < 1000   )
    {
      
        price.classList.add('is-invalid')
        status = false;
    }


    // let image_path = document.getElementById('image_path');
    // image_path.classList.remove('is-invalid')
    // if (!image_path.value.match(/^[A-Za-z][A-Za-z0-9_\.]+$/)) {
        
    //     image_path.classList.add('is-invalid');
    //     status = false;
    // }

    let operating_system = document.getElementById('operating_system');
    operating_system.classList.remove('is-invalid')
    if (!operating_system.value.match(/^[A-Za-z][A-Za-z0-9 ]{0,244}$/)) {
        
        operating_system.classList.add('is-invalid');
        status = false;
    }


    let keyboard_layout = document.getElementById('keyboard_layout');
    keyboard_layout.classList.remove('is-invalid');
    //alert(storage_type.value);
    if( !(keyboard_layout.value =="US" || keyboard_layout.value =="UK" || keyboard_layout.value =="YU"))
    {
        
        keyboard_layout.classList.add('is-invalid')
        status = false;
    }


    let is_numpad = document.getElementById('is_numpad');
    is_numpad.classList.remove('is-invalid');
    if( isNaN(is_numpad.value) ||  is_numpad.value < 0 || is_numpad.value >1  )
    {
      
        is_numpad.classList.add('is-invalid')
        status = false;
    }


    let gpu_id = document.getElementById('gpu_id');
    gpu_id.classList.remove('is-invalid');
    if( isNaN(gpu_id.value) ||  gpu_id.value < 0  )
    {
      
        gpu_id.classList.add('is-invalid')
        status = false;
    }


    let display_id = document.getElementById('display_id');
    display_id.classList.remove('is-invalid');
    if( isNaN(display_id.value) ||  display_id.value < 0  )
    {
      
        display_id.classList.add('is-invalid')
        status = false;
    }


    let category_id = document.getElementById('category_id');
    category_id.classList.remove('is-invalid');
    if( isNaN(category_id.value) ||  category_id.value < 0  )
    {
      
        category_id.classList.add('is-invalid')
        status = false;
    }

    let cpu_id = document.getElementById('cpu_id');
    cpu_id.classList.remove('is-invalid');
    if( isNaN(cpu_id.value) ||  cpu_id.value < 0  )
    {
      
        cpu_id.classList.add('is-invalid')
        status = false;
    }

    let ram_capacity = document.getElementById('ram_capacity');
    ram_capacity.classList.remove('is-invalid');
    if( isNaN(ram_capacity.value) ||  ram_capacity.value < 1 || ram_capacity.value > 64  )
    {
      
        ram_capacity.classList.add('is-invalid')
        status = false;
    }

    let ram_type = document.getElementById('ram_type');
    ram_type.classList.remove('is-invalid');
    //alert(storage_type.value);
    if( !(ram_type.value =="DDR2" || ram_type.value =="DDR3" || ram_type.value =="DDR4"))
    {
        
        ram_type.classList.add('is-invalid')
        status = false;
    }

    let manufacturer = document.getElementById('manufacturer');
    manufacturer.classList.remove('is-invalid')
    if (!manufacturer.value.match(/^[A-Za-z][A-Za-z0-9 ]{0,244}$/)) {
        
        manufacturer.classList.add('is-invalid');
        status = false;
    }

    return status;
}
function validateSearchFilterForm()
{
    let status = true;


    let price_min = document.getElementById('price_min');
    price_min.classList.remove('is-invalid');
    if(price_min.value!="")
    if( isNaN(price_min.value) ||  price_min.value < 1000   )
    {
      
        price_min.classList.add('is-invalid')
        status = false;
    }

    let price_max = document.getElementById('price_max');
    price_max.classList.remove('is-invalid');
    if(price_max.value!="")
    if( isNaN(price_max.value) ||  price_max.value < 1000   )
    {
      
        price_max.classList.add('is-invalid')
        status = false;
    }

    let ram_min = document.getElementById('ram_min');
    ram_min.classList.remove('is-invalid');
    if(ram_min.value!="")
    if( isNaN(ram_min.value) ||  ram_min.value < 1 ||  ram_min.value > 64   )
    {
      
        ram_min.classList.add('is-invalid')
        status = false;
    }

    let ram_max = document.getElementById('ram_max');
    ram_max.classList.remove('is-invalid');
    if(ram_max.value!="")
    if( isNaN(ram_max.value) ||  ram_max.value < 1 ||  ram_max.value > 64   )
    {
      
        ram_max.classList.add('is-invalid')
        status = false;
    }


    let cpu_speed_min = document.getElementById('cpu_speed_min');
    cpu_speed_min.classList.remove('is-invalid');
    if(cpu_speed_min.value!="")
    if( isNaN(cpu_speed_min.value) ||  cpu_speed_min.value < 1 ||  cpu_speed_min.value > 10   )
    {
      
        cpu_speed_min.classList.add('is-invalid')
        status = false;
    }

    let cpu_speed_max = document.getElementById('cpu_speed_max');
    cpu_speed_max.classList.remove('is-invalid');
    if(cpu_speed_max.value!="")
    if( isNaN(cpu_speed_max.value) ||  cpu_speed_max.value < 1 ||  cpu_speed_max.value > 10   )
    {
      
        cpu_speed_max.classList.add('is-invalid')
        status = false;
    }


    let core_min = document.getElementById('core_min');
    core_min.classList.remove('is-invalid');
    if(core_min.value!="")
    if( isNaN(core_min.value) ||  core_min.value < 1 ||  core_min.value > 64   )
    {
      
        core_min.classList.add('is-invalid')
        status = false;
    }

    let core_max = document.getElementById('core_max');
    core_max.classList.remove('is-invalid');
    if(core_max.value!="")
    if( isNaN(core_max.value) ||  core_max.value < 1 ||  core_max.value > 64   )
    {
      
        core_max.classList.add('is-invalid')
        status = false;
    }

    let screen_size_min = document.getElementById('screen_size_min');
    screen_size_min.classList.remove('is-invalid');
    if(screen_size_min.value!="")
    if( isNaN(screen_size_min.value) ||  screen_size_min.value < 1 ||  screen_size_min.value > 200   )
    {
      
        screen_size_min.classList.add('is-invalid')
        status = false;
    }


    let screen_size_max = document.getElementById('screen_size_max');
    screen_size_max.classList.remove('is-invalid');
    if(screen_size_max.value!="")
    if( isNaN(screen_size_max.value) ||  screen_size_max.value < 1 ||  screen_size_max.value > 200   )
    {
      
        screen_size_max.classList.add('is-invalid')
        status = false;
    }

    return status;
}