<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php page_title(); ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500;600&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/gh/kenjiefx/strawberry-js@1.0.1/strawberry.min.js"></script>
        <script type="text/javascript">const blockAutoSubmit=e=>e.preventDefault()</script>
        <?php template_assets(); ?>
    </head>
    <body xstrawberry="app">
        <?php component('Loader'); ?>
        <main id="main">
            <?php component('Header'); ?>
            <?php template_content(); ?>
        </main>
        <?php component('BuildVersion'); ?>
    </body>
</html>