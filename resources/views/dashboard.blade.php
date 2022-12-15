@extends('layouts.admin')

@section('content')
    <section class="content">
        <h2 class="content__header">Dashboard</h2>

        <section class="dashboard__firstSection">
            <div class="dashboard__firstContent">
                <img class="dashboard__firstContent--picture" src="{{ asset('assets/dashboard/Cat_Gray.webp') }}">
            <div class="dashboard__profile">
                <li class="dashboard__profileList">
                    <i class='bx bxs-cat' ></i>
                    <span class="dashboard__profileText">Handoko</span>
                </li>
                <li class="dashboard__profileList">
                    <i class='bx bxs-baby-carriage' ></i>
                    <span class="dashboard__profileText">4 Years</span>
                </li>
                <li class="dashboard__profileList">
                    <i class='bx bx-male-sign' ></i>
                    <span class="dashboard__profileText">Male</span>
                </li>
                <li class="dashboard__profileList">
                    <i class='bx bx-globe-alt' ></i>
                    <span class="dashboard__profileText">American Shorthair</span>
                </li>
                <li class="dashboard__profileList">
                    <p class="dashboard__paragraph">A very pleasant companion cat. He is easy going and placid.
                        He is a loving cat and will attach his self to members of the family.
                        He really loves to play. His favourite toy is a ball type toy.
                        He is a very active cat and loves to jump here and there.
                        </p>
                </li>
            </div>
            <div class="dashboard__secondContent">
                <div class="dashboardChart__container">
                    <span class="dashboardChart__title">Cat Weight Growths (lb)</span>
                    <canvas id="dashboardChart"></canvas>
                </div>
                <div class="dashboardChart__container">
                    <span class="dashboardChart__title">Cat Lenght Growths (cm)</span>
                    <canvas id="dashboardChart1"></canvas>
                </div>
            </div>
        </section>

        <section class="dashboard__secondSection">
            <div class="views dashboard-card">
                <i class='bx bx-dollar-circle card__logo' ></i>
                <div class="card__text">
                    <div class="card__stats">
                        <span class="card__text--number">2jt</span>
                        <i class='bx bx-chevrons-up stats--green'></i>
                    </div>
                    <span class="card__text--description">Profit</span>
                </div>
            </div>

            <div class="likes dashboard-card">
                <i class='bx bxs-cat card__logo' ></i>
                <div class="card__text">
                    <div class="card__stats">
                        <span class="card__text--number">86</span>
                        <i class='bx bx-minus stats--yellow'></i>
                    </div>
                    <span class="card__text--description">Adopted</span>
                </div>
            </div>

            <div class="shares dashboard-card">
                <i class='bx bxs-wallet card__logo' ></i>
                <div class="card__text">
                    <div class="card__stats">
                        <span class="card__text--number">460k</span>
                        <i class='bx bx-chevrons-down stats--red'></i>
                    </div>
                    <span class="card__text--description">Expenses</span>
                </div>
            </div>

            <div class="comments dashboard-card">
                <i class='bx bx-group card__logo'></i>
                <div class="card__text">
                    <div class="card__stats">
                        <span class="card__text--number">20</span>
                        <i class='bx bx-chevron-up stats--green'></i>
                    </div>
                    <span class="card__text--description">Visitor</span>
                </div>
            </div>
        </section>

        <section class="dashboard__thirdSection">
            <div class="collection">
                <div class="collection__title">
                    <span>Cats Collection</span>
                </div>
                <div class="collection__imageContainer">
                    <div class="collection__container">
                        <div class="collection__cat collection__cat--a">
                            <img src="{{ asset('assets/content/kucing1.png') }}">
                            <div class="collection__details">
                                <span class="collection__name">Josh</span>
                                <span class="collection__age">2 years</span>
                                <span class="collection__achieve">Number of likes: 4000</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection__container">
                        <div class="collection__cat collection__cat--b">
                            <img src="{{ asset('assets/content/kucing2.png') }}">
                            <div class="collection__details collection__details--middle">
                                <span class="collection__name">Ale'</span>
                                <span class="collection__age">18 month</span>
                                <span class="collection__achieve">Number of likes: 10000</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection__container">
                        <div class="collection__cat collection__cat--c">
                            <img src="{{ asset('assets/content/kucing3.png') }}">
                            <div class="collection__details">
                                <span class="collection__name">Desi</span>
                                <span class="collection__age">14 month</span>
                                <span class="collection__achieve">Number of likes: 4000</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection__container">
                        <div class="collection__cat collection__cat--d">
                            <img src="{{ asset('assets/content/kucing4.png') }}">
                            <div class="collection__details">
                                <span class="collection__name">Franky</span>
                                <span class="collection__age">2,5 month</span>
                                <span class="collection__achieve">Number of likes: 4000</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection__container">
                        <div class="collection__cat collection__cat--e">
                            <img src="{{ asset('assets/content/kucing5.png') }}">
                            <div class="collection__details collection__details--middle">
                                <span class="collection__name">Kitty</span>
                                <span class="collection__age">8 years</span>
                                <span class="collection__achieve">Number of likes: 10000</span>
                            </div>
                        </div>
                    </div>
                    <div class="collection__container">
                        <div class="collection__cat collection__cat--f">
                            <img src="{{ asset('assets/content/kucing6.png') }}">
                            <div class="collection__details">
                                <span class="collection__name">Milo</span>
                                <span class="collection__age">14 month</span>
                                <span class="collection__achieve">Number of likes: 4000</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="collection__text">
                    <a href="/admin/gallery">See More</a>
                </div>
            </div>
        </section>
    </section>
@endsection
