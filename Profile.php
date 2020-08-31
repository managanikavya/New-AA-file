<?php
	include('HeaderClient.php');
?>
<script>
    const UserIDClient = "<?php echo $_SESSION['UserId']; ?>";
    
    $(document).ready(function(){
        var UserID = "<?php echo $_SESSION['UserId']; ?>";
        if(UserID == "")
        {
            $("#btnLogin").show();
            $("#btnLogout").hide();
        }
        else
        {
            $("#btnLogout").show();
            $("#btnLogin").hide();
        }
    });
</script>
<link rel="stylesheet" href="src/css/profile.css">

<div class="container pt-5 mb-5" id="divContainerProfile">
	<!-- <form method="post"> -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img" id="divProfilePic">
                           <!--  <img src="" alt="" /> -->
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head ">
                                    <h5 id="hName" class="text-light">
                                        <!-- Kshiti Ghelani -->
                                    </h5>
                                    <h6 id="hDesignation" class="text-light">
                                        <!-- Web Developer and Designer -->
                                    </h6>
                                    <p class="proile-rating text-light">Qualification : 
                                        <span id="spnQualification"></span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <!-- <a href="EditProfile.php?UserId=" + UserID> -->
                            <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" onclick="EditProfile()"/>
                        <!-- </a>                         -->
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <!-- <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div> -->
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>User Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="pUsername" class="text-light"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="pName" class="text-light"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-light" id="pMail"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-light" id="pMobile"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Profession</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-light" id="pDesignation"></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="pExperience" class="text-light"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Information Source</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="pInformationSource"></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Total Projects</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-light" id="pTotalProjects">230</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Membership</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-light" id="pMembership">Expert</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Notes</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="text-light" id="pNotes"></p>
                                            </div>
                                        </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Your Bio</label><br/>
                                        <p id="pBio" class="text-light">Your detail description</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </form>   -->
</div>
<script src="src/Constants/constants.js"></script>
<script src="src/js/CustomScripts/Profile.js"></script>

<?php
	include('footer.php');
?>
