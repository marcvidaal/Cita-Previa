
# Cita Previa

Aques es el segon projecte de 2n de DAW on s'ha creat una implemntacio d'un sistema de reserves per cita-Previa



## Guia d'usuari
Per a un sipme usuari es tan facil com crear-se una conta i a partir de llabors, 
fer les reserves desitjades, cal nota que si s'intenta fer una reserva dins del 
mateix dia, el qual esta recaregat per defecte, si aquesta reserva es trova dins
 d'un periode ja començat el propi programa no la creara.
L'usuari te permis per eliminar reserves, execepte les reserves passades 
que no s'ensenyen.
- Per tal de la creaio de un nou usuari es estricatment nescesrai que s'emplenin tots el caps a l'hora de la creacio d'aquest.
- Si s'intenta reutilitzar un correu aquest es ignorat i el usuari no es creat

## Guia d'administrador
El usuari administrador te tots els mateixos permisos que l'usuari normal i pot accedir a la seca vista amb el boto superior de main page, pero a part d'aixo te les seguens funcionalitats.
 - Lista totes les reserves en una taula de datatables, la qual es pot ordanar per cada camp i eliminar cada reserva.
 - Es pot fer un extracte de les resserves en PDF aplinat el filtres que es desitgin dins de la barra de navegacio.
 - Es poden alterar les dates obertes de la piscina arribant a tencar-la si es considera nescesari amb el boto de close.
 - Es pot afagir llista i eliminar dates de bloqueix on tota la piscina es cesta data bloquejara reserves entrants.
 - Es poden llistar tots els usuaris, fer-los adminsitadors amb un toggle, eliminar totes les rescerves de cert usuari o eliminar el usuari de per si
   - Cal notar que si s'intenta eliminar un usuari que ha creat alguna reserva el programa no et deixara i et mostrada un pagina d'error molt lletja la cual en soc molt concient de la seva existencia.

## Guia d'instalació
Per tal d'utilitzar aquest programa es nescesitara PHP i mysql instal·lat en la maquina
on es vulgui executar.
Tot seguit sera nescesari la inorporacio de la seguant base de dades amb totes les taules peresent en el seguent link
https://marcvidal.notion.site/database-ce62c4531f5341d29b7c28d1d4e07cc9

Cal notar que les insercions tambe son nescesaries per tal que de aquest funcioni

Un cop aquest passos s'aguin complert el progrma auria de funcioanr amb el usuari roor@root.com amb contrasenya root siguent el admin de default
