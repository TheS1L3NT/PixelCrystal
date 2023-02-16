<html>
    <head>
        <title>Startseite | MoonLight</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="icon.ico">
    </head>
    <body> 
        <header>
            <a href="/">
                <img src="logo.svg" alt="Logo PixelCrystal" width="300">
            </a>
        </header>
        <nav> 
            <ul class="mitte">
                <li><a href="index.php">Startseite</a></li>
                <li><a href="games.html">Games</a></li>
                <li><a href="#support">Support</a></li>
                <li><a href="#neuigkeiten">Neuigkeiten</a></li>
                <li><a href="#überuns">Über Uns</a></li>
            </ul>
        </nav>
        <div id="teaser">
            <img src="teaser.jpg" alt="Alte Spielekonsolen">
        </div>

        <section id="home">
            <h1 class="mitte" >Game Development</h1>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.                 Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.            </p>
        </section>
        <section id="neuigkeiten">
            <h2 class="mitte" >Neuste Updates</h2>

            <div class="news-container">

                <!--Box 1 -------------------------------->
                <div class="news-box">
                    <div class="news-img">
                        <img src="projekt_01.png" alt="picture">
                    </div>

                    <div class="news-text">
                        <span>02 Mai 2022 | Game News</span>
                        <a href="#" class="news-title">Text 1</a>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis architecto sequi ex quod natus molestias et, suscipit delectus ad quaerat cumque, esse nobis possimus quis sunt veritatis minus porro?</p>
                        <a href="#" class="news-expansion">Erfahre Mehr</a>
                    </div>
                </div>

                <!--Box 2 -------------------------------->
                <div class="news-box">
                    <div class="news-img">
                        <img src="projekt_01.png" alt="picture">
                    </div>

                    <div class="news-text">
                        <span>03 Mai 2022 | Website News</span>
                        <a href="#" class="news-title">Text 2</a>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis architecto sequi ex quod natus molestias et, suscipit delectus ad quaerat cumque, esse nobis possimus quis sunt veritatis minus porro?</p>
                        <a href="#" class="news-expansion">Erfahre Mehr</a>
                    </div>
                </div>

                <!--Box 3 -------------------------------->

                <div class="news-box">
                    <div class="news-img">
                        <img src="projekt_01.png" alt="picture">
                    </div>

                    <div class="news-text">
                        <span>04 Mai 2022 | Social Media News</span>
                        <a href="#" class="news-title">Text 3</a>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum officiis architecto sequi ex quod natus molestias et, suscipit delectus ad quaerat cumque, esse nobis possimus quis sunt veritatis minus porro?</p>
                        <a href="#" class="news-expansion">Erfahre Mehr</a>
                    </div>
                </div>
            </div>

        </section>

        <section id="support">
            <h2 class="mitte" >Support</h2>
                <?php 
                if(isset($_POST["submit"])){
                    mail("jonaswilk44@gmail.com", "Kontaktformular", 'Name: '.$_POST["name"].' E-Mail: '.$_POST["email"].' Nachricht: '.$_POST["message"]);
                    ?>
                    <h1 style="color: green">Die E-Mail wurde gesendet!</h1>
                    <?php
                } 
                ?>
                <form action="index.php" method="post">
                    <input type="text" name="name" placeholder="Name" required><br>
                    <input type="email" name="email" placeholder="E-Mail" required><br>
                    <textarea name="message" rows="8" cols="80" placeholder="Nachricht" required></textarea><br>
                    <button type="submit" name="submit">Absenden</button>
                </form>
        </section>

        <section id="überuns">
            <h2 class="mitte" >Über Uns</h2>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            </p>
        </section>

        <footer>
            <ul class="mitte">
                <li><a href="impressum.html">Impressum</a></li>
                <li><a href="datenschutz.html">Datenschutz</a></li>
            </ul>
            <p>Copyright &copy; <script>document.write(new Date().getFullYear())</script> PixelCrystal All Rights Reserved</p>
        </footer>
    </body>
</html>
