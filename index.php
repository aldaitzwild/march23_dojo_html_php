<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dojo Articles</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <?php
            for($i = 1; $i <= 200; $i++) {
        ?>
        <article class="article">
            <div class="firstPart">
                <img src="https://i.pravatar.cc/200" class="authorPicture">
                <div class="textContent">
                    <h2>Thomas Aldaitz - N°<?= $i ?></h2>
                    <p class="content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum, alias saepe
                        eius iste asperiores
                        sapiente tempora ab rem, nisi ipsam soluta quidem corporis eligendi labore blanditiis
                        reprehenderit qui id
                        harum?
                    </p>
                </div>
            </div>
            <p class="date">01/01/2020</p>
        </article>
        <?php } ?>
    </main>

</body>

</html>