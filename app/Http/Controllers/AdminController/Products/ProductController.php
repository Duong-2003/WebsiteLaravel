<?php

namespace App\Http\Controllers\AdminController\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller

{
    public function index()
    {
        // Lấy tất cả các sản phẩm từ bảng "products"
        $products = Product::all();

        // Trả về view hiển thị danh sách sản phẩm
        return view('WebsiteViews.www.productweb', compact('products'));
    }

    public function create()
    {
        // // Trả về view để tạo sản phẩm mới
        // return view('products.create');
    }

    public function store(Request $request)
    {
        // // Lưu thông tin sản phẩm mới vào cơ sở dữ liệu
        // Product::create($request->all());

        // // Chuyển hướng về danh sách sản phẩm
        // return redirect()->route('products.index');
    }

    public function show($id)
    {
        // Lấy thông tin của sản phẩm theo ID và trả về view hiển thị chi tiết sản phẩm
        // $product = Product::findOrFail($id);

        // return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // Lấy thông tin của sản phẩm theo ID và trả về view để chỉnh sửa sản phẩm
        // $product = Product::findOrFail($id);

        // return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // // Lấy thông tin của sản phẩm theo ID và cập nhật thông tin mới
        // $product = Product::findOrFail($id);
        // $product->update($request->all());

        // // Chuyển hướng về danh sách sản phẩm
        // return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        // // Xóa sản phẩm theo ID
        // $product = Product::findOrFail($id);
        // $product->delete();

        // // Chuyển hướng về danh sách sản phẩm
        // return redirect()->route('products.index');
    }
}
