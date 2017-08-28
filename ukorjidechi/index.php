<?php
/**
 * Created with PhpStorm by proctor.
 * @author Ukor Jidechi Ekundayo << http://ukorjidechi.com || ukorjidechi@gmail.com>>.
 * Date: 8/20/17
 * Time: 8:35 AM
 */

require __DIR__."/config.php";
$u = (new \hngfun\profile\ukorjidechi\config())->user();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $u['title']; ?></title>
    <style>
        /* default state */
        .state-indicator {
            position: absolute;
            top: -999em;
            left: -999em;

            z-index: 1;
        }
        .wrapper{
            padding-left: 70px;
            padding-right: 70px;
            padding-top: 10px;
            padding-bottom: 10px;
            margin: 10px 200px 10px 200px;
        }

        /* small desktop */
        @media all and (max-width: 1200px) {
            .state-indicator {
                z-index: 2;
            }
            .wrapper{
                padding-left: 70px;
                padding-right: 70px;
                padding-top: 10px;
                padding-bottom: 10px;
                margin: 10px 200px 10px 200px;
            }
        }

        /* tablet */
        @media all and (max-width: 1024px) {
            .state-indicator {
                z-index: 3;
            }
            .wrapper{
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 2px;
                padding-bottom: 2px;
                margin: 5px 20px 5px 20px;
            }
        }

        /* mobile phone */
        @media all and (max-width: 768px) {
            .state-indicator {
                z-index: 4;
            }
            .wrapper{
                padding-left: 5px;
                padding-right: 5px;
                padding-top: 2px;
                padding-bottom: 2px;
                margin: 5px 20px 5px 20px;
            }
        }
    </style>
</head>
<body>
<div class="wrapper" style=" " >
    <div style="z-index: 1;">
        <div>
            <img style="height: 350px; width: 350px" src="asset/myPic.jpg">
        </div>
        <div>
            <h3>
                <?php echo $u['full_name']; ?>
            </h3>
        </div>
        <div>
            <?php echo $u['social']; ?>
        </div>
    </div>
    <div>
        <?php echo $u['about']; ?>
    </div>
    <div>
        <?php echo $u['result']['stage_1']; ?>
    </div>
</div>

</body>
</html>
