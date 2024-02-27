<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): View
    {
        // show all the orders

        $viewData = [];
        $viewData['title'] = 'Orders - Plant Shop';
        $viewData['subtitle'] = 'List of Orders';
        $viewData['orders'] = '';        

        return view('order.index') -> with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        // show one order
        $viewData = [];
        $viewData['title'] = ''.' - Plant Shop';
        $viewData['subtitle'] = ''.' - Order Information';
        $viewData['order'] = '';

        return view('product.show') -> with('viewData', $viewData);
    }

    public function create(): View
    {
        // create a product
        return view('');
    }

    public function save(): View
    {

        return view('');
    }

    public function delete(): View
    {
        return view('');
    }
}