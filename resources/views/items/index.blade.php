@extends('layout')

@section('title', 'Item List')

@section('content')

    <div class="row mb-4">
        <div class="col-12">
            <h1>Items List</h1>
        </div>
    </div>

    <table class="table mb-4" >
        <thead class="thead-dark">
            <tr class="tr thead-dark" style="background-color: #1b1e21">
                <th class="col-1 h5 text-white text-center" style="width: 2%;">
                    <input id="select-all" type="checkbox" onclick="toggle(this)">
                </th>
                <th class="col-1 h5 text-white text-center">ID</th>
                <th class="col-1 h5 text-white text-center">Name</th>
                <th class="col-1 h5 text-white text-center">URL</th>
                <th class="col-1 h5 text-white text-end">Price(USD)</th>
                <th class="col-1 h5 text-white text-center">Quantity</th>
            </tr>
        </thead>
        <tbody id="items-tbody">
        </tbody>
    </table>
    <div class="d-flex justify-content-ar mb-5">
        <div class="d-flex me-2"><select id="currency-code" class="form-select align-self-center" style="width:95px;"></select></div>
        <div class="d-flex me-auto"><button id="calculate-btn" class="btn btn-outline-success align-self-center">Calculate</button></div>
        <table id="exchange" class="mb-0 align-self-center" style="width:250px; margin-right: 145px;">
            <tr>
                <td id="total-title" class="text-end"></td>
                <td id="total-usd" class="text-end"></td>
            </tr>
            <tr>
                <td id="exchange-title" class="text-end"></td>
                <td id="total-exchange" class="text-end"></td>
            </tr>
        </table>
    </div>

    <div class="d-flex justify-content-between mt-5">
        <button id="add-item-btn" class="btn btn-dark me-2">Add Item</button>
        <button id="delete-all-btn" class="btn btn-danger">Delete All</button>
    </div>

@endsection

@section('script')
    <script type="text/javascript" src="{{asset('js/index.js')}}"></script>
@endsection
