@extends('layouts.parent')

@section('title','edit product')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header bg-primary">
                <h4>
                    @yield('title')
                </h4>
            </div>
          {{-- <img class="card-img-top" src="holder.js/100px180/" alt="" > --}}
          <div class="card-body">
            <form action="" method="post">
                
                <div class="form-row">
                    <div class="col-6">
                        <label for="name_en">name_en</label>
                        <input type="text" value="{{$products->name_en}}" name="name_en" id="name_en" class="form-control" placeholder="name_en"> 
    
                    </div>
    
                    <div class="col-6">
                        <label for="name_ar">name_ar</label>
                        <input type="text" value="{{$products->name_ar}}" name="name_ar" id="name_ar" class="form-control" placeholder="name_ar"> 
    
                    </div>
                    <div class="col-4">
                        <label for="price">price</label>
                        <input type="text" value="{{$products->price}}" name="price" id="price" class="form-control" placeholder="price"> 
    
                    </div>
                    <div class="col-4">
                        <label for="code">code</label>
                        <input type="text" value="{{$products->code}}" name="code" id="code" class="form-control" placeholder="code"> 
    
                    </div>
                    <div class="col-4">
                        <label for="quantity">quantity</label>
                        <input type="text" value="{{$products->quantity}}" name="quantity" id="quantity" class="form-control" placeholder="quantity"> 
    
                    </div>
                        <div class="col-4">
                            <label for="status">status</label>
                            <select name="status" id="status" class="form-control">
                                <option @selected($products->status == 1) value="1">active</option>
                                <option @selected($products->status == 1) value="0">not active</option>
                            </select>
                        </div>
    
                        <div class="col-4">
                            <label for="brand_id">brand</label>
                            <select name="brand_id" id="brand_id" class="form-control">
                                @foreach ($brands as $brand)
                                <option @selected($brand->id == $products->brand_id) value="{{$brand->id}}">{{$brand->name_en}} - {{$brand->name_ar}}</option>
                                @endforeach
                            </select>
                        </div>
        
                    
    
                        <div class="col-4">
                            <label for="subcategory_id">subcategory</label>
                           
                            <select name="subcategory_id" id="subcategory_id" class="form-control">
                                @foreach ($subcategories as $subcategory)
                                <option @selected($subcategory->id == $products->subcategory_id) value="{{$subcategory->id}}">{{$subcategory->name_en}} - {{$subcategory->name_ar}}</option>
                                @endforeach

                                </select>
                        </div>

                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="desc_en">desc_en</label>
                        <textarea name="desc_en" id="desc_en" cols="30" rows="10" class="form-control">{{$products->desc_en}}</textarea>
                    </div>
    
                    <div class="col-6">
                        <label for="desc_ar">desc_ar</label>
                        <textarea name="desc_ar" id="desc_ar" cols="30" rows="10" class="form-control">{{$products->desc_ar}}</textarea>
                    </div>
                    </div> 
    
    
                    <div class="form-row">
                    <div class="col-3 my-5">
                        <img src="{{asset("images/products/{$products->image}")}}" class="w-100" alt="{{$products->name_en}}">
                    <input type="file" name="image" id="" class="form-control">  
                    </div>
    
                    <div class="col-12">
                    <button class="btn btn-outline-primary btn-sm ">update</button>   
                    </div>
                    </div> 
                   
                    
    
                    
                
                  
            </form>
          </div>
        </div>

    </div>

</div>

@endsection