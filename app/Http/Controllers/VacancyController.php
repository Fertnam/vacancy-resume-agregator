<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacancy;

/**
  * Класс контроллера для работы с вакансиями
  *
  * @version 1.0
  */
class VacancyController extends Controller
{
    /**
      * @access public
      *
      * @var int Количество записей на одну страницу по-умолчанию
      */
    const SHOW_BY_DEFAULT = 3;

    /**
      * Вывести список всех записей через пагинацию
      *
      * @access public
      *
      * @return Illuminate\View\View Шаблон
      */
    public function index()
    {
      return view('vacancies', ['vacancies' => Vacancy::getByPage(self::SHOW_BY_DEFAULT)]);
    }
}
