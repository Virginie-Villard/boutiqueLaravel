@extends('Layouts.Layouts.Layout')

@section('title', 'Products list')

@section('content')
    <h1>Products list</h1>

{{--    @foreach($products as $product)--}}
{{--        <h2>Product {{ $id }}</h2>--}}
{{--    @endforeach--}}

    <div class = "prods">
        <h2>Wild Bed</h2>

        <div>
            <a href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/'
               target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'>
                <img src='https://deavita.fr/wp-content/uploads/2021/09/chambre-coucher-boheme-tendances-deco-plantes-vertes-exotiques.webp'/>
            </a>
        </div>

        <div style='color:#444;'>
            <small>
                <a style='text-decoration:none;
                        color:#000;' href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank'
                   title='10 tendances déco 2022 que vous aimerez immédiatement !' alt="10 tendances déco 2022 que vous aimerez immédiatement !">
                </a>
            </small>
        </div>

        <div class = "price">
            650 €
        </div>

    </div>

    <div class = "prods">

        <h2>Wild Lounge</h2>

        <div><a href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'><img src='https://deavita.fr/wp-content/uploads/2021/09/idees-tendances-deco-2022-culte-nature-matieres-brutes-textures.webp' alt='10 tendances déco 2022 que vous aimerez immédiatement !' border=0/></a></div><div style='color:#444;'><small><a style='text-decoration:none;color:#000;' href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'></a></small></div>

        <div class = "price">
            1300 €
        </div>

    </div>

    <div class = "prods">

        <h2>Trendy Dining Room</h2>

        <div><a href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'><img src='https://deavita.fr/wp-content/uploads/2021/09/espaces-miltiofonctionnels-tendances-deco-2022-studio-mezzanine.webp' alt='10 tendances déco 2022 que vous aimerez immédiatement !' border=0/></a></div><div style='color:#444;'><small><a style='text-decoration:none;color:#000;' href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'></a></small></div>
        <div class = "price">
            1950 €
        </div>

    </div>

    <div class = "prods">

        <h2>Chic Lounge</h2>

        <div><a href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'><img src='https://deavita.fr/wp-content/uploads/2021/09/style-grand-millennial-tendances-deco-2022-salon-eclectique.webp' alt='10 tendances déco 2022 que vous aimerez immédiatement !' border=0/></a></div><div style='color:#444;'><small><a style='text-decoration:none;color:#000;' href='https://deavita.fr/decoration-interieur/tendances-deco-2022-399673/' target='_blank' title='10 tendances déco 2022 que vous aimerez immédiatement !'></a></small></div>

        <div class = "price">
            2200 €
        </div>
    </div>
@stop

<style>

    .prods
    {
        margin-bottom: 150px;
    }

    .price
    {
        font-size: 16px;
    }

</style>


