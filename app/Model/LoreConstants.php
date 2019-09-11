<?php
/**
 * Created by PhpStorm.
 * User: zdenda
 * Date: 11.9.2019
 * Time: 16:34
 */

namespace App\Model;

/**
 * All lore-related constants (name, worlds, genders, ...) should be placed here.
 *
 * @package App\Model
 */
class LoreConstants
{
    // worlds
    const FERAl_WORLD = 'Feral World';
    const HIVE_WORLD = 'Hive World';
    const IMPERIAL_WORLD = 'Imperial World';
    const VOID_BORN_WORLD = 'Void Born';

    // genders
    const MALE_GENDER = 'Male';
    const FEMALE_GENDER = 'Female';

    const DIVINATIONS = [
        "Mutation without, corruption within.",
        "Only the insane have strength enough to prosper. Only those who prosper may judge what is sane.",
        "Sins hidden in the heart turn all to decay.",
        "Innocence is an illusion.",
        "Dark dreams lie upon the heart.",
        "The pain of the bullet is ecstasy compared to damnation.",
        "Kill the alien before it can speak its lies.",
        "Truth is subjective.",
        "Know the mutant; kill the mutant.",
        "Even a man who has nothing can still offer his life.",
        "If a job is worth doing it is worth dying for.",
        "Only in death does duty end.",
        "A mind without purpose will wander in dark places.",
        "There are no civilians in the battle for survival.",
        "Violence solves everything.",
        "To war is human.",
        "Die if you must, but not with your spirit broken.",
        "The gun is mightier than the sword.",
        "Be a boon to your brothers and bane to your enemies.",
        "Men must die so that Man endures.",
        "In the darkness, follow the light of Terra.",
        "The only true fear is of dying with your duty not done.",
        "Thought begets Heresy; Heresy begets Retribution.",
        "The wise man learns from the deaths of others.",
        "A suspicious mind is a healthy mind.",
        "Trust in your fear.",
        "There is no substitute for zeal.",
        "Do not ask why you serve. Only ask how."
    ];

