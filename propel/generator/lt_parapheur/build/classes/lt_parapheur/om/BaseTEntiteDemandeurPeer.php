<?php


/**
 * Base static class for performing query and update operations on the 't_entite_demandeur' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseTEntiteDemandeurPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'lt_parapheur';

    /** the table name for this class */
    const TABLE_NAME = 't_entite_demandeur';

    /** the related Propel class for this table */
    const OM_CLASS = 'TEntiteDemandeur';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TEntiteDemandeurTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 22;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 22;

    /** the column name for the ID_ENTITE_DEMANDEUR field */
    const ID_ENTITE_DEMANDEUR = 't_entite_demandeur.ID_ENTITE_DEMANDEUR';

    /** the column name for the DENOMINATION_FR field */
    const DENOMINATION_FR = 't_entite_demandeur.DENOMINATION_FR';

    /** the column name for the DENOMINATION_AR field */
    const DENOMINATION_AR = 't_entite_demandeur.DENOMINATION_AR';

    /** the column name for the mail field */
    const MAIL = 't_entite_demandeur.mail';

    /** the column name for the telephone field */
    const TELEPHONE = 't_entite_demandeur.telephone';

    /** the column name for the fax field */
    const FAX = 't_entite_demandeur.fax';

    /** the column name for the adresse field */
    const ADRESSE = 't_entite_demandeur.adresse';

    /** the column name for the adresse2 field */
    const ADRESSE2 = 't_entite_demandeur.adresse2';

    /** the column name for the cp field */
    const CP = 't_entite_demandeur.cp';

    /** the column name for the ville field */
    const VILLE = 't_entite_demandeur.ville';

    /** the column name for the path_fr field */
    const PATH_FR = 't_entite_demandeur.path_fr';

    /** the column name for the path_ar field */
    const PATH_AR = 't_entite_demandeur.path_ar';

    /** the column name for the ID_REGION field */
    const ID_REGION = 't_entite_demandeur.ID_REGION';

    /** the column name for the ID_PROVINCE field */
    const ID_PROVINCE = 't_entite_demandeur.ID_PROVINCE';

    /** the column name for the ID_COMMUNE field */
    const ID_COMMUNE = 't_entite_demandeur.ID_COMMUNE';

    /** the column name for the COMMUNE field */
    const COMMUNE = 't_entite_demandeur.COMMUNE';

    /** the column name for the ID_PAYS field */
    const ID_PAYS = 't_entite_demandeur.ID_PAYS';

    /** the column name for the SIGLE_FR field */
    const SIGLE_FR = 't_entite_demandeur.SIGLE_FR';

    /** the column name for the SIGLE_AR field */
    const SIGLE_AR = 't_entite_demandeur.SIGLE_AR';

    /** the column name for the PATH_SIGLE_FR field */
    const PATH_SIGLE_FR = 't_entite_demandeur.PATH_SIGLE_FR';

    /** the column name for the PATH_SIGLE_AR field */
    const PATH_SIGLE_AR = 't_entite_demandeur.PATH_SIGLE_AR';

    /** the column name for the ID_EXTERNE field */
    const ID_EXTERNE = 't_entite_demandeur.ID_EXTERNE';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of TEntiteDemandeur objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array TEntiteDemandeur[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. TEntiteDemandeurPeer::$fieldNames[TEntiteDemandeurPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdEntiteDemandeur', 'DenominationFr', 'DenominationAr', 'Mail', 'Telephone', 'Fax', 'Adresse', 'Adresse2', 'Cp', 'Ville', 'PathFr', 'PathAr', 'IdRegion', 'IdProvince', 'IdCommune', 'Commune', 'IdPays', 'SigleFr', 'SigleAr', 'PathSigleFr', 'PathSigleAr', 'IdExterne', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEntiteDemandeur', 'denominationFr', 'denominationAr', 'mail', 'telephone', 'fax', 'adresse', 'adresse2', 'cp', 'ville', 'pathFr', 'pathAr', 'idRegion', 'idProvince', 'idCommune', 'commune', 'idPays', 'sigleFr', 'sigleAr', 'pathSigleFr', 'pathSigleAr', 'idExterne', ),
        BasePeer::TYPE_COLNAME => array (TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, TEntiteDemandeurPeer::DENOMINATION_FR, TEntiteDemandeurPeer::DENOMINATION_AR, TEntiteDemandeurPeer::MAIL, TEntiteDemandeurPeer::TELEPHONE, TEntiteDemandeurPeer::FAX, TEntiteDemandeurPeer::ADRESSE, TEntiteDemandeurPeer::ADRESSE2, TEntiteDemandeurPeer::CP, TEntiteDemandeurPeer::VILLE, TEntiteDemandeurPeer::PATH_FR, TEntiteDemandeurPeer::PATH_AR, TEntiteDemandeurPeer::ID_REGION, TEntiteDemandeurPeer::ID_PROVINCE, TEntiteDemandeurPeer::ID_COMMUNE, TEntiteDemandeurPeer::COMMUNE, TEntiteDemandeurPeer::ID_PAYS, TEntiteDemandeurPeer::SIGLE_FR, TEntiteDemandeurPeer::SIGLE_AR, TEntiteDemandeurPeer::PATH_SIGLE_FR, TEntiteDemandeurPeer::PATH_SIGLE_AR, TEntiteDemandeurPeer::ID_EXTERNE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENTITE_DEMANDEUR', 'DENOMINATION_FR', 'DENOMINATION_AR', 'MAIL', 'TELEPHONE', 'FAX', 'ADRESSE', 'ADRESSE2', 'CP', 'VILLE', 'PATH_FR', 'PATH_AR', 'ID_REGION', 'ID_PROVINCE', 'ID_COMMUNE', 'COMMUNE', 'ID_PAYS', 'SIGLE_FR', 'SIGLE_AR', 'PATH_SIGLE_FR', 'PATH_SIGLE_AR', 'ID_EXTERNE', ),
        BasePeer::TYPE_FIELDNAME => array ('ID_ENTITE_DEMANDEUR', 'DENOMINATION_FR', 'DENOMINATION_AR', 'mail', 'telephone', 'fax', 'adresse', 'adresse2', 'cp', 'ville', 'path_fr', 'path_ar', 'ID_REGION', 'ID_PROVINCE', 'ID_COMMUNE', 'COMMUNE', 'ID_PAYS', 'SIGLE_FR', 'SIGLE_AR', 'PATH_SIGLE_FR', 'PATH_SIGLE_AR', 'ID_EXTERNE', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. TEntiteDemandeurPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdEntiteDemandeur' => 0, 'DenominationFr' => 1, 'DenominationAr' => 2, 'Mail' => 3, 'Telephone' => 4, 'Fax' => 5, 'Adresse' => 6, 'Adresse2' => 7, 'Cp' => 8, 'Ville' => 9, 'PathFr' => 10, 'PathAr' => 11, 'IdRegion' => 12, 'IdProvince' => 13, 'IdCommune' => 14, 'Commune' => 15, 'IdPays' => 16, 'SigleFr' => 17, 'SigleAr' => 18, 'PathSigleFr' => 19, 'PathSigleAr' => 20, 'IdExterne' => 21, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idEntiteDemandeur' => 0, 'denominationFr' => 1, 'denominationAr' => 2, 'mail' => 3, 'telephone' => 4, 'fax' => 5, 'adresse' => 6, 'adresse2' => 7, 'cp' => 8, 'ville' => 9, 'pathFr' => 10, 'pathAr' => 11, 'idRegion' => 12, 'idProvince' => 13, 'idCommune' => 14, 'commune' => 15, 'idPays' => 16, 'sigleFr' => 17, 'sigleAr' => 18, 'pathSigleFr' => 19, 'pathSigleAr' => 20, 'idExterne' => 21, ),
        BasePeer::TYPE_COLNAME => array (TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR => 0, TEntiteDemandeurPeer::DENOMINATION_FR => 1, TEntiteDemandeurPeer::DENOMINATION_AR => 2, TEntiteDemandeurPeer::MAIL => 3, TEntiteDemandeurPeer::TELEPHONE => 4, TEntiteDemandeurPeer::FAX => 5, TEntiteDemandeurPeer::ADRESSE => 6, TEntiteDemandeurPeer::ADRESSE2 => 7, TEntiteDemandeurPeer::CP => 8, TEntiteDemandeurPeer::VILLE => 9, TEntiteDemandeurPeer::PATH_FR => 10, TEntiteDemandeurPeer::PATH_AR => 11, TEntiteDemandeurPeer::ID_REGION => 12, TEntiteDemandeurPeer::ID_PROVINCE => 13, TEntiteDemandeurPeer::ID_COMMUNE => 14, TEntiteDemandeurPeer::COMMUNE => 15, TEntiteDemandeurPeer::ID_PAYS => 16, TEntiteDemandeurPeer::SIGLE_FR => 17, TEntiteDemandeurPeer::SIGLE_AR => 18, TEntiteDemandeurPeer::PATH_SIGLE_FR => 19, TEntiteDemandeurPeer::PATH_SIGLE_AR => 20, TEntiteDemandeurPeer::ID_EXTERNE => 21, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_ENTITE_DEMANDEUR' => 0, 'DENOMINATION_FR' => 1, 'DENOMINATION_AR' => 2, 'MAIL' => 3, 'TELEPHONE' => 4, 'FAX' => 5, 'ADRESSE' => 6, 'ADRESSE2' => 7, 'CP' => 8, 'VILLE' => 9, 'PATH_FR' => 10, 'PATH_AR' => 11, 'ID_REGION' => 12, 'ID_PROVINCE' => 13, 'ID_COMMUNE' => 14, 'COMMUNE' => 15, 'ID_PAYS' => 16, 'SIGLE_FR' => 17, 'SIGLE_AR' => 18, 'PATH_SIGLE_FR' => 19, 'PATH_SIGLE_AR' => 20, 'ID_EXTERNE' => 21, ),
        BasePeer::TYPE_FIELDNAME => array ('ID_ENTITE_DEMANDEUR' => 0, 'DENOMINATION_FR' => 1, 'DENOMINATION_AR' => 2, 'mail' => 3, 'telephone' => 4, 'fax' => 5, 'adresse' => 6, 'adresse2' => 7, 'cp' => 8, 'ville' => 9, 'path_fr' => 10, 'path_ar' => 11, 'ID_REGION' => 12, 'ID_PROVINCE' => 13, 'ID_COMMUNE' => 14, 'COMMUNE' => 15, 'ID_PAYS' => 16, 'SIGLE_FR' => 17, 'SIGLE_AR' => 18, 'PATH_SIGLE_FR' => 19, 'PATH_SIGLE_AR' => 20, 'ID_EXTERNE' => 21, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
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
        $toNames = TEntiteDemandeurPeer::getFieldNames($toType);
        $key = isset(TEntiteDemandeurPeer::$fieldKeys[$fromType][$name]) ? TEntiteDemandeurPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(TEntiteDemandeurPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, TEntiteDemandeurPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return TEntiteDemandeurPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. TEntiteDemandeurPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TEntiteDemandeurPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::DENOMINATION_FR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::DENOMINATION_AR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::MAIL);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::TELEPHONE);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::FAX);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ADRESSE);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ADRESSE2);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::CP);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::VILLE);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::PATH_FR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::PATH_AR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ID_REGION);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ID_PROVINCE);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ID_COMMUNE);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::COMMUNE);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ID_PAYS);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::SIGLE_FR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::SIGLE_AR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::PATH_SIGLE_FR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::PATH_SIGLE_AR);
            $criteria->addSelectColumn(TEntiteDemandeurPeer::ID_EXTERNE);
        } else {
            $criteria->addSelectColumn($alias . '.ID_ENTITE_DEMANDEUR');
            $criteria->addSelectColumn($alias . '.DENOMINATION_FR');
            $criteria->addSelectColumn($alias . '.DENOMINATION_AR');
            $criteria->addSelectColumn($alias . '.mail');
            $criteria->addSelectColumn($alias . '.telephone');
            $criteria->addSelectColumn($alias . '.fax');
            $criteria->addSelectColumn($alias . '.adresse');
            $criteria->addSelectColumn($alias . '.adresse2');
            $criteria->addSelectColumn($alias . '.cp');
            $criteria->addSelectColumn($alias . '.ville');
            $criteria->addSelectColumn($alias . '.path_fr');
            $criteria->addSelectColumn($alias . '.path_ar');
            $criteria->addSelectColumn($alias . '.ID_REGION');
            $criteria->addSelectColumn($alias . '.ID_PROVINCE');
            $criteria->addSelectColumn($alias . '.ID_COMMUNE');
            $criteria->addSelectColumn($alias . '.COMMUNE');
            $criteria->addSelectColumn($alias . '.ID_PAYS');
            $criteria->addSelectColumn($alias . '.SIGLE_FR');
            $criteria->addSelectColumn($alias . '.SIGLE_AR');
            $criteria->addSelectColumn($alias . '.PATH_SIGLE_FR');
            $criteria->addSelectColumn($alias . '.PATH_SIGLE_AR');
            $criteria->addSelectColumn($alias . '.ID_EXTERNE');
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
        $criteria->setPrimaryTableName(TEntiteDemandeurPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TEntiteDemandeurPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(TEntiteDemandeurPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 TEntiteDemandeur
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TEntiteDemandeurPeer::doSelect($critcopy, $con);
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
        return TEntiteDemandeurPeer::populateObjects(TEntiteDemandeurPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TEntiteDemandeurPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(TEntiteDemandeurPeer::DATABASE_NAME);

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
     * @param      TEntiteDemandeur $obj A TEntiteDemandeur object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdEntiteDemandeur();
            } // if key === null
            TEntiteDemandeurPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A TEntiteDemandeur object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof TEntiteDemandeur) {
                $key = (string) $value->getIdEntiteDemandeur();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or TEntiteDemandeur object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(TEntiteDemandeurPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   TEntiteDemandeur Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(TEntiteDemandeurPeer::$instances[$key])) {
                return TEntiteDemandeurPeer::$instances[$key];
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
        foreach (TEntiteDemandeurPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        TEntiteDemandeurPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_entite_demandeur
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
        $cls = TEntiteDemandeurPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TEntiteDemandeurPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TEntiteDemandeurPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TEntiteDemandeurPeer::addInstanceToPool($obj, $key);
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
     * @return array (TEntiteDemandeur object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TEntiteDemandeurPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TEntiteDemandeurPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TEntiteDemandeurPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TEntiteDemandeurPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TEntiteDemandeurPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(TEntiteDemandeurPeer::DATABASE_NAME)->getTable(TEntiteDemandeurPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseTEntiteDemandeurPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseTEntiteDemandeurPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new TEntiteDemandeurTableMap());
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
        return TEntiteDemandeurPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a TEntiteDemandeur or Criteria object.
     *
     * @param      mixed $values Criteria or TEntiteDemandeur object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from TEntiteDemandeur object
        }

        if ($criteria->containsKey(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR) && $criteria->keyContainsValue(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR.')');
        }


        // Set the correct dbName
        $criteria->setDbName(TEntiteDemandeurPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a TEntiteDemandeur or Criteria object.
     *
     * @param      mixed $values Criteria or TEntiteDemandeur object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(TEntiteDemandeurPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR);
            $value = $criteria->remove(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR);
            if ($value) {
                $selectCriteria->add(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TEntiteDemandeurPeer::TABLE_NAME);
            }

        } else { // $values is TEntiteDemandeur object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(TEntiteDemandeurPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_entite_demandeur table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TEntiteDemandeurPeer::TABLE_NAME, $con, TEntiteDemandeurPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TEntiteDemandeurPeer::clearInstancePool();
            TEntiteDemandeurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a TEntiteDemandeur or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or TEntiteDemandeur object or primary key or array of primary keys
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
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TEntiteDemandeurPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof TEntiteDemandeur) { // it's a model object
            // invalidate the cache for this single object
            TEntiteDemandeurPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(TEntiteDemandeurPeer::DATABASE_NAME);
            $criteria->add(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TEntiteDemandeurPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(TEntiteDemandeurPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            TEntiteDemandeurPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given TEntiteDemandeur object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      TEntiteDemandeur $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TEntiteDemandeurPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TEntiteDemandeurPeer::TABLE_NAME);

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

        return BasePeer::doValidate(TEntiteDemandeurPeer::DATABASE_NAME, TEntiteDemandeurPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return TEntiteDemandeur
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TEntiteDemandeurPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TEntiteDemandeurPeer::DATABASE_NAME);
        $criteria->add(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $pk);

        $v = TEntiteDemandeurPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return TEntiteDemandeur[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TEntiteDemandeurPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TEntiteDemandeurPeer::DATABASE_NAME);
            $criteria->add(TEntiteDemandeurPeer::ID_ENTITE_DEMANDEUR, $pks, Criteria::IN);
            $objs = TEntiteDemandeurPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseTEntiteDemandeurPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTEntiteDemandeurPeer::buildTableMap();

