@extends('layouts.main')

@section('content')
    <h2>Your Products Lincecses</h2>
    <table class="licenses-table">
        <thead class="licenses__head">
        <tr class="head__row">
            <th>ID</th>
            <th>License</th>
            <th>Product</th>
            <th>Generated at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($licenses as $license)
            <tr class="row">
                <td>{{ $license->id }}</td>
                <td>{{ $license->key }}</td>
                <td>{{ $license->product()->name }}</td>
                <td class="item">
                    <div class="item__value">{{ $license->created_at }}</div>

                    <a class="item__delete" href="#" onclick="event.preventDefault();document.getElementById('delete-form').submit();">
                        <svg class="item__delete-btn">
                            <use xlink:href="img/sprite.svg#icon-log-out"></use>
                        </svg>
                    </a>
                    <form id="delete-form" action="/licenses/{{ $license->id }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
