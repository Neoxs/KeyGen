@extends('layouts.main')

@section('content')
    <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
            <h2 class="heading-secondary">
                Our Products
            </h2>
        </div>
        <div class="row">
            <div class="col-1-of-3">
                <div class="card">
                    <div class="card__side card__side--front">
                        <div class="card__picture card__picture--1">

                        </div>
                        <div class="card__heading">
                            <span class="card__heading-span card__heading-span--1">Bronco</span>
                        </div>
                        <div class="card__details">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit, dolore?</p>
                        </div>
                    </div>

                    <div class="card__side card__side--back card__side--back-1">
                        <div class="card__cta">
                            <div class="card__price-box">
                                <p class="card__price-only">Only</p>
                                <p class="card__price-value">$297</p>
                            </div>
                            <a href="#popup" class="btn btn--white">Generate License!</a>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
