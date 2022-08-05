<?php


/**
 * Base class that represents a query for the 'CategorieLot' table.
 *
 * 
 *
 * @method CommonCategorieLotQuery orderByOrganisme($order = Criteria::ASC) Order by the organisme column
 * @method CommonCategorieLotQuery orderByConsultationRef($order = Criteria::ASC) Order by the consultation_ref column
 * @method CommonCategorieLotQuery orderByLot($order = Criteria::ASC) Order by the lot column
 * @method CommonCategorieLotQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method CommonCategorieLotQuery orderByIdTrDescription($order = Criteria::ASC) Order by the id_tr_description column
 * @method CommonCategorieLotQuery orderByCategorie($order = Criteria::ASC) Order by the categorie column
 * @method CommonCategorieLotQuery orderByDescriptionDetail($order = Criteria::ASC) Order by the description_detail column
 * @method CommonCategorieLotQuery orderByIdTrDescriptionDetail($order = Criteria::ASC) Order by the id_tr_description_detail column
 * @method CommonCategorieLotQuery orderByCodeCpv1($order = Criteria::ASC) Order by the code_cpv_1 column
 * @method CommonCategorieLotQuery orderByCodeCpv2($order = Criteria::ASC) Order by the code_cpv_2 column
 * @method CommonCategorieLotQuery orderByDescriptionFr($order = Criteria::ASC) Order by the description_fr column
 * @method CommonCategorieLotQuery orderByDescriptionEn($order = Criteria::ASC) Order by the description_en column
 * @method CommonCategorieLotQuery orderByDescriptionEs($order = Criteria::ASC) Order by the description_es column
 * @method CommonCategorieLotQuery orderByDescriptionSu($order = Criteria::ASC) Order by the description_su column
 * @method CommonCategorieLotQuery orderByDescriptionDu($order = Criteria::ASC) Order by the description_du column
 * @method CommonCategorieLotQuery orderByDescriptionCz($order = Criteria::ASC) Order by the description_cz column
 * @method CommonCategorieLotQuery orderByDescriptionAr($order = Criteria::ASC) Order by the description_ar column
 * @method CommonCategorieLotQuery orderByDescriptionDetailFr($order = Criteria::ASC) Order by the description_detail_fr column
 * @method CommonCategorieLotQuery orderByDescriptionDetailEn($order = Criteria::ASC) Order by the description_detail_en column
 * @method CommonCategorieLotQuery orderByDescriptionDetailEs($order = Criteria::ASC) Order by the description_detail_es column
 * @method CommonCategorieLotQuery orderByDescriptionDetailSu($order = Criteria::ASC) Order by the description_detail_su column
 * @method CommonCategorieLotQuery orderByDescriptionDetailDu($order = Criteria::ASC) Order by the description_detail_du column
 * @method CommonCategorieLotQuery orderByDescriptionDetailCz($order = Criteria::ASC) Order by the description_detail_cz column
 * @method CommonCategorieLotQuery orderByDescriptionDetailAr($order = Criteria::ASC) Order by the description_detail_ar column
 * @method CommonCategorieLotQuery orderByIdLotExterne($order = Criteria::ASC) Order by the id_lot_externe column
 * @method CommonCategorieLotQuery orderByCautionProvisoire($order = Criteria::ASC) Order by the caution_provisoire column
 * @method CommonCategorieLotQuery orderByQualification($order = Criteria::ASC) Order by the qualification column
 * @method CommonCategorieLotQuery orderByAgrements($order = Criteria::ASC) Order by the agrements column
 * @method CommonCategorieLotQuery orderByAddEchantillion($order = Criteria::ASC) Order by the add_echantillion column
 * @method CommonCategorieLotQuery orderByDateLimiteEchantillion($order = Criteria::ASC) Order by the date_limite_echantillion column
 * @method CommonCategorieLotQuery orderByAddReunion($order = Criteria::ASC) Order by the add_reunion column
 * @method CommonCategorieLotQuery orderByDateReunion($order = Criteria::ASC) Order by the date_reunion column
 * @method CommonCategorieLotQuery orderByVariantes($order = Criteria::ASC) Order by the variantes column
 * @method CommonCategorieLotQuery orderByEchantillon($order = Criteria::ASC) Order by the echantillon column
 * @method CommonCategorieLotQuery orderByReunion($order = Criteria::ASC) Order by the reunion column
 * @method CommonCategorieLotQuery orderByVisitesLieux($order = Criteria::ASC) Order by the visites_lieux column
 * @method CommonCategorieLotQuery orderByAddEchantillionFr($order = Criteria::ASC) Order by the add_echantillion_fr column
 * @method CommonCategorieLotQuery orderByAddEchantillionEn($order = Criteria::ASC) Order by the add_echantillion_en column
 * @method CommonCategorieLotQuery orderByAddEchantillionEs($order = Criteria::ASC) Order by the add_echantillion_es column
 * @method CommonCategorieLotQuery orderByAddEchantillionSu($order = Criteria::ASC) Order by the add_echantillion_su column
 * @method CommonCategorieLotQuery orderByAddEchantillionDu($order = Criteria::ASC) Order by the add_echantillion_du column
 * @method CommonCategorieLotQuery orderByAddEchantillionCz($order = Criteria::ASC) Order by the add_echantillion_cz column
 * @method CommonCategorieLotQuery orderByAddEchantillionAr($order = Criteria::ASC) Order by the add_echantillion_ar column
 * @method CommonCategorieLotQuery orderByAddReunionFr($order = Criteria::ASC) Order by the add_reunion_fr column
 * @method CommonCategorieLotQuery orderByAddReunionEn($order = Criteria::ASC) Order by the add_reunion_en column
 * @method CommonCategorieLotQuery orderByAddReunionEs($order = Criteria::ASC) Order by the add_reunion_es column
 * @method CommonCategorieLotQuery orderByAddReunionSu($order = Criteria::ASC) Order by the add_reunion_su column
 * @method CommonCategorieLotQuery orderByAddReunionDu($order = Criteria::ASC) Order by the add_reunion_du column
 * @method CommonCategorieLotQuery orderByAddReunionCz($order = Criteria::ASC) Order by the add_reunion_cz column
 * @method CommonCategorieLotQuery orderByAddReunionAr($order = Criteria::ASC) Order by the add_reunion_ar column
 * @method CommonCategorieLotQuery orderByDescriptionDetailIt($order = Criteria::ASC) Order by the description_detail_it column
 * @method CommonCategorieLotQuery orderByDescriptionIt($order = Criteria::ASC) Order by the description_it column
 * @method CommonCategorieLotQuery orderByAddEchantillionIt($order = Criteria::ASC) Order by the add_echantillion_it column
 * @method CommonCategorieLotQuery orderByAddReunionIt($order = Criteria::ASC) Order by the add_reunion_it column
 * @method CommonCategorieLotQuery orderByClauseSociale($order = Criteria::ASC) Order by the clause_sociale column
 * @method CommonCategorieLotQuery orderByClauseEnvironnementale($order = Criteria::ASC) Order by the clause_environnementale column
 * @method CommonCategorieLotQuery orderByDecision($order = Criteria::ASC) Order by the decision column
 * @method CommonCategorieLotQuery orderByClauseSocialeConditionExecution($order = Criteria::ASC) Order by the clause_sociale_condition_execution column
 * @method CommonCategorieLotQuery orderByClauseSocialeInsertion($order = Criteria::ASC) Order by the clause_sociale_insertion column
 * @method CommonCategorieLotQuery orderByClauseSocialeAteliersProteges($order = Criteria::ASC) Order by the clause_sociale_ateliers_proteges column
 * @method CommonCategorieLotQuery orderByClauseEnvSpecsTechniques($order = Criteria::ASC) Order by the clause_env_specs_techniques column
 * @method CommonCategorieLotQuery orderByClauseEnvCondExecution($order = Criteria::ASC) Order by the clause_env_cond_execution column
 * @method CommonCategorieLotQuery orderByClauseEnvCriteresSelect($order = Criteria::ASC) Order by the clause_env_criteres_select column
 * @method CommonCategorieLotQuery orderByIdDonneeComplementaire($order = Criteria::ASC) Order by the id_donnee_complementaire column
 *
 * @method CommonCategorieLotQuery groupByOrganisme() Group by the organisme column
 * @method CommonCategorieLotQuery groupByConsultationRef() Group by the consultation_ref column
 * @method CommonCategorieLotQuery groupByLot() Group by the lot column
 * @method CommonCategorieLotQuery groupByDescription() Group by the description column
 * @method CommonCategorieLotQuery groupByIdTrDescription() Group by the id_tr_description column
 * @method CommonCategorieLotQuery groupByCategorie() Group by the categorie column
 * @method CommonCategorieLotQuery groupByDescriptionDetail() Group by the description_detail column
 * @method CommonCategorieLotQuery groupByIdTrDescriptionDetail() Group by the id_tr_description_detail column
 * @method CommonCategorieLotQuery groupByCodeCpv1() Group by the code_cpv_1 column
 * @method CommonCategorieLotQuery groupByCodeCpv2() Group by the code_cpv_2 column
 * @method CommonCategorieLotQuery groupByDescriptionFr() Group by the description_fr column
 * @method CommonCategorieLotQuery groupByDescriptionEn() Group by the description_en column
 * @method CommonCategorieLotQuery groupByDescriptionEs() Group by the description_es column
 * @method CommonCategorieLotQuery groupByDescriptionSu() Group by the description_su column
 * @method CommonCategorieLotQuery groupByDescriptionDu() Group by the description_du column
 * @method CommonCategorieLotQuery groupByDescriptionCz() Group by the description_cz column
 * @method CommonCategorieLotQuery groupByDescriptionAr() Group by the description_ar column
 * @method CommonCategorieLotQuery groupByDescriptionDetailFr() Group by the description_detail_fr column
 * @method CommonCategorieLotQuery groupByDescriptionDetailEn() Group by the description_detail_en column
 * @method CommonCategorieLotQuery groupByDescriptionDetailEs() Group by the description_detail_es column
 * @method CommonCategorieLotQuery groupByDescriptionDetailSu() Group by the description_detail_su column
 * @method CommonCategorieLotQuery groupByDescriptionDetailDu() Group by the description_detail_du column
 * @method CommonCategorieLotQuery groupByDescriptionDetailCz() Group by the description_detail_cz column
 * @method CommonCategorieLotQuery groupByDescriptionDetailAr() Group by the description_detail_ar column
 * @method CommonCategorieLotQuery groupByIdLotExterne() Group by the id_lot_externe column
 * @method CommonCategorieLotQuery groupByCautionProvisoire() Group by the caution_provisoire column
 * @method CommonCategorieLotQuery groupByQualification() Group by the qualification column
 * @method CommonCategorieLotQuery groupByAgrements() Group by the agrements column
 * @method CommonCategorieLotQuery groupByAddEchantillion() Group by the add_echantillion column
 * @method CommonCategorieLotQuery groupByDateLimiteEchantillion() Group by the date_limite_echantillion column
 * @method CommonCategorieLotQuery groupByAddReunion() Group by the add_reunion column
 * @method CommonCategorieLotQuery groupByDateReunion() Group by the date_reunion column
 * @method CommonCategorieLotQuery groupByVariantes() Group by the variantes column
 * @method CommonCategorieLotQuery groupByEchantillon() Group by the echantillon column
 * @method CommonCategorieLotQuery groupByReunion() Group by the reunion column
 * @method CommonCategorieLotQuery groupByVisitesLieux() Group by the visites_lieux column
 * @method CommonCategorieLotQuery groupByAddEchantillionFr() Group by the add_echantillion_fr column
 * @method CommonCategorieLotQuery groupByAddEchantillionEn() Group by the add_echantillion_en column
 * @method CommonCategorieLotQuery groupByAddEchantillionEs() Group by the add_echantillion_es column
 * @method CommonCategorieLotQuery groupByAddEchantillionSu() Group by the add_echantillion_su column
 * @method CommonCategorieLotQuery groupByAddEchantillionDu() Group by the add_echantillion_du column
 * @method CommonCategorieLotQuery groupByAddEchantillionCz() Group by the add_echantillion_cz column
 * @method CommonCategorieLotQuery groupByAddEchantillionAr() Group by the add_echantillion_ar column
 * @method CommonCategorieLotQuery groupByAddReunionFr() Group by the add_reunion_fr column
 * @method CommonCategorieLotQuery groupByAddReunionEn() Group by the add_reunion_en column
 * @method CommonCategorieLotQuery groupByAddReunionEs() Group by the add_reunion_es column
 * @method CommonCategorieLotQuery groupByAddReunionSu() Group by the add_reunion_su column
 * @method CommonCategorieLotQuery groupByAddReunionDu() Group by the add_reunion_du column
 * @method CommonCategorieLotQuery groupByAddReunionCz() Group by the add_reunion_cz column
 * @method CommonCategorieLotQuery groupByAddReunionAr() Group by the add_reunion_ar column
 * @method CommonCategorieLotQuery groupByDescriptionDetailIt() Group by the description_detail_it column
 * @method CommonCategorieLotQuery groupByDescriptionIt() Group by the description_it column
 * @method CommonCategorieLotQuery groupByAddEchantillionIt() Group by the add_echantillion_it column
 * @method CommonCategorieLotQuery groupByAddReunionIt() Group by the add_reunion_it column
 * @method CommonCategorieLotQuery groupByClauseSociale() Group by the clause_sociale column
 * @method CommonCategorieLotQuery groupByClauseEnvironnementale() Group by the clause_environnementale column
 * @method CommonCategorieLotQuery groupByDecision() Group by the decision column
 * @method CommonCategorieLotQuery groupByClauseSocialeConditionExecution() Group by the clause_sociale_condition_execution column
 * @method CommonCategorieLotQuery groupByClauseSocialeInsertion() Group by the clause_sociale_insertion column
 * @method CommonCategorieLotQuery groupByClauseSocialeAteliersProteges() Group by the clause_sociale_ateliers_proteges column
 * @method CommonCategorieLotQuery groupByClauseEnvSpecsTechniques() Group by the clause_env_specs_techniques column
 * @method CommonCategorieLotQuery groupByClauseEnvCondExecution() Group by the clause_env_cond_execution column
 * @method CommonCategorieLotQuery groupByClauseEnvCriteresSelect() Group by the clause_env_criteres_select column
 * @method CommonCategorieLotQuery groupByIdDonneeComplementaire() Group by the id_donnee_complementaire column
 *
 * @method CommonCategorieLotQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method CommonCategorieLotQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method CommonCategorieLotQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method CommonCategorieLotQuery leftJoinCommonConsultation($relationAlias = null) Adds a LEFT JOIN clause to the query using the CommonConsultation relation
 * @method CommonCategorieLotQuery rightJoinCommonConsultation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the CommonConsultation relation
 * @method CommonCategorieLotQuery innerJoinCommonConsultation($relationAlias = null) Adds a INNER JOIN clause to the query using the CommonConsultation relation
 *
 * @method CommonCategorieLot findOne(PropelPDO $con = null) Return the first CommonCategorieLot matching the query
 * @method CommonCategorieLot findOneOrCreate(PropelPDO $con = null) Return the first CommonCategorieLot matching the query, or a new CommonCategorieLot object populated from the query conditions when no match is found
 *
 * @method CommonCategorieLot findOneByOrganisme(string $organisme) Return the first CommonCategorieLot filtered by the organisme column
 * @method CommonCategorieLot findOneByConsultationRef(int $consultation_ref) Return the first CommonCategorieLot filtered by the consultation_ref column
 * @method CommonCategorieLot findOneByLot(int $lot) Return the first CommonCategorieLot filtered by the lot column
 * @method CommonCategorieLot findOneByDescription(string $description) Return the first CommonCategorieLot filtered by the description column
 * @method CommonCategorieLot findOneByIdTrDescription(int $id_tr_description) Return the first CommonCategorieLot filtered by the id_tr_description column
 * @method CommonCategorieLot findOneByCategorie(string $categorie) Return the first CommonCategorieLot filtered by the categorie column
 * @method CommonCategorieLot findOneByDescriptionDetail(string $description_detail) Return the first CommonCategorieLot filtered by the description_detail column
 * @method CommonCategorieLot findOneByIdTrDescriptionDetail(int $id_tr_description_detail) Return the first CommonCategorieLot filtered by the id_tr_description_detail column
 * @method CommonCategorieLot findOneByCodeCpv1(string $code_cpv_1) Return the first CommonCategorieLot filtered by the code_cpv_1 column
 * @method CommonCategorieLot findOneByCodeCpv2(string $code_cpv_2) Return the first CommonCategorieLot filtered by the code_cpv_2 column
 * @method CommonCategorieLot findOneByDescriptionFr(string $description_fr) Return the first CommonCategorieLot filtered by the description_fr column
 * @method CommonCategorieLot findOneByDescriptionEn(string $description_en) Return the first CommonCategorieLot filtered by the description_en column
 * @method CommonCategorieLot findOneByDescriptionEs(string $description_es) Return the first CommonCategorieLot filtered by the description_es column
 * @method CommonCategorieLot findOneByDescriptionSu(string $description_su) Return the first CommonCategorieLot filtered by the description_su column
 * @method CommonCategorieLot findOneByDescriptionDu(string $description_du) Return the first CommonCategorieLot filtered by the description_du column
 * @method CommonCategorieLot findOneByDescriptionCz(string $description_cz) Return the first CommonCategorieLot filtered by the description_cz column
 * @method CommonCategorieLot findOneByDescriptionAr(string $description_ar) Return the first CommonCategorieLot filtered by the description_ar column
 * @method CommonCategorieLot findOneByDescriptionDetailFr(string $description_detail_fr) Return the first CommonCategorieLot filtered by the description_detail_fr column
 * @method CommonCategorieLot findOneByDescriptionDetailEn(string $description_detail_en) Return the first CommonCategorieLot filtered by the description_detail_en column
 * @method CommonCategorieLot findOneByDescriptionDetailEs(string $description_detail_es) Return the first CommonCategorieLot filtered by the description_detail_es column
 * @method CommonCategorieLot findOneByDescriptionDetailSu(string $description_detail_su) Return the first CommonCategorieLot filtered by the description_detail_su column
 * @method CommonCategorieLot findOneByDescriptionDetailDu(string $description_detail_du) Return the first CommonCategorieLot filtered by the description_detail_du column
 * @method CommonCategorieLot findOneByDescriptionDetailCz(string $description_detail_cz) Return the first CommonCategorieLot filtered by the description_detail_cz column
 * @method CommonCategorieLot findOneByDescriptionDetailAr(string $description_detail_ar) Return the first CommonCategorieLot filtered by the description_detail_ar column
 * @method CommonCategorieLot findOneByIdLotExterne(int $id_lot_externe) Return the first CommonCategorieLot filtered by the id_lot_externe column
 * @method CommonCategorieLot findOneByCautionProvisoire(string $caution_provisoire) Return the first CommonCategorieLot filtered by the caution_provisoire column
 * @method CommonCategorieLot findOneByQualification(string $qualification) Return the first CommonCategorieLot filtered by the qualification column
 * @method CommonCategorieLot findOneByAgrements(string $agrements) Return the first CommonCategorieLot filtered by the agrements column
 * @method CommonCategorieLot findOneByAddEchantillion(string $add_echantillion) Return the first CommonCategorieLot filtered by the add_echantillion column
 * @method CommonCategorieLot findOneByDateLimiteEchantillion(string $date_limite_echantillion) Return the first CommonCategorieLot filtered by the date_limite_echantillion column
 * @method CommonCategorieLot findOneByAddReunion(string $add_reunion) Return the first CommonCategorieLot filtered by the add_reunion column
 * @method CommonCategorieLot findOneByDateReunion(string $date_reunion) Return the first CommonCategorieLot filtered by the date_reunion column
 * @method CommonCategorieLot findOneByVariantes(string $variantes) Return the first CommonCategorieLot filtered by the variantes column
 * @method CommonCategorieLot findOneByEchantillon(string $echantillon) Return the first CommonCategorieLot filtered by the echantillon column
 * @method CommonCategorieLot findOneByReunion(string $reunion) Return the first CommonCategorieLot filtered by the reunion column
 * @method CommonCategorieLot findOneByVisitesLieux(string $visites_lieux) Return the first CommonCategorieLot filtered by the visites_lieux column
 * @method CommonCategorieLot findOneByAddEchantillionFr(string $add_echantillion_fr) Return the first CommonCategorieLot filtered by the add_echantillion_fr column
 * @method CommonCategorieLot findOneByAddEchantillionEn(string $add_echantillion_en) Return the first CommonCategorieLot filtered by the add_echantillion_en column
 * @method CommonCategorieLot findOneByAddEchantillionEs(string $add_echantillion_es) Return the first CommonCategorieLot filtered by the add_echantillion_es column
 * @method CommonCategorieLot findOneByAddEchantillionSu(string $add_echantillion_su) Return the first CommonCategorieLot filtered by the add_echantillion_su column
 * @method CommonCategorieLot findOneByAddEchantillionDu(string $add_echantillion_du) Return the first CommonCategorieLot filtered by the add_echantillion_du column
 * @method CommonCategorieLot findOneByAddEchantillionCz(string $add_echantillion_cz) Return the first CommonCategorieLot filtered by the add_echantillion_cz column
 * @method CommonCategorieLot findOneByAddEchantillionAr(string $add_echantillion_ar) Return the first CommonCategorieLot filtered by the add_echantillion_ar column
 * @method CommonCategorieLot findOneByAddReunionFr(string $add_reunion_fr) Return the first CommonCategorieLot filtered by the add_reunion_fr column
 * @method CommonCategorieLot findOneByAddReunionEn(string $add_reunion_en) Return the first CommonCategorieLot filtered by the add_reunion_en column
 * @method CommonCategorieLot findOneByAddReunionEs(string $add_reunion_es) Return the first CommonCategorieLot filtered by the add_reunion_es column
 * @method CommonCategorieLot findOneByAddReunionSu(string $add_reunion_su) Return the first CommonCategorieLot filtered by the add_reunion_su column
 * @method CommonCategorieLot findOneByAddReunionDu(string $add_reunion_du) Return the first CommonCategorieLot filtered by the add_reunion_du column
 * @method CommonCategorieLot findOneByAddReunionCz(string $add_reunion_cz) Return the first CommonCategorieLot filtered by the add_reunion_cz column
 * @method CommonCategorieLot findOneByAddReunionAr(string $add_reunion_ar) Return the first CommonCategorieLot filtered by the add_reunion_ar column
 * @method CommonCategorieLot findOneByDescriptionDetailIt(string $description_detail_it) Return the first CommonCategorieLot filtered by the description_detail_it column
 * @method CommonCategorieLot findOneByDescriptionIt(string $description_it) Return the first CommonCategorieLot filtered by the description_it column
 * @method CommonCategorieLot findOneByAddEchantillionIt(string $add_echantillion_it) Return the first CommonCategorieLot filtered by the add_echantillion_it column
 * @method CommonCategorieLot findOneByAddReunionIt(string $add_reunion_it) Return the first CommonCategorieLot filtered by the add_reunion_it column
 * @method CommonCategorieLot findOneByClauseSociale(string $clause_sociale) Return the first CommonCategorieLot filtered by the clause_sociale column
 * @method CommonCategorieLot findOneByClauseEnvironnementale(string $clause_environnementale) Return the first CommonCategorieLot filtered by the clause_environnementale column
 * @method CommonCategorieLot findOneByDecision(string $decision) Return the first CommonCategorieLot filtered by the decision column
 * @method CommonCategorieLot findOneByClauseSocialeConditionExecution(string $clause_sociale_condition_execution) Return the first CommonCategorieLot filtered by the clause_sociale_condition_execution column
 * @method CommonCategorieLot findOneByClauseSocialeInsertion(string $clause_sociale_insertion) Return the first CommonCategorieLot filtered by the clause_sociale_insertion column
 * @method CommonCategorieLot findOneByClauseSocialeAteliersProteges(string $clause_sociale_ateliers_proteges) Return the first CommonCategorieLot filtered by the clause_sociale_ateliers_proteges column
 * @method CommonCategorieLot findOneByClauseEnvSpecsTechniques(string $clause_env_specs_techniques) Return the first CommonCategorieLot filtered by the clause_env_specs_techniques column
 * @method CommonCategorieLot findOneByClauseEnvCondExecution(string $clause_env_cond_execution) Return the first CommonCategorieLot filtered by the clause_env_cond_execution column
 * @method CommonCategorieLot findOneByClauseEnvCriteresSelect(string $clause_env_criteres_select) Return the first CommonCategorieLot filtered by the clause_env_criteres_select column
 * @method CommonCategorieLot findOneByIdDonneeComplementaire(int $id_donnee_complementaire) Return the first CommonCategorieLot filtered by the id_donnee_complementaire column
 *
 * @method array findByOrganisme(string $organisme) Return CommonCategorieLot objects filtered by the organisme column
 * @method array findByConsultationRef(int $consultation_ref) Return CommonCategorieLot objects filtered by the consultation_ref column
 * @method array findByLot(int $lot) Return CommonCategorieLot objects filtered by the lot column
 * @method array findByDescription(string $description) Return CommonCategorieLot objects filtered by the description column
 * @method array findByIdTrDescription(int $id_tr_description) Return CommonCategorieLot objects filtered by the id_tr_description column
 * @method array findByCategorie(string $categorie) Return CommonCategorieLot objects filtered by the categorie column
 * @method array findByDescriptionDetail(string $description_detail) Return CommonCategorieLot objects filtered by the description_detail column
 * @method array findByIdTrDescriptionDetail(int $id_tr_description_detail) Return CommonCategorieLot objects filtered by the id_tr_description_detail column
 * @method array findByCodeCpv1(string $code_cpv_1) Return CommonCategorieLot objects filtered by the code_cpv_1 column
 * @method array findByCodeCpv2(string $code_cpv_2) Return CommonCategorieLot objects filtered by the code_cpv_2 column
 * @method array findByDescriptionFr(string $description_fr) Return CommonCategorieLot objects filtered by the description_fr column
 * @method array findByDescriptionEn(string $description_en) Return CommonCategorieLot objects filtered by the description_en column
 * @method array findByDescriptionEs(string $description_es) Return CommonCategorieLot objects filtered by the description_es column
 * @method array findByDescriptionSu(string $description_su) Return CommonCategorieLot objects filtered by the description_su column
 * @method array findByDescriptionDu(string $description_du) Return CommonCategorieLot objects filtered by the description_du column
 * @method array findByDescriptionCz(string $description_cz) Return CommonCategorieLot objects filtered by the description_cz column
 * @method array findByDescriptionAr(string $description_ar) Return CommonCategorieLot objects filtered by the description_ar column
 * @method array findByDescriptionDetailFr(string $description_detail_fr) Return CommonCategorieLot objects filtered by the description_detail_fr column
 * @method array findByDescriptionDetailEn(string $description_detail_en) Return CommonCategorieLot objects filtered by the description_detail_en column
 * @method array findByDescriptionDetailEs(string $description_detail_es) Return CommonCategorieLot objects filtered by the description_detail_es column
 * @method array findByDescriptionDetailSu(string $description_detail_su) Return CommonCategorieLot objects filtered by the description_detail_su column
 * @method array findByDescriptionDetailDu(string $description_detail_du) Return CommonCategorieLot objects filtered by the description_detail_du column
 * @method array findByDescriptionDetailCz(string $description_detail_cz) Return CommonCategorieLot objects filtered by the description_detail_cz column
 * @method array findByDescriptionDetailAr(string $description_detail_ar) Return CommonCategorieLot objects filtered by the description_detail_ar column
 * @method array findByIdLotExterne(int $id_lot_externe) Return CommonCategorieLot objects filtered by the id_lot_externe column
 * @method array findByCautionProvisoire(string $caution_provisoire) Return CommonCategorieLot objects filtered by the caution_provisoire column
 * @method array findByQualification(string $qualification) Return CommonCategorieLot objects filtered by the qualification column
 * @method array findByAgrements(string $agrements) Return CommonCategorieLot objects filtered by the agrements column
 * @method array findByAddEchantillion(string $add_echantillion) Return CommonCategorieLot objects filtered by the add_echantillion column
 * @method array findByDateLimiteEchantillion(string $date_limite_echantillion) Return CommonCategorieLot objects filtered by the date_limite_echantillion column
 * @method array findByAddReunion(string $add_reunion) Return CommonCategorieLot objects filtered by the add_reunion column
 * @method array findByDateReunion(string $date_reunion) Return CommonCategorieLot objects filtered by the date_reunion column
 * @method array findByVariantes(string $variantes) Return CommonCategorieLot objects filtered by the variantes column
 * @method array findByEchantillon(string $echantillon) Return CommonCategorieLot objects filtered by the echantillon column
 * @method array findByReunion(string $reunion) Return CommonCategorieLot objects filtered by the reunion column
 * @method array findByVisitesLieux(string $visites_lieux) Return CommonCategorieLot objects filtered by the visites_lieux column
 * @method array findByAddEchantillionFr(string $add_echantillion_fr) Return CommonCategorieLot objects filtered by the add_echantillion_fr column
 * @method array findByAddEchantillionEn(string $add_echantillion_en) Return CommonCategorieLot objects filtered by the add_echantillion_en column
 * @method array findByAddEchantillionEs(string $add_echantillion_es) Return CommonCategorieLot objects filtered by the add_echantillion_es column
 * @method array findByAddEchantillionSu(string $add_echantillion_su) Return CommonCategorieLot objects filtered by the add_echantillion_su column
 * @method array findByAddEchantillionDu(string $add_echantillion_du) Return CommonCategorieLot objects filtered by the add_echantillion_du column
 * @method array findByAddEchantillionCz(string $add_echantillion_cz) Return CommonCategorieLot objects filtered by the add_echantillion_cz column
 * @method array findByAddEchantillionAr(string $add_echantillion_ar) Return CommonCategorieLot objects filtered by the add_echantillion_ar column
 * @method array findByAddReunionFr(string $add_reunion_fr) Return CommonCategorieLot objects filtered by the add_reunion_fr column
 * @method array findByAddReunionEn(string $add_reunion_en) Return CommonCategorieLot objects filtered by the add_reunion_en column
 * @method array findByAddReunionEs(string $add_reunion_es) Return CommonCategorieLot objects filtered by the add_reunion_es column
 * @method array findByAddReunionSu(string $add_reunion_su) Return CommonCategorieLot objects filtered by the add_reunion_su column
 * @method array findByAddReunionDu(string $add_reunion_du) Return CommonCategorieLot objects filtered by the add_reunion_du column
 * @method array findByAddReunionCz(string $add_reunion_cz) Return CommonCategorieLot objects filtered by the add_reunion_cz column
 * @method array findByAddReunionAr(string $add_reunion_ar) Return CommonCategorieLot objects filtered by the add_reunion_ar column
 * @method array findByDescriptionDetailIt(string $description_detail_it) Return CommonCategorieLot objects filtered by the description_detail_it column
 * @method array findByDescriptionIt(string $description_it) Return CommonCategorieLot objects filtered by the description_it column
 * @method array findByAddEchantillionIt(string $add_echantillion_it) Return CommonCategorieLot objects filtered by the add_echantillion_it column
 * @method array findByAddReunionIt(string $add_reunion_it) Return CommonCategorieLot objects filtered by the add_reunion_it column
 * @method array findByClauseSociale(string $clause_sociale) Return CommonCategorieLot objects filtered by the clause_sociale column
 * @method array findByClauseEnvironnementale(string $clause_environnementale) Return CommonCategorieLot objects filtered by the clause_environnementale column
 * @method array findByDecision(string $decision) Return CommonCategorieLot objects filtered by the decision column
 * @method array findByClauseSocialeConditionExecution(string $clause_sociale_condition_execution) Return CommonCategorieLot objects filtered by the clause_sociale_condition_execution column
 * @method array findByClauseSocialeInsertion(string $clause_sociale_insertion) Return CommonCategorieLot objects filtered by the clause_sociale_insertion column
 * @method array findByClauseSocialeAteliersProteges(string $clause_sociale_ateliers_proteges) Return CommonCategorieLot objects filtered by the clause_sociale_ateliers_proteges column
 * @method array findByClauseEnvSpecsTechniques(string $clause_env_specs_techniques) Return CommonCategorieLot objects filtered by the clause_env_specs_techniques column
 * @method array findByClauseEnvCondExecution(string $clause_env_cond_execution) Return CommonCategorieLot objects filtered by the clause_env_cond_execution column
 * @method array findByClauseEnvCriteresSelect(string $clause_env_criteres_select) Return CommonCategorieLot objects filtered by the clause_env_criteres_select column
 * @method array findByIdDonneeComplementaire(int $id_donnee_complementaire) Return CommonCategorieLot objects filtered by the id_donnee_complementaire column
 *
 * @package    propel.generator.lt_parapheur.om
 */
