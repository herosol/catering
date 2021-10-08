<?= getBredcrum(ADMIN, array('#' => 'Manage Menus')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Menus</strong></h2>
    </div>
    <div class="col-md-6 text-right">
    </div>
</div>
<div>
    <hr>
    <h3></h3>
<form role="form" action="<?= base_url().ADMIN ?>/sitecontent/save_menu_name"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> <?= !empty($id) ? 'Edit' : 'Add'?> Menu</h3>
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$id?>" />
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="menu_name" class="control-label"> Menu Name <span class="symbol required">*</span></label>
                            <input type="text" name="menu_name" value="<?= $record->menu_name ?>" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
                </div>
            </div>
        </form>

        <table class="table table-bordered datatable" id="table-1">
                <thead>
                    <tr>
                        <th width="10%" class="text-center">Sr#</th>
                        <th width="70%">Menu Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($menus) > 0): $count = 0; ?>
                        <?php foreach ($menus as $row): ?>
                            <tr class="odd gradeX">
                                <td class="text-center"><?= ++$count; ?></td>
                                <td><b><?= $row->menu_name ?></b></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                        <ul class="dropdown-menu dropdown-primary" role="menu">
                                                <li><a href="<?= site_url(ADMIN); ?>/sitecontent/menus/<?= $row->id; ?>">Edit</a></li>
                                                <li><a href="<?= site_url(ADMIN); ?>/sitecontent/menu_detail/<?= $row->id; ?>">Menu Detail</a></li>
                                                <?php if(access(10)):?>
                                                    <li><a href="<?= site_url(ADMIN); ?>/sitecontent/delete_menus/<?= $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                                <?php endif?>
                                    </ul>
                                </div>  
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
        
</div>