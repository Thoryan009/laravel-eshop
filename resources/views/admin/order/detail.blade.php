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
                            <th class="px-4 py-3 uppercase">Customer Name</th>
                            <td class="px-4 py-3 text-sm">
                                {{$customer->name}}
                            </td>

                        </tr>


                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Customer Phone</th>
                            <td class="px-4 py-3 text-sm">
                                {{$customer->mobile}}
                            </td>

                        </tr>
                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Customer Email</th>
                            <td class="px-4 py-3 text-sm">
                                {{$customer->email}}
                            </td>

                        </tr>

                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Item Details</th>
                            <td class="px-4 py-3 text-sm">
                                        <div class="relative overflow-x-auto">
                                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                                <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 rounded-s-lg">
                                                        Serial
                                                    </th><th scope="col" class="px-6 py-3 rounded-s-lg">
                                                        Product name
                                                    </th>
                                                    <th scope="col" class="px-6 py-3">
                                                        Qty
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 rounded-e-lg">
                                                        Price
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orderDetails as $orderDetail)
                                                <tr class="bg-white dark:bg-gray-800">
                                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                        {{$loop->iteration}}
                                                    </th>
                                                    <td class="px-6 py-4">
                                                        {{$orderDetail->product_name}}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        {{$orderDetail->product_qty}}
                                                    </td>
                                                    <td class="px-6 py-4">
                                                        {{$orderDetail->product_price}}
                                                    </td>
                                                </tr>
                                                @endforeach

                                                </tbody>

                                            </table>
                                        </div>

                            </td>

                        </tr>



                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Tax</th>
                            <td class="px-4 py-3 text-sm">
                                {{$order->tax_total}}
                            </td>

                        </tr>




                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Total</th>
                            <td class="px-4 py-3 text-sm">
                                {{$order->order_total}}
                            </td>

                        </tr>


                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Order Date</th>
                            <td class="px-4 py-3 text-sm">
                                {{$order->order_date}}
                            </td>

                        </tr>



                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Order Status</th>
                            <td class="px-4 py-3 text-sm">
                                {{$order->order_status}}
                            </td>

                        </tr>



                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Payment Method</th>
                            <td class="px-4 py-3 text-sm">
                                {{$order->payment_method}}
                            </td>

                        </tr>



                        <tr
                            class="text-xs font-semibold tracking-wide text-left text-gray-500  border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                        >
                            <th class="px-4 py-3 uppercase">Delivery Address</th>
                            <td class="px-4 py-3 text-sm">
                                {{$order->delivery_address}}
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
