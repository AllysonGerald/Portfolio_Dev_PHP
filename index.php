<!DOCTYPE html>
<!-- <html lang="pt-br"> -->
<html lang="en">
    <head>
        <title></title>
        <!-- ==== Meta ==== -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta content="index, follow" name="robots">

        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- ==== Favicons ==== -->
        <link href="favicon.ico" type="image/x-icon" rel="shortcut icon">
        <link href="" type="" rel="apple-touch-icon">

        <!-- ==== Google Fonts ==== -->
        <link href="" rel="stylesheet">

        <!-- ==== Vendor CSS Files ==== -->
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">

        <!-- ==== Template CSS File ==== -->
        <link href="style.css" rel="stylesheet" type="text/css">

        <!-- ==== Vendor JS Files ==== -->
        <script src="https://cdn.tailwindcss.com"></script>
        <script src="" defer></script>
    </head>

    <body class="bg-slate-900 w-full text-gray-400">
        <?php include "./components/header.php"; ?>

        <main class="mx-auto max-w-screen-lg min-h-20">

            <?php include "./components/hero.php"; ?>

            <?php include "./components/projets.php"; ?>
        </main>
        <footer class="h-20 mx-auto max-w-screen-lg min-h-20">
            <hr class="border-gray-600">
            <div class="mx-auto max-w-screen-lg pt-6 px-3">
                <p class="text-xs">&copy; Copyright <?= date('Y'); ?>. Construído por <a href="#" class="font-bold">Prism Tecnology</a>.</p>
            </div>
        </footer>
    </body>
</html>