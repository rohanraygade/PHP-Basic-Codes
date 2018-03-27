<HTML>
<HEAD>
    <TITLE><center>Assignment 1 - My First Web Page</center></TITLE>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td {
            padding: 5px;
            text-align: left;
        }
    </style>
</HEAD>

<BODY>
<H1><center>My First Web Page</center></H1>
<H2><center>My Name is Rohan Raygade</center></H2>
<H3><center><a href=" https://www.linkedin.com/in/rohanraygade"</center> https://www.linkedin.com/in/rohanraygade </a></H3>
<center><img src="rohan1.jpg" alt="error" height="100" width="100"></center>
<P> <ul> <li> Hello,Myself Rohan Raygade pursing MS in Computer Science from Pace University.</li>
    <li> I have completed Undergrad Studies back in India at University of Pune. I also have experience working with Tieto (MNC from Finland) as a Software Engineer for Web Development. I have hands on
        experiance in asp.net, C#, MSSQL, Java. Here from this class i am expecting to learn and enhace my skill in front end development and Database design
        with relation to Web Development. </li></ul>


<div style="width:35% ; float: left">
    <H3><left>GET Method</left></H3>
    <form name="index" action="get.php" method="get">
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        Address:<br>
        <input type="text" name="address"><br>
        Date:<br>
        <input type="date" name="date"><br>

        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>


        Highest Education:<br>
        <input type="checkbox" name="education" value="MS" checked> MS<br>
        <input type="checkbox" name="education" value="BS" > BS<br>
        <input type="checkbox" name="education" value="BA" > BA<br>
        <input type="submit" value="Submit">

    </form>
</div>


<div style="width:65% ; float: right">
    <H3><left>POST Method</left></H3>
    <form name="index" action="post.php" method="post">
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        Address:<br>
        <input type="text" name="address"><br>
        Date:<br>
        <input type="date" name="date"><br>

        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>


        Highest Education:<br>
        <input type="checkbox" name="education" value="MS" checked> MS<br>
        <input type="checkbox" name="education" value="BS" > BS<br>
        <input type="checkbox" name="education" value="BA" > BA<br>
        <input type="submit" value="Submit">

    </form>
</div>
</centre>



</BODY>
</HTML>