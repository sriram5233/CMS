<div id="loginPage" class="container vh-100 pad-10 d-flex justify-content-end align-items-center">
    <div class="wd-40">

        <!-- Teacher Section -->
        <div class="margin-y-10  border-2 border-radius-5 transition-1s">

            <div id="cmsTeacherTab" class="pad-10">
                <div class="fs-4 text-center cursor-pointer">Teacher Login</div>
            </div>

            <div id="cmsTeacherForm" class="vh-40 pad-10 d-none text-center transition-1s">
                <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                    <form id="teacherForm" class="pad-10">

                        <label for="classId" class="w-100 text-left margin-y-10">Class ID</label>
                        <input class="w-100 fs-20 pad-5" id="teacherClassId" name="classId" type="text">

                        <label for="username" class="w-100 text-left margin-y-10">Username</label>
                        <input class="w-100 fs-20 pad-5" id="teacherUsername" name="username" type="text">


                        <label for="password" class="w-100 text-left margin-y-10">Password</label>
                        <input class="w-100 fs-20 pad-5" id="teacherPassword" name="password" type="text">

                        <div class="w-100 pad-10 border-2 border-radius-5 margin-y-10 bg-main text-center text-white cursor-pointer" id="teacherSubmitButton">Login</div>

                        <div class="text-right fs-6 cursor-pointer">Forgot Password ?</div>

                    </form>
                </div>
            </div>
            
        </div>

        <!-- Student Section -->
        <div class="margin-y-10 border-2 border-radius-5 transition-1s">

            <div id="cmsStudentTab" class="pad-10">
                <div class="fs-4 text-center cursor-pointer">Student Login</div>
            </div>

            <div id="cmsStudentForm" class="vh-40 text-center pad-10 transition-1s">
                <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                    <form id="studentForm" class="pad-10">

                        <label for="classId" class="w-100 text-left margin-y-10">Class ID</label>
                        <input class="w-100 fs-20 pad-5" id="studentClassId" name="classId" type="text">

                        <label for="username" class="w-100 text-left margin-y-10">Username</label>
                        <input class="w-100 fs-20 pad-5" id="studentUsername" name="username" type="text">


                        <label for="password" class="w-100 text-left margin-y-10">Password</label>
                        <input class="w-100 fs-20 pad-5" id="studentPassword" name="password" type="text">

                        <div class="w-100 pad-10 border-2 border-radius-5 margin-y-10 bg-main text-center text-white cursor-pointer" id="studentSubmitButton">Login</div>

                        <div class="text-right fs-6 cursor-pointer">Forgot Password ?</div>

                    </form>
                </div>
            </div>
            
        </div>

        <!-- Create Class Section -->
        <div class="margin-y-10 border-2 border-radius-5 transition-1s">

            <div id="cmsClassCreateTab" class="pad-10">
                <div class="fs-4 text-center cursor-pointer">Create Class</div>
            </div>

            <div id="cmsClassCreateForm" class="vh-40 pad-10 d-none text-center transition-1s">
                <div class="w-100 h-100 d-flex flex-column justify-content-center align-items-center">
                    <form id="classCreateForm" class="w-100 pad-10">

                        <div class="w-100 pad-10 border-2 border-radius-5 margin-y-10 bg-main text-center text-white cursor-pointer" id="createButton">Create Class</div>

                    </form>
                </div>
            </div>
            
        </div>
        
    </div>
</div>