# API
API доступ для мониторингов и управление отзывами для обменников <a href="https://chexch.com/api" target="_blank">chexch.com/api</a>

<ul>
<li>Для владельцев обменников есть возможность отвечать на отзывы клиентов в личном кабинете;</li>
<li>Мы предоставляем возможность доступа к выгодным курсам различных обменников через API chexch.com;</li>
<li>Зарегистрировавшись в нашем сервисе, вы получите доступ к курсам различных направлений множества обменников;</li>
<li>Курсы упорядочены от самого выгодного к менее выгодному.</li>
<li>Формат получения данных XML или JSON.</li>
</ul>

# FAQ по использованию API

<ul>
<li>URL для api запросов https://chexch.com/api</li>
<li>Запросы должны быть отправлены методом POST</li>
<li>Для получения всех доступных для обмена электронных валют, отправьте POST-запрос с параметрами:
<br/>
<table class="example">
	<tbody>
		<tr><td class="key">type</td><td class="val">currencies</td><td class="desc">Тип получения данных "Валюты"</td></tr>
		<tr><td class="key">key</td><td class="val">key</td><td class="desc">API ключ</td></tr>
		<tr><td class="key">format</td><td class="val">json, xml</td><td class="desc">Опционально - формат получения данных (XML или JSON). Если не указано - по умолчанию, JSON.</td></tr>
		<tr><td class="key">lang</td><td class="val">ru, en, ch</td><td class="desc">Язык получения данных</td></tr>
	</tbody>
</table></li>
<br/>

<li>Для получения списка валют, доступных при отдаче какой-либо валюты, отправьте POST-запрос с параметрами:
<br/>
<table class="example">
	<tbody>
		<tr><td class="key">type</td><td class="val">available_currencies</td><td class="desc">Тип получения данных "Доступные валюты"</td></tr>
		<tr><td class="key">from</td><td class="val">PRUSD</td><td class="desc">Валюта, которую вы отдадите</td></tr>
		<tr><td class="key">key</td><td class="val">key</td><td class="desc">API ключ</td></tr>
		<tr><td class="key">format</td><td class="val">json, xml</td><td class="desc">Опционально - формат получения данных (XML или JSON). Если не указано - по умолчанию, JSON.</td></tr>
		<tr><td class="key">lang</td><td class="val">ru, en, ch</td><td class="desc">Язык получения данных</td></tr>
	</tbody>
</table></li>
<br/>

<li>Для получения списка валют, доступных при получении какой-либо валюты, отправьте POST-запрос с параметрами:
<br/>
<table class="example">
	<tbody>
		<tr><td class="key">type</td><td class="val">available_currencies</td><td class="desc">Тип получения данных "Доступные валюты"</td></tr>
		<tr><td class="key">to</td><td class="val">OKRUB</td><td class="desc">Валюта, которую вы получите</td></tr>
		<tr><td class="key">key</td><td class="val">key</td><td class="desc">API ключ</td></tr>
		<tr><td class="key">format</td><td class="val">json, xml</td><td class="desc">Опционально - формат получения данных (XML или JSON). Если не указано - по умолчанию, JSON.</td></tr>
		<tr><td class="key">lang</td><td class="val">ru, en, ch</td><td class="desc">Язык получения данных</td></tr>
	</tbody>
</table></li>
<br/>

<li>Для получения всех направлений при обмене конкретных электронных валют (например, PRUSD на OKRUB), отправьте POST-запрос с параметрами:
<br/>
<table class="example">
	<tbody>
		<tr><td class="key">type</td><td class="val">rates</td><td class="desc">Тип получения данных "Направления"</td></tr>
		<tr><td class="key">from</td><td class="val">PRUSD</td><td class="desc">Валюта, которую вы отдадите</td></tr>
		<tr><td class="key">to</td><td class="val">OKRUB</td><td class="desc">Валюта, которую вы получите</td></tr>
		<tr><td class="key">key</td><td class="val">key</td><td class="desc">API ключ</td></tr>
		<tr><td class="key">format</td><td class="val">json, xml</td><td class="desc">Опционально - формат получения данных (XML или JSON). Если не указано - по умолчанию, JSON.</td></tr>
		<tr><td class="key">lang</td><td class="val">ru, en, ch</td><td class="desc">Язык получения данных</td></tr>
	</tbody>
</table></li>
</ul>

Примеры запросов к API можно посмотреть здесь <a href="https://github.com/chexch/API-chexch.com/tree/master/examples">examples</a>.
<br/>
Видео о том как получить API доступ, а также управлять отзывами на сайте chexch.com <a href="https://youtu.be/g4aOex5FF5I">youtu.be/g4aOex5FF5I</a>.