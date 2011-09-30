<?php

?>
<html>
<head>
    <title>Test X3d</title>
    <link rel="stylesheet" type="text/css" href="x3dom-v1.2.css"/>
    <script type="text/javascript" src="x3dom-v1.2.js"></script>
    <style>
        #x3dDIV{
            width: 100%;
            height: 80%;
            background:#000;
            background-size: 100%;
            
        }
    </style>
</head>
<body>
<x3d id="x3dDIV">
    <scene>
        <inline url='spaceship.x3d' ></inline>
    </scene>
</x3d>    
</body>
</html>
