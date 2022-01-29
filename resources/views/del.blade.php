@foreach($product as $detail)
    <p><b>Nume</b> {{$detail->product_name}}</p>
    <p><b>Pret</b> {{$detail->price}}</p>
    <p>{!!$detail->desOne!!}</p>
    <p>{!!$detail->desTwo!!}</p>
    <p>{!!$detail->desThree!!}</p>
    <p>{!!$detail->desFour!!}</p>
    <p>Img {{$detail->picture}}</p>
    <p>Stock {{$detail->in_stock}}</p>
@endforeach