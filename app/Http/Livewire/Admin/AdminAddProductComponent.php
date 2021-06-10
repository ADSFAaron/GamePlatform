<?php
//Add product page php
namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount()
    {
        $this->stock_status = 'instock';
        $this->featured = 0;
    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function addProduct()
    {
        echo "1";
        echo "Name: " . $this->name . "\r\n";
        echo "slug: " . $this->slug . "\r\n";
        echo "short_description: " . $this->short_description . "\r\n";
        echo "description: " . $this->description . "\r\n";
        echo "regular_price: " . $this->regular_price . "\r\n";
        echo "sale_price: " . $this->sale_price . "\r\n";
        echo "SKU: " . $this->SKU . "\r\n";
        echo "stock_status: " . $this->stock_status . "\r\n";
        echo "featured: " . $this->featured . "\r\n";
        echo "quantity: " . $this->quantity . "\r\n";
        echo "image: " . $this->image . "\r\n";
        echo "category_id: " . $this->category_id . "\r\n";

        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        echo "2";
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        echo "3";
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        echo "4";
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        echo "5";
        if (!empty(Carbon::now()->timestamp)) {
            echo "Carbon";
            if ($this->image != null) {
                $imageName = Carbon::now()->timestamp . '.' . $this->image->extension();
            }
        }
        echo "6";
        if ($this->image != null)
            $this->image->storeAs('products', $imageName);
        echo "_6_";
        if ($this->image != null)
            $product->image = $imageName;
        $product->category_id = $this->category_id;
        echo "7";
//        try {
        if (DB::connection()->getDatabaseName())
        {
            echo 'Connected to the DB: ' . DB::connection()->getDatabaseName();
        }
        $product->save();
        dd($product->save());
//        } catch (\Exception $exception) {
//            echo "Save Error";
//            echo $exception;
//        }
        echo "8";
        session()->flash('message', 'Product has benn created successfully');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component', ['categories' => $categories])->layout('layouts.base');
    }
}
