<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
  * Класс модели для работы с резюме
  *
  * @version 1.0
  */
class Resume extends Model
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
    protected $table = 'resume';

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
    	$resumes = self::select('resume.*', 'city.name as city_name', 'education_type.name as education_type_name')
                       ->join('city', 'city_id', 'city.id')
                       ->join('education_type', 'education_type_id', 'education_type.id')
                       ->paginate($count);

        return $resumes;
    }
}
