<?= $this->extend('layout/page_layout') ?>
<?= $this->section('sidebar_menu')?>
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="<?=site_url('Home')?>" class="nav-link ">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?=site_url('Input')?>" class="nav-link ">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Input
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?=site_url('Search')?>" class="nav-link active">
                    <i class="nav-icon fas fa-search"></i>
                    <p>
                        Pencarian
                    </p>
                </a>
            </li>
        </ul>
    </nav>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Pencarian Data</h1>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="../index.html">Home</a></li>
                            <li class="breadcrumb-item active">Pencarian</li>
                        </ol>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- general form elements -->
                <div class="card card-body card-primary">
                    <form class="row">
                        <div class="form-group col-md-6">
                            <label for="perizinan">Jenis Perizinan</label>
                            <select class="custom-select rounded-0" id="perizinan">
                            <?php foreach($izin as $keyizin) :?>
                                <option value="<?= $keyizin['id_jenis_perizinan']?>"><?= $keyizin['nama_perizinan']?></option>
                            <?php endforeach;?>
                            </select>
                        </div>
                        <!-- Date range -->
                        <div class="form-group col-md-6">
                            <label>Rentang Tanggal:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                    <i class="far fa-calendar-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control float-right" id="daterange">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <!-- /.form group -->  
                        <div class="col">
                            <input type="submit" class="btn btn-primary mr-1" value="Proses">
                            <input type="submit" class="btn btn-danger" value="Cetak">
                        </div>
                    </form>
                </div>
                <!-- /.card-body -->
                <!-- Tabel -->
                <div class="card card-body card-primary">
                    <div class="row">
                        <div class="form-group col-12">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Search" id="search-input"></input>
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-search"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div>
                                <table class="table table-striped table-bordered table-responsive">
                                    <thead class="table-dark">
                                        <tr>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">No. Registrasi</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Tanggal</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Nama Lengkap</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Alamat</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">No. Handphone</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Nama Perusahaan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Lokasi Usaha</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Kelurahan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Kecamatan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">No. Izin</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Tanggal Terbit</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">Jenis Perizinan</th>
                                            <th class="text-nowrap text-center" rowspan="1" colspan="1">&nbsp;Action&nbsp;</th>                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="d-none" id="spinner">
                                            <td class="text-center" colspan="13"><span class="spinner-border text-dark"></span></td>
                                        </tr>
                                        <?php foreach($dataperizinan as $perizinan):?>
                                        <tr class="data">
                                            <td><?= $perizinan['NO_REGISTER']?></td>
                                            <td><?= $perizinan['TANGGAL']?></td>
                                            <td><?= $perizinan['NAMA']?></td>
                                            <td><?= $perizinan['ALAMAT']?></td>
                                            <td><?= $perizinan['NO_HP']?></td>
                                            <td><?= $perizinan['PERUSAHAAN']?></td>
                                            <td><?= $perizinan['LOKASI_USAHA']?></td>
                                            <td><?= $perizinan['Kelurahan']?></td>
                                            <td><?= $perizinan['Kecamatan']?></td>
                                            <td><?= $perizinan['TANGGAL_TERBIT']?></td>
                                            <td><?= $perizinan['NO_IZIN']?></td>
                                            <td><?= $perizinan['nama_perizinan']?></td>
                                            <style>
                                                i.text-hover:hover {
                                                    opacity: 80%;
                                                }
                                            </style>
                                            <td class="h5" style="line-height: 20pt;"><a href="/Search/edit/<?= base64_encode($perizinan['NO_REGISTER']); ?>")">
                                                <i class="text-hover text-primary fas fa-pen"></i></a> | <a href="/Search/delete/<?= base64_encode($perizinan['NO_REGISTER']); ?>" onclick="confirm('Apakah Anda yakin ingin menghapus data perizinan dengan No. Register <?= $perizinan['NO_REGISTER']; ?>')"><i class="text-hover text-danger  fas fa-trash"></a></i></td>
                                        </tr>
                                        <?php endforeach?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="text-center" rowspan="1" colspan="1">No. Registrasi</th>
                                            <th class="text-center" rowspan="1" colspan="1">Tanggal</th>
                                            <th class="text-center" rowspan="1" colspan="1">Nama Lengkap</th>
                                            <th class="text-center" rowspan="1" colspan="1">Alamat</th>
                                            <th class="text-center" rowspan="1" colspan="1">No. HP</th>
                                            <th class="text-center" rowspan="1" colspan="1">Nama Perusahaan</th>
                                            <th class="text-center" rowspan="1" colspan="1">Lokasi Usaha</th>
                                            <th class="text-center" rowspan="1" colspan="1">Kelurahan</th>
                                            <th class="text-center" rowspan="1" colspan="1">Kecamatan</th>
                                            <th class="text-center" rowspan="1" colspan="1">No. Izin</th>
                                            <th class="text-center" rowspan="1" colspan="1">Tanggal Terbit</th>
                                            <th class="text-center" rowspan="1" colspan="1">Jenis Perizinan</th>
                                            <th class="text-center" rowspan="1" colspan="1">Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="row">
                                    <div class="col-sm-12 col-md-9">
                                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 
                                            <span>
                                                <select class="" id="perizinan">
                                                    <option >5</option>
                                                    <option selected>10</option>
                                                    <option>25</option>
                                                    <option>50</option>
                                                </select>
                                            </span> of 57 entries
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="dataTables_paginate paging_simple_numbers">
                                            <?= $pager->links('dataperizinan','tabel_paging'); ?>
                                            <!-- <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled" id="previous"><a href="#" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                <li class="paginate_button page-item next" id="next"><a href="#" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                            </ul> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.container-fluid -->
        </section>
    <!-- /.content -->
    </div>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
    <script>
        $(function () {      
          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()
      
          //Date and time picker
          $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
      
          //Date range picker
          $('#daterange').daterangepicker()
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            locale: {
              format: 'MM/DD/YYYY hh:mm A'
            }
          })
          //Date range as a button
          $('#daterange-btn').daterangepicker(
            {
              ranges   : {
                'Today'       : [moment(), moment()],
                'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate  : moment()
            },
            function (start, end) {
              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
          )
      
          //Timepicker
          $('#timepicker').datetimepicker({
            format: 'LT'
          })      
        })

        // Script untuk pencarian
        $(document).ready(function() {
            $('#search-input').change(function() {
                $('tbody').find('tr.data').remove();
                $('#spinner').removeClass('d-none');
                let keyword = $(this).val();
                $.ajax({
                    url: '<?php base_url(); ?>/index.php/Search/search',
                    method: 'post',
                    data: {keyword:keyword},
                    dataType: 'json',
                    success: function(response) {
                        $('#spinner').addClass('d-none');
                        $.each(response, function(index,data) {
                            console.log(data);
                        })
                    },
                    error: function() {
                        $('#spinner').addClass('d-none');
                    }
                })
            })  
        })
    </script>
<?= $this->endSection() ?>