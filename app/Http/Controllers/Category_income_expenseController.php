<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Category_income_expense;
use Illuminate\Http\Request;

class Category_income_expenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $category_income_expense = Category_income_expense::where('title', 'LIKE', "%$keyword%")
                ->orWhere('icon', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $category_income_expense = Category_income_expense::latest()->paginate($perPage);
        }

        return view('category_income_expense.index', compact('category_income_expense'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('category_income_expense.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('icon')) {
            $requestData['icon'] = $request->file('icon')
                ->store('uploads', 'public');
        }

        Category_income_expense::create($requestData);

        return redirect('category_income_expense')->with('flash_message', 'Category_income_expense added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $category_income_expense = Category_income_expense::findOrFail($id);

        return view('category_income_expense.show', compact('category_income_expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $category_income_expense = Category_income_expense::findOrFail($id);

        return view('category_income_expense.edit', compact('category_income_expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
                if ($request->hasFile('icon')) {
            $requestData['icon'] = $request->file('icon')
                ->store('uploads', 'public');
        }

        $category_income_expense = Category_income_expense::findOrFail($id);
        $category_income_expense->update($requestData);

        return redirect('category_income_expense')->with('flash_message', 'Category_income_expense updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Category_income_expense::destroy($id);

        return redirect('category_income_expense')->with('flash_message', 'Category_income_expense deleted!');
    }
}
