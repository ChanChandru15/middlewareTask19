<html>
    <head>
        <style>

* {
    margin: 0;
    padding: 0;
}
body {
    background-color: #000;
}
.fly-in-text {
    list-style: none;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
}
.fly-in-text li{
    display: inline-block;
    margin-right: 30px;
    font-weight: 300;
    font-size: 4em;
    color: #fff;
    opacity: 1;
    transition: all 2.5s ease;
    font-family: 'Eater', cursive;
}
.fly-in-text li:last-child {
    margin-right: 0;
}

.fly-in-text li.hiddeen:nth-child(1){ transform: translateX(-200px) translateY(-200px); }
.fly-in-text li.hiddeen:nth-child(2){ transform: translateX(20px) translateY(100px); }
.fly-in-text li.hiddeen:nth-child(3){ transform: translateX(-150px) translateY(-80px); }
.fly-in-text li.hiddeen:nth-child(4){ transform: translateX(10px) translateY(-200px); }
.fly-in-text li.hiddeen:nth-child(5){ transform: translateX(-300px) translateY(200px); }
.fly-in-text li.hiddeen:nth-child(6){ transform: translateX(20px) translateY(-20px); }
.fly-in-text li.hiddeen:nth-child(7){ transform: translateX(30px) translateY(200px); }

        </style>
    </head>
    <body>

        <ul class="fly-in-text">
            <li class="hiddeen">W</li>
            <li class="hiddeen">E</li>
            <li class="hiddeen">L</li>
            <li class="hiddeen">C</li>
            <li class="hiddeen">O</li>
            <li class="hiddeen">M</li>
            <li class="hiddeen">E</li>
        </ul>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
    'use strict';

    var texxt = $('ul li');
    texxt.removeClass('hiddeen');

});
    </script>
</html>
