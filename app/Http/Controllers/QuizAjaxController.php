<?php

namespace App\Http\Controllers;

use App\Models\SmallCategory;

class QuizAjaxController extends Controller
{
    public function getBlade($id)
    {
        $param = $id;
        $small_category = SmallCategory::where('large_categories_id', $param)->get();

        switch ($param) {
            case $param === "1":
                return view('contents.exams.linuc101', compact('small_category'));
                break;
            case $param === "2":
                return view('contents.exams.linuc102', compact('small_category'));
                break;
            case $param === "3":
                return view('contents.exams.linuc201', compact('small_category'));
                break;
            case $param === "4":
                return view('contents.exams.linuc202', compact('small_category'));
                break;
        }
    }

    public function getSmallLargeSelect($largecate_id)
    {
        $large_category = SmallCategory::where('large_categories_id', $largecate_id)->get();
        return $large_category;
    }
}
