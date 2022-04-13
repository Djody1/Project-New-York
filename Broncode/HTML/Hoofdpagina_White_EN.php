<!doctype html>

<html>

<head>
    <link rel='shortcut icon' type='image/x-icon' href='../Pictures/yes.ico' />
    <link rel='stylesheet' href='../CSS/Layout_White_Stylesheet.css' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@600;700&display=swap" rel="stylesheet">
    <title>Project New York ✈</title>
    <style>
        body {
            font-family: 'IBM Plex Sans', sans-serif;
            color: #C3C3C3;
        }

        .Dagen button {
            background-color: #EAEAEA;
            border: none;

            font-size: 32px;
            font-family: 'IBM Plex Sans', sans-serif;
            font-weight: bold;

            margin-left: 80px;

            width: 12%;
            height: 60px;
        }

        a {
            text-decoration: none;
            color: Black;
        }

        #Vlag {
            position: relative;
            display: inline-block;
        }

        #d-or-l-indicator {
            position: relative;
            display: inline-block;
        }

        .New_York_MP {
            float: right;
            margin-right: 4%;
        }

        .MP_text1 {
            float: right;
            margin-right: 8%;
            color: black;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <section class='navigation'>
        <section class='navigationbar'>
            <nav>
                <ul>
                    <li id='Titel'><b><a href='./Hoofdpagina_White_EN.php'>New York Project</a></b></li>
                    <li id='taalindicatortext'>EN</li>

                    <a href='./index.php'>
                        <li><img id='Vlag' src='../Pictures/EN_Vlag.png' height='40' alt='Error: Look for EN_Vlag' />
                        </li>
                    </a>

                    <a href='./Hoofdpagina_Black_EN.php'>
                        <li><img id='d-or-l-indicator' src='../Pictures/moon.png' width='47' height='47'
                                alt='Error: Look for moon' />
                        </li>
                    </a>
                </ul>
            </nav>
        </section>
    </section>
    <br /><br /><br /><br />
    <main>
        <div>
            <img class='New_York_MP' src='../Pictures/New_York.jpeg' alt='New_York' Width='30%' height='250px' />
        </div>

        <section>
            <p class=MP_text1>
                What you can find on this site:<br /><br />
                Information<br /> about what we are going to do every day
                (Monday till Friday).<br /> For every day we have an explanation
                about the activity(ies) sight(s),<br /> we also have some facts about them.<br /><br />

                About our website:<br /><br />
                This is a school <br />project that is made in the form of a
                website called ‘’city curtains’’.</br> The project is about a city
                which we have chosen.</br> We had to design a website which takes our group
                on <br />a sightseeing tour to interesting places<br /> in the chosen city(New York).<br /> This website
                is made as a helpful digital tool which could be<br /> used throughout the sightseeing tour.
            </p>
        </section>

        <section class='Dagen'>
            <div>
                <button><a href='./Dagen/EN_White/Monday_White_EN.php'>Monday</a></button> <br /><br />
                <button><a href='./Dagen/EN_White/Tuesday_White_EN.php'>Tuesday</a></button> <br /><br />
                <button><a href='./Dagen/EN_White/Wednesday_White_EN.php'>Wednesday</a></button> <br /><br />
                <button><a href='./Dagen/EN_White/Thursday_White_EN.php'>Thursday</a></button> <br /><br />
                <button><a href='./Dagen/EN_White/Friday_White_EN.php'>Friday</a></button> <br /><br />
            </div>
        </section>


    </main>

</body>

</html>