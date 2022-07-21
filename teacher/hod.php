<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOD</title>
    <link rel="stylesheet" href="assets/css/hod.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
                .container {
          display: flex;
          justify-content: center;
          align-items: center;
        }
    </style>
</head>
<body>
    <header>

    </header>
    <section>
        <div></div>
        <div class='admin_content'>
            <div class='side_bar_hod'>
                <div class='img_hod'>
                    <h4>$name</h4>
                    <img src="assets/images/profile.jpg" alt="......">
                </div>
                <hr>
                <div><h4>dashboard</h4></div>
                <div><h4><a href="#one">one</a></h4></div>
                <hr>
                <div><p><ul><li><p>pages</p></li></ul></p></div>
                <hr>
                <div><h4>Settings</h4></div>
                <hr>
                <div><h4>About</h4></div>
                <hr>
            </div>
            <div class='content_container'>
                <div><div class="container">
<canvas width="200" height="200"></canvas>
</div></div>
                <hr>
                <div><p>two</p></div>
                <hr>
                <div>
                    <div id="one">

                        Something

                    </div>
                </div>
                <hr>
            </div>
        </div>
    </section>
    
    
<script>
    let ctx = document.querySelector("canvas").getContext("2d");

    const results = [
        {mood: "Angry", total: 1499, shade: "#0a9627"},
        {mood: "Happy", total: 478, shade: "#960A2C"},
        {mood: "Melancholic", total:332, shade: "#332E2E"},
        {mood: "Gloomy", total: 195, shade: "#F73809"}
    ];

    let sum = 0;
    let totalNumberOfPeople = results.reduce((sum, {total}) => sum + total, 0);
    let currentAngle = 0;

    for (let moodValue of results) {
        //calculating the angle the slice (portion) will take in the chart
        let portionAngle = (moodValue.total / totalNumberOfPeople) * 2 * Math.PI;
        //drawing an arc and a line to the center to differentiate the slice from the rest
        ctx.beginPath();
        ctx.arc(100, 100, 100, currentAngle, currentAngle + portionAngle);
        currentAngle += portionAngle;
        ctx.lineTo(100, 100);
        //filling the slices with the corresponding mood's color
        ctx.fillStyle = moodValue.shade;
        ctx.fill();
    }

</script>
</body>
</html>