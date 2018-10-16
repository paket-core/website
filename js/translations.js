(function(){
    'use strict';
    var translations = {
        en: {},
        he: {
            pagetitle: 'אנחנו פאקט',
            credo: 'ואללה ואללה',
        },
        pl: {
            'header_product_info': 'Informacje o Platformie',
            'header_our_team': 'Nasz Zespół',
            'header_token_sale': 'Sprzedaż tokenów',
            'header_for_developers': 'Deweloperzy',
            'header_my_account': 'Moje konto',
            'header_login': 'Zaloguj się',
            'media_title': 'MEDIA O NAS',
            'media_view_more': 'Zobacz więcej',
            'about_title': 'PAKET to my',
            'about_desc_1_li_1_title': 'Władza dla ludzi',
            'about_desc_1_li_2_title': 'Globalna społeczność',
            'about_desc_1_li_3_title': 'Zdecentralizowana Sieć',
            'about_desc_1_li_1': 'Wierzymy w przełamywanie monopoli i przekazywanie władzy w ręce, ,zwykłych obywateli".',
            'about_desc_1_li_2': 'Wierzymy, że technologia może zorganizować globalne społeczeństwo i prowadzić do współpracy bez żadnej centralnej władzy.',
            'about_desc_1_li_3': 'Stworzyliśmy otwarty protokół, na mocy którego każdy może wziąć udział w całkowicie zdecentralizowanej sieci globalnych przesyłek.',
            'about_desc_2': 'Bitcoin zrewolucjonizował przemysł płatniczy poprzez jego decentalizację. PAKET odpowiada na podobną potrzebę - przesyłki rzeczy w zdecentralizowany sposób. Naszym zdaniem stwarza to możliwość rozwiązania problemu w świecie rzeczywistym korzystając z technologii blockchain w najczystszej formie. Jest to realne rozwiązanie na wymianę fizycznych dóbr pomiędzy ludźmi bez żadnego centralnego ośrodka władzy zarządzającego procesem, co więcej przeważnie pobierającego przy tym znaczną opłatę.',
            'about_btn': 'Informacja o sprzedaży tokenów',
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
            'partners_title': 'Partnerzy',
            'partners_desc': '',
            'team_title': 'Nasz Zespół',
            'team_desc': 'Wielu ludzi wspiera nas w różny sposób. Dla niżej wymienionych Członków Zespołu praca w Projekcie PAKET jest ich główną działalnością. ',
            'endorsements_title': 'Wsparcie',
            'endorsements_desc': 'Jesteśmy bardzo wdzięczni wielu uznanym fachowcom, którzy od początku powstania naszej inicjatywy udzielali jej wsparcia. Szczególne, podziękowania składamy następującym liderom przemysłu za podpisanie listu z oficjalnym poparciem projektu PAKET. ',
            'endorsements_link': 'Oficjalny list poparcia, czytaj tutaj',
            'road_map_title': 'Plan Działania',
            'top_title': 'PAKET',
            'top_title2': 'PAKET',
            'top_desc': 'Zdecentralizowana sieć globalnych przesyłek',
            'play_video': 'Włącz nagranie',
            'top_join_now': 'Informacja o sprzedaży tokenów',
            'top_action_wp': 'White Paper',
            'top_action_telegram': 'Dołącz do naszego Telegramu',
            'join_our_community': 'Dołącz do naszej społeczności',
            'bottom_action_telegram': 'Dołącz do naszego Telegramu',
            'pre_sale_title': 'PUBLICZNA PRZEDSPREDAŻ',
            'pre_sale_learn_title': 'WIĘCEJ',
            'pre_sale_learn_desc': 'Od krótkiej infomacji do dołączenia do projektu PAKET',
            'pre_sale_learn_btn': 'Przeczytaj nasz Light - Paper',
            'pre_sale_learn_desc_2': 'Szczegółowy opis otwartego protokołu PAKET',
            'pre_sale_learn_btn_2': 'Przeczytaj nasz White - Paper',
            'pre_sale_updates_title': 'POZOSTAŃ NA BIEŻĄCO',
            'pre_sale_updates_desc': 'Aby regularnie otrzymywać od nas powiadomienia o zmianach w projekcie PAKET, zarejestruj swój adres e - mail',
            'pre_sale_updates_input': 'Wpisz swój e - mail',
            'footer_follow_title': 'POZOSTAŃ W KONTAKCIE',
            'footer_privacy_policy': 'Polityka prywatności',
            'footer_terms_of_sale': 'Warunki sprzedaży',
            'footer_copyright': '2017 - 2018 Paket Project LTD',

        },
    };

    $(document).ready(function(){
        $.each(translations, function(langName){
            var optionElement = new Option(langName, langName);
            $('#langselect').append(optionElement);
        });
        $('#langselect').change(function(changeEvent){
            var langCascade = ['en'];
            if(changeEvent.target.value !== 'en'){
                langCascade.push(changeEvent.target.value);
            }
            $.each(langCascade, function(idx, langName){
                $.each(translations[langName], function(key, value){
                    var el = $('#' + key);
                    if(el.length === 0){
                        return true;
                    }
                    if(!(key in translations.en)){
                        translations.en[key] = el.html();
                    }
                    el.html(value);
                });
            });
        });
    });
}());
