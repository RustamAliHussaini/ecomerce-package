<?php

namespace Ramaki\Inventory\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Stancl\Tenancy\Database\Concerns\BelongsToTenant;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;
    use  BelongsToTenant;

    protected $fillable = [
        'stockable_type',
        'stockable_id',
        'warehouse_id',
        'stock',
        'backorder',
        'purchasable',
        'tenant_id',
        'company_id',
        'seller_id',
    ];

    public function stockable()
    {
        return $this->morphTo();
    }

    public function warehouse()
    {
        return $this->belongsTo(Warehouse::class);
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

    // public function unit(): BelongsTo
    // {
    //     return $this->belongsTo(Unit::class);
    // }
}
