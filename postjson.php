<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>BaitulQur'an - Penerimaan Santri Baru</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <script src="https://code.jquery.com/jquery-3.5.0.js"> </script>
  <!-- Favicon -->
  <link href="img/logo.png" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
  <p id="show_message" style="display: none">Form data sent. Thanks for your comments.We will update you within 24
    hours. </p>
  <span id="error" style="display: none"></span>
  <div class="container-fluid p-0" id="tampilan">
    <div>
      <div class="carousel-inner">

        <div>
          <!-- <img class="w-100"  src="img/carousel-1.webp" style="width:100%" alt="Image"> -->
          <div
            class="carousel top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
            <div class="text-start p-5" style="max-width: 600px;">
              <div class="container">
                <table>
                  <h3 class="m-0 text-primary"><span class="text-secondary">Masukan</span>Data</h3>
                  <br>
                  <form action="proses.php" id="form" method="POST">
                    <fo class="row g-3">
                      <div class="col-sm-6">
                        <label for="firstName" class="form-label">Nama Depan</label>
                        <input type="text" id="NamaDepan" class="form-control" Name="NamaDepan" placeholder="Budi"
                          value="" required="" style="color:black;">
                        <div class="invalid-feedback">
                          Nama Depan Harus Diisi.
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <label for="lastName" class="form-label">Last name</label>
                        <input type="text" id="NamaBelakang" class="form-control" Name="NamaBelakang"
                          placeholder="Nurhadi" value="" required="" style="color:black;">
                        <div class="invalid-feedback">
                          Nama Belakang Harus Diisi.
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="address" class="form-label">Alamat</label>
                        <input type="text" id="Alamat" class="form-control" name="Alamat"
                          placeholder="Gg.Melon Sukoharjo" required="" style="color:black;">
                        <div class="invalid-feedback">
                          Alamat Harus Diisi.
                        </div>
                      </div>

                      <div class="col-sm-6">
                        <label for="Number" class="form-label">Nomor Telepon</label>
                        <input type="text" class="form-control" id="Nomor" Name="Nomor" placeholder="0812345678"
                          value="" required="" style="color:black;">
                        <div class="invalid-feedback">
                          Nomor Telepon Harus Diisi.
                        </div>
                      </div>

                      <div class="col-sm-6 ">
                        <label for="birth" class="form-label">Tanggal Lahir</label>
                        <input type="date" id="Lahir" class="form-control" Name="Lahir" placeholder="" value=""
                          required="" style="color:black;">
                        <div class="invalid-feedback">
                          Tanggal Lahir Harus Diisi.
                        </div>
                      </div>

                      <div class="col-12">
                        <label for="Motivation" class="form-label">Motivasi</label>
                        <textarea type="text" id="motivasi" class="form-control" name="motivasi"
                          placeholder="aku ingin jadi ustad" required="" style="color:black;">
</textarea>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary" name="proses" id="kirim">KIRIM</button>
                        </div>
                        <div class="invalid-feedback">
                          motivasi Harus Diisi.
                        </div>

                  </form>


                  <div
                    class="carousel top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center">
                    <div class="text-start p-5" style="max-width: 600px;">
                      <div class="container">
                        <table>
                          <h3 class="m-0 text-primary"><span class="text-secondary">Lihat</span>Data</h3>
                          <br>

                        </table>
                      </div>

                    </div>
                    <div class="col-sm-12 align-items-center justify-content-center flex-column">
                      <div id="show-data">
                      </div>
                </table>
</body>




