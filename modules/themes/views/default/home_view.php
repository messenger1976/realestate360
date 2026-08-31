<?php 
$curr_lang = ($this->uri->segment(1)!='')?$this->uri->segment(1):'en';
?>
        <div class="row">
          <?php $current_url = base64_encode(current_url().'/#data-content');?>
          <div id="data-content" class="col-md-9"  style="-webkit-transition: all 0.7s ease-in-out; transition: all 0.7s ease-in-out;">
                <div class="recent-grid"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key('DBC_RECENT_PROPERTIES'); ?>
                    <?php require'switcher_view.php';?>
                </div>                    

              <!-- Thumbnails container -->
              <?php
              $query = (isset($recents))?$recents:array();
              if($this->session->userdata('view_style')=='list')
              {
                  require'list_view.php';
              }
              else if($this->session->userdata('view_style')=='map')
              {
                  $map_id = 'recent_map_view';
                  require'map_view.php';
              }
              else
              {                  
                  require'grid_view.php';
              }
              ?>
              <div class="clearfix"></div>
              <?php if($query->num_rows()>0){?>
              <div class="view-more"><a class="" href="<?php echo site_url('show/properties/recent');?>"><?php echo lang_key('DBC_VIEW_ALL');?></a></div>
              <?php }?>
                <div class="recent-grid"><i class="fa fa-home fa-4"></i>&nbsp;<?php echo lang_key('DBC_FEATURED_PROPERTIES'); ?>
                    <?php require'switcher_view.php';?>
                </div>
              <?php
              $query = (isset($featured))?$featured:array();
              if($this->session->userdata('view_style')=='list')
              {
                  require'list_view.php';
              }
              else if($this->session->userdata('view_style')=='map')
              {
                  $map_id = 'featured_map_view';
                  require'map_view.php';
              }
              else
              {
                  require'grid_view.php';
              }
              ?>
              <!-- /Thumbnails container -->
              <div class="clearfix"></div>
              <?php if($query->num_rows()>0){?>
              <div class="view-more"><a class="" href="<?php echo site_url('show/properties/featured');?>"><?php echo lang_key('DBC_VIEW_ALL');?></a></div>
              <?php }?>
          </div>


          <div class="col-md-3">
            <?php render_widgets('right_bar_home');?>
          </div>


        </div> <!-- /row -->
