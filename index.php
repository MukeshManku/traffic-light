<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signal Lights</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h3 style="margin-right: 25px;";>A</h3>
        <div id="A" class="signal red"></div>
        <input type="text" id="seqA" class="input-box" placeholder="Enter the value" required>
    </div>
    <div class="container">
    <h3 style="margin-right: 25px;";>B</h3>
        <div id="B" class="signal red"></div>
        <input type="text" id="seqB" class="input-box" placeholder="Enter the value" required>
    </div>
    <div class="container">
    <h3 style="margin-right: 25px;";>C</h3>
        <div id="C" class="signal red"></div>
        <input type="text" id="seqC" class="input-box" placeholder="Enter the value" required>
    </div>
    <div class="container">
    <h3 style="margin-right: 25px;";>D</h3>
        <div id="D" class="signal red"></div>
        <input type="text" id="seqD" class="input-box" placeholder="Enter the value" required>
    </div>
    <div class="container">
        <label>Green Interval (seconds):</label>
        <input type="text" id="greenInterval" class="input-box" placeholder="Enter the value" required>
    </div>
    <div class="container">
        <label>Yellow Interval (seconds):</label>
        <input type="text" id="yellowInterval" class="input-box" placeholder="Enter the value" required>
    </div>
    <div class="container">
        <button onclick="startSignal()" class="btn1">Start</button>
        <button onclick="stopSignal()" class="btn2">Stop</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
