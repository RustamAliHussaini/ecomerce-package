<?php

use RustamAliHussaini\EcommerceCompletionPackage\Models\Warehouse;

it('can create a model', function () {
    $warehouseModel = Warehouse::factory()->create();
    $this->assertModelExists($warehouseModel);
});
