<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Size;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class ListProduct extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $datacat = new Category;
        $categorys = $datacat -> getselectcat();
        $datasize = new Size;
        $sizes = $datasize -> getselectsize();
        $databrand = new Brand;
        $brands = $databrand -> getselectbrand();
        $data = Product::search()->paginate(10);
        return view('components.list-product', compact('data','categorys','sizes','brands'));
    }
}
