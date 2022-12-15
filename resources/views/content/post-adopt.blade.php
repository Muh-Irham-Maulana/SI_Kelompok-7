@extends('layouts.admin')

@section('content')
    <section class="content">
        <h2 class="content__header">Adopsi Kucing</h2>
        <div class="breadcrumbs">
            <a href="/admin">Home</a>
            <span>› &nbsp; Content</span>
            <span>› &nbsp; Adopt Cat</span>
        </div>
        <div class="adopt">
            <div class="adopt__header">
                <i class='bx bxs-plus-circle btn adopt__icon'></i>
                <i class='bx bx-sort btn adopt__icon'></i>
                <form action="#" class="search-form">
                    <div class="search-form__group">
                        <input class="search-field search-field--grey" type="text" placeholder="Search...">
                        <i class='bx bx-search search-form__icon'></i>
                    </div>
                </form>
            </div>
            <div class="adopt__container">
                <div class="adopt__card">
                    <div class="adopt__imageContainer">
                        <img class="adopt__image" src="{{ asset('assets/content/kucing1.png') }}">
                    </div>
                    <div class="adopt__details">
                        <span class="adopt__detail--name">Josh</span>
                        <div class="adopt__detailBox">
                            <i class='bx bxs-baby-carriage' ></i>
                            <span class="adopt__detail--year">12-01-2020 (2 Years)</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-male-sign' ></i>
                            <span class="adopt__detail--gender">Male</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-globe-alt' ></i>
                            <span class="adopt__detail--type">Peaknose</span>
                        </div>
                        <div class="adopt__detailBox">
                            <p class="adopt__detail--desc">A very pleasant companion cat. He is easy going and placid.
                                He is a loving cat and will attach his self to members of the family.
                                He really loves to play. His favourite toy is a ball type toy.
                                He is a very active cat and loves to jump here and there.
                            </p>
                        </div>
                    </div>
                    <div class="adopt__actionBox">
                        <a href="/admin/form-cat">
                            <i class='bx bxs-edit-alt adopt__action adopt__action--edit'></i>
                        </a>
                        <i class='bx bxs-trash-alt adopt__action adopt__action--delete'></i>
                    </div>
                </div>
                <div class="adopt__card">
                    <div class="adopt__imageContainer">
                        <img class="adopt__image" src="{{ asset('assets/content/kucing2.png') }}">
                    </div>
                    <div class="adopt__details">
                        <span class="adopt__detail--name">Ale'</span>
                        <div class="adopt__detailBox">
                            <i class='bx bxs-baby-carriage' ></i>
                            <span class="adopt__detail--year">12-01-2021 (18 month)</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-male-sign' ></i>
                            <span class="adopt__detail--gender">Male</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-globe-alt' ></i>
                            <span class="adopt__detail--type">Peaknose</span>
                        </div>
                        <div class="adopt__detailBox">
                            <p class="adopt__detail--desc">A very pleasant companion cat. He is easy going and placid.
                                He is a loving cat and will attach his self to members of the family.
                                He really loves to play. His favourite toy is a ball type toy.
                                He is a very active cat and loves to jump here and there.
                            </p>
                        </div>
                    </div>
                    <div class="adopt__actionBox">
                        <a href="/admin/form-cat">
                            <i class='bx bxs-edit-alt adopt__action adopt__action--edit'></i>
                        </a>
                        <i class='bx bxs-trash-alt adopt__action adopt__action--delete'></i>
                    </div>
                </div>
                <div class="adopt__card">
                    <div class="adopt__imageContainer">
                        <img class="adopt__image" src="{{ asset('assets/content/kucing3.png') }}">
                    </div>
                    <div class="adopt__details">
                        <span class="adopt__detail--name">Desi</span>
                        <div class="adopt__detailBox">
                            <i class='bx bxs-baby-carriage' ></i>
                            <span class="adopt__detail--year">12-01-2021 (14 month)</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-male-sign' ></i>
                            <span class="adopt__detail--gender">Female</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-globe-alt' ></i>
                            <span class="adopt__detail--type">Himalaya</span>
                        </div>
                        <div class="adopt__detailBox">
                            <p class="adopt__detail--desc">A very pleasant companion cat. He is easy going and placid.
                                He is a loving cat and will attach his self to members of the family.
                                He really loves to play. His favourite toy is a ball type toy.
                                He is a very active cat and loves to jump here and there.
                            </p>
                        </div>
                    </div>
                    <div class="adopt__actionBox">
                        <a href="/admin/form-cat">
                            <i class='bx bxs-edit-alt adopt__action adopt__action--edit'></i>
                        </a>
                        <i class='bx bxs-trash-alt adopt__action adopt__action--delete'></i>
                    </div>
                </div>
                <div class="adopt__card">
                    <div class="adopt__imageContainer">
                        <img class="adopt__image" src="{{ asset('assets/content/kucing4.png') }}">
                    </div>
                    <div class="adopt__details">
                        <span class="adopt__detail--name">Franky</span>
                        <div class="adopt__detailBox">
                            <i class='bx bxs-baby-carriage' ></i>
                            <span class="adopt__detail--year">12-9-2022 (2,5 month)</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-male-sign' ></i>
                            <span class="adopt__detail--gender">Male</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-globe-alt' ></i>
                            <span class="adopt__detail--type">Persia Medium</span>
                        </div>
                        <div class="adopt__detailBox">
                            <p class="adopt__detail--desc">A very pleasant companion cat. He is easy going and placid.
                                He is a loving cat and will attach his self to members of the family.
                                He really loves to play. His favourite toy is a ball type toy.
                                He is a very active cat and loves to jump here and there.
                            </p>
                        </div>
                    </div>
                    <div class="adopt__actionBox">
                        <a href="/admin/form-cat">
                            <i class='bx bxs-edit-alt adopt__action adopt__action--edit'></i>
                        </a>
                        <i class='bx bxs-trash-alt adopt__action adopt__action--delete'></i>
                    </div>
                </div>
                <div class="adopt__card">
                    <div class="adopt__imageContainer">
                        <img class="adopt__image" src="{{ asset('assets/content/kucing5.png') }}">
                    </div>
                    <div class="adopt__details">
                        <span class="adopt__detail--name">Kitty</span>
                        <div class="adopt__detailBox">
                            <i class='bx bxs-baby-carriage' ></i>
                            <span class="adopt__detail--year">12-04-2022 (8 month)</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-male-sign' ></i>
                            <span class="adopt__detail--gender">Female</span>
                        </div>
                        <div class="adopt__detailBox">
                            <i class='bx bx-globe-alt' ></i>
                            <span class="adopt__detail--type">Persia Medium</span>
                        </div>
                        <div class="adopt__detailBox">
                            <p class="adopt__detail--desc">A very pleasant companion cat. He is easy going and placid.
                                He is a loving cat and will attach his self to members of the family.
                                He really loves to play. His favourite toy is a ball type toy.
                                He is a very active cat and loves to jump here and there.
                            </p>
                        </div>
                    </div>
                    <div class="adopt__actionBox">
                        <a href="/admin/form-cat">
                            <i class='bx bxs-edit-alt adopt__action adopt__action--edit'></i>
                        </a>
                        <i class='bx bxs-trash-alt adopt__action adopt__action--delete'></i>
                    </div>
                </div>
            </div>
            <div class="adopt__footer">
                <div class="tablePagination">
                    <div class="tablePagination_info" class="example5_info" role="status" aria-live="polite">Showing 1 to 5 of 20 entries</div>
                    <div class="pagination">
                        <a class="pagination__items" href="#">&laquo;</a>
                        <a class="pagination__items pagination__items--active" href="#" class="active">1</a>
                        <a class="pagination__items" href="#">2</a>
                        <a class="pagination__items" href="#">3</a>
                        <a class="pagination__items" href="#">4</a>
                        <a class="pagination__items" href="#">&raquo;</a>
                    </div> 
                </div>
            </div>
        </div>
    </section>
@endsection
