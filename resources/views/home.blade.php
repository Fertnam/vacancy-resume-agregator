@extends('layouts.main')

@section('title', 'Главная')
@section('body')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md">
                Агрегатор
            </div>

            <div class="links">
                <a href="{{ route('vacancies.index') }}">Все Вакансии</a>
                <a href="{{ route('resumes.index') }}">Все Резюме</a>
                <a href="https://github.com/Fertnam/vacancy-resume-agregator">GitHub</a>
            </div>
        </div>
    </div>
@endsection