    /**
     * Contains names for each gender.
     *
     * NAMES_BY_GENDER[$gender] => [[primitive names], [low names], [ancient names], [informal names]]
     */
    const NAMES_BY_GENDER = [
        LoreConstants::MALE_GENDER => [
                [
                    "Arl",
                    "Bruul",
                    "Dar",
                    "Frak",
                    "Fral",
                    "Garm",
                    "Grish",
                    "Grak",
                    "Hak",
                    "Jarr",
                    "Kar",
                    "Kaarl",
                    "Krell",
                    "Lek",
                    "Mar",
                    "Mir",
                    "Narl",
                    "Orl",
                    "Phrenz",
                    "Quarl",
                    "Roth",
                    "Ragaa",
                    "Stig",
                    "Strang",
                    "Thak",
                    "Ulth",
                    "Varn",
                    "Wrax",
                    "Yarn",
                    "Zek"
                ],
                [
                    "Barak",
                    "Cain",
                    "Dariel",
                    "Eli",
                    "Enoch",
                    "Frastus",
                    "Gaius",
                    "Garvel",
                    "Hastus",
                    "Ignace",
                    "Ishmael",
                    "Jericus",
                    "Klightus",
                    "Lazerus",
                    "Mordeci",
                    "Mithras",
                    "Nicodemus",
                    "Pontius",
                    "Quint",
                    "Rabalias",
                    "Reestheus",
                    "Silvanus",
                    "Solomon",
                    "Thaddius",
                    "Titus",
                    "Uriah",
                    "Varnias",
                    "Xerxes",
                    "Zaddion",
                    "Zuriel"
                ],
                [
                    "Atellus",
                    "Brutis",
                    "Callidon",
                    "Castus",
                    "Drustos",
                    "Flavion",
                    "Gallus",
                    "Haxtes",
                    "Intios",
                    "Jastilus",
                    "Kaltos",
                    "Litilus",
                    "Lupus",
                    "Mallear",
                    "Metalus",
                    "Nihilius",
                    "Novus",
                    "Octus",
                    "Praetus",
                    "Quintos",
                    "Raltus",
                    "Ravion",
                    "Regis",
                    "Severus",
                    "Silon",
                    "Tauron",
                    "Trantor",
                    "Venris",
                    "Victus",
                    "Xanthis"
                ],
                [
                    "Alaric",
                    "Attilas",
                    "Barbosa",
                    "Cortez",
                    "Constantine",
                    "Cromwell",
                    "Dorn",
                    "Drake",
                    "Eisen",
                    "Ferrus",
                    "Grendel",
                    "Guilliman",
                    "Havelock",
                    "Iacton",
                    "Jaghatai",
                    "Khan",
                    "Leman",
                    "Lionus",
                    "Magnus",
                    "Mercutio",
                    "Nixios",
                    "Ramirez",
                    "Serghar",
                    "Sigismund",
                    "Tybalt",
                    "Vern",
                    "Wolfe",
                    "Wollsey",
                    "Zane",
                    "Zarkov"
                ],
                [
                    "Able",
                    "Bones",
                    "Crisis",
                    "Cutter",
                    "Dekko",
                    "Dakka",
                    "Frag",
                    "Flair",
                    "Finial",
                    "Grim",
                    "Gob",
                    "Gunner",
                    "Hack",
                    "Jakes",
                    "Krak",
                    "Lug",
                    "Mongrel",
                    "Plex",
                    "Rat",
                    "Red",
                    "Sawney",
                    "Scab",
                    "Scammer",
                    "Skive",
                    "Shanks",
                    "Shiv",
                    "Sham",
                    "Stern",
                    "Stubber",
                    "Verbal"
                ]
            ],
        LoreConstants::FEMALE_GENDER => [
            [
                "Arla",
                "Brulla",
                "Darl",
                "Fraka",
                "Fraal",
                "Garma",
                "Grisha",
                "Graki",
                "Haka",
                "Jarra",
                "Karna",
                "Kaarli",
                "Krella",
                "Lekka",
                "Marlla",
                "Mira",
                "Narla",
                "Orla",
                "Phrix",
                "Quali",
                "Rotha",
                "Ragaana",
                "Stigga",
                "Stranga",
                "Thakka",
                "Ultha",
                "Varna",
                "Wraxa",
                "Yarni",
                "Zekka"
            ],
            [
                "Akadia",
                "Chaldia",
                "Cyrine",
                "Diona",
                "Deatrix",
                "Ethina",
                "Ephrael",
                "Fenria",
                "Gaia",
                "Galatia",
                "Hazael",
                "Isha",
                "Ishta",
                "Jedia",
                "Judicca",
                "Lyra",
                "Magdela",
                "Narcia",
                "Ophilia",
                "Phebia",
                "Qualia",
                "Rhia",
                "Salomis",
                "Solaria",
                "Thyratia",
                "Thebe",
                "Uriel",
                "Veyda",
                "Xantippe",
                "Ziapatra"
            ],
            [
                "Atella",
                "Brutilla",
                "Callidia",
                "Castella",
                "Drustilla",
                "Flavia",
                "Gallia",
                "Haxta",
                "Intias",
                "Jestilla",
                "Kalta",
                "Litila",
                "Lupa",
                "Mallia",
                "Meta",
                "Nihila",
                "Novia",
                "Octia",
                "Praetia",
                "Quintilla",
                "Raltia",
                "Ravia",
                "Regia",
                "Scythia",
                "Sila",
                "Taura",
                "Trantia",
                "Venria",
                "Xanthia",
                "Zethina"
            ],
            [
                "Aenid",
                "Albia",
                "Borgia",
                "Cimbria",
                "Devi",
                "Ephese",
                "Euphrati",
                "Inez",
                "Imperatrice",
                "Jemadar",
                "Jezail",
                "Joss",
                "Kadis",
                "Kali",
                "Lethe",
                "Mae",
                "Millicent",
                "Merica",
                "Midkiff",
                "Megehra",
                "Odessa",
                "Orlean",
                "Plath",
                "Severine",
                "Thiopia",
                "Thrace",
                "Tzarine",
                "Venus",
                "Walperga",
                "Zetkin"
            ],
            [
                "Alpha",
                "Blaze",
                "Blue",
                "Cat",
                "Calamity",
                "Dame",
                "Dice",
                "Flair",
                "Gold",
                "Gunner",
                "Hack",
                "Halo",
                "Lady",
                "Luck",
                "Modesty",
                "Moll",
                "Pistol",
                "Plex",
                "Pris",
                "Rat",
                "Red",
                "Ruby",
                "Scarlet",
                "Spike",
                "Steel",
                "Starr",
                "Trauma",
                "Trick",
                "Trix",
                "Zee"
            ]
    ]
    ];

