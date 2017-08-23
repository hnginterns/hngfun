<?php
$pageTitle = "Participants";
include('header.php');
?>

    <style type="text/css" xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml" xmlns:http="http://www.w3.org/1999/xhtml">
        .team7-card-container {
            display: flex;
            display: -webkit-flex;
            margin: 10px 10px;
            padding: 10px;
            flex-flow: row wrap;
            -webkit-flex-flow: row wrap;
            justify-content: space-around;
            -webkit-justify-content: space-around;
        }

        .team7-card-container div {
            flex: 1 1 320px;
            -webkit-flex: 1 1 320px;
            margin: 10px;
        }

        .team7-card-container div:nth-of-type(1n+2) {
            /*margin: 10px;*/
        }

        .team7-div {
            border: 1px solid rgba(213, 213, 215, 0.92);
            border-radius: 2px;
            padding: 5px;
            background-color: #f7f7f7;
        }

        .team7-card-bg {
            background-position: center center;
            width: auto;
            height: 200px;
            background-size: cover;
        }

        @media (max-width: 768px) {}

        .team7-heading {
            text-align: center;
            /*margin: 10px;*/
            background: transparent url(https://internship.hotels.ng/interns2.jpg) no-repeat 50% 0px / cover;
            box-shadow: inset 0 0 0 100px rgba(0, 0, 255, 0.3);
            height: auto;
        }

        .team7-heading h1 {
            font-weight: 600 !important;
            color: #fff;
        }

        .team7-readmore {
            border: 2px solid;
            width: 20px;
            height: auto;
            font-weight: 700;
            font-size: larger;
            border-radius: 2px;
            padding: 10px;
            text-decoration: none;
        }

        .team7-body-container {
            margin: 10px 40px;
            padding: 20px;
        }

        .team7-body-container h2 {
            font-weight: 700;
        }

        .team7-snippet {
            padding: 10px;
        }

        .team7-read-full {
            font-size: 16px;
        }
    </style>

    <div class="team7-heading">
        <h1>Current Participants</h1>
    </div>

    <div id="banner-content" class="row clearfix">

        <div class="p-card-container">
            <div class="v-center">
                <input style="margin-top: 40px;" type="text" id="search" placeholder="Enter Participant name to search" name="search">
            </div>
        </div>

        <div class="p-card-container">


            <!--
              GUIDELINES FOR ADDING DETAILS TO PARTICIPANTS TABLE(Please read the comments)
                    - Copy the codes in the code block below (Dont include the code block)
              - Only change where you see a comment and paste at the end of the code(Above the comment)
              - Make sure you do not modify information of other participants
              - Pull the repo, before pushing it, inorder to prevent conflicts
            -->

		    <!--  Each Participant starts here  -->
		  <div class="p-card">

            <div class="v-center">
            <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/danolez1/profile.JPG); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/danolez1">
                <!--Profile Link-->

                <!--Profile Name-->
                <h3 class="p-card-title">Fatunmbi Daniel</h3>
                </a>
                <p class="p-card-description">
                <!--Email-->
                danolez1fatuns@yahoo.com</p>
                
            </div>
            <div class="p-team">
                <a href="#"><!--Team-->
                <h3 class="p-card-title"> Team 3 </h3>
                
                </a>
            </div>
            </div>
        </div>
	
		 <div class="p-card">
                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/browncn/image/upload/v1503497454/me_eebazp.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="http://hng.fun/profile/browncn/index.html">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">Brown Nwankwo</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">brown.cnk@gmail.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team-achievement </h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>

            <div class="p-card">
			<div class="v-center">
			    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dr7qeat3t/image/upload/v1503196109/josh_2_gkeaf7.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
			    <div class="p-card-info">
				<a href="http://hng.fun/profile/josh.html">
				    <!--Profile Link-->
				    <h3 class="p-card-title">Aniekwe Joshua</h3>
				    <!--Profile Name-->
				</a>
				<p class="p-card-description">joshuaaniekwe@gmail.com</p>
				<!--Email-->
			    </div>
			    <div class="p-team">
				<a href="#">
				    <h3 class="p-card-title"> Team 9 </h3>
				    <!--Team-->
				</a>
			    </div>
			</div>
		    </div>
                    <!--  Each Participants ends here  -->
					 <div class="p-card">
			<div class="v-center">
			    <div class="p-card-photo" style="background-image: url(https://scontent-lhr3-1.cdninstagram.com/t51.2885-15/e35/14592022_632162846965673_6489739989922873344_n.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
			    <div class="p-card-info">
				<a href="http://hng.fun/profile/solar.html">
				    <!--Profile Link-->
				    <h3 class="p-card-title">Okanlaw0n</h3>
				    <!--Profile Name-->
				</a>
				<p class="p-card-description">okanlawonemmanuel41@gmail.com</p>
				<!--Email-->
			    </div>
			    <div class="p-team">
				<a href="#">
				    <h3 class="p-card-title"> Team 9 </h3>
				    <!--Team-->
				</a>
			    </div>
			</div>
		    </div>
		
		<div class="p-card">

		    <div class="v-center">
			<div class="p-card-photo" style="background-image: url(https://cdn-images-1.medium.com/fit/c/120/120/1*KQbibJtclzBy3gjrPvfDHA@2x.jpeg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
			<div class="p-card-info">
			    <a href="http://hng.fun/profile/olaoluwa_98.html">
				<!--Profile Link-->
				<h3 class="p-card-title">Emmanuel Awotunde</h3>
				<!--Profile Name-->
			    </a>
			    <p class="p-card-description">emmanuel_awotunde@yahoo.com</p>
			    <!--Email-->
			</div>
			<div class="p-team">
			    <a href="#">
				<h3 class="p-card-title"> Team 8 </h3>
				<!--Team-->
			    </a>
			</div>
		    </div>
		</div>

                    <div class="p-card">
                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dium0vpfs/image/upload/v1503193755/IMG_20170612_145550_xdjpto.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="http://hng.fun/profile/stanleyokike.html">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">Okike stanley</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">okikestan@gmail.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team 9 </h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Each Participants ends here  -->


                    <div class="p-card">

                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/iyfe/displayPicture.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="http://hng.fun/profile/iyfe">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">Ifunanya Ukachukwu</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">icukachuk@gmail.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team 7 </h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>

		    <div class="p-card">

                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/nicholaskajoh/me.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="http://hng.fun/profile/nicholaskajoh">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">Nicholas Kajoh</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">kajohterna@gmail.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team 8</h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="p-card">
                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/adeglo/adeglo.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="http://hng.fun/profile/adeglo/adeglo.html">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">Adebowale Glory</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">glonimi0@gmail.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team 10 </h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="p-card">
                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/28753220?v=4&u=a7b6ef189b8b5a577e22db6437c9a7860c6b1faf&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="http://hng.fun/profile/teegoldz.html">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">okunniga Tosin</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">Okunnigatosin@gmail.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team 8 </h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Each Participants ends here  -->



                    <div class="p-card">
                        <div class="v-center">
                            <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/7896429?v=4&s=460
                  ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                            <div class="p-card-info">
                                <a href="https://github.com/hnginterns/hngfun/tree/master/profile/timicodes">
                                    <!--Profile Link-->
                                    <h3 class="p-card-title">Tejumola David Timmy</h3>
                                    <!--Profile Name-->
                                </a>
                                <p class="p-card-description">timi@tarrotmall.com</p>
                                <!--Email-->
                            </div>
                            <div class="p-team">
                                <a href="#">
                                    <h3 class="p-card-title"> Team 2 </h3>
                                    <!--Team-->
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--  Each Participants ends here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.0-9/17626667_1304703359605988_8550045173239731599_n.jpg?oh=71d5449bed8089446acb4620e3e5425d&oe=5A25E345); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">

                                    <a href="http://hng.fun/profile/shalomjohn.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Shalom John</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">johnprince58@gmail.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 10 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->

                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/28959886?v=4&s=400
                        ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="profile/kole_ibrahim/kole_ibrahim.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Kole-Ibrahim AbdulQudus</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">femi.highsky@gmail.cm</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 2 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->
                        <!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/UrkycNV.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/raypex.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Ray Okaah</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">raypex2@gmail.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="https://github.com/hnginterns/hng-team2android-stage2">
                                        <h3 class="p-card-title"> Team 2 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->
                        <!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/WtbKOTM.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/dukauwa">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Ukauwa David </h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">
                                        dukauwa.du@gmail.com
                                    </p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 1 </h3>
                                        <!--Team-->
                                    </a>

                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->
                        <!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/31159357?v=4&u=869110ba4e79cbf83e826e2f6f602cfd12fb93d6&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/godfredakpan.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Godfred Akpan</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">godfredakpan@gmail.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 5 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->
                        <!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/tella26.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">TELLA Babatunde</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">tellababatunde@gmail.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 2 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/899666444060942341/uKTEUbcF_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">


                                    <a href="http://hng.fun/profile/jekayode">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Emmanuel Joseph</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">jekayode@live.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 3 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>


                        <!--  Each Participants ends here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/jQznRbs.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">


                                    <a href="http://hng.fun/profile/ify.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Ify Okoh</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">odibest1893@gmail.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 9 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->

                        <!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(../images/zee_img.JPG); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/zee.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Gafar Azeez Oluwafemi</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">azegaf@gmail.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 4 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->

                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/TAaP38Y.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">


                                    <a href="http://hng.fun/profile/bosunski">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Olatunbosun Gabriel</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">bosunski@gmail.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 3 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/Sj5rshV.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">


                                    <a href="http://hng.fun/profile/debowale1.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Adeshina Ibrahim</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">debowale01@gmail.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 1 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/rexorioko/img/IMG_5345.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">


                                    <a href="http://hng.fun/profile/rexorioko/rexorioko.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Rex Orioko</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">rexorioko@gmail.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 3 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/majiyd_profile/statics/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">


                                    <a href="http://hng.fun/profile/majiyd.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Suleiman Abdulmajeed</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">suleimanmajiyd@gmail.com</p>
                                    <!--Email-->
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 4 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/8acb616934); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/peterperez/index.html">
                                        <h3 class="p-card-title">Peter Peregbakumo</h3>
                                    </a>
                                    <p class="p-card-description">perezpeter32@gmail.com</p>
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 4 </h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/31111012?v=4&u=a0c87076df38b38d42e697a46050d80bfe6d23aa&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/vhiktordom.html">
                                        <h3 class="p-card-title">Victor Dominic</h3>
                                    </a>
                                    <p class="p-card-description">vhiktordom@gmail.com</p>
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 4 </h3>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://image.ibb.co/eYOe6k/olumide.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/holumiede.html">
                                        <h3 class="p-card-title">Osideinde Oluwadara</h3>
                                    </a>
                                    <p class="p-card-description">osideindeo@gmail.com</p>
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 3 </h3>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/plushdeveloper/image/upload/v1503153956/IMG_20170119_174852_589_qsoqaz.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="./profile/ogbeniore.html">
                                        <h3 class="p-card-title">Ojo Oreoluwa</h3>
                                    </a>
                                    <p class="p-card-description">oreeboy@gmail.com</p>
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 3 </h3>
                                    </a>
                                </div>
                            </div>
                        </div>



                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/6526607?v=4&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/mathemandy.html">
                                        <h3 class="p-card-title">Andy Eshiet</h3>
                                    </a>
                                    <p class="p-card-description">andyeshiet@gmail.com</p>
                                </div>

                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 2 </h3>
                                    </a>
                                </div>
                            </div>
                        </div>


                        <!-- Each Participant starts here -->
                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/28753220?v=4&u=a7b6ef189b8b5a577e22db6437c9a7860c6b1faf&s=400
                ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">
                                        <a href="http://hng.fun/profile/teegoldz.html">
                                            <!--Profile Link-->
                                            <h3 class="p-card-title">okunniga Tosin</h3>
                                            <!--Profile Name-->
                                        </a>
                                        <p class="p-card-description">Okunnigatosin@gmail.com</p>
                                        <!--Email-->
                                    </div>
                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 8 </h3>
                                            <!--Team-->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--  Each Participants ends here  -->

                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDw44BhHjka-ySW9YsGhiD40sWcISHEihLl0X40-7NLT83honDEA); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">
                                        <a href="#">
                                            <h3 class="p-card-title">Abdulsamad Aliyu</h3>
                                        </a>
                                        <p class="p-card-description">jekayode@live.com</p>
                                    </div>

                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 3 </h3>
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/dYFenOU.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">
                                        <a href="http://hng.fun/profile/daniella.html">
                                            <!--Profile Link-->
                                            <h3 class="p-card-title">Daniella Mato</h3>
                                            <!--Profile Name-->
                                        </a>
                                        <p class="p-card-description">dmpire2@gmail.com</p>
                                    </div>
                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 10 </h3>
                                            <!--Team-->
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Each participant starts here -->
                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/g2IDvh4.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">
                                        <a href="http://hng.fun/profile/ninte.html">
                                            <!--Profile Link-->
                                            <h3 class="p-card-title">Usheninte Dangana</h3>
                                            <!--Profile Name-->
                                        </a>
                                        <p class="p-card-description">jrandangana@gmail.com</p>
                                    </div>
                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 10 </h3>
                                            <!--Team-->
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- Each participant ends here -->

                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/6292486?v=4&u=e0f8b24571da3e3701296ba2df9e09b09cdb556b&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">
                                        <a href="http://hng.fun/profile/nseetim.html">
                                            <!--Profile Link-->
                                            <h3 class="p-card-title">Nse-Abasi Etim</h3>
                                            <!--Profile Name-->
                                        </a>
                                        <p class="p-card-description">etimnseabasi@gmail.com</p>
                                    </div>
                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 10 </h3>
                                            <!--Team-->
                                        </a>
                                    </div>
                                </div>
                            </div>


                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/12042876_1052428558114186_1777675972793875780_n.jpg?_nc_eui2=v1%3AAeGAmf_Cy4z6PszN4lzDm7G_gENN9PL4Z9UmaSD4lUUxOkFEZISNDF0xiUuihStcur78EPEpatwoqHs_UKJgjEESqpS1UiLXUi2uhupKLzHv0w&oh=3d69de2b708de78b50f706b63048dfae&oe=5A133AC5); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">


                                        <a href="http://hng.fun/profile/Gabriel">
                                            <!--Profile Link-->
                                            <h3 class="p-card-title">Gabriel Umoh</h3>
                                            <!--Profile Name-->
                                        </a>
                                        <p class="p-card-description">gmaumoh@gmail.com</p>
                                        <!--Email-->
                                    </div>

                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 6 </h3>
                                            <!--Team-->
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="p-card">
                                <div class="v-center">
                                    <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/861305946479493120/PsPxNeDd.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                    <div class="p-card-info">
                                        <a href="http://hng.fun/profile/samesidem.html">
                                            <h3 class="p-card-title">Sam Esidem</h3>
                                        </a>
                                        <p class="p-card-description">samesidem@gmail.com</p>
                                    </div>

                                    <div class="p-team">
                                        <a href="#">
                                            <h3 class="p-card-title"> Team 2 </h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/hngfun/image/upload/v1503323008/nsikakthompson_frztsd.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">
                                            <a href="http://hng.fun/profile/nsikakthompson.html">
                                                <h3 class="p-card-title">Nsikak Thompson</h3>
                                            </a>
                                            <p class="p-card-description">nsikakthompson73@gmail.com</p>
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 2 </h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAXRAAAAJGQ5OWE3ZjQ3LTRjMGUtNDY2Ni1hMTliLWYxMDNkMGRlNjIyNw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/profchydon.html">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Nkwocha Chidi</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">profchydon@gmail.com</p>
                                            <!--Email-->
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 5 </h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/d281829f39); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">
                                            <a href="#">
                                                <h3 class="p-card-title">Kay Sagoe</h3>
                                            </a>
                                            <p class="p-card-description">ksagoe@gmail.com</p>
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 3 </h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-1/p160x160/14657334_1259677607387062_8116538770825805178_n.jpg?oh=fd7eeb04eb8940e886b79c5b6354e74b&oe=5A277060); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/idee.html">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Idorenyin Obong</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">idee4ril@gmail.com</p>
                                            <!--Email-->
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 2 </h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>





                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(http://nicesale.com.ng/adigunhammedola.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/adigunhammedolalekan">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Adigun Hammed Olalekan</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">adigunadunfe@gmail.com</p>
                                            <!--Email-->
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 2</h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/komsic/image/upload/v1503245344/komsic_pic.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">
                                            <a href="./profile/komsic.html">
                                                <h3 class="p-card-title">KAYODE, Micheal O.</h3>
                                            </a>
                                            <p class="p-card-description">kayodemicheal159@gmail.com</p>
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 2 </h3>
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/19657311_10207581697620951_5131316902298210800_n.jpg?_nc_eui2=v1%3AAeG4KAKPT9bGPt8_3xXOGiWcQ7ApMq8d6t5wmjzOHjCWgGtEMnNEvNig16dNxw-xI6NzEGzf9yO7wyZU45nuHcRStY2xcx14XuWjzK5ZAPQQLA&oh=c62456c91afa77493b27c5af42dee7b7&oe=5A1C5382); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">
                                            <a href="http://hng.fun/profile/itz_jf.html">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Femi Odejide</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">odejidefemi@gmail.com</p>
                                        </div>
                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 7 </h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dmz79kgf0/image/upload/v1503167599/File_000_atsuop.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/lateefog.html">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Ogunbadejo Lateef</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">lateefogunbadejo@yahoo.com</p>
                                            <!--Email-->
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 8 </h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/tobilight/image/upload/v1503321342/IMAG0082_fuubsp.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/tobilight">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Agunloye Oluwatobiloba Light</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">jgetitdonefast@gmail.com</p>
                                            <!--Email-->
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 8 </h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>


                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(https://3.bp.blogspot.com/-PiUY7625XM4/WP4AciXXW6I/AAAAAAAABX8/C04iRDTrGaMrspUkrYMzh7X53VjGhkF7gCEw/s1600/emem.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/emembrownson.html">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Emem Brownson</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">brownjee001@gmail.com</p>
                                            <!--Email-->
                                        </div>

                                        <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 2 </h3>
                                                <!--Team-->
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="p-card">
                                    <div class="v-center">
                                        <div class="p-card-photo" style="background-image: url(https://scontent.cdninstagram.com/t51.2885-19/s150x150/17075777_1409128825798368_1636514859128455168_a.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                        <div class="p-card-info">


                                            <a href="http://hng.fun/profile/princessdee.html">
                                                <!--Profile Link-->
                                                <h3 class="p-card-title">Damilola Omoyiwola</h3>
                                                <!--Profile Name-->
                                            </a>
                                            <p class="p-card-description">damomos123@gmail.com</p>
                                            <!--Email-->
                                        </div>
                                        <<<<<<< HEAD <div class="p-team">
                                            <a href="#">
                                                <h3 class="p-card-title"> Team 2 </h3>
                                            </a>
                                    </div>
                                </div>
                </div>




                <div class="p-card">
                    <div class="v-center">
                        <div class="p-card-photo" style="background-image: url(https://i.imgur.com/zbiIbCI.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                        <div class="p-card-info">
                            <a href="http://hng.fun/profile/greywhite">
                                <!--Profile Link-->
                                <h3 class="p-card-title">Grey Stanley Oguazu</h3>
                                <!--Profile Name-->
                            </a>
                            <p class="p-card-description">deareststanley@gmail.com</p>
                            <!--Email-->
                        </div>
                        <div class="p-team">
                            <a href="#">
                                <h3 class="p-card-title"> Team 8 </h3>
                                <!--Team-->
                            </a>
                        </div>
                    </div>
                </div>



                <div class="p-card">

                    <div class="v-center">
                        <div class="p-card-photo" style="background-image: url(https://scontent.cdninstagram.com/t51.2885-19/s150x150/17075777_1409128825798368_1636514859128455168_a.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                        <div class="p-card-info">
                            <a href="http://hng.fun/profile/princessdee">
                                <!--Profile Link-->
                                <h3 class="p-card-title">Damilola Omoyiwola</h3>
                                <!--Profile Name-->
                            </a>
                            <p class="p-card-description">damomos123@gmail.com</p>
                            <!--Email-->
                        </div>
                        <div class="p-team">
                            <a href="#">
                                <h3 class="p-card-title"> Team # </h3>
                                <!--Team-->
                            </a>
                        </div>
                    </div>
                </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dr7qeat3t/image/upload/v1503196109/josh_2_gkeaf7.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/josh.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Aniekwe Joshua</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">joshuaaniekwe@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
	    
	     <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/19657311_10207581697620951_5131316902298210800_n.jpg?_nc_eui2=v1%3AAeG4KAKPT9bGPt8_3xXOGiWcQ7ApMq8d6t5wmjzOHjCWgGtEMnNEvNig16dNxw-xI6NzEGzf9yO7wyZU45nuHcRStY2xcx14XuWjzK5ZAPQQLA&oh=c62456c91afa77493b27c5af42dee7b7&oe=5A1C5382" alt="Femi_Odejide); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/itz_jf.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Femi Odejide</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">odejidefemi@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 7 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
