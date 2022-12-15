@extends('layouts.admin');

@section('content')
<section class="content">
    <h2 class="content__header">Add Employee</h2>
    <div class="breadcrumbs">
        <span><a href="/admin">Home</a> 
        › &nbsp;Add Employee</span>
    </div>
    <div class="form">
        <div id="form__left" class="form__wrapper">
            <div class="contents__header">
                <span class="header__title">Employee Info</span>
            </div>
            <div id="edit-profile" class="form__contents">
                <form action="#" class="contents__form">
                    {{-- Name --}}
                    <div class="input__wrapper">
                        <label class="form__label">Name</label>
                        <input type="text" name="your-name" id="your-name" class="form__input">
                    </div>

                    {{-- Username --}}
                    <div class="input__wrapper">
                        <label class="form__label">Username</label>
                        <input type="text" name="username" id="username" class="form__input">
                    </div>

                    {{-- Gender --}}
                    <div class="input__wrapper">
                        <label class="form__label">Gender</label>
                        <select name="gender" id="gender" class="form__select">
                            <option value="choose" class="select__option">Choose...</option>
                            <option value="male" class="select__option">Male</option>
                            <option value="female" class="select__option">Female</option>
                        </select>
                    </div>

                    {{-- Designation--}}
                    <div class="input__wrapper">
                        <label class="form__label">Designation</label>
                        <select name="designation" id="designation" class="form__select">
                            <option value="choose" class="select__option">Choose...</option>
                            <option value="grooming" class="select__option">Staff Grooming</option>
                            <option value="feeding" class="select__option">Cats Feeding</option>
                        </select>
                    </div>

                    {{-- Email --}}
                    <div class="input__wrapper">
                        <label class="form__label">Email</label>
                        <input type="email" name="email" id="email" class="form__input">
                    </div>

                    {{-- Phone --}}
                    <div class="input__wrapper">
                        <label class="form__label">Phone</label>
                        <input type="text" name="phone" id="phone" class="form__input">
                    </div>

                    {{-- Address --}}
                    <div class="input__wrapper">
                        <label class="form__label">Address</label>
                        <textarea name="adress" id="adress" class="form__input"></textarea>
                    </div>
                    <div class="button__form"> 
                        <button class="form__button buttonCancel"> 
                            <i class="fe fe-x-circle"></i> 
                            Cancel
                        </button>
                        <button class="form__button buttonSave"> 
                            <i class="fe fe-check-circle"></i> 
                            Save
                        </button> 
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
@endsection
