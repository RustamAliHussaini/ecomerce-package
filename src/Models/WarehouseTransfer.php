<?php

namespace RustamAliHussaini\EcommerceCompletionPackage\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class WarehouseTransfer extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'transferable_type',
        'transferable_id',
        'from_warhouse_id',
        'to_warehouse_id',
        'quantity',
        'unit_id',
        'transfer_date',
        'transfer_fee',
        'currency_id',
        'description',
    ];

    public function transferable()
    {
        return $this->morphTo();
    }

    public function fromWarehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'from_warhouse_id');
    }

    public function toWarehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class, 'to_warehouse_id');
    }

    // public function unit(): BelongsTo
    // {
    //     return $this->belongsTo(Unit::class);
    // }
}
