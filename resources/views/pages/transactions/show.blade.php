<table class="table table-bordered">
    <tr>
        <td>Nama</td>
        <td>{{$item -> name}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{$item -> email}}</td>
    </tr>
    <tr>
        <td>Nomor</td>
        <td>{{$item -> number}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>{{$item -> address}}</td>
    </tr>
    <tr>
        <td>Total Transaksi</td>
        <td>{{$item -> transaction_total}}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>{{$item -> transaction_status}}</td>
    </tr>
    

    <tr>
        <th>Pembelian Produk</th>
        <td>
            <table class="table table-bordered w-100">
                <tr>
                    <td>Nama</td>
                    <td>Tipe</td>
                    <td>Harga</td>
                </tr>
                @foreach ($item->details as $detail )
                <tr>
                    <td>{{ $detail->product->name}}</td>
                    <td>{{ $detail->product->type}}</td>
                    <td>Rp{{ $detail->product->price}}</td>
                </tr>                    
                @endforeach
            </table>
        </td>
    </tr>
</table>

<div class="row">
    <div class="col-4">
    <a href="{{route ('transactions.status', $item->id)}}? status=SUCCESS"
        class="btn btn-success btn btn-block">
        <i class="fa fa-check"></i> Set Sukses
    </a>
    </div>
    <div class="col-4">
    <a href="{{route ('transactions.status', $item->id)}}? status=FAILED"
        class="btn btn-warning btn btn-block">
        <i class="fa fa-times"></i> Set Failed
    </a>
    </div>
    <div class="col-4">
    <a href="{{route ('transactions.status', $item->id)}}? status=PENDING"
        class="btn btn-info btn btn-block">
        <i class="fa fa-spinner"></i> Set Pending
    </a>
    </div>
</div>