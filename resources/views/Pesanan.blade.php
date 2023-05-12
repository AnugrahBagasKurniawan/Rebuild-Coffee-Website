<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyBooking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha3tg84-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<style>
    .header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 50px;
    background-color: black;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.06);
    z-index: 999;
    position: sticky;
    top: 0;
    left: 0;
    }
    .navbar{
        display: flex;
    }
    .navbar li{
        list-style: none;
        padding: 0 20px;
        position: relative;
    }
    .navbar li a{
        text-decoration: none;
        color: #FA7070;
        font-size: 16px;
        font-weight: 600;

    }
    .cart{
        width: 40px;
    }
    .logo{
        width: 10%;
    }
    .navbar img{
        width: 25px;
    }
    #produk{
        background-color: white;
    }
    #produk h2{
        font-size: 46px;
        line-height: 54px;
        color: #FA7070;
        padding: 30px 80px;
        text-align: center;
    }
    /* .card1 {
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    } */
    .keranjang{
        padding: 30px 100px;
    }
</style>
<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="{{route('Pegawai')}}" class="active">Home</a></li>
            <li><a href="" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">Anugrah</a>
                <ul class="dropdown-menu">
                    <li><a href="LoginPengguna.php" class="dropdown-item">Profil</a></li>
                    <li><a href="" class="dropdown-item">Logout</a></li>
                </ul>
            </li>
        </ul>
        <img src="https://www.spaceroastery.com/img/logo.png" alt="" class="logo">
        <a href=""><img src="./add.png" alt="" class="cart"></a>
    </div>
    <div class="keranjang">
        <h2>PESANAN ANDA</h2>
        <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no= 1;?>
                <th scope="row"><?= $no; ?></th>
                    <td>Anugrah Bagas Kurniawan</td>
                    <td>Linton Green Mango</td>
                    <td>2</td>
                    <td>Bojongsoan Kab.Bandung Jawa Barat</td>
                    <td>08968007674</td>
                    <td>150000</td>
                    <td>
                        <div class="mb-3">
                            <a href=""><button type="submit" name="submit" class="btn btn-primary">Konfirmasi</button></a>
                        </div>
                    </td>
                </tr>
                <?php $no++; ?>
            </tbody>
        </table>
    </div>
</body>
</html>