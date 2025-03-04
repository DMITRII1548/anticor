@extends('layouts.main')

@section('styles')
    @vite(['resources/css/thanks.css'])
@endsection

@section('content')
    <section class="thanks">
        <div class="thanks__container">
            <h1 class="thanks__title">Спасибо за обратную связь</h1>
            <p class="thanks__p">Наши эксперты рассмотрят вашу заявку в ближайшее время и примут соответвующие меры</p>
            <a href="{{ route('pages.home') }}" class="button thanks__btn">На главную</a>
        </div>
    </section>
@endsection