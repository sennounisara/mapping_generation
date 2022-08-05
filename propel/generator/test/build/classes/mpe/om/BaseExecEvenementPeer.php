<?php


/**
 * Base static class for performing query and update operations on the 'exec_evenement' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonExecEvenementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'exec_evenement';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonExecEvenement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonExecEvenementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 36;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 36;

    /** the column name for the id field */
    const ID = 'exec_evenement.id';

    /** the column name for the id_type_evenement field */
    const ID_TYPE_EVENEMENT = 'exec_evenement.id_type_evenement';

    /** the column name for the id_contrat field */
    const ID_CONTRAT = 'exec_evenement.id_contrat';

    /** the column name for the id_contractant field */
    const ID_CONTRACTANT = 'exec_evenement.id_contractant';

    /** the column name for the id_phase field */
    const ID_PHASE = 'exec_evenement.id_phase';

    /** the column name for the statut field */
    const STATUT = 'exec_evenement.statut';

    /** the column name for the date field */
    const DATE = 'exec_evenement.date';

    /** the column name for the date_document field */
    const DATE_DOCUMENT = 'exec_evenement.date_document';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 'exec_evenement.commentaire';

    /** the column name for the origine_piece field */
    const ORIGINE_PIECE = 'exec_evenement.origine_piece';

    /** the column name for the date_validation field */
    const DATE_VALIDATION = 'exec_evenement.date_validation';

    /** the column name for the date_rejet field */
    const DATE_REJET = 'exec_evenement.date_rejet';

    /** the column name for the id_agent_validation field */
    const ID_AGENT_VALIDATION = 'exec_evenement.id_agent_validation';

    /** the column name for the id_agent_rejet field */
    const ID_AGENT_REJET = 'exec_evenement.id_agent_rejet';

    /** the column name for the date_crea field */
    const DATE_CREA = 'exec_evenement.date_crea';

    /** the column name for the id_agent_crea field */
    const ID_AGENT_CREA = 'exec_evenement.id_agent_crea';

    /** the column name for the date_modif field */
    const DATE_MODIF = 'exec_evenement.date_modif';

    /** the column name for the id_agent_modif field */
    const ID_AGENT_MODIF = 'exec_evenement.id_agent_modif';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 'exec_evenement.id_parapheur';

    /** the column name for the date_cloture_parapheur field */
    const DATE_CLOTURE_PARAPHEUR = 'exec_evenement.date_cloture_parapheur';

    /** the column name for the motif_rejet field */
    const MOTIF_REJET = 'exec_evenement.motif_rejet';

    /** the column name for the motif_darret field */
    const MOTIF_DARRET = 'exec_evenement.motif_darret';

    /** the column name for the type_reception field */
    const TYPE_RECEPTION = 'exec_evenement.type_reception';

    /** the column name for the porte_reception field */
    const PORTE_RECEPTION = 'exec_evenement.porte_reception';

    /** the column name for the mode_prononce_reception field */
    const MODE_PRONONCE_RECEPTION = 'exec_evenement.mode_prononce_reception';

    /** the column name for the penalite_retard field */
    const PENALITE_RETARD = 'exec_evenement.penalite_retard';

    /** the column name for the prestation_reception field */
    const PRESTATION_RECEPTION = 'exec_evenement.prestation_reception';

    /** the column name for the date_reserve field */
    const DATE_RESERVE = 'exec_evenement.date_reserve';

    /** the column name for the delai_maximal_reserves field */
    const DELAI_MAXIMAL_RESERVES = 'exec_evenement.delai_maximal_reserves';

    /** the column name for the detail_reserve field */
    const DETAIL_RESERVE = 'exec_evenement.detail_reserve';

    /** the column name for the ordre_evenement field */
    const ORDRE_EVENEMENT = 'exec_evenement.ordre_evenement';

    /** the column name for the demande field */
    const DEMANDE = 'exec_evenement.demande';

    /** the column name for the id_parent field */
    const ID_PARENT = 'exec_evenement.id_parent';

    /** the column name for the date_derniere_synchronisation field */
    const DATE_DERNIERE_SYNCHRONISATION = 'exec_evenement.date_derniere_synchronisation';

    /** the column name for the numero field */
    const NUMERO = 'exec_evenement.numero';

    /** the column name for the id_facture field */
    const ID_FACTURE = 'exec_evenement.id_facture';

    /** The enumerated values for the type_reception field */
    const TYPE_RECEPTION_0 = '0';
    const TYPE_RECEPTION_1 = '1';

    /** The enumerated values for the porte_reception field */
    const PORTE_RECEPTION_0 = '0';
    const PORTE_RECEPTION_1 = '1';

    /** The enumerated values for the mode_prononce_reception field */
    const MODE_PRONONCE_RECEPTION_0 = '0';
    const MODE_PRONONCE_RECEPTION_1 = '1';

    /** The enumerated values for the penalite_retard field */
    const PENALITE_RETARD_0 = '0';
    const PENALITE_RETARD_1 = '1';
    const PENALITE_RETARD_2 = '2';

    /** The enumerated values for the demande field */
    const DEMANDE_0 = '0';
    const DEMANDE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonExecEvenement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonExecEvenement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonExecEvenementPeer::$fieldNames[CommonExecEvenementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdTypeEvenement', 'IdContrat', 'IdContractant', 'IdPhase', 'Statut', 'Date', 'DateDocument', 'Commentaire', 'OriginePiece', 'DateValidation', 'DateRejet', 'IdAgentValidation', 'IdAgentRejet', 'DateCrea', 'IdAgentCrea', 'DateModif', 'IdAgentModif', 'IdParapheur', 'DateClotureParapheur', 'MotifRejet', 'MotifDarret', 'TypeReception', 'PorteReception', 'ModePrononceReception', 'PenaliteRetard', 'PrestationReception', 'DateReserve', 'DelaiMaximalReserves', 'DetailReserve', 'OrdreEvenement', 'Demande', 'IdParent', 'DateDerniereSynchronisation', 'Numero', 'IdFacture', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idTypeEvenement', 'idContrat', 'idContractant', 'idPhase', 'statut', 'date', 'dateDocument', 'commentaire', 'originePiece', 'dateValidation', 'dateRejet', 'idAgentValidation', 'idAgentRejet', 'dateCrea', 'idAgentCrea', 'dateModif', 'idAgentModif', 'idParapheur', 'dateClotureParapheur', 'motifRejet', 'motifDarret', 'typeReception', 'porteReception', 'modePrononceReception', 'penaliteRetard', 'prestationReception', 'dateReserve', 'delaiMaximalReserves', 'detailReserve', 'ordreEvenement', 'demande', 'idParent', 'dateDerniereSynchronisation', 'numero', 'idFacture', ),
        BasePeer::TYPE_COLNAME => array (CommonExecEvenementPeer::ID, CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecEvenementPeer::ID_CONTRAT, CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecEvenementPeer::ID_PHASE, CommonExecEvenementPeer::STATUT, CommonExecEvenementPeer::DATE, CommonExecEvenementPeer::DATE_DOCUMENT, CommonExecEvenementPeer::COMMENTAIRE, CommonExecEvenementPeer::ORIGINE_PIECE, CommonExecEvenementPeer::DATE_VALIDATION, CommonExecEvenementPeer::DATE_REJET, CommonExecEvenementPeer::ID_AGENT_VALIDATION, CommonExecEvenementPeer::ID_AGENT_REJET, CommonExecEvenementPeer::DATE_CREA, CommonExecEvenementPeer::ID_AGENT_CREA, CommonExecEvenementPeer::DATE_MODIF, CommonExecEvenementPeer::ID_AGENT_MODIF, CommonExecEvenementPeer::ID_PARAPHEUR, CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR, CommonExecEvenementPeer::MOTIF_REJET, CommonExecEvenementPeer::MOTIF_DARRET, CommonExecEvenementPeer::TYPE_RECEPTION, CommonExecEvenementPeer::PORTE_RECEPTION, CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION, CommonExecEvenementPeer::PENALITE_RETARD, CommonExecEvenementPeer::PRESTATION_RECEPTION, CommonExecEvenementPeer::DATE_RESERVE, CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES, CommonExecEvenementPeer::DETAIL_RESERVE, CommonExecEvenementPeer::ORDRE_EVENEMENT, CommonExecEvenementPeer::DEMANDE, CommonExecEvenementPeer::ID_PARENT, CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION, CommonExecEvenementPeer::NUMERO, CommonExecEvenementPeer::ID_FACTURE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_TYPE_EVENEMENT', 'ID_CONTRAT', 'ID_CONTRACTANT', 'ID_PHASE', 'STATUT', 'DATE', 'DATE_DOCUMENT', 'COMMENTAIRE', 'ORIGINE_PIECE', 'DATE_VALIDATION', 'DATE_REJET', 'ID_AGENT_VALIDATION', 'ID_AGENT_REJET', 'DATE_CREA', 'ID_AGENT_CREA', 'DATE_MODIF', 'ID_AGENT_MODIF', 'ID_PARAPHEUR', 'DATE_CLOTURE_PARAPHEUR', 'MOTIF_REJET', 'MOTIF_DARRET', 'TYPE_RECEPTION', 'PORTE_RECEPTION', 'MODE_PRONONCE_RECEPTION', 'PENALITE_RETARD', 'PRESTATION_RECEPTION', 'DATE_RESERVE', 'DELAI_MAXIMAL_RESERVES', 'DETAIL_RESERVE', 'ORDRE_EVENEMENT', 'DEMANDE', 'ID_PARENT', 'DATE_DERNIERE_SYNCHRONISATION', 'NUMERO', 'ID_FACTURE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_type_evenement', 'id_contrat', 'id_contractant', 'id_phase', 'statut', 'date', 'date_document', 'commentaire', 'origine_piece', 'date_validation', 'date_rejet', 'id_agent_validation', 'id_agent_rejet', 'date_crea', 'id_agent_crea', 'date_modif', 'id_agent_modif', 'id_parapheur', 'date_cloture_parapheur', 'motif_rejet', 'motif_darret', 'type_reception', 'porte_reception', 'mode_prononce_reception', 'penalite_retard', 'prestation_reception', 'date_reserve', 'delai_maximal_reserves', 'detail_reserve', 'ordre_evenement', 'demande', 'id_parent', 'date_derniere_synchronisation', 'numero', 'id_facture', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonExecEvenementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdTypeEvenement' => 1, 'IdContrat' => 2, 'IdContractant' => 3, 'IdPhase' => 4, 'Statut' => 5, 'Date' => 6, 'DateDocument' => 7, 'Commentaire' => 8, 'OriginePiece' => 9, 'DateValidation' => 10, 'DateRejet' => 11, 'IdAgentValidation' => 12, 'IdAgentRejet' => 13, 'DateCrea' => 14, 'IdAgentCrea' => 15, 'DateModif' => 16, 'IdAgentModif' => 17, 'IdParapheur' => 18, 'DateClotureParapheur' => 19, 'MotifRejet' => 20, 'MotifDarret' => 21, 'TypeReception' => 22, 'PorteReception' => 23, 'ModePrononceReception' => 24, 'PenaliteRetard' => 25, 'PrestationReception' => 26, 'DateReserve' => 27, 'DelaiMaximalReserves' => 28, 'DetailReserve' => 29, 'OrdreEvenement' => 30, 'Demande' => 31, 'IdParent' => 32, 'DateDerniereSynchronisation' => 33, 'Numero' => 34, 'IdFacture' => 35, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idTypeEvenement' => 1, 'idContrat' => 2, 'idContractant' => 3, 'idPhase' => 4, 'statut' => 5, 'date' => 6, 'dateDocument' => 7, 'commentaire' => 8, 'originePiece' => 9, 'dateValidation' => 10, 'dateRejet' => 11, 'idAgentValidation' => 12, 'idAgentRejet' => 13, 'dateCrea' => 14, 'idAgentCrea' => 15, 'dateModif' => 16, 'idAgentModif' => 17, 'idParapheur' => 18, 'dateClotureParapheur' => 19, 'motifRejet' => 20, 'motifDarret' => 21, 'typeReception' => 22, 'porteReception' => 23, 'modePrononceReception' => 24, 'penaliteRetard' => 25, 'prestationReception' => 26, 'dateReserve' => 27, 'delaiMaximalReserves' => 28, 'detailReserve' => 29, 'ordreEvenement' => 30, 'demande' => 31, 'idParent' => 32, 'dateDerniereSynchronisation' => 33, 'numero' => 34, 'idFacture' => 35, ),
        BasePeer::TYPE_COLNAME => array (CommonExecEvenementPeer::ID => 0, CommonExecEvenementPeer::ID_TYPE_EVENEMENT => 1, CommonExecEvenementPeer::ID_CONTRAT => 2, CommonExecEvenementPeer::ID_CONTRACTANT => 3, CommonExecEvenementPeer::ID_PHASE => 4, CommonExecEvenementPeer::STATUT => 5, CommonExecEvenementPeer::DATE => 6, CommonExecEvenementPeer::DATE_DOCUMENT => 7, CommonExecEvenementPeer::COMMENTAIRE => 8, CommonExecEvenementPeer::ORIGINE_PIECE => 9, CommonExecEvenementPeer::DATE_VALIDATION => 10, CommonExecEvenementPeer::DATE_REJET => 11, CommonExecEvenementPeer::ID_AGENT_VALIDATION => 12, CommonExecEvenementPeer::ID_AGENT_REJET => 13, CommonExecEvenementPeer::DATE_CREA => 14, CommonExecEvenementPeer::ID_AGENT_CREA => 15, CommonExecEvenementPeer::DATE_MODIF => 16, CommonExecEvenementPeer::ID_AGENT_MODIF => 17, CommonExecEvenementPeer::ID_PARAPHEUR => 18, CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR => 19, CommonExecEvenementPeer::MOTIF_REJET => 20, CommonExecEvenementPeer::MOTIF_DARRET => 21, CommonExecEvenementPeer::TYPE_RECEPTION => 22, CommonExecEvenementPeer::PORTE_RECEPTION => 23, CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION => 24, CommonExecEvenementPeer::PENALITE_RETARD => 25, CommonExecEvenementPeer::PRESTATION_RECEPTION => 26, CommonExecEvenementPeer::DATE_RESERVE => 27, CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES => 28, CommonExecEvenementPeer::DETAIL_RESERVE => 29, CommonExecEvenementPeer::ORDRE_EVENEMENT => 30, CommonExecEvenementPeer::DEMANDE => 31, CommonExecEvenementPeer::ID_PARENT => 32, CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION => 33, CommonExecEvenementPeer::NUMERO => 34, CommonExecEvenementPeer::ID_FACTURE => 35, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_TYPE_EVENEMENT' => 1, 'ID_CONTRAT' => 2, 'ID_CONTRACTANT' => 3, 'ID_PHASE' => 4, 'STATUT' => 5, 'DATE' => 6, 'DATE_DOCUMENT' => 7, 'COMMENTAIRE' => 8, 'ORIGINE_PIECE' => 9, 'DATE_VALIDATION' => 10, 'DATE_REJET' => 11, 'ID_AGENT_VALIDATION' => 12, 'ID_AGENT_REJET' => 13, 'DATE_CREA' => 14, 'ID_AGENT_CREA' => 15, 'DATE_MODIF' => 16, 'ID_AGENT_MODIF' => 17, 'ID_PARAPHEUR' => 18, 'DATE_CLOTURE_PARAPHEUR' => 19, 'MOTIF_REJET' => 20, 'MOTIF_DARRET' => 21, 'TYPE_RECEPTION' => 22, 'PORTE_RECEPTION' => 23, 'MODE_PRONONCE_RECEPTION' => 24, 'PENALITE_RETARD' => 25, 'PRESTATION_RECEPTION' => 26, 'DATE_RESERVE' => 27, 'DELAI_MAXIMAL_RESERVES' => 28, 'DETAIL_RESERVE' => 29, 'ORDRE_EVENEMENT' => 30, 'DEMANDE' => 31, 'ID_PARENT' => 32, 'DATE_DERNIERE_SYNCHRONISATION' => 33, 'NUMERO' => 34, 'ID_FACTURE' => 35, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_type_evenement' => 1, 'id_contrat' => 2, 'id_contractant' => 3, 'id_phase' => 4, 'statut' => 5, 'date' => 6, 'date_document' => 7, 'commentaire' => 8, 'origine_piece' => 9, 'date_validation' => 10, 'date_rejet' => 11, 'id_agent_validation' => 12, 'id_agent_rejet' => 13, 'date_crea' => 14, 'id_agent_crea' => 15, 'date_modif' => 16, 'id_agent_modif' => 17, 'id_parapheur' => 18, 'date_cloture_parapheur' => 19, 'motif_rejet' => 20, 'motif_darret' => 21, 'type_reception' => 22, 'porte_reception' => 23, 'mode_prononce_reception' => 24, 'penalite_retard' => 25, 'prestation_reception' => 26, 'date_reserve' => 27, 'delai_maximal_reserves' => 28, 'detail_reserve' => 29, 'ordre_evenement' => 30, 'demande' => 31, 'id_parent' => 32, 'date_derniere_synchronisation' => 33, 'numero' => 34, 'id_facture' => 35, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonExecEvenementPeer::TYPE_RECEPTION => array(
            CommonExecEvenementPeer::TYPE_RECEPTION_0,
            CommonExecEvenementPeer::TYPE_RECEPTION_1,
        ),
        CommonExecEvenementPeer::PORTE_RECEPTION => array(
            CommonExecEvenementPeer::PORTE_RECEPTION_0,
            CommonExecEvenementPeer::PORTE_RECEPTION_1,
        ),
        CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION => array(
            CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION_0,
            CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION_1,
        ),
        CommonExecEvenementPeer::PENALITE_RETARD => array(
            CommonExecEvenementPeer::PENALITE_RETARD_0,
            CommonExecEvenementPeer::PENALITE_RETARD_1,
            CommonExecEvenementPeer::PENALITE_RETARD_2,
        ),
        CommonExecEvenementPeer::DEMANDE => array(
            CommonExecEvenementPeer::DEMANDE_0,
            CommonExecEvenementPeer::DEMANDE_1,
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
        $toNames = CommonExecEvenementPeer::getFieldNames($toType);
        $key = isset(CommonExecEvenementPeer::$fieldKeys[$fromType][$name]) ? CommonExecEvenementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonExecEvenementPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonExecEvenementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonExecEvenementPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonExecEvenementPeer::$enumValueSets;
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
        $valueSets = CommonExecEvenementPeer::getValueSets();

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
        $values = CommonExecEvenementPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonExecEvenementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonExecEvenementPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_TYPE_EVENEMENT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_CONTRAT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_CONTRACTANT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_PHASE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::STATUT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_DOCUMENT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ORIGINE_PIECE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_REJET);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_AGENT_VALIDATION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_AGENT_REJET);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_AGENT_CREA);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_MODIF);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_AGENT_MODIF);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_CLOTURE_PARAPHEUR);
            $criteria->addSelectColumn(CommonExecEvenementPeer::MOTIF_REJET);
            $criteria->addSelectColumn(CommonExecEvenementPeer::MOTIF_DARRET);
            $criteria->addSelectColumn(CommonExecEvenementPeer::TYPE_RECEPTION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::PORTE_RECEPTION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::MODE_PRONONCE_RECEPTION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::PENALITE_RETARD);
            $criteria->addSelectColumn(CommonExecEvenementPeer::PRESTATION_RECEPTION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_RESERVE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DELAI_MAXIMAL_RESERVES);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DETAIL_RESERVE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ORDRE_EVENEMENT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DEMANDE);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_PARENT);
            $criteria->addSelectColumn(CommonExecEvenementPeer::DATE_DERNIERE_SYNCHRONISATION);
            $criteria->addSelectColumn(CommonExecEvenementPeer::NUMERO);
            $criteria->addSelectColumn(CommonExecEvenementPeer::ID_FACTURE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_type_evenement');
            $criteria->addSelectColumn($alias . '.id_contrat');
            $criteria->addSelectColumn($alias . '.id_contractant');
            $criteria->addSelectColumn($alias . '.id_phase');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.date');
            $criteria->addSelectColumn($alias . '.date_document');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.origine_piece');
            $criteria->addSelectColumn($alias . '.date_validation');
            $criteria->addSelectColumn($alias . '.date_rejet');
            $criteria->addSelectColumn($alias . '.id_agent_validation');
            $criteria->addSelectColumn($alias . '.id_agent_rejet');
            $criteria->addSelectColumn($alias . '.date_crea');
            $criteria->addSelectColumn($alias . '.id_agent_crea');
            $criteria->addSelectColumn($alias . '.date_modif');
            $criteria->addSelectColumn($alias . '.id_agent_modif');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.date_cloture_parapheur');
            $criteria->addSelectColumn($alias . '.motif_rejet');
            $criteria->addSelectColumn($alias . '.motif_darret');
            $criteria->addSelectColumn($alias . '.type_reception');
            $criteria->addSelectColumn($alias . '.porte_reception');
            $criteria->addSelectColumn($alias . '.mode_prononce_reception');
            $criteria->addSelectColumn($alias . '.penalite_retard');
            $criteria->addSelectColumn($alias . '.prestation_reception');
            $criteria->addSelectColumn($alias . '.date_reserve');
            $criteria->addSelectColumn($alias . '.delai_maximal_reserves');
            $criteria->addSelectColumn($alias . '.detail_reserve');
            $criteria->addSelectColumn($alias . '.ordre_evenement');
            $criteria->addSelectColumn($alias . '.demande');
            $criteria->addSelectColumn($alias . '.id_parent');
            $criteria->addSelectColumn($alias . '.date_derniere_synchronisation');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.id_facture');
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
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonExecEvenement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonExecEvenementPeer::doSelect($critcopy, $con);
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
        return CommonExecEvenementPeer::populateObjects(CommonExecEvenementPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

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
     * @param      CommonExecEvenement $obj A CommonExecEvenement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonExecEvenementPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonExecEvenement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonExecEvenement) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonExecEvenement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonExecEvenementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonExecEvenement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonExecEvenementPeer::$instances[$key])) {
                return CommonExecEvenementPeer::$instances[$key];
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
        foreach (CommonExecEvenementPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonExecEvenementPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to exec_evenement
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
        $cls = CommonExecEvenementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonExecEvenementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonExecEvenementPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonExecEvenement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonExecEvenementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonExecEvenementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonExecEvenementPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContractant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecContractant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecPhase table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecPhase(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonExecTypeEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecEvenement objects pre-filled with their CommonExecContractant objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContractant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContractantPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to $obj2 (CommonExecContractant)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecEvenement objects pre-filled with their CommonExecContrat objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecContratPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecContratPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecContratPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to $obj2 (CommonExecContrat)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecEvenement objects pre-filled with their CommonExecPhase objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecPhase(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecPhasePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecPhasePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecPhasePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecPhasePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to $obj2 (CommonExecPhase)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecEvenement objects pre-filled with their CommonExecTypeEvenement objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonExecTypeEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;
        CommonExecTypeEvenementPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonExecTypeEvenementPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to $obj2 (CommonExecTypeEvenement)
                $obj2->addCommonExecEvenement($obj1);

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
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecEvenement objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeEvenementPeer::addSelectColumns($criteria);
        $startcol6 = $startcol5 + CommonExecTypeEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonExecContractant rows

            $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecEvenement($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecContrat rows

            $key3 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonExecContratPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonExecContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecContratPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecEvenement($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecPhase rows

            $key4 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, $startcol4);
            if ($key4 !== null) {
                $obj4 = CommonExecPhasePeer::getInstanceFromPool($key4);
                if (!$obj4) {

                    $cls = CommonExecPhasePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecPhasePeer::addInstanceToPool($obj4, $key4);
                } // if obj4 loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj4 (CommonExecPhase)
                $obj4->addCommonExecEvenement($obj1);
            } // if joined row not null

            // Add objects for joined CommonExecTypeEvenement rows

            $key5 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol5);
            if ($key5 !== null) {
                $obj5 = CommonExecTypeEvenementPeer::getInstanceFromPool($key5);
                if (!$obj5) {

                    $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj5 = new $cls();
                    $obj5->hydrate($row, $startcol5);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj5, $key5);
                } // if obj5 loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj5 (CommonExecTypeEvenement)
                $obj5->addCommonExecEvenement($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonExecContractant table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecContractant(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecContrat table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecContrat(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecPhase table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecPhase(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonExecTypeEvenement table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonExecTypeEvenement(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonExecEvenementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

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
     * Selects a collection of CommonExecEvenement objects pre-filled with all related objects except CommonExecContractant.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecContractant(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypeEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContrat rows

                $key2 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContratPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContratPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj2 (CommonExecContrat)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPhase rows

                $key3 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecPhasePeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecPhasePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecPhasePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj3 (CommonExecPhase)
                $obj3->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecTypeEvenement rows

                $key4 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecTypeEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj4 (CommonExecTypeEvenement)
                $obj4->addCommonExecEvenement($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecEvenement objects pre-filled with all related objects except CommonExecContrat.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecContrat(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypeEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPhase rows

                $key3 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecPhasePeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecPhasePeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecPhasePeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj3 (CommonExecPhase)
                $obj3->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecTypeEvenement rows

                $key4 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecTypeEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj4 (CommonExecTypeEvenement)
                $obj4->addCommonExecEvenement($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecEvenement objects pre-filled with all related objects except CommonExecPhase.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecPhase(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecTypeEvenementPeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecTypeEvenementPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_TYPE_EVENEMENT, CommonExecTypeEvenementPeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecContrat rows

                $key3 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecContratPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecContratPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecTypeEvenement rows

                $key4 = CommonExecTypeEvenementPeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecTypeEvenementPeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecTypeEvenementPeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecTypeEvenementPeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj4 (CommonExecTypeEvenement)
                $obj4->addCommonExecEvenement($obj1);

            } // if joined row is not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonExecEvenement objects pre-filled with all related objects except CommonExecTypeEvenement.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonExecEvenement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonExecTypeEvenement(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);
        }

        CommonExecEvenementPeer::addSelectColumns($criteria);
        $startcol2 = CommonExecEvenementPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContractantPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonExecContractantPeer::NUM_HYDRATE_COLUMNS;

        CommonExecContratPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonExecContratPeer::NUM_HYDRATE_COLUMNS;

        CommonExecPhasePeer::addSelectColumns($criteria);
        $startcol5 = $startcol4 + CommonExecPhasePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRACTANT, CommonExecContractantPeer::ID, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_CONTRAT, CommonExecContratPeer::ID_CONTRAT, $join_behavior);

        $criteria->addJoin(CommonExecEvenementPeer::ID_PHASE, CommonExecPhasePeer::ID, $join_behavior);


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonExecEvenementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonExecEvenementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonExecEvenementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonExecEvenementPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

                // Add objects for joined CommonExecContractant rows

                $key2 = CommonExecContractantPeer::getPrimaryKeyHashFromRow($row, $startcol2);
                if ($key2 !== null) {
                    $obj2 = CommonExecContractantPeer::getInstanceFromPool($key2);
                    if (!$obj2) {
    
                        $cls = CommonExecContractantPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonExecContractantPeer::addInstanceToPool($obj2, $key2);
                } // if $obj2 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj2 (CommonExecContractant)
                $obj2->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecContrat rows

                $key3 = CommonExecContratPeer::getPrimaryKeyHashFromRow($row, $startcol3);
                if ($key3 !== null) {
                    $obj3 = CommonExecContratPeer::getInstanceFromPool($key3);
                    if (!$obj3) {
    
                        $cls = CommonExecContratPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonExecContratPeer::addInstanceToPool($obj3, $key3);
                } // if $obj3 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj3 (CommonExecContrat)
                $obj3->addCommonExecEvenement($obj1);

            } // if joined row is not null

                // Add objects for joined CommonExecPhase rows

                $key4 = CommonExecPhasePeer::getPrimaryKeyHashFromRow($row, $startcol4);
                if ($key4 !== null) {
                    $obj4 = CommonExecPhasePeer::getInstanceFromPool($key4);
                    if (!$obj4) {
    
                        $cls = CommonExecPhasePeer::getOMClass();

                    $obj4 = new $cls();
                    $obj4->hydrate($row, $startcol4);
                    CommonExecPhasePeer::addInstanceToPool($obj4, $key4);
                } // if $obj4 already loaded

                // Add the $obj1 (CommonExecEvenement) to the collection in $obj4 (CommonExecPhase)
                $obj4->addCommonExecEvenement($obj1);

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
        return Propel::getDatabaseMap(CommonExecEvenementPeer::DATABASE_NAME)->getTable(CommonExecEvenementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonExecEvenementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonExecEvenementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonExecEvenementTableMap());
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
        return CommonExecEvenementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonExecEvenement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecEvenement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonExecEvenement object
        }

        if ($criteria->containsKey(CommonExecEvenementPeer::ID) && $criteria->keyContainsValue(CommonExecEvenementPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonExecEvenementPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonExecEvenement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonExecEvenement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonExecEvenementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonExecEvenementPeer::ID);
            $value = $criteria->remove(CommonExecEvenementPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonExecEvenementPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonExecEvenementPeer::TABLE_NAME);
            }

        } else { // $values is CommonExecEvenement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the exec_evenement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonExecEvenementPeer::TABLE_NAME, $con, CommonExecEvenementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonExecEvenementPeer::clearInstancePool();
            CommonExecEvenementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonExecEvenement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonExecEvenement object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonExecEvenementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonExecEvenement) { // it's a model object
            // invalidate the cache for this single object
            CommonExecEvenementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonExecEvenementPeer::DATABASE_NAME);
            $criteria->add(CommonExecEvenementPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonExecEvenementPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonExecEvenementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonExecEvenementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonExecEvenement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonExecEvenement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonExecEvenementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonExecEvenementPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonExecEvenementPeer::DATABASE_NAME, CommonExecEvenementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonExecEvenement
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonExecEvenementPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonExecEvenementPeer::DATABASE_NAME);
        $criteria->add(CommonExecEvenementPeer::ID, $pk);

        $v = CommonExecEvenementPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonExecEvenement[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonExecEvenementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonExecEvenementPeer::DATABASE_NAME);
            $criteria->add(CommonExecEvenementPeer::ID, $pks, Criteria::IN);
            $objs = CommonExecEvenementPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonExecEvenementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonExecEvenementPeer::buildTableMap();