=======
            <!--  Each Participants ends here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dium0vpfs/image/upload/v1503193755/IMG_20170612_145550_xdjpto.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/stanleyokike.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Okike stanley</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">okikestan@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->
>>>>>>> 6f0a166b7af3c1d2a6677f8e8fbca2bea1b2ff54


            <div class="p-card">

                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/iyfe/displayPicture.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/iyfe">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ifunanya Ukachukwu</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">icukachuk@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 7 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">

                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/nicholaskajoh/me.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/nicholaskajoh">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nicholas Kajoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">kajohterna@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8</h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/adeglo/adeglo.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/adeglo/adeglo.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Adebowale Glory</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">glonimi0@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/28753220?v=4&u=a7b6ef189b8b5a577e22db6437c9a7860c6b1faf&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/teegoldz.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">okunniga Tosin</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">Okunnigatosin@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/7896429?v=4&s=460
                  ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="https://github.com/hnginterns/hngfun/tree/master/profile/timicodes">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Tejumola David Timmy</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">timi@tarrotmall.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->
            <!-- Each Participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.0-9/17626667_1304703359605988_8550045173239731599_n.jpg?oh=71d5449bed8089446acb4620e3e5425d&oe=5A25E345); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">

                        <a href="http://hng.fun/profile/shalomjohn.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Shalom John</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">johnprince58@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/28959886?v=4&s=400
                        ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="profile/kole_ibrahim/kole_ibrahim.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Kole-Ibrahim AbdulQudus</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">femi.highsky@gmail.cm</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/UrkycNV.jpg
); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/raypex.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ray Okaah</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">raypex2@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="https://github.com/hnginterns/hng-team2android-stage2">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->
            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/de14v8crs/image/upload/v1503358091/profile2_a7wxo3.jpg" ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/dukauwa">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ukauwa David </h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">
                            dukauwa.du@gmail.com
                        </p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>

                    </div>
                </div>
            </div>

            <!--  Each Participants ends here  -->
            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/31159357?v=4&u=869110ba4e79cbf83e826e2f6f602cfd12fb93d6&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/godfredakpan.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Godfred Akpan</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">godfredakpan@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 5 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->
            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/tella26.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">TELLA Babatunde</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">tellababatunde@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/899666444060942341/uKTEUbcF_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/jekayode">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Emmanuel Joseph</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">jekayode@live.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/jQznRbs.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/ify.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ify Okoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">odibest1893@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <!--  Each Participants ends here  -->

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(../images/zee_img.JPG); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/zee.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Gafar Azeez Oluwafemi</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">azegaf@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 4 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/TAaP38Y.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/bosunski">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Olatunbosun Gabriel</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">bosunski@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/Sj5rshV.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/debowale1.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Adeshina Ibrahim</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">debowale01@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/rexorioko/img/IMG_5345.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/rexorioko/rexorioko.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Rex Orioko</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">rexorioko@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/majiyd_profile/statics/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/majiyd.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Suleiman Abdulmajeed</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">suleimanmajiyd@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 4 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/8acb616934); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/peterperez/index.html">
                            <h3 class="p-card-title">Peter Peregbakumo</h3>
                        </a>
                        <p class="p-card-description">perezpeter32@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 4 </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/31111012?v=4&u=a0c87076df38b38d42e697a46050d80bfe6d23aa&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/vhiktordom.html">
                            <h3 class="p-card-title">Victor Dominic</h3>
                        </a>
                        <p class="p-card-description">vhiktordom@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 4 </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://image.ibb.co/eYOe6k/olumide.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/holumiede.html">
                            <h3 class="p-card-title">Osideinde Oluwadara</h3>
                        </a>
                        <p class="p-card-description">osideindeo@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/plushdeveloper/image/upload/v1503153956/IMG_20170119_174852_589_qsoqaz.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="./profile/ogbeniore.html">
                            <h3 class="p-card-title">Ojo Oreoluwa</h3>
                        </a>
                        <p class="p-card-description">oreeboy@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                        </a>
                    </div>
                </div>
            </div>



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/6526607?v=4&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/mathemandy.html">
                            <h3 class="p-card-title">Andy Eshiet</h3>
                        </a>
                        <p class="p-card-description">andyeshiet@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>
                    </div>
                </div>
            </div>


            <!-- Each Participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/28753220?v=4&u=a7b6ef189b8b5a577e22db6437c9a7860c6b1faf&s=400
                ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/teegoldz.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">okunniga Tosin</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">Okunnigatosin@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDw44BhHjka-ySW9YsGhiD40sWcISHEihLl0X40-7NLT83honDEA); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="#">
                            <h3 class="p-card-title">Abdulsamad Aliyu</h3>
                        </a>
                        <p class="p-card-description">jekayode@live.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/dYFenOU.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/daniella.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Daniella Mato</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">dmpire2@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <!-- Each participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/g2IDvh4.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/ninte.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Usheninte Dangana</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">jrandangana@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!-- Each participant ends here -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/6292486?v=4&u=e0f8b24571da3e3701296ba2df9e09b09cdb556b&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/nseetim.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nse-Abasi Etim</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">etimnseabasi@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/12042876_1052428558114186_1777675972793875780_n.jpg?_nc_eui2=v1%3AAeGAmf_Cy4z6PszN4lzDm7G_gENN9PL4Z9UmaSD4lUUxOkFEZISNDF0xiUuihStcur78EPEpatwoqHs_UKJgjEESqpS1UiLXUi2uhupKLzHv0w&oh=3d69de2b708de78b50f706b63048dfae&oe=5A133AC5); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/Gabriel">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Gabriel Umoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">gmaumoh@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/861305946479493120/PsPxNeDd.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/samesidem.html">
                            <h3 class="p-card-title">Sam Esidem</h3>
                        </a>
                        <p class="p-card-description">samesidem@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/hngfun/image/upload/v1503323008/nsikakthompson_frztsd.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/nsikakthompson.html">
                            <h3 class="p-card-title">Nsikak Thompson</h3>
                        </a>
                        <p class="p-card-description">nsikakthompson73@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAXRAAAAJGQ5OWE3ZjQ3LTRjMGUtNDY2Ni1hMTliLWYxMDNkMGRlNjIyNw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/profchydon.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nkwocha Chidi</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">profchydon@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 5 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/d281829f39); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="#">
                            <h3 class="p-card-title">Kay Sagoe</h3>
                        </a>
                        <p class="p-card-description">ksagoe@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-1/p160x160/14657334_1259677607387062_8116538770825805178_n.jpg?oh=fd7eeb04eb8940e886b79c5b6354e74b&oe=5A277060); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/idee.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Idorenyin Obong</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">idee4ril@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>





            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://nicesale.com.ng/adigunhammedola.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/adigunhammedolalekan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Adigun Hammed Olalekan</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">adigunadunfe@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2</h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/komsic/image/upload/v1503245344/komsic_pic.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="./profile/komsic.html">
                            <h3 class="p-card-title">KAYODE, Micheal O.</h3>
                        </a>
                        <p class="p-card-description">kayodemicheal159@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/19657311_10207581697620951_5131316902298210800_n.jpg?_nc_eui2=v1%3AAeG4KAKPT9bGPt8_3xXOGiWcQ7ApMq8d6t5wmjzOHjCWgGtEMnNEvNig16dNxw-xI6NzEGzf9yO7wyZU45nuHcRStY2xcx14XuWjzK5ZAPQQLA&oh=c62456c91afa77493b27c5af42dee7b7&oe=5A1C5382); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/itz_jf.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Femi Odejide</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">odejidefemi@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 7 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dmz79kgf0/image/upload/v1503167599/File_000_atsuop.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/lateefog.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ogunbadejo Lateef</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">lateefogunbadejo@yahoo.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/tobilight/image/upload/v1503321342/IMAG0082_fuubsp.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/tobilight">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Agunloye Oluwatobiloba Light</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">jgetitdonefast@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://3.bp.blogspot.com/-PiUY7625XM4/WP4AciXXW6I/AAAAAAAABX8/C04iRDTrGaMrspUkrYMzh7X53VjGhkF7gCEw/s1600/emem.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/emembrownson.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Emem Brownson</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">brownjee001@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.cdninstagram.com/t51.2885-19/s150x150/17075777_1409128825798368_1636514859128455168_a.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/princessdee.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Damilola Omoyiwola</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">damomos123@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>
                    </div>
                </div>
            </div>




            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://i.imgur.com/zbiIbCI.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/greywhite">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Grey Stanley Oguazu</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">deareststanley@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>



            <div class="p-card">

                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.cdninstagram.com/t51.2885-19/s150x150/17075777_1409128825798368_1636514859128455168_a.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/princessdee">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Damilola Omoyiwola</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">damomos123@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://www.easywebsolutionz.com/images/essien-saviour.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/emembrownson.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Essien Saviour</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">eazywebcontact@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345831/hng-profile/20160518_073958_3_kkaiu3.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/richyafro.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Richard Umoffia</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">richyafro@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/xpED2gj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/pepps01.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Pepple Sunny</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">slpepple01@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/12105518?v=4&amp;s=75); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/prosperoking">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nweze Prosper</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">
                            <span>dapon</span>extras<span>pp&#64;gm</span>ail.com
                        </p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Participant starts here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.flos3-1.fna.fbcdn.net/v/t1.0-9/15726563_1602744799741089_7874891167110176521_n.jpg?_nc_eui2=v1%3AAeGjgHkyfA8TlzGoJijUu7eLx6w-aTJcdrhcCHndC0dSlkgVdzVtkAhYJ2cnRk8V97LGw6PwzKKqcJU8UyL_MKROvIqjJJMi8J5IEdEC0mDkUw&oh=d476efae2b6e618acbc7f482e92a58e4&oe=5A1A5557);
				 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/jhosuer.html">
                            <h3 class="p-card-title">Joshua Jumbo</h3>
                        </a>
                        <p class="p-card-description">jumbojoshua91@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>
                    </div>
                </div>
            </div>

            <!--   Participant ends here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/uhexos/assets/img/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/uhexos">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nwokorobia Ugochukwu</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">uhexos@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://goldshare.org/IMG_20170805_155852.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/franko4don.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nwanze Franklin</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">
                            franko4don@gmail.com
                        </p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>

                    </div>

                </div>

            </div>
            <!--  Each Participants ends here  -->

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://s3.postimg.org/ss3h5exf7/12274735_1230649710285633_2189770792182668981_n.jpg" ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/paulayuk.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Paul Ayuk</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">
                            ayukpaul1@gmail.com
                        </p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>

                    </div>
                </div>
            </div>

            <!--  Each Participants ends here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/dclwbiwmf/image/upload/v1503221568/francis_ghcrup.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/alejandro.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Francis Benson</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">francisbnsn14@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <!--  Each Participants ends here  -->

            <!--  Paste above this and leave a few lines so the next person can see this -->

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/trojan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Michael Okoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">michael@okoh.co.uk</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANpAAAAJDdlMzFiOWM4LTE0ZDEtNGE5Ny1iMGUxLTAwODJiMTlkYjc4Yw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; ">
                    </div>
                    <div class="p-card-photo" style="background-image: url(" https://pbs.twimg.com/media/DHmJVfyW0AAN4u7.jpg "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/rogue.kvng.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Eniwoke Cornelius</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">eniwokepdm@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/media/DHmJVfyW0AAN4u7.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/rogue.kvng.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Kingsley Ukeje</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">swissking009@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->




            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/3f4dc237fa); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/ayobaymak">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ayodeji Bayo-Makinde</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">ayobaymak@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/dolapobabs.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Babatunde Adedolapo</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">dolapob@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://s28.postimg.org/3xj032znh/intern.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/vnwonah.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nwonah Vincent</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">talk2vinciii@hotmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10</h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.flos1-1.fna.fbcdn.net/v/t1.0-9/19430119_10207233462114696_2762007678831481972_n.jpg?oh=65fd73274def3af4a2c4da3615ba6067&oe=5A1E23F7); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/aniekan.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Grace Essien</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">hayley.essien94@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>



            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/trojan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Simeon Adegbola</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">adegbolasimeon@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/trojan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Michael Okoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">michael@okoh.co.uk</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">

                        <a href="http://hng.fun/profile/jhosuer.html">
                            <h3 class="p-card-title">Joshua Jumbo</h3>
                        </a>
                        <p class="p-card-description">jumbojoshua91@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                        </a>

                    </div>
                </div>
            </div>


            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://s3.postimg.org/ss3h5exf7/12274735_1230649710285633_2189770792182668981_n.jpg" ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/paulayuk.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Paul Ayuk</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">
                            ayukpaul1@gmail.com
                        </p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>

                    </div>

                </div>
            </div>
            <!--   Participant ends here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/uhexos/assets/img/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/uhexos">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Nwokorobia Ugochukwu</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">uhexos@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>

                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/simeon">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Simeon Adegbola</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">adegbolasimeon@gmail.com</p>
                        <!--Email-->

                    </div>
                </div>
            </div>


            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dmz79kgf0/image/upload/v1503167599/File_000_atsuop.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">

                        <a href="http://hng.fun/profile/lilbrizzeey">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Chukwuma David</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">lilbrizzeey97@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>



                    </div>

                </div>

            </div>
            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://s3.postimg.org/ss3h5exf7/12274735_1230649710285633_2189770792182668981_n.jpg" ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/paulayuk.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Paul Ayuk</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">
                            ayukpaul1@gmail.com
                        </p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>

                    </div>

                </div>
            </div>





            <!--  Paste above this and leave a few lines so the next person can see this -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/dclwbiwmf/image/upload/v1503221568/francis_ghcrup.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">

                        <a href="http://hng.fun/profile/alejandro.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Francis Benson</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">francisbnsn14@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <!--  Each Participants ends here  -->


            <!--  Participant starts here  -->
            <div class=" p-card ">
		    <div class="v-center ">
			<div class="p-card-photo " style="background-image: url(http://res.cloudinary.com/jsmyth/image/upload/v1503171603/IMG_20170819_203825_jsknvs.jpg);>>>>>>> 09be0cbaa7291469d81c7a1c4ca494d74c65fae1 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
			    <div class="p-card-info">
				<a href="http://hng.fun/profile/jsmyth.html">
				    <h3 class="p-card-title">Joe-smith Essang</h3>
				</a>
				<p class="p-card-description">joesmithessang@gmail.com</p>
			    </div>
			    <div class="p-team">
				<a href="#">
				    <h3 class="p-card-title"> Team 2 </h3>
				</a>
			    </div>
		    </div>
            </div>
            <!-- Participant ends here -->


            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/ichtrojan/image/upload/v1503355424/cha_tcsuue.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/trojan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Michael Okoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">michael@okoh.co.uk</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANpAAAAJDdlMzFiOWM4LTE0ZDEtNGE5Ny1iMGUxLTAwODJiMTlkYjc4Yw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/eniwokecornelius.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Eniwoke Cornelius</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">eniwokepdm@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 2 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/media/DHmJVfyW0AAN4u7.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/rogue.kvng.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Kingsley Ukeje</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">swissking009@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->




            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/894886569563303937/SDDv2YBT_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/kosychike.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Chike Ononye</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">kosyononye@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Paste above this and leave a few lines so the next person can see this -->

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/trojan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Michael Okoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">michael@okoh.co.uk</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/dolapobabs.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Babatunde Adedolapo</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">dolapob@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>

                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/simeon">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Simeon Adegbola</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">adegbolasimeon@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>

                    </div>
                </div>
            </div>

            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/trojan">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Michael Okoh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">michael@okoh.co.uk</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->



            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/dolapobabs.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Babatunde Adedolapo</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">dolapob@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.flos1-1.fna.fbcdn.net/v/t1.0-9/19430119_10207233462114696_2762007678831481972_n.jpg?oh=65fd73274def3af4a2c4da3615ba6067&oe=5A1E23F7); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/aniekan.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Grace Essien</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">hayley.essien94@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/7896429?v=4&s=460
                ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/ememobong_akpanekpo.html">

                            <h3 class="p-card-title">Ememobong Akpanekpo</h3>

                        </a>
                        <p class="p-card-description">emayoung95@gmail.com</p>

                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>

                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">

                        <a href="http://hng.fun/profile/simeon">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Simeon Adegbola</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">adegbolasimeon@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">


                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>

                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/xpED2gj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/pepps01.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Pepple Sunny</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">slpepple01@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 6 </h3>
                            <!--Team-->
                        </a>



                    </div>

                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.0-9/17626667_1304703359605988_8550045173239731599_n.jpg?oh=71d5449bed8089446acb4620e3e5425d&oe=5A25E345); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/shalomjohn">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Shalom John</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">johnprince58@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!--  Each Participants ends here  -->


            <!--  Each Participant starts here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/GxwSbib.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/oluwabukolatina">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Oluwabukola Tina</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">oluwabukolatina2015@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>



            <!--  Each Participants ends here  -->
            <!--  Each Participant starts here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/aizAwig.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/bogadeji">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Adeboga Abigail</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">bogadeji@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://i.imgur.com/rOUUAxc.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/akunne.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Akunne Obinna </h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">akunneobinna@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card" id="tody">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://github.com/to-dy/test/blob/master/exImg/tody1.jpg?raw=true); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/tody">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Tolu Yussuff</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">yussufftolu@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 4 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/24799435?v=4&u=0077181484ccb57df65a5c32ed0856893da23618&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/okwujoscelyn.html">
                            <h3 class="p-card-title">Okwu Joscelyn</h3>
                        </a>
                        <p class="p-card-description">ojk564@gmail.com</p>
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/22713293?v=4&u=b34b8416e286d7d1313581a15c68617728b351fd&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/fred">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Fredrick Mgbeoma</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">fmgbeoma@yahoo.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 7 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <!--  Each Participant starts here  -->

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://raw.githubusercontent.com/MofopeOjosh/hngintern-1/master/mofopeojosh.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/mofopeojosh">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Mofope Ojosh</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">mofopet@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 4 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <!--  Each Participants ends here  -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://scontent.flos8-1.fna.fbcdn.net/v/t1.0-9/16681646_1263674723725886_3249389777281568213_n.jpg?oh=8e916840484be65726588e247c6a4473&oe=5A2C13A6); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">


                        <a href="http://hng.fun/profile/tiwaloluu.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Ijaware Tiwaloluwa</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">ijawaretiwaloluwa@gmail.com</p>
                        <!--Email-->
                    </div>

                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 1 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://i.imgur.com/E2WmeiH.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/tonychuks7.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Anthony Nwaizuzu</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">tonychuks7@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 9 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url('https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/20842105_1148987211913011_7406302709112086834_n.jpg?oh=229243199555e5fe179ab7294eb8c132&oe=5A36047D'); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/stephenjude.html">
                            <a href="http://hng.fun/profile/stephenjude/index.html">
                                <!--Profile Link-->
                                <h3 class="p-card-title">Stephen Jude</h3>
                                <!--Profile Name-->
                            </a>
                            <p class="p-card-description">
                                stephenjudesuccess@gmail.com
                            </p>
                            <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 7 </h3>
                            <!--Team-->
                        </a>

                    </div>

                </div>

            </div>

        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url('https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/20842105_1148987211913011_7406302709112086834_n.jpg?oh=229243199555e5fe179ab7294eb8c132&oe=5A36047D'); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/oriechinedu.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">ORIE CHINEDU EMMANUEL</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        oriechinedu@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dawclpl72/image/upload/v1503193042/17990699_1024997334267990_1122698292874420187_n_1_hpc7ca.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/keswardpromise.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Somto Promise</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">keswardpromise@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://alabamustapha.files.wordpress.com/2017/08/me.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/alabamustapha.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Alaba Mustapha O.</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">alabamustapha@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://image.ibb.co/b1H445/pic.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/devayo">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Hameed Abdul-lateef</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">Hameedayomide@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://s20.postimg.org/bleryh20t/35w_Afqcf_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/johnotu.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">John Otu</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">johnne01@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 7 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/7896429?v=4&s=460
); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="https://github.com/hnginterns/hngfun/tree/master/profile/timicodes">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Tejumola David Timmy</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">timi@tarrotmall.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.0-9/17626667_1304703359605988_8550045173239731599_n.jpg?oh=71d5449bed8089446acb4620e3e5425d&oe=5A25E345); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">

                    <a href="http://hng.fun/profile/shalomjohn.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Shalom John</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">johnprince58@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 10 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/28959886?v=4&s=400
        ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="profile/kole_ibrahim/kole_ibrahim.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Kole-Ibrahim AbdulQudus</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">femi.highsky@gmail.cm</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/tella26.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">TELLA Babatunde</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">tellababatunde@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/899666444060942341/uKTEUbcF_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/jekayode">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Emmanuel Joseph</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">jekayode@live.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

