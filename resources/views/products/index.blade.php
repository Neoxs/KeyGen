@extends('layouts.main')

@section('content')
    <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="page-header" style="margin-top: 0;">
                Our Products
            </h2>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">

                            </div>
                            <div class="card__heading">
                                <span class="card__heading-span card__heading-span--1">{{ $product->name }}</span>
                            </div>
                            <div class="card__details">
                                <p>{{ $product->description }}</p>
                            </div>
                        </div>

                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$297</p>
                                </div>
                                <a href="#" class="btn btn--white" onclick="event.preventDefault();document.getElementById('add-form').submit();">Generate License!</a>
                                <form id="add-form" action="/products/{{ $product->id }}/licenses" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
