<?php


/**
 * Base static class for performing query and update operations on the 'Annonce_Press_PieceJointe' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonAnnoncePressPieceJointePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Annonce_Press_PieceJointe';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonAnnoncePressPieceJointe';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonAnnoncePressPieceJointeTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id field */
    const ID = 'Annonce_Press_PieceJointe.id';

    /** the column name for the organisme field */
    const ORGANISME = 'Annonce_Press_PieceJointe.organisme';

    /** the column name for the id_annonce_press field */
    const ID_ANNONCE_PRESS = 'Annonce_Press_PieceJointe.id_annonce_press';

    /** the column name for the nom_fichier field */
    const NOM_FICHIER = 'Annonce_Press_PieceJointe.nom_fichier';

    /** the column name for the piece field */
    const PIECE = 'Annonce_Press_PieceJointe.piece';

    /** the column name for the horodatage field */
    const HORODATAGE = 'Annonce_Press_PieceJointe.horodatage';

    /** the column name for the untrusteddate field */
    const UNTRUSTEDDATE = 'Annonce_Press_PieceJointe.untrusteddate';

    /** the column name for the taille field */
    const TAILLE = 'Annonce_Press_PieceJointe.taille';

    /** the column name for the fichier_genere field */
    const FICHIER_GENERE = 'Annonce_Press_PieceJointe.fichier_genere';

    /** The enumerated values for the fichier_genere field */
    const FICHIER_GENERE_0 = '0';
    const FICHIER_GENERE_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonAnnoncePressPieceJointe objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonAnnoncePressPieceJointe[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnoncePressPieceJointePeer::$fieldNames[CommonAnnoncePressPieceJointePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Organisme', 'IdAnnoncePress', 'NomFichier', 'Piece', 'Horodatage', 'Untrusteddate', 'Taille', 'FichierGenere', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'organisme', 'idAnnoncePress', 'nomFichier', 'piece', 'horodatage', 'untrusteddate', 'taille', 'fichierGenere', ),
        BasePeer::TYPE_COLNAME => array (CommonAnnoncePressPieceJointePeer::ID, CommonAnnoncePressPieceJointePeer::ORGANISME, CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, CommonAnnoncePressPieceJointePeer::NOM_FICHIER, CommonAnnoncePressPieceJointePeer::PIECE, CommonAnnoncePressPieceJointePeer::HORODATAGE, CommonAnnoncePressPieceJointePeer::UNTRUSTEDDATE, CommonAnnoncePressPieceJointePeer::TAILLE, CommonAnnoncePressPieceJointePeer::FICHIER_GENERE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ORGANISME', 'ID_ANNONCE_PRESS', 'NOM_FICHIER', 'PIECE', 'HORODATAGE', 'UNTRUSTEDDATE', 'TAILLE', 'FICHIER_GENERE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'organisme', 'id_annonce_press', 'nom_fichier', 'piece', 'horodatage', 'untrusteddate', 'taille', 'fichier_genere', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonAnnoncePressPieceJointePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Organisme' => 1, 'IdAnnoncePress' => 2, 'NomFichier' => 3, 'Piece' => 4, 'Horodatage' => 5, 'Untrusteddate' => 6, 'Taille' => 7, 'FichierGenere' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'organisme' => 1, 'idAnnoncePress' => 2, 'nomFichier' => 3, 'piece' => 4, 'horodatage' => 5, 'untrusteddate' => 6, 'taille' => 7, 'fichierGenere' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonAnnoncePressPieceJointePeer::ID => 0, CommonAnnoncePressPieceJointePeer::ORGANISME => 1, CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS => 2, CommonAnnoncePressPieceJointePeer::NOM_FICHIER => 3, CommonAnnoncePressPieceJointePeer::PIECE => 4, CommonAnnoncePressPieceJointePeer::HORODATAGE => 5, CommonAnnoncePressPieceJointePeer::UNTRUSTEDDATE => 6, CommonAnnoncePressPieceJointePeer::TAILLE => 7, CommonAnnoncePressPieceJointePeer::FICHIER_GENERE => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ORGANISME' => 1, 'ID_ANNONCE_PRESS' => 2, 'NOM_FICHIER' => 3, 'PIECE' => 4, 'HORODATAGE' => 5, 'UNTRUSTEDDATE' => 6, 'TAILLE' => 7, 'FICHIER_GENERE' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'organisme' => 1, 'id_annonce_press' => 2, 'nom_fichier' => 3, 'piece' => 4, 'horodatage' => 5, 'untrusteddate' => 6, 'taille' => 7, 'fichier_genere' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonAnnoncePressPieceJointePeer::FICHIER_GENERE => array(
            CommonAnnoncePressPieceJointePeer::FICHIER_GENERE_0,
            CommonAnnoncePressPieceJointePeer::FICHIER_GENERE_1,
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
        $toNames = CommonAnnoncePressPieceJointePeer::getFieldNames($toType);
        $key = isset(CommonAnnoncePressPieceJointePeer::$fieldKeys[$fromType][$name]) ? CommonAnnoncePressPieceJointePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonAnnoncePressPieceJointePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonAnnoncePressPieceJointePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonAnnoncePressPieceJointePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonAnnoncePressPieceJointePeer::$enumValueSets;
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
        $valueSets = CommonAnnoncePressPieceJointePeer::getValueSets();

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
        $values = CommonAnnoncePressPieceJointePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonAnnoncePressPieceJointePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonAnnoncePressPieceJointePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::ID);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::ORGANISME);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::NOM_FICHIER);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::PIECE);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::HORODATAGE);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::UNTRUSTEDDATE);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::TAILLE);
            $criteria->addSelectColumn(CommonAnnoncePressPieceJointePeer::FICHIER_GENERE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.id_annonce_press');
            $criteria->addSelectColumn($alias . '.nom_fichier');
            $criteria->addSelectColumn($alias . '.piece');
            $criteria->addSelectColumn($alias . '.horodatage');
            $criteria->addSelectColumn($alias . '.untrusteddate');
            $criteria->addSelectColumn($alias . '.taille');
            $criteria->addSelectColumn($alias . '.fichier_genere');
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
        $criteria->setPrimaryTableName(CommonAnnoncePressPieceJointePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePressPieceJointePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonAnnoncePressPieceJointe
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonAnnoncePressPieceJointePeer::doSelect($critcopy, $con);
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
        return CommonAnnoncePressPieceJointePeer::populateObjects(CommonAnnoncePressPieceJointePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonAnnoncePressPieceJointePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

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
     * @param      CommonAnnoncePressPieceJointe $obj A CommonAnnoncePressPieceJointe object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getOrganisme()));
            } // if key === null
            CommonAnnoncePressPieceJointePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonAnnoncePressPieceJointe object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonAnnoncePressPieceJointe) {
                $key = serialize(array((string) $value->getId(), (string) $value->getOrganisme()));
            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonAnnoncePressPieceJointe object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonAnnoncePressPieceJointePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonAnnoncePressPieceJointe Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonAnnoncePressPieceJointePeer::$instances[$key])) {
                return CommonAnnoncePressPieceJointePeer::$instances[$key];
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
        foreach (CommonAnnoncePressPieceJointePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonAnnoncePressPieceJointePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Annonce_Press_PieceJointe
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
        $cls = CommonAnnoncePressPieceJointePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonAnnoncePressPieceJointePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonAnnoncePressPieceJointePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonAnnoncePressPieceJointePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonAnnoncePressPieceJointe object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonAnnoncePressPieceJointePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonAnnoncePressPieceJointePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonAnnoncePressPieceJointePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonAnnoncePressPieceJointePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonAnnoncePressPieceJointePeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonAnnoncePress table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonAnnoncePress(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonAnnoncePressPieceJointePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePressPieceJointePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, CommonAnnoncePressPeer::ID, $join_behavior);

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
     * Selects a collection of CommonAnnoncePressPieceJointe objects pre-filled with their CommonAnnoncePress objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnoncePressPieceJointe objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonAnnoncePress(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
        }

        CommonAnnoncePressPieceJointePeer::addSelectColumns($criteria);
        $startcol = CommonAnnoncePressPieceJointePeer::NUM_HYDRATE_COLUMNS;
        CommonAnnoncePressPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, CommonAnnoncePressPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnoncePressPieceJointePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnoncePressPieceJointePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonAnnoncePressPieceJointePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnoncePressPieceJointePeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonAnnoncePressPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonAnnoncePressPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAnnoncePressPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonAnnoncePressPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonAnnoncePressPieceJointe) to $obj2 (CommonAnnoncePress)
                $obj2->addCommonAnnoncePressPieceJointe($obj1);

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
        $criteria->setPrimaryTableName(CommonAnnoncePressPieceJointePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonAnnoncePressPieceJointePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, CommonAnnoncePressPeer::ID, $join_behavior);

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
     * Selects a collection of CommonAnnoncePressPieceJointe objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonAnnoncePressPieceJointe objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
        }

        CommonAnnoncePressPieceJointePeer::addSelectColumns($criteria);
        $startcol2 = CommonAnnoncePressPieceJointePeer::NUM_HYDRATE_COLUMNS;

        CommonAnnoncePressPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonAnnoncePressPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonAnnoncePressPieceJointePeer::ID_ANNONCE_PRESS, CommonAnnoncePressPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonAnnoncePressPieceJointePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonAnnoncePressPieceJointePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonAnnoncePressPieceJointePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonAnnoncePressPieceJointePeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonAnnoncePress rows

            $key2 = CommonAnnoncePressPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonAnnoncePressPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonAnnoncePressPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonAnnoncePressPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonAnnoncePressPieceJointe) to the collection in $obj2 (CommonAnnoncePress)
                $obj2->addCommonAnnoncePressPieceJointe($obj1);
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
        return Propel::getDatabaseMap(CommonAnnoncePressPieceJointePeer::DATABASE_NAME)->getTable(CommonAnnoncePressPieceJointePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonAnnoncePressPieceJointePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonAnnoncePressPieceJointePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonAnnoncePressPieceJointeTableMap());
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
        return CommonAnnoncePressPieceJointePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonAnnoncePressPieceJointe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnoncePressPieceJointe object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonAnnoncePressPieceJointe object
        }

        if ($criteria->containsKey(CommonAnnoncePressPieceJointePeer::ID) && $criteria->keyContainsValue(CommonAnnoncePressPieceJointePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonAnnoncePressPieceJointePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonAnnoncePressPieceJointe or Criteria object.
     *
     * @param      mixed $values Criteria or CommonAnnoncePressPieceJointe object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonAnnoncePressPieceJointePeer::ID);
            $value = $criteria->remove(CommonAnnoncePressPieceJointePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonAnnoncePressPieceJointePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnoncePressPieceJointePeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonAnnoncePressPieceJointePeer::ORGANISME);
            $value = $criteria->remove(CommonAnnoncePressPieceJointePeer::ORGANISME);
            if ($value) {
                $selectCriteria->add(CommonAnnoncePressPieceJointePeer::ORGANISME, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonAnnoncePressPieceJointePeer::TABLE_NAME);
            }

        } else { // $values is CommonAnnoncePressPieceJointe object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Annonce_Press_PieceJointe table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonAnnoncePressPieceJointePeer::TABLE_NAME, $con, CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonAnnoncePressPieceJointePeer::clearInstancePool();
            CommonAnnoncePressPieceJointePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonAnnoncePressPieceJointe or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonAnnoncePressPieceJointe object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonAnnoncePressPieceJointePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonAnnoncePressPieceJointe) { // it's a model object
            // invalidate the cache for this single object
            CommonAnnoncePressPieceJointePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonAnnoncePressPieceJointePeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonAnnoncePressPieceJointePeer::ORGANISME, $value[1]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonAnnoncePressPieceJointePeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonAnnoncePressPieceJointePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonAnnoncePressPieceJointe object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonAnnoncePressPieceJointe $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonAnnoncePressPieceJointePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, CommonAnnoncePressPieceJointePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   string $organisme
     * @param      PropelPDO $con
     * @return   CommonAnnoncePressPieceJointe
     */
    public static function retrieveByPK($id, $organisme, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $organisme));
         if (null !== ($obj = CommonAnnoncePressPieceJointePeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonAnnoncePressPieceJointePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonAnnoncePressPieceJointePeer::DATABASE_NAME);
        $criteria->add(CommonAnnoncePressPieceJointePeer::ID, $id);
        $criteria->add(CommonAnnoncePressPieceJointePeer::ORGANISME, $organisme);
        $v = CommonAnnoncePressPieceJointePeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonAnnoncePressPieceJointePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonAnnoncePressPieceJointePeer::buildTableMap();

