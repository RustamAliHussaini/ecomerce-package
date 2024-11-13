<?php

namespace Ramaki\Inventory;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramaki\Inventory\Inventory;
use Ramaki\Inventory\Models\WarehouseTransaction;
use Ramaki\Inventory\Models\WarehouseTransfer;
use Ramaki\Inventory\Traits\DeleteTrait;
use Ramaki\Inventory\Traits\LogTraits;

class Unit extends Model
{
    use HasFactory, SoftDeletes, LogTraits, DeleteTrait;

    protected $guarded = [];

    public function baseUnit()
    {
        return $this->belongsTo(Unit::class, 'base_unit_id');
    }

    public function derivedUnits()
    {
        return $this->hasMany(Unit::class, 'base_unit_id');
    }

    public function inventories(): HasMany
    {
        return $this->hasMany(Inventory::class);
    }
    public function warehouseTransfers(): HasMany
    {
        return $this->hasMany(WarehouseTransfer::class);
    }
    public function warehouseTransactions(): HasMany
    {
        return $this->hasMany(WarehouseTransaction::class);
    }
}
