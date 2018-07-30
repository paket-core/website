<?php

namespace TokenChef\IcoTemplate\Services;

class StaticArray
{
    const ROLE_ADMIN = 1;
    const ROLE_CLIENT = 2;
    const ROLE_REFERRAL = 3;

    const STATUS_JOIN = 0;
    const STATUS_SUBMITTED = 1;
    const STATUS_VERIFIED = 2;
    const STATUS_WHITELISTED = 3;
    const STATUS_INVESTED = 4;
    const STATUS_REJECTED = 5;

    const EMAIL_VERIFICATION_SEND = 1;
    const EMAIL_VERIFICATION_SEND_WITH_PASSWORD = 2;
    const EMAIL_VERIFICATION_CONFIRMED = 3;

    const TRANSACTION_STATUS_SUCCESS = 1;
    const TRANSACTION_STATUS_FAILED = 2;

    const INVESTING_STATUS_WAITING = 0;
    const INVESTING_STATUS_INVESTED = 1;

    const DEPOSIT_STATUS_NOT_CREATED = 0;
    const DEPOSIT_STATUS_CREATED = 1;
    const DEPOSIT_STATUS_CREATING = 2;

    const USER_FIELD_FIRST_NAME = 'first_name';
    const USER_FIELD_MID_NAME = 'mid_name';
    const USER_FIELD_LAST_NAME = 'last_name';
    const USER_FIELD_NAME = 'name';
    const USER_FIELD_EMAIL = 'email';
    const USER_FIELD_ADDRESS_1 = 'address_line_1';
    const USER_FIELD_ADDRESS_2 = 'address_line_2';
    const USER_FIELD_ADDRESS_3 = 'address_line_3';
    const USER_FIELD_BIRTHDAY_DATED = 'birthday_date';
    const USER_FIELD_COUNTRY = 'country';
    const USER_FIELD_CITY = 'city';
    const USER_FIELD_POSTAL = 'postal';
    const USER_FIELD_ETH_AMOUNT = 'eth_amount';
    const USER_FIELD_EHT_ADDRESS = 'address';
    const USER_FIELD_IDENTIFICATION = 'identification';
    const USER_FIELD_PHONE_NUMBER = 'phone_number';
    const USER_FIELD_PASSWORD = 'password';
    const USER_FIELD_CONFIRM_PASSWORD = 'confirm_password';

    const USER_FIELD_OLD_PASSWORD = 'old_password';
    const USER_FIELD_NEW_PASSWORD = 'new_password';
    const USER_FIELD_CONFIRM_NEW_PASSWORD = 'confirm_new_password';
    const USER_FIELD_VERIFICATION_PASSWORD = 'verification_password';
    const USER_FIELD_SUBSCRIPTION_AGREEMENT = 'subscription_agreement';
    const USER_FIELD_TERMS_AND_CONDITIONS = 'terms_and_conditions';
    const USER_FIELD_PRIVACY_POLICY = 'privacy_policy';
    const USER_FIELD_CAPTCHA = 'captcha';

    const USER_FIELD_DEPOSIT_PASSWORD = 'deposit_password';
    const USER_FIELD_DEPOSIT_PASSWORD_CONFIRMATION = 'deposit_password_confirmation';
    const USER_FIELD_OWN_ETH_ADDRESS = 'own_eth_address';
    const USER_FIELD_FIAT_FORM_EMAIL_ADDRESS = 'fiat_form_email_address';
    const USER_FIELD_FIAT_FORM_AMOUNT = 'fiat_form_amount';
    const USER_FIELD_OWN_BTC_ADDRESS = 'own_btc_address';

    const SELECT_COUNTRY_FIELD = 'select_country';
    const USER_FIELD_NEWSLETTER_EMAIL = 'newsletter_email';

