@extends('layouts.main')

@section('title', 'Все резюме')
@section('body')
    <div class="flex-center">
        @foreach($resumes as $resume)
            <div>
                <p>ID - {{ $resume->id }}</p>
                <p>Полное имя - {{ $resume->full_name }}</p>
                <p>Год рождения - {{ $resume->birth_year }}</p>
                <p>Пол - {{ ($resume->is_male == 1) ? 'мужской' : 'женский' }}</p>
                <p>В браке - {{ ($resume->is_married == 1) ? 'да' : 'нет' }}</p>
                <p>Есть дети - {{ ($resume->have_children == 1) ? 'да' : 'нет' }}</p>
                <p>Есть машина - {{ ($resume->have_car == 1) ? 'да' : 'нет' }}</p>
                <p>Желаемый район - {{ $resume->wishful_region }}</p>
                <p>Город - {{ $resume->city_name }}</p>
                <p>Время добавления - {{ $resume->adding_time }}</p>
                <p>Минимальная заработная плата - {{ $resume->minimum_salary }}</p>
                <p>Максимальная заработная плата - {{ $resume->maximum_salary }}</p>
                <p>Образование - {{ $resume->education_type_name }}</p>
                <p>Повышение квалификации - {{ $resume->additional_courses_and_trainings }}</p>
                <p>Иностранные языки - {{ $resume->foreign_languages }}</p>
                <p>Дополнительные требования - {{ $resume->additional_requirement }}</p>
                <p>О себе - {{ $resume->about_information }}</p>
                <p>Дополнительные навыки - {{ $resume->additional_skills }}</p>
                <p>Резюме с Farpost - {{ ($resume->from_farpost == 1) ? 'да' : 'нет' }}</p>
                <p>Резюме с архива - {{ ($resume->is_archived == 1) ? 'да' : 'нет' }}</p>
            </div>
        @endforeach
    </div>
    <div>{{ $resumes->links() }}</div>
@endsection