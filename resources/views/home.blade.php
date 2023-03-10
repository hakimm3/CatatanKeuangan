@extends('layout.app')
@push('title-page')
    Dashboard
@endpush
@push('breadcrumb')
    <li><span>Dashboard</span></li>
@endpush

@section('content')
    <div class="row justify-content-end my-4">
        <div class="col-4">
            <form>
                <div class="form-row align-items-center justify-content-end">
                    <div class="col-sm-4">
                        <label class="sr-only" for="inlineFormInputName">Name</label>
                        <select name="month" class="form-control">
                            <option value="" @if (request()->month == '') selected @endif>All</option>
                            <option value="january" @if (request()->month == 'january') selected @endif>January</option>
                            <option value="february" @if (request()->month == 'february') selected @endif>February</option>
                            <option value="march" @if (request()->month == 'march') selected @endif>March</option>
                            <option value="april" @if (request()->month == 'april') selected @endif>April</option>
                            <option value="may" @if (request()->month == 'may') selected @endif>May</option>
                            <option value="june" @if (request()->month == 'june') selected @endif>June</option>
                            <option value="july" @if (request()->month == 'july') selected @endif>July</option>
                            <option value="august" @if (request()->month == 'august') selected @endif>August</option>
                            <option value="september" @if (request()->month == 'september') selected @endif>September</option>
                            <option value="october" @if (request()->month == 'october') selected @endif>October</option>
                            <option value="november" @if (request()->month == 'november') selected @endif>November</option>
                            <option value="december" @if (request()->month == 'december') selected @endif>December</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <label class="sr-only" for="inlineFormInputGroupUsername">Year</label>
                        <div class="input-group">
                            <input type="year" name="year" value="{{ request()->year }}" class="form-control"
                                id="inlineFormInputGroupUsername" placeholder="Year">
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-4 mt-2">
            <div class="card">
                <div class="seo-fact sbg2">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-share"></i>Pemasukan Bulan Ini</div>
                        <h2>{{ $incomeThisMonth }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-2">
            <div class="card">
                <div class="seo-fact sbg3">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-share"></i>Pengeluaran Bulan Ini</div>
                        <h2>{{ $totalBulanIni }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4 mt-2">
            <div class="card">
                <div class="seo-fact sbg4">
                    <div class="p-4 d-flex justify-content-between align-items-center">
                        <div class="seofct-icon"><i class="ti-share"></i>Balance</div>
                        <h2>{{ $balanceThisMonth }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    @include('dashboard.bar-chart-category')
                </div>
            </div>
        </div>
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    @include('dashboard.line-chart-bulan')
                </div>
            </div>
        </div>
    </div>
@endsection