    /**
     * Boundaries for name rolls. If your roll is < than boundary, use name with the same index as the boundary.
     */
    const NAME_ROLL_BOUNDARIES = [4,7,10,14,17,21,24,28,31,34,38,41,45,48,51,55,58,61,64,67,70,73,76,80,83,86,90,94,97,101];

    /**
     * If your roll is lower than the min roll, use that world.
     *
     * $minRoll => WORLD
     */
    const WORLD_ROLLS = [
        21 => LoreConstants::FERAl_WORLD,
        46 => LoreConstants::HIVE_WORLD,
        91 => LoreConstants::IMPERIAL_WORLD,
        101 => LoreConstants::VOID_BORN_WORLD
    ];

    /**
     * Ages and their descriptions for worlds and rolls.
     * AGE_BY_WORLDS[$home_world] contains array with structure $rollNum => [$baseAge, $description]
     * If your roll is < $rollNum, then use given [$baseAge, $description] tuple.
     */
    const AGE_BY_WORLDS = [
        LoreConstants::FERAl_WORLD => [
            71 => [15, 'Warrior'],
            101 => [25, 'Old One']
        ],
        LoreConstants::HIVE_WORLD => [
            31 => [15, 'Nipper'],
            91 => [25, 'Adult'],
            101 => [35, 'Old Timer']
        ],
        LoreConstants::IMPERIAL_WORLD => [
            51 => [20, 'Stripling'],
            81 => [30, 'Mature'],
            101 => [40, 'Veteran']
        ],
        LoreConstants::VOID_BORN_WORLD => [
            41 => [15, 'Youth'],
            71 => [20, 'Mature'],
            101 => [50, 'Methuselah']
        ]
    ];

