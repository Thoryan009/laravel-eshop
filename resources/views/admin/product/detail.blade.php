@extends('admin.master')

@section('body')

    <main class="h-full pb-16 overflow-y-auto">


        <div class="container grid px-6 mx-auto">
            <p class="text-center text-4xl text-yellow-900 bold py-4">{{session('message')}}</p>
            <h2
                class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"
            >
                Tables
            </h2>
            <!-- CTA -->

            <!-- With actions -->
            <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
                Table with actions
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-1/2 whitespace-no-wrap">
                        <thead>

                        <tr
                            class=" font-semibold tracking-wide text-5xl text-left text-blue-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase ">Name</th>
                            <td class="px-4 py-3 text-sm ">
                                Data
                            </td>

                        </tr>


                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Product Id</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->id}}
                            </td>

                        </tr>


                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Category Name</th>
                            <td class="px-4 py-3 text-sm">
                                   {{$product->category->name}}
                            </td>

                        </tr>

                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Sub Category Name</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->subCategory->name}}
                            </td>

                        </tr>



                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Brand Name</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->brand->name}}
                            </td>

                        </tr>




                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Unit Name</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->unit->name}}
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Product Name</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->name}}
                            </td>

                        </tr>



                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Product Code</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->code}}
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Product Image</th>
                            <td class="px-4 py-3 text-sm " style="width: 150px">
                                <img src="{{asset($product->image)}}" class=" " >
{{--                                {{}}--}}
                            </td>

                        </tr>



                         <tr
                            class="text-xs font-semibold  text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Product Other Images</th>
                            <td class="px-4 py-3 text-sm  gap-3">
                                <div class="flex gap-5 bg-red-500 " >
                                @foreach($product->otherImages as $otherImage)



                                          <img src="{{asset($otherImage->image)}}" class=" " >

                                    @endforeach
                                </div>
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Product Stock Amount</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->stock}}
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Regullar Price</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->regular_price}}
                            </td>

                        </tr>



                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Selling Price</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->selling_price}}
                            </td>

                        </tr>



                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Publication Status</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->status}}
                            </td>

                        </tr>




                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Short Description</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->short_description}}
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Long Description</th>
                            <td class="px-4 py-3 text-sm">
                                {!! $product->long_description !!}
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Meta Tilte</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->meta_title}}
                            </td>

                        </tr>


                         <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Meta Description</th>
                            <td class="px-4 py-3 text-sm">
                                {{$product->meta_description}}
                            </td>

                        </tr>







                        </thead>

                    </table>
                </div>
                <div
                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                >
                <span class="flex items-center col-span-3">
                  Showing 21-30 of 100
                </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                        <button
                            class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Previous"
                        >
                          <svg
                              class="w-4 h-4 fill-current"
                              aria-hidden="true"
                              viewBox="0 0 20 20"
                          >
                            <path
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          1
                        </button>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          2
                        </button>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          3
                        </button>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          4
                        </button>
                      </li>
                      <li>
                        <span class="px-3 py-1">...</span>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          8
                        </button>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          9
                        </button>
                      </li>
                      <li>
                        <button
                            class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                            aria-label="Next"
                        >
                          <svg
                              class="w-4 h-4 fill-current"
                              aria-hidden="true"
                              viewBox="0 0 20 20"
                          >
                            <path
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd"
                                fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
                </div>
            </div>
        </div>
    </main>


@endsection
