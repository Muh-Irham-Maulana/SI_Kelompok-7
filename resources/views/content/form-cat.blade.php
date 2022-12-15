@extends('layouts.admin');

@section('content')
<section class="content">
    <h2 class="content__header">Edit Cat</h2>
    <div class="breadcrumbs">
        <span><a href="/admin">Home</a>
        › &nbsp;Content</span> 
        › &nbsp;Adopt Cat</span>
        › &nbsp;Edit Cat</span>
    </div>
    <div class="form">
        <div id="form__left" class="form__wrapper">
            <div class="contents__header">
                <span class="header__title">Cat Info</span>
            </div>
            <div id="edit-profile" class="form__contents">
                <form action="#" class="contents__form">
                    <div class="input__wrapper">
                        <label class="form__label">Name</label>
                        <input type="text" name="your-name" id="your-name" class="form__input">
                    </div>
                    <div class="input__wrapper">
                        <label class="form__label">Gender</label>
                        <select name="gender" id="gender" class="form__select">
                            <option value="choose" class="select__option">Choose...</option>
                            <option value="male" class="select__option">Male</option>
                            <option value="female" class="select__option">Female</option>
                        </select>
                    </div>
                    <div class="input__wrapper">
                        <label class="form__label">Type</label>
                        <input type="cat-type" name="cat-type" id="cat-type" class="form__input">
                    </div>

                    <div class="input__wrapper">
                        <label class="form__label">Birthdate</label>
                        <input type="date" name="birthdate" id="birthdate" class="form__input">
                    </div>
                    
                    <div class="input__wrapper">
                        <label class="form__label">Description</label>
                        <trix-editor input="description" class="form__input"></trix-editor>
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
