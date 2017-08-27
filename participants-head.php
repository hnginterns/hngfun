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