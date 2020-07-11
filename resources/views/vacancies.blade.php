@extends('layouts.main')

@section('title', 'Все вакансии')
@section('body')
    <div class="flex-center">
        @foreach($vacancies as $vacancy)
            <div>
                <p>ID - {{ $vacancy->id }}</p>
                <p>Рабочая должность - {{ $vacancy->working_position_name }}</p>
                <p>Город - {{ $vacancy->city_name }}</p>
                <p>Время добавления - {{ $vacancy->adding_time }}</p>
                <p>Адрес - {{ $vacancy->address }}</p>
                <p>Регион - {{ $vacancy->region }}</p>
                <p>Обязанности по работе - {{ $vacancy->working_duty }}</p>
                <p>Минимальная заработная плата - {{ $vacancy->minimum_salary }}</p>
                <p>Максимальная заработная плата - {{ $vacancy->maximum_salary }}</p>
                <p>Условия работы - {{ $vacancy->working_criterion }}</p>
                <p>Описание заработной платы - {{ $vacancy->salary_description }}</p>
                <p>Образование - {{ $vacancy->education_type_name }}</p>
                <p>Опыт работы - {{ $vacancy->work_experience_name }}</p>
                <p>Дополнительные требования - {{ $vacancy->additional_requirement }}</p>
                <p>Организация - {{ $vacancy->organisation_name }}</p>
                <p>Вакансия с Farpost - {{ ($vacancy->from_farpost == 1) ? 'да' : 'нет' }}</p>
                <p>Вакансия с архива - {{ ($vacancy->is_archived == 1) ? 'да' : 'нет' }}</p>
            </div>
        @endforeach
    </div>
    <div>{{ $vacancies->links() }}</div>
@endsection