    /**
     * Use this field to return various build types (in terms of appearance) for given world.
     * BUILD_BY_WORLDS[$home_world] will return array of possible builds for that world.
     * Each build type contains description and male/female proportion (height and weight).
     */
    const BUILD_BY_WORLDS = [
        LoreConstants::FERAl_WORLD => [
            ['description' => 'Rangy',
                LoreConstants::MALE_GENDER => ['height' => 1.9, 'weight' => 65],
                LoreConstants::FEMALE_GENDER => ['height' => 1.8, 'weight' => 60]
            ],
            ['description' => 'Lean',
                LoreConstants::MALE_GENDER => ['height' => 1.75, 'weight' => 60],
                LoreConstants::FEMALE_GENDER => ['height' => 1.65, 'weight' => 55]
            ],
            ['description' => 'Muscular',
                LoreConstants::MALE_GENDER => ['height' => 1.85, 'weight' => 85],
                LoreConstants::FEMALE_GENDER => ['height' => 1.7, 'weight' => 70]
            ],
            ['description' => 'Squat',
                LoreConstants::MALE_GENDER => ['height' => 1.65, 'weight' => 80],
                LoreConstants::FEMALE_GENDER => ['height' => 1.55, 'weight' => 70]
            ],
            ['description' => 'Strapping',
                LoreConstants::MALE_GENDER => ['height' => 2.1, 'weight' => 120],
                LoreConstants::FEMALE_GENDER => ['height' => 2.0, 'weight' => 100]
            ]
        ],
        LoreConstants::HIVE_WORLD => [
            ['description' => 'Runt',
                LoreConstants::MALE_GENDER => ['height' => 1.6, 'weight' => 45],
                LoreConstants::FEMALE_GENDER => ['height' => 1.55, 'weight' => 40]
            ],
            ['description' => 'Scrawny',
                LoreConstants::MALE_GENDER => ['height' => 1.70, 'weight' => 55],
                LoreConstants::FEMALE_GENDER => ['height' => 1.60, 'weight' => 50]
            ],
            ['description' => 'Wiry',
                LoreConstants::MALE_GENDER => ['height' => 1.75, 'weight' => 65],
                LoreConstants::FEMALE_GENDER => ['height' => 1.65, 'weight' => 55]
            ],
            ['description' => 'Lanky',
                LoreConstants::MALE_GENDER => ['height' => 1.80, 'weight' => 65],
                LoreConstants::FEMALE_GENDER => ['height' => 1.70, 'weight' => 60]
            ],
            ['description' => 'Brawny',
                LoreConstants::MALE_GENDER => ['height' => 1.75, 'weight' => 80],
                LoreConstants::FEMALE_GENDER => ['height' => 1.65, 'weight' => 75]
            ]
        ],
        LoreConstants::IMPERIAL_WORLD => [
            ['description' => 'Slender',
                LoreConstants::MALE_GENDER => ['height' => 1.75, 'weight' => 65],
                LoreConstants::FEMALE_GENDER => ['height' => 1.65, 'weight' => 60]
            ],
            ['description' => 'Svelte',
                LoreConstants::MALE_GENDER => ['height' => 1.85, 'weight' => 70],
                LoreConstants::FEMALE_GENDER => ['height' => 1.75, 'weight' => 65]
            ],
            ['description' => 'Fit',
                LoreConstants::MALE_GENDER => ['height' => 1.75, 'weight' => 70],
                LoreConstants::FEMALE_GENDER => ['height' => 1.65, 'weight' => 60]
            ],
            ['description' => 'Well-built',
                LoreConstants::MALE_GENDER => ['height' => 1.90, 'weight' => 90],
                LoreConstants::FEMALE_GENDER => ['height' => 1.80, 'weight' => 80]
            ],
            ['description' => 'Stocky',
                LoreConstants::MALE_GENDER => ['height' => 1.80, 'weight' => 100],
                LoreConstants::FEMALE_GENDER => ['height' => 1.70, 'weight' => 90]
            ]
        ],
        LoreConstants::VOID_BORN_WORLD => [
            ['description' => 'Skeletal',
                LoreConstants::MALE_GENDER => ['height' => 1.75, 'weight' => 55],
                LoreConstants::FEMALE_GENDER => ['height' => 1.7, 'weight' => 50]
            ],
            ['description' => 'Stunted',
                LoreConstants::MALE_GENDER => ['height' => 1.65, 'weight' => 55],
                LoreConstants::FEMALE_GENDER => ['height' => 1.55, 'weight' => 45]
            ],
            ['description' => 'Gaunt',
                LoreConstants::MALE_GENDER => ['height' => 1.80, 'weight' => 60],
                LoreConstants::FEMALE_GENDER => ['height' => 1.75, 'weight' => 60]
            ],
            ['description' => 'Gangling',
                LoreConstants::MALE_GENDER => ['height' => 2.0, 'weight' => 80],
                LoreConstants::FEMALE_GENDER => ['height' => 1.85, 'weight' => 70]
            ],
            ['description' => 'Spindly',
                LoreConstants::MALE_GENDER => ['height' => 2.1, 'weight' => 75],
                LoreConstants::FEMALE_GENDER => ['height' => 1.95, 'weight' => 70]
            ]
        ]
    ];

}