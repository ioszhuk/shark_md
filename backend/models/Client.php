<?php
namespace backend\models;

class Client extends \common\models\Client
{
	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'position' => 'Располежение контента',
			'name_md' => 'Назавание (Молдавский)',
			'name_en' => 'Назавание (Английский)',
			'name_ru' => 'Назавание (Русский)',
			'image_md' => 'Картинка для молдавской версии сайта',
			'image_en' => 'Картинка для английской версии сайта',
			'image_ru' => 'Картинка для русской версии сайта',
			'body_md' => 'Описание (Молдавский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
			'sort_order' => 'Порядок сортировки',
		];
	}
}