<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
  * Класс модели для работы с вакансиями
  *
  * @version 1.0
  */
class Vacancy extends Model
{
	/**
	  * @access public
	  *
	  * @var bool Отключаем работу со столбцами created_at и updated_at
	  */
    public $timestamps = false;

    /**
	  * @access protected
	  *
	  * @var string Таблица для обращений
	  */
    protected $table = 'vacancy';

    /**
	  * Получить список записей для одной страницы (пагинация)
	  *
	  * @access public
	  *
	  * @static
	  *
	  * @param int $count Количество выводимых записей на одну странцу
	  *
	  * @return Illuminate\Pagination\LengthAwarePaginator Пагинатор
	  */
    public static function getByPage(int $count)
    {
    	$vacancies = self::select('vacancy.*', 'working_position.name as working_position_name', 'city.name as city_name', 'education_type.name as education_type_name', 'work_experience.name as work_experience_name', 'organisation.name as organisation_name')
                    	 ->join('working_position', 'working_position_id', 'working_position.id')
                         ->join('city', 'city_id', 'city.id')
                         ->join('education_type', 'education_type_id', 'education_type.id')
                         ->join('work_experience', 'work_experience_id', 'work_experience.id')
                         ->join('organisation', 'organisation_id', 'organisation.id')
                         ->paginate($count);

        return $vacancies;
    }
}
