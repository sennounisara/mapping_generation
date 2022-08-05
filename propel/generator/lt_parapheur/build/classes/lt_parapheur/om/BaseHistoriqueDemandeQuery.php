<?php


/**
 * Base class that represents a query for the 'historique_demande' table.
 *
 * 
 *
 * @method HistoriqueDemandeQuery orderByIdHistoriqueDemande($order = Criteria::ASC) Order by the ID_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByIdDemande($order = Criteria::ASC) Order by the ID_DEMANDE column
 * @method HistoriqueDemandeQuery orderByIdEntiteAffecte($order = Criteria::ASC) Order by the ID_ENTITE_AFFECTE column
 * @method HistoriqueDemandeQuery orderBySigleEntiteAffecteFr($order = Criteria::ASC) Order by the SIGLE_ENTITE_AFFECTE_FR column
 * @method HistoriqueDemandeQuery orderBySigleEntiteAffecteAr($order = Criteria::ASC) Order by the SIGLE_ENTITE_AFFECTE_AR column
 * @method HistoriqueDemandeQuery orderByIdAgentAffecte($order = Criteria::ASC) Order by the ID_AGENT_AFFECTE column
 * @method HistoriqueDemandeQuery orderByNomAgentAffecteFr($order = Criteria::ASC) Order by the NOM_AGENT_AFFECTE_FR column
 * @method HistoriqueDemandeQuery orderByNomAgentAffecteAr($order = Criteria::ASC) Order by the NOM_AGENT_AFFECTE_AR column
 * @method HistoriqueDemandeQuery orderByCommentaireCitoyenHistoriqueDemande($order = Criteria::ASC) Order by the COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByStatutHistoriqueDemande($order = Criteria::ASC) Order by the STATUT_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByAppreciationPrestationHistoriqueDemande($order = Criteria::ASC) Order by the APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByDateIntervention($order = Criteria::ASC) Order by the DATE_INTERVENTION column
 * @method HistoriqueDemandeQuery orderByAgentHistoriqueAr($order = Criteria::ASC) Order by the AGENT_HISTORIQUE_AR column
 * @method HistoriqueDemandeQuery orderByAgentHistoriqueFr($order = Criteria::ASC) Order by the AGENT_HISTORIQUE_FR column
 * @method HistoriqueDemandeQuery orderByActionHistoriqueDemande($order = Criteria::ASC) Order by the ACTION_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByCommentaireAgentInterneHistoriqueDemande($order = Criteria::ASC) Order by the COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByCommentaireAgentVisibleHistoriqueDemande($order = Criteria::ASC) Order by the COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery orderByIdAgent($order = Criteria::ASC) Order by the ID_AGENT column
 * @method HistoriqueDemandeQuery orderByDetailsAr($order = Criteria::ASC) Order by the DETAILS_AR column
 * @method HistoriqueDemandeQuery orderByDetailsFr($order = Criteria::ASC) Order by the DETAILS_FR column
 * @method HistoriqueDemandeQuery orderByIdEntiteTraitante($order = Criteria::ASC) Order by the ID_ENTITE_TRAITANTE column
 * @method HistoriqueDemandeQuery orderBySigleEntiteTraitanteFr($order = Criteria::ASC) Order by the SIGLE_ENTITE_TRAITANTE_FR column
 * @method HistoriqueDemandeQuery orderBySigleEntiteTraitanteAr($order = Criteria::ASC) Order by the SIGLE_ENTITE_TRAITANTE_AR column
 * @method HistoriqueDemandeQuery orderByIdPieceJointe($order = Criteria::ASC) Order by the ID_PIECE_JOINTE column
 * @method HistoriqueDemandeQuery orderByNomPieceJointe($order = Criteria::ASC) Order by the NOM_PIECE_JOINTE column
 * @method HistoriqueDemandeQuery orderByRevision($order = Criteria::ASC) Order by the REVISION column
 * @method HistoriqueDemandeQuery orderByIdHistoriquePrecedent($order = Criteria::ASC) Order by the ID_HISTORIQUE_PRECEDENT column
 * @method HistoriqueDemandeQuery orderByEtat($order = Criteria::ASC) Order by the ETAT column
 * @method HistoriqueDemandeQuery orderByIdAction($order = Criteria::ASC) Order by the ID_ACTION column
 * @method HistoriqueDemandeQuery orderByIdPartage($order = Criteria::ASC) Order by the ID_PARTAGE column
 * @method HistoriqueDemandeQuery orderByIdFormat($order = Criteria::ASC) Order by the ID_FORMAT column
 * @method HistoriqueDemandeQuery orderByFormatFr($order = Criteria::ASC) Order by the FORMAT_FR column
 * @method HistoriqueDemandeQuery orderByFormatAr($order = Criteria::ASC) Order by the FORMAT_AR column
 * @method HistoriqueDemandeQuery orderByIdAgentRemplacant($order = Criteria::ASC) Order by the ID_AGENT_REMPLACANT column
 * @method HistoriqueDemandeQuery orderByAgentRemplacantAr($order = Criteria::ASC) Order by the AGENT_REMPLACANT_AR column
 * @method HistoriqueDemandeQuery orderByAgentRemplacantFr($order = Criteria::ASC) Order by the AGENT_REMPLACANT_FR column
 * @method HistoriqueDemandeQuery orderByIdHistoriqueParent($order = Criteria::ASC) Order by the ID_HISTORIQUE_PARENT column
 * @method HistoriqueDemandeQuery orderByDateEcheanceReponse($order = Criteria::ASC) Order by the DATE_ECHEANCE_REPONSE column
 * @method HistoriqueDemandeQuery orderByCanal($order = Criteria::ASC) Order by the CANAL column
 * @method HistoriqueDemandeQuery orderByInfoCanal($order = Criteria::ASC) Order by the INFO_CANAL column
 * @method HistoriqueDemandeQuery orderByIdEtapeCircuitValidation($order = Criteria::ASC) Order by the ID_ETAPE_CIRCUIT_VALIDATION column
 * @method HistoriqueDemandeQuery orderByChampSupp1($order = Criteria::ASC) Order by the CHAMP_SUPP_1 column
 * @method HistoriqueDemandeQuery orderByChampSupp2($order = Criteria::ASC) Order by the CHAMP_SUPP_2 column
 * @method HistoriqueDemandeQuery orderByChampSupp3($order = Criteria::ASC) Order by the CHAMP_SUPP_3 column
 * @method HistoriqueDemandeQuery orderByChampSupp4($order = Criteria::ASC) Order by the CHAMP_SUPP_4 column
 * @method HistoriqueDemandeQuery orderByChampSupp5($order = Criteria::ASC) Order by the CHAMP_SUPP_5 column
 * @method HistoriqueDemandeQuery orderByIdInstruction($order = Criteria::ASC) Order by the ID_INSTRUCTION column
 * @method HistoriqueDemandeQuery orderByTypeClassement($order = Criteria::ASC) Order by the TYPE_CLASSEMENT column
 * @method HistoriqueDemandeQuery orderByTypeReponse($order = Criteria::ASC) Order by the TYPE_REPONSE column
 * @method HistoriqueDemandeQuery orderByAvecReponse($order = Criteria::ASC) Order by the AVEC_REPONSE column
 * @method HistoriqueDemandeQuery orderByRealise($order = Criteria::ASC) Order by the REALISE column
 * @method HistoriqueDemandeQuery orderByDateEcheanceReponseProche($order = Criteria::ASC) Order by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method HistoriqueDemandeQuery orderByEmailValidation($order = Criteria::ASC) Order by the EMAIL_VALIDATION column
 * @method HistoriqueDemandeQuery orderByTokenValidation($order = Criteria::ASC) Order by the TOKEN_VALIDATION column
 * @method HistoriqueDemandeQuery orderByCheckListTab($order = Criteria::ASC) Order by the CHECK_LIST_TAB column
 *
 * @method HistoriqueDemandeQuery groupByIdHistoriqueDemande() Group by the ID_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByIdDemande() Group by the ID_DEMANDE column
 * @method HistoriqueDemandeQuery groupByIdEntiteAffecte() Group by the ID_ENTITE_AFFECTE column
 * @method HistoriqueDemandeQuery groupBySigleEntiteAffecteFr() Group by the SIGLE_ENTITE_AFFECTE_FR column
 * @method HistoriqueDemandeQuery groupBySigleEntiteAffecteAr() Group by the SIGLE_ENTITE_AFFECTE_AR column
 * @method HistoriqueDemandeQuery groupByIdAgentAffecte() Group by the ID_AGENT_AFFECTE column
 * @method HistoriqueDemandeQuery groupByNomAgentAffecteFr() Group by the NOM_AGENT_AFFECTE_FR column
 * @method HistoriqueDemandeQuery groupByNomAgentAffecteAr() Group by the NOM_AGENT_AFFECTE_AR column
 * @method HistoriqueDemandeQuery groupByCommentaireCitoyenHistoriqueDemande() Group by the COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByStatutHistoriqueDemande() Group by the STATUT_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByAppreciationPrestationHistoriqueDemande() Group by the APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByDateIntervention() Group by the DATE_INTERVENTION column
 * @method HistoriqueDemandeQuery groupByAgentHistoriqueAr() Group by the AGENT_HISTORIQUE_AR column
 * @method HistoriqueDemandeQuery groupByAgentHistoriqueFr() Group by the AGENT_HISTORIQUE_FR column
 * @method HistoriqueDemandeQuery groupByActionHistoriqueDemande() Group by the ACTION_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByCommentaireAgentInterneHistoriqueDemande() Group by the COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByCommentaireAgentVisibleHistoriqueDemande() Group by the COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemandeQuery groupByIdAgent() Group by the ID_AGENT column
 * @method HistoriqueDemandeQuery groupByDetailsAr() Group by the DETAILS_AR column
 * @method HistoriqueDemandeQuery groupByDetailsFr() Group by the DETAILS_FR column
 * @method HistoriqueDemandeQuery groupByIdEntiteTraitante() Group by the ID_ENTITE_TRAITANTE column
 * @method HistoriqueDemandeQuery groupBySigleEntiteTraitanteFr() Group by the SIGLE_ENTITE_TRAITANTE_FR column
 * @method HistoriqueDemandeQuery groupBySigleEntiteTraitanteAr() Group by the SIGLE_ENTITE_TRAITANTE_AR column
 * @method HistoriqueDemandeQuery groupByIdPieceJointe() Group by the ID_PIECE_JOINTE column
 * @method HistoriqueDemandeQuery groupByNomPieceJointe() Group by the NOM_PIECE_JOINTE column
 * @method HistoriqueDemandeQuery groupByRevision() Group by the REVISION column
 * @method HistoriqueDemandeQuery groupByIdHistoriquePrecedent() Group by the ID_HISTORIQUE_PRECEDENT column
 * @method HistoriqueDemandeQuery groupByEtat() Group by the ETAT column
 * @method HistoriqueDemandeQuery groupByIdAction() Group by the ID_ACTION column
 * @method HistoriqueDemandeQuery groupByIdPartage() Group by the ID_PARTAGE column
 * @method HistoriqueDemandeQuery groupByIdFormat() Group by the ID_FORMAT column
 * @method HistoriqueDemandeQuery groupByFormatFr() Group by the FORMAT_FR column
 * @method HistoriqueDemandeQuery groupByFormatAr() Group by the FORMAT_AR column
 * @method HistoriqueDemandeQuery groupByIdAgentRemplacant() Group by the ID_AGENT_REMPLACANT column
 * @method HistoriqueDemandeQuery groupByAgentRemplacantAr() Group by the AGENT_REMPLACANT_AR column
 * @method HistoriqueDemandeQuery groupByAgentRemplacantFr() Group by the AGENT_REMPLACANT_FR column
 * @method HistoriqueDemandeQuery groupByIdHistoriqueParent() Group by the ID_HISTORIQUE_PARENT column
 * @method HistoriqueDemandeQuery groupByDateEcheanceReponse() Group by the DATE_ECHEANCE_REPONSE column
 * @method HistoriqueDemandeQuery groupByCanal() Group by the CANAL column
 * @method HistoriqueDemandeQuery groupByInfoCanal() Group by the INFO_CANAL column
 * @method HistoriqueDemandeQuery groupByIdEtapeCircuitValidation() Group by the ID_ETAPE_CIRCUIT_VALIDATION column
 * @method HistoriqueDemandeQuery groupByChampSupp1() Group by the CHAMP_SUPP_1 column
 * @method HistoriqueDemandeQuery groupByChampSupp2() Group by the CHAMP_SUPP_2 column
 * @method HistoriqueDemandeQuery groupByChampSupp3() Group by the CHAMP_SUPP_3 column
 * @method HistoriqueDemandeQuery groupByChampSupp4() Group by the CHAMP_SUPP_4 column
 * @method HistoriqueDemandeQuery groupByChampSupp5() Group by the CHAMP_SUPP_5 column
 * @method HistoriqueDemandeQuery groupByIdInstruction() Group by the ID_INSTRUCTION column
 * @method HistoriqueDemandeQuery groupByTypeClassement() Group by the TYPE_CLASSEMENT column
 * @method HistoriqueDemandeQuery groupByTypeReponse() Group by the TYPE_REPONSE column
 * @method HistoriqueDemandeQuery groupByAvecReponse() Group by the AVEC_REPONSE column
 * @method HistoriqueDemandeQuery groupByRealise() Group by the REALISE column
 * @method HistoriqueDemandeQuery groupByDateEcheanceReponseProche() Group by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method HistoriqueDemandeQuery groupByEmailValidation() Group by the EMAIL_VALIDATION column
 * @method HistoriqueDemandeQuery groupByTokenValidation() Group by the TOKEN_VALIDATION column
 * @method HistoriqueDemandeQuery groupByCheckListTab() Group by the CHECK_LIST_TAB column
 *
 * @method HistoriqueDemandeQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method HistoriqueDemandeQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method HistoriqueDemandeQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method HistoriqueDemande findOne(PropelPDO $con = null) Return the first HistoriqueDemande matching the query
 * @method HistoriqueDemande findOneOrCreate(PropelPDO $con = null) Return the first HistoriqueDemande matching the query, or a new HistoriqueDemande object populated from the query conditions when no match is found
 *
 * @method HistoriqueDemande findOneByIdDemande(int $ID_DEMANDE) Return the first HistoriqueDemande filtered by the ID_DEMANDE column
 * @method HistoriqueDemande findOneByIdEntiteAffecte(int $ID_ENTITE_AFFECTE) Return the first HistoriqueDemande filtered by the ID_ENTITE_AFFECTE column
 * @method HistoriqueDemande findOneBySigleEntiteAffecteFr(string $SIGLE_ENTITE_AFFECTE_FR) Return the first HistoriqueDemande filtered by the SIGLE_ENTITE_AFFECTE_FR column
 * @method HistoriqueDemande findOneBySigleEntiteAffecteAr(string $SIGLE_ENTITE_AFFECTE_AR) Return the first HistoriqueDemande filtered by the SIGLE_ENTITE_AFFECTE_AR column
 * @method HistoriqueDemande findOneByIdAgentAffecte(int $ID_AGENT_AFFECTE) Return the first HistoriqueDemande filtered by the ID_AGENT_AFFECTE column
 * @method HistoriqueDemande findOneByNomAgentAffecteFr(string $NOM_AGENT_AFFECTE_FR) Return the first HistoriqueDemande filtered by the NOM_AGENT_AFFECTE_FR column
 * @method HistoriqueDemande findOneByNomAgentAffecteAr(string $NOM_AGENT_AFFECTE_AR) Return the first HistoriqueDemande filtered by the NOM_AGENT_AFFECTE_AR column
 * @method HistoriqueDemande findOneByCommentaireCitoyenHistoriqueDemande(string $COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE) Return the first HistoriqueDemande filtered by the COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemande findOneByStatutHistoriqueDemande(int $STATUT_HISTORIQUE_DEMANDE) Return the first HistoriqueDemande filtered by the STATUT_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemande findOneByAppreciationPrestationHistoriqueDemande(int $APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE) Return the first HistoriqueDemande filtered by the APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemande findOneByDateIntervention(string $DATE_INTERVENTION) Return the first HistoriqueDemande filtered by the DATE_INTERVENTION column
 * @method HistoriqueDemande findOneByAgentHistoriqueAr(string $AGENT_HISTORIQUE_AR) Return the first HistoriqueDemande filtered by the AGENT_HISTORIQUE_AR column
 * @method HistoriqueDemande findOneByAgentHistoriqueFr(string $AGENT_HISTORIQUE_FR) Return the first HistoriqueDemande filtered by the AGENT_HISTORIQUE_FR column
 * @method HistoriqueDemande findOneByActionHistoriqueDemande(string $ACTION_HISTORIQUE_DEMANDE) Return the first HistoriqueDemande filtered by the ACTION_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemande findOneByCommentaireAgentInterneHistoriqueDemande(string $COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE) Return the first HistoriqueDemande filtered by the COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemande findOneByCommentaireAgentVisibleHistoriqueDemande(string $COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE) Return the first HistoriqueDemande filtered by the COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE column
 * @method HistoriqueDemande findOneByIdAgent(int $ID_AGENT) Return the first HistoriqueDemande filtered by the ID_AGENT column
 * @method HistoriqueDemande findOneByDetailsAr(string $DETAILS_AR) Return the first HistoriqueDemande filtered by the DETAILS_AR column
 * @method HistoriqueDemande findOneByDetailsFr(string $DETAILS_FR) Return the first HistoriqueDemande filtered by the DETAILS_FR column
 * @method HistoriqueDemande findOneByIdEntiteTraitante(int $ID_ENTITE_TRAITANTE) Return the first HistoriqueDemande filtered by the ID_ENTITE_TRAITANTE column
 * @method HistoriqueDemande findOneBySigleEntiteTraitanteFr(string $SIGLE_ENTITE_TRAITANTE_FR) Return the first HistoriqueDemande filtered by the SIGLE_ENTITE_TRAITANTE_FR column
 * @method HistoriqueDemande findOneBySigleEntiteTraitanteAr(string $SIGLE_ENTITE_TRAITANTE_AR) Return the first HistoriqueDemande filtered by the SIGLE_ENTITE_TRAITANTE_AR column
 * @method HistoriqueDemande findOneByIdPieceJointe(int $ID_PIECE_JOINTE) Return the first HistoriqueDemande filtered by the ID_PIECE_JOINTE column
 * @method HistoriqueDemande findOneByNomPieceJointe(string $NOM_PIECE_JOINTE) Return the first HistoriqueDemande filtered by the NOM_PIECE_JOINTE column
 * @method HistoriqueDemande findOneByRevision(int $REVISION) Return the first HistoriqueDemande filtered by the REVISION column
 * @method HistoriqueDemande findOneByIdHistoriquePrecedent(int $ID_HISTORIQUE_PRECEDENT) Return the first HistoriqueDemande filtered by the ID_HISTORIQUE_PRECEDENT column
 * @method HistoriqueDemande findOneByEtat(string $ETAT) Return the first HistoriqueDemande filtered by the ETAT column
 * @method HistoriqueDemande findOneByIdAction(int $ID_ACTION) Return the first HistoriqueDemande filtered by the ID_ACTION column
 * @method HistoriqueDemande findOneByIdPartage(int $ID_PARTAGE) Return the first HistoriqueDemande filtered by the ID_PARTAGE column
 * @method HistoriqueDemande findOneByIdFormat(int $ID_FORMAT) Return the first HistoriqueDemande filtered by the ID_FORMAT column
 * @method HistoriqueDemande findOneByFormatFr(string $FORMAT_FR) Return the first HistoriqueDemande filtered by the FORMAT_FR column
 * @method HistoriqueDemande findOneByFormatAr(string $FORMAT_AR) Return the first HistoriqueDemande filtered by the FORMAT_AR column
 * @method HistoriqueDemande findOneByIdAgentRemplacant(int $ID_AGENT_REMPLACANT) Return the first HistoriqueDemande filtered by the ID_AGENT_REMPLACANT column
 * @method HistoriqueDemande findOneByAgentRemplacantAr(string $AGENT_REMPLACANT_AR) Return the first HistoriqueDemande filtered by the AGENT_REMPLACANT_AR column
 * @method HistoriqueDemande findOneByAgentRemplacantFr(string $AGENT_REMPLACANT_FR) Return the first HistoriqueDemande filtered by the AGENT_REMPLACANT_FR column
 * @method HistoriqueDemande findOneByIdHistoriqueParent(int $ID_HISTORIQUE_PARENT) Return the first HistoriqueDemande filtered by the ID_HISTORIQUE_PARENT column
 * @method HistoriqueDemande findOneByDateEcheanceReponse(string $DATE_ECHEANCE_REPONSE) Return the first HistoriqueDemande filtered by the DATE_ECHEANCE_REPONSE column
 * @method HistoriqueDemande findOneByCanal(string $CANAL) Return the first HistoriqueDemande filtered by the CANAL column
 * @method HistoriqueDemande findOneByInfoCanal(string $INFO_CANAL) Return the first HistoriqueDemande filtered by the INFO_CANAL column
 * @method HistoriqueDemande findOneByIdEtapeCircuitValidation(int $ID_ETAPE_CIRCUIT_VALIDATION) Return the first HistoriqueDemande filtered by the ID_ETAPE_CIRCUIT_VALIDATION column
 * @method HistoriqueDemande findOneByChampSupp1(string $CHAMP_SUPP_1) Return the first HistoriqueDemande filtered by the CHAMP_SUPP_1 column
 * @method HistoriqueDemande findOneByChampSupp2(string $CHAMP_SUPP_2) Return the first HistoriqueDemande filtered by the CHAMP_SUPP_2 column
 * @method HistoriqueDemande findOneByChampSupp3(string $CHAMP_SUPP_3) Return the first HistoriqueDemande filtered by the CHAMP_SUPP_3 column
 * @method HistoriqueDemande findOneByChampSupp4(string $CHAMP_SUPP_4) Return the first HistoriqueDemande filtered by the CHAMP_SUPP_4 column
 * @method HistoriqueDemande findOneByChampSupp5(string $CHAMP_SUPP_5) Return the first HistoriqueDemande filtered by the CHAMP_SUPP_5 column
 * @method HistoriqueDemande findOneByIdInstruction(int $ID_INSTRUCTION) Return the first HistoriqueDemande filtered by the ID_INSTRUCTION column
 * @method HistoriqueDemande findOneByTypeClassement(int $TYPE_CLASSEMENT) Return the first HistoriqueDemande filtered by the TYPE_CLASSEMENT column
 * @method HistoriqueDemande findOneByTypeReponse(int $TYPE_REPONSE) Return the first HistoriqueDemande filtered by the TYPE_REPONSE column
 * @method HistoriqueDemande findOneByAvecReponse(string $AVEC_REPONSE) Return the first HistoriqueDemande filtered by the AVEC_REPONSE column
 * @method HistoriqueDemande findOneByRealise(string $REALISE) Return the first HistoriqueDemande filtered by the REALISE column
 * @method HistoriqueDemande findOneByDateEcheanceReponseProche(string $DATE_ECHEANCE_REPONSE_PROCHE) Return the first HistoriqueDemande filtered by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method HistoriqueDemande findOneByEmailValidation(string $EMAIL_VALIDATION) Return the first HistoriqueDemande filtered by the EMAIL_VALIDATION column
 * @method HistoriqueDemande findOneByTokenValidation(string $TOKEN_VALIDATION) Return the first HistoriqueDemande filtered by the TOKEN_VALIDATION column
 * @method HistoriqueDemande findOneByCheckListTab(string $CHECK_LIST_TAB) Return the first HistoriqueDemande filtered by the CHECK_LIST_TAB column
 *
 * @method array findByIdHistoriqueDemande(int $ID_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the ID_HISTORIQUE_DEMANDE column
 * @method array findByIdDemande(int $ID_DEMANDE) Return HistoriqueDemande objects filtered by the ID_DEMANDE column
 * @method array findByIdEntiteAffecte(int $ID_ENTITE_AFFECTE) Return HistoriqueDemande objects filtered by the ID_ENTITE_AFFECTE column
 * @method array findBySigleEntiteAffecteFr(string $SIGLE_ENTITE_AFFECTE_FR) Return HistoriqueDemande objects filtered by the SIGLE_ENTITE_AFFECTE_FR column
 * @method array findBySigleEntiteAffecteAr(string $SIGLE_ENTITE_AFFECTE_AR) Return HistoriqueDemande objects filtered by the SIGLE_ENTITE_AFFECTE_AR column
 * @method array findByIdAgentAffecte(int $ID_AGENT_AFFECTE) Return HistoriqueDemande objects filtered by the ID_AGENT_AFFECTE column
 * @method array findByNomAgentAffecteFr(string $NOM_AGENT_AFFECTE_FR) Return HistoriqueDemande objects filtered by the NOM_AGENT_AFFECTE_FR column
 * @method array findByNomAgentAffecteAr(string $NOM_AGENT_AFFECTE_AR) Return HistoriqueDemande objects filtered by the NOM_AGENT_AFFECTE_AR column
 * @method array findByCommentaireCitoyenHistoriqueDemande(string $COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE column
 * @method array findByStatutHistoriqueDemande(int $STATUT_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the STATUT_HISTORIQUE_DEMANDE column
 * @method array findByAppreciationPrestationHistoriqueDemande(int $APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE column
 * @method array findByDateIntervention(string $DATE_INTERVENTION) Return HistoriqueDemande objects filtered by the DATE_INTERVENTION column
 * @method array findByAgentHistoriqueAr(string $AGENT_HISTORIQUE_AR) Return HistoriqueDemande objects filtered by the AGENT_HISTORIQUE_AR column
 * @method array findByAgentHistoriqueFr(string $AGENT_HISTORIQUE_FR) Return HistoriqueDemande objects filtered by the AGENT_HISTORIQUE_FR column
 * @method array findByActionHistoriqueDemande(string $ACTION_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the ACTION_HISTORIQUE_DEMANDE column
 * @method array findByCommentaireAgentInterneHistoriqueDemande(string $COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE column
 * @method array findByCommentaireAgentVisibleHistoriqueDemande(string $COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE) Return HistoriqueDemande objects filtered by the COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE column
 * @method array findByIdAgent(int $ID_AGENT) Return HistoriqueDemande objects filtered by the ID_AGENT column
 * @method array findByDetailsAr(string $DETAILS_AR) Return HistoriqueDemande objects filtered by the DETAILS_AR column
 * @method array findByDetailsFr(string $DETAILS_FR) Return HistoriqueDemande objects filtered by the DETAILS_FR column
 * @method array findByIdEntiteTraitante(int $ID_ENTITE_TRAITANTE) Return HistoriqueDemande objects filtered by the ID_ENTITE_TRAITANTE column
 * @method array findBySigleEntiteTraitanteFr(string $SIGLE_ENTITE_TRAITANTE_FR) Return HistoriqueDemande objects filtered by the SIGLE_ENTITE_TRAITANTE_FR column
 * @method array findBySigleEntiteTraitanteAr(string $SIGLE_ENTITE_TRAITANTE_AR) Return HistoriqueDemande objects filtered by the SIGLE_ENTITE_TRAITANTE_AR column
 * @method array findByIdPieceJointe(int $ID_PIECE_JOINTE) Return HistoriqueDemande objects filtered by the ID_PIECE_JOINTE column
 * @method array findByNomPieceJointe(string $NOM_PIECE_JOINTE) Return HistoriqueDemande objects filtered by the NOM_PIECE_JOINTE column
 * @method array findByRevision(int $REVISION) Return HistoriqueDemande objects filtered by the REVISION column
 * @method array findByIdHistoriquePrecedent(int $ID_HISTORIQUE_PRECEDENT) Return HistoriqueDemande objects filtered by the ID_HISTORIQUE_PRECEDENT column
 * @method array findByEtat(string $ETAT) Return HistoriqueDemande objects filtered by the ETAT column
 * @method array findByIdAction(int $ID_ACTION) Return HistoriqueDemande objects filtered by the ID_ACTION column
 * @method array findByIdPartage(int $ID_PARTAGE) Return HistoriqueDemande objects filtered by the ID_PARTAGE column
 * @method array findByIdFormat(int $ID_FORMAT) Return HistoriqueDemande objects filtered by the ID_FORMAT column
 * @method array findByFormatFr(string $FORMAT_FR) Return HistoriqueDemande objects filtered by the FORMAT_FR column
 * @method array findByFormatAr(string $FORMAT_AR) Return HistoriqueDemande objects filtered by the FORMAT_AR column
 * @method array findByIdAgentRemplacant(int $ID_AGENT_REMPLACANT) Return HistoriqueDemande objects filtered by the ID_AGENT_REMPLACANT column
 * @method array findByAgentRemplacantAr(string $AGENT_REMPLACANT_AR) Return HistoriqueDemande objects filtered by the AGENT_REMPLACANT_AR column
 * @method array findByAgentRemplacantFr(string $AGENT_REMPLACANT_FR) Return HistoriqueDemande objects filtered by the AGENT_REMPLACANT_FR column
 * @method array findByIdHistoriqueParent(int $ID_HISTORIQUE_PARENT) Return HistoriqueDemande objects filtered by the ID_HISTORIQUE_PARENT column
 * @method array findByDateEcheanceReponse(string $DATE_ECHEANCE_REPONSE) Return HistoriqueDemande objects filtered by the DATE_ECHEANCE_REPONSE column
 * @method array findByCanal(string $CANAL) Return HistoriqueDemande objects filtered by the CANAL column
 * @method array findByInfoCanal(string $INFO_CANAL) Return HistoriqueDemande objects filtered by the INFO_CANAL column
 * @method array findByIdEtapeCircuitValidation(int $ID_ETAPE_CIRCUIT_VALIDATION) Return HistoriqueDemande objects filtered by the ID_ETAPE_CIRCUIT_VALIDATION column
 * @method array findByChampSupp1(string $CHAMP_SUPP_1) Return HistoriqueDemande objects filtered by the CHAMP_SUPP_1 column
 * @method array findByChampSupp2(string $CHAMP_SUPP_2) Return HistoriqueDemande objects filtered by the CHAMP_SUPP_2 column
 * @method array findByChampSupp3(string $CHAMP_SUPP_3) Return HistoriqueDemande objects filtered by the CHAMP_SUPP_3 column
 * @method array findByChampSupp4(string $CHAMP_SUPP_4) Return HistoriqueDemande objects filtered by the CHAMP_SUPP_4 column
 * @method array findByChampSupp5(string $CHAMP_SUPP_5) Return HistoriqueDemande objects filtered by the CHAMP_SUPP_5 column
 * @method array findByIdInstruction(int $ID_INSTRUCTION) Return HistoriqueDemande objects filtered by the ID_INSTRUCTION column
 * @method array findByTypeClassement(int $TYPE_CLASSEMENT) Return HistoriqueDemande objects filtered by the TYPE_CLASSEMENT column
 * @method array findByTypeReponse(int $TYPE_REPONSE) Return HistoriqueDemande objects filtered by the TYPE_REPONSE column
 * @method array findByAvecReponse(string $AVEC_REPONSE) Return HistoriqueDemande objects filtered by the AVEC_REPONSE column
 * @method array findByRealise(string $REALISE) Return HistoriqueDemande objects filtered by the REALISE column
 * @method array findByDateEcheanceReponseProche(string $DATE_ECHEANCE_REPONSE_PROCHE) Return HistoriqueDemande objects filtered by the DATE_ECHEANCE_REPONSE_PROCHE column
 * @method array findByEmailValidation(string $EMAIL_VALIDATION) Return HistoriqueDemande objects filtered by the EMAIL_VALIDATION column
 * @method array findByTokenValidation(string $TOKEN_VALIDATION) Return HistoriqueDemande objects filtered by the TOKEN_VALIDATION column
 * @method array findByCheckListTab(string $CHECK_LIST_TAB) Return HistoriqueDemande objects filtered by the CHECK_LIST_TAB column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseHistoriqueDemandeQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseHistoriqueDemandeQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'lt_parapheur', $modelName = 'HistoriqueDemande', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new HistoriqueDemandeQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   HistoriqueDemandeQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return HistoriqueDemandeQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof HistoriqueDemandeQuery) {
            return $criteria;
        }
        $query = new HistoriqueDemandeQuery();
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
     * @return   HistoriqueDemande|HistoriqueDemande[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = HistoriqueDemandePeer::getInstanceFromPool((string) $key))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 HistoriqueDemande A model object, or null if the key is not found
     * @throws PropelException
     */
     public function findOneByIdHistoriqueDemande($key, $con = null)
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
     * @return                 HistoriqueDemande A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `ID_HISTORIQUE_DEMANDE`, `ID_DEMANDE`, `ID_ENTITE_AFFECTE`, `SIGLE_ENTITE_AFFECTE_FR`, `SIGLE_ENTITE_AFFECTE_AR`, `ID_AGENT_AFFECTE`, `NOM_AGENT_AFFECTE_FR`, `NOM_AGENT_AFFECTE_AR`, `COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE`, `STATUT_HISTORIQUE_DEMANDE`, `APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE`, `DATE_INTERVENTION`, `AGENT_HISTORIQUE_AR`, `AGENT_HISTORIQUE_FR`, `ACTION_HISTORIQUE_DEMANDE`, `COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE`, `COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE`, `ID_AGENT`, `DETAILS_AR`, `DETAILS_FR`, `ID_ENTITE_TRAITANTE`, `SIGLE_ENTITE_TRAITANTE_FR`, `SIGLE_ENTITE_TRAITANTE_AR`, `ID_PIECE_JOINTE`, `NOM_PIECE_JOINTE`, `REVISION`, `ID_HISTORIQUE_PRECEDENT`, `ETAT`, `ID_ACTION`, `ID_PARTAGE`, `ID_FORMAT`, `FORMAT_FR`, `FORMAT_AR`, `ID_AGENT_REMPLACANT`, `AGENT_REMPLACANT_AR`, `AGENT_REMPLACANT_FR`, `ID_HISTORIQUE_PARENT`, `DATE_ECHEANCE_REPONSE`, `CANAL`, `INFO_CANAL`, `ID_ETAPE_CIRCUIT_VALIDATION`, `CHAMP_SUPP_1`, `CHAMP_SUPP_2`, `CHAMP_SUPP_3`, `CHAMP_SUPP_4`, `CHAMP_SUPP_5`, `ID_INSTRUCTION`, `TYPE_CLASSEMENT`, `TYPE_REPONSE`, `AVEC_REPONSE`, `REALISE`, `DATE_ECHEANCE_REPONSE_PROCHE`, `EMAIL_VALIDATION`, `TOKEN_VALIDATION`, `CHECK_LIST_TAB` FROM `historique_demande` WHERE `ID_HISTORIQUE_DEMANDE` = :p0';
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
            $obj = new HistoriqueDemande();
            $obj->hydrate($row);
            HistoriqueDemandePeer::addInstanceToPool($obj, (string) $key);
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
     * @return HistoriqueDemande|HistoriqueDemande[]|mixed the result, formatted by the current formatter
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
     * @return PropelObjectCollection|HistoriqueDemande[]|mixed the list of results, formatted by the current formatter
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
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the ID_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdHistoriqueDemande(1234); // WHERE ID_HISTORIQUE_DEMANDE = 1234
     * $query->filterByIdHistoriqueDemande(array(12, 34)); // WHERE ID_HISTORIQUE_DEMANDE IN (12, 34)
     * $query->filterByIdHistoriqueDemande(array('min' => 12)); // WHERE ID_HISTORIQUE_DEMANDE >= 12
     * $query->filterByIdHistoriqueDemande(array('max' => 12)); // WHERE ID_HISTORIQUE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idHistoriqueDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdHistoriqueDemande($idHistoriqueDemande = null, $comparison = null)
    {
        if (is_array($idHistoriqueDemande)) {
            $useMinMax = false;
            if (isset($idHistoriqueDemande['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $idHistoriqueDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idHistoriqueDemande['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $idHistoriqueDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $idHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the ID_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDemande(1234); // WHERE ID_DEMANDE = 1234
     * $query->filterByIdDemande(array(12, 34)); // WHERE ID_DEMANDE IN (12, 34)
     * $query->filterByIdDemande(array('min' => 12)); // WHERE ID_DEMANDE >= 12
     * $query->filterByIdDemande(array('max' => 12)); // WHERE ID_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $idDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdDemande($idDemande = null, $comparison = null)
    {
        if (is_array($idDemande)) {
            $useMinMax = false;
            if (isset($idDemande['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_DEMANDE, $idDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDemande['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_DEMANDE, $idDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_DEMANDE, $idDemande, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_AFFECTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteAffecte(1234); // WHERE ID_ENTITE_AFFECTE = 1234
     * $query->filterByIdEntiteAffecte(array(12, 34)); // WHERE ID_ENTITE_AFFECTE IN (12, 34)
     * $query->filterByIdEntiteAffecte(array('min' => 12)); // WHERE ID_ENTITE_AFFECTE >= 12
     * $query->filterByIdEntiteAffecte(array('max' => 12)); // WHERE ID_ENTITE_AFFECTE <= 12
     * </code>
     *
     * @param     mixed $idEntiteAffecte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteAffecte($idEntiteAffecte = null, $comparison = null)
    {
        if (is_array($idEntiteAffecte)) {
            $useMinMax = false;
            if (isset($idEntiteAffecte['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ENTITE_AFFECTE, $idEntiteAffecte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteAffecte['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ENTITE_AFFECTE, $idEntiteAffecte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_ENTITE_AFFECTE, $idEntiteAffecte, $comparison);
    }

    /**
     * Filter the query on the SIGLE_ENTITE_AFFECTE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleEntiteAffecteFr('fooValue');   // WHERE SIGLE_ENTITE_AFFECTE_FR = 'fooValue'
     * $query->filterBySigleEntiteAffecteFr('%fooValue%'); // WHERE SIGLE_ENTITE_AFFECTE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleEntiteAffecteFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterBySigleEntiteAffecteFr($sigleEntiteAffecteFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleEntiteAffecteFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleEntiteAffecteFr)) {
                $sigleEntiteAffecteFr = str_replace('*', '%', $sigleEntiteAffecteFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR, $sigleEntiteAffecteFr, $comparison);
    }

    /**
     * Filter the query on the SIGLE_ENTITE_AFFECTE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleEntiteAffecteAr('fooValue');   // WHERE SIGLE_ENTITE_AFFECTE_AR = 'fooValue'
     * $query->filterBySigleEntiteAffecteAr('%fooValue%'); // WHERE SIGLE_ENTITE_AFFECTE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleEntiteAffecteAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterBySigleEntiteAffecteAr($sigleEntiteAffecteAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleEntiteAffecteAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleEntiteAffecteAr)) {
                $sigleEntiteAffecteAr = str_replace('*', '%', $sigleEntiteAffecteAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR, $sigleEntiteAffecteAr, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_AFFECTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentAffecte(1234); // WHERE ID_AGENT_AFFECTE = 1234
     * $query->filterByIdAgentAffecte(array(12, 34)); // WHERE ID_AGENT_AFFECTE IN (12, 34)
     * $query->filterByIdAgentAffecte(array('min' => 12)); // WHERE ID_AGENT_AFFECTE >= 12
     * $query->filterByIdAgentAffecte(array('max' => 12)); // WHERE ID_AGENT_AFFECTE <= 12
     * </code>
     *
     * @param     mixed $idAgentAffecte The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentAffecte($idAgentAffecte = null, $comparison = null)
    {
        if (is_array($idAgentAffecte)) {
            $useMinMax = false;
            if (isset($idAgentAffecte['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT_AFFECTE, $idAgentAffecte['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentAffecte['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT_AFFECTE, $idAgentAffecte['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT_AFFECTE, $idAgentAffecte, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_AFFECTE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentAffecteFr('fooValue');   // WHERE NOM_AGENT_AFFECTE_FR = 'fooValue'
     * $query->filterByNomAgentAffecteFr('%fooValue%'); // WHERE NOM_AGENT_AFFECTE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentAffecteFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentAffecteFr($nomAgentAffecteFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentAffecteFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentAffecteFr)) {
                $nomAgentAffecteFr = str_replace('*', '%', $nomAgentAffecteFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR, $nomAgentAffecteFr, $comparison);
    }

    /**
     * Filter the query on the NOM_AGENT_AFFECTE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByNomAgentAffecteAr('fooValue');   // WHERE NOM_AGENT_AFFECTE_AR = 'fooValue'
     * $query->filterByNomAgentAffecteAr('%fooValue%'); // WHERE NOM_AGENT_AFFECTE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomAgentAffecteAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByNomAgentAffecteAr($nomAgentAffecteAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomAgentAffecteAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomAgentAffecteAr)) {
                $nomAgentAffecteAr = str_replace('*', '%', $nomAgentAffecteAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR, $nomAgentAffecteAr, $comparison);
    }

    /**
     * Filter the query on the COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireCitoyenHistoriqueDemande('fooValue');   // WHERE COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE = 'fooValue'
     * $query->filterByCommentaireCitoyenHistoriqueDemande('%fooValue%'); // WHERE COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireCitoyenHistoriqueDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByCommentaireCitoyenHistoriqueDemande($commentaireCitoyenHistoriqueDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireCitoyenHistoriqueDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireCitoyenHistoriqueDemande)) {
                $commentaireCitoyenHistoriqueDemande = str_replace('*', '%', $commentaireCitoyenHistoriqueDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE, $commentaireCitoyenHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the STATUT_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByStatutHistoriqueDemande(1234); // WHERE STATUT_HISTORIQUE_DEMANDE = 1234
     * $query->filterByStatutHistoriqueDemande(array(12, 34)); // WHERE STATUT_HISTORIQUE_DEMANDE IN (12, 34)
     * $query->filterByStatutHistoriqueDemande(array('min' => 12)); // WHERE STATUT_HISTORIQUE_DEMANDE >= 12
     * $query->filterByStatutHistoriqueDemande(array('max' => 12)); // WHERE STATUT_HISTORIQUE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $statutHistoriqueDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByStatutHistoriqueDemande($statutHistoriqueDemande = null, $comparison = null)
    {
        if (is_array($statutHistoriqueDemande)) {
            $useMinMax = false;
            if (isset($statutHistoriqueDemande['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE, $statutHistoriqueDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($statutHistoriqueDemande['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE, $statutHistoriqueDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE, $statutHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppreciationPrestationHistoriqueDemande(1234); // WHERE APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE = 1234
     * $query->filterByAppreciationPrestationHistoriqueDemande(array(12, 34)); // WHERE APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE IN (12, 34)
     * $query->filterByAppreciationPrestationHistoriqueDemande(array('min' => 12)); // WHERE APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE >= 12
     * $query->filterByAppreciationPrestationHistoriqueDemande(array('max' => 12)); // WHERE APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE <= 12
     * </code>
     *
     * @param     mixed $appreciationPrestationHistoriqueDemande The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByAppreciationPrestationHistoriqueDemande($appreciationPrestationHistoriqueDemande = null, $comparison = null)
    {
        if (is_array($appreciationPrestationHistoriqueDemande)) {
            $useMinMax = false;
            if (isset($appreciationPrestationHistoriqueDemande['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE, $appreciationPrestationHistoriqueDemande['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appreciationPrestationHistoriqueDemande['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE, $appreciationPrestationHistoriqueDemande['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE, $appreciationPrestationHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the DATE_INTERVENTION column
     *
     * Example usage:
     * <code>
     * $query->filterByDateIntervention('2011-03-14'); // WHERE DATE_INTERVENTION = '2011-03-14'
     * $query->filterByDateIntervention('now'); // WHERE DATE_INTERVENTION = '2011-03-14'
     * $query->filterByDateIntervention(array('max' => 'yesterday')); // WHERE DATE_INTERVENTION > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateIntervention The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByDateIntervention($dateIntervention = null, $comparison = null)
    {
        if (is_array($dateIntervention)) {
            $useMinMax = false;
            if (isset($dateIntervention['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::DATE_INTERVENTION, $dateIntervention['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateIntervention['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::DATE_INTERVENTION, $dateIntervention['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::DATE_INTERVENTION, $dateIntervention, $comparison);
    }

    /**
     * Filter the query on the AGENT_HISTORIQUE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentHistoriqueAr('fooValue');   // WHERE AGENT_HISTORIQUE_AR = 'fooValue'
     * $query->filterByAgentHistoriqueAr('%fooValue%'); // WHERE AGENT_HISTORIQUE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agentHistoriqueAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByAgentHistoriqueAr($agentHistoriqueAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agentHistoriqueAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agentHistoriqueAr)) {
                $agentHistoriqueAr = str_replace('*', '%', $agentHistoriqueAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::AGENT_HISTORIQUE_AR, $agentHistoriqueAr, $comparison);
    }

    /**
     * Filter the query on the AGENT_HISTORIQUE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentHistoriqueFr('fooValue');   // WHERE AGENT_HISTORIQUE_FR = 'fooValue'
     * $query->filterByAgentHistoriqueFr('%fooValue%'); // WHERE AGENT_HISTORIQUE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agentHistoriqueFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByAgentHistoriqueFr($agentHistoriqueFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agentHistoriqueFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agentHistoriqueFr)) {
                $agentHistoriqueFr = str_replace('*', '%', $agentHistoriqueFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::AGENT_HISTORIQUE_FR, $agentHistoriqueFr, $comparison);
    }

    /**
     * Filter the query on the ACTION_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByActionHistoriqueDemande('fooValue');   // WHERE ACTION_HISTORIQUE_DEMANDE = 'fooValue'
     * $query->filterByActionHistoriqueDemande('%fooValue%'); // WHERE ACTION_HISTORIQUE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $actionHistoriqueDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByActionHistoriqueDemande($actionHistoriqueDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($actionHistoriqueDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $actionHistoriqueDemande)) {
                $actionHistoriqueDemande = str_replace('*', '%', $actionHistoriqueDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE, $actionHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireAgentInterneHistoriqueDemande('fooValue');   // WHERE COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE = 'fooValue'
     * $query->filterByCommentaireAgentInterneHistoriqueDemande('%fooValue%'); // WHERE COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireAgentInterneHistoriqueDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByCommentaireAgentInterneHistoriqueDemande($commentaireAgentInterneHistoriqueDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireAgentInterneHistoriqueDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireAgentInterneHistoriqueDemande)) {
                $commentaireAgentInterneHistoriqueDemande = str_replace('*', '%', $commentaireAgentInterneHistoriqueDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE, $commentaireAgentInterneHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE column
     *
     * Example usage:
     * <code>
     * $query->filterByCommentaireAgentVisibleHistoriqueDemande('fooValue');   // WHERE COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE = 'fooValue'
     * $query->filterByCommentaireAgentVisibleHistoriqueDemande('%fooValue%'); // WHERE COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $commentaireAgentVisibleHistoriqueDemande The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByCommentaireAgentVisibleHistoriqueDemande($commentaireAgentVisibleHistoriqueDemande = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($commentaireAgentVisibleHistoriqueDemande)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $commentaireAgentVisibleHistoriqueDemande)) {
                $commentaireAgentVisibleHistoriqueDemande = str_replace('*', '%', $commentaireAgentVisibleHistoriqueDemande);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE, $commentaireAgentVisibleHistoriqueDemande, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgent(1234); // WHERE ID_AGENT = 1234
     * $query->filterByIdAgent(array(12, 34)); // WHERE ID_AGENT IN (12, 34)
     * $query->filterByIdAgent(array('min' => 12)); // WHERE ID_AGENT >= 12
     * $query->filterByIdAgent(array('max' => 12)); // WHERE ID_AGENT <= 12
     * </code>
     *
     * @param     mixed $idAgent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgent($idAgent = null, $comparison = null)
    {
        if (is_array($idAgent)) {
            $useMinMax = false;
            if (isset($idAgent['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT, $idAgent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgent['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT, $idAgent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT, $idAgent, $comparison);
    }

    /**
     * Filter the query on the DETAILS_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailsAr('fooValue');   // WHERE DETAILS_AR = 'fooValue'
     * $query->filterByDetailsAr('%fooValue%'); // WHERE DETAILS_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailsAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByDetailsAr($detailsAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailsAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailsAr)) {
                $detailsAr = str_replace('*', '%', $detailsAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::DETAILS_AR, $detailsAr, $comparison);
    }

    /**
     * Filter the query on the DETAILS_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByDetailsFr('fooValue');   // WHERE DETAILS_FR = 'fooValue'
     * $query->filterByDetailsFr('%fooValue%'); // WHERE DETAILS_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $detailsFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByDetailsFr($detailsFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($detailsFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $detailsFr)) {
                $detailsFr = str_replace('*', '%', $detailsFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::DETAILS_FR, $detailsFr, $comparison);
    }

    /**
     * Filter the query on the ID_ENTITE_TRAITANTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEntiteTraitante(1234); // WHERE ID_ENTITE_TRAITANTE = 1234
     * $query->filterByIdEntiteTraitante(array(12, 34)); // WHERE ID_ENTITE_TRAITANTE IN (12, 34)
     * $query->filterByIdEntiteTraitante(array('min' => 12)); // WHERE ID_ENTITE_TRAITANTE >= 12
     * $query->filterByIdEntiteTraitante(array('max' => 12)); // WHERE ID_ENTITE_TRAITANTE <= 12
     * </code>
     *
     * @param     mixed $idEntiteTraitante The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEntiteTraitante($idEntiteTraitante = null, $comparison = null)
    {
        if (is_array($idEntiteTraitante)) {
            $useMinMax = false;
            if (isset($idEntiteTraitante['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE, $idEntiteTraitante['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEntiteTraitante['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE, $idEntiteTraitante['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE, $idEntiteTraitante, $comparison);
    }

    /**
     * Filter the query on the SIGLE_ENTITE_TRAITANTE_FR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleEntiteTraitanteFr('fooValue');   // WHERE SIGLE_ENTITE_TRAITANTE_FR = 'fooValue'
     * $query->filterBySigleEntiteTraitanteFr('%fooValue%'); // WHERE SIGLE_ENTITE_TRAITANTE_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleEntiteTraitanteFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterBySigleEntiteTraitanteFr($sigleEntiteTraitanteFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleEntiteTraitanteFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleEntiteTraitanteFr)) {
                $sigleEntiteTraitanteFr = str_replace('*', '%', $sigleEntiteTraitanteFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR, $sigleEntiteTraitanteFr, $comparison);
    }

    /**
     * Filter the query on the SIGLE_ENTITE_TRAITANTE_AR column
     *
     * Example usage:
     * <code>
     * $query->filterBySigleEntiteTraitanteAr('fooValue');   // WHERE SIGLE_ENTITE_TRAITANTE_AR = 'fooValue'
     * $query->filterBySigleEntiteTraitanteAr('%fooValue%'); // WHERE SIGLE_ENTITE_TRAITANTE_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $sigleEntiteTraitanteAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterBySigleEntiteTraitanteAr($sigleEntiteTraitanteAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($sigleEntiteTraitanteAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $sigleEntiteTraitanteAr)) {
                $sigleEntiteTraitanteAr = str_replace('*', '%', $sigleEntiteTraitanteAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR, $sigleEntiteTraitanteAr, $comparison);
    }

    /**
     * Filter the query on the ID_PIECE_JOINTE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPieceJointe(1234); // WHERE ID_PIECE_JOINTE = 1234
     * $query->filterByIdPieceJointe(array(12, 34)); // WHERE ID_PIECE_JOINTE IN (12, 34)
     * $query->filterByIdPieceJointe(array('min' => 12)); // WHERE ID_PIECE_JOINTE >= 12
     * $query->filterByIdPieceJointe(array('max' => 12)); // WHERE ID_PIECE_JOINTE <= 12
     * </code>
     *
     * @param     mixed $idPieceJointe The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdPieceJointe($idPieceJointe = null, $comparison = null)
    {
        if (is_array($idPieceJointe)) {
            $useMinMax = false;
            if (isset($idPieceJointe['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_PIECE_JOINTE, $idPieceJointe['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPieceJointe['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_PIECE_JOINTE, $idPieceJointe['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_PIECE_JOINTE, $idPieceJointe, $comparison);
    }

    /**
     * Filter the query on the NOM_PIECE_JOINTE column
     *
     * Example usage:
     * <code>
     * $query->filterByNomPieceJointe('fooValue');   // WHERE NOM_PIECE_JOINTE = 'fooValue'
     * $query->filterByNomPieceJointe('%fooValue%'); // WHERE NOM_PIECE_JOINTE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $nomPieceJointe The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByNomPieceJointe($nomPieceJointe = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($nomPieceJointe)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $nomPieceJointe)) {
                $nomPieceJointe = str_replace('*', '%', $nomPieceJointe);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::NOM_PIECE_JOINTE, $nomPieceJointe, $comparison);
    }

    /**
     * Filter the query on the REVISION column
     *
     * Example usage:
     * <code>
     * $query->filterByRevision(1234); // WHERE REVISION = 1234
     * $query->filterByRevision(array(12, 34)); // WHERE REVISION IN (12, 34)
     * $query->filterByRevision(array('min' => 12)); // WHERE REVISION >= 12
     * $query->filterByRevision(array('max' => 12)); // WHERE REVISION <= 12
     * </code>
     *
     * @param     mixed $revision The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByRevision($revision = null, $comparison = null)
    {
        if (is_array($revision)) {
            $useMinMax = false;
            if (isset($revision['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::REVISION, $revision['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($revision['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::REVISION, $revision['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::REVISION, $revision, $comparison);
    }

    /**
     * Filter the query on the ID_HISTORIQUE_PRECEDENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdHistoriquePrecedent(1234); // WHERE ID_HISTORIQUE_PRECEDENT = 1234
     * $query->filterByIdHistoriquePrecedent(array(12, 34)); // WHERE ID_HISTORIQUE_PRECEDENT IN (12, 34)
     * $query->filterByIdHistoriquePrecedent(array('min' => 12)); // WHERE ID_HISTORIQUE_PRECEDENT >= 12
     * $query->filterByIdHistoriquePrecedent(array('max' => 12)); // WHERE ID_HISTORIQUE_PRECEDENT <= 12
     * </code>
     *
     * @param     mixed $idHistoriquePrecedent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdHistoriquePrecedent($idHistoriquePrecedent = null, $comparison = null)
    {
        if (is_array($idHistoriquePrecedent)) {
            $useMinMax = false;
            if (isset($idHistoriquePrecedent['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT, $idHistoriquePrecedent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idHistoriquePrecedent['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT, $idHistoriquePrecedent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT, $idHistoriquePrecedent, $comparison);
    }

    /**
     * Filter the query on the ETAT column
     *
     * Example usage:
     * <code>
     * $query->filterByEtat('fooValue');   // WHERE ETAT = 'fooValue'
     * $query->filterByEtat('%fooValue%'); // WHERE ETAT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $etat The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByEtat($etat = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($etat)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $etat)) {
                $etat = str_replace('*', '%', $etat);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ETAT, $etat, $comparison);
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
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAction($idAction = null, $comparison = null)
    {
        if (is_array($idAction)) {
            $useMinMax = false;
            if (isset($idAction['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ACTION, $idAction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAction['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ACTION, $idAction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_ACTION, $idAction, $comparison);
    }

    /**
     * Filter the query on the ID_PARTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPartage(1234); // WHERE ID_PARTAGE = 1234
     * $query->filterByIdPartage(array(12, 34)); // WHERE ID_PARTAGE IN (12, 34)
     * $query->filterByIdPartage(array('min' => 12)); // WHERE ID_PARTAGE >= 12
     * $query->filterByIdPartage(array('max' => 12)); // WHERE ID_PARTAGE <= 12
     * </code>
     *
     * @param     mixed $idPartage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdPartage($idPartage = null, $comparison = null)
    {
        if (is_array($idPartage)) {
            $useMinMax = false;
            if (isset($idPartage['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_PARTAGE, $idPartage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPartage['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_PARTAGE, $idPartage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_PARTAGE, $idPartage, $comparison);
    }

    /**
     * Filter the query on the ID_FORMAT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdFormat(1234); // WHERE ID_FORMAT = 1234
     * $query->filterByIdFormat(array(12, 34)); // WHERE ID_FORMAT IN (12, 34)
     * $query->filterByIdFormat(array('min' => 12)); // WHERE ID_FORMAT >= 12
     * $query->filterByIdFormat(array('max' => 12)); // WHERE ID_FORMAT <= 12
     * </code>
     *
     * @param     mixed $idFormat The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdFormat($idFormat = null, $comparison = null)
    {
        if (is_array($idFormat)) {
            $useMinMax = false;
            if (isset($idFormat['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_FORMAT, $idFormat['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idFormat['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_FORMAT, $idFormat['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_FORMAT, $idFormat, $comparison);
    }

    /**
     * Filter the query on the FORMAT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByFormatFr('fooValue');   // WHERE FORMAT_FR = 'fooValue'
     * $query->filterByFormatFr('%fooValue%'); // WHERE FORMAT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formatFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByFormatFr($formatFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formatFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formatFr)) {
                $formatFr = str_replace('*', '%', $formatFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::FORMAT_FR, $formatFr, $comparison);
    }

    /**
     * Filter the query on the FORMAT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByFormatAr('fooValue');   // WHERE FORMAT_AR = 'fooValue'
     * $query->filterByFormatAr('%fooValue%'); // WHERE FORMAT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $formatAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByFormatAr($formatAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($formatAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $formatAr)) {
                $formatAr = str_replace('*', '%', $formatAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::FORMAT_AR, $formatAr, $comparison);
    }

    /**
     * Filter the query on the ID_AGENT_REMPLACANT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdAgentRemplacant(1234); // WHERE ID_AGENT_REMPLACANT = 1234
     * $query->filterByIdAgentRemplacant(array(12, 34)); // WHERE ID_AGENT_REMPLACANT IN (12, 34)
     * $query->filterByIdAgentRemplacant(array('min' => 12)); // WHERE ID_AGENT_REMPLACANT >= 12
     * $query->filterByIdAgentRemplacant(array('max' => 12)); // WHERE ID_AGENT_REMPLACANT <= 12
     * </code>
     *
     * @param     mixed $idAgentRemplacant The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdAgentRemplacant($idAgentRemplacant = null, $comparison = null)
    {
        if (is_array($idAgentRemplacant)) {
            $useMinMax = false;
            if (isset($idAgentRemplacant['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT_REMPLACANT, $idAgentRemplacant['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idAgentRemplacant['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT_REMPLACANT, $idAgentRemplacant['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_AGENT_REMPLACANT, $idAgentRemplacant, $comparison);
    }

    /**
     * Filter the query on the AGENT_REMPLACANT_AR column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentRemplacantAr('fooValue');   // WHERE AGENT_REMPLACANT_AR = 'fooValue'
     * $query->filterByAgentRemplacantAr('%fooValue%'); // WHERE AGENT_REMPLACANT_AR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agentRemplacantAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByAgentRemplacantAr($agentRemplacantAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agentRemplacantAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agentRemplacantAr)) {
                $agentRemplacantAr = str_replace('*', '%', $agentRemplacantAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::AGENT_REMPLACANT_AR, $agentRemplacantAr, $comparison);
    }

    /**
     * Filter the query on the AGENT_REMPLACANT_FR column
     *
     * Example usage:
     * <code>
     * $query->filterByAgentRemplacantFr('fooValue');   // WHERE AGENT_REMPLACANT_FR = 'fooValue'
     * $query->filterByAgentRemplacantFr('%fooValue%'); // WHERE AGENT_REMPLACANT_FR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agentRemplacantFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByAgentRemplacantFr($agentRemplacantFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agentRemplacantFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agentRemplacantFr)) {
                $agentRemplacantFr = str_replace('*', '%', $agentRemplacantFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::AGENT_REMPLACANT_FR, $agentRemplacantFr, $comparison);
    }

    /**
     * Filter the query on the ID_HISTORIQUE_PARENT column
     *
     * Example usage:
     * <code>
     * $query->filterByIdHistoriqueParent(1234); // WHERE ID_HISTORIQUE_PARENT = 1234
     * $query->filterByIdHistoriqueParent(array(12, 34)); // WHERE ID_HISTORIQUE_PARENT IN (12, 34)
     * $query->filterByIdHistoriqueParent(array('min' => 12)); // WHERE ID_HISTORIQUE_PARENT >= 12
     * $query->filterByIdHistoriqueParent(array('max' => 12)); // WHERE ID_HISTORIQUE_PARENT <= 12
     * </code>
     *
     * @param     mixed $idHistoriqueParent The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdHistoriqueParent($idHistoriqueParent = null, $comparison = null)
    {
        if (is_array($idHistoriqueParent)) {
            $useMinMax = false;
            if (isset($idHistoriqueParent['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT, $idHistoriqueParent['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idHistoriqueParent['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT, $idHistoriqueParent['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT, $idHistoriqueParent, $comparison);
    }

    /**
     * Filter the query on the DATE_ECHEANCE_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEcheanceReponse('2011-03-14'); // WHERE DATE_ECHEANCE_REPONSE = '2011-03-14'
     * $query->filterByDateEcheanceReponse('now'); // WHERE DATE_ECHEANCE_REPONSE = '2011-03-14'
     * $query->filterByDateEcheanceReponse(array('max' => 'yesterday')); // WHERE DATE_ECHEANCE_REPONSE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEcheanceReponse The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByDateEcheanceReponse($dateEcheanceReponse = null, $comparison = null)
    {
        if (is_array($dateEcheanceReponse)) {
            $useMinMax = false;
            if (isset($dateEcheanceReponse['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE, $dateEcheanceReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheanceReponse['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE, $dateEcheanceReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE, $dateEcheanceReponse, $comparison);
    }

    /**
     * Filter the query on the CANAL column
     *
     * Example usage:
     * <code>
     * $query->filterByCanal('fooValue');   // WHERE CANAL = 'fooValue'
     * $query->filterByCanal('%fooValue%'); // WHERE CANAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $canal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByCanal($canal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($canal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $canal)) {
                $canal = str_replace('*', '%', $canal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CANAL, $canal, $comparison);
    }

    /**
     * Filter the query on the INFO_CANAL column
     *
     * Example usage:
     * <code>
     * $query->filterByInfoCanal('fooValue');   // WHERE INFO_CANAL = 'fooValue'
     * $query->filterByInfoCanal('%fooValue%'); // WHERE INFO_CANAL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $infoCanal The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByInfoCanal($infoCanal = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($infoCanal)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $infoCanal)) {
                $infoCanal = str_replace('*', '%', $infoCanal);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::INFO_CANAL, $infoCanal, $comparison);
    }

    /**
     * Filter the query on the ID_ETAPE_CIRCUIT_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdEtapeCircuitValidation(1234); // WHERE ID_ETAPE_CIRCUIT_VALIDATION = 1234
     * $query->filterByIdEtapeCircuitValidation(array(12, 34)); // WHERE ID_ETAPE_CIRCUIT_VALIDATION IN (12, 34)
     * $query->filterByIdEtapeCircuitValidation(array('min' => 12)); // WHERE ID_ETAPE_CIRCUIT_VALIDATION >= 12
     * $query->filterByIdEtapeCircuitValidation(array('max' => 12)); // WHERE ID_ETAPE_CIRCUIT_VALIDATION <= 12
     * </code>
     *
     * @param     mixed $idEtapeCircuitValidation The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdEtapeCircuitValidation($idEtapeCircuitValidation = null, $comparison = null)
    {
        if (is_array($idEtapeCircuitValidation)) {
            $useMinMax = false;
            if (isset($idEtapeCircuitValidation['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION, $idEtapeCircuitValidation['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idEtapeCircuitValidation['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION, $idEtapeCircuitValidation['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION, $idEtapeCircuitValidation, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp1('fooValue');   // WHERE CHAMP_SUPP_1 = 'fooValue'
     * $query->filterByChampSupp1('%fooValue%'); // WHERE CHAMP_SUPP_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp1($champSupp1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp1)) {
                $champSupp1 = str_replace('*', '%', $champSupp1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CHAMP_SUPP_1, $champSupp1, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp2('fooValue');   // WHERE CHAMP_SUPP_2 = 'fooValue'
     * $query->filterByChampSupp2('%fooValue%'); // WHERE CHAMP_SUPP_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp2($champSupp2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp2)) {
                $champSupp2 = str_replace('*', '%', $champSupp2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CHAMP_SUPP_2, $champSupp2, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_3 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp3('fooValue');   // WHERE CHAMP_SUPP_3 = 'fooValue'
     * $query->filterByChampSupp3('%fooValue%'); // WHERE CHAMP_SUPP_3 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp3 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp3($champSupp3 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp3)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp3)) {
                $champSupp3 = str_replace('*', '%', $champSupp3);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CHAMP_SUPP_3, $champSupp3, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_4 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp4('fooValue');   // WHERE CHAMP_SUPP_4 = 'fooValue'
     * $query->filterByChampSupp4('%fooValue%'); // WHERE CHAMP_SUPP_4 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp4 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp4($champSupp4 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp4)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp4)) {
                $champSupp4 = str_replace('*', '%', $champSupp4);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CHAMP_SUPP_4, $champSupp4, $comparison);
    }

    /**
     * Filter the query on the CHAMP_SUPP_5 column
     *
     * Example usage:
     * <code>
     * $query->filterByChampSupp5('fooValue');   // WHERE CHAMP_SUPP_5 = 'fooValue'
     * $query->filterByChampSupp5('%fooValue%'); // WHERE CHAMP_SUPP_5 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $champSupp5 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByChampSupp5($champSupp5 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($champSupp5)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $champSupp5)) {
                $champSupp5 = str_replace('*', '%', $champSupp5);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CHAMP_SUPP_5, $champSupp5, $comparison);
    }

    /**
     * Filter the query on the ID_INSTRUCTION column
     *
     * Example usage:
     * <code>
     * $query->filterByIdInstruction(1234); // WHERE ID_INSTRUCTION = 1234
     * $query->filterByIdInstruction(array(12, 34)); // WHERE ID_INSTRUCTION IN (12, 34)
     * $query->filterByIdInstruction(array('min' => 12)); // WHERE ID_INSTRUCTION >= 12
     * $query->filterByIdInstruction(array('max' => 12)); // WHERE ID_INSTRUCTION <= 12
     * </code>
     *
     * @param     mixed $idInstruction The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByIdInstruction($idInstruction = null, $comparison = null)
    {
        if (is_array($idInstruction)) {
            $useMinMax = false;
            if (isset($idInstruction['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_INSTRUCTION, $idInstruction['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idInstruction['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::ID_INSTRUCTION, $idInstruction['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::ID_INSTRUCTION, $idInstruction, $comparison);
    }

    /**
     * Filter the query on the TYPE_CLASSEMENT column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeClassement(1234); // WHERE TYPE_CLASSEMENT = 1234
     * $query->filterByTypeClassement(array(12, 34)); // WHERE TYPE_CLASSEMENT IN (12, 34)
     * $query->filterByTypeClassement(array('min' => 12)); // WHERE TYPE_CLASSEMENT >= 12
     * $query->filterByTypeClassement(array('max' => 12)); // WHERE TYPE_CLASSEMENT <= 12
     * </code>
     *
     * @param     mixed $typeClassement The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByTypeClassement($typeClassement = null, $comparison = null)
    {
        if (is_array($typeClassement)) {
            $useMinMax = false;
            if (isset($typeClassement['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::TYPE_CLASSEMENT, $typeClassement['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeClassement['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::TYPE_CLASSEMENT, $typeClassement['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::TYPE_CLASSEMENT, $typeClassement, $comparison);
    }

    /**
     * Filter the query on the TYPE_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByTypeReponse(1234); // WHERE TYPE_REPONSE = 1234
     * $query->filterByTypeReponse(array(12, 34)); // WHERE TYPE_REPONSE IN (12, 34)
     * $query->filterByTypeReponse(array('min' => 12)); // WHERE TYPE_REPONSE >= 12
     * $query->filterByTypeReponse(array('max' => 12)); // WHERE TYPE_REPONSE <= 12
     * </code>
     *
     * @param     mixed $typeReponse The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByTypeReponse($typeReponse = null, $comparison = null)
    {
        if (is_array($typeReponse)) {
            $useMinMax = false;
            if (isset($typeReponse['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::TYPE_REPONSE, $typeReponse['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($typeReponse['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::TYPE_REPONSE, $typeReponse['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::TYPE_REPONSE, $typeReponse, $comparison);
    }

    /**
     * Filter the query on the AVEC_REPONSE column
     *
     * Example usage:
     * <code>
     * $query->filterByAvecReponse('fooValue');   // WHERE AVEC_REPONSE = 'fooValue'
     * $query->filterByAvecReponse('%fooValue%'); // WHERE AVEC_REPONSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $avecReponse The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByAvecReponse($avecReponse = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($avecReponse)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $avecReponse)) {
                $avecReponse = str_replace('*', '%', $avecReponse);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::AVEC_REPONSE, $avecReponse, $comparison);
    }

    /**
     * Filter the query on the REALISE column
     *
     * Example usage:
     * <code>
     * $query->filterByRealise('fooValue');   // WHERE REALISE = 'fooValue'
     * $query->filterByRealise('%fooValue%'); // WHERE REALISE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $realise The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByRealise($realise = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($realise)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $realise)) {
                $realise = str_replace('*', '%', $realise);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::REALISE, $realise, $comparison);
    }

    /**
     * Filter the query on the DATE_ECHEANCE_REPONSE_PROCHE column
     *
     * Example usage:
     * <code>
     * $query->filterByDateEcheanceReponseProche('2011-03-14'); // WHERE DATE_ECHEANCE_REPONSE_PROCHE = '2011-03-14'
     * $query->filterByDateEcheanceReponseProche('now'); // WHERE DATE_ECHEANCE_REPONSE_PROCHE = '2011-03-14'
     * $query->filterByDateEcheanceReponseProche(array('max' => 'yesterday')); // WHERE DATE_ECHEANCE_REPONSE_PROCHE > '2011-03-13'
     * </code>
     *
     * @param     mixed $dateEcheanceReponseProche The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByDateEcheanceReponseProche($dateEcheanceReponseProche = null, $comparison = null)
    {
        if (is_array($dateEcheanceReponseProche)) {
            $useMinMax = false;
            if (isset($dateEcheanceReponseProche['min'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $dateEcheanceReponseProche['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($dateEcheanceReponseProche['max'])) {
                $this->addUsingAlias(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $dateEcheanceReponseProche['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, $dateEcheanceReponseProche, $comparison);
    }

    /**
     * Filter the query on the EMAIL_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByEmailValidation('fooValue');   // WHERE EMAIL_VALIDATION = 'fooValue'
     * $query->filterByEmailValidation('%fooValue%'); // WHERE EMAIL_VALIDATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $emailValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByEmailValidation($emailValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($emailValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $emailValidation)) {
                $emailValidation = str_replace('*', '%', $emailValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::EMAIL_VALIDATION, $emailValidation, $comparison);
    }

    /**
     * Filter the query on the TOKEN_VALIDATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTokenValidation('fooValue');   // WHERE TOKEN_VALIDATION = 'fooValue'
     * $query->filterByTokenValidation('%fooValue%'); // WHERE TOKEN_VALIDATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tokenValidation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByTokenValidation($tokenValidation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tokenValidation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tokenValidation)) {
                $tokenValidation = str_replace('*', '%', $tokenValidation);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::TOKEN_VALIDATION, $tokenValidation, $comparison);
    }

    /**
     * Filter the query on the CHECK_LIST_TAB column
     *
     * Example usage:
     * <code>
     * $query->filterByCheckListTab('fooValue');   // WHERE CHECK_LIST_TAB = 'fooValue'
     * $query->filterByCheckListTab('%fooValue%'); // WHERE CHECK_LIST_TAB LIKE '%fooValue%'
     * </code>
     *
     * @param     string $checkListTab The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function filterByCheckListTab($checkListTab = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($checkListTab)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $checkListTab)) {
                $checkListTab = str_replace('*', '%', $checkListTab);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(HistoriqueDemandePeer::CHECK_LIST_TAB, $checkListTab, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param   HistoriqueDemande $historiqueDemande Object to remove from the list of results
     *
     * @return HistoriqueDemandeQuery The current query, for fluid interface
     */
    public function prune($historiqueDemande = null)
    {
        if ($historiqueDemande) {
            $this->addUsingAlias(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $historiqueDemande->getIdHistoriqueDemande(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

}
