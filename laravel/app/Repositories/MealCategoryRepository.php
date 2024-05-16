<?php

namespace App\Repositories;

use App\Models\MealCategory;

class MealCategoryRepository
{
    public function getAllMealCategories()
    {
        return MealCategory::all();
    }

}
