<?php

namespace RustamAliHussaini\EcommerceCompletionPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Warehouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'area',
        'no_of_room',
        'longitude',
        'latitude',
        'country_id',
        'state_id',
        'city',
        'postal_code',
        'address_line_one',
        'address_line_two',
        'tenant_id',
        'company_id',
        'seller_id',
    ];

    // public function inventories()
    // {
    //     return $this->hasMany(Inventory::class);
    // }

    // public function warehouseTransfers()
    // {
    //     return $this->hasMany(WarehouseTransfer::class, 'from_warehouse_id');
    // }

    // public function warehouseTransfersTo()
    // {
    //     return $this->hasMany(WarehouseTransfer::class, 'to_warehouse_id');
    // }

    // public function warehouseTransactions()
    // {
    //     return $this->hasMany(WarehouseTransaction::class);
    // }

    // public function orderLines()
    // {
    //     return $this->hasMany(OrderLine::class);
    // }

    // public function company(): BelongsTo
    // {
    //     return $this->belongsTo(Company::class);
    // }

    // public function seller(): BelongsTo
    // {
    //     return $this->belongsTo(Seller::class);
    // }

    // public function tenant(): BelongsTo
    // {
    //     return $this->belongsTo(Tenant::class);
    // }

}
