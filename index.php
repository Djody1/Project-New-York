<!DOCTYPE html>

<html>

<head>
    <link rel='shortcut icon' type='image/x-icon' href='./Broncode/Pictures/591' />
    <link rel='stylesheet' href='./Broncode/CSS/Layout_White_Stylesheet.css' />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@600;700&display=swap" rel="stylesheet">


    <style>
        .Dagen a {
            text-decoration: none;
            color: black;
        }

        button {
            background-color: #EAEAEA;
            border: none;

            font-size: 32px;
            font-family: 'IBM Plex Sans', sans-serif;
            font-weight: bold;

            margin-left: 80px;

            width: 12%;
            height: 60px;
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

        body {
            font-family: 'IBM Plex Sans', sans-serif;
        }

        .MP_text1 {
            float: right;
            margin-right: 9.5%;
            margin-top: -0.3%;
            font-size: 18px;
        }
    </style>
    <title>Project New York ✈</title>
</head>

<body>
    <nav>
        <section class='navigation'>
            <section class='navigationbar'>
                <nav>
                    <ul>
                        <li id='Titel'><b><a href='./index.php'>New York Project</a></b></li>
                        <li id='taalindicatortext'>NL</li>

                        <a href='./Broncode/HTML/Hoofdpagina_White_EN.php'>
                            <li><img id='Vlag' src='./Broncode/Pictures/NL_Flag.png' height='40'
                                    alt='Error: Look for EN_Vlag' />
                            </li>
                        </a>

                        <a href='./Broncode/HTML/Hoofdpagina_Black_NL.php'>
                            <li><img id='d-or-l-indicator' src='./Broncode/Pictures/moon.png' width='47' height='47'
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
                <img class='New_York_MP' src='./Broncode/Pictures/New_York.jpeg' alt='New_York' Width='30%' />
            </div>
            <section>
                <p class='MP_text1'>
                    Wat je kan vinden op de site: <br /><br />
                    Informatie over wat we elke dag(maandag t/m vrijdag) gaan doen.<br />
                    Bij elke dag staat een beschrijving over<br /> de activiteit(en) of de bezichtiging(en).<br />
                    Ook staan er een paar weetjes erover. <br /><br />

                    Over onze website:<br /><br />
                    Dit is een schoolproject wat in de vorm van een <br />website gemaakt is genaamd ‘’city
                    curtains’’.<br />
                    Het project gaat over een stad wat we samen hebben uitgekozen.<br /> We hebben een website moeten
                    ontwikkelen,<br /><br />
                    waarmee wij ons groepje kunnen gaan rondleiden op <br />interessante plaatsen in de gekozen stad(in
                    dit
                    geval New York).<br />
                    Deze website is gemaakt als ondersteunend digitaal <br />hulpmiddel die gebruikt kan worden tijdens
                    de
                    rondleiding.
                </p>
            </section>
            <section class='Dagen'>
                <div>
                    <button><a href='./Broncode/HTML/Dagen/NL_White/Monday_White_NL.php'>Maandag</a></button> <br /><br />
                    <button><a href='./Broncode/HTML/Dagen/NL_White/Tuesday_White_NL.php'>Dinsdag</a></button> <br /><br />
                    <button><a href='./Broncode/HTML/Dagen/NL_White/Wednesday_White_NL.php'>Woensdag</a></button> <br /><br />
                    <button><a href='./Broncode/HTML/Dagen/NL_White/Thursday_White_NL.php'>Donderdag</a></button> <br /><br />
                    <button><a href='./Broncode/HTML/Dagen/NL_White/Friday_White_NL.php'>Vrijdag</a></button> <br /><br />
                </div>
            </section>

        </main>
</body>

</html>