abstract class BaseCommonCategorieLotQuery extends ModelCriteria
{
    /**
     * Initializes internal state of BaseCommonCategorieLotQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'mpe', $modelName = 'CommonCategorieLot', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new CommonCategorieLotQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param   CommonCategorieLotQuery|Criteria $criteria Optional Criteria to build the query from
     *
     * @return CommonCategorieLotQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof CommonCategorieLotQuery) {
            return $criteria;
        }
        $query = new CommonCategorieLotQuery();
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
     * $obj = $c->findPk(array(12, 34, 56), $con);
     * </code>
     *
     * @param array $key Primary key to use for the query 
                         A Primary key composition: [$organisme, $consultation_ref, $lot]
     * @param     PropelPDO $con an optional connection object
     *
     * @return   CommonCategorieLot|CommonCategorieLot[]|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ($key === null) {
            return null;
        }
        if ((null !== ($obj = CommonCategorieLotPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2]))))) && !$this->formatter) {
            // the object is already in the instance pool
            return $obj;
        }
        if ($con === null) {
            $con = Propel::getConnection(CommonCategorieLotPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con A connection object
     *
     * @return                 CommonCategorieLot A model object, or null if the key is not found
     * @throws PropelException
     */
    protected function findPkSimple($key, $con)
    {
        $sql = 'SELECT `organisme`, `consultation_ref`, `lot`, `description`, `id_tr_description`, `categorie`, `description_detail`, `id_tr_description_detail`, `code_cpv_1`, `code_cpv_2`, `description_fr`, `description_en`, `description_es`, `description_su`, `description_du`, `description_cz`, `description_ar`, `description_detail_fr`, `description_detail_en`, `description_detail_es`, `description_detail_su`, `description_detail_du`, `description_detail_cz`, `description_detail_ar`, `id_lot_externe`, `caution_provisoire`, `qualification`, `agrements`, `add_echantillion`, `date_limite_echantillion`, `add_reunion`, `date_reunion`, `variantes`, `echantillon`, `reunion`, `visites_lieux`, `add_echantillion_fr`, `add_echantillion_en`, `add_echantillion_es`, `add_echantillion_su`, `add_echantillion_du`, `add_echantillion_cz`, `add_echantillion_ar`, `add_reunion_fr`, `add_reunion_en`, `add_reunion_es`, `add_reunion_su`, `add_reunion_du`, `add_reunion_cz`, `add_reunion_ar`, `description_detail_it`, `description_it`, `add_echantillion_it`, `add_reunion_it`, `clause_sociale`, `clause_environnementale`, `decision`, `clause_sociale_condition_execution`, `clause_sociale_insertion`, `clause_sociale_ateliers_proteges`, `clause_env_specs_techniques`, `clause_env_cond_execution`, `clause_env_criteres_select`, `id_donnee_complementaire` FROM `CategorieLot` WHERE `organisme` = :p0 AND `consultation_ref` = :p1 AND `lot` = :p2';
        try {
            $stmt = $con->prepare($sql);			
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_STR);			
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);			
            $stmt->bindValue(':p2', $key[2], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $obj = new CommonCategorieLot();
            $obj->hydrate($row);
            CommonCategorieLotPeer::addInstanceToPool($obj, serialize(array((string) $key[0], (string) $key[1], (string) $key[2])));
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
     * @return CommonCategorieLot|CommonCategorieLot[]|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return PropelObjectCollection|CommonCategorieLot[]|mixed the list of results, formatted by the current formatter
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
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(CommonCategorieLotPeer::ORGANISME, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(CommonCategorieLotPeer::CONSULTATION_REF, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(CommonCategorieLotPeer::LOT, $key[2], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(CommonCategorieLotPeer::ORGANISME, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(CommonCategorieLotPeer::CONSULTATION_REF, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(CommonCategorieLotPeer::LOT, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the organisme column
     *
     * Example usage:
     * <code>
     * $query->filterByOrganisme('fooValue');   // WHERE organisme = 'fooValue'
     * $query->filterByOrganisme('%fooValue%'); // WHERE organisme LIKE '%fooValue%'
     * </code>
     *
     * @param     string $organisme The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByOrganisme($organisme = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($organisme)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $organisme)) {
                $organisme = str_replace('*', '%', $organisme);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ORGANISME, $organisme, $comparison);
    }

    /**
     * Filter the query on the consultation_ref column
     *
     * Example usage:
     * <code>
     * $query->filterByConsultationRef(1234); // WHERE consultation_ref = 1234
     * $query->filterByConsultationRef(array(12, 34)); // WHERE consultation_ref IN (12, 34)
     * $query->filterByConsultationRef(array('min' => 12)); // WHERE consultation_ref >= 12
     * $query->filterByConsultationRef(array('max' => 12)); // WHERE consultation_ref <= 12
     * </code>
     *
     * @see       filterByCommonConsultation()
     *
     * @param     mixed $consultationRef The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByConsultationRef($consultationRef = null, $comparison = null)
    {
        if (is_array($consultationRef)) {
            $useMinMax = false;
            if (isset($consultationRef['min'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::CONSULTATION_REF, $consultationRef['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($consultationRef['max'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::CONSULTATION_REF, $consultationRef['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CONSULTATION_REF, $consultationRef, $comparison);
    }

    /**
     * Filter the query on the lot column
     *
     * Example usage:
     * <code>
     * $query->filterByLot(1234); // WHERE lot = 1234
     * $query->filterByLot(array(12, 34)); // WHERE lot IN (12, 34)
     * $query->filterByLot(array('min' => 12)); // WHERE lot >= 12
     * $query->filterByLot(array('max' => 12)); // WHERE lot <= 12
     * </code>
     *
     * @param     mixed $lot The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByLot($lot = null, $comparison = null)
    {
        if (is_array($lot)) {
            $useMinMax = false;
            if (isset($lot['min'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::LOT, $lot['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($lot['max'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::LOT, $lot['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::LOT, $lot, $comparison);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
     * </code>
     *
     * @param     string $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescription($description = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($description)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $description)) {
                $description = str_replace('*', '%', $description);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION, $description, $comparison);
    }

    /**
     * Filter the query on the id_tr_description column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrDescription(1234); // WHERE id_tr_description = 1234
     * $query->filterByIdTrDescription(array(12, 34)); // WHERE id_tr_description IN (12, 34)
     * $query->filterByIdTrDescription(array('min' => 12)); // WHERE id_tr_description >= 12
     * $query->filterByIdTrDescription(array('max' => 12)); // WHERE id_tr_description <= 12
     * </code>
     *
     * @param     mixed $idTrDescription The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByIdTrDescription($idTrDescription = null, $comparison = null)
    {
        if (is_array($idTrDescription)) {
            $useMinMax = false;
            if (isset($idTrDescription['min'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_TR_DESCRIPTION, $idTrDescription['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrDescription['max'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_TR_DESCRIPTION, $idTrDescription['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ID_TR_DESCRIPTION, $idTrDescription, $comparison);
    }

    /**
     * Filter the query on the categorie column
     *
     * Example usage:
     * <code>
     * $query->filterByCategorie('fooValue');   // WHERE categorie = 'fooValue'
     * $query->filterByCategorie('%fooValue%'); // WHERE categorie LIKE '%fooValue%'
     * </code>
     *
     * @param     string $categorie The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByCategorie($categorie = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($categorie)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $categorie)) {
                $categorie = str_replace('*', '%', $categorie);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CATEGORIE, $categorie, $comparison);
    }

    /**
     * Filter the query on the description_detail column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetail('fooValue');   // WHERE description_detail = 'fooValue'
     * $query->filterByDescriptionDetail('%fooValue%'); // WHERE description_detail LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetail($descriptionDetail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetail)) {
                $descriptionDetail = str_replace('*', '%', $descriptionDetail);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL, $descriptionDetail, $comparison);
    }

    /**
     * Filter the query on the id_tr_description_detail column
     *
     * Example usage:
     * <code>
     * $query->filterByIdTrDescriptionDetail(1234); // WHERE id_tr_description_detail = 1234
     * $query->filterByIdTrDescriptionDetail(array(12, 34)); // WHERE id_tr_description_detail IN (12, 34)
     * $query->filterByIdTrDescriptionDetail(array('min' => 12)); // WHERE id_tr_description_detail >= 12
     * $query->filterByIdTrDescriptionDetail(array('max' => 12)); // WHERE id_tr_description_detail <= 12
     * </code>
     *
     * @param     mixed $idTrDescriptionDetail The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByIdTrDescriptionDetail($idTrDescriptionDetail = null, $comparison = null)
    {
        if (is_array($idTrDescriptionDetail)) {
            $useMinMax = false;
            if (isset($idTrDescriptionDetail['min'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL, $idTrDescriptionDetail['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idTrDescriptionDetail['max'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL, $idTrDescriptionDetail['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ID_TR_DESCRIPTION_DETAIL, $idTrDescriptionDetail, $comparison);
    }

    /**
     * Filter the query on the code_cpv_1 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv1('fooValue');   // WHERE code_cpv_1 = 'fooValue'
     * $query->filterByCodeCpv1('%fooValue%'); // WHERE code_cpv_1 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv1 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByCodeCpv1($codeCpv1 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv1)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv1)) {
                $codeCpv1 = str_replace('*', '%', $codeCpv1);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CODE_CPV_1, $codeCpv1, $comparison);
    }

    /**
     * Filter the query on the code_cpv_2 column
     *
     * Example usage:
     * <code>
     * $query->filterByCodeCpv2('fooValue');   // WHERE code_cpv_2 = 'fooValue'
     * $query->filterByCodeCpv2('%fooValue%'); // WHERE code_cpv_2 LIKE '%fooValue%'
     * </code>
     *
     * @param     string $codeCpv2 The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByCodeCpv2($codeCpv2 = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($codeCpv2)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $codeCpv2)) {
                $codeCpv2 = str_replace('*', '%', $codeCpv2);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CODE_CPV_2, $codeCpv2, $comparison);
    }

    /**
     * Filter the query on the description_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionFr('fooValue');   // WHERE description_fr = 'fooValue'
     * $query->filterByDescriptionFr('%fooValue%'); // WHERE description_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionFr($descriptionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionFr)) {
                $descriptionFr = str_replace('*', '%', $descriptionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_FR, $descriptionFr, $comparison);
    }

    /**
     * Filter the query on the description_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionEn('fooValue');   // WHERE description_en = 'fooValue'
     * $query->filterByDescriptionEn('%fooValue%'); // WHERE description_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionEn($descriptionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionEn)) {
                $descriptionEn = str_replace('*', '%', $descriptionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_EN, $descriptionEn, $comparison);
    }

    /**
     * Filter the query on the description_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionEs('fooValue');   // WHERE description_es = 'fooValue'
     * $query->filterByDescriptionEs('%fooValue%'); // WHERE description_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionEs($descriptionEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionEs)) {
                $descriptionEs = str_replace('*', '%', $descriptionEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_ES, $descriptionEs, $comparison);
    }

    /**
     * Filter the query on the description_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionSu('fooValue');   // WHERE description_su = 'fooValue'
     * $query->filterByDescriptionSu('%fooValue%'); // WHERE description_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionSu($descriptionSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionSu)) {
                $descriptionSu = str_replace('*', '%', $descriptionSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_SU, $descriptionSu, $comparison);
    }

    /**
     * Filter the query on the description_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDu('fooValue');   // WHERE description_du = 'fooValue'
     * $query->filterByDescriptionDu('%fooValue%'); // WHERE description_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDu($descriptionDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDu)) {
                $descriptionDu = str_replace('*', '%', $descriptionDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DU, $descriptionDu, $comparison);
    }

    /**
     * Filter the query on the description_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionCz('fooValue');   // WHERE description_cz = 'fooValue'
     * $query->filterByDescriptionCz('%fooValue%'); // WHERE description_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionCz($descriptionCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionCz)) {
                $descriptionCz = str_replace('*', '%', $descriptionCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_CZ, $descriptionCz, $comparison);
    }

    /**
     * Filter the query on the description_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionAr('fooValue');   // WHERE description_ar = 'fooValue'
     * $query->filterByDescriptionAr('%fooValue%'); // WHERE description_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionAr($descriptionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionAr)) {
                $descriptionAr = str_replace('*', '%', $descriptionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_AR, $descriptionAr, $comparison);
    }

    /**
     * Filter the query on the description_detail_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailFr('fooValue');   // WHERE description_detail_fr = 'fooValue'
     * $query->filterByDescriptionDetailFr('%fooValue%'); // WHERE description_detail_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailFr($descriptionDetailFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailFr)) {
                $descriptionDetailFr = str_replace('*', '%', $descriptionDetailFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_FR, $descriptionDetailFr, $comparison);
    }

    /**
     * Filter the query on the description_detail_en column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailEn('fooValue');   // WHERE description_detail_en = 'fooValue'
     * $query->filterByDescriptionDetailEn('%fooValue%'); // WHERE description_detail_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailEn($descriptionDetailEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailEn)) {
                $descriptionDetailEn = str_replace('*', '%', $descriptionDetailEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_EN, $descriptionDetailEn, $comparison);
    }

    /**
     * Filter the query on the description_detail_es column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailEs('fooValue');   // WHERE description_detail_es = 'fooValue'
     * $query->filterByDescriptionDetailEs('%fooValue%'); // WHERE description_detail_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailEs($descriptionDetailEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailEs)) {
                $descriptionDetailEs = str_replace('*', '%', $descriptionDetailEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_ES, $descriptionDetailEs, $comparison);
    }

    /**
     * Filter the query on the description_detail_su column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailSu('fooValue');   // WHERE description_detail_su = 'fooValue'
     * $query->filterByDescriptionDetailSu('%fooValue%'); // WHERE description_detail_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailSu($descriptionDetailSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailSu)) {
                $descriptionDetailSu = str_replace('*', '%', $descriptionDetailSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_SU, $descriptionDetailSu, $comparison);
    }

    /**
     * Filter the query on the description_detail_du column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailDu('fooValue');   // WHERE description_detail_du = 'fooValue'
     * $query->filterByDescriptionDetailDu('%fooValue%'); // WHERE description_detail_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailDu($descriptionDetailDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailDu)) {
                $descriptionDetailDu = str_replace('*', '%', $descriptionDetailDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_DU, $descriptionDetailDu, $comparison);
    }

    /**
     * Filter the query on the description_detail_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailCz('fooValue');   // WHERE description_detail_cz = 'fooValue'
     * $query->filterByDescriptionDetailCz('%fooValue%'); // WHERE description_detail_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailCz($descriptionDetailCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailCz)) {
                $descriptionDetailCz = str_replace('*', '%', $descriptionDetailCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_CZ, $descriptionDetailCz, $comparison);
    }

    /**
     * Filter the query on the description_detail_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailAr('fooValue');   // WHERE description_detail_ar = 'fooValue'
     * $query->filterByDescriptionDetailAr('%fooValue%'); // WHERE description_detail_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailAr($descriptionDetailAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailAr)) {
                $descriptionDetailAr = str_replace('*', '%', $descriptionDetailAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_AR, $descriptionDetailAr, $comparison);
    }

    /**
     * Filter the query on the id_lot_externe column
     *
     * Example usage:
     * <code>
     * $query->filterByIdLotExterne(1234); // WHERE id_lot_externe = 1234
     * $query->filterByIdLotExterne(array(12, 34)); // WHERE id_lot_externe IN (12, 34)
     * $query->filterByIdLotExterne(array('min' => 12)); // WHERE id_lot_externe >= 12
     * $query->filterByIdLotExterne(array('max' => 12)); // WHERE id_lot_externe <= 12
     * </code>
     *
     * @param     mixed $idLotExterne The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByIdLotExterne($idLotExterne = null, $comparison = null)
    {
        if (is_array($idLotExterne)) {
            $useMinMax = false;
            if (isset($idLotExterne['min'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_LOT_EXTERNE, $idLotExterne['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idLotExterne['max'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_LOT_EXTERNE, $idLotExterne['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ID_LOT_EXTERNE, $idLotExterne, $comparison);
    }

    /**
     * Filter the query on the caution_provisoire column
     *
     * Example usage:
     * <code>
     * $query->filterByCautionProvisoire('fooValue');   // WHERE caution_provisoire = 'fooValue'
     * $query->filterByCautionProvisoire('%fooValue%'); // WHERE caution_provisoire LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cautionProvisoire The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByCautionProvisoire($cautionProvisoire = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cautionProvisoire)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cautionProvisoire)) {
                $cautionProvisoire = str_replace('*', '%', $cautionProvisoire);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CAUTION_PROVISOIRE, $cautionProvisoire, $comparison);
    }

    /**
     * Filter the query on the qualification column
     *
     * Example usage:
     * <code>
     * $query->filterByQualification('fooValue');   // WHERE qualification = 'fooValue'
     * $query->filterByQualification('%fooValue%'); // WHERE qualification LIKE '%fooValue%'
     * </code>
     *
     * @param     string $qualification The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByQualification($qualification = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($qualification)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $qualification)) {
                $qualification = str_replace('*', '%', $qualification);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::QUALIFICATION, $qualification, $comparison);
    }

    /**
     * Filter the query on the agrements column
     *
     * Example usage:
     * <code>
     * $query->filterByAgrements('fooValue');   // WHERE agrements = 'fooValue'
     * $query->filterByAgrements('%fooValue%'); // WHERE agrements LIKE '%fooValue%'
     * </code>
     *
     * @param     string $agrements The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAgrements($agrements = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($agrements)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $agrements)) {
                $agrements = str_replace('*', '%', $agrements);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::AGREMENTS, $agrements, $comparison);
    }

    /**
     * Filter the query on the add_echantillion column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillion('fooValue');   // WHERE add_echantillion = 'fooValue'
     * $query->filterByAddEchantillion('%fooValue%'); // WHERE add_echantillion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillion($addEchantillion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillion)) {
                $addEchantillion = str_replace('*', '%', $addEchantillion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION, $addEchantillion, $comparison);
    }

    /**
     * Filter the query on the date_limite_echantillion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateLimiteEchantillion('fooValue');   // WHERE date_limite_echantillion = 'fooValue'
     * $query->filterByDateLimiteEchantillion('%fooValue%'); // WHERE date_limite_echantillion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateLimiteEchantillion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDateLimiteEchantillion($dateLimiteEchantillion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateLimiteEchantillion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateLimiteEchantillion)) {
                $dateLimiteEchantillion = str_replace('*', '%', $dateLimiteEchantillion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DATE_LIMITE_ECHANTILLION, $dateLimiteEchantillion, $comparison);
    }

    /**
     * Filter the query on the add_reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunion('fooValue');   // WHERE add_reunion = 'fooValue'
     * $query->filterByAddReunion('%fooValue%'); // WHERE add_reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunion($addReunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunion)) {
                $addReunion = str_replace('*', '%', $addReunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION, $addReunion, $comparison);
    }

    /**
     * Filter the query on the date_reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByDateReunion('fooValue');   // WHERE date_reunion = 'fooValue'
     * $query->filterByDateReunion('%fooValue%'); // WHERE date_reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $dateReunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDateReunion($dateReunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($dateReunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $dateReunion)) {
                $dateReunion = str_replace('*', '%', $dateReunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DATE_REUNION, $dateReunion, $comparison);
    }

    /**
     * Filter the query on the variantes column
     *
     * Example usage:
     * <code>
     * $query->filterByVariantes('fooValue');   // WHERE variantes = 'fooValue'
     * $query->filterByVariantes('%fooValue%'); // WHERE variantes LIKE '%fooValue%'
     * </code>
     *
     * @param     string $variantes The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByVariantes($variantes = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($variantes)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $variantes)) {
                $variantes = str_replace('*', '%', $variantes);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::VARIANTES, $variantes, $comparison);
    }

    /**
     * Filter the query on the echantillon column
     *
     * Example usage:
     * <code>
     * $query->filterByEchantillon('fooValue');   // WHERE echantillon = 'fooValue'
     * $query->filterByEchantillon('%fooValue%'); // WHERE echantillon LIKE '%fooValue%'
     * </code>
     *
     * @param     string $echantillon The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByEchantillon($echantillon = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($echantillon)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $echantillon)) {
                $echantillon = str_replace('*', '%', $echantillon);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ECHANTILLON, $echantillon, $comparison);
    }

    /**
     * Filter the query on the reunion column
     *
     * Example usage:
     * <code>
     * $query->filterByReunion('fooValue');   // WHERE reunion = 'fooValue'
     * $query->filterByReunion('%fooValue%'); // WHERE reunion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $reunion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByReunion($reunion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($reunion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $reunion)) {
                $reunion = str_replace('*', '%', $reunion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::REUNION, $reunion, $comparison);
    }

    /**
     * Filter the query on the visites_lieux column
     *
     * Example usage:
     * <code>
     * $query->filterByVisitesLieux('fooValue');   // WHERE visites_lieux = 'fooValue'
     * $query->filterByVisitesLieux('%fooValue%'); // WHERE visites_lieux LIKE '%fooValue%'
     * </code>
     *
     * @param     string $visitesLieux The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByVisitesLieux($visitesLieux = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($visitesLieux)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $visitesLieux)) {
                $visitesLieux = str_replace('*', '%', $visitesLieux);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::VISITES_LIEUX, $visitesLieux, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionFr('fooValue');   // WHERE add_echantillion_fr = 'fooValue'
     * $query->filterByAddEchantillionFr('%fooValue%'); // WHERE add_echantillion_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionFr($addEchantillionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionFr)) {
                $addEchantillionFr = str_replace('*', '%', $addEchantillionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_FR, $addEchantillionFr, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionEn('fooValue');   // WHERE add_echantillion_en = 'fooValue'
     * $query->filterByAddEchantillionEn('%fooValue%'); // WHERE add_echantillion_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionEn($addEchantillionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionEn)) {
                $addEchantillionEn = str_replace('*', '%', $addEchantillionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_EN, $addEchantillionEn, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionEs('fooValue');   // WHERE add_echantillion_es = 'fooValue'
     * $query->filterByAddEchantillionEs('%fooValue%'); // WHERE add_echantillion_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionEs($addEchantillionEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionEs)) {
                $addEchantillionEs = str_replace('*', '%', $addEchantillionEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_ES, $addEchantillionEs, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionSu('fooValue');   // WHERE add_echantillion_su = 'fooValue'
     * $query->filterByAddEchantillionSu('%fooValue%'); // WHERE add_echantillion_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionSu($addEchantillionSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionSu)) {
                $addEchantillionSu = str_replace('*', '%', $addEchantillionSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_SU, $addEchantillionSu, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionDu('fooValue');   // WHERE add_echantillion_du = 'fooValue'
     * $query->filterByAddEchantillionDu('%fooValue%'); // WHERE add_echantillion_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionDu($addEchantillionDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionDu)) {
                $addEchantillionDu = str_replace('*', '%', $addEchantillionDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_DU, $addEchantillionDu, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionCz('fooValue');   // WHERE add_echantillion_cz = 'fooValue'
     * $query->filterByAddEchantillionCz('%fooValue%'); // WHERE add_echantillion_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionCz($addEchantillionCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionCz)) {
                $addEchantillionCz = str_replace('*', '%', $addEchantillionCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_CZ, $addEchantillionCz, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionAr('fooValue');   // WHERE add_echantillion_ar = 'fooValue'
     * $query->filterByAddEchantillionAr('%fooValue%'); // WHERE add_echantillion_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionAr($addEchantillionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionAr)) {
                $addEchantillionAr = str_replace('*', '%', $addEchantillionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_AR, $addEchantillionAr, $comparison);
    }

    /**
     * Filter the query on the add_reunion_fr column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionFr('fooValue');   // WHERE add_reunion_fr = 'fooValue'
     * $query->filterByAddReunionFr('%fooValue%'); // WHERE add_reunion_fr LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionFr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionFr($addReunionFr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionFr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionFr)) {
                $addReunionFr = str_replace('*', '%', $addReunionFr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_FR, $addReunionFr, $comparison);
    }

    /**
     * Filter the query on the add_reunion_en column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionEn('fooValue');   // WHERE add_reunion_en = 'fooValue'
     * $query->filterByAddReunionEn('%fooValue%'); // WHERE add_reunion_en LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionEn The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionEn($addReunionEn = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionEn)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionEn)) {
                $addReunionEn = str_replace('*', '%', $addReunionEn);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_EN, $addReunionEn, $comparison);
    }

    /**
     * Filter the query on the add_reunion_es column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionEs('fooValue');   // WHERE add_reunion_es = 'fooValue'
     * $query->filterByAddReunionEs('%fooValue%'); // WHERE add_reunion_es LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionEs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionEs($addReunionEs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionEs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionEs)) {
                $addReunionEs = str_replace('*', '%', $addReunionEs);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_ES, $addReunionEs, $comparison);
    }

    /**
     * Filter the query on the add_reunion_su column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionSu('fooValue');   // WHERE add_reunion_su = 'fooValue'
     * $query->filterByAddReunionSu('%fooValue%'); // WHERE add_reunion_su LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionSu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionSu($addReunionSu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionSu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionSu)) {
                $addReunionSu = str_replace('*', '%', $addReunionSu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_SU, $addReunionSu, $comparison);
    }

    /**
     * Filter the query on the add_reunion_du column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionDu('fooValue');   // WHERE add_reunion_du = 'fooValue'
     * $query->filterByAddReunionDu('%fooValue%'); // WHERE add_reunion_du LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionDu The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionDu($addReunionDu = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionDu)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionDu)) {
                $addReunionDu = str_replace('*', '%', $addReunionDu);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_DU, $addReunionDu, $comparison);
    }

    /**
     * Filter the query on the add_reunion_cz column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionCz('fooValue');   // WHERE add_reunion_cz = 'fooValue'
     * $query->filterByAddReunionCz('%fooValue%'); // WHERE add_reunion_cz LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionCz The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionCz($addReunionCz = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionCz)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionCz)) {
                $addReunionCz = str_replace('*', '%', $addReunionCz);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_CZ, $addReunionCz, $comparison);
    }

    /**
     * Filter the query on the add_reunion_ar column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionAr('fooValue');   // WHERE add_reunion_ar = 'fooValue'
     * $query->filterByAddReunionAr('%fooValue%'); // WHERE add_reunion_ar LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionAr The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionAr($addReunionAr = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionAr)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionAr)) {
                $addReunionAr = str_replace('*', '%', $addReunionAr);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_AR, $addReunionAr, $comparison);
    }

    /**
     * Filter the query on the description_detail_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionDetailIt('fooValue');   // WHERE description_detail_it = 'fooValue'
     * $query->filterByDescriptionDetailIt('%fooValue%'); // WHERE description_detail_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionDetailIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionDetailIt($descriptionDetailIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionDetailIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionDetailIt)) {
                $descriptionDetailIt = str_replace('*', '%', $descriptionDetailIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_DETAIL_IT, $descriptionDetailIt, $comparison);
    }

    /**
     * Filter the query on the description_it column
     *
     * Example usage:
     * <code>
     * $query->filterByDescriptionIt('fooValue');   // WHERE description_it = 'fooValue'
     * $query->filterByDescriptionIt('%fooValue%'); // WHERE description_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $descriptionIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDescriptionIt($descriptionIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($descriptionIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $descriptionIt)) {
                $descriptionIt = str_replace('*', '%', $descriptionIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DESCRIPTION_IT, $descriptionIt, $comparison);
    }

    /**
     * Filter the query on the add_echantillion_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAddEchantillionIt('fooValue');   // WHERE add_echantillion_it = 'fooValue'
     * $query->filterByAddEchantillionIt('%fooValue%'); // WHERE add_echantillion_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addEchantillionIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddEchantillionIt($addEchantillionIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addEchantillionIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addEchantillionIt)) {
                $addEchantillionIt = str_replace('*', '%', $addEchantillionIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_ECHANTILLION_IT, $addEchantillionIt, $comparison);
    }

    /**
     * Filter the query on the add_reunion_it column
     *
     * Example usage:
     * <code>
     * $query->filterByAddReunionIt('fooValue');   // WHERE add_reunion_it = 'fooValue'
     * $query->filterByAddReunionIt('%fooValue%'); // WHERE add_reunion_it LIKE '%fooValue%'
     * </code>
     *
     * @param     string $addReunionIt The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByAddReunionIt($addReunionIt = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($addReunionIt)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $addReunionIt)) {
                $addReunionIt = str_replace('*', '%', $addReunionIt);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ADD_REUNION_IT, $addReunionIt, $comparison);
    }

    /**
     * Filter the query on the clause_sociale column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSociale('fooValue');   // WHERE clause_sociale = 'fooValue'
     * $query->filterByClauseSociale('%fooValue%'); // WHERE clause_sociale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSociale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseSociale($clauseSociale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSociale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSociale)) {
                $clauseSociale = str_replace('*', '%', $clauseSociale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_SOCIALE, $clauseSociale, $comparison);
    }

    /**
     * Filter the query on the clause_environnementale column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvironnementale('fooValue');   // WHERE clause_environnementale = 'fooValue'
     * $query->filterByClauseEnvironnementale('%fooValue%'); // WHERE clause_environnementale LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvironnementale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseEnvironnementale($clauseEnvironnementale = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvironnementale)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvironnementale)) {
                $clauseEnvironnementale = str_replace('*', '%', $clauseEnvironnementale);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_ENVIRONNEMENTALE, $clauseEnvironnementale, $comparison);
    }

    /**
     * Filter the query on the decision column
     *
     * Example usage:
     * <code>
     * $query->filterByDecision('fooValue');   // WHERE decision = 'fooValue'
     * $query->filterByDecision('%fooValue%'); // WHERE decision LIKE '%fooValue%'
     * </code>
     *
     * @param     string $decision The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByDecision($decision = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($decision)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $decision)) {
                $decision = str_replace('*', '%', $decision);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::DECISION, $decision, $comparison);
    }

    /**
     * Filter the query on the clause_sociale_condition_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSocialeConditionExecution('fooValue');   // WHERE clause_sociale_condition_execution = 'fooValue'
     * $query->filterByClauseSocialeConditionExecution('%fooValue%'); // WHERE clause_sociale_condition_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSocialeConditionExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseSocialeConditionExecution($clauseSocialeConditionExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSocialeConditionExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSocialeConditionExecution)) {
                $clauseSocialeConditionExecution = str_replace('*', '%', $clauseSocialeConditionExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_SOCIALE_CONDITION_EXECUTION, $clauseSocialeConditionExecution, $comparison);
    }

    /**
     * Filter the query on the clause_sociale_insertion column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSocialeInsertion('fooValue');   // WHERE clause_sociale_insertion = 'fooValue'
     * $query->filterByClauseSocialeInsertion('%fooValue%'); // WHERE clause_sociale_insertion LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSocialeInsertion The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseSocialeInsertion($clauseSocialeInsertion = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSocialeInsertion)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSocialeInsertion)) {
                $clauseSocialeInsertion = str_replace('*', '%', $clauseSocialeInsertion);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_SOCIALE_INSERTION, $clauseSocialeInsertion, $comparison);
    }

    /**
     * Filter the query on the clause_sociale_ateliers_proteges column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseSocialeAteliersProteges('fooValue');   // WHERE clause_sociale_ateliers_proteges = 'fooValue'
     * $query->filterByClauseSocialeAteliersProteges('%fooValue%'); // WHERE clause_sociale_ateliers_proteges LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseSocialeAteliersProteges The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseSocialeAteliersProteges($clauseSocialeAteliersProteges = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseSocialeAteliersProteges)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseSocialeAteliersProteges)) {
                $clauseSocialeAteliersProteges = str_replace('*', '%', $clauseSocialeAteliersProteges);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_SOCIALE_ATELIERS_PROTEGES, $clauseSocialeAteliersProteges, $comparison);
    }

    /**
     * Filter the query on the clause_env_specs_techniques column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvSpecsTechniques('fooValue');   // WHERE clause_env_specs_techniques = 'fooValue'
     * $query->filterByClauseEnvSpecsTechniques('%fooValue%'); // WHERE clause_env_specs_techniques LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvSpecsTechniques The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseEnvSpecsTechniques($clauseEnvSpecsTechniques = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvSpecsTechniques)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvSpecsTechniques)) {
                $clauseEnvSpecsTechniques = str_replace('*', '%', $clauseEnvSpecsTechniques);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_ENV_SPECS_TECHNIQUES, $clauseEnvSpecsTechniques, $comparison);
    }

    /**
     * Filter the query on the clause_env_cond_execution column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvCondExecution('fooValue');   // WHERE clause_env_cond_execution = 'fooValue'
     * $query->filterByClauseEnvCondExecution('%fooValue%'); // WHERE clause_env_cond_execution LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvCondExecution The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseEnvCondExecution($clauseEnvCondExecution = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvCondExecution)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvCondExecution)) {
                $clauseEnvCondExecution = str_replace('*', '%', $clauseEnvCondExecution);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_ENV_COND_EXECUTION, $clauseEnvCondExecution, $comparison);
    }

    /**
     * Filter the query on the clause_env_criteres_select column
     *
     * Example usage:
     * <code>
     * $query->filterByClauseEnvCriteresSelect('fooValue');   // WHERE clause_env_criteres_select = 'fooValue'
     * $query->filterByClauseEnvCriteresSelect('%fooValue%'); // WHERE clause_env_criteres_select LIKE '%fooValue%'
     * </code>
     *
     * @param     string $clauseEnvCriteresSelect The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByClauseEnvCriteresSelect($clauseEnvCriteresSelect = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($clauseEnvCriteresSelect)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $clauseEnvCriteresSelect)) {
                $clauseEnvCriteresSelect = str_replace('*', '%', $clauseEnvCriteresSelect);
                $comparison = Criteria::LIKE;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::CLAUSE_ENV_CRITERES_SELECT, $clauseEnvCriteresSelect, $comparison);
    }

    /**
     * Filter the query on the id_donnee_complementaire column
     *
     * Example usage:
     * <code>
     * $query->filterByIdDonneeComplementaire(1234); // WHERE id_donnee_complementaire = 1234
     * $query->filterByIdDonneeComplementaire(array(12, 34)); // WHERE id_donnee_complementaire IN (12, 34)
     * $query->filterByIdDonneeComplementaire(array('min' => 12)); // WHERE id_donnee_complementaire >= 12
     * $query->filterByIdDonneeComplementaire(array('max' => 12)); // WHERE id_donnee_complementaire <= 12
     * </code>
     *
     * @param     mixed $idDonneeComplementaire The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function filterByIdDonneeComplementaire($idDonneeComplementaire = null, $comparison = null)
    {
        if (is_array($idDonneeComplementaire)) {
            $useMinMax = false;
            if (isset($idDonneeComplementaire['min'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idDonneeComplementaire['max'])) {
                $this->addUsingAlias(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }

        return $this->addUsingAlias(CommonCategorieLotPeer::ID_DONNEE_COMPLEMENTAIRE, $idDonneeComplementaire, $comparison);
    }

    /**
     * Filter the query by a related CommonConsultation object
     *
     * @param   CommonConsultation $commonConsultation The related object to use as filter
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return                 CommonCategorieLotQuery The current query, for fluid interface
     * @throws PropelException - if the provided filter is invalid.
     */
    public function filterByCommonConsultation($commonConsultation, $comparison = null)
    {
        if ($commonConsultation instanceof CommonConsultation) {
            return $this
                ->addUsingAlias(CommonCategorieLotPeer::ORGANISME, $commonConsultation->getOrganisme(), $comparison)
                ->addUsingAlias(CommonCategorieLotPeer::CONSULTATION_REF, $commonConsultation->getReference(), $comparison);
        } else {
            throw new PropelException('filterByCommonConsultation() only accepts arguments of type CommonConsultation');
        }
    }

    /**
     * Adds a JOIN clause to the query using the CommonConsultation relation
     *
     * @param     string $relationAlias optional alias for the relation
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function joinCommonConsultation($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('CommonConsultation');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'CommonConsultation');
        }

        return $this;
    }

    /**
     * Use the CommonConsultation relation CommonConsultation object
     *
     * @see       useQuery()
     *
     * @param     string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return   CommonConsultationQuery A secondary query class using the current class as primary query
     */
    public function useCommonConsultationQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinCommonConsultation($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'CommonConsultation', 'CommonConsultationQuery');
    }

    /**
     * Exclude object from result
     *
     * @param   CommonCategorieLot $commonCategorieLot Object to remove from the list of results
     *
     * @return CommonCategorieLotQuery The current query, for fluid interface
     */
    public function prune($commonCategorieLot = null)
    {
        if ($commonCategorieLot) {
            $this->addCond('pruneCond0', $this->getAliasedColName(CommonCategorieLotPeer::ORGANISME), $commonCategorieLot->getOrganisme(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(CommonCategorieLotPeer::CONSULTATION_REF), $commonCategorieLot->getConsultationRef(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(CommonCategorieLotPeer::LOT), $commonCategorieLot->getLot(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

}
