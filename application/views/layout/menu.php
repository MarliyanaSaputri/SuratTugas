
    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">DISKOMINFO</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active"><a href="<?php echo base_url();?>home"><i class="fa fa-bullseye"></i> Dashboard</a></li>
                    <li><a href="<?php echo base_url();?>pegawai"><i class="fa fa-book"></i> Data Pegawai</a></li>
                   
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-th"></i> Bidang<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url();?>Bidang"><i class="fa fa-file"></i> Daftar Bidang</a></li>
                            <li><a href="#"><i class="fa fa-plus"></i> Tambah </a></li>
                        </ul>
                    </li>
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-list-ol"></i> Surat perintah<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>surattugas"><i class="fa fa-file"></i> Data Surat Perintah Tugas</a></li>
                            <li><a href="<?php echo base_url();?>surattugas/formtambahspt"><i class="fa fa-plus"></i> Tambah Surat Perintah Tugas</a></li>
                        </ul>
                    </li>
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plane"></i> Dinas Luar<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url(); ?>DinasLuar"><i class="fa fa-file"></i> Data Dinas Luar</a></li>
                            <li><a href="<?php echo base_url(); ?>DinasLuar/tambahdl"><i class="fa fa-plus"></i> Tambah Data Dinas Luar</a></li>
                            <li><a href="<?php echo base_url();?>dinasluar1/nota"><i class="fa fa-check"></i> Nota Dinas Luar </a></li>
                        </ul>
                    </li>
                   
                </ul>
                 
                <ul class="nav navbar-nav navbar-right navbar-user">
       
                     <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Steve Miller<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                            <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-power-off"></i> Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
