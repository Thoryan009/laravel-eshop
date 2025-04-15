@extends('admin.master')

@section('body')

    <section class="h-full pb-16 my-6 overflow-y-auto">

        <p class="text-center text-4xl text-green-400 bold">{{session('message')}}</p>

        <div class="container mx-auto px-6">


            <!-- General elements -->
            <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
                Edit Product
            </h4>
            <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
                >

                    <label class="block mt-4 text-sm">
                         <span class="text-gray-700 dark:text-gray-400">
                          Category Name
                         </span>
                        <select
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="category_id"

                            onchange="getSubCategoryByCategory(this.value)"
                        >
                            <option value=""> -- Select Category -- </option>>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @selected($category->id == $product->category_id)> {{$category->name}}</option>>
                            @endforeach
{{--                            {{$category->id == $product->category_id ? 'selected' : ''}}--}}
                        </select>
                    </label>


                    <label class="block mt-4 text-sm">
                         <span class="text-gray-700 dark:text-gray-400">
                         Sub Category Name
                         </span>
                        <select
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="sub_category_id"
                            id="subCategory"
                        >
                            <option value=""> -- Select Sub Category -- </option>>
                            @foreach($subCategories as $subCategory)
                                <option value="{{$subCategory->id}}" {{$subCategory->id == $product->sub_category_id ? 'selected' : ''}}> {{$subCategory->name}}</option>>
                            @endforeach

                        </select>
                    </label>

                    <label class="block mt-4 text-sm">
                         <span class="text-gray-700 dark:text-gray-400">
                          Brand Name
                         </span>
                        <select
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="brand_id"
                        >
                            <option value=""> -- Select Brand -- </option>>
                            @foreach($brands as $brand)
                                <option value="{{$brand->id}}" {{$brand->id == $product->brand_id ? 'selected' : ''}}> {{$brand->name}}</option>>
                            @endforeach

                        </select>
                    </label>

                    <label class="block mt-4 text-sm ">
                         <span class="text-gray-700 dark:text-gray-400">
                          Unit Name
                         </span>
                        <select
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            name="unit_id"
                        >
                            <option value=""> -- Select Unit -- </option>>
                            @foreach($units as $unit)
                                <option value="{{$unit->id}}" {{$unit->id == $product->unit_id ? 'selected' : ''}}> {{$unit->name}}</option>>
                            @endforeach

                        </select>
                    </label>

                    <label class="block  mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Product Name</span>
                        <input
                            type="text"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Product Name"
                            name="name"
                            value="{{$product->name}}"
                        />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Product Code</span>
                        <input
                            type="text"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Product Code"
                            name="code"
                           value="{{$product->code}}"
                        />
                    </label>


                    <label class="block mt-4 text-sm mt-3">
                        <span class="text-gray-700 dark:text-gray-400">Product Image</span>
                        <input
                            type="file"
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="image"
                        />

                    </label>

                    <label class="block mt-4 text-sm mt-3">
                        <span class="text-gray-700 dark:text-gray-400">Product Other Images</span>
                        <input
                            type="file"
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="other_image[]"
                            multiple
                        />

                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Stock Amount</span>
                        <input
                            type="number"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Stock Amount"
                            name="stock"
                           value="{{$product->stock}}"
                        />
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Price</span>
                        <input
                            type="number"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Regular Price"
                            name="regular_price"
                          value="{{$product->regular_price}}"

                        />

                        <input
                            type="number"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Selling Price"
                            name="selling_price"
                           value="{{$product->selling_price}}"
                        />
                    </label>

                    <div class="mt-4 text-sm">
                    <span class="text-gray-700 dark:text-gray-400">
                      Publication Status
                    </span>
                        <div class="mt-2">
                            <label
                                class="inline-flex items-center text-gray-600 dark:text-gray-400"
                            >
                                <input
                                    type="radio"
                                    class=" text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="status"
                                    value="1"
                                    {{$product->status == 1 ? 'checked' : ''}}
                                />
                                <span class="ml-2">Published</span>
                            </label>
                            <label
                                class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400"
                            >
                                <input
                                    type="radio"
                                    class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                                    name="status"
                                    value="0"
                                    {{$product->status == 0 ? 'checked' : ''}}
                                />
                                <span class="ml-2">Unpublished</span>
                            </label>
                        </div>
                    </div>




                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Short Description</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3"
                            placeholder="Enter some long form content."
                            name="short_description"

                        >
                            {{$product->short_description}}
                        </textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Long Description</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"

                            id="summernote"
                            placeholder="Enter some long form content."
                            name="long_description"

                        >{{$product->long_description}}</textarea>
                    </label>

                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Meta Title</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3"
                            placeholder="Enter some long form content."
                            name="meta_title"

                        >{{$product->meta_title}}</textarea>
                    </label>


                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Meta Description</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3"
                            placeholder="Enter some long form content."
                            name="meta_description"

                        >{{$product->meta_description}}</textarea>
                    </label>
                    <div class="mt-10">
                        <button type="submit"   class="w-3/4 flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >Edit  Category</button>
                    </div>
                </div>



            </form>
        </div>

    </section>
@endsection
