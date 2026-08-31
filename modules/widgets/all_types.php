<div class="recent-grid"><i class="fa fa-puzzle-piece"></i>&nbsp;<?php echo lang_key('DBC_TYPE_FILTERS'); ?></div>
            <div class="well">
                <ul class="nav nav-pills nav-stacked">
                    <?php 
                    $filter_options = array('DBC_TYPE_APARTMENT'=>'apartment',
                                            'DBC_TYPE_HOUSE'=>'house',
                                            'DBC_TYPE_LAND'=>'land',
                                            'DBC_TYPE_COMSPACE'=>'com_space',
                                            'DBC_TYPE_CONDO'=>'condo',
                                            'DBC_TYPE_VILLA'=>'villa');
                    foreach ($filter_options as $k=>$v) {
                    ?>
                    <li class="<?php echo is_active_menu('show/type/'.$v);?>">
                        <a href="<?php echo site_url('show/type/'.$v);?>">
                            <i class="fa fa-indent"></i>&nbsp;<?php echo lang_key($k);?>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
            <div style="clear:both"></div>