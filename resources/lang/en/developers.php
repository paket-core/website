<?php

return [

    /*
    | Translations for landing page
    |
    */
    'top_title' => "For Developers",
    'top_title_down' => "Introduction",
    'list_desc' => 'As a project that revolves around decentralization, PAKET uses and produces free, libre and open-source software. The PAKET protocol is open and the PAKET network if fully transparent. We believe that everyone stands to profit from more and more players joining the ecosystem and enriching it, so we wish to make it as easy and simple as possible to hop on the wagon and join in on the ride.',
    'list_item_1' => '– Wanna get your hands dirty? Just dive in and write some code? Follow our quickstart guide and set up the basic environment to participate in the PAKET network.',
    'list_item_2' => '– Wanna play around with a sandbox environment? Check out our API page, full of deliciously documented API calls you can try right off your browser.',
    'list_item_3' => '– Wanna understand how things work? Read about our architecture.',
    'list_item_4' => '– Wanna see how things work for yourself? View our different projects (contracts, bridge servers, and mobile apps) on our github page, as well as other projects that connect to the PAKET network, and maybe even contribute some code and add your own project to the list.',
    'list_item_5' => '– Wanna talk to other developers? Get help? Seek advice? Join our dev community on Telegram, IRC, or on GalacticTalk.',

    'list_item_title_1' => 'Quickstart',
    'list_item_title_2' => 'Experiment',
    'list_item_title_3' => 'Architecture',
    'list_item_title_4' => 'Code',
    'list_item_title_5' => 'Community',

    'code_item_title_1' => 'Code',
    'code_item_title_2' => 'Community',
    'code_item_title_3' => 'Architecture',
    'code_item_title_4' => 'Get your hands dirty',

    'section_title_1' => 'Get Your Hands Dirty (Quickstart)',
    'section_title_2' => 'Developers Community',
    'section_title_3' => 'Architecture',
    'section_title_4' => 'Source code',

    'section_desc_1' => 'The PAKET protocol is fully decentralized and open, and you can use it directly over the :LINK public network. If you are familiar with Stellar and wish to take that route, simply head over to the Working with Stellar :LINK_2. Most developers, however, prefer to develop on a higher level. That\'s where the PAKET API server comes in.',
    'section_desc_1_link_2' => 'documentation',
    'section_desc_1_link' => 'Stellar',
    'section_desc_1_h_1' => 'Using the API',
    'section_desc_1_p_1' => ':LINK is a bridge, constructed from HTTP and JSON, between applications and the underlying PAKET protocol. To run your own instance of the PAKET API server just follow the instructions on the README page. To use the API you will need to meet the following requirements:',
    'section_desc_1_p_1_link' => 'The PAKET API server',
    'section_desc_1_p_1_li_1' => 'A funded Stellar account. Test network accounts can be created and funded with the Stellar :LINK',
    'section_desc_1_p_1_li_1_link' => 'account creator.',
    'section_desc_1_p_1_li_2' => 'A way to create a Stellar compatible :LINK keypairs (we use :LINK_2 Python package).',
    'section_desc_1_p_1_li_2_link' => 'ed25519',
    'section_desc_1_p_1_li_2_link_2' => 'the stellar-base',
    'section_desc_1_p_1_li_3' => 'A way to sign transactions and string data with such keypairs (we use the stellar-base Python package).',
    'section_desc_1_p_2' => 'Once you meet these three requirements, you can experiment with our endpoints from our live :LINK. To get right down to business and launch a package, just follow the walkthrough (pay close attention to the authentication process).',
    'section_desc_1_p_2_link' => 'API page',

    'section_desc_2_p_1' => 'Telegram',
    'section_desc_2_p_2' => 'Github',
    'section_desc_2_p_3' => 'Galactic Talk',

    'section_desc_3_top_desc' => 'The PAKET Protocol establishes trust and enables the cooperation between multiple parties on the safe and timely delivery of goods. For modularity and robustness, the protocol is divided into the following layers:',
    'section_desc_3_h_1' => 'Layer 0 - Trust',
    'section_desc_3_p_1' => 'This layer establishes a decentralized consensus regarding the conditional transfer of value, as well as an inspectable, immutable history of that consensus. Our current L0 is Stellar, so it is advised that you familiarize yourself with its basic workings. Especially Assets and the different Signer Types.',
    'section_desc_3_h_2' => 'Layer 1 - Token',
    'section_desc_3_p_2_1' => 'This layer defines the cryptographic tokens and the smart contracts which govern its behaviour.',
    'section_desc_3_p_2_2' => 'On the logical level, what we do is quite simple. For every package that a user wants to send (we call such a user a Launcher), we create an escrow into which the Launcher deposits his promised Payment. The escrow has a predefined Recipient and a predefined Courier, and once the Recipient confirms the receipt of the package, the Payment is released to the Courier. The escrow also had a predefined Deadline, and if the Courier fails to deliver the package to the Recipient by the time the Deadline passes, the escrow will release the Payment back to the Launcher as refund.',
    'section_desc_3_p_2_3' => 'In addition, the Launcher can demand that the Courier deposits a Collateral into the escrow, as a form of insurance for the package. Once the Recipient confirms the receipt of the package, the escrow will release the Collateral to the Courier along with the Payment, but if the Deadline passes before that, the escrow will pay the Collateral to the Launcher along with his refunded Payment.',
    'section_desc_3_p_2_4' => '',
    'section_desc_3_p_2_5' => 'The only remaining bit is the relay. A Courier who is given a package to transport can relay the package to another Courier, promising him a part of the Payment, to be paid only when the Recipient confirms the receipt of the package. The relaying Courier can also demand that the new Courier cover his Collateral, in which case the new Courier deposits the Collateral into the escrow (to be returned only upon successful delivery) and the relaying Courier is given his Collateral back.',
    'section_desc_3_h_3' => 'Layer 2 - Route',
    'section_desc_3_p_3_1' => 'This layer matches requirements of senders with capacity and cost of couriers, while providing a detailed and highly contextualized view into the supply and demand of the market. Our current implementation is very rough, but the fundamental idea is a p2p communication network that handles publication and matching of launcher requirements with courier capacities.',
    'section_desc_3_p_3_2' => 'Communication on the network is authenticated using the same keypairs from the two lower layers, which enables secure, robust, and simple pinning of identities through the layers.',
    'section_desc_3_h_4' => 'Layer 3 - Application',
    'section_desc_3_p_4' => 'This layer consolidates tools and applications that allow simple and intuitive usage of the network. It is in very early stages of development, and currently consists of only two projects:',
    'section_desc_3_p_4_li_1' => 'Bridge API server, to simplify programmatic usage of L1.',
    'section_desc_3_p_4_li_2' => 'Mobile app, to actually launch, courier, and receive packages.',
    'section_desc_3_h_5' => 'Layer 4 - Economy',
    'section_desc_3_p_5' => 'This layer builds organizations and services that thrive in the PAKET ecosystem and enrich it. We have some interesting plans regarding it, but no current implementations.',


    'section_desc_4_p_1' => 'Our API server - functioning as a bridge between :LINK servers and user applications.',
    'section_desc_4_p_1_link' => 'Stellar horizon',
    'section_desc_4_p_2' => 'Our funding server - providing tokens to those who wish to use them.',
    'section_desc_4_p_3' => 'The first mobile app - enabling simple, decentralized deliveries.',
    'section_desc_4_a_4' => 'Our branch of the stellar-core Python package',
    'section_desc_4_p_4' => '- we occasionally get the chance to contribute to the official Python package!',
];
?>
