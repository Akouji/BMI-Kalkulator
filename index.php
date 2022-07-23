<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mengetahui status gizi seseorang berdasarkan berat dan tinggi badannya.">
    <title>Kalkulator BMI (IMT)</title>  

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.yamidrive.com/assets/css/hover.min.css" rel="stylesheet" type="text/css" />
    <!-- Favicons -->
    <link rel="icon" href="https://hellosehat.com/by-locales/vi-VN/icon-32x32.png" sizes="32x32">
    <link rel="icon" href="https://hellosehat.com/by-locales/vi-VN/icon-192x192.png" sizes="192x192">
    <meta name="theme-color" content="#7952b3">
    <!-- Custom styles for this template -->
    <style type="text/css">body{background:url(img/bg.png);}.br5{border-radius: 50%;}.reff {margin: 10px;display: inline-block;}a.skul:focus{color:#2161f2;border-bottom:2px dashed #2161f2}a.skul:hover{color:#2161f2;border-bottom:2px solid #cbd7f5}a.skul{color:#5183f5;text-decoration:none;border-bottom:2px solid #eeeff5;font-weight:600}</style>
  </head>
<body>
    
<div class="col-lg-7 mx-auto p-3 py-md-5">
  <header class="d-flex align-items-center pb-3 mb-3 border-bottom">
    <a href="/bmi" class="d-flex align-items-center text-dark text-decoration-none">
      <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>BMI</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="#0d6efd"></path></svg>
      <span class="fs-4">Kalkulator <c style="color: #0d6efd;">BMI</c> (IMT)</span>
    </a>
  </header>

  <main>
    <p class="fs-6 col-md-12 mb-4">Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah berat badan Anda ideal atau tidak. Anda juga dapat menggunakannya untuk memeriksa indeks massa tubuh anak.</p>

    <div class="mb-5">
      <form action="hasil.php" method="GET">
      <div class="mb-3">
        <label for="gender" class="form-label">Apa jenis kelamin Anda?</label><br/>
        <input type="radio" class="btn-check" id="gender1" name="gender" value="Laki-laki" autocomplete="off" required>
        <label class="btn btn-outline-primary" for="gender1"><img src="img/boy.png" class="br5" alt="Laki-laki" width="28" height="28"> Laki-laki</label>
        <input type="radio" class="btn-check" id="gender2" name="gender" value="Perempuan" autocomplete="off" required>
        <label class="btn btn-outline-primary" for="gender2"><img src="img/girl.png" class="br5" alt="Perempuan" width="28" height="28"> Perempuan</label>
      </div>
      <div class="mb-3">
        <label for="age" class="form-label">Berapa usia Anda? (tahun)</label>
        <input type="number" class="form-control" id="umur" name="umur" required="yes">
      </div>
      <div class="mb-3">
        <label for="tinggi" class="form-label">Berapa tinggi Anda? (cm)</label>
        <input type="number" class="form-control" id="tinggi" name="tinggi" required="yes">
      </div>
      <div class="mb-3">
        <label for="berat" class="form-label">Berapa berat badan Anda? (kg)</label>
        <input type="number" class="form-control" id="berat" name="berat" required="yes">
      </div>
      <button type="submit" class="btn btn-primary">Hitung</button>
      </form>
    </div>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
      <div class="col-md-12">
        <h5>Referensi projects</h5>
        <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
        <ul class="icon-list">
          <li><a class="skul" href="https://www.calculator.net/bmi-calculator.html" rel="noopener" target="_blank">BMI Calculator | Calculator.net</li>
          <li><a class="skul" href="https://www.cdc.gov/healthyweight/assessing/bmi/adult_bmi/index.html" rel="noopener" target="_blank">Centers for Disease Control and Prevention | CDC.gov</a></li>
        </ul>
      </div>
      <ul style="padding: 0px;margin: 0px 20px;">
            <li class="reff"><a href="https://hellosehat.com/health-tools/kalkulator-bmi/" target="_blank" style="cursor:pointer" title="hellosehat"> <img class="w-auto hvr-push" src="img/hellosehat-logo.png" alt="hellosehat" height="20" weight="20" class="w-auto hvr-push"></a></li>
      </ul>
    </div>
  </main>
  <footer class="pt-4 my-3 text-muted border-top">
    Created by <a href="#" class="skul" data-bs-toggle="modal" data-bs-target="#weare">Akouji</a> &middot; &copy; <script>document.write(new Date().getFullYear())</script>
  </footer>
</div>

<!-- Modal -->
<div class="modal fade" id="weare" tabindex="-1" aria-labelledby="weareLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        This project is made only to fulfill a school assignment, and this site reference from <a href="https://hellosehat.com/health-tools/kalkulator-bmi/" class="skul" target="_blank"><i>hellosehat.com</i></a> so All site material is property of their respective copyrights owners.
        <br><br>
        Akouji <i class="text-muted"><small>(don't remove a credit)</small></i>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Thanks</button>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>