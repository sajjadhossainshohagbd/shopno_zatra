<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> --}}
    <style>

        header,footer {
                display: none;
        }
        .custom-container {
            margin: 50px;
        }
        @media print {
            .custom-container {
                margin: 0;
            }
            .btn-group {
                display: none;
            }
        }
    </style>
    <script>
        window.print();
    </script>
</head>
<body>
    <div class="custom-container">
        <div class="text-center btn-group">
            <a href="{{ route('user.download.receipt') }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back to Download Receipt</a>
            <button class="btn btn-success" onclick="window.print()"><i class="fa fa-print"></i> Print Invoice</button>
        </div>
        <div class="row pt-3">
            <div class="col-3">
                <h3>Official Invoice</h3>
                {{-- <h6>Receipt No: <span>5200</span></h6> --}}
                <h6>Customer ID: <span>{{ auth()->id() }}</span></h6>
                <h6>Date: <span>{{ date('d M Y') }}</span></h6>
            </div>
            <div class="col-5 m-auto text-center">
                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                <h6>Fly with your dream.</h6>
            </div>
            <div class="col-4 pt-5">
                {{-- <h6>Mobile : 01900000000</h6> --}}
                <h6>E-mail : shopnozatraltd@gmail.com</h6>
                <h6>Web : www.shopnozatra.com</h6>
            </div>
        </div>
        <hr>
        <table class="table table-bordered border border-black">
            <thead>
                <td colspan="4">
                    <b>Customer Name</b> : {{ auth()->user()->name }} <br>
                    <b>Mobile</b> : {{ auth()->user()->phone }} <br>
                    <b>E-mail</b> : {{ auth()->user()->email }}
                </td>
            </thead>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Purpose</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>{{ $data->created_at->format('d M Y') }}</td>
                    <td>{{ ucwords(str_replace('_',' ',$data->type)) }}</td>
                    <td class="{{ $data->type == 'add_balance' || $data->type == 'add_balance_for_korea_visa' ? 'text-success' : 'text-danger' }}"> {{ $data->type == 'add_balance' || $data->type == 'add_balance_for_korea_visa' ? '+' : '-' }} {{ $data->price }} BDT</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
