@extends('layouts.parent')

@section('title','create product')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card ">
            <div class="card-header bg-primary">
                <h4>
                    @yield('title')
                </h4>
            </div>
          {{-- <img class="card-img-top" src="holder.js/100px180/" alt=""> --}}
          <div class="card-body">
            <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="col-6">
                        <label for="name_en">name_en</label>
                        <input type="text" name="name_en" value="{{ old('name_en') }}" id="name_en" class="form-control" placeholder="name_en"> 
                        @error('name_en')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                        @enderror
                    </div>
    
                    <div class="col-6">
                        <label for="name_ar">name_ar</label>
                        <input type="text" name="name_ar" value="{{ old('name_ar') }}" id="name_ar" class="form-control" placeholder="name_ar"> 
                        @error('name_ar')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-4">
                        <label for="price">price</label>
                        <input type="text" name="price" value="{{ old('price') }}" id="price" class="form-control" placeholder="price"> 
                         @error('price')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                        @enderror
                    </div>


                    <div class="col-4">
                        <label for="code">code</label>
                        <input type="text" name="code" value="{{ old('code') }}" id="code" class="form-control" placeholder="code"> 
                                @error('code')
                                    <div class="text-danger font-weight-bold">* {{ $message }}</div>
                                @enderror
                    </div>
                    
                    <div class="col-4">
                        <label for="quantity">quantity</label>
                        <input type="text" name="quantity" value="{{ old('quantity') }}" id="quantity" class="form-control" placeholder="quantity"> 
                        @error('quantity')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                        @enderror
                    </div>

                        <div class="col-4">
                            <label for="status">status</label>
                            <select name="status" value="{{ old('status') }}" id="status" class="form-control">
                                <option value="1">active</option>
                                <option value="0">not active</option>
                            </select>
                            @error('status')
                                <div class="text-danger font-weight-bold">* {{ $message }}</div>
                            @enderror
                        </div>
    
                        <div class="col-4">
                            <label for="brand_id">brand</label>
                            <select name="brand_id"  id="brand_id" class="form-control">
                                @foreach ($brands as $brand)
                                <option  @selected(old('brand_id') == $brand->id)  value="{{ $brand->id }}">{{ $brand->name_en }} - {{ $brand->name_ar }} </option>
                                @endforeach
                            </select>
                            @error('brand_id')
                                <div class="text-danger font-weight-bold">* {{ $message }}</div>
                            @enderror
                        </div>
        
                    
    
                        <div class="col-4">
                            <label for="subcategory_id">subcategory</label>
                            <select name="subcategory_id" id="subcategory_id" class="form-control">
                                @foreach ($subcategories as $subcategory)
                                <option @selected(old('subcategory_id') == $subcategory->id) value="{{$subcategory->id}}">{{$subcategory->name_en}} - {{$subcategory->name_ar}}</option>
                                @endforeach                            </select>
                        </div>

                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="desc_en">desc_en</label>
                        <textarea name="desc_en" id="desc_en" cols="30" rows="10" class="form-control">{{old('desc_en')}}</textarea>
                        @error('desc_en')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                         @enderror
                    </div>
    
                    <div class="col-6">
                        <label for="desc_ar">desc_ar</label>
                        <textarea name="desc_ar" id="desc_ar" cols="30" rows="10" class="form-control">{{old('desc_ar')}}</textarea>
                        @error('desc_ar')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                         @enderror
                    </div>
                    </div> 
    
    
                    <div class="form-row">
                    <div class="col-12">
                    <input type="file" name="image" id="" class="form-control">  
                    @error('image')
                        <div class="text-danger font-weight-bold">* {{ $message }}</div>
                         @enderror
                    </div>
    
                    <div class="col-12 mt-5">
                    <button class="btn btn-outline-primary btn-sm ">create</button>   
                    </div>
                    </div> 
                   
                    
    
                    
                
                  
            </form>
          </div>
        </div>

    </div>

</div>

@endsection