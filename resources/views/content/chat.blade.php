@extends('layouts.admin')

@section('content')
<section class="content">
    <section class="message">
        <div class="message__leftPanel">
            <div class="message__leftHeader">
                <div class="message__employeeContainer">
                    <img class="message__employeeImg" src="{{ asset('assets/chat/PP Icon.png') }}">
                    <div class="message__employeeProfile">
                        <span class="message__employeeText message__employeeText--name">Hartini</span>
                        <span class="message__employeeText message__employeeText--job">Social Media Admin</span>
                    </div>
                </div>
                <div class="message__search">
                    <form action="#" class="search-form message__searchForm">
                        <div class="search-form__group">
                            <input class="search-field search-field--grey" type="text" placeholder="Search...">
                            <i class='bx bx-search search-form__icon'></i>
                        </div>
                    </form>
                </div>
            </div>
            <div class="message__list">
                <div class="message__contact message__contact--active">
                    <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon1.png') }}">
                    <div class="message__contactText">
                        <span class="message__contactName">Anna Collins</span>
                        <p class="message__contactPreview">The quick brown fox jumps over the lazy dog.</p>
                    </div>
                </div>
                <div class="message__contact">
                    <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon2.png') }}">
                    <div class="message__contactText">
                        <span class="message__contactName">Bryan Hanna</span>
                        <p class="message__contactPreview">Can I meet him directly?</p>
                    </div>
                </div>
                <div class="message__contact">
                    <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon3.png') }}">
                    <div class="message__contactText">
                        <span class="message__contactName">Elissa Boyle</span>
                        <p class="message__contactPreview">I'm looking for a cat that can play with my children</p>
                    </div>
                </div>
                <div class="message__contact">
                    <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon4.png') }}">
                    <div class="message__contactText">
                        <span class="message__contactName">Kayne Barker</span>
                        <p class="message__contactPreview">Do you have any like this? </p>
                    </div>
                </div>
                <div class="message__contact">
                    <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon5.png') }}">
                    <div class="message__contactText">
                        <span class="message__contactName">Alina Alexander</span>
                        <p class="message__contactPreview">Hello</p>
                    </div>
                </div>
                <div class="message__contact">
                    <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon6.png') }}">
                    <div class="message__contactText">
                        <span class="message__contactName">Marvin Pittman</span>
                        <p class="message__contactPreview">Thank you</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="message__rightPanel">
            <div class="message__rightHeader">
                <img class="message__contactImg" src="{{ asset('assets/chat/PP Icon1.png') }}">
                <div class="message__currentContact">
                    <span class="message__contactText--name">Anna Collins</span>
                </div>
            </div>
            <div class="message__container">
                <p class="message__date"><span>Today</span></p>
                <div class="message__client">
                    <span class="message__client--time">18:31</span>
                    <p class="message__client--text">Hello</p>
                </div>
                <div class="message__admin">
                    <div class="chat__info">
                        <span class="message__admin--username"> Replied by : Hartini at</span>
                        <span class="message__admin--time">18:31</span>
                    </div>
                    <p class="message__admin--text">Hello. I am Hartini. How may I assist you?</p>
                </div>
                <div class="message__client">
                    <span class="message__client--time">18:31</span>
                    <p class="message__client--text">I am interested in adopting him. What should I do to be able to adopt him?</p>
                </div>
                <div class="message__admin">
                    <div class="chat__info">
                        <span class="message__admin--username"> Replied by : Taufiq at</span>
                        <span class="message__admin--time"> 18:32</span>
                    </div>
                    <p class="message__admin--text">If you are interested and want to adopt one of our cats, you can fill out the required form via the following link.</p>
                    <p class="message__admin--text link">https://docs.google.com/forms/u/1/?tgif=d</p>
                    <p class="message__admin--text">After filling out the form, we will contact you for the next step</p>
                </div>
                <div class="message__client">
                    <span class="message__client--time">18:33</span>
                    <p class="message__client--text">Can I meet him directly?</p>
                </div>
                <div class="message__admin">
                    <div class="chat__info">
                        <span class="message__admin--username"> Replied by : Hartini at</span>
                        <span class="message__admin--time">18:34</span>
                    </div>
                    <p class="message__admin--text">I'm sorry, unfortunately you can't right now due to COVID protocols.
                        However, you can look at the gallery for his picture.
                    </p>
                </div>

            </div>
            <div class="message__input">
                <form action="#" class="message__inputForm">
                    <div class="form-group">
                        <input type="text" placeholder="   Type...">
                        <button type="submit" class="btn-send"><i class='bx bxs-send' ></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</section>
@endsection


