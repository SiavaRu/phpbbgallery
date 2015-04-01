<?php
/**
*
* gallery_acp [Russian]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
**/
/**
* DO NOT CHANGE
*/
$lang = array_merge($lang, array(
	'ACP_GALLERY_OVERVIEW'			=> 'Обзор',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> '',
	'ADD_ALBUM_ON_TOP'				=> 'Сделать альбом первым в списке',
	'ADD_PERMISSIONS'				=> 'Добавить права доступа',
	'ALBUM_ADMIN'					=> 'Администрирование альбомов',
	'ALBUM_ADMIN_EXPLAIN'			=> 'Каждый альбом может содержать неограниченное количество вложенных альбомов. Здесь можно добавлять, редактировать, удалять, закрывать и открывать альбомы, а также управлять их дополнительными свойствами. Также, если тебуется, можно произвести ресинхронизацию альбома. Чтобы вновь созданный альбом стал виден, необходимо установить или скопировать соответствующие права доступа.',
	'ALBUM_AUTH_TITLE'				=> 'Права доступа к альбому',
	'ALBUM_CREATED'					=> 'Альбом создан.',
	'ALBUM_DELETE'					=> 'Удалить альбом',
	'ALBUM_DELETE_EXPLAIN'			=> 'Форма ниже позволит вам удалить альбом и решить, куда переместить содержащиеся в нём фотографии.',
	'ALBUM_DELETED'					=> 'Альбом удалён.',
	'ALBUM_DESC'					=> 'Описание',
	'ALBUM_DESC_EXPLAIN'			=> 'Любая заданная здесь разметка будет отображена в этом же виде.',
	'ALBUM_DESC_TOO_LONG'			=> 'Описание альбома слишком длинное, оно должно быть короче 4000 символов.',
	'ALBUM_EDIT_EXPLAIN'			=> 'На этой странице можно изменить свойства альбома. Права доступа настраиваются отдельно.',
	'ALBUM_ID'						=> 'ID альбома',
	'ALBUM_IMAGE'					=> 'Значок альбома',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Путь относительно корневой папки phpBB к дополнительному изображению, ассоциированному с этим альбом.',
	'ALBUM_NAME_EMPTY'				=> 'Необходимо задать название альбома.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Неконкурсный альбом не может быть переделан в конкурсный.',
	'ALBUM_PARENT'					=> 'Родительский альбом',
	'ALBUM_PARENT_INVALID'			=> 'Некорректно выбран родительский альбом. Он либо не существует, либо является вложенным по отношению к редактируемому вами альбому.',
	'ALBUM_PASSWORD'				=> 'Пароль к альбому',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Устанавливает пароль для этого альбома. Предпочтительно использование системы прав доступа.',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Подтвердите пароль к альбому',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Необходимо только в случае, если задан пароль к альбому.',
	'ALBUM_RESYNCED'				=> 'Альбом «%s» синхронизирован',
	'ALBUM_SETTINGS'				=> 'Свойства альбома',
	'ALBUM_STATUS'					=> 'Статус альбома',
	'ALBUM_TYPE'					=> 'Тип альбома',
	'ALBUM_TYPE_CAT'				=> 'Категория',
	'ALBUM_TYPE_CONTEST'			=> 'Конкурс',
	'ALBUM_TYPE_UPLOAD'				=> 'Альбом',
	'ALBUM_UPDATED'					=> 'Альбом обновлён.',
	'ALBUM_WATERMARK'				=> 'Показывать водяной знак',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Если установлено «Нет» — водяной знак никогда не показывается, вне зависимости от установленных прав доступа.',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Конкурсный альбом не может быть переделан в обычный.',
	'ALBUMS'						=> 'Альбомы',
	'CACHE_DIR_SIZE'				=> 'Размер кэша',
	'CHANGE_AUTHOR_TO_GUEST'		=> 'Сменить автора на «Гостя»',
	'CHECK'							=> 'Проверка',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Не найдено фотографий без автора.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Не найдено комментариев без автора.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Не найдено файлов. Выполните проверку.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Не найдено личных альбомов без владельцев.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Не найдено личных альбомов.',
	'CHECK_SOURCE_EXPLAIN'			=> 'Не найдено записей. Выполните проверку.',
	'COLS_PER_PAGE'					=> 'Количество столбцов на странице с миниатюрами',
	'COMMENT'						=> 'Комментарий',
	'COMMENT_ID'					=> 'ID комментария',
	'COMMENT_MAX_LENGTH'			=> 'Максимальная длина комментариев',
	'COMMENT_SYSTEM'				=> 'Включить комментарии',
	'COMMENT_USER_CONTROL'			=> 'Пользователи могут управлять комментариями',
	'COMMENT_USER_CONTROL_EXP'		=> 'Предоставить пользователям возможность разрешать/запрещать комментирование своих фотографий.',
	'CONTEST_DATE_EXPLAIN'			=> 'Введите дату в формате YYYY-MM-DD HH:MM.',
	'CONTEST_END'					=> 'Конкурс завершён',
	'CONTEST_END_BEFORE_RATING'		=> 'Окончание конкурса не может быть раньше, чем начало голосования.',
	'CONTEST_END_BEFORE_START'		=> 'Окончание конкурса не может быть раньше, чем его начало.',
	'CONTEST_END_EXPLAIN'			=> 'Пользователи не могут оценивать фото после окончания конкурса.',
	'CONTEST_END_INVALID'			=> 'Неправильное время окончания голосования (%s). Введите дату в формате YYYY-MM-DD HH:MM.',
	'CONTEST_RATING'				=> 'Начало голосования',
	'CONTEST_RATING_BEFORE_START'	=> 'Начало голосования не может быть раньше, чем начало конкурса.',
	'CONTEST_RATING_EXPLAIN'		=> 'После начала голосования польователь не может загружать фотографии.',
	'CONTEST_RATING_INVALID'		=> 'Неправильное время начала голосования (%s). Введите дату в формате YYYY-MM-DD HH:MM.',
	'CONTEST_SETTINGS'				=> 'Свойства конкурса',
	'CONTEST_START'					=> 'Начало конкурса',
	'CONTEST_START_EXPLAIN'			=> 'После начала конкурса пользователи могут загружать фотографии.',
	'CONTEST_START_INVALID'			=> 'Неправильное время начала конкурса (%s). Введите дату в формате YYYY-MM-DD HH:MM.',
	'COPY_PERMISSIONS'				=> 'Копировать права доступа из',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Исходный альбом, из которого вы хотите скопировать права доступа. Если ничего не выбрано, не забудьте настроить права после создания альбома.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'Исходный альбом, из которого вы хотите скопировать права доступа.',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Конечный альбом, к которому будут применены права доступа.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'Помните, что это приведёт к перезаписи любых существующих прав доступа к выбранным альбомам.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Исходный альбом, из которого вы хотите скопировать права доступа. Копирование перезапишет существующие права. Если альбом не выбран, существующие права доступа сохранятся.',
	'COPY_PERMISSIONS_FROM'			=> 'Копировать права доступа из',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Права доступа скопированы.',
	'COPY_PERMISSIONS_TO'			=> 'Применить права доступа к',
	'CREATE'						=> 'Создать',
	'CREATE_ALBUM'					=> 'Создать новый альбом',
	'CREATE_USERS_PEGA'				=> 'Создать личный альбом пользователю',
	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Удалить содержимое или переместить в другой альбом',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Удалить вложенный альбом или переместить в другой альбом',
	'DEFAULT_SORT_EXPLAIN'			=> 'Если выбрано «По умолчанию», параметры сортировки берутся из общих параметров галереи.',
	'DEFAULT_SORT_METHOD'			=> 'Метод сортировки по умолчанию',
	'DEFAULT_SORT_ORDER'			=> 'Порядок сортировки по умолчанию',
	'DELETE_ALBUM_SUBS'				=> 'Сначала удалите вложенные альбомы',
	'DELETE_ALL_IMAGES'				=> 'Удалить все фотографии',
	'DELETE_IMAGES'					=> 'Удалить фотографии',
	'DELETE_PERMISSIONS'			=> 'Удалить права доступа',
	'DELETE_SUBALBUMS'				=> 'Удалить вложенные альбомы вместе с фотографиями',
	'DISP_BIRTHDAYS'				=> 'Показывать дни рождения',
	'DISP_FAKE_THUMB'				=> 'Вывод миниатюр в списке альбомов',
	'DISP_LOGIN'					=> 'Показывать форму входа',
	'DISP_LOGIN_EXP'				=> 'Только для гостей.',
	'DISP_NEXTPREV_THUMB'			=> 'Показывать миниатюры предыдущего/следующего фото',
	'DISP_NEXTPREV_THUMB_EXPLAIN'	=> 'Если «Нет», ссылки на предыдущее/следующее фото будут текстовыми.',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Показывать ссылку на личный альбом в профиле пользователя',
	'DISP_STATISTIC'				=> 'Показывать статистику галереи',
	'DISP_TOTAL_IMAGES'				=> 'Показывать общее число фотографий на главной странице конференции',
	'DISP_USER_IMAGES_PROFILE'		=> 'Показывать статистику загруженных файлов в профиле пользователя',
	'DISP_VIEWTOPIC_ICON'			=> 'Показывать кнопку-ссылку на личный альбом в минипрофиле',
	'DISP_VIEWTOPIC_IMAGES'			=> 'Показывать количество фотографий в минипрофиле',
	'DISP_VIEWTOPIC_LINK'			=> 'Сделать показ количества фотографий ссылкой на фотографии пользователя',
	'DISP_WHOISONLINE'				=> 'Показывать блок «Кто сейчас на конференции»',
	'DISPLAY_IN_RRC'				=> 'Показывать фотографии из этого альбома в «Последних» и «Случайных» фото',
	'DONT_COPY_PERMISSIONS'			=> 'Не копировать права доступа',
	'EDIT_ALBUM'					=> 'Редактировать альбом',
	'FAKE_THUMB_SIZE'				=> 'Размер миниатюр в списке альбомов',
	'FAKE_THUMB_SIZE_EXP'			=> '',
	'GALLERY_ALBUMS_TITLE'			=> 'Управление альбомами',
	'GALLERY_CONFIG'				=> 'Настройка галереи',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Здесь можно изменить основные параметры галереи.',
	'GALLERY_CONFIG_UPDATED'		=> 'Параметры изменены.',
	'GALLERY_INDEX'					=> 'Главная страница галереи',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Если включены миниатюры, вы должны очищать кэш после любого изменения их параметров.',
	'GALLERY_STATS'					=> 'Статистика галереи',
	'GALLERY_VERSION'				=> 'Версия галереи',
	'GD_VERSION'					=> 'Версия GD',
	'GENERAL_ALBUM_SETTINGS'		=> 'Общие свойства альбома',
	'GIF_ALLOWED'					=> 'GIF разрешён',
	'GUPLOAD_DIR_SIZE'				=> 'Размер папки <em>upload</em>',
	'HACKING_ATTEMPT'				=> 'Попытка взлома.',
	'HANDLE_IMAGES'					=> 'Что делать с фотографиями',
	'HANDLE_SUBS'					=> 'Что делать со вложенными альбомами',
	'HOTLINK_ALLOWED'				=> 'Доверенные домены для ссылок',
	'HOTLINK_ALLOWED_EXP'			=> 'Ссылки на фотографии с перечисленных здесь доменов всегда разрешены. Домены должны быть разделены запятой, без пробелов. Пример: <em>flying-bits.org,phpbb.com</em>',
	'HOTLINK_PREVENT'				=> 'Разрешить всем сторонним сайтам ссылаться на фотографии',
	'IMAGE_DESC_MAX_LENGTH'			=> 'Максимальный размер описания/комментария (в байтах)',
	'IMAGE_ID'						=> 'ID фотографии',
	'IMAGE_SETTINGS'				=> 'Свойства фотографий',
	'IMAGES_PER_DAY'				=> 'Фотографий в день',
	'INDEX_SETTINGS'				=> 'Свойства главной страницы галереи',
	'INFO_LINE'						=> 'Выводить размер файла на миниатюре',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Наследовать права доступа другого альбома',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Наследовать права доступа другой функции',
	'JPG_ALLOWED'					=> 'JPG разрешён',
	'JPG_QUALITY'					=> 'Качество JPG',
	'JPG_QUALITY_EXP'				=> 'При повороте или изменении разрешения фотографии размер файла может вырасти. С помощью этой опции можно изменить степень сжатия, чтобы сэкономить дисковое пространство.',
	'LIST_INDEX'					=> 'Показывать вложенный альбом в родительском альбоме',
	'LIST_INDEX_EXPLAIN'			=> 'Отображает ссылку на данный альбом на главной и в других местах в списке вложенных альбомов родительского альбома, если таковой существует.',
	'LIST_SUBALBUMS'				=> 'Показывать список вложенных альбомов',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Отображает список вложенных альбомов этого альбома на главной и в других местах, если параметр «Показывать вложенный альбом в родительском альбоме» активирован.',
	'LOCKED'						=> 'Закрыт',
	'LOOK_UP_ALBUM'					=> 'Выберите альбом',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Можно выбрать несколько альбомов сразу.',
	'MANAGE_CRASHED_ENTRIES'		=> 'Управление повреждёнными записями',
	'MANAGE_CRASHED_IMAGES'			=> 'Управление повреждёнными фотографиями',
	'MANAGE_PERSONALS'				=> 'Управление личными альбомами',
	'MAX_IMAGES_PER_ALBUM'			=> 'Максимальное количество фотографий в каждом альбоме',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> '−1 = не ограничено',
	'MEDIUM_CACHE'					=> 'Кэшировать уменьшенные фотографии, выводимые на страницах альбома',
	'MEDIUM_DIR_SIZE'				=> 'Размер папки <em>medium</em>',
	'MISSING_ALBUM_NAME'			=> 'Введите название альбома.',
	'MISSING_AUTHOR'				=> 'Фотографии без владельца',
	'MISSING_AUTHOR_C'				=> 'Комментарии без владельца',
	'MISSING_ENTRY'					=> 'Файлы без записи в базе данных',
	'MISSING_OWNER'					=> 'Личные альбомы без владельца',
	'MISSING_OWNER_EXP'				=> 'Вложенные альбомы, фотографии и комментарии также удаляются.',
	'MISSING_SOURCE'				=> 'Фотографии без файла',
	'MOVE_IMAGES_TO'				=> 'Переместить фотографию в',
	'MOVE_SUBALBUMS_TO'				=> 'Переместить вложенный альбом в',
	'NEW_ALBUM_CREATED'				=> 'Новый альбом создан',
	'NO_ALBUM_SELECTED'				=> 'Следует выбрать не менее одного альбома.',
	'NO_DESTINATION_ALBUM'			=> 'Вы не указали альбом, в который необходимо переместить содержимое.',
	'NO_PERMISSIONS_SELECTED'		=> 'Следует выбрать не менее одного альбома или специальные права доступа.',
	'NO_VICTIM_SELECTED'			=> 'Следует выбрать не менее одного пользователя или группу.',
	'NO_INHERIT'					=> 'Не копировать права доступа',
	'NO_PARENT_ALBUM'				=> 'Нет родительского альбома',
	'NO_SUBALBUMS'					=> 'Нет прикреплённых альбомов',
	'NUMBER_ALBUMS'					=> 'Количество альбомов',
	'NUMBER_IMAGES'					=> 'Количество фотографий',
	'NUMBER_PERSONALS'				=> 'Количество личных альбомов',
	'OWN_PERSONAL_ALBUMS'			=> 'Свой личный альбом',
	'OWN_PERSONAL_ALBUMS_EXPLAIN'	=> 'Доступ пользователя к собственному личному альбому.',
	'PERSONAL_ALBUMS_EXPLAIN'		=> 'Доступ пользователя к личным альбомам других пользователей.',
	'PERMISSION'					=> 'Права доступа',
	'PERMISSION_NEVER'				=> 'Никогда',
	'PERMISSION_NO'					=> 'Нет',
	'PERMISSION_SETTING'			=> 'Настройка',
	'PERMISSION_YES'				=> 'Да',
	'PERMISSION_A_COUNT'			=> 'Сколько вложенных личных альбомов может быть создано',
	'PERMISSION_A_LIST'				=> 'Может видеть альбом',
	'PERMISSION_A_RESTRICT'			=> 'Может задавать права доступа к своему альбому',
	'PERMISSION_A_UNLIMITED'		=> 'Неограниченное количество вложенных личных альбомов',
	'PERMISSION_C'					=> 'Комментарии',
	'PERMISSION_C_DELETE'			=> 'Может удалять свои комментарии',
	'PERMISSION_C_EDIT'				=> 'Может редактировать свои комментарии',
	'PERMISSION_C_POST'				=> 'Может комментировать фото',
	'PERMISSION_C_READ'				=> 'Может читать комментарии',
	'PERMISSION_I'					=> 'Фотографии',
	'PERMISSION_I_APPROVE'			=> 'Может загружать без одобрения',
	'PERMISSION_I_COUNT'			=> 'Количество загружаемых фото',
	'PERMISSION_I_DELETE'			=> 'Может удалять свои фото',
	'PERMISSION_I_EDIT'				=> 'Может редактировать свои фото',
	'PERMISSION_I_LOCK'				=> 'Может закрывать фото',
	'PERMISSION_I_RATE'				=> 'Может оценивать фото',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Гости <strong>не могут</strong> оценивать фото.',
	'PERMISSION_I_REPORT'			=> 'Может обжаловать фото',
	'PERMISSION_I_UNLIMITED'		=> 'Может загружать неограниченное количество фото',
	'PERMISSION_I_UPLOAD'			=> 'Может загружать фото',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Это право также используется для определения, может ли пользователь перемещать фотографии в альбом, если у него имеются модераторские права в других форумах.',
	'PERMISSION_I_VIEW'				=> 'Может просматривать фото',
	'PERMISSION_I_WATERMARK'		=> 'Может просматривать фото без водяных знаков',
	'PERMISSION_M'					=> 'Модерация',
	'PERMISSION_MISC'				=> 'Прочее', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Может модерировать комментарии',
	'PERMISSION_M_DELETE'			=> 'Может удалять фото',
	'PERMISSION_M_EDIT'				=> 'Может редактировать фото',
	'PERMISSION_M_MOVE'				=> 'Может перемещать фото',
	'PERMISSION_M_REPORT'			=> 'Может управлять жалобами',
	'PERMISSION_M_STATUS'			=> 'Может одобрять и блокировать фото',
	'PERMISSION_EMPTY'				=> 'Вы не задали все права.',
	'PERMISSIONS'					=> 'Права доступа',
	'PERMISSIONS_COPY'				=> 'Права доступа к альбому',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Здесь можно копировать права доступа из одного альбома в другой.',
	'PERMISSIONS_EXPLAIN'			=> 'Здесь можно определить, какие пользователи и группы имеют доступ к альбомам.',
	'PERMISSIONS_STORED'			=> 'Права доступа заданы.',
	'PERSONAL_ALBUM_INDEX'			=> 'Отображать «Личные альбомы» на главной странице галереи',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Если «да», то они будут отображены как категория, если «нет» — как ссылка.',
	'PEGA_CREATED'					=> 'Создан личный альбом для %s.',
	'PEGA_ALREADY_EXISTS'			=> 'У пользователя %s уже есть личный альбом.',
	'PGALLERIES_PER_PAGE'			=> 'Количество личных альбомов на странице',
	'ITEMS_PER_PAGE'				=> 'Количество альбомов и фото на странице',
	'ITEMS_PER_PAGE_EXP'			=> '',
	'RANDOM_ON_INDEX'				=> 'Включить случайные фото',
	'RANDOM_ON_INDEX_EXP'			=> 'Отображение случайных фотографий на главной странице галереи',
	'RANDOM_ON_INDEX_COUNT'			=> 'Количество случайных фото',
	'RECENT_ON_INDEX'				=> 'Включить последние фото',
	'RECENT_ON_INDEX_EXP'			=> 'Отображение последних фотографий на главной странице галереи',
	'RECENT_ON_INDEX_COUNT'			=> 'Количество последних фото',
	'PHPBB_INTEGRATION'				=> 'Интеграция в phpBB',
	'PNG_ALLOWED'					=> 'PNG разрешён',
	'PURGED_CACHE'					=> 'Очистка кэша',
	'RATE_SCALE'					=> 'Шкала оценок',
	'RATE_SYSTEM'					=> 'Включить оценки',
	'REDIRECT_ACL'					=> 'Теперь можно установить %sправа доступа%s для этого альбома.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Удалите все фото из альбома, и тогда сможете изменить тип альбома на «Категорию».',
	'RESET_RATING'					=> 'Сбросить оценки альбомов',
	'RESET_RATING_COMPLETED'		=> 'Оценки альбомов сброшены.',
	'RESET_RATING_CONFIRM'			=> 'Вы действительно хотите удалить все оценки фотографий в альбоме «%s»?',
	'RESET_RATING_EXPLAIN'			=> 'Удаление всех оценок фотографий в указанном альбоме. Введите ID альбома в поле справа.',
	'RESIZE_IMAGES'					=> 'Уменьшать размер фото',
	'RESYNC_IMAGECOUNTS'			=> 'Обновить счётчики фото',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Подтвердите обновление счётчиков фото.',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Рассматриваться будут только существующие фото.',
	'RESYNC_LAST_IMAGES'			=> 'Обновить «Последние фото»',
	'RESYNC_PERSONALS'				=> 'Обновить ID личных альбомов',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Подтвердите обновление ID личных альбомов.',
	'RESYNCED_IMAGECOUNTS'			=> 'Счётчики фото обновлены',
	'RESYNCED_LAST_IMAGES'			=> '«Последнее фото обновлено',
	'RESYNCED_PERSONALS'			=> 'ID личных альбомов обновлены',
	'ROTATE_IMAGES'					=> 'Разрешить вращение фото',
	'ROTATE_IMAGES_EXP'				=> 'Эта возможность недоступна, так как функция <em>imagerotate</em> не включена в используемую сервером версию GD.',
	'ROWS_PER_PAGE'					=> 'Количество строк на странице с миниатюрами',
	'RRC_DISPLAY_ALBUMNAME'			=> 'Название альбома',
	'RRC_DISPLAY_COMMENTS'			=> 'Комментарии',
	'RRC_DISPLAY_IMAGENAME'			=> 'Название фото',
	'RRC_DISPLAY_IMAGETIME'			=> 'Дата загрузки',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Количество просмотров фото',
	'RRC_DISPLAY_IP'				=> 'IP пользователя',
	'RRC_DISPLAY_NONE'				=> 'Нет',
	'RRC_DISPLAY_OPTIONS'			=> 'Информация, отображаемая под миниатюрами',
	'RRC_DISPLAY_USERNAME'			=> 'Пользователь',
	'RRC_DISPLAY_RATINGS'			=> 'Оценки',
	'RRC_GINDEX'					=> 'Последние и случайные фото, комментарии',
	'RRC_GINDEX_COLUMNS'			=> 'Столбцы',
	'RRC_GINDEX_COMMENTS'			=> 'Свернуть комментарии',
	'RRC_GINDEX_CONTESTS'			=> 'Количество конкурсов',
	'RRC_GINDEX_CROWS'				=> 'Количество комментариев',
	'RRC_GINDEX_MODE'				=> 'Режим',
	'RRC_GINDEX_MODE_EXP'			=> 'Функция «Случайные фото может замедлить работу галереи.',
	'RRC_GINDEX_PGALLERIES'			=> 'Показ фотографий из личных альбомов',
	'RRC_GINDEX_ROWS'				=> 'Строки',
	'RRC_MODE_COMMENTS'				=> 'Комментарии',
	'RRC_MODE_NONE'					=> 'Нет',
	'RRC_MODE_RANDOM'				=> 'Случайные фото',
	'RRC_MODE_RECENT'				=> 'Последние фото',
	'RRC_PROFILE_COLUMNS'			=> 'Столбцы',
	'RRC_PROFILE_MODE'				=> 'Режим «Последние/случайные фото в профиле',
	'RRC_PROFILE_MODE_EXP'			=> 'Функция «Случайные фото может замедлить работу галереи.',
	'RRC_PROFILE_ROWS'				=> 'Строки',
	'RRC_PROFILE_ITEMS'				=> 'Items in user profile',
	'RSZ_HEIGHT'					=> 'Высота уменьшенного фото на странице альбома',
	'RSZ_WIDTH'						=> 'Ширина уменьшенного фото на странице альбома',
	'SEARCH_SETTINGS'				=> 'Свойства поиска',
	'SELECT_ALBUM'					=> 'Выбрать альбом',
	'SELECT_ALBUMS'					=> 'Выбрать альбомы',
	'SELECT_GROUPS'					=> 'Выбрать группы',
	'SELECT_PERM_SYS'				=> 'Права доступа',
	'SELECT_PERMISSIONS'			=> 'Выбрать права доступа',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'Выбранные альбомы не найдены.',
	'SELECTED_ALBUMS'				=> 'Общие альбомы',
	'SELECTED_GROUPS'				=> 'Выбранные группы',
	'SELECTED_PERM_SYS'				=> 'Выбранная система прав доступа',
	'SET_PERMISSIONS'				=> '<br />Установить <a href="%s">права доступа</a>.',
	'SHORTED_IMAGENAMES'			=> 'Укороченное название фото',
	'SHORTED_IMAGENAMES_EXP'		=> 'Если название фотографии слишком длинное или не содержит пробелов, форматирование страницы может быть нарушено. (-1 - off)<br><code>This is now done in CSS. This option is just here for the administrators benefit.</code>',
	'SORRY_NO_STATISTIC'			=> 'Статистические данные ещё не доступны.',
	'SYNC_IN_PROGRESS'				=> 'Синхронизация альбома',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Синхронизируются фотографии в интервале %1$d—%2$d.',
	'THUMBNAIL_CACHE'				=> 'Кэшировать миниатюры',
	'THUMBNAIL_HEIGHT'				=> 'Высота миниатюры',
	'THUMBNAIL_QUALITY'				=> 'Качество миниатюр',
	'THUMBNAIL_QUALITY_EXP'			=> 'От 1 до 100.',
	'THUMBNAIL_SETTINGS'			=> 'Свойства миниатюр',
	'THUMBNAIL_WIDTH'				=> 'Ширина миниатюры',
	'UC_IMAGE_NAME'					=> 'Ссылка — название фотографии',
	'UC_IMAGE_ICON'					=> 'Ссылка — значок последнего фото',
	'UC_IMAGEPAGE'					=> 'Ссылка — фотография',
	'UC_IMAGEPAGE_EXP'				=> 'На странице с описанием фотографии и комментариями (image_page.php).',
	'UC_LINK_CONFIG'				=> 'Свойства ссылок',
	'UC_LINK_HIGHSLIDE'				=> 'Открыть с помощью Highslide',
	'UC_LINK_IMAGE'					=> 'Открыть фото',
	'UC_LINK_IMAGE_PAGE'			=> 'Открыть страницу альбома',
	'UC_LINK_LYTEBOX'				=> 'Открыть с помощью Lytebox',
	'UC_LINK_NEXT'					=> 'Следующее фото',
	'UC_LINK_NEWTAB'				=> 'Открыть в новой вкладке',
	'UC_LINK_NONE'					=> 'Нет ссылки',
	'UC_LINK_SHADOWBOX'				=> 'Открыть с помощью Shadowbox',
	'UC_THUMBNAIL'					=> 'Ссылка — миниатюра',
	'UC_THUMBNAIL_EXP'				=> 'Также используется для BBCode.',
	'UNLOCKED'						=> 'Открыт',
	'UPDATE_BBCODE'					=> 'Обновить BBCode',
	'UPLOAD_IMAGES'					=> 'Количество одновременно загружаемых фотографий',
	'VIEW_IMAGE_URL'				=> 'Выводить ссылку на фото (для копирования)',
	'WATERMARK'						=> 'Водяной знак',
	'WATERMARK_HEIGHT'				=> 'Минимальная высота фотографий',
	'WATERMARK_HEIGHT_EXP'			=> 'Чтобы избежать перекрытия водяным знаком низких фотографий, можно ввести их минимальную высоту, при которой будет отображаться водяной знак.',
	'WATERMARK_IMAGES'				=> 'Использовать водяной знак',
	'WATERMARK_OPTIONS'				=> 'Свойства водяного знака',
	'WATERMARK_POSITION'			=> 'Позиция водяного знака',
	'WATERMARK_POSITION_BOTTOM'		=> 'внизу',
	'WATERMARK_POSITION_CENTER'		=> 'в центре',
	'WATERMARK_POSITION_LEFT'		=> 'слева',
	'WATERMARK_POSITION_MIDDLE'		=> 'посередине',
	'WATERMARK_POSITION_RIGHT'		=> 'справа',
	'WATERMARK_POSITION_TOP'		=> 'вверху',
	'WATERMARK_SOURCE'		 		=> 'Изображение водяного знака',
	'WATERMARK_SOURCE_EXP'		 	=> 'Путь к файлу относительно корневой папки phpBB.',
	'WATERMARK_WIDTH'				=> 'Минимальная ширина фотографий',
	'WATERMARK_WIDTH_EXP'			=> 'Чтобы избежать перекрытия водяным знаком узких фотографий, можно ввести их минимальную ширину, при которых будет отображаться водяной знак.',
	'ZIP_ALLOWED'					=> 'ZIP-архивы разрешены',
	'NO_WRITE_ACCESS'				=> 'No write access',
	'WRITE_ACCESS'					=> 'OK',
	'DIR_CREATED'					=> 'Directory created',
));
/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'объявление о выпуске',
	'CURRENT_VERSION'		=> 'Текущая версия',
	'DOWNLOAD_LATEST'		=> 'Скачать последнюю версию',
	'LATEST_VERSION'		=> 'Последняя версия',
	'NO_INFO'					=> 'Нет связи с сервером',
	'NOT_UP_TO_DATE'			=> 'Версия %s не самая последняя.',
	'RELEASE_ANNOUNCEMENT'	=> 'объявление о выпуске',
	'UP_TO_DATE'			=> 'Версия %s самая последняя',
	'VERSION_CHECK'			=> 'Проверка версии',
));
