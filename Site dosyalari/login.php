<!doctype html>
<html lang="tr">
<?php




?>
<head>
    <!-- Required meta tags -->
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sablon.css">
    <link rel="stylesheet" href="giris.css">
    <title>Giris Ekrani</title>
</head>

<body>
<div class="container">
    <!--MENU BASLANGICI-->
    <!--MENU BASLANGICI-->
    <nav class="navbar navbar-expand-xl navbar-light  " style="background-color: rgba(0, 247, 255, 0.671)">
        <div class="container-fluid">
            <a style="color: #0fb11d;" class="navbar-brand" href="#"><b>G201210376</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                
            </div>
        </div>
    </nav>

    <!--MENU BITISI-->

    <header>

        <div class="bg-info text-dark ">

            <div class="container">

                <div class="col-md-6 px-0">
                    <h1 class="display-4 font-italic">
                        Giriş Ekranı
                    </h1>
                </div>

            </div>

        </div>

    </header>

    <main>

        <div class="container a">
            <div class="row ">
                <div class="col">

                </div>
                <div class="col">
                    <?php
                    include("bilgiler.php");
                    session_start();
                    ob_start();
                    if (($_POST["kullaniciadi"] == $kullanici) and ($_POST["girissifre"] == $sifre)) {
                        $_SESSION["login"] = "true";
                        $_SESSION["user"] = $kullanici;
                        $_SESSION["pass"] = $sifre;
                        echo ("hosgeldiniz :) 'g201210376' <br>");
                        echo ("Anasayfaya yönlendiriliyorsunuz.");
                        header("Refresh: 2; url=Anasayfa.html");
                    } 
                    else if (($_POST["kullaniciadi"] == '') or ($_POST["girissifre"] == '')) {
                        echo "Kutulari lutfen bos birakmayiniz. <br>";
                        echo "Giriş sayfasına yönlendiriliyorsunuz.";
                        header("Refresh: 2; url=giris.php");
                    } else {
                        echo "Kullancı Adı veya Şifre Yanlış.<br>";
                        echo "Giriş sayfasına yönlendiriliyorsunuz.";
                        header("Refresh: 2; url=giris.php");
                    }
                    ob_end_flush();
                    ?>
                </div>
                <div class="col">

                </div>
            </div>


        </div>

    </main>


    </aside>
    
                </div>
    <!--FOOTER BASLANGIC-->
    

    <footer style="background-color: rgba(0, 0, 0, 0.2);" class="bg-light text-center text-lg-start fixed-bottom">
        <!-- Grid container -->
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright
            Cengizhan KOCAL
        </div>
        <!-- Copyright -->
    </footer>


    <!--FOOTER####-->









    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>