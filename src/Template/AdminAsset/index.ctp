<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    รายการทรัพย์สิน
                </h2>
                <?=$this->Html->link('<button type="button" class="btn w-xs btn-success">เพิ่ม</button>',['action'=>'add','search'=>true],['escape'=>false])?>
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                
                <table id="datatable1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 50px;" class="text-center">#</th>
                            <th>รหัสทรัพย์สิน</th>
                            <th class="">ชื่อ</th>
                            <th class="">ราคา</th>
                            <th style="width: 180px;">พนักงานขาย</th>
                            <th style="width: 150px;">ประเภท</th>
                            <th style="width: 120px;">วันที่สร้าง</th>
                            <th style="width: 120px;">วันหมดอายุ</th>
                            <th style="width: 70px;" class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($assets as $a): ?>
                            <tr>
                                <td class="text-center"><?= $seq++ ?></td>
                                <td><strong><?= h($a->code) ?></strong></td>
                                <td><?= $this->Html->link($a->name, ['action' => 'edit', $a->id], ['escape' => false]) ?></td>
                                <td><?= h($a->price_amounnt) ?></td>
                                <td><?= h($a->user->firstname.' '.$a->user->lastname) ?></td>
                                <td><?= h($a->asset_type->name) ?></td>
                                <td class="hidden-xs"><?= h(date("d-m-Y H:m", strtotime($a->created))) ?></td>
                                <td class="hidden-xs"><?= $a->expire_date !=null?h(date("d-m-Y", strtotime($a->expire_date))):'' ?></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <?= $this->Html->link(BUTTON_EDIT, ['action' => 'edit', $a->id], ['escape' => false]) ?>
                                        <?= $this->Form->postLink(BUTTON_DELETE, ['action' => 'delete', $a->id], ['confirm' => __('คุณต้องการลบ {0}?', $a->name), 'escape' => false]) ?>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
