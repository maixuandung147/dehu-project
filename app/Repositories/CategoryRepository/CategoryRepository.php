<?php 

namespace App\Repositories\CategoryRepository;

use App\Model\Category;
use App\Repositories\EloquentRepository;

/**
 * Class CategoryRepository
 * @package App\Repositories\CategoryRepository
 */
class CategoryRepository extends EloquentRepository implements CategoryRepositoryInterface
{

    /**
     * @return string
     */
    public function getModel()
    {
        return Category::class;
    }

}


 ?>