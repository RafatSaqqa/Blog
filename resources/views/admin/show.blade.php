<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Add page") }}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">password</th>
                            <th scope="col">Status</th>
                            <th scope="col">UserType</th>
                            <th scope="col">Add</th>
                          </tr>
                        </thead>
                        <tbody>


                        <form action="{{route('store')}}" method="post">
                            @csrf
                          <tr>
                            <td><input type="text" name="name" placeholder="Name"></td>
                            <td><input type="email" name="email" placeholder="Email"></td>
                            <td><input type="password" name="password" placeholder="Password"></td>
                            <td><input type="text" name="Status" placeholder="Status"></td>
                            <td><input type="text" name="UserType" placeholder="UserType"></td>
                            <td>

                            <button type="submit">Add</button>

                            </td>
                          </tr>
                        </form>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
