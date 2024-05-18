var status_error = "ERROR";
var status_done = "DONE";

if(document.getElementById('btn_feedback')){
    btn_feedback.onclick = SendFeedback;
}

function SendFeedback(){
    if(inp_name.value.trim() == '' || inp_email.value.trim() == '' || inp_phone.value.trim() == '' || inp_message.value.trim() == ''){
        alert('Заполните все поля!!');
        return;
    }

    var mess_body = {
        'feedback':'merzhankuralay@gmail.com',
        'fio_user':inp_name.value.trim(),
        'email_user':inp_email.value.trim(),
        'phone_user':inp_phone.value.trim(),
        'message_user':inp_message.value.trim()
    };
    customFetch(mess_body, (data)=>{
        p_success.innerHTML='';
        p_error.innerHTML='';
        console.log(data);
        if(data.status == status_done){
            p_success.innerHTML = data.mess;
        }else{
            p_error.innerHTML = data.mess;
        }
    });
}

//Кастомный фетч для скрашения строк кода
function customFetch(mess_body, callback, url = '../php/api.php', load_mess="Подождите! Идет отправка..."){
    p_error.innerHTML = load_mess;
    fetch(url, {
      method: "post",
      headers: new Headers({
       'Content-Type': 'application/x-www-form-urlencoded',
      }),
      body: new URLSearchParams(mess_body)
    })
    .then((response) => response.json())
    .then((data)=>callback(data))
    .catch(function (error) {
      p_error.innerHTML = "Ошибка отправки данных на сервер! " + error;
      console.log(error);
    });
}