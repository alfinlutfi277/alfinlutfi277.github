<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <script src="js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <?php echo $__env->yieldPushContent('css'); ?>

</head>

<body>

    <header>

        <img class="logo" src="<?php echo e(asset('image/leornado.jpg')); ?>" alt="logo">
        <h2 class="judul">Alnime </h2>

        <nav>
            <ul>

                <button onclick="myFunction()">Mode</button>


                <li> <a href="https://ALFIN-277.com">Home</a></li>
                <li> <a href="https://ALFIN-277.com/Profil">Profil</a> </li>
                <li><a href="https://ALFIN-277.com/Kontak">Kontak</a></li>
                <li><a href="https://ALFIN-277.com/Home">List App</a></li>


            </ul>
        </nav>
        <?php echo $__env->yieldContent('header'); ?>
    </header>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->yieldContent('sidebar'); ?>
    <footer>
        <div class="footercopyright">
            <div class="copyright marx">
                <div title="Alnime">
                </div>
                <div class="txt">
                    <span>Copyright © 2021-2022 Alnime. All Rights Reserved</span>
                    <p>Disclaimer: This site <i>Alnime</i> does not store any files on its server. All contents are
                        provided by non-affiliated third parties.</p>
                </div>
            </div>
        </div>

    </footer>

    <script>
    $(document).ready(
        function() {
            $('#button').click(
                function() {
                    var add = $('input[name=itemName]').val();
                    $('ol').append('<li>' + add + '</li>');
                });

            $("input[name=itemName]").keyup(function(event) {
                if (event.keyCode == 13) {
                    $("#button").click();
                }
            });

            $(document).on('dblclick', 'li', function() {
                $(this).toggleClass('strike').fadeOut('slow');
            });

            $('input').focus(function() {
                $(this).val('');
            });

            $('ol').sortable();



        }
    );
    </script>

</body>

</html><?php /**PATH C:\xamp\htdocs\lutfi\resources\views/layouts/master.blade.php ENDPATH**/ ?>