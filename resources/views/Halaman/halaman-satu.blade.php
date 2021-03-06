

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
     @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Form Data Karyawan  </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container">
        <div class="col-lg-8">
            <div class="page-header">
                  
            <!-- <h1> halaman satu form lembur </h1> -->
       
            <form method="POST" action="{{ route('simpan') }}">
            @csrf
            
             <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >NIK Karyawan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik_karyawan" name="nik_karyawan" required >
                </div>
              </div>

              <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >Golongan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="golongan" required >
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="golongan" class="col-sm-2 col-form-label"  > Golongan Karyawan </label>
                <div class="col-sm-10">
                    <select name="golongan" class="form-control" > 
                      <option value='5' selected="selected">5</option>
                      <option value='6'>6</option>
                      <option value='7'>7</option>
                      <option value='8'>8</option>
                      <option value='9'>9</option>
                    </select>
                </div>
              </div> -->

              <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >Jabatan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik_karyawan" name="jabatan_karyawan" required >
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="jabatan_karyawan" class="col-sm-2 col-form-label"  > Jabatan Karyawan </label>
                <div class="col-sm-10">
                    <select name="jabatan_karyawan" class="form-control"> 
                      <option value='Manager' selected="selected">Manager</option>
                      <option value='Supervisor'>supervisor</option>
                      <option value='Officer'>officer</option>
                      <option value='Senior Manager'>Senior Manager</option>
                      <option value='Staff'>Staff</option>
                      <option value='Operator'>Operator</option>
                    </select>
                </div>
              </div> -->

              <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >Department</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik_karyawan" name="department" required >
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Department </label>
                <div class="col-sm-10">
                    <select name="department" class="form-control"> 
                      <option value='Finance Accounting' selected="selected">Finance Accounting</option>
                      <option value='Trade Marketing'>Trade Marketing</option>
                      <option value='Production'>Production</option>
                      <option value='Logistic'>Logistic</option>
                      <option value='Quality Control'>Quality Control</option>
                      <option value='Maintenance'>Maintenance</option>
                    </select>
                </div>
              </div> -->

              <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >Divisi</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik_karyawan" name="divisi" required >
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Divisi </label>
                <div class="col-sm-10">
                    <select name="divisi" class="form-control"> 
                      <option value='Finance Accounting' selected="selected">Finance Accounting</option>
                      <option value='Trade Marketing'>Trade Marketing</option>
                      <option value='Production'>Production</option>
                      <option value='Logistic'>Logistic</option>
                      <option value='Quality Control'>Quality Control</option>
                      <option value='Maintenance'>Maintenance</option>
                    </select>
                </div>
              </div> -->
             

              <div class="form-group row">
                <label for="nama_karyawan" class="col-sm-2 col-form-label" >Nama Karyawan </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_karyawan"  name="nama_karyawan"  required="">
                </div>
              </div>
             

              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label" > Jenis Kelamin </label>
                <div class="col-sm-10">
                   <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin"  id="exampleRadios1" value="Pria" checked>
                      <label class="form-check-label" for="exampleRadios1">
                      Pria
                      </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin"  id="exampleRadios1" value="Wanita" checked>
                        <label class="form-check-label" for="exampleRadios1">
                         Wanita
                        </label>
                    </div>

                </div>
              </div>

              <div class="form-group row">
                <label for="nama_karyawan" class="col-sm-2 col-form-label" > Tanggal Lahir </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control"   name="tanggal_lahir"  required="">
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label" > Tanggal Lahir </label>
                <div class="col-sm-10">
                     <input type="date" name="tanggal_lahir" class="form-control" required> 
                </div>
              </div> -->

             

              <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >Pendidikan Terakhir</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik_karyawan" name="pendidikan_terakhir" required >
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="pendidikan_terakhir" class="col-sm-2 col-form-label"  > Pendidikan Terakhir</label>
                <div class="col-sm-10">
                   <select name='pendidikan_terakhir' class="form-control"> 
                      <option value='SD'>SD</option>
                      <option value='SMP'>SMP</option>
                      <option value='SMA Sederajat'>SMA Sederajat</option>
                      <option value='D3'>D3</option>
                      <option value='S1'>S1</option>
                      <option value='S2'>S2</option>
                    </select>
                </div>
              </div> -->

           

              
              <div class="form-group row">
                <label for="cabang_pt" class="col-sm-2 col-form-label"  > Cabang PT </label>
                <div class="col-sm-10">
                    <select name="cabang_pt" class="form-control"> 
                      <option value='PT Tiga Pilar Sejahtera Food TBK' selected="selected">PT Tiga Pilar Sejahtera Food TBK</option>
                      <option value='PT Tiga Pilar Sejahtera '>PT Tiga Pilar Sejahtera </option>
                      <option value='PT Putra Power Nusantara'>PT Putra Power Nusantara</option>
                      <option value='PT Paly Meditra Indonesia'>PT Paly Meditra Indonesia</option>
                      <option value='PT Putra Taro Paloma '>PT Putra Taro Paloma </option>
                      <option value='PT Subafood Pangan Jaya '>PT Subafood Pangan Jaya</option>
                    </select>
                </div>
              </div>

            
              


              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                   <button type="submit" class="btn btn-primary  btn-lg btn-block"> Submit </button>
                </div>
              </div>


               

            </form>
               
            </div>
        </div>
     </div>
     
     
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')

</body>
</html>
