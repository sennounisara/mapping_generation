<?php


/**
 * Base class that represents a query for the 'champ_supplementaire' table.
 *
 * 
 *
 * @method ChampSupplementaireQuery orderByIdChampSupplementaire($order = Criteria::ASC) Order by the ID_CHAMP_SUPPLEMENTAIRE column
 * @method ChampSupplementaireQuery orderByIdOrganisme($order = Criteria::ASC) Order by the ID_ORGANISME column
 * @method ChampSupplementaireQuery orderByIdTheme($order = Criteria::ASC) Order by the ID_THEME column
 * @method ChampSupplementaireQuery orderByIdAction($order = Criteria::ASC) Order by the ID_ACTION column
 * @method ChampSupplementaireQuery orderByLabelFr1($order = Criteria::ASC) Order by the LABEL_FR1 column
 * @method ChampSupplementaireQuery orderByLabelAr1($order = Criteria::ASC) Order by the LABEL_AR1 column
 * @method ChampSupplementaireQuery orderByLabelCourt1($order = Criteria::ASC) Order by the LABEL_COURT1 column
 * @method ChampSupplementaireQuery orderByType1($order = Criteria::ASC) Order by the TYPE1 column
 * @method ChampSupplementaireQuery orderByObligatoire1($order = Criteria::ASC) Order by the OBLIGATOIRE1 column
 * @method ChampSupplementaireQuery orderByActif1($order = Criteria::ASC) Order by the ACTIF1 column
 * @method ChampSupplementaireQuery orderByVisible1($order = Criteria::ASC) Order by the VISIBLE1 column
 * @method ChampSupplementaireQuery orderByEmplacement1($order = Criteria::ASC) Order by the EMPLACEMENT1 column
 * @method ChampSupplementaireQuery orderByLabelFr2($order = Criteria::ASC) Order by the LABEL_FR2 column
 * @method ChampSupplementaireQuery orderByLabelAr2($order = Criteria::ASC) Order by the LABEL_AR2 column
 * @method ChampSupplementaireQuery orderByLabelCourt2($order = Criteria::ASC) Order by the LABEL_COURT2 column
 * @method ChampSupplementaireQuery orderByType2($order = Criteria::ASC) Order by the TYPE2 column
 * @method ChampSupplementaireQuery orderByObligatoire2($order = Criteria::ASC) Order by the OBLIGATOIRE2 column
 * @method ChampSupplementaireQuery orderByActif2($order = Criteria::ASC) Order by the ACTIF2 column
 * @method ChampSupplementaireQuery orderByVisible2($order = Criteria::ASC) Order by the VISIBLE2 column
 * @method ChampSupplementaireQuery orderByEmplacement2($order = Criteria::ASC) Order by the EMPLACEMENT2 column
 * @method ChampSupplementaireQuery orderByLabelFr3($order = Criteria::ASC) Order by the LABEL_FR3 column
 * @method ChampSupplementaireQuery orderByLabelAr3($order = Criteria::ASC) Order by the LABEL_AR3 column
 * @method ChampSupplementaireQuery orderByLabelCourt3($order = Criteria::ASC) Order by the LABEL_COURT3 column
 * @method ChampSupplementaireQuery orderByType3($order = Criteria::ASC) Order by the TYPE3 column
 * @method ChampSupplementaireQuery orderByObligatoire3($order = Criteria::ASC) Order by the OBLIGATOIRE3 column
 * @method ChampSupplementaireQuery orderByActif3($order = Criteria::ASC) Order by the ACTIF3 column
 * @method ChampSupplementaireQuery orderByVisible3($order = Criteria::ASC) Order by the VISIBLE3 column
 * @method ChampSupplementaireQuery orderByEmplacement3($order = Criteria::ASC) Order by the EMPLACEMENT3 column
 * @method ChampSupplementaireQuery orderByLabelFr4($order = Criteria::ASC) Order by the LABEL_FR4 column
 * @method ChampSupplementaireQuery orderByLabelAr4($order = Criteria::ASC) Order by the LABEL_AR4 column
 * @method ChampSupplementaireQuery orderByLabelCourt4($order = Criteria::ASC) Order by the LABEL_COURT4 column
 * @method ChampSupplementaireQuery orderByType4($order = Criteria::ASC) Order by the TYPE4 column
 * @method ChampSupplementaireQuery orderByObligatoire4($order = Criteria::ASC) Order by the OBLIGATOIRE4 column
 * @method ChampSupplementaireQuery orderByActif4($order = Criteria::ASC) Order by the ACTIF4 column
 * @method ChampSupplementaireQuery orderByVisible4($order = Criteria::ASC) Order by the VISIBLE4 column
 * @method ChampSupplementaireQuery orderByEmplacement4($order = Criteria::ASC) Order by the EMPLACEMENT4 column
 * @method ChampSupplementaireQuery orderByLabelFr5($order = Criteria::ASC) Order by the LABEL_FR5 column
 * @method ChampSupplementaireQuery orderByLabelAr5($order = Criteria::ASC) Order by the LABEL_AR5 column
 * @method ChampSupplementaireQuery orderByLabelCourt5($order = Criteria::ASC) Order by the LABEL_COURT5 column
 * @method ChampSupplementaireQuery orderByType5($order = Criteria::ASC) Order by the TYPE5 column
 * @method ChampSupplementaireQuery orderByObligatoire5($order = Criteria::ASC) Order by the OBLIGATOIRE5 column
 * @method ChampSupplementaireQuery orderByActif5($order = Criteria::ASC) Order by the ACTIF5 column
 * @method ChampSupplementaireQuery orderByVisible5($order = Criteria::ASC) Order by the VISIBLE5 column
 * @method ChampSupplementaireQuery orderByEmplacement5($order = Criteria::ASC) Order by the EMPLACEMENT5 column
 * @method ChampSupplementaireQuery orderByValeurListeFr1($order = Criteria::ASC) Order by the VALEUR_LISTE_FR_1 column
 * @method ChampSupplementaireQuery orderByValeurListeAr1($order = Criteria::ASC) Order by the VALEUR_LISTE_AR_1 column
 * @method ChampSupplementaireQuery orderByValeurListeFr2($order = Criteria::ASC) Order by the VALEUR_LISTE_FR_2 column
 * @method ChampSupplementaireQuery orderByValeurListeAr2($order = Criteria::ASC) Order by the VALEUR_LISTE_AR_2 column
 * @method ChampSupplementaireQuery orderByValeurListeFr3($order = Criteria::ASC) Order by the VALEUR_LISTE_FR_3 column
 * @method ChampSupplementaireQuery orderByValeurListeAr3($order = Criteria::ASC) Order by the VALEUR_LISTE_AR_3 column
 * @method ChampSupplementaireQuery orderByValeurListeFr4($order = Criteria::ASC) Order by the VALEUR_LISTE_FR_4 column
 * @method ChampSupplementaireQuery orderByValeurListeAr4($order = Criteria::ASC) Order by the VALEUR_LISTE_AR_4 column
 * @method ChampSupplementaireQuery orderByValeurListeFr5($order = Criteria::ASC) Order by the VALEUR_LISTE_FR_5 column
 * @method ChampSupplementaireQuery orderByValeurListeAr5($order = Criteria::ASC) Order by the VALEUR_LISTE_AR_5 column
 * @method ChampSupplementaireQuery orderByPosition1($order = Criteria::ASC) Order by the POSITION1 column
 * @method ChampSupplementaireQuery orderByPosition2($order = Criteria::ASC) Order by the POSITION2 column
 * @method ChampSupplementaireQuery orderByPosition3($order = Criteria::ASC) Order by the POSITION3 column
 * @method ChampSupplementaireQuery orderByPosition4($order = Criteria::ASC) Order by the POSITION4 column
 * @method ChampSupplementaireQuery orderByPosition5($order = Criteria::ASC) Order by the POSITION5 column
 * @method ChampSupplementaireQuery orderByVisibleBov1($order = Criteria::ASC) Order by the VISIBLE_BOV1 column
 * @method ChampSupplementaireQuery orderByVisibleBov2($order = Criteria::ASC) Order by the VISIBLE_BOV2 column
 * @method ChampSupplementaireQuery orderByVisibleBov3($order = Criteria::ASC) Order by the VISIBLE_BOV3 column
 * @method ChampSupplementaireQuery orderByVisibleBov4($order = Criteria::ASC) Order by the VISIBLE_BOV4 column
 * @method ChampSupplementaireQuery orderByVisibleBov5($order = Criteria::ASC) Order by the VISIBLE_BOV5 column
 * @method ChampSupplementaireQuery orderByVisibleTableau1($order = Criteria::ASC) Order by the VISIBLE_TABLEAU1 column
 * @method ChampSupplementaireQuery orderByVisibleTableau2($order = Criteria::ASC) Order by the VISIBLE_TABLEAU2 column
 * @method ChampSupplementaireQuery orderByVisibleTableau3($order = Criteria::ASC) Order by the VISIBLE_TABLEAU3 column
 * @method ChampSupplementaireQuery orderByVisibleTableau4($order = Criteria::ASC) Order by the VISIBLE_TABLEAU4 column
 * @method ChampSupplementaireQuery orderByVisibleTableau5($order = Criteria::ASC) Order by the VISIBLE_TABLEAU5 column
 *
 * @method ChampSupplementaireQuery groupByIdChampSupplementaire() Group by the ID_CHAMP_SUPPLEMENTAIRE column
 * @method ChampSupplementaireQuery groupByIdOrganisme() Group by the ID_ORGANISME column
 * @method ChampSupplementaireQuery groupByIdTheme() Group by the ID_THEME column
 * @method ChampSupplementaireQuery groupByIdAction() Group by the ID_ACTION column
 * @method ChampSupplementaireQuery groupByLabelFr1() Group by the LABEL_FR1 column
 * @method ChampSupplementaireQuery groupByLabelAr1() Group by the LABEL_AR1 column
 * @method ChampSupplementaireQuery groupByLabelCourt1() Group by the LABEL_COURT1 column
 * @method ChampSupplementaireQuery groupByType1() Group by the TYPE1 column
 * @method ChampSupplementaireQuery groupByObligatoire1() Group by the OBLIGATOIRE1 column
 * @method ChampSupplementaireQuery groupByActif1() Group by the ACTIF1 column
 * @method ChampSupplementaireQuery groupByVisible1() Group by the VISIBLE1 column
 * @method ChampSupplementaireQuery groupByEmplacement1() Group by the EMPLACEMENT1 column
 * @method ChampSupplementaireQuery groupByLabelFr2() Group by the LABEL_FR2 column
 * @method ChampSupplementaireQuery groupByLabelAr2() Group by the LABEL_AR2 column
 * @method ChampSupplementaireQuery groupByLabelCourt2() Group by the LABEL_COURT2 column
 * @method ChampSupplementaireQuery groupByType2() Group by the TYPE2 column
 * @method ChampSupplementaireQuery groupByObligatoire2() Group by the OBLIGATOIRE2 column
 * @method ChampSupplementaireQuery groupByActif2() Group by the ACTIF2 column
 * @method ChampSupplementaireQuery groupByVisible2() Group by the VISIBLE2 column
 * @method ChampSupplementaireQuery groupByEmplacement2() Group by the EMPLACEMENT2 column
 * @method ChampSupplementaireQuery groupByLabelFr3() Group by the LABEL_FR3 column
 * @method ChampSupplementaireQuery groupByLabelAr3() Group by the LABEL_AR3 column
 * @method ChampSupplementaireQuery groupByLabelCourt3() Group by the LABEL_COURT3 column
 * @method ChampSupplementaireQuery groupByType3() Group by the TYPE3 column
 * @method ChampSupplementaireQuery groupByObligatoire3() Group by the OBLIGATOIRE3 column
 * @method ChampSupplementaireQuery groupByActif3() Group by the ACTIF3 column
 * @method ChampSupplementaireQuery groupByVisible3() Group by the VISIBLE3 column
 * @method ChampSupplementaireQuery groupByEmplacement3() Group by the EMPLACEMENT3 column
 * @method ChampSupplementaireQuery groupByLabelFr4() Group by the LABEL_FR4 column
 * @method ChampSupplementaireQuery groupByLabelAr4() Group by the LABEL_AR4 column
 * @method ChampSupplementaireQuery groupByLabelCourt4() Group by the LABEL_COURT4 column
 * @method ChampSupplementaireQuery groupByType4() Group by the TYPE4 column
 * @method ChampSupplementaireQuery groupByObligatoire4() Group by the OBLIGATOIRE4 column
 * @method ChampSupplementaireQuery groupByActif4() Group by the ACTIF4 column
 * @method ChampSupplementaireQuery groupByVisible4() Group by the VISIBLE4 column
 * @method ChampSupplementaireQuery groupByEmplacement4() Group by the EMPLACEMENT4 column
 * @method ChampSupplementaireQuery groupByLabelFr5() Group by the LABEL_FR5 column
 * @method ChampSupplementaireQuery groupByLabelAr5() Group by the LABEL_AR5 column
 * @method ChampSupplementaireQuery groupByLabelCourt5() Group by the LABEL_COURT5 column
 * @method ChampSupplementaireQuery groupByType5() Group by the TYPE5 column
 * @method ChampSupplementaireQuery groupByObligatoire5() Group by the OBLIGATOIRE5 column
 * @method ChampSupplementaireQuery groupByActif5() Group by the ACTIF5 column
 * @method ChampSupplementaireQuery groupByVisible5() Group by the VISIBLE5 column
 * @method ChampSupplementaireQuery groupByEmplacement5() Group by the EMPLACEMENT5 column
 * @method ChampSupplementaireQuery groupByValeurListeFr1() Group by the VALEUR_LISTE_FR_1 column
 * @method ChampSupplementaireQuery groupByValeurListeAr1() Group by the VALEUR_LISTE_AR_1 column
 * @method ChampSupplementaireQuery groupByValeurListeFr2() Group by the VALEUR_LISTE_FR_2 column
 * @method ChampSupplementaireQuery groupByValeurListeAr2() Group by the VALEUR_LISTE_AR_2 column
 * @method ChampSupplementaireQuery groupByValeurListeFr3() Group by the VALEUR_LISTE_FR_3 column
 * @method ChampSupplementaireQuery groupByValeurListeAr3() Group by the VALEUR_LISTE_AR_3 column
 * @method ChampSupplementaireQuery groupByValeurListeFr4() Group by the VALEUR_LISTE_FR_4 column
 * @method ChampSupplementaireQuery groupByValeurListeAr4() Group by the VALEUR_LISTE_AR_4 column
 * @method ChampSupplementaireQuery groupByValeurListeFr5() Group by the VALEUR_LISTE_FR_5 column
 * @method ChampSupplementaireQuery groupByValeurListeAr5() Group by the VALEUR_LISTE_AR_5 column
 * @method ChampSupplementaireQuery groupByPosition1() Group by the POSITION1 column
 * @method ChampSupplementaireQuery groupByPosition2() Group by the POSITION2 column
 * @method ChampSupplementaireQuery groupByPosition3() Group by the POSITION3 column
 * @method ChampSupplementaireQuery groupByPosition4() Group by the POSITION4 column
 * @method ChampSupplementaireQuery groupByPosition5() Group by the POSITION5 column
 * @method ChampSupplementaireQuery groupByVisibleBov1() Group by the VISIBLE_BOV1 column
 * @method ChampSupplementaireQuery groupByVisibleBov2() Group by the VISIBLE_BOV2 column
 * @method ChampSupplementaireQuery groupByVisibleBov3() Group by the VISIBLE_BOV3 column
 * @method ChampSupplementaireQuery groupByVisibleBov4() Group by the VISIBLE_BOV4 column
 * @method ChampSupplementaireQuery groupByVisibleBov5() Group by the VISIBLE_BOV5 column
 * @method ChampSupplementaireQuery groupByVisibleTableau1() Group by the VISIBLE_TABLEAU1 column
 * @method ChampSupplementaireQuery groupByVisibleTableau2() Group by the VISIBLE_TABLEAU2 column
 * @method ChampSupplementaireQuery groupByVisibleTableau3() Group by the VISIBLE_TABLEAU3 column
 * @method ChampSupplementaireQuery groupByVisibleTableau4() Group by the VISIBLE_TABLEAU4 column
 * @method ChampSupplementaireQuery groupByVisibleTableau5() Group by the VISIBLE_TABLEAU5 column
 *
 * @method ChampSupplementaireQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method ChampSupplementaireQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method ChampSupplementaireQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method ChampSupplementaire findOne(PropelPDO $con = null) Return the first ChampSupplementaire matching the query
 * @method ChampSupplementaire findOneOrCreate(PropelPDO $con = null) Return the first ChampSupplementaire matching the query, or a new ChampSupplementaire object populated from the query conditions when no match is found
 *
 * @method ChampSupplementaire findOneByIdOrganisme(int $ID_ORGANISME) Return the first ChampSupplementaire filtered by the ID_ORGANISME column
 * @method ChampSupplementaire findOneByIdTheme(int $ID_THEME) Return the first ChampSupplementaire filtered by the ID_THEME column
 * @method ChampSupplementaire findOneByIdAction(int $ID_ACTION) Return the first ChampSupplementaire filtered by the ID_ACTION column
 * @method ChampSupplementaire findOneByLabelFr1(string $LABEL_FR1) Return the first ChampSupplementaire filtered by the LABEL_FR1 column
 * @method ChampSupplementaire findOneByLabelAr1(string $LABEL_AR1) Return the first ChampSupplementaire filtered by the LABEL_AR1 column
 * @method ChampSupplementaire findOneByLabelCourt1(string $LABEL_COURT1) Return the first ChampSupplementaire filtered by the LABEL_COURT1 column
 * @method ChampSupplementaire findOneByType1(int $TYPE1) Return the first ChampSupplementaire filtered by the TYPE1 column
 * @method ChampSupplementaire findOneByObligatoire1(string $OBLIGATOIRE1) Return the first ChampSupplementaire filtered by the OBLIGATOIRE1 column
 * @method ChampSupplementaire findOneByActif1(string $ACTIF1) Return the first ChampSupplementaire filtered by the ACTIF1 column
 * @method ChampSupplementaire findOneByVisible1(string $VISIBLE1) Return the first ChampSupplementaire filtered by the VISIBLE1 column
 * @method ChampSupplementaire findOneByEmplacement1(string $EMPLACEMENT1) Return the first ChampSupplementaire filtered by the EMPLACEMENT1 column
 * @method ChampSupplementaire findOneByLabelFr2(string $LABEL_FR2) Return the first ChampSupplementaire filtered by the LABEL_FR2 column
 * @method ChampSupplementaire findOneByLabelAr2(string $LABEL_AR2) Return the first ChampSupplementaire filtered by the LABEL_AR2 column
 * @method ChampSupplementaire findOneByLabelCourt2(string $LABEL_COURT2) Return the first ChampSupplementaire filtered by the LABEL_COURT2 column
 * @method ChampSupplementaire findOneByType2(string $TYPE2) Return the first ChampSupplementaire filtered by the TYPE2 column
 * @method ChampSupplementaire findOneByObligatoire2(string $OBLIGATOIRE2) Return the first ChampSupplementaire filtered by the OBLIGATOIRE2 column
 * @method ChampSupplementaire findOneByActif2(string $ACTIF2) Return the first ChampSupplementaire filtered by the ACTIF2 column
 * @method ChampSupplementaire findOneByVisible2(string $VISIBLE2) Return the first ChampSupplementaire filtered by the VISIBLE2 column
 * @method ChampSupplementaire findOneByEmplacement2(string $EMPLACEMENT2) Return the first ChampSupplementaire filtered by the EMPLACEMENT2 column
 * @method ChampSupplementaire findOneByLabelFr3(string $LABEL_FR3) Return the first ChampSupplementaire filtered by the LABEL_FR3 column
 * @method ChampSupplementaire findOneByLabelAr3(string $LABEL_AR3) Return the first ChampSupplementaire filtered by the LABEL_AR3 column
 * @method ChampSupplementaire findOneByLabelCourt3(string $LABEL_COURT3) Return the first ChampSupplementaire filtered by the LABEL_COURT3 column
 * @method ChampSupplementaire findOneByType3(string $TYPE3) Return the first ChampSupplementaire filtered by the TYPE3 column
 * @method ChampSupplementaire findOneByObligatoire3(string $OBLIGATOIRE3) Return the first ChampSupplementaire filtered by the OBLIGATOIRE3 column
 * @method ChampSupplementaire findOneByActif3(string $ACTIF3) Return the first ChampSupplementaire filtered by the ACTIF3 column
 * @method ChampSupplementaire findOneByVisible3(string $VISIBLE3) Return the first ChampSupplementaire filtered by the VISIBLE3 column
 * @method ChampSupplementaire findOneByEmplacement3(string $EMPLACEMENT3) Return the first ChampSupplementaire filtered by the EMPLACEMENT3 column
 * @method ChampSupplementaire findOneByLabelFr4(string $LABEL_FR4) Return the first ChampSupplementaire filtered by the LABEL_FR4 column
 * @method ChampSupplementaire findOneByLabelAr4(string $LABEL_AR4) Return the first ChampSupplementaire filtered by the LABEL_AR4 column
 * @method ChampSupplementaire findOneByLabelCourt4(string $LABEL_COURT4) Return the first ChampSupplementaire filtered by the LABEL_COURT4 column
 * @method ChampSupplementaire findOneByType4(string $TYPE4) Return the first ChampSupplementaire filtered by the TYPE4 column
 * @method ChampSupplementaire findOneByObligatoire4(string $OBLIGATOIRE4) Return the first ChampSupplementaire filtered by the OBLIGATOIRE4 column
 * @method ChampSupplementaire findOneByActif4(string $ACTIF4) Return the first ChampSupplementaire filtered by the ACTIF4 column
 * @method ChampSupplementaire findOneByVisible4(string $VISIBLE4) Return the first ChampSupplementaire filtered by the VISIBLE4 column
 * @method ChampSupplementaire findOneByEmplacement4(string $EMPLACEMENT4) Return the first ChampSupplementaire filtered by the EMPLACEMENT4 column
 * @method ChampSupplementaire findOneByLabelFr5(string $LABEL_FR5) Return the first ChampSupplementaire filtered by the LABEL_FR5 column
 * @method ChampSupplementaire findOneByLabelAr5(string $LABEL_AR5) Return the first ChampSupplementaire filtered by the LABEL_AR5 column
 * @method ChampSupplementaire findOneByLabelCourt5(string $LABEL_COURT5) Return the first ChampSupplementaire filtered by the LABEL_COURT5 column
 * @method ChampSupplementaire findOneByType5(string $TYPE5) Return the first ChampSupplementaire filtered by the TYPE5 column
 * @method ChampSupplementaire findOneByObligatoire5(string $OBLIGATOIRE5) Return the first ChampSupplementaire filtered by the OBLIGATOIRE5 column
 * @method ChampSupplementaire findOneByActif5(string $ACTIF5) Return the first ChampSupplementaire filtered by the ACTIF5 column
 * @method ChampSupplementaire findOneByVisible5(string $VISIBLE5) Return the first ChampSupplementaire filtered by the VISIBLE5 column
 * @method ChampSupplementaire findOneByEmplacement5(string $EMPLACEMENT5) Return the first ChampSupplementaire filtered by the EMPLACEMENT5 column
 * @method ChampSupplementaire findOneByValeurListeFr1(string $VALEUR_LISTE_FR_1) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_FR_1 column
 * @method ChampSupplementaire findOneByValeurListeAr1(string $VALEUR_LISTE_AR_1) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_AR_1 column
 * @method ChampSupplementaire findOneByValeurListeFr2(string $VALEUR_LISTE_FR_2) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_FR_2 column
 * @method ChampSupplementaire findOneByValeurListeAr2(string $VALEUR_LISTE_AR_2) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_AR_2 column
 * @method ChampSupplementaire findOneByValeurListeFr3(string $VALEUR_LISTE_FR_3) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_FR_3 column
 * @method ChampSupplementaire findOneByValeurListeAr3(string $VALEUR_LISTE_AR_3) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_AR_3 column
 * @method ChampSupplementaire findOneByValeurListeFr4(string $VALEUR_LISTE_FR_4) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_FR_4 column
 * @method ChampSupplementaire findOneByValeurListeAr4(string $VALEUR_LISTE_AR_4) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_AR_4 column
 * @method ChampSupplementaire findOneByValeurListeFr5(string $VALEUR_LISTE_FR_5) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_FR_5 column
 * @method ChampSupplementaire findOneByValeurListeAr5(string $VALEUR_LISTE_AR_5) Return the first ChampSupplementaire filtered by the VALEUR_LISTE_AR_5 column
 * @method ChampSupplementaire findOneByPosition1(string $POSITION1) Return the first ChampSupplementaire filtered by the POSITION1 column
 * @method ChampSupplementaire findOneByPosition2(string $POSITION2) Return the first ChampSupplementaire filtered by the POSITION2 column
 * @method ChampSupplementaire findOneByPosition3(string $POSITION3) Return the first ChampSupplementaire filtered by the POSITION3 column
 * @method ChampSupplementaire findOneByPosition4(string $POSITION4) Return the first ChampSupplementaire filtered by the POSITION4 column
 * @method ChampSupplementaire findOneByPosition5(string $POSITION5) Return the first ChampSupplementaire filtered by the POSITION5 column
 * @method ChampSupplementaire findOneByVisibleBov1(string $VISIBLE_BOV1) Return the first ChampSupplementaire filtered by the VISIBLE_BOV1 column
 * @method ChampSupplementaire findOneByVisibleBov2(string $VISIBLE_BOV2) Return the first ChampSupplementaire filtered by the VISIBLE_BOV2 column
 * @method ChampSupplementaire findOneByVisibleBov3(string $VISIBLE_BOV3) Return the first ChampSupplementaire filtered by the VISIBLE_BOV3 column
 * @method ChampSupplementaire findOneByVisibleBov4(string $VISIBLE_BOV4) Return the first ChampSupplementaire filtered by the VISIBLE_BOV4 column
 * @method ChampSupplementaire findOneByVisibleBov5(string $VISIBLE_BOV5) Return the first ChampSupplementaire filtered by the VISIBLE_BOV5 column
 * @method ChampSupplementaire findOneByVisibleTableau1(string $VISIBLE_TABLEAU1) Return the first ChampSupplementaire filtered by the VISIBLE_TABLEAU1 column
 * @method ChampSupplementaire findOneByVisibleTableau2(string $VISIBLE_TABLEAU2) Return the first ChampSupplementaire filtered by the VISIBLE_TABLEAU2 column
 * @method ChampSupplementaire findOneByVisibleTableau3(string $VISIBLE_TABLEAU3) Return the first ChampSupplementaire filtered by the VISIBLE_TABLEAU3 column
 * @method ChampSupplementaire findOneByVisibleTableau4(string $VISIBLE_TABLEAU4) Return the first ChampSupplementaire filtered by the VISIBLE_TABLEAU4 column
 * @method ChampSupplementaire findOneByVisibleTableau5(string $VISIBLE_TABLEAU5) Return the first ChampSupplementaire filtered by the VISIBLE_TABLEAU5 column
 *
 * @method array findByIdChampSupplementaire(int $ID_CHAMP_SUPPLEMENTAIRE) Return ChampSupplementaire objects filtered by the ID_CHAMP_SUPPLEMENTAIRE column
 * @method array findByIdOrganisme(int $ID_ORGANISME) Return ChampSupplementaire objects filtered by the ID_ORGANISME column
 * @method array findByIdTheme(int $ID_THEME) Return ChampSupplementaire objects filtered by the ID_THEME column
 * @method array findByIdAction(int $ID_ACTION) Return ChampSupplementaire objects filtered by the ID_ACTION column
 * @method array findByLabelFr1(string $LABEL_FR1) Return ChampSupplementaire objects filtered by the LABEL_FR1 column
 * @method array findByLabelAr1(string $LABEL_AR1) Return ChampSupplementaire objects filtered by the LABEL_AR1 column
 * @method array findByLabelCourt1(string $LABEL_COURT1) Return ChampSupplementaire objects filtered by the LABEL_COURT1 column
 * @method array findByType1(int $TYPE1) Return ChampSupplementaire objects filtered by the TYPE1 column
 * @method array findByObligatoire1(string $OBLIGATOIRE1) Return ChampSupplementaire objects filtered by the OBLIGATOIRE1 column
 * @method array findByActif1(string $ACTIF1) Return ChampSupplementaire objects filtered by the ACTIF1 column
 * @method array findByVisible1(string $VISIBLE1) Return ChampSupplementaire objects filtered by the VISIBLE1 column
 * @method array findByEmplacement1(string $EMPLACEMENT1) Return ChampSupplementaire objects filtered by the EMPLACEMENT1 column
 * @method array findByLabelFr2(string $LABEL_FR2) Return ChampSupplementaire objects filtered by the LABEL_FR2 column
 * @method array findByLabelAr2(string $LABEL_AR2) Return ChampSupplementaire objects filtered by the LABEL_AR2 column
 * @method array findByLabelCourt2(string $LABEL_COURT2) Return ChampSupplementaire objects filtered by the LABEL_COURT2 column
 * @method array findByType2(string $TYPE2) Return ChampSupplementaire objects filtered by the TYPE2 column
 * @method array findByObligatoire2(string $OBLIGATOIRE2) Return ChampSupplementaire objects filtered by the OBLIGATOIRE2 column
 * @method array findByActif2(string $ACTIF2) Return ChampSupplementaire objects filtered by the ACTIF2 column
 * @method array findByVisible2(string $VISIBLE2) Return ChampSupplementaire objects filtered by the VISIBLE2 column
 * @method array findByEmplacement2(string $EMPLACEMENT2) Return ChampSupplementaire objects filtered by the EMPLACEMENT2 column
 * @method array findByLabelFr3(string $LABEL_FR3) Return ChampSupplementaire objects filtered by the LABEL_FR3 column
 * @method array findByLabelAr3(string $LABEL_AR3) Return ChampSupplementaire objects filtered by the LABEL_AR3 column
 * @method array findByLabelCourt3(string $LABEL_COURT3) Return ChampSupplementaire objects filtered by the LABEL_COURT3 column
 * @method array findByType3(string $TYPE3) Return ChampSupplementaire objects filtered by the TYPE3 column
 * @method array findByObligatoire3(string $OBLIGATOIRE3) Return ChampSupplementaire objects filtered by the OBLIGATOIRE3 column
 * @method array findByActif3(string $ACTIF3) Return ChampSupplementaire objects filtered by the ACTIF3 column
 * @method array findByVisible3(string $VISIBLE3) Return ChampSupplementaire objects filtered by the VISIBLE3 column
 * @method array findByEmplacement3(string $EMPLACEMENT3) Return ChampSupplementaire objects filtered by the EMPLACEMENT3 column
 * @method array findByLabelFr4(string $LABEL_FR4) Return ChampSupplementaire objects filtered by the LABEL_FR4 column
 * @method array findByLabelAr4(string $LABEL_AR4) Return ChampSupplementaire objects filtered by the LABEL_AR4 column
 * @method array findByLabelCourt4(string $LABEL_COURT4) Return ChampSupplementaire objects filtered by the LABEL_COURT4 column
 * @method array findByType4(string $TYPE4) Return ChampSupplementaire objects filtered by the TYPE4 column
 * @method array findByObligatoire4(string $OBLIGATOIRE4) Return ChampSupplementaire objects filtered by the OBLIGATOIRE4 column
 * @method array findByActif4(string $ACTIF4) Return ChampSupplementaire objects filtered by the ACTIF4 column
 * @method array findByVisible4(string $VISIBLE4) Return ChampSupplementaire objects filtered by the VISIBLE4 column
 * @method array findByEmplacement4(string $EMPLACEMENT4) Return ChampSupplementaire objects filtered by the EMPLACEMENT4 column
 * @method array findByLabelFr5(string $LABEL_FR5) Return ChampSupplementaire objects filtered by the LABEL_FR5 column
 * @method array findByLabelAr5(string $LABEL_AR5) Return ChampSupplementaire objects filtered by the LABEL_AR5 column
 * @method array findByLabelCourt5(string $LABEL_COURT5) Return ChampSupplementaire objects filtered by the LABEL_COURT5 column
 * @method array findByType5(string $TYPE5) Return ChampSupplementaire objects filtered by the TYPE5 column
 * @method array findByObligatoire5(string $OBLIGATOIRE5) Return ChampSupplementaire objects filtered by the OBLIGATOIRE5 column
 * @method array findByActif5(string $ACTIF5) Return ChampSupplementaire objects filtered by the ACTIF5 column
 * @method array findByVisible5(string $VISIBLE5) Return ChampSupplementaire objects filtered by the VISIBLE5 column
 * @method array findByEmplacement5(string $EMPLACEMENT5) Return ChampSupplementaire objects filtered by the EMPLACEMENT5 column
 * @method array findByValeurListeFr1(string $VALEUR_LISTE_FR_1) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_FR_1 column
 * @method array findByValeurListeAr1(string $VALEUR_LISTE_AR_1) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_AR_1 column
 * @method array findByValeurListeFr2(string $VALEUR_LISTE_FR_2) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_FR_2 column
 * @method array findByValeurListeAr2(string $VALEUR_LISTE_AR_2) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_AR_2 column
 * @method array findByValeurListeFr3(string $VALEUR_LISTE_FR_3) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_FR_3 column
 * @method array findByValeurListeAr3(string $VALEUR_LISTE_AR_3) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_AR_3 column
 * @method array findByValeurListeFr4(string $VALEUR_LISTE_FR_4) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_FR_4 column
 * @method array findByValeurListeAr4(string $VALEUR_LISTE_AR_4) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_AR_4 column
 * @method array findByValeurListeFr5(string $VALEUR_LISTE_FR_5) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_FR_5 column
 * @method array findByValeurListeAr5(string $VALEUR_LISTE_AR_5) Return ChampSupplementaire objects filtered by the VALEUR_LISTE_AR_5 column
 * @method array findByPosition1(string $POSITION1) Return ChampSupplementaire objects filtered by the POSITION1 column
 * @method array findByPosition2(string $POSITION2) Return ChampSupplementaire objects filtered by the POSITION2 column
 * @method array findByPosition3(string $POSITION3) Return ChampSupplementaire objects filtered by the POSITION3 column
 * @method array findByPosition4(string $POSITION4) Return ChampSupplementaire objects filtered by the POSITION4 column
 * @method array findByPosition5(string $POSITION5) Return ChampSupplementaire objects filtered by the POSITION5 column
 * @method array findByVisibleBov1(string $VISIBLE_BOV1) Return ChampSupplementaire objects filtered by the VISIBLE_BOV1 column
 * @method array findByVisibleBov2(string $VISIBLE_BOV2) Return ChampSupplementaire objects filtered by the VISIBLE_BOV2 column
 * @method array findByVisibleBov3(string $VISIBLE_BOV3) Return ChampSupplementaire objects filtered by the VISIBLE_BOV3 column
 * @method array findByVisibleBov4(string $VISIBLE_BOV4) Return ChampSupplementaire objects filtered by the VISIBLE_BOV4 column
 * @method array findByVisibleBov5(string $VISIBLE_BOV5) Return ChampSupplementaire objects filtered by the VISIBLE_BOV5 column
 * @method array findByVisibleTableau1(string $VISIBLE_TABLEAU1) Return ChampSupplementaire objects filtered by the VISIBLE_TABLEAU1 column
 * @method array findByVisibleTableau2(string $VISIBLE_TABLEAU2) Return ChampSupplementaire objects filtered by the VISIBLE_TABLEAU2 column
 * @method array findByVisibleTableau3(string $VISIBLE_TABLEAU3) Return ChampSupplementaire objects filtered by the VISIBLE_TABLEAU3 column
 * @method array findByVisibleTableau4(string $VISIBLE_TABLEAU4) Return ChampSupplementaire objects filtered by the VISIBLE_TABLEAU4 column
 * @method array findByVisibleTableau5(string $VISIBLE_TABLEAU5) Return ChampSupplementaire objects filtered by the VISIBLE_TABLEAU5 column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseChampSupplementaireQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseChampSupplementaireQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'ChampSupplementaire', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChampSupplementaireQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   ChampSupplementaireQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChampSupplementaireQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ChampSupplementaireQuery) {
            return $criteria;
        }
        $query = new ChampSupplementaireQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query 
     * @param     PropelPDO $con an optional connection object
     *
     * @return   ChampSupplementaire|ChampSupplementaire[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = ChampSupplementairePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(ChampSupplementairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        if ($this->formatter || $this->modelAlias || $this->with || $this->select
         || $this->selectColumns || $this->asColumns || $this->selectModifiers
         || $this->map || $this->having || $this->joins) {
            return $this->findPkComplex($key, $con);
        } else {
            return $this->findPkSimple($key, $con);
        }
    }

    /**
     * Alias of findPk to use instance pooling
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ChampSupplementaire A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdChampSupplementaire($key, $con = null)
     {
        return $this->findPk($key, $con);
     }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 ChampSupplementaire A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_CHAMP_SUPPLEMENTAIRE`, `ID_ORGANISME`, `ID_THEME`, `ID_ACTION`, `LABEL_FR1`, `LABEL_AR1`, `LABEL_COURT1`, `TYPE1`, `OBLIGATOIRE1`, `ACTIF1`, `VISIBLE1`, `EMPLACEMENT1`, `LABEL_FR2`, `LABEL_AR2`, `LABEL_COURT2`, `TYPE2`, `OBLIGATOIRE2`, `ACTIF2`, `VISIBLE2`, `EMPLACEMENT2`, `LABEL_FR3`, `LABEL_AR3`, `LABEL_COURT3`, `TYPE3`, `OBLIGATOIRE3`, `ACTIF3`, `VISIBLE3`, `EMPLACEMENT3`, `LABEL_FR4`, `LABEL_AR4`, `LABEL_COURT4`, `TYPE4`, `OBLIGATOIRE4`, `ACTIF4`, `VISIBLE4`, `EMPLACEMENT4`, `LABEL_FR5`, `LABEL_AR5`, `LABEL_COURT5`, `TYPE5`, `OBLIGATOIRE5`, `ACTIF5`, `VISIBLE5`, `EMPLACEMENT5`, `VALEUR_LISTE_FR_1`, `VALEUR_LISTE_AR_1`, `VALEUR_LISTE_FR_2`, `VALEUR_LISTE_AR_2`, `VALEUR_LISTE_FR_3`, `VALEUR_LISTE_AR_3`, `VALEUR_LISTE_FR_4`, `VALEUR_LISTE_AR_4`, `VALEUR_LISTE_FR_5`, `VALEUR_LISTE_AR_5`, `POSITION1`, `POSITION2`, `POSITION3`, `POSITION4`, `POSITION5`, `VISIBLE_BOV1`, `VISIBLE_BOV2`, `VISIBLE_BOV3`, `VISIBLE_BOV4`, `VISIBLE_BOV5`, `VISIBLE_TABLEAU1`, `VISIBLE_TABLEAU2`, `VISIBLE_TABLEAU3`, `VISIBLE_TABLEAU4`, `VISIBLE_TABLEAU5` FROM `champ_supplementaire` WHERE `ID_CHAMP_SUPPLEMENTAIRE` = :p0';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new ChampSupplementaire();
            $obj->hydrate($row);
            ChampSupplementairePeer::addInstanceToPool($obj, (string) $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return ChampSupplementaire|ChampSupplementaire[]|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|ChampSupplementaire[]|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection($this->getDbName(), Propel::CONNECTION_READ);
        }
        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $stmt = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($stmt);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_CHAMP_SUPPLEMENTAIRE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdChampSupplementaire(1234); // WHERE ID_CHAMP_SUPPLEMENTAIRE = 1234
     * $query->filterByIdChampSupplementaire(array(12, 34)); // WHERE ID_CHAMP_SUPPLEMENTAIRE IN (12, 34)
     * $query->filterByIdChampSupplementaire(array('min' => 12)); // WHERE ID_CHAMP_SUPPLEMENTAIRE >= 12
     * $query->filterByIdChampSupplementaire(array('max' => 12)); // WHERE ID_CHAMP_SUPPLEMENTAIRE <= 12
     * </code>
     *
     * @param     mixed $idChampSupplementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByIdChampSupplementaire($idChampSupplementaire = null, $comparison = null)
    {
        if (is_array($idChampSupplementaire)) {
            $useMinMax = false;
            if (isset($idChampSupplementaire['min'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $idChampSupplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idChampSupplementaire['max'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $idChampSupplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $idChampSupplementaire, $comparison);
    }

    /**
     * Filter the query on the ID_ORGANISME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdOrganisme(1234); // WHERE ID_ORGANISME = 1234
     * $query->filterByIdOrganisme(array(12, 34)); // WHERE ID_ORGANISME IN (12, 34)
     * $query->filterByIdOrganisme(array('min' => 12)); // WHERE ID_ORGANISME >= 12
     * $query->filterByIdOrganisme(array('max' => 12)); // WHERE ID_ORGANISME <= 12
     * </code>
     *
     * @param     mixed $idOrganisme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByIdOrganisme($idOrganisme = null, $comparison = null)
    {
        if (is_array($idOrganisme)) {
            $useMinMax = false;
            if (isset($idOrganisme['min'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_ORGANISME, $idOrganisme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idOrganisme['max'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_ORGANISME, $idOrganisme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ID_ORGANISME, $idOrganisme, $comparison);
    }

    /**
     * Filter the query on the ID_THEME column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTheme(1234); // WHERE ID_THEME = 1234
     * $query->filterByIdTheme(array(12, 34)); // WHERE ID_THEME IN (12, 34)
     * $query->filterByIdTheme(array('min' => 12)); // WHERE ID_THEME >= 12
     * $query->filterByIdTheme(array('max' => 12)); // WHERE ID_THEME <= 12
     * </code>
     *
     * @param     mixed $idTheme The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByIdTheme($idTheme = null, $comparison = null)
    {
        if (is_array($idTheme)) {
            $useMinMax = false;
            if (isset($idTheme['min'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_THEME, $idTheme['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTheme['max'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_THEME, $idTheme['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ID_THEME, $idTheme, $comparison);
    }

    /**
     * Filter the query on the ID_ACTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAction(1234); // WHERE ID_ACTION = 1234
     * $query->filterByIdAction(array(12, 34)); // WHERE ID_ACTION IN (12, 34)
     * $query->filterByIdAction(array('min' => 12)); // WHERE ID_ACTION >= 12
     * $query->filterByIdAction(array('max' => 12)); // WHERE ID_ACTION <= 12
     * </code>
     *
     * @param     mixed $idAction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByIdAction($idAction = null, $comparison = null)
    {
        if (is_array($idAction)) {
            $useMinMax = false;
            if (isset($idAction['min'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_ACTION, $idAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAction['max'])) {
                $this->addUsingAlias(ChampSupplementairePeer::ID_ACTION, $idAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ID_ACTION, $idAction, $comparison);
    }

    /**
     * Filter the query on the LABEL_FR1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelFr1('fooValue');   // WHERE LABEL_FR1 = 'fooValue'
     * $query->filterByLabelFr1('%fooValue%'); // WHERE LABEL_FR1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelFr1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelFr1($labelFr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelFr1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelFr1)) {
                $labelFr1 = str_replace('*', '%', $labelFr1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_FR1, $labelFr1, $comparison);
    }

    /**
     * Filter the query on the LABEL_AR1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelAr1('fooValue');   // WHERE LABEL_AR1 = 'fooValue'
     * $query->filterByLabelAr1('%fooValue%'); // WHERE LABEL_AR1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelAr1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelAr1($labelAr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelAr1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelAr1)) {
                $labelAr1 = str_replace('*', '%', $labelAr1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_AR1, $labelAr1, $comparison);
    }

    /**
     * Filter the query on the LABEL_COURT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelCourt1('fooValue');   // WHERE LABEL_COURT1 = 'fooValue'
     * $query->filterByLabelCourt1('%fooValue%'); // WHERE LABEL_COURT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelCourt1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelCourt1($labelCourt1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelCourt1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelCourt1)) {
                $labelCourt1 = str_replace('*', '%', $labelCourt1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_COURT1, $labelCourt1, $comparison);
    }

    /**
     * Filter the query on the TYPE1 column
     *
     * Example usage:
     * <code>
     * $query->filterByType1(1234); // WHERE TYPE1 = 1234
     * $query->filterByType1(array(12, 34)); // WHERE TYPE1 IN (12, 34)
     * $query->filterByType1(array('min' => 12)); // WHERE TYPE1 >= 12
     * $query->filterByType1(array('max' => 12)); // WHERE TYPE1 <= 12
     * </code>
     *
     * @param     mixed $type1 The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByType1($type1 = null, $comparison = null)
    {
        if (is_array($type1)) {
            $useMinMax = false;
            if (isset($type1['min'])) {
                $this->addUsingAlias(ChampSupplementairePeer::TYPE1, $type1['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($type1['max'])) {
                $this->addUsingAlias(ChampSupplementairePeer::TYPE1, $type1['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::TYPE1, $type1, $comparison);
    }

    /**
     * Filter the query on the OBLIGATOIRE1 column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire1('fooValue');   // WHERE OBLIGATOIRE1 = 'fooValue'
     * $query->filterByObligatoire1('%fooValue%'); // WHERE OBLIGATOIRE1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByObligatoire1($obligatoire1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire1)) {
                $obligatoire1 = str_replace('*', '%', $obligatoire1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::OBLIGATOIRE1, $obligatoire1, $comparison);
    }

    /**
     * Filter the query on the ACTIF1 column
     *
     * Example usage:
     * <code>
     * $query->filterByActif1('fooValue');   // WHERE ACTIF1 = 'fooValue'
     * $query->filterByActif1('%fooValue%'); // WHERE ACTIF1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByActif1($actif1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif1)) {
                $actif1 = str_replace('*', '%', $actif1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ACTIF1, $actif1, $comparison);
    }

    /**
     * Filter the query on the VISIBLE1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible1('fooValue');   // WHERE VISIBLE1 = 'fooValue'
     * $query->filterByVisible1('%fooValue%'); // WHERE VISIBLE1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisible1($visible1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible1)) {
                $visible1 = str_replace('*', '%', $visible1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE1, $visible1, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT1 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacement1('fooValue');   // WHERE EMPLACEMENT1 = 'fooValue'
     * $query->filterByEmplacement1('%fooValue%'); // WHERE EMPLACEMENT1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacement1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByEmplacement1($emplacement1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacement1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacement1)) {
                $emplacement1 = str_replace('*', '%', $emplacement1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::EMPLACEMENT1, $emplacement1, $comparison);
    }

    /**
     * Filter the query on the LABEL_FR2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelFr2('fooValue');   // WHERE LABEL_FR2 = 'fooValue'
     * $query->filterByLabelFr2('%fooValue%'); // WHERE LABEL_FR2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelFr2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelFr2($labelFr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelFr2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelFr2)) {
                $labelFr2 = str_replace('*', '%', $labelFr2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_FR2, $labelFr2, $comparison);
    }

    /**
     * Filter the query on the LABEL_AR2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelAr2('fooValue');   // WHERE LABEL_AR2 = 'fooValue'
     * $query->filterByLabelAr2('%fooValue%'); // WHERE LABEL_AR2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelAr2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelAr2($labelAr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelAr2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelAr2)) {
                $labelAr2 = str_replace('*', '%', $labelAr2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_AR2, $labelAr2, $comparison);
    }

    /**
     * Filter the query on the LABEL_COURT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelCourt2('fooValue');   // WHERE LABEL_COURT2 = 'fooValue'
     * $query->filterByLabelCourt2('%fooValue%'); // WHERE LABEL_COURT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelCourt2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelCourt2($labelCourt2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelCourt2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelCourt2)) {
                $labelCourt2 = str_replace('*', '%', $labelCourt2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_COURT2, $labelCourt2, $comparison);
    }

    /**
     * Filter the query on the TYPE2 column
     *
     * Example usage:
     * <code>
     * $query->filterByType2('fooValue');   // WHERE TYPE2 = 'fooValue'
     * $query->filterByType2('%fooValue%'); // WHERE TYPE2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByType2($type2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type2)) {
                $type2 = str_replace('*', '%', $type2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::TYPE2, $type2, $comparison);
    }

    /**
     * Filter the query on the OBLIGATOIRE2 column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire2('fooValue');   // WHERE OBLIGATOIRE2 = 'fooValue'
     * $query->filterByObligatoire2('%fooValue%'); // WHERE OBLIGATOIRE2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByObligatoire2($obligatoire2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire2)) {
                $obligatoire2 = str_replace('*', '%', $obligatoire2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::OBLIGATOIRE2, $obligatoire2, $comparison);
    }

    /**
     * Filter the query on the ACTIF2 column
     *
     * Example usage:
     * <code>
     * $query->filterByActif2('fooValue');   // WHERE ACTIF2 = 'fooValue'
     * $query->filterByActif2('%fooValue%'); // WHERE ACTIF2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByActif2($actif2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif2)) {
                $actif2 = str_replace('*', '%', $actif2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ACTIF2, $actif2, $comparison);
    }

    /**
     * Filter the query on the VISIBLE2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible2('fooValue');   // WHERE VISIBLE2 = 'fooValue'
     * $query->filterByVisible2('%fooValue%'); // WHERE VISIBLE2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisible2($visible2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible2)) {
                $visible2 = str_replace('*', '%', $visible2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE2, $visible2, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT2 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacement2('fooValue');   // WHERE EMPLACEMENT2 = 'fooValue'
     * $query->filterByEmplacement2('%fooValue%'); // WHERE EMPLACEMENT2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacement2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByEmplacement2($emplacement2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacement2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacement2)) {
                $emplacement2 = str_replace('*', '%', $emplacement2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::EMPLACEMENT2, $emplacement2, $comparison);
    }

    /**
     * Filter the query on the LABEL_FR3 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelFr3('fooValue');   // WHERE LABEL_FR3 = 'fooValue'
     * $query->filterByLabelFr3('%fooValue%'); // WHERE LABEL_FR3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelFr3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelFr3($labelFr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelFr3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelFr3)) {
                $labelFr3 = str_replace('*', '%', $labelFr3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_FR3, $labelFr3, $comparison);
    }

    /**
     * Filter the query on the LABEL_AR3 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelAr3('fooValue');   // WHERE LABEL_AR3 = 'fooValue'
     * $query->filterByLabelAr3('%fooValue%'); // WHERE LABEL_AR3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelAr3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelAr3($labelAr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelAr3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelAr3)) {
                $labelAr3 = str_replace('*', '%', $labelAr3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_AR3, $labelAr3, $comparison);
    }

    /**
     * Filter the query on the LABEL_COURT3 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelCourt3('fooValue');   // WHERE LABEL_COURT3 = 'fooValue'
     * $query->filterByLabelCourt3('%fooValue%'); // WHERE LABEL_COURT3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelCourt3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelCourt3($labelCourt3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelCourt3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelCourt3)) {
                $labelCourt3 = str_replace('*', '%', $labelCourt3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_COURT3, $labelCourt3, $comparison);
    }

    /**
     * Filter the query on the TYPE3 column
     *
     * Example usage:
     * <code>
     * $query->filterByType3('fooValue');   // WHERE TYPE3 = 'fooValue'
     * $query->filterByType3('%fooValue%'); // WHERE TYPE3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByType3($type3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type3)) {
                $type3 = str_replace('*', '%', $type3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::TYPE3, $type3, $comparison);
    }

    /**
     * Filter the query on the OBLIGATOIRE3 column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire3('fooValue');   // WHERE OBLIGATOIRE3 = 'fooValue'
     * $query->filterByObligatoire3('%fooValue%'); // WHERE OBLIGATOIRE3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByObligatoire3($obligatoire3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire3)) {
                $obligatoire3 = str_replace('*', '%', $obligatoire3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::OBLIGATOIRE3, $obligatoire3, $comparison);
    }

    /**
     * Filter the query on the ACTIF3 column
     *
     * Example usage:
     * <code>
     * $query->filterByActif3('fooValue');   // WHERE ACTIF3 = 'fooValue'
     * $query->filterByActif3('%fooValue%'); // WHERE ACTIF3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByActif3($actif3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif3)) {
                $actif3 = str_replace('*', '%', $actif3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ACTIF3, $actif3, $comparison);
    }

    /**
     * Filter the query on the VISIBLE3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible3('fooValue');   // WHERE VISIBLE3 = 'fooValue'
     * $query->filterByVisible3('%fooValue%'); // WHERE VISIBLE3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisible3($visible3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible3)) {
                $visible3 = str_replace('*', '%', $visible3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE3, $visible3, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT3 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacement3('fooValue');   // WHERE EMPLACEMENT3 = 'fooValue'
     * $query->filterByEmplacement3('%fooValue%'); // WHERE EMPLACEMENT3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacement3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByEmplacement3($emplacement3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacement3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacement3)) {
                $emplacement3 = str_replace('*', '%', $emplacement3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::EMPLACEMENT3, $emplacement3, $comparison);
    }

    /**
     * Filter the query on the LABEL_FR4 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelFr4('fooValue');   // WHERE LABEL_FR4 = 'fooValue'
     * $query->filterByLabelFr4('%fooValue%'); // WHERE LABEL_FR4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelFr4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelFr4($labelFr4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelFr4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelFr4)) {
                $labelFr4 = str_replace('*', '%', $labelFr4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_FR4, $labelFr4, $comparison);
    }

    /**
     * Filter the query on the LABEL_AR4 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelAr4('fooValue');   // WHERE LABEL_AR4 = 'fooValue'
     * $query->filterByLabelAr4('%fooValue%'); // WHERE LABEL_AR4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelAr4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelAr4($labelAr4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelAr4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelAr4)) {
                $labelAr4 = str_replace('*', '%', $labelAr4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_AR4, $labelAr4, $comparison);
    }

    /**
     * Filter the query on the LABEL_COURT4 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelCourt4('fooValue');   // WHERE LABEL_COURT4 = 'fooValue'
     * $query->filterByLabelCourt4('%fooValue%'); // WHERE LABEL_COURT4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelCourt4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelCourt4($labelCourt4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelCourt4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelCourt4)) {
                $labelCourt4 = str_replace('*', '%', $labelCourt4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_COURT4, $labelCourt4, $comparison);
    }

    /**
     * Filter the query on the TYPE4 column
     *
     * Example usage:
     * <code>
     * $query->filterByType4('fooValue');   // WHERE TYPE4 = 'fooValue'
     * $query->filterByType4('%fooValue%'); // WHERE TYPE4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByType4($type4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type4)) {
                $type4 = str_replace('*', '%', $type4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::TYPE4, $type4, $comparison);
    }

    /**
     * Filter the query on the OBLIGATOIRE4 column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire4('fooValue');   // WHERE OBLIGATOIRE4 = 'fooValue'
     * $query->filterByObligatoire4('%fooValue%'); // WHERE OBLIGATOIRE4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByObligatoire4($obligatoire4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire4)) {
                $obligatoire4 = str_replace('*', '%', $obligatoire4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::OBLIGATOIRE4, $obligatoire4, $comparison);
    }

    /**
     * Filter the query on the ACTIF4 column
     *
     * Example usage:
     * <code>
     * $query->filterByActif4('fooValue');   // WHERE ACTIF4 = 'fooValue'
     * $query->filterByActif4('%fooValue%'); // WHERE ACTIF4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByActif4($actif4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif4)) {
                $actif4 = str_replace('*', '%', $actif4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ACTIF4, $actif4, $comparison);
    }

    /**
     * Filter the query on the VISIBLE4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible4('fooValue');   // WHERE VISIBLE4 = 'fooValue'
     * $query->filterByVisible4('%fooValue%'); // WHERE VISIBLE4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisible4($visible4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible4)) {
                $visible4 = str_replace('*', '%', $visible4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE4, $visible4, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT4 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacement4('fooValue');   // WHERE EMPLACEMENT4 = 'fooValue'
     * $query->filterByEmplacement4('%fooValue%'); // WHERE EMPLACEMENT4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacement4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByEmplacement4($emplacement4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacement4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacement4)) {
                $emplacement4 = str_replace('*', '%', $emplacement4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::EMPLACEMENT4, $emplacement4, $comparison);
    }

    /**
     * Filter the query on the LABEL_FR5 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelFr5('fooValue');   // WHERE LABEL_FR5 = 'fooValue'
     * $query->filterByLabelFr5('%fooValue%'); // WHERE LABEL_FR5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelFr5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelFr5($labelFr5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelFr5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelFr5)) {
                $labelFr5 = str_replace('*', '%', $labelFr5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_FR5, $labelFr5, $comparison);
    }

    /**
     * Filter the query on the LABEL_AR5 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelAr5('fooValue');   // WHERE LABEL_AR5 = 'fooValue'
     * $query->filterByLabelAr5('%fooValue%'); // WHERE LABEL_AR5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelAr5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelAr5($labelAr5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelAr5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelAr5)) {
                $labelAr5 = str_replace('*', '%', $labelAr5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_AR5, $labelAr5, $comparison);
    }

    /**
     * Filter the query on the LABEL_COURT5 column
     *
     * Example usage:
     * <code>
     * $query->filterByLabelCourt5('fooValue');   // WHERE LABEL_COURT5 = 'fooValue'
     * $query->filterByLabelCourt5('%fooValue%'); // WHERE LABEL_COURT5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $labelCourt5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByLabelCourt5($labelCourt5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($labelCourt5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $labelCourt5)) {
                $labelCourt5 = str_replace('*', '%', $labelCourt5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::LABEL_COURT5, $labelCourt5, $comparison);
    }

    /**
     * Filter the query on the TYPE5 column
     *
     * Example usage:
     * <code>
     * $query->filterByType5('fooValue');   // WHERE TYPE5 = 'fooValue'
     * $query->filterByType5('%fooValue%'); // WHERE TYPE5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $type5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByType5($type5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($type5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $type5)) {
                $type5 = str_replace('*', '%', $type5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::TYPE5, $type5, $comparison);
    }

    /**
     * Filter the query on the OBLIGATOIRE5 column
     *
     * Example usage:
     * <code>
     * $query->filterByObligatoire5('fooValue');   // WHERE OBLIGATOIRE5 = 'fooValue'
     * $query->filterByObligatoire5('%fooValue%'); // WHERE OBLIGATOIRE5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $obligatoire5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByObligatoire5($obligatoire5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($obligatoire5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $obligatoire5)) {
                $obligatoire5 = str_replace('*', '%', $obligatoire5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::OBLIGATOIRE5, $obligatoire5, $comparison);
    }

    /**
     * Filter the query on the ACTIF5 column
     *
     * Example usage:
     * <code>
     * $query->filterByActif5('fooValue');   // WHERE ACTIF5 = 'fooValue'
     * $query->filterByActif5('%fooValue%'); // WHERE ACTIF5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actif5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByActif5($actif5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actif5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actif5)) {
                $actif5 = str_replace('*', '%', $actif5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::ACTIF5, $actif5, $comparison);
    }

    /**
     * Filter the query on the VISIBLE5 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisible5('fooValue');   // WHERE VISIBLE5 = 'fooValue'
     * $query->filterByVisible5('%fooValue%'); // WHERE VISIBLE5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visible5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisible5($visible5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visible5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visible5)) {
                $visible5 = str_replace('*', '%', $visible5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE5, $visible5, $comparison);
    }

    /**
     * Filter the query on the EMPLACEMENT5 column
     *
     * Example usage:
     * <code>
     * $query->filterByEmplacement5('fooValue');   // WHERE EMPLACEMENT5 = 'fooValue'
     * $query->filterByEmplacement5('%fooValue%'); // WHERE EMPLACEMENT5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emplacement5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByEmplacement5($emplacement5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emplacement5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emplacement5)) {
                $emplacement5 = str_replace('*', '%', $emplacement5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::EMPLACEMENT5, $emplacement5, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_FR_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeFr1('fooValue');   // WHERE VALEUR_LISTE_FR_1 = 'fooValue'
     * $query->filterByValeurListeFr1('%fooValue%'); // WHERE VALEUR_LISTE_FR_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeFr1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeFr1($valeurListeFr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeFr1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeFr1)) {
                $valeurListeFr1 = str_replace('*', '%', $valeurListeFr1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_FR_1, $valeurListeFr1, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_AR_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeAr1('fooValue');   // WHERE VALEUR_LISTE_AR_1 = 'fooValue'
     * $query->filterByValeurListeAr1('%fooValue%'); // WHERE VALEUR_LISTE_AR_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeAr1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeAr1($valeurListeAr1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeAr1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeAr1)) {
                $valeurListeAr1 = str_replace('*', '%', $valeurListeAr1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_AR_1, $valeurListeAr1, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_FR_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeFr2('fooValue');   // WHERE VALEUR_LISTE_FR_2 = 'fooValue'
     * $query->filterByValeurListeFr2('%fooValue%'); // WHERE VALEUR_LISTE_FR_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeFr2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeFr2($valeurListeFr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeFr2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeFr2)) {
                $valeurListeFr2 = str_replace('*', '%', $valeurListeFr2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_FR_2, $valeurListeFr2, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_AR_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeAr2('fooValue');   // WHERE VALEUR_LISTE_AR_2 = 'fooValue'
     * $query->filterByValeurListeAr2('%fooValue%'); // WHERE VALEUR_LISTE_AR_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeAr2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeAr2($valeurListeAr2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeAr2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeAr2)) {
                $valeurListeAr2 = str_replace('*', '%', $valeurListeAr2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_AR_2, $valeurListeAr2, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_FR_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeFr3('fooValue');   // WHERE VALEUR_LISTE_FR_3 = 'fooValue'
     * $query->filterByValeurListeFr3('%fooValue%'); // WHERE VALEUR_LISTE_FR_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeFr3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeFr3($valeurListeFr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeFr3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeFr3)) {
                $valeurListeFr3 = str_replace('*', '%', $valeurListeFr3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_FR_3, $valeurListeFr3, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_AR_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeAr3('fooValue');   // WHERE VALEUR_LISTE_AR_3 = 'fooValue'
     * $query->filterByValeurListeAr3('%fooValue%'); // WHERE VALEUR_LISTE_AR_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeAr3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeAr3($valeurListeAr3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeAr3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeAr3)) {
                $valeurListeAr3 = str_replace('*', '%', $valeurListeAr3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_AR_3, $valeurListeAr3, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_FR_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeFr4('fooValue');   // WHERE VALEUR_LISTE_FR_4 = 'fooValue'
     * $query->filterByValeurListeFr4('%fooValue%'); // WHERE VALEUR_LISTE_FR_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeFr4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeFr4($valeurListeFr4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeFr4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeFr4)) {
                $valeurListeFr4 = str_replace('*', '%', $valeurListeFr4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_FR_4, $valeurListeFr4, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_AR_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeAr4('fooValue');   // WHERE VALEUR_LISTE_AR_4 = 'fooValue'
     * $query->filterByValeurListeAr4('%fooValue%'); // WHERE VALEUR_LISTE_AR_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeAr4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeAr4($valeurListeAr4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeAr4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeAr4)) {
                $valeurListeAr4 = str_replace('*', '%', $valeurListeAr4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_AR_4, $valeurListeAr4, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_FR_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeFr5('fooValue');   // WHERE VALEUR_LISTE_FR_5 = 'fooValue'
     * $query->filterByValeurListeFr5('%fooValue%'); // WHERE VALEUR_LISTE_FR_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeFr5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeFr5($valeurListeFr5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeFr5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeFr5)) {
                $valeurListeFr5 = str_replace('*', '%', $valeurListeFr5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_FR_5, $valeurListeFr5, $comparison);
    }

    /**
     * Filter the query on the VALEUR_LISTE_AR_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByValeurListeAr5('fooValue');   // WHERE VALEUR_LISTE_AR_5 = 'fooValue'
     * $query->filterByValeurListeAr5('%fooValue%'); // WHERE VALEUR_LISTE_AR_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $valeurListeAr5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByValeurListeAr5($valeurListeAr5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($valeurListeAr5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $valeurListeAr5)) {
                $valeurListeAr5 = str_replace('*', '%', $valeurListeAr5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VALEUR_LISTE_AR_5, $valeurListeAr5, $comparison);
    }

    /**
     * Filter the query on the POSITION1 column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition1('fooValue');   // WHERE POSITION1 = 'fooValue'
     * $query->filterByPosition1('%fooValue%'); // WHERE POSITION1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPosition1($position1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position1)) {
                $position1 = str_replace('*', '%', $position1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::POSITION1, $position1, $comparison);
    }

    /**
     * Filter the query on the POSITION2 column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition2('fooValue');   // WHERE POSITION2 = 'fooValue'
     * $query->filterByPosition2('%fooValue%'); // WHERE POSITION2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPosition2($position2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position2)) {
                $position2 = str_replace('*', '%', $position2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::POSITION2, $position2, $comparison);
    }

    /**
     * Filter the query on the POSITION3 column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition3('fooValue');   // WHERE POSITION3 = 'fooValue'
     * $query->filterByPosition3('%fooValue%'); // WHERE POSITION3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPosition3($position3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position3)) {
                $position3 = str_replace('*', '%', $position3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::POSITION3, $position3, $comparison);
    }

    /**
     * Filter the query on the POSITION4 column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition4('fooValue');   // WHERE POSITION4 = 'fooValue'
     * $query->filterByPosition4('%fooValue%'); // WHERE POSITION4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPosition4($position4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position4)) {
                $position4 = str_replace('*', '%', $position4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::POSITION4, $position4, $comparison);
    }

    /**
     * Filter the query on the POSITION5 column
     *
     * Example usage:
     * <code>
     * $query->filterByPosition5('fooValue');   // WHERE POSITION5 = 'fooValue'
     * $query->filterByPosition5('%fooValue%'); // WHERE POSITION5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $position5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByPosition5($position5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($position5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $position5)) {
                $position5 = str_replace('*', '%', $position5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::POSITION5, $position5, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_BOV1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleBov1('fooValue');   // WHERE VISIBLE_BOV1 = 'fooValue'
     * $query->filterByVisibleBov1('%fooValue%'); // WHERE VISIBLE_BOV1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleBov1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleBov1($visibleBov1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleBov1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleBov1)) {
                $visibleBov1 = str_replace('*', '%', $visibleBov1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_BOV1, $visibleBov1, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_BOV2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleBov2('fooValue');   // WHERE VISIBLE_BOV2 = 'fooValue'
     * $query->filterByVisibleBov2('%fooValue%'); // WHERE VISIBLE_BOV2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleBov2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleBov2($visibleBov2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleBov2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleBov2)) {
                $visibleBov2 = str_replace('*', '%', $visibleBov2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_BOV2, $visibleBov2, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_BOV3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleBov3('fooValue');   // WHERE VISIBLE_BOV3 = 'fooValue'
     * $query->filterByVisibleBov3('%fooValue%'); // WHERE VISIBLE_BOV3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleBov3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleBov3($visibleBov3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleBov3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleBov3)) {
                $visibleBov3 = str_replace('*', '%', $visibleBov3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_BOV3, $visibleBov3, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_BOV4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleBov4('fooValue');   // WHERE VISIBLE_BOV4 = 'fooValue'
     * $query->filterByVisibleBov4('%fooValue%'); // WHERE VISIBLE_BOV4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleBov4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleBov4($visibleBov4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleBov4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleBov4)) {
                $visibleBov4 = str_replace('*', '%', $visibleBov4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_BOV4, $visibleBov4, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_BOV5 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleBov5('fooValue');   // WHERE VISIBLE_BOV5 = 'fooValue'
     * $query->filterByVisibleBov5('%fooValue%'); // WHERE VISIBLE_BOV5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleBov5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleBov5($visibleBov5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleBov5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleBov5)) {
                $visibleBov5 = str_replace('*', '%', $visibleBov5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_BOV5, $visibleBov5, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_TABLEAU1 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleTableau1('fooValue');   // WHERE VISIBLE_TABLEAU1 = 'fooValue'
     * $query->filterByVisibleTableau1('%fooValue%'); // WHERE VISIBLE_TABLEAU1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleTableau1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleTableau1($visibleTableau1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleTableau1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleTableau1)) {
                $visibleTableau1 = str_replace('*', '%', $visibleTableau1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_TABLEAU1, $visibleTableau1, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_TABLEAU2 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleTableau2('fooValue');   // WHERE VISIBLE_TABLEAU2 = 'fooValue'
     * $query->filterByVisibleTableau2('%fooValue%'); // WHERE VISIBLE_TABLEAU2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleTableau2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleTableau2($visibleTableau2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleTableau2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleTableau2)) {
                $visibleTableau2 = str_replace('*', '%', $visibleTableau2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_TABLEAU2, $visibleTableau2, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_TABLEAU3 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleTableau3('fooValue');   // WHERE VISIBLE_TABLEAU3 = 'fooValue'
     * $query->filterByVisibleTableau3('%fooValue%'); // WHERE VISIBLE_TABLEAU3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleTableau3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleTableau3($visibleTableau3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleTableau3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleTableau3)) {
                $visibleTableau3 = str_replace('*', '%', $visibleTableau3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_TABLEAU3, $visibleTableau3, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_TABLEAU4 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleTableau4('fooValue');   // WHERE VISIBLE_TABLEAU4 = 'fooValue'
     * $query->filterByVisibleTableau4('%fooValue%'); // WHERE VISIBLE_TABLEAU4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleTableau4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleTableau4($visibleTableau4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleTableau4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleTableau4)) {
                $visibleTableau4 = str_replace('*', '%', $visibleTableau4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_TABLEAU4, $visibleTableau4, $comparison);
    }

    /**
     * Filter the query on the VISIBLE_TABLEAU5 column
     *
     * Example usage:
     * <code>
     * $query->filterByVisibleTableau5('fooValue');   // WHERE VISIBLE_TABLEAU5 = 'fooValue'
     * $query->filterByVisibleTableau5('%fooValue%'); // WHERE VISIBLE_TABLEAU5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visibleTableau5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function filterByVisibleTableau5($visibleTableau5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visibleTableau5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visibleTableau5)) {
                $visibleTableau5 = str_replace('*', '%', $visibleTableau5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(ChampSupplementairePeer::VISIBLE_TABLEAU5, $visibleTableau5, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   ChampSupplementaire $champSupplementaire Object to remove from the list of results
     *
     * @return ChampSupplementaireQuery The current query, for fluid interface
     */
    public function prune($champSupplementaire = null)
    {
        if ($champSupplementaire) {
            $this->addUsingAlias(ChampSupplementairePeer::ID_CHAMP_SUPPLEMENTAIRE, $champSupplementaire->getIdChampSupplementaire(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
