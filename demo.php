<html>
    <head>
        <title>Student form</title>
        <link rel="stylesheet" href="democss.css">
    </head>
<body>
    <div class="formdesign"> 
        <form id="registration" method="post" action="insert.php">
            <input type="text" name="fname" id="button" placeholder="Enter your full name"><br><br>
            <input type="text" name="reason" id="button" placeholder="Reason to go outside"><br><br>
            <input type="text" name="address" id="button" placeholder="Where to go"><br><br>
            <select id="stream" name="stream">
                <option>B.Tech</option>
                <option>Optometry</option>
                <option>MLT</option>
                <option>Banking</option>
                <option>Nursing</option>
            </select><br><br>
            <div id="inout">Enter Out-time:</div>
            <input type="datetime-local" name="outtime"min="2014-01-01" max="2020-01-01" id="time"><br><br>
            <div id="inout">Enter In-time:</div>
            <input type="datetime-local" name="intime" min="2014-01-01" max="2020-01-01" id="time"><br><br>
            <select id="ph">
                <option>+91</option>
                <option>+92</option>
                <option>+93</option>
            </select>
            <input type="number" name="phone"  id="phone" placeholder="Enter your number"><br><br>
            <input type="radio" name="gender" value="Male" id="rd"><span id="but">Male</span><input type="radio" value="Female" name="gender" id="rd"><span id="but">Female</span><br><br>
            <input type="submit" id="butt" value="Register">           
        </form>
    </div>
</body>
</html>