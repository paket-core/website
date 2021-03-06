(function(){
    'use strict';
    const DEFAULT_LANGUAGE = 'en';
    const translations = {
        en: {},
        pl: {
            'header_product_info': 'Informacje o Platformie',
            'header_our_team': 'Nasz Zespół',
            'header_token_sale': 'Sprzedaż tokenów',
            'header_for_developers': 'Deweloperzy',
            'media_title': 'MEDIA O NAS',
            'about_desc_1_li_1_title': 'Władza dla ludzi',
            'about_desc_1_li_2_title': 'Globalna społeczność',
            'about_desc_1_li_3_title': 'Zdecentralizowana Sieć',
            'about_desc_1_li_1': 'Wierzymy w przełamywanie monopoli i przekazywanie władzy w ręce, ,zwykłych obywateli".',
            'about_desc_1_li_2': 'Wierzymy, że technologia może zorganizować globalne społeczeństwo i prowadzić do współpracy bez żadnej centralnej władzy.',
            'about_desc_1_li_3': 'Stworzyliśmy otwarty protokół, na mocy którego każdy może wziąć udział w całkowicie zdecentralizowanej sieci globalnych przesyłek.',
            'about_desc_2': 'Bitcoin zrewolucjonizował przemysł płatniczy poprzez jego decentalizację. PAKET odpowiada na podobną potrzebę - przesyłki rzeczy w zdecentralizowany sposób. Naszym zdaniem stwarza to możliwość rozwiązania problemu w świecie rzeczywistym korzystając z technologii blockchain w najczystszej formie. Jest to realne rozwiązanie na wymianę fizycznych dóbr pomiędzy ludźmi bez żadnego centralnego ośrodka władzy zarządzającego procesem, co więcej przeważnie pobierającego przy tym znaczną opłatę.',
            'project_1_title': 'Prawdziwie Zdecentalizowany i Otwarty',
            'project_1_desc': 'Wydolny system pozwala każdej części składowej na robienie tego, co potrafi najlepiej i czerpanie korzyści ze zdecentralizowanego sposobu transportu. Platforma PAKET jest otwarta dla każdego, nie pobiera żadnych opłat transakcyjnych i jest całkowicie transparentna. Projekt PAKET nie zbiera funduszy poprzez sprzedaż praw lub udziałów. Jedyną możliwością wsparcia systemu jest korzystanie z sieci i przyłączenie się do niej poprzez kupno, używanie tokenów BUL i ich zarabianie.',
            'project_2_title': 'Dlaczego wybraliśmy Stellar',
            'project_2_desc': 'Ponieważ dzięki platformie Stellar, łączącej systemy płatnicze i ludzi, można dokonywać transferów szybko, niezawodnie, bezpiecznie i prawie bezkosztowo. Odpowiada to idealnie potrzebie warstwy transakcyjnej o niskim współczynniku. Wybralśmy Stellar zgodnie z naszym początkowym założeniem współpracy jedynie z partnerami oferującymi najwyższą jakość usług, a platforma ta charakteryzuje się dużą prędkością działania i skrajnie niskimi opłatami transakcyjnymi. Ze wszystkich rozwiniętych platform zarejestrowych obecnie na rynku, Stellar był dla nas oczywistym wyborem. Aby dowiedzieć się więcej na jego temat kliknij <a href = https://www.stellar.org/ target=_blank>tutaj</a>.',
            'project_3_title': 'Otwarty i Wolny Protokół',
            'project_3_desc': 'PAKET Procotol tworzy fundamenty zaufania i umożliwia współpracę pomiędzy wieloma podmiotami w dziedzinie bezpiecznych i punktualnych przesyłek. Ze względu na modułowość i siłę, PAKET Protocol jest podzielony na następujące wartwy:',
            'project_3_li_0': '<strong>L0 (Zaufanie) – </strong>ustanawia zdecentralizowany konsensus odnośnie warunkowego transferu wartości, tak jak i sprawdzalną, niezmienną historię tego konsensusu.',
            'project_3_li_1': '<strong>L1 (Token) – </strong>określa kryptograficzny token i, ,smart contract", który rządzi jego zachowaniem.',
            'project_3_li_2': '<strong>L2 (Ścieżka) – </strong>łączy wymagania nadawców z możliwościami i kosztami kurierów, ponieważ zapewniania szczegółową i głęboko osadzoną w kontekście perspektywę warunków dostawy i wymagań rynku.',
            'project_3_li_3': '<strong>L3 (Aplikacja) – </strong>łączy narzędzia i aplikacje, które pozwalają na proste i intuicyjne uczestnictwo w sieci.',
            'project_3_li_4': '<strong>L4 (Organizacja) – </strong>tworzy organizacje i usługi, które czerpią korzyści z ekosystemu PAKET jednocześnie go wzbogacając.',
            'project_4_title': 'Ekonomia współpracy',
            'project_4_desc': 'Uber i Airbnb dezorganizują cały przemysł. Reprezentują, wciąż zyskującą na popularności ekonomię współpracy na żądanie, która zmienia sposób prowadzenia biznesu. Platforma PAKET przenosi to rozwiązanie do świata przesyłek poprzez upublicznienie dostawy i zapotrzebowania na nią. Obieg informacji w czasie rzeczywistym, jak również śledzenie, zabezpieczenie przesyłki i zaawansowane techniki kierowania nią, są jedynie małą częścią tego, co nasza Platforma ma do zaoferowania.',
            'project_5_title': 'Przyjazne dla środowiska',
            'project_5_desc': 'Optymalizacja dróg dostawy znacząco obniża ilość zużytej energii i spalonego paliwa. Możemy zdecydowanie obniżyć światową produkcję dwutlenku węgla, jedynie poprzez odebranie tzw. ostatniego kilometra przesyłki zastępom ciężarówek na rzecz m.in. lokalnych kurierów poruszających się rowerami, a nawet idących piechotą ludzi zajmujących się swoimi codziennymi sprawami.',
            'project_6_title': 'Przesyłki P2P',
            'project_6_desc': 'Miliony ludzi na całym świecie są członkami internetowych rynków wymiany dóbr. Kluczowym wyzwaniem handlu P2P jest transport towarów oraz deficyt zaufania pomiędzy nieznajomymi. Niewielcy sprzedawcy internetowi napotykają podobne przeszkody - nie posiadają wystarczających środków do konkurowania z przemysłowymi gigantami w zakresie logistyki. Wraz z wkroczeniem na rynek Platformy PAKET problemy te odejdą do przeszłości. ',
            'project_7_title': 'Pozahandlowa większość',
            'project_7_desc': 'Mieszkańcy krajów rozwiniętych często narzekają na niewydolność, ograniczenia i wysokie koszty przesyłek, ale często zapominają, że w większości, przypadków nie można też zupełnie polegać na kurierach. Ekosystem PAKET rzuca takiej sytuacji wyzwanie dostarczając przesyłkę gdziekolwiek zaistnieje potrzeba jej realizacji. W ten sposób rozwiązuje bardzo realny problem wielu ludzi zapewniając niezawodną usługę przesyłek temu niezagospodarowanemu rynkowi o zdumiewającej wielkości .',
            'ecosystem_title': 'Ekosystem Token',
            'ecosystem_desc': 'Platforma PAKET jest otwarta i bezpłatna. Czy masz pomysł na wkroczenie na całkowicie nowy rynek posługując się Twoją aplikacją? Albo chociaż na drobne ulepszenie Platformy? Zanurz się w naszym projekcie na GitHub aby móc dodawać, klonować i brać udział w ekosystemie. Jeżeli Twoja aplikacja zapewni potrzebną usługę, możesz nawet zarobić.',
            'ecosystem_graph_title_1': 'Profesjonalny kurier',
            'ecosystem_graph_desc_1': 'Międzynarodowe firmy kurierskie, jak UPS i FEDEX, lokalni przedsiębiorcy, tacy jak japońskie Yamato, izraelskie Gett Taxi, a nawet Twój lokalny kurier przemieszczający się na rowerze - protokół pozwala wszystkim uczestnikom na współpracę ze wszystkimi z możliwością wyboru jedynie tej części trasy przesyłki, która jest dla nich najbardziej efektywna.',
            'ecosystem_graph_title_2': 'Kurier - oportunista',
            'ecosystem_graph_desc_2': 'Czy jeździsz z jednego miasta do innego każdego dnia? A nuż co tydzień wybierasz się na północ? To może być nawet jednorazowa wizyta - kiedy, trasa i wymagania każdej przesyłki w pełni się wyświetlą, wszyscy możemy stać się oportunistycznymi kurierami, którzy zyskują tokeny BUL podczas swojego typowego dnia. ',
            'ecosystem_graph_title_3': 'Usługi satelitarne',
            'ecosystem_graph_desc_3': 'Otwarta sieć przesyłek jest podatnym gruntem na rozwój wspierających je usług. Mogą z niej czerpać: dostawcy ubezpieczeń, spółdzielnie, kurierskie, logistycy, specjaliści zarządzający bazami danych, analitycy i wielu innych. ',
            'ecosystem_graph_title_4': 'Centrum oportunizmu',
            'ecosystem_graph_desc_4': 'W pełni wykorzystaj swój standardowy plan dnia siedząc w biurze / domu / ulubionej kawiarnii i zarabiaj tokeny BUL doglądając jak przesyłki przechodzą z rąk do rąk. Każdy może założyć centrum oportunizmu!',
            'ecosystem_graph_title_5': 'Profesjonalny operator',
            'ecosystem_graph_desc_5': 'W całkowicie przejrzystej i podlegającej analizie sieci w bardzo prosty sposób można zidentyfikować wysokie zapotrzebowanie na dostarczanie przesyłek w danej okolicy. Profesjonalni usługodawcy mogą zaspokoić tę potrzebę poprzez stworzenie wyspecjalizowanego centrum lub otworzenie innego rodzaju biznesu, który także spełniałby taką rolę wykorzystując tę niszę jako środek na przyciągnięcie nowych klientów. ',
            'ecosystem_graph_title_6': 'Nadawca i odbiorca',
            'ecosystem_graph_desc_6': 'Ci, którzy chcą nadać przesyłkę i są gotowi za to zapłacić, używając technologii blokchain i "smart contract" albo nieco już staroświeckich pieniędzy',
            'team_title': 'Nasz Zespół',
            'team_desc': 'Wielu ludzi wspiera nas w różny sposób. Dla niżej wymienionych Członków Zespołu praca w Projekcie PAKET jest ich główną działalnością. ',
            'endorsements_title': 'Wsparcie',
            'endorsements_desc': 'Jesteśmy bardzo wdzięczni wielu uznanym fachowcom, którzy od początku powstania naszej inicjatywy udzielali jej wsparcia. Szczególne, podziękowania składamy następującym liderom przemysłu za podpisanie listu z oficjalnym poparciem projektu PAKET. ',
            'endorsements_link': 'Oficjalny list poparcia, czytaj tutaj',
            'top_title': 'PAKET',
            'top_title2': 'PAKET',
            'top_desc': 'Zdecentralizowana sieć globalnych przesyłek',
            'top_join_now': 'Informacja o sprzedaży tokenów',
            'top_action_wp': 'White Paper',
            'top_action_telegram': 'Dołącz do naszego Telegramu',
            'join_our_community': 'Dołącz do naszej społeczności',
            'bottom_action_telegram': 'Dołącz do naszego Telegramu',
            'footer_follow_title': 'POZOSTAŃ W KONTAKCIE',
            'footer_privacy_policy': 'Polityka prywatności',
            'footer_copyright': '2017 - 2018 Paket Project LTD',
        },

        ru: {
            'header_product_info': 'Платформа',
            'header_our_team': 'Команда',
            'header_token_sale': 'Продажа Токенов',
            'header_for_developers': 'Разработка',
            'media_title': 'Медиа',
            'about_desc_1_li_1_title': 'Власть людям',
            'about_desc_1_li_2_title': 'Глобальное сообщество',
            'about_desc_1_li_3_title': 'Децентрализованная сеть',
            'about_desc_1_li_1': 'Мы верим в раскалывание монополий и в предоставление власти людям.',
            'about_desc_1_li_2': 'Мы верим в то, что технология сможет организовать глобальное сообщество и привести к кооперации без централизованного авторитета.',
            'about_desc_1_li_3': 'Мы создали открытый протокол через который все смогут участвовать в полностью децентрализованной и глобальной сети доставки посылок.',
            'about_desc_2': 'Биткойн совершил настоящую революцию, децентрализировав платежную индустрию. ПЭКЕТ <br/> отвечает на похожий запрос - децентрализованная пересылка товаров. <br/> Для нас это возможность решить проблему в реальном мире, используя принципы технологии блокчейна: подлиный способ обмена материальными ценностями между людьми без участия центральной власти, которая бы управляла процессом взымая изрядные комиссионные.',
            'project_1_title': 'Подлинно Децентрализованная и Открытая Система',
            'project_1_desc': 'Эффективные системы позволяют каждой своей части делать то, что она делает лучше всего, и так как все выигрывают от более эффективного способа передачи посылок. Платформа ПЭКЕТ открыта для всех, не взымает никаких комиссионных, и абсолютно прозрачна. Проект ПЭКЕТ не собирает средства продавая свои акции, и единственный способ поддержать систему это участие в сети - покупка, использование и зарабатывание токенов BUL.',
            'project_2_title': 'Почему мы выбрали Стеллар',
            'project_2_desc': 'Потому что платформа Стеллар объединяет платежные системы и людей, позволяет переводить деньги быстро,надежно, безопасно и практически бесплатно. Своим низким коэффициентом трения она идеально подходит для транзакционного уровня нашего протокола. Для уровня консенсуса мы выбрали Стеллар из-за сбалансированности, скорости и низких платежей на этой платформе. Из всех зрелых платформ DLT (блокчейн),  Стеллар был очевидным выбором для нас. Узнайте больше про Стеллар  <a href="https://www.stellar.org/" target="_blank">здесь</a>.',
            'project_3_title': 'Открытый и Свободный Протокол',
            'project_3_desc': 'ПЭКЕТ Протокол устанвливает доверие и позволяет нескольким сторонам сотрудничать над безопасной и своевременной доставкой товаров. Ради модульности и  прочности протокол  разделен на следующие уровни:',
            'project_3_li_0': '<strong>L0 (Доверие) – </strong> устанавливает децентрализованный консенсус насчет обусловленного перевода денег а также проверяемую и неизменную историю этого консенсуса.',
            'project_3_li_1': '<strong>L1 (Токен) – </strong>описывает криптографический токен и умные контракты (smart contracts) управляющие его поведением.',
            'project_3_li_2': '<strong>L2 (Маршрутизация) – </strong>Обеспечивает согласование запросов отправителей с возможностями и ценами курьеров. Детально показывает состояние спроса и предложения на рынке.',
            'project_3_li_3': '<strong>L3 (Приложение) – </strong>Консолидирует инструменты и приложения позволяющие участвовать в сети просто и интуитивно.',
            'project_3_li_4': '<strong>L4 (Организация) – </strong>Создание организаций и сервисов которые обогащают экосистему ПЭКЕТ. Уровень экономики.',
            'project_4_title': 'Экономика Шеринга',
            'project_4_desc': 'Uber и AirBnB подрывают устои целых индустрий. Пиринговая экономика сотрудничества в реальном времени распостраняется и меняет то как мы ведем бизнес. Платформа ПЭКЕТ приносит экономику шеринга в индустрию доставки раскрывая спрос и предложение на эти услуги по всему миру. Коммуникация в режиме реального времени, отслеживание посылок, страховка и продвинутые техники нахождения оптимальных маршрутов - все это только малая часть того что предлагает эта платформа.',
            'project_5_title': 'Экологическая Безопасность',
            'project_5_desc': 'Оптимизация маршрутов доставки значительно уменьшит количество затрачиваемой энергии и сжигаемых ископаемых. Мы серьезно уменьшим углеродный след просто перенеся доставки на "последней миле" от автопарка тяжелых грузовиков к местным курьерам на велосипедах, или даже к людям которые делают доставки как часть своего дневного маршрута.',
            'project_6_title': 'Пиринговые (P2P) Доставки',
            'project_6_desc': 'Миллионы людей по всему миру участвуют в онлайн-рынках на которых они обмениваются с другими участниками. Ключевая проблема таких сообществ это транспортировка товаров, и отсутствие доверия между незнакомыми людьми это огромное препятствие для подлинного пирингового обмена. Мелкие онлайн-торговцы также сталкиваются со схожими трудностями, так как они не могут конкурировать с логистикой гигантов индустрии. С платформой ПЭКЕТ эти проблемы уходят в прошлое.',
            'project_7_title': '"Некоммерциализированное" Большинство',
            'project_7_desc': 'Граждане стран первого мира часто жалуются на неэффективность, ограничения и высокую стоимость современных доставок, но при этом они забывают о том, что в большинстве стран надежные доставки не существуют как класс. Экосистема ПЭКЕТ все это меняет давая глобальное покрытие везде где есть спрос, решая реальную для огромного количества людей проблему,  и наконец-то предоставляет надежный сервис доставок нетронутому рынку гигантских размеров.',
            'ecosystem_title': 'Экосистема Токена',
            'ecosystem_desc': 'Платформа ПЭКЕТ является открытой и бесплатной. Хотите что-то улучшить в ней, или может быть создать приложение для нового целевого рынка? Присоединяйтесь к нашим проектам на гитхабе и участвуйте в экосистеме добавляя свои изменения. Если ваше приложение предоставляет необходимую услугу, вы даже можете брать за него деньги.',
            'ecosystem_graph_title_1': 'Профессиональный курьер',
            'ecosystem_graph_desc_1': 'Такие компании международной перевозки как UPS и FedEx, местные компании как Yamamoto, Gett Taxi и даже городские велосипедные курьеры - протокол позволяет всем участникам сотрудничать, давая возможность каждому работать на той части маршрута, на которой он наиболее эффективен.',
            'ecosystem_graph_title_2': 'Курьер Оппортунист',
            'ecosystem_graph_desc_2': 'Вы ездите каждое утро из одного города в другой? Или может быть на север раз в неделю? Когда маршруты и запросы для каждой посылки полностью видны, мы все можем стать курьерами оппортунистами и зарабатывать токены BUL просто занимаясь обычными для нас делами.',
            'ecosystem_graph_title_3': 'Сопровождающий сервис',
            'ecosystem_graph_desc_3': 'Открытая сеть доставок это плодородная почва для сервисов которые будут преуспевать поддерживаю эту новую экономику: страховые общества, курьерские компании, специалисты по маршрутизации, аналитики и множество других.',
            'ecosystem_graph_title_4': 'Узел оппортунист',
            'ecosystem_graph_desc_4': 'Если вы находитесь каждый день у себя в офисе/дома/любимом кафе, вы можете зарабатывать токены BUL присматривая за посылками и помогая им перейти из рук в руки. Любой может стать узлом оппортунистом.',
            'ecosystem_graph_title_5': 'Профессиональный узел',
            'ecosystem_graph_desc_5': 'В полностью прозрачной и легко анализируемой сети будет тривиально определить высокий спрос на доставку посылок в определенном районе. Профессиональные операторы могут удовлетворить такой спрос либо построив специализированные узлы, либо создав другой тип бизнеса который будет также функционировать как узел, и использовать спрос как способ привлечь потенциальных клиентов в свой бизнес.',
            'ecosystem_graph_title_6': 'Отправитель и получатель',
            'ecosystem_graph_desc_6': 'Люди желающие транспортировать товары и посылки из одного места в другое, и согласные платить за эту услугу, либо используя технологии блокчейна и умных контрактов, либо старомодные фиатные деньги.',
            'team_title': 'Команда',
            'team_desc': 'Многие люди по-разному поддерживают наш проект. Перечисленные члены команды это только те, для кого проект ПЭКЕТ это основная работа.',
            'endorsements_title': 'Заявления о поддержке',
            'endorsements_desc': 'Мы благодарны многим людям за их помощь и поддержку, и особенно благодарны перечисленным ниже лидерам индустрии за их подпись на официальном письме поддержки проекта ПЭКЕТ',
            'endorsements_link': 'Прочитать полное письмо',
            'top_title': 'МЫ ЭТО ПЭКЕТ',
            'top_title2': 'МЫ ЭТО ПЭКЕТ',
            'top_desc': 'Децентрализованная сеть доставки посылок',
            'top_join_now': 'Информация о Продаже Токенов',
            'top_action_wp': 'White Paper',
            'top_action_telegram': 'Группа в Телеграм',
            'footer_follow_title': 'ПОДПИШИТЕСЬ НА НАС',
            'footer_privacy_policy': 'Политика Конфиденциальности',
            'footer_copyright': '2017-2018 Проект ПЭКЕТ  LTD',

        },

        cn: {
            'header_product_info': '产品信息',
            'header_our_team': '我们的团队',
            'header_token_sale': '代币销售',
            'header_for_developers': '开发人员',
            'media_title': '媒体要闻',
            'about_desc_1_li_1': '我们相信打破垄断，相信赋予普通人权力。',
            'about_desc_1_li_2': '我们相信技术可以组织全球社区，可以实现无任何中央部门的合作。',
            'about_desc_1_li_3': '我们创建了一个开放协议。通过该协议，每个人均可参与一个完全去中心化的全球包裹运送网络。',
            'about_desc_2': '比特币通过去中心化付款行业实现了革新。 PAKET <br/>以一种去中心化的方式满足一种类似需求，即货物运送。<br/>我们将其视为解决现实问题的一个绝佳机会，<br/>以最纯粹的方式使用区块链技术的原则：在人员之间交换物理价值的真实方式，概无任何中央机构管理该流程并夺取大量佣金。',
            'project_1_title': '真正去中心化的开放平台',
            'project_1_desc': '高效的系统可以物尽其才、人尽其用，每个人均可从更有效的货物运送中获益。PAKET平台向人人开放，无需任何佣金，完全透明。另外，PAKET项目概不通过出售股权或股票筹集资金。相反，支持该系统的唯一途径是使用我们的网络并成为其中一员，包括购买、使用和赚取BUL代币。',
            'project_2_title': '我们为何选择恒星',
            'project_2_desc': '"因为连接付款系统和人员的恒星平台能快速、可靠、安全、几乎无任何成本地转移价值。这完全符合我们对低摩擦交易层的需求。我们选择恒星作为初始共识层，鉴于其成熟高效、超快的交易速度以及极低的交易费。在目前市场中活跃的所有成熟分布式账本平台中，恒星是我们的不二之选。请在<a href="https://www.stellar.org/" target="_blank">here</a>上阅读关于恒星的更多详情。"',
            'project_3_title': '开放的免费协议',
            'project_3_desc': 'PAKET议定构建了多方信任，助力多方合作，以实现货物的安全及时送达。为了获取模块化和稳健性，协议分为以下几层：',
            'project_3_li_0': '<strong>L0 (信任) – </strong>建立了关于有条件转移价值的去中心化共识，以及该共识可检查、不可更改的历史。',
            'project_3_li_1': '<strong>L1 (代币) – </strong>定义了加密代币和管理其行为的智能合约。',
            'project_3_li_2': '<strong>L2 (路线) – </strong>匹配了发件人的需求与快递公司的运输量与价格，同时提供关于市场供需的详细、高度背景化的视角。',
            'project_3_li_3': '<strong>L3 (应用程序) – </strong>整合了在网络中实现简单、直观参与的工具与应用程序。',
            'project_3_li_4': '<strong>L4 (组织) – </strong>构建了在PAKET生态系统中全力发展的组织和服务，并丰富该种组织和服务。',
            'project_4_title': '共享经济',
            'project_4_desc': '优步和爱彼迎正在革新整个行业。协作、按需、点对点的经济正在不断蔓延，改变我们做生意的方式。通过公开全球供应和需求，PAKET平台将分享经济带入运输行业。实时数据通讯与追踪、运输保险和先进的路径技术只是这个平台功能的一小部分。',
            'project_5_title': '环保',
            'project_5_desc': '优化运输路线可显著减少能源销售与化石燃料量。通过将最后一公里的货物运输从卡车车队转移到本地快递公司的自行车车队，或甚至转移到将顺途携带包裹作为其日常行程的本地人，我们可大量减少全球碳足迹。',
            'project_6_title': 'P2P运输',
            'project_6_desc': '全球数百万人正在参与商品交换的在线市场。这些社区的一个关键问题是商品运输，且陌生人之间缺乏信任是真正P2P交易的巨大障碍。小型在线零售商面临相似的挑战，因为在物流方面，他们缺乏与行业巨头展开竞争的资源。通过PAKET平台，这些问题可轻松得以解决。',
            'project_7_title': '未商业化的大多数',
            'project_7_desc': '第一世界的公民常常抱怨现代运输的低效率、局限性和高成本，但却忘记，在世界大部分地区，可靠的运输仍未实现。PAKET生态系统可改变这一切，在有需求的任何地方提供全球服务，为很多人解决了一个非常现实的问题，并最终为尚未开发的庞大市场提供安全可靠、值得信赖的运送服务。',
            'ecosystem_title': '代币生态系统',
            'ecosystem_desc': 'PAKET平台开放、免费。获得了改善，获得了您想应用自己的运输APP的全新市场吗？深入了解我们的github项目，添加、克隆和参与生态系统。如果您的APP可提供所需的服务，您甚至可以为其收费。',
            'ecosystem_graph_title_1': '专业快递公司',
            'ecosystem_graph_desc_1': 'UPS和FedEx等国际快递公司，日本大和、Gett Taxi等本地企业，甚至本地的自行车快递公司。该协议可让所有各方通力合作，让每方仅负责其能最高效运送货物的一段路线。',
            'ecosystem_graph_title_2': '机会主义型快递公司',
            'ecosystem_graph_desc_2': '每天早上从一个城市到另一个城市通勤？每周要去北面？即使对于单次行程：一旦每个包裹的路线和要求完全可见，我们均可成为机会主义型快递公司，在完成日常行程的同时赚取BUL。',
            'ecosystem_graph_title_3': '卫星服务',
            'ecosystem_graph_desc_3': '开放的运输网络提供了沃土，以支持可在该全新经济中蓬勃发展的服务：保险提供商、快递合作社、路线专家、数据科学家和分析师等。',
            'ecosystem_graph_title_4': '机会主义型枢纽',
            'ecosystem_graph_desc_4': '利用您办公室/家/最喜爱的咖啡店的日常路线，在包裹转手时积极关注，从而赚取BUL代币。人人均可成为一个机会主义型枢纽！',
            'ecosystem_graph_title_5': '专业枢纽<br/>运营商',
            'ecosystem_graph_desc_5': '在一个完全透明、可分析的网络上，确定某个区域内对包裹运送的高需求轻而易举。专业运营商可通过构建专用中心或开设另一个可用作枢纽的商铺来满足该需求，并利用该需求将潜在客户吸引到其商铺。',
            'ecosystem_graph_title_6': '发件人与收件人',
            'ecosystem_graph_desc_6': '希望将货物和包裹从一个地方运送到另一个地方，并愿意为其付款的人员，无论是使用区块链技术和智能合约，或老式的法定货币',
            'team_title': '我们的团队',
            'team_desc': '众多人员以不同的方式支持该项目。所列罗的团队成员仅为将PAKET项目作为主要工作的人员。',
            'endorsements_title': '担保书',
            'endorsements_desc': '我们非常感谢一路上帮助我们的多位德高望重的人士，但我们特别感谢签署PAKET项目官方担保书的下列行业领袖。',
            'endorsements_link': '在此处阅读',
            'top_title': 'WE ARE PAKET',
            'top_title2': 'WE ARE PAKET',
            'top_desc': '开放包裹运送协议，让国际、本地和个人快递公司通力合作',
            'top_join_now': '代币销售信息',
            'top_action_wp': '白皮书',
            'top_action_telegram': '加入我们的Telegram',
            'footer_follow_title': '关注我们',
            'footer_privacy_policy': '隐私政策',
            'footer_copyright': '2017-2018 Paket Project LTD',

        },

        ko: {

            'header_product_info': '플랫폼 정보',
            'header_our_team': '팀구성',
            'header_token_sale': '토큰세일',
            'header_for_developers': '디벨로퍼',
            'media_title': '언론보도',
            'about_desc_1_li_1_title': '사용자를 위한 플랫폼',
            'about_desc_1_li_2_title': '글로벌 커뮤니티',
            'about_desc_1_li_3_title': '탈중앙 네트워크',
            'about_desc_1_li_1': 'PAKET은 소수의 대형업체가 독과점하는 현 택배 생태계를 벗어나 일반 참여자들이 분산화 네트워크로 참여할 수 있는  새로운 택배 생태계를 구현하고자 합니다.',
            'about_desc_1_li_2': 'PAKET은 블록체인 기술을 통해 전세계 탈중앙화 커뮤니티를 한데 묶어 협업가능한 생태계를 구현합니다.',
            'about_desc_1_li_3': 'PAKET이 개발한 오픈 프로토콜을 통해 완전히 탈중앙화된 글로벌 택배 네트워크에는 모두가 참가할 수 있습니다.',
            'about_desc_2': '비트코인이 탈중앙화를 통해 전세계 페이먼트 업계에 파란을 일으킨 것 처럼, PAKET은 탈중앙화를 통해 전세계 택배업계에 새로운 획을 긋고자 합니다. 블록체인의 핵심적이고 본질적인 기술력을 이용해 사람과 사람이 미들맨의 개입 없이도 그리고 과도한 수수료를 지급하지 않고도 상품의 이동이 가능하도록 구현하고자합니다.',
            'project_1_title': '탈중앙화된 오픈 플랫폼',
            'project_1_desc': '모든 참여자가 본인이 가장 잘하는  임무를 수행할 때 효율성이 극대화되며 이러한 택배 생태계는 모든 시장참여자에게 win-win솔류션을 제공합니다. PAKET은 누구나 참여할수 있으나 수수료를 취하지 않는 완벽히 투명한 오픈플랫폼입니다. PAKET프로젝트는 주식을 통한 자본조달을 진행하지 않았으며, BUL토큰의 구매, 사용 및 획득만을 통해 네트워크가 구성되고 생태계가 구현됩니다.  ',
            'project_2_title': '스텔라(Stellar)플랫폼을 선택한 이유',
            'project_2_desc': '신속하고 안전하면서도 최소비용의 결제시스템을 구현해주는 스텔라플랫폼은 마찰없는 트랜잭션레이어를 구성하고자 하는 당사의 니즈에 최적화되어있는 플랫폼입니다. 스텔라는 높은 트랜잭션 속도를 최소의 비용으로 제공해주는 신뢰할 수 있는 플랫폼입니다. 스텔라는 현재 시중에 소개된 주류 분산원장기술사 중 최고의 서비스를 제공합니다. 스텔라 플랫폼에 대해 더 많은 정보를 원하시면 다음의 링크를 참고해 주시기 바랍니다. <a href=https://www.stellar.org/ target=_blank>here</a>.',
            'project_3_title': '누구에게나 오픈된 무료 프로토콜',
            'project_3_desc': ' PAKET프로토콜은 다자 간 신뢰를 형성하고 상호 협력을 통해 안전하고 신속한 택배가 가능하도록 구현해줍니다. 당사의 프로토콜은 역동적인 시스템 구현 및 효율적 모듈화를 위해 다음과 같은 레이어로 구성되어 있습니다.',
            'project_3_li_0': 'L0 (신뢰) 조건부 택배에 대한 분산화된 컨센서스 구축. 점검가능하면서도 위변조가 불가능한 컨센서스 구축.',
            'project_3_li_1': 'L1 (토큰) 암호화된 토큰과 스마트컨트랙트',
            'project_3_li_2': 'L2 (루트) 시장의 수요공급에 대한 정확도 높고 논리적인 분석을 통해 의뢰인과 배달인의 조건과 비용을 매치.',
            'project_3_li_3': 'L3 (애플리케이션) 누구나 쉽게 사용할 수 있도록 툴과 애플리케이션을 통합',
            'project_3_li_4': 'L4 (조직) PAKET이코시스템의 구현과 질적 성장을 위한 조직구성 및 서비스 발전',
            'project_4_title': '공유경제',
            'project_4_desc': '우버와 에어비앤비와 같은 비즈니스가 혁신을 가져왔습니다. 협력중심, 온디맨드 방식의 p2p 경제는 비즈니스 패러다임을 완전히 변화시키며 널리 확산되고 있습니다. PAKET플랫폼은 택배시장에서 이러한 공유경제를 구현하고자 합니다. 실시간 데이타 교환, 트래킹 및 택배보험을 비롯해 고급기술력이 응집된 최상의 솔루션을 제공합니다',
            'project_5_title': '자연친화적 플랫폼',
            'project_5_desc': 'PAKET이 제공하는 택배 경로를 이용하면 에너지 낭비를 줄이고 친환경적인 효과를 거둘 수 있습니다. 매연이 자욱한 트럭이 아닌 친환경적 자전거나 도보를 이용해 일상 생활 중에 일반인들이 택배 활동에 참가할 수 있는 사회를 상상해 보십시오. 깨끗한 지구를 위해서 PAKET도 앞장설 것입니다.',
            'project_6_title': 'P2P 택배',
            'project_6_desc': '전세계 수백만 인구가 매일 전자상거래와 택배를 이용하고 있습니다만 현재의 시장은 많은 문제점을 동반하고 있습니다. 특히 인터넷 P2P거래의 경우 어떻게 물품을 주고 받을 것인지를 비롯하여 참여자 간 신뢰 부족 등의 문제가 있으며, 소상공인의 경우 로지스틱적으로 대형업체들과 경쟁하기가 어려운 상황입니다. PAKET플랫폼은 이러한 문제들을 해결하고자 합니다.',
            'project_7_title': '택배 소외 지역으로의 서비스 확대',
            'project_7_desc': '선진국 거주자들은 택배의 높은 비용, 비효율성과 다양한 제약에 대해 불평합니다. 하지만 전인류적인 차원에서 보았을때 아직도 지구촌 곳곳에서는 택배서비스 자체가 전혀 제공되지 않는 곳들이 많습니다. PAKET은 수요가 있는 곳이라면 언제 어디서라도 또 누구라도 택배를 보내고 배달할 수 있는 서비스를 이용할 수 있는 새로운 에코시스템을 구현하고자 합니다. 상호 신뢰할 수 있는 플랫폼을 통해서 그 동안 택배서비스를 이용할 수 없었던 소외된 지역에서도 택배를 이용할 수 있게 될 것입니다.',
            'ecosystem_title': '토큰 에코시스템',
            'ecosystem_desc': 'PAKET은 누구나 무료로 사용가능한 오픈플랫폼입니다. 누구라도 기존의 앱을 개선하는데 참여할 수 있으며 심지어 완전히 새로운 택배 앱을 개발할 수도 있습니다. 당사의 깃허브를 방문하시면 모든 것에 참여하실 수 있습니다. PAKET의 오픈 플랫폼을 활용해 만든 앱을 통해 수익을 창출할 수도 있습니다.',
            'ecosystem_graph_title_1': '전문 택배배달인/업체',
            'ecosystem_graph_desc_1': '글로벌 글로벌 기업인 UPS와 FedEx, 일본기업인 야마토 및 Gett Taxi를 비롯해 자전거를 이용한 택배업체 까지 수 많은 종류의 택배사들이 영업을 하고 있습니다. PAKET은 이 모든 업체들이 각자 본연의 분야에서 가장 잘 할 수 있는 업무에 집중 하면서 협업을 통해 효율성을 극대화시킬 수 있는 플랫폼을 제공합니다. ',
            'ecosystem_graph_title_2': '파트타임 택배배송',
            'ecosystem_graph_desc_2': '혹시 매일 또는 매주 특정 도시를 왕래하십니까? PAKET은 여행 및 출장 중에도 택배배달을 통한 부업의 기회를 제공합니다.',
            'ecosystem_graph_title_3': '부가 서비스',
            'ecosystem_graph_desc_3': 'PAKET의 오픈된 택배 네트워크는 택배업 이외에도 보험, 배달협력, 택배경로 계산, 데이터 분석의 협업을 지원해줍니다. ',
            'ecosystem_graph_title_4': '오퍼티니스틱 허브',
            'ecosystem_graph_desc_4': '일상생활 중 사무실에서, 자택에서, 혹은 카페에서 택배배송의 증인활동을 통해 BUL토큰을 획득할 수 있습니다. 모든 사람이 \'오퍼티니스틱 허브\'활동에 참가할 수 있습니다.',
            'ecosystem_graph_title_5': '프로페셔널 허브',
            'ecosystem_graph_desc_5': '네트워크가 완전히 공개되어있고 분석가능하다면 구지 어느 지역에서 높은 택배의 수요가 발생하는지 식별 할 필요가 없을 것입니다. 전문 택배배달자의 수요를 충족시키기 위해 전문 허브를 구축하여 더 많은 고객을 유치할 수 있습니다.',
            'ecosystem_graph_title_6': '배송인과 수령인',
            'ecosystem_graph_desc_6': '블록체인과 스마트컨트랙트 및 법정화폐를 통해서 택배비를 지불하고자 하는 참여자',
            'team_title': '팀 구성',
            'team_desc': '풀타임으로 PAKET프로젝트에 참가하는 멤버의 리스트입니다. 이외에도 많은 서포터들이 본 프로젝트를 물심양면으로 지원해주시고 계십니다. ',
            'endorsements_title': 'PAKET 공식 서포터',
            'endorsements_desc': '지지문은 공식 서포터가 PAKET프로젝트를 공식적으로 지원하는 서한입니다. 아래의 버튼을 통해 확인하실 수 있습니다.',
            'endorsements_link': 'PAKET 지지문 읽기',
            'top_title': 'PAKET',
            'top_title2': 'PAKET',
            'top_desc': '글로벌 택배시장에 혁신을 일으키는 탈중앙화 택배 협업 플랫폼',
            'top_join_now': '토큰 세일 정보',
            'top_action_wp': '백서',
            'top_action_telegram': '텔레그램 채팅 참가',
            'footer_follow_title': '팔로우',
            'footer_privacy_policy': '개인정보 정책',
            'footer_copyright': '2017-2018 Paket Project LTD',
        },
    };

    $(document).ready(function(){
        var languageSelect = $('.language-select-wrapper').click(function(){
            $(this).toggleClass('open');
        });

        var languageOptions = languageSelect.find('li').click(function(clickEvent){
            var newLanguage = $(this).attr('data-lang');
            var languagesCascade = [DEFAULT_LANGUAGE];
            if(newLanguage !== DEFAULT_LANGUAGE){
                languagesCascade.push(newLanguage);
            }

            $.each(languagesCascade, function(idx, languageName){
                $.each(translations[languageName], function(key, value){
                    var translatedElement = $('#' + key);
                    if(translatedElement.length === 0){
                        console.error('No element for translation: ' + key + ' = ' + value);
                        return true;
                    }
                    if(!(key in translations[DEFAULT_LANGUAGE])){
                        translations[DEFAULT_LANGUAGE][key] = translatedElement.html();
                    }
                    translatedElement.html(value);
                });
            });

            languageOptions.removeClass('active');
            $(this).addClass('active');
        });
    });
}());
