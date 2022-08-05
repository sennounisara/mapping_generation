<?php


/**
 * Base static class for performing query and update operations on the 'offre_caution' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonOffreCautionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'offre_caution';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonOffreCaution';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonOffreCautionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 26;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 26;

    /** the column name for the ID field */
    const ID = 'offre_caution.ID';

    /** the column name for the ID_DEMANDE field */
    const ID_DEMANDE = 'offre_caution.ID_DEMANDE';

    /** the column name for the REF_CONSULTATION field */
    const REF_CONSULTATION = 'offre_caution.REF_CONSULTATION';

    /** the column name for the ID_OFFRE field */
    const ID_OFFRE = 'offre_caution.ID_OFFRE';

    /** the column name for the TYPE_ENV field */
    const TYPE_ENV = 'offre_caution.TYPE_ENV';

    /** the column name for the ID_ENTREPRISE field */
    const ID_ENTREPRISE = 'offre_caution.ID_ENTREPRISE';

    /** the column name for the ID_INSCRIT field */
    const ID_INSCRIT = 'offre_caution.ID_INSCRIT';

    /** the column name for the ACRONYME field */
    const ACRONYME = 'offre_caution.ACRONYME';

    /** the column name for the INTITULE field */
    const INTITULE = 'offre_caution.INTITULE';

    /** the column name for the LOT field */
    const LOT = 'offre_caution.LOT';

    /** the column name for the OBJET_LOT field */
    const OBJET_LOT = 'offre_caution.OBJET_LOT';

    /** the column name for the RAISON_SOCIALE field */
    const RAISON_SOCIALE = 'offre_caution.RAISON_SOCIALE';

    /** the column name for the MONTANT field */
    const MONTANT = 'offre_caution.MONTANT';

    /** the column name for the DATE_DEMANDE field */
    const DATE_DEMANDE = 'offre_caution.DATE_DEMANDE';

    /** the column name for the ID_STATUT_CAUTION field */
    const ID_STATUT_CAUTION = 'offre_caution.ID_STATUT_CAUTION';

    /** the column name for the ID_COMPTE_BANCAIRE field */
    const ID_COMPTE_BANCAIRE = 'offre_caution.ID_COMPTE_BANCAIRE';

    /** the column name for the ID_BLOB_DEMANDE field */
    const ID_BLOB_DEMANDE = 'offre_caution.ID_BLOB_DEMANDE';

    /** the column name for the NOM_DOC_DEMANDE field */
    const NOM_DOC_DEMANDE = 'offre_caution.NOM_DOC_DEMANDE';

    /** the column name for the ID_BLOB_CAUTION field */
    const ID_BLOB_CAUTION = 'offre_caution.ID_BLOB_CAUTION';

    /** the column name for the NOM_DOC_CAUTION field */
    const NOM_DOC_CAUTION = 'offre_caution.NOM_DOC_CAUTION';

    /** the column name for the ID_INSCRIT_CREA field */
    const ID_INSCRIT_CREA = 'offre_caution.ID_INSCRIT_CREA';

    /** the column name for the DATE_CREA field */
    const DATE_CREA = 'offre_caution.DATE_CREA';

    /** the column name for the IDENTIFIANT_BANCAIRE field */
    const IDENTIFIANT_BANCAIRE = 'offre_caution.IDENTIFIANT_BANCAIRE';

    /** the column name for the ACHETEUR_PUBLIC field */
    const ACHETEUR_PUBLIC = 'offre_caution.ACHETEUR_PUBLIC';

    /** the column name for the DATE_VALIDATION field */
    const DATE_VALIDATION = 'offre_caution.DATE_VALIDATION';

    /** the column name for the DEPOT_ANNULE field */
    const DEPOT_ANNULE = 'offre_caution.DEPOT_ANNULE';

    /** The enumerated values for the DEPOT_ANNULE field */
    const DEPOT_ANNULE_0 = '0';
    const DEPOT_ANNULE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonOffreCaution objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonOffreCaution[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonOffreCautionPeer::$fieldNames[CommonOffreCautionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdDemande', 'RefConsultation', 'IdOffre', 'TypeEnv', 'IdEntreprise', 'IdInscrit', 'Acronyme', 'Intitule', 'Lot', 'ObjetLot', 'RaisonSociale', 'Montant', 'DateDemande', 'IdStatutCaution', 'IdCompteBancaire', 'IdBlobDemande', 'NomDocDemande', 'IdBlobCaution', 'NomDocCaution', 'IdInscritCrea', 'DateCrea', 'IdentifiantBancaire', 'AcheteurPublic', 'DateValidation', 'DepotAnnule', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idDemande', 'refConsultation', 'idOffre', 'typeEnv', 'idEntreprise', 'idInscrit', 'acronyme', 'intitule', 'lot', 'objetLot', 'raisonSociale', 'montant', 'dateDemande', 'idStatutCaution', 'idCompteBancaire', 'idBlobDemande', 'nomDocDemande', 'idBlobCaution', 'nomDocCaution', 'idInscritCrea', 'dateCrea', 'identifiantBancaire', 'acheteurPublic', 'dateValidation', 'depotAnnule', ),
        BasePeer::TYPE_COLNAME => array (CommonOffreCautionPeer::ID, CommonOffreCautionPeer::ID_DEMANDE, CommonOffreCautionPeer::REF_CONSULTATION, CommonOffreCautionPeer::ID_OFFRE, CommonOffreCautionPeer::TYPE_ENV, CommonOffreCautionPeer::ID_ENTREPRISE, CommonOffreCautionPeer::ID_INSCRIT, CommonOffreCautionPeer::ACRONYME, CommonOffreCautionPeer::INTITULE, CommonOffreCautionPeer::LOT, CommonOffreCautionPeer::OBJET_LOT, CommonOffreCautionPeer::RAISON_SOCIALE, CommonOffreCautionPeer::MONTANT, CommonOffreCautionPeer::DATE_DEMANDE, CommonOffreCautionPeer::ID_STATUT_CAUTION, CommonOffreCautionPeer::ID_COMPTE_BANCAIRE, CommonOffreCautionPeer::ID_BLOB_DEMANDE, CommonOffreCautionPeer::NOM_DOC_DEMANDE, CommonOffreCautionPeer::ID_BLOB_CAUTION, CommonOffreCautionPeer::NOM_DOC_CAUTION, CommonOffreCautionPeer::ID_INSCRIT_CREA, CommonOffreCautionPeer::DATE_CREA, CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE, CommonOffreCautionPeer::ACHETEUR_PUBLIC, CommonOffreCautionPeer::DATE_VALIDATION, CommonOffreCautionPeer::DEPOT_ANNULE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_DEMANDE', 'REF_CONSULTATION', 'ID_OFFRE', 'TYPE_ENV', 'ID_ENTREPRISE', 'ID_INSCRIT', 'ACRONYME', 'INTITULE', 'LOT', 'OBJET_LOT', 'RAISON_SOCIALE', 'MONTANT', 'DATE_DEMANDE', 'ID_STATUT_CAUTION', 'ID_COMPTE_BANCAIRE', 'ID_BLOB_DEMANDE', 'NOM_DOC_DEMANDE', 'ID_BLOB_CAUTION', 'NOM_DOC_CAUTION', 'ID_INSCRIT_CREA', 'DATE_CREA', 'IDENTIFIANT_BANCAIRE', 'ACHETEUR_PUBLIC', 'DATE_VALIDATION', 'DEPOT_ANNULE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID', 'ID_DEMANDE', 'REF_CONSULTATION', 'ID_OFFRE', 'TYPE_ENV', 'ID_ENTREPRISE', 'ID_INSCRIT', 'ACRONYME', 'INTITULE', 'LOT', 'OBJET_LOT', 'RAISON_SOCIALE', 'MONTANT', 'DATE_DEMANDE', 'ID_STATUT_CAUTION', 'ID_COMPTE_BANCAIRE', 'ID_BLOB_DEMANDE', 'NOM_DOC_DEMANDE', 'ID_BLOB_CAUTION', 'NOM_DOC_CAUTION', 'ID_INSCRIT_CREA', 'DATE_CREA', 'IDENTIFIANT_BANCAIRE', 'ACHETEUR_PUBLIC', 'DATE_VALIDATION', 'DEPOT_ANNULE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonOffreCautionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdDemande' => 1, 'RefConsultation' => 2, 'IdOffre' => 3, 'TypeEnv' => 4, 'IdEntreprise' => 5, 'IdInscrit' => 6, 'Acronyme' => 7, 'Intitule' => 8, 'Lot' => 9, 'ObjetLot' => 10, 'RaisonSociale' => 11, 'Montant' => 12, 'DateDemande' => 13, 'IdStatutCaution' => 14, 'IdCompteBancaire' => 15, 'IdBlobDemande' => 16, 'NomDocDemande' => 17, 'IdBlobCaution' => 18, 'NomDocCaution' => 19, 'IdInscritCrea' => 20, 'DateCrea' => 21, 'IdentifiantBancaire' => 22, 'AcheteurPublic' => 23, 'DateValidation' => 24, 'DepotAnnule' => 25, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idDemande' => 1, 'refConsultation' => 2, 'idOffre' => 3, 'typeEnv' => 4, 'idEntreprise' => 5, 'idInscrit' => 6, 'acronyme' => 7, 'intitule' => 8, 'lot' => 9, 'objetLot' => 10, 'raisonSociale' => 11, 'montant' => 12, 'dateDemande' => 13, 'idStatutCaution' => 14, 'idCompteBancaire' => 15, 'idBlobDemande' => 16, 'nomDocDemande' => 17, 'idBlobCaution' => 18, 'nomDocCaution' => 19, 'idInscritCrea' => 20, 'dateCrea' => 21, 'identifiantBancaire' => 22, 'acheteurPublic' => 23, 'dateValidation' => 24, 'depotAnnule' => 25, ),
        BasePeer::TYPE_COLNAME => array (CommonOffreCautionPeer::ID => 0, CommonOffreCautionPeer::ID_DEMANDE => 1, CommonOffreCautionPeer::REF_CONSULTATION => 2, CommonOffreCautionPeer::ID_OFFRE => 3, CommonOffreCautionPeer::TYPE_ENV => 4, CommonOffreCautionPeer::ID_ENTREPRISE => 5, CommonOffreCautionPeer::ID_INSCRIT => 6, CommonOffreCautionPeer::ACRONYME => 7, CommonOffreCautionPeer::INTITULE => 8, CommonOffreCautionPeer::LOT => 9, CommonOffreCautionPeer::OBJET_LOT => 10, CommonOffreCautionPeer::RAISON_SOCIALE => 11, CommonOffreCautionPeer::MONTANT => 12, CommonOffreCautionPeer::DATE_DEMANDE => 13, CommonOffreCautionPeer::ID_STATUT_CAUTION => 14, CommonOffreCautionPeer::ID_COMPTE_BANCAIRE => 15, CommonOffreCautionPeer::ID_BLOB_DEMANDE => 16, CommonOffreCautionPeer::NOM_DOC_DEMANDE => 17, CommonOffreCautionPeer::ID_BLOB_CAUTION => 18, CommonOffreCautionPeer::NOM_DOC_CAUTION => 19, CommonOffreCautionPeer::ID_INSCRIT_CREA => 20, CommonOffreCautionPeer::DATE_CREA => 21, CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE => 22, CommonOffreCautionPeer::ACHETEUR_PUBLIC => 23, CommonOffreCautionPeer::DATE_VALIDATION => 24, CommonOffreCautionPeer::DEPOT_ANNULE => 25, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_DEMANDE' => 1, 'REF_CONSULTATION' => 2, 'ID_OFFRE' => 3, 'TYPE_ENV' => 4, 'ID_ENTREPRISE' => 5, 'ID_INSCRIT' => 6, 'ACRONYME' => 7, 'INTITULE' => 8, 'LOT' => 9, 'OBJET_LOT' => 10, 'RAISON_SOCIALE' => 11, 'MONTANT' => 12, 'DATE_DEMANDE' => 13, 'ID_STATUT_CAUTION' => 14, 'ID_COMPTE_BANCAIRE' => 15, 'ID_BLOB_DEMANDE' => 16, 'NOM_DOC_DEMANDE' => 17, 'ID_BLOB_CAUTION' => 18, 'NOM_DOC_CAUTION' => 19, 'ID_INSCRIT_CREA' => 20, 'DATE_CREA' => 21, 'IDENTIFIANT_BANCAIRE' => 22, 'ACHETEUR_PUBLIC' => 23, 'DATE_VALIDATION' => 24, 'DEPOT_ANNULE' => 25, ),
        BasePeer::TYPE_FIELDNAME => array ('ID' => 0, 'ID_DEMANDE' => 1, 'REF_CONSULTATION' => 2, 'ID_OFFRE' => 3, 'TYPE_ENV' => 4, 'ID_ENTREPRISE' => 5, 'ID_INSCRIT' => 6, 'ACRONYME' => 7, 'INTITULE' => 8, 'LOT' => 9, 'OBJET_LOT' => 10, 'RAISON_SOCIALE' => 11, 'MONTANT' => 12, 'DATE_DEMANDE' => 13, 'ID_STATUT_CAUTION' => 14, 'ID_COMPTE_BANCAIRE' => 15, 'ID_BLOB_DEMANDE' => 16, 'NOM_DOC_DEMANDE' => 17, 'ID_BLOB_CAUTION' => 18, 'NOM_DOC_CAUTION' => 19, 'ID_INSCRIT_CREA' => 20, 'DATE_CREA' => 21, 'IDENTIFIANT_BANCAIRE' => 22, 'ACHETEUR_PUBLIC' => 23, 'DATE_VALIDATION' => 24, 'DEPOT_ANNULE' => 25, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonOffreCautionPeer::DEPOT_ANNULE => array(
            CommonOffreCautionPeer::DEPOT_ANNULE_0,
            CommonOffreCautionPeer::DEPOT_ANNULE_1,
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
        $toNames = CommonOffreCautionPeer::getFieldNames($toType);
        $key = isset(CommonOffreCautionPeer::$fieldKeys[$fromType][$name]) ? CommonOffreCautionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonOffreCautionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonOffreCautionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonOffreCautionPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonOffreCautionPeer::$enumValueSets;
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
        $valueSets = CommonOffreCautionPeer::getValueSets();

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
        $values = CommonOffreCautionPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonOffreCautionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonOffreCautionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_DEMANDE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_OFFRE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::TYPE_ENV);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ACRONYME);
            $criteria->addSelectColumn(CommonOffreCautionPeer::INTITULE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::LOT);
            $criteria->addSelectColumn(CommonOffreCautionPeer::OBJET_LOT);
            $criteria->addSelectColumn(CommonOffreCautionPeer::RAISON_SOCIALE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::MONTANT);
            $criteria->addSelectColumn(CommonOffreCautionPeer::DATE_DEMANDE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_STATUT_CAUTION);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_COMPTE_BANCAIRE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_BLOB_DEMANDE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::NOM_DOC_DEMANDE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_BLOB_CAUTION);
            $criteria->addSelectColumn(CommonOffreCautionPeer::NOM_DOC_CAUTION);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ID_INSCRIT_CREA);
            $criteria->addSelectColumn(CommonOffreCautionPeer::DATE_CREA);
            $criteria->addSelectColumn(CommonOffreCautionPeer::IDENTIFIANT_BANCAIRE);
            $criteria->addSelectColumn(CommonOffreCautionPeer::ACHETEUR_PUBLIC);
            $criteria->addSelectColumn(CommonOffreCautionPeer::DATE_VALIDATION);
            $criteria->addSelectColumn(CommonOffreCautionPeer::DEPOT_ANNULE);
        } else {
            $criteria->addSelectColumn($alias . '.ID');
            $criteria->addSelectColumn($alias . '.ID_DEMANDE');
            $criteria->addSelectColumn($alias . '.REF_CONSULTATION');
            $criteria->addSelectColumn($alias . '.ID_OFFRE');
            $criteria->addSelectColumn($alias . '.TYPE_ENV');
            $criteria->addSelectColumn($alias . '.ID_ENTREPRISE');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT');
            $criteria->addSelectColumn($alias . '.ACRONYME');
            $criteria->addSelectColumn($alias . '.INTITULE');
            $criteria->addSelectColumn($alias . '.LOT');
            $criteria->addSelectColumn($alias . '.OBJET_LOT');
            $criteria->addSelectColumn($alias . '.RAISON_SOCIALE');
            $criteria->addSelectColumn($alias . '.MONTANT');
            $criteria->addSelectColumn($alias . '.DATE_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_STATUT_CAUTION');
            $criteria->addSelectColumn($alias . '.ID_COMPTE_BANCAIRE');
            $criteria->addSelectColumn($alias . '.ID_BLOB_DEMANDE');
            $criteria->addSelectColumn($alias . '.NOM_DOC_DEMANDE');
            $criteria->addSelectColumn($alias . '.ID_BLOB_CAUTION');
            $criteria->addSelectColumn($alias . '.NOM_DOC_CAUTION');
            $criteria->addSelectColumn($alias . '.ID_INSCRIT_CREA');
            $criteria->addSelectColumn($alias . '.DATE_CREA');
            $criteria->addSelectColumn($alias . '.IDENTIFIANT_BANCAIRE');
            $criteria->addSelectColumn($alias . '.ACHETEUR_PUBLIC');
            $criteria->addSelectColumn($alias . '.DATE_VALIDATION');
            $criteria->addSelectColumn($alias . '.DEPOT_ANNULE');
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
        $criteria->setPrimaryTableName(CommonOffreCautionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonOffreCautionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonOffreCautionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonOffreCaution
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonOffreCautionPeer::doSelect($critcopy, $con);
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
        return CommonOffreCautionPeer::populateObjects(CommonOffreCautionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonOffreCautionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffreCautionPeer::DATABASE_NAME);

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
     * @param      CommonOffreCaution $obj A CommonOffreCaution object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonOffreCautionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonOffreCaution object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonOffreCaution) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonOffreCaution object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonOffreCautionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonOffreCaution Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonOffreCautionPeer::$instances[$key])) {
                return CommonOffreCautionPeer::$instances[$key];
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
        foreach (CommonOffreCautionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonOffreCautionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to offre_caution
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
        $cls = CommonOffreCautionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonOffreCautionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonOffreCautionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonOffreCautionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonOffreCaution object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonOffreCautionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonOffreCautionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonOffreCautionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonOffreCautionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonOffreCautionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonOffreCautionPeer::DATABASE_NAME)->getTable(CommonOffreCautionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonOffreCautionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonOffreCautionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonOffreCautionTableMap());
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
        return CommonOffreCautionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonOffreCaution or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffreCaution object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonOffreCaution object
        }

        if ($criteria->containsKey(CommonOffreCautionPeer::ID) && $criteria->keyContainsValue(CommonOffreCautionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonOffreCautionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonOffreCautionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonOffreCaution or Criteria object.
     *
     * @param      mixed $values Criteria or CommonOffreCaution object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonOffreCautionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonOffreCautionPeer::ID);
            $value = $criteria->remove(CommonOffreCautionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonOffreCautionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonOffreCautionPeer::TABLE_NAME);
            }

        } else { // $values is CommonOffreCaution object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonOffreCautionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the offre_caution table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonOffreCautionPeer::TABLE_NAME, $con, CommonOffreCautionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonOffreCautionPeer::clearInstancePool();
            CommonOffreCautionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonOffreCaution or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonOffreCaution object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonOffreCautionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonOffreCaution) { // it's a model object
            // invalidate the cache for this single object
            CommonOffreCautionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonOffreCautionPeer::DATABASE_NAME);
            $criteria->add(CommonOffreCautionPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonOffreCautionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonOffreCautionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonOffreCautionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonOffreCaution object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonOffreCaution $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonOffreCautionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonOffreCautionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonOffreCautionPeer::DATABASE_NAME, CommonOffreCautionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonOffreCaution
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonOffreCautionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonOffreCautionPeer::DATABASE_NAME);
        $criteria->add(CommonOffreCautionPeer::ID, $pk);

        $v = CommonOffreCautionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonOffreCaution[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonOffreCautionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonOffreCautionPeer::DATABASE_NAME);
            $criteria->add(CommonOffreCautionPeer::ID, $pks, Criteria::IN);
            $objs = CommonOffreCautionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonOffreCautionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonOffreCautionPeer::buildTableMap();

