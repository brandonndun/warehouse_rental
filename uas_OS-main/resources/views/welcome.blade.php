<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>
    <div class="logo">
        <a href="/Dashboard"><img src ="/images/warehouse.png" width="50 px"></a>
    </div>

    <nav class="navbar">
        <a href="/">Sewa Gudang</a>
        <a href="/Riwayat"> Riwayat Penyewaan</a>
        <a href="/TentangKami">Tentang Kami</a>
        <a href="/Hubungi">FAQ</a>
    </nav>

    <div class="icons">

        <li class="dropdown">
            <a  class="fas fa-user"></a>
            <div class="dropdown-content">
                <a href="/Profile">Profile</a>
                <a href="/logout">Log Out</a>
            </div>
        </li>
    </div>


</header>
</body>
</html>