<div class="p-card">
    <div class="v-center">
        <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
        <div class="p-card-info">


            <a href="http://hng.fun/profile/dolapobabs.html">
                <!--Profile Link-->
                <h3 class="p-card-title">Babatunde Adedolapo</h3>
                <!--Profile Name-->
            </a>
            <p class="p-card-description">dolapob@gmail.com</p>
            <!--Email-->
        </div>
        <div class="p-team">
		    <a href="#">
			<h3 class="p-card-title"> Team # </h3>
			<!--Team-->
		    </a>
		</div>
	    </div>
	</div>
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/jQznRbs.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/ify.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Ify Okoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">odibest1893@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participants ends here  -->



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/TAaP38Y.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/bosunski">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Olatunbosun Gabriel</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">bosunski@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/rexorioko/img/IMG_5345.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/rexorioko/rexorioko.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Rex Orioko</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">rexorioko@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/majiyd_profile/statics/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/majiyd.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Suleiman Abdulmajeed</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">suleimanmajiyd@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

<div class="p-card">
    <div class="v-center">
        <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
        <div class="p-card-info">
            <a href="http://hng.fun/profile/simeon">
                <!--Profile Link-->
                <h3 class="p-card-title">Simeon Adegbola</h3>
                <!--Profile Name-->
            </a>
            <p class="p-card-description">adegbolasimeon@gmail.com</p>
            <!--Email-->
        </div>
        <div class="p-team">
	    <a href="#">
		<h3 class="p-card-title"> Team # </h3>
		<!--Team-->
	    </a>
	</div>
    </div>
