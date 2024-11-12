<?php

namespace Ramaki\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Lunar\Models\OrderLine;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;
use Stancl\Tenancy\Database\Models\Tenant;

class Warehouse extends Model
{
    use HasFactory, SoftDeletes , BelongsToTenant;

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

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function warehouseTransfers()
    {
        return $this->hasMany(WarehouseTransfer::class, 'from_warehouse_id');
    }

    public function warehouseTransfersTo()
    {
        return $this->hasMany(WarehouseTransfer::class, 'to_warehouse_id');
    }

    public function warehouseTransactions()
    {
        return $this->hasMany(WarehouseTransaction::class);
    }

    public function orderLines()
    {
        return $this->hasMany(OrderLine::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(config('inventory.company_model'));
    }

    public function seller(): BelongsTo
    {
        return $this->belongsTo(config('inventory.seller_model'));
    }

    public function tenant(): BelongsTo
    {
        return $this->belongsTo(Tenant::class);
    }
}
