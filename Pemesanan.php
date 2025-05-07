<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Checkout example · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="css/bootstrap.min.css" rel="stylesheet">

 

    
    <!-- Custom styles for this template -->
    <link href="checkout.css" rel="stylesheet">
  </head>
  <body class="bg-body-tertiary">
    <header id="header">
      <a href="#" class="logo"> </a>
      <ul>
          <li><a href="home.html" >Home</a></li>
          <li><a href="katalog.html" >Products</a></li>
          <li><a href="Order.html" class="active">Order</a></li>
          <li><a href="About.html">About</a></li>
      </ul>
      <script>
          // Ambil semua link di navbar
          const menuLinks = document.querySelectorAll('#header ul li a');
          
          // Tambahkan event listener untuk setiap link
          menuLinks.forEach(link => {
              link.addEventListener('click', function(e) {
                  // Hapus kelas active dari semua link
                  menuLinks.forEach(link => link.classList.remove('active'));
                  
                  // Tambahkan kelas active pada link yang diklik
                  e.target.classList.add('active');
              });
          });
      </script>
      
  </header>
    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="assets/logo.png" alt="" width="170px" height="auto">
      <h2>Order Form</h2>
      <p class="lead"><b>Selamat datang di pemesanan Tas Eksport berkualitas tinggi. Nikmati kemudahan berbelanja dengan produk pilihan yang siap melengkapi gaya Anda. Lanjutkan ke pembayaran untuk menyelesaikan pesanan Anda!</b></p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Dog Tote Bag</h6>
              <small class="text-body-secondary">Dark Green</small>
            </div>
            <span class="text-body-secondary">Rp 713.900</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Micro Classic RR01 Pouch</h6>
              <small class="text-body-secondary">Lime</small>
            </div>
            <span class="text-body-secondary">Rp 109.000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Picnic Mini Rucksack</h6>
              <small class="text-body-secondary">Biru Muda</small>
            </div>
            <span class="text-body-secondary">Rp 399.000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-body-tertiary">
            <div class="text-success">
              <h6 class="my-0">Kode Promo</h6>
              <small>A012B</small>
            </div>
            <span class="text-success">51%</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong>Rp 598.731</strong>
          </li>
        </ul>


        <form class="card p-2 custom-form">
    <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo code">
        <button type="submit" class="btn btn-secondary">Redeem</button>
    </div>
</form>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate action="proses_aplikasi_create.php" method="post">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama Depan</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required name="Nama_Depan">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Nama Belakang</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required name="Nama_Belakang">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nama Pengguna</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="NamaPengguna" required name="Nama_Pengguna">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-body-secondary">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com" name="Email">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
  <label for="produk">Produk</label>
  <select class="form-control" id="produk" name="Produk" required>
    <option value="" disabled selected>Pilih Produk</option>
    <option value="Bimble Coin Pouch">Bimble Coin Pouch</option>
    <option value="Daily Journey Laptop Tote Bag">Daily Journey Laptop Tote Bag</option>
    <option value="Produk 3">Dog Tote Bag</option>
    <option value="Produk Lainnya">Micro Classic RR01 Pouch</option>
    <option value="Produk Lainnya">Outgoing Tote Bag</option>
    <option value="Produk Lainnya">Penny Coin Pouch</option>
    <option value="Produk Lainnya">All Day Laptop Backpack</option>
    <option value="Produk Lainnya">Easy Going Mini Backpack</option>
    <option value="Produk Lainnya">Go on Vacation Backpack</option>
    <option value="Produk Lainnya">Junior Plus Backpack</option>
    <option value="Produk Lainnya">Micro Two Way Carry</option>
    <option value="Produk Lainnya">Picnic Mini Rucksack</option>
    <option value="Produk Lainnya">Jumper Sling Bag</option>
    <option value="Produk Lainnya">Concert Easy Going Sling Bag</option>
    <option value="Produk Lainnya">Concert Reround Sling Bag</option>
    <option value="Produk Lainnya">Kumara Mini Sling Bag</option>
    <option value="Produk Lainnya">City Strolling Sling Bag</option>
    <option value="Produk Lainnya">Go Active Sling Bag</option>
  </select>
</div>

