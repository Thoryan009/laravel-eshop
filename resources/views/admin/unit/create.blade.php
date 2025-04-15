@extends('admin.master')

@section('body')

    <section class="h-full pb-16 my-6 overflow-y-auto">

        <p class="text-center text-4xl text-green-400 bold">{{session('message')}}</p>

        <div class="container mx-auto px-6">


            <!-- General elements -->
            <h4
                class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
                Add Unit
            </h4>
            <form action="{{route('unit.store')}}" method="post" >
                @csrf

                <div
                    class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800"
                >
                    <label class="block text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Unit Name</span>
                        <input
                            type="text"
                            class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            placeholder="Unit Name"
                            name="name"

                        />
                    </label>

                    <label class="block text-sm mt-3">
                        <span class="text-gray-700 dark:text-gray-400">Unit Code</span>
                        <input
                            type="text"
                            placeholder="Enter a Unique Code"
                            class="block w-full mt-2 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                            name="code"
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
                                />
                                <span class="ml-2">Unpublished</span>
                            </label>
                        </div>
                    </div>




                    <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">Unit Description</span>
                        <textarea
                            class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                            rows="3"
                            placeholder="Enter some long form content."
                            name="description"
                        ></textarea>
                    </label>

                    <div class="mt-10">
                        <button type="submit"   class="w-3/4 flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple" >Create  Unit</button>
                    </div>
                </div>



            </form>
        </div>

    </section>
@endsection
