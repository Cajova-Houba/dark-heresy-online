<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

    <title>Generate new character</title>
</head>
<body>
    <div class="container">
        <h1>Dark Heresy</h1>
        <div class="row">
            <div class="col-4">
                <button class="btn btn-success" onclick="generatePlayer()">Generate new character</button>
            </div>
            <div class="col-4">
                <button class="btn btn-primary" onclick="playerToJson()">Export to json</button>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <h2>Player info</h2>
                <table class="wide-table-col">
                    <tr>
                        <td>Character Name</td>
                        <td><span id="characterName" class="font-weight-bold">{{ $character->character_name }}</span></td>
                    </tr>
                    <tr>
                        <td>Home World</td>
                        <td><span id="homeWorld" class="font-weight-bold">{{ $character->home_world }}</span></td>
                    </tr>
                    <tr>
                        <td>Career Path</td>
                        <td><span id="careerPath" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Rank</td>
                        <td><span id="rank" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Divination</td>
                        <td><span id="divination" class="font-weight-bold font-italic">{{ $character->divination }}</span></td>
                    </tr>
                    <tr>
                        <td>Quirk</td>
                        <td><span id="quirk" class="font-weight-bold">{{ $character->quirk }}</span></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><span id="gender" class="font-weight-bold"> {{ $character->gender }}</span></td>
                    </tr>
                    <tr>
                        <td>Build</td>
                        <td><span id="build" class="font-weight-bold">{{$character->build}}</span></td>
                    </tr>
                    <tr>
                        <td>Height</td>
                        <td><span id="height" class="font-weight-bold">{{$character->height}}</span> <span class="font-weight-bold">m</span></td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td><span id="weight" class="font-weight-bold">{{$character->weight}}</span> <span class="font-weight-bold">kg</span></td>
                    </tr>
                    <tr>
                        <td>Skin Colour</td>
                        <td><span id="skinColour" class="font-weight-bold">{{ $character->skin_colour }}</span></td>
                    </tr>
                    <tr>
                        <td>Hair Colour</td>
                        <td><span id="hairColour" class="font-weight-bold">{{$character->hair_colour}}</span></td>
                    </tr>
                    <tr>
                        <td>Eye Colour</td>
                        <td><span id="eyeColour" class="font-weight-bold">{{$character->eye_colour}}</span></td>
                    </tr>
                    <tr>
                        <td>Age</td>
                        <td><span id="age" class="font-weight-bold"> {{$character->age->description}} ({{ $character->age->age  }})</span></td>
                    </tr>
                </table>
            </div>
            <div class="col-6">
                <h2>Characteristics</h2>
                <table class="wide-table-col">
                    <tr>
                        <td>Weapon Skill</td>
                        <td><span id="weaponSkill" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Ballistic Skill</td>
                        <td><span id="ballisticSkill" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Strength</td>
                        <td><span id="strength" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Toughness</td>
                        <td><span id="toughness" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Agility</td>
                        <td><span id="agility" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Intelligence</td>
                        <td><span id="intelligence" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Perception</td>
                        <td><span id="perception" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Willpower</td>
                        <td><span id="willpower" class="font-weight-bold"></span></td>
                    </tr>
                    <tr>
                        <td>Fellowship</td>
                        <td><span id="fellowship" class="font-weight-bold"></span></td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <h2>Basic skills</h2>
                <table class="wide-table-col">
                    <tr>
                        <td></td>
                        <td>Skilled</td>
                        <td>+10</td>
                        <td>+20</td>
                    </tr>
                    <tr>
                        <td>Awareness</td>
                        <td id="Awareness0"></td>
                        <td id="Awareness1"></td>
                        <td id="Awareness2"></td>
                    </tr>
                    <tr>
                        <td>Barter</td>
                        <td id="Barter0"></td>
                        <td id="Barter1"></td>
                        <td id="Barter2"></td>
                    </tr>
                    <tr>
                        <td>Carouse</td>
                        <td id="Carouse0"></td>
                        <td id="Carouse1"></td>
                        <td id="Carouse2"></td>
                    </tr>
                    <tr>
                        <td>Charm</td>
                        <td id="Charm0"></td>
                        <td id="Charm1"></td>
                        <td id="Charm2"></td>
                    </tr>
                    <tr>
                        <td>Climb</td>
                        <td id="Climb0"></td>
                        <td id="Climb1"></td>
                        <td id="Climb2"></td>
                    </tr>
                    <tr>
                        <td>Command</td>
                        <td id="Command0"></td>
                        <td id="Command1"></td>
                        <td id="Command2"></td>
                    </tr>
                    <tr>
                        <td>Concealment</td>
                        <td id="Concealment0"></td>
                        <td id="Concealment1"></td>
                        <td id="Concealment2"></td>
                    </tr>
                    <tr>
                        <td>Contortionist</td>
                        <td id="Contortionist0"></td>
                        <td id="Contortionist1"></td>
                        <td id="Contortionist2"></td>
                    </tr>
                    <tr>
                        <td>Deceive</td>
                        <td id="Deceive0"></td>
                        <td id="Deceive1"></td>
                        <td id="Deceive2"></td>
                    </tr>
                    <tr>
                        <td>Disguise</td>
                        <td id="Disguise0"></td>
                        <td id="Disguise1"></td>
                        <td id="Disguise2"></td>
                    </tr>
                    <tr>
                        <td>Dodge</td>
                        <td id="Dodge0"></td>
                        <td id="Dodge1"></td>
                        <td id="Dodge2"></td>
                    </tr>
                    <tr>
                        <td>Evaluate</td>
                        <td id="Evaluate0"></td>
                        <td id="Evaluate1"></td>
                        <td id="Evaluate2"></td>
                    </tr>
                    <tr>
                        <td>Gamble</td>
                        <td id="Gamble0"></td>
                        <td id="Gamble1"></td>
                        <td id="Gamble2"></td>
                    </tr>
                    <tr>
                        <td>Inquiry</td>
                        <td id="Inquiry0"></td>
                        <td id="Inquiry1"></td>
                        <td id="Inquiry2"></td>
                    </tr>
                    <tr>
                        <td>Intimidate</td>
                        <td id="Intimidate0"></td>
                        <td id="Intimidate1"></td>
                        <td id="Intimidate2"></td>
                    </tr>
                    <tr>
                        <td>Logic</td>
                        <td id="Logic0"></td>
                        <td id="Logic1"></td>
                        <td id="Logic2"></td>
                    </tr>
                    <tr>
                        <td>Scrutiny</td>
                        <td id="Scrutiny0"></td>
                        <td id="Scrutiny1"></td>
                        <td id="Scrutiny2"></td>
                    </tr>
                    <tr>
                        <td>Search</td>
                        <td id="Search0"></td>
                        <td id="Search1"></td>
                        <td id="Search2"></td>
                    </tr>
                    <tr>
                        <td>Silent Move</td>
                        <td id="SilentMove0"></td>
                        <td id="SilentMove1"></td>
                        <td id="SilentMove2"></td>
                    </tr>
                    <tr>
                        <td>Swim</td>
                        <td id="Swim0"></td>
                        <td id="Swim1"></td>
                        <td id="Swim2"></td>
                    </tr>
                </table>
            </div>

            <div class="col-6">
                <h2>Advanced skills</h2>
                <table class="wide-table-col">
                    <tr>
                        <td></td>
                        <td class="font-italic"></td>
                        <td>Skilled</td>
                        <td>+10</td>
                        <td>+20</td>
                    </tr>
                    <tr>
                        <td>Acrobatics</td>
                        <td id="AcrobaticsDetail" class="font-italic"></td>
                        <td id="Acrobatics0"></td>
                        <td id="Acrobatics1"></td>
                        <td id="Acrobatics2"></td>
                    </tr>
                    <tr>
                        <td>Blather</td>
                        <td id="BlatherDetail" class="font-italic"></td>
                        <td id="Blather0"></td>
                        <td id="Blather1"></td>
                        <td id="Blather2"></td>
                    </tr>
                    <tr>
                        <td>Chem-Use</td>
                        <td id="ChemUseDetail" class="font-italic"></td>
                        <td id="ChemUse0"></td>
                        <td id="ChemUse1"></td>
                        <td id="ChemUse2"></td>
                    </tr>
                    <tr>
                        <td>Ciphers</td>
                        <td id="CiphersDetail" class="font-italic"></td>
                        <td id="Ciphers0"></td>
                        <td id="Ciphers1"></td>
                        <td id="Ciphers2"></td>
                    </tr>
                    <tr>
                        <td>Common Lore</td>
                        <td id="CommonLoreDetail" class="font-italic"></td>
                        <td id="CommonLore0"></td>
                        <td id="CommonLore1"></td>
                        <td id="CommonLore2"></td>
                    </tr>
                    <tr>
                        <td>Demolition</td>
                        <td id="DemolitionDetail" class="font-italic"></td>
                        <td id="Demolition0"></td>
                        <td id="Demolition1"></td>
                        <td id="Demolition2"></td>
                    </tr>
                    <tr>
                        <td>Drive</td>
                        <td id="DriveDetail" class="font-italic"></td>
                        <td id="Drive0"></td>
                        <td id="Drive1"></td>
                        <td id="Drive2"></td>
                    </tr>
                    <tr>
                        <td>Forbidden Lore</td>
                        <td id="ForbiddenLoreDetail" class="font-italic"></td>
                        <td id="ForbiddenLore0"></td>
                        <td id="ForbiddenLore1"></td>
                        <td id="ForbiddenLore2"></td>
                    </tr>
                    <tr>
                        <td>Interrogation</td>
                        <td id="InterrogationDetail" class="font-italic"></td>
                        <td id="Interrogation0"></td>
                        <td id="Interrogation1"></td>
                        <td id="Interrogation2"></td>
                    </tr>
                    <tr>
                        <td>Invocation</td>
                        <td id="InvocationDetail" class="font-italic"></td>
                        <td id="Invocation0"></td>
                        <td id="Invocation1"></td>
                        <td id="Invocation2"></td>
                    </tr>
                    <tr>
                        <td>Lip Reading</td>
                        <td id="LipReadingDetail" class="font-italic"></td>
                        <td id="LipReading0"></td>
                        <td id="LipReading1"></td>
                        <td id="LipReading2"></td>
                    </tr>
                    <tr>
                        <td>Literacy</td>
                        <td id="LiteracyDetail" class="font-italic"></td>
                        <td id="Literacy0"></td>
                        <td id="Literacy1"></td>
                        <td id="Literacy2"></td>
                    </tr>
                    <tr>
                        <td>Medicae</td>
                        <td id="MedicaeDetail" class="font-italic"></td>
                        <td id="Medicae0"></td>
                        <td id="Medicae1"></td>
                        <td id="Medicae2"></td>
                    </tr>
                    <tr>
                        <td>Navigation</td>
                        <td id="NavigationDetail" class="font-italic"></td>
                        <td id="Navigation0"></td>
                        <td id="Navigation1"></td>
                        <td id="Navigation2"></td>
                    </tr>
                    <tr>
                        <td>Performer</td>
                        <td id="PerformerDetail" class="font-italic"></td>
                        <td id="Performer0"></td>
                        <td id="Performer1"></td>
                        <td id="Performer2"></td>
                    </tr>
                    <tr>
                        <td>Pilot</td>
                        <td id="PilotDetail" class="font-italic"></td>
                        <td id="Pilot0"></td>
                        <td id="Pilot1"></td>
                        <td id="Pilot2"></td>
                    </tr>
                    <tr>
                        <td>Psyniscience</td>
                        <td id="PsyniscienceDetail" class="font-italic"></td>
                        <td id="Psyniscience0"></td>
                        <td id="Psyniscience1"></td>
                        <td id="Psyniscience2"></td>
                    </tr>
                    <tr>
                        <td>Scholastic Lore</td>
                        <td id="ScholasticLoreDetail" class="font-italic"></td>
                        <td id="ScholasticLore0"></td>
                        <td id="ScholasticLore1"></td>
                        <td id="ScholasticLore2"></td>
                    </tr>
                    <tr>
                        <td>Secret Tongue</td>
                        <td id="SecretTongueDetail" class="font-italic"></td>
                        <td id="SecretTongue0"></td>
                        <td id="SecretTongue1"></td>
                        <td id="SecretTongue2"></td>
                    </tr>
                    <tr>
                        <td>Security</td>
                        <td id="SecurityDetail" class="font-italic"></td>
                        <td id="Security0"></td>
                        <td id="Security1"></td>
                        <td id="Security2"></td>
                    </tr>
                    <tr>
                        <td>Shadowing</td>
                        <td id="ShadowingDetail" class="font-italic"></td>
                        <td id="Shadowing0"></td>
                        <td id="Shadowing1"></td>
                        <td id="Shadowing2"></td>
                    </tr>
                    <tr>
                        <td>Sleight Of Hand</td>
                        <td id="SleightOfHandDetail" class="font-italic"></td>
                        <td id="SleightOfHand0"></td>
                        <td id="SleightOfHand1"></td>
                        <td id="SleightOfHand2"></td>
                    </tr>
                    <tr>
                        <td>Speak Language</td>
                        <td id="SpeakLanguageDetail" class="font-italic"></td>
                        <td id="SpeakLanguage0"></td>
                        <td id="SpeakLanguage1"></td>
                        <td id="SpeakLanguage2"></td>
                    </tr>
                    <tr>
                        <td>Survival</td>
                        <td id="SurvivalDetail" class="font-italic"></td>
                        <td id="Survival0"></td>
                        <td id="Survival1"></td>
                        <td id="Survival2"></td>
                    </tr>
                    <tr>
                        <td>TechUse</td>
                        <td id="TechUseDetail" class="font-italic"></td>
                        <td id="TechUse0"></td>
                        <td id="TechUse1"></td>
                        <td id="TechUse2"></td>
                    </tr>
                    <tr>
                        <td>Tracking</td>
                        <td id="TrackingDetail" class="font-italic"></td>
                        <td id="Tracking0"></td>
                        <td id="Tracking1"></td>
                        <td id="Tracking2"></td>
                    </tr>
                    <tr>
                        <td>Trade</td>
                        <td id="TradeDetail" class="font-italic"></td>
                        <td id="Trade0"></td>
                        <td id="Trade1"></td>
                        <td id="Trade2"></td>
                    </tr>
                    <tr>
                        <td>Wrangling</td>
                        <td id="WranglingDetail" class="font-italic"></td>
                        <td id="Wrangling0"></td>
                        <td id="Wrangling1"></td>
                        <td id="Wrangling2"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<script src="/js/char_generator/characteristics.js" type="javascript"></script>
<script src="/js/char_generator/skills.js" type="javascript"></script>
<script src="/js/char_generator/male-names.js" type="javascript"></script>
<script src="/js/char_generator/female-names.js" type="javascript"></script>
<script src="/js/char_generator/char_generator.js" type="javascript"></script>
<script>
    generatePlayer();
</script>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
