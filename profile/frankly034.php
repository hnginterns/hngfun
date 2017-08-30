<!doctype html>

<html>

    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Profile</title>
        <style type="text/css">
            *{
                padding: 0;
                margin: 0;
                font-family: Georgia;

            }
            .wrapper{
                /*padding: 0 25px;*/
                color: #444;
            }
            
            .column{
                float: center;
                width:46%;
                padding: 15px;
                margin: 0px auto;
            }

            

            .clearfix:after{
                clear: both;
                content: "";
                display: table;
            }
            
            section h2, section h4, h1{
                text-align: center;
            }
            header{
                padding: 30px;
                border-bottom: solid 2px #428bca;
                /*margin-bottom: 15px;*/
                background-color:#62757f;
                color: white;
            }

            footer{
                padding: 30px;
                border-top: solid 2px #428bca;
                /*margin-top: 15px;*/
                text-align: center;
                font-size: 1.2em;
            }
            .photo {
                padding: 5px;
                border-radius: 5px;
                border: 1px solid grey;
                display: block;
                margin: auto;
                
            }

            #overview, article div p{
                padding: 15px;
                text-align: justify;
                font-size: 1.2em;
                line-height: 1.5;
            }

            article{
                background-color: #c1d5e0;
            }
            article div p{
                padding: 0 0 10px;
                font-style: italic;
            }

            article div h2{
                padding: 0 0 10px;
            }
            footer{
                background-color: #90a4ae;
            }
            footer img{
                width: 25px;
                height: auto;
            }
            footer ul{
                list-style: none;

            }

            footer ul li{
                display: inline-block;
                width: auto;
                margin: 10px;
                vertical-align: center;
            }

        </style>

    </head>

    <body>
        <div class='wrapper'>
            <header>
                <h1>My Profile</h1>
            </header>
            <article class='colCenter'>
                <div class='clearfix'>
                    <section class='column '>
                        <div>
                            <img src="frankly034.jpg" class='photo'>
                            <h2>Franklyn UGEGE</h2>
                            <h4>Php Developer</h4>
                        </div>
                        <div>
                            <p id='overview'>Hi, my name is Franlyn Ugege, I have experience developing real world management systems using HTML, CSS, Javascript, MySQL and PHP. My projects are based on OO PHP5 with some other technologies like bootstrap3, Jquery, AJAX and JSON.</p>
                        </div>                    
                    </section>
                </div>
            </article>
            <footer class='clearfix'>
                <ul>
                    <li></li>&copy; 2017 Frankly034</li>
                </ul>
            </footer>
        </div>      
    </body>

</html>