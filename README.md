 # Berlin Clock TDD
 
Notre programme prends en input une heure de format String (HH:MM:SS). Il renvoit renvoie un string qui contient plusieurs lignes, une ligne pour chaque rangée de lampes. Si une lampe est allumée le string sera [x], si la lampe est allumée ET de couleur rouge le string sera [R]. Si la lampe est éteinte, la string sera [ ];
Ex input : « 12:17:12 »
Ex output : "[x]\n [x][x][ ][ ]\n [x][x][R][ ]\n [x][x][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n [x][x][ ][ ]"
