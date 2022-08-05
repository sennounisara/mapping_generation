<?php


/**
 * Base static class for performing query and update operations on the 't_etape_circuit_validation_demande' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseTEtapeCircuitValidationDemandePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 't_etape_circuit_validation_demande';

    /** the related Propel class for this table */
    const OM_CLASS = 'TEtapeCircuitValidationDemande';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TEtapeCircuitValidationDemandeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 26;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 26;

    /** the column name for the ID field */
    const ID = 't_etape_circuit_validation_demande.ID';

    /** the column name for the LIBELLE_ETAPE field */
    const LIBELLE_ETAPE = 't_etape_circuit_validation_demande.LIBELLE_ETAPE';

    /** the column name for the LIBELLE_ETAPE_AR field */
    const LIBELLE_ETAPE_AR = 't_etape_circuit_validation_demande.LIBELLE_ETAPE_AR';

    /** the column name for the DETAIL field */
    const DETAIL = 't_etape_circuit_validation_demande.DETAIL';

    /** the column name for the NUMERO_ETAPE field */
    const NUMERO_ETAPE = 't_etape_circuit_validation_demande.NUMERO_ETAPE';

    /** the column name for the ID_TYPE_ETAPE field */
    const ID_TYPE_ETAPE = 't_etape_circuit_validation_demande.ID_TYPE_ETAPE';

    /** the column name for the VISA_SIGNATURE field */
    const VISA_SIGNATURE = 't_etape_circuit_validation_demande.VISA_SIGNATURE';

    /** the column name for the ID_ENTITE field */
    const ID_ENTITE = 't_etape_circuit_validation_demande.ID_ENTITE';

    /** the column name for the ID_SIGNATAIRE field */
    const ID_SIGNATAIRE = 't_etape_circuit_validation_demande.ID_SIGNATAIRE';

    /** the column name for the ACHEVE field */
    const ACHEVE = 't_etape_circuit_validation_demande.ACHEVE';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 't_etape_circuit_validation_demande.ID_DEMANDE';

    /** the column name for the REGLE_VALIDATION field */
    const REGLE_VALIDATION = 't_etape_circuit_validation_demande.REGLE_VALIDATION';

    /** the column name for the REGLE_REFUS field */
    const REGLE_REFUS = 't_etape_circuit_validation_demande.REGLE_REFUS';

    /** the column name for the SUPPRIME field */
    const SUPPRIME = 't_etape_circuit_validation_demande.SUPPRIME';

    /** the column name for the DELAI_ETAPE field */
    const DELAI_ETAPE = 't_etape_circuit_validation_demande.DELAI_ETAPE';

    /** the column name for the DELAI_HEURE field */
    const DELAI_HEURE = 't_etape_circuit_validation_demande.DELAI_HEURE';

    /** the column name for the DATE_FIN field */
    const DATE_FIN = 't_etape_circuit_validation_demande.DATE_FIN';

    /** the column name for the ID_ENTITE_RELANCE field */
    const ID_ENTITE_RELANCE = 't_etape_circuit_validation_demande.ID_ENTITE_RELANCE';

    /** the column name for the ID_AGENT_RELANCE field */
    const ID_AGENT_RELANCE = 't_etape_circuit_validation_demande.ID_AGENT_RELANCE';

    /** the column name for the DUREE_REELLE_TRAITEMENT field */
    const DUREE_REELLE_TRAITEMENT = 't_etape_circuit_validation_demande.DUREE_REELLE_TRAITEMENT';

    /** the column name for the HEURES_REELLE_TRAITEMENT field */
    const HEURES_REELLE_TRAITEMENT = 't_etape_circuit_validation_demande.HEURES_REELLE_TRAITEMENT';

    /** the column name for the CHECK_LIST_TAB field */
    const CHECK_LIST_TAB = 't_etape_circuit_validation_demande.CHECK_LIST_TAB';

    /** the column name for the CLOTURE field */
    const CLOTURE = 't_etape_circuit_validation_demande.CLOTURE';

    /** the column name for the NIVEAU_HIERARCHIE field */
    const NIVEAU_HIERARCHIE = 't_etape_circuit_validation_demande.NIVEAU_HIERARCHIE';

    /** the column name for the CALCUL field */
    const CALCUL = 't_etape_circuit_validation_demande.CALCUL';

    /** the column name for the ID_ETAPE_HIERARCHIE field */
    const ID_ETAPE_HIERARCHIE = 't_etape_circuit_validation_demande.ID_ETAPE_HIERARCHIE';

    /** The enumerated values for the VISA_SIGNATURE field */
    const VISA_SIGNATURE_1 = '1';
    const VISA_SIGNATURE_2 = '2';
    const VISA_SIGNATURE_3 = '3';
    const VISA_SIGNATURE_4 = '4';

    /** The enumerated values for the ACHEVE field */
    const ACHEVE_0 = '0';
    const ACHEVE_1 = '1';
    const ACHEVE_2 = '2';

    /** The enumerated values for the SUPPRIME field */
    const SUPPRIME_0 = '0';
    const SUPPRIME_1 = '1';

    /** The enumerated values for the CLOTURE field */
    const CLOTURE_0 = '0';
    const CLOTURE_1 = '1';

    /** The enumerated values for the CALCUL field */
    const CALCUL_0 = '0';
    const CALCUL_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TEtapeCircuitValidationDemande objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TEtapeCircuitValidationDemande[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TEtapeCircuitValidationDemandePeer::$fieldNames[TEtapeCircuitValidationDemandePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'LibelleEtape', 'LibelleEtapeAr', 'Detail', 'NumeroEtape', 'IdTypeEtape', 'VisaSignature', 'IdEntite', 'IdSignataire', 'Acheve', 'IdDemande', 'RegleValidation', 'RegleRefus', 'Supprime', 'DelaiEtape', 'DelaiHeure', 'DateFin', 'IdEntiteRelance', 'IdAgentRelance', 'DureeReelleTraitement', 'HeuresReelleTraitement', 'CheckListTab', 'Cloture', 'NiveauHierarchie', 'Calcul', 'IdEtapeHierarchie', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'libelleEtape', 'libelleEtapeAr', 'detail', 'numeroEtape', 'idTypeEtape', 'visaSignature', 'idEntite', 'idSignataire', 'acheve', 'idDemande', 'regleValidation', 'regleRefus', 'supprime', 'delaiEtape', 'delaiHeure', 'dateFin', 'idEntiteRelance', 'idAgentRelance', 'dureeReelleTraitement', 'heuresReelleTraitement', 'checkListTab', 'cloture', 'niveauHierarchie', 'calcul', 'idEtapeHierarchie', ),
        BasePeer::TYPE_COLNAME => array (TEtapeCircuitValidationDemandePeer::ID, TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE, TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE_AR, TEtapeCircuitValidationDemandePeer::DETAIL, TEtapeCircuitValidationDemandePeer::NUMERO_ETAPE, TEtapeCircuitValidationDemandePeer::ID_TYPE_ETAPE, TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE, TEtapeCircuitValidationDemandePeer::ID_ENTITE, TEtapeCircuitValidationDemandePeer::ID_SIGNATAIRE, TEtapeCircuitValidationDemandePeer::ACHEVE, TEtapeCircuitValidationDemandePeer::ID_DEMANDE, TEtapeCircuitValidationDemandePeer::REGLE_VALIDATION, TEtapeCircuitValidationDemandePeer::REGLE_REFUS, TEtapeCircuitValidationDemandePeer::SUPPRIME, TEtapeCircuitValidationDemandePeer::DELAI_ETAPE, TEtapeCircuitValidationDemandePeer::DELAI_HEURE, TEtapeCircuitValidationDemandePeer::DATE_FIN, TEtapeCircuitValidationDemandePeer::ID_ENTITE_RELANCE, TEtapeCircuitValidationDemandePeer::ID_AGENT_RELANCE, TEtapeCircuitValidationDemandePeer::DUREE_REELLE_TRAITEMENT, TEtapeCircuitValidationDemandePeer::HEURES_REELLE_TRAITEMENT, TEtapeCircuitValidationDemandePeer::CHECK_LIST_TAB, TEtapeCircuitValidationDemandePeer::CLOTURE, TEtapeCircuitValidationDemandePeer::NIVEAU_HIERARCHIE, TEtapeCircuitValidationDemandePeer::CALCUL, TEtapeCircuitValidationDemandePeer::ID_ETAPE_HIERARCHIE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'LIBELLE_ETAPE', 'LIBELLE_ETAPE_AR', 'DETAIL', 'NUMERO_ETAPE', 'ID_TYPE_ETAPE', 'VISA_SIGNATURE', 'ID_ENTITE', 'ID_SIGNATAIRE', 'ACHEVE', 'ID_DEMANDE', 'REGLE_VALIDATION', 'REGLE_REFUS', 'SUPPRIME', 'DELAI_ETAPE', 'DELAI_HEURE', 'DATE_FIN', 'ID_ENTITE_RELANCE', 'ID_AGENT_RELANCE', 'DUREE_REELLE_TRAITEMENT', 'HEURES_REELLE_TRAITEMENT', 'CHECK_LIST_TAB', 'CLOTURE', 'NIVEAU_HIERARCHIE', 'CALCUL', 'ID_ETAPE_HIERARCHIE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'LIBELLE_ETAPE', 'LIBELLE_ETAPE_AR', 'DETAIL', 'NUMERO_ETAPE', 'ID_TYPE_ETAPE', 'VISA_SIGNATURE', 'ID_ENTITE', 'ID_SIGNATAIRE', 'ACHEVE', 'ID_DEMANDE', 'REGLE_VALIDATION', 'REGLE_REFUS', 'SUPPRIME', 'DELAI_ETAPE', 'DELAI_HEURE', 'DATE_FIN', 'ID_ENTITE_RELANCE', 'ID_AGENT_RELANCE', 'DUREE_REELLE_TRAITEMENT', 'HEURES_REELLE_TRAITEMENT', 'CHECK_LIST_TAB', 'CLOTURE', 'NIVEAU_HIERARCHIE', 'CALCUL', 'ID_ETAPE_HIERARCHIE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TEtapeCircuitValidationDemandePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'LibelleEtape' => 1, 'LibelleEtapeAr' => 2, 'Detail' => 3, 'NumeroEtape' => 4, 'IdTypeEtape' => 5, 'VisaSignature' => 6, 'IdEntite' => 7, 'IdSignataire' => 8, 'Acheve' => 9, 'IdDemande' => 10, 'RegleValidation' => 11, 'RegleRefus' => 12, 'Supprime' => 13, 'DelaiEtape' => 14, 'DelaiHeure' => 15, 'DateFin' => 16, 'IdEntiteRelance' => 17, 'IdAgentRelance' => 18, 'DureeReelleTraitement' => 19, 'HeuresReelleTraitement' => 20, 'CheckListTab' => 21, 'Cloture' => 22, 'NiveauHierarchie' => 23, 'Calcul' => 24, 'IdEtapeHierarchie' => 25, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'libelleEtape' => 1, 'libelleEtapeAr' => 2, 'detail' => 3, 'numeroEtape' => 4, 'idTypeEtape' => 5, 'visaSignature' => 6, 'idEntite' => 7, 'idSignataire' => 8, 'acheve' => 9, 'idDemande' => 10, 'regleValidation' => 11, 'regleRefus' => 12, 'supprime' => 13, 'delaiEtape' => 14, 'delaiHeure' => 15, 'dateFin' => 16, 'idEntiteRelance' => 17, 'idAgentRelance' => 18, 'dureeReelleTraitement' => 19, 'heuresReelleTraitement' => 20, 'checkListTab' => 21, 'cloture' => 22, 'niveauHierarchie' => 23, 'calcul' => 24, 'idEtapeHierarchie' => 25, ),
        BasePeer::TYPE_COLNAME => array (TEtapeCircuitValidationDemandePeer::ID => 0, TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE => 1, TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE_AR => 2, TEtapeCircuitValidationDemandePeer::DETAIL => 3, TEtapeCircuitValidationDemandePeer::NUMERO_ETAPE => 4, TEtapeCircuitValidationDemandePeer::ID_TYPE_ETAPE => 5, TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE => 6, TEtapeCircuitValidationDemandePeer::ID_ENTITE => 7, TEtapeCircuitValidationDemandePeer::ID_SIGNATAIRE => 8, TEtapeCircuitValidationDemandePeer::ACHEVE => 9, TEtapeCircuitValidationDemandePeer::ID_DEMANDE => 10, TEtapeCircuitValidationDemandePeer::REGLE_VALIDATION => 11, TEtapeCircuitValidationDemandePeer::REGLE_REFUS => 12, TEtapeCircuitValidationDemandePeer::SUPPRIME => 13, TEtapeCircuitValidationDemandePeer::DELAI_ETAPE => 14, TEtapeCircuitValidationDemandePeer::DELAI_HEURE => 15, TEtapeCircuitValidationDemandePeer::DATE_FIN => 16, TEtapeCircuitValidationDemandePeer::ID_ENTITE_RELANCE => 17, TEtapeCircuitValidationDemandePeer::ID_AGENT_RELANCE => 18, TEtapeCircuitValidationDemandePeer::DUREE_REELLE_TRAITEMENT => 19, TEtapeCircuitValidationDemandePeer::HEURES_REELLE_TRAITEMENT => 20, TEtapeCircuitValidationDemandePeer::CHECK_LIST_TAB => 21, TEtapeCircuitValidationDemandePeer::CLOTURE => 22, TEtapeCircuitValidationDemandePeer::NIVEAU_HIERARCHIE => 23, TEtapeCircuitValidationDemandePeer::CALCUL => 24, TEtapeCircuitValidationDemandePeer::ID_ETAPE_HIERARCHIE => 25, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'LIBELLE_ETAPE' => 1, 'LIBELLE_ETAPE_AR' => 2, 'DETAIL' => 3, 'NUMERO_ETAPE' => 4, 'ID_TYPE_ETAPE' => 5, 'VISA_SIGNATURE' => 6, 'ID_ENTITE' => 7, 'ID_SIGNATAIRE' => 8, 'ACHEVE' => 9, 'ID_DEMANDE' => 10, 'REGLE_VALIDATION' => 11, 'REGLE_REFUS' => 12, 'SUPPRIME' => 13, 'DELAI_ETAPE' => 14, 'DELAI_HEURE' => 15, 'DATE_FIN' => 16, 'ID_ENTITE_RELANCE' => 17, 'ID_AGENT_RELANCE' => 18, 'DUREE_REELLE_TRAITEMENT' => 19, 'HEURES_REELLE_TRAITEMENT' => 20, 'CHECK_LIST_TAB' => 21, 'CLOTURE' => 22, 'NIVEAU_HIERARCHIE' => 23, 'CALCUL' => 24, 'ID_ETAPE_HIERARCHIE' => 25, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'LIBELLE_ETAPE' => 1, 'LIBELLE_ETAPE_AR' => 2, 'DETAIL' => 3, 'NUMERO_ETAPE' => 4, 'ID_TYPE_ETAPE' => 5, 'VISA_SIGNATURE' => 6, 'ID_ENTITE' => 7, 'ID_SIGNATAIRE' => 8, 'ACHEVE' => 9, 'ID_DEMANDE' => 10, 'REGLE_VALIDATION' => 11, 'REGLE_REFUS' => 12, 'SUPPRIME' => 13, 'DELAI_ETAPE' => 14, 'DELAI_HEURE' => 15, 'DATE_FIN' => 16, 'ID_ENTITE_RELANCE' => 17, 'ID_AGENT_RELANCE' => 18, 'DUREE_REELLE_TRAITEMENT' => 19, 'HEURES_REELLE_TRAITEMENT' => 20, 'CHECK_LIST_TAB' => 21, 'CLOTURE' => 22, 'NIVEAU_HIERARCHIE' => 23, 'CALCUL' => 24, 'ID_ETAPE_HIERARCHIE' => 25, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE => array(
            TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE_1,
            TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE_2,
            TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE_3,
            TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE_4,
        ),
        TEtapeCircuitValidationDemandePeer::ACHEVE => array(
            TEtapeCircuitValidationDemandePeer::ACHEVE_0,
            TEtapeCircuitValidationDemandePeer::ACHEVE_1,
            TEtapeCircuitValidationDemandePeer::ACHEVE_2,
        ),
        TEtapeCircuitValidationDemandePeer::SUPPRIME => array(
            TEtapeCircuitValidationDemandePeer::SUPPRIME_0,
            TEtapeCircuitValidationDemandePeer::SUPPRIME_1,
        ),
        TEtapeCircuitValidationDemandePeer::CLOTURE => array(
            TEtapeCircuitValidationDemandePeer::CLOTURE_0,
            TEtapeCircuitValidationDemandePeer::CLOTURE_1,
        ),
        TEtapeCircuitValidationDemandePeer::CALCUL => array(
            TEtapeCircuitValidationDemandePeer::CALCUL_0,
            TEtapeCircuitValidationDemandePeer::CALCUL_1,
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
        $toNames = TEtapeCircuitValidationDemandePeer::getFieldNames($toType);
        $key = isset(TEtapeCircuitValidationDemandePeer::$fieldKeys[$fromType][$name]) ? TEtapeCircuitValidationDemandePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TEtapeCircuitValidationDemandePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TEtapeCircuitValidationDemandePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TEtapeCircuitValidationDemandePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return TEtapeCircuitValidationDemandePeer::$enumValueSets;
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
        $valueSets = TEtapeCircuitValidationDemandePeer::getValueSets();

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
        $values = TEtapeCircuitValidationDemandePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. TEtapeCircuitValidationDemandePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TEtapeCircuitValidationDemandePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::LIBELLE_ETAPE_AR);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::DETAIL);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::NUMERO_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_TYPE_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::VISA_SIGNATURE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_ENTITE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_SIGNATAIRE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ACHEVE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_DEMANDE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::REGLE_VALIDATION);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::REGLE_REFUS);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::SUPPRIME);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::DELAI_ETAPE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::DELAI_HEURE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::DATE_FIN);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_ENTITE_RELANCE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_AGENT_RELANCE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::DUREE_REELLE_TRAITEMENT);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::HEURES_REELLE_TRAITEMENT);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::CHECK_LIST_TAB);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::CLOTURE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::NIVEAU_HIERARCHIE);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::CALCUL);
            $criteria->addSelectColumn(TEtapeCircuitValidationDemandePeer::ID_ETAPE_HIERARCHIE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.LIBELLE_ETAPE');
            $criteria->addSelectColumn($alias . '.LIBELLE_ETAPE_AR');
            $criteria->addSelectColumn($alias . '.DETAIL');
            $criteria->addSelectColumn($alias . '.NUMERO_ETAPE');
            $criteria->addSelectColumn($alias . '.ID_TYPE_ETAPE');
            $criteria->addSelectColumn($alias . '.VISA_SIGNATURE');
            $criteria->addSelectColumn($alias . '.ID_ENTITE');
            $criteria->addSelectColumn($alias . '.ID_SIGNATAIRE');
            $criteria->addSelectColumn($alias . '.ACHEVE');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.REGLE_VALIDATION');
            $criteria->addSelectColumn($alias . '.REGLE_REFUS');
            $criteria->addSelectColumn($alias . '.SUPPRIME');
            $criteria->addSelectColumn($alias . '.DELAI_ETAPE');
            $criteria->addSelectColumn($alias . '.DELAI_HEURE');
            $criteria->addSelectColumn($alias . '.DATE_FIN');
            $criteria->addSelectColumn($alias . '.ID_ENTITE_RELANCE');
            $criteria->addSelectColumn($alias . '.ID_AGENT_RELANCE');
            $criteria->addSelectColumn($alias . '.DUREE_REELLE_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.HEURES_REELLE_TRAITEMENT');
            $criteria->addSelectColumn($alias . '.CHECK_LIST_TAB');
            $criteria->addSelectColumn($alias . '.CLOTURE');
            $criteria->addSelectColumn($alias . '.NIVEAU_HIERARCHIE');
            $criteria->addSelectColumn($alias . '.CALCUL');
            $criteria->addSelectColumn($alias . '.ID_ETAPE_HIERARCHIE');
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
        $criteria->setPrimaryTableName(TEtapeCircuitValidationDemandePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TEtapeCircuitValidationDemandePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TEtapeCircuitValidationDemandePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEtapeCircuitValidationDemande
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TEtapeCircuitValidationDemandePeer::doSelect($critcopy, $con);
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
        return TEtapeCircuitValidationDemandePeer::populateObjects(TEtapeCircuitValidationDemandePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TEtapeCircuitValidationDemandePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);

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
     * @param      TEtapeCircuitValidationDemande $obj A TEtapeCircuitValidationDemande object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            TEtapeCircuitValidationDemandePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TEtapeCircuitValidationDemande object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TEtapeCircuitValidationDemande) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TEtapeCircuitValidationDemande object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TEtapeCircuitValidationDemandePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   TEtapeCircuitValidationDemande Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TEtapeCircuitValidationDemandePeer::$instances[$key])) {
                return TEtapeCircuitValidationDemandePeer::$instances[$key];
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
        foreach (TEtapeCircuitValidationDemandePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TEtapeCircuitValidationDemandePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_etape_circuit_validation_demande
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
        $cls = TEtapeCircuitValidationDemandePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TEtapeCircuitValidationDemandePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TEtapeCircuitValidationDemandePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TEtapeCircuitValidationDemandePeer::addInstanceToPool($obj, $key);
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
     * @return array (TEtapeCircuitValidationDemande object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TEtapeCircuitValidationDemandePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TEtapeCircuitValidationDemandePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TEtapeCircuitValidationDemandePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TEtapeCircuitValidationDemandePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TEtapeCircuitValidationDemandePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TEtapeCircuitValidationDemandePeer::DATABASE_NAME)->getTable(TEtapeCircuitValidationDemandePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTEtapeCircuitValidationDemandePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTEtapeCircuitValidationDemandePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TEtapeCircuitValidationDemandeTableMap());
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
        return TEtapeCircuitValidationDemandePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TEtapeCircuitValidationDemande or Criteria object.
     *
     * @param      mixed $values Criteria or TEtapeCircuitValidationDemande object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TEtapeCircuitValidationDemande object
        }

        if ($criteria->containsKey(TEtapeCircuitValidationDemandePeer::ID) && $criteria->keyContainsValue(TEtapeCircuitValidationDemandePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TEtapeCircuitValidationDemandePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TEtapeCircuitValidationDemande or Criteria object.
     *
     * @param      mixed $values Criteria or TEtapeCircuitValidationDemande object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TEtapeCircuitValidationDemandePeer::ID);
            $value = $criteria->remove(TEtapeCircuitValidationDemandePeer::ID);
            if ($value) {
                $selectCriteria->add(TEtapeCircuitValidationDemandePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TEtapeCircuitValidationDemandePeer::TABLE_NAME);
            }

        } else { // $values is TEtapeCircuitValidationDemande object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_etape_circuit_validation_demande table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TEtapeCircuitValidationDemandePeer::TABLE_NAME, $con, TEtapeCircuitValidationDemandePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TEtapeCircuitValidationDemandePeer::clearInstancePool();
            TEtapeCircuitValidationDemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TEtapeCircuitValidationDemande or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TEtapeCircuitValidationDemande object or primary key or array of primary keys
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
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TEtapeCircuitValidationDemandePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TEtapeCircuitValidationDemande) { // it's a model object
            // invalidate the cache for this single object
            TEtapeCircuitValidationDemandePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);
            $criteria->add(TEtapeCircuitValidationDemandePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TEtapeCircuitValidationDemandePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            TEtapeCircuitValidationDemandePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TEtapeCircuitValidationDemande object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      TEtapeCircuitValidationDemande $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TEtapeCircuitValidationDemandePeer::TABLE_NAME);

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

        return BasePeer::doValidate(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, TEtapeCircuitValidationDemandePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TEtapeCircuitValidationDemande
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TEtapeCircuitValidationDemandePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);
        $criteria->add(TEtapeCircuitValidationDemandePeer::ID, $pk);

        $v = TEtapeCircuitValidationDemandePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TEtapeCircuitValidationDemande[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEtapeCircuitValidationDemandePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TEtapeCircuitValidationDemandePeer::DATABASE_NAME);
            $criteria->add(TEtapeCircuitValidationDemandePeer::ID, $pks, Criteria::IN);
            $objs = TEtapeCircuitValidationDemandePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTEtapeCircuitValidationDemandePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTEtapeCircuitValidationDemandePeer::buildTableMap();

