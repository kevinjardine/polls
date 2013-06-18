<?php

	$russian = array(
	
		/**
		 * Menu items and titles
		 */
	
			'poll' => "Опрос",
            'polls:add' => "Новый опрос",
			'polls' => "Опросы",
			'polls:votes' => "ответы",
			'polls:user' => "%s's опрос",
			'polls:group_polls' => "Опросы группы",
			'polls:group_polls:listing:title' => "Опросы группы %s",
			'polls:user:friends' => "Опросы друзей %s",
			'polls:your' => "Ваши опросы",
			'polls:not_me' => "Опросы %s",
			'polls:posttitle' => "Опросы %s: %s",
			'polls:friends' => "Опросы друзей",
			'polls:not_me_friends' => "Опросы друзей %s",
			'polls:yourfriends' => "Последние опросы ваших друзей",
			'polls:everyone' => "Все опросы сайта",
			'polls:read' => "Читать опрос",
			'polls:addpost' => "Создать опрос",
			'polls:editpost' => "Изменение опроса: %s",
			'polls:edit' => "Редактировать опрос",
			'polls:text' => "Текст опроса",
			'polls:strapline' => "%s",			
			'item:object:poll' => 'Опросы',
			'item:object:poll_choice' => "Варианты ответов",
			'polls:question' => "Вопрос",
			'polls:responses' => "Варианты ответов",
			'polls:results' => "[+] Показать результаты",
			'polls:show_results' => "Показать результаты",
			'polls:show_poll' => "Показать опрос",
			'polls:add_choice' => "Добавить вариант ответа",
			'polls:delete_choice' => "Удалить этот вариант",
			'polls:settings:group:title' => "Опросы группы",
			'polls:settings:group_polls_default' => "Да, включено по умолчанию ",
			'polls:settings:group_polls_not_default' => "Да, выключено по умолчанию",
			'polls:settings:no' => "нет",
			'polls:settings:group_profile_display:title' => "Если опросы группы активированы, где они должны отображаться на странице профиля группы?",
			'polls:settings:group_profile_display_option:left' => "слева",
			'polls:settings:group_profile_display_option:right' => "справа",
			'polls:settings:group_profile_display_option:none' => "none",
			'polls:settings:group_access:title' => "Если опросы группы активированы, кто может их создавать?",
			'polls:settings:group_access:admins' => "владельцы группы и администраторы",
			'polls:settings:group_access:members' => "любой участник группы",
			'polls:settings:front_page:title' => "Администраторы могут помещать опросы на главной странице (требуется поддержка темы)",
			'polls:none' => "---",
			'polls:permission_error' => "У вас нет прав на изменение этого опроса.",
			'polls:vote' => "Голосовать",
			'polls:login' => "Пожалуйста авторизируйтесь, если хотите голосовать в этом опросе.",
			'group:polls:empty' => "---",
			'polls:settings:site_access:title' => "Кто может создавать site-wide опросы?",
			'polls:settings:site_access:admins' => "только администраторы",
			'polls:settings:site_access:all' => "любой пользователь",
			'polls:can_not_create' => "У вас нет прав для создание опросов.",
			'polls:front_page_label' => "Поместите этот опрос на главной странице.",
		/**
	     * poll widget
	     **/
			'polls:latest_widget_title' => "Последние опросы",
			'polls:latest_widget_description' => "Показать последние опросы.",
			'polls:my_widget_title' => "Мои опросы",
			'polls:my_widget_description' => "Этот виджет будет отображать ваши опросы.",
			'polls:widget:label:displaynum' => "Сколько опросов Вы хотите показывать?",
			'polls:individual' => "Последний опрос",
			'poll_individual_group:widget:description' => " Показать последние опросы для этой группы.",
			'poll_individual:widget:description' => "Показать ваш последний опрос",
			'polls:widget:no_polls' => "Опросов %s ещё нет.",
			'polls:widget:nonefound' => "Опросов не найдено.",
			'polls:widget:think' => "Давайте %s узнаем что Вы думаете!",
			'polls:enable_polls' => "Включить опросы",
			'polls:group_identifier' => "(в %s)",
			'polls:noun_response' => "ответ",
			'polls:noun_responses' => "ответы",
	        'polls:settings:yes' => "да",
			'polls:settings:no' => "нет",

			// notifications
			'polls:notify:summary' => 'Новый опрос %s',
			'polls:notification' =>
'%s добавил[а] новый опрос: <br><br>
%s<br><br>
Для просмотра и голосования нажмите на <a href="%s">эту ссылку</a>.',
			
         /**
	     * poll river
	     **/
	        'polls:settings:create_in_river:title' => "Показывать создание опрососв в ленте активности",
			'polls:settings:vote_in_river:title' => "Показывать голосования в ленте активности",
			'river:create:object:poll' => '%s создал опрос %s',
			'river:vote:object:poll' => '%s проголосовал в опросе %s',
			'river:comment:object:poll' => '%s комментировал опрос %s',
		/**
		 * Status messages
		 */
	
			'polls:added' => "Ваш опрос создан.",
			'polls:edited' => "Ваш опрос сохранён.",
			'polls:responded' => " Спасибо за ответ, ваш голос учтён.",
			'polls:deleted' => "Ваш опрос успешно удалён.",
			'polls:totalvotes' => "Всего голосов: ",
			'polls:voted' => "Ваш голос учтён в этом опросе. Спасибо за участие.",
			
	
		/**
		 * Error messages
		 */
	
			'polls:save:failure' => "Извините, не удалось сохранить ваш опрос, пожалуйста попробуйте ещё раз.",
			'polls:blank' => " Извините, вы должны заполнить оба вопроса и ответа, прежде чем вы можете сделать опрос.",
			'polls:novote' => "Извините, вы должны выбрать опцию, чтобы проголосовать в этом опросе.",
			'polls:notfound' => "Извините, опрос не найден.",
			'polls:nonefound' => "Опросов %s не найдено",
			'polls:notdeleted' => "Извините, не удалось удалить этот опрос."
	);
					
	add_translation("ru",$russian);

?>
