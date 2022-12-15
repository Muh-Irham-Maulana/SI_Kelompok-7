@extends('layouts.admin')

@section('content')
<section class="content">
    <h2 class="content__header">Gallery</h2>
    <div class="breadcrumbs">
        <a href="/admin">Home</a>
        <span>› &nbsp;Content</span>
        <span>› &nbsp;Gallery</span>
    </div>
    <div class="gallery">
    <section class="gallery__header">
        <div class="filter">
            <button onclick="myFunction()" class="gallery__filterButton">
                <i class='bx bx-filter-alt' ></i>
            </button>
            <div id="filterList" class="filterList">
                <a href="#viewed">Most Viewed</a>
                <a href="#liked">Most Liked</a>
                <a href="#recently">Recently</a>
            </div>
        </div>
        <form action="#" class="search-form">
            <div class="search-form__group">
                <input class="search-field search-field--grey" type="text" placeholder="Search...">
                <i class='bx bx-search search-form__icon'></i>
            </div>
        </form>
        <form action="#" class="sizeSlider">
            <span>Image Size:</span>
            <input type="range" id="vol" name="vol" min="0" max="50">
        </form>
    </section>
    <section class="gallery__photosList">
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 1.jpg') }}" alt="Cat Images 1">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 2.jpg') }}" alt="Cat Images 2">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 3.jpg') }}" alt="Cat Images 3">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 11.jpg') }}" alt="Cat Images 4">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 5.jpeg') }}" alt="Cat Images 5">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 6.jpeg') }}" alt="Cat Images 6">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 7.jpeg') }}" alt="Cat Images 7">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 8.jpg') }}" alt="Cat Images 8">
        </div>
        <div class="gallery__photo">
            <img src="{{ asset('assets/gallery/Cat Images 9.jpg') }}" alt="Cat Images 9">
        </div>
    </section>

    <nav class="gallery__pageControl">
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
    </nav>
    </div>
    
</section>
@endsection