<div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" id="address" placeholder="jalan utama 1234" required name="Alamat">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-md-5">
    <label for="country" class="form-label">Negara</label>
    <select class="form-select" id="country" required name="Negara">
        <option value="">Pilih...</option>
        <option value="Indonesia">Indonesia</option>
        <option value="United States">United States</option>
        <option value="United Kingdom">United Kingdom</option>
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
        <option value="Germany">Germany</option>
        <option value="France">France</option>
        <option value="India">India</option>
        <option value="Japan">Japan</option>
        <option value="South Korea">South Korea</option>
        <option value="China">China</option>
        <option value="Brazil">Brazil</option>
        <option value="Mexico">Mexico</option>
        <option value="South Africa">South Africa</option>
        <option value="Italy">Italy</option>
        <option value="Spain">Spain</option>
        <option value="Russia">Russia</option>
    </select>
    <div class="invalid-feedback">
        Please select a valid country.
    </div>
</div>


<div class="col-md-4">
    <label for="state" class="form-label">Provinsi</label>
    <select class="form-select" id="state" required name="Provinsi">
        <option value="">Pilih...</option>
        <!-- Indonesia -->
        <optgroup label="Indonesia">
            <option value="Jawa Barat">Jawa Barat</option>
            <option value="Jawa Timur">Jawa Timur</option>
            <option value="DKI Jakarta">DKI Jakarta</option>
            <option value="Bali">Bali</option>
        </optgroup>
        <!-- United States -->
        <optgroup label="United States">
            <option value="California">California</option>
            <option value="Texas">Texas</option>
            <option value="Florida">Florida</option>
            <option value="New York">New York</option>
        </optgroup>
        <!-- Australia -->
        <optgroup label="Australia">
            <option value="New South Wales">New South Wales</option>
            <option value="Queensland">Queensland</option>
            <option value="Victoria">Victoria</option>
            <option value="Western Australia">Western Australia</option>
        </optgroup>
        <!-- Canada -->
        <optgroup label="Canada">
            <option value="Ontario">Ontario</option>
            <option value="Quebec">Quebec</option>
            <option value="British Columbia">British Columbia</option>
            <option value="Alberta">Alberta</option>
        </optgroup>
        <!-- India -->
        <optgroup label="India">
            <option value="Maharashtra">Maharashtra</option>
            <option value="Karnataka">Karnataka</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Delhi">Delhi</option>
        </optgroup>
        <!-- Germany -->
        <optgroup label="Germany">
            <option value="Bavaria">Bavaria</option>
            <option value="Berlin">Berlin</option>
            <option value="Hesse">Hesse</option>
            <option value="North Rhine-Westphalia">North Rhine-Westphalia</option>
        </optgroup>
    </select>
    <div class="invalid-feedback">
        Please provide a valid state.
    </div>
</div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Kode Pos</label>
              <input type="text" class="form-control" id="zip" placeholder="" required name="Kode_Pos">
              <div class="invalid-feedback">
                Zip code required.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address" name="Alamat_Sama">
            <label class="form-check-label" for="same-address">Alamat pengiriman sama dengan alamat penagihan</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info" name="Simpan_Informasi">
            <label class="form-check-label" for="save-info">Simpan informasi ini untuk penggunaan berikutnya</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Pembayaran</h4>

          <div class="form-check">
  <input id="credit" name="Pembayaran" type="radio" class="form-check-input" value="Kartu Kredit" checked required>
  <label class="form-check-label" for="credit">Kartu Kredit</label>
</div>
<div class="form-check">
  <input id="debit" name="Pembayaran" type="radio" class="form-check-input" value="Kartu Debit" required>
  <label class="form-check-label" for="debit">Kartu Debit</label>
</div>
<div class="form-check">
  <input id="paypal" name="Pembayaran" type="radio" class="form-check-input" value="PayPal" required>
  <label class="form-check-label" for="paypal">PayPal</label>
</div>


          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nama di Kartu</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required name="Nama_di_Kartu">
              <small class="text-body-secondary">Nama lengkap sesuai yang tertera di kartu</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Nomor Kartu Kredit</label>
              <input type="number" class="form-control" id="cc-number" placeholder="" required name="Nomor_Kartu_Kredit">
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>

            <script>
  function validateNumericInput(input) {
    // Hapus karakter non-angka
    input.value = input.value.replace(/[^0-9]/g, '');
  }
</script>
          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
        </form>
      </div>
    </div>
  </main>
  <footer id="footer">
    <p>&copy; 2024 Exsport. All rights reserved.</p>
    <div class="social-icons">
        <a href="https://twitter.com/yourbrand" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://facebook.com/yourbrand" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://instagram.com/yourbrand" target="_blank"><i class="fab fa-instagram"></i></a>
    </div>
    <a href="mailto:yourbrand@example.com">Contact Us</a>
</footer>
</div>
    <script src="checkout.js"></script></body>
</html>
