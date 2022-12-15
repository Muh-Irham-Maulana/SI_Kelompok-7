@extends('layouts.admin')

@section('content')
    <section class="content">
        <h2 class="content__header">Ongoing Orders</h2>
        <div class="breadcrumbs">
            <span><a href="/admin">Home</a> 
            › &nbsp;Ongoing Orders</span>
        </div>
        <div class="ongoing">
        <div class="ongoing__list">
            <div class="ongoing__card">
                <div class="ongoing__body">
                    <div class="ongoing__header">
                        <div class="ongoing__col">
                            <button class="ongoing__buttonId">#KN11258</button>
                        </div>
                        <div class="ongoing__dropdown">
                            <button class="ongoing__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="ongoing__dropdownBox">
                                <a href="#">Accept Order</a>
                                <a href="#">Reject Order</a>
                            </div>
                        </div>
                    </div>

                    <div class="ongoing__table">
                        <table class="ongoing__dataTable">
                            <tbody class="ongoingData__body">
                            <tr>
                                <td class="ongoingData__left">
                                    <img src="{{ asset('assets/content/kucing1.png') }}" alt="Cat image" title="Cat image" class="ongoingData__image" height="80" />
                                    <div class="ongoingData__text">
                                        <a href="#!" class="ongoingData__textTop">
                                            <h5 class="ongoingData__text--name">JOSH</h5>
                                        </a><br>
                                        <a href="#!" class="ongoingData__textBottom">
                                            <h6 class="ongoingData__text--type">Persia Medium</h6>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp 2.000.000</h5>
                                </td>
                                <td class="ongoingData__right">
                                    <div class="ongoingData__customer">
                                        <h5 class="ongoingData__customer--name">Anggi</h5>
                                        <small class="ongoingData__customer--address">Perumahan DL Sitorus, Sidomulyo, Deli Serdang, Medan, Sumatera Utara 20355</small>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="ongoing__line">
                    <div class="ongoing__footer">
                        <div class="ongoing__col">
                            <span class="ongoing__bottomLeft">Ordered On</span>
                            <strong class="ongoing__date">Fri, Nov 25, 2022</strong>
                        </div>
                        <div class="ongoing__colRight">
                            <span class="ongoing__bottomRight">Ordered Amount</span>
                            <strong class="ongoing__price">Rp 2.124.000</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ongoing__card">
                <div class="ongoing__body">
                    <div class="ongoing__header">
                        <div class="ongoing__col">
                            <button class="ongoing__buttonId">#KN11259</button>
                        </div>
                        <div class="ongoing__dropdown">
                            <button class="ongoing__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="ongoing__dropdownBox">
                            <a href="#">Accept Order</a>
                            <a href="#">Reject Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="ongoing__table">
                        <table class="ongoing__dataTable">
                            <tbody class="ongoingData__body">
                            <tr>
                                <td class="ongoingData__left">
                                    <img src="{{ asset('assets/content/kucing2.png') }}" alt="Cat image" title="Cat image" class="ongoingData__image" height="80" />
                                    <div class="ongoingData__text">
                                        <a href="#!" class="ongoingData__textTop">
                                            <h5 class="ongoingData__text--name">ALE'</h5>
                                        </a><br>
                                        <a href="#!" class="ongoingData__textBottom">
                                            <h6 class="ongoingData__text--type">Peaknose</h6>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp 1.550.000</h5>
                                </td>
                                <td class="ongoingData__right">
                                    <div class="ongoingData__customer">
                                        <h5 class="ongoingData__customer--name">Tri Indah Wahyuningsih</h5>
                                        <small class="ongoingData__customer--address">Jl. Arsitektur 4, Bangkala, Manggala, Makassar, Sulawesi Selatan 90235</small>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="ongoing__line">
                    <div class="ongoing__footer">
                        <div class="ongoing__col">
                            <span class="ongoing__bottomLeft">Ordered On</span>
                            <strong class="ongoing__date">Sun, Nov 27, 2022</strong>
                        </div>
                        <div class="ongoing__colRight">
                            <span class="ongoing__bottomRight">Ordered Amount</span>
                            <strong class="ongoing__price">Rp 1.500.000</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ongoing__card">
                <div class="ongoing__body">
                    <div class="ongoing__header">
                        <div class="ongoing__col">
                            <button class="ongoing__buttonId">#KN11260</button>
                        </div>
                        <div class="ongoing__dropdown">
                            <button class="ongoing__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="ongoing__dropdownBox">
                            <a href="#">Accept Order</a>
                            <a href="#">Reject Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="ongoing__table">
                        <table class="ongoing__dataTable">
                            <tbody class="ongoingData__body">
                            <tr>
                                <td class="ongoingData__left">
                                    <img src="{{ asset('assets/content/kucing3.png') }}" alt="Cat image" title="Cat image" class="ongoingData__image" height="80" />
                                    <div class="ongoingData__text">
                                        <a href="#!" class="ongoingData__textTop">
                                            <h5 class="ongoingData__text--name">DESI</h5>
                                        </a><br>
                                        <a href="#!" class="ongoingData__textBottom">
                                            <h6 class="ongoingData__text--type">Himalaya</h6>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp 1.300.000</h5>
                                </td>
                                <td class="ongoingData__right">
                                    <div class="ongoingData__customer">
                                        <h5 class="ongoingData__customer--name">Sitti Zakiyah</h5>
                                        <small class="ongoingData__customer--address">Perumahan Anging Mammiri, Rappocini, Makassar, Sulawesi Selatan 90233</small>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="ongoing__line">
                    <div class="ongoing__footer">
                        <div class="ongoing__col">
                            <span class="ongoing__bottomLeft">Ordered On</span>
                            <strong class="ongoing__date">Mon, Nov 28, 2022</strong>
                        </div>
                        <div class="ongoing__colRight">
                            <span class="ongoing__bottomRight">Ordered Amount</span>
                            <strong class="ongoing__price">Rp 1.300.000</strong>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ongoing__card">
                <div class="ongoing__body">
                    <div class="ongoing__header">
                        <div class="ongoing__col">
                            <button class="ongoing__buttonId">#KN11261</button>
                        </div>
                        <div class="ongoing__dropdown">
                            <button class="ongoing__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="ongoing__dropdownBox">
                            <a href="#">Accept Order</a>
                            <a href="#">Reject Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="ongoing__table">
                        <table class="ongoing__dataTable">
                            <tbody class="ongoingData__body">
                            <tr>
                                <td class="ongoingData__left">
                                    <img src="{{ asset('assets/content/kucing5.png') }}" alt="Cat image" title="Cat image" class="ongoingData__image" height="80" />
                                    <div class="ongoingData__text">
                                        <a href="#!" class="ongoingData__textTop">
                                            <h5 class="ongoingData__text--name">KITTY</h5>
                                        </a><br>
                                        <a href="#!" class="ongoingData__textBottom">
                                            <h6 class="ongoingData__text--type">Persia Medium</h6>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp 2.250.000</h5>
                                </td>
                                <td class="ongoingData__right">
                                    <div class="ongoingData__customer">
                                        <h5 class="ongoingData__customer--name">Azzahra Beladina</h5>
                                        <small class="ongoingData__customer--address">Kos Wildha, Jl. STTP Gowa, Bontomarannu, Gowa, Sulawesi Selatan 92171</small>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="ongoing__line">
                    <div class="ongoing__footer">
                        <div class="ongoing__col">
                            <span class="ongoing__bottomLeft">Ordered On</span>
                            <strong class="ongoing__date">Tue, Nov 29, 2022</strong>
                        </div>
                        <div class="ongoing__colRight">
                            <span class="ongoing__bottomRight">Ordered Amount</span>
                            <strong class="ongoing__price">Rp 2.250.000</strong>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="ongoing__card">
                <div class="ongoing__body">
                    <div class="ongoing__header">
                        <div class="ongoing__col">
                            <button class="ongoing__buttonId">#KN11262</button>
                        </div>
                        <div class="ongoing__dropdown">
                            <button class="ongoing__buttonDropdown"><i class="fa">&#xf142;</i></button>
                            <div class="ongoing__dropdownBox">
                            <a href="#">Accept Order</a>
                            <a href="#">Reject Order</a>
                            </div>
                        </div>
                    </div>
                    <div class="ongoing__table">
                        <table class="ongoing__dataTable">
                            <tbody class="ongoingData__body">
                            <tr>
                                <td class="ongoingData__left">
                                    <img src="{{ asset('assets/content/kucing4.png') }}" alt="Cat image" title="Cat image" class="ongoingData__image" height="80" />
                                    <div class="ongoingData__text">
                                        <a href="#!" class="ongoingData__textTop">
                                            <h5 class="ongoingData__text--name">FRANKY</h5>
                                        </a><br>
                                        <a href="#!" class="ongoingData__textBottom">
                                            <h6 class="ongoingData__text--type">Himalaya</h6>
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp 2.250.000</h5>
                                </td>
                                <td class="ongoingData__right">
                                    <div class="ongoingData__customer">
                                        <h5 class="ongoingData__customer--name">Wa Ode Dian</h5>
                                        <small class="ongoingData__customer--address">Pondok Putri Sari, Jl. Muhajirin 3, Tamalate, Sulawesi Selatan 90224</small>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr class="ongoing__line">
                    <div class="ongoing__footer">
                        <div class="ongoing__col">
                            <span class="ongoing__bottomLeft">Ordered On</span>
                            <strong class="ongoing__date">Tue, Des 1, 2022</strong>
                        </div>
                        <div class="ongoing__colRight">
                            <span class="ongoing__bottomRight">Ordered Amount</span>
                            <strong class="ongoing__price">Rp 2.276.000</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <div class="ongoing__footer">
            <div class="tablePagination">
                <div class="tablePagination_info" id="example5_info" role="status" aria-live="polite">Showing 1 to 5 of 20 entries</div>
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
    </section>
@endsection