    const USER_FIELDS = [
        self::USER_FIELD_FIRST_NAME,
        self::USER_FIELD_MID_NAME,
        self::USER_FIELD_LAST_NAME,
        self::USER_FIELD_NAME,
        self::USER_FIELD_EMAIL,
        self::USER_FIELD_ADDRESS_1,
        self::USER_FIELD_ADDRESS_2,
        self::USER_FIELD_ADDRESS_3,
        self::USER_FIELD_BIRTHDAY_DATED,
        self::USER_FIELD_COUNTRY,
        self::USER_FIELD_CITY,
        self::USER_FIELD_POSTAL,
        self::USER_FIELD_ETH_AMOUNT,
        self::USER_FIELD_EHT_ADDRESS,
        self::USER_FIELD_IDENTIFICATION,
        self::USER_FIELD_PHONE_NUMBER,
        self::USER_FIELD_PASSWORD,
        self::USER_FIELD_CONFIRM_PASSWORD,
        self::USER_FIELD_SUBSCRIPTION_AGREEMENT,
        self::USER_FIELD_TERMS_AND_CONDITIONS,
    ];

    const CUSTOM_ICO_FIELD_WHITELISTING_ENABLED = 'whitelisting_enabled';
    const CUSTOM_ICO_JOINING_ENABLED = 'joining_enabled';
    const CUSTOM_ICO_INVESTING_ENABLED = 'investing_enabled';
    const CUSTOM_ICO_FIAT_ENABLED = 'fiat_investing_enabled';

    const CUSTOM_ICO_FIELDS = [
        self::CUSTOM_ICO_FIELD_WHITELISTING_ENABLED,
        self::CUSTOM_ICO_JOINING_ENABLED,
        self::CUSTOM_ICO_INVESTING_ENABLED,
        self::CUSTOM_ICO_FIAT_ENABLED,
    ];

    const ICO_FIELD_KIND_JOIN = 1;
    const ICO_FIELD_KIND_REGISTER = 2;
    const ICO_FIELD_KIND_OTHERS = 3;
    const ICO_FIELD_KIND_LOGIN = 4;

    const ICO_FIELD_VALUE_REQUIRED = 'required';
    const ICO_FIELD_VALUE_OPTIONAL = 'optional';

    const REFERRAL_ID = 'referral_id';
    const SALT_LENGTH = 16;

    const USER_EVENT_VERIFICATION_EMAIL = 1;
    const USER_EVENT_VERIFICATION_EMAIL_SUCCESS = 2;
    const USER_EVENT_VERIFICATION_EMAIL_FAIL = 3;
    const USER_EVENT_VERIFICATION_EMAIL_CONFIRMED = 4;

    const USER_EVENT_PASSWORD_RESET_EMAIL = 6;
    const USER_EVENT_PASSWORD_RESET_EMAIL_SUCCESS = 7;
    const USER_EVENT_PASSWORD_RESET_EMAIL_FAIL = 8;
    const USER_EVENT_PASSWORD_RESET_UPDATE = 9;

    const USER_EVENT_REJECT_EMAIL_SUCCESS = 26;
    const USER_EVENT_REJECT_EMAIL_FAIL = 27;
    const USER_EVENT_REJECT_EMAIL = 24;

    const USER_EVENT_INVESTED = 40;
    const USER_EVENT_INVESTED_EMAIL = 41;
    const USER_EVENT_INVESTED_EMAIL_FAIL = 42;

    const USER_EVENT_RECEIVER_UPDATE = 43;
    const USER_EVENT_RECEIVER_UPDATE_EMAIL = 44;
    const USER_EVENT_RECEIVER_UPDATE_EMAIL_FAIL = 45;

    const USER_EVENT_DEPOSIT_CREATED = 46;
    const USER_EVENT_DEPOSIT_CREATED_EMAIL = 47;
    const USER_EVENT_DEPOSIT_CREATED_EMAIL_FAIL = 48;
    const USER_EVENT_OWN_DEPOSIT_USED = 49;

    const USER_EVENT_APPROVED = 50;
    const USER_EVENT_APPROVED_EMAIL = 51;
    const USER_EVENT_APPROVED_EMAIL_FAIL = 52;

    const USER_EVENT_INVESTED_WITH_DEPOSIT = 61;
    const USER_EVENT_WHITELISTING = 62;
    const USER_EVENT_WHITELISTED = 63;

