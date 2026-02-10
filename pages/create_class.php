<h1 class="d-none">create_class</h1>

<div id="createClassPage" class="gap-10 pad-10 w-100 vh-100 d-flex flex-column align-items-center justify-content-center">
    <div class="w-50 h-auto border-2 pad-10 border-radius-5">


        <div id="createAdmin" class="d-block">
            <h1 class="text-center margin-y-10 w-100 text-center">Create Admin</h1>
            <form id="createAdminForm" class="pad-10">

                <label class="w-100 text-left margin-y-10" for="className">Class Name</label>
                <input class="w-100 pad-5 fs-20" type="text" name="className" id="className">

                <label class="w-100 text-left margin-y-10" for="staffsLength">Staffs Length</label>
                <input class="w-100 pad-5 fs-20" type="number" name="staffsLength" id="staffsLength">

                <label class="w-100 text-left margin-y-10" for="studentsLength">Students Length</label>
                <input class="w-100 pad-5 fs-20" type="number" name="studentsLength" id="studentsLength">

                <label class="w-100 text-left margin-y-10" for="adminName">Class Admin Name</label>
                <input class="w-100 pad-5 fs-20" type="text" name="adminName" id="adminName">

                <label class="w-100 text-left margin-y-10" for="adminUserName">Admin Username</label>
                <input class="w-100 pad-5 fs-20" type="text" name="adminUserName" id="adminUserName">

                <label class="w-100 text-left margin-y-10" for="adminPassword">Class Admin Password</label>
                <input class="w-100 pad-5 fs-20" type="text" name="adminPassword" id="adminPassword">

                <label class="w-100 text-left margin-y-10" for="adminConfirmPassword">Confirm Password</label>
                <input class="w-100 pad-5 fs-20" type="text" name="adminConfirmPassword" id="adminConfirmPassword">

                <div class="w-100 pad-10 border-2 border-radius-5 margin-y-10 bg-main text-center text-white cursor-pointer" id="createAdminButton">Create Admin</div>
            </form>
        </div>

    </div>
</div>

<script src="./assets/js/create_class.js"></script>