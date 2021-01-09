@extends('template.base')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-4">
					<div class="card-header">
						Detail Data Produk
					</div>
					<div class="card-body">
						<h4>{{$produk->nama}}</h4><hr>
						<p>{{$produk->harga}} |
							Stok : {{$produk->stok}} |
							Berat : {{$produk->berat}} Kg |
							Warna : {{$produk->warna}} |
							Seller : {{$produk->seller->nama}} <br> 
							Diupload : {{$produk->created_at->diffforHumans()}} | 
							Diupdate : {{$produk->updated_at->diffforHumans()}}
						</p>
						{!! nl2br($produk->deskripsi) !!}
					</div>
				</div>
			</div>
		</div>		
	</div>

@endsection