@extends('layouts.admin')

@section('content')
    <section class="content">
        <h2 class="content__header">Working Employees</h2>
        <div class="breadcrumbs">
            <span><a href="/admin">Home</a>
            › &nbsp;Working Employees</span>
        </div>
        <div class="employee">
            <div class="employee__header">
                <form action="#" class="search-form">
                <div class="search-form__group">
                        <input class="search-field search-field--grey" type="text" placeholder="Search...">
                        <i class='bx bx-search search-form__icon'></i>
                    </div>
                </form>
                <form action="/admin/form">
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
                            <th><input type="checkbox"></th>
                            <th>Name</th>
                            <th>Designation</th>
                            <th>Mobile</th>
                            <th>Email</th>
                            <th>Salary (month)</th>
                            <th>Joining Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="dataTable__body">
                        @foreach ($employeeData as $item)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->designation }}</td>
                            <td>{{ $item->phone_number }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->salary }}</td>
                            <td>{{ $item->join_date->format('d M Y') }}</td>
                            <td><div class="employee__dropdown" style="float:right;">
                            <button class="employee__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="employee__dropdownBox">
                                <a href="#">Edit</a>
                                <a href="#">Delete</a>
                            </div>
                        </div></td>
                        </tr>
                        @endforeach
                        


                    </tbody>
                </table>
            </div>
            {{ $employeeData->links('pagination::default') }}
        </section>
@endsection
