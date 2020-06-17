<?php
    //riporto la lista delle faqs
    require "database/lista_faq.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Faq Google</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <!-- inizio header -->
        <header>
            <div id="header-top">
                <img src="img/logo.png" alt="Logo Google">
                <h1>Privacy e termini</h1>
            </div>
            <div  id="header-bottom">
                <nav>
                    <ul>
                        <li>
                            <a href="#">
                                Introduzione
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Norme sulla privacy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Termini di servizio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tecnologie
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Domande frequenti
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="account">
                    <img src="img/account-img.jpg" alt="Immagine account">
                    <a href="#">paolo.suero@gmail.com</a>
                </div>
            </div>
        </header>
        <main>
            <section id="faq">
                <div class="container">
                    <?php
                    //ciclo l'array esterno e stampo la il valore della chiave "domanda"
                    foreach ($faqs as $faq) { ?>
                        <div class="faq-item">
                            <div class="domanda">
                                <h2>
                                    <?php
                                        echo $faq["domanda"];
                                    ?>
                                </h2>
                            </div>
                            <div class="risposte">
                                <?php
                                //creo un altro ciclo per accedere alle singole risposte
                                foreach ($faq["risposta"] as $risposta) { ?>
                                    <p>
                                        <?php
                                            echo $risposta;
                                        ?>
                                    </p>
                                    <?php
                                }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div id="footer-left">
                    <ul>
                        <li>
                            <a href="#">
                                Google
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Tutto su Google
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Privacy
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Termini
                            </a>
                        </li>
                    </ul>
                </div>
                <div id="footer-right">
                    <select>
                        <option value="Italiano">Italiano</option>
                    </select>
                </div>
            </div>
        </footer>
        <!-- script js -->
        <script src="js/main.js" charset="utf-8"></script>
    </body>
</html>
