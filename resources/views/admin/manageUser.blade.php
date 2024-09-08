@extends('base')

@section('head')
    
@endsection

@section('body')
<header class="header bg-light" id="header">
    <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
</header>
<div class="l-navbar sidebar bg-white" id="nav-bar">
  <nav class="nav">
    <div>
        <a href="" class="nav_logo"> <img src="" alt=""
                height="25px"><span class="nav_logo-name text-black">Admin</span></a>
        <div class="nav_list">
            <a href="" class="nav_link active rounded-end">
                <i class='bx bx-grid-alt nav_icon'></i>
                <span class="nav_name">Dashboard</span> </a>
            <a href="" class="nav_link"> <i class='bx bxs-t-shirt'></i> <span
                    class="nav_name">Manage User</span>
            </a>
            <a href="" class="nav_link"> <i class='bx bx-notepad'></i> <span class="nav_name">Manage Laporan</span> </a>
            <a href="" class="nav_link"> <i class='bx bx-timer'></i> <span class="nav_name">Log Activity</span> </a>
        </div>
    </div> <a href="" class="nav_link logout-btn rounded-end"> <i class='bx bx-log-out nav_icon'></i> <span
            class="nav_name">Log Out</span> </a>
</nav>
</div>

<main>
    <!--Container Main start-->
    <h4><b>Manage Anggota</b></h4>
    <!-- Search and Add -->


    <!-- Data -->
    <div class="mt-2 d-flex justify-content-around">
    <table class="table  table-striped">
      <thead>
        <tr>
          
          <th class="text-center">Email</th>
          <th class="text-center">Tanggal Mulai</th>
          <th class="text-center">Tanggal Selesai</th>
          <th class="text-center">Denda</th>
          <th class="text-center">Total</th>
          <th class="text-center">Foto Transfer</th>
          <th class="text-center">Status</th>
          <th class="text-center">Alamat</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"></td>
          <td class="text-center"><img src="" alt="" style="width: 100px; height: 100px;" class="rounded "></td>
          
          <td class="text-center"></td>
          
        </tr>
      </tbody>
    </table>
  </div>
</main>

<script src="{{ asset('js/sideMenu.js') }}"></script>
<script>
    $(document).ready(function() {
        // Memunculkan modal saat gambar diklik
        $('.product-image').click(function() {
            var imageUrl = $(this).attr('src');
            $('#modalImage').attr('src', imageUrl);
            $('#imageModal').modal('show');
        });
    });
</script>
@endsection