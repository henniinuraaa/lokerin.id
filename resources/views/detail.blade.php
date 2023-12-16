{{--  @extends('landingpage')
@section('content')  --}}
<div class="mt-4 row-box">
    @foreach ($postings as $item)
    <img src="{{ asset('storage/'.$item['foto']) }}" alt="...">
    <div class="text-center mt-3">
        <strong class="d-block text-white"><h3 class="text-white">{{ $item->nama_perusahaan }}</h3></strong>
        <span class="text-white">{{ $item->deskripsi }}</span>
    </div>
    </div>
   
<div class="custom-block-info">
    <div class="reviews-group mb-3">
    </div>
 @endforeach
{{-- produk --}}
</div>
{{--  @endsection  --}}