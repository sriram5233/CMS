let teacherSubmitButton = document.getElementById('teacherSubmitButton');
let studentSubmitButton = document.getElementById('studentSubmitButton');
let createClassButton = document.getElementById('createClassButton');

let createClassPage = document.getElementById('createClassPage');
let loginPage = document.getElementById('loginPage');

let cmsTeacherTab = document.getElementById('cmsTeacherTab');
let cmsStudentTab = document.getElementById('cmsStudentTab');
let cmsClassCreateTab = document.getElementById('cmsClassCreateTab');
let cmsTeacherForm = document.getElementById('cmsTeacherForm');
let cmsStudentForm = document.getElementById('cmsStudentForm');
let cmsClassCreateForm = document.getElementById('cmsClassCreateForm');

document.addEventListener('DOMContentLoaded', ()=>{

    /**
     * Eventlistening section fot tabs opening and closing
     */

    cmsTeacherTab.addEventListener('click', ()=>{
        cmsTeacherForm.classList.remove('d-none');
        cmsStudentForm.classList.add('d-none');
        cmsClassCreateForm.classList.add('d-none');
    });

    cmsStudentTab.addEventListener('click', ()=>{
        cmsTeacherForm.classList.add('d-none');
        cmsStudentForm.classList.remove('d-none');
        cmsClassCreateForm.classList.add('d-none');
    });

    cmsClassCreateTab.addEventListener('click', ()=>{
        cmsTeacherForm.classList.add('d-none');
        cmsStudentForm.classList.add('d-none');
        cmsClassCreateForm.classList.remove('d-none');
    });

    /**
     * Event listening to the submit buttons
     */
    teacherSubmitButton.addEventListener('click', ()=>{
        console.log('Teacher Submitted')
    });

    studentSubmitButton.addEventListener('click', ()=>{
        console.log('Student Submitted');
    });

    createClassButton.addEventListener('click', ()=>{
        loginPage.classList.add('d-none');
        createClassPage.classList.remove('d-none');
    });

});


