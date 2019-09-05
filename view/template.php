<html>
    <head>
        <title>Delta e-commerce</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing|Lexend+Deca|Livvic&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css">
    </head>
    <body>
        <nav class="">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo BASE_URL; ?>"</a>Home</li>
                    <li class="active"><a href="<?php echo BASE_URL; ?> contact"</a>Contact</li>
                </ul>
                <ul class="nav navbar-right">
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="<#>"> English <span class="caret"> </span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Portuguese</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo BASE_URL; ?>login">Login</a></li>
                </ul>
            </div> 
        </nav>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 logo">
                        <a href="<?php echo BASE_URL;?>assets/img/logo.jpg"></a>
                    </div>
                    <div class="col-sm-7">
                        <div class="head_help">(12)95555-5665</div>
                        <div class="head_email">
                            contato@<span>lojinhaStore.com.br</span>
                        </div>
                        <div class="search_area">
                            <form method="GET">
                                <input type="text" name="s" require placeholder="Search item"/>
                                <select name="category">
                                    <option value="">All categories</option>
                                </select>
                                <input type="submit" value=""/>
                            </form>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <a href="<?php echo BASE_URL; ?>cart"></a>
                        <div class="cartarea">
                            <div class="carticons">
                                <div class="cartqta">
                                    9
                                </div>
                                <div class="carttotal">
                                    Your cart:<br/>
                                    <span>R$ 999,99</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <main>

        </main>
        <footer>

        </footer>

        <!-- Scripts -->
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
    </body>
</html>

<!--
FONTES
Livvic - Título/destaque
Caesar Dressing - Logo
Lexend Deca - Padrão
-->