<?php

namespace App\Http\Controllers;

use App\Exceptions\CategoryException;
use App\Http\Requests\CategorieRequest;
use App\Models\Manager\ProdCategoriesManagerInterface;
use App\Models\Model\ProdCategories;


class CategoryController extends Controller
{
    public function formCreateCat()
    {
        return view('/Categories.CategoryForm');
    }


    public function createCat(CategorieRequest $request, ProdCategoriesManagerInterface $CategoriesManager)
    {
        $cat = $request->input('categorie');

        $category = new ProdCategories();
        $category->setCategoryName($cat);

        $CategoriesManager->createCategory($category);
        //return redirect('/success');
        //return view('/Success');
        return redirect('/success/');
    }


    public function formUpdateCat(ProdCategoriesManagerInterface $CategoriesManager, $categoryId)
    {
        $category = $CategoriesManager->getCategoryById($categoryId);
        return view('Categories.CategoryFormUpdate')->with(["category" => $category]);
    }


    public function updateCat(CategorieRequest $request, ProdCategoriesManagerInterface $CategoriesManager, $categoryId)
    {
        $cat = new ProdCategories();
        $cat->setCategoryId($categoryId);
        $cat->setCategoryName($request->input("categorie"));

        $CategoriesManager->updateCategory($cat);

        //return redirect('/categories/' . $cat->getCategoryId() . '/edit/');
        return redirect('/success/');
    }


    public function deleteCat(ProdCategoriesManagerInterface $CategoriesManager, $categoryId)
    {
        try{
            $CategoriesManager->deleteCategoryById($categoryId);
            return redirect('/success');
        } catch(CategoryException $e) {
            return view('failure').with(['message'=>$e->getMessage()]);
        }
    }


}