<script type="text/javascript">
  $(document).ready(function () {
    // hide messages 
    // $("#error").hide();
    // $("#show_message").hide();
    // on submit...
    $('#form').submit(function (e) {
      e.preventDefault();
      $("#error").hide();
      //name required
      var NamaDepan = $("#NamaDepan").val();
      if (NamaDepan == "") {
        $("#error").fadeIn().text("Name required.");
        $("#NamaDepan").focus();
        return false;
      }

      var NamaBelakang = $("#NamaBelakang").val();
      if (NamaBelakang == "") {
        $("#error").fadeIn().text("Name required.");
        $("#NamaBelakang").focus();
        return false;
      }
      // email required
      var Alamat = $("#Alamat").val();
      if (Alamat == "") {
        $("#error").fadeIn().text("Alamat required");
        $("#Alamat").focus();
        return false;
      }
      // mobile number required
      var Nomor = $("#Nomor").val();
      if (Nomor == "") {
        $("#error").fadeIn().text("Nomor required");
        $("#Nomor").focus();
        return false;
      }

      var Lahir = $("#Lahir").val();
      if (Lahir == "") {
        $("#error").fadeIn().text("Tanggal Lahir required");
        $("#Lahir").focus();
        return false;
      }

      var motivasi = $("#motivasi").val();
      if (motivasi == "") {
        $("#error").fadeIn().text("motivasi required");
        $("#motivasi").focus();
        return false;
      }
      // ajax
      $.ajax({
        type: "POST",
        url: "proses.php",
        data: $(this).serialize(), // get all form field value in serialize form
        success: function () {
          $(document).scrollTop($(document).height());
          $("#NamaDepan").val('');
          $("#NamaBelakang").val('');
          $("#Alamat").val('');
          $("#Nomor").val('');
          $("#Lahir").val('');
          $("#motivasi").val('');
          const $showData = $('#show-data');

          $.getJSON('http://localhost/baitulhtml/json.php', (respon) => {


            // mengatur ulang format respon dari json menjadi html
            const head = '<li>0: Default</li>'
            const markup = respon
              .map(item =>
                `
        <tr>
<td class="Nama" data-nomer="${item.id}">
    ${item.id}. ${item.NamaDepan} ${item.NamaBelakang}: 
    </td>
<td class="align-text-bottom" data-nomer="${item.id}">
    ${item.Alamat}
<td class="Nomor" data-nomer="${item.id}">
    ${item.Nomor}
    </td>
<td class="TanggalLahir" data-nomer="${item.id}">
    ${item.Lahir}
    </td>
<td class="Motivasi" data-nomer="${item.id}">
    ${item.Motivasi}
    <td>
      <button class="btn btn-danger rounded-3" data-id="<?php echo $result['id']; ?>">Hapus</button>

</td>
     </tr>
     `)
              .join('');

            const list = $('<ul/>').html(`<table class="table table-striped"> <thead><tr>
      <th>Nama</th>
      <th>Alamat</th>
      <th>Nomor HP</th>
      <th>Tanggal Lahir</th>
      <th>Motivasi</th>
      <th>HAPUS DATA</th>
     `+ markup + ` </tr></thead>  </table>`);
            $showData.html(list);
          });
        }
      });
    });
    return false;
  });
</script>

<script>
  $(document).ready(() => {


    const $showData = $('#show-data');

$.getJSON('http://localhost/baitulhtml/json.php', (respon) => {


  // mengatur ulang format respon dari json menjadi html
  const head = '<li>0: Default</li>'
  const markup = respon
    .map(item =>
      `
<tr>
<td class="Nama" data-nomer="${item.id}">
${item.id}. ${item.NamaDepan} ${item.NamaBelakang}: 
</td>
<td class="align-text-bottom" data-nomer="${item.id}">
${item.Alamat}
<td class="Nomor" data-nomer="${item.id}">
${item.Nomor}
</td>
<td class="TanggalLahir" data-nomer="${item.id}">
${item.Lahir}
</td>
<td class="Motivasi" data-nomer="${item.id}">
${item.Motivasi}
</td>
<td> <button class="btn btn-danger rounded-3" id="hapus" data-id="<?php echo $result['id']; ?>">Hapus</button>

                        </td>
</tr>
`)
    .join('');

  const list = $('<ul/>').html(`<table class="table table-striped"> <thead><tr>
<th>Nama</th>
<th>Alamat</th>
<th>Nomor HP</th>
<th>Tanggal Lahir</th>
<th>Motivasi</th>
<th>HAPUS DATA</th>
`+ markup + ` </tr></thead>  </table>`);
  $showData.html(list);
    });
  });
</script>
<script>
  
  $('.hapus').on('click', (event) => {
                // console.log($(event.target).data("id"));
                var hapus = $(event.target).data("id");
                // console.log(hapus);
                $.ajax({
                            url: 'delete.php',
                            method: 'POST',
                            data: {
                                id: hapus
                            },
                          }
                )};
  )
</script>



</html>