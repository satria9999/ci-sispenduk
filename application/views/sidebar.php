<div class="sl-logo"><a href=""><i class="icon ion-android-star-outline"></i> Sukaluyu</a></div>
    <div class="sl-sideleft">
      <div class="input-group input-group-search">
        <input type="search" name="search" class="form-control" placeholder="Search">
        <span class="input-group-btn">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span><!-- input-group-btn -->
      </div><!-- input-group -->
      
<label class="sidebar-label">Navigation</label>
      <div class="sl-sideleft-menu">
        <a href="<?php echo base_url('Dashboard/Dashboard');?>" class="sl-menu-link active">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
            <span class="menu-item-label">Dashboard</span>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon ion-ios-pie-outline tx-20"></i>
            <span class="menu-item-label">Form Input Penduduk & KK</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard/form_penduduk');?>" class="nav-link">Form Input Penduduk</a></li>
        <li class="nav-item" ><a href="<?php echo base_url('Dashboard/form_kartukeluarga');?>" class="nav-link">Form Input Kartu Keluarga</a></li>
        </ul>
        <a href="#" class="sl-menu-link">
          <div class="sl-menu-item">
            <i class="menu-item-icon icon ion-ios-folder-outline tx-20"></i>
            <span class="menu-item-label">Table Penduduk & KK</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- sl-menu-link -->
        <ul class="sl-menu-sub nav flex-column">
          <li class="nav-item"><a href="<?php echo base_url('Dashboard/lihat_penduduk');?>" class="nav-link">Table Penduduk</a></li>
          <li class="nav-item"><a href="<?php echo base_url('Dashboard/lihat_kartukeluarga');?>" class="nav-link">Table Kartu Keluarga</a></li>
        </ul>
                
      
      </div><!-- sl-sideleft-menu -->

      <br>
    </div><!-- sl-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->