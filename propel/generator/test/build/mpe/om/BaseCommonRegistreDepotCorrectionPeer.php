<?php


/**
 * Base static class for performing query and update operations on the 'registre_depot_correction' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonRegistreDepotCorrectionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'registre_depot_correction';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonRegistreDepotCorrection';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonRegistreDepotCorrectionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 19;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 19;

    /** the column name for the id field */
    const ID = 'registre_depot_correction.id';

    /** the column name for the organisme field */
    const ORGANISME = 'registre_depot_correction.organisme';

    /** the column name for the id_offre field */
    const ID_OFFRE = 'registre_depot_correction.id_offre';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'registre_depot_correction.consultation_ref';

    /** the column name for the nom_entreprise field */
    const NOM_ENTREPRISE = 'registre_depot_correction.nom_entreprise';

    /** the column name for the nom field */
    const NOM = 'registre_depot_correction.nom';

    /** the column name for the prenom field */
    const PRENOM = 'registre_depot_correction.prenom';

    /** the column name for the mail field */
    const MAIL = 'registre_depot_correction.mail';

    /** the column name for the adresse field */
    const ADRESSE = 'registre_depot_correction.adresse';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 'registre_depot_correction.adresse2';

    /** the column name for the telephone field */
    const TELEPHONE = 'registre_depot_correction.telephone';

    /** the column name for the fax field */
    const FAX = 'registre_depot_correction.fax';

    /** the column name for the code_postal field */
    const CODE_POSTAL = 'registre_depot_correction.code_postal';

    /** the column name for the ville field */
    const VILLE = 'registre_depot_correction.ville';

    /** the column name for the pays field */
    const PAYS = 'registre_depot_correction.pays';

    /** the column name for the ville_rc field */
    const VILLE_RC = 'registre_depot_correction.ville_rc';

    /** the column name for the numero_rc field */
    const NUMERO_RC = 'registre_depot_correction.numero_rc';

    /** the column name for the identifiant_national field */
    const IDENTIFIANT_NATIONAL = 'registre_depot_correction.identifiant_national';

    /** the column name for the ifu_entreprise field */
    const IFU_ENTREPRISE = 'registre_depot_correction.ifu_entreprise';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonRegistreDepotCorrection objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonRegistreDepotCorrection[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonRegistreDepotCorrectionPeer::$fieldNames[CommonRegistreDepotCorrectionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdOffre', 'ConsultationRef', 'NomEntreprise', 'Nom', 'Prenom', 'Mail', 'Adresse', 'Adresse2', 'Telephone', 'Fax', 'CodePostal', 'Ville', 'Pays', 'VilleRc', 'NumeroRc', 'IdentifiantNational', 'IfuEntreprise', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idOffre', 'consultationRef', 'nomEntreprise', 'nom', 'prenom', 'mail', 'adresse', 'adresse2', 'telephone', 'fax', 'codePostal', 'ville', 'pays', 'villeRc', 'numeroRc', 'identifiantNational', 'ifuEntreprise', ),
        BasePeer::TYPE_COLNAME => array (CommonRegistreDepotCorrectionPeer::ID, CommonRegistreDepotCorrectionPeer::ORGANISME, CommonRegistreDepotCorrectionPeer::ID_OFFRE, CommonRegistreDepotCorrectionPeer::CONSULTATION_REF, CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE, CommonRegistreDepotCorrectionPeer::NOM, CommonRegistreDepotCorrectionPeer::PRENOM, CommonRegistreDepotCorrectionPeer::MAIL, CommonRegistreDepotCorrectionPeer::ADRESSE, CommonRegistreDepotCorrectionPeer::ADRESSE2, CommonRegistreDepotCorrectionPeer::TELEPHONE, CommonRegistreDepotCorrectionPeer::FAX, CommonRegistreDepotCorrectionPeer::CODE_POSTAL, CommonRegistreDepotCorrectionPeer::VILLE, CommonRegistreDepotCorrectionPeer::PAYS, CommonRegistreDepotCorrectionPeer::VILLE_RC, CommonRegistreDepotCorrectionPeer::NUMERO_RC, CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL, CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_OFFRE', 'CONSULTATION_REF', 'NOM_ENTREPRISE', 'NOM', 'PRENOM', 'MAIL', 'ADRESSE', 'ADRESSE2', 'TELEPHONE', 'FAX', 'CODE_POSTAL', 'VILLE', 'PAYS', 'VILLE_RC', 'NUMERO_RC', 'IDENTIFIANT_NATIONAL', 'IFU_ENTREPRISE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_offre', 'consultation_ref', 'nom_entreprise', 'nom', 'prenom', 'mail', 'adresse', 'adresse2', 'telephone', 'fax', 'code_postal', 'ville', 'pays', 'ville_rc', 'numero_rc', 'identifiant_national', 'ifu_entreprise', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonRegistreDepotCorrectionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdOffre' => 2, 'ConsultationRef' => 3, 'NomEntreprise' => 4, 'Nom' => 5, 'Prenom' => 6, 'Mail' => 7, 'Adresse' => 8, 'Adresse2' => 9, 'Telephone' => 10, 'Fax' => 11, 'CodePostal' => 12, 'Ville' => 13, 'Pays' => 14, 'VilleRc' => 15, 'NumeroRc' => 16, 'IdentifiantNational' => 17, 'IfuEntreprise' => 18, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idOffre' => 2, 'consultationRef' => 3, 'nomEntreprise' => 4, 'nom' => 5, 'prenom' => 6, 'mail' => 7, 'adresse' => 8, 'adresse2' => 9, 'telephone' => 10, 'fax' => 11, 'codePostal' => 12, 'ville' => 13, 'pays' => 14, 'villeRc' => 15, 'numeroRc' => 16, 'identifiantNational' => 17, 'ifuEntreprise' => 18, ),
        BasePeer::TYPE_COLNAME => array (CommonRegistreDepotCorrectionPeer::ID => 0, CommonRegistreDepotCorrectionPeer::ORGANISME => 1, CommonRegistreDepotCorrectionPeer::ID_OFFRE => 2, CommonRegistreDepotCorrectionPeer::CONSULTATION_REF => 3, CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE => 4, CommonRegistreDepotCorrectionPeer::NOM => 5, CommonRegistreDepotCorrectionPeer::PRENOM => 6, CommonRegistreDepotCorrectionPeer::MAIL => 7, CommonRegistreDepotCorrectionPeer::ADRESSE => 8, CommonRegistreDepotCorrectionPeer::ADRESSE2 => 9, CommonRegistreDepotCorrectionPeer::TELEPHONE => 10, CommonRegistreDepotCorrectionPeer::FAX => 11, CommonRegistreDepotCorrectionPeer::CODE_POSTAL => 12, CommonRegistreDepotCorrectionPeer::VILLE => 13, CommonRegistreDepotCorrectionPeer::PAYS => 14, CommonRegistreDepotCorrectionPeer::VILLE_RC => 15, CommonRegistreDepotCorrectionPeer::NUMERO_RC => 16, CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL => 17, CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE => 18, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_OFFRE' => 2, 'CONSULTATION_REF' => 3, 'NOM_ENTREPRISE' => 4, 'NOM' => 5, 'PRENOM' => 6, 'MAIL' => 7, 'ADRESSE' => 8, 'ADRESSE2' => 9, 'TELEPHONE' => 10, 'FAX' => 11, 'CODE_POSTAL' => 12, 'VILLE' => 13, 'PAYS' => 14, 'VILLE_RC' => 15, 'NUMERO_RC' => 16, 'IDENTIFIANT_NATIONAL' => 17, 'IFU_ENTREPRISE' => 18, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_offre' => 2, 'consultation_ref' => 3, 'nom_entreprise' => 4, 'nom' => 5, 'prenom' => 6, 'mail' => 7, 'adresse' => 8, 'adresse2' => 9, 'telephone' => 10, 'fax' => 11, 'code_postal' => 12, 'ville' => 13, 'pays' => 14, 'ville_rc' => 15, 'numero_rc' => 16, 'identifiant_national' => 17, 'ifu_entreprise' => 18, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, )
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
        $toNames = CommonRegistreDepotCorrectionPeer::getFieldNames($toType);
        $key = isset(CommonRegistreDepotCorrectionPeer::$fieldKeys[$fromType][$name]) ? CommonRegistreDepotCorrectionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonRegistreDepotCorrectionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonRegistreDepotCorrectionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonRegistreDepotCorrectionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonRegistreDepotCorrectionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonRegistreDepotCorrectionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::ID);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::ORGANISME);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::ID_OFFRE);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::NOM_ENTREPRISE);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::NOM);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::PRENOM);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::MAIL);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::ADRESSE);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::ADRESSE2);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::TELEPHONE);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::FAX);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::CODE_POSTAL);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::VILLE);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::PAYS);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::VILLE_RC);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::NUMERO_RC);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::IDENTIFIANT_NATIONAL);
            $criteria->addSelectColumn(CommonRegistreDepotCorrectionPeer::IFU_ENTREPRISE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_offre');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.nom_entreprise');
            $criteria->addSelectColumn($alias . '.nom');
            $criteria->addSelectColumn($alias . '.prenom');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.code_postal');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.pays');
            $criteria->addSelectColumn($alias . '.ville_rc');
            $criteria->addSelectColumn($alias . '.numero_rc');
            $criteria->addSelectColumn($alias . '.identifiant_national');
            $criteria->addSelectColumn($alias . '.ifu_entreprise');
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
        $criteria->setPrimaryTableName(CommonRegistreDepotCorrectionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonRegistreDepotCorrectionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonRegistreDepotCorrectionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonRegistreDepotCorrection
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonRegistreDepotCorrectionPeer::doSelect($critcopy, $con);
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
        return CommonRegistreDepotCorrectionPeer::populateObjects(CommonRegistreDepotCorrectionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonRegistreDepotCorrectionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);

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
     * @param      CommonRegistreDepotCorrection $obj A CommonRegistreDepotCorrection object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonRegistreDepotCorrectionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonRegistreDepotCorrection object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonRegistreDepotCorrection) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonRegistreDepotCorrection object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonRegistreDepotCorrectionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonRegistreDepotCorrection Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonRegistreDepotCorrectionPeer::$instances[$key])) {
                return CommonRegistreDepotCorrectionPeer::$instances[$key];
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
        foreach (CommonRegistreDepotCorrectionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonRegistreDepotCorrectionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to registre_depot_correction
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
        $cls = CommonRegistreDepotCorrectionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonRegistreDepotCorrectionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonRegistreDepotCorrectionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonRegistreDepotCorrectionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonRegistreDepotCorrection object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonRegistreDepotCorrectionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonRegistreDepotCorrectionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonRegistreDepotCorrectionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonRegistreDepotCorrectionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonRegistreDepotCorrectionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonRegistreDepotCorrectionPeer::DATABASE_NAME)->getTable(CommonRegistreDepotCorrectionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonRegistreDepotCorrectionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonRegistreDepotCorrectionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonRegistreDepotCorrectionTableMap());
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
        return CommonRegistreDepotCorrectionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonRegistreDepotCorrection or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRegistreDepotCorrection object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonRegistreDepotCorrection object
        }

        if ($criteria->containsKey(CommonRegistreDepotCorrectionPeer::ID) && $criteria->keyContainsValue(CommonRegistreDepotCorrectionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonRegistreDepotCorrectionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonRegistreDepotCorrection or Criteria object.
     *
     * @param      mixed $values Criteria or CommonRegistreDepotCorrection object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonRegistreDepotCorrectionPeer::ID);
            $value = $criteria->remove(CommonRegistreDepotCorrectionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonRegistreDepotCorrectionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRegistreDepotCorrectionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonRegistreDepotCorrectionPeer::ORGANISME);
            $value = $criteria->remove(CommonRegistreDepotCorrectionPeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonRegistreDepotCorrectionPeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonRegistreDepotCorrectionPeer::TABLE_NAME);
            }

        } else { // $values is CommonRegistreDepotCorrection object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the registre_depot_correction table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonRegistreDepotCorrectionPeer::TABLE_NAME, $con, CommonRegistreDepotCorrectionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonRegistreDepotCorrectionPeer::clearInstancePool();
            CommonRegistreDepotCorrectionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonRegistreDepotCorrection or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonRegistreDepotCorrection object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonRegistreDepotCorrectionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonRegistreDepotCorrection) { // it's a model object
            // invalidate the cache for this single object
            CommonRegistreDepotCorrectionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonRegistreDepotCorrectionPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonRegistreDepotCorrectionPeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonRegistreDepotCorrectionPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonRegistreDepotCorrectionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonRegistreDepotCorrection object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonRegistreDepotCorrection $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonRegistreDepotCorrectionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, CommonRegistreDepotCorrectionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonRegistreDepotCorrection
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonRegistreDepotCorrectionPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonRegistreDepotCorrectionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonRegistreDepotCorrectionPeer::DATABASE_NAME);
        $criteria->add(CommonRegistreDepotCorrectionPeer::ID, $id);
        $criteria->add(CommonRegistreDepotCorrectionPeer::ORGANISME, $organisme);
        $v = CommonRegistreDepotCorrectionPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonRegistreDepotCorrectionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonRegistreDepotCorrectionPeer::buildTableMap();

