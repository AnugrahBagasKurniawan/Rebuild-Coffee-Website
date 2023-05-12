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
        padding : 25px;
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
        padding: 20px;
    }
</style>
<body>
    <div class="header">
        <ul class="navbar">
            <li><a href="{{route('Pengguna')}}" class="active">Home</a></li>
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
    <!-- <div class="keranjang">
        <h2>PESANAN ANDA</h2>
        <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemasana</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Nomor Handphone</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $no= 1;?>
                <th scope="row"><?= $no; ?></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="mb-3">
                            <a href=""><button type="submit" name="submit" class="btn btn-primary">Detail Pesanan</button></a>
                        </div>
                    </td>
                </tr>
                <?php $no++; ?>
            </tbody>
        </table>
    </div> -->
    <section id="produk">
        <h2>PRODUK KAMI</h2>
        <div class="card1">
            <div class="row row-cols-1 row-cols-md-4 g-5">
                <div class="col">
                    <div class="card h-100">
                        <img src="https://migrate-repo.spaceroastery.com/index.php/img/item_photos/shop---coffee-185-000/89ea01a738b81219fca892bcd0af811btyfonspace.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lintong Honey Lemon</h5>
                            <p class="card-text">starts from</p>
                            <p class="card-text">IDR 75.000</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">Read more</a>
                            <div>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Lintong Honey Lemon" name="produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jalan Terusan Buah Batu Gg Pa Edo no 39, Bojongsoang, Lengkong, Bandung, Jawa Barat" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="089680007674" name="no_hp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                                                    <input class="form-control" type="text" id="formFile" name="harga" value="75000">
                                                </div>  
                                                <div class="mb-3">
                                                    <select class="form-select" name="jumlah">
                                                        <option value="">Jumlah</option>
                                                        <?php for($x=1;$x<=50;$x++){
                                                        ?>
                                                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="total">
                                                <div class="mb-3">
                                                    <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <img src="https://migrate-repo.spaceroastery.com/index.php/img/item_photos/shop---coffee-167-000/63c0db043c400d28241556757614f277tyfonspace.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tilu Tamarind</h5>
                            <p class="card-text">starts from</p>
                            <p class="card-text">IDR 70.000</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Read more</a>
                            <div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Tilu Tamrind" name="produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jalan Terusan Buah Batu Gg Pa Edo no 39, Bojongsoang, Lengkong, Bandung, Jawa Barat" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="089680007674" name="no_hp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                                                    <input class="form-control" type="text" id="formFile" name="harga" value="75000">
                                                </div>  
                                                <div class="mb-3">
                                                    <select class="form-select" name="jumlah">
                                                        <option value="">Jumlah</option>
                                                        <?php for($x=1;$x<=50;$x++){
                                                        ?>
                                                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="total">
                                                <div class="mb-3">
                                                    <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <img src="https://migrate-repo.spaceroastery.com/index.php/img/item_photos/shop---coffee-121-000/f503d5893e10406cafaaf283640c2115tyfonspace.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lintong Green Mango</h5>
                            <p class="card-text">starts from</p>
                            <p class="card-text">IDR 75.000</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Read more</a>
                            <div>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Lintong Green Mango" name="produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jalan Terusan Buah Batu Gg Pa Edo no 39, Bojongsoang, Lengkong, Bandung, Jawa Barat" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="089680007674" name="no_hp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                                                    <input class="form-control" type="text" id="formFile" name="harga" value="75000">
                                                </div>  
                                                <div class="mb-3">
                                                    <select class="form-select" name="jumlah">
                                                        <option value="">Jumlah</option>
                                                        <?php for($x=1;$x<=50;$x++){
                                                        ?>
                                                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="total">
                                                <div class="mb-3">
                                                    <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <img src="https://migrate-repo.spaceroastery.com/index.php/img/item_photos/shop---coffee-121-000/f503d5893e10406cafaaf283640c2115tyfonspace.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lintong Green Mango</h5>
                            <p class="card-text">starts from</p>
                            <p class="card-text">IDR 75.000</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">Read more</a>
                            <div>
                            <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pesanan</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="" method="POST" enctype="multipart/form-data">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Produk</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Lintong Green Mango" name="produk">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jalan Terusan Buah Batu Gg Pa Edo no 39, Bojongsoang, Lengkong, Bandung, Jawa Barat" name="alamat">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="089680007674" name="no_hp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                                                <input class="form-control" type="text" id="formFile" name="harga" value="75000">
                                            </div>  
                                            <div class="mb-3">
                                                <select class="form-select" name="jumlah">
                                                    <option value="">Jumlah</option>
                                                    <?php for($x=1;$x<=50;$x++){
                                                    ?>
                                                    <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                            <input type="hidden" name="total">
                                            <div class="mb-3">
                                                <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" >
                        <img src="https://migrate-repo.spaceroastery.com/index.php/img/item_photos/shop---coffee-167-000/63c0db043c400d28241556757614f277tyfonspace.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tilu Tamarind</h5>
                            <p class="card-text">starts from</p>
                            <p class="card-text">IDR 70.000</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Read more</a>
                            <div>
                            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Informasi Pesanan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="" method="POST" enctype="multipart/form-data">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Produk</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" value="Tilu Tamrind" name="produk">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama" name="nama">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jalan Terusan Buah Batu Gg Pa Edo no 39, Bojongsoang, Lengkong, Bandung, Jawa Barat" name="alamat">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="089680007674" name="no_hp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Harga</label>
                                                    <input class="form-control" type="text" id="formFile" name="harga" value="75000">
                                                </div>  
                                                <div class="mb-3">
                                                    <select class="form-select" name="jumlah">
                                                        <option value="">Jumlah</option>
                                                        <?php for($x=1;$x<=50;$x++){
                                                        ?>
                                                        <option value="<?php echo $x; ?>"><?php echo $x; ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <input type="hidden" name="total">
                                                <div class="mb-3">
                                                    <button type="submit" name="submit" class="btn btn-primary">Pesan</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>