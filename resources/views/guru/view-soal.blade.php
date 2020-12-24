<title> Soal </title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">

@include('guru.nav-guru')

    <!-- MAIN -->
    <div class="col p-4" style="margin-top: 40px;">

    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Beranda</a></li>
    <li class="breadcrumb-item"><a href="">Jadwal</a></li>
    <li class="breadcrumb-item active" aria-current="page"> Soal</li>
     </ol>
    </nav>

    <div class="card">
    <h5 class="card-header font-weight bg-primary" style="color: white;"> kelas - mapel - nama guru nip </h5>
    <div class="card-body">
    <div class="col-sm-6" style="margin-left: -10px">
    <a href="/guru/jadwal/{{$jadwal->id_jadwal}}/materi/{{$materi->id_materi}}/soal/tambah"> <button type="button" class="btn btn-dark"> Buat Soal</button> </a>
    <hr>
     <br>

    <table class="table table-bordered table-striped ">
    <thead class="text-center">
      <tr>
        <th>No</th>
        <th>Nama Soal</th>
        <th>Jumlah Soal</th>
        <th colspan="4">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($dataSoal as $soal)
        <tr>
            <td class="text-center" width="5%">{{$loop->iteration + (($dataSoal->currentPage() - 1) * $dataSoal->perPage())}}</td>
            <td>{{$soal->nama_soal}}</td>
            <td>{{$soal->jumlah_soal}} Soal</td>

            <td class="text-center"  width="10%" colspan="2">
                <a href=""><button type="button" class="btn btn-outline-warning"> Detail Soal </button></a>
                <a href="/guru/jadwal/{{$jadwal->id_jadwal}}/materi/{{$materi->id_materi}}/soal/{{$soal->id_soal}}/ubah"><button type="button" class="btn btn-outline-primary"> Ubah </button></a></td>
                <td class="text-center" width="10%">
                <form action="">
                @csrf

                <button type="submit"  onclick="archiveFunction()" name="archive" class="btn btn-outline-danger" > Hapus</button></td>

            </form>
          </tr>
        @endforeach

    </tbody>
  </table>

    </div>
    </div>
    </div><!-- Main Col END -->
</div><!-- body-row END -->

@include('footer')
<script>
    function archiveFunction() {
    event.preventDefault(); // prevent form submit
    var form = event.target.form; // storing the form
            swal({
      title: "Anda yakin ingin hapus?",
      text: "Data anda akan dihapus secara permanen.",
      type: "warning",
      showCancelButton: true,
      confirmButtonColor: "#DD6B55",
      confirmButtonText: "Iya",
      cancelButtonText: "Tidak",
      closeOnConfirm: false,
      closeOnCancel: false
    },
    function(isConfirm){
      if (isConfirm) {
        form.submit();          // submitting the form when user press yes
      } else {
        swal("Batal", "Data anda aman", "error");
      }
    });
    }
    </script>
