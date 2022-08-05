<?php


/**
 * Base static class for performing query and update operations on the 'exec_contrat' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecContratPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_contrat';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecContrat';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecContratTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 70;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 70;

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_contrat.id_contrat';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'exec_contrat.consultation_ref';

    /** the column name for the organisme field */
    const ORGANISME = 'exec_contrat.organisme';

    /** the column name for the id_decision_enveloppe field */
    const ID_DECISION_ENVELOPPE = 'exec_contrat.id_decision_enveloppe';

    /** the column name for the numero field */
    const NUMERO = 'exec_contrat.numero';

    /** the column name for the statut field */
    const STATUT = 'exec_contrat.statut';

    /** the column name for the id_type_contrat field */
    const ID_TYPE_CONTRAT = 'exec_contrat.id_type_contrat';

    /** the column name for the id_type_structure field */
    const ID_TYPE_STRUCTURE = 'exec_contrat.id_type_structure';

    /** the column name for the objet field */
    const OBJET = 'exec_contrat.objet';

    /** the column name for the num_consultation field */
    const NUM_CONSULTATION = 'exec_contrat.num_consultation';

    /** the column name for the id_nature_prestation field */
    const ID_NATURE_PRESTATION = 'exec_contrat.id_nature_prestation';

    /** the column name for the id_service field */
    const ID_SERVICE = 'exec_contrat.id_service';

    /** the column name for the id_service_gerant field */
    const ID_SERVICE_GERANT = 'exec_contrat.id_service_gerant';

    /** the column name for the id_agent_gestion field */
    const ID_AGENT_GESTION = 'exec_contrat.id_agent_gestion';

    /** the column name for the reconductible field */
    const RECONDUCTIBLE = 'exec_contrat.reconductible';

    /** the column name for the nombre_reconduction field */
    const NOMBRE_RECONDUCTION = 'exec_contrat.nombre_reconduction';

    /** the column name for the montant_ht field */
    const MONTANT_HT = 'exec_contrat.montant_ht';

    /** the column name for the montant_ttc field */
    const MONTANT_TTC = 'exec_contrat.montant_ttc';

    /** the column name for the montant_min field */
    const MONTANT_MIN = 'exec_contrat.montant_min';

    /** the column name for the montant_max field */
    const MONTANT_MAX = 'exec_contrat.montant_max';

    /** the column name for the montant_min_ttc field */
    const MONTANT_MIN_TTC = 'exec_contrat.montant_min_ttc';

    /** the column name for the montant_max_ttc field */
    const MONTANT_MAX_TTC = 'exec_contrat.montant_max_ttc';

    /** the column name for the montant_facture_ht field */
    const MONTANT_FACTURE_HT = 'exec_contrat.montant_facture_ht';

    /** the column name for the montant_facture_ttc field */
    const MONTANT_FACTURE_TTC = 'exec_contrat.montant_facture_ttc';

    /** the column name for the montant_paye_ht field */
    const MONTANT_PAYE_HT = 'exec_contrat.montant_paye_ht';

    /** the column name for the montant_paye_ttc field */
    const MONTANT_PAYE_TTC = 'exec_contrat.montant_paye_ttc';

    /** the column name for the montant_caution field */
    const MONTANT_CAUTION = 'exec_contrat.montant_caution';

    /** the column name for the pourcentage_caution field */
    const POURCENTAGE_CAUTION = 'exec_contrat.pourcentage_caution';

    /** the column name for the retenue_garantie field */
    const RETENUE_GARANTIE = 'exec_contrat.retenue_garantie';

    /** the column name for the pourcentage_retenue_garantie field */
    const POURCENTAGE_RETENUE_GARANTIE = 'exec_contrat.pourcentage_retenue_garantie';

    /** the column name for the montant_retenu_garantie field */
    const MONTANT_RETENU_GARANTIE = 'exec_contrat.montant_retenu_garantie';

    /** the column name for the pourcentage_prelevement_garantie field */
    const POURCENTAGE_PRELEVEMENT_GARANTIE = 'exec_contrat.pourcentage_prelevement_garantie';

    /** the column name for the montant_avance field */
    const MONTANT_AVANCE = 'exec_contrat.montant_avance';

    /** the column name for the delai_partiel field */
    const DELAI_PARTIEL = 'exec_contrat.delai_partiel';

    /** the column name for the delai_contrat field */
    const DELAI_CONTRAT = 'exec_contrat.delai_contrat';

    /** the column name for the unite_delai_contrat field */
    const UNITE_DELAI_CONTRAT = 'exec_contrat.unite_delai_contrat';

    /** the column name for the date_approbation field */
    const DATE_APPROBATION = 'exec_contrat.date_approbation';

    /** the column name for the date_notification_approbation field */
    const DATE_NOTIFICATION_APPROBATION = 'exec_contrat.date_notification_approbation';

    /** the column name for the date_fin field */
    const DATE_FIN = 'exec_contrat.date_fin';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_contrat.date_crea';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_contrat.id_agent_crea';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_contrat.date_modif';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_contrat.id_agent_modif';

    /** the column name for the delai_reel field */
    const DELAI_REEL = 'exec_contrat.delai_reel';

    /** the column name for the depassement field */
    const DEPASSEMENT = 'exec_contrat.depassement';

    /** the column name for the date_maj_delai_reel field */
    const DATE_MAJ_DELAI_REEL = 'exec_contrat.date_maj_delai_reel';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 'exec_contrat.id_parapheur';

    /** the column name for the statut_parapheur field */
    const STATUT_PARAPHEUR = 'exec_contrat.statut_parapheur';

    /** the column name for the date_cloture_parapheur field */
    const DATE_CLOTURE_PARAPHEUR = 'exec_contrat.date_cloture_parapheur';

    /** the column name for the garantie field */
    const GARANTIE = 'exec_contrat.garantie';

    /** the column name for the duree_garantie field */
    const DUREE_GARANTIE = 'exec_contrat.duree_garantie';

    /** the column name for the unite_garantie field */
    const UNITE_GARANTIE = 'exec_contrat.unite_garantie';

    /** the column name for the type_penalite field */
    const TYPE_PENALITE = 'exec_contrat.type_penalite';

    /** the column name for the pourcentage_penalite field */
    const POURCENTAGE_PENALITE = 'exec_contrat.pourcentage_penalite';

    /** the column name for the montant_penalite field */
    const MONTANT_PENALITE = 'exec_contrat.montant_penalite';

    /** the column name for the plafond_penalite field */
    const PLAFOND_PENALITE = 'exec_contrat.plafond_penalite';

    /** the column name for the mode_passation field */
    const MODE_PASSATION = 'exec_contrat.mode_passation';

    /** the column name for the lie_marche field */
    const LIE_MARCHE = 'exec_contrat.lie_marche';

    /** the column name for the num_chapeau field */
    const NUM_CHAPEAU = 'exec_contrat.num_chapeau';

    /** the column name for the os_phase field */
    const OS_PHASE = 'exec_contrat.os_phase';

    /** the column name for the prestation_demande field */
    const PRESTATION_DEMANDE = 'exec_contrat.prestation_demande';

    /** the column name for the forfait_jh field */
    const FORFAIT_JH = 'exec_contrat.forfait_jh';

    /** the column name for the quantite_jh field */
    const QUANTITE_JH = 'exec_contrat.quantite_jh';

    /** the column name for the nature_marche field */
    const NATURE_MARCHE = 'exec_contrat.nature_marche';

    /** the column name for the date_debut field */
    const DATE_DEBUT = 'exec_contrat.date_debut';

    /** the column name for the plurianuelle field */
    const PLURIANUELLE = 'exec_contrat.plurianuelle';

    /** the column name for the trancheconditionnelle field */
    const TRANCHECONDITIONNELLE = 'exec_contrat.trancheconditionnelle';

    /** the column name for the id_agent_cr field */
    const ID_AGENT_CR = 'exec_contrat.id_agent_cr';

    /** the column name for the devise field */
    const DEVISE = 'exec_contrat.devise';

    /** the column name for the id_contrat_source field */
    const ID_CONTRAT_SOURCE = 'exec_contrat.id_contrat_source';

    /** The enumerated values for the retenue_garantie field */
    const RETENUE_GARANTIE_0 = '0';
    const RETENUE_GARANTIE_1 = '1';

    /** The enumerated values for the garantie field */
    const GARANTIE_0 = '0';
    const GARANTIE_1 = '1';

    /** The enumerated values for the type_penalite field */
    const TYPE_PENALITE_0 = '0';
    const TYPE_PENALITE_1 = '1';
    const TYPE_PENALITE_2 = '2';

    /** The enumerated values for the lie_marche field */
    const LIE_MARCHE_0 = '0';
    const LIE_MARCHE_1 = '1';

    /** The enumerated values for the os_phase field */
    const OS_PHASE_0 = '0';
    const OS_PHASE_1 = '1';

    /** The enumerated values for the prestation_demande field */
    const PRESTATION_DEMANDE_0 = '0';
    const PRESTATION_DEMANDE_1 = '1';

    /** The enumerated values for the forfait_jh field */
    const FORFAIT_JH_0 = '0';
    const FORFAIT_JH_1 = '1';

    /** The enumerated values for the plurianuelle field */
    const PLURIANUELLE_0 = '0';
    const PLURIANUELLE_1 = '1';

    /** The enumerated values for the trancheconditionnelle field */
    const TRANCHECONDITIONNELLE_0 = '0';
    const TRANCHECONDITIONNELLE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecContrat objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecContrat[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecContratPeer::$fieldNames[CommonExecContratPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdContrat', 'ConsultationRef', 'Organisme', 'IdDecisionEnveloppe', 'Numero', 'Statut', 'IdTypeContrat', 'IdTypeStructure', 'Objet', 'NumConsultation', 'IdNaturePrestation', 'IdService', 'IdServiceGerant', 'IdAgentGestion', 'Reconductible', 'NombreReconduction', 'MontantHt', 'MontantTtc', 'MontantMin', 'MontantMax', 'MontantMinTtc', 'MontantMaxTtc', 'MontantFactureHt', 'MontantFactureTtc', 'MontantPayeHt', 'MontantPayeTtc', 'MontantCaution', 'PourcentageCaution', 'RetenueGarantie', 'PourcentageRetenueGarantie', 'MontantRetenuGarantie', 'PourcentagePrelevementGarantie', 'MontantAvance', 'DelaiPartiel', 'DelaiContrat', 'UniteDelaiContrat', 'DateApprobation', 'DateNotificationApprobation', 'DateFin', 'DateCrea', 'IdAgentCrea', 'DateModif', 'IdAgentModif', 'DelaiReel', 'Depassement', 'DateMajDelaiReel', 'IdParapheur', 'StatutParapheur', 'DateClotureParapheur', 'Garantie', 'DureeGarantie', 'UniteGarantie', 'TypePenalite', 'PourcentagePenalite', 'MontantPenalite', 'PlafondPenalite', 'ModePassation', 'LieMarche', 'NumChapeau', 'OsPhase', 'PrestationDemande', 'ForfaitJh', 'QuantiteJh', 'NatureMarche', 'DateDebut', 'Plurianuelle', 'Trancheconditionnelle', 'IdAgentCr', 'Devise', 'IdContratSource', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idContrat', 'consultationRef', 'organisme', 'idDecisionEnveloppe', 'numero', 'statut', 'idTypeContrat', 'idTypeStructure', 'objet', 'numConsultation', 'idNaturePrestation', 'idService', 'idServiceGerant', 'idAgentGestion', 'reconductible', 'nombreReconduction', 'montantHt', 'montantTtc', 'montantMin', 'montantMax', 'montantMinTtc', 'montantMaxTtc', 'montantFactureHt', 'montantFactureTtc', 'montantPayeHt', 'montantPayeTtc', 'montantCaution', 'pourcentageCaution', 'retenueGarantie', 'pourcentageRetenueGarantie', 'montantRetenuGarantie', 'pourcentagePrelevementGarantie', 'montantAvance', 'delaiPartiel', 'delaiContrat', 'uniteDelaiContrat', 'dateApprobation', 'dateNotificationApprobation', 'dateFin', 'dateCrea', 'idAgentCrea', 'dateModif', 'idAgentModif', 'delaiReel', 'depassement', 'dateMajDelaiReel', 'idParapheur', 'statutParapheur', 'dateClotureParapheur', 'garantie', 'dureeGarantie', 'uniteGarantie', 'typePenalite', 'pourcentagePenalite', 'montantPenalite', 'plafondPenalite', 'modePassation', 'lieMarche', 'numChapeau', 'osPhase', 'prestationDemande', 'forfaitJh', 'quantiteJh', 'natureMarche', 'dateDebut', 'plurianuelle', 'trancheconditionnelle', 'idAgentCr', 'devise', 'idContratSource', ),
        BasePeer::TYPE_COLNAME => array (CommonExecContratPeer::ID_CONTRAT, CommonExecContratPeer::CONSULTATION_REF, CommonExecContratPeer::ORGANISME, CommonExecContratPeer::ID_DECISION_ENVELOPPE, CommonExecContratPeer::NUMERO, CommonExecContratPeer::STATUT, CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecContratPeer::OBJET, CommonExecContratPeer::NUM_CONSULTATION, CommonExecContratPeer::ID_NATURE_PRESTATION, CommonExecContratPeer::ID_SERVICE, CommonExecContratPeer::ID_SERVICE_GERANT, CommonExecContratPeer::ID_AGENT_GESTION, CommonExecContratPeer::RECONDUCTIBLE, CommonExecContratPeer::NOMBRE_RECONDUCTION, CommonExecContratPeer::MONTANT_HT, CommonExecContratPeer::MONTANT_TTC, CommonExecContratPeer::MONTANT_MIN, CommonExecContratPeer::MONTANT_MAX, CommonExecContratPeer::MONTANT_MIN_TTC, CommonExecContratPeer::MONTANT_MAX_TTC, CommonExecContratPeer::MONTANT_FACTURE_HT, CommonExecContratPeer::MONTANT_FACTURE_TTC, CommonExecContratPeer::MONTANT_PAYE_HT, CommonExecContratPeer::MONTANT_PAYE_TTC, CommonExecContratPeer::MONTANT_CAUTION, CommonExecContratPeer::POURCENTAGE_CAUTION, CommonExecContratPeer::RETENUE_GARANTIE, CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE, CommonExecContratPeer::MONTANT_RETENU_GARANTIE, CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE, CommonExecContratPeer::MONTANT_AVANCE, CommonExecContratPeer::DELAI_PARTIEL, CommonExecContratPeer::DELAI_CONTRAT, CommonExecContratPeer::UNITE_DELAI_CONTRAT, CommonExecContratPeer::DATE_APPROBATION, CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION, CommonExecContratPeer::DATE_FIN, CommonExecContratPeer::DATE_CREA, CommonExecContratPeer::ID_AGENT_CREA, CommonExecContratPeer::DATE_MODIF, CommonExecContratPeer::ID_AGENT_MODIF, CommonExecContratPeer::DELAI_REEL, CommonExecContratPeer::DEPASSEMENT, CommonExecContratPeer::DATE_MAJ_DELAI_REEL, CommonExecContratPeer::ID_PARAPHEUR, CommonExecContratPeer::STATUT_PARAPHEUR, CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR, CommonExecContratPeer::GARANTIE, CommonExecContratPeer::DUREE_GARANTIE, CommonExecContratPeer::UNITE_GARANTIE, CommonExecContratPeer::TYPE_PENALITE, CommonExecContratPeer::POURCENTAGE_PENALITE, CommonExecContratPeer::MONTANT_PENALITE, CommonExecContratPeer::PLAFOND_PENALITE, CommonExecContratPeer::MODE_PASSATION, CommonExecContratPeer::LIE_MARCHE, CommonExecContratPeer::NUM_CHAPEAU, CommonExecContratPeer::OS_PHASE, CommonExecContratPeer::PRESTATION_DEMANDE, CommonExecContratPeer::FORFAIT_JH, CommonExecContratPeer::QUANTITE_JH, CommonExecContratPeer::NATURE_MARCHE, CommonExecContratPeer::DATE_DEBUT, CommonExecContratPeer::PLURIANUELLE, CommonExecContratPeer::TRANCHECONDITIONNELLE, CommonExecContratPeer::ID_AGENT_CR, CommonExecContratPeer::DEVISE, CommonExecContratPeer::ID_CONTRAT_SOURCE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CONTRAT', 'CONSULTATION_REF', 'ORGANISME', 'ID_DECISION_ENVELOPPE', 'NUMERO', 'STATUT', 'ID_TYPE_CONTRAT', 'ID_TYPE_STRUCTURE', 'OBJET', 'NUM_CONSULTATION', 'ID_NATURE_PRESTATION', 'ID_SERVICE', 'ID_SERVICE_GERANT', 'ID_AGENT_GESTION', 'RECONDUCTIBLE', 'NOMBRE_RECONDUCTION', 'MONTANT_HT', 'MONTANT_TTC', 'MONTANT_MIN', 'MONTANT_MAX', 'MONTANT_MIN_TTC', 'MONTANT_MAX_TTC', 'MONTANT_FACTURE_HT', 'MONTANT_FACTURE_TTC', 'MONTANT_PAYE_HT', 'MONTANT_PAYE_TTC', 'MONTANT_CAUTION', 'POURCENTAGE_CAUTION', 'RETENUE_GARANTIE', 'POURCENTAGE_RETENUE_GARANTIE', 'MONTANT_RETENU_GARANTIE', 'POURCENTAGE_PRELEVEMENT_GARANTIE', 'MONTANT_AVANCE', 'DELAI_PARTIEL', 'DELAI_CONTRAT', 'UNITE_DELAI_CONTRAT', 'DATE_APPROBATION', 'DATE_NOTIFICATION_APPROBATION', 'DATE_FIN', 'DATE_CREA', 'ID_AGENT_CREA', 'DATE_MODIF', 'ID_AGENT_MODIF', 'DELAI_REEL', 'DEPASSEMENT', 'DATE_MAJ_DELAI_REEL', 'ID_PARAPHEUR', 'STATUT_PARAPHEUR', 'DATE_CLOTURE_PARAPHEUR', 'GARANTIE', 'DUREE_GARANTIE', 'UNITE_GARANTIE', 'TYPE_PENALITE', 'POURCENTAGE_PENALITE', 'MONTANT_PENALITE', 'PLAFOND_PENALITE', 'MODE_PASSATION', 'LIE_MARCHE', 'NUM_CHAPEAU', 'OS_PHASE', 'PRESTATION_DEMANDE', 'FORFAIT_JH', 'QUANTITE_JH', 'NATURE_MARCHE', 'DATE_DEBUT', 'PLURIANUELLE', 'TRANCHECONDITIONNELLE', 'ID_AGENT_CR', 'DEVISE', 'ID_CONTRAT_SOURCE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_contrat', 'consultation_ref', 'organisme', 'id_decision_enveloppe', 'numero', 'statut', 'id_type_contrat', 'id_type_structure', 'objet', 'num_consultation', 'id_nature_prestation', 'id_service', 'id_service_gerant', 'id_agent_gestion', 'reconductible', 'nombre_reconduction', 'montant_ht', 'montant_ttc', 'montant_min', 'montant_max', 'montant_min_ttc', 'montant_max_ttc', 'montant_facture_ht', 'montant_facture_ttc', 'montant_paye_ht', 'montant_paye_ttc', 'montant_caution', 'pourcentage_caution', 'retenue_garantie', 'pourcentage_retenue_garantie', 'montant_retenu_garantie', 'pourcentage_prelevement_garantie', 'montant_avance', 'delai_partiel', 'delai_contrat', 'unite_delai_contrat', 'date_approbation', 'date_notification_approbation', 'date_fin', 'date_crea', 'id_agent_crea', 'date_modif', 'id_agent_modif', 'delai_reel', 'depassement', 'date_maj_delai_reel', 'id_parapheur', 'statut_parapheur', 'date_cloture_parapheur', 'garantie', 'duree_garantie', 'unite_garantie', 'type_penalite', 'pourcentage_penalite', 'montant_penalite', 'plafond_penalite', 'mode_passation', 'lie_marche', 'num_chapeau', 'os_phase', 'prestation_demande', 'forfait_jh', 'quantite_jh', 'nature_marche', 'date_debut', 'plurianuelle', 'trancheconditionnelle', 'id_agent_cr', 'devise', 'id_contrat_source', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecContratPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdContrat' => 0, 'ConsultationRef' => 1, 'Organisme' => 2, 'IdDecisionEnveloppe' => 3, 'Numero' => 4, 'Statut' => 5, 'IdTypeContrat' => 6, 'IdTypeStructure' => 7, 'Objet' => 8, 'NumConsultation' => 9, 'IdNaturePrestation' => 10, 'IdService' => 11, 'IdServiceGerant' => 12, 'IdAgentGestion' => 13, 'Reconductible' => 14, 'NombreReconduction' => 15, 'MontantHt' => 16, 'MontantTtc' => 17, 'MontantMin' => 18, 'MontantMax' => 19, 'MontantMinTtc' => 20, 'MontantMaxTtc' => 21, 'MontantFactureHt' => 22, 'MontantFactureTtc' => 23, 'MontantPayeHt' => 24, 'MontantPayeTtc' => 25, 'MontantCaution' => 26, 'PourcentageCaution' => 27, 'RetenueGarantie' => 28, 'PourcentageRetenueGarantie' => 29, 'MontantRetenuGarantie' => 30, 'PourcentagePrelevementGarantie' => 31, 'MontantAvance' => 32, 'DelaiPartiel' => 33, 'DelaiContrat' => 34, 'UniteDelaiContrat' => 35, 'DateApprobation' => 36, 'DateNotificationApprobation' => 37, 'DateFin' => 38, 'DateCrea' => 39, 'IdAgentCrea' => 40, 'DateModif' => 41, 'IdAgentModif' => 42, 'DelaiReel' => 43, 'Depassement' => 44, 'DateMajDelaiReel' => 45, 'IdParapheur' => 46, 'StatutParapheur' => 47, 'DateClotureParapheur' => 48, 'Garantie' => 49, 'DureeGarantie' => 50, 'UniteGarantie' => 51, 'TypePenalite' => 52, 'PourcentagePenalite' => 53, 'MontantPenalite' => 54, 'PlafondPenalite' => 55, 'ModePassation' => 56, 'LieMarche' => 57, 'NumChapeau' => 58, 'OsPhase' => 59, 'PrestationDemande' => 60, 'ForfaitJh' => 61, 'QuantiteJh' => 62, 'NatureMarche' => 63, 'DateDebut' => 64, 'Plurianuelle' => 65, 'Trancheconditionnelle' => 66, 'IdAgentCr' => 67, 'Devise' => 68, 'IdContratSource' => 69, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idContrat' => 0, 'consultationRef' => 1, 'organisme' => 2, 'idDecisionEnveloppe' => 3, 'numero' => 4, 'statut' => 5, 'idTypeContrat' => 6, 'idTypeStructure' => 7, 'objet' => 8, 'numConsultation' => 9, 'idNaturePrestation' => 10, 'idService' => 11, 'idServiceGerant' => 12, 'idAgentGestion' => 13, 'reconductible' => 14, 'nombreReconduction' => 15, 'montantHt' => 16, 'montantTtc' => 17, 'montantMin' => 18, 'montantMax' => 19, 'montantMinTtc' => 20, 'montantMaxTtc' => 21, 'montantFactureHt' => 22, 'montantFactureTtc' => 23, 'montantPayeHt' => 24, 'montantPayeTtc' => 25, 'montantCaution' => 26, 'pourcentageCaution' => 27, 'retenueGarantie' => 28, 'pourcentageRetenueGarantie' => 29, 'montantRetenuGarantie' => 30, 'pourcentagePrelevementGarantie' => 31, 'montantAvance' => 32, 'delaiPartiel' => 33, 'delaiContrat' => 34, 'uniteDelaiContrat' => 35, 'dateApprobation' => 36, 'dateNotificationApprobation' => 37, 'dateFin' => 38, 'dateCrea' => 39, 'idAgentCrea' => 40, 'dateModif' => 41, 'idAgentModif' => 42, 'delaiReel' => 43, 'depassement' => 44, 'dateMajDelaiReel' => 45, 'idParapheur' => 46, 'statutParapheur' => 47, 'dateClotureParapheur' => 48, 'garantie' => 49, 'dureeGarantie' => 50, 'uniteGarantie' => 51, 'typePenalite' => 52, 'pourcentagePenalite' => 53, 'montantPenalite' => 54, 'plafondPenalite' => 55, 'modePassation' => 56, 'lieMarche' => 57, 'numChapeau' => 58, 'osPhase' => 59, 'prestationDemande' => 60, 'forfaitJh' => 61, 'quantiteJh' => 62, 'natureMarche' => 63, 'dateDebut' => 64, 'plurianuelle' => 65, 'trancheconditionnelle' => 66, 'idAgentCr' => 67, 'devise' => 68, 'idContratSource' => 69, ),
        BasePeer::TYPE_COLNAME => array (CommonExecContratPeer::ID_CONTRAT => 0, CommonExecContratPeer::CONSULTATION_REF => 1, CommonExecContratPeer::ORGANISME => 2, CommonExecContratPeer::ID_DECISION_ENVELOPPE => 3, CommonExecContratPeer::NUMERO => 4, CommonExecContratPeer::STATUT => 5, CommonExecContratPeer::ID_TYPE_CONTRAT => 6, CommonExecContratPeer::ID_TYPE_STRUCTURE => 7, CommonExecContratPeer::OBJET => 8, CommonExecContratPeer::NUM_CONSULTATION => 9, CommonExecContratPeer::ID_NATURE_PRESTATION => 10, CommonExecContratPeer::ID_SERVICE => 11, CommonExecContratPeer::ID_SERVICE_GERANT => 12, CommonExecContratPeer::ID_AGENT_GESTION => 13, CommonExecContratPeer::RECONDUCTIBLE => 14, CommonExecContratPeer::NOMBRE_RECONDUCTION => 15, CommonExecContratPeer::MONTANT_HT => 16, CommonExecContratPeer::MONTANT_TTC => 17, CommonExecContratPeer::MONTANT_MIN => 18, CommonExecContratPeer::MONTANT_MAX => 19, CommonExecContratPeer::MONTANT_MIN_TTC => 20, CommonExecContratPeer::MONTANT_MAX_TTC => 21, CommonExecContratPeer::MONTANT_FACTURE_HT => 22, CommonExecContratPeer::MONTANT_FACTURE_TTC => 23, CommonExecContratPeer::MONTANT_PAYE_HT => 24, CommonExecContratPeer::MONTANT_PAYE_TTC => 25, CommonExecContratPeer::MONTANT_CAUTION => 26, CommonExecContratPeer::POURCENTAGE_CAUTION => 27, CommonExecContratPeer::RETENUE_GARANTIE => 28, CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE => 29, CommonExecContratPeer::MONTANT_RETENU_GARANTIE => 30, CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE => 31, CommonExecContratPeer::MONTANT_AVANCE => 32, CommonExecContratPeer::DELAI_PARTIEL => 33, CommonExecContratPeer::DELAI_CONTRAT => 34, CommonExecContratPeer::UNITE_DELAI_CONTRAT => 35, CommonExecContratPeer::DATE_APPROBATION => 36, CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION => 37, CommonExecContratPeer::DATE_FIN => 38, CommonExecContratPeer::DATE_CREA => 39, CommonExecContratPeer::ID_AGENT_CREA => 40, CommonExecContratPeer::DATE_MODIF => 41, CommonExecContratPeer::ID_AGENT_MODIF => 42, CommonExecContratPeer::DELAI_REEL => 43, CommonExecContratPeer::DEPASSEMENT => 44, CommonExecContratPeer::DATE_MAJ_DELAI_REEL => 45, CommonExecContratPeer::ID_PARAPHEUR => 46, CommonExecContratPeer::STATUT_PARAPHEUR => 47, CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR => 48, CommonExecContratPeer::GARANTIE => 49, CommonExecContratPeer::DUREE_GARANTIE => 50, CommonExecContratPeer::UNITE_GARANTIE => 51, CommonExecContratPeer::TYPE_PENALITE => 52, CommonExecContratPeer::POURCENTAGE_PENALITE => 53, CommonExecContratPeer::MONTANT_PENALITE => 54, CommonExecContratPeer::PLAFOND_PENALITE => 55, CommonExecContratPeer::MODE_PASSATION => 56, CommonExecContratPeer::LIE_MARCHE => 57, CommonExecContratPeer::NUM_CHAPEAU => 58, CommonExecContratPeer::OS_PHASE => 59, CommonExecContratPeer::PRESTATION_DEMANDE => 60, CommonExecContratPeer::FORFAIT_JH => 61, CommonExecContratPeer::QUANTITE_JH => 62, CommonExecContratPeer::NATURE_MARCHE => 63, CommonExecContratPeer::DATE_DEBUT => 64, CommonExecContratPeer::PLURIANUELLE => 65, CommonExecContratPeer::TRANCHECONDITIONNELLE => 66, CommonExecContratPeer::ID_AGENT_CR => 67, CommonExecContratPeer::DEVISE => 68, CommonExecContratPeer::ID_CONTRAT_SOURCE => 69, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_CONTRAT' => 0, 'CONSULTATION_REF' => 1, 'ORGANISME' => 2, 'ID_DECISION_ENVELOPPE' => 3, 'NUMERO' => 4, 'STATUT' => 5, 'ID_TYPE_CONTRAT' => 6, 'ID_TYPE_STRUCTURE' => 7, 'OBJET' => 8, 'NUM_CONSULTATION' => 9, 'ID_NATURE_PRESTATION' => 10, 'ID_SERVICE' => 11, 'ID_SERVICE_GERANT' => 12, 'ID_AGENT_GESTION' => 13, 'RECONDUCTIBLE' => 14, 'NOMBRE_RECONDUCTION' => 15, 'MONTANT_HT' => 16, 'MONTANT_TTC' => 17, 'MONTANT_MIN' => 18, 'MONTANT_MAX' => 19, 'MONTANT_MIN_TTC' => 20, 'MONTANT_MAX_TTC' => 21, 'MONTANT_FACTURE_HT' => 22, 'MONTANT_FACTURE_TTC' => 23, 'MONTANT_PAYE_HT' => 24, 'MONTANT_PAYE_TTC' => 25, 'MONTANT_CAUTION' => 26, 'POURCENTAGE_CAUTION' => 27, 'RETENUE_GARANTIE' => 28, 'POURCENTAGE_RETENUE_GARANTIE' => 29, 'MONTANT_RETENU_GARANTIE' => 30, 'POURCENTAGE_PRELEVEMENT_GARANTIE' => 31, 'MONTANT_AVANCE' => 32, 'DELAI_PARTIEL' => 33, 'DELAI_CONTRAT' => 34, 'UNITE_DELAI_CONTRAT' => 35, 'DATE_APPROBATION' => 36, 'DATE_NOTIFICATION_APPROBATION' => 37, 'DATE_FIN' => 38, 'DATE_CREA' => 39, 'ID_AGENT_CREA' => 40, 'DATE_MODIF' => 41, 'ID_AGENT_MODIF' => 42, 'DELAI_REEL' => 43, 'DEPASSEMENT' => 44, 'DATE_MAJ_DELAI_REEL' => 45, 'ID_PARAPHEUR' => 46, 'STATUT_PARAPHEUR' => 47, 'DATE_CLOTURE_PARAPHEUR' => 48, 'GARANTIE' => 49, 'DUREE_GARANTIE' => 50, 'UNITE_GARANTIE' => 51, 'TYPE_PENALITE' => 52, 'POURCENTAGE_PENALITE' => 53, 'MONTANT_PENALITE' => 54, 'PLAFOND_PENALITE' => 55, 'MODE_PASSATION' => 56, 'LIE_MARCHE' => 57, 'NUM_CHAPEAU' => 58, 'OS_PHASE' => 59, 'PRESTATION_DEMANDE' => 60, 'FORFAIT_JH' => 61, 'QUANTITE_JH' => 62, 'NATURE_MARCHE' => 63, 'DATE_DEBUT' => 64, 'PLURIANUELLE' => 65, 'TRANCHECONDITIONNELLE' => 66, 'ID_AGENT_CR' => 67, 'DEVISE' => 68, 'ID_CONTRAT_SOURCE' => 69, ),
        BasePeer::TYPE_FIELDNAME => array ('id_contrat' => 0, 'consultation_ref' => 1, 'organisme' => 2, 'id_decision_enveloppe' => 3, 'numero' => 4, 'statut' => 5, 'id_type_contrat' => 6, 'id_type_structure' => 7, 'objet' => 8, 'num_consultation' => 9, 'id_nature_prestation' => 10, 'id_service' => 11, 'id_service_gerant' => 12, 'id_agent_gestion' => 13, 'reconductible' => 14, 'nombre_reconduction' => 15, 'montant_ht' => 16, 'montant_ttc' => 17, 'montant_min' => 18, 'montant_max' => 19, 'montant_min_ttc' => 20, 'montant_max_ttc' => 21, 'montant_facture_ht' => 22, 'montant_facture_ttc' => 23, 'montant_paye_ht' => 24, 'montant_paye_ttc' => 25, 'montant_caution' => 26, 'pourcentage_caution' => 27, 'retenue_garantie' => 28, 'pourcentage_retenue_garantie' => 29, 'montant_retenu_garantie' => 30, 'pourcentage_prelevement_garantie' => 31, 'montant_avance' => 32, 'delai_partiel' => 33, 'delai_contrat' => 34, 'unite_delai_contrat' => 35, 'date_approbation' => 36, 'date_notification_approbation' => 37, 'date_fin' => 38, 'date_crea' => 39, 'id_agent_crea' => 40, 'date_modif' => 41, 'id_agent_modif' => 42, 'delai_reel' => 43, 'depassement' => 44, 'date_maj_delai_reel' => 45, 'id_parapheur' => 46, 'statut_parapheur' => 47, 'date_cloture_parapheur' => 48, 'garantie' => 49, 'duree_garantie' => 50, 'unite_garantie' => 51, 'type_penalite' => 52, 'pourcentage_penalite' => 53, 'montant_penalite' => 54, 'plafond_penalite' => 55, 'mode_passation' => 56, 'lie_marche' => 57, 'num_chapeau' => 58, 'os_phase' => 59, 'prestation_demande' => 60, 'forfait_jh' => 61, 'quantite_jh' => 62, 'nature_marche' => 63, 'date_debut' => 64, 'plurianuelle' => 65, 'trancheconditionnelle' => 66, 'id_agent_cr' => 67, 'devise' => 68, 'id_contrat_source' => 69, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonExecContratPeer::RETENUE_GARANTIE => array(
            CommonExecContratPeer::RETENUE_GARANTIE_0,
            CommonExecContratPeer::RETENUE_GARANTIE_1,
        ),
        CommonExecContratPeer::GARANTIE => array(
            CommonExecContratPeer::GARANTIE_0,
            CommonExecContratPeer::GARANTIE_1,
        ),
        CommonExecContratPeer::TYPE_PENALITE => array(
            CommonExecContratPeer::TYPE_PENALITE_0,
            CommonExecContratPeer::TYPE_PENALITE_1,
            CommonExecContratPeer::TYPE_PENALITE_2,
        ),
        CommonExecContratPeer::LIE_MARCHE => array(
            CommonExecContratPeer::LIE_MARCHE_0,
            CommonExecContratPeer::LIE_MARCHE_1,
        ),
        CommonExecContratPeer::OS_PHASE => array(
            CommonExecContratPeer::OS_PHASE_0,
            CommonExecContratPeer::OS_PHASE_1,
        ),
        CommonExecContratPeer::PRESTATION_DEMANDE => array(
            CommonExecContratPeer::PRESTATION_DEMANDE_0,
            CommonExecContratPeer::PRESTATION_DEMANDE_1,
        ),
        CommonExecContratPeer::FORFAIT_JH => array(
            CommonExecContratPeer::FORFAIT_JH_0,
            CommonExecContratPeer::FORFAIT_JH_1,
        ),
        CommonExecContratPeer::PLURIANUELLE => array(
            CommonExecContratPeer::PLURIANUELLE_0,
            CommonExecContratPeer::PLURIANUELLE_1,
        ),
        CommonExecContratPeer::TRANCHECONDITIONNELLE => array(
            CommonExecContratPeer::TRANCHECONDITIONNELLE_0,
            CommonExecContratPeer::TRANCHECONDITIONNELLE_1,
        ),
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return string          translated name of the field.
     * @throws PropelException - if the specified name could not be found in the fieldname mappings.
     */
    public static function translateFieldName($name, $fromType, $toType)
    {
        $toNames = CommonExecContratPeer::getFieldNames($toType);
        $key = isset(CommonExecContratPeer::$fieldKeys[$fromType][$name]) ? CommonExecContratPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecContratPeer::$fieldKeys[$fromType], true));
        }

        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return array           A list of field names
     * @throws PropelException - if the type is not valid.
     */
    public static function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, CommonExecContratPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecContratPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonExecContratPeer::$enumValueSets;
    }

    /**
     * Gets the list of values for an ENUM column
     *
     * @param string $colname The ENUM column name.
     *
     * @return array list of possible values for the column
     */
    public static function getValueSet($colname)
    {
        $valueSets = CommonExecContratPeer::getValueSets();

        if (!isset($valueSets[$colname])) {
            throw new PropelException(sprintf('Column "%s" has no ValueSet.', $colname));
        }

        return $valueSets[$colname];
    }

    /**
     * Gets the SQL value for the ENUM column value
     *
     * @param string $colname ENUM column name.
     * @param string $enumVal ENUM value.
     *
     * @return int SQL value
     */
    public static function getSqlValueForEnum($colname, $enumVal)
    {
        $values = CommonExecContratPeer::getValueSet($colname);
        if (!in_array($enumVal, $values)) {
            throw new PropelException(sprintf('Value "%s" is not accepted in this enumerated column', $colname));
        }

        return array_search($enumVal, $values);
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
     *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. CommonExecContratPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecContratPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(CommonExecContratPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecContratPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonExecContratPeer::ORGANISME);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_DECISION_ENVELOPPE);
            $criteria->addSelectColumn(CommonExecContratPeer::NUMERO);
            $criteria->addSelectColumn(CommonExecContratPeer::STATUT);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_TYPE_CONTRAT);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_TYPE_STRUCTURE);
            $criteria->addSelectColumn(CommonExecContratPeer::OBJET);
            $criteria->addSelectColumn(CommonExecContratPeer::NUM_CONSULTATION);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_NATURE_PRESTATION);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_SERVICE);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_SERVICE_GERANT);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_AGENT_GESTION);
            $criteria->addSelectColumn(CommonExecContratPeer::RECONDUCTIBLE);
            $criteria->addSelectColumn(CommonExecContratPeer::NOMBRE_RECONDUCTION);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_HT);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_TTC);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_MIN);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_MAX);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_MIN_TTC);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_MAX_TTC);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_FACTURE_HT);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_FACTURE_TTC);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_PAYE_HT);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_PAYE_TTC);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_CAUTION);
            $criteria->addSelectColumn(CommonExecContratPeer::POURCENTAGE_CAUTION);
            $criteria->addSelectColumn(CommonExecContratPeer::RETENUE_GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::POURCENTAGE_RETENUE_GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_RETENU_GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::POURCENTAGE_PRELEVEMENT_GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_AVANCE);
            $criteria->addSelectColumn(CommonExecContratPeer::DELAI_PARTIEL);
            $criteria->addSelectColumn(CommonExecContratPeer::DELAI_CONTRAT);
            $criteria->addSelectColumn(CommonExecContratPeer::UNITE_DELAI_CONTRAT);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_APPROBATION);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_NOTIFICATION_APPROBATION);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_FIN);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecContratPeer::DELAI_REEL);
            $criteria->addSelectColumn(CommonExecContratPeer::DEPASSEMENT);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_MAJ_DELAI_REEL);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecContratPeer::STATUT_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_CLOTURE_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecContratPeer::GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::DUREE_GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::UNITE_GARANTIE);
            $criteria->addSelectColumn(CommonExecContratPeer::TYPE_PENALITE);
            $criteria->addSelectColumn(CommonExecContratPeer::POURCENTAGE_PENALITE);
            $criteria->addSelectColumn(CommonExecContratPeer::MONTANT_PENALITE);
            $criteria->addSelectColumn(CommonExecContratPeer::PLAFOND_PENALITE);
            $criteria->addSelectColumn(CommonExecContratPeer::MODE_PASSATION);
            $criteria->addSelectColumn(CommonExecContratPeer::LIE_MARCHE);
            $criteria->addSelectColumn(CommonExecContratPeer::NUM_CHAPEAU);
            $criteria->addSelectColumn(CommonExecContratPeer::OS_PHASE);
            $criteria->addSelectColumn(CommonExecContratPeer::PRESTATION_DEMANDE);
            $criteria->addSelectColumn(CommonExecContratPeer::FORFAIT_JH);
            $criteria->addSelectColumn(CommonExecContratPeer::QUANTITE_JH);
            $criteria->addSelectColumn(CommonExecContratPeer::NATURE_MARCHE);
            $criteria->addSelectColumn(CommonExecContratPeer::DATE_DEBUT);
            $criteria->addSelectColumn(CommonExecContratPeer::PLURIANUELLE);
            $criteria->addSelectColumn(CommonExecContratPeer::TRANCHECONDITIONNELLE);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_AGENT_CR);
            $criteria->addSelectColumn(CommonExecContratPeer::DEVISE);
            $criteria->addSelectColumn(CommonExecContratPeer::ID_CONTRAT_SOURCE);
        } else {
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_decision_enveloppe');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.id_type_contrat');
            $criteria->addSelectColumn($alias . '.id_type_structure');
            $criteria->addSelectColumn($alias . '.objet');
            $criteria->addSelectColumn($alias . '.num_consultation');
            $criteria->addSelectColumn($alias . '.id_nature_prestation');
            $criteria->addSelectColumn($alias . '.id_service');
            $criteria->addSelectColumn($alias . '.id_service_gerant');
            $criteria->addSelectColumn($alias . '.id_agent_gestion');
            $criteria->addSelectColumn($alias . '.reconductible');
            $criteria->addSelectColumn($alias . '.nombre_reconduction');
            $criteria->addSelectColumn($alias . '.montant_ht');
            $criteria->addSelectColumn($alias . '.montant_ttc');
            $criteria->addSelectColumn($alias . '.montant_min');
            $criteria->addSelectColumn($alias . '.montant_max');
            $criteria->addSelectColumn($alias . '.montant_min_ttc');
            $criteria->addSelectColumn($alias . '.montant_max_ttc');
            $criteria->addSelectColumn($alias . '.montant_facture_ht');
            $criteria->addSelectColumn($alias . '.montant_facture_ttc');
            $criteria->addSelectColumn($alias . '.montant_paye_ht');
            $criteria->addSelectColumn($alias . '.montant_paye_ttc');
            $criteria->addSelectColumn($alias . '.montant_caution');
            $criteria->addSelectColumn($alias . '.pourcentage_caution');
            $criteria->addSelectColumn($alias . '.retenue_garantie');
            $criteria->addSelectColumn($alias . '.pourcentage_retenue_garantie');
            $criteria->addSelectColumn($alias . '.montant_retenu_garantie');
            $criteria->addSelectColumn($alias . '.pourcentage_prelevement_garantie');
            $criteria->addSelectColumn($alias . '.montant_avance');
            $criteria->addSelectColumn($alias . '.delai_partiel');
            $criteria->addSelectColumn($alias . '.delai_contrat');
            $criteria->addSelectColumn($alias . '.unite_delai_contrat');
            $criteria->addSelectColumn($alias . '.date_approbation');
            $criteria->addSelectColumn($alias . '.date_notification_approbation');
            $criteria->addSelectColumn($alias . '.date_fin');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.delai_reel');
            $criteria->addSelectColumn($alias . '.depassement');
            $criteria->addSelectColumn($alias . '.date_maj_delai_reel');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.statut_parapheur');
            $criteria->addSelectColumn($alias . '.date_cloture_parapheur');
            $criteria->addSelectColumn($alias . '.garantie');
            $criteria->addSelectColumn($alias . '.duree_garantie');
            $criteria->addSelectColumn($alias . '.unite_garantie');
            $criteria->addSelectColumn($alias . '.type_penalite');
            $criteria->addSelectColumn($alias . '.pourcentage_penalite');
            $criteria->addSelectColumn($alias . '.montant_penalite');
            $criteria->addSelectColumn($alias . '.plafond_penalite');
            $criteria->addSelectColumn($alias . '.mode_passation');
            $criteria->addSelectColumn($alias . '.lie_marche');
            $criteria->addSelectColumn($alias . '.num_chapeau');
            $criteria->addSelectColumn($alias . '.os_phase');
            $criteria->addSelectColumn($alias . '.prestation_demande');
            $criteria->addSelectColumn($alias . '.forfait_jh');
            $criteria->addSelectColumn($alias . '.quantite_jh');
            $criteria->addSelectColumn($alias . '.nature_marche');
            $criteria->addSelectColumn($alias . '.date_debut');
            $criteria->addSelectColumn($alias . '.plurianuelle');
            $criteria->addSelectColumn($alias . '.trancheconditionnelle');
            $criteria->addSelectColumn($alias . '.id_agent_cr');
            $criteria->addSelectColumn($alias . '.devise');
            $criteria->addSelectColumn($alias . '.id_contrat_source');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return                 CommonExecContrat
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecContratPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }

        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return array           Array of selected Objects
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return CommonExecContratPeer::populateObjects(CommonExecContratPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement directly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      CommonExecContrat $obj A CommonExecContrat object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdContrat();
            } // if key === null
            CommonExecContratPeer::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A CommonExecContrat object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecContrat) {
                $key = (string) $value->getIdContrat();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecContrat object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecContratPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecContrat Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecContratPeer::$instances[$key])) {
                return CommonExecContratPeer::$instances[$key];
            }
        }

        return null; // just to be explicit
    }
    
    /**
     * Clear the instance pool.
     *
     * @return void
     */
    public static function clearInstancePool($and_clear_all_references = false)
    {
      if ($and_clear_all_references) {
        foreach (CommonExecContratPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecContratPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_contrat
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return string A string version of PK or null if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return null.
        if ($row[$startcol] === null) {
            return null;
        }

        return (string) $row[$startcol];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {

        return (int) $row[$startcol];
    }
    
    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
    
        // set the class once to avoid overhead in the loop
        $cls = CommonExecContratPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecContratPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecContratPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();

        return $results;
    }
    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     * @return array (CommonExecContrat object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecContratPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecContratPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecContratPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeStructure table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeStructure(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecTypeStructurePeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CommonExecContrat objects pre-filled with their CommonExecTypeContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);
        }

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol = CommonExecContratPeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecContratPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecContrat) to $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecContrat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecContrat objects pre-filled with their CommonExecTypeStructure objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeStructure(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);
        }

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol = CommonExecContratPeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeStructurePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecTypeStructurePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecContratPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeStructurePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeStructurePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeStructurePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeStructurePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecContrat) to $obj2 (CommonExecTypeStructure)
                $obj2->addCommonExecContrat($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining all related tables
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecTypeStructurePeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }

    /**
     * Selects a collection of CommonExecContrat objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);
        }

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecTypeContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeStructurePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecTypeStructurePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecTypeStructurePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecContratPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecTypeContrat rows

            $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecContrat) to the collection in $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecContrat($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecTypeStructure rows

            $key3 = CommonExecTypeStructurePeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonExecTypeStructurePeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonExecTypeStructurePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecTypeStructurePeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecContrat) to the collection in $obj3 (CommonExecTypeStructure)
                $obj3->addCommonExecContrat($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecTypeStructurePeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecTypeStructure table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeStructure(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecContratPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);

        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();

        return $count;
    }


    /**
     * Selects a collection of CommonExecContrat objects pre-filled with all related objects except CommonExecTypeContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);
        }

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeStructurePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecTypeStructurePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_STRUCTURE, CommonExecTypeStructurePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecContratPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecTypeStructure rows

                $key2 = CommonExecTypeStructurePeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecTypeStructurePeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecTypeStructurePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecTypeStructurePeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecContrat) to the collection in $obj2 (CommonExecTypeStructure)
                $obj2->addCommonExecContrat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecContrat objects pre-filled with all related objects except CommonExecTypeStructure.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecContrat objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeStructure(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);
        }

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecTypeContratPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecContratPeer::ID_TYPE_CONTRAT, CommonExecTypeContratPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecContratPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecContratPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecContratPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecTypeContrat rows

                $key2 = CommonExecTypeContratPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecTypeContratPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecTypeContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecTypeContratPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecContrat) to the collection in $obj2 (CommonExecTypeContrat)
                $obj2->addCommonExecContrat($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(CommonExecContratPeer::DATABASE_NAME)->getTable(CommonExecContratPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecContratPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecContratPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecContratTableMap());
      }
    }

    /**
     * The class that the Peer will make instances of.
     *
     *
     * @return string ClassName
     */
    public static function getOMClass($row = 0, $colnum = 0)
    {
        return CommonExecContratPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecContrat or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecContrat object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecContrat object
        }

        if ($criteria->containsKey(CommonExecContratPeer::ID_CONTRAT) && $criteria->keyContainsValue(CommonExecContratPeer::ID_CONTRAT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecContratPeer::ID_CONTRAT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a CommonExecContrat or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecContrat object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecContratPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecContratPeer::ID_CONTRAT);
            $value = $criteria->remove(CommonExecContratPeer::ID_CONTRAT);
            if ($value) {
                $selectCriteria->add(CommonExecContratPeer::ID_CONTRAT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecContratPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecContrat object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_contrat table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecContratPeer::TABLE_NAME, $con, CommonExecContratPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecContratPeer::clearInstancePool();
            CommonExecContratPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecContrat or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecContrat object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *				if supported by native driver or if emulated using Propel.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, PropelPDO $con = null)
     {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecContratPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecContrat) { // it's a model object
            // invalidate the cache for this single object
            CommonExecContratPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecContratPeer::DATABASE_NAME);
            $criteria->add(CommonExecContratPeer::ID_CONTRAT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecContratPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecContratPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecContratPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecContrat object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecContrat $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecContratPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecContratPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->hasColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        }

        return BasePeer::doValidate(CommonExecContratPeer::DATABASE_NAME, CommonExecContratPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecContrat
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecContratPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecContratPeer::DATABASE_NAME);
        $criteria->add(CommonExecContratPeer::ID_CONTRAT, $pk);

        $v = CommonExecContratPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecContrat[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecContratPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecContratPeer::DATABASE_NAME);
            $criteria->add(CommonExecContratPeer::ID_CONTRAT, $pks, Criteria::IN);
            $objs = CommonExecContratPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecContratPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecContratPeer::buildTableMap();

