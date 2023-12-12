<!DOCTYPE html>
<html>
    <head>
        <title>PROFILE</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="./site.css" rel="stylesheet" type="text/css" />
        <link href="./index.css" rel="stylesheet" type="text/css" />
        <link href="./profile.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <!-- Session -->
        <?php session_start(); ?>
        <!-- Get user info -->
        <?php include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-user-info.php'); ?>

        <div class="profile-page-wrapper">
                <div class="profile-container">
                    <div class="profile-row">
                            <div class="profile-left-panel">
                                <?php echo '<h1 class="profile-heading">'.$Username.'</h1>'; ?>
                                <div class="profile-column-row">
                                    <div class="profile-column">
                                            <div class="profile-tag-wrapper">biography</div>
                                            <?php echo '<div class="profile-biography-text">'.$Bio.'</div>'; ?>

                                            <div class="profile-tag-wrapper">personality</div>
                                            <div class="skill-range-slider">
                                                    <div class="range-slider-lebel">communication</div>
                                                    <div class="range-slider-container">
                                                        <div class="range-slider" value="80"></div>
                                                    </div>
                                            </div>
                                            <div class="skill-range-slider">
                                                <div class="range-slider-lebel">Team Management</div>
                                                <div class="range-slider-container">
                                                    <div class="range-slider" value="70"></div>
                                                </div>
                                            </div>
                                            <div class="skill-range-slider">
                                                <div class="range-slider-lebel">work with a team</div>
                                                <div class="range-slider-container">
                                                    <div class="range-slider" value="85"></div>
                                                </div>
                                            </div>


                                    </div>
                                    <!-- profile first column end -->
                                    <div class="profile-column column-2">
                                        <div class="profile-tag-wrapper">skill</div>
                                        <div class="profile-skill-container">
                                                <div class="p-skill-wrapper">
                                                     <div class="skill-lable">public speaking</div>
                                                     <div class="skill-rating" value="3"></div>
                                                </div>
                                                <div class="p-skill-wrapper">
                                                    <div class="skill-lable">copywriting</div>
                                                    <div class="skill-rating" value="4"></div>
                                               </div>
                                               <div class="p-skill-wrapper">
                                                    <div class="skill-lable">editing</div>
                                                    <div class="skill-rating" value="4"></div>
                                               </div>
                                               <div class="p-skill-wrapper">
                                                    <div class="skill-lable">laouting</div>
                                                    <div class="skill-rating" value="4"></div>
                                                </div>


                                        </div>
                                        <!-- profile skill container end -->
                                        
                                        <div class="profile-tag-wrapper">goals</div>
                                        <div class="profile-goal-container">
                                                <ul>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
                                                </ul>
                                        </div>
                                        <!-- profile goal container end -->

                                    </div>
                                    <!-- profile second column end -->
                                </div>
                                <!-- profile column row end -->
                            </div>
                            <!-- profile left panel end -->
                            <div class="profile-right-panel">
                                        <div class="profile-photo-container">
                                            <?php echo '<img src="./assets/user/' . $pfp . '" alt="Profile Picture" class="profile-image x_large">'; ?>
                                        </div>
                                        <!-- profile photo container end -->
                                        <!-- Logout Button -->
                                        <?php
                                            if($uid == $_SESSION['userID']) {
                                                echo '<form style="text-align: center" action="./back-end/logout.php">';
                                                echo '<input type="submit" value="Logout" />';
                                                echo '</form>';
                                            }
                                        ?>
                                        <div class="profile-details-container">
                                            <ul>
                                                <?php echo '<li>'.$Fname.' '.$Lname.'</li>'; ?>
                                                <!-- Compute age -->
                                                <?php
                                                    $from = new DateTime($DOB);
                                                    $to   = new DateTime('today');
                                                    //print age
                                                    echo '<li>age: <span>'.$from->diff($to)->y.'</span></li>';                                                    
                                                ?>
                                                <?php echo '<li>Location: <span class="caps">'.$Location.'</span></li>'; ?>
                                            </ul>
                                        </div>
                                        <!-- profile details container end -->
                                        <div class="profile-fav-brand-container">
                                            <div class="p-b-backend"></div>
                                            <div class="p-b-front">
                                                <div class="p-brand-heading">favorite brand</div>
                                                <div class="profile-fav-row">
                                                    <div class="p-fav-item">
                                                        <svg fill="#000000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                                            viewBox="0 0 495.398 495.398"
                                                            xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <path d="M487.083,225.514l-75.08-75.08V63.704c0-15.682-12.708-28.391-28.413-28.391c-15.669,0-28.377,12.709-28.377,28.391
                                                                        v29.941L299.31,37.74c-27.639-27.624-75.694-27.575-103.27,0.05L8.312,225.514c-11.082,11.104-11.082,29.071,0,40.158
                                                                        c11.087,11.101,29.089,11.101,40.172,0l187.71-187.729c6.115-6.083,16.893-6.083,22.976-0.018l187.742,187.747
                                                                        c5.567,5.551,12.825,8.312,20.081,8.312c7.271,0,14.541-2.764,20.091-8.312C498.17,254.586,498.17,236.619,487.083,225.514z"/>
                                                                    <path d="M257.561,131.836c-5.454-5.451-14.285-5.451-19.723,0L72.712,296.913c-2.607,2.606-4.085,6.164-4.085,9.877v120.401
                                                                        c0,28.253,22.908,51.16,51.16,51.16h81.754v-126.61h92.299v126.61h81.755c28.251,0,51.159-22.907,51.159-51.159V306.79
                                                                        c0-3.713-1.465-7.271-4.085-9.877L257.561,131.836z"/>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        </svg>
                                                    </div>
                                                    <div class="p-fav-item">
                                                        <svg  viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z" fill="#1C274C"/>
                                                        </svg>
                                                    </div>
                                                    <div class="p-fav-item">
                                                        <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 128 128" width="256" height="256"><path d="M64,4A28.34,28.34,0,1,0,92.33,32.33,28.33,28.33,0,0,0,64,4Z" fill="#000000" class="color000 svgShape"></path><path d="M107.89,80.11A54.83,54.83,0,0,0,69,64H59A55,55,0,0,0,4,119a5,5,0,0,0,5,5H119a5,5,0,0,0,5-5A54.83,54.83,0,0,0,107.89,80.11Z" fill="#000000" class="color000 svgShape"></path></svg>
                                                    </div>
                                                </div>
                                            </div>
                                                
                                        </div>
                                        <!-- profile fav brand container end -->

                            </div>
                            <!-- profile right panel end -->
                    </div>
                    <!-- profile row end -->
                </div>
                <!-- profile container end -->
                <!-- Get user's posts -->
            <?php
                if(isset($_GET['user'])){
                    $calluser = $_GET['user'];
                }
                else {
                    $calluser = $_SESSION['userID'];
                }
                include($_SERVER['DOCUMENT_ROOT'].'/back-end/get-posts.php'); 
            ?>
        </div>
        <!-- profile page wrapper end -->
    </body>
</html>
