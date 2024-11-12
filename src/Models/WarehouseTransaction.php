<?php

namespace Ramaki\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class WarehouseTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transactionable_type',
        'transactionable_id',
        'warehouse_id',
        'transaction_type',
        'quantity',
        'unit_id',
        'transaction_date',
        'transaction_fee',
        'currency_id',
        'description',
    ];

    public function transactionable()
    {
        return $this->morphTo();
    }

    public function warehouse(): BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(config('inventory.unit_model'));
    }
}
