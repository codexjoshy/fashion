@extends('layouts.app')
@push('css')
<link rel="stylesheet" type="text/css"
    href="{{ asset('backend/assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">
@endpush
@section('content')

<div class="row">
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">Wallet Balance (&#8358;)</h6>
                    <h2 class="mb-0">{{ 0}}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                    <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">Ledger Balance (&#8358;)</h6>
                    <h2 class="mb-0">{{ 0 }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                    <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">Total Investments (&#8358;)</h6>
                    <h2 class="mb-0">{{ 0 }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fa fa-eye fa-fw fa-sm text-info"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">Outstanding Loans (&#8358;)</h6>
                    <h2 class="mb-0">{{ 0 }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                    <i class="fa fa-user fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">Pending Withdraws</h6>
                    <h2 class="mb-0">{{ 0 }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-secondary-light mt-1">
                    <i class="fa fa-handshake fa-fw fa-sm text-secondary"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">PV</h6>
                    <h2 class="mb-0">{{ 0}}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-primary-light mt-1">
                    <i class="fas fa-certificate fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">Downlines</h6>
                    <h2 class="mb-0">{{ 0 }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-success-light mt-1">
                    <i class="fas fa-code-branch fa-fw fa-sm text-success"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h6 class="text-muted">My Commissions</h6>
                    <h2 class="mb-0">{{ 0 }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-warning-light mt-1">
                    <i class="fas fa-money-bill-alt fa-fw fa-sm text-warning"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Wallet Transactions</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Amount</th>
                                <th>Type</th>
                                <th>Narration</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Recent Earnings</h5>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Value</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend/assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/assets/vendor/datatables/js/data-table.js') }}"></script>
@endpush