    const USER_EVENT_SIMPLE_EMAIL = 70;
    const USER_EVENT_SIMPLE_EMAIL_FAIL = 71;

    const USER_EVENT_INVITATION_EMAIL = 81;
    const USER_EVENT_INVITATION_EMAIL_FAIL = 82;
    const USER_EVENT_FIAT_PAYMENT_CHOSEN = 83;

    const USER_EVENT_GENERATED_BTC_DEPOSIT_USED = 90;
    const USER_EVENT_GENERATED_ETH_DEPOSIT_USED = 91;

    const EVENTS_LIST = [

        self::USER_EVENT_VERIFICATION_EMAIL => 'user_event_verification_email',
        self::USER_EVENT_VERIFICATION_EMAIL_SUCCESS => 'user_event_verification_email_success',
        self::USER_EVENT_VERIFICATION_EMAIL_FAIL => 'user_event_verification_email_fail',
        self::USER_EVENT_VERIFICATION_EMAIL_CONFIRMED => 'user_event_verification_email_confirmed',

        self::USER_EVENT_PASSWORD_RESET_EMAIL => 'user_event_password_reset',
        self::USER_EVENT_PASSWORD_RESET_EMAIL_SUCCESS => 'user_event_password_reset_success',
        self::USER_EVENT_PASSWORD_RESET_EMAIL_FAIL => 'user_event_password_reset_fail',
        self::USER_EVENT_PASSWORD_RESET_UPDATE => 'user_event_password_reset_update',
    ];

    const EMAIL_DELAY = 10;

    const ICO_FIELD_FORGOTTEN_PASSWORD = 'forgotten_password_email';
    const ICO_FIELD_RESET_PASSWORD = 'reset_password';

    const DOCUMENT_LINKS = [
        self::USER_FIELD_SUBSCRIPTION_AGREEMENT => '/pdf/subscription_agreement.pdf',
        self::USER_FIELD_TERMS_AND_CONDITIONS => '/terms-and-conditions',
        self::USER_FIELD_PRIVACY_POLICY => '/privacy-policy'
    ];

    const INVEST_CHECK_WAIT = 'check_amount_time';
    const INVEST_CHECK_WAIT_TIME = 300;

    const ETH_TO_TOKENS_RATE = 100;
    const TOKENS_NAME = 'Tokens';

//    const SUPPORTED_LANGUAGES = ['de', 'es', 'fr', 'pt', 'cn', 'jp','ru];
    const SUPPORTED_LANGUAGES = ['cn', 'ko', 'pl', 'ru'];
    const WP_LANGUAGES = ['en'];
    const FS_LANGUAGES = ['en'];

    const SUPPORTED_LANGUAGES_LONG = [
        'cz' => 'Czech',
        'cn' => 'Chinese',
        'es' => 'Spanish',
        'lt' => 'Lithuania',
        'it' => 'Italian',
        'he' => 'Hebrew',
        'se' => 'Swedish',
        'en' => 'English',
        'us' => 'English',
        'pl' => 'Polish',
        'ko' => 'Korean',
        'de' => 'German',
        'bg' => 'Bulgarian',
        'hr' => 'Croatian',
        'gr' => 'Greece',
        'hu' => 'Hungarian',
        'fr' => 'French',
        'nl' => 'Dutch',
        'no' => 'Norwegian',
        'ee' => 'Estonian',
        'pt' => 'Portuguese',
        'ua' => 'Ukrainian',
        'ru' => 'Russian',
        'tw' => 'Chinese',
        'id' => 'Indonesian',
        'fil' => 'Filipino',
        'in' => 'Hindi',
        'arb' => 'Arabic',
        'pk' => 'Urdu',
        'vn' => 'Vietnam',
        'jp' => 'Japan'
    ];

    const PERIOD_LAST_WEEK = 'last_week';
    const PERIOD_LAST_MONTH = 'last_month';
    const PERIOD_TOTAL = 'total';

