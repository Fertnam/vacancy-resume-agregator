<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resume;

/**
  * Класс контроллера для работы с резюме
  *
  * @version 1.0
  */
class ResumeController extends Controller
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
      return view('resumes', ['resumes' => Resume::getByPage(self::SHOW_BY_DEFAULT)]);
    }
}
