<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>蔡徐坤打篮球</title>
    <link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="/layx/layx.min.css">
	<script src="/layx/layx.min.js"></script>
</head>

<body>
    <script>
        <?php
include("../score_inc_oj.php");
?>
        </script>
    <div id="contentdiv">
        <div id="startdiv">
            <button onclick="begin()" style="display:none">开始游戏</button>
        </div>
        <div id="maindiv">
            <div id="scorediv">
                <label>分数：</label>
                <label id="label">0</label>
            </div>
            <div id="suspenddiv">
                <button>继续</button><br />
                <button>重新开始</button><br />
                <button>回到主页</button>
            </div>
            <div id="enddiv">
                <p class="plantext">蔡徐坤 你的球掉了</p>
                <p id="planscore">0</p>
                <div><button onclick="jixu()">继续</button></div>
            </div>
        </div>
    </div>

    <section>
        <audio id="sound-kill" src="sound/shot.mp3"></audio>
        <audio id="sound-gameover" src="sound/gameover.mp3"></audio>
    </section>

    <script src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>