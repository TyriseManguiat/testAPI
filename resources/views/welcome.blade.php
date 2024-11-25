<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio Sample Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT6EWExOngsV72ttzNfFoaOapmY81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="MADE TOMY Regular_PERSONAL USE.otf">
    <link rel="stylesheet" href="MADE TOMY Regular_PERSONAL USE.ttf">
    <link rel="stylesheet" href="MADE TOMY Bold_PERSONAL USE.otf">
    <link rel="stylesheet" href="MADE TOMY Bold_PERSONAL USE.ttf">
</head>
<style>
    body {
        display: flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        position: relative;
        background-image: url('https://i.pinimg.com/originals/52/9c/49/529c49e9164d33dd37bdc658d9a807f5.gif');
        font-family: 'MADE TOMMY Regular_PERSONAL USE', sans-serif;
    }

    body::before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: -1;
    }

    h1 {
        font-family: 'MADE TOMMY Bold_PERSONAL USE', sans-serif;
    }

    .navbar {
        background-color: rgba(0, 0, 0, 0.5);
    }

    .nav-link,
    .navbar-brand {
        color: #75422D;
        cursor: pointer;
        font-size: 35px;
        font-weight: bold;
        width: 100px;
        height: 75px;
    }

    .nav-item {
        display: inline-block;
        /* Change to inline-block for side by side */
        margin-right: 20px;
        /* Adjusted margin for spacing */
    }

    .nav-link {
        margin-right: 1em !important;
        margin-left: 20px;
        justify-content: center !important;
        font-size: 30px;
    }

    .nav-link:hover {
        color: #441916;
    }

    .navbar-collapse {
        justify-content: center;
    }

    .header {
        background-size: cover;
        background-position: center center;
        justify-content: center !important;
        display: flex;
        align-items: center !important;
        padding: 100px;
        overflow: hidden;
    }

    .rounded-image {
        width: 200%;
        height: auto;
        display: block;
    }

    .rounded-image-container {
        overflow: hidden;
        border-radius: 50%;
        width: 400px;
        height: 400px;
    }

    .rounded-image-container img {
        width: 100%;
        height: auto;
        display: block;
    }


    .social-icons {
        text-align: center;
        margin-top: -40px;
        z-index: 1;
    }

    .social-icons a {
        display: inline-block;
        margin: 10px;
        text-decoration: none;
        color: #333;
    }

    .social-icons img {
        width: 60px;
        height: 60px;
        transition: transform 0.2s;
    }

    .social-icons img:hover {
        transform: scale(1.2);
    }

    #portfolio {
        width: fit-content;
    }

    #about {
        margin: 120px;
    }

    #about p {
        color: #fff;
    }

    .description {
        color: #a09f87;
        font-weight: bolder;
    }

    .feature-title {
        color: #75422D;
        font-family: sans-serif;
        font-weight: bolder;
        font-size: 50px;
        font-weight: bold;
        margin-bottom: 20px;
        text-transform: uppercase;
    }

    .subject-table {
        width: 100%;
        margin-top: 30px;
        text-align: center;
    }

    .subject-table th,
    .subject-table td {
        padding: 15px;
        font-size: 20px;
        color: #fff;
        border: 1px solid #fff;
    }

    .subject-table th {
        background-color: rgba(0, 0, 0, 0.54);
    }

    .subject-table td {
        background-color: rgba(0, 0, 0, 0.54);
    }

    .page-footer {
        background-color: #222;
        color: #ccc;
        margin-top: auto;
        padding: 60px 0 30px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-md">
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item project-link">
                    <a class="nav-link" href="#subjects">Subjects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="description" style="text-align: center;">
        <h1 style="font-size: 80px;">ISAIAH I. CONCEPCION</h1>
        <p>HELLO EVERYONE MY NAME IS ISAIAH I. CONCEPCION, I'M 20 YEARS OLD 3RD YR COLLEGE AND MY MOTTO IN LIFE IS "LIFE
            IS SHORT, MAKE IT SHORTER."</p>
    </div>

    <div class="headerdiv">
        <header class="page-header header container-fluid">
            <div class="header-content">
                <div class="rounded-image-container">
                    <img src="https://scontent-mnl1-1.xx.fbcdn.net/v/t39.30808-6/336542319_1404585900360186_2805137522077692771_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeHjZQEQaFSHfJfThg7r4BZVJoQQYhw0NdEmhBBiHDQ10bJ_OgS79bH3cLRvKVt6ENBZTZ6lNpeOceF71YFQzvQf&_nc_ohc=7WILbPbSTssQ7kNvgHDXd9G&_nc_ht=scontent-mnl1-1.xx&_nc_gid=AmnL-OwQCJmDewJGzy1TDlO&oh=00_AYBBTECdcOGvS5-rDb8jlMQylse-034vPXuR7oXVBNE47A&oe=670D8256"
                        alt="" class="rounded-image">
                </div>
                <div class="social-icons">
                    <a href="https://www.facebook.com/tiabamaya/"><img src="facebook.png" alt="Facebook"></a>
                    <a href="https://www.instagram.com/tiabamaya/"><img src="instagram.png" alt="Instagram"></a>
                    <a href="https://discordapp.com/users/834741429657141258"><img src="discord.png" alt="Discord"></a>
                </div>
            </div>
        </header>
    </div>

    <!-- Subjects Table -->
    <section id="subjects" class="container-features"
        style="background-color: rgba(0, 0, 0, 0.54); padding-inline: 200px;">
        <h1 class="feature-title" style="padding-top: 20px;">My Subjects</h1>
        <table class="subject-table">
            <thead>
                <tr>
                    <th>Subject Code</th>
                    <th>Subject Name</th>
                    <th>Schedule</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>CBS 401A-IT31S2</td>
                    <td>Network Security</td>
                    <td>MWF 10:00-11:30 AM</td>
                </tr>
                <tr>
                    <td>CIT 301-IT31S2</td>
                    <td>Integrative Programming and Technologies</td>
                    <td>TTh 1:00-2:30 PM</td>
                </tr>
                <tr>
                    <td>CIT 302-IT31S2</td>
                    <td>Quantitative Methods</td>
                    <td>TTh 2:30-4:00 PM</td>
                </tr>
                <tr>
                    <td>CIT 303-IT31S2</td>
                    <td>Networking 1</td>
                    <td>TTh 2:30-4:00 PM</td>
                </tr>
                <tr>
                    <td>CIT 304-IT31S2</td>
                    <td>Advanced Database</td>
                    <td>TTh 2:30-4:00 PM</td>
                </tr>
                <tr>
                    <td>CIT 305-IT31S2</td>
                    <td>System Integration and Architecture 1</td>
                    <td>TTh 2:30-4:00 PM</td>
                </tr>
                <tr>
                    <td>CITE 009-IT31S2</td>
                    <td>Technopreneurship</td>
                    <td>TTh 2:30-4:00 PM</td>
                </tr>
                <tr>
                    <td>GEE 001B-IT31S2</td>
                    <td>Gender and Society</td>
                    <td>TTh 2:30-4:00 PM</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section id="about">
        <div class="about" class="container-features" style="padding-bottom: 200px;">
            <div style="background-color: rgba(0, 0, 0, 0.54); display: inline-flex; padding: 20px;">
                <div class="col-md-7 mx-auto">
                    <h1 class="feature-title">ABOUT ME</h1>
                    <p style="letter-spacing: 2px;">
                        ◉ • 01.01.2004 ∘ ♑ capricorn ∘ { ◦..⠢ enfp-a ∘ .. once, engene! ⠠ ⸗★⸗ ⍟ it student ⍬ ..⠢
                        ⭒⭒☆</p>
                    <p style="letter-spacing: 3px;"> During my free time, I always play <a
                            href="https://tracker.gg/valorant/profile/riot/ay4x3t3423/overview"
                            style="color: #a09f87; text-decoration: underline;">valorant</a> and <a
                            href="https://lolprofile.net/summoner/ph/ay4c3t4a0"
                            style="color: #a09f87; text-decoration: underline;">league of legends</a> with my <a
                            href="https://discord.gg/YCUKQSnKeC"
                            style="color: #a09f87; text-decoration: underline;">friends</a>. </p>
                </div>
            </div>
        </div>
    </section>

    <footer class="page-footer">
        <p>&copy; Isaiah I. Concepcion | All Rights Reserved</p>
    </footer>
</body>

</html>