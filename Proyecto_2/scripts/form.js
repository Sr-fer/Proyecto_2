    let url = "http://localhost/data/API.php"

    const api = new XMLHttpRequest()
    api.open('GET', url, true);
    api.send();

    api.onreadystatechange = function(){
        if(this.status == 200 && this.readyState == 4){

            let datos = JSON.parse(this.response)
            boton.disabled = true
            

            email.addEventListener("keyup", ()=>{
                for(let i of datos){
                if(email.value == i.email) {
                    registro.innerHTML = `<li>Este Email está ocupado</li>`
                    boton.disabled = true
                }else if(email.value == 0){
                    registro.innerHTML = ``
                    boton.disabled = true
                }else if(email.value != i.email){
                    registro.innerHTML = `<li>Este Email está disponible</li>`
                    boton.disabled = false
                }
            }
            })
        }
    }
    

