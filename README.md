 # Berlin Clock TDD
 
 Notre programme prends en input une heure de format String (HH:MM:SS).
 Il renvoit renvoie une string qui contient plusieurs lignes, une ligne pour chaque rangée de lampes.
 Si une lampe est allumée la string sera [x], si la lampe est allumée ET de couleure rouge la string sera [R]. Si la lampe est éteinte, la string sera [ ];
 
 Ex input : 12:12:12
 
 Ex output : 
 "[x]\n
 [x][x][ ][ ]\n
 [x][x][ ][ ]\n
 [x][x][ ][ ][ ][ ][ ][ ][ ][ ][ ]\n
 [x][x][ ][ ]"