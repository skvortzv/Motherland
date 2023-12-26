<style>

    body {
        overflow-y: visible;
        background: #F2F0EB;
    }
    
    footer {
        height: 50vh;
    }
    
    div.text {
        height: 40vh !important;
    }
    
    div.links {
        height: 10vh !important;
    }

</style>

<title>Motherland - объявления</title>
<main class = "ads">
    <section class = "filter">
        <label><input type = "search" name = "search" id = "search" maxlength = "500"><a id = "search-btn"><img src = "images/ads/search.png" alt = "Search"></a></label>
    </section>
    <div>
        <section class = "sort">
            <h2>Сортировка</h2>
            <span>
                <a id = "filter-seeall"></a>
                <p>Показать все</p>
            </span>
            <span>
                <a id = "filter-region"></a>
                <p>Регион</p>
            </span>
            <select name="region" id = "select-region">
                <option value="Адыгея">Республика Адыгея</option>
                <option value="Алтай">Республика Алтай </option>
                <option value="Башкортостан">Республика Башкортостан </option>
                <option value="Бурятия">Республика Бурятия </option>
                <option value="Дагестан">Республика Дагестан </option>
                <option value="Ингушетия">Республика Ингушетия </option>
                <option value="Кабардино-Балкария">Кабардино-Балкарская Республика</option>
                <option value="Калмыкия">Республика Калмыкия </option>
                <option value="Карачаево-Черкессия">Карачаево-Черкесская Республика</option>
                <option value="Карелия">Республика Карелия </option>
                <option value="Коми">Республика Коми </option>
                <option value="Марий Эл">Республика Марий Эл </option>
                <option value="Мордовия">Республика Мордовия</option>
                <option value="Саха (Якутия)">Республика Саха (Якутия) </option>
                <option value="Северная Осетия - Алания">Республика Северная Осетия - Алания </option>
                <option value="Татарстан">Республика Татарстан</option>
                <option value="Тыва">Республика Тыва </option>
                <option value="Удмуртская">Удмуртская Республика </option>
                <option value="Хакасия">Республика Хакасия </option>
                <option value="Чеченская">Чеченская Республика</option>
                <option value="Чувашская Республика">Чувашская Республика</option>
                <option value="Алтайский край">Алтайский край</option>
                <option value="Забайкальский край">Забайкальский край</option>
                <option value="Камчатский край">Камчатский край</option>
                <option value="Краснодарский край">Краснодарский край</option>
                <option value="Красноярский край">Красноярский край</option>
                <option value="Пермский край">Пермский край</option>
                <option value="Приморский край">Приморский край</option>
                <option value="Ставропольский край">Ставропольский край</option>
                <option value="Хабаровский край">Хабаровский край</option>
                <option value="Амурская область">Амурская область</option>
                <option value="Архангельская область">Архангельская область</option>
                <option value="Астраханская область">Астраханская область</option>
                <option value="Белгородская область">Белгородская область</option>
                <option value="Брянская область">Брянская область </option>
                <option value="Владимирская область">Владимирская область </option>
                <option value="Волгоградская область">Волгоградская область </option>
                <option value="Вологодская область">Вологодская область </option>
                <option value="Воронежская область">Воронежская область </option>
                <option value="Ивановская область">Ивановская область </option>
                <option value="Иркутская область">Иркутская область </option>
                <option value="Калининградская область">Калининградская область</option>
                <option value="Калужская область">Калужская область </option>
                <option value="Кемеровская область">Кемеровская область </option>
                <option value="Кировская область">Кировская область </option>
                <option value="Костромская область">Костромская область </option>
                <option value="Курганская область">Курганская область </option>
                <option value="Курская область">Курская область </option>
                <option value="Ленинградская область">Ленинградская область </option>
                <option value="Липецкая область">Липецкая область </option>
                <option value="Магаданская область">Магаданская область</option>
                <option value="Московская область">Московская область </option>
                <option value="Мурманская область">Мурманская область </option>
                <option value="Нижегородская область">Нижегородская область </option>
                <option value="Новгородская область">Новгородская область </option>
                <option value="Новосибирская область">Новосибирская область </option>
                <option value="Омская область">Омская область</option>
                <option value="Оренбургская область">Оренбургская область </option>
                <option value="Орловская область">Орловская область </option>
                <option value="Пензенская область">Пензенская область </option>
                <option value="Псковская область">Псковская область </option>
                <option value="Ростовская область">Ростовская область </option>
                <option value="Рязанская область">Рязанская область </option>
                <option value="Самарская область">Самарская область </option>
                <option value="Саратовская область">Саратовская область </option>
                <option value="Сахалинская область">Сахалинская область </option>
                <option value="Свердловская область">Свердловская область </option>
                <option value="Смоленская область">Смоленская область </option>
                <option value="Тамбовская область">Тамбовская область </option>
                <option value="Тверская область">Тверская область </option>
                <option value="Томская область">Томская область </option>
                <option value="Тульская область">Тульская область</option>
                <option value="Тюменская область">Тюменская область </option>
                <option value="Ульяновская область">Ульяновская область </option>
                <option value="Челябинская область">Челябинская область </option>
                <option value="Ярославская область">Ярославская область</option>
                <option value="Москва">Москва</option>
                <option value="Санкт-Петербург">Санкт-Петербург</option>
                <option value="Еврейская АО">Еврейская АО</option>
                <option value="Ненецкий АО">Ненецкий АО</option>
                <option value="Ханты-Мансийский АО">Ханты-Мансийский АО</option>
                <option value="Чукотский АО">Чукотский АО</option>
                <option value="Ямало-Ненецкий АО">Ямало-Ненецкий АО</option>
            </select>
            <span>
                <a id = "filter-city"></a>
                <p>Город</p>
            </span>
            <select name = "city" id = "select-city">
                <option value="Москва">Москва</option>
                <option value="Санкт-Петербург">Санкт-Петербург</option>
                <option value="Пенза">Пенза</option>
                <option value="Абакан">Абакан</option>
                <option value="Азов">Азов</option>
                <option value="Александров">Александров</option>
                <option value="Алексин">Алексин</option>
                <option value="Альметьевск">Альметьевск</option>
                <option value="Анапа">Анапа</option>
                <option value="Ангарск">Ангарск</option>
                <option value="Анжеро">Анжеро-Судженск</option>
                <option value="Апатиты">Апатиты</option>
                <option value="Арзамас">Арзамас</option>
                <option value="Армавир">Армавир</option>
                <option value="Арсеньев">Арсеньев</option>
                <option value="Артем">Артем</option>
                <option value="Архангельск">Архангельск</option>
                <option value="Асбест">Асбест</option>
                <option value="Астрахань">Астрахань</option>
                <option value="Ачинск">Ачинск</option>
                <option value="Балаково">Балаково</option>
                <option value="Балахна">Балахна</option>
                <option value="Балашиха">Балашиха</option>
                <option value="Балашов">Балашов</option>
                <option value="Барнаул">Барнаул</option>
                <option value="Батайск">Батайск</option>
                <option value="Белгород">Белгород</option>
                <option value="Белебей">Белебей</option>
                <option value="Белово">Белово</option>
                <option value="Белогорск (Амурская область)">Белогорск (Амурская область)</option>
                <option value="Белорецк">Белорецк</option>
                <option value="Белореченск">Белореченск</option>
                <option value="Бердск">Бердск</option>
                <option value="Березники">Березники</option>
                <option value="Березовский (Свердловская область)">Березовский (Свердловская область)</option>
                <option value="Бийск">Бийск</option>
                <option value="Биробиджан">Биробиджан</option>
                <option value="Благовещенск (Амурская область)">Благовещенск (Амурская область)</option>
                <option value="Бор">Бор</option>
                <option value="Борисоглебск">Борисоглебск</option>
                <option value="Боровичи">Боровичи</option>
                <option value="Братск">Братск</option>
                <option value="Брянск">Брянск</option>
                <option value="Бугульма">Бугульма</option>
                <option value="Буденновск">Буденновск</option>
                <option value="Бузулук">Бузулук</option>
                <option value="Буйнакск">Буйнакск</option>
                <option value="Великие Луки">Великие Луки</option>
                <option value="Великий Новгород">Великий Новгород</option>
                <option value="Верхняя Пышма">Верхняя Пышма</option>
                <option value="Видное">Видное</option>
                <option value="Владивосток">Владивосток</option>
                <option value="Владикавказ">Владикавказ</option>
                <option value="Владимир">Владимир</option>
                <option value="Волгоград">Волгоград</option>
                <option value="Волгодонск">Волгодонск</option>
                <option value="Волжск">Волжск</option>
                <option value="Волжский">Волжский</option>
                <option value="Вологда">Вологда</option>
                <option value="Вольск">Вольск</option>
                <option value="Воркута">Воркута</option>
                <option value="Воронеж">Воронеж</option>
                <option value="Воскресенск">Воскресенск</option>
                <option value="Воткинск">Воткинск</option>
                <option value="Всеволожск">Всеволожск</option>
                <option value="Выборг">Выборг</option>
                <option value="Выкса">Выкса</option>
                <option value="Вязьма">Вязьма</option>
                <option value="Гатчина">Гатчина</option>
                <option value="Геленджик">Геленджик</option>
                <option value="Георгиевск">Георгиевск</option>
                <option value="Глазов">Глазов</option>
                <option value="Горно-Алтайск">Горно-Алтайск</option>
                <option value="Грозный">Грозный</option>
                <option value="Губкин">Губкин</option>
                <option value="Гудермес">Гудермес</option>
                <option value="Гуково">Гуково</option>
                <option value="Гусь-Хрустальный">Гусь-Хрустальный</option>
                <option value="Дербент">Дербент</option>
                <option value="Дзержинск">Дзержинск</option>
                <option value="Димитровград">Димитровград</option>
                <option value="Дмитров">Дмитров</option>
                <option value="Долгопрудный">Долгопрудный</option>
                <option value="Домодедово">Домодедово</option>
                <option value="Донской">Донской</option>
                <option value="Дубна">Дубна</option>
                <option value="Евпатория">Евпатория</option>
                <option value="Егорьевск">Егорьевск</option>
                <option value="Ейск">Ейск</option>
                <option value="Екатеринбург">Екатеринбург</option>
                <option value="Елабуга">Елабуга</option>
                <option value="Елец">Елец</option>
                <option value="Ессентуки">Ессентуки</option>
                <option value="Железногорск (Красноярский край)">Железногорск (Красноярский край)</option>
                <option value="Железногорск (Курская область)">Железногорск (Курская область)</option>
                <option value="Жигулевск">Жигулевск</option>
                <option value="Жуковский">Жуковский</option>
                <option value="Заречный">Заречный</option>
                <option value="Зеленогорск">Зеленогорск</option>
                <option value="Зеленодольск">Зеленодольск</option>
                <option value="Златоуст">Златоуст</option>
                <option value="Иваново">Иваново</option>
                <option value="Ивантеевка">Ивантеевка</option>
                <option value="Ижевск">Ижевск</option>
                <option value="Избербаш">Избербаш</option>
                <option value="Иркутск">Иркутск</option>
                <option value="Искитим">Искитим</option>
                <option value="Ишим">Ишим</option>
                <option value="Ишимбай">Ишимбай</option>
                <option value="Йошкар-Ола">Йошкар-Ола</option>
                <option value="Казань">Казань</option>
                <option value="Калининград">Калининград</option>
                <option value="Калуга">Калуга</option>
                <option value="Каменск-Уральский">Каменск-Уральский</option>
                <option value="Каменск-Шахтинский">Каменск-Шахтинский</option>
                <option value="Камышин">Камышин</option>
                <option value="Канск">Канск</option>
                <option value="Каспийск">Каспийск</option>
                <option value="Кемерово">Кемерово</option>
                <option value="Керчь">Керчь</option>
                <option value="Кинешма">Кинешма</option>
                <option value="Кириши">Кириши</option>
                <option value="Киров (Кировская область)">Киров (Кировская область)</option>
                <option value="Кирово-Чепецк">Кирово-Чепецк</option>
                <option value="Киселевск">Киселевск</option>
                <option value="Кисловодск">Кисловодск</option>
                <option value="Клин">Клин</option>
                <option value="Клинцы">Клинцы</option>
                <option value="Ковров">Ковров</option>
                <option value="Когалым">Когалым</option>
                <option value="Коломна">Коломна</option>
                <option value="Комсомольск-на-Амуре">Комсомольск-на-Амуре</option>
                <option value="Копейск">Копейск</option>
                <option value="Королев">Королев</option>
                <option value="Кострома">Кострома</option>
                <option value="Котлас">Котлас</option>
                <option value="Красногорск">Красногорск</option>
                <option value="Краснодар">Краснодар</option>
                <option value="Краснокаменск">Краснокаменск</option>
                <option value="Краснокамск">Краснокамск</option>
                <option value="Краснотурьинск">Краснотурьинск</option>
                <option value="Красноярск">Красноярск</option>
                <option value="Кропоткин">Кропоткин</option>
                <option value="Крымск">Крымск</option>
                <option value="Кстово">Кстово</option>
                <option value="Кузнецк">Кузнецк</option>
                <option value="Кумертау">Кумертау</option>
                <option value="Кунгур">Кунгур</option>
                <option value="Курган">Курган</option>
                <option value="Курск">Курск</option>
                <option value="Кызыл">Кызыл</option>
                <option value="Лабинск">Лабинск</option>
                <option value="Лениногорск">Лениногорск</option>
                <option value="Ленинск-Кузнецкий">Ленинск-Кузнецкий</option>
                <option value="Лесосибирск">Лесосибирск</option>
                <option value="Липецк">Липецк</option>
                <option value="Лиски">Лиски</option>
                <option value="Лобня">Лобня</option>
                <option value="Лысьва">Лысьва</option>
                <option value="Лыткарино">Лыткарино</option>
                <option value="Люберцы">Люберцы</option>
                <option value="Магадан">Магадан</option>
                <option value="Магнитогорск">Магнитогорск</option>
                <option value="Майкоп">Майкоп</option>
                <option value="Махачкала">Махачкала</option>
                <option value="Междуреченск">Междуреченск</option>
                <option value="Мелеуз">Мелеуз</option>
                <option value="Миасс">Миасс</option>
                <option value="Минеральные Воды">Минеральные Воды</option>
                <option value="Минусинск">Минусинск</option>
                <option value="Михайловка">Михайловка</option>
                <option value="Михайловск (Ставропольский край)">Михайловск (Ставропольский край)</option>
                <option value="Мичуринск">Мичуринск</option>
                <option value="Мурманск">Мурманск</option>
                <option value="Муром">Муром</option>
                <option value="Мытищи">Мытищи</option>
                <option value="Набережные Челны">Набережные Челны</option>
                <option value="Назарово">Назарово</option>
                <option value="Назрань">Назрань</option>
                <option value="Нальчик">Нальчик</option>
                <option value="Наро-Фоминск">Наро-Фоминск</option>
                <option value="Находка">Находка</option>
                <option value="Невинномысск">Невинномысск</option>
                <option value="Нерюнгри">Нерюнгри</option>
                <option value="Нефтекамск">Нефтекамск</option>
                <option value="Нефтеюганск">Нефтеюганск</option>
                <option value="Нижневартовск">Нижневартовск</option>
                <option value="Нижнекамск">Нижнекамск</option>
                <option value="Нижний Новгород">Нижний Новгород</option>
                <option value="Нижний Тагил">Нижний Тагил</option>
                <option value="Новоалтайск">Новоалтайск</option>
                <option value="Новокузнецк">Новокузнецк</option>
                <option value="Новокуйбышевск">Новокуйбышевск</option>
                <option value="Новомосковск">Новомосковск</option>
                <option value="Новороссийск">Новороссийск</option>
                <option value="Новосибирск">Новосибирск</option>
                <option value="Новотроицк">Новотроицк</option>
                <option value="Новоуральск">Новоуральск</option>
                <option value="Новочебоксарск">Новочебоксарск</option>
                <option value="Новочеркасск">Новочеркасск</option>
                <option value="Новошахтинск">Новошахтинск</option>
                <option value="Новый Уренгой">Новый Уренгой</option>
                <option value="Ногинск">Ногинск</option>
                <option value="Норильск">Норильск</option>
                <option value="Ноябрьск">Ноябрьск</option>
                <option value="Нягань">Нягань</option>
                <option value="Обнинск">Обнинск</option>
                <option value="Одинцово">Одинцово</option>
                <option value="Озерск (Челябинская область)">Озерск (Челябинская область)</option>
                <option value="Октябрьский">Октябрьский</option>
                <option value="Омск">Омск</option>
                <option value="Орел">Орел</option>
                <option value="Оренбург">Оренбург</option>
                <option value="Орехово-Зуево">Орехово-Зуево</option>
                <option value="Орск">Орск</option>
                <option value="Павлово">Павлово</option>
                <option value="Павловский Посад">Павловский Посад</option>
                <option value="Первоуральск">Первоуральск</option>
                <option value="Пермь">Пермь</option>
                <option value="Петрозаводск">Петрозаводск</option>
                <option value="Петропавловск-Камчатский">Петропавловск-Камчатский</option>
                <option value="Подольск">Подольск</option>
                <option value="Полевской">Полевской</option>
                <option value="Прокопьевск">Прокопьевск</option>
                <option value="Прохладный">Прохладный</option>
                <option value="Псков">Псков</option>
                <option value="Пушкино">Пушкино</option>
                <option value="Пятигорск">Пятигорск</option>
                <option value="Раменское">Раменское</option>
                <option value="Ревда">Ревда</option>
                <option value="Реутов">Реутов</option>
                <option value="Ржев">Ржев</option>
                <option value="Рославль">Рославль</option>
                <option value="Россошь">Россошь</option>
                <option value="Ростов-на-Дону">Ростов-на-Дону</option>
                <option value="Рубцовск">Рубцовск</option>
                <option value="Рыбинск">Рыбинск</option>
                <option value="Рязань">Рязань</option>
                <option value="Салават">Салават</option>
                <option value="Сальск">Сальск</option>
                <option value="Самара">Самара</option>
                <option value="Саранск">Саранск</option>
                <option value="Сарапул">Сарапул</option>
                <option value="Саратов">Саратов</option>
                <option value="Саров">Саров</option>
                <option value="Свободный">Свободный</option>
                <option value="Севастополь">Севастополь</option>
                <option value="Северодвинск">Северодвинск</option>
                <option value="Северск">Северск</option>
                <option value="Сергиев Посад">Сергиев Посад</option>
                <option value="Серов">Серов</option>
                <option value="Серпухов">Серпухов</option>
                <option value="Сертолово">Сертолово</option>
                <option value="Сибай">Сибай</option>
                <option value="Симферополь">Симферополь</option>
                <option value="Славянск-на-Кубани">Славянск-на-Кубани</option>
                <option value="Смоленск">Смоленск</option>
                <option value="Соликамск">Соликамск</option>
                <option value="Солнечногорск">Солнечногорск</option>
                <option value="Сосновый Бор">Сосновый Бор</option>
                <option value="Сочи">Сочи</option>
                <option value="Ставрополь">Ставрополь</option>
                <option value="Старый Оскол">Старый Оскол</option>
                <option value="Стерлитамак">Стерлитамак</option>
                <option value="Ступино">Ступино</option>
                <option value="Сургут">Сургут</option>
                <option value="Сызрань">Сызрань</option>
                <option value="Сыктывкар">Сыктывкар</option>
                <option value="Таганрог">Таганрог</option>
                <option value="Тамбов">Тамбов</option>
                <option value="Тверь">Тверь</option>
                <option value="Тимашевск">Тимашевск</option>
                <option value="Тимашевск">Тихвин</option>
                <option value="Тихорецк">Тихорецк</option>
                <option value="Тобольск">Тобольск</option>
                <option value="Тольятти">Тольятти</option>
                <option value="Томск">Томск</option>
                <option value="Троицк">Троицк</option>
                <option value="Туапсе">Туапсе</option>
                <option value="Туймазы">Туймазы</option>
                <option value="Тула">Тула</option>
                <option value="Тюмень">Тюмень</option>
                <option value="Узловая">Узловая</option>
                <option value="Улан-Удэ">Улан-Удэ</option>
                <option value="Ульяновск">Ульяновск</option>
                <option value="Урус-Мартан">Урус-Мартан</option>
                <option value="Усолье-Сибирское">Усолье-Сибирское</option>
                <option value="Уссурийск">Уссурийск</option>
                <option value="Усть-Илимск">Усть-Илимск</option>
                <option value="Уфа">Уфа</option>
                <option value="Ухта">Ухта</option>
                <option value="Феодосия">Феодосия</option>
                <option value="Фрязино">Фрязино</option>
                <option value="Хабаровск">Хабаровск</option>
                <option value="Ханты-Мансийск">Ханты-Мансийск</option>
                <option value="Хасавюрт">Хасавюрт</option>
                <option value="Химки">Химки</option>
                <option value="Чайковский">Чайковский</option>
                <option value="Чапаевск">Чапаевск</option>
                <option value="Чебоксары">Чебоксары</option>
                <option value="Челябинск">Челябинск</option>
                <option value="Черемхово">Черемхово</option>
                <option value="Череповец">Череповец</option>
                <option value="Черкесск">Черкесск</option>
                <option value="Черногорск">Черногорск</option>
                <option value="Чехов">Чехов</option>
                <option value="Чистополь">Чистополь</option>
                <option value="Чита">Чита</option>
                <option value="Шадринск">Шадринск</option>
                <option value="Шали">Шали</option>
                <option value="Шахты">Шахты</option>
                <option value="Шуя">Шуя</option>
                <option value="Щекино">Щекино</option>
                <option value="Щелково">Щелково</option>
                <option value="Электросталь">Электросталь</option>
                <option value="Элиста">Элиста</option>
                <option value="Энгельс">Энгельс</option>
                <option value="Южно-Сахалинск">Южно-Сахалинск</option>
                <option value="Юрга">Юрга</option>
                <option value="Якутск">Якутск</option>
                <option value="Ялта">Ялта</option>
                <option value="Ярославль">Ярославль</option>
              </select>
            <span>
                <a id = "filter-date"></a>
                <p>Дата</p>
            </span>
            <input type="date" id = "select-date" value = "2023-01-01">
            <span>
                <a id = "filter-price"></a>
                <p>Цена</p>
            </span>
            <label>От <input type = "number" minlength = "0" placeholder = "0" id = "price-after"> До <input type = "number" min = "0" placeholder="999999" id = "price-before"></label>
            <span>
                <a id = "filter-day"></a>
                <p>Длительность (дней)</p>
            </span>
            <script src = "js/slider.js">
            </script>
            <div id="slider">
                <div id="custom-handle-1" class="ui-slider-handle"></div>
                <div id="custom-handle-2" class="ui-slider-handle"></div>
            </div>
            <div class = "slider-value">
                <p id = "value-1">0</p>
                <p id = "value-2">100</p>
            </div>
            <a class = "see" id = "see"><div class = "img"></div>ПОКАЗАТЬ</a>
        </section>
        <section class = "ads" id = "ads-view">
            <?php

            $ad_banners = new Database();
            echo $ad_banners->get_ad_banners_main();

            ?>
        </section>
    </div>
    <section class = "button">
         <a id = "more"><div class = "img"></div>БОЛЬШЕ</a>
    </section>
