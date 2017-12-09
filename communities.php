<?php 
    $zip = $_REQUEST['input'];
    $locations = getLocations($zip);

    echo json_encode($locations);
    
    exit;

    function getLocations($zipCode){
        $locations = Array();
        $string = getCommunities();
        $json = json_decode($string, true);
        foreach($json as $location){
            if(strcmp($location['PLZ'],$zipCode) == 0){
                $locations[] = $location['Ort'];
            }
        }
        return $locations;
    }

    function getCommunities(){
        $string = '[
            {
              "PLZ": 1000,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1003,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1004,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1005,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1006,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1007,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1008,
              "Ort": "Jouxtens-Mézery"
            },
            {
              "PLZ": 1008,
              "Ort": "Prilly"
            },
            {
              "PLZ": 1009,
              "Ort": "Pully"
            },
            {
              "PLZ": 1010,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1011,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1012,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1015,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1018,
              "Ort": "Lausanne"
            },
            {
              "PLZ": 1020,
              "Ort": "Renens VD"
            },
            {
              "PLZ": 1022,
              "Ort": "Chavannes-près-Renens"
            },
            {
              "PLZ": 1023,
              "Ort": "Crissier"
            },
            {
              "PLZ": 1024,
              "Ort": "Ecublens VD"
            },
            {
              "PLZ": 1025,
              "Ort": "St-Sulpice VD"
            },
            {
              "PLZ": 1026,
              "Ort": "Denges"
            },
            {
              "PLZ": 1026,
              "Ort": "Echandens"
            },
            {
              "PLZ": 1027,
              "Ort": "Lonay"
            },
            {
              "PLZ": 1028,
              "Ort": "Préverenges"
            },
            {
              "PLZ": 1029,
              "Ort": "Villars-Ste-Croix"
            },
            {
              "PLZ": 1030,
              "Ort": "Bussigny-près-Lausanne"
            },
            {
              "PLZ": 1031,
              "Ort": "Mex VD"
            },
            {
              "PLZ": 1032,
              "Ort": "Romanel-sur-Lausanne"
            },
            {
              "PLZ": 1033,
              "Ort": "Cheseaux-sur-Lausanne"
            },
            {
              "PLZ": 1034,
              "Ort": "Boussens"
            },
            {
              "PLZ": 1035,
              "Ort": "Bournens"
            },
            {
              "PLZ": 1036,
              "Ort": "Sullens"
            },
            {
              "PLZ": 1037,
              "Ort": "Etagnières"
            },
            {
              "PLZ": 1038,
              "Ort": "Bercher"
            },
            {
              "PLZ": 1040,
              "Ort": "St-Barthélemy VD"
            },
            {
              "PLZ": 1040,
              "Ort": "Villars-le-Terroir"
            },
            {
              "PLZ": 1040,
              "Ort": "Echallens"
            },
            {
              "PLZ": 1041,
              "Ort": "Dommartin"
            },
            {
              "PLZ": 1041,
              "Ort": "Poliez-Pittet"
            },
            {
              "PLZ": 1041,
              "Ort": "Bottens"
            },
            {
              "PLZ": 1041,
              "Ort": "Naz"
            },
            {
              "PLZ": 1041,
              "Ort": "Montaubion-Chardonney"
            },
            {
              "PLZ": 1041,
              "Ort": "Poliez-le-Grand"
            },
            {
              "PLZ": 1042,
              "Ort": "Bettens"
            },
            {
              "PLZ": 1042,
              "Ort": "Bioley-Orjulaz"
            },
            {
              "PLZ": 1042,
              "Ort": "Assens"
            },
            {
              "PLZ": 1043,
              "Ort": "Sugnens"
            },
            {
              "PLZ": 1044,
              "Ort": "Fey"
            },
            {
              "PLZ": 1045,
              "Ort": "Ogens"
            },
            {
              "PLZ": 1046,
              "Ort": "Rueyres"
            },
            {
              "PLZ": 1047,
              "Ort": "Oppens"
            },
            {
              "PLZ": 1052,
              "Ort": "Le Mont-sur-Lausanne"
            },
            {
              "PLZ": 1053,
              "Ort": "Bretigny-sur-Morrens"
            },
            {
              "PLZ": 1053,
              "Ort": "Cugy VD"
            },
            {
              "PLZ": 1054,
              "Ort": "Morrens VD"
            },
            {
              "PLZ": 1055,
              "Ort": "Froideville"
            },
            {
              "PLZ": 1058,
              "Ort": "Villars-Tiercelin"
            },
            {
              "PLZ": 1059,
              "Ort": "Peney-le-Jorat"
            },
            {
              "PLZ": 1061,
              "Ort": "Villars-Mendraz"
            },
            {
              "PLZ": 1062,
              "Ort": "Sottens"
            },
            {
              "PLZ": 1063,
              "Ort": "Peyres-Possens"
            },
            {
              "PLZ": 1063,
              "Ort": "Boulens"
            },
            {
              "PLZ": 1063,
              "Ort": "Chapelle-sur-Moudon"
            },
            {
              "PLZ": 1063,
              "Ort": "Martherenges"
            },
            {
              "PLZ": 1066,
              "Ort": "Epalinges"
            },
            {
              "PLZ": 1068,
              "Ort": "Les Monts-de-Pully"
            },
            {
              "PLZ": 1070,
              "Ort": "Puidoux"
            },
            {
              "PLZ": 1071,
              "Ort": "Rivaz"
            },
            {
              "PLZ": 1071,
              "Ort": "St-Saphorin (Lavaux)"
            },
            {
              "PLZ": 1071,
              "Ort": "Chexbres"
            },
            {
              "PLZ": 1072,
              "Ort": "Forel (Lavaux)"
            },
            {
              "PLZ": 1073,
              "Ort": "Mollie-Margot"
            },
            {
              "PLZ": 1073,
              "Ort": "Savigny"
            },
            {
              "PLZ": 1076,
              "Ort": "Ferlens VD"
            },
            {
              "PLZ": 1077,
              "Ort": "Servion"
            },
            {
              "PLZ": 1078,
              "Ort": "Essertes"
            },
            {
              "PLZ": 1080,
              "Ort": "Les Cullayes"
            },
            {
              "PLZ": 1081,
              "Ort": "Montpreveyres"
            },
            {
              "PLZ": 1082,
              "Ort": "Corcelles-le-Jorat"
            },
            {
              "PLZ": 1083,
              "Ort": "Mézières VD"
            },
            {
              "PLZ": 1084,
              "Ort": "Carrouge VD"
            },
            {
              "PLZ": 1085,
              "Ort": "Vulliens"
            },
            {
              "PLZ": 1088,
              "Ort": "Ropraz"
            },
            {
              "PLZ": 1090,
              "Ort": "La Croix (Lutry)"
            },
            {
              "PLZ": 1091,
              "Ort": "Aran"
            },
            {
              "PLZ": 1091,
              "Ort": "Chenaux"
            },
            {
              "PLZ": 1091,
              "Ort": "Grandvaux"
            },
            {
              "PLZ": 1092,
              "Ort": "Belmont-sur-Lausanne"
            },
            {
              "PLZ": 1093,
              "Ort": "La Conversion"
            },
            {
              "PLZ": 1094,
              "Ort": "Paudex"
            },
            {
              "PLZ": 1095,
              "Ort": "Lutry"
            },
            {
              "PLZ": 1096,
              "Ort": "Villette (Lavaux)"
            },
            {
              "PLZ": 1096,
              "Ort": "Cully"
            },
            {
              "PLZ": 1097,
              "Ort": "Riex"
            },
            {
              "PLZ": 1098,
              "Ort": "Epesses"
            },
            {
              "PLZ": 1110,
              "Ort": "Morges"
            },
            {
              "PLZ": 1112,
              "Ort": "Echichens"
            },
            {
              "PLZ": 1113,
              "Ort": "St-Saphorin-sur-Morges"
            },
            {
              "PLZ": 1114,
              "Ort": "Colombier VD"
            },
            {
              "PLZ": 1115,
              "Ort": "Vullierens"
            },
            {
              "PLZ": 1116,
              "Ort": "Cottens VD"
            },
            {
              "PLZ": 1117,
              "Ort": "Grancy"
            },
            {
              "PLZ": 1121,
              "Ort": "Bremblens"
            },
            {
              "PLZ": 1122,
              "Ort": "Romanel-sur-Morges"
            },
            {
              "PLZ": 1123,
              "Ort": "Aclens"
            },
            {
              "PLZ": 1124,
              "Ort": "Gollion"
            },
            {
              "PLZ": 1125,
              "Ort": "Monnaz"
            },
            {
              "PLZ": 1126,
              "Ort": "Vaux-sur-Morges"
            },
            {
              "PLZ": 1127,
              "Ort": "Clarmont"
            },
            {
              "PLZ": 1128,
              "Ort": "Reverolle"
            },
            {
              "PLZ": 1131,
              "Ort": "Tolochenaz"
            },
            {
              "PLZ": 1132,
              "Ort": "Lully VD"
            },
            {
              "PLZ": 1134,
              "Ort": "Vufflens-le-Château"
            },
            {
              "PLZ": 1134,
              "Ort": "Chigny"
            },
            {
              "PLZ": 1135,
              "Ort": "Denens"
            },
            {
              "PLZ": 1136,
              "Ort": "Bussy-Chardonney"
            },
            {
              "PLZ": 1141,
              "Ort": "Sévery"
            },
            {
              "PLZ": 1142,
              "Ort": "Pampigny"
            },
            {
              "PLZ": 1143,
              "Ort": "Apples"
            },
            {
              "PLZ": 1144,
              "Ort": "Ballens"
            },
            {
              "PLZ": 1145,
              "Ort": "Bière"
            },
            {
              "PLZ": 1146,
              "Ort": "Mollens VD"
            },
            {
              "PLZ": 1147,
              "Ort": "Montricher"
            },
            {
              "PLZ": 1148,
              "Ort": "Cuarnens"
            },
            {
              "PLZ": 1148,
              "Ort": "Moiry VD"
            },
            {
              "PLZ": 1148,
              "Ort": "La Praz"
            },
            {
              "PLZ": 1148,
              "Ort": "Mont-la-Ville"
            },
            {
              "PLZ": 1148,
              "Ort": "Chavannes-le-Veyron"
            },
            {
              "PLZ": 1148,
              "Ort": "Mauraz"
            },
            {
              "PLZ": 1148,
              "Ort": "Villars-Bozon"
            },
            {
              "PLZ": 1148,
              "Ort": "La Coudre"
            },
            {
              "PLZ": 1148,
              "Ort": "LIsle"
            },
            {
              "PLZ": 1149,
              "Ort": "Berolle"
            },
            {
              "PLZ": 1162,
              "Ort": "St-Prex"
            },
            {
              "PLZ": 1163,
              "Ort": "Etoy"
            },
            {
              "PLZ": 1164,
              "Ort": "Buchillon"
            },
            {
              "PLZ": 1165,
              "Ort": "Allaman"
            },
            {
              "PLZ": 1166,
              "Ort": "Perroy"
            },
            {
              "PLZ": 1167,
              "Ort": "Lussy-sur-Morges"
            },
            {
              "PLZ": 1168,
              "Ort": "Villars-sous-Yens"
            },
            {
              "PLZ": 1169,
              "Ort": "Yens"
            },
            {
              "PLZ": 1170,
              "Ort": "Aubonne"
            },
            {
              "PLZ": 1172,
              "Ort": "Bougy-Villars"
            },
            {
              "PLZ": 1173,
              "Ort": "Féchy"
            },
            {
              "PLZ": 1174,
              "Ort": "Montherod"
            },
            {
              "PLZ": 1174,
              "Ort": "Pizy"
            },
            {
              "PLZ": 1175,
              "Ort": "Lavigny"
            },
            {
              "PLZ": 1176,
              "Ort": "St-Livres"
            },
            {
              "PLZ": 1180,
              "Ort": "Tartegnin"
            },
            {
              "PLZ": 1180,
              "Ort": "Rolle"
            },
            {
              "PLZ": 1182,
              "Ort": "Gilly"
            },
            {
              "PLZ": 1183,
              "Ort": "Bursins"
            },
            {
              "PLZ": 1184,
              "Ort": "Vinzel"
            },
            {
              "PLZ": 1184,
              "Ort": "Luins"
            },
            {
              "PLZ": 1185,
              "Ort": "Mont-sur-Rolle"
            },
            {
              "PLZ": 1186,
              "Ort": "Essertines-sur-Rolle"
            },
            {
              "PLZ": 1187,
              "Ort": "St-Oyens"
            },
            {
              "PLZ": 1188,
              "Ort": "Gimel"
            },
            {
              "PLZ": 1188,
              "Ort": "St-George"
            },
            {
              "PLZ": 1189,
              "Ort": "Saubraz"
            },
            {
              "PLZ": 1195,
              "Ort": "Dully"
            },
            {
              "PLZ": 1195,
              "Ort": "Bursinel"
            },
            {
              "PLZ": 1196,
              "Ort": "Gland"
            },
            {
              "PLZ": 1197,
              "Ort": "Prangins"
            },
            {
              "PLZ": 1200,
              "Ort": "Genève"
            },
            {
              "PLZ": 1201,
              "Ort": "Genève"
            },
            {
              "PLZ": 1202,
              "Ort": "Genève"
            },
            {
              "PLZ": 1203,
              "Ort": "Genève"
            },
            {
              "PLZ": 1204,
              "Ort": "Genève"
            },
            {
              "PLZ": 1205,
              "Ort": "Genève"
            },
            {
              "PLZ": 1206,
              "Ort": "Genève"
            },
            {
              "PLZ": 1207,
              "Ort": "Genève"
            },
            {
              "PLZ": 1208,
              "Ort": "Genève"
            },
            {
              "PLZ": 1209,
              "Ort": "Genève"
            },
            {
              "PLZ": 1212,
              "Ort": "Grand-Lancy"
            },
            {
              "PLZ": 1213,
              "Ort": "Petit-Lancy"
            },
            {
              "PLZ": 1213,
              "Ort": "Onex"
            },
            {
              "PLZ": 1214,
              "Ort": "Vernier"
            },
            {
              "PLZ": 1215,
              "Ort": "Genève 15 Aéroport"
            },
            {
              "PLZ": 1216,
              "Ort": "Cointrin"
            },
            {
              "PLZ": 1217,
              "Ort": "Meyrin"
            },
            {
              "PLZ": 1218,
              "Ort": "Le Grand-Saconnex"
            },
            {
              "PLZ": 1219,
              "Ort": "Le Lignon"
            },
            {
              "PLZ": 1219,
              "Ort": "Aïre"
            },
            {
              "PLZ": 1219,
              "Ort": "Châtelaine"
            },
            {
              "PLZ": 1220,
              "Ort": "Les Avanchets"
            },
            {
              "PLZ": 1222,
              "Ort": "Vésenaz"
            },
            {
              "PLZ": 1223,
              "Ort": "Cologny"
            },
            {
              "PLZ": 1224,
              "Ort": "Chêne-Bougeries"
            },
            {
              "PLZ": 1225,
              "Ort": "Chêne-Bourg"
            },
            {
              "PLZ": 1226,
              "Ort": "Thônex"
            },
            {
              "PLZ": 1227,
              "Ort": "Les Acacias"
            },
            {
              "PLZ": 1227,
              "Ort": "Carouge GE"
            },
            {
              "PLZ": 1228,
              "Ort": "Plan-les-Ouates"
            },
            {
              "PLZ": 1231,
              "Ort": "Conches"
            },
            {
              "PLZ": 1232,
              "Ort": "Confignon"
            },
            {
              "PLZ": 1233,
              "Ort": "Bernex"
            },
            {
              "PLZ": 1234,
              "Ort": "Vessy"
            },
            {
              "PLZ": 1236,
              "Ort": "Cartigny"
            },
            {
              "PLZ": 1237,
              "Ort": "Avully"
            },
            {
              "PLZ": 1239,
              "Ort": "Collex"
            },
            {
              "PLZ": 1241,
              "Ort": "Puplinge"
            },
            {
              "PLZ": 1242,
              "Ort": "Satigny"
            },
            {
              "PLZ": 1243,
              "Ort": "Presinge"
            },
            {
              "PLZ": 1244,
              "Ort": "Choulex"
            },
            {
              "PLZ": 1245,
              "Ort": "Collonge-Bellerive"
            },
            {
              "PLZ": 1246,
              "Ort": "Corsier GE"
            },
            {
              "PLZ": 1247,
              "Ort": "Anières"
            },
            {
              "PLZ": 1248,
              "Ort": "Hermance"
            },
            {
              "PLZ": 1251,
              "Ort": "Gy"
            },
            {
              "PLZ": 1252,
              "Ort": "Meinier"
            },
            {
              "PLZ": 1253,
              "Ort": "Vandoeuvres"
            },
            {
              "PLZ": 1254,
              "Ort": "Jussy"
            },
            {
              "PLZ": 1255,
              "Ort": "Veyrier"
            },
            {
              "PLZ": 1256,
              "Ort": "Troinex"
            },
            {
              "PLZ": 1257,
              "Ort": "La Croix-de-Rozon"
            },
            {
              "PLZ": 1258,
              "Ort": "Perly"
            },
            {
              "PLZ": 1260,
              "Ort": "Nyon"
            },
            {
              "PLZ": 1261,
              "Ort": "Longirod"
            },
            {
              "PLZ": 1261,
              "Ort": "Marchissy"
            },
            {
              "PLZ": 1261,
              "Ort": "Le Vaud"
            },
            {
              "PLZ": 1262,
              "Ort": "Eysins"
            },
            {
              "PLZ": 1263,
              "Ort": "Crassier"
            },
            {
              "PLZ": 1264,
              "Ort": "St-Cergue"
            },
            {
              "PLZ": 1265,
              "Ort": "La Cure"
            },
            {
              "PLZ": 1266,
              "Ort": "Duillier"
            },
            {
              "PLZ": 1267,
              "Ort": "Vich"
            },
            {
              "PLZ": 1267,
              "Ort": "Coinsins"
            },
            {
              "PLZ": 1268,
              "Ort": "Burtigny"
            },
            {
              "PLZ": 1268,
              "Ort": "Begnins"
            },
            {
              "PLZ": 1269,
              "Ort": "Bassins"
            },
            {
              "PLZ": 1270,
              "Ort": "Trélex"
            },
            {
              "PLZ": 1271,
              "Ort": "Givrins"
            },
            {
              "PLZ": 1272,
              "Ort": "Genolier"
            },
            {
              "PLZ": 1273,
              "Ort": "Le Muids"
            },
            {
              "PLZ": 1273,
              "Ort": "Arzier"
            },
            {
              "PLZ": 1274,
              "Ort": "Grens"
            },
            {
              "PLZ": 1274,
              "Ort": "Signy"
            },
            {
              "PLZ": 1275,
              "Ort": "Chéserex"
            },
            {
              "PLZ": 1276,
              "Ort": "Gingins"
            },
            {
              "PLZ": 1277,
              "Ort": "Arnex-sur-Nyon"
            },
            {
              "PLZ": 1277,
              "Ort": "Borex"
            },
            {
              "PLZ": 1278,
              "Ort": "La Rippe"
            },
            {
              "PLZ": 1279,
              "Ort": "Bogis-Bossey"
            },
            {
              "PLZ": 1279,
              "Ort": "Chavannes-de-Bogis"
            },
            {
              "PLZ": 1281,
              "Ort": "Russin"
            },
            {
              "PLZ": 1283,
              "Ort": "Dardagny"
            },
            {
              "PLZ": 1283,
              "Ort": "La Plaine"
            },
            {
              "PLZ": 1284,
              "Ort": "Chancy"
            },
            {
              "PLZ": 1285,
              "Ort": "Athenaz (Avusy)"
            },
            {
              "PLZ": 1286,
              "Ort": "Soral"
            },
            {
              "PLZ": 1287,
              "Ort": "Laconnex"
            },
            {
              "PLZ": 1288,
              "Ort": "Aire-la-Ville"
            },
            {
              "PLZ": 1290,
              "Ort": "Versoix"
            },
            {
              "PLZ": 1290,
              "Ort": "Chavannes-des-Bois"
            },
            {
              "PLZ": 1291,
              "Ort": "Commugny"
            },
            {
              "PLZ": 1292,
              "Ort": "Chambésy"
            },
            {
              "PLZ": 1293,
              "Ort": "Bellevue"
            },
            {
              "PLZ": 1294,
              "Ort": "Genthod"
            },
            {
              "PLZ": 1295,
              "Ort": "Mies"
            },
            {
              "PLZ": 1295,
              "Ort": "Tannay"
            },
            {
              "PLZ": 1296,
              "Ort": "Coppet"
            },
            {
              "PLZ": 1297,
              "Ort": "Founex"
            },
            {
              "PLZ": 1298,
              "Ort": "Céligny"
            },
            {
              "PLZ": 1299,
              "Ort": "Crans-près-Céligny"
            },
            {
              "PLZ": 1302,
              "Ort": "Vufflens-la-Ville"
            },
            {
              "PLZ": 1303,
              "Ort": "Penthaz"
            },
            {
              "PLZ": 1304,
              "Ort": "Senarclens"
            },
            {
              "PLZ": 1304,
              "Ort": "Dizy"
            },
            {
              "PLZ": 1304,
              "Ort": "Allens"
            },
            {
              "PLZ": 1304,
              "Ort": "Cossonay-Ville"
            },
            {
              "PLZ": 1305,
              "Ort": "Penthalaz"
            },
            {
              "PLZ": 1306,
              "Ort": "Daillens"
            },
            {
              "PLZ": 1307,
              "Ort": "Lussery-Villars"
            },
            {
              "PLZ": 1308,
              "Ort": "La Chaux (Cossonay)"
            },
            {
              "PLZ": 1312,
              "Ort": "Eclépens"
            },
            {
              "PLZ": 1313,
              "Ort": "Ferreyres"
            },
            {
              "PLZ": 1315,
              "Ort": "La Sarraz"
            },
            {
              "PLZ": 1316,
              "Ort": "Chevilly"
            },
            {
              "PLZ": 1317,
              "Ort": "Orny"
            },
            {
              "PLZ": 1318,
              "Ort": "Pompaples"
            },
            {
              "PLZ": 1321,
              "Ort": "Arnex-sur-Orbe"
            },
            {
              "PLZ": 1322,
              "Ort": "Croy"
            },
            {
              "PLZ": 1323,
              "Ort": "Romainmôtier"
            },
            {
              "PLZ": 1324,
              "Ort": "Premier"
            },
            {
              "PLZ": 1325,
              "Ort": "Vaulion"
            },
            {
              "PLZ": 1326,
              "Ort": "Juriens"
            },
            {
              "PLZ": 1329,
              "Ort": "Bretonnières"
            },
            {
              "PLZ": 1337,
              "Ort": "Vallorbe"
            },
            {
              "PLZ": 1338,
              "Ort": "Ballaigues"
            },
            {
              "PLZ": 1341,
              "Ort": "Orient"
            },
            {
              "PLZ": 1342,
              "Ort": "Le Pont"
            },
            {
              "PLZ": 1343,
              "Ort": "Les Charbonnières"
            },
            {
              "PLZ": 1344,
              "Ort": "LAbbaye"
            },
            {
              "PLZ": 1345,
              "Ort": "Le Lieu"
            },
            {
              "PLZ": 1346,
              "Ort": "Les Bioux"
            },
            {
              "PLZ": 1347,
              "Ort": "Le Solliat"
            },
            {
              "PLZ": 1347,
              "Ort": "Le Sentier"
            },
            {
              "PLZ": 1348,
              "Ort": "Le Brassus"
            },
            {
              "PLZ": 1350,
              "Ort": "Orbe"
            },
            {
              "PLZ": 1352,
              "Ort": "Agiez"
            },
            {
              "PLZ": 1353,
              "Ort": "Bofflens"
            },
            {
              "PLZ": 1354,
              "Ort": "Montcherand"
            },
            {
              "PLZ": 1355,
              "Ort": "Sergey"
            },
            {
              "PLZ": 1355,
              "Ort": "LAbergement"
            },
            {
              "PLZ": 1356,
              "Ort": "Les Clées"
            },
            {
              "PLZ": 1356,
              "Ort": "La Russille"
            },
            {
              "PLZ": 1357,
              "Ort": "Lignerolle"
            },
            {
              "PLZ": 1358,
              "Ort": "Valeyres-sous-Rances"
            },
            {
              "PLZ": 1372,
              "Ort": "Bavois"
            },
            {
              "PLZ": 1373,
              "Ort": "Chavornay"
            },
            {
              "PLZ": 1374,
              "Ort": "Corcelles-sur-Chavornay"
            },
            {
              "PLZ": 1375,
              "Ort": "Penthéréaz"
            },
            {
              "PLZ": 1376,
              "Ort": "Eclagnens"
            },
            {
              "PLZ": 1376,
              "Ort": "Goumoens-le-Jux"
            },
            {
              "PLZ": 1376,
              "Ort": "Goumoens-la-Ville"
            },
            {
              "PLZ": 1377,
              "Ort": "Oulens-sous-Echallens"
            },
            {
              "PLZ": 1400,
              "Ort": "Yverdon-les-Bains"
            },
            {
              "PLZ": 1400,
              "Ort": "Cheseaux-Noréaz"
            },
            {
              "PLZ": 1404,
              "Ort": "Cuarny"
            },
            {
              "PLZ": 1404,
              "Ort": "Villars-Epeney"
            },
            {
              "PLZ": 1405,
              "Ort": "Pomy"
            },
            {
              "PLZ": 1406,
              "Ort": "Cronay"
            },
            {
              "PLZ": 1407,
              "Ort": "Bioley-Magnoux"
            },
            {
              "PLZ": 1407,
              "Ort": "Gossens"
            },
            {
              "PLZ": 1407,
              "Ort": "Mézery-près-Donneloye"
            },
            {
              "PLZ": 1407,
              "Ort": "Donneloye"
            },
            {
              "PLZ": 1408,
              "Ort": "Prahins"
            },
            {
              "PLZ": 1409,
              "Ort": "Chanéaz"
            },
            {
              "PLZ": 1410,
              "Ort": "Prévondavaux"
            },
            {
              "PLZ": 1410,
              "Ort": "St-Cierges"
            },
            {
              "PLZ": 1410,
              "Ort": "Denezy"
            },
            {
              "PLZ": 1410,
              "Ort": "Correvon"
            },
            {
              "PLZ": 1410,
              "Ort": "Thierrens"
            },
            {
              "PLZ": 1412,
              "Ort": "Valeyres-sous-Ursins"
            },
            {
              "PLZ": 1412,
              "Ort": "Ursins"
            },
            {
              "PLZ": 1413,
              "Ort": "Orzens"
            },
            {
              "PLZ": 1415,
              "Ort": "Molondin"
            },
            {
              "PLZ": 1415,
              "Ort": "Démoret"
            },
            {
              "PLZ": 1416,
              "Ort": "Pailly"
            },
            {
              "PLZ": 1417,
              "Ort": "Epautheyres"
            },
            {
              "PLZ": 1417,
              "Ort": "Essertines-sur-Yverdon"
            },
            {
              "PLZ": 1418,
              "Ort": "Vuarrens"
            },
            {
              "PLZ": 1420,
              "Ort": "Fiez"
            },
            {
              "PLZ": 1421,
              "Ort": "Fontaines-sur-Grandson"
            },
            {
              "PLZ": 1421,
              "Ort": "Grandevent"
            },
            {
              "PLZ": 1422,
              "Ort": "Grandson"
            },
            {
              "PLZ": 1423,
              "Ort": "Fontanezier"
            },
            {
              "PLZ": 1423,
              "Ort": "Romairon"
            },
            {
              "PLZ": 1423,
              "Ort": "Vaugondry"
            },
            {
              "PLZ": 1423,
              "Ort": "Villars-Burquin"
            },
            {
              "PLZ": 1424,
              "Ort": "Champagne"
            },
            {
              "PLZ": 1425,
              "Ort": "Onnens VD"
            },
            {
              "PLZ": 1426,
              "Ort": "Corcelles-près-Concise"
            },
            {
              "PLZ": 1426,
              "Ort": "Concise"
            },
            {
              "PLZ": 1427,
              "Ort": "Bonvillars"
            },
            {
              "PLZ": 1428,
              "Ort": "Mutrux"
            },
            {
              "PLZ": 1428,
              "Ort": "Provence"
            },
            {
              "PLZ": 1429,
              "Ort": "Giez"
            },
            {
              "PLZ": 1430,
              "Ort": "Orges"
            },
            {
              "PLZ": 1431,
              "Ort": "Vugelles-La Mothe"
            },
            {
              "PLZ": 1431,
              "Ort": "Novalles"
            },
            {
              "PLZ": 1432,
              "Ort": "Belmont-sur-Yverdon"
            },
            {
              "PLZ": 1432,
              "Ort": "Gressy"
            },
            {
              "PLZ": 1433,
              "Ort": "Suchy"
            },
            {
              "PLZ": 1434,
              "Ort": "Ependes VD"
            },
            {
              "PLZ": 1435,
              "Ort": "Essert-Pittet"
            },
            {
              "PLZ": 1436,
              "Ort": "Treycovagnes"
            },
            {
              "PLZ": 1436,
              "Ort": "Chamblon"
            },
            {
              "PLZ": 1437,
              "Ort": "Suscévaz"
            },
            {
              "PLZ": 1438,
              "Ort": "Mathod"
            },
            {
              "PLZ": 1439,
              "Ort": "Rances"
            },
            {
              "PLZ": 1441,
              "Ort": "Valeyres-sous-Montagny"
            },
            {
              "PLZ": 1442,
              "Ort": "Montagny-près-Yverdon"
            },
            {
              "PLZ": 1443,
              "Ort": "Champvent"
            },
            {
              "PLZ": 1443,
              "Ort": "Essert-sous-Champvent"
            },
            {
              "PLZ": 1443,
              "Ort": "Villars-sous-Champvent"
            },
            {
              "PLZ": 1445,
              "Ort": "Vuiteboeuf"
            },
            {
              "PLZ": 1446,
              "Ort": "Baulmes"
            },
            {
              "PLZ": 1450,
              "Ort": "La Sagne (Ste-Croix)"
            },
            {
              "PLZ": 1450,
              "Ort": "Le Château-de-Ste-Croix"
            },
            {
              "PLZ": 1450,
              "Ort": "Ste-Croix"
            },
            {
              "PLZ": 1452,
              "Ort": "Les Rasses"
            },
            {
              "PLZ": 1453,
              "Ort": "Mauborget"
            },
            {
              "PLZ": 1453,
              "Ort": "Bullet"
            },
            {
              "PLZ": 1454,
              "Ort": "La Vraconnaz"
            },
            {
              "PLZ": 1454,
              "Ort": "LAuberson"
            },
            {
              "PLZ": 1462,
              "Ort": "Yvonand"
            },
            {
              "PLZ": 1463,
              "Ort": "Rovray"
            },
            {
              "PLZ": 1464,
              "Ort": "Chêne-Pâquier"
            },
            {
              "PLZ": 1464,
              "Ort": "Chavannes-le-Chêne"
            },
            {
              "PLZ": 1468,
              "Ort": "Cheyres"
            },
            {
              "PLZ": 1470,
              "Ort": "Bollion"
            },
            {
              "PLZ": 1470,
              "Ort": "Lully FR"
            },
            {
              "PLZ": 1470,
              "Ort": "Seiry"
            },
            {
              "PLZ": 1470,
              "Ort": "Estavayer-le-Lac"
            },
            {
              "PLZ": 1473,
              "Ort": "Font"
            },
            {
              "PLZ": 1473,
              "Ort": "Châtillon FR"
            },
            {
              "PLZ": 1474,
              "Ort": "Châbles FR"
            },
            {
              "PLZ": 1475,
              "Ort": "Autavaux"
            },
            {
              "PLZ": 1475,
              "Ort": "Forel FR"
            },
            {
              "PLZ": 1475,
              "Ort": "Montbrelloz"
            },
            {
              "PLZ": 1482,
              "Ort": "Cugy FR"
            },
            {
              "PLZ": 1483,
              "Ort": "Frasses"
            },
            {
              "PLZ": 1483,
              "Ort": "Vesin"
            },
            {
              "PLZ": 1483,
              "Ort": "Montet (Broye)"
            },
            {
              "PLZ": 1484,
              "Ort": "Aumont"
            },
            {
              "PLZ": 1484,
              "Ort": "Granges-de-Vesin"
            },
            {
              "PLZ": 1485,
              "Ort": "Nuvilly"
            },
            {
              "PLZ": 1486,
              "Ort": "Vuissens"
            },
            {
              "PLZ": 1489,
              "Ort": "Murist"
            },
            {
              "PLZ": 1509,
              "Ort": "Vucherens"
            },
            {
              "PLZ": 1510,
              "Ort": "Syens"
            },
            {
              "PLZ": 1510,
              "Ort": "Moudon"
            },
            {
              "PLZ": 1512,
              "Ort": "Chavannes-sur-Moudon"
            },
            {
              "PLZ": 1513,
              "Ort": "Hermenches"
            },
            {
              "PLZ": 1513,
              "Ort": "Rossenges"
            },
            {
              "PLZ": 1514,
              "Ort": "Bussy-sur-Moudon"
            },
            {
              "PLZ": 1515,
              "Ort": "Neyruz-sur-Moudon"
            },
            {
              "PLZ": 1515,
              "Ort": "Villars-le-Comte"
            },
            {
              "PLZ": 1521,
              "Ort": "Curtilles"
            },
            {
              "PLZ": 1522,
              "Ort": "Oulens-sur-Lucens"
            },
            {
              "PLZ": 1522,
              "Ort": "Lucens"
            },
            {
              "PLZ": 1523,
              "Ort": "Granges-près-Marnand"
            },
            {
              "PLZ": 1524,
              "Ort": "Marnand"
            },
            {
              "PLZ": 1525,
              "Ort": "Seigneux"
            },
            {
              "PLZ": 1525,
              "Ort": "Henniez"
            },
            {
              "PLZ": 1526,
              "Ort": "Forel-sur-Lucens"
            },
            {
              "PLZ": 1526,
              "Ort": "Cremin"
            },
            {
              "PLZ": 1527,
              "Ort": "Villeneuve FR"
            },
            {
              "PLZ": 1528,
              "Ort": "Praratoud"
            },
            {
              "PLZ": 1528,
              "Ort": "Surpierre"
            },
            {
              "PLZ": 1529,
              "Ort": "Cheiry"
            },
            {
              "PLZ": 1530,
              "Ort": "Payerne"
            },
            {
              "PLZ": 1532,
              "Ort": "Fétigny"
            },
            {
              "PLZ": 1533,
              "Ort": "Ménières"
            },
            {
              "PLZ": 1534,
              "Ort": "Chapelle (Broye)"
            },
            {
              "PLZ": 1534,
              "Ort": "Sassel"
            },
            {
              "PLZ": 1535,
              "Ort": "Combremont-le-Grand"
            },
            {
              "PLZ": 1536,
              "Ort": "Combremont-le-Petit"
            },
            {
              "PLZ": 1537,
              "Ort": "Champtauroz"
            },
            {
              "PLZ": 1538,
              "Ort": "Treytorrens (Payerne)"
            },
            {
              "PLZ": 1541,
              "Ort": "Morens FR"
            },
            {
              "PLZ": 1541,
              "Ort": "Sévaz"
            },
            {
              "PLZ": 1541,
              "Ort": "Bussy FR"
            },
            {
              "PLZ": 1542,
              "Ort": "Rueyres-les-Prés"
            },
            {
              "PLZ": 1543,
              "Ort": "Grandcour"
            },
            {
              "PLZ": 1544,
              "Ort": "Gletterens"
            },
            {
              "PLZ": 1545,
              "Ort": "Chevroux"
            },
            {
              "PLZ": 1551,
              "Ort": "Vers-chez-Perrin"
            },
            {
              "PLZ": 1552,
              "Ort": "Trey"
            },
            {
              "PLZ": 1553,
              "Ort": "Châtonnaye"
            },
            {
              "PLZ": 1554,
              "Ort": "Sédeilles"
            },
            {
              "PLZ": 1554,
              "Ort": "Rossens VD"
            },
            {
              "PLZ": 1555,
              "Ort": "Villarzel"
            },
            {
              "PLZ": 1562,
              "Ort": "Corcelles-près-Payerne"
            },
            {
              "PLZ": 1563,
              "Ort": "Dompierre FR"
            },
            {
              "PLZ": 1564,
              "Ort": "Domdidier"
            },
            {
              "PLZ": 1565,
              "Ort": "Vallon"
            },
            {
              "PLZ": 1565,
              "Ort": "Missy"
            },
            {
              "PLZ": 1566,
              "Ort": "Les Friques"
            },
            {
              "PLZ": 1566,
              "Ort": "St-Aubin FR"
            },
            {
              "PLZ": 1567,
              "Ort": "Delley"
            },
            {
              "PLZ": 1568,
              "Ort": "Portalban"
            },
            {
              "PLZ": 1580,
              "Ort": "Oleyres"
            },
            {
              "PLZ": 1580,
              "Ort": "Avenches"
            },
            {
              "PLZ": 1582,
              "Ort": "Donatyre"
            },
            {
              "PLZ": 1583,
              "Ort": "Villarepos"
            },
            {
              "PLZ": 1584,
              "Ort": "Villars-le-Grand"
            },
            {
              "PLZ": 1585,
              "Ort": "Bellerive VD"
            },
            {
              "PLZ": 1585,
              "Ort": "Cotterd"
            },
            {
              "PLZ": 1585,
              "Ort": "Salavaux"
            },
            {
              "PLZ": 1586,
              "Ort": "Vallamand"
            },
            {
              "PLZ": 1587,
              "Ort": "Montmagny"
            },
            {
              "PLZ": 1587,
              "Ort": "Constantine"
            },
            {
              "PLZ": 1588,
              "Ort": "Cudrefin"
            },
            {
              "PLZ": 1589,
              "Ort": "Chabrey"
            },
            {
              "PLZ": 1595,
              "Ort": "Clavaleyres"
            },
            {
              "PLZ": 1595,
              "Ort": "Faoug"
            },
            {
              "PLZ": 1607,
              "Ort": "Les Tavernes"
            },
            {
              "PLZ": 1607,
              "Ort": "Les Thioleyres"
            },
            {
              "PLZ": 1607,
              "Ort": "Palézieux-Village"
            },
            {
              "PLZ": 1607,
              "Ort": "Palézieux"
            },
            {
              "PLZ": 1608,
              "Ort": "Chapelle (Glâne)"
            },
            {
              "PLZ": 1608,
              "Ort": "Bussigny-sur-Oron"
            },
            {
              "PLZ": 1608,
              "Ort": "Chesalles-sur-Oron"
            },
            {
              "PLZ": 1608,
              "Ort": "Oron-le-Châtel"
            },
            {
              "PLZ": 1609,
              "Ort": "Besencens"
            },
            {
              "PLZ": 1609,
              "Ort": "Fiaugères"
            },
            {
              "PLZ": 1609,
              "Ort": "Le Jordil"
            },
            {
              "PLZ": 1609,
              "Ort": "St-Martin FR"
            },
            {
              "PLZ": 1610,
              "Ort": "Châtillens"
            },
            {
              "PLZ": 1610,
              "Ort": "Vuibroye"
            },
            {
              "PLZ": 1610,
              "Ort": "Oron-la-Ville"
            },
            {
              "PLZ": 1611,
              "Ort": "Le Crêt-près-Semsales"
            },
            {
              "PLZ": 1612,
              "Ort": "Ecoteaux"
            },
            {
              "PLZ": 1613,
              "Ort": "Maracon"
            },
            {
              "PLZ": 1614,
              "Ort": "Granges (Veveyse)"
            },
            {
              "PLZ": 1615,
              "Ort": "Bossonnens"
            },
            {
              "PLZ": 1616,
              "Ort": "Attalens"
            },
            {
              "PLZ": 1617,
              "Ort": "Tatroz"
            },
            {
              "PLZ": 1617,
              "Ort": "Remaufens"
            },
            {
              "PLZ": 1618,
              "Ort": "Châtel-St-Denis"
            },
            {
              "PLZ": 1619,
              "Ort": "Les Paccots"
            },
            {
              "PLZ": 1623,
              "Ort": "Semsales"
            },
            {
              "PLZ": 1624,
              "Ort": "La Verrerie"
            },
            {
              "PLZ": 1624,
              "Ort": "Grattavache"
            },
            {
              "PLZ": 1624,
              "Ort": "Progens"
            },
            {
              "PLZ": 1625,
              "Ort": "Maules"
            },
            {
              "PLZ": 1625,
              "Ort": "Sâles (Gruyère)"
            },
            {
              "PLZ": 1626,
              "Ort": "Romanens"
            },
            {
              "PLZ": 1626,
              "Ort": "Treyfayes"
            },
            {
              "PLZ": 1626,
              "Ort": "Rueyres-Treyfayes"
            },
            {
              "PLZ": 1627,
              "Ort": "Vaulruz"
            },
            {
              "PLZ": 1628,
              "Ort": "Vuadens"
            },
            {
              "PLZ": 1630,
              "Ort": "Bulle"
            },
            {
              "PLZ": 1632,
              "Ort": "Riaz"
            },
            {
              "PLZ": 1633,
              "Ort": "Vuippens"
            },
            {
              "PLZ": 1633,
              "Ort": "Marsens"
            },
            {
              "PLZ": 1634,
              "Ort": "La Roche FR"
            },
            {
              "PLZ": 1635,
              "Ort": "La Tour-de-Trême"
            },
            {
              "PLZ": 1636,
              "Ort": "Broc"
            },
            {
              "PLZ": 1637,
              "Ort": "Charmey (Gruyère)"
            },
            {
              "PLZ": 1638,
              "Ort": "Morlon"
            },
            {
              "PLZ": 1642,
              "Ort": "Sorens"
            },
            {
              "PLZ": 1643,
              "Ort": "Gumefens"
            },
            {
              "PLZ": 1644,
              "Ort": "Avry-devant-Pont"
            },
            {
              "PLZ": 1645,
              "Ort": "Le Bry"
            },
            {
              "PLZ": 1646,
              "Ort": "Echarlens"
            },
            {
              "PLZ": 1647,
              "Ort": "Corbières"
            },
            {
              "PLZ": 1648,
              "Ort": "Hauteville"
            },
            {
              "PLZ": 1649,
              "Ort": "Pont-la-Ville"
            },
            {
              "PLZ": 1651,
              "Ort": "Villarvolard"
            },
            {
              "PLZ": 1652,
              "Ort": "Botterens"
            },
            {
              "PLZ": 1652,
              "Ort": "Villarbeney"
            },
            {
              "PLZ": 1653,
              "Ort": "Châtel-sur-Montsalvens"
            },
            {
              "PLZ": 1653,
              "Ort": "Crésuz"
            },
            {
              "PLZ": 1654,
              "Ort": "Cerniat FR"
            },
            {
              "PLZ": 1656,
              "Ort": "Im Fang"
            },
            {
              "PLZ": 1656,
              "Ort": "Jaun"
            },
            {
              "PLZ": 1657,
              "Ort": "Ablaendschen"
            },
            {
              "PLZ": 1658,
              "Ort": "La Tine"
            },
            {
              "PLZ": 1658,
              "Ort": "Rossinière"
            },
            {
              "PLZ": 1659,
              "Ort": "Flendruz"
            },
            {
              "PLZ": 1659,
              "Ort": "Rougemont"
            },
            {
              "PLZ": 1660,
              "Ort": "Les Moulins"
            },
            {
              "PLZ": 1660,
              "Ort": "LEtivaz"
            },
            {
              "PLZ": 1660,
              "Ort": "Château-dOex"
            },
            {
              "PLZ": 1660,
              "Ort": "La Lécherette"
            },
            {
              "PLZ": 1661,
              "Ort": "Le Pâquier-Montbarry"
            },
            {
              "PLZ": 1663,
              "Ort": "Moléson-sur-Gruyères"
            },
            {
              "PLZ": 1663,
              "Ort": "Pringy"
            },
            {
              "PLZ": 1663,
              "Ort": "Gruyères"
            },
            {
              "PLZ": 1663,
              "Ort": "Epagny"
            },
            {
              "PLZ": 1665,
              "Ort": "Estavannens"
            },
            {
              "PLZ": 1666,
              "Ort": "Villars-sous-Mont"
            },
            {
              "PLZ": 1666,
              "Ort": "Grandvillard"
            },
            {
              "PLZ": 1667,
              "Ort": "Enney"
            },
            {
              "PLZ": 1669,
              "Ort": "Neirivue"
            },
            {
              "PLZ": 1669,
              "Ort": "Les Sciernes-dAlbeuve"
            },
            {
              "PLZ": 1669,
              "Ort": "Montbovon"
            },
            {
              "PLZ": 1669,
              "Ort": "Lessoc"
            },
            {
              "PLZ": 1669,
              "Ort": "Albeuve"
            },
            {
              "PLZ": 1670,
              "Ort": "Bionnens"
            },
            {
              "PLZ": 1670,
              "Ort": "Esmonts"
            },
            {
              "PLZ": 1670,
              "Ort": "Ursy"
            },
            {
              "PLZ": 1673,
              "Ort": "Auboranges"
            },
            {
              "PLZ": 1673,
              "Ort": "Ecublens FR"
            },
            {
              "PLZ": 1673,
              "Ort": "Rue"
            },
            {
              "PLZ": 1673,
              "Ort": "Gillarens"
            },
            {
              "PLZ": 1673,
              "Ort": "Promasens"
            },
            {
              "PLZ": 1674,
              "Ort": "Vuarmarens"
            },
            {
              "PLZ": 1674,
              "Ort": "Montet (Glâne)"
            },
            {
              "PLZ": 1674,
              "Ort": "Morlens"
            },
            {
              "PLZ": 1675,
              "Ort": "Vauderens"
            },
            {
              "PLZ": 1675,
              "Ort": "Blessens"
            },
            {
              "PLZ": 1675,
              "Ort": "Mossel"
            },
            {
              "PLZ": 1676,
              "Ort": "Chavannes-les-Forts"
            },
            {
              "PLZ": 1677,
              "Ort": "Prez-vers-Siviriez"
            },
            {
              "PLZ": 1678,
              "Ort": "Siviriez"
            },
            {
              "PLZ": 1679,
              "Ort": "Villaraboud"
            },
            {
              "PLZ": 1680,
              "Ort": "Berlens"
            },
            {
              "PLZ": 1680,
              "Ort": "Romont FR"
            },
            {
              "PLZ": 1681,
              "Ort": "Billens"
            },
            {
              "PLZ": 1681,
              "Ort": "Hennens"
            },
            {
              "PLZ": 1682,
              "Ort": "Villars-Bramard"
            },
            {
              "PLZ": 1682,
              "Ort": "Dompierre VD"
            },
            {
              "PLZ": 1682,
              "Ort": "Lovatens"
            },
            {
              "PLZ": 1682,
              "Ort": "Cerniaz VD"
            },
            {
              "PLZ": 1682,
              "Ort": "Prévonloup"
            },
            {
              "PLZ": 1683,
              "Ort": "Brenles"
            },
            {
              "PLZ": 1683,
              "Ort": "Chesalles-sur-Moudon"
            },
            {
              "PLZ": 1683,
              "Ort": "Sarzens"
            },
            {
              "PLZ": 1684,
              "Ort": "Mézières FR"
            },
            {
              "PLZ": 1685,
              "Ort": "Villariaz"
            },
            {
              "PLZ": 1686,
              "Ort": "Grangettes-près-Romont"
            },
            {
              "PLZ": 1686,
              "Ort": "La Neirigue"
            },
            {
              "PLZ": 1687,
              "Ort": "Estévenens"
            },
            {
              "PLZ": 1687,
              "Ort": "La Magne"
            },
            {
              "PLZ": 1687,
              "Ort": "Vuisternens-devant-Romont"
            },
            {
              "PLZ": 1688,
              "Ort": "Sommentier"
            },
            {
              "PLZ": 1688,
              "Ort": "Lieffrens"
            },
            {
              "PLZ": 1689,
              "Ort": "Le Châtelard-près-Romont"
            },
            {
              "PLZ": 1690,
              "Ort": "Lussy FR"
            },
            {
              "PLZ": 1690,
              "Ort": "Villaz-St-Pierre"
            },
            {
              "PLZ": 1691,
              "Ort": "Villarimboud"
            },
            {
              "PLZ": 1692,
              "Ort": "Massonnens"
            },
            {
              "PLZ": 1694,
              "Ort": "Orsonnens"
            },
            {
              "PLZ": 1694,
              "Ort": "Chavannes-sous-Orsonnens"
            },
            {
              "PLZ": 1694,
              "Ort": "Villargiroud"
            },
            {
              "PLZ": 1694,
              "Ort": "Villarsiviriaux"
            },
            {
              "PLZ": 1695,
              "Ort": "Villarlod"
            },
            {
              "PLZ": 1695,
              "Ort": "Estavayer-le-Gibloux"
            },
            {
              "PLZ": 1695,
              "Ort": "Rueyres-St-Laurent"
            },
            {
              "PLZ": 1695,
              "Ort": "Villarsel-le-Gibloux"
            },
            {
              "PLZ": 1696,
              "Ort": "Vuisternens-en-Ogoz"
            },
            {
              "PLZ": 1697,
              "Ort": "La Joux FR"
            },
            {
              "PLZ": 1697,
              "Ort": "Les Ecasseys"
            },
            {
              "PLZ": 1699,
              "Ort": "Bouloz"
            },
            {
              "PLZ": 1699,
              "Ort": "Pont (Veveyse)"
            },
            {
              "PLZ": 1699,
              "Ort": "Porsel"
            },
            {
              "PLZ": 1700,
              "Ort": "Fribourg"
            },
            {
              "PLZ": 1708,
              "Ort": "Fribourg"
            },
            {
              "PLZ": 1712,
              "Ort": "Tafers"
            },
            {
              "PLZ": 1713,
              "Ort": "St. Antoni"
            },
            {
              "PLZ": 1714,
              "Ort": "Heitenried"
            },
            {
              "PLZ": 1715,
              "Ort": "Alterswil FR"
            },
            {
              "PLZ": 1716,
              "Ort": "Oberschrot"
            },
            {
              "PLZ": 1716,
              "Ort": "Schwarzsee"
            },
            {
              "PLZ": 1716,
              "Ort": "Plaffeien"
            },
            {
              "PLZ": 1717,
              "Ort": "St. Ursen"
            },
            {
              "PLZ": 1718,
              "Ort": "Rechthalten"
            },
            {
              "PLZ": 1719,
              "Ort": "Zumholz"
            },
            {
              "PLZ": 1719,
              "Ort": "Bruenisried"
            },
            {
              "PLZ": 1720,
              "Ort": "Chésopelloz"
            },
            {
              "PLZ": 1720,
              "Ort": "Corminboeuf"
            },
            {
              "PLZ": 1721,
              "Ort": "Cormérod"
            },
            {
              "PLZ": 1721,
              "Ort": "Courtion"
            },
            {
              "PLZ": 1721,
              "Ort": "Misery"
            },
            {
              "PLZ": 1722,
              "Ort": "Bourguillon"
            },
            {
              "PLZ": 1723,
              "Ort": "Marly"
            },
            {
              "PLZ": 1723,
              "Ort": "Pierrafortscha"
            },
            {
              "PLZ": 1723,
              "Ort": "Villarsel-sur-Marly"
            },
            {
              "PLZ": 1724,
              "Ort": "Bonnefontaine"
            },
            {
              "PLZ": 1724,
              "Ort": "Essert FR"
            },
            {
              "PLZ": 1724,
              "Ort": "Ferpicloz"
            },
            {
              "PLZ": 1724,
              "Ort": "Montévraz"
            },
            {
              "PLZ": 1724,
              "Ort": "Oberried FR"
            },
            {
              "PLZ": 1724,
              "Ort": "Senèdes"
            },
            {
              "PLZ": 1724,
              "Ort": "Zénauva"
            },
            {
              "PLZ": 1724,
              "Ort": "Le Mouret"
            },
            {
              "PLZ": 1725,
              "Ort": "Posieux"
            },
            {
              "PLZ": 1726,
              "Ort": "Farvagny-le-Petit"
            },
            {
              "PLZ": 1726,
              "Ort": "Grenilles"
            },
            {
              "PLZ": 1726,
              "Ort": "Posat"
            },
            {
              "PLZ": 1726,
              "Ort": "Farvagny"
            },
            {
              "PLZ": 1727,
              "Ort": "Magnedens"
            },
            {
              "PLZ": 1727,
              "Ort": "Corpataux-Magnedens"
            },
            {
              "PLZ": 1728,
              "Ort": "Rossens FR"
            },
            {
              "PLZ": 1730,
              "Ort": "Ecuvillens"
            },
            {
              "PLZ": 1731,
              "Ort": "Ependes FR"
            },
            {
              "PLZ": 1732,
              "Ort": "Arconciel"
            },
            {
              "PLZ": 1733,
              "Ort": "Treyvaux"
            },
            {
              "PLZ": 1734,
              "Ort": "Tentlingen"
            },
            {
              "PLZ": 1735,
              "Ort": "Giffers"
            },
            {
              "PLZ": 1736,
              "Ort": "St. Silvester"
            },
            {
              "PLZ": 1737,
              "Ort": "Plasselb"
            },
            {
              "PLZ": 1738,
              "Ort": "Sangernboden"
            },
            {
              "PLZ": 1740,
              "Ort": "Neyruz FR"
            },
            {
              "PLZ": 1741,
              "Ort": "Cottens FR"
            },
            {
              "PLZ": 1742,
              "Ort": "Autigny"
            },
            {
              "PLZ": 1744,
              "Ort": "Chénens"
            },
            {
              "PLZ": 1745,
              "Ort": "Lentigny"
            },
            {
              "PLZ": 1746,
              "Ort": "Prez-vers-Noréaz"
            },
            {
              "PLZ": 1747,
              "Ort": "Corserey"
            },
            {
              "PLZ": 1748,
              "Ort": "Torny-le-Grand"
            },
            {
              "PLZ": 1749,
              "Ort": "Middes"
            },
            {
              "PLZ": 1752,
              "Ort": "Villars-sur-Glâne"
            },
            {
              "PLZ": 1753,
              "Ort": "Matran"
            },
            {
              "PLZ": 1754,
              "Ort": "Rosé"
            },
            {
              "PLZ": 1754,
              "Ort": "Corjolens"
            },
            {
              "PLZ": 1754,
              "Ort": "Avry-sur-Matran"
            },
            {
              "PLZ": 1754,
              "Ort": "Avry-Centre FR"
            },
            {
              "PLZ": 1756,
              "Ort": "Onnens FR"
            },
            {
              "PLZ": 1756,
              "Ort": "Lovens"
            },
            {
              "PLZ": 1757,
              "Ort": "Noréaz"
            },
            {
              "PLZ": 1762,
              "Ort": "Givisiez"
            },
            {
              "PLZ": 1763,
              "Ort": "Granges-Paccot"
            },
            {
              "PLZ": 1772,
              "Ort": "Ponthaux"
            },
            {
              "PLZ": 1772,
              "Ort": "Nierlet-les-Bois"
            },
            {
              "PLZ": 1772,
              "Ort": "Grolley"
            },
            {
              "PLZ": 1773,
              "Ort": "Léchelles"
            },
            {
              "PLZ": 1773,
              "Ort": "Chandon"
            },
            {
              "PLZ": 1773,
              "Ort": "Russy"
            },
            {
              "PLZ": 1774,
              "Ort": "Montagny-les-Monts"
            },
            {
              "PLZ": 1774,
              "Ort": "Cousset"
            },
            {
              "PLZ": 1775,
              "Ort": "Mannens"
            },
            {
              "PLZ": 1775,
              "Ort": "Grandsivaz"
            },
            {
              "PLZ": 1776,
              "Ort": "Montagny-la-Ville"
            },
            {
              "PLZ": 1782,
              "Ort": "Autafond"
            },
            {
              "PLZ": 1782,
              "Ort": "La Corbaz"
            },
            {
              "PLZ": 1782,
              "Ort": "Cormagens"
            },
            {
              "PLZ": 1782,
              "Ort": "Lossy"
            },
            {
              "PLZ": 1782,
              "Ort": "Formangueires"
            },
            {
              "PLZ": 1782,
              "Ort": "Belfaux"
            },
            {
              "PLZ": 1783,
              "Ort": "Pensier"
            },
            {
              "PLZ": 1783,
              "Ort": "Barberêche"
            },
            {
              "PLZ": 1784,
              "Ort": "Cournillens"
            },
            {
              "PLZ": 1784,
              "Ort": "Wallenried"
            },
            {
              "PLZ": 1784,
              "Ort": "Courtepin"
            },
            {
              "PLZ": 1785,
              "Ort": "Cressier FR"
            },
            {
              "PLZ": 1786,
              "Ort": "Sugiez"
            },
            {
              "PLZ": 1787,
              "Ort": "Môtier (Vully)"
            },
            {
              "PLZ": 1787,
              "Ort": "Mur (Vully) FR"
            },
            {
              "PLZ": 1787,
              "Ort": "Mur (Vully) VD"
            },
            {
              "PLZ": 1788,
              "Ort": "Praz (Vully)"
            },
            {
              "PLZ": 1789,
              "Ort": "Lugnorre"
            },
            {
              "PLZ": 1791,
              "Ort": "Courtaman"
            },
            {
              "PLZ": 1792,
              "Ort": "Guschelmuth"
            },
            {
              "PLZ": 1792,
              "Ort": "Cordast"
            },
            {
              "PLZ": 1793,
              "Ort": "Jeuss"
            },
            {
              "PLZ": 1794,
              "Ort": "Salvenach"
            },
            {
              "PLZ": 1795,
              "Ort": "Courlevon"
            },
            {
              "PLZ": 1796,
              "Ort": "Courgevaux"
            },
            {
              "PLZ": 1797,
              "Ort": "Muenchenwiler"
            },
            {
              "PLZ": 1800,
              "Ort": "Vevey"
            },
            {
              "PLZ": 1801,
              "Ort": "Le Mont-Pèlerin"
            },
            {
              "PLZ": 1802,
              "Ort": "Corseaux"
            },
            {
              "PLZ": 1803,
              "Ort": "Chardonne"
            },
            {
              "PLZ": 1804,
              "Ort": "Corsier-sur-Vevey"
            },
            {
              "PLZ": 1805,
              "Ort": "Jongny"
            },
            {
              "PLZ": 1806,
              "Ort": "St-Légier-La Chiésaz"
            },
            {
              "PLZ": 1807,
              "Ort": "Blonay"
            },
            {
              "PLZ": 1808,
              "Ort": "Les Monts-de-Corsier"
            },
            {
              "PLZ": 1809,
              "Ort": "Fenil-sur-Corsier"
            },
            {
              "PLZ": 1814,
              "Ort": "La Tour-de-Peilz"
            },
            {
              "PLZ": 1815,
              "Ort": "Clarens"
            },
            {
              "PLZ": 1816,
              "Ort": "Chailly-Montreux"
            },
            {
              "PLZ": 1817,
              "Ort": "Brent"
            },
            {
              "PLZ": 1820,
              "Ort": "Montreux"
            },
            {
              "PLZ": 1820,
              "Ort": "Veytaux"
            },
            {
              "PLZ": 1820,
              "Ort": "Territet"
            },
            {
              "PLZ": 1822,
              "Ort": "Chernex"
            },
            {
              "PLZ": 1823,
              "Ort": "Glion"
            },
            {
              "PLZ": 1824,
              "Ort": "Caux"
            },
            {
              "PLZ": 1832,
              "Ort": "Villard-sur-Chamby"
            },
            {
              "PLZ": 1832,
              "Ort": "Chamby"
            },
            {
              "PLZ": 1833,
              "Ort": "Les Avants"
            },
            {
              "PLZ": 1844,
              "Ort": "Villeneuve VD"
            },
            {
              "PLZ": 1845,
              "Ort": "Noville"
            },
            {
              "PLZ": 1846,
              "Ort": "Chessel"
            },
            {
              "PLZ": 1847,
              "Ort": "Rennaz"
            },
            {
              "PLZ": 1852,
              "Ort": "Roche VD"
            },
            {
              "PLZ": 1853,
              "Ort": "Yvorne"
            },
            {
              "PLZ": 1854,
              "Ort": "Leysin"
            },
            {
              "PLZ": 1856,
              "Ort": "Corbeyrier"
            },
            {
              "PLZ": 1860,
              "Ort": "Aigle"
            },
            {
              "PLZ": 1862,
              "Ort": "La Comballaz"
            },
            {
              "PLZ": 1862,
              "Ort": "Les Mosses"
            },
            {
              "PLZ": 1863,
              "Ort": "Le Sépey"
            },
            {
              "PLZ": 1864,
              "Ort": "Vers-lEglise"
            },
            {
              "PLZ": 1865,
              "Ort": "Les Diablerets"
            },
            {
              "PLZ": 1866,
              "Ort": "La Forclaz VD"
            },
            {
              "PLZ": 1867,
              "Ort": "St-Triphon"
            },
            {
              "PLZ": 1867,
              "Ort": "Panex"
            },
            {
              "PLZ": 1867,
              "Ort": "Ollon VD"
            },
            {
              "PLZ": 1868,
              "Ort": "Collombey"
            },
            {
              "PLZ": 1869,
              "Ort": "Massongex"
            },
            {
              "PLZ": 1870,
              "Ort": "Monthey"
            },
            {
              "PLZ": 1871,
              "Ort": "Choëx"
            },
            {
              "PLZ": 1871,
              "Ort": "Les Giettes"
            },
            {
              "PLZ": 1872,
              "Ort": "Troistorrents"
            },
            {
              "PLZ": 1873,
              "Ort": "Champoussin"
            },
            {
              "PLZ": 1873,
              "Ort": "Les Crosets"
            },
            {
              "PLZ": 1873,
              "Ort": "Val-dIlliez"
            },
            {
              "PLZ": 1874,
              "Ort": "Champéry"
            },
            {
              "PLZ": 1875,
              "Ort": "Morgins"
            },
            {
              "PLZ": 1880,
              "Ort": "Fenalet-sur-Bex"
            },
            {
              "PLZ": 1880,
              "Ort": "Frenières-sur-Bex"
            },
            {
              "PLZ": 1880,
              "Ort": "Les Plans-sur-Bex"
            },
            {
              "PLZ": 1880,
              "Ort": "Bex"
            },
            {
              "PLZ": 1882,
              "Ort": "Les Posses-sur-Bex"
            },
            {
              "PLZ": 1882,
              "Ort": "Gryon"
            },
            {
              "PLZ": 1884,
              "Ort": "Huémoz"
            },
            {
              "PLZ": 1884,
              "Ort": "Arveyes"
            },
            {
              "PLZ": 1884,
              "Ort": "Villars-sur-Ollon"
            },
            {
              "PLZ": 1885,
              "Ort": "Chesières"
            },
            {
              "PLZ": 1890,
              "Ort": "Mex VS"
            },
            {
              "PLZ": 1890,
              "Ort": "St-Maurice"
            },
            {
              "PLZ": 1891,
              "Ort": "Vérossaz"
            },
            {
              "PLZ": 1892,
              "Ort": "Lavey-les-Bains"
            },
            {
              "PLZ": 1892,
              "Ort": "Morcles"
            },
            {
              "PLZ": 1892,
              "Ort": "Lavey-Village"
            },
            {
              "PLZ": 1893,
              "Ort": "Muraz (Collombey)"
            },
            {
              "PLZ": 1895,
              "Ort": "Vionnaz"
            },
            {
              "PLZ": 1896,
              "Ort": "Miex"
            },
            {
              "PLZ": 1896,
              "Ort": "Vouvry"
            },
            {
              "PLZ": 1897,
              "Ort": "Les Evouettes"
            },
            {
              "PLZ": 1897,
              "Ort": "Bouveret"
            },
            {
              "PLZ": 1898,
              "Ort": "St-Gingolph"
            },
            {
              "PLZ": 1899,
              "Ort": "Torgon"
            },
            {
              "PLZ": 1902,
              "Ort": "Evionnaz"
            },
            {
              "PLZ": 1903,
              "Ort": "Collonges"
            },
            {
              "PLZ": 1904,
              "Ort": "Vernayaz"
            },
            {
              "PLZ": 1905,
              "Ort": "Dorénaz"
            },
            {
              "PLZ": 1906,
              "Ort": "Charrat"
            },
            {
              "PLZ": 1907,
              "Ort": "Saxon"
            },
            {
              "PLZ": 1908,
              "Ort": "Riddes"
            },
            {
              "PLZ": 1911,
              "Ort": "Mayens-de-Chamoson"
            },
            {
              "PLZ": 1911,
              "Ort": "Ovronnaz"
            },
            {
              "PLZ": 1912,
              "Ort": "Produit (Leytron)"
            },
            {
              "PLZ": 1912,
              "Ort": "Montagnon (Leytron)"
            },
            {
              "PLZ": 1912,
              "Ort": "Dugny (Leytron)"
            },
            {
              "PLZ": 1912,
              "Ort": "Leytron"
            },
            {
              "PLZ": 1913,
              "Ort": "Saillon"
            },
            {
              "PLZ": 1914,
              "Ort": "Auddes-sur-Riddes"
            },
            {
              "PLZ": 1914,
              "Ort": "Isérables"
            },
            {
              "PLZ": 1918,
              "Ort": "La Tzoumaz"
            },
            {
              "PLZ": 1920,
              "Ort": "Martigny"
            },
            {
              "PLZ": 1921,
              "Ort": "Martigny-Croix"
            },
            {
              "PLZ": 1922,
              "Ort": "Les Granges (Salvan)"
            },
            {
              "PLZ": 1922,
              "Ort": "Salvan"
            },
            {
              "PLZ": 1923,
              "Ort": "Le Trétien"
            },
            {
              "PLZ": 1923,
              "Ort": "Les Marécottes"
            },
            {
              "PLZ": 1925,
              "Ort": "Le Châtelard VS"
            },
            {
              "PLZ": 1925,
              "Ort": "Finhaut"
            },
            {
              "PLZ": 1926,
              "Ort": "Fully"
            },
            {
              "PLZ": 1927,
              "Ort": "Chemin"
            },
            {
              "PLZ": 1928,
              "Ort": "Ravoire"
            },
            {
              "PLZ": 1929,
              "Ort": "Trient"
            },
            {
              "PLZ": 1932,
              "Ort": "Les Valettes (Bovernier)"
            },
            {
              "PLZ": 1932,
              "Ort": "Bovernier"
            },
            {
              "PLZ": 1933,
              "Ort": "Vens (Sembrancher)"
            },
            {
              "PLZ": 1933,
              "Ort": "Chamoille (Sembrancher)"
            },
            {
              "PLZ": 1933,
              "Ort": "La Garde (Sembrancher)"
            },
            {
              "PLZ": 1933,
              "Ort": "Sembrancher"
            },
            {
              "PLZ": 1934,
              "Ort": "Bruson"
            },
            {
              "PLZ": 1934,
              "Ort": "Cotterg (Le Châble VS)"
            },
            {
              "PLZ": 1934,
              "Ort": "Villette (Le Châble VS)"
            },
            {
              "PLZ": 1934,
              "Ort": "Fontenelle (Le Châble VS)"
            },
            {
              "PLZ": 1934,
              "Ort": "Montagnier (Le Châble VS)"
            },
            {
              "PLZ": 1934,
              "Ort": "Le Châble VS"
            },
            {
              "PLZ": 1936,
              "Ort": "Verbier"
            },
            {
              "PLZ": 1937,
              "Ort": "Orsières"
            },
            {
              "PLZ": 1938,
              "Ort": "Champex-Lac"
            },
            {
              "PLZ": 1941,
              "Ort": "Cries (Vollèges)"
            },
            {
              "PLZ": 1941,
              "Ort": "Vollèges"
            },
            {
              "PLZ": 1942,
              "Ort": "Levron"
            },
            {
              "PLZ": 1943,
              "Ort": "Praz-de-Fort"
            },
            {
              "PLZ": 1944,
              "Ort": "La Fouly VS"
            },
            {
              "PLZ": 1945,
              "Ort": "Liddes"
            },
            {
              "PLZ": 1945,
              "Ort": "Fontaine Dessus (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Fontaine Dessous (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Dranse (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Chandonne (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Rive Haute (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Fornex (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Les Moulins VS (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Vichères (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Palasuit (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Chez Petit (Liddes)"
            },
            {
              "PLZ": 1945,
              "Ort": "Petit Vichères (Liddes)"
            },
            {
              "PLZ": 1946,
              "Ort": "Bourg-St-Pierre"
            },
            {
              "PLZ": 1947,
              "Ort": "Prarreyer (Versegères)"
            },
            {
              "PLZ": 1947,
              "Ort": "Les Places (Versegères)"
            },
            {
              "PLZ": 1947,
              "Ort": "La Montoz (Versegères)"
            },
            {
              "PLZ": 1947,
              "Ort": "Champsec (Versegères)"
            },
            {
              "PLZ": 1947,
              "Ort": "Le Fregnoley (Versegères)"
            },
            {
              "PLZ": 1947,
              "Ort": "Versegères"
            },
            {
              "PLZ": 1948,
              "Ort": "Lourtier"
            },
            {
              "PLZ": 1948,
              "Ort": "Fionnay"
            },
            {
              "PLZ": 1948,
              "Ort": "Sarreyer"
            },
            {
              "PLZ": 1948,
              "Ort": "Le Planchamp (Lourtier)"
            },
            {
              "PLZ": 1948,
              "Ort": "Le Morgnes (Lourtier)"
            },
            {
              "PLZ": 1950,
              "Ort": "Sion"
            },
            {
              "PLZ": 1955,
              "Ort": "St-Pierre-de-Clages"
            },
            {
              "PLZ": 1955,
              "Ort": "Les Vérines (Chamoson)"
            },
            {
              "PLZ": 1955,
              "Ort": "Némiaz (Chamoson)"
            },
            {
              "PLZ": 1955,
              "Ort": "Grugnay (Chamoson)"
            },
            {
              "PLZ": 1955,
              "Ort": "Chamoson"
            },
            {
              "PLZ": 1957,
              "Ort": "Ardon"
            },
            {
              "PLZ": 1958,
              "Ort": "Uvrier"
            },
            {
              "PLZ": 1958,
              "Ort": "St-Léonard"
            },
            {
              "PLZ": 1961,
              "Ort": "Vernamiège"
            },
            {
              "PLZ": 1962,
              "Ort": "Pont-de-la-Morge (Sion)"
            },
            {
              "PLZ": 1963,
              "Ort": "Vétroz"
            },
            {
              "PLZ": 1964,
              "Ort": "Conthey"
            },
            {
              "PLZ": 1965,
              "Ort": "Chandolin-près-Savièse"
            },
            {
              "PLZ": 1965,
              "Ort": "Drône VS"
            },
            {
              "PLZ": 1965,
              "Ort": "Roumaz (Savièse)"
            },
            {
              "PLZ": 1965,
              "Ort": "Granois (Savièse)"
            },
            {
              "PLZ": 1965,
              "Ort": "St-Germain (Savièse)"
            },
            {
              "PLZ": 1965,
              "Ort": "Ormône (Savièse)"
            },
            {
              "PLZ": 1965,
              "Ort": "Mayens-de-la-Zour (Savièse)"
            },
            {
              "PLZ": 1965,
              "Ort": "Monteiller-Savièse"
            },
            {
              "PLZ": 1965,
              "Ort": "Savièse"
            },
            {
              "PLZ": 1966,
              "Ort": "Signèse (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Fortunau (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Luc (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "St-Romain (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Saxonne (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Villa (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "La Place (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Botyre (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Blignoud (Ayent)"
            },
            {
              "PLZ": 1966,
              "Ort": "Argnoud (Ayent)"
            },
            {
              "PLZ": 1967,
              "Ort": "Bramois"
            },
            {
              "PLZ": 1968,
              "Ort": "Mase"
            },
            {
              "PLZ": 1969,
              "Ort": "Liez (St-Martin)"
            },
            {
              "PLZ": 1969,
              "Ort": "Trogne (St-Martin)"
            },
            {
              "PLZ": 1969,
              "Ort": "Suen (St-Martin)"
            },
            {
              "PLZ": 1969,
              "Ort": "Eison (St.Martin)"
            },
            {
              "PLZ": 1969,
              "Ort": "St-Martin VS"
            },
            {
              "PLZ": 1971,
              "Ort": "Champlan (Grimisuat)"
            },
            {
              "PLZ": 1971,
              "Ort": "Coméraz (Grimisuat)"
            },
            {
              "PLZ": 1971,
              "Ort": "Grimisuat"
            },
            {
              "PLZ": 1972,
              "Ort": "Anzère"
            },
            {
              "PLZ": 1973,
              "Ort": "Nax"
            },
            {
              "PLZ": 1974,
              "Ort": "Arbaz"
            },
            {
              "PLZ": 1975,
              "Ort": "St-Séverin"
            },
            {
              "PLZ": 1976,
              "Ort": "Aven"
            },
            {
              "PLZ": 1976,
              "Ort": "Daillon"
            },
            {
              "PLZ": 1976,
              "Ort": "Erde"
            },
            {
              "PLZ": 1977,
              "Ort": "Icogne"
            },
            {
              "PLZ": 1978,
              "Ort": "Lens"
            },
            {
              "PLZ": 1981,
              "Ort": "Vex"
            },
            {
              "PLZ": 1982,
              "Ort": "Euseigne"
            },
            {
              "PLZ": 1983,
              "Ort": "Lana (Evolène)"
            },
            {
              "PLZ": 1983,
              "Ort": "Evolène"
            },
            {
              "PLZ": 1984,
              "Ort": "Les Haudères"
            },
            {
              "PLZ": 1985,
              "Ort": "La Sage"
            },
            {
              "PLZ": 1986,
              "Ort": "Arolla"
            },
            {
              "PLZ": 1987,
              "Ort": "Mâche"
            },
            {
              "PLZ": 1987,
              "Ort": "Hérémence"
            },
            {
              "PLZ": 1988,
              "Ort": "Les Collons"
            },
            {
              "PLZ": 1988,
              "Ort": "Thyon"
            },
            {
              "PLZ": 1991,
              "Ort": "Arvillard (Salins)"
            },
            {
              "PLZ": 1991,
              "Ort": "Pravidondaz (Salins)"
            },
            {
              "PLZ": 1991,
              "Ort": "Turin (Salins)"
            },
            {
              "PLZ": 1991,
              "Ort": "Misériez (Salins)"
            },
            {
              "PLZ": 1991,
              "Ort": "Salins"
            },
            {
              "PLZ": 1992,
              "Ort": "Les Agettes"
            },
            {
              "PLZ": 1992,
              "Ort": "Les Mayens-de-Sion"
            },
            {
              "PLZ": 1992,
              "Ort": "La Vernaz (Les Agettes)"
            },
            {
              "PLZ": 1992,
              "Ort": "Crête-à-lOeil(Les Agettes)"
            },
            {
              "PLZ": 1993,
              "Ort": "Clèbes (Nendaz)"
            },
            {
              "PLZ": 1993,
              "Ort": "Veysonnaz"
            },
            {
              "PLZ": 1994,
              "Ort": "Aproz (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Fey (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Beuson (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Baar (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Brignon (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Bioley-de-Brignon (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Bieudron (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Condémines (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Saclentz (Nendaz)"
            },
            {
              "PLZ": 1996,
              "Ort": "Basse-Nendaz"
            },
            {
              "PLZ": 1997,
              "Ort": "Siviez (Nendaz)"
            },
            {
              "PLZ": 1997,
              "Ort": "Haute-Nendaz"
            },
            {
              "PLZ": 2000,
              "Ort": "Neuchâtel"
            },
            {
              "PLZ": 2012,
              "Ort": "Auvernier"
            },
            {
              "PLZ": 2013,
              "Ort": "Colombier NE"
            },
            {
              "PLZ": 2014,
              "Ort": "Bôle"
            },
            {
              "PLZ": 2015,
              "Ort": "Areuse"
            },
            {
              "PLZ": 2016,
              "Ort": "Cortaillod"
            },
            {
              "PLZ": 2017,
              "Ort": "Boudry"
            },
            {
              "PLZ": 2019,
              "Ort": "Chambrelien"
            },
            {
              "PLZ": 2019,
              "Ort": "Rochefort"
            },
            {
              "PLZ": 2022,
              "Ort": "Bevaix"
            },
            {
              "PLZ": 2023,
              "Ort": "Gorgier"
            },
            {
              "PLZ": 2024,
              "Ort": "St-Aubin-Sauges"
            },
            {
              "PLZ": 2025,
              "Ort": "Chez-le-Bart"
            },
            {
              "PLZ": 2027,
              "Ort": "Montalchez"
            },
            {
              "PLZ": 2027,
              "Ort": "Fresens"
            },
            {
              "PLZ": 2028,
              "Ort": "Vaumarcus"
            },
            {
              "PLZ": 2034,
              "Ort": "Peseux"
            },
            {
              "PLZ": 2035,
              "Ort": "Corcelles NE"
            },
            {
              "PLZ": 2036,
              "Ort": "Cormondrèche"
            },
            {
              "PLZ": 2037,
              "Ort": "Montmollin"
            },
            {
              "PLZ": 2037,
              "Ort": "Montezillon"
            },
            {
              "PLZ": 2042,
              "Ort": "Valangin"
            },
            {
              "PLZ": 2043,
              "Ort": "Boudevilliers"
            },
            {
              "PLZ": 2046,
              "Ort": "Fontaines NE"
            },
            {
              "PLZ": 2052,
              "Ort": "La Vue-des-Alpes"
            },
            {
              "PLZ": 2052,
              "Ort": "Fontainemelon"
            },
            {
              "PLZ": 2053,
              "Ort": "Cernier"
            },
            {
              "PLZ": 2054,
              "Ort": "Les Vieux-Prés"
            },
            {
              "PLZ": 2054,
              "Ort": "Chézard-St-Martin"
            },
            {
              "PLZ": 2056,
              "Ort": "Dombresson"
            },
            {
              "PLZ": 2057,
              "Ort": "Villiers"
            },
            {
              "PLZ": 2058,
              "Ort": "Le Pâquier NE"
            },
            {
              "PLZ": 2063,
              "Ort": "Engollon"
            },
            {
              "PLZ": 2063,
              "Ort": "Fenin"
            },
            {
              "PLZ": 2063,
              "Ort": "Saules"
            },
            {
              "PLZ": 2063,
              "Ort": "Vilars NE"
            },
            {
              "PLZ": 2065,
              "Ort": "Savagnier"
            },
            {
              "PLZ": 2067,
              "Ort": "Chaumont"
            },
            {
              "PLZ": 2068,
              "Ort": "Hauterive NE"
            },
            {
              "PLZ": 2072,
              "Ort": "St-Blaise"
            },
            {
              "PLZ": 2073,
              "Ort": "Enges"
            },
            {
              "PLZ": 2074,
              "Ort": "Marin-Epagnier"
            },
            {
              "PLZ": 2075,
              "Ort": "Thielle"
            },
            {
              "PLZ": 2075,
              "Ort": "Wavre"
            },
            {
              "PLZ": 2087,
              "Ort": "Cornaux NE"
            },
            {
              "PLZ": 2088,
              "Ort": "Cressier NE"
            },
            {
              "PLZ": 2103,
              "Ort": "Noiraigue"
            },
            {
              "PLZ": 2105,
              "Ort": "Travers"
            },
            {
              "PLZ": 2108,
              "Ort": "Couvet"
            },
            {
              "PLZ": 2112,
              "Ort": "Môtiers NE"
            },
            {
              "PLZ": 2113,
              "Ort": "Boveresse"
            },
            {
              "PLZ": 2114,
              "Ort": "Fleurier"
            },
            {
              "PLZ": 2115,
              "Ort": "Buttes"
            },
            {
              "PLZ": 2116,
              "Ort": "Mont-de-Buttes"
            },
            {
              "PLZ": 2117,
              "Ort": "La Côte-aux-Fées"
            },
            {
              "PLZ": 2123,
              "Ort": "St-Sulpice NE"
            },
            {
              "PLZ": 2124,
              "Ort": "Les Sagnettes"
            },
            {
              "PLZ": 2126,
              "Ort": "Les Verrières"
            },
            {
              "PLZ": 2127,
              "Ort": "Les Bayards"
            },
            {
              "PLZ": 2149,
              "Ort": "Champ-du-Moulin"
            },
            {
              "PLZ": 2149,
              "Ort": "Fretereules"
            },
            {
              "PLZ": 2149,
              "Ort": "Brot-Dessous"
            },
            {
              "PLZ": 2206,
              "Ort": "Les Geneveys-sur-Coffrane"
            },
            {
              "PLZ": 2207,
              "Ort": "Coffrane"
            },
            {
              "PLZ": 2208,
              "Ort": "Les Hauts-Geneveys"
            },
            {
              "PLZ": 2300,
              "Ort": "La Chaux-de-Fonds"
            },
            {
              "PLZ": 2300,
              "Ort": "La Cibourg"
            },
            {
              "PLZ": 2314,
              "Ort": "La Sagne NE"
            },
            {
              "PLZ": 2316,
              "Ort": "Petit-Martel"
            },
            {
              "PLZ": 2316,
              "Ort": "Les Ponts-de-Martel"
            },
            {
              "PLZ": 2318,
              "Ort": "Brot-Plamboz"
            },
            {
              "PLZ": 2322,
              "Ort": "Le Crêt-du-Locle"
            },
            {
              "PLZ": 2325,
              "Ort": "Les Planchettes"
            },
            {
              "PLZ": 2325,
              "Ort": "Les Joux-Derrière"
            },
            {
              "PLZ": 2333,
              "Ort": "La Cibourg"
            },
            {
              "PLZ": 2333,
              "Ort": "La Ferrière"
            },
            {
              "PLZ": 2336,
              "Ort": "Les Bois"
            },
            {
              "PLZ": 2338,
              "Ort": "Les Emibois"
            },
            {
              "PLZ": 2338,
              "Ort": "Muriaux"
            },
            {
              "PLZ": 2340,
              "Ort": "Le Noirmont"
            },
            {
              "PLZ": 2345,
              "Ort": "Le Cerneux-Veusil"
            },
            {
              "PLZ": 2345,
              "Ort": "La Chaux-des-Breuleux"
            },
            {
              "PLZ": 2345,
              "Ort": "Les Breuleux"
            },
            {
              "PLZ": 2350,
              "Ort": "Saignelégier"
            },
            {
              "PLZ": 2353,
              "Ort": "Les Pommerats"
            },
            {
              "PLZ": 2354,
              "Ort": "Goumois"
            },
            {
              "PLZ": 2360,
              "Ort": "Le Bémont"
            },
            {
              "PLZ": 2362,
              "Ort": "Montfavergier"
            },
            {
              "PLZ": 2362,
              "Ort": "Montfaucon"
            },
            {
              "PLZ": 2363,
              "Ort": "Les Enfers"
            },
            {
              "PLZ": 2364,
              "Ort": "St-Brais"
            },
            {
              "PLZ": 2400,
              "Ort": "Le Prévoux"
            },
            {
              "PLZ": 2400,
              "Ort": "Le Locle"
            },
            {
              "PLZ": 2405,
              "Ort": "La Chaux-du-Milieu"
            },
            {
              "PLZ": 2406,
              "Ort": "Le Brouillet"
            },
            {
              "PLZ": 2406,
              "Ort": "Les Taillères"
            },
            {
              "PLZ": 2406,
              "Ort": "La Châtagne"
            },
            {
              "PLZ": 2406,
              "Ort": "La Brévine"
            },
            {
              "PLZ": 2414,
              "Ort": "Le Cerneux-Péquignot"
            },
            {
              "PLZ": 2416,
              "Ort": "Les Brenets"
            },
            {
              "PLZ": 2500,
              "Ort": "Biel/Bienne"
            },
            {
              "PLZ": 2502,
              "Ort": "Biel/Bienne"
            },
            {
              "PLZ": 2503,
              "Ort": "Biel/Bienne"
            },
            {
              "PLZ": 2504,
              "Ort": "Biel/Bienne"
            },
            {
              "PLZ": 2505,
              "Ort": "Biel/Bienne"
            },
            {
              "PLZ": 2512,
              "Ort": "Tuescherz-Alfermée"
            },
            {
              "PLZ": 2513,
              "Ort": "Twann"
            },
            {
              "PLZ": 2514,
              "Ort": "Ligerz"
            },
            {
              "PLZ": 2515,
              "Ort": "Prêles"
            },
            {
              "PLZ": 2516,
              "Ort": "Lamboing"
            },
            {
              "PLZ": 2517,
              "Ort": "Diesse"
            },
            {
              "PLZ": 2518,
              "Ort": "Nods"
            },
            {
              "PLZ": 2520,
              "Ort": "La Neuveville"
            },
            {
              "PLZ": 2523,
              "Ort": "Lignières"
            },
            {
              "PLZ": 2525,
              "Ort": "Le Landeron"
            },
            {
              "PLZ": 2532,
              "Ort": "Magglingen/Macolin"
            },
            {
              "PLZ": 2533,
              "Ort": "Evilard"
            },
            {
              "PLZ": 2534,
              "Ort": "Les Prés-dOrvin"
            },
            {
              "PLZ": 2534,
              "Ort": "Orvin"
            },
            {
              "PLZ": 2535,
              "Ort": "Frinvillier"
            },
            {
              "PLZ": 2536,
              "Ort": "Plagne"
            },
            {
              "PLZ": 2537,
              "Ort": "Vauffelin"
            },
            {
              "PLZ": 2538,
              "Ort": "Romont BE"
            },
            {
              "PLZ": 2540,
              "Ort": "Grenchen"
            },
            {
              "PLZ": 2542,
              "Ort": "Pieterlen"
            },
            {
              "PLZ": 2543,
              "Ort": "Lengnau BE"
            },
            {
              "PLZ": 2544,
              "Ort": "Bettlach"
            },
            {
              "PLZ": 2545,
              "Ort": "Selzach"
            },
            {
              "PLZ": 2552,
              "Ort": "Orpund"
            },
            {
              "PLZ": 2553,
              "Ort": "Safnern"
            },
            {
              "PLZ": 2554,
              "Ort": "Meinisberg"
            },
            {
              "PLZ": 2555,
              "Ort": "Bruegg BE"
            },
            {
              "PLZ": 2556,
              "Ort": "Scheuren"
            },
            {
              "PLZ": 2556,
              "Ort": "Schwadernau"
            },
            {
              "PLZ": 2557,
              "Ort": "Studen BE"
            },
            {
              "PLZ": 2558,
              "Ort": "Aegerten"
            },
            {
              "PLZ": 2560,
              "Ort": "Nidau"
            },
            {
              "PLZ": 2562,
              "Ort": "Port"
            },
            {
              "PLZ": 2563,
              "Ort": "Ipsach"
            },
            {
              "PLZ": 2564,
              "Ort": "Bellmund"
            },
            {
              "PLZ": 2565,
              "Ort": "Jens"
            },
            {
              "PLZ": 2572,
              "Ort": "Moerigen"
            },
            {
              "PLZ": 2572,
              "Ort": "Sutz"
            },
            {
              "PLZ": 2575,
              "Ort": "Hagneck"
            },
            {
              "PLZ": 2575,
              "Ort": "Gerolfingen"
            },
            {
              "PLZ": 2575,
              "Ort": "Taeuffelen"
            },
            {
              "PLZ": 2576,
              "Ort": "Luescherz"
            },
            {
              "PLZ": 2577,
              "Ort": "Finsterhennen"
            },
            {
              "PLZ": 2577,
              "Ort": "Siselen BE"
            },
            {
              "PLZ": 2603,
              "Ort": "Péry"
            },
            {
              "PLZ": 2604,
              "Ort": "La Heutte"
            },
            {
              "PLZ": 2605,
              "Ort": "Sonceboz-Sombeval"
            },
            {
              "PLZ": 2606,
              "Ort": "Corgémont"
            },
            {
              "PLZ": 2607,
              "Ort": "Cortébert"
            },
            {
              "PLZ": 2608,
              "Ort": "Montagne-de-Courtelary"
            },
            {
              "PLZ": 2608,
              "Ort": "Courtelary"
            },
            {
              "PLZ": 2610,
              "Ort": "Mont-Soleil"
            },
            {
              "PLZ": 2610,
              "Ort": "Mont-Crosin"
            },
            {
              "PLZ": 2610,
              "Ort": "Les Pontins"
            },
            {
              "PLZ": 2610,
              "Ort": "St-Imier"
            },
            {
              "PLZ": 2612,
              "Ort": "Cormoret"
            },
            {
              "PLZ": 2613,
              "Ort": "Villeret"
            },
            {
              "PLZ": 2615,
              "Ort": "Montagne-de-Sonvilier"
            },
            {
              "PLZ": 2615,
              "Ort": "Sonvilier"
            },
            {
              "PLZ": 2616,
              "Ort": "La Cibourg"
            },
            {
              "PLZ": 2616,
              "Ort": "Renan BE"
            },
            {
              "PLZ": 2710,
              "Ort": "Tavannes"
            },
            {
              "PLZ": 2712,
              "Ort": "Le Fuet"
            },
            {
              "PLZ": 2713,
              "Ort": "Bellelay"
            },
            {
              "PLZ": 2714,
              "Ort": "Le Prédame"
            },
            {
              "PLZ": 2714,
              "Ort": "Les Genevez JU"
            },
            {
              "PLZ": 2715,
              "Ort": "Monible"
            },
            {
              "PLZ": 2715,
              "Ort": "Châtelat"
            },
            {
              "PLZ": 2716,
              "Ort": "Sornetan"
            },
            {
              "PLZ": 2717,
              "Ort": "Fornet-Dessous"
            },
            {
              "PLZ": 2717,
              "Ort": "Rebévelier"
            },
            {
              "PLZ": 2718,
              "Ort": "Fornet-Dessus"
            },
            {
              "PLZ": 2718,
              "Ort": "Lajoux JU"
            },
            {
              "PLZ": 2720,
              "Ort": "La Tanne"
            },
            {
              "PLZ": 2720,
              "Ort": "Tramelan"
            },
            {
              "PLZ": 2722,
              "Ort": "Les Reussilles"
            },
            {
              "PLZ": 2723,
              "Ort": "Mont-Tramelan"
            },
            {
              "PLZ": 2732,
              "Ort": "Saicourt"
            },
            {
              "PLZ": 2732,
              "Ort": "Saules BE"
            },
            {
              "PLZ": 2732,
              "Ort": "Loveresse"
            },
            {
              "PLZ": 2732,
              "Ort": "Reconvilier"
            },
            {
              "PLZ": 2733,
              "Ort": "Pontenet"
            },
            {
              "PLZ": 2735,
              "Ort": "Bévilard"
            },
            {
              "PLZ": 2735,
              "Ort": "Champoz"
            },
            {
              "PLZ": 2735,
              "Ort": "Malleray"
            },
            {
              "PLZ": 2736,
              "Ort": "Sorvilier"
            },
            {
              "PLZ": 2738,
              "Ort": "Court"
            },
            {
              "PLZ": 2740,
              "Ort": "Moutier"
            },
            {
              "PLZ": 2742,
              "Ort": "Perrefitte"
            },
            {
              "PLZ": 2743,
              "Ort": "Eschert"
            },
            {
              "PLZ": 2744,
              "Ort": "Belprahon"
            },
            {
              "PLZ": 2745,
              "Ort": "Grandval"
            },
            {
              "PLZ": 2746,
              "Ort": "Crémines"
            },
            {
              "PLZ": 2747,
              "Ort": "Seehof"
            },
            {
              "PLZ": 2747,
              "Ort": "Corcelles BE"
            },
            {
              "PLZ": 2748,
              "Ort": "Souboz"
            },
            {
              "PLZ": 2748,
              "Ort": "Les Ecorcheresses"
            },
            {
              "PLZ": 2762,
              "Ort": "Roches BE"
            },
            {
              "PLZ": 2800,
              "Ort": "Delémont"
            },
            {
              "PLZ": 2802,
              "Ort": "Develier"
            },
            {
              "PLZ": 2803,
              "Ort": "Bourrignon"
            },
            {
              "PLZ": 2805,
              "Ort": "Soyhières"
            },
            {
              "PLZ": 2806,
              "Ort": "Mettembert"
            },
            {
              "PLZ": 2807,
              "Ort": "Lucelle"
            },
            {
              "PLZ": 2807,
              "Ort": "Pleigne"
            },
            {
              "PLZ": 2812,
              "Ort": "Movelier"
            },
            {
              "PLZ": 2813,
              "Ort": "Ederswiler"
            },
            {
              "PLZ": 2814,
              "Ort": "Roggenburg"
            },
            {
              "PLZ": 2822,
              "Ort": "Courroux"
            },
            {
              "PLZ": 2823,
              "Ort": "Courcelon"
            },
            {
              "PLZ": 2824,
              "Ort": "Vicques"
            },
            {
              "PLZ": 2825,
              "Ort": "Courchapoix"
            },
            {
              "PLZ": 2826,
              "Ort": "Corban"
            },
            {
              "PLZ": 2827,
              "Ort": "Schelten"
            },
            {
              "PLZ": 2827,
              "Ort": "Mervelier"
            },
            {
              "PLZ": 2828,
              "Ort": "Montsevelier"
            },
            {
              "PLZ": 2829,
              "Ort": "Vermes"
            },
            {
              "PLZ": 2830,
              "Ort": "Vellerat"
            },
            {
              "PLZ": 2830,
              "Ort": "Courrendlin"
            },
            {
              "PLZ": 2832,
              "Ort": "Rebeuvelier"
            },
            {
              "PLZ": 2842,
              "Ort": "Rossemaison"
            },
            {
              "PLZ": 2843,
              "Ort": "Châtillon JU"
            },
            {
              "PLZ": 2852,
              "Ort": "Courtételle"
            },
            {
              "PLZ": 2853,
              "Ort": "Courfaivre"
            },
            {
              "PLZ": 2854,
              "Ort": "Bassecourt"
            },
            {
              "PLZ": 2855,
              "Ort": "Glovelier"
            },
            {
              "PLZ": 2856,
              "Ort": "Boécourt"
            },
            {
              "PLZ": 2857,
              "Ort": "Montavon"
            },
            {
              "PLZ": 2863,
              "Ort": "Undervelier"
            },
            {
              "PLZ": 2864,
              "Ort": "Soulce"
            },
            {
              "PLZ": 2873,
              "Ort": "Saulcy"
            },
            {
              "PLZ": 2874,
              "Ort": "Montfavergier"
            },
            {
              "PLZ": 2874,
              "Ort": "St-Brais"
            },
            {
              "PLZ": 2875,
              "Ort": "Les Enfers"
            },
            {
              "PLZ": 2875,
              "Ort": "Montfaucon"
            },
            {
              "PLZ": 2877,
              "Ort": "Le Bémont JU"
            },
            {
              "PLZ": 2882,
              "Ort": "St-Ursanne"
            },
            {
              "PLZ": 2883,
              "Ort": "Montmelon"
            },
            {
              "PLZ": 2884,
              "Ort": "Montenol"
            },
            {
              "PLZ": 2885,
              "Ort": "Epauvillers"
            },
            {
              "PLZ": 2886,
              "Ort": "Epiquerez"
            },
            {
              "PLZ": 2887,
              "Ort": "Soubey"
            },
            {
              "PLZ": 2888,
              "Ort": "Seleute"
            },
            {
              "PLZ": 2889,
              "Ort": "Ocourt"
            },
            {
              "PLZ": 2900,
              "Ort": "Porrentruy"
            },
            {
              "PLZ": 2902,
              "Ort": "Fontenais"
            },
            {
              "PLZ": 2903,
              "Ort": "Villars-sur Fontenais"
            },
            {
              "PLZ": 2904,
              "Ort": "Bressaucourt"
            },
            {
              "PLZ": 2905,
              "Ort": "Courtedoux"
            },
            {
              "PLZ": 2906,
              "Ort": "Chevenez"
            },
            {
              "PLZ": 2907,
              "Ort": "Rocourt"
            },
            {
              "PLZ": 2908,
              "Ort": "Grandfontaine"
            },
            {
              "PLZ": 2912,
              "Ort": "Roche-dOr"
            },
            {
              "PLZ": 2912,
              "Ort": "Réclère"
            },
            {
              "PLZ": 2914,
              "Ort": "Damvant"
            },
            {
              "PLZ": 2915,
              "Ort": "Bure"
            },
            {
              "PLZ": 2916,
              "Ort": "Fahy"
            },
            {
              "PLZ": 2922,
              "Ort": "Courchavon"
            },
            {
              "PLZ": 2923,
              "Ort": "Courtemaîche"
            },
            {
              "PLZ": 2924,
              "Ort": "Montignez"
            },
            {
              "PLZ": 2925,
              "Ort": "Buix"
            },
            {
              "PLZ": 2926,
              "Ort": "Boncourt"
            },
            {
              "PLZ": 2932,
              "Ort": "Coeuve"
            },
            {
              "PLZ": 2933,
              "Ort": "Damphreux"
            },
            {
              "PLZ": 2933,
              "Ort": "Lugnez"
            },
            {
              "PLZ": 2935,
              "Ort": "Beurnevésin"
            },
            {
              "PLZ": 2942,
              "Ort": "Alle"
            },
            {
              "PLZ": 2943,
              "Ort": "Vendlincourt"
            },
            {
              "PLZ": 2944,
              "Ort": "Bonfol"
            },
            {
              "PLZ": 2946,
              "Ort": "Miécourt"
            },
            {
              "PLZ": 2947,
              "Ort": "Charmoille"
            },
            {
              "PLZ": 2950,
              "Ort": "Courtemautruy"
            },
            {
              "PLZ": 2950,
              "Ort": "Courgenay"
            },
            {
              "PLZ": 2952,
              "Ort": "Cornol"
            },
            {
              "PLZ": 2953,
              "Ort": "Fregiécourt"
            },
            {
              "PLZ": 2953,
              "Ort": "Pleujouse"
            },
            {
              "PLZ": 2954,
              "Ort": "Asuel"
            },
            {
              "PLZ": 3000,
              "Ort": "Bern"
            },
            {
              "PLZ": 3004,
              "Ort": "Bern"
            },
            {
              "PLZ": 3005,
              "Ort": "Bern"
            },
            {
              "PLZ": 3006,
              "Ort": "Bern"
            },
            {
              "PLZ": 3007,
              "Ort": "Bern"
            },
            {
              "PLZ": 3008,
              "Ort": "Bern"
            },
            {
              "PLZ": 3010,
              "Ort": "Bern"
            },
            {
              "PLZ": 3011,
              "Ort": "Bern"
            },
            {
              "PLZ": 3012,
              "Ort": "Bern"
            },
            {
              "PLZ": 3013,
              "Ort": "Bern"
            },
            {
              "PLZ": 3014,
              "Ort": "Bern"
            },
            {
              "PLZ": 3015,
              "Ort": "Bern"
            },
            {
              "PLZ": 3018,
              "Ort": "Bern"
            },
            {
              "PLZ": 3019,
              "Ort": "Bern"
            },
            {
              "PLZ": 3020,
              "Ort": "Bern"
            },
            {
              "PLZ": 3027,
              "Ort": "Bern"
            },
            {
              "PLZ": 3032,
              "Ort": "Hinterkappelen"
            },
            {
              "PLZ": 3033,
              "Ort": "Wohlen b. Bern"
            },
            {
              "PLZ": 3034,
              "Ort": "Murzelen"
            },
            {
              "PLZ": 3035,
              "Ort": "Frieswil"
            },
            {
              "PLZ": 3036,
              "Ort": "Detligen"
            },
            {
              "PLZ": 3037,
              "Ort": "Herrenschwanden"
            },
            {
              "PLZ": 3038,
              "Ort": "Kirchlindach"
            },
            {
              "PLZ": 3042,
              "Ort": "Ortschwaben"
            },
            {
              "PLZ": 3043,
              "Ort": "Uettligen"
            },
            {
              "PLZ": 3044,
              "Ort": "Innerberg"
            },
            {
              "PLZ": 3045,
              "Ort": "Meikirch"
            },
            {
              "PLZ": 3046,
              "Ort": "Wahlendorf"
            },
            {
              "PLZ": 3047,
              "Ort": "Bremgarten b. Bern"
            },
            {
              "PLZ": 3048,
              "Ort": "Worblaufen"
            },
            {
              "PLZ": 3049,
              "Ort": "Saeriswil"
            },
            {
              "PLZ": 3052,
              "Ort": "Zollikofen"
            },
            {
              "PLZ": 3053,
              "Ort": "Deisswil b. Muenchenbuchsee"
            },
            {
              "PLZ": 3053,
              "Ort": "Diemerswil"
            },
            {
              "PLZ": 3053,
              "Ort": "Wiggiswil"
            },
            {
              "PLZ": 3053,
              "Ort": "Laetti"
            },
            {
              "PLZ": 3053,
              "Ort": "Muenchenbuchsee"
            },
            {
              "PLZ": 3054,
              "Ort": "Schuepfen"
            },
            {
              "PLZ": 3063,
              "Ort": "Ittigen"
            },
            {
              "PLZ": 3065,
              "Ort": "Bolligen"
            },
            {
              "PLZ": 3066,
              "Ort": "Stettlen"
            },
            {
              "PLZ": 3067,
              "Ort": "Boll"
            },
            {
              "PLZ": 3068,
              "Ort": "Utzigen"
            },
            {
              "PLZ": 3072,
              "Ort": "Ostermundigen"
            },
            {
              "PLZ": 3073,
              "Ort": "Guemligen"
            },
            {
              "PLZ": 3074,
              "Ort": "Muri b. Bern"
            },
            {
              "PLZ": 3075,
              "Ort": "Ruefenacht BE"
            },
            {
              "PLZ": 3076,
              "Ort": "Worb"
            },
            {
              "PLZ": 3077,
              "Ort": "Enggistein"
            },
            {
              "PLZ": 3078,
              "Ort": "Richigen"
            },
            {
              "PLZ": 3082,
              "Ort": "Schlosswil"
            },
            {
              "PLZ": 3083,
              "Ort": "Trimstein"
            },
            {
              "PLZ": 3084,
              "Ort": "Wabern"
            },
            {
              "PLZ": 3086,
              "Ort": "Englisberg"
            },
            {
              "PLZ": 3086,
              "Ort": "Zimmerwald"
            },
            {
              "PLZ": 3087,
              "Ort": "Niedermuhlern"
            },
            {
              "PLZ": 3088,
              "Ort": "Oberbuetschel"
            },
            {
              "PLZ": 3088,
              "Ort": "Rueeggisberg"
            },
            {
              "PLZ": 3089,
              "Ort": "Hinterfultigen"
            },
            {
              "PLZ": 3095,
              "Ort": "Spiegel b. Bern"
            },
            {
              "PLZ": 3096,
              "Ort": "Oberbalm"
            },
            {
              "PLZ": 3097,
              "Ort": "Liebefeld"
            },
            {
              "PLZ": 3098,
              "Ort": "Koeniz"
            },
            {
              "PLZ": 3098,
              "Ort": "Schliern b. Koeniz"
            },
            {
              "PLZ": 3099,
              "Ort": "Rueti b. Riggisberg"
            },
            {
              "PLZ": 3110,
              "Ort": "Muensingen"
            },
            {
              "PLZ": 3111,
              "Ort": "Taegertschi"
            },
            {
              "PLZ": 3112,
              "Ort": "Allmendingen b. Bern"
            },
            {
              "PLZ": 3113,
              "Ort": "Rubigen"
            },
            {
              "PLZ": 3114,
              "Ort": "Wichtrach"
            },
            {
              "PLZ": 3115,
              "Ort": "Gerzensee"
            },
            {
              "PLZ": 3116,
              "Ort": "Muehledorf BE"
            },
            {
              "PLZ": 3116,
              "Ort": "Noflen BE"
            },
            {
              "PLZ": 3116,
              "Ort": "Kirchdorf BE"
            },
            {
              "PLZ": 3122,
              "Ort": "Kehrsatz"
            },
            {
              "PLZ": 3123,
              "Ort": "Belp"
            },
            {
              "PLZ": 3124,
              "Ort": "Belpberg"
            },
            {
              "PLZ": 3125,
              "Ort": "Toffen"
            },
            {
              "PLZ": 3126,
              "Ort": "Gelterfingen"
            },
            {
              "PLZ": 3126,
              "Ort": "Kaufdorf"
            },
            {
              "PLZ": 3127,
              "Ort": "Lohnstorf"
            },
            {
              "PLZ": 3127,
              "Ort": "Muehlethurnen"
            },
            {
              "PLZ": 3128,
              "Ort": "Kirchenthurnen"
            },
            {
              "PLZ": 3128,
              "Ort": "Ruemligen"
            },
            {
              "PLZ": 3132,
              "Ort": "Riggisberg"
            },
            {
              "PLZ": 3144,
              "Ort": "Gasel"
            },
            {
              "PLZ": 3145,
              "Ort": "Niederscherli"
            },
            {
              "PLZ": 3147,
              "Ort": "Mittelhaeusern"
            },
            {
              "PLZ": 3148,
              "Ort": "Lanzenhaeusern"
            },
            {
              "PLZ": 3150,
              "Ort": "Schwarzenburg"
            },
            {
              "PLZ": 3152,
              "Ort": "Mamishaus"
            },
            {
              "PLZ": 3153,
              "Ort": "Rueschegg Gambach"
            },
            {
              "PLZ": 3154,
              "Ort": "Rueschegg Heubach"
            },
            {
              "PLZ": 3155,
              "Ort": "Helgisried-Rohrbach"
            },
            {
              "PLZ": 3156,
              "Ort": "Riffenmatt"
            },
            {
              "PLZ": 3157,
              "Ort": "Milken"
            },
            {
              "PLZ": 3158,
              "Ort": "Guggisberg"
            },
            {
              "PLZ": 3159,
              "Ort": "Riedstaett"
            },
            {
              "PLZ": 3172,
              "Ort": "Niederwangen b. Bern"
            },
            {
              "PLZ": 3173,
              "Ort": "Oberwangen b. Bern"
            },
            {
              "PLZ": 3174,
              "Ort": "Thoerishaus"
            },
            {
              "PLZ": 3175,
              "Ort": "Flamatt"
            },
            {
              "PLZ": 3176,
              "Ort": "Neuenegg"
            },
            {
              "PLZ": 3177,
              "Ort": "Laupen BE"
            },
            {
              "PLZ": 3178,
              "Ort": "Boesingen"
            },
            {
              "PLZ": 3179,
              "Ort": "Kriechenwil"
            },
            {
              "PLZ": 3182,
              "Ort": "Ueberstorf"
            },
            {
              "PLZ": 3183,
              "Ort": "Albligen"
            },
            {
              "PLZ": 3184,
              "Ort": "Wuennewil"
            },
            {
              "PLZ": 3185,
              "Ort": "Schmitten FR"
            },
            {
              "PLZ": 3186,
              "Ort": "Duedingen"
            },
            {
              "PLZ": 3202,
              "Ort": "Frauenkappelen"
            },
            {
              "PLZ": 3203,
              "Ort": "Muehleberg"
            },
            {
              "PLZ": 3204,
              "Ort": "Rosshaeusern"
            },
            {
              "PLZ": 3205,
              "Ort": "Guemmenen"
            },
            {
              "PLZ": 3206,
              "Ort": "Rizenbach"
            },
            {
              "PLZ": 3206,
              "Ort": "Ferenbalm"
            },
            {
              "PLZ": 3206,
              "Ort": "Biberen"
            },
            {
              "PLZ": 3206,
              "Ort": "Gammen"
            },
            {
              "PLZ": 3206,
              "Ort": "Wallenbuch"
            },
            {
              "PLZ": 3207,
              "Ort": "Wileroltigen"
            },
            {
              "PLZ": 3207,
              "Ort": "Golaten"
            },
            {
              "PLZ": 3208,
              "Ort": "Gurbrue"
            },
            {
              "PLZ": 3210,
              "Ort": "Kerzers"
            },
            {
              "PLZ": 3212,
              "Ort": "Kleingurmels"
            },
            {
              "PLZ": 3212,
              "Ort": "Gurmels"
            },
            {
              "PLZ": 3213,
              "Ort": "Liebistorf"
            },
            {
              "PLZ": 3213,
              "Ort": "Kleinboesingen"
            },
            {
              "PLZ": 3214,
              "Ort": "Ulmiz"
            },
            {
              "PLZ": 3215,
              "Ort": "Gempenach"
            },
            {
              "PLZ": 3215,
              "Ort": "Buechslen"
            },
            {
              "PLZ": 3215,
              "Ort": "Lurtigen"
            },
            {
              "PLZ": 3216,
              "Ort": "Agriswil"
            },
            {
              "PLZ": 3216,
              "Ort": "Ried b. Kerzers"
            },
            {
              "PLZ": 3225,
              "Ort": "Muentschemier"
            },
            {
              "PLZ": 3226,
              "Ort": "Treiten"
            },
            {
              "PLZ": 3232,
              "Ort": "Ins"
            },
            {
              "PLZ": 3233,
              "Ort": "Tschugg"
            },
            {
              "PLZ": 3234,
              "Ort": "Vinelz"
            },
            {
              "PLZ": 3235,
              "Ort": "Erlach"
            },
            {
              "PLZ": 3236,
              "Ort": "Gampelen"
            },
            {
              "PLZ": 3237,
              "Ort": "Bruettelen"
            },
            {
              "PLZ": 3238,
              "Ort": "Gals"
            },
            {
              "PLZ": 3250,
              "Ort": "Lyss"
            },
            {
              "PLZ": 3251,
              "Ort": "Ruppoldsried"
            },
            {
              "PLZ": 3251,
              "Ort": "Wengi b. Bueren"
            },
            {
              "PLZ": 3252,
              "Ort": "Worben"
            },
            {
              "PLZ": 3253,
              "Ort": "Schnottwil"
            },
            {
              "PLZ": 3254,
              "Ort": "Balm b. Messen"
            },
            {
              "PLZ": 3254,
              "Ort": "Messen"
            },
            {
              "PLZ": 3255,
              "Ort": "Rapperswil BE"
            },
            {
              "PLZ": 3256,
              "Ort": "Dieterswil"
            },
            {
              "PLZ": 3256,
              "Ort": "Bangerten b. Dieterswil"
            },
            {
              "PLZ": 3256,
              "Ort": "Seewil"
            },
            {
              "PLZ": 3257,
              "Ort": "Ammerzwil BE"
            },
            {
              "PLZ": 3257,
              "Ort": "Grossaffoltern"
            },
            {
              "PLZ": 3262,
              "Ort": "Suberg"
            },
            {
              "PLZ": 3263,
              "Ort": "Bueetigen"
            },
            {
              "PLZ": 3264,
              "Ort": "Diessbach b. Bueren"
            },
            {
              "PLZ": 3266,
              "Ort": "Wiler b. Seedorf"
            },
            {
              "PLZ": 3267,
              "Ort": "Seedorf BE"
            },
            {
              "PLZ": 3268,
              "Ort": "Lobsigen"
            },
            {
              "PLZ": 3270,
              "Ort": "Aarberg"
            },
            {
              "PLZ": 3271,
              "Ort": "Radelfingen b. Aarberg"
            },
            {
              "PLZ": 3272,
              "Ort": "Epsach"
            },
            {
              "PLZ": 3272,
              "Ort": "Walperswil"
            },
            {
              "PLZ": 3273,
              "Ort": "Kappelen"
            },
            {
              "PLZ": 3274,
              "Ort": "Hermrigen"
            },
            {
              "PLZ": 3274,
              "Ort": "Buehl b. Aarberg"
            },
            {
              "PLZ": 3274,
              "Ort": "Merzligen"
            },
            {
              "PLZ": 3280,
              "Ort": "Meyriez"
            },
            {
              "PLZ": 3280,
              "Ort": "Greng"
            },
            {
              "PLZ": 3280,
              "Ort": "Murten"
            },
            {
              "PLZ": 3282,
              "Ort": "Bargen BE"
            },
            {
              "PLZ": 3283,
              "Ort": "Niederried b. Kallnach"
            },
            {
              "PLZ": 3283,
              "Ort": "Kallnach"
            },
            {
              "PLZ": 3284,
              "Ort": "Fraeschels"
            },
            {
              "PLZ": 3285,
              "Ort": "Galmiz"
            },
            {
              "PLZ": 3286,
              "Ort": "Muntelier"
            },
            {
              "PLZ": 3292,
              "Ort": "Busswil b. Bueren"
            },
            {
              "PLZ": 3293,
              "Ort": "Dotzigen"
            },
            {
              "PLZ": 3294,
              "Ort": "Meienried"
            },
            {
              "PLZ": 3294,
              "Ort": "Bueren an der Aare"
            },
            {
              "PLZ": 3295,
              "Ort": "Rueti b. Bueren"
            },
            {
              "PLZ": 3296,
              "Ort": "Arch"
            },
            {
              "PLZ": 3297,
              "Ort": "Leuzigen"
            },
            {
              "PLZ": 3298,
              "Ort": "Oberwil b. Bueren"
            },
            {
              "PLZ": 3302,
              "Ort": "Moosseedorf"
            },
            {
              "PLZ": 3303,
              "Ort": "Zuzwil BE"
            },
            {
              "PLZ": 3303,
              "Ort": "Ballmoos"
            },
            {
              "PLZ": 3303,
              "Ort": "Muenchringen"
            },
            {
              "PLZ": 3303,
              "Ort": "Jegenstorf"
            },
            {
              "PLZ": 3305,
              "Ort": "Iffwil"
            },
            {
              "PLZ": 3305,
              "Ort": "Scheunen"
            },
            {
              "PLZ": 3306,
              "Ort": "Etzelkofen"
            },
            {
              "PLZ": 3307,
              "Ort": "Brunnenthal"
            },
            {
              "PLZ": 3308,
              "Ort": "Grafenried"
            },
            {
              "PLZ": 3309,
              "Ort": "Kernenried"
            },
            {
              "PLZ": 3309,
              "Ort": "Zauggenried"
            },
            {
              "PLZ": 3312,
              "Ort": "Fraubrunnen"
            },
            {
              "PLZ": 3313,
              "Ort": "Bueren zum Hof"
            },
            {
              "PLZ": 3314,
              "Ort": "Schalunen"
            },
            {
              "PLZ": 3315,
              "Ort": "Kraeiligen"
            },
            {
              "PLZ": 3315,
              "Ort": "Baetterkinden"
            },
            {
              "PLZ": 3317,
              "Ort": "Limpach"
            },
            {
              "PLZ": 3317,
              "Ort": "Muelchi"
            },
            {
              "PLZ": 3322,
              "Ort": "Mattstetten"
            },
            {
              "PLZ": 3322,
              "Ort": "Urtenen-Schoenbuehl"
            },
            {
              "PLZ": 3323,
              "Ort": "Baeriswil BE"
            },
            {
              "PLZ": 3324,
              "Ort": "Moetschwil"
            },
            {
              "PLZ": 3324,
              "Ort": "Hindelbank"
            },
            {
              "PLZ": 3325,
              "Ort": "Hettiswil b. Hindelbank"
            },
            {
              "PLZ": 3326,
              "Ort": "Krauchthal"
            },
            {
              "PLZ": 3360,
              "Ort": "Herzogenbuchsee"
            },
            {
              "PLZ": 3362,
              "Ort": "Niederoenz"
            },
            {
              "PLZ": 3363,
              "Ort": "Oberoenz"
            },
            {
              "PLZ": 3365,
              "Ort": "Seeberg"
            },
            {
              "PLZ": 3365,
              "Ort": "Grasswil"
            },
            {
              "PLZ": 3366,
              "Ort": "Bettenhausen"
            },
            {
              "PLZ": 3366,
              "Ort": "Bollodingen"
            },
            {
              "PLZ": 3367,
              "Ort": "Ochlenberg"
            },
            {
              "PLZ": 3367,
              "Ort": "Thoerigen"
            },
            {
              "PLZ": 3368,
              "Ort": "Bleienbach"
            },
            {
              "PLZ": 3372,
              "Ort": "Wanzwil"
            },
            {
              "PLZ": 3373,
              "Ort": "Heimenhausen"
            },
            {
              "PLZ": 3373,
              "Ort": "Roethenbach Herzogenbuchsee"
            },
            {
              "PLZ": 3374,
              "Ort": "Wangenried"
            },
            {
              "PLZ": 3375,
              "Ort": "Inkwil"
            },
            {
              "PLZ": 3376,
              "Ort": "Graben"
            },
            {
              "PLZ": 3376,
              "Ort": "Berken"
            },
            {
              "PLZ": 3377,
              "Ort": "Walliswil b. Wangen"
            },
            {
              "PLZ": 3380,
              "Ort": "Walliswil b. Niederbipp"
            },
            {
              "PLZ": 3380,
              "Ort": "Wangen an der Aare"
            },
            {
              "PLZ": 3400,
              "Ort": "Burgdorf"
            },
            {
              "PLZ": 3412,
              "Ort": "Heimiswil"
            },
            {
              "PLZ": 3413,
              "Ort": "Kaltacker"
            },
            {
              "PLZ": 3414,
              "Ort": "Oberburg"
            },
            {
              "PLZ": 3415,
              "Ort": "Schafhausen im Emmental"
            },
            {
              "PLZ": 3415,
              "Ort": "Rueegsauschachen"
            },
            {
              "PLZ": 3415,
              "Ort": "Hasle b. Burgdorf"
            },
            {
              "PLZ": 3416,
              "Ort": "Affoltern im Emmental"
            },
            {
              "PLZ": 3417,
              "Ort": "Rueegsau"
            },
            {
              "PLZ": 3418,
              "Ort": "Rueegsbach"
            },
            {
              "PLZ": 3419,
              "Ort": "Biembach im Emmental"
            },
            {
              "PLZ": 3421,
              "Ort": "Rueti b. Lyssach"
            },
            {
              "PLZ": 3421,
              "Ort": "Lyssach"
            },
            {
              "PLZ": 3422,
              "Ort": "Ruedtligen"
            },
            {
              "PLZ": 3422,
              "Ort": "Alchenflueh"
            },
            {
              "PLZ": 3422,
              "Ort": "Kirchberg BE"
            },
            {
              "PLZ": 3423,
              "Ort": "Ersigen"
            },
            {
              "PLZ": 3424,
              "Ort": "Niederoesch"
            },
            {
              "PLZ": 3424,
              "Ort": "Oberoesch"
            },
            {
              "PLZ": 3425,
              "Ort": "Willadingen"
            },
            {
              "PLZ": 3425,
              "Ort": "Koppigen"
            },
            {
              "PLZ": 3426,
              "Ort": "Aefligen"
            },
            {
              "PLZ": 3427,
              "Ort": "Utzenstorf"
            },
            {
              "PLZ": 3428,
              "Ort": "Wiler b. Utzenstorf"
            },
            {
              "PLZ": 3429,
              "Ort": "Hellsau"
            },
            {
              "PLZ": 3429,
              "Ort": "Hoechstetten"
            },
            {
              "PLZ": 3432,
              "Ort": "Luetzelflueh-Goldbach"
            },
            {
              "PLZ": 3433,
              "Ort": "Schwanden im Emmental"
            },
            {
              "PLZ": 3434,
              "Ort": "Obergoldbach"
            },
            {
              "PLZ": 3435,
              "Ort": "Ramsei"
            },
            {
              "PLZ": 3436,
              "Ort": "Zollbrueck"
            },
            {
              "PLZ": 3437,
              "Ort": "Ruederswil"
            },
            {
              "PLZ": 3438,
              "Ort": "Lauperswil"
            },
            {
              "PLZ": 3439,
              "Ort": "Ranflueh"
            },
            {
              "PLZ": 3452,
              "Ort": "Gruenenmatt"
            },
            {
              "PLZ": 3453,
              "Ort": "Heimisbach"
            },
            {
              "PLZ": 3454,
              "Ort": "Sumiswald"
            },
            {
              "PLZ": 3455,
              "Ort": "Gruenen"
            },
            {
              "PLZ": 3456,
              "Ort": "Trachselwald"
            },
            {
              "PLZ": 3457,
              "Ort": "Wasen im Emmental"
            },
            {
              "PLZ": 3462,
              "Ort": "Weier im Emmental"
            },
            {
              "PLZ": 3463,
              "Ort": "Haeusernmoos im Emmental"
            },
            {
              "PLZ": 3464,
              "Ort": "Schmidigen-Muehleweg"
            },
            {
              "PLZ": 3465,
              "Ort": "Duerrenroth"
            },
            {
              "PLZ": 3472,
              "Ort": "Rumendingen"
            },
            {
              "PLZ": 3472,
              "Ort": "Wynigen"
            },
            {
              "PLZ": 3473,
              "Ort": "Alchenstorf"
            },
            {
              "PLZ": 3474,
              "Ort": "Rueedisbach"
            },
            {
              "PLZ": 3475,
              "Ort": "Riedtwil"
            },
            {
              "PLZ": 3475,
              "Ort": "Hermiswil"
            },
            {
              "PLZ": 3476,
              "Ort": "Oschwand"
            },
            {
              "PLZ": 3503,
              "Ort": "Gysenstein"
            },
            {
              "PLZ": 3504,
              "Ort": "Niederhuenigen"
            },
            {
              "PLZ": 3504,
              "Ort": "Oberhuenigen"
            },
            {
              "PLZ": 3506,
              "Ort": "Grosshoechstetten"
            },
            {
              "PLZ": 3507,
              "Ort": "Biglen"
            },
            {
              "PLZ": 3508,
              "Ort": "Arni BE"
            },
            {
              "PLZ": 3510,
              "Ort": "Freimettigen"
            },
            {
              "PLZ": 3510,
              "Ort": "Haeutligen"
            },
            {
              "PLZ": 3510,
              "Ort": "Konolfingen"
            },
            {
              "PLZ": 3512,
              "Ort": "Walkringen"
            },
            {
              "PLZ": 3513,
              "Ort": "Bigenthal"
            },
            {
              "PLZ": 3531,
              "Ort": "Oberthal"
            },
            {
              "PLZ": 3532,
              "Ort": "Mirchel"
            },
            {
              "PLZ": 3532,
              "Ort": "Zaeziwil"
            },
            {
              "PLZ": 3533,
              "Ort": "Bowil"
            },
            {
              "PLZ": 3534,
              "Ort": "Signau"
            },
            {
              "PLZ": 3535,
              "Ort": "Schuepbach"
            },
            {
              "PLZ": 3536,
              "Ort": "Aeschau"
            },
            {
              "PLZ": 3537,
              "Ort": "Eggiwil"
            },
            {
              "PLZ": 3538,
              "Ort": "Roethenbach im Emmental"
            },
            {
              "PLZ": 3543,
              "Ort": "Emmenmatt"
            },
            {
              "PLZ": 3550,
              "Ort": "Langnau im Emmental"
            },
            {
              "PLZ": 3551,
              "Ort": "Oberfrittenbach"
            },
            {
              "PLZ": 3552,
              "Ort": "Baerau"
            },
            {
              "PLZ": 3553,
              "Ort": "Gohl"
            },
            {
              "PLZ": 3555,
              "Ort": "Trubschachen"
            },
            {
              "PLZ": 3556,
              "Ort": "Trub"
            },
            {
              "PLZ": 3557,
              "Ort": "Fankhaus (Trub)"
            },
            {
              "PLZ": 3600,
              "Ort": "Thun"
            },
            {
              "PLZ": 3603,
              "Ort": "Thun"
            },
            {
              "PLZ": 3604,
              "Ort": "Thun"
            },
            {
              "PLZ": 3608,
              "Ort": "Thun"
            },
            {
              "PLZ": 3612,
              "Ort": "Steffisburg"
            },
            {
              "PLZ": 3613,
              "Ort": "Steffisburg"
            },
            {
              "PLZ": 3614,
              "Ort": "Unterlangenegg"
            },
            {
              "PLZ": 3615,
              "Ort": "Heimenschwand"
            },
            {
              "PLZ": 3616,
              "Ort": "Schwarzenegg"
            },
            {
              "PLZ": 3617,
              "Ort": "Fahrni b. Thun"
            },
            {
              "PLZ": 3618,
              "Ort": "Suederen"
            },
            {
              "PLZ": 3619,
              "Ort": "Eriz"
            },
            {
              "PLZ": 3619,
              "Ort": "Innereriz"
            },
            {
              "PLZ": 3622,
              "Ort": "Homberg b. Thun"
            },
            {
              "PLZ": 3623,
              "Ort": "Teuffenthal b. Thun"
            },
            {
              "PLZ": 3623,
              "Ort": "Horrenbach"
            },
            {
              "PLZ": 3623,
              "Ort": "Buchen BE"
            },
            {
              "PLZ": 3624,
              "Ort": "Schwendibach"
            },
            {
              "PLZ": 3624,
              "Ort": "Goldiwil (Thun)"
            },
            {
              "PLZ": 3625,
              "Ort": "Heiligenschwendi"
            },
            {
              "PLZ": 3626,
              "Ort": "Huenibach"
            },
            {
              "PLZ": 3627,
              "Ort": "Heimberg"
            },
            {
              "PLZ": 3628,
              "Ort": "Kienersrueti"
            },
            {
              "PLZ": 3628,
              "Ort": "Uttigen"
            },
            {
              "PLZ": 3629,
              "Ort": "Oppligen"
            },
            {
              "PLZ": 3629,
              "Ort": "Jaberg"
            },
            {
              "PLZ": 3629,
              "Ort": "Kiesen"
            },
            {
              "PLZ": 3631,
              "Ort": "Hoefen b. Thun"
            },
            {
              "PLZ": 3632,
              "Ort": "Niederstocken"
            },
            {
              "PLZ": 3632,
              "Ort": "Oberstocken"
            },
            {
              "PLZ": 3633,
              "Ort": "Amsoldingen"
            },
            {
              "PLZ": 3634,
              "Ort": "Thierachern"
            },
            {
              "PLZ": 3635,
              "Ort": "Uebeschi"
            },
            {
              "PLZ": 3636,
              "Ort": "Laengenbuehl"
            },
            {
              "PLZ": 3636,
              "Ort": "Forst b. Laengenbuehl"
            },
            {
              "PLZ": 3638,
              "Ort": "Pohlern"
            },
            {
              "PLZ": 3638,
              "Ort": "Blumenstein"
            },
            {
              "PLZ": 3645,
              "Ort": "Gwatt (Thun)"
            },
            {
              "PLZ": 3645,
              "Ort": "Zwieselberg"
            },
            {
              "PLZ": 3646,
              "Ort": "Einigen"
            },
            {
              "PLZ": 3647,
              "Ort": "Reutigen"
            },
            {
              "PLZ": 3652,
              "Ort": "Hilterfingen"
            },
            {
              "PLZ": 3653,
              "Ort": "Oberhofen am Thunersee"
            },
            {
              "PLZ": 3654,
              "Ort": "Gunten"
            },
            {
              "PLZ": 3655,
              "Ort": "Sigriswil"
            },
            {
              "PLZ": 3656,
              "Ort": "Tschingel ob Gunten"
            },
            {
              "PLZ": 3656,
              "Ort": "Aeschlen ob Gunten"
            },
            {
              "PLZ": 3656,
              "Ort": "Ringoldswil"
            },
            {
              "PLZ": 3657,
              "Ort": "Schwanden (Sigriswil)"
            },
            {
              "PLZ": 3658,
              "Ort": "Merligen"
            },
            {
              "PLZ": 3661,
              "Ort": "Uetendorf"
            },
            {
              "PLZ": 3662,
              "Ort": "Seftigen"
            },
            {
              "PLZ": 3663,
              "Ort": "Gurzelen"
            },
            {
              "PLZ": 3664,
              "Ort": "Burgistein"
            },
            {
              "PLZ": 3665,
              "Ort": "Wattenwil"
            },
            {
              "PLZ": 3671,
              "Ort": "Herbligen"
            },
            {
              "PLZ": 3671,
              "Ort": "Brenzikofen"
            },
            {
              "PLZ": 3672,
              "Ort": "Aeschlen b. Oberdiessbach"
            },
            {
              "PLZ": 3672,
              "Ort": "Oberdiessbach"
            },
            {
              "PLZ": 3673,
              "Ort": "Linden"
            },
            {
              "PLZ": 3674,
              "Ort": "Bleiken b. Oberdiessbach"
            },
            {
              "PLZ": 3700,
              "Ort": "Spiez"
            },
            {
              "PLZ": 3702,
              "Ort": "Hondrich"
            },
            {
              "PLZ": 3703,
              "Ort": "Aeschiried"
            },
            {
              "PLZ": 3703,
              "Ort": "Aeschi b. Spiez"
            },
            {
              "PLZ": 3704,
              "Ort": "Krattigen"
            },
            {
              "PLZ": 3705,
              "Ort": "Faulensee"
            },
            {
              "PLZ": 3706,
              "Ort": "Leissigen"
            },
            {
              "PLZ": 3707,
              "Ort": "Daerligen"
            },
            {
              "PLZ": 3711,
              "Ort": "Emdthal"
            },
            {
              "PLZ": 3711,
              "Ort": "Muelenen"
            },
            {
              "PLZ": 3713,
              "Ort": "Reichenbach im Kandertal"
            },
            {
              "PLZ": 3714,
              "Ort": "Wengi b. Frutigen"
            },
            {
              "PLZ": 3714,
              "Ort": "Frutigen"
            },
            {
              "PLZ": 3715,
              "Ort": "Adelboden"
            },
            {
              "PLZ": 3716,
              "Ort": "Kandergrund"
            },
            {
              "PLZ": 3717,
              "Ort": "Blausee-Mitholz"
            },
            {
              "PLZ": 3718,
              "Ort": "Kandersteg"
            },
            {
              "PLZ": 3722,
              "Ort": "Scharnachtal"
            },
            {
              "PLZ": 3723,
              "Ort": "Kiental"
            },
            {
              "PLZ": 3724,
              "Ort": "Ried (Frutigen)"
            },
            {
              "PLZ": 3725,
              "Ort": "Achseten"
            },
            {
              "PLZ": 3752,
              "Ort": "Wimmis"
            },
            {
              "PLZ": 3753,
              "Ort": "Oey"
            },
            {
              "PLZ": 3754,
              "Ort": "Diemtigen"
            },
            {
              "PLZ": 3755,
              "Ort": "Horboden"
            },
            {
              "PLZ": 3756,
              "Ort": "Zwischenflueh"
            },
            {
              "PLZ": 3757,
              "Ort": "Schwenden im Diemtigtal"
            },
            {
              "PLZ": 3758,
              "Ort": "Latterbach"
            },
            {
              "PLZ": 3762,
              "Ort": "Erlenbach im Simmental"
            },
            {
              "PLZ": 3763,
              "Ort": "Daerstetten"
            },
            {
              "PLZ": 3764,
              "Ort": "Weissenburg"
            },
            {
              "PLZ": 3765,
              "Ort": "Oberwil im Simmental"
            },
            {
              "PLZ": 3766,
              "Ort": "Boltigen"
            },
            {
              "PLZ": 3770,
              "Ort": "Zweisimmen"
            },
            {
              "PLZ": 3771,
              "Ort": "Blankenburg"
            },
            {
              "PLZ": 3772,
              "Ort": "St. Stephan"
            },
            {
              "PLZ": 3773,
              "Ort": "Matten (St. Stephan)"
            },
            {
              "PLZ": 3775,
              "Ort": "Lenk im Simmental"
            },
            {
              "PLZ": 3776,
              "Ort": "Oeschseite"
            },
            {
              "PLZ": 3777,
              "Ort": "Saanenmoeser"
            },
            {
              "PLZ": 3778,
              "Ort": "Schoenried"
            },
            {
              "PLZ": 3780,
              "Ort": "Gstaad"
            },
            {
              "PLZ": 3781,
              "Ort": "Turbach"
            },
            {
              "PLZ": 3782,
              "Ort": "Lauenen b. Gstaad"
            },
            {
              "PLZ": 3783,
              "Ort": "Grund b. Gstaad"
            },
            {
              "PLZ": 3784,
              "Ort": "Feutersoey"
            },
            {
              "PLZ": 3785,
              "Ort": "Gsteig b. Gstaad"
            },
            {
              "PLZ": 3792,
              "Ort": "Saanen"
            },
            {
              "PLZ": 3800,
              "Ort": "Sundlauenen"
            },
            {
              "PLZ": 3800,
              "Ort": "Interlaken"
            },
            {
              "PLZ": 3800,
              "Ort": "Unterseen"
            },
            {
              "PLZ": 3800,
              "Ort": "Matten b. Interlaken"
            },
            {
              "PLZ": 3801,
              "Ort": "Jungfraujoch"
            },
            {
              "PLZ": 3803,
              "Ort": "Beatenberg"
            },
            {
              "PLZ": 3804,
              "Ort": "Habkern"
            },
            {
              "PLZ": 3805,
              "Ort": "Goldswil b. Interlaken"
            },
            {
              "PLZ": 3806,
              "Ort": "Boenigen b. Interlaken"
            },
            {
              "PLZ": 3807,
              "Ort": "Iseltwald"
            },
            {
              "PLZ": 3812,
              "Ort": "Wilderswil"
            },
            {
              "PLZ": 3813,
              "Ort": "Saxeten"
            },
            {
              "PLZ": 3814,
              "Ort": "Gsteigwiler"
            },
            {
              "PLZ": 3815,
              "Ort": "Zweiluetschinen"
            },
            {
              "PLZ": 3815,
              "Ort": "Guendlischwand"
            },
            {
              "PLZ": 3816,
              "Ort": "Luetschental"
            },
            {
              "PLZ": 3816,
              "Ort": "Burglauenen"
            },
            {
              "PLZ": 3818,
              "Ort": "Grindelwald"
            },
            {
              "PLZ": 3822,
              "Ort": "Isenfluh"
            },
            {
              "PLZ": 3822,
              "Ort": "Lauterbrunnen"
            },
            {
              "PLZ": 3823,
              "Ort": "Kleine Scheidegg"
            },
            {
              "PLZ": 3823,
              "Ort": "Eigergletscher"
            },
            {
              "PLZ": 3823,
              "Ort": "Wengen"
            },
            {
              "PLZ": 3824,
              "Ort": "Stechelberg"
            },
            {
              "PLZ": 3825,
              "Ort": "Muerren"
            },
            {
              "PLZ": 3826,
              "Ort": "Gimmelwald"
            },
            {
              "PLZ": 3852,
              "Ort": "Ringgenberg BE"
            },
            {
              "PLZ": 3853,
              "Ort": "Niederried b. Interlaken"
            },
            {
              "PLZ": 3854,
              "Ort": "Oberried am Brienzersee"
            },
            {
              "PLZ": 3855,
              "Ort": "Schwanden b. Brienz"
            },
            {
              "PLZ": 3855,
              "Ort": "Brienz BE"
            },
            {
              "PLZ": 3855,
              "Ort": "Axalp"
            },
            {
              "PLZ": 3856,
              "Ort": "Brienzwiler"
            },
            {
              "PLZ": 3857,
              "Ort": "Unterbach BE"
            },
            {
              "PLZ": 3858,
              "Ort": "Hofstetten b. Brienz"
            },
            {
              "PLZ": 3860,
              "Ort": "Rosenlaui"
            },
            {
              "PLZ": 3860,
              "Ort": "Schattenhalb"
            },
            {
              "PLZ": 3860,
              "Ort": "Meiringen"
            },
            {
              "PLZ": 3860,
              "Ort": "Bruenig"
            },
            {
              "PLZ": 3862,
              "Ort": "Innertkirchen"
            },
            {
              "PLZ": 3863,
              "Ort": "Gadmen"
            },
            {
              "PLZ": 3864,
              "Ort": "Guttannen"
            },
            {
              "PLZ": 3900,
              "Ort": "Gamsen"
            },
            {
              "PLZ": 3900,
              "Ort": "Brigerbad"
            },
            {
              "PLZ": 3900,
              "Ort": "Brig"
            },
            {
              "PLZ": 3901,
              "Ort": "Rothwald"
            },
            {
              "PLZ": 3902,
              "Ort": "Glis"
            },
            {
              "PLZ": 3903,
              "Ort": "Birgisch"
            },
            {
              "PLZ": 3903,
              "Ort": "Mund"
            },
            {
              "PLZ": 3904,
              "Ort": "Naters"
            },
            {
              "PLZ": 3905,
              "Ort": "Saas-Almagell"
            },
            {
              "PLZ": 3906,
              "Ort": "Saas-Fee"
            },
            {
              "PLZ": 3907,
              "Ort": "Simplon Hospiz"
            },
            {
              "PLZ": 3907,
              "Ort": "Gabi (Simplon)"
            },
            {
              "PLZ": 3907,
              "Ort": "Gondo"
            },
            {
              "PLZ": 3907,
              "Ort": "Simplon Dorf"
            },
            {
              "PLZ": 3908,
              "Ort": "Saas-Balen"
            },
            {
              "PLZ": 3910,
              "Ort": "Saas-Grund"
            },
            {
              "PLZ": 3911,
              "Ort": "Ried-Brig"
            },
            {
              "PLZ": 3912,
              "Ort": "Termen"
            },
            {
              "PLZ": 3913,
              "Ort": "Rosswald"
            },
            {
              "PLZ": 3914,
              "Ort": "Belalp"
            },
            {
              "PLZ": 3914,
              "Ort": "Blatten b. Naters"
            },
            {
              "PLZ": 3916,
              "Ort": "Ferden"
            },
            {
              "PLZ": 3917,
              "Ort": "Goppenstein"
            },
            {
              "PLZ": 3917,
              "Ort": "Kippel"
            },
            {
              "PLZ": 3918,
              "Ort": "Wiler (Loetschen)"
            },
            {
              "PLZ": 3919,
              "Ort": "Blatten (Loetschen)"
            },
            {
              "PLZ": 3920,
              "Ort": "Zermatt"
            },
            {
              "PLZ": 3922,
              "Ort": "Eisten"
            },
            {
              "PLZ": 3922,
              "Ort": "Kalpetran"
            },
            {
              "PLZ": 3922,
              "Ort": "Stalden VS"
            },
            {
              "PLZ": 3923,
              "Ort": "Toerbel"
            },
            {
              "PLZ": 3924,
              "Ort": "Gasenried"
            },
            {
              "PLZ": 3924,
              "Ort": "St. Niklaus VS"
            },
            {
              "PLZ": 3925,
              "Ort": "Graechen"
            },
            {
              "PLZ": 3926,
              "Ort": "Embd"
            },
            {
              "PLZ": 3927,
              "Ort": "Herbriggen"
            },
            {
              "PLZ": 3928,
              "Ort": "Randa"
            },
            {
              "PLZ": 3929,
              "Ort": "Taesch"
            },
            {
              "PLZ": 3930,
              "Ort": "Eyholz"
            },
            {
              "PLZ": 3930,
              "Ort": "Visp"
            },
            {
              "PLZ": 3931,
              "Ort": "Lalden"
            },
            {
              "PLZ": 3932,
              "Ort": "Visperterminen"
            },
            {
              "PLZ": 3933,
              "Ort": "Staldenried"
            },
            {
              "PLZ": 3934,
              "Ort": "Zeneggen"
            },
            {
              "PLZ": 3935,
              "Ort": "Buerchen"
            },
            {
              "PLZ": 3937,
              "Ort": "Baltschieder"
            },
            {
              "PLZ": 3938,
              "Ort": "Ausserberg"
            },
            {
              "PLZ": 3939,
              "Ort": "Eggerberg"
            },
            {
              "PLZ": 3940,
              "Ort": "Steg VS"
            },
            {
              "PLZ": 3942,
              "Ort": "Niedergesteln"
            },
            {
              "PLZ": 3942,
              "Ort": "St. German"
            },
            {
              "PLZ": 3942,
              "Ort": "Raron"
            },
            {
              "PLZ": 3943,
              "Ort": "Eischoll"
            },
            {
              "PLZ": 3944,
              "Ort": "Unterbaech VS"
            },
            {
              "PLZ": 3945,
              "Ort": "Gampel"
            },
            {
              "PLZ": 3945,
              "Ort": "Niedergampel"
            },
            {
              "PLZ": 3946,
              "Ort": "Gruben"
            },
            {
              "PLZ": 3946,
              "Ort": "Turtmann"
            },
            {
              "PLZ": 3947,
              "Ort": "Ergisch"
            },
            {
              "PLZ": 3948,
              "Ort": "Unterems"
            },
            {
              "PLZ": 3948,
              "Ort": "Oberems"
            },
            {
              "PLZ": 3949,
              "Ort": "Hohtenn"
            },
            {
              "PLZ": 3951,
              "Ort": "Agarn"
            },
            {
              "PLZ": 3952,
              "Ort": "Susten"
            },
            {
              "PLZ": 3953,
              "Ort": "Inden"
            },
            {
              "PLZ": 3953,
              "Ort": "Varen"
            },
            {
              "PLZ": 3953,
              "Ort": "Leuk Stadt"
            },
            {
              "PLZ": 3954,
              "Ort": "Leukerbad"
            },
            {
              "PLZ": 3955,
              "Ort": "Albinen"
            },
            {
              "PLZ": 3956,
              "Ort": "Guttet-Feschel"
            },
            {
              "PLZ": 3957,
              "Ort": "Bratsch"
            },
            {
              "PLZ": 3957,
              "Ort": "Erschmatt"
            },
            {
              "PLZ": 3960,
              "Ort": "Corin-de-la-Crête"
            },
            {
              "PLZ": 3960,
              "Ort": "Loc"
            },
            {
              "PLZ": 3960,
              "Ort": "Muraz (Sierre)"
            },
            {
              "PLZ": 3960,
              "Ort": "Niouc"
            },
            {
              "PLZ": 3960,
              "Ort": "Sierre"
            },
            {
              "PLZ": 3961,
              "Ort": "Chandolin"
            },
            {
              "PLZ": 3961,
              "Ort": "Ayer"
            },
            {
              "PLZ": 3961,
              "Ort": "St-Jean VS"
            },
            {
              "PLZ": 3961,
              "Ort": "Vissoie"
            },
            {
              "PLZ": 3961,
              "Ort": "St-Luc"
            },
            {
              "PLZ": 3961,
              "Ort": "Zinal"
            },
            {
              "PLZ": 3961,
              "Ort": "Grimentz"
            },
            {
              "PLZ": 3963,
              "Ort": "Montana"
            },
            {
              "PLZ": 3963,
              "Ort": "Crans-Montana"
            },
            {
              "PLZ": 3963,
              "Ort": "Aminona"
            },
            {
              "PLZ": 3965,
              "Ort": "Chippis"
            },
            {
              "PLZ": 3966,
              "Ort": "Réchy"
            },
            {
              "PLZ": 3966,
              "Ort": "Chalais"
            },
            {
              "PLZ": 3967,
              "Ort": "Vercorin"
            },
            {
              "PLZ": 3968,
              "Ort": "Veyras"
            },
            {
              "PLZ": 3970,
              "Ort": "Salgesch"
            },
            {
              "PLZ": 3971,
              "Ort": "Chermignon-den-Bas"
            },
            {
              "PLZ": 3971,
              "Ort": "Ollon VS"
            },
            {
              "PLZ": 3971,
              "Ort": "Chermignon"
            },
            {
              "PLZ": 3972,
              "Ort": "Miège"
            },
            {
              "PLZ": 3973,
              "Ort": "Venthône"
            },
            {
              "PLZ": 3974,
              "Ort": "Mollens VS"
            },
            {
              "PLZ": 3975,
              "Ort": "Randogne"
            },
            {
              "PLZ": 3976,
              "Ort": "Champzabé"
            },
            {
              "PLZ": 3976,
              "Ort": "Noës"
            },
            {
              "PLZ": 3977,
              "Ort": "Granges VS"
            },
            {
              "PLZ": 3978,
              "Ort": "Flanthey"
            },
            {
              "PLZ": 3979,
              "Ort": "Grône"
            },
            {
              "PLZ": 3982,
              "Ort": "Bitsch"
            },
            {
              "PLZ": 3983,
              "Ort": "Bister"
            },
            {
              "PLZ": 3983,
              "Ort": "Filet"
            },
            {
              "PLZ": 3983,
              "Ort": "Goppisberg"
            },
            {
              "PLZ": 3983,
              "Ort": "Greich"
            },
            {
              "PLZ": 3983,
              "Ort": "Moerel"
            },
            {
              "PLZ": 3984,
              "Ort": "Fieschertal"
            },
            {
              "PLZ": 3984,
              "Ort": "Fiesch"
            },
            {
              "PLZ": 3985,
              "Ort": "Geschinen"
            },
            {
              "PLZ": 3985,
              "Ort": "Muenster VS"
            },
            {
              "PLZ": 3986,
              "Ort": "Ried-Moerel"
            },
            {
              "PLZ": 3987,
              "Ort": "Riederalp"
            },
            {
              "PLZ": 3988,
              "Ort": "Obergesteln"
            },
            {
              "PLZ": 3988,
              "Ort": "Ulrichen"
            },
            {
              "PLZ": 3989,
              "Ort": "Niederwald"
            },
            {
              "PLZ": 3989,
              "Ort": "Blitzingen"
            },
            {
              "PLZ": 3989,
              "Ort": "Biel VS"
            },
            {
              "PLZ": 3989,
              "Ort": "Ritzingen"
            },
            {
              "PLZ": 3989,
              "Ort": "Selkingen"
            },
            {
              "PLZ": 3991,
              "Ort": "Betten"
            },
            {
              "PLZ": 3992,
              "Ort": "Bettmeralp"
            },
            {
              "PLZ": 3993,
              "Ort": "Grengiols"
            },
            {
              "PLZ": 3994,
              "Ort": "Lax"
            },
            {
              "PLZ": 3994,
              "Ort": "Martisberg"
            },
            {
              "PLZ": 3995,
              "Ort": "Ausserbinn"
            },
            {
              "PLZ": 3995,
              "Ort": "Muehlebach (Goms)"
            },
            {
              "PLZ": 3995,
              "Ort": "Steinhaus"
            },
            {
              "PLZ": 3995,
              "Ort": "Ernen"
            },
            {
              "PLZ": 3996,
              "Ort": "Binn"
            },
            {
              "PLZ": 3997,
              "Ort": "Bellwald"
            },
            {
              "PLZ": 3998,
              "Ort": "Gluringen"
            },
            {
              "PLZ": 3998,
              "Ort": "Reckingen VS"
            },
            {
              "PLZ": 3999,
              "Ort": "Oberwald"
            },
            {
              "PLZ": 4000,
              "Ort": "Basel"
            },
            {
              "PLZ": 4001,
              "Ort": "Basel"
            },
            {
              "PLZ": 4031,
              "Ort": "Basel Universitaetsspital"
            },
            {
              "PLZ": 4051,
              "Ort": "Basel"
            },
            {
              "PLZ": 4052,
              "Ort": "Basel"
            },
            {
              "PLZ": 4053,
              "Ort": "Basel"
            },
            {
              "PLZ": 4054,
              "Ort": "Basel"
            },
            {
              "PLZ": 4055,
              "Ort": "Basel"
            },
            {
              "PLZ": 4056,
              "Ort": "Basel"
            },
            {
              "PLZ": 4057,
              "Ort": "Basel"
            },
            {
              "PLZ": 4058,
              "Ort": "Basel"
            },
            {
              "PLZ": 4059,
              "Ort": "Basel"
            },
            {
              "PLZ": 4101,
              "Ort": "Bruderholz"
            },
            {
              "PLZ": 4102,
              "Ort": "Binningen"
            },
            {
              "PLZ": 4103,
              "Ort": "Bottmingen"
            },
            {
              "PLZ": 4104,
              "Ort": "Oberwil BL"
            },
            {
              "PLZ": 4105,
              "Ort": "Biel-Benken BL"
            },
            {
              "PLZ": 4106,
              "Ort": "Therwil"
            },
            {
              "PLZ": 4107,
              "Ort": "Ettingen"
            },
            {
              "PLZ": 4108,
              "Ort": "Witterswil"
            },
            {
              "PLZ": 4112,
              "Ort": "Baettwil"
            },
            {
              "PLZ": 4112,
              "Ort": "Flueh"
            },
            {
              "PLZ": 4114,
              "Ort": "Hofstetten SO"
            },
            {
              "PLZ": 4115,
              "Ort": "Mariastein"
            },
            {
              "PLZ": 4116,
              "Ort": "Metzerlen"
            },
            {
              "PLZ": 4117,
              "Ort": "Burg im Leimental"
            },
            {
              "PLZ": 4118,
              "Ort": "Rodersdorf"
            },
            {
              "PLZ": 4123,
              "Ort": "Allschwil"
            },
            {
              "PLZ": 4124,
              "Ort": "Schoenenbuch"
            },
            {
              "PLZ": 4125,
              "Ort": "Riehen"
            },
            {
              "PLZ": 4126,
              "Ort": "Bettingen"
            },
            {
              "PLZ": 4127,
              "Ort": "Birsfelden"
            },
            {
              "PLZ": 4132,
              "Ort": "Muttenz"
            },
            {
              "PLZ": 4133,
              "Ort": "Pratteln"
            },
            {
              "PLZ": 4142,
              "Ort": "Muenchenstein"
            },
            {
              "PLZ": 4143,
              "Ort": "Dornach"
            },
            {
              "PLZ": 4144,
              "Ort": "Arlesheim"
            },
            {
              "PLZ": 4145,
              "Ort": "Gempen"
            },
            {
              "PLZ": 4146,
              "Ort": "Hochwald"
            },
            {
              "PLZ": 4147,
              "Ort": "Aesch BL"
            },
            {
              "PLZ": 4148,
              "Ort": "Pfeffingen"
            },
            {
              "PLZ": 4153,
              "Ort": "Reinach BL"
            },
            {
              "PLZ": 4202,
              "Ort": "Duggingen"
            },
            {
              "PLZ": 4203,
              "Ort": "Grellingen"
            },
            {
              "PLZ": 4204,
              "Ort": "Himmelried"
            },
            {
              "PLZ": 4206,
              "Ort": "Seewen SO"
            },
            {
              "PLZ": 4207,
              "Ort": "Bretzwil"
            },
            {
              "PLZ": 4208,
              "Ort": "Nunningen"
            },
            {
              "PLZ": 4222,
              "Ort": "Zwingen"
            },
            {
              "PLZ": 4223,
              "Ort": "Blauen"
            },
            {
              "PLZ": 4224,
              "Ort": "Nenzlingen"
            },
            {
              "PLZ": 4225,
              "Ort": "Brislach"
            },
            {
              "PLZ": 4226,
              "Ort": "Breitenbach"
            },
            {
              "PLZ": 4227,
              "Ort": "Buesserach"
            },
            {
              "PLZ": 4228,
              "Ort": "Erschwil"
            },
            {
              "PLZ": 4229,
              "Ort": "Beinwil SO"
            },
            {
              "PLZ": 4232,
              "Ort": "Fehren"
            },
            {
              "PLZ": 4233,
              "Ort": "Meltingen"
            },
            {
              "PLZ": 4234,
              "Ort": "Zullwil"
            },
            {
              "PLZ": 4242,
              "Ort": "Laufen"
            },
            {
              "PLZ": 4243,
              "Ort": "Dittingen"
            },
            {
              "PLZ": 4244,
              "Ort": "Roeschenz"
            },
            {
              "PLZ": 4245,
              "Ort": "Kleinluetzel"
            },
            {
              "PLZ": 4246,
              "Ort": "Wahlen b. Laufen"
            },
            {
              "PLZ": 4247,
              "Ort": "Grindel"
            },
            {
              "PLZ": 4252,
              "Ort": "Baerschwil"
            },
            {
              "PLZ": 4253,
              "Ort": "Liesberg"
            },
            {
              "PLZ": 4254,
              "Ort": "Liesberg Dorf"
            },
            {
              "PLZ": 4302,
              "Ort": "Augst BL"
            },
            {
              "PLZ": 4303,
              "Ort": "Kaiseraugst"
            },
            {
              "PLZ": 4304,
              "Ort": "Giebenach"
            },
            {
              "PLZ": 4305,
              "Ort": "Olsberg"
            },
            {
              "PLZ": 4310,
              "Ort": "Rheinfelden"
            },
            {
              "PLZ": 4312,
              "Ort": "Magden"
            },
            {
              "PLZ": 4313,
              "Ort": "Moehlin"
            },
            {
              "PLZ": 4314,
              "Ort": "Zeiningen"
            },
            {
              "PLZ": 4315,
              "Ort": "Zuzgen"
            },
            {
              "PLZ": 4316,
              "Ort": "Hellikon"
            },
            {
              "PLZ": 4317,
              "Ort": "Wegenstetten"
            },
            {
              "PLZ": 4322,
              "Ort": "Mumpf"
            },
            {
              "PLZ": 4323,
              "Ort": "Wallbach"
            },
            {
              "PLZ": 4324,
              "Ort": "Obermumpf"
            },
            {
              "PLZ": 4325,
              "Ort": "Schupfart"
            },
            {
              "PLZ": 4332,
              "Ort": "Stein AG"
            },
            {
              "PLZ": 4333,
              "Ort": "Muenchwilen AG"
            },
            {
              "PLZ": 4334,
              "Ort": "Sisseln AG"
            },
            {
              "PLZ": 4402,
              "Ort": "Frenkendorf"
            },
            {
              "PLZ": 4410,
              "Ort": "Liestal"
            },
            {
              "PLZ": 4411,
              "Ort": "Seltisberg"
            },
            {
              "PLZ": 4412,
              "Ort": "Nuglar"
            },
            {
              "PLZ": 4413,
              "Ort": "Bueren SO"
            },
            {
              "PLZ": 4414,
              "Ort": "Fuellinsdorf"
            },
            {
              "PLZ": 4415,
              "Ort": "Lausen"
            },
            {
              "PLZ": 4416,
              "Ort": "Bubendorf"
            },
            {
              "PLZ": 4417,
              "Ort": "Ziefen"
            },
            {
              "PLZ": 4418,
              "Ort": "Reigoldswil"
            },
            {
              "PLZ": 4419,
              "Ort": "Lupsingen"
            },
            {
              "PLZ": 4421,
              "Ort": "St. Pantaleon"
            },
            {
              "PLZ": 4422,
              "Ort": "Arisdorf"
            },
            {
              "PLZ": 4423,
              "Ort": "Hersberg"
            },
            {
              "PLZ": 4424,
              "Ort": "Arboldswil"
            },
            {
              "PLZ": 4425,
              "Ort": "Titterten"
            },
            {
              "PLZ": 4426,
              "Ort": "Lauwil"
            },
            {
              "PLZ": 4431,
              "Ort": "Bennwil"
            },
            {
              "PLZ": 4432,
              "Ort": "Lampenberg"
            },
            {
              "PLZ": 4433,
              "Ort": "Ramlinsburg"
            },
            {
              "PLZ": 4434,
              "Ort": "Hoelstein"
            },
            {
              "PLZ": 4435,
              "Ort": "Niederdorf"
            },
            {
              "PLZ": 4436,
              "Ort": "Liedertswil"
            },
            {
              "PLZ": 4436,
              "Ort": "Oberdorf BL"
            },
            {
              "PLZ": 4437,
              "Ort": "Waldenburg"
            },
            {
              "PLZ": 4438,
              "Ort": "Langenbruck"
            },
            {
              "PLZ": 4441,
              "Ort": "Thuernen"
            },
            {
              "PLZ": 4442,
              "Ort": "Diepflingen"
            },
            {
              "PLZ": 4443,
              "Ort": "Wittinsburg"
            },
            {
              "PLZ": 4444,
              "Ort": "Ruemlingen"
            },
            {
              "PLZ": 4445,
              "Ort": "Haefelfingen"
            },
            {
              "PLZ": 4446,
              "Ort": "Buckten"
            },
            {
              "PLZ": 4447,
              "Ort": "Kaenerkinden"
            },
            {
              "PLZ": 4448,
              "Ort": "Laeufelfingen"
            },
            {
              "PLZ": 4450,
              "Ort": "Sissach"
            },
            {
              "PLZ": 4451,
              "Ort": "Wintersingen"
            },
            {
              "PLZ": 4452,
              "Ort": "Itingen"
            },
            {
              "PLZ": 4453,
              "Ort": "Nusshof"
            },
            {
              "PLZ": 4455,
              "Ort": "Zunzgen"
            },
            {
              "PLZ": 4456,
              "Ort": "Tenniken"
            },
            {
              "PLZ": 4457,
              "Ort": "Diegten"
            },
            {
              "PLZ": 4458,
              "Ort": "Eptingen"
            },
            {
              "PLZ": 4460,
              "Ort": "Gelterkinden"
            },
            {
              "PLZ": 4461,
              "Ort": "Boeckten"
            },
            {
              "PLZ": 4462,
              "Ort": "Rickenbach BL"
            },
            {
              "PLZ": 4463,
              "Ort": "Buus"
            },
            {
              "PLZ": 4464,
              "Ort": "Maisprach"
            },
            {
              "PLZ": 4465,
              "Ort": "Hemmiken"
            },
            {
              "PLZ": 4466,
              "Ort": "Ormalingen"
            },
            {
              "PLZ": 4467,
              "Ort": "Rothenfluh"
            },
            {
              "PLZ": 4468,
              "Ort": "Kienberg"
            },
            {
              "PLZ": 4469,
              "Ort": "Anwil"
            },
            {
              "PLZ": 4492,
              "Ort": "Tecknau"
            },
            {
              "PLZ": 4493,
              "Ort": "Wenslingen"
            },
            {
              "PLZ": 4494,
              "Ort": "Oltingen"
            },
            {
              "PLZ": 4495,
              "Ort": "Zeglingen"
            },
            {
              "PLZ": 4496,
              "Ort": "Kilchberg BL"
            },
            {
              "PLZ": 4497,
              "Ort": "Ruenenberg"
            },
            {
              "PLZ": 4500,
              "Ort": "Solothurn"
            },
            {
              "PLZ": 4512,
              "Ort": "Bellach"
            },
            {
              "PLZ": 4513,
              "Ort": "Langendorf"
            },
            {
              "PLZ": 4514,
              "Ort": "Lommiswil"
            },
            {
              "PLZ": 4515,
              "Ort": "Weissenstein b. Solothurn"
            },
            {
              "PLZ": 4515,
              "Ort": "Oberdorf SO"
            },
            {
              "PLZ": 4522,
              "Ort": "Ruettenen"
            },
            {
              "PLZ": 4523,
              "Ort": "Niederwil SO"
            },
            {
              "PLZ": 4524,
              "Ort": "Balmberg"
            },
            {
              "PLZ": 4524,
              "Ort": "Oberbalmberg"
            },
            {
              "PLZ": 4524,
              "Ort": "Guensberg"
            },
            {
              "PLZ": 4525,
              "Ort": "Balm b. Guensberg"
            },
            {
              "PLZ": 4528,
              "Ort": "Zuchwil"
            },
            {
              "PLZ": 4532,
              "Ort": "Feldbrunnen"
            },
            {
              "PLZ": 4533,
              "Ort": "Riedholz"
            },
            {
              "PLZ": 4534,
              "Ort": "Flumenthal"
            },
            {
              "PLZ": 4535,
              "Ort": "Hubersdorf"
            },
            {
              "PLZ": 4535,
              "Ort": "Kammersrohr"
            },
            {
              "PLZ": 4536,
              "Ort": "Attiswil"
            },
            {
              "PLZ": 4537,
              "Ort": "Wiedlisbach"
            },
            {
              "PLZ": 4538,
              "Ort": "Oberbipp"
            },
            {
              "PLZ": 4539,
              "Ort": "Rumisberg"
            },
            {
              "PLZ": 4539,
              "Ort": "Farnern"
            },
            {
              "PLZ": 4542,
              "Ort": "Luterbach"
            },
            {
              "PLZ": 4543,
              "Ort": "Deitingen"
            },
            {
              "PLZ": 4552,
              "Ort": "Derendingen"
            },
            {
              "PLZ": 4553,
              "Ort": "Subingen"
            },
            {
              "PLZ": 4554,
              "Ort": "Hueniken"
            },
            {
              "PLZ": 4554,
              "Ort": "Etziken"
            },
            {
              "PLZ": 4556,
              "Ort": "Bolken"
            },
            {
              "PLZ": 4556,
              "Ort": "Burgaeschi"
            },
            {
              "PLZ": 4556,
              "Ort": "Steinhof SO"
            },
            {
              "PLZ": 4556,
              "Ort": "Aeschi SO"
            },
            {
              "PLZ": 4557,
              "Ort": "Horriwil"
            },
            {
              "PLZ": 4558,
              "Ort": "Hersiwil"
            },
            {
              "PLZ": 4558,
              "Ort": "Heinrichswil"
            },
            {
              "PLZ": 4558,
              "Ort": "Winistorf"
            },
            {
              "PLZ": 4562,
              "Ort": "Biberist"
            },
            {
              "PLZ": 4563,
              "Ort": "Gerlafingen"
            },
            {
              "PLZ": 4564,
              "Ort": "Zielebach"
            },
            {
              "PLZ": 4564,
              "Ort": "Obergerlafingen"
            },
            {
              "PLZ": 4565,
              "Ort": "Recherswil"
            },
            {
              "PLZ": 4566,
              "Ort": "Halten"
            },
            {
              "PLZ": 4566,
              "Ort": "Oekingen"
            },
            {
              "PLZ": 4566,
              "Ort": "Kriegstetten"
            },
            {
              "PLZ": 4571,
              "Ort": "Ichertswil"
            },
            {
              "PLZ": 4571,
              "Ort": "Lueterkofen"
            },
            {
              "PLZ": 4573,
              "Ort": "Lohn-Ammannsegg"
            },
            {
              "PLZ": 4574,
              "Ort": "Luesslingen"
            },
            {
              "PLZ": 4574,
              "Ort": "Nennigkofen"
            },
            {
              "PLZ": 4576,
              "Ort": "Tscheppach"
            },
            {
              "PLZ": 4577,
              "Ort": "Hessigkofen"
            },
            {
              "PLZ": 4578,
              "Ort": "Bibern SO"
            },
            {
              "PLZ": 4579,
              "Ort": "Gossliwil"
            },
            {
              "PLZ": 4581,
              "Ort": "Kuettigkofen"
            },
            {
              "PLZ": 4582,
              "Ort": "Bruegglen"
            },
            {
              "PLZ": 4583,
              "Ort": "Aetigkofen"
            },
            {
              "PLZ": 4583,
              "Ort": "Muehledorf SO"
            },
            {
              "PLZ": 4584,
              "Ort": "Gaechliwil"
            },
            {
              "PLZ": 4584,
              "Ort": "Lueterswil"
            },
            {
              "PLZ": 4585,
              "Ort": "Biezwil"
            },
            {
              "PLZ": 4586,
              "Ort": "Kyburg-Buchegg"
            },
            {
              "PLZ": 4587,
              "Ort": "Aetingen"
            },
            {
              "PLZ": 4588,
              "Ort": "Unterramsern"
            },
            {
              "PLZ": 4588,
              "Ort": "Oberramsern"
            },
            {
              "PLZ": 4588,
              "Ort": "Brittern"
            },
            {
              "PLZ": 4600,
              "Ort": "Olten"
            },
            {
              "PLZ": 4612,
              "Ort": "Wangen b. Olten"
            },
            {
              "PLZ": 4613,
              "Ort": "Rickenbach SO"
            },
            {
              "PLZ": 4614,
              "Ort": "Haegendorf"
            },
            {
              "PLZ": 4615,
              "Ort": "Allerheiligenberg"
            },
            {
              "PLZ": 4616,
              "Ort": "Kappel SO"
            },
            {
              "PLZ": 4617,
              "Ort": "Gunzgen"
            },
            {
              "PLZ": 4618,
              "Ort": "Boningen"
            },
            {
              "PLZ": 4622,
              "Ort": "Egerkingen"
            },
            {
              "PLZ": 4623,
              "Ort": "Neuendorf"
            },
            {
              "PLZ": 4624,
              "Ort": "Haerkingen"
            },
            {
              "PLZ": 4625,
              "Ort": "Oberbuchsiten"
            },
            {
              "PLZ": 4626,
              "Ort": "Niederbuchsiten"
            },
            {
              "PLZ": 4628,
              "Ort": "Wolfwil"
            },
            {
              "PLZ": 4629,
              "Ort": "Fulenbach"
            },
            {
              "PLZ": 4632,
              "Ort": "Trimbach"
            },
            {
              "PLZ": 4633,
              "Ort": "Hauenstein"
            },
            {
              "PLZ": 4634,
              "Ort": "Wisen SO"
            },
            {
              "PLZ": 4652,
              "Ort": "Winznau"
            },
            {
              "PLZ": 4653,
              "Ort": "Obergoesgen"
            },
            {
              "PLZ": 4654,
              "Ort": "Lostorf"
            },
            {
              "PLZ": 4655,
              "Ort": "Rohr b. Olten"
            },
            {
              "PLZ": 4655,
              "Ort": "Stuesslingen"
            },
            {
              "PLZ": 4656,
              "Ort": "Starrkirch-Wil"
            },
            {
              "PLZ": 4657,
              "Ort": "Dulliken"
            },
            {
              "PLZ": 4658,
              "Ort": "Daeniken SO"
            },
            {
              "PLZ": 4663,
              "Ort": "Aarburg"
            },
            {
              "PLZ": 4665,
              "Ort": "Oftringen"
            },
            {
              "PLZ": 4702,
              "Ort": "Oensingen"
            },
            {
              "PLZ": 4703,
              "Ort": "Kestenholz"
            },
            {
              "PLZ": 4704,
              "Ort": "Wolfisberg"
            },
            {
              "PLZ": 4704,
              "Ort": "Niederbipp"
            },
            {
              "PLZ": 4710,
              "Ort": "Balsthal"
            },
            {
              "PLZ": 4712,
              "Ort": "Laupersdorf"
            },
            {
              "PLZ": 4713,
              "Ort": "Matzendorf"
            },
            {
              "PLZ": 4714,
              "Ort": "Aedermannsdorf"
            },
            {
              "PLZ": 4715,
              "Ort": "Herbetswil"
            },
            {
              "PLZ": 4716,
              "Ort": "Gaensbrunnen"
            },
            {
              "PLZ": 4716,
              "Ort": "Welschenrohr"
            },
            {
              "PLZ": 4717,
              "Ort": "Muemliswil"
            },
            {
              "PLZ": 4718,
              "Ort": "Holderbank SO"
            },
            {
              "PLZ": 4719,
              "Ort": "Ramiswil"
            },
            {
              "PLZ": 4800,
              "Ort": "Zofingen"
            },
            {
              "PLZ": 4802,
              "Ort": "Strengelbach"
            },
            {
              "PLZ": 4803,
              "Ort": "Vordemwald"
            },
            {
              "PLZ": 4805,
              "Ort": "Brittnau"
            },
            {
              "PLZ": 4806,
              "Ort": "Wikon"
            },
            {
              "PLZ": 4812,
              "Ort": "Muehlethal"
            },
            {
              "PLZ": 4813,
              "Ort": "Uerkheim"
            },
            {
              "PLZ": 4814,
              "Ort": "Bottenwil"
            },
            {
              "PLZ": 4852,
              "Ort": "Rothrist"
            },
            {
              "PLZ": 4853,
              "Ort": "Riken AG"
            },
            {
              "PLZ": 4853,
              "Ort": "Murgenthal"
            },
            {
              "PLZ": 4856,
              "Ort": "Glashuetten"
            },
            {
              "PLZ": 4900,
              "Ort": "Langenthal"
            },
            {
              "PLZ": 4911,
              "Ort": "Schwarzhaeusern"
            },
            {
              "PLZ": 4912,
              "Ort": "Aarwangen"
            },
            {
              "PLZ": 4913,
              "Ort": "Bannwil"
            },
            {
              "PLZ": 4914,
              "Ort": "Roggwil BE"
            },
            {
              "PLZ": 4915,
              "Ort": "St. Urban"
            },
            {
              "PLZ": 4916,
              "Ort": "Untersteckholz"
            },
            {
              "PLZ": 4917,
              "Ort": "Busswil b. Melchnau"
            },
            {
              "PLZ": 4917,
              "Ort": "Melchnau"
            },
            {
              "PLZ": 4919,
              "Ort": "Reisiswil"
            },
            {
              "PLZ": 4922,
              "Ort": "Thunstetten"
            },
            {
              "PLZ": 4922,
              "Ort": "Buetzberg"
            },
            {
              "PLZ": 4923,
              "Ort": "Wynau"
            },
            {
              "PLZ": 4924,
              "Ort": "Obersteckholz"
            },
            {
              "PLZ": 4932,
              "Ort": "Gutenburg"
            },
            {
              "PLZ": 4932,
              "Ort": "Lotzwil"
            },
            {
              "PLZ": 4933,
              "Ort": "Ruetschelen"
            },
            {
              "PLZ": 4934,
              "Ort": "Madiswil"
            },
            {
              "PLZ": 4935,
              "Ort": "Leimiswil"
            },
            {
              "PLZ": 4936,
              "Ort": "Kleindietwil"
            },
            {
              "PLZ": 4937,
              "Ort": "Ursenbach"
            },
            {
              "PLZ": 4938,
              "Ort": "Rohrbachgraben"
            },
            {
              "PLZ": 4938,
              "Ort": "Rohrbach"
            },
            {
              "PLZ": 4942,
              "Ort": "Walterswil BE"
            },
            {
              "PLZ": 4943,
              "Ort": "Oeschenbach"
            },
            {
              "PLZ": 4944,
              "Ort": "Auswil"
            },
            {
              "PLZ": 4950,
              "Ort": "Huttwil"
            },
            {
              "PLZ": 4952,
              "Ort": "Eriswil"
            },
            {
              "PLZ": 4953,
              "Ort": "Schwarzenbach (Huttwil)"
            },
            {
              "PLZ": 4954,
              "Ort": "Wyssachen"
            },
            {
              "PLZ": 4955,
              "Ort": "Gondiswil"
            },
            {
              "PLZ": 5000,
              "Ort": "Aarau"
            },
            {
              "PLZ": 5004,
              "Ort": "Aarau"
            },
            {
              "PLZ": 5012,
              "Ort": "Eppenberg"
            },
            {
              "PLZ": 5012,
              "Ort": "Woeschnau"
            },
            {
              "PLZ": 5012,
              "Ort": "Schoenenwerd"
            },
            {
              "PLZ": 5013,
              "Ort": "Niedergoesgen"
            },
            {
              "PLZ": 5014,
              "Ort": "Gretzenbach"
            },
            {
              "PLZ": 5015,
              "Ort": "Erlinsbach SO"
            },
            {
              "PLZ": 5017,
              "Ort": "Barmelweid"
            },
            {
              "PLZ": 5018,
              "Ort": "Erlinsbach"
            },
            {
              "PLZ": 5022,
              "Ort": "Rombach"
            },
            {
              "PLZ": 5023,
              "Ort": "Biberstein"
            },
            {
              "PLZ": 5024,
              "Ort": "Kuettigen"
            },
            {
              "PLZ": 5025,
              "Ort": "Asp"
            },
            {
              "PLZ": 5026,
              "Ort": "Densbueren"
            },
            {
              "PLZ": 5027,
              "Ort": "Herznach"
            },
            {
              "PLZ": 5028,
              "Ort": "Ueken"
            },
            {
              "PLZ": 5032,
              "Ort": "Aarau Rohr"
            },
            {
              "PLZ": 5033,
              "Ort": "Buchs AG"
            },
            {
              "PLZ": 5034,
              "Ort": "Suhr"
            },
            {
              "PLZ": 5035,
              "Ort": "Unterentfelden"
            },
            {
              "PLZ": 5036,
              "Ort": "Oberentfelden"
            },
            {
              "PLZ": 5037,
              "Ort": "Muhen"
            },
            {
              "PLZ": 5040,
              "Ort": "Schoeftland"
            },
            {
              "PLZ": 5042,
              "Ort": "Hirschthal"
            },
            {
              "PLZ": 5043,
              "Ort": "Holziken"
            },
            {
              "PLZ": 5044,
              "Ort": "Schlossrued"
            },
            {
              "PLZ": 5046,
              "Ort": "Schmiedrued"
            },
            {
              "PLZ": 5046,
              "Ort": "Walde AG"
            },
            {
              "PLZ": 5046,
              "Ort": "Schmiedrued-Walde"
            },
            {
              "PLZ": 5053,
              "Ort": "Wittwil"
            },
            {
              "PLZ": 5053,
              "Ort": "Staffelbach"
            },
            {
              "PLZ": 5054,
              "Ort": "Kirchleerau"
            },
            {
              "PLZ": 5054,
              "Ort": "Moosleerau"
            },
            {
              "PLZ": 5056,
              "Ort": "Attelwil"
            },
            {
              "PLZ": 5057,
              "Ort": "Reitnau"
            },
            {
              "PLZ": 5058,
              "Ort": "Wiliberg"
            },
            {
              "PLZ": 5062,
              "Ort": "Oberhof"
            },
            {
              "PLZ": 5063,
              "Ort": "Woelflinswil"
            },
            {
              "PLZ": 5064,
              "Ort": "Wittnau"
            },
            {
              "PLZ": 5070,
              "Ort": "Frick"
            },
            {
              "PLZ": 5072,
              "Ort": "Oeschgen"
            },
            {
              "PLZ": 5073,
              "Ort": "Gipf-Oberfrick"
            },
            {
              "PLZ": 5074,
              "Ort": "Eiken"
            },
            {
              "PLZ": 5075,
              "Ort": "Hornussen"
            },
            {
              "PLZ": 5076,
              "Ort": "Boezen"
            },
            {
              "PLZ": 5077,
              "Ort": "Elfingen"
            },
            {
              "PLZ": 5078,
              "Ort": "Effingen"
            },
            {
              "PLZ": 5079,
              "Ort": "Zeihen"
            },
            {
              "PLZ": 5080,
              "Ort": "Laufenburg"
            },
            {
              "PLZ": 5082,
              "Ort": "Kaisten"
            },
            {
              "PLZ": 5083,
              "Ort": "Ittenthal"
            },
            {
              "PLZ": 5084,
              "Ort": "Rheinsulz"
            },
            {
              "PLZ": 5085,
              "Ort": "Sulz AG"
            },
            {
              "PLZ": 5102,
              "Ort": "Rupperswil"
            },
            {
              "PLZ": 5103,
              "Ort": "Wildegg"
            },
            {
              "PLZ": 5103,
              "Ort": "Moeriken AG"
            },
            {
              "PLZ": 5105,
              "Ort": "Auenstein"
            },
            {
              "PLZ": 5106,
              "Ort": "Veltheim AG"
            },
            {
              "PLZ": 5107,
              "Ort": "Schinznach Dorf"
            },
            {
              "PLZ": 5108,
              "Ort": "Oberflachs"
            },
            {
              "PLZ": 5112,
              "Ort": "Thalheim AG"
            },
            {
              "PLZ": 5113,
              "Ort": "Holderbank AG"
            },
            {
              "PLZ": 5116,
              "Ort": "Schinznach Bad"
            },
            {
              "PLZ": 5200,
              "Ort": "Brugg AG"
            },
            {
              "PLZ": 5210,
              "Ort": "Windisch"
            },
            {
              "PLZ": 5212,
              "Ort": "Hausen AG"
            },
            {
              "PLZ": 5213,
              "Ort": "Villnachern"
            },
            {
              "PLZ": 5222,
              "Ort": "Umiken"
            },
            {
              "PLZ": 5223,
              "Ort": "Riniken"
            },
            {
              "PLZ": 5224,
              "Ort": "Gallenkirch"
            },
            {
              "PLZ": 5224,
              "Ort": "Linn"
            },
            {
              "PLZ": 5224,
              "Ort": "Unterboezberg"
            },
            {
              "PLZ": 5225,
              "Ort": "Oberboezberg"
            },
            {
              "PLZ": 5233,
              "Ort": "Stilli"
            },
            {
              "PLZ": 5234,
              "Ort": "Villigen"
            },
            {
              "PLZ": 5235,
              "Ort": "Ruefenach AG"
            },
            {
              "PLZ": 5236,
              "Ort": "Remigen"
            },
            {
              "PLZ": 5237,
              "Ort": "Moenthal"
            },
            {
              "PLZ": 5242,
              "Ort": "Birr"
            },
            {
              "PLZ": 5242,
              "Ort": "Lupfig"
            },
            {
              "PLZ": 5243,
              "Ort": "Muelligen"
            },
            {
              "PLZ": 5244,
              "Ort": "Birrhard"
            },
            {
              "PLZ": 5245,
              "Ort": "Habsburg"
            },
            {
              "PLZ": 5246,
              "Ort": "Scherz"
            },
            {
              "PLZ": 5272,
              "Ort": "Gansingen"
            },
            {
              "PLZ": 5273,
              "Ort": "Oberhofen AG"
            },
            {
              "PLZ": 5274,
              "Ort": "Mettau"
            },
            {
              "PLZ": 5275,
              "Ort": "Etzgen"
            },
            {
              "PLZ": 5276,
              "Ort": "Wil AG"
            },
            {
              "PLZ": 5277,
              "Ort": "Hottwil"
            },
            {
              "PLZ": 5300,
              "Ort": "Turgi"
            },
            {
              "PLZ": 5301,
              "Ort": "Siggenthal Station"
            },
            {
              "PLZ": 5303,
              "Ort": "Wuerenlingen"
            },
            {
              "PLZ": 5304,
              "Ort": "Endingen"
            },
            {
              "PLZ": 5305,
              "Ort": "Unterendingen"
            },
            {
              "PLZ": 5306,
              "Ort": "Tegerfelden"
            },
            {
              "PLZ": 5312,
              "Ort": "Doettingen"
            },
            {
              "PLZ": 5313,
              "Ort": "Klingnau"
            },
            {
              "PLZ": 5314,
              "Ort": "Kleindoettingen"
            },
            {
              "PLZ": 5315,
              "Ort": "Boettstein"
            },
            {
              "PLZ": 5316,
              "Ort": "Felsenau AG"
            },
            {
              "PLZ": 5316,
              "Ort": "Leuggern"
            },
            {
              "PLZ": 5317,
              "Ort": "Hettenschwil"
            },
            {
              "PLZ": 5318,
              "Ort": "Mandach"
            },
            {
              "PLZ": 5322,
              "Ort": "Koblenz"
            },
            {
              "PLZ": 5323,
              "Ort": "Rietheim"
            },
            {
              "PLZ": 5324,
              "Ort": "Full-Reuenthal"
            },
            {
              "PLZ": 5325,
              "Ort": "Leibstadt"
            },
            {
              "PLZ": 5326,
              "Ort": "Schwaderloch"
            },
            {
              "PLZ": 5330,
              "Ort": "Bad Zurzach"
            },
            {
              "PLZ": 5332,
              "Ort": "Rekingen AG"
            },
            {
              "PLZ": 5333,
              "Ort": "Baldingen"
            },
            {
              "PLZ": 5334,
              "Ort": "Boebikon"
            },
            {
              "PLZ": 5400,
              "Ort": "Baden"
            },
            {
              "PLZ": 5404,
              "Ort": "Baden"
            },
            {
              "PLZ": 5405,
              "Ort": "Daettwil AG"
            },
            {
              "PLZ": 5406,
              "Ort": "Ruetihof"
            },
            {
              "PLZ": 5408,
              "Ort": "Ennetbaden"
            },
            {
              "PLZ": 5412,
              "Ort": "Gebenstorf"
            },
            {
              "PLZ": 5413,
              "Ort": "Birmenstorf AG"
            },
            {
              "PLZ": 5415,
              "Ort": "Hertenstein AG"
            },
            {
              "PLZ": 5415,
              "Ort": "Rieden AG"
            },
            {
              "PLZ": 5415,
              "Ort": "Nussbaumen AG"
            },
            {
              "PLZ": 5416,
              "Ort": "Kirchdorf AG"
            },
            {
              "PLZ": 5417,
              "Ort": "Untersiggenthal"
            },
            {
              "PLZ": 5420,
              "Ort": "Ehrendingen"
            },
            {
              "PLZ": 5423,
              "Ort": "Freienwil"
            },
            {
              "PLZ": 5425,
              "Ort": "Schneisingen"
            },
            {
              "PLZ": 5426,
              "Ort": "Lengnau AG"
            },
            {
              "PLZ": 5430,
              "Ort": "Wettingen"
            },
            {
              "PLZ": 5432,
              "Ort": "Neuenhof"
            },
            {
              "PLZ": 5436,
              "Ort": "Wuerenlos"
            },
            {
              "PLZ": 5442,
              "Ort": "Fislisbach"
            },
            {
              "PLZ": 5443,
              "Ort": "Niederrohrdorf"
            },
            {
              "PLZ": 5444,
              "Ort": "Kuenten"
            },
            {
              "PLZ": 5445,
              "Ort": "Eggenwil"
            },
            {
              "PLZ": 5452,
              "Ort": "Oberrohrdorf"
            },
            {
              "PLZ": 5453,
              "Ort": "Remetschwil"
            },
            {
              "PLZ": 5454,
              "Ort": "Bellikon"
            },
            {
              "PLZ": 5462,
              "Ort": "Siglistorf"
            },
            {
              "PLZ": 5463,
              "Ort": "Wislikofen"
            },
            {
              "PLZ": 5464,
              "Ort": "Ruemikon AG"
            },
            {
              "PLZ": 5465,
              "Ort": "Mellikon"
            },
            {
              "PLZ": 5466,
              "Ort": "Kaiserstuhl AG"
            },
            {
              "PLZ": 5467,
              "Ort": "Fisibach"
            },
            {
              "PLZ": 5502,
              "Ort": "Hunzenschwil"
            },
            {
              "PLZ": 5503,
              "Ort": "Schafisheim"
            },
            {
              "PLZ": 5504,
              "Ort": "Othmarsingen"
            },
            {
              "PLZ": 5505,
              "Ort": "Brunegg"
            },
            {
              "PLZ": 5506,
              "Ort": "Maegenwil"
            },
            {
              "PLZ": 5507,
              "Ort": "Mellingen"
            },
            {
              "PLZ": 5512,
              "Ort": "Wohlenschwil"
            },
            {
              "PLZ": 5522,
              "Ort": "Taegerig"
            },
            {
              "PLZ": 5524,
              "Ort": "Nesselnbach"
            },
            {
              "PLZ": 5524,
              "Ort": "Niederwil AG"
            },
            {
              "PLZ": 5525,
              "Ort": "Fischbach-Goeslikon"
            },
            {
              "PLZ": 5600,
              "Ort": "Lenzburg"
            },
            {
              "PLZ": 5600,
              "Ort": "Ammerswil AG"
            },
            {
              "PLZ": 5603,
              "Ort": "Staufen"
            },
            {
              "PLZ": 5604,
              "Ort": "Hendschiken"
            },
            {
              "PLZ": 5605,
              "Ort": "Dottikon"
            },
            {
              "PLZ": 5606,
              "Ort": "Dintikon"
            },
            {
              "PLZ": 5607,
              "Ort": "Haegglingen"
            },
            {
              "PLZ": 5608,
              "Ort": "Stetten AG"
            },
            {
              "PLZ": 5610,
              "Ort": "Wohlen AG"
            },
            {
              "PLZ": 5611,
              "Ort": "Anglikon"
            },
            {
              "PLZ": 5612,
              "Ort": "Villmergen"
            },
            {
              "PLZ": 5613,
              "Ort": "Hilfikon"
            },
            {
              "PLZ": 5614,
              "Ort": "Sarmenstorf"
            },
            {
              "PLZ": 5615,
              "Ort": "Fahrwangen"
            },
            {
              "PLZ": 5616,
              "Ort": "Meisterschwanden"
            },
            {
              "PLZ": 5617,
              "Ort": "Tennwil"
            },
            {
              "PLZ": 5618,
              "Ort": "Bettwil"
            },
            {
              "PLZ": 5619,
              "Ort": "Buettikon AG"
            },
            {
              "PLZ": 5619,
              "Ort": "Uezwil"
            },
            {
              "PLZ": 5620,
              "Ort": "Bremgarten AG"
            },
            {
              "PLZ": 5621,
              "Ort": "Zufikon"
            },
            {
              "PLZ": 5622,
              "Ort": "Waltenschwil"
            },
            {
              "PLZ": 5623,
              "Ort": "Boswil"
            },
            {
              "PLZ": 5624,
              "Ort": "Waldhaeusern AG"
            },
            {
              "PLZ": 5624,
              "Ort": "Buenzen"
            },
            {
              "PLZ": 5625,
              "Ort": "Kallern"
            },
            {
              "PLZ": 5626,
              "Ort": "Hermetschwil-Staffeln"
            },
            {
              "PLZ": 5627,
              "Ort": "Besenbueren"
            },
            {
              "PLZ": 5628,
              "Ort": "Aristau"
            },
            {
              "PLZ": 5630,
              "Ort": "Muri AG"
            },
            {
              "PLZ": 5632,
              "Ort": "Buttwil"
            },
            {
              "PLZ": 5634,
              "Ort": "Merenschwand"
            },
            {
              "PLZ": 5636,
              "Ort": "Benzenschwil"
            },
            {
              "PLZ": 5637,
              "Ort": "Geltwil"
            },
            {
              "PLZ": 5637,
              "Ort": "Beinwil (Freiamt)"
            },
            {
              "PLZ": 5642,
              "Ort": "Muehlau"
            },
            {
              "PLZ": 5643,
              "Ort": "Alikon"
            },
            {
              "PLZ": 5643,
              "Ort": "Meienberg"
            },
            {
              "PLZ": 5643,
              "Ort": "Sins"
            },
            {
              "PLZ": 5644,
              "Ort": "Auw"
            },
            {
              "PLZ": 5645,
              "Ort": "Aettenschwil"
            },
            {
              "PLZ": 5645,
              "Ort": "Fenkrieden"
            },
            {
              "PLZ": 5646,
              "Ort": "Abtwil AG"
            },
            {
              "PLZ": 5647,
              "Ort": "Oberrueti"
            },
            {
              "PLZ": 5702,
              "Ort": "Niederlenz"
            },
            {
              "PLZ": 5703,
              "Ort": "Seon"
            },
            {
              "PLZ": 5704,
              "Ort": "Egliswil"
            },
            {
              "PLZ": 5705,
              "Ort": "Hallwil"
            },
            {
              "PLZ": 5706,
              "Ort": "Boniswil"
            },
            {
              "PLZ": 5707,
              "Ort": "Seengen"
            },
            {
              "PLZ": 5708,
              "Ort": "Birrwil"
            },
            {
              "PLZ": 5712,
              "Ort": "Beinwil am See"
            },
            {
              "PLZ": 5722,
              "Ort": "Graenichen"
            },
            {
              "PLZ": 5723,
              "Ort": "Teufenthal AG"
            },
            {
              "PLZ": 5724,
              "Ort": "Duerrenaesch"
            },
            {
              "PLZ": 5725,
              "Ort": "Leutwil"
            },
            {
              "PLZ": 5726,
              "Ort": "Unterkulm"
            },
            {
              "PLZ": 5727,
              "Ort": "Oberkulm"
            },
            {
              "PLZ": 5728,
              "Ort": "Gontenschwil"
            },
            {
              "PLZ": 5732,
              "Ort": "Zetzwil"
            },
            {
              "PLZ": 5733,
              "Ort": "Leimbach AG"
            },
            {
              "PLZ": 5734,
              "Ort": "Reinach AG"
            },
            {
              "PLZ": 5735,
              "Ort": "Pfeffikon LU"
            },
            {
              "PLZ": 5736,
              "Ort": "Burg AG"
            },
            {
              "PLZ": 5737,
              "Ort": "Menziken"
            },
            {
              "PLZ": 5742,
              "Ort": "Koelliken"
            },
            {
              "PLZ": 5745,
              "Ort": "Safenwil"
            },
            {
              "PLZ": 5746,
              "Ort": "Walterswil SO"
            },
            {
              "PLZ": 6000,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6003,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6004,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6005,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6005,
              "Ort": "St. Niklausen LU"
            },
            {
              "PLZ": 6006,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6010,
              "Ort": "Kriens"
            },
            {
              "PLZ": 6010,
              "Ort": "Pilatus Kulm"
            },
            {
              "PLZ": 6012,
              "Ort": "Obernau"
            },
            {
              "PLZ": 6013,
              "Ort": "Eigenthal"
            },
            {
              "PLZ": 6014,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6015,
              "Ort": "Luzern"
            },
            {
              "PLZ": 6016,
              "Ort": "Hellbuehl"
            },
            {
              "PLZ": 6017,
              "Ort": "Ruswil"
            },
            {
              "PLZ": 6018,
              "Ort": "Buttisholz"
            },
            {
              "PLZ": 6019,
              "Ort": "Sigigen"
            },
            {
              "PLZ": 6020,
              "Ort": "Emmenbruecke"
            },
            {
              "PLZ": 6022,
              "Ort": "Grosswangen"
            },
            {
              "PLZ": 6023,
              "Ort": "Rothenburg"
            },
            {
              "PLZ": 6024,
              "Ort": "Hildisrieden"
            },
            {
              "PLZ": 6025,
              "Ort": "Neudorf"
            },
            {
              "PLZ": 6026,
              "Ort": "Rain"
            },
            {
              "PLZ": 6027,
              "Ort": "Roemerswil LU"
            },
            {
              "PLZ": 6028,
              "Ort": "Herlisberg"
            },
            {
              "PLZ": 6030,
              "Ort": "Ebikon"
            },
            {
              "PLZ": 6032,
              "Ort": "Emmen"
            },
            {
              "PLZ": 6033,
              "Ort": "Buchrain"
            },
            {
              "PLZ": 6034,
              "Ort": "Inwil"
            },
            {
              "PLZ": 6035,
              "Ort": "Perlen"
            },
            {
              "PLZ": 6036,
              "Ort": "Dierikon"
            },
            {
              "PLZ": 6037,
              "Ort": "Root"
            },
            {
              "PLZ": 6038,
              "Ort": "Gisikon"
            },
            {
              "PLZ": 6038,
              "Ort": "Honau"
            },
            {
              "PLZ": 6039,
              "Ort": "Root Laengenbold"
            },
            {
              "PLZ": 6042,
              "Ort": "Dietwil"
            },
            {
              "PLZ": 6043,
              "Ort": "Adligenswil"
            },
            {
              "PLZ": 6044,
              "Ort": "Udligenswil"
            },
            {
              "PLZ": 6045,
              "Ort": "Meggen"
            },
            {
              "PLZ": 6047,
              "Ort": "Kastanienbaum"
            },
            {
              "PLZ": 6048,
              "Ort": "Horw"
            },
            {
              "PLZ": 6052,
              "Ort": "Hergiswil NW"
            },
            {
              "PLZ": 6053,
              "Ort": "Alpnachstad"
            },
            {
              "PLZ": 6055,
              "Ort": "Alpnach Dorf"
            },
            {
              "PLZ": 6056,
              "Ort": "Kaegiswil"
            },
            {
              "PLZ": 6060,
              "Ort": "Sarnen"
            },
            {
              "PLZ": 6060,
              "Ort": "Ramersberg"
            },
            {
              "PLZ": 6062,
              "Ort": "Wilen (Sarnen)"
            },
            {
              "PLZ": 6063,
              "Ort": "Stalden (Sarnen)"
            },
            {
              "PLZ": 6064,
              "Ort": "Kerns"
            },
            {
              "PLZ": 6066,
              "Ort": "St. Niklausen OW"
            },
            {
              "PLZ": 6067,
              "Ort": "Melchtal"
            },
            {
              "PLZ": 6068,
              "Ort": "Melchsee-Frutt"
            },
            {
              "PLZ": 6072,
              "Ort": "Sachseln"
            },
            {
              "PLZ": 6073,
              "Ort": "Flueeli-Ranft"
            },
            {
              "PLZ": 6074,
              "Ort": "Giswil"
            },
            {
              "PLZ": 6078,
              "Ort": "Buerglen OW"
            },
            {
              "PLZ": 6078,
              "Ort": "Lungern"
            },
            {
              "PLZ": 6083,
              "Ort": "Hasliberg Hohfluh"
            },
            {
              "PLZ": 6084,
              "Ort": "Hasliberg Wasserwendi"
            },
            {
              "PLZ": 6085,
              "Ort": "Hasliberg Goldern"
            },
            {
              "PLZ": 6086,
              "Ort": "Hasliberg Reuti"
            },
            {
              "PLZ": 6102,
              "Ort": "Malters"
            },
            {
              "PLZ": 6103,
              "Ort": "Schwarzenberg LU"
            },
            {
              "PLZ": 6105,
              "Ort": "Schachen LU"
            },
            {
              "PLZ": 6106,
              "Ort": "Werthenstein"
            },
            {
              "PLZ": 6110,
              "Ort": "Fontannen b. Wolhusen"
            },
            {
              "PLZ": 6110,
              "Ort": "Wolhusen"
            },
            {
              "PLZ": 6112,
              "Ort": "Doppleschwand"
            },
            {
              "PLZ": 6113,
              "Ort": "Romoos"
            },
            {
              "PLZ": 6114,
              "Ort": "Steinhuserberg"
            },
            {
              "PLZ": 6122,
              "Ort": "Menznau"
            },
            {
              "PLZ": 6123,
              "Ort": "Geiss"
            },
            {
              "PLZ": 6125,
              "Ort": "Menzberg"
            },
            {
              "PLZ": 6126,
              "Ort": "Daiwil"
            },
            {
              "PLZ": 6130,
              "Ort": "Willisau"
            },
            {
              "PLZ": 6132,
              "Ort": "Rohrmatt"
            },
            {
              "PLZ": 6133,
              "Ort": "Hergiswil b. Willisau"
            },
            {
              "PLZ": 6142,
              "Ort": "Gettnau"
            },
            {
              "PLZ": 6143,
              "Ort": "Ohmstal"
            },
            {
              "PLZ": 6144,
              "Ort": "Zell LU"
            },
            {
              "PLZ": 6145,
              "Ort": "Fischbach LU"
            },
            {
              "PLZ": 6146,
              "Ort": "Grossdietwil"
            },
            {
              "PLZ": 6147,
              "Ort": "Altbueron"
            },
            {
              "PLZ": 6152,
              "Ort": "Hueswil"
            },
            {
              "PLZ": 6153,
              "Ort": "Ufhusen"
            },
            {
              "PLZ": 6154,
              "Ort": "Hofstatt"
            },
            {
              "PLZ": 6156,
              "Ort": "Luthern Bad"
            },
            {
              "PLZ": 6156,
              "Ort": "Luthern"
            },
            {
              "PLZ": 6162,
              "Ort": "Rengg"
            },
            {
              "PLZ": 6162,
              "Ort": "Finsterwald b. Entlebuch"
            },
            {
              "PLZ": 6162,
              "Ort": "Entlebuch"
            },
            {
              "PLZ": 6163,
              "Ort": "Ebnet"
            },
            {
              "PLZ": 6166,
              "Ort": "Hasle LU"
            },
            {
              "PLZ": 6167,
              "Ort": "Bramboden"
            },
            {
              "PLZ": 6170,
              "Ort": "Schuepfheim"
            },
            {
              "PLZ": 6173,
              "Ort": "Fluehli LU"
            },
            {
              "PLZ": 6174,
              "Ort": "Soerenberg"
            },
            {
              "PLZ": 6182,
              "Ort": "Escholzmatt"
            },
            {
              "PLZ": 6192,
              "Ort": "Wiggen"
            },
            {
              "PLZ": 6196,
              "Ort": "Marbach LU"
            },
            {
              "PLZ": 6197,
              "Ort": "Schangnau"
            },
            {
              "PLZ": 6203,
              "Ort": "Sempach Station"
            },
            {
              "PLZ": 6204,
              "Ort": "Sempach"
            },
            {
              "PLZ": 6205,
              "Ort": "Eich"
            },
            {
              "PLZ": 6206,
              "Ort": "Neuenkirch"
            },
            {
              "PLZ": 6207,
              "Ort": "Nottwil"
            },
            {
              "PLZ": 6208,
              "Ort": "Oberkirch LU"
            },
            {
              "PLZ": 6210,
              "Ort": "Sursee"
            },
            {
              "PLZ": 6211,
              "Ort": "Buchs LU"
            },
            {
              "PLZ": 6212,
              "Ort": "Kaltbach"
            },
            {
              "PLZ": 6212,
              "Ort": "St. Erhard"
            },
            {
              "PLZ": 6213,
              "Ort": "Knutwil"
            },
            {
              "PLZ": 6214,
              "Ort": "Schenkon"
            },
            {
              "PLZ": 6215,
              "Ort": "Schwarzenbach Beromuenster"
            },
            {
              "PLZ": 6215,
              "Ort": "Beromuenster"
            },
            {
              "PLZ": 6216,
              "Ort": "Mauensee"
            },
            {
              "PLZ": 6217,
              "Ort": "Kottwil"
            },
            {
              "PLZ": 6218,
              "Ort": "Ettiswil"
            },
            {
              "PLZ": 6221,
              "Ort": "Rickenbach LU"
            },
            {
              "PLZ": 6222,
              "Ort": "Gunzwil"
            },
            {
              "PLZ": 6231,
              "Ort": "Schlierbach"
            },
            {
              "PLZ": 6232,
              "Ort": "Geuensee"
            },
            {
              "PLZ": 6233,
              "Ort": "Bueron"
            },
            {
              "PLZ": 6234,
              "Ort": "Kulmerau"
            },
            {
              "PLZ": 6234,
              "Ort": "Triengen"
            },
            {
              "PLZ": 6235,
              "Ort": "Winikon"
            },
            {
              "PLZ": 6236,
              "Ort": "Wilihof"
            },
            {
              "PLZ": 6242,
              "Ort": "Wauwil"
            },
            {
              "PLZ": 6243,
              "Ort": "Egolzwil"
            },
            {
              "PLZ": 6244,
              "Ort": "Nebikon"
            },
            {
              "PLZ": 6245,
              "Ort": "Ebersecken"
            },
            {
              "PLZ": 6246,
              "Ort": "Altishofen"
            },
            {
              "PLZ": 6247,
              "Ort": "Schoetz"
            },
            {
              "PLZ": 6248,
              "Ort": "Alberswil"
            },
            {
              "PLZ": 6252,
              "Ort": "Dagmersellen"
            },
            {
              "PLZ": 6253,
              "Ort": "Uffikon"
            },
            {
              "PLZ": 6260,
              "Ort": "Reidermoos"
            },
            {
              "PLZ": 6260,
              "Ort": "Hintermoos"
            },
            {
              "PLZ": 6260,
              "Ort": "Mehlsecken"
            },
            {
              "PLZ": 6260,
              "Ort": "Reiden"
            },
            {
              "PLZ": 6262,
              "Ort": "Langnau b. Reiden"
            },
            {
              "PLZ": 6263,
              "Ort": "Richenthal"
            },
            {
              "PLZ": 6264,
              "Ort": "Pfaffnau"
            },
            {
              "PLZ": 6265,
              "Ort": "Roggliswil"
            },
            {
              "PLZ": 6274,
              "Ort": "Eschenbach LU"
            },
            {
              "PLZ": 6275,
              "Ort": "Ballwil"
            },
            {
              "PLZ": 6276,
              "Ort": "Hohenrain"
            },
            {
              "PLZ": 6277,
              "Ort": "Kleinwangen"
            },
            {
              "PLZ": 6277,
              "Ort": "Lieli LU"
            },
            {
              "PLZ": 6280,
              "Ort": "Hochdorf"
            },
            {
              "PLZ": 6280,
              "Ort": "Urswil"
            },
            {
              "PLZ": 6283,
              "Ort": "Baldegg"
            },
            {
              "PLZ": 6284,
              "Ort": "Sulz LU"
            },
            {
              "PLZ": 6284,
              "Ort": "Gelfingen"
            },
            {
              "PLZ": 6285,
              "Ort": "Retschwil"
            },
            {
              "PLZ": 6285,
              "Ort": "Hitzkirch"
            },
            {
              "PLZ": 6286,
              "Ort": "Altwis"
            },
            {
              "PLZ": 6287,
              "Ort": "Aesch LU"
            },
            {
              "PLZ": 6288,
              "Ort": "Schongau"
            },
            {
              "PLZ": 6289,
              "Ort": "Mueswangen"
            },
            {
              "PLZ": 6289,
              "Ort": "Haemikon"
            },
            {
              "PLZ": 6294,
              "Ort": "Ermensee"
            },
            {
              "PLZ": 6295,
              "Ort": "Mosen"
            },
            {
              "PLZ": 6300,
              "Ort": "Zug"
            },
            {
              "PLZ": 6300,
              "Ort": "Zugerberg"
            },
            {
              "PLZ": 6312,
              "Ort": "Steinhausen"
            },
            {
              "PLZ": 6313,
              "Ort": "Edlibach"
            },
            {
              "PLZ": 6313,
              "Ort": "Finstersee"
            },
            {
              "PLZ": 6313,
              "Ort": "Menzingen"
            },
            {
              "PLZ": 6314,
              "Ort": "Neuaegeri"
            },
            {
              "PLZ": 6314,
              "Ort": "Unteraegeri"
            },
            {
              "PLZ": 6315,
              "Ort": "Morgarten"
            },
            {
              "PLZ": 6315,
              "Ort": "Alosen"
            },
            {
              "PLZ": 6315,
              "Ort": "Oberaegeri"
            },
            {
              "PLZ": 6317,
              "Ort": "Oberwil b. Zug"
            },
            {
              "PLZ": 6318,
              "Ort": "Walchwil"
            },
            {
              "PLZ": 6319,
              "Ort": "Allenwinden"
            },
            {
              "PLZ": 6330,
              "Ort": "Cham"
            },
            {
              "PLZ": 6331,
              "Ort": "Huenenberg"
            },
            {
              "PLZ": 6332,
              "Ort": "Hagendorn"
            },
            {
              "PLZ": 6333,
              "Ort": "Huenenberg See"
            },
            {
              "PLZ": 6340,
              "Ort": "Baar"
            },
            {
              "PLZ": 6340,
              "Ort": "Sihlbrugg"
            },
            {
              "PLZ": 6343,
              "Ort": "Buonas"
            },
            {
              "PLZ": 6343,
              "Ort": "Risch"
            },
            {
              "PLZ": 6343,
              "Ort": "Holzhaeusern ZG"
            },
            {
              "PLZ": 6343,
              "Ort": "Rotkreuz"
            },
            {
              "PLZ": 6344,
              "Ort": "Meierskappel"
            },
            {
              "PLZ": 6345,
              "Ort": "Neuheim"
            },
            {
              "PLZ": 6353,
              "Ort": "Weggis"
            },
            {
              "PLZ": 6354,
              "Ort": "Vitznau"
            },
            {
              "PLZ": 6356,
              "Ort": "Rigi Kaltbad"
            },
            {
              "PLZ": 6362,
              "Ort": "Stansstad"
            },
            {
              "PLZ": 6363,
              "Ort": "Obbuergen"
            },
            {
              "PLZ": 6363,
              "Ort": "Buergenstock"
            },
            {
              "PLZ": 6363,
              "Ort": "Fuerigen"
            },
            {
              "PLZ": 6365,
              "Ort": "Kehrsiten"
            },
            {
              "PLZ": 6370,
              "Ort": "Stans"
            },
            {
              "PLZ": 6370,
              "Ort": "Oberdorf NW"
            },
            {
              "PLZ": 6372,
              "Ort": "Ennetmoos"
            },
            {
              "PLZ": 6373,
              "Ort": "Ennetbuergen"
            },
            {
              "PLZ": 6374,
              "Ort": "Buochs"
            },
            {
              "PLZ": 6375,
              "Ort": "Beckenried"
            },
            {
              "PLZ": 6376,
              "Ort": "Emmetten"
            },
            {
              "PLZ": 6377,
              "Ort": "Seelisberg"
            },
            {
              "PLZ": 6382,
              "Ort": "Bueren NW"
            },
            {
              "PLZ": 6383,
              "Ort": "Niederrickenbach"
            },
            {
              "PLZ": 6383,
              "Ort": "Wiesenberg"
            },
            {
              "PLZ": 6383,
              "Ort": "Wirzweli"
            },
            {
              "PLZ": 6383,
              "Ort": "Dallenwil"
            },
            {
              "PLZ": 6386,
              "Ort": "Wolfenschiessen"
            },
            {
              "PLZ": 6387,
              "Ort": "Oberrickenbach"
            },
            {
              "PLZ": 6388,
              "Ort": "Grafenort"
            },
            {
              "PLZ": 6390,
              "Ort": "Engelberg"
            },
            {
              "PLZ": 6402,
              "Ort": "Merlischachen"
            },
            {
              "PLZ": 6403,
              "Ort": "Kuessnacht am Rigi"
            },
            {
              "PLZ": 6404,
              "Ort": "Greppen"
            },
            {
              "PLZ": 6405,
              "Ort": "Immensee"
            },
            {
              "PLZ": 6410,
              "Ort": "Rigi Kloesterli"
            },
            {
              "PLZ": 6410,
              "Ort": "Rigi Staffel"
            },
            {
              "PLZ": 6410,
              "Ort": "Rigi Kulm"
            },
            {
              "PLZ": 6410,
              "Ort": "Rigi Scheidegg"
            },
            {
              "PLZ": 6410,
              "Ort": "Goldau"
            },
            {
              "PLZ": 6414,
              "Ort": "Oberarth"
            },
            {
              "PLZ": 6415,
              "Ort": "Arth"
            },
            {
              "PLZ": 6416,
              "Ort": "Steinerberg"
            },
            {
              "PLZ": 6417,
              "Ort": "Sattel"
            },
            {
              "PLZ": 6418,
              "Ort": "Rothenthurm"
            },
            {
              "PLZ": 6422,
              "Ort": "Steinen"
            },
            {
              "PLZ": 6423,
              "Ort": "Seewen SZ"
            },
            {
              "PLZ": 6424,
              "Ort": "Lauerz"
            },
            {
              "PLZ": 6430,
              "Ort": "Schwyz"
            },
            {
              "PLZ": 6432,
              "Ort": "Rickenbach b. Schwyz"
            },
            {
              "PLZ": 6433,
              "Ort": "Stoos SZ"
            },
            {
              "PLZ": 6434,
              "Ort": "Illgau"
            },
            {
              "PLZ": 6436,
              "Ort": "Ried (Muotathal)"
            },
            {
              "PLZ": 6436,
              "Ort": "Bisisthal"
            },
            {
              "PLZ": 6436,
              "Ort": "Muotathal"
            },
            {
              "PLZ": 6438,
              "Ort": "Ibach"
            },
            {
              "PLZ": 6440,
              "Ort": "Brunnen"
            },
            {
              "PLZ": 6441,
              "Ort": "Ruetli"
            },
            {
              "PLZ": 6442,
              "Ort": "Gersau"
            },
            {
              "PLZ": 6443,
              "Ort": "Morschach"
            },
            {
              "PLZ": 6452,
              "Ort": "Riemenstalden"
            },
            {
              "PLZ": 6452,
              "Ort": "Sisikon"
            },
            {
              "PLZ": 6454,
              "Ort": "Flueelen"
            },
            {
              "PLZ": 6460,
              "Ort": "Altdorf UR"
            },
            {
              "PLZ": 6461,
              "Ort": "Isenthal"
            },
            {
              "PLZ": 6462,
              "Ort": "Seedorf UR"
            },
            {
              "PLZ": 6463,
              "Ort": "Buerglen UR"
            },
            {
              "PLZ": 6464,
              "Ort": "Spiringen"
            },
            {
              "PLZ": 6465,
              "Ort": "Unterschaechen"
            },
            {
              "PLZ": 6466,
              "Ort": "Bauen"
            },
            {
              "PLZ": 6467,
              "Ort": "Schattdorf"
            },
            {
              "PLZ": 6468,
              "Ort": "Attinghausen"
            },
            {
              "PLZ": 6469,
              "Ort": "Haldi b. Schattdorf"
            },
            {
              "PLZ": 6472,
              "Ort": "Erstfeld"
            },
            {
              "PLZ": 6473,
              "Ort": "Silenen"
            },
            {
              "PLZ": 6474,
              "Ort": "Amsteg"
            },
            {
              "PLZ": 6475,
              "Ort": "Bristen"
            },
            {
              "PLZ": 6476,
              "Ort": "Intschi"
            },
            {
              "PLZ": 6482,
              "Ort": "Gurtnellen"
            },
            {
              "PLZ": 6484,
              "Ort": "Wassen UR"
            },
            {
              "PLZ": 6485,
              "Ort": "Meien"
            },
            {
              "PLZ": 6487,
              "Ort": "Goeschenen"
            },
            {
              "PLZ": 6490,
              "Ort": "Andermatt"
            },
            {
              "PLZ": 6491,
              "Ort": "Realp"
            },
            {
              "PLZ": 6493,
              "Ort": "Hospental"
            },
            {
              "PLZ": 6500,
              "Ort": "Bellinzona"
            },
            {
              "PLZ": 6503,
              "Ort": "Bellinzona"
            },
            {
              "PLZ": 6512,
              "Ort": "Giubiasco"
            },
            {
              "PLZ": 6513,
              "Ort": "Monte Carasso"
            },
            {
              "PLZ": 6514,
              "Ort": "Sementina"
            },
            {
              "PLZ": 6515,
              "Ort": "Gudo"
            },
            {
              "PLZ": 6516,
              "Ort": "Cugnasco"
            },
            {
              "PLZ": 6517,
              "Ort": "Arbedo"
            },
            {
              "PLZ": 6518,
              "Ort": "Gorduno"
            },
            {
              "PLZ": 6523,
              "Ort": "Preonzo"
            },
            {
              "PLZ": 6524,
              "Ort": "Moleno"
            },
            {
              "PLZ": 6525,
              "Ort": "Gnosca"
            },
            {
              "PLZ": 6526,
              "Ort": "Prosito"
            },
            {
              "PLZ": 6527,
              "Ort": "Lodrino"
            },
            {
              "PLZ": 6528,
              "Ort": "Camorino"
            },
            {
              "PLZ": 6532,
              "Ort": "Castione"
            },
            {
              "PLZ": 6533,
              "Ort": "Lumino"
            },
            {
              "PLZ": 6534,
              "Ort": "S. Vittore"
            },
            {
              "PLZ": 6535,
              "Ort": "Roveredo GR"
            },
            {
              "PLZ": 6537,
              "Ort": "Grono"
            },
            {
              "PLZ": 6538,
              "Ort": "Verdabbio"
            },
            {
              "PLZ": 6540,
              "Ort": "Castaneda"
            },
            {
              "PLZ": 6541,
              "Ort": "Sta. Maria in Calanca"
            },
            {
              "PLZ": 6542,
              "Ort": "Buseno"
            },
            {
              "PLZ": 6543,
              "Ort": "Arvigo"
            },
            {
              "PLZ": 6544,
              "Ort": "Braggio"
            },
            {
              "PLZ": 6545,
              "Ort": "Selma"
            },
            {
              "PLZ": 6546,
              "Ort": "Cauco"
            },
            {
              "PLZ": 6547,
              "Ort": "Augio"
            },
            {
              "PLZ": 6548,
              "Ort": "Rossa"
            },
            {
              "PLZ": 6549,
              "Ort": "Laura"
            },
            {
              "PLZ": 6556,
              "Ort": "Leggia"
            },
            {
              "PLZ": 6557,
              "Ort": "Cama"
            },
            {
              "PLZ": 6558,
              "Ort": "Lostallo"
            },
            {
              "PLZ": 6562,
              "Ort": "Soazza"
            },
            {
              "PLZ": 6563,
              "Ort": "Mesocco"
            },
            {
              "PLZ": 6565,
              "Ort": "S. Bernardino"
            },
            {
              "PLZ": 6571,
              "Ort": "Indemini"
            },
            {
              "PLZ": 6572,
              "Ort": "Quartino"
            },
            {
              "PLZ": 6573,
              "Ort": "Magadino"
            },
            {
              "PLZ": 6574,
              "Ort": "Vira (Gambarogno)"
            },
            {
              "PLZ": 6575,
              "Ort": "Vairano"
            },
            {
              "PLZ": 6575,
              "Ort": "S. Nazzaro"
            },
            {
              "PLZ": 6576,
              "Ort": "Gerra (Gambarogno)"
            },
            {
              "PLZ": 6577,
              "Ort": "Ranzo"
            },
            {
              "PLZ": 6578,
              "Ort": "Caviano"
            },
            {
              "PLZ": 6579,
              "Ort": "Piazzogna"
            },
            {
              "PLZ": 6582,
              "Ort": "Pianezzo"
            },
            {
              "PLZ": 6583,
              "Ort": "S. Antonio (Val Morobbia)"
            },
            {
              "PLZ": 6584,
              "Ort": "Carena"
            },
            {
              "PLZ": 6592,
              "Ort": "S. Antonino"
            },
            {
              "PLZ": 6593,
              "Ort": "Cadenazzo"
            },
            {
              "PLZ": 6594,
              "Ort": "Contone"
            },
            {
              "PLZ": 6595,
              "Ort": "Riazzino"
            },
            {
              "PLZ": 6596,
              "Ort": "Gordola"
            },
            {
              "PLZ": 6597,
              "Ort": "Agarone"
            },
            {
              "PLZ": 6598,
              "Ort": "Tenero"
            },
            {
              "PLZ": 6599,
              "Ort": "Robasacco"
            },
            {
              "PLZ": 6600,
              "Ort": "Locarno"
            },
            {
              "PLZ": 6600,
              "Ort": "Muralto"
            },
            {
              "PLZ": 6600,
              "Ort": "Solduno"
            },
            {
              "PLZ": 6605,
              "Ort": "Monte Brè sopra Locarno"
            },
            {
              "PLZ": 6605,
              "Ort": "Locarno"
            },
            {
              "PLZ": 6611,
              "Ort": "Mosogno"
            },
            {
              "PLZ": 6611,
              "Ort": "Gresso"
            },
            {
              "PLZ": 6611,
              "Ort": "Crana"
            },
            {
              "PLZ": 6612,
              "Ort": "Ascona"
            },
            {
              "PLZ": 6613,
              "Ort": "Porto Ronco"
            },
            {
              "PLZ": 6614,
              "Ort": "Isole di Brissago"
            },
            {
              "PLZ": 6614,
              "Ort": "Brissago"
            },
            {
              "PLZ": 6616,
              "Ort": "Losone"
            },
            {
              "PLZ": 6618,
              "Ort": "Arcegno"
            },
            {
              "PLZ": 6622,
              "Ort": "Ronco sopra Ascona"
            },
            {
              "PLZ": 6631,
              "Ort": "Corippo"
            },
            {
              "PLZ": 6632,
              "Ort": "Vogorno"
            },
            {
              "PLZ": 6633,
              "Ort": "Lavertezzo"
            },
            {
              "PLZ": 6634,
              "Ort": "Brione (Verzasca)"
            },
            {
              "PLZ": 6635,
              "Ort": "Gerra (Verzasca)"
            },
            {
              "PLZ": 6636,
              "Ort": "Frasco"
            },
            {
              "PLZ": 6637,
              "Ort": "Sonogno"
            },
            {
              "PLZ": 6644,
              "Ort": "Orselina"
            },
            {
              "PLZ": 6645,
              "Ort": "Brione sopra Minusio"
            },
            {
              "PLZ": 6646,
              "Ort": "Contra"
            },
            {
              "PLZ": 6647,
              "Ort": "Mergoscia"
            },
            {
              "PLZ": 6648,
              "Ort": "Minusio"
            },
            {
              "PLZ": 6652,
              "Ort": "Tegna"
            },
            {
              "PLZ": 6653,
              "Ort": "Verscio"
            },
            {
              "PLZ": 6654,
              "Ort": "Cavigliano"
            },
            {
              "PLZ": 6655,
              "Ort": "Verdasio"
            },
            {
              "PLZ": 6655,
              "Ort": "Rasa"
            },
            {
              "PLZ": 6655,
              "Ort": "Intragna"
            },
            {
              "PLZ": 6656,
              "Ort": "Golino"
            },
            {
              "PLZ": 6657,
              "Ort": "Palagnedra"
            },
            {
              "PLZ": 6658,
              "Ort": "Borgnone"
            },
            {
              "PLZ": 6659,
              "Ort": "Moneto"
            },
            {
              "PLZ": 6659,
              "Ort": "Camedo"
            },
            {
              "PLZ": 6661,
              "Ort": "Auressio"
            },
            {
              "PLZ": 6661,
              "Ort": "Berzona"
            },
            {
              "PLZ": 6661,
              "Ort": "Loco"
            },
            {
              "PLZ": 6662,
              "Ort": "Russo"
            },
            {
              "PLZ": 6663,
              "Ort": "Comologno"
            },
            {
              "PLZ": 6663,
              "Ort": "Spruga"
            },
            {
              "PLZ": 6664,
              "Ort": "Vergeletto"
            },
            {
              "PLZ": 6670,
              "Ort": "Avegno"
            },
            {
              "PLZ": 6672,
              "Ort": "Gordevio"
            },
            {
              "PLZ": 6673,
              "Ort": "Maggia"
            },
            {
              "PLZ": 6674,
              "Ort": "Riveo"
            },
            {
              "PLZ": 6674,
              "Ort": "Someo"
            },
            {
              "PLZ": 6675,
              "Ort": "Cevio"
            },
            {
              "PLZ": 6676,
              "Ort": "Bignasco"
            },
            {
              "PLZ": 6677,
              "Ort": "Moghegno"
            },
            {
              "PLZ": 6677,
              "Ort": "Aurigeno"
            },
            {
              "PLZ": 6678,
              "Ort": "Coglio"
            },
            {
              "PLZ": 6678,
              "Ort": "Lodano"
            },
            {
              "PLZ": 6678,
              "Ort": "Giumaglio"
            },
            {
              "PLZ": 6682,
              "Ort": "Linescio"
            },
            {
              "PLZ": 6683,
              "Ort": "Cerentino"
            },
            {
              "PLZ": 6683,
              "Ort": "Niva (Vallemaggia)"
            },
            {
              "PLZ": 6684,
              "Ort": "Campo (Vallemaggia)"
            },
            {
              "PLZ": 6684,
              "Ort": "Cimalmotto"
            },
            {
              "PLZ": 6685,
              "Ort": "Bosco/Gurin"
            },
            {
              "PLZ": 6690,
              "Ort": "Cavergno"
            },
            {
              "PLZ": 6690,
              "Ort": "S. Carlo (Val Bavona)"
            },
            {
              "PLZ": 6692,
              "Ort": "Brontallo"
            },
            {
              "PLZ": 6692,
              "Ort": "Menzonio"
            },
            {
              "PLZ": 6693,
              "Ort": "Broglio"
            },
            {
              "PLZ": 6694,
              "Ort": "Prato-Sornico"
            },
            {
              "PLZ": 6695,
              "Ort": "Peccia"
            },
            {
              "PLZ": 6695,
              "Ort": "Piano di Peccia"
            },
            {
              "PLZ": 6696,
              "Ort": "Fusio"
            },
            {
              "PLZ": 6702,
              "Ort": "Claro"
            },
            {
              "PLZ": 6703,
              "Ort": "Osogna"
            },
            {
              "PLZ": 6705,
              "Ort": "Cresciano"
            },
            {
              "PLZ": 6707,
              "Ort": "Iragna"
            },
            {
              "PLZ": 6710,
              "Ort": "Biasca"
            },
            {
              "PLZ": 6710,
              "Ort": "Biasca Stazione"
            },
            {
              "PLZ": 6713,
              "Ort": "Malvaglia"
            },
            {
              "PLZ": 6714,
              "Ort": "Semione"
            },
            {
              "PLZ": 6715,
              "Ort": "Dongio"
            },
            {
              "PLZ": 6716,
              "Ort": "Leontica"
            },
            {
              "PLZ": 6716,
              "Ort": "Lottigna"
            },
            {
              "PLZ": 6716,
              "Ort": "Acquarossa"
            },
            {
              "PLZ": 6717,
              "Ort": "Dangio-Torre"
            },
            {
              "PLZ": 6717,
              "Ort": "Torre"
            },
            {
              "PLZ": 6718,
              "Ort": "Camperio"
            },
            {
              "PLZ": 6718,
              "Ort": "Olivone"
            },
            {
              "PLZ": 6719,
              "Ort": "Aquila"
            },
            {
              "PLZ": 6720,
              "Ort": "Campo (Blenio)"
            },
            {
              "PLZ": 6720,
              "Ort": "Ghirone"
            },
            {
              "PLZ": 6721,
              "Ort": "Ludiano"
            },
            {
              "PLZ": 6721,
              "Ort": "Motto (Blenio)"
            },
            {
              "PLZ": 6722,
              "Ort": "Corzoneso"
            },
            {
              "PLZ": 6723,
              "Ort": "Prugiasco"
            },
            {
              "PLZ": 6723,
              "Ort": "Castro"
            },
            {
              "PLZ": 6723,
              "Ort": "Marolta"
            },
            {
              "PLZ": 6724,
              "Ort": "Ponto Valentino"
            },
            {
              "PLZ": 6724,
              "Ort": "Largario"
            },
            {
              "PLZ": 6742,
              "Ort": "Pollegio"
            },
            {
              "PLZ": 6743,
              "Ort": "Bodio TI"
            },
            {
              "PLZ": 6744,
              "Ort": "Personico"
            },
            {
              "PLZ": 6745,
              "Ort": "Giornico"
            },
            {
              "PLZ": 6746,
              "Ort": "Calonico"
            },
            {
              "PLZ": 6746,
              "Ort": "Nivo"
            },
            {
              "PLZ": 6746,
              "Ort": "Lavorgo"
            },
            {
              "PLZ": 6747,
              "Ort": "Chironico"
            },
            {
              "PLZ": 6748,
              "Ort": "Anzonico"
            },
            {
              "PLZ": 6749,
              "Ort": "Sobrio"
            },
            {
              "PLZ": 6749,
              "Ort": "Cavagnago"
            },
            {
              "PLZ": 6760,
              "Ort": "Molare"
            },
            {
              "PLZ": 6760,
              "Ort": "Calpiogna"
            },
            {
              "PLZ": 6760,
              "Ort": "Carì"
            },
            {
              "PLZ": 6760,
              "Ort": "Rossura"
            },
            {
              "PLZ": 6760,
              "Ort": "Faido"
            },
            {
              "PLZ": 6760,
              "Ort": "Campello"
            },
            {
              "PLZ": 6763,
              "Ort": "Mairengo"
            },
            {
              "PLZ": 6763,
              "Ort": "Osco"
            },
            {
              "PLZ": 6764,
              "Ort": "Chiggiogna"
            },
            {
              "PLZ": 6772,
              "Ort": "Rodi-Fiesso"
            },
            {
              "PLZ": 6773,
              "Ort": "Prato (Leventina)"
            },
            {
              "PLZ": 6774,
              "Ort": "Dalpe"
            },
            {
              "PLZ": 6775,
              "Ort": "Ambrì"
            },
            {
              "PLZ": 6776,
              "Ort": "Piotta"
            },
            {
              "PLZ": 6777,
              "Ort": "Quinto"
            },
            {
              "PLZ": 6777,
              "Ort": "Varenzo"
            },
            {
              "PLZ": 6780,
              "Ort": "Madrano"
            },
            {
              "PLZ": 6780,
              "Ort": "Airolo"
            },
            {
              "PLZ": 6781,
              "Ort": "Villa Bedretto"
            },
            {
              "PLZ": 6781,
              "Ort": "Bedretto"
            },
            {
              "PLZ": 6802,
              "Ort": "Rivera"
            },
            {
              "PLZ": 6803,
              "Ort": "Camignolo"
            },
            {
              "PLZ": 6804,
              "Ort": "Bironico"
            },
            {
              "PLZ": 6805,
              "Ort": "Mezzovico"
            },
            {
              "PLZ": 6806,
              "Ort": "Sigirino"
            },
            {
              "PLZ": 6807,
              "Ort": "Taverne"
            },
            {
              "PLZ": 6808,
              "Ort": "Torricella"
            },
            {
              "PLZ": 6809,
              "Ort": "Medeglia"
            },
            {
              "PLZ": 6810,
              "Ort": "Isone"
            },
            {
              "PLZ": 6814,
              "Ort": "Lamone"
            },
            {
              "PLZ": 6814,
              "Ort": "Cadempino"
            },
            {
              "PLZ": 6815,
              "Ort": "Melide"
            },
            {
              "PLZ": 6816,
              "Ort": "Bissone"
            },
            {
              "PLZ": 6817,
              "Ort": "Maroggia"
            },
            {
              "PLZ": 6818,
              "Ort": "Melano"
            },
            {
              "PLZ": 6821,
              "Ort": "Rovio"
            },
            {
              "PLZ": 6822,
              "Ort": "Arogno"
            },
            {
              "PLZ": 6823,
              "Ort": "Pugerna"
            },
            {
              "PLZ": 6825,
              "Ort": "Capolago"
            },
            {
              "PLZ": 6826,
              "Ort": "Riva San Vitale"
            },
            {
              "PLZ": 6827,
              "Ort": "Brusino Arsizio"
            },
            {
              "PLZ": 6828,
              "Ort": "Balerna"
            },
            {
              "PLZ": 6830,
              "Ort": "Chiasso"
            },
            {
              "PLZ": 6832,
              "Ort": "Seseglio"
            },
            {
              "PLZ": 6832,
              "Ort": "Pedrinate"
            },
            {
              "PLZ": 6833,
              "Ort": "Vacallo"
            },
            {
              "PLZ": 6834,
              "Ort": "Morbio Inferiore"
            },
            {
              "PLZ": 6835,
              "Ort": "Morbio Superiore"
            },
            {
              "PLZ": 6837,
              "Ort": "Bruzella"
            },
            {
              "PLZ": 6837,
              "Ort": "Caneggio"
            },
            {
              "PLZ": 6838,
              "Ort": "Cabbio"
            },
            {
              "PLZ": 6838,
              "Ort": "Scudellate"
            },
            {
              "PLZ": 6838,
              "Ort": "Muggio"
            },
            {
              "PLZ": 6839,
              "Ort": "Sagno"
            },
            {
              "PLZ": 6850,
              "Ort": "Mendrisio"
            },
            {
              "PLZ": 6852,
              "Ort": "Genestrerio"
            },
            {
              "PLZ": 6853,
              "Ort": "Ligornetto"
            },
            {
              "PLZ": 6854,
              "Ort": "S. Pietro"
            },
            {
              "PLZ": 6855,
              "Ort": "Stabio"
            },
            {
              "PLZ": 6862,
              "Ort": "Rancate"
            },
            {
              "PLZ": 6863,
              "Ort": "Besazio"
            },
            {
              "PLZ": 6864,
              "Ort": "Arzo"
            },
            {
              "PLZ": 6865,
              "Ort": "Tremona"
            },
            {
              "PLZ": 6866,
              "Ort": "Meride"
            },
            {
              "PLZ": 6867,
              "Ort": "Serpiano"
            },
            {
              "PLZ": 6872,
              "Ort": "Salorino"
            },
            {
              "PLZ": 6872,
              "Ort": "Somazzo"
            },
            {
              "PLZ": 6873,
              "Ort": "Corteglia"
            },
            {
              "PLZ": 6874,
              "Ort": "Castel San Pietro"
            },
            {
              "PLZ": 6875,
              "Ort": "Casima"
            },
            {
              "PLZ": 6875,
              "Ort": "Monte"
            },
            {
              "PLZ": 6877,
              "Ort": "Coldrerio"
            },
            {
              "PLZ": 6883,
              "Ort": "Novazzano"
            },
            {
              "PLZ": 6900,
              "Ort": "Lugano"
            },
            {
              "PLZ": 6900,
              "Ort": "Massagno"
            },
            {
              "PLZ": 6900,
              "Ort": "Paradiso"
            },
            {
              "PLZ": 6911,
              "Ort": "Campione dItalia"
            },
            {
              "PLZ": 6912,
              "Ort": "Pazzallo"
            },
            {
              "PLZ": 6913,
              "Ort": "Carabbia"
            },
            {
              "PLZ": 6914,
              "Ort": "Carona"
            },
            {
              "PLZ": 6915,
              "Ort": "Pambio-Noranco"
            },
            {
              "PLZ": 6916,
              "Ort": "Grancia"
            },
            {
              "PLZ": 6917,
              "Ort": "Barbengo"
            },
            {
              "PLZ": 6918,
              "Ort": "Figino"
            },
            {
              "PLZ": 6919,
              "Ort": "Carabietta"
            },
            {
              "PLZ": 6921,
              "Ort": "Vico Morcote"
            },
            {
              "PLZ": 6922,
              "Ort": "Morcote"
            },
            {
              "PLZ": 6924,
              "Ort": "Sorengo"
            },
            {
              "PLZ": 6925,
              "Ort": "Gentilino"
            },
            {
              "PLZ": 6926,
              "Ort": "Montagnola"
            },
            {
              "PLZ": 6927,
              "Ort": "Agra"
            },
            {
              "PLZ": 6928,
              "Ort": "Manno"
            },
            {
              "PLZ": 6929,
              "Ort": "Gravesano"
            },
            {
              "PLZ": 6930,
              "Ort": "Bedano"
            },
            {
              "PLZ": 6932,
              "Ort": "Breganzona"
            },
            {
              "PLZ": 6933,
              "Ort": "Muzzano"
            },
            {
              "PLZ": 6934,
              "Ort": "Bioggio"
            },
            {
              "PLZ": 6935,
              "Ort": "Bosco Luganese"
            },
            {
              "PLZ": 6936,
              "Ort": "Cademario"
            },
            {
              "PLZ": 6937,
              "Ort": "Breno"
            },
            {
              "PLZ": 6938,
              "Ort": "Vezio"
            },
            {
              "PLZ": 6938,
              "Ort": "Fescoggia"
            },
            {
              "PLZ": 6939,
              "Ort": "Arosio"
            },
            {
              "PLZ": 6939,
              "Ort": "Mugena"
            },
            {
              "PLZ": 6942,
              "Ort": "Savosa"
            },
            {
              "PLZ": 6943,
              "Ort": "Vezia"
            },
            {
              "PLZ": 6944,
              "Ort": "Cureglia"
            },
            {
              "PLZ": 6945,
              "Ort": "Origlio"
            },
            {
              "PLZ": 6946,
              "Ort": "Ponte Capriasca"
            },
            {
              "PLZ": 6947,
              "Ort": "Vaglio"
            },
            {
              "PLZ": 6948,
              "Ort": "Porza"
            },
            {
              "PLZ": 6949,
              "Ort": "Comano"
            },
            {
              "PLZ": 6950,
              "Ort": "Tesserete"
            },
            {
              "PLZ": 6951,
              "Ort": "Insone"
            },
            {
              "PLZ": 6951,
              "Ort": "Odogno"
            },
            {
              "PLZ": 6951,
              "Ort": "Colla"
            },
            {
              "PLZ": 6951,
              "Ort": "Bogno"
            },
            {
              "PLZ": 6951,
              "Ort": "Cozzo"
            },
            {
              "PLZ": 6951,
              "Ort": "Signôra"
            },
            {
              "PLZ": 6951,
              "Ort": "Scareglia"
            },
            {
              "PLZ": 6952,
              "Ort": "Canobbio"
            },
            {
              "PLZ": 6953,
              "Ort": "Lugaggia"
            },
            {
              "PLZ": 6954,
              "Ort": "Sala Capriasca"
            },
            {
              "PLZ": 6954,
              "Ort": "Bigorio"
            },
            {
              "PLZ": 6955,
              "Ort": "Cagiallo"
            },
            {
              "PLZ": 6955,
              "Ort": "Oggio"
            },
            {
              "PLZ": 6956,
              "Ort": "Lopagno"
            },
            {
              "PLZ": 6957,
              "Ort": "Roveredo TI"
            },
            {
              "PLZ": 6958,
              "Ort": "Bidogno"
            },
            {
              "PLZ": 6958,
              "Ort": "Corticiasca"
            },
            {
              "PLZ": 6959,
              "Ort": "Cimadera"
            },
            {
              "PLZ": 6959,
              "Ort": "Certara"
            },
            {
              "PLZ": 6959,
              "Ort": "Curtina"
            },
            {
              "PLZ": 6959,
              "Ort": "Piandera Paese"
            },
            {
              "PLZ": 6959,
              "Ort": "Maglio di Colla"
            },
            {
              "PLZ": 6962,
              "Ort": "Viganello"
            },
            {
              "PLZ": 6963,
              "Ort": "Cureggia"
            },
            {
              "PLZ": 6963,
              "Ort": "Pregassona"
            },
            {
              "PLZ": 6964,
              "Ort": "Davesco-Soragno"
            },
            {
              "PLZ": 6965,
              "Ort": "Cadro"
            },
            {
              "PLZ": 6966,
              "Ort": "Villa Luganese"
            },
            {
              "PLZ": 6967,
              "Ort": "Dino"
            },
            {
              "PLZ": 6968,
              "Ort": "Sonvico"
            },
            {
              "PLZ": 6974,
              "Ort": "Aldesago"
            },
            {
              "PLZ": 6976,
              "Ort": "Castagnola"
            },
            {
              "PLZ": 6977,
              "Ort": "Ruvigliana"
            },
            {
              "PLZ": 6978,
              "Ort": "Gandria"
            },
            {
              "PLZ": 6979,
              "Ort": "Brè sopra Lugano"
            },
            {
              "PLZ": 6980,
              "Ort": "Castelrotto"
            },
            {
              "PLZ": 6981,
              "Ort": "Bedigliora"
            },
            {
              "PLZ": 6981,
              "Ort": "Biogno-Beride"
            },
            {
              "PLZ": 6981,
              "Ort": "Bombinasco"
            },
            {
              "PLZ": 6981,
              "Ort": "Banco"
            },
            {
              "PLZ": 6982,
              "Ort": "Agno"
            },
            {
              "PLZ": 6983,
              "Ort": "Magliaso"
            },
            {
              "PLZ": 6984,
              "Ort": "Pura"
            },
            {
              "PLZ": 6986,
              "Ort": "Miglieglia"
            },
            {
              "PLZ": 6986,
              "Ort": "Curio"
            },
            {
              "PLZ": 6986,
              "Ort": "Novaggio"
            },
            {
              "PLZ": 6987,
              "Ort": "Caslano"
            },
            {
              "PLZ": 6988,
              "Ort": "Ponte Tresa"
            },
            {
              "PLZ": 6989,
              "Ort": "Purasca"
            },
            {
              "PLZ": 6990,
              "Ort": "Cassina dAgno"
            },
            {
              "PLZ": 6991,
              "Ort": "Neggio"
            },
            {
              "PLZ": 6992,
              "Ort": "Cimo"
            },
            {
              "PLZ": 6992,
              "Ort": "Vernate"
            },
            {
              "PLZ": 6993,
              "Ort": "Iseo"
            },
            {
              "PLZ": 6994,
              "Ort": "Aranno"
            },
            {
              "PLZ": 6995,
              "Ort": "Madonna del Piano"
            },
            {
              "PLZ": 6995,
              "Ort": "Molinazzo di Monteggio"
            },
            {
              "PLZ": 6996,
              "Ort": "Ponte Cremenaga"
            },
            {
              "PLZ": 6997,
              "Ort": "Sessa"
            },
            {
              "PLZ": 6998,
              "Ort": "Termine"
            },
            {
              "PLZ": 6999,
              "Ort": "Astano"
            },
            {
              "PLZ": 7000,
              "Ort": "Chur"
            },
            {
              "PLZ": 7012,
              "Ort": "Felsberg"
            },
            {
              "PLZ": 7013,
              "Ort": "Domat/Ems"
            },
            {
              "PLZ": 7014,
              "Ort": "Trin"
            },
            {
              "PLZ": 7015,
              "Ort": "Tamins"
            },
            {
              "PLZ": 7016,
              "Ort": "Trin Mulin"
            },
            {
              "PLZ": 7017,
              "Ort": "Flims Dorf"
            },
            {
              "PLZ": 7018,
              "Ort": "Flims Waldhaus"
            },
            {
              "PLZ": 7019,
              "Ort": "Fidaz"
            },
            {
              "PLZ": 7023,
              "Ort": "Haldenstein"
            },
            {
              "PLZ": 7026,
              "Ort": "Maladers"
            },
            {
              "PLZ": 7027,
              "Ort": "Lueen"
            },
            {
              "PLZ": 7027,
              "Ort": "Castiel"
            },
            {
              "PLZ": 7027,
              "Ort": "Calfreisen"
            },
            {
              "PLZ": 7028,
              "Ort": "Pagig"
            },
            {
              "PLZ": 7028,
              "Ort": "St. Peter"
            },
            {
              "PLZ": 7029,
              "Ort": "Peist"
            },
            {
              "PLZ": 7031,
              "Ort": "Laax GR"
            },
            {
              "PLZ": 7032,
              "Ort": "Laax GR 2"
            },
            {
              "PLZ": 7050,
              "Ort": "Arosa"
            },
            {
              "PLZ": 7056,
              "Ort": "Molinis"
            },
            {
              "PLZ": 7057,
              "Ort": "Langwies"
            },
            {
              "PLZ": 7058,
              "Ort": "Litzirueti"
            },
            {
              "PLZ": 7062,
              "Ort": "Passugg-Araschgen"
            },
            {
              "PLZ": 7063,
              "Ort": "Praden"
            },
            {
              "PLZ": 7064,
              "Ort": "Tschiertschen"
            },
            {
              "PLZ": 7074,
              "Ort": "Malix"
            },
            {
              "PLZ": 7075,
              "Ort": "Churwalden"
            },
            {
              "PLZ": 7076,
              "Ort": "Parpan"
            },
            {
              "PLZ": 7077,
              "Ort": "Valbella"
            },
            {
              "PLZ": 7078,
              "Ort": "Lenzerheide/Lai"
            },
            {
              "PLZ": 7082,
              "Ort": "Vaz/Obervaz"
            },
            {
              "PLZ": 7083,
              "Ort": "Lantsch/Lenz"
            },
            {
              "PLZ": 7084,
              "Ort": "Brienz/Brinzauls GR"
            },
            {
              "PLZ": 7104,
              "Ort": "Arezen"
            },
            {
              "PLZ": 7104,
              "Ort": "Versam"
            },
            {
              "PLZ": 7106,
              "Ort": "Tenna"
            },
            {
              "PLZ": 7107,
              "Ort": "Safien Platz"
            },
            {
              "PLZ": 7109,
              "Ort": "Thalkirch"
            },
            {
              "PLZ": 7110,
              "Ort": "Peiden"
            },
            {
              "PLZ": 7111,
              "Ort": "Pitasch"
            },
            {
              "PLZ": 7112,
              "Ort": "Duvin"
            },
            {
              "PLZ": 7113,
              "Ort": "Camuns"
            },
            {
              "PLZ": 7114,
              "Ort": "Uors (Lumnezia)"
            },
            {
              "PLZ": 7115,
              "Ort": "Surcasti"
            },
            {
              "PLZ": 7116,
              "Ort": "Tersnaus"
            },
            {
              "PLZ": 7116,
              "Ort": "St. Martin (Lugnez)"
            },
            {
              "PLZ": 7122,
              "Ort": "Valendas"
            },
            {
              "PLZ": 7122,
              "Ort": "Carrera"
            },
            {
              "PLZ": 7126,
              "Ort": "Castrisch"
            },
            {
              "PLZ": 7127,
              "Ort": "Sevgein"
            },
            {
              "PLZ": 7128,
              "Ort": "Riein"
            },
            {
              "PLZ": 7130,
              "Ort": "Schnaus"
            },
            {
              "PLZ": 7130,
              "Ort": "Ilanz"
            },
            {
              "PLZ": 7132,
              "Ort": "Vals"
            },
            {
              "PLZ": 7133,
              "Ort": "Obersaxen Affeier"
            },
            {
              "PLZ": 7134,
              "Ort": "Obersaxen Meierhof"
            },
            {
              "PLZ": 7135,
              "Ort": "Obersaxen Giraniga"
            },
            {
              "PLZ": 7136,
              "Ort": "Obersaxen Friggahues"
            },
            {
              "PLZ": 7137,
              "Ort": "Flond"
            },
            {
              "PLZ": 7138,
              "Ort": "Surcuolm"
            },
            {
              "PLZ": 7141,
              "Ort": "Luven"
            },
            {
              "PLZ": 7142,
              "Ort": "Cumbel"
            },
            {
              "PLZ": 7143,
              "Ort": "Morissen"
            },
            {
              "PLZ": 7144,
              "Ort": "Vella"
            },
            {
              "PLZ": 7145,
              "Ort": "Degen"
            },
            {
              "PLZ": 7146,
              "Ort": "Vattiz"
            },
            {
              "PLZ": 7147,
              "Ort": "Vignogn"
            },
            {
              "PLZ": 7148,
              "Ort": "Surin"
            },
            {
              "PLZ": 7148,
              "Ort": "Lumbrein"
            },
            {
              "PLZ": 7149,
              "Ort": "Vrin"
            },
            {
              "PLZ": 7151,
              "Ort": "Schluein"
            },
            {
              "PLZ": 7152,
              "Ort": "Sagogn"
            },
            {
              "PLZ": 7153,
              "Ort": "Falera"
            },
            {
              "PLZ": 7154,
              "Ort": "Ruschein"
            },
            {
              "PLZ": 7155,
              "Ort": "Ladir"
            },
            {
              "PLZ": 7156,
              "Ort": "Pigniu"
            },
            {
              "PLZ": 7156,
              "Ort": "Rueun"
            },
            {
              "PLZ": 7157,
              "Ort": "Siat"
            },
            {
              "PLZ": 7158,
              "Ort": "Waltensburg/Vuorz"
            },
            {
              "PLZ": 7159,
              "Ort": "Andiast"
            },
            {
              "PLZ": 7162,
              "Ort": "Tavanasa"
            },
            {
              "PLZ": 7163,
              "Ort": "Danis"
            },
            {
              "PLZ": 7164,
              "Ort": "Dardin"
            },
            {
              "PLZ": 7165,
              "Ort": "Breil/Brigels"
            },
            {
              "PLZ": 7166,
              "Ort": "Trun"
            },
            {
              "PLZ": 7167,
              "Ort": "Zignau"
            },
            {
              "PLZ": 7168,
              "Ort": "Schlans"
            },
            {
              "PLZ": 7172,
              "Ort": "Rabius"
            },
            {
              "PLZ": 7173,
              "Ort": "Surrein"
            },
            {
              "PLZ": 7174,
              "Ort": "S. Benedetg"
            },
            {
              "PLZ": 7175,
              "Ort": "Sumvitg"
            },
            {
              "PLZ": 7176,
              "Ort": "Cumpadials"
            },
            {
              "PLZ": 7180,
              "Ort": "Disentis/Mustér"
            },
            {
              "PLZ": 7182,
              "Ort": "Cavardiras"
            },
            {
              "PLZ": 7183,
              "Ort": "Mompé Medel"
            },
            {
              "PLZ": 7184,
              "Ort": "Curaglia"
            },
            {
              "PLZ": 7185,
              "Ort": "Platta"
            },
            {
              "PLZ": 7186,
              "Ort": "Segnas"
            },
            {
              "PLZ": 7187,
              "Ort": "Camischolas"
            },
            {
              "PLZ": 7188,
              "Ort": "Sedrun"
            },
            {
              "PLZ": 7189,
              "Ort": "Rueras"
            },
            {
              "PLZ": 7201,
              "Ort": "Untervaz Bahnhof"
            },
            {
              "PLZ": 7202,
              "Ort": "Says"
            },
            {
              "PLZ": 7203,
              "Ort": "Trimmis"
            },
            {
              "PLZ": 7204,
              "Ort": "Untervaz"
            },
            {
              "PLZ": 7205,
              "Ort": "Zizers"
            },
            {
              "PLZ": 7206,
              "Ort": "Igis"
            },
            {
              "PLZ": 7208,
              "Ort": "Malans GR"
            },
            {
              "PLZ": 7212,
              "Ort": "Seewis Dorf"
            },
            {
              "PLZ": 7213,
              "Ort": "Valzeina"
            },
            {
              "PLZ": 7214,
              "Ort": "Seewis-Pardisla"
            },
            {
              "PLZ": 7214,
              "Ort": "Seewis-Schmitten"
            },
            {
              "PLZ": 7214,
              "Ort": "Gruesch"
            },
            {
              "PLZ": 7215,
              "Ort": "Fanas"
            },
            {
              "PLZ": 7220,
              "Ort": "Schiers"
            },
            {
              "PLZ": 7222,
              "Ort": "Mittellunden"
            },
            {
              "PLZ": 7223,
              "Ort": "Buchen im Praettigau"
            },
            {
              "PLZ": 7224,
              "Ort": "Putz"
            },
            {
              "PLZ": 7226,
              "Ort": "Stels"
            },
            {
              "PLZ": 7226,
              "Ort": "Fajauna"
            },
            {
              "PLZ": 7228,
              "Ort": "Schuders"
            },
            {
              "PLZ": 7228,
              "Ort": "Pusserein"
            },
            {
              "PLZ": 7231,
              "Ort": "Pragg-Jenaz"
            },
            {
              "PLZ": 7232,
              "Ort": "Furna"
            },
            {
              "PLZ": 7233,
              "Ort": "Jenaz"
            },
            {
              "PLZ": 7235,
              "Ort": "Fideris"
            },
            {
              "PLZ": 7240,
              "Ort": "Kueblis"
            },
            {
              "PLZ": 7241,
              "Ort": "Conters im Praettigau"
            },
            {
              "PLZ": 7242,
              "Ort": "Luzein"
            },
            {
              "PLZ": 7243,
              "Ort": "Pany"
            },
            {
              "PLZ": 7244,
              "Ort": "Gadenstaett"
            },
            {
              "PLZ": 7245,
              "Ort": "Ascharina"
            },
            {
              "PLZ": 7246,
              "Ort": "St. Antoenien"
            },
            {
              "PLZ": 7247,
              "Ort": "Saas im Praettigau"
            },
            {
              "PLZ": 7249,
              "Ort": "Serneus"
            },
            {
              "PLZ": 7250,
              "Ort": "Klosters"
            },
            {
              "PLZ": 7252,
              "Ort": "Klosters Dorf"
            },
            {
              "PLZ": 7260,
              "Ort": "Davos Dorf"
            },
            {
              "PLZ": 7265,
              "Ort": "Davos Wolfgang"
            },
            {
              "PLZ": 7270,
              "Ort": "Davos Platz"
            },
            {
              "PLZ": 7272,
              "Ort": "Davos Clavadel"
            },
            {
              "PLZ": 7276,
              "Ort": "Davos Frauenkirch"
            },
            {
              "PLZ": 7277,
              "Ort": "Davos Glaris"
            },
            {
              "PLZ": 7278,
              "Ort": "Davos Monstein"
            },
            {
              "PLZ": 7302,
              "Ort": "Landquart"
            },
            {
              "PLZ": 7303,
              "Ort": "Mastrils"
            },
            {
              "PLZ": 7304,
              "Ort": "Maienfeld"
            },
            {
              "PLZ": 7306,
              "Ort": "Flaesch"
            },
            {
              "PLZ": 7307,
              "Ort": "Jenins"
            },
            {
              "PLZ": 7310,
              "Ort": "Bad Ragaz"
            },
            {
              "PLZ": 7312,
              "Ort": "Pfaefers"
            },
            {
              "PLZ": 7313,
              "Ort": "St. Margrethenberg"
            },
            {
              "PLZ": 7314,
              "Ort": "Vadura"
            },
            {
              "PLZ": 7315,
              "Ort": "Vaettis"
            },
            {
              "PLZ": 7317,
              "Ort": "Vasoen"
            },
            {
              "PLZ": 7317,
              "Ort": "Valens"
            },
            {
              "PLZ": 7320,
              "Ort": "Sargans"
            },
            {
              "PLZ": 7323,
              "Ort": "Wangs"
            },
            {
              "PLZ": 7324,
              "Ort": "Vilters"
            },
            {
              "PLZ": 7325,
              "Ort": "Schwendi im Weisstannental"
            },
            {
              "PLZ": 7326,
              "Ort": "Weisstannen"
            },
            {
              "PLZ": 7402,
              "Ort": "Bonaduz"
            },
            {
              "PLZ": 7403,
              "Ort": "Rhaezuens"
            },
            {
              "PLZ": 7404,
              "Ort": "Feldis/Veulden"
            },
            {
              "PLZ": 7405,
              "Ort": "Rothenbrunnen"
            },
            {
              "PLZ": 7407,
              "Ort": "Trans"
            },
            {
              "PLZ": 7408,
              "Ort": "Realta"
            },
            {
              "PLZ": 7408,
              "Ort": "Cazis"
            },
            {
              "PLZ": 7411,
              "Ort": "Sils im Domleschg"
            },
            {
              "PLZ": 7412,
              "Ort": "Scharans"
            },
            {
              "PLZ": 7413,
              "Ort": "Fuerstenaubruck"
            },
            {
              "PLZ": 7414,
              "Ort": "Fuerstenau"
            },
            {
              "PLZ": 7415,
              "Ort": "Pratval"
            },
            {
              "PLZ": 7415,
              "Ort": "Rodels"
            },
            {
              "PLZ": 7416,
              "Ort": "Almens"
            },
            {
              "PLZ": 7417,
              "Ort": "Paspels"
            },
            {
              "PLZ": 7418,
              "Ort": "Tumegl/Tomils"
            },
            {
              "PLZ": 7419,
              "Ort": "Scheid"
            },
            {
              "PLZ": 7421,
              "Ort": "Summaprada"
            },
            {
              "PLZ": 7422,
              "Ort": "Tartar"
            },
            {
              "PLZ": 7423,
              "Ort": "Sarn"
            },
            {
              "PLZ": 7423,
              "Ort": "Portein"
            },
            {
              "PLZ": 7424,
              "Ort": "Praez"
            },
            {
              "PLZ": 7424,
              "Ort": "Dalin"
            },
            {
              "PLZ": 7425,
              "Ort": "Masein"
            },
            {
              "PLZ": 7426,
              "Ort": "Flerden"
            },
            {
              "PLZ": 7427,
              "Ort": "Urmein"
            },
            {
              "PLZ": 7428,
              "Ort": "Tschappina"
            },
            {
              "PLZ": 7428,
              "Ort": "Glaspass"
            },
            {
              "PLZ": 7430,
              "Ort": "Rongellen"
            },
            {
              "PLZ": 7430,
              "Ort": "Thusis"
            },
            {
              "PLZ": 7431,
              "Ort": "Mutten"
            },
            {
              "PLZ": 7431,
              "Ort": "Obermutten"
            },
            {
              "PLZ": 7432,
              "Ort": "Zillis"
            },
            {
              "PLZ": 7433,
              "Ort": "Farden"
            },
            {
              "PLZ": 7433,
              "Ort": "Wergenstein"
            },
            {
              "PLZ": 7433,
              "Ort": "Lohn GR"
            },
            {
              "PLZ": 7433,
              "Ort": "Donat"
            },
            {
              "PLZ": 7433,
              "Ort": "Mathon"
            },
            {
              "PLZ": 7434,
              "Ort": "Sufers"
            },
            {
              "PLZ": 7435,
              "Ort": "Spluegen"
            },
            {
              "PLZ": 7436,
              "Ort": "Medels im Rheinwald"
            },
            {
              "PLZ": 7437,
              "Ort": "Nufenen"
            },
            {
              "PLZ": 7438,
              "Ort": "Hinterrhein"
            },
            {
              "PLZ": 7440,
              "Ort": "Andeer"
            },
            {
              "PLZ": 7442,
              "Ort": "Clugin"
            },
            {
              "PLZ": 7443,
              "Ort": "Pignia"
            },
            {
              "PLZ": 7444,
              "Ort": "Ausserferrera"
            },
            {
              "PLZ": 7445,
              "Ort": "Innerferrera"
            },
            {
              "PLZ": 7446,
              "Ort": "Campsut-Croet"
            },
            {
              "PLZ": 7447,
              "Ort": "Cresta (Avers)"
            },
            {
              "PLZ": 7447,
              "Ort": "Am Bach (Avers)"
            },
            {
              "PLZ": 7448,
              "Ort": "Juf"
            },
            {
              "PLZ": 7450,
              "Ort": "Tiefencastel"
            },
            {
              "PLZ": 7451,
              "Ort": "Alvaschein"
            },
            {
              "PLZ": 7452,
              "Ort": "Cunter"
            },
            {
              "PLZ": 7453,
              "Ort": "Tinizong"
            },
            {
              "PLZ": 7454,
              "Ort": "Rona"
            },
            {
              "PLZ": 7455,
              "Ort": "Mulegns"
            },
            {
              "PLZ": 7456,
              "Ort": "Sur"
            },
            {
              "PLZ": 7456,
              "Ort": "Marmorera"
            },
            {
              "PLZ": 7457,
              "Ort": "Bivio"
            },
            {
              "PLZ": 7458,
              "Ort": "Mon"
            },
            {
              "PLZ": 7459,
              "Ort": "Stierva"
            },
            {
              "PLZ": 7460,
              "Ort": "Savognin"
            },
            {
              "PLZ": 7462,
              "Ort": "Salouf"
            },
            {
              "PLZ": 7463,
              "Ort": "Riom"
            },
            {
              "PLZ": 7464,
              "Ort": "Parsonz"
            },
            {
              "PLZ": 7472,
              "Ort": "Surava"
            },
            {
              "PLZ": 7473,
              "Ort": "Alvaneu Bad"
            },
            {
              "PLZ": 7477,
              "Ort": "Filisur"
            },
            {
              "PLZ": 7482,
              "Ort": "Stugl/Stuls"
            },
            {
              "PLZ": 7482,
              "Ort": "Preda"
            },
            {
              "PLZ": 7482,
              "Ort": "Berguen/Bravuogn"
            },
            {
              "PLZ": 7484,
              "Ort": "Latsch"
            },
            {
              "PLZ": 7492,
              "Ort": "Alvaneu Dorf"
            },
            {
              "PLZ": 7493,
              "Ort": "Schmitten (Albula)"
            },
            {
              "PLZ": 7494,
              "Ort": "Wiesen GR"
            },
            {
              "PLZ": 7500,
              "Ort": "St. Moritz"
            },
            {
              "PLZ": 7502,
              "Ort": "Bever"
            },
            {
              "PLZ": 7503,
              "Ort": "Samedan"
            },
            {
              "PLZ": 7504,
              "Ort": "Pontresina"
            },
            {
              "PLZ": 7505,
              "Ort": "Celerina/Schlarigna"
            },
            {
              "PLZ": 7512,
              "Ort": "Champfèr"
            },
            {
              "PLZ": 7513,
              "Ort": "Silvaplana-Surlej"
            },
            {
              "PLZ": 7513,
              "Ort": "Silvaplana"
            },
            {
              "PLZ": 7514,
              "Ort": "Fex"
            },
            {
              "PLZ": 7514,
              "Ort": "Sils/Segl Maria"
            },
            {
              "PLZ": 7515,
              "Ort": "Sils/Segl Baselgia"
            },
            {
              "PLZ": 7516,
              "Ort": "Maloja"
            },
            {
              "PLZ": 7517,
              "Ort": "Plaun da Lej"
            },
            {
              "PLZ": 7522,
              "Ort": "La Punt-Chamues-ch"
            },
            {
              "PLZ": 7523,
              "Ort": "Madulain"
            },
            {
              "PLZ": 7524,
              "Ort": "Zuoz"
            },
            {
              "PLZ": 7525,
              "Ort": "S-chanf"
            },
            {
              "PLZ": 7526,
              "Ort": "Cinuos-chel"
            },
            {
              "PLZ": 7527,
              "Ort": "Brail"
            },
            {
              "PLZ": 7530,
              "Ort": "Zernez"
            },
            {
              "PLZ": 7532,
              "Ort": "Tschierv"
            },
            {
              "PLZ": 7533,
              "Ort": "Fuldera"
            },
            {
              "PLZ": 7534,
              "Ort": "Lue"
            },
            {
              "PLZ": 7535,
              "Ort": "Valchava"
            },
            {
              "PLZ": 7536,
              "Ort": "Sta. Maria Val Muestair"
            },
            {
              "PLZ": 7537,
              "Ort": "Muestair"
            },
            {
              "PLZ": 7542,
              "Ort": "Susch"
            },
            {
              "PLZ": 7543,
              "Ort": "Lavin"
            },
            {
              "PLZ": 7545,
              "Ort": "Guarda"
            },
            {
              "PLZ": 7546,
              "Ort": "Ardez"
            },
            {
              "PLZ": 7550,
              "Ort": "Scuol"
            },
            {
              "PLZ": 7551,
              "Ort": "Ftan"
            },
            {
              "PLZ": 7552,
              "Ort": "Vulpera"
            },
            {
              "PLZ": 7553,
              "Ort": "Tarasp"
            },
            {
              "PLZ": 7554,
              "Ort": "Crusch"
            },
            {
              "PLZ": 7554,
              "Ort": "Sent"
            },
            {
              "PLZ": 7556,
              "Ort": "Ramosch"
            },
            {
              "PLZ": 7557,
              "Ort": "Vnà"
            },
            {
              "PLZ": 7558,
              "Ort": "Strada"
            },
            {
              "PLZ": 7559,
              "Ort": "Tschlin"
            },
            {
              "PLZ": 7560,
              "Ort": "Martina"
            },
            {
              "PLZ": 7562,
              "Ort": "Samnaun-Compatsch"
            },
            {
              "PLZ": 7563,
              "Ort": "Samnaun Dorf"
            },
            {
              "PLZ": 7602,
              "Ort": "Casaccia"
            },
            {
              "PLZ": 7603,
              "Ort": "Vicosoprano"
            },
            {
              "PLZ": 7604,
              "Ort": "Borgonovo"
            },
            {
              "PLZ": 7605,
              "Ort": "Stampa"
            },
            {
              "PLZ": 7606,
              "Ort": "Promontogno"
            },
            {
              "PLZ": 7608,
              "Ort": "Castasegna"
            },
            {
              "PLZ": 7610,
              "Ort": "Soglio"
            },
            {
              "PLZ": 7710,
              "Ort": "Ospizio Bernina"
            },
            {
              "PLZ": 7710,
              "Ort": "Alp Gruem"
            },
            {
              "PLZ": 7741,
              "Ort": "S. Carlo (Poschiavo)"
            },
            {
              "PLZ": 7742,
              "Ort": "Sfazù"
            },
            {
              "PLZ": 7742,
              "Ort": "La Roesa"
            },
            {
              "PLZ": 7742,
              "Ort": "Poschiavo"
            },
            {
              "PLZ": 7743,
              "Ort": "Miralago"
            },
            {
              "PLZ": 7743,
              "Ort": "Brusio"
            },
            {
              "PLZ": 7744,
              "Ort": "Campocologno"
            },
            {
              "PLZ": 7745,
              "Ort": "Li Curt"
            },
            {
              "PLZ": 7746,
              "Ort": "Le Prese"
            },
            {
              "PLZ": 7747,
              "Ort": "Viano"
            },
            {
              "PLZ": 7748,
              "Ort": "Campascio"
            },
            {
              "PLZ": 8000,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8001,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8002,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8003,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8004,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8005,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8006,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8008,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8032,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8037,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8038,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8041,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8044,
              "Ort": "Gockhausen"
            },
            {
              "PLZ": 8044,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8045,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8046,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8047,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8048,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8049,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8050,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8051,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8052,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8053,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8055,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8057,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8063,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8064,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8099,
              "Ort": "Zuerich"
            },
            {
              "PLZ": 8102,
              "Ort": "Oberengstringen"
            },
            {
              "PLZ": 8103,
              "Ort": "Unterengstringen"
            },
            {
              "PLZ": 8104,
              "Ort": "Weiningen ZH"
            },
            {
              "PLZ": 8105,
              "Ort": "Regensdorf"
            },
            {
              "PLZ": 8105,
              "Ort": "Watt"
            },
            {
              "PLZ": 8106,
              "Ort": "Adlikon b. Regensdorf"
            },
            {
              "PLZ": 8107,
              "Ort": "Buchs ZH"
            },
            {
              "PLZ": 8108,
              "Ort": "Daellikon"
            },
            {
              "PLZ": 8109,
              "Ort": "Kloster Fahr"
            },
            {
              "PLZ": 8112,
              "Ort": "Otelfingen"
            },
            {
              "PLZ": 8113,
              "Ort": "Boppelsen"
            },
            {
              "PLZ": 8114,
              "Ort": "Daenikon ZH"
            },
            {
              "PLZ": 8115,
              "Ort": "Huettikon"
            },
            {
              "PLZ": 8117,
              "Ort": "Faellanden"
            },
            {
              "PLZ": 8118,
              "Ort": "Pfaffhausen"
            },
            {
              "PLZ": 8121,
              "Ort": "Benglen"
            },
            {
              "PLZ": 8122,
              "Ort": "Binz"
            },
            {
              "PLZ": 8123,
              "Ort": "Ebmatingen"
            },
            {
              "PLZ": 8124,
              "Ort": "Maur"
            },
            {
              "PLZ": 8125,
              "Ort": "Zollikerberg"
            },
            {
              "PLZ": 8126,
              "Ort": "Zumikon"
            },
            {
              "PLZ": 8127,
              "Ort": "Forch"
            },
            {
              "PLZ": 8132,
              "Ort": "Hinteregg"
            },
            {
              "PLZ": 8132,
              "Ort": "Egg b. Zuerich"
            },
            {
              "PLZ": 8133,
              "Ort": "Esslingen"
            },
            {
              "PLZ": 8134,
              "Ort": "Adliswil"
            },
            {
              "PLZ": 8135,
              "Ort": "Sihlbrugg Station"
            },
            {
              "PLZ": 8135,
              "Ort": "Sihlwald"
            },
            {
              "PLZ": 8135,
              "Ort": "Langnau am Albis"
            },
            {
              "PLZ": 8136,
              "Ort": "Gattikon"
            },
            {
              "PLZ": 8142,
              "Ort": "Uitikon Waldegg"
            },
            {
              "PLZ": 8143,
              "Ort": "Uetliberg"
            },
            {
              "PLZ": 8143,
              "Ort": "Stallikon"
            },
            {
              "PLZ": 8152,
              "Ort": "Glattpark (Opfikon)"
            },
            {
              "PLZ": 8152,
              "Ort": "Glattbrugg"
            },
            {
              "PLZ": 8152,
              "Ort": "Opfikon"
            },
            {
              "PLZ": 8153,
              "Ort": "Ruemlang"
            },
            {
              "PLZ": 8154,
              "Ort": "Oberglatt ZH"
            },
            {
              "PLZ": 8155,
              "Ort": "Niederhasli"
            },
            {
              "PLZ": 8156,
              "Ort": "Oberhasli"
            },
            {
              "PLZ": 8157,
              "Ort": "Dielsdorf"
            },
            {
              "PLZ": 8158,
              "Ort": "Regensberg"
            },
            {
              "PLZ": 8162,
              "Ort": "Steinmaur"
            },
            {
              "PLZ": 8164,
              "Ort": "Bachs"
            },
            {
              "PLZ": 8165,
              "Ort": "Oberweningen"
            },
            {
              "PLZ": 8165,
              "Ort": "Schleinikon"
            },
            {
              "PLZ": 8165,
              "Ort": "Schoefflisdorf"
            },
            {
              "PLZ": 8166,
              "Ort": "Niederweningen"
            },
            {
              "PLZ": 8172,
              "Ort": "Niederglatt ZH"
            },
            {
              "PLZ": 8173,
              "Ort": "Neerach"
            },
            {
              "PLZ": 8174,
              "Ort": "Stadel b. Niederglatt"
            },
            {
              "PLZ": 8175,
              "Ort": "Windlach"
            },
            {
              "PLZ": 8180,
              "Ort": "Buelach"
            },
            {
              "PLZ": 8181,
              "Ort": "Hoeri"
            },
            {
              "PLZ": 8182,
              "Ort": "Hochfelden"
            },
            {
              "PLZ": 8184,
              "Ort": "Bachenbuelach"
            },
            {
              "PLZ": 8185,
              "Ort": "Winkel"
            },
            {
              "PLZ": 8187,
              "Ort": "Weiach"
            },
            {
              "PLZ": 8192,
              "Ort": "Zweidlen"
            },
            {
              "PLZ": 8192,
              "Ort": "Glattfelden"
            },
            {
              "PLZ": 8193,
              "Ort": "Eglisau"
            },
            {
              "PLZ": 8194,
              "Ort": "Huentwangen"
            },
            {
              "PLZ": 8195,
              "Ort": "Wasterkingen"
            },
            {
              "PLZ": 8196,
              "Ort": "Wil ZH"
            },
            {
              "PLZ": 8197,
              "Ort": "Rafz"
            },
            {
              "PLZ": 8200,
              "Ort": "Schaffhausen"
            },
            {
              "PLZ": 8203,
              "Ort": "Schaffhausen"
            },
            {
              "PLZ": 8207,
              "Ort": "Schaffhausen"
            },
            {
              "PLZ": 8208,
              "Ort": "Schaffhausen"
            },
            {
              "PLZ": 8212,
              "Ort": "Neuhausen am Rheinfall"
            },
            {
              "PLZ": 8212,
              "Ort": "Nohl"
            },
            {
              "PLZ": 8213,
              "Ort": "Neunkirch"
            },
            {
              "PLZ": 8214,
              "Ort": "Gaechlingen"
            },
            {
              "PLZ": 8215,
              "Ort": "Hallau"
            },
            {
              "PLZ": 8216,
              "Ort": "Oberhallau"
            },
            {
              "PLZ": 8217,
              "Ort": "Wilchingen"
            },
            {
              "PLZ": 8218,
              "Ort": "Osterfingen"
            },
            {
              "PLZ": 8219,
              "Ort": "Trasadingen"
            },
            {
              "PLZ": 8222,
              "Ort": "Beringen"
            },
            {
              "PLZ": 8223,
              "Ort": "Guntmadingen"
            },
            {
              "PLZ": 8224,
              "Ort": "Loehningen"
            },
            {
              "PLZ": 8225,
              "Ort": "Siblingen"
            },
            {
              "PLZ": 8226,
              "Ort": "Schleitheim"
            },
            {
              "PLZ": 8228,
              "Ort": "Beggingen"
            },
            {
              "PLZ": 8231,
              "Ort": "Hemmental"
            },
            {
              "PLZ": 8232,
              "Ort": "Merishausen"
            },
            {
              "PLZ": 8233,
              "Ort": "Bargen SH"
            },
            {
              "PLZ": 8234,
              "Ort": "Stetten SH"
            },
            {
              "PLZ": 8235,
              "Ort": "Lohn SH"
            },
            {
              "PLZ": 8236,
              "Ort": "Opfertshofen SH"
            },
            {
              "PLZ": 8236,
              "Ort": "Buettenhardt"
            },
            {
              "PLZ": 8238,
              "Ort": "Buesingen"
            },
            {
              "PLZ": 8239,
              "Ort": "Doerflingen"
            },
            {
              "PLZ": 8240,
              "Ort": "Thayngen"
            },
            {
              "PLZ": 8241,
              "Ort": "Barzheim"
            },
            {
              "PLZ": 8242,
              "Ort": "Hofen SH"
            },
            {
              "PLZ": 8242,
              "Ort": "Bibern SH"
            },
            {
              "PLZ": 8243,
              "Ort": "Altdorf SH"
            },
            {
              "PLZ": 8245,
              "Ort": "Feuerthalen"
            },
            {
              "PLZ": 8246,
              "Ort": "Langwiesen"
            },
            {
              "PLZ": 8247,
              "Ort": "Flurlingen"
            },
            {
              "PLZ": 8248,
              "Ort": "Uhwiesen"
            },
            {
              "PLZ": 8252,
              "Ort": "Schlatt TG"
            },
            {
              "PLZ": 8253,
              "Ort": "Willisdorf"
            },
            {
              "PLZ": 8253,
              "Ort": "Diessenhofen"
            },
            {
              "PLZ": 8254,
              "Ort": "Basadingen"
            },
            {
              "PLZ": 8255,
              "Ort": "Schlattingen"
            },
            {
              "PLZ": 8259,
              "Ort": "Kaltenbach"
            },
            {
              "PLZ": 8259,
              "Ort": "Etzwilen"
            },
            {
              "PLZ": 8259,
              "Ort": "Wagenhausen"
            },
            {
              "PLZ": 8259,
              "Ort": "Rheinklingen"
            },
            {
              "PLZ": 8260,
              "Ort": "Stein am Rhein"
            },
            {
              "PLZ": 8261,
              "Ort": "Hemishofen"
            },
            {
              "PLZ": 8262,
              "Ort": "Ramsen"
            },
            {
              "PLZ": 8263,
              "Ort": "Buch SH"
            },
            {
              "PLZ": 8264,
              "Ort": "Eschenz"
            },
            {
              "PLZ": 8265,
              "Ort": "Mammern"
            },
            {
              "PLZ": 8266,
              "Ort": "Steckborn"
            },
            {
              "PLZ": 8267,
              "Ort": "Berlingen"
            },
            {
              "PLZ": 8268,
              "Ort": "Salenstein"
            },
            {
              "PLZ": 8268,
              "Ort": "Mannenbach-Salenstein"
            },
            {
              "PLZ": 8269,
              "Ort": "Fruthwilen"
            },
            {
              "PLZ": 8272,
              "Ort": "Ermatingen"
            },
            {
              "PLZ": 8273,
              "Ort": "Triboltingen"
            },
            {
              "PLZ": 8274,
              "Ort": "Gottlieben"
            },
            {
              "PLZ": 8274,
              "Ort": "Taegerwilen"
            },
            {
              "PLZ": 8280,
              "Ort": "Kreuzlingen"
            },
            {
              "PLZ": 8302,
              "Ort": "Kloten"
            },
            {
              "PLZ": 8303,
              "Ort": "Bassersdorf"
            },
            {
              "PLZ": 8304,
              "Ort": "Wallisellen"
            },
            {
              "PLZ": 8305,
              "Ort": "Dietlikon"
            },
            {
              "PLZ": 8306,
              "Ort": "Bruettisellen"
            },
            {
              "PLZ": 8307,
              "Ort": "Ottikon b. Kemptthal"
            },
            {
              "PLZ": 8307,
              "Ort": "Effretikon"
            },
            {
              "PLZ": 8308,
              "Ort": "Agasul"
            },
            {
              "PLZ": 8308,
              "Ort": "Illnau"
            },
            {
              "PLZ": 8309,
              "Ort": "Nuerensdorf"
            },
            {
              "PLZ": 8310,
              "Ort": "Kemptthal"
            },
            {
              "PLZ": 8310,
              "Ort": "Grafstal"
            },
            {
              "PLZ": 8311,
              "Ort": "Bruetten"
            },
            {
              "PLZ": 8312,
              "Ort": "Winterberg ZH"
            },
            {
              "PLZ": 8314,
              "Ort": "Kyburg"
            },
            {
              "PLZ": 8315,
              "Ort": "Lindau"
            },
            {
              "PLZ": 8317,
              "Ort": "Tagelswangen"
            },
            {
              "PLZ": 8320,
              "Ort": "Fehraltorf"
            },
            {
              "PLZ": 8322,
              "Ort": "Madetswil"
            },
            {
              "PLZ": 8330,
              "Ort": "Hermatswil"
            },
            {
              "PLZ": 8330,
              "Ort": "Pfaeffikon ZH"
            },
            {
              "PLZ": 8331,
              "Ort": "Auslikon"
            },
            {
              "PLZ": 8332,
              "Ort": "Russikon"
            },
            {
              "PLZ": 8335,
              "Ort": "Hittnau"
            },
            {
              "PLZ": 8340,
              "Ort": "Hinwil"
            },
            {
              "PLZ": 8342,
              "Ort": "Wernetshausen"
            },
            {
              "PLZ": 8344,
              "Ort": "Baeretswil"
            },
            {
              "PLZ": 8345,
              "Ort": "Adetswil"
            },
            {
              "PLZ": 8352,
              "Ort": "Ricketwil (Winterthur)"
            },
            {
              "PLZ": 8352,
              "Ort": "Elsau"
            },
            {
              "PLZ": 8353,
              "Ort": "Elgg"
            },
            {
              "PLZ": 8354,
              "Ort": "Hofstetten ZH"
            },
            {
              "PLZ": 8355,
              "Ort": "Aadorf"
            },
            {
              "PLZ": 8356,
              "Ort": "Ettenhausen TG"
            },
            {
              "PLZ": 8357,
              "Ort": "Guntershausen b. Aadorf"
            },
            {
              "PLZ": 8360,
              "Ort": "Wallenwil"
            },
            {
              "PLZ": 8360,
              "Ort": "Eschlikon TG"
            },
            {
              "PLZ": 8362,
              "Ort": "Balterswil"
            },
            {
              "PLZ": 8363,
              "Ort": "Bichelsee"
            },
            {
              "PLZ": 8370,
              "Ort": "Busswil TG"
            },
            {
              "PLZ": 8370,
              "Ort": "Sirnach"
            },
            {
              "PLZ": 8372,
              "Ort": "Wiezikon b. Sirnach"
            },
            {
              "PLZ": 8374,
              "Ort": "Oberwangen TG"
            },
            {
              "PLZ": 8374,
              "Ort": "Dussnang"
            },
            {
              "PLZ": 8376,
              "Ort": "Fischingen"
            },
            {
              "PLZ": 8376,
              "Ort": "Au TG"
            },
            {
              "PLZ": 8400,
              "Ort": "Winterthur"
            },
            {
              "PLZ": 8404,
              "Ort": "Reutlingen (Winterthur)"
            },
            {
              "PLZ": 8404,
              "Ort": "Stadel (Winterthur)"
            },
            {
              "PLZ": 8404,
              "Ort": "Winterthur"
            },
            {
              "PLZ": 8405,
              "Ort": "Winterthur"
            },
            {
              "PLZ": 8406,
              "Ort": "Winterthur"
            },
            {
              "PLZ": 8408,
              "Ort": "Winterthur"
            },
            {
              "PLZ": 8409,
              "Ort": "Winterthur"
            },
            {
              "PLZ": 8412,
              "Ort": "Aesch (Neftenbach)"
            },
            {
              "PLZ": 8412,
              "Ort": "Riet (Neftenbach)"
            },
            {
              "PLZ": 8412,
              "Ort": "Huenikon (Neftenbach)"
            },
            {
              "PLZ": 8413,
              "Ort": "Neftenbach"
            },
            {
              "PLZ": 8414,
              "Ort": "Buch am Irchel"
            },
            {
              "PLZ": 8415,
              "Ort": "Berg am Irchel"
            },
            {
              "PLZ": 8415,
              "Ort": "Graeslikon"
            },
            {
              "PLZ": 8416,
              "Ort": "Flaach"
            },
            {
              "PLZ": 8418,
              "Ort": "Schlatt b. Winterthur"
            },
            {
              "PLZ": 8421,
              "Ort": "Daettlikon"
            },
            {
              "PLZ": 8422,
              "Ort": "Pfungen"
            },
            {
              "PLZ": 8424,
              "Ort": "Embrach"
            },
            {
              "PLZ": 8425,
              "Ort": "Oberembrach"
            },
            {
              "PLZ": 8426,
              "Ort": "Lufingen"
            },
            {
              "PLZ": 8427,
              "Ort": "Freienstein"
            },
            {
              "PLZ": 8427,
              "Ort": "Rorbas"
            },
            {
              "PLZ": 8428,
              "Ort": "Teufen ZH"
            },
            {
              "PLZ": 8442,
              "Ort": "Hettlingen"
            },
            {
              "PLZ": 8444,
              "Ort": "Henggart"
            },
            {
              "PLZ": 8447,
              "Ort": "Dachsen"
            },
            {
              "PLZ": 8450,
              "Ort": "Andelfingen"
            },
            {
              "PLZ": 8451,
              "Ort": "Kleinandelfingen"
            },
            {
              "PLZ": 8452,
              "Ort": "Adlikon b. Andelfingen"
            },
            {
              "PLZ": 8453,
              "Ort": "Alten"
            },
            {
              "PLZ": 8454,
              "Ort": "Buchberg"
            },
            {
              "PLZ": 8455,
              "Ort": "Ruedlingen"
            },
            {
              "PLZ": 8457,
              "Ort": "Humlikon"
            },
            {
              "PLZ": 8458,
              "Ort": "Dorf"
            },
            {
              "PLZ": 8459,
              "Ort": "Volken"
            },
            {
              "PLZ": 8460,
              "Ort": "Marthalen"
            },
            {
              "PLZ": 8461,
              "Ort": "Oerlingen"
            },
            {
              "PLZ": 8462,
              "Ort": "Rheinau"
            },
            {
              "PLZ": 8463,
              "Ort": "Benken ZH"
            },
            {
              "PLZ": 8464,
              "Ort": "Ellikon am Rhein"
            },
            {
              "PLZ": 8465,
              "Ort": "Rudolfingen"
            },
            {
              "PLZ": 8465,
              "Ort": "Wildensbuch"
            },
            {
              "PLZ": 8466,
              "Ort": "Truellikon"
            },
            {
              "PLZ": 8467,
              "Ort": "Truttikon"
            },
            {
              "PLZ": 8468,
              "Ort": "Waltalingen"
            },
            {
              "PLZ": 8468,
              "Ort": "Guntalingen"
            },
            {
              "PLZ": 8471,
              "Ort": "Rutschwil (Daegerlen)"
            },
            {
              "PLZ": 8471,
              "Ort": "Daegerlen"
            },
            {
              "PLZ": 8471,
              "Ort": "Oberwil (Daegerlen)"
            },
            {
              "PLZ": 8471,
              "Ort": "Berg (Daegerlen)"
            },
            {
              "PLZ": 8471,
              "Ort": "Baenk (Daegerlen)"
            },
            {
              "PLZ": 8472,
              "Ort": "Seuzach"
            },
            {
              "PLZ": 8474,
              "Ort": "Dinhard"
            },
            {
              "PLZ": 8475,
              "Ort": "Ossingen"
            },
            {
              "PLZ": 8476,
              "Ort": "Unterstammheim"
            },
            {
              "PLZ": 8477,
              "Ort": "Oberstammheim"
            },
            {
              "PLZ": 8478,
              "Ort": "Thalheim an der Thur"
            },
            {
              "PLZ": 8479,
              "Ort": "Altikon"
            },
            {
              "PLZ": 8482,
              "Ort": "Sennhof (Winterthur)"
            },
            {
              "PLZ": 8483,
              "Ort": "Kollbrunn"
            },
            {
              "PLZ": 8484,
              "Ort": "Neschwil"
            },
            {
              "PLZ": 8484,
              "Ort": "Theilingen"
            },
            {
              "PLZ": 8484,
              "Ort": "Weisslingen"
            },
            {
              "PLZ": 8486,
              "Ort": "Rikon im Toesstal"
            },
            {
              "PLZ": 8487,
              "Ort": "Raemismuehle"
            },
            {
              "PLZ": 8487,
              "Ort": "Zell ZH"
            },
            {
              "PLZ": 8488,
              "Ort": "Turbenthal"
            },
            {
              "PLZ": 8489,
              "Ort": "Wildberg"
            },
            {
              "PLZ": 8492,
              "Ort": "Wila"
            },
            {
              "PLZ": 8493,
              "Ort": "Saland"
            },
            {
              "PLZ": 8494,
              "Ort": "Bauma"
            },
            {
              "PLZ": 8495,
              "Ort": "Schmidrueti"
            },
            {
              "PLZ": 8496,
              "Ort": "Steg im Toesstal"
            },
            {
              "PLZ": 8497,
              "Ort": "Fischenthal"
            },
            {
              "PLZ": 8498,
              "Ort": "Gibswil-Ried"
            },
            {
              "PLZ": 8499,
              "Ort": "Sternenberg"
            },
            {
              "PLZ": 8500,
              "Ort": "Frauenfeld"
            },
            {
              "PLZ": 8500,
              "Ort": "Gerlikon"
            },
            {
              "PLZ": 8505,
              "Ort": "Dettighofen"
            },
            {
              "PLZ": 8505,
              "Ort": "Pfyn"
            },
            {
              "PLZ": 8506,
              "Ort": "Lanzenneunforn"
            },
            {
              "PLZ": 8507,
              "Ort": "Hoerhausen"
            },
            {
              "PLZ": 8508,
              "Ort": "Homburg"
            },
            {
              "PLZ": 8512,
              "Ort": "Lustdorf"
            },
            {
              "PLZ": 8512,
              "Ort": "Wetzikon TG"
            },
            {
              "PLZ": 8512,
              "Ort": "Thundorf"
            },
            {
              "PLZ": 8514,
              "Ort": "Amlikon-Bissegg"
            },
            {
              "PLZ": 8522,
              "Ort": "Haeuslenen"
            },
            {
              "PLZ": 8522,
              "Ort": "Aawangen"
            },
            {
              "PLZ": 8523,
              "Ort": "Hagenbuch ZH"
            },
            {
              "PLZ": 8524,
              "Ort": "Buch b. Frauenfeld"
            },
            {
              "PLZ": 8524,
              "Ort": "Uesslingen"
            },
            {
              "PLZ": 8525,
              "Ort": "Niederneunforn"
            },
            {
              "PLZ": 8525,
              "Ort": "Wilen b. Neunforn"
            },
            {
              "PLZ": 8526,
              "Ort": "Oberneunforn"
            },
            {
              "PLZ": 8532,
              "Ort": "Weiningen TG"
            },
            {
              "PLZ": 8532,
              "Ort": "Warth"
            },
            {
              "PLZ": 8535,
              "Ort": "Herdern"
            },
            {
              "PLZ": 8536,
              "Ort": "Huettwilen"
            },
            {
              "PLZ": 8537,
              "Ort": "Nussbaumen TG"
            },
            {
              "PLZ": 8537,
              "Ort": "Uerschhausen"
            },
            {
              "PLZ": 8542,
              "Ort": "Wiesendangen"
            },
            {
              "PLZ": 8543,
              "Ort": "Bertschikon"
            },
            {
              "PLZ": 8543,
              "Ort": "Gundetswil"
            },
            {
              "PLZ": 8543,
              "Ort": "Kefikon ZH"
            },
            {
              "PLZ": 8544,
              "Ort": "Attikon"
            },
            {
              "PLZ": 8545,
              "Ort": "Rickenbach ZH"
            },
            {
              "PLZ": 8545,
              "Ort": "Rickenbach Sulz"
            },
            {
              "PLZ": 8546,
              "Ort": "Kefikon TG"
            },
            {
              "PLZ": 8546,
              "Ort": "Islikon"
            },
            {
              "PLZ": 8546,
              "Ort": "Menzengruet"
            },
            {
              "PLZ": 8547,
              "Ort": "Gachnang"
            },
            {
              "PLZ": 8548,
              "Ort": "Ellikon an der Thur"
            },
            {
              "PLZ": 8552,
              "Ort": "Felben-Wellhausen"
            },
            {
              "PLZ": 8553,
              "Ort": "Eschikofen"
            },
            {
              "PLZ": 8553,
              "Ort": "Harenwilen"
            },
            {
              "PLZ": 8553,
              "Ort": "Mettendorf TG"
            },
            {
              "PLZ": 8553,
              "Ort": "Huettlingen"
            },
            {
              "PLZ": 8554,
              "Ort": "Muellheim-Wigoltingen"
            },
            {
              "PLZ": 8554,
              "Ort": "Bonau"
            },
            {
              "PLZ": 8555,
              "Ort": "Muellheim Dorf"
            },
            {
              "PLZ": 8556,
              "Ort": "Engwang"
            },
            {
              "PLZ": 8556,
              "Ort": "Illhart"
            },
            {
              "PLZ": 8556,
              "Ort": "Lamperswil TG"
            },
            {
              "PLZ": 8556,
              "Ort": "Wigoltingen"
            },
            {
              "PLZ": 8558,
              "Ort": "Raperswilen"
            },
            {
              "PLZ": 8560,
              "Ort": "Maerstetten"
            },
            {
              "PLZ": 8561,
              "Ort": "Ottoberg"
            },
            {
              "PLZ": 8564,
              "Ort": "Lipperswil"
            },
            {
              "PLZ": 8564,
              "Ort": "Engwilen"
            },
            {
              "PLZ": 8564,
              "Ort": "Waeldi"
            },
            {
              "PLZ": 8564,
              "Ort": "Sonterswil"
            },
            {
              "PLZ": 8564,
              "Ort": "Wagerswil"
            },
            {
              "PLZ": 8564,
              "Ort": "Hattenhausen"
            },
            {
              "PLZ": 8564,
              "Ort": "Gunterswilen"
            },
            {
              "PLZ": 8564,
              "Ort": "Hefenhausen"
            },
            {
              "PLZ": 8565,
              "Ort": "Hugelshofen"
            },
            {
              "PLZ": 8566,
              "Ort": "Dotnacht"
            },
            {
              "PLZ": 8566,
              "Ort": "Neuwilen"
            },
            {
              "PLZ": 8566,
              "Ort": "Ellighausen"
            },
            {
              "PLZ": 8566,
              "Ort": "Lippoldswilen"
            },
            {
              "PLZ": 8570,
              "Ort": "Weinfelden"
            },
            {
              "PLZ": 8572,
              "Ort": "Andhausen"
            },
            {
              "PLZ": 8572,
              "Ort": "Graltshausen"
            },
            {
              "PLZ": 8572,
              "Ort": "Guntershausen b. Berg"
            },
            {
              "PLZ": 8572,
              "Ort": "Berg TG"
            },
            {
              "PLZ": 8573,
              "Ort": "Alterswilen"
            },
            {
              "PLZ": 8573,
              "Ort": "Altishausen"
            },
            {
              "PLZ": 8573,
              "Ort": "Siegershausen"
            },
            {
              "PLZ": 8574,
              "Ort": "Illighausen"
            },
            {
              "PLZ": 8574,
              "Ort": "Lengwil-Oberhofen"
            },
            {
              "PLZ": 8575,
              "Ort": "Istighofen"
            },
            {
              "PLZ": 8575,
              "Ort": "Buerglen TG"
            },
            {
              "PLZ": 8576,
              "Ort": "Mauren TG"
            },
            {
              "PLZ": 8577,
              "Ort": "Toos"
            },
            {
              "PLZ": 8577,
              "Ort": "Schoenholzerswilen"
            },
            {
              "PLZ": 8580,
              "Ort": "Sommeri"
            },
            {
              "PLZ": 8580,
              "Ort": "Hagenwil b. Amriswil"
            },
            {
              "PLZ": 8580,
              "Ort": "Hefenhofen"
            },
            {
              "PLZ": 8580,
              "Ort": "Amriswil"
            },
            {
              "PLZ": 8581,
              "Ort": "Schocherswil"
            },
            {
              "PLZ": 8582,
              "Ort": "Dozwil"
            },
            {
              "PLZ": 8583,
              "Ort": "Goetighofen"
            },
            {
              "PLZ": 8583,
              "Ort": "Donzhausen"
            },
            {
              "PLZ": 8583,
              "Ort": "Sulgen"
            },
            {
              "PLZ": 8584,
              "Ort": "Leimbach TG"
            },
            {
              "PLZ": 8584,
              "Ort": "Opfershofen TG"
            },
            {
              "PLZ": 8585,
              "Ort": "Happerswil"
            },
            {
              "PLZ": 8585,
              "Ort": "Eggethof"
            },
            {
              "PLZ": 8585,
              "Ort": "Zuben"
            },
            {
              "PLZ": 8585,
              "Ort": "Schoenenbaumgarten"
            },
            {
              "PLZ": 8585,
              "Ort": "Herrenhof"
            },
            {
              "PLZ": 8585,
              "Ort": "Birwinken"
            },
            {
              "PLZ": 8585,
              "Ort": "Klarsreuti"
            },
            {
              "PLZ": 8585,
              "Ort": "Mattwil"
            },
            {
              "PLZ": 8585,
              "Ort": "Langrickenbach"
            },
            {
              "PLZ": 8586,
              "Ort": "Andwil TG"
            },
            {
              "PLZ": 8586,
              "Ort": "Kuemmertshausen"
            },
            {
              "PLZ": 8586,
              "Ort": "Riedt b. Erlen"
            },
            {
              "PLZ": 8586,
              "Ort": "Buchackern"
            },
            {
              "PLZ": 8586,
              "Ort": "Engishofen"
            },
            {
              "PLZ": 8586,
              "Ort": "Ennetaach"
            },
            {
              "PLZ": 8586,
              "Ort": "Buch b. Kuemmertshausen"
            },
            {
              "PLZ": 8586,
              "Ort": "Erlen"
            },
            {
              "PLZ": 8587,
              "Ort": "Oberaach"
            },
            {
              "PLZ": 8588,
              "Ort": "Zihlschlacht"
            },
            {
              "PLZ": 8589,
              "Ort": "Sitterdorf"
            },
            {
              "PLZ": 8590,
              "Ort": "Romanshorn"
            },
            {
              "PLZ": 8592,
              "Ort": "Uttwil"
            },
            {
              "PLZ": 8593,
              "Ort": "Kesswil"
            },
            {
              "PLZ": 8594,
              "Ort": "Guettingen"
            },
            {
              "PLZ": 8595,
              "Ort": "Altnau"
            },
            {
              "PLZ": 8596,
              "Ort": "Muensterlingen"
            },
            {
              "PLZ": 8596,
              "Ort": "Scherzingen"
            },
            {
              "PLZ": 8597,
              "Ort": "Landschlacht"
            },
            {
              "PLZ": 8598,
              "Ort": "Bottighofen"
            },
            {
              "PLZ": 8599,
              "Ort": "Salmsach"
            },
            {
              "PLZ": 8600,
              "Ort": "Duebendorf"
            },
            {
              "PLZ": 8602,
              "Ort": "Wangen b. Duebendorf"
            },
            {
              "PLZ": 8603,
              "Ort": "Schwerzenbach"
            },
            {
              "PLZ": 8604,
              "Ort": "Volketswil"
            },
            {
              "PLZ": 8605,
              "Ort": "Gutenswil"
            },
            {
              "PLZ": 8606,
              "Ort": "Naenikon"
            },
            {
              "PLZ": 8606,
              "Ort": "Greifensee"
            },
            {
              "PLZ": 8607,
              "Ort": "Aathal-Seegraeben"
            },
            {
              "PLZ": 8608,
              "Ort": "Bubikon"
            },
            {
              "PLZ": 8610,
              "Ort": "Uster"
            },
            {
              "PLZ": 8614,
              "Ort": "Sulzbach"
            },
            {
              "PLZ": 8614,
              "Ort": "Bertschikon (Gossau ZH)"
            },
            {
              "PLZ": 8615,
              "Ort": "Wermatswil"
            },
            {
              "PLZ": 8615,
              "Ort": "Freudwil"
            },
            {
              "PLZ": 8616,
              "Ort": "Riedikon"
            },
            {
              "PLZ": 8617,
              "Ort": "Moenchaltorf"
            },
            {
              "PLZ": 8618,
              "Ort": "Oetwil am See"
            },
            {
              "PLZ": 8620,
              "Ort": "Wetzikon ZH"
            },
            {
              "PLZ": 8623,
              "Ort": "Wetzikon ZH"
            },
            {
              "PLZ": 8624,
              "Ort": "Gruet (Gossau ZH)"
            },
            {
              "PLZ": 8625,
              "Ort": "Gossau ZH"
            },
            {
              "PLZ": 8626,
              "Ort": "Ottikon (Gossau ZH)"
            },
            {
              "PLZ": 8627,
              "Ort": "Grueningen"
            },
            {
              "PLZ": 8630,
              "Ort": "Rueti ZH"
            },
            {
              "PLZ": 8632,
              "Ort": "Tann"
            },
            {
              "PLZ": 8633,
              "Ort": "Wolfhausen"
            },
            {
              "PLZ": 8634,
              "Ort": "Hombrechtikon"
            },
            {
              "PLZ": 8635,
              "Ort": "Duernten"
            },
            {
              "PLZ": 8636,
              "Ort": "Wald ZH"
            },
            {
              "PLZ": 8637,
              "Ort": "Laupen ZH"
            },
            {
              "PLZ": 8638,
              "Ort": "Goldingen"
            },
            {
              "PLZ": 8639,
              "Ort": "Faltigberg"
            },
            {
              "PLZ": 8640,
              "Ort": "Rapperswil SG"
            },
            {
              "PLZ": 8640,
              "Ort": "Hurden"
            },
            {
              "PLZ": 8645,
              "Ort": "Jona"
            },
            {
              "PLZ": 8646,
              "Ort": "Wagen"
            },
            {
              "PLZ": 8700,
              "Ort": "Kuesnacht ZH"
            },
            {
              "PLZ": 8702,
              "Ort": "Zollikon"
            },
            {
              "PLZ": 8703,
              "Ort": "Erlenbach ZH"
            },
            {
              "PLZ": 8704,
              "Ort": "Herrliberg"
            },
            {
              "PLZ": 8706,
              "Ort": "Meilen"
            },
            {
              "PLZ": 8707,
              "Ort": "Uetikon am See"
            },
            {
              "PLZ": 8708,
              "Ort": "Maennedorf"
            },
            {
              "PLZ": 8712,
              "Ort": "Staefa"
            },
            {
              "PLZ": 8713,
              "Ort": "Uerikon"
            },
            {
              "PLZ": 8714,
              "Ort": "Feldbach"
            },
            {
              "PLZ": 8715,
              "Ort": "Bollingen"
            },
            {
              "PLZ": 8716,
              "Ort": "Schmerikon"
            },
            {
              "PLZ": 8717,
              "Ort": "Benken SG"
            },
            {
              "PLZ": 8718,
              "Ort": "Schaenis"
            },
            {
              "PLZ": 8722,
              "Ort": "Kaltbrunn"
            },
            {
              "PLZ": 8723,
              "Ort": "Rufi"
            },
            {
              "PLZ": 8725,
              "Ort": "Gebertingen"
            },
            {
              "PLZ": 8725,
              "Ort": "Ernetschwil"
            },
            {
              "PLZ": 8726,
              "Ort": "Ricken SG"
            },
            {
              "PLZ": 8727,
              "Ort": "Walde SG"
            },
            {
              "PLZ": 8730,
              "Ort": "Uznach"
            },
            {
              "PLZ": 8732,
              "Ort": "Neuhaus SG"
            },
            {
              "PLZ": 8733,
              "Ort": "Eschenbach SG"
            },
            {
              "PLZ": 8734,
              "Ort": "Ermenswil"
            },
            {
              "PLZ": 8735,
              "Ort": "Rueeterswil"
            },
            {
              "PLZ": 8735,
              "Ort": "St. Gallenkappel"
            },
            {
              "PLZ": 8737,
              "Ort": "Gommiswald"
            },
            {
              "PLZ": 8738,
              "Ort": "Uetliburg SG"
            },
            {
              "PLZ": 8739,
              "Ort": "Rieden SG"
            },
            {
              "PLZ": 8750,
              "Ort": "Kloental"
            },
            {
              "PLZ": 8750,
              "Ort": "Glarus"
            },
            {
              "PLZ": 8750,
              "Ort": "Riedern"
            },
            {
              "PLZ": 8751,
              "Ort": "Urnerboden"
            },
            {
              "PLZ": 8752,
              "Ort": "Naefels"
            },
            {
              "PLZ": 8753,
              "Ort": "Mollis"
            },
            {
              "PLZ": 8754,
              "Ort": "Netstal"
            },
            {
              "PLZ": 8755,
              "Ort": "Ennenda"
            },
            {
              "PLZ": 8756,
              "Ort": "Mitloedi"
            },
            {
              "PLZ": 8757,
              "Ort": "Filzbach"
            },
            {
              "PLZ": 8758,
              "Ort": "Obstalden"
            },
            {
              "PLZ": 8762,
              "Ort": "Schwaendi b. Schwanden"
            },
            {
              "PLZ": 8762,
              "Ort": "Sool"
            },
            {
              "PLZ": 8762,
              "Ort": "Schwanden GL"
            },
            {
              "PLZ": 8765,
              "Ort": "Engi"
            },
            {
              "PLZ": 8766,
              "Ort": "Matt"
            },
            {
              "PLZ": 8767,
              "Ort": "Elm"
            },
            {
              "PLZ": 8772,
              "Ort": "Nidfurn"
            },
            {
              "PLZ": 8773,
              "Ort": "Haslen GL"
            },
            {
              "PLZ": 8774,
              "Ort": "Leuggelbach"
            },
            {
              "PLZ": 8775,
              "Ort": "Luchsingen"
            },
            {
              "PLZ": 8775,
              "Ort": "Haetzingen"
            },
            {
              "PLZ": 8777,
              "Ort": "Diesbach GL"
            },
            {
              "PLZ": 8777,
              "Ort": "Betschwanden"
            },
            {
              "PLZ": 8782,
              "Ort": "Rueti GL"
            },
            {
              "PLZ": 8783,
              "Ort": "Linthal"
            },
            {
              "PLZ": 8784,
              "Ort": "Braunwald"
            },
            {
              "PLZ": 8800,
              "Ort": "Thalwil"
            },
            {
              "PLZ": 8802,
              "Ort": "Kilchberg ZH"
            },
            {
              "PLZ": 8803,
              "Ort": "Rueschlikon"
            },
            {
              "PLZ": 8804,
              "Ort": "Au ZH"
            },
            {
              "PLZ": 8805,
              "Ort": "Richterswil"
            },
            {
              "PLZ": 8806,
              "Ort": "Baech SZ"
            },
            {
              "PLZ": 8807,
              "Ort": "Freienbach"
            },
            {
              "PLZ": 8808,
              "Ort": "Pfaeffikon SZ"
            },
            {
              "PLZ": 8810,
              "Ort": "Horgen"
            },
            {
              "PLZ": 8815,
              "Ort": "Horgenberg"
            },
            {
              "PLZ": 8816,
              "Ort": "Hirzel"
            },
            {
              "PLZ": 8820,
              "Ort": "Waedenswil"
            },
            {
              "PLZ": 8824,
              "Ort": "Schoenenberg ZH"
            },
            {
              "PLZ": 8825,
              "Ort": "Huetten"
            },
            {
              "PLZ": 8832,
              "Ort": "Wilen b. Wollerau"
            },
            {
              "PLZ": 8832,
              "Ort": "Wollerau"
            },
            {
              "PLZ": 8833,
              "Ort": "Samstagern"
            },
            {
              "PLZ": 8834,
              "Ort": "Schindellegi"
            },
            {
              "PLZ": 8835,
              "Ort": "Feusisberg"
            },
            {
              "PLZ": 8836,
              "Ort": "Bennau"
            },
            {
              "PLZ": 8840,
              "Ort": "Trachslau"
            },
            {
              "PLZ": 8840,
              "Ort": "Einsiedeln"
            },
            {
              "PLZ": 8841,
              "Ort": "Gross"
            },
            {
              "PLZ": 8842,
              "Ort": "Unteriberg"
            },
            {
              "PLZ": 8843,
              "Ort": "Oberiberg"
            },
            {
              "PLZ": 8844,
              "Ort": "Euthal"
            },
            {
              "PLZ": 8845,
              "Ort": "Studen SZ"
            },
            {
              "PLZ": 8846,
              "Ort": "Willerzell"
            },
            {
              "PLZ": 8847,
              "Ort": "Egg SZ"
            },
            {
              "PLZ": 8849,
              "Ort": "Alpthal"
            },
            {
              "PLZ": 8852,
              "Ort": "Altendorf"
            },
            {
              "PLZ": 8853,
              "Ort": "Lachen SZ"
            },
            {
              "PLZ": 8854,
              "Ort": "Siebnen"
            },
            {
              "PLZ": 8854,
              "Ort": "Galgenen"
            },
            {
              "PLZ": 8855,
              "Ort": "Wangen SZ"
            },
            {
              "PLZ": 8856,
              "Ort": "Tuggen"
            },
            {
              "PLZ": 8857,
              "Ort": "Vorderthal"
            },
            {
              "PLZ": 8858,
              "Ort": "Innerthal"
            },
            {
              "PLZ": 8862,
              "Ort": "Schuebelbach"
            },
            {
              "PLZ": 8863,
              "Ort": "Buttikon SZ"
            },
            {
              "PLZ": 8864,
              "Ort": "Reichenburg"
            },
            {
              "PLZ": 8865,
              "Ort": "Bilten"
            },
            {
              "PLZ": 8866,
              "Ort": "Ziegelbruecke"
            },
            {
              "PLZ": 8867,
              "Ort": "Niederurnen"
            },
            {
              "PLZ": 8868,
              "Ort": "Oberurnen"
            },
            {
              "PLZ": 8872,
              "Ort": "Weesen"
            },
            {
              "PLZ": 8873,
              "Ort": "Amden"
            },
            {
              "PLZ": 8874,
              "Ort": "Muehlehorn"
            },
            {
              "PLZ": 8877,
              "Ort": "Murg"
            },
            {
              "PLZ": 8878,
              "Ort": "Quinten"
            },
            {
              "PLZ": 8880,
              "Ort": "Walenstadt"
            },
            {
              "PLZ": 8881,
              "Ort": "Knoblisbuehl"
            },
            {
              "PLZ": 8881,
              "Ort": "Tscherlach"
            },
            {
              "PLZ": 8881,
              "Ort": "Walenstadtberg"
            },
            {
              "PLZ": 8882,
              "Ort": "Unterterzen"
            },
            {
              "PLZ": 8883,
              "Ort": "Quarten"
            },
            {
              "PLZ": 8884,
              "Ort": "Oberterzen"
            },
            {
              "PLZ": 8885,
              "Ort": "Mols"
            },
            {
              "PLZ": 8886,
              "Ort": "Maedris-Vermol"
            },
            {
              "PLZ": 8887,
              "Ort": "Mels"
            },
            {
              "PLZ": 8888,
              "Ort": "Heiligkreuz (Mels)"
            },
            {
              "PLZ": 8889,
              "Ort": "Plons"
            },
            {
              "PLZ": 8890,
              "Ort": "Flums"
            },
            {
              "PLZ": 8892,
              "Ort": "Berschis"
            },
            {
              "PLZ": 8893,
              "Ort": "Flums Hochwiese"
            },
            {
              "PLZ": 8894,
              "Ort": "Flumserberg Saxli"
            },
            {
              "PLZ": 8895,
              "Ort": "Flumserberg Portels"
            },
            {
              "PLZ": 8896,
              "Ort": "Flumserberg Bergheim"
            },
            {
              "PLZ": 8897,
              "Ort": "Flumserberg Tannenheim"
            },
            {
              "PLZ": 8898,
              "Ort": "Flumserberg Tannenbodenalp"
            },
            {
              "PLZ": 8902,
              "Ort": "Urdorf"
            },
            {
              "PLZ": 8903,
              "Ort": "Birmensdorf ZH"
            },
            {
              "PLZ": 8904,
              "Ort": "Aesch ZH"
            },
            {
              "PLZ": 8905,
              "Ort": "Islisberg"
            },
            {
              "PLZ": 8905,
              "Ort": "Arni AG"
            },
            {
              "PLZ": 8906,
              "Ort": "Bonstetten"
            },
            {
              "PLZ": 8907,
              "Ort": "Wettswil"
            },
            {
              "PLZ": 8908,
              "Ort": "Hedingen"
            },
            {
              "PLZ": 8909,
              "Ort": "Zwillikon"
            },
            {
              "PLZ": 8910,
              "Ort": "Affoltern am Albis"
            },
            {
              "PLZ": 8911,
              "Ort": "Rifferswil"
            },
            {
              "PLZ": 8912,
              "Ort": "Obfelden"
            },
            {
              "PLZ": 8913,
              "Ort": "Ottenbach"
            },
            {
              "PLZ": 8914,
              "Ort": "Aeugstertal"
            },
            {
              "PLZ": 8914,
              "Ort": "Aeugst am Albis"
            },
            {
              "PLZ": 8915,
              "Ort": "Hausen am Albis"
            },
            {
              "PLZ": 8916,
              "Ort": "Jonen"
            },
            {
              "PLZ": 8917,
              "Ort": "Oberlunkhofen"
            },
            {
              "PLZ": 8918,
              "Ort": "Unterlunkhofen"
            },
            {
              "PLZ": 8919,
              "Ort": "Rottenschwil"
            },
            {
              "PLZ": 8925,
              "Ort": "Ebertswil"
            },
            {
              "PLZ": 8926,
              "Ort": "Hauptikon"
            },
            {
              "PLZ": 8926,
              "Ort": "Uerzlikon"
            },
            {
              "PLZ": 8926,
              "Ort": "Kappel am Albis"
            },
            {
              "PLZ": 8932,
              "Ort": "Mettmenstetten"
            },
            {
              "PLZ": 8933,
              "Ort": "Maschwanden"
            },
            {
              "PLZ": 8934,
              "Ort": "Knonau"
            },
            {
              "PLZ": 8942,
              "Ort": "Oberrieden"
            },
            {
              "PLZ": 8951,
              "Ort": "Fahrweid"
            },
            {
              "PLZ": 8952,
              "Ort": "Schlieren"
            },
            {
              "PLZ": 8953,
              "Ort": "Dietikon"
            },
            {
              "PLZ": 8954,
              "Ort": "Geroldswil"
            },
            {
              "PLZ": 8955,
              "Ort": "Oetwil an der Limmat"
            },
            {
              "PLZ": 8956,
              "Ort": "Killwangen"
            },
            {
              "PLZ": 8957,
              "Ort": "Spreitenbach"
            },
            {
              "PLZ": 8962,
              "Ort": "Bergdietikon"
            },
            {
              "PLZ": 8964,
              "Ort": "Rudolfstetten"
            },
            {
              "PLZ": 8965,
              "Ort": "Berikon"
            },
            {
              "PLZ": 8966,
              "Ort": "Oberwil-Lieli"
            },
            {
              "PLZ": 8967,
              "Ort": "Widen"
            },
            {
              "PLZ": 9000,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9007,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9008,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9010,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9011,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9012,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9014,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9015,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9016,
              "Ort": "St. Gallen"
            },
            {
              "PLZ": 9030,
              "Ort": "Abtwil SG"
            },
            {
              "PLZ": 9032,
              "Ort": "Engelburg"
            },
            {
              "PLZ": 9033,
              "Ort": "Untereggen"
            },
            {
              "PLZ": 9034,
              "Ort": "Eggersriet"
            },
            {
              "PLZ": 9035,
              "Ort": "Grub AR"
            },
            {
              "PLZ": 9036,
              "Ort": "Grub SG"
            },
            {
              "PLZ": 9037,
              "Ort": "Speicherschwendi"
            },
            {
              "PLZ": 9038,
              "Ort": "Rehetobel"
            },
            {
              "PLZ": 9042,
              "Ort": "Speicher"
            },
            {
              "PLZ": 9043,
              "Ort": "Trogen"
            },
            {
              "PLZ": 9044,
              "Ort": "Wald AR"
            },
            {
              "PLZ": 9050,
              "Ort": "Appenzell Eggerstanden"
            },
            {
              "PLZ": 9050,
              "Ort": "Appenzell Enggenhuetten"
            },
            {
              "PLZ": 9050,
              "Ort": "Appenzell Meistersruete"
            },
            {
              "PLZ": 9050,
              "Ort": "Appenzell Steinegg"
            },
            {
              "PLZ": 9050,
              "Ort": "Appenzell Schlatt"
            },
            {
              "PLZ": 9050,
              "Ort": "Appenzell"
            },
            {
              "PLZ": 9052,
              "Ort": "Niederteufen"
            },
            {
              "PLZ": 9053,
              "Ort": "Teufen AR"
            },
            {
              "PLZ": 9054,
              "Ort": "Haslen AI"
            },
            {
              "PLZ": 9055,
              "Ort": "Buehler"
            },
            {
              "PLZ": 9056,
              "Ort": "Gais"
            },
            {
              "PLZ": 9057,
              "Ort": "Schwende"
            },
            {
              "PLZ": 9057,
              "Ort": "Wasserauen"
            },
            {
              "PLZ": 9057,
              "Ort": "Weissbad"
            },
            {
              "PLZ": 9058,
              "Ort": "Bruelisau"
            },
            {
              "PLZ": 9062,
              "Ort": "Lustmuehle"
            },
            {
              "PLZ": 9063,
              "Ort": "Stein AR"
            },
            {
              "PLZ": 9064,
              "Ort": "Hundwil"
            },
            {
              "PLZ": 9100,
              "Ort": "Herisau"
            },
            {
              "PLZ": 9103,
              "Ort": "Schwellbrunn"
            },
            {
              "PLZ": 9104,
              "Ort": "Waldstatt"
            },
            {
              "PLZ": 9105,
              "Ort": "Schoenengrund"
            },
            {
              "PLZ": 9107,
              "Ort": "Urnaesch"
            },
            {
              "PLZ": 9108,
              "Ort": "Gontenbad"
            },
            {
              "PLZ": 9108,
              "Ort": "Jakobsbad"
            },
            {
              "PLZ": 9108,
              "Ort": "Gonten"
            },
            {
              "PLZ": 9112,
              "Ort": "Schachen b. Herisau"
            },
            {
              "PLZ": 9113,
              "Ort": "Degersheim"
            },
            {
              "PLZ": 9114,
              "Ort": "Hoffeld"
            },
            {
              "PLZ": 9115,
              "Ort": "Dicken"
            },
            {
              "PLZ": 9116,
              "Ort": "Wolfertswil"
            },
            {
              "PLZ": 9122,
              "Ort": "Ebersol"
            },
            {
              "PLZ": 9122,
              "Ort": "Mogelsberg"
            },
            {
              "PLZ": 9123,
              "Ort": "Nassen"
            },
            {
              "PLZ": 9125,
              "Ort": "Brunnadern"
            },
            {
              "PLZ": 9126,
              "Ort": "Necker"
            },
            {
              "PLZ": 9127,
              "Ort": "St. Peterzell"
            },
            {
              "PLZ": 9200,
              "Ort": "Gossau SG"
            },
            {
              "PLZ": 9203,
              "Ort": "Niederwil SG"
            },
            {
              "PLZ": 9204,
              "Ort": "Andwil SG"
            },
            {
              "PLZ": 9205,
              "Ort": "Waldkirch"
            },
            {
              "PLZ": 9212,
              "Ort": "Arnegg"
            },
            {
              "PLZ": 9213,
              "Ort": "Hauptwil"
            },
            {
              "PLZ": 9214,
              "Ort": "Kradolf"
            },
            {
              "PLZ": 9215,
              "Ort": "Schoenenberg an der Thur"
            },
            {
              "PLZ": 9215,
              "Ort": "Buhwil"
            },
            {
              "PLZ": 9216,
              "Ort": "Heldswil"
            },
            {
              "PLZ": 9216,
              "Ort": "Hohentannen"
            },
            {
              "PLZ": 9217,
              "Ort": "Neukirch an der Thur"
            },
            {
              "PLZ": 9220,
              "Ort": "Bischofszell"
            },
            {
              "PLZ": 9223,
              "Ort": "Schweizersholz"
            },
            {
              "PLZ": 9223,
              "Ort": "Halden"
            },
            {
              "PLZ": 9225,
              "Ort": "Wilen (Gottshaus)"
            },
            {
              "PLZ": 9225,
              "Ort": "St. Pelagiberg"
            },
            {
              "PLZ": 9230,
              "Ort": "Flawil"
            },
            {
              "PLZ": 9231,
              "Ort": "Egg (Flawil)"
            },
            {
              "PLZ": 9240,
              "Ort": "Niederglatt SG"
            },
            {
              "PLZ": 9240,
              "Ort": "Uzwil"
            },
            {
              "PLZ": 9242,
              "Ort": "Oberuzwil"
            },
            {
              "PLZ": 9243,
              "Ort": "Jonschwil"
            },
            {
              "PLZ": 9244,
              "Ort": "Niederuzwil"
            },
            {
              "PLZ": 9245,
              "Ort": "Sonnental"
            },
            {
              "PLZ": 9245,
              "Ort": "Oberbueren"
            },
            {
              "PLZ": 9246,
              "Ort": "Niederbueren"
            },
            {
              "PLZ": 9247,
              "Ort": "Henau"
            },
            {
              "PLZ": 9248,
              "Ort": "Bichwil"
            },
            {
              "PLZ": 9249,
              "Ort": "Oberstetten"
            },
            {
              "PLZ": 9249,
              "Ort": "Niederstetten"
            },
            {
              "PLZ": 9249,
              "Ort": "Algetshausen"
            },
            {
              "PLZ": 9300,
              "Ort": "Wittenbach"
            },
            {
              "PLZ": 9304,
              "Ort": "Bernhardzell"
            },
            {
              "PLZ": 9305,
              "Ort": "Berg SG"
            },
            {
              "PLZ": 9306,
              "Ort": "Freidorf TG"
            },
            {
              "PLZ": 9308,
              "Ort": "Loemmenschwil"
            },
            {
              "PLZ": 9312,
              "Ort": "Haeggenschwil"
            },
            {
              "PLZ": 9313,
              "Ort": "Muolen"
            },
            {
              "PLZ": 9314,
              "Ort": "Steinebrunn"
            },
            {
              "PLZ": 9315,
              "Ort": "Winden"
            },
            {
              "PLZ": 9315,
              "Ort": "Neukirch (Egnach)"
            },
            {
              "PLZ": 9320,
              "Ort": "Frasnacht"
            },
            {
              "PLZ": 9320,
              "Ort": "Stachen"
            },
            {
              "PLZ": 9320,
              "Ort": "Arbon"
            },
            {
              "PLZ": 9322,
              "Ort": "Egnach"
            },
            {
              "PLZ": 9323,
              "Ort": "Steinach"
            },
            {
              "PLZ": 9325,
              "Ort": "Roggwil TG"
            },
            {
              "PLZ": 9326,
              "Ort": "Horn"
            },
            {
              "PLZ": 9327,
              "Ort": "Tuebach"
            },
            {
              "PLZ": 9400,
              "Ort": "Rorschach"
            },
            {
              "PLZ": 9402,
              "Ort": "Moerschwil"
            },
            {
              "PLZ": 9403,
              "Ort": "Goldach"
            },
            {
              "PLZ": 9404,
              "Ort": "Rorschacherberg"
            },
            {
              "PLZ": 9405,
              "Ort": "Wienacht-Tobel"
            },
            {
              "PLZ": 9410,
              "Ort": "Heiden"
            },
            {
              "PLZ": 9411,
              "Ort": "Reute AR"
            },
            {
              "PLZ": 9413,
              "Ort": "Oberegg"
            },
            {
              "PLZ": 9414,
              "Ort": "Schachen b. Reute"
            },
            {
              "PLZ": 9422,
              "Ort": "Staad SG"
            },
            {
              "PLZ": 9423,
              "Ort": "Altenrhein"
            },
            {
              "PLZ": 9424,
              "Ort": "Rheineck"
            },
            {
              "PLZ": 9425,
              "Ort": "Thal"
            },
            {
              "PLZ": 9426,
              "Ort": "Lutzenberg"
            },
            {
              "PLZ": 9427,
              "Ort": "Zelg (Wolfhalden)"
            },
            {
              "PLZ": 9427,
              "Ort": "Wolfhalden"
            },
            {
              "PLZ": 9428,
              "Ort": "Walzenhausen"
            },
            {
              "PLZ": 9430,
              "Ort": "St. Margrethen SG"
            },
            {
              "PLZ": 9434,
              "Ort": "Au SG"
            },
            {
              "PLZ": 9435,
              "Ort": "Heerbrugg"
            },
            {
              "PLZ": 9436,
              "Ort": "Balgach"
            },
            {
              "PLZ": 9437,
              "Ort": "Marbach SG"
            },
            {
              "PLZ": 9442,
              "Ort": "Bueriswilen"
            },
            {
              "PLZ": 9442,
              "Ort": "Berneck"
            },
            {
              "PLZ": 9443,
              "Ort": "Widnau"
            },
            {
              "PLZ": 9444,
              "Ort": "Diepoldsau"
            },
            {
              "PLZ": 9445,
              "Ort": "Rebstein"
            },
            {
              "PLZ": 9450,
              "Ort": "Luechingen"
            },
            {
              "PLZ": 9450,
              "Ort": "Altstaetten SG"
            },
            {
              "PLZ": 9451,
              "Ort": "Kriessern"
            },
            {
              "PLZ": 9452,
              "Ort": "Hinterforst"
            },
            {
              "PLZ": 9453,
              "Ort": "Eichberg"
            },
            {
              "PLZ": 9462,
              "Ort": "Montlingen"
            },
            {
              "PLZ": 9463,
              "Ort": "Oberriet SG"
            },
            {
              "PLZ": 9464,
              "Ort": "Lienz"
            },
            {
              "PLZ": 9464,
              "Ort": "Ruethi (Rheintal)"
            },
            {
              "PLZ": 9465,
              "Ort": "Salez"
            },
            {
              "PLZ": 9466,
              "Ort": "Sennwald"
            },
            {
              "PLZ": 9467,
              "Ort": "Fruemsen"
            },
            {
              "PLZ": 9468,
              "Ort": "Sax"
            },
            {
              "PLZ": 9469,
              "Ort": "Haag (Rheintal)"
            },
            {
              "PLZ": 9470,
              "Ort": "Buchs SG"
            },
            {
              "PLZ": 9470,
              "Ort": "Werdenberg"
            },
            {
              "PLZ": 9472,
              "Ort": "Grabserberg"
            },
            {
              "PLZ": 9472,
              "Ort": "Grabs"
            },
            {
              "PLZ": 9473,
              "Ort": "Gams"
            },
            {
              "PLZ": 9475,
              "Ort": "Sevelen"
            },
            {
              "PLZ": 9476,
              "Ort": "Fontnas"
            },
            {
              "PLZ": 9476,
              "Ort": "Weite"
            },
            {
              "PLZ": 9477,
              "Ort": "Truebbach"
            },
            {
              "PLZ": 9478,
              "Ort": "Azmoos"
            },
            {
              "PLZ": 9479,
              "Ort": "Gretschins"
            },
            {
              "PLZ": 9479,
              "Ort": "Malans SG"
            },
            {
              "PLZ": 9479,
              "Ort": "Oberschan"
            },
            {
              "PLZ": 9485,
              "Ort": "Nendeln"
            },
            {
              "PLZ": 9486,
              "Ort": "Schaanwald"
            },
            {
              "PLZ": 9487,
              "Ort": "Gamprin-Bendern"
            },
            {
              "PLZ": 9488,
              "Ort": "Schellenberg"
            },
            {
              "PLZ": 9490,
              "Ort": "Vaduz"
            },
            {
              "PLZ": 9491,
              "Ort": "Ruggell"
            },
            {
              "PLZ": 9492,
              "Ort": "Eschen"
            },
            {
              "PLZ": 9493,
              "Ort": "Mauren FL"
            },
            {
              "PLZ": 9494,
              "Ort": "Schaan"
            },
            {
              "PLZ": 9495,
              "Ort": "Triesen"
            },
            {
              "PLZ": 9496,
              "Ort": "Balzers"
            },
            {
              "PLZ": 9497,
              "Ort": "Triesenberg"
            },
            {
              "PLZ": 9498,
              "Ort": "Planken"
            },
            {
              "PLZ": 9500,
              "Ort": "Wil SG"
            },
            {
              "PLZ": 9502,
              "Ort": "Braunau"
            },
            {
              "PLZ": 9503,
              "Ort": "Stehrenberg"
            },
            {
              "PLZ": 9503,
              "Ort": "Lanterswil"
            },
            {
              "PLZ": 9504,
              "Ort": "Friltschen"
            },
            {
              "PLZ": 9506,
              "Ort": "Lommis"
            },
            {
              "PLZ": 9507,
              "Ort": "Stettfurt"
            },
            {
              "PLZ": 9508,
              "Ort": "Weingarten-Kalthaeusern"
            },
            {
              "PLZ": 9512,
              "Ort": "Rossrueti"
            },
            {
              "PLZ": 9514,
              "Ort": "Wuppenau"
            },
            {
              "PLZ": 9515,
              "Ort": "Hosenruck"
            },
            {
              "PLZ": 9517,
              "Ort": "Mettlen"
            },
            {
              "PLZ": 9523,
              "Ort": "Zueberwangen"
            },
            {
              "PLZ": 9524,
              "Ort": "Zuzwil SG"
            },
            {
              "PLZ": 9525,
              "Ort": "Lenggenwil"
            },
            {
              "PLZ": 9526,
              "Ort": "Zuckenriet"
            },
            {
              "PLZ": 9527,
              "Ort": "Niederhelfenschwil"
            },
            {
              "PLZ": 9532,
              "Ort": "Rickenbach b. Wil"
            },
            {
              "PLZ": 9533,
              "Ort": "Kirchberg SG"
            },
            {
              "PLZ": 9534,
              "Ort": "Gaehwil"
            },
            {
              "PLZ": 9535,
              "Ort": "Wilen b. Wil"
            },
            {
              "PLZ": 9536,
              "Ort": "Schwarzenbach SG"
            },
            {
              "PLZ": 9542,
              "Ort": "Muenchwilen TG"
            },
            {
              "PLZ": 9543,
              "Ort": "St. Margarethen TG"
            },
            {
              "PLZ": 9545,
              "Ort": "Waengi"
            },
            {
              "PLZ": 9546,
              "Ort": "Tuttwil"
            },
            {
              "PLZ": 9547,
              "Ort": "Wittenwil"
            },
            {
              "PLZ": 9548,
              "Ort": "Matzingen"
            },
            {
              "PLZ": 9552,
              "Ort": "Bronschhofen"
            },
            {
              "PLZ": 9553,
              "Ort": "Bettwiesen"
            },
            {
              "PLZ": 9554,
              "Ort": "Taegerschen"
            },
            {
              "PLZ": 9555,
              "Ort": "Tobel"
            },
            {
              "PLZ": 9556,
              "Ort": "Zezikon"
            },
            {
              "PLZ": 9556,
              "Ort": "Affeltrangen"
            },
            {
              "PLZ": 9562,
              "Ort": "Buch b. Maerwil"
            },
            {
              "PLZ": 9562,
              "Ort": "Maerwil"
            },
            {
              "PLZ": 9565,
              "Ort": "Rothenhausen"
            },
            {
              "PLZ": 9565,
              "Ort": "Schmidshof"
            },
            {
              "PLZ": 9565,
              "Ort": "Oppikon"
            },
            {
              "PLZ": 9565,
              "Ort": "Oberbussnang"
            },
            {
              "PLZ": 9565,
              "Ort": "Bussnang"
            },
            {
              "PLZ": 9573,
              "Ort": "Littenheid"
            },
            {
              "PLZ": 9601,
              "Ort": "Luetisburg Station"
            },
            {
              "PLZ": 9602,
              "Ort": "Mueselbach"
            },
            {
              "PLZ": 9602,
              "Ort": "Bazenheid"
            },
            {
              "PLZ": 9604,
              "Ort": "Oberrindal"
            },
            {
              "PLZ": 9604,
              "Ort": "Unterrindal"
            },
            {
              "PLZ": 9604,
              "Ort": "Luetisburg"
            },
            {
              "PLZ": 9606,
              "Ort": "Buetschwil"
            },
            {
              "PLZ": 9607,
              "Ort": "Mosnang"
            },
            {
              "PLZ": 9608,
              "Ort": "Ganterschwil"
            },
            {
              "PLZ": 9612,
              "Ort": "Dreien"
            },
            {
              "PLZ": 9613,
              "Ort": "Muehlrueti"
            },
            {
              "PLZ": 9614,
              "Ort": "Libingen"
            },
            {
              "PLZ": 9615,
              "Ort": "Dietfurt"
            },
            {
              "PLZ": 9620,
              "Ort": "Lichtensteig"
            },
            {
              "PLZ": 9621,
              "Ort": "Oberhelfenschwil"
            },
            {
              "PLZ": 9622,
              "Ort": "Krinau"
            },
            {
              "PLZ": 9630,
              "Ort": "Wattwil"
            },
            {
              "PLZ": 9631,
              "Ort": "Ulisbach"
            },
            {
              "PLZ": 9633,
              "Ort": "Baechli (Hemberg)"
            },
            {
              "PLZ": 9633,
              "Ort": "Hemberg"
            },
            {
              "PLZ": 9642,
              "Ort": "Ebnat-Kappel"
            },
            {
              "PLZ": 9643,
              "Ort": "Krummenau"
            },
            {
              "PLZ": 9650,
              "Ort": "Nesslau"
            },
            {
              "PLZ": 9651,
              "Ort": "Ennetbuehl"
            },
            {
              "PLZ": 9652,
              "Ort": "Neu St. Johann"
            },
            {
              "PLZ": 9655,
              "Ort": "Stein SG"
            },
            {
              "PLZ": 9656,
              "Ort": "Alt St. Johann"
            },
            {
              "PLZ": 9657,
              "Ort": "Unterwasser"
            },
            {
              "PLZ": 9658,
              "Ort": "Wildhaus"
            }
           ]';
           return $string;
    }
?>