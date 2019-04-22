<?php
namespace backend\models;

class City extends \common\models\City
{
	/**
	 * {@inheritdoc}
	 */
	public function attributeLabels()
	{
		return [
			'id' => 'ID',
			'name_md' => 'Назавание (h1) (Молдавский)',
			'name_en' => 'Назавание (h1) (Английский)',
			'name_ru' => 'Назавание (h1) (Русский)',
			'slug' => 'URL',
			'anchor' => 'Анкор для переводов (md,en,ru)',
			'body_md' => 'Описание (Молдавский)',
			'body_en' => 'Описание (Английский)',
			'body_ru' => 'Описание (Русский)',
			'seo_title_md' => 'SEO Title (Молдавский)',
			'seo_title_en' => 'SEO Title (Английский)',
			'seo_title_ru' => 'SEO Title (Русский)',
			'seo_description_md' => 'SEO Description (Молдавский)',
			'seo_description_en' => 'SEO Description (Английский)',
			'seo_description_ru' => 'SEO Description (Русский)',
			'status' => 'Статус',
		];
	}
}