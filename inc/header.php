<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
    <div class="container">
    <header>
        <div class="hello">
            <h1 class="hello-title">O'clock student news</h1>
            <section class="hello-news">
                <h2>Latest news <span>from our students</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In corrupti cumque accusantium ipsam dolore repellendus praesentium doloremque repudiandae, necessitatibus harum?</p>
            </section>
            <nav class="hello-menu">

            <?php
              $pages = [
                'Plan du site' => '../html/plan_de_site.php',
                'Contact' => '../html/contact.php',
                'Mentions legales' => '../html/mentions_legales.php'
                ];

                foreach($pages as $key => $page):
                ?>
                <a href="<?= $page ?>"><?= $key ?></a>
                <?php endforeach;?>
                
            </nav>
        </div>
        </header>