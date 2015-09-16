<div class="paginator">
    <div class="col-xs-12 col-md-7 text-left">
        <ul class="pagination">
            <?php echo $this->Paginator->numbers(['prev' => '< ' . __('previous'), 'next' => __('next') . ' >']) ?>
        </ul>
    </div>
    <div class="col-xs-12 col-md-5 text-right">
        <p class="pagination">
            <?php echo $this->Paginator->counter(['format' => 'range']) ?>
        </p>
    </div>
    <div class="clearfix"></div>
</div>