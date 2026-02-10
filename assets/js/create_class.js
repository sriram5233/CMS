document.addEventListener('DOMContentLoaded', ()=>{

    /**
     * Global Variables
     */
    let createAdminButton = document.getElementById('createAdminButton');
    let createAdminForm = document.getElementById('createAdminForm');

    let createAdmin = document.getElementById('createAdmin');
    // let createClass = document.getElementById('createClass');

    let classDetails;

    createAdminButton.addEventListener('click', ()=>{

        classDetails = new FormData(createAdminForm);

        fetch('./modules/create_class_db.php', {
            method: 'POST',
            body: classDetails
        })
        .then(response => response.text())
        .then(data => {
            if(JSON.parse(data)){
                let response = JSON.parse(data);
                if(response.status == 'success'){
                    alertFields(response.status, response.message);
                    window.location.href = '/CMS/dashboard';
                }
                else if(response.status == 'error'){
                    alertFields(response.status, response.message);
                }
                else if(response.message == 'alert'){
                    alertFields(response.status, response.message);
                }
                else{
                    console.log(data);
                    alertFields('error', 'Something went wrong!')
                }
            }
            else{
                console.log(data);
            }
        })
        .catch(error => {
            console.log(error);
        });
    });
});

function alertFields(status, message) {
    alert(message);
}

