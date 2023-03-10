<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Income_expense;
use Illuminate\Http\Request;
use App\Models\Category_income_expense;

class Income_expenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 50;

        if (!empty($keyword)) {
            $income_expense = Income_expense::where('title', 'LIKE', "%$keyword%")
                ->orWhere('detail', 'LIKE', "%$keyword%")
                ->orWhere('category', 'LIKE', "%$keyword%")
                ->orWhere('type', 'LIKE', "%$keyword%")
                ->orWhere('img', 'LIKE', "%$keyword%")
                ->orWhere('price_per_piece', 'LIKE', "%$keyword%")
                ->orWhere('amount', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $income_expense = Income_expense::latest()->paginate($perPage);
        }

        // รายรับ
        $income = Income_expense::where('type', 'รายรับ')->get();
        $count_income = count($income);
        $sum_income = 0 ;
        foreach ($income as $in) {
            $sum_income = $sum_income + (int)$in->total_price ;

        }

        // รายจ่าย
        $expense = Income_expense::where('type', 'รายจ่าย')->get();
        $count_expense = count($expense);
        $sum_expense = 0 ;
        foreach ($expense as $ex) {
            $sum_expense = $sum_expense + (int)$ex->total_price ;
        }

        $total_money = $sum_income - $sum_expense ;

        return view('income_expense.index', compact('income_expense','count_income','sum_income','count_expense','sum_expense','total_money'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $category = Category_income_expense::where('id' , '!=' , null)->get();

        return view('income_expense.create', compact('category'));
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
                if ($request->hasFile('img')) {
            $requestData['img'] = $request->file('img')
                ->store('uploads', 'public');
        }

        Income_expense::create($requestData);

        return redirect('income_expense')->with('flash_message', 'Income_expense added!');
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
        $income_expense = Income_expense::findOrFail($id);

        return view('income_expense.show', compact('income_expense'));
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
        $income_expense = Income_expense::findOrFail($id);
        $category = Category_income_expense::where('id' , '!=' , null)->get();
        
        return view('income_expense.edit', compact('income_expense','category'));
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
                if ($request->hasFile('img')) {
            $requestData['img'] = $request->file('img')
                ->store('uploads', 'public');
        }

        $income_expense = Income_expense::findOrFail($id);
        $income_expense->update($requestData);

        return redirect('income_expense')->with('flash_message', 'Income_expense updated!');
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
        Income_expense::destroy($id);

        return redirect('income_expense')->with('flash_message', 'Income_expense deleted!');
    }
}
