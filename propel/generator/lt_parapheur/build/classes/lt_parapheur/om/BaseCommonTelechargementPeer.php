<?php


/**
 * Base static class for performing query and update operations on the 'Telechargement' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTelechargementPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Telechargement';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTelechargement';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTelechargementTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 26;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 26;

    /** the column name for the id field */
    const ID = 'Telechargement.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Telechargement.organisme';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Telechargement.consultation_ref';

    /** the column name for the datetelechargement field */
    const DATETELECHARGEMENT = 'Telechargement.datetelechargement';

    /** the column name for the tirage_plan field */
    const TIRAGE_PLAN = 'Telechargement.tirage_plan';

    /** the column name for the id_inscrit field */
    const ID_INSCRIT = 'Telechargement.id_inscrit';

    /** the column name for the id_entreprise field */
    const ID_ENTREPRISE = 'Telechargement.id_entreprise';

    /** the column name for the support field */
    const SUPPORT = 'Telechargement.support';

    /** the column name for the nom field */
    const NOM = 'Telechargement.nom';

    /** the column name for the adresse field */
    const ADRESSE = 'Telechargement.adresse';

    /** the column name for the email field */
    const EMAIL = 'Telechargement.email';

    /** the column name for the entreprise field */
    const ENTREPRISE = 'Telechargement.entreprise';

    /** the column name for the codepostal field */
    const CODEPOSTAL = 'Telechargement.codepostal';

    /** the column name for the ville field */
    const VILLE = 'Telechargement.ville';

    /** the column name for the pays field */
    const PAYS = 'Telechargement.pays';

    /** the column name for the telephone field */
    const TELEPHONE = 'Telechargement.telephone';

    /** the column name for the siret field */
    const SIRET = 'Telechargement.siret';

    /** the column name for the fax field */
    const FAX = 'Telechargement.fax';

    /** the column name for the lots field */
    const LOTS = 'Telechargement.lots';

    /** the column name for the sirenEtranger field */
    const SIRENETRANGER = 'Telechargement.sirenEtranger';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'Telechargement.adresse2';

    /** the column name for the prenom field */
    const PRENOM = 'Telechargement.prenom';

    /** the column name for the noms_fichiers_dce field */
    const NOMS_FICHIERS_DCE = 'Telechargement.noms_fichiers_dce';

    /** the column name for the Observation field */
    const OBSERVATION = 'Telechargement.Observation';

    /** the column name for the acronyme_pays field */
    const ACRONYME_PAYS = 'Telechargement.acronyme_pays';

    /** the column name for the ifu field */
    const IFU = 'Telechargement.ifu';

    /** The enumerated values for the support field */
    const SUPPORT_1 = '1';
    const SUPPORT_2 = '2';
    const SUPPORT_3 = '3';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTelechargement objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTelechargement[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTelechargementPeer::$fieldNames[CommonTelechargementPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'ConsultationRef', 'Datetelechargement', 'TiragePlan', 'IdInscrit', 'IdEntreprise', 'Support', 'Nom', 'Adresse', 'Email', 'Entreprise', 'Codepostal', 'Ville', 'Pays', 'Telephone', 'Siret', 'Fax', 'Lots', 'Sirenetranger', 'Adresse2', 'Prenom', 'NomsFichiersDce', 'Observation', 'AcronymePays', 'Ifu', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'consultationRef', 'datetelechargement', 'tiragePlan', 'idInscrit', 'idEntreprise', 'support', 'nom', 'adresse', 'email', 'entreprise', 'codepostal', 'ville', 'pays', 'telephone', 'siret', 'fax', 'lots', 'sirenetranger', 'adresse2', 'prenom', 'nomsFichiersDce', 'observation', 'acronymePays', 'ifu', ),
        BasePeer::TYPE_COLNAME => array (CommonTelechargementPeer::ID, CommonTelechargementPeer::ORGANISME, CommonTelechargementPeer::CONSULTATION_REF, CommonTelechargementPeer::DATETELECHARGEMENT, CommonTelechargementPeer::TIRAGE_PLAN, CommonTelechargementPeer::ID_INSCRIT, CommonTelechargementPeer::ID_ENTREPRISE, CommonTelechargementPeer::SUPPORT, CommonTelechargementPeer::NOM, CommonTelechargementPeer::ADRESSE, CommonTelechargementPeer::EMAIL, CommonTelechargementPeer::ENTREPRISE, CommonTelechargementPeer::CODEPOSTAL, CommonTelechargementPeer::VILLE, CommonTelechargementPeer::PAYS, CommonTelechargementPeer::TELEPHONE, CommonTelechargementPeer::SIRET, CommonTelechargementPeer::FAX, CommonTelechargementPeer::LOTS, CommonTelechargementPeer::SIRENETRANGER, CommonTelechargementPeer::ADRESSE2, CommonTelechargementPeer::PRENOM, CommonTelechargementPeer::NOMS_FICHIERS_DCE, CommonTelechargementPeer::OBSERVATION, CommonTelechargementPeer::ACRONYME_PAYS, CommonTelechargementPeer::IFU, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'CONSULTATION_REF', 'DATETELECHARGEMENT', 'TIRAGE_PLAN', 'ID_INSCRIT', 'ID_ENTREPRISE', 'SUPPORT', 'NOM', 'ADRESSE', 'EMAIL', 'ENTREPRISE', 'CODEPOSTAL', 'VILLE', 'PAYS', 'TELEPHONE', 'SIRET', 'FAX', 'LOTS', 'SIRENETRANGER', 'ADRESSE2', 'PRENOM', 'NOMS_FICHIERS_DCE', 'OBSERVATION', 'ACRONYME_PAYS', 'IFU', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'consultation_ref', 'datetelechargement', 'tirage_plan', 'id_inscrit', 'id_entreprise', 'support', 'nom', 'adresse', 'email', 'entreprise', 'codepostal', 'ville', 'pays', 'telephone', 'siret', 'fax', 'lots', 'sirenEtranger', 'adresse2', 'prenom', 'noms_fichiers_dce', 'Observation', 'acronyme_pays', 'ifu', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTelechargementPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'ConsultationRef' => 2, 'Datetelechargement' => 3, 'TiragePlan' => 4, 'IdInscrit' => 5, 'IdEntreprise' => 6, 'Support' => 7, 'Nom' => 8, 'Adresse' => 9, 'Email' => 10, 'Entreprise' => 11, 'Codepostal' => 12, 'Ville' => 13, 'Pays' => 14, 'Telephone' => 15, 'Siret' => 16, 'Fax' => 17, 'Lots' => 18, 'Sirenetranger' => 19, 'Adresse2' => 20, 'Prenom' => 21, 'NomsFichiersDce' => 22, 'Observation' => 23, 'AcronymePays' => 24, 'Ifu' => 25, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'consultationRef' => 2, 'datetelechargement' => 3, 'tiragePlan' => 4, 'idInscrit' => 5, 'idEntreprise' => 6, 'support' => 7, 'nom' => 8, 'adresse' => 9, 'email' => 10, 'entreprise' => 11, 'codepostal' => 12, 'ville' => 13, 'pays' => 14, 'telephone' => 15, 'siret' => 16, 'fax' => 17, 'lots' => 18, 'sirenetranger' => 19, 'adresse2' => 20, 'prenom' => 21, 'nomsFichiersDce' => 22, 'observation' => 23, 'acronymePays' => 24, 'ifu' => 25, ),
        BasePeer::TYPE_COLNAME => array (CommonTelechargementPeer::ID => 0, CommonTelechargementPeer::ORGANISME => 1, CommonTelechargementPeer::CONSULTATION_REF => 2, CommonTelechargementPeer::DATETELECHARGEMENT => 3, CommonTelechargementPeer::TIRAGE_PLAN => 4, CommonTelechargementPeer::ID_INSCRIT => 5, CommonTelechargementPeer::ID_ENTREPRISE => 6, CommonTelechargementPeer::SUPPORT => 7, CommonTelechargementPeer::NOM => 8, CommonTelechargementPeer::ADRESSE => 9, CommonTelechargementPeer::EMAIL => 10, CommonTelechargementPeer::ENTREPRISE => 11, CommonTelechargementPeer::CODEPOSTAL => 12, CommonTelechargementPeer::VILLE => 13, CommonTelechargementPeer::PAYS => 14, CommonTelechargementPeer::TELEPHONE => 15, CommonTelechargementPeer::SIRET => 16, CommonTelechargementPeer::FAX => 17, CommonTelechargementPeer::LOTS => 18, CommonTelechargementPeer::SIRENETRANGER => 19, CommonTelechargementPeer::ADRESSE2 => 20, CommonTelechargementPeer::PRENOM => 21, CommonTelechargementPeer::NOMS_FICHIERS_DCE => 22, CommonTelechargementPeer::OBSERVATION => 23, CommonTelechargementPeer::ACRONYME_PAYS => 24, CommonTelechargementPeer::IFU => 25, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'CONSULTATION_REF' => 2, 'DATETELECHARGEMENT' => 3, 'TIRAGE_PLAN' => 4, 'ID_INSCRIT' => 5, 'ID_ENTREPRISE' => 6, 'SUPPORT' => 7, 'NOM' => 8, 'ADRESSE' => 9, 'EMAIL' => 10, 'ENTREPRISE' => 11, 'CODEPOSTAL' => 12, 'VILLE' => 13, 'PAYS' => 14, 'TELEPHONE' => 15, 'SIRET' => 16, 'FAX' => 17, 'LOTS' => 18, 'SIRENETRANGER' => 19, 'ADRESSE2' => 20, 'PRENOM' => 21, 'NOMS_FICHIERS_DCE' => 22, 'OBSERVATION' => 23, 'ACRONYME_PAYS' => 24, 'IFU' => 25, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'consultation_ref' => 2, 'datetelechargement' => 3, 'tirage_plan' => 4, 'id_inscrit' => 5, 'id_entreprise' => 6, 'support' => 7, 'nom' => 8, 'adresse' => 9, 'email' => 10, 'entreprise' => 11, 'codepostal' => 12, 'ville' => 13, 'pays' => 14, 'telephone' => 15, 'siret' => 16, 'fax' => 17, 'lots' => 18, 'sirenEtranger' => 19, 'adresse2' => 20, 'prenom' => 21, 'noms_fichiers_dce' => 22, 'Observation' => 23, 'acronyme_pays' => 24, 'ifu' => 25, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTelechargementPeer::SUPPORT => array(
            CommonTelechargementPeer::SUPPORT_1,
            CommonTelechargementPeer::SUPPORT_2,
            CommonTelechargementPeer::SUPPORT_3,
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
        $toNames = CommonTelechargementPeer::getFieldNames($toType);
        $key = isset(CommonTelechargementPeer::$fieldKeys[$fromType][$name]) ? CommonTelechargementPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTelechargementPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTelechargementPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTelechargementPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTelechargementPeer::$enumValueSets;
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
        $valueSets = CommonTelechargementPeer::getValueSets();

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
        $values = CommonTelechargementPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTelechargementPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTelechargementPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTelechargementPeer::ID);
            $criteria->addSelectColumn(CommonTelechargementPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTelechargementPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonTelechargementPeer::DATETELECHARGEMENT);
            $criteria->addSelectColumn(CommonTelechargementPeer::TIRAGE_PLAN);
            $criteria->addSelectColumn(CommonTelechargementPeer::ID_INSCRIT);
            $criteria->addSelectColumn(CommonTelechargementPeer::ID_ENTREPRISE);
            $criteria->addSelectColumn(CommonTelechargementPeer::SUPPORT);
            $criteria->addSelectColumn(CommonTelechargementPeer::NOM);
            $criteria->addSelectColumn(CommonTelechargementPeer::ADRESSE);
            $criteria->addSelectColumn(CommonTelechargementPeer::EMAIL);
            $criteria->addSelectColumn(CommonTelechargementPeer::ENTREPRISE);
            $criteria->addSelectColumn(CommonTelechargementPeer::CODEPOSTAL);
            $criteria->addSelectColumn(CommonTelechargementPeer::VILLE);
            $criteria->addSelectColumn(CommonTelechargementPeer::PAYS);
            $criteria->addSelectColumn(CommonTelechargementPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonTelechargementPeer::SIRET);
            $criteria->addSelectColumn(CommonTelechargementPeer::FAX);
            $criteria->addSelectColumn(CommonTelechargementPeer::LOTS);
            $criteria->addSelectColumn(CommonTelechargementPeer::SIRENETRANGER);
            $criteria->addSelectColumn(CommonTelechargementPeer::ADRESSE2);
            $criteria->addSelectColumn(CommonTelechargementPeer::PRENOM);
            $criteria->addSelectColumn(CommonTelechargementPeer::NOMS_FICHIERS_DCE);
            $criteria->addSelectColumn(CommonTelechargementPeer::OBSERVATION);
            $criteria->addSelectColumn(CommonTelechargementPeer::ACRONYME_PAYS);
            $criteria->addSelectColumn(CommonTelechargementPeer::IFU);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.datetelechargement');
            $criteria->addSelectColumn($alias . '.tirage_plan');
            $criteria->addSelectColumn($alias . '.id_inscrit');
            $criteria->addSelectColumn($alias . '.id_entreprise');
            $criteria->addSelectColumn($alias . '.support');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.email');
            $criteria->addSelectColumn($alias . '.entreprise');
            $criteria->addSelectColumn($alias . '.codepostal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.siret');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.lots');
            $criteria->addSelectColumn($alias . '.sirenEtranger');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.noms_fichiers_dce');
            $criteria->addSelectColumn($alias . '.Observation');
            $criteria->addSelectColumn($alias . '.acronyme_pays');
            $criteria->addSelectColumn($alias . '.ifu');
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
        $criteria->setPrimaryTableName(CommonTelechargementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTelechargementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTelechargement
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTelechargementPeer::doSelect($critcopy, $con);
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
        return CommonTelechargementPeer::populateObjects(CommonTelechargementPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTelechargementPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);

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
     * @param      CommonTelechargement $obj A CommonTelechargement object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonTelechargementPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTelechargement object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTelechargement) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTelechargement object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTelechargementPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTelechargement Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTelechargementPeer::$instances[$key])) {
                return CommonTelechargementPeer::$instances[$key];
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
        foreach (CommonTelechargementPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTelechargementPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Telechargement
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
        if ($row[$startcol] === null && $row[$startcol + 1] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 1]));
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

        return array((int) $row[$startcol], (string) $row[$startcol + 1]);
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
        $cls = CommonTelechargementPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTelechargementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTelechargementPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTelechargementPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTelechargement object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTelechargementPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTelechargementPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTelechargementPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTelechargementPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTelechargementPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTelechargementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTelechargementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonTelechargementPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonTelechargementPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonTelechargement objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTelechargement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);
        }

        CommonTelechargementPeer::addSelectColumns($criteria);
        $startcol = CommonTelechargementPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addMultipleJoin(array(
        array(CommonTelechargementPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonTelechargementPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTelechargementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTelechargementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTelechargementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTelechargementPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTelechargement) to $obj2 (CommonConsultation)
                $obj2->addCommonTelechargement($obj1);

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
        $criteria->setPrimaryTableName(CommonTelechargementPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTelechargementPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addMultipleJoin(array(
        array(CommonTelechargementPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonTelechargementPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

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
     * Selects a collection of CommonTelechargement objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTelechargement objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);
        }

        CommonTelechargementPeer::addSelectColumns($criteria);
        $startcol2 = CommonTelechargementPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addMultipleJoin(array(
        array(CommonTelechargementPeer::ORGANISME, CommonConsultationPeer::ORGANISME),
        array(CommonTelechargementPeer::CONSULTATION_REF, CommonConsultationPeer::REFERENCE),
      ), $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTelechargementPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTelechargementPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTelechargementPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTelechargementPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonConsultation rows

            $key2 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTelechargement) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonTelechargement($obj1);
            } // if joined row not null

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
        return Propel::getDatabaseMap(CommonTelechargementPeer::DATABASE_NAME)->getTable(CommonTelechargementPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTelechargementPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTelechargementPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTelechargementTableMap());
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
        return CommonTelechargementPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTelechargement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTelechargement object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTelechargement object
        }

        if ($criteria->containsKey(CommonTelechargementPeer::ID) && $criteria->keyContainsValue(CommonTelechargementPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTelechargementPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTelechargement or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTelechargement object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTelechargementPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTelechargementPeer::ID);
            $value = $criteria->remove(CommonTelechargementPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTelechargementPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTelechargementPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonTelechargementPeer::ORGANISME);
            $value = $criteria->remove(CommonTelechargementPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonTelechargementPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTelechargementPeer::TABLE_NAME);
            }

        } else { // $values is CommonTelechargement object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Telechargement table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTelechargementPeer::TABLE_NAME, $con, CommonTelechargementPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTelechargementPeer::clearInstancePool();
            CommonTelechargementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTelechargement or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTelechargement object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTelechargementPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTelechargement) { // it's a model object
            // invalidate the cache for this single object
            CommonTelechargementPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTelechargementPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonTelechargementPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonTelechargementPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonTelechargementPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTelechargementPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTelechargementPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTelechargement object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTelechargement $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTelechargementPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTelechargementPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTelechargementPeer::DATABASE_NAME, CommonTelechargementPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonTelechargement
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonTelechargementPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTelechargementPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonTelechargementPeer::DATABASE_NAME);
        $criteria->add(CommonTelechargementPeer::ID, $id);
        $criteria->add(CommonTelechargementPeer::ORGANISME, $organisme);
        $v = CommonTelechargementPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonTelechargementPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTelechargementPeer::buildTableMap();

