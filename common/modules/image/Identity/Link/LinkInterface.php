<?php

namespace common\modules\Image\Identity\Link;

/**
 * Интерфейс ссылки на изображение (url и пр)
 */
interface LinkInterface {
	
	/**
	 * @return string
	 */
	public function getUriLink();
	
}
