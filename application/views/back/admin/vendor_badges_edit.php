<?php
foreach ($all_badges as $row) {
    ?>
    <div>
        <?php
        echo form_open(base_url() . 'index.php/admin/vendor_badges_awards/update/' . $row['vendor_badges_id'], array(
            'class' => 'form-horizontal',
            'method' => 'post',
            'id' => 'vendor_badges_edit',
            'enctype' => 'multipart/form-data'
        ));
        ?>
        <div class="panel-body">

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-1"><?php echo translate('badge_name'); ?></label>
                <div class="col-sm-9">
                    <input type="text" value="<?php echo $row['badge_name']; ?>" 
                           name="badge_name" id="demo-hor-1" class="form-control required">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-2"><?php echo translate('badge_logo'); ?></label>
                <div class="col-sm-9">
                    <span class="pull-left btn btn-default btn-file">
                        <?php echo translate('select_bagde_logo'); ?>
                        <input type="file" name="img" id='imgInp' accept="image">
                    </span>
                    <br><br>
                    <span id='wrap' class="pull-left" >
                        <img src="<?php echo $this->crud_model->file_view('vendor_badges', $row['vendor_badges_id'], '', '', 'no', 'src', '', '', '.png') ?>" width="60%" id='blah' >
                    </span>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="demo-hor-3"><?php echo translate('active'); ?></label>
                <div class="col-sm-9">
                    <select name="active" class="form-control demo-chosen-select">
                        <option value="0"<?php
                        if ($row['is_active'] == 0) {
                            echo 'selected';
                        }
                        ?>><?php echo translate('no') ?></option>
                        <option value="1"<?php
                        if ($row['is_active'] == 1) {
                            echo 'selected';
                        }
                        ?>><?php echo translate('yes') ?></option>
                    </select>
                </div>
            </div>
        </div>      
    </form>
    </div>

    <?php
}
?>
<script src="<?php echo base_url(); ?>template/back/js/custom/brand_form.js"></script>
