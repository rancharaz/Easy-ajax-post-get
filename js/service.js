function postData(){

    /* post data script */
    $.ajax({
        type: "post",
       url: "includes/curlPost.php",
        data: {
            name : document.querySelector("#username").value,
            phone : document.querySelector("#phone").value,
            email : document.querySelector("#email").value
        },
        caches:false,
        success: function(data){
            
            let msg = document.querySelector(".msg-resp");
            setTimeout(function() {
                msg.innerHTML = data ;
            }, 1000)
           
            /* console.log(data) */
        },
        error: function(xhr,status,error){
            console.log(xhr)
        }
    })
}

/* get data script */
function getData(){

    let xhr = new XMLHttpRequest();

    xhr.open("GET", "./includes/db.get.php", true);
    let x = document.querySelector(".testing");

    xhr.onload = function(){
        if (xhr.status == 200) {
               x.innerHTML = this.responseText + "<br>";
        }
    }

    xhr.send()
}