    const PERIODS = [
        self::PERIOD_LAST_WEEK => 'ico-template::home.period_last_week',
        self::PERIOD_LAST_MONTH => 'ico-template::home.period_last_month',
        self::PERIOD_TOTAL => 'ico-template::home.period_total'
    ];

    const ALL_CODES = 'all';

    const INVITATION_PER_HOUR = 10;
    const ETH_KIND_NOT_SET = 0;
    const ETH_KIND_OWN = 1;
    const ETH_KIND_DEPOSIT = 2;
    const ETH_KIND_FIAT = 3;

    const ETH_KIND_BTC_DEPOSIT = 5;
    const ETH_KIND_ETH_DEPOSIT = 6;

    const WHITELISTING_STATUS_NOT = 0;
    const WHITELISTING_STATUS_PENDING = 1;
    const WHITELISTING_STATUS_DONE = 2;

    const FIAT_INVEST_STATUS_PENDING = 0;
    const FIAT_INVEST_STATUS_ACCEPTED = 1;
    const FIAT_INVEST_STATUS_REJECTED = 2;
    const FIAT_INVEST_STATUS_PAID = 3;

    const FIAT_INVEST_STATUS_ARRAY = [
        self::FIAT_INVEST_STATUS_PENDING => 'Pending',
        self::FIAT_INVEST_STATUS_ACCEPTED => 'Accepted',
        self::FIAT_INVEST_STATUS_REJECTED => 'Rejected',
        self::FIAT_INVEST_STATUS_PAID => 'Paid',
    ];

    const BTC_INVEST_STATUS_PENDING = 0;
    const BTC_INVEST_STATUS_PAID = 1;

    const BTC_INVEST_STATUS_ARRAY = [
        self::BTC_INVEST_STATUS_PENDING => 'Pending',
        self::BTC_INVEST_STATUS_PAID => 'Paid'
    ];

    const CRYPTO_DEPOSIT_KIND_ETH = 0;
    const CRYPTO_DEPOSIT_KIND_BTC = 1;

    const CRYPTO_DEPOSIT_KIND_INVEST_STATUS_PENDING = 0;
    const CRYPTO_DEPOSIT_KIND_INVEST_STATUS_PAID = 1;

    const FIAT_SELECT_VALUE_1 = '€25,000 - €50,000';
    const FIAT_SELECT_VALUE_2 = '€50,000 - €100,000';
    const FIAT_SELECT_VALUE_3 = '€100,00 - €200,000';
    const FIAT_SELECT_VALUE_4 = '€200,000 - €500,000';
    const FIAT_SELECT_VALUE_5 = '€500,000 - €1,000,000';
    const FIAT_SELECT_VALUE_6 = 'More than €1,000,000';

    const FIAT_SELECT_VALUES = [
        self::FIAT_SELECT_VALUE_1,
        self::FIAT_SELECT_VALUE_2,
        self::FIAT_SELECT_VALUE_3,
        self::FIAT_SELECT_VALUE_4,
        self::FIAT_SELECT_VALUE_5,
        self::FIAT_SELECT_VALUE_6
    ];

    const USER_DEPOSIT_KIND_ETH = 1;
    const USER_DEPOSIT_KIND_BTC = 2;
    const USER_DEPOSIT_KIND_FIAT = 3;

    const USER_DEPOSIT_ETH_KIND_OWN = 1;
    const USER_DEPOSIT_ETH_KIND_PRIVATE = 2;
    const USER_DEPOSIT_ETH_KIND_DEPOSIT = 3;

    const USER_DEPOSIT_STATUS_PENDING = 1;
    const USER_DEPOSIT_STATUS_WHITELISTED = 2;
    const USER_DEPOSIT_STATUS_READY = 3;
    const USER_DEPOSIT_STATUS_PAID = 4;
    const USER_DEPOSIT_STATUS_ACCEPTED = 5;
    const USER_DEPOSIT_STATUS_REJECTED = 6;

    const TOKEN_SALE_KIND_PUBLIC = 0;
    const TOKEN_SALE_KIND_PRIVATE = 1;

    const TELEGRAM_URL = 'https://t.me/joinchat/G9T-tkXBHHNnpQ8oYFGSvw';

}