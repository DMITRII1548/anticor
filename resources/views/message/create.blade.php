@extends('layouts.main')

@section('styles')
    @vite(['resources/css/form.css'])
@endsection

@section('content')
    <section class="form">
        <form action="{{ route('messages.store') }}" method="POST" class="form__container">
            @csrf
            <h1 class="form__title">Столкнулись с коррупцией?</h1>
            <p class="form__p">Заполните ниже аннонимную форму и мы разберемся с этим.</p>
            <input class = "pole__name pole" type="text" placeholder = "Напишите Имя Отчество кто брал взятку (если знаете)">
            <input class = "pole_oblast pole" type="text" placeholder = "Область где произошло (событие)">
            <input class = "pole_city pole" type="text" placeholder = "Город в области">
            <input class = "pole_job_title pole" type="text" placeholder = "Должность гражданина">
            <textarea class="form__textarea @error('content') {{ 'form__textarea--red' }} @enderror" style="height: 100px;" name="content" placeholder="Опишите подробно, о том как вы столкнулись с коррупцией" value="{{ old('content') ?? '' }}" required></textarea>
            @error('content')
                <p class="form__error">{{ $message }}</p>
            @enderror
            <button class="from__btn button">Отправить</button>
        </form>
    </section>
@endsection