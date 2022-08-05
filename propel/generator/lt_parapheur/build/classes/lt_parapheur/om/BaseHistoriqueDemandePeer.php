<?php


/**
 * Base static class for performing query and update operations on the 'historique_demande' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseHistoriqueDemandePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 'historique_demande';

    /** the related Propel class for this table */
    const OM_CLASS = 'HistoriqueDemande';

    /** the related TableMap class for this table */
    const TM_CLASS = 'HistoriqueDemandeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 55;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 55;

    /** the column name for the ID_HISTORIQUE_DEMANDE field */
    const ID_HISTORIQUE_DEMANDE = 'historique_demande.ID_HISTORIQUE_DEMANDE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'historique_demande.ID_DEMANDE';

    /** the column name for the ID_ENTITE_AFFECTE field */
    const ID_ENTITE_AFFECTE = 'historique_demande.ID_ENTITE_AFFECTE';

    /** the column name for the SIGLE_ENTITE_AFFECTE_FR field */
    const SIGLE_ENTITE_AFFECTE_FR = 'historique_demande.SIGLE_ENTITE_AFFECTE_FR';

    /** the column name for the SIGLE_ENTITE_AFFECTE_AR field */
    const SIGLE_ENTITE_AFFECTE_AR = 'historique_demande.SIGLE_ENTITE_AFFECTE_AR';

    /** the column name for the ID_AGENT_AFFECTE field */
    const ID_AGENT_AFFECTE = 'historique_demande.ID_AGENT_AFFECTE';

    /** the column name for the NOM_AGENT_AFFECTE_FR field */
    const NOM_AGENT_AFFECTE_FR = 'historique_demande.NOM_AGENT_AFFECTE_FR';

    /** the column name for the NOM_AGENT_AFFECTE_AR field */
    const NOM_AGENT_AFFECTE_AR = 'historique_demande.NOM_AGENT_AFFECTE_AR';

    /** the column name for the COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE field */
    const COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE = 'historique_demande.COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE';

    /** the column name for the STATUT_HISTORIQUE_DEMANDE field */
    const STATUT_HISTORIQUE_DEMANDE = 'historique_demande.STATUT_HISTORIQUE_DEMANDE';

    /** the column name for the APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE field */
    const APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE = 'historique_demande.APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE';

    /** the column name for the DATE_INTERVENTION field */
    const DATE_INTERVENTION = 'historique_demande.DATE_INTERVENTION';

    /** the column name for the AGENT_HISTORIQUE_AR field */
    const AGENT_HISTORIQUE_AR = 'historique_demande.AGENT_HISTORIQUE_AR';

    /** the column name for the AGENT_HISTORIQUE_FR field */
    const AGENT_HISTORIQUE_FR = 'historique_demande.AGENT_HISTORIQUE_FR';

    /** the column name for the ACTION_HISTORIQUE_DEMANDE field */
    const ACTION_HISTORIQUE_DEMANDE = 'historique_demande.ACTION_HISTORIQUE_DEMANDE';

    /** the column name for the COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE field */
    const COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE = 'historique_demande.COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE';

    /** the column name for the COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE field */
    const COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE = 'historique_demande.COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE';

    /** the column name for the ID_AGENT field */
    const ID_AGENT = 'historique_demande.ID_AGENT';

    /** the column name for the DETAILS_AR field */
    const DETAILS_AR = 'historique_demande.DETAILS_AR';

    /** the column name for the DETAILS_FR field */
    const DETAILS_FR = 'historique_demande.DETAILS_FR';

    /** the column name for the ID_ENTITE_TRAITANTE field */
    const ID_ENTITE_TRAITANTE = 'historique_demande.ID_ENTITE_TRAITANTE';

    /** the column name for the SIGLE_ENTITE_TRAITANTE_FR field */
    const SIGLE_ENTITE_TRAITANTE_FR = 'historique_demande.SIGLE_ENTITE_TRAITANTE_FR';

    /** the column name for the SIGLE_ENTITE_TRAITANTE_AR field */
    const SIGLE_ENTITE_TRAITANTE_AR = 'historique_demande.SIGLE_ENTITE_TRAITANTE_AR';

    /** the column name for the ID_PIECE_JOINTE field */
    const ID_PIECE_JOINTE = 'historique_demande.ID_PIECE_JOINTE';

    /** the column name for the NOM_PIECE_JOINTE field */
    const NOM_PIECE_JOINTE = 'historique_demande.NOM_PIECE_JOINTE';

    /** the column name for the REVISION field */
    const REVISION = 'historique_demande.REVISION';

    /** the column name for the ID_HISTORIQUE_PRECEDENT field */
    const ID_HISTORIQUE_PRECEDENT = 'historique_demande.ID_HISTORIQUE_PRECEDENT';

    /** the column name for the ETAT field */
    const ETAT = 'historique_demande.ETAT';

    /** the column name for the ID_ACTION field */
    const ID_ACTION = 'historique_demande.ID_ACTION';

    /** the column name for the ID_PARTAGE field */
    const ID_PARTAGE = 'historique_demande.ID_PARTAGE';

    /** the column name for the ID_FORMAT field */
    const ID_FORMAT = 'historique_demande.ID_FORMAT';

    /** the column name for the FORMAT_FR field */
    const FORMAT_FR = 'historique_demande.FORMAT_FR';

    /** the column name for the FORMAT_AR field */
    const FORMAT_AR = 'historique_demande.FORMAT_AR';

    /** the column name for the ID_AGENT_REMPLACANT field */
    const ID_AGENT_REMPLACANT = 'historique_demande.ID_AGENT_REMPLACANT';

    /** the column name for the AGENT_REMPLACANT_AR field */
    const AGENT_REMPLACANT_AR = 'historique_demande.AGENT_REMPLACANT_AR';

    /** the column name for the AGENT_REMPLACANT_FR field */
    const AGENT_REMPLACANT_FR = 'historique_demande.AGENT_REMPLACANT_FR';

    /** the column name for the ID_HISTORIQUE_PARENT field */
    const ID_HISTORIQUE_PARENT = 'historique_demande.ID_HISTORIQUE_PARENT';

    /** the column name for the DATE_ECHEANCE_REPONSE field */
    const DATE_ECHEANCE_REPONSE = 'historique_demande.DATE_ECHEANCE_REPONSE';

    /** the column name for the CANAL field */
    const CANAL = 'historique_demande.CANAL';

    /** the column name for the INFO_CANAL field */
    const INFO_CANAL = 'historique_demande.INFO_CANAL';

    /** the column name for the ID_ETAPE_CIRCUIT_VALIDATION field */
    const ID_ETAPE_CIRCUIT_VALIDATION = 'historique_demande.ID_ETAPE_CIRCUIT_VALIDATION';

    /** the column name for the CHAMP_SUPP_1 field */
    const CHAMP_SUPP_1 = 'historique_demande.CHAMP_SUPP_1';

    /** the column name for the CHAMP_SUPP_2 field */
    const CHAMP_SUPP_2 = 'historique_demande.CHAMP_SUPP_2';

    /** the column name for the CHAMP_SUPP_3 field */
    const CHAMP_SUPP_3 = 'historique_demande.CHAMP_SUPP_3';

    /** the column name for the CHAMP_SUPP_4 field */
    const CHAMP_SUPP_4 = 'historique_demande.CHAMP_SUPP_4';

    /** the column name for the CHAMP_SUPP_5 field */
    const CHAMP_SUPP_5 = 'historique_demande.CHAMP_SUPP_5';

    /** the column name for the ID_INSTRUCTION field */
    const ID_INSTRUCTION = 'historique_demande.ID_INSTRUCTION';

    /** the column name for the TYPE_CLASSEMENT field */
    const TYPE_CLASSEMENT = 'historique_demande.TYPE_CLASSEMENT';

    /** the column name for the TYPE_REPONSE field */
    const TYPE_REPONSE = 'historique_demande.TYPE_REPONSE';

    /** the column name for the AVEC_REPONSE field */
    const AVEC_REPONSE = 'historique_demande.AVEC_REPONSE';

    /** the column name for the REALISE field */
    const REALISE = 'historique_demande.REALISE';

    /** the column name for the DATE_ECHEANCE_REPONSE_PROCHE field */
    const DATE_ECHEANCE_REPONSE_PROCHE = 'historique_demande.DATE_ECHEANCE_REPONSE_PROCHE';

    /** the column name for the EMAIL_VALIDATION field */
    const EMAIL_VALIDATION = 'historique_demande.EMAIL_VALIDATION';

    /** the column name for the TOKEN_VALIDATION field */
    const TOKEN_VALIDATION = 'historique_demande.TOKEN_VALIDATION';

    /** the column name for the CHECK_LIST_TAB field */
    const CHECK_LIST_TAB = 'historique_demande.CHECK_LIST_TAB';

    /** The enumerated values for the ETAT field */
    const ETAT_0 = '0';
    const ETAT_1 = '1';

    /** The enumerated values for the AVEC_REPONSE field */
    const AVEC_REPONSE_0 = '0';
    const AVEC_REPONSE_1 = '1';
    const AVEC_REPONSE_2 = '2';
    const AVEC_REPONSE_3 = '3';

    /** The enumerated values for the REALISE field */
    const REALISE_0 = '0';
    const REALISE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of HistoriqueDemande objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array HistoriqueDemande[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. HistoriqueDemandePeer::$fieldNames[HistoriqueDemandePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdHistoriqueDemande', 'IdDemande', 'IdEntiteAffecte', 'SigleEntiteAffecteFr', 'SigleEntiteAffecteAr', 'IdAgentAffecte', 'NomAgentAffecteFr', 'NomAgentAffecteAr', 'CommentaireCitoyenHistoriqueDemande', 'StatutHistoriqueDemande', 'AppreciationPrestationHistoriqueDemande', 'DateIntervention', 'AgentHistoriqueAr', 'AgentHistoriqueFr', 'ActionHistoriqueDemande', 'CommentaireAgentInterneHistoriqueDemande', 'CommentaireAgentVisibleHistoriqueDemande', 'IdAgent', 'DetailsAr', 'DetailsFr', 'IdEntiteTraitante', 'SigleEntiteTraitanteFr', 'SigleEntiteTraitanteAr', 'IdPieceJointe', 'NomPieceJointe', 'Revision', 'IdHistoriquePrecedent', 'Etat', 'IdAction', 'IdPartage', 'IdFormat', 'FormatFr', 'FormatAr', 'IdAgentRemplacant', 'AgentRemplacantAr', 'AgentRemplacantFr', 'IdHistoriqueParent', 'DateEcheanceReponse', 'Canal', 'InfoCanal', 'IdEtapeCircuitValidation', 'ChampSupp1', 'ChampSupp2', 'ChampSupp3', 'ChampSupp4', 'ChampSupp5', 'IdInstruction', 'TypeClassement', 'TypeReponse', 'AvecReponse', 'Realise', 'DateEcheanceReponseProche', 'EmailValidation', 'TokenValidation', 'CheckListTab', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idHistoriqueDemande', 'idDemande', 'idEntiteAffecte', 'sigleEntiteAffecteFr', 'sigleEntiteAffecteAr', 'idAgentAffecte', 'nomAgentAffecteFr', 'nomAgentAffecteAr', 'commentaireCitoyenHistoriqueDemande', 'statutHistoriqueDemande', 'appreciationPrestationHistoriqueDemande', 'dateIntervention', 'agentHistoriqueAr', 'agentHistoriqueFr', 'actionHistoriqueDemande', 'commentaireAgentInterneHistoriqueDemande', 'commentaireAgentVisibleHistoriqueDemande', 'idAgent', 'detailsAr', 'detailsFr', 'idEntiteTraitante', 'sigleEntiteTraitanteFr', 'sigleEntiteTraitanteAr', 'idPieceJointe', 'nomPieceJointe', 'revision', 'idHistoriquePrecedent', 'etat', 'idAction', 'idPartage', 'idFormat', 'formatFr', 'formatAr', 'idAgentRemplacant', 'agentRemplacantAr', 'agentRemplacantFr', 'idHistoriqueParent', 'dateEcheanceReponse', 'canal', 'infoCanal', 'idEtapeCircuitValidation', 'champSupp1', 'champSupp2', 'champSupp3', 'champSupp4', 'champSupp5', 'idInstruction', 'typeClassement', 'typeReponse', 'avecReponse', 'realise', 'dateEcheanceReponseProche', 'emailValidation', 'tokenValidation', 'checkListTab', ),
        BasePeer::TYPE_COLNAME => array (HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::ID_DEMANDE, HistoriqueDemandePeer::ID_ENTITE_AFFECTE, HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR, HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR, HistoriqueDemandePeer::ID_AGENT_AFFECTE, HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR, HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR, HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::DATE_INTERVENTION, HistoriqueDemandePeer::AGENT_HISTORIQUE_AR, HistoriqueDemandePeer::AGENT_HISTORIQUE_FR, HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE, HistoriqueDemandePeer::ID_AGENT, HistoriqueDemandePeer::DETAILS_AR, HistoriqueDemandePeer::DETAILS_FR, HistoriqueDemandePeer::ID_ENTITE_TRAITANTE, HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR, HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR, HistoriqueDemandePeer::ID_PIECE_JOINTE, HistoriqueDemandePeer::NOM_PIECE_JOINTE, HistoriqueDemandePeer::REVISION, HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT, HistoriqueDemandePeer::ETAT, HistoriqueDemandePeer::ID_ACTION, HistoriqueDemandePeer::ID_PARTAGE, HistoriqueDemandePeer::ID_FORMAT, HistoriqueDemandePeer::FORMAT_FR, HistoriqueDemandePeer::FORMAT_AR, HistoriqueDemandePeer::ID_AGENT_REMPLACANT, HistoriqueDemandePeer::AGENT_REMPLACANT_AR, HistoriqueDemandePeer::AGENT_REMPLACANT_FR, HistoriqueDemandePeer::ID_HISTORIQUE_PARENT, HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE, HistoriqueDemandePeer::CANAL, HistoriqueDemandePeer::INFO_CANAL, HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION, HistoriqueDemandePeer::CHAMP_SUPP_1, HistoriqueDemandePeer::CHAMP_SUPP_2, HistoriqueDemandePeer::CHAMP_SUPP_3, HistoriqueDemandePeer::CHAMP_SUPP_4, HistoriqueDemandePeer::CHAMP_SUPP_5, HistoriqueDemandePeer::ID_INSTRUCTION, HistoriqueDemandePeer::TYPE_CLASSEMENT, HistoriqueDemandePeer::TYPE_REPONSE, HistoriqueDemandePeer::AVEC_REPONSE, HistoriqueDemandePeer::REALISE, HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE, HistoriqueDemandePeer::EMAIL_VALIDATION, HistoriqueDemandePeer::TOKEN_VALIDATION, HistoriqueDemandePeer::CHECK_LIST_TAB, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_HISTORIQUE_DEMANDE', 'ID_DEMANDE', 'ID_ENTITE_AFFECTE', 'SIGLE_ENTITE_AFFECTE_FR', 'SIGLE_ENTITE_AFFECTE_AR', 'ID_AGENT_AFFECTE', 'NOM_AGENT_AFFECTE_FR', 'NOM_AGENT_AFFECTE_AR', 'COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE', 'STATUT_HISTORIQUE_DEMANDE', 'APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE', 'DATE_INTERVENTION', 'AGENT_HISTORIQUE_AR', 'AGENT_HISTORIQUE_FR', 'ACTION_HISTORIQUE_DEMANDE', 'COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE', 'COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE', 'ID_AGENT', 'DETAILS_AR', 'DETAILS_FR', 'ID_ENTITE_TRAITANTE', 'SIGLE_ENTITE_TRAITANTE_FR', 'SIGLE_ENTITE_TRAITANTE_AR', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'REVISION', 'ID_HISTORIQUE_PRECEDENT', 'ETAT', 'ID_ACTION', 'ID_PARTAGE', 'ID_FORMAT', 'FORMAT_FR', 'FORMAT_AR', 'ID_AGENT_REMPLACANT', 'AGENT_REMPLACANT_AR', 'AGENT_REMPLACANT_FR', 'ID_HISTORIQUE_PARENT', 'DATE_ECHEANCE_REPONSE', 'CANAL', 'INFO_CANAL', 'ID_ETAPE_CIRCUIT_VALIDATION', 'CHAMP_SUPP_1', 'CHAMP_SUPP_2', 'CHAMP_SUPP_3', 'CHAMP_SUPP_4', 'CHAMP_SUPP_5', 'ID_INSTRUCTION', 'TYPE_CLASSEMENT', 'TYPE_REPONSE', 'AVEC_REPONSE', 'REALISE', 'DATE_ECHEANCE_REPONSE_PROCHE', 'EMAIL_VALIDATION', 'TOKEN_VALIDATION', 'CHECK_LIST_TAB', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_HISTORIQUE_DEMANDE', 'ID_DEMANDE', 'ID_ENTITE_AFFECTE', 'SIGLE_ENTITE_AFFECTE_FR', 'SIGLE_ENTITE_AFFECTE_AR', 'ID_AGENT_AFFECTE', 'NOM_AGENT_AFFECTE_FR', 'NOM_AGENT_AFFECTE_AR', 'COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE', 'STATUT_HISTORIQUE_DEMANDE', 'APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE', 'DATE_INTERVENTION', 'AGENT_HISTORIQUE_AR', 'AGENT_HISTORIQUE_FR', 'ACTION_HISTORIQUE_DEMANDE', 'COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE', 'COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE', 'ID_AGENT', 'DETAILS_AR', 'DETAILS_FR', 'ID_ENTITE_TRAITANTE', 'SIGLE_ENTITE_TRAITANTE_FR', 'SIGLE_ENTITE_TRAITANTE_AR', 'ID_PIECE_JOINTE', 'NOM_PIECE_JOINTE', 'REVISION', 'ID_HISTORIQUE_PRECEDENT', 'ETAT', 'ID_ACTION', 'ID_PARTAGE', 'ID_FORMAT', 'FORMAT_FR', 'FORMAT_AR', 'ID_AGENT_REMPLACANT', 'AGENT_REMPLACANT_AR', 'AGENT_REMPLACANT_FR', 'ID_HISTORIQUE_PARENT', 'DATE_ECHEANCE_REPONSE', 'CANAL', 'INFO_CANAL', 'ID_ETAPE_CIRCUIT_VALIDATION', 'CHAMP_SUPP_1', 'CHAMP_SUPP_2', 'CHAMP_SUPP_3', 'CHAMP_SUPP_4', 'CHAMP_SUPP_5', 'ID_INSTRUCTION', 'TYPE_CLASSEMENT', 'TYPE_REPONSE', 'AVEC_REPONSE', 'REALISE', 'DATE_ECHEANCE_REPONSE_PROCHE', 'EMAIL_VALIDATION', 'TOKEN_VALIDATION', 'CHECK_LIST_TAB', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. HistoriqueDemandePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdHistoriqueDemande' => 0, 'IdDemande' => 1, 'IdEntiteAffecte' => 2, 'SigleEntiteAffecteFr' => 3, 'SigleEntiteAffecteAr' => 4, 'IdAgentAffecte' => 5, 'NomAgentAffecteFr' => 6, 'NomAgentAffecteAr' => 7, 'CommentaireCitoyenHistoriqueDemande' => 8, 'StatutHistoriqueDemande' => 9, 'AppreciationPrestationHistoriqueDemande' => 10, 'DateIntervention' => 11, 'AgentHistoriqueAr' => 12, 'AgentHistoriqueFr' => 13, 'ActionHistoriqueDemande' => 14, 'CommentaireAgentInterneHistoriqueDemande' => 15, 'CommentaireAgentVisibleHistoriqueDemande' => 16, 'IdAgent' => 17, 'DetailsAr' => 18, 'DetailsFr' => 19, 'IdEntiteTraitante' => 20, 'SigleEntiteTraitanteFr' => 21, 'SigleEntiteTraitanteAr' => 22, 'IdPieceJointe' => 23, 'NomPieceJointe' => 24, 'Revision' => 25, 'IdHistoriquePrecedent' => 26, 'Etat' => 27, 'IdAction' => 28, 'IdPartage' => 29, 'IdFormat' => 30, 'FormatFr' => 31, 'FormatAr' => 32, 'IdAgentRemplacant' => 33, 'AgentRemplacantAr' => 34, 'AgentRemplacantFr' => 35, 'IdHistoriqueParent' => 36, 'DateEcheanceReponse' => 37, 'Canal' => 38, 'InfoCanal' => 39, 'IdEtapeCircuitValidation' => 40, 'ChampSupp1' => 41, 'ChampSupp2' => 42, 'ChampSupp3' => 43, 'ChampSupp4' => 44, 'ChampSupp5' => 45, 'IdInstruction' => 46, 'TypeClassement' => 47, 'TypeReponse' => 48, 'AvecReponse' => 49, 'Realise' => 50, 'DateEcheanceReponseProche' => 51, 'EmailValidation' => 52, 'TokenValidation' => 53, 'CheckListTab' => 54, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idHistoriqueDemande' => 0, 'idDemande' => 1, 'idEntiteAffecte' => 2, 'sigleEntiteAffecteFr' => 3, 'sigleEntiteAffecteAr' => 4, 'idAgentAffecte' => 5, 'nomAgentAffecteFr' => 6, 'nomAgentAffecteAr' => 7, 'commentaireCitoyenHistoriqueDemande' => 8, 'statutHistoriqueDemande' => 9, 'appreciationPrestationHistoriqueDemande' => 10, 'dateIntervention' => 11, 'agentHistoriqueAr' => 12, 'agentHistoriqueFr' => 13, 'actionHistoriqueDemande' => 14, 'commentaireAgentInterneHistoriqueDemande' => 15, 'commentaireAgentVisibleHistoriqueDemande' => 16, 'idAgent' => 17, 'detailsAr' => 18, 'detailsFr' => 19, 'idEntiteTraitante' => 20, 'sigleEntiteTraitanteFr' => 21, 'sigleEntiteTraitanteAr' => 22, 'idPieceJointe' => 23, 'nomPieceJointe' => 24, 'revision' => 25, 'idHistoriquePrecedent' => 26, 'etat' => 27, 'idAction' => 28, 'idPartage' => 29, 'idFormat' => 30, 'formatFr' => 31, 'formatAr' => 32, 'idAgentRemplacant' => 33, 'agentRemplacantAr' => 34, 'agentRemplacantFr' => 35, 'idHistoriqueParent' => 36, 'dateEcheanceReponse' => 37, 'canal' => 38, 'infoCanal' => 39, 'idEtapeCircuitValidation' => 40, 'champSupp1' => 41, 'champSupp2' => 42, 'champSupp3' => 43, 'champSupp4' => 44, 'champSupp5' => 45, 'idInstruction' => 46, 'typeClassement' => 47, 'typeReponse' => 48, 'avecReponse' => 49, 'realise' => 50, 'dateEcheanceReponseProche' => 51, 'emailValidation' => 52, 'tokenValidation' => 53, 'checkListTab' => 54, ),
        BasePeer::TYPE_COLNAME => array (HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE => 0, HistoriqueDemandePeer::ID_DEMANDE => 1, HistoriqueDemandePeer::ID_ENTITE_AFFECTE => 2, HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR => 3, HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR => 4, HistoriqueDemandePeer::ID_AGENT_AFFECTE => 5, HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR => 6, HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR => 7, HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE => 8, HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE => 9, HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE => 10, HistoriqueDemandePeer::DATE_INTERVENTION => 11, HistoriqueDemandePeer::AGENT_HISTORIQUE_AR => 12, HistoriqueDemandePeer::AGENT_HISTORIQUE_FR => 13, HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE => 14, HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE => 15, HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE => 16, HistoriqueDemandePeer::ID_AGENT => 17, HistoriqueDemandePeer::DETAILS_AR => 18, HistoriqueDemandePeer::DETAILS_FR => 19, HistoriqueDemandePeer::ID_ENTITE_TRAITANTE => 20, HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR => 21, HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR => 22, HistoriqueDemandePeer::ID_PIECE_JOINTE => 23, HistoriqueDemandePeer::NOM_PIECE_JOINTE => 24, HistoriqueDemandePeer::REVISION => 25, HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT => 26, HistoriqueDemandePeer::ETAT => 27, HistoriqueDemandePeer::ID_ACTION => 28, HistoriqueDemandePeer::ID_PARTAGE => 29, HistoriqueDemandePeer::ID_FORMAT => 30, HistoriqueDemandePeer::FORMAT_FR => 31, HistoriqueDemandePeer::FORMAT_AR => 32, HistoriqueDemandePeer::ID_AGENT_REMPLACANT => 33, HistoriqueDemandePeer::AGENT_REMPLACANT_AR => 34, HistoriqueDemandePeer::AGENT_REMPLACANT_FR => 35, HistoriqueDemandePeer::ID_HISTORIQUE_PARENT => 36, HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE => 37, HistoriqueDemandePeer::CANAL => 38, HistoriqueDemandePeer::INFO_CANAL => 39, HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION => 40, HistoriqueDemandePeer::CHAMP_SUPP_1 => 41, HistoriqueDemandePeer::CHAMP_SUPP_2 => 42, HistoriqueDemandePeer::CHAMP_SUPP_3 => 43, HistoriqueDemandePeer::CHAMP_SUPP_4 => 44, HistoriqueDemandePeer::CHAMP_SUPP_5 => 45, HistoriqueDemandePeer::ID_INSTRUCTION => 46, HistoriqueDemandePeer::TYPE_CLASSEMENT => 47, HistoriqueDemandePeer::TYPE_REPONSE => 48, HistoriqueDemandePeer::AVEC_REPONSE => 49, HistoriqueDemandePeer::REALISE => 50, HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE => 51, HistoriqueDemandePeer::EMAIL_VALIDATION => 52, HistoriqueDemandePeer::TOKEN_VALIDATION => 53, HistoriqueDemandePeer::CHECK_LIST_TAB => 54, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_HISTORIQUE_DEMANDE' => 0, 'ID_DEMANDE' => 1, 'ID_ENTITE_AFFECTE' => 2, 'SIGLE_ENTITE_AFFECTE_FR' => 3, 'SIGLE_ENTITE_AFFECTE_AR' => 4, 'ID_AGENT_AFFECTE' => 5, 'NOM_AGENT_AFFECTE_FR' => 6, 'NOM_AGENT_AFFECTE_AR' => 7, 'COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE' => 8, 'STATUT_HISTORIQUE_DEMANDE' => 9, 'APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE' => 10, 'DATE_INTERVENTION' => 11, 'AGENT_HISTORIQUE_AR' => 12, 'AGENT_HISTORIQUE_FR' => 13, 'ACTION_HISTORIQUE_DEMANDE' => 14, 'COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE' => 15, 'COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE' => 16, 'ID_AGENT' => 17, 'DETAILS_AR' => 18, 'DETAILS_FR' => 19, 'ID_ENTITE_TRAITANTE' => 20, 'SIGLE_ENTITE_TRAITANTE_FR' => 21, 'SIGLE_ENTITE_TRAITANTE_AR' => 22, 'ID_PIECE_JOINTE' => 23, 'NOM_PIECE_JOINTE' => 24, 'REVISION' => 25, 'ID_HISTORIQUE_PRECEDENT' => 26, 'ETAT' => 27, 'ID_ACTION' => 28, 'ID_PARTAGE' => 29, 'ID_FORMAT' => 30, 'FORMAT_FR' => 31, 'FORMAT_AR' => 32, 'ID_AGENT_REMPLACANT' => 33, 'AGENT_REMPLACANT_AR' => 34, 'AGENT_REMPLACANT_FR' => 35, 'ID_HISTORIQUE_PARENT' => 36, 'DATE_ECHEANCE_REPONSE' => 37, 'CANAL' => 38, 'INFO_CANAL' => 39, 'ID_ETAPE_CIRCUIT_VALIDATION' => 40, 'CHAMP_SUPP_1' => 41, 'CHAMP_SUPP_2' => 42, 'CHAMP_SUPP_3' => 43, 'CHAMP_SUPP_4' => 44, 'CHAMP_SUPP_5' => 45, 'ID_INSTRUCTION' => 46, 'TYPE_CLASSEMENT' => 47, 'TYPE_REPONSE' => 48, 'AVEC_REPONSE' => 49, 'REALISE' => 50, 'DATE_ECHEANCE_REPONSE_PROCHE' => 51, 'EMAIL_VALIDATION' => 52, 'TOKEN_VALIDATION' => 53, 'CHECK_LIST_TAB' => 54, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_HISTORIQUE_DEMANDE' => 0, 'ID_DEMANDE' => 1, 'ID_ENTITE_AFFECTE' => 2, 'SIGLE_ENTITE_AFFECTE_FR' => 3, 'SIGLE_ENTITE_AFFECTE_AR' => 4, 'ID_AGENT_AFFECTE' => 5, 'NOM_AGENT_AFFECTE_FR' => 6, 'NOM_AGENT_AFFECTE_AR' => 7, 'COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE' => 8, 'STATUT_HISTORIQUE_DEMANDE' => 9, 'APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE' => 10, 'DATE_INTERVENTION' => 11, 'AGENT_HISTORIQUE_AR' => 12, 'AGENT_HISTORIQUE_FR' => 13, 'ACTION_HISTORIQUE_DEMANDE' => 14, 'COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE' => 15, 'COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE' => 16, 'ID_AGENT' => 17, 'DETAILS_AR' => 18, 'DETAILS_FR' => 19, 'ID_ENTITE_TRAITANTE' => 20, 'SIGLE_ENTITE_TRAITANTE_FR' => 21, 'SIGLE_ENTITE_TRAITANTE_AR' => 22, 'ID_PIECE_JOINTE' => 23, 'NOM_PIECE_JOINTE' => 24, 'REVISION' => 25, 'ID_HISTORIQUE_PRECEDENT' => 26, 'ETAT' => 27, 'ID_ACTION' => 28, 'ID_PARTAGE' => 29, 'ID_FORMAT' => 30, 'FORMAT_FR' => 31, 'FORMAT_AR' => 32, 'ID_AGENT_REMPLACANT' => 33, 'AGENT_REMPLACANT_AR' => 34, 'AGENT_REMPLACANT_FR' => 35, 'ID_HISTORIQUE_PARENT' => 36, 'DATE_ECHEANCE_REPONSE' => 37, 'CANAL' => 38, 'INFO_CANAL' => 39, 'ID_ETAPE_CIRCUIT_VALIDATION' => 40, 'CHAMP_SUPP_1' => 41, 'CHAMP_SUPP_2' => 42, 'CHAMP_SUPP_3' => 43, 'CHAMP_SUPP_4' => 44, 'CHAMP_SUPP_5' => 45, 'ID_INSTRUCTION' => 46, 'TYPE_CLASSEMENT' => 47, 'TYPE_REPONSE' => 48, 'AVEC_REPONSE' => 49, 'REALISE' => 50, 'DATE_ECHEANCE_REPONSE_PROCHE' => 51, 'EMAIL_VALIDATION' => 52, 'TOKEN_VALIDATION' => 53, 'CHECK_LIST_TAB' => 54, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        HistoriqueDemandePeer::ETAT => array(
            HistoriqueDemandePeer::ETAT_0,
            HistoriqueDemandePeer::ETAT_1,
        ),
        HistoriqueDemandePeer::AVEC_REPONSE => array(
            HistoriqueDemandePeer::AVEC_REPONSE_0,
            HistoriqueDemandePeer::AVEC_REPONSE_1,
            HistoriqueDemandePeer::AVEC_REPONSE_2,
            HistoriqueDemandePeer::AVEC_REPONSE_3,
        ),
        HistoriqueDemandePeer::REALISE => array(
            HistoriqueDemandePeer::REALISE_0,
            HistoriqueDemandePeer::REALISE_1,
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
        $toNames = HistoriqueDemandePeer::getFieldNames($toType);
        $key = isset(HistoriqueDemandePeer::$fieldKeys[$fromType][$name]) ? HistoriqueDemandePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(HistoriqueDemandePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, HistoriqueDemandePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return HistoriqueDemandePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return HistoriqueDemandePeer::$enumValueSets;
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
        $valueSets = HistoriqueDemandePeer::getValueSets();

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
        $values = HistoriqueDemandePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. HistoriqueDemandePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(HistoriqueDemandePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_ENTITE_AFFECTE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::SIGLE_ENTITE_AFFECTE_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_AGENT_AFFECTE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::NOM_AGENT_AFFECTE_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::STATUT_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::DATE_INTERVENTION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::AGENT_HISTORIQUE_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::AGENT_HISTORIQUE_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ACTION_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_AGENT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::DETAILS_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::DETAILS_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_ENTITE_TRAITANTE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::SIGLE_ENTITE_TRAITANTE_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_PIECE_JOINTE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::NOM_PIECE_JOINTE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::REVISION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_HISTORIQUE_PRECEDENT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ETAT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_ACTION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_PARTAGE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_FORMAT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::FORMAT_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::FORMAT_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_AGENT_REMPLACANT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::AGENT_REMPLACANT_AR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::AGENT_REMPLACANT_FR);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_HISTORIQUE_PARENT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CANAL);
            $criteria->addSelectColumn(HistoriqueDemandePeer::INFO_CANAL);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_ETAPE_CIRCUIT_VALIDATION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CHAMP_SUPP_1);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CHAMP_SUPP_2);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CHAMP_SUPP_3);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CHAMP_SUPP_4);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CHAMP_SUPP_5);
            $criteria->addSelectColumn(HistoriqueDemandePeer::ID_INSTRUCTION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::TYPE_CLASSEMENT);
            $criteria->addSelectColumn(HistoriqueDemandePeer::TYPE_REPONSE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::AVEC_REPONSE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::REALISE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::DATE_ECHEANCE_REPONSE_PROCHE);
            $criteria->addSelectColumn(HistoriqueDemandePeer::EMAIL_VALIDATION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::TOKEN_VALIDATION);
            $criteria->addSelectColumn(HistoriqueDemandePeer::CHECK_LIST_TAB);
        } else {
            $criteria->addSelectColumn($alias . '.ID_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_AFFECTE');
            $criteria->addSelectColumn($alias . '.SIGLE_ENTITE_AFFECTE_FR');
            $criteria->addSelectColumn($alias . '.SIGLE_ENTITE_AFFECTE_AR');
            $criteria->addSelectColumn($alias . '.ID_AGENT_AFFECTE');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_AFFECTE_FR');
            $criteria->addSelectColumn($alias . '.NOM_AGENT_AFFECTE_AR');
            $criteria->addSelectColumn($alias . '.COMMENTAIRE_CITOYEN_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.STATUT_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.APPRECIATION_PRESTATION_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.DATE_INTERVENTION');
            $criteria->addSelectColumn($alias . '.AGENT_HISTORIQUE_AR');
            $criteria->addSelectColumn($alias . '.AGENT_HISTORIQUE_FR');
            $criteria->addSelectColumn($alias . '.ACTION_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.COMMENTAIRE_AGENT_INTERNE_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.COMMENTAIRE_AGENT_VISIBLE_HISTORIQUE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_AGENT');
            $criteria->addSelectColumn($alias . '.DETAILS_AR');
            $criteria->addSelectColumn($alias . '.DETAILS_FR');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_TRAITANTE');
            $criteria->addSelectColumn($alias . '.SIGLE_ENTITE_TRAITANTE_FR');
            $criteria->addSelectColumn($alias . '.SIGLE_ENTITE_TRAITANTE_AR');
            $criteria->addSelectColumn($alias . '.ID_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.NOM_PIECE_JOINTE');
            $criteria->addSelectColumn($alias . '.REVISION');
            $criteria->addSelectColumn($alias . '.ID_HISTORIQUE_PRECEDENT');
            $criteria->addSelectColumn($alias . '.ETAT');
            $criteria->addSelectColumn($alias . '.ID_ACTION');
            $criteria->addSelectColumn($alias . '.ID_PARTAGE');
            $criteria->addSelectColumn($alias . '.ID_FORMAT');
            $criteria->addSelectColumn($alias . '.FORMAT_FR');
            $criteria->addSelectColumn($alias . '.FORMAT_AR');
            $criteria->addSelectColumn($alias . '.ID_AGENT_REMPLACANT');
            $criteria->addSelectColumn($alias . '.AGENT_REMPLACANT_AR');
            $criteria->addSelectColumn($alias . '.AGENT_REMPLACANT_FR');
            $criteria->addSelectColumn($alias . '.ID_HISTORIQUE_PARENT');
            $criteria->addSelectColumn($alias . '.DATE_ECHEANCE_REPONSE');
            $criteria->addSelectColumn($alias . '.CANAL');
            $criteria->addSelectColumn($alias . '.INFO_CANAL');
            $criteria->addSelectColumn($alias . '.ID_ETAPE_CIRCUIT_VALIDATION');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_1');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_2');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_3');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_4');
            $criteria->addSelectColumn($alias . '.CHAMP_SUPP_5');
            $criteria->addSelectColumn($alias . '.ID_INSTRUCTION');
            $criteria->addSelectColumn($alias . '.TYPE_CLASSEMENT');
            $criteria->addSelectColumn($alias . '.TYPE_REPONSE');
            $criteria->addSelectColumn($alias . '.AVEC_REPONSE');
            $criteria->addSelectColumn($alias . '.REALISE');
            $criteria->addSelectColumn($alias . '.DATE_ECHEANCE_REPONSE_PROCHE');
            $criteria->addSelectColumn($alias . '.EMAIL_VALIDATION');
            $criteria->addSelectColumn($alias . '.TOKEN_VALIDATION');
            $criteria->addSelectColumn($alias . '.CHECK_LIST_TAB');
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
        $criteria->setPrimaryTableName(HistoriqueDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            HistoriqueDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(HistoriqueDemandePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 HistoriqueDemande
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = HistoriqueDemandePeer::doSelect($critcopy, $con);
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
        return HistoriqueDemandePeer::populateObjects(HistoriqueDemandePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            HistoriqueDemandePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(HistoriqueDemandePeer::DATABASE_NAME);

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
     * @param      HistoriqueDemande $obj A HistoriqueDemande object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdHistoriqueDemande();
            } // if key === null
            HistoriqueDemandePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A HistoriqueDemande object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof HistoriqueDemande) {
                $key = (string) $value->getIdHistoriqueDemande();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or HistoriqueDemande object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(HistoriqueDemandePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   HistoriqueDemande Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(HistoriqueDemandePeer::$instances[$key])) {
                return HistoriqueDemandePeer::$instances[$key];
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
        foreach (HistoriqueDemandePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        HistoriqueDemandePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to historique_demande
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
        $cls = HistoriqueDemandePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = HistoriqueDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = HistoriqueDemandePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                HistoriqueDemandePeer::addInstanceToPool($obj, $key);
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
     * @return array (HistoriqueDemande object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = HistoriqueDemandePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = HistoriqueDemandePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + HistoriqueDemandePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = HistoriqueDemandePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            HistoriqueDemandePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
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
        return Propel::getDatabaseMap(HistoriqueDemandePeer::DATABASE_NAME)->getTable(HistoriqueDemandePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseHistoriqueDemandePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseHistoriqueDemandePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new HistoriqueDemandeTableMap());
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
        return HistoriqueDemandePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a HistoriqueDemande or Criteria object.
     *
     * @param      mixed $values Criteria or HistoriqueDemande object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from HistoriqueDemande object
        }

        if ($criteria->containsKey(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE) && $criteria->keyContainsValue(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(HistoriqueDemandePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a HistoriqueDemande or Criteria object.
     *
     * @param      mixed $values Criteria or HistoriqueDemande object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(HistoriqueDemandePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE);
            $value = $criteria->remove(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE);
            if ($value) {
                $selectCriteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(HistoriqueDemandePeer::TABLE_NAME);
            }

        } else { // $values is HistoriqueDemande object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(HistoriqueDemandePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the historique_demande table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(HistoriqueDemandePeer::TABLE_NAME, $con, HistoriqueDemandePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            HistoriqueDemandePeer::clearInstancePool();
            HistoriqueDemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a HistoriqueDemande or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or HistoriqueDemande object or primary key or array of primary keys
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
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            HistoriqueDemandePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof HistoriqueDemande) { // it's a model object
            // invalidate the cache for this single object
            HistoriqueDemandePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(HistoriqueDemandePeer::DATABASE_NAME);
            $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                HistoriqueDemandePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(HistoriqueDemandePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            HistoriqueDemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given HistoriqueDemande object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      HistoriqueDemande $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(HistoriqueDemandePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(HistoriqueDemandePeer::TABLE_NAME);

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

        return BasePeer::doValidate(HistoriqueDemandePeer::DATABASE_NAME, HistoriqueDemandePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return HistoriqueDemande
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = HistoriqueDemandePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(HistoriqueDemandePeer::DATABASE_NAME);
        $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $pk);

        $v = HistoriqueDemandePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return HistoriqueDemande[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(HistoriqueDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(HistoriqueDemandePeer::DATABASE_NAME);
            $criteria->add(HistoriqueDemandePeer::ID_HISTORIQUE_DEMANDE, $pks, Criteria::IN);
            $objs = HistoriqueDemandePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseHistoriqueDemandePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseHistoriqueDemandePeer::buildTableMap();

