/* form validation-start */

 function validateForm() {
    
    var isSend;
     let userName = document.querySelector('#userName').value;
     let Email = document.querySelector('#Email').value;
     let phoneNumber = document.querySelector('#phoneNumber').value;
     let Password = document.querySelector('#passWord').value;
     let fileInput = document.querySelector('#Profile').files;
     const reUser = /^[a-z0-9_-]{3,}$/;
     const reEmail = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
     const rePhoneNumber = /((0?9)|(\+?989))\d{2}\W?\d{3}\W?\d{4}/g;
     const rePass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{6}$/
     if (!userName) {
         document.querySelector('#userName').classList.add('is-invalid');
         isSend = false
     } else {
         document.querySelector('#userName').classList.remove('is-invalid');
         isSend = true;
     }
     if (reUser.test(userName)) {
         document.getElementById('userError').innerHTML = "";
         document.querySelector('#userName').style = "border: 1px solid green;";

     } else {
         document.getElementById('userError').innerHTML = "حداقل 3 کاراکتر";
         document.querySelector('#userName').style = "border: 1px solid red;";
         isSend = false;
     }



     if (!Email) {
         document.querySelector('#Email').classList.add('is-invalid');
         isSend = false
     } else {
         document.querySelector('#Email').classList.remove('is-invalid');
         
     }
     if (reEmail.test(Email)) {
         document.getElementById('emailError').innerHTML = "";
         document.querySelector('#Email').style = "border: 1px solid green;";

     } else {
         document.getElementById('emailError').innerHTML = "ایمیل نادرست است";
         document.querySelector('#Email').style = "border: 1px solid red;";
         isSend = false;
     }




     if (!phoneNumber) {
         document.querySelector('#phoneNumber').classList.add('is-invalid');
         isSend = false
     } else {
         document.querySelector('#phoneNumber').classList.remove('is-invalid');
         
     }
     if (rePhoneNumber.test(phoneNumber)) {
         document.getElementById('phoneError').innerHTML = "";
         document.querySelector('#phoneNumber').style = "border: 1px solid green;";

     } else {
         document.getElementById('phoneError').innerHTML = "شماره نادرست است";
         document.querySelector('#phoneNumber').style = "border: 1px solid red;";
         isSend = false;
     }



     if (!Password) {
         document.querySelector('#passWord').classList.add('is-invalid');
         isSend = false
     } else {
         document.querySelector('#passWord').classList.remove('is-invalid');
         
     }
     if (rePass.test(Password)) {
         document.getElementById('passwordError').innerHTML = "";
         document.querySelector('#passWord').style = "border: 1px solid green;";

     } else {
         document.getElementById('passwordError').innerHTML = "پسورد شامل 6 کاراکتر، حروف بزرگ و کوچک، عدد و کاراکترهای خاص است";
         document.querySelector('#passWord').style = "border: 1px solid red;";
         isSend = false;
     }


     if (fileInput.length==0) {
        document.querySelector('#Profile').classList.add('is-invalid');
         isSend = false;
    } else {
        document.querySelector('#Profile').classList.remove('is-invalid');
         
    }
     
    

     

    

    
    
     if (isSend) {
         document.querySelector('#reg-btn').classList.remove('disabled');
     } else {
         document.querySelector('#reg-btn').classList.add('disabled',true);

     }
     return isSend;
};


/* form validation-end */

/* reg-date start */
if (document.querySelector('.reg-date-user')) {
    let listDate=document.querySelectorAll('.reg-date-user');
    listDate.forEach(el => {
       el.innerText = moment(el.innerText, 'YYYY/MM/DD').locale('fa').format('YYYY/MM/DD');
    });
}
if (document.querySelector('.reg-date-post')) {
    let el=document.querySelector('.reg-date-post');
    el.innerText=moment(el.innerText, 'YYYY/MM/DD').locale('fa').format('YYYY/MM/DD');
    
    
}
/* reg-date end */

/* removeItemUser start */
function removeItemUser(idUser,ev){
   if(confirm('از حذف کاربر مطمئن هستید؟')){
    $.ajax({
        url:"api/delete-user-api.php",
        type:"POST",
        data:{id:idUser},
        success:function(res){
           let response=JSON.parse(res);
           if(response.status == 200){
            ev.target.parentElement.parentElement.remove();
           }
        }
    })
   }
}

/* removeItemUser end */


function previewImage(){
    let img=document.querySelector('#imgInput').files[0];
    if(img){
        document.querySelector('#prev-img').src=URL.createObjectURL(img);
    }
}

/* editUser start */
function editUser(idUser){
    let dataFile=new FormData();
    dataFile.append('id',idUser);
    dataFile.append('username',document.querySelector('#userName').value);
    dataFile.append('email',document.querySelector('#Email').value);
    dataFile.append('phoneNumber',document.querySelector('#phoneNumber').value);
    dataFile.append('image_profile',document.querySelector('#imgInput').files[0] ? document.querySelector('#imgInput').files[0] : '');
    
    $.ajax({
        url:"api/edit-user-api.php",
        type:"POST",
        data:dataFile,
        processData:false,
        contentType:false,
        success:function(res){
            let response = JSON.parse(res);
            alert(response.result);
            if(response.status==200){
                window.location.href='profile.php';
            }
            
          
        }
    })

}
/* editUser end */





