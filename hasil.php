<?php 
if (isset($_GET['umur'])) { 
$height = $_GET['tinggi'];
$weight = $_GET['berat'];
$gender = $_GET['gender'];
$age    = $_GET['umur'];
function bmi($weight,$height) {
$bmi = $weight/($height/100*$height/100);
return $bmi;
} 
$bmi = bmi($weight,$height);
if ($bmi <= 18.5) {
$stats1 = "<b>Kekurangan Bobot</b>";
$stats2 = "Sehat";
$stats3 = "Kelebihan Bobot";
$stats4 = "Obesitas";
if ($gender == "Laki-laki") {
$img1   = "img/bmi-underweight-male-active.svg";
$img2   = "img/bmi-healthy-male-inactive.svg";
$img3   = "img/bmi-overweight-male-inactive.svg";
$img4   = "img/bmi-obese_level_1-male-inactive.svg";
} else {
$img1   = "img/bmi-underweight-female-active.svg";
$img2   = "img/bmi-healthy-female-inactive.svg";
$img3   = "img/bmi-overweight-female-inactive.svg";
$img4   = "img/bmi-obese_level_1-female-inactive.svg";
}
} else if ($bmi > 18.5 AND $bmi<=24.9 ) {
$stats1 = "Kekurangan Bobot";
$stats2 = "<b>Sehat</b>";
$stats3 = "Kelebihan Bobot";
$stats4 = "Obesitas";
if ($gender == "Laki-laki") {
$img1   = "img/bmi-underweight-male-inactive.svg";
$img2   = "img/bmi-healthy-male-active.svg";
$img3   = "img/bmi-overweight-male-inactive.svg";
$img4   = "img/bmi-obese_level_1-male-inactive.svg";
} else {
$img1   = "img/bmi-underweight-female-inactive.svg";
$img2   = "img/bmi-healthy-female-active.svg";
$img3   = "img/bmi-overweight-female-inactive.svg";
$img4   = "img/bmi-obese_level_1-female-inactive.svg";
}
} else if ($bmi > 24.9 AND $bmi<=29.9) {
$stats1 = "Kekurangan Bobot";
$stats2 = "Sehat";
$stats3 = "<b>Kelebihan Bobot</b>";
$stats4 = "Obesitas";
if ($gender == "Laki-laki") {
$img1   = "img/bmi-underweight-male-inactive.svg";
$img2   = "img/bmi-healthy-male-inactive.svg";
$img3   = "img/bmi-overweight-male-active.svg";
$img4   = "img/bmi-obese_level_1-male-inactive.svg";
} else {
$img1   = "img/bmi-underweight-female-inactive.svg";
$img2   = "img/bmi-healthy-female-inactive.svg";
$img3   = "img/bmi-overweight-female-active.svg";
$img4   = "img/bmi-obese_level_1-female-inactive.svg";
}
} else if ($bmi > 30.0) {
$stats1 = "Kekurangan Bobot";
$stats2 = "Sehat";
$stats3 = "Kelebihan Bobot";
$stats4 = "<b>Obesitas</b>";
if ($gender == "Laki-laki") {
$img1   = "img/bmi-underweight-male-inactive.svg";
$img2   = "img/bmi-healthy-male-inactive.svg";
$img3   = "img/bmi-overweight-male-inactive.svg";
$img4   = "img/bmi-obese_level_1-male-active.svg";
} else {
$img1   = "img/bmi-underweight-female-inactive.svg";
$img2   = "img/bmi-healthy-female-inactive.svg";
$img3   = "img/bmi-overweight-female-inactive.svg";
$img4   = "img/bmi-obese_level_1-female-active.svg";
}
}
} else
{
   echo "<script>alert('Harap isi semua data terlebih dahulu.');window.location='/bmi';</script>";
   exit;
}
?>
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
    <center>
    <p class="fs-4 col-md-12 mt-4 mb-4">BMI Anda adalah <c style="color: #0d6efd;font-weight: bold;"><?php echo number_format($bmi, 2); ?></c></p>
    <figure class="figure px-4">
      <img src="<?php echo $img1; ?>" class="figure-img img-fluid rounded">
      <figcaption class="figure-caption"><?php echo $stats1; ?></figcaption>
    </figure>
    <figure class="figure px-4">
      <img src="<?php echo $img2; ?>" class="figure-img img-fluid rounded">
      <figcaption class="figure-caption"><?php echo $stats2; ?></figcaption>
    </figure>
    <figure class="figure px-4">
      <img src="<?php echo $img3; ?>" class="figure-img img-fluid rounded">
      <figcaption class="figure-caption"><?php echo $stats3; ?></figcaption>
    </figure>
    <figure class="figure px-4">
      <img src="<?php echo $img4; ?>" class="figure-img img-fluid rounded">
      <figcaption class="figure-caption"><?php echo $stats4; ?></figcaption>
    </figure>
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5eba74b66fa8080012c687b3&product=sop' async='async'></script>
    <div class="sharethis-inline-share-buttons mt-4"></div>
    </center>

    <p class="fs-6 col-md-12 mt-4 mb-4 text-muted">Alat ini hanya untuk skrining yang bisa Anda lakukan mandiri, setelah melihat hasil ini, sebaiknya tetap konsultasi ke dokter agar tahu lebih pasti kondisi kesehatan Anda saat ini. </p>

    <div class="mb-5">
        <div class="mt-4">
        <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
        <a class="nav-link active" data-toggle="tab" href="#kondisi" role="tab" aria-selected="true">
        <span class="d-md-inline-block" style="font-weight: 500;">Kondisi</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#resiko" role="tab" aria-selected="false">
        <span class="d-md-inline-block" style="font-weight: 500;">Resiko</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#saran" role="tab" aria-selected="false">
        <span class="d-md-inline-block" style="font-weight: 500;">Saran</span>
        </a>
        </li>
        </ul>
        <div class="tab-content pt-3">
        <div class="tab-pane active" id="kondisi" role="tabpanel">
          <div class="card card-body">
            <?php
              if ($bmi <= 18.5) {
                echo "Nilai IMT di bawah 18,5 menandakan berat badan Anda kurang (underweight)";
              } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                echo "Jika nilai indeks massa tubuh Anda 18.5 sampai 24.9, artinya Anda memiliki berat badan normal.";
              } else if ($bmi > 24.9 AND $bmi<=29.9) {
                echo "Anda dianggap memiliki kelebihan berat badan, jika indeks massa tubuh (BMI) mencapai 25.0—29.9.";
              } else if ($bmi > 30.0) {
                echo "Anda mengalami obesitas, jika BMI menunjukkan lebih dari 30.";
              }
            ?>
          </div>
        </div>
        <div class="tab-pane" id="resiko" role="tabpanel">
          <div class="card card-body">
            <?php
              if ($bmi <= 18.5) {
                echo "Berdasarkan hasil penelitian dari <a href='https://www.nhs.uk/live-well/healthy-weight/advice-for-underweight-adults/' style='display: contents;' class='fst-italic' target='_blank'>United Kingdom National Health Service</a>, ketika berat badan Anda cukup rendah dari berat ideal, Anda juga memiliki risiko penyakit tertentu akibat kekurangan nutrisi dan sistem kekebalan tubuh yang lemah. Hal ini membuka peluang pada risiko kesehatan berikut:<br/>– Malnutrisi.<br/>– Anemia.<br/>– Osteoporosis karena kekurangan kalsium dan vitamin D.<br/>– Masalah kesuburan dari siklus menstruasi tidak teratur.<br/>– Risiko komplikasi operasi yang lebih tinggi.<br/>– Pertumbuhan dan masalah perkembangan yang terhambat pada anak dan remaja.";
              } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                echo "Orang dengan nilai indeks massa tubuh normal tetap mungkin berisiko mengalami penyakit tertentu. Namun risikonya lebih rendah ketimbang orang dengan nilai IMT yang tidak normal.<br/><br/>Orang dengan IMT normal juga bisa memiliki persen lemak yang tinggi, maka itu harus dihitung lemak tubuh dan kondisi metabolismenya. Supaya bisa mencegah beragam penyakit kronis, penting untuk menjaga pola hidup sehat, mulai dari pola makan yang baik, olahraga, serta pemeriksaan kesehatan secara rutin.";
              } else if ($bmi > 24.9 AND $bmi<=29.9) {
                echo "Menurut <a href='https://www.cdc.gov/healthyweight/effects/index.html' style='display: contents;' class='fst-italic' target='_blank'>Centers for Disease Controls (CDC)</a>, kelebihan berat badan dapat meningkatkan risiko diabetes tipe 2, hipertensi, gangguan jantung, stroke, osteoartritis, perlemakan hati (fatty liver), penyakit ginjal, hingga beberapa jenis kanker tertentu.";
              } else if ($bmi > 30.0) {
                echo "Obesitas membawa efek bagi tubuh, meningkatkan risiko kematian, serta mengembangkan kondisi kesehatan tertentu, seperti:<br/>– Diabetes tipe 2<br/>– Kolesterol LDL tinggi, kolesterol HDL rendah, atau kadar lipid darah yang tidak sehat<br/>– Penyakit jantung koroner<br/>– Stroke<br/>– Penyakit kantung empedu<br/>– Osteoartritis<br/>– Sleep apnea dan masalah pernapasan<br/>– Peradangan kronis dan peningkatan stres oksidatif<br/>– Kanker<br/>– Depresi klinis, kecemasan, dan kondisi kesehatan mental lainnya";
              }
            ?>
          </div>
        </div>
        <div class="tab-pane" id="saran" role="tabpanel">
          <div class="card card-body">
            <?php
              if ($bmi <= 18.5) {
                echo "Bila Anda ingin meningkatkan berat badan, Anda perlu mengetahui terlebih dulu berapa banyak kalori yang dibutuhkan tubuh per harinya. Agar tubuh mendapatkan sumber energi yang maksimal untuk beraktivitas.<br/><br/>Menambah berat badan harus menambah massa otot bukan menambah massa lemak. Proporsi makanan harus diperhatikan tidak hanya kalori saja perlu zat gizi makro (karbohidrat, protein, lemak) dan mikro (vitamin dan mineral).";
              } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
                echo "Jika Anda ingin menjaga berat badan, penting untuk mengetahui berapa banyak kalori yang Anda butuhkan per harinya, agar tubuh mampu melakukan fungsinya dalam beraktivitas sehari-hari. Anda perlu mengonsumsi makanan dan minuman dengan jumlah kalori harian yang sesuai dengan kebutuhan tubuh.<br/><br/>Misalnya, jika kebutuhan kalori harian 1950 kkal, pastikan Anda mengonsumsi makanan dan minuman yang sesuai dengan nilai kalori tersebut. Jangan lupa juga untuk menggunakan prinsip gizi seimbang. Dengan begitu, semua jenis gizi yang dibutuhkan tubuh akan terpenuhi dengan baik.";
              } else if ($bmi > 24.9 AND $bmi<=29.9) {
                echo "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.<br/><br/>Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.";
              } else if ($bmi > 30.0) {
                echo "Jika ingin menurunkan berat badan, ketahui dulu berapa banyak kalori yang Anda butuhkan per hari untuk menjalankan fungsi dasar tubuh dan aktivitas sehari-hari. Penting juga untuk mengetahui bagaimana kondisi kesehatan Anda saat ini, karena hal ini akan memengaruhi perhitungan kalori harian.<br/><br/>Selanjutnya, lihat label informasi nilai gizi pada produk, catat berapa kalori yang akan dikonsumsi. Sesuaikan dengan jumlah kalori yang sudah dikurangi sebelumnya dari total kebutuhan kalori harian. konsumsi makanan dan minuman dengan kandungan kalori yang lebih sedikit dari kebutuhan harian.";
              }
            ?>
          </div>
        </div>
        </div>
        </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script async="async" type="text/javascript" src="https://cdn.yamidrive.com/assets/js/style.js"></script>

</body>
</html>