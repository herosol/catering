<?= getBredcrum(ADMIN, array('#' => 'Edit Menu')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong><?=$record->menu_name?></strong></h2>
    </div>
    <div class="col-md-6 text-right">
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <input type="hidden" name="something" />
            <h3> Main Section</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Banner Image 1
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOAD_PATH."images/", $row['image1']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*" <?php if(empty($row['image1'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Banner Image 2
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image2']) ? getImageSrc(UPLOAD_PATH."images/", $row['image2']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image2" accept="image/*" <?php if(empty($row['image2'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Banner Image 3
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image3']) ? getImageSrc(UPLOAD_PATH."images/", $row['image3']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image3" accept="image/*" <?php if(empty($row['image3'])){echo 'required=""';}?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="main_content" class="control-label"> Menu Content <span class="symbol required">*</span></label>
                                <textarea name="main_content" rows="3" class="form-control ckeditor" required=""><?= $row['main_content'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            <h2>Packages</h2>
            <div class="row">
                <div class="col-md-4">
                    <h3>Silver</h3>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Price <span class="symbol required">*</span></label>
                            <input type="text" name="silver_price" value="<?= $row['silver_price']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Price For <span class="symbol required">*</span></label>
                            <input type="text" name="silver_per_head" value="<?= $row['silver_per_head']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="silver_content" class="control-label"> Menu Content <span class="symbol required">*</span></label>
                            <textarea name="silver_content" rows="3" class="form-control ckeditor" required=""><?= $row['silver_content'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Gold</h3>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Price <span class="symbol required">*</span></label>
                            <input type="text" name="gold_price" value="<?= $row['gold_price']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Price For <span class="symbol required">*</span></label>
                            <input type="text" name="gold_per_head" value="<?= $row['gold_per_head']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="gold_content" class="control-label"> Menu Content <span class="symbol required">*</span></label>
                            <textarea name="gold_content" rows="3" class="form-control ckeditor" required=""><?= $row['gold_content'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Platinum</h3>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Price <span class="symbol required">*</span></label>
                            <input type="text" name="platinum_price" value="<?= $row['platinum_price']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Price For <span class="symbol required">*</span></label>
                            <input type="text" name="platinum_per_head" value="<?= $row['platinum_per_head']?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="platinum_content" class="control-label"> Menu Content <span class="symbol required">*</span></label>
                            <textarea name="platinum_content" rows="3" class="form-control ckeditor" required=""><?= $row['platinum_content'] ?></textarea>
                        </div>
                    </div>
                </div>
                
            </div> 
</div>

<div class="form-group">
    <label for="field-1" class="col-sm-2 control-label "></label>
    <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
    </div>
</div>
</form>


</div>
        
</div>