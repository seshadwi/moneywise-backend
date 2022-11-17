<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MoneyPlanCategory extends Model
{
    use HasFactory;

    protected $table = 'money_plans_categories';

    protected $fillable = [
        'name',
        'thumbnail',
    ];

    public function moneyPlans()
    {
        return $this->hasMany(MoneyPlan::class, 'category_id', 'id');
    }
}