</main>
<script>

    let filter_seeall = 1;
    let filter_region = 0;
    let filter_city = 0;
    let filter_date = 0;
    let filter_price = 0;
    let filter_day = 0;
    
    if(filter_seeall == 1) {
        $("#filter-seeall").css("background-image", "url(images/ads/filter.png)");
    }
    if(filter_region == 1) {
        $("#filter-region").css("background-image", "url(images/ads/filter.png)");
    }
    if(filter_city == 1) {
        $("#filter-city").css("background-image", "url(images/ads/filter.png)");
    }
    if(filter_date == 1) {
        $("#filter-date").css("background-image", "url(images/ads/filter.png)");
    }
    if(filter_price == 1) {
        $("#filter-price").css("background-image", "url(images/ads/filter.png)");
    }
    if(filter_day == 1) {
        $("#filter-day").css("background-image", "url(images/ads/filter.png)");
    }
    
    $("#filter-seeall").on("click", function() {
        if(filter_seeall == 1) {
            filter_seeall = 0;
            $("#filter-seeall").css("background-image", "url(images/ads/filternone.png)");
        } else if(filter_seeall == 0) {
            filter_seeall = 1;
            $("#filter-seeall").css("background-image", "url(images/ads/filter.png)");
            filter_region = 0;
            $("#filter-region").css("background-image", "url(images/ads/filternone.png)");
            filter_city = 0;
            $("#filter-city").css("background-image", "url(images/ads/filternone.png)");
            filter_date = 0;
            $("#filter-date").css("background-image", "url(images/ads/filternone.png)");
            filter_price = 0;
            $("#filter-price").css("background-image", "url(images/ads/filternone.png)");
            filter_day = 0;
            $("#filter-day").css("background-image", "url(images/ads/filternone.png)");
        }
    });
    
    $("#filter-region").on("click", function() {
        if(filter_region == 1) {
            filter_region = 0;
            $("#filter-region").css("background-image", "url(images/ads/filternone.png)");
        } else if(filter_region == 0) {
            filter_region = 1;
            $("#filter-region").css("background-image", "url(images/ads/filter.png)");
            filter_seeall = 0;
            $("#filter-seeall").css("background-image", "url(images/ads/filternone.png)");
        }
    });
    
    $("#filter-city").on("click", function() {
        if(filter_city == 1) {
            filter_city = 0;
            $("#filter-city").css("background-image", "url(images/ads/filternone.png)");
        } else if(filter_city == 0) {
            filter_city = 1;
            $("#filter-city").css("background-image", "url(images/ads/filter.png)");
            filter_seeall = 0;
            $("#filter-seeall").css("background-image", "url(images/ads/filternone.png)");
        }
    });
    
    $("#filter-date").on("click", function() {
        if(filter_date == 1) {
            filter_date = 0;
            $("#filter-date").css("background-image", "url(images/ads/filternone.png)");
        } else if(filter_date == 0) {
            filter_date = 1;
            $("#filter-date").css("background-image", "url(images/ads/filter.png)");
            filter_seeall = 0;
            $("#filter-seeall").css("background-image", "url(images/ads/filternone.png)");
        }
    });
    
    $("#filter-price").on("click", function() {
        if(filter_price == 1) {
            filter_price = 0;
            $("#filter-price").css("background-image", "url(images/ads/filternone.png)");
        } else if(filter_price == 0) {
            filter_price = 1;
            $("#filter-price").css("background-image", "url(images/ads/filter.png)");
            filter_seeall = 0;
            $("#filter-seeall").css("background-image", "url(images/ads/filternone.png)");
        }
    });
    
    $("#filter-day").on("click", function() {
        if(filter_day == 1) {
            filter_day = 0;
            $("#filter-day").css("background-image", "url(images/ads/filternone.png)");
        } else if(filter_day == 0) {
            filter_day = 1;
            $("#filter-day").css("background-image", "url(images/ads/filter.png)");
            filter_seeall = 0;
            $("#filter-seeall").css("background-image", "url(images/ads/filternone.png)");
        }
    });
    
    $("#see").on("click", function() {
        let select_region = $("#select-region").val();
        let select_city = $("#select-city").val();
        var options = {
            year: 'numeric',
            month: 'numeric',
            day: 'numeric',
            timezone: 'UTC'
        };
        let date = new Date($("#select-date").val());
        let select_date = date.toLocaleString("ru", options);
        let price_after = $("#price-after").val();
        let price_before = $("#price-before").val();
        let value_1 = $("#value-1").html();
        let value_2 = $("#value-2").html();
        
        $.ajax({
                method: "POST",
                url: "php/ajax/sort.php",
                data: {
                    filter_seeall: filter_seeall,
                    filter_region: filter_region,
                    select_region: select_region,
                    filter_city: filter_city,
                    select_city: select_city,
                    filter_date: filter_date,
                    select_date: select_date,
                    filter_price: filter_price,
                    price_after: price_after,
                    price_before: price_before,
                    filter_day: filter_day,
                    value_1: value_1,
                    value_2: value_2
                }
            })
            .done(function(msg) {
                if(msg != "Restart") {
                    $("section.ads").html(msg);
                    $("#more").css("display", "none");
                } else if(msg == "Restart") {
                    location.reload();
                }
            });
    });
    
    let limit = 6;
    $("#more").on("click", function() {
        limit += 6;
        
        $.ajax({
                method: "POST",
                url: "php/ajax/more.php",
                data: {
                    limit: limit
                }
            })
            .done(function(msg) { $("#ads-view").html(msg); });
    });
    
    $("#search-btn").on("click", function() {
        let search = $("#search").val();
        
        if(search == "") {
            location.reload();
        }
        else {
            $.ajax({
                    method: "POST",
                    url: "php/ajax/search-ad.php",
                    data: {
                        search: search
                    }
                })
                .done(function(msg) {
                    $("section.ads").html(msg);
                    $("#more").css("display", "none");
                });
        }
    });
    
    document.addEventListener("keydown", function (e) {
        if(e.code == "Enter") {
            if($("#search").val() != "") {
                $("#search-btn").click();
            }
            else if(filter_seeall != 0 && $("#search").val() == "") {
                location.reload();
            }
                    
            if(filter_seeall == 0) {
                $("#see").click();
            }
        }
    });
    
</script>
<?php

include_once 'php/footer.php';

?>