</div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/8acb616934); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/peterperez">
                        <h3 class="p-card-title">Peter Peregbakumo</h3>
                    </a>
                    <p class="p-card-description">perezpeter32@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://image.ibb.co/eYOe6k/olumide.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/holumiede.html">
                        <h3 class="p-card-title">Osideinde Oluwadara</h3>
                    </a>
                    <p class="p-card-description">osideindeo@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/plushdeveloper/image/upload/v1503153956/IMG_20170119_174852_589_qsoqaz.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="./profile/ogbeniore.html">
                        <h3 class="p-card-title">Ojo Oreoluwa</h3>
                    </a>
                    <p class="p-card-description">oreeboy@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                    </a>
                </div>
            </div>
        </div>


<div class="p-card">
    <div class="v-center">
        <div class="p-card-photo" style="background-image: url(https://scontent-waw1-1.xx.fbcdn.net/v/t1.0-9/17626667_1304703359605988_8550045173239731599_n.jpg?oh=71d5449bed8089446acb4620e3e5425d&oe=5A25E345); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
        <div class="p-card-info">

            <a href="http://hng.fun/profile/shalomjohn.html">
                <!--Profile Link-->
                <h3 class="p-card-title">Shalom John</h3>
                <!--Profile Name-->
            </a>
            <p class="p-card-description">johnprince58@gmail.com</p>
            <!--Email-->
        </div>
<div class="p-team">
                            <a href="#">
                                <h3 class="p-card-title"> Team # </h3>
                                <!--Team-->
                            </a>
                        </div>
                    </div>
                </div>

  
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6QBQ879C-1132012f9abf-1024); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/AkinloluGbemisola">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Akinlolu Gbemisola</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">akinlolugbemisola@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participants ends here  -->




        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/6526607?v=4&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/mathemandy.html">
                        <h3 class="p-card-title">Andy Eshiet</h3>
                    </a>
                    <p class="p-card-description">andyeshiet@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/28753220?v=4&u=a7b6ef189b8b5a577e22db6437c9a7860c6b1faf&s=400
); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/teegoldz.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">okunniga Tosin</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">Okunnigatosin@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->




        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRDw44BhHjka-ySW9YsGhiD40sWcISHEihLl0X40-7NLT83honDEA); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="#">
                        <h3 class="p-card-title">Abdulsamad Aliyu</h3>
                    </a>
                    <p class="p-card-description">jekayode@live.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/19400025_1678825485480605_5935130796102213218_n.jpg?_nc_eui2=v1%3AAeFizTefy6fRYrXkFIvq56vQUainzBQqUq9S9F_wbsm9lC4cL-HhpsU98WTDkA_qSpRZktUXr8mIs6HcPIrDoi4MxJWPRwBiHhcPDXjXtnsO7A&oh=e6743ad4a0e11a6e39568f27d41e2cd1&oe=5A380267); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/chiqokereke.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Chinanu Okereke</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">chiqokereke@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/dYFenOU.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/daniella.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Daniella Mato</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">dmpire2@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 10 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!-- Each participant starts here -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/g2IDvh4.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/ninte.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Usheninte Dangana</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">jrandangana@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 10 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!-- Each participant ends here -->


        <div class="p-card">


            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/6292486?v=4&u=e0f8b24571da3e3701296ba2df9e09b09cdb556b&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/nseetim.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nse-Abasi Etim</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">etimnseabasi@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 10 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos2-1.fna.fbcdn.net/v/t1.0-9/12042876_1052428558114186_1777675972793875780_n.jpg?_nc_eui2=v1%3AAeGAmf_Cy4z6PszN4lzDm7G_gENN9PL4Z9UmaSD4lUUxOkFEZISNDF0xiUuihStcur78EPEpatwoqHs_UKJgjEESqpS1UiLXUi2uhupKLzHv0w&oh=3d69de2b708de78b50f706b63048dfae&oe=5A133AC5); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
