@extends('layouts.admin');

@section('content')
    <section class="content">
        <h2 class="content__header">Order History</h2>
        <div class="breadcrumbs">
            <span><a href="/admin">Home</a> 
            › &nbsp;Order History</span>
        </div>
        <div class="history">
            <div class="history__header">
                <form action="#" class="search-form">
                    <div class="search-form__group">
                        <input class="search-field search-field--grey" type="text" placeholder="Search...">
                        <i class='bx bx-search search-form__icon'></i>
                    </div>
                </form>
                <label class="label__status">Status</label>
                <select name="paymentstatus" size="1" class="select__payment">
                    <option value="choose">Choose...</option>
                    <option value="paid">Paid</option>
                    <option value="unpaid">Unpaid</option>
                    <option value="awaiting authorization">Awaiting Authorization</option>
                    <option value="payment failed">Payment Failed</option>
                </select>
            </div>
            
            <div class="history__tableContainer">
                <table class="dataTable">
                    <thead class="dataTable__header">
                        <tr>
                        <th scope="col">Order ID</th>
                        <th scope="col">Cat's Name</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Date</th>
                        <th scope="col">Payment Status</th>
                        <th scope="col">Ship To</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Total (Rp)</th>
                        </tr>
                    </thead>

                    <tbody class="dataTable__body">
                        <tr>
                            <td data-label="Order ID">#KN11248</td>
                            <td data-label="Cat's Name">Comel</td>
                            <td data-label="Customer">Muh Irham Maulana</td>
                            <td data-label="Date">Okt 14, 2022, 16.15 PM</td>
                            <td data-label="Payment Status">Paid</td>
                            <td data-label="Ship To">Muh Irham Maulana, BTN Kumala Permai, Jl. Muhammad Tahir, Tamalate, Sulawesi Selatan 90223</td>
                            <td>
                                <span class="dataTable__buttonDelivered">Delivered</span>
                            </td>
                            <td data-label="Total">2.000.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11249</td>
                            <td data-label="Cat's Name">Molly</td>
                            <td data-label="Customer">Eshan Rayyan Altair</td>
                            <td data-label="Date">Okt 15, 2022, 20.07 PM</td>
                            <td data-label="Payment Status">Paid</td>
                            <td data-label="Ship To">Eshan Rayyan Altair, BTN Graha Kalegowa, Pallangga, Gowa, Sulawesi Selatan 92161</td>
                            <td>
                                <span class="dataTable__buttonDelivered">Delivered</span>
                            </td>
                            <td data-label="Total">2.523.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11250</td>
                            <td data-label="Cat's Name">Haku</td>
                            <td data-label="Customer">Atira Septiara</td>
                            <td data-label="Date">Okt 16, 2022, 11.35 AM</td>
                            <td data-label="Payment Status">Paid</td>
                            <td data-label="Ship To">Atira Septiara, Kos Wildha, Jl. STTP Gowa, Bontomarannu, Gowa, Sulawesi Selatan 92171</td>
                            <td>
                                <span class="dataTable__buttonDelivered">Delivered</span>
                            </td>
                            <td data-label="Total">3.100.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11251</td>
                            <td data-label="Cat's Name">Nagi</td>
                            <td data-label="Customer">Husnul Khatimah</td>
                            <td data-label="Date">Okt 25, 2022, 13.25 PM</td>
                            <td data-label="Payment Status">Paid</td>
                            <td data-label="Ship To">Husnul Khatimah, Jl. Bontobila IV No. 9, Manggala, Makassar, Sulawesi Selatan 90233</td>
                            <td>
                                <span class="dataTable__buttonShipped">Shipped</span>
                            </td>
                            <td data-label="Total">1.500.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11252</td>
                            <td data-label="Cat's Name">Milo</td>
                            <td data-label="Customer">Muhammad Mifzal</td>
                            <td data-label="Date">Okt 29, 2022, 09.25 AM</td>
                            <td data-label="Payment Status">Payment Failed</td>
                            <td data-label="Ship To">Muhammad Mifzal, Ciputra Citraland D1/14, Jl. Tun Abdul Razak, Somba Opu, Gowa, Sulawesi Selatan 90233</td>
                            <td>
                                <span class="dataTable__buttonCancelled">Cancelled</span>
                            </td>
                            <td data-label="Total">1.150.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11253</td>
                            <td data-label="Cat's Name">Moci</td>
                            <td data-label="Customer">Dimas Pratama</td>
                            <td data-label="Date">Nov 1, 2022, 10.02 AM</td>
                            <td data-label="Payment Status">Paid</td>
                            <td data-label="Ship To">Dimas Pratama, Perumahan DL Sitorus, Sidomulyo, Deli Serdang, Medan, Sumatera Utara 20355</td>
                            <td>
                                <span class="dataTable__buttonShipped">Shipped</span>
                            </td>
                            <td data-label="Total">1.800.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11254</td>
                            <td data-label="Cat's Name">Micell</td>
                            <td data-label="Customer">Nurumayyah Fathurrachmah</td>
                            <td data-label="Date">Nov 5, 2022, 11.54 AM</td>
                            <td data-label="Payment Status">Awaiting Authorization</td>
                            <td data-label="Ship To">Nurumayyah Fathurrachmah, BTN Graha Kalegowa, Pallangga, Gowa, Sulawesi Selatan 92161</td>
                            <td>
                                <span class="dataTable__buttonProcessing">Processing</span>
                            </td>
                            <td data-label="Total">2.150.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11255</td>
                            <td data-label="Cat's Name">Meple</td>
                            <td data-label="Customer">Rofino Valentino</td>
                            <td data-label="Date">Nov 15, 2022, 13.25 PM</td>
                            <td data-label="Payment Status">Paid</td>
                            <td data-label="Ship To">Rofino Valentino, Jl.Sahabat VII, Tamalanrea, Makassar, Sulawesi Selatan 90245</td>
                            <td>
                                <span class="dataTable__buttonProcessing">Processing</span>
                            </td>
                            <td data-label="Total">3.150.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11256</td>
                            <td data-label="Cat's Name">Coreng</td>
                            <td data-label="Customer">Asmaul Husna</td>
                            <td data-label="Date">Nov 17, 2022, 15.35 PM</td>
                            <td data-label="Payment Status">Unpaid</td>
                            <td data-label="Ship To">Asmaul Husna, Perumahan Nirwana Pettarani, Panakkukang, Makassar, Sulawesi Selatan 90231</td>
                            <td>
                                <span class="dataTable__buttonCancelled">Cancelled</span>
                            </td>
                            <td data-label="Total">2.400.000</td>
                        </tr>
                        <tr>
                            <td data-label="Order ID">#KN11257</td>
                            <td data-label="Cat's Name">Bambi</td>
                            <td data-label="Customer">Arika Rani</td>
                            <td data-label="Date">Nov 20, 2022, 08.18 AM</td>
                            <td data-label="Payment Status">Awaiting Authorization</td>
                            <td data-label="Ship To">Arika Rani, Jl. Pelita Raya Blok A22 No.13, Rappocini, Makassar, Sulawesi Selatan 90222</td>
                            <td>
                                <span class="dataTable__buttonProcessing">Processing</span>
                            </td>
                            <td data-label="Total">2.250.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tablePagination">
                <div class="tablePagination_info" id="example5_info" role="status" aria-live="polite">Showing 1 to 10 of 40 entries</div>
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
