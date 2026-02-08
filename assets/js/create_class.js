document.addEventListener('DOMContentLoaded', ()=>{

    /**
     * Global Variables
     */
    let createAdminButton = document.getElementById('createAdminButton');
    let createAdminForm = document.getElementById('createAdminForm');

    let createAdmin = document.getElementById('createAdmin');
    let createClass = document.getElementById('createClass');

    let classDetails;

    createAdminButton.addEventListener('click', ()=>{

        classDetails = new FormData(createAdminForm);

        // const formObject = Object.fromEntries(classDetails.entries());
        // const jsonString = JSON.stringify(formObject);
        // console.log(jsonString);

        fetch('./modules/create_class.php', {
            method: 'POST',
            body: classDetails
        })
        .then(response => response.text())
        .then(data => {
            json_message = JSON.parse(data);
            if(message.status === 'success'){
                alert(json_message.message);
            }
            else {
                alert(json_message.message);
            }
        })
        .catch(error => {
            console.log(error);
        });

        // createClass.classList.remove('d-none');
        // createAdmin.classList.add('d-none');
    });

});