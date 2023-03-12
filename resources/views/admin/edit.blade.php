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
                    {{ __("Edie page") }}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Status</th>
                            <th scope="col">UserType</th>
                            <th scope="col">Update</th>
                          </tr>
                        </thead>
                        <tbody>


                        <form action="{{route('update',$user->id)}}" method="post">
                            @method('PUT')
                            @csrf
                          <tr>
                            <td><input type="text" name="Status" value="{{$user ->Status}}"></td>
                            <td><input type="text" name="UserType" value="{{$user ->UserType}}"></td>
                            <td>

                            <button type="submit">Update</button>

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
