@extends('layouts.admin')

@section('content')
    <section class="content">
        <h2 class="content__header">Customers</h2>
        <div class="breadcrumbs">
            <span><a href="/admin">Home</a>
            › &nbsp;Customers</span>
        </div>
        <div class="customer">
            <div class="customer__header">
                <form action="#" class="search-form">
                    <div class="search-form__group">
                        <input class="search-field search-field--grey" type="text" placeholder="Search...">
                        <i class='bx bx-search search-form__icon'></i>
                    </div>
                </form>
                <button class="btn btn--primary">
                    <i class='bx bx-plus-medical btn__icon'></i>
                    <span>Add New</span>
                </button>
            </form>        
            </div>

            <div class="tableContainer">
                <table class="dataTable">
                    <thead class="dataTable__header">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="dataTable__body">
                        @foreach ($customerData as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td><div class="customers__dropdown" style="float:right;">
                            <button class="customers__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="customers__dropdownBox">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </div></td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
            </div>
            {{$customerData->links('pagination::default')}}
        </section>
@endsection