<<<<<<< HEAD
                    <a href="http://hng.fun/profile/alabamustapha.php">
=======


                    <a href="http://hng.fun/profile/Gabriel">
>>>>>>> 6f0a166b7af3c1d2a6677f8e8fbca2bea1b2ff54
                        <!--Profile Link-->
                        <h3 class="p-card-title">Gabriel Umoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">gmaumoh@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>



        <div class="p-card">

            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/861305946479493120/PsPxNeDd.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/samesidem.html">
                        <h3 class="p-card-title">Sam Esidem</h3>
                    </a>
                    <p class="p-card-description">samesidem@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/hngfun/image/upload/v1503323008/nsikakthompson_frztsd.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/nsikakthompson.html">
                        <h3 class="p-card-title">Nsikak Thompson</h3>
                    </a>
                    <p class="p-card-description">nsikakthompson73@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAXRAAAAJGQ5OWE3ZjQ3LTRjMGUtNDY2Ni1hMTliLWYxMDNkMGRlNjIyNw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/profchydon.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nkwocha Chidi</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">profchydon@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/d281829f39); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="#">
                        <h3 class="p-card-title">Kay Sagoe</h3>
                    </a>
                    <p class="p-card-description">ksagoe@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-1/p160x160/14657334_1259677607387062_8116538770825805178_n.jpg?oh=fd7eeb04eb8940e886b79c5b6354e74b&oe=5A277060); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/idee.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Idorenyin Obong</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">idee4ril@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>





        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://nicesale.com.ng/adigunhammedola.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/adigunhammedolalekan">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Adigun Hammed Olalekan</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">adigunadunfe@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2</h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/komsic/image/upload/v1503245344/komsic_pic.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="./profile/komsic.html">
                        <h3 class="p-card-title">KAYODE, Micheal O.</h3>
                    </a>
                    <p class="p-card-description">kayodemicheal159@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dmz79kgf0/image/upload/v1503167599/File_000_atsuop.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/lateefog.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Ogunbadejo Lateef</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">lateefogunbadejo@yahoo.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/efefregene/image/upload/v1503395521/fregs1_dbxrmb.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/efefregene.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Fregene Efe-Uririn</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">efe.glory@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/tobilight/image/upload/v1503321342/IMAG0082_fuubsp.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/tobilight">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Agunloye Oluwatobiloba Light</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">jgetitdonefast@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/teejay/image/upload/v1503393694/tunji_vqbldh.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/adetunjisalako">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Salako Adetunji Abdulhaq</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">adetunjisalako@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://3.bp.blogspot.com/-PiUY7625XM4/WP4AciXXW6I/AAAAAAAABX8/C04iRDTrGaMrspUkrYMzh7X53VjGhkF7gCEw/s1600/emem.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/emembrownson.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Emem Brownson</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">brownjee001@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/image/bluecard1992.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/bluecard1992.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">ECHE OKAFOR</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">bluecard1992@yahoo.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.cdninstagram.com/t51.2885-19/s150x150/17075777_1409128825798368_1636514859128455168_a.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/princessdee.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Damilola Omoyiwola</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">damomos123@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>




        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://i.imgur.com/zbiIbCI.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/greywhite">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Grey Stanley Oguazu</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">deareststanley@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>



        <div class="p-card">

            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.cdninstagram.com/t51.2885-19/s150x150/17075777_1409128825798368_1636514859128455168_a.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/princessdee">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Damilola Omoyiwola</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">damomos123@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://www.easywebsolutionz.com/images/essien-saviour.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/emembrownson.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Essien Saviour</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">eazywebcontact@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/dwtc5nlt5/image/upload/v1503345831/hng-profile/20160518_073958_3_kkaiu3.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/richyafro.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Richard Umoffia</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">richyafro@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/xpED2gj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/pepps01.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Pepple Sunny</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">slpepple01@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url('https://ca.slack-edge.com/T3QLSP8HM-U6QUTQT2T-6ffc54e0834d-512'); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/akindolietayo.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Akindolie Oluwatayo</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">akindolietayo@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4</h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/12105518?v=4&amp;s=75); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/prosperoking">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nweze Prosper</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        <span>dapon</span>extras<span>pp&#64;gm</span>ail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Participant starts here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos3-1.fna.fbcdn.net/v/t1.0-9/15726563_1602744799741089_7874891167110176521_n.jpg?_nc_eui2=v1%3AAeGjgHkyfA8TlzGoJijUu7eLx6w-aTJcdrhcCHndC0dSlkgVdzVtkAhYJ2cnRk8V97LGw6PwzKKqcJU8UyL_MKROvIqjJJMi8J5IEdEC0mDkUw&oh=d476efae2b6e618acbc7f482e92a58e4&oe=5A1A5557);
                 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/jhosuer.html">
                        <h3 class="p-card-title">Joshua Jumbo</h3>
                    </a>
                    <p class="p-card-description">jumbojoshua91@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/xpED2gj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">



                    <a href="http://hng.fun/profile/dolapobabs.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Babatunde Adedolapo</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">dolapob@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>

                </div>

            </div>

        </div>

        <!--  Each Participants ends here  -->

        <!-- Each Participant starts here -->
        <div class="p-card">

            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/12105518?v=4&amp;s=75); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/prosperoking">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nweze Prosper</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">

                    </p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participants ends here  -->

        <!--  Paste above this and leave a few lines so the next person can see this -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/ichtrojan/image/upload/v1503355424/cha_tcsuue.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/trojan">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Michael Okoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">michael@okoh.co.uk</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url('https://avatars0.githubusercontent.com/eephie'); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/ifychinke.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Chinke Ifeyinwa</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        chinkeifeyinwa@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>

                </div>

            </div>

        </div>


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(" https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANpAAAAJDdlMzFiOWM4LTE0ZDEtNGE5Ny1iMGUxLTAwODJiMTlkYjc4Yw.jpg
                    "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/eniwokecornelius.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Eniwoke Cornelius</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">eniwokepdm@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(" https://pbs.twimg.com/media/DHmJVfyW0AAN4u7.jpg "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/rogue.kvng.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Kingsley Ukeje</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">swissking009@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent-bru2-1.xx.fbcdn.net/v/t1.0-9/20799115_1464147813673356_6018227297707964205_n.jpg?oh=15616b771983c0b56484f9334cc2663e&oe=5A31ECCE); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/jonesky.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Joseph Michael Bassey</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">joseph.mbassey2@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>





        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/894886569563303937/SDDv2YBT_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/kosychike.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Chike Ononye</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">kosyononye@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/12105518?v=4&amp;s=75); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/prosperoking">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nweze Prosper</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">


                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>

                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos3-1.fna.fbcdn.net/v/t1.0-9/15726563_1602744799741089_7874891167110176521_n.jpg?_nc_eui2=v1%3AAeGjgHkyfA8TlzGoJijUu7eLx6w-aTJcdrhcCHndC0dSlkgVdzVtkAhYJ2cnRk8V97LGw6PwzKKqcJU8UyL_MKROvIqjJJMi8J5IEdEC0mDkUw&oh=d476efae2b6e618acbc7f482e92a58e4&oe=5A1A5557);
                 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/jhosuer.html">
                        <h3 class="p-card-title">Joshua Jumbo</h3>
                    </a>
                    <p class="p-card-description">jumbojoshua91@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>


        <!--   Participant ends here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/uhexos/assets/img/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/uhexos">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nwokorobia Ugochukwu</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">uhexos@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participants ends here  -->

        <!-- Participant starts here -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos3-1.fna.fbcdn.net/v/t1.0-9/15726563_1602744799741089_7874891167110176521_n.jpg?_nc_eui2=v1%3AAeGjgHkyfA8TlzGoJijUu7eLx6w-aTJcdrhcCHndC0dSlkgVdzVtkAhYJ2cnRk8V97LGw6PwzKKqcJU8UyL_MKROvIqjJJMi8J5IEdEC0mDkUw&oh=d476efae2b6e618acbc7f482e92a58e4&oe=5A1A5557);
                 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/jhosuer.html">
                        <h3 class="p-card-title">Joshua Jumbo</h3>
                    </a>
                    <p class="p-card-description">jumbojoshua91@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>

        <!--   Participant ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/uhexos/assets/img/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/uhexos">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nwokorobia Ugochukwu</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">uhexos@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 10 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <!--  Participant starts here  -->










        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/trojan">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Michael Okoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">michael@okoh.co.uk</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">

                    <a href="http://hng.fun/profile/jhosuer.html">
                        <h3 class="p-card-title">Joshua Jumbo</h3>
                    </a>
                    <p class="p-card-description">jumbojoshua91@gmail.com</p>

                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>

                </div>
            </div>
        </div>


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://s3.postimg.org/ss3h5exf7/12274735_1230649710285633_2189770792182668981_n.jpg" ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/paulayuk.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Paul Ayuk</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        ayukpaul1@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>

                </div>

            </div>
        </div>
        <!--   Participant ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/uhexos/assets/img/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/uhexos">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nwokorobia Ugochukwu</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">uhexos@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>

                </div>
            </div>
        </div>
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/simeon">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Simeon Adegbola</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">adegbolasimeon@gmail.com</p>
                    <!--Email-->

                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/lilbrizzeey/me.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">

                    <a href="http://hng.fun/profile/lilbrizzeey">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Chukwuma David</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">lilbrizzeey97@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>



                </div>

            </div>

        </div>
        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://s3.postimg.org/ss3h5exf7/12274735_1230649710285633_2189770792182668981_n.jpg" ); background-size: cover; background-repeat: no-repeat; background-position: center center;></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/paulayuk.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Paul Ayuk</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        ayukpaul1@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>

                </div>

            </div>
        </div>



        <!--  Paste above this and leave a few lines so the next person can see this -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://res.cloudinary.com/dclwbiwmf/image/upload/v1503221568/francis_ghcrup.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">

                    <a href="http://hng.fun/profile/alejandro.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Francis Benson</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">francisbnsn14@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->


        <!--  Participant starts here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/jsmyth/image/upload/v1503171603/IMG_20170819_203825_jsknvs.jpg);
                 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/jsmyth.html">
                        <h3 class="p-card-title">Joe-smith Essang</h3>
                    </a>
                    <p class="p-card-description">joesmithessang@gmail.com</p>
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                    </a>
                </div>
            </div>
        </div>

        <!--   Participant ends here  -->



        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/ichtrojan/image/upload/v1503355424/cha_tcsuue.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/trojan">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Michael Okoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">michael@okoh.co.uk</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(" https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAANpAAAAJDdlMzFiOWM4LTE0ZDEtNGE5Ny1iMGUxLTAwODJiMTlkYjc4Yw.jpg
                    "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/eniwokecornelius.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Eniwoke Cornelius</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">eniwokepdm@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(" https://avatars3.githubusercontent.com/u/24903349?v=4&u=99e547814677b11ee2d1e25c1f9e85191960ddb9&s=400
                    "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/auztincodes.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Okorie Ugochukwu</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">austinugo200@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(" https://pbs.twimg.com/media/DHmJVfyW0AAN4u7.jpg "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/rogue.kvng.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Kingsley Ukeje</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">swissking009@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/19642700_889129831235503_1943970847228754113_n.jpg?oh=46bab93a071ea158c537b30dfb9283ed&oe=5A2D29E6); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">

                    <a href="http://hng.fun/profile/jamesjay4199">
                        <!--Profile Link-->
                        <h3 class="p-card-title">James John James</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">jamesjay4199@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/894886569563303937/SDDv2YBT_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/kosychike.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Chike Ononye</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">kosyononye@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->


        <!--  Paste above this and leave a few lines so the next person can see this -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/trojan">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Michael Okoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">michael@okoh.co.uk</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/dolapobabs.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Babatunde Adedolapo</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">dolapob@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>

                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/simeon">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Simeon Adegbola</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">adegbolasimeon@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>

                </div>
            </div>
        </div>

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/30381435?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/trojan">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Michael Okoh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">michael@okoh.co.uk</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->



        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6Q4F9V0E-45a4b4ef6a53-512); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/dolapobabs.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Babatunde Adedolapo</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">dolapob@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 3 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos1-1.fna.fbcdn.net/v/t1.0-9/19430119_10207233462114696_2762007678831481972_n.jpg?oh=65fd73274def3af4a2c4da3615ba6067&oe=5A1E23F7); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/aniekan.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Grace Essien</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">hayley.essien94@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->


        <!--  Participant starts here  -->

	<div class="p-card">
	    <div class="v-center">
		<div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/jsmyth/image/upload/v1503171603/IMG_20170819_203825_jsknvs.jpg);
				 background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
		<div class="p-card-info">
			<a href="http://hng.fun/profile/jsmyth.html">
				<h3 class="p-card-title">Joe-smith Essang</h3>
			</a>
			<p class="p-card-description">joesmithessang@gmail.com</p>
		</div>
		<div class="p-team">
			<a href="#">
				<h3 class="p-card-title"> Team 2 </h3>
			</a>
		</div>
	      </div>
	  </div>

	<!--   Participant ends here  -->


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url( http://res.cloudinary.com/simeon/image/upload/v1503343973/17188537_a7xioi.jpg ); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">

                    <a href="http://hng.fun/profile/simeon">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Simeon Adegbola</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">adegbolasimeon@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">


                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>

                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/xpED2gj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/pepps01.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Pepple Sunny</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">slpepple01@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>



                </div>

            </div>

        </div>

        <!--  Each Participants ends here  -->


        <!--  Each Participant starts here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/GxwSbib.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/oluwabukolatina">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Oluwabukola Tina</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">oluwabukolatina2015@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>



        <!--  Each Participants ends here  -->
        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/aizAwig.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/bogadeji">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Adeboga Abigail</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">bogadeji@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://i.imgur.com/rOUUAxc.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/akunne.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Akunne Obinna </h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">akunneobinna@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/7896429?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/ememobong_akpanekpo.html">

                        <h3 class="p-card-title">Ememobong Akpanekpo</h3>

                    </a>
                    <p class="p-card-description">emayoung95@gmail.com</p>

                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>

                    </a>
                </div>
            </div>
        </div>

        <div class="p-card" id="tody">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://github.com/to-dy/test/blob/master/exImg/tody1.jpg?raw=true); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/tody">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Tolu Yussuff</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">yussufftolu@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>






        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/24799435?v=4&u=0077181484ccb57df65a5c32ed0856893da23618&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/okwujoscelyn.html">
                        <h3 class="p-card-title">Okwu Joscelyn</h3>
                    </a>
                    <p class="p-card-description">ojk564@gmail.com</p>
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/22713293?v=4&u=b34b8416e286d7d1313581a15c68617728b351fd&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/fred">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Fredrick Mgbeoma</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">fmgbeoma@yahoo.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 7 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participant starts here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://raw.githubusercontent.com/MofopeOjosh/hngintern-1/master/mofopeojosh.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/mofopeojosh">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Mofope Ojosh</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">mofopet@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars0.githubusercontent.com/u/31125005?v=4&u=7b7332e7d6f7e29d8c952920f9c62ff34271d346&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/willade">
                        <!--Profile Link-->
                        <h3 class="p-card-title">William Adetunji</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">williamadetunji@yahoo.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 7 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://www.filetolink.com/a272404edc); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/omokolataiwo/">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Taiwo Kolawole</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">omokolataiwo@yandex.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://scontent.flos8-1.fna.fbcdn.net/v/t1.0-9/16681646_1263674723725886_3249389777281568213_n.jpg?oh=8e916840484be65726588e247c6a4473&oe=5A2C13A6); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/tiwaloluu.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Ijaware Tiwaloluwa</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">ijawaretiwaloluwa@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://github.com/hnginterns/hngfun/blob/master/profile/shield/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/shield/profile.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Otuekong Shield</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">myshield02@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 6 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/899349569594691584/4jkl1p___400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hngfun/profile/Mfoni.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Mfoniso Umana</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">itozabu@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 7 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/tobiagbola/tobiagbola.fw.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/tobiagbola.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Agbola Iseoluwatobi</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">tobiagbola@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 10 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://ca.slack-edge.com/T3QLSP8HM-U6PCU4RLL-4cfabf1b27eb-1024); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/hdaarme.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Hogan Jerry</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        damilolajerryhd@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>

                </div>

            </div>

        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url('https://avatars1.githubusercontent.com/u/25458159?v=4&s=460'); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/shemzz.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Shemang David Joshua</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        davidshemang@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 2 </h3>
                        <!--Team-->
                    </a>
                </div>

            </div>

        </div>
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://media.licdn.com/mpr/mpr/shrinknp_200_200/AAEAAQAAAAAAAAXRAAAAJGQ5OWE3ZjQ3LTRjMGUtNDY2Ni1hMTliLWYxMDNkMGRlNjIyNw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/dxelpraise.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">David Umoren</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">dxelpraise@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->



        <!-- Each Participant starts here -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/899666444060942341/uKTEUbcF_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/wizzydayo/">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Wisdom Anthony Alphonsus</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">wizitendo10@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->

                    </a>
                </div>
            </div>
        </div>
        <!-- Each Participants ends here -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/17924533?v=4&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center;"></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/vicklight93.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nwauwa Victor Ifeanyi</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">
                        victor.nwauwa93@gmail.com
                    </p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>

                </div>

            </div>
        </div>
        <!-- Thadeus' profile -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://hng.fun/profile/thadeus/files/profile.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">


                    <a href="http://hng.fun/profile/thadeus/thadeus.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Ajayi Thadeus</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">ainojie@gmail.com</p>
                    <!--Email-->
                </div>

                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 1 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>


        <!--  Each Participants ends here  -->

        <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(" http://www.filetolink.com/2bb31cbb1f "); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/controltam.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Trust Akpobome</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">controltam90@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 4 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

        <!--  Each Participants ends here  -->

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/22813358?v=4); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/samasi.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Benson Samasi</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">bensonsamasi@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 5 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/17924533?v=4&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/vicklight93.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Victor Nwauwa</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">victor.nwauwa93@gmail.com</p>
                    <!--Email-->
                </div>
            </div>
		<div class="p-team">
                            <a href="#">
                                <h3 class="p-card-title"> Team 8 </h3>
                                <!--Team-->
                            </a>
                        </div>
                    </div>

            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/31213866?v=4&u=c66db4d8d0eb14ff46f4f579ef8a938d6bb4a291&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/philip.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Philip Akpeki</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">philipakpeki@gmail.com</p>
                        <!--Email-->
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 8 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>

        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/31213866?v=4&u=c66db4d8d0eb14ff46f4f579ef8a938d6bb4a291&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/philip.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Philip Akpeki</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">philipakpeki@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 8 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>

        <!--  Each Participant starts here  -->
        <div class="pcard">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars0.githubusercontent.com/u/20032269?v=4&u=7f280c930a24fd8e45877e3a4a78181e04acd426&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/achowba.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Atauba Prince M.</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">princeatauba@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  Each Participants ends here  -->

    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://scontent.flos8-1.fna.fbcdn.net/v/t1.0-9/16681646_1263674723725886_3249389777281568213_n.jpg?oh=8e916840484be65726588e247c6a4473&oe=5A2C13A6); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">


                <a href="http://hng.fun/profile/tiwaloluu.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Ijaware Tiwaloluwa</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">ijawaretiwaloluwa@gmail.com</p>
                <!--Email-->
            </div>

            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 1 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>


<div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(http://i.imgur.com/aizAwig.png); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/bogadeji">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Adeboga Abigail</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">bogadeji@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <h3 class="p-card-title"> Team 9 </h3>
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
    <!--  Each Participants ends here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://avatars1.githubusercontent.com/u/22813358?v=4); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/samasi.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Benson Samasi</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">bensonsamasi@gmail.com</p>
                <!--Email-->
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 5 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>

    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/17924533?v=4&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/vicklight93.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Victor Nwauwa</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">victor.nwauwa93@gmail.com</p>
                <!--Email-->
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 5 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://avatars0.githubusercontent.com/u/20032269?v=4&u=7f280c930a24fd8e45877e3a4a78181e04acd426&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/achowba.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Atauba Prince M.</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">princeatauba@gmail.com</p>
                <!--Email-->
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 9 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
                
    <!--  Each Participant starts here  -->
        <div class="p-card">
            <div class="v-center">
                <div class="p-card-photo" style="background-image: url(https://avatars0.githubusercontent.com/u/17691634?v=4&s=460); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                <div class="p-card-info">
                    <a href="http://hng.fun/profile/emekys3/emekys3.html">
                        <!--Profile Link-->
                        <h3 class="p-card-title">Nwadike Chikezie</h3>
                        <!--Profile Name-->
                    </a>
                    <p class="p-card-description">emekys3@gmail.com</p>
                    <!--Email-->
                </div>
                <div class="p-team">
                    <a href="#">
                        <!--Team-->
                    </a>
                </div>
            </div>
        </div>
        <!--  emekys3's profile  -->

    <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://avatars0.githubusercontent.com/u/26293878?v=4&u=c8f4ec102fda331da7c707630ecfcee486dc9621&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/emeecodes">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Emmanuel Promise Ozibo</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">emmanuel020forreal@gmail.com</p>
                <!--Email-->
				
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 2 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
		    <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://avatars2.githubusercontent.com/u/20817997?v=4&u=e6754af043eaac57a75625df32e8845a64d00dc3&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/kayode.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Kayode Emmanuel</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">ekayode700@gmail.com</p>
                <!--Email-->
				
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 6 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
    <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(https://avatars3.githubusercontent.com/u/13226416?v=4&u=d40df71791764ddf3d7d34dac22e3915ad3b330d&s=400); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/alabujadaniel.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Alabuja Daniel</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">alabujadaniel@gmail.com</p>
                <!--Email-->
                
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 10 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
	
	 <!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/raychelle-i/image/upload/v1503157334/IMG-20161126-WA0003-1-1_lyjyzj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/rachaeliwelunmor.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Rachael Iwelunmor</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">rachaeliwelunmor@yahoo.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team 8 </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->

<!--  Each Participant starts here  -->
                        <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/raychelle-i/image/upload/v1503157334/IMG-20161126-WA0003-1-1_lyjyzj.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/olekakamsi.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Kamsi Oleka</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">olekakamsy@gmail.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team-motivation </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->
						
						<!-- Each participant starts here -->
                <div class="p-card">
                            <div class="v-center">
                                <div class="p-card-photo" style="background-image: url(https://scontent-lht6-1.xx.fbcdn.net/v/t1.0-9/68974_10152436318932507_4812031675029555855_n.jpg?oh=8fbedbcfe40fd0b090fc154f0e3758c2&oe=5A187A17); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                                <div class="p-card-info">
                                    <a href="http://hng.fun/profile/ObinnaWalker.html">
                                        <!--Profile Link-->
                                        <h3 class="p-card-title">Obinna Walker</h3>
                                        <!--Profile Name-->
                                    </a>
                                    <p class="p-card-description">obinnawalker@gmail.com</p>
                                    <!--Email-->
                                </div>
                                <div class="p-team">
                                    <a href="#">
                                        <h3 class="p-card-title"> Team-motivation </h3>
                                        <!--Team-->
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!--  Each Participants ends here  -->

<div class="p-card">
    <div class="v-center">
        <div class="p-card-photo" style="background-image: url(https://pbs.twimg.com/profile_images/899004493077110785/OTWtix1k_400x400.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
        <div class="p-card-info">
            <a href="http://hng.fun/profile/shakirah.html">
                              <!--Profile Link-->
                              <h3 class="p-card-title">Usman Sakirat Kehinde</h3>
                              <!--Profile Name-->
                          </a>
                          <p class="p-card-description">kennyoyinkansola@gmail.com</p>
                          <!--Email-->

        </div>


    </div>
</div>
                
                <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dikethelma/image/upload/v1503494405/profile_rpbema.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/dikethelmak.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Dike Thelma Kelechi</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">dikethelma55@gmail.com</p>
                <!--Email-->
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 8 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
	
	<!-- Each participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://bit.ly/2vbGpkH); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/handsome9ice.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Keresifon Ekpo</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">keresifon.ekpo@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team-Motivation </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!-- Each participant ends here -->

<!-- Each participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/imani/image/upload/v1503333886/Hm02qoRY_n9k714.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/imani.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Tolu Faith</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">bee_moi@zoho.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!-- Each participant ends here -->
		    
	<!-- Each participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(https://preview.ibb.co/iemRnQ/17818821_137576633442881_8017641658780745728_n.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/peter.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Peter Abu-Ekpeshie</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">peterogh94@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 10 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!-- Each participant ends here -->
		    
		    <!-- Each participant starts here -->
            <div class="p-card">
                <div class="v-center">
                    <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/imani/image/upload/v1503327986/IMG_20170421_091759_317_lkbxl1.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
                    <div class="p-card-info">
                        <a href="http://hng.fun/profile/ridwan.html">
                            <!--Profile Link-->
                            <h3 class="p-card-title">Lasisi Tosin</h3>
                            <!--Profile Name-->
                        </a>
                        <p class="p-card-description">thosynlasisi@gmail.com</p>
                    </div>
                    <div class="p-team">
                        <a href="#">
                            <h3 class="p-card-title"> Team 3 </h3>
                            <!--Team-->
                        </a>
                    </div>
                </div>
            </div>
            <!-- Each participant ends here -->

             <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dcvk975c9/image/upload/v1503493619/IMG_20170821_174248_569_wrw4dw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/my_prof.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Nsenam Udoh</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">nsenamudoh@gmail.com</p>
                <!--Email-->
                
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 6 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
	
	 <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dcvk975c9/image/upload/v1503493619/IMG_20170821_174248_569_wrw4dw.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://hng.fun/profile/my_prof.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Nsenam Udoh</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">nsenamudoh@gmail.com</p>
                <!--Email-->
                
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title"> Team 6 </h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->
		    
 <!--  Each Participant starts here  -->
    <div class="p-card">
        <div class="v-center">
            <div class="p-card-photo" style="background-image: url(http://res.cloudinary.com/dqcu2xgkg/image/upload/c_fill,r_18,w_54/v1503485524/Sheriff_dws6rv.jpg); background-size: cover; background-repeat: no-repeat; background-position: center center; "></div>
            <div class="p-card-info">
                <a href="http://http://hng.fun/profile/SheriffSanni/index.html">
                    <!--Profile Link-->
                    <h3 class="p-card-title">Sheriff Sanni</h3>
                    <!--Profile Name-->
                </a>
                <p class="p-card-description">sheriffdeensanni@gmail.com</p>
                <!--Email-->
                
            </div>
            <div class="p-team">
                <a href="#">
                    <h3 class="p-card-title">Team-Inspiration</h3>
                    <!--Team-->
                </a>
            </div>
        </div>
    </div>
    <!--  Each Participants ends here  -->



        </div>

<?php include "footer.php"?>

