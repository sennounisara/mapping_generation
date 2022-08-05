<?php


/**
 * Base static class for performing query and update operations on the 'Pieces_DCE' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPiecesDCEPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Pieces_DCE';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonPiecesDCE';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonPiecesDCETableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 9;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 9;

    /** the column name for the id field */
    const ID = 'Pieces_DCE.id';

    /** the column name for the nom_Piece field */
    const NOM_PIECE = 'Pieces_DCE.nom_Piece';

    /** the column name for the id_blob field */
    const ID_BLOB = 'Pieces_DCE.id_blob';

    /** the column name for the ref_consultation field */
    const REF_CONSULTATION = 'Pieces_DCE.ref_consultation';

    /** the column name for the organisme_consultation field */
    const ORGANISME_CONSULTATION = 'Pieces_DCE.organisme_consultation';

    /** the column name for the document_Redac field */
    const DOCUMENT_REDAC = 'Pieces_DCE.document_Redac';

    /** the column name for the id_Redac field */
    const ID_REDAC = 'Pieces_DCE.id_Redac';

    /** the column name for the statut field */
    const STATUT = 'Pieces_DCE.statut';

    /** the column name for the Type_Piece field */
    const TYPE_PIECE = 'Pieces_DCE.Type_Piece';

    /** The enumerated values for the document_Redac field */
    const DOCUMENT_REDAC_0 = '0';
    const DOCUMENT_REDAC_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonPiecesDCE objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonPiecesDCE[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonPiecesDCEPeer::$fieldNames[CommonPiecesDCEPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'NomPiece', 'IdBlob', 'RefConsultation', 'OrganismeConsultation', 'DocumentRedac', 'IdRedac', 'Statut', 'TypePiece', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'nomPiece', 'idBlob', 'refConsultation', 'organismeConsultation', 'documentRedac', 'idRedac', 'statut', 'typePiece', ),
        BasePeer::TYPE_COLNAME => array (CommonPiecesDCEPeer::ID, CommonPiecesDCEPeer::NOM_PIECE, CommonPiecesDCEPeer::ID_BLOB, CommonPiecesDCEPeer::REF_CONSULTATION, CommonPiecesDCEPeer::ORGANISME_CONSULTATION, CommonPiecesDCEPeer::DOCUMENT_REDAC, CommonPiecesDCEPeer::ID_REDAC, CommonPiecesDCEPeer::STATUT, CommonPiecesDCEPeer::TYPE_PIECE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NOM_PIECE', 'ID_BLOB', 'REF_CONSULTATION', 'ORGANISME_CONSULTATION', 'DOCUMENT_REDAC', 'ID_REDAC', 'STATUT', 'TYPE_PIECE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'nom_Piece', 'id_blob', 'ref_consultation', 'organisme_consultation', 'document_Redac', 'id_Redac', 'statut', 'Type_Piece', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonPiecesDCEPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'NomPiece' => 1, 'IdBlob' => 2, 'RefConsultation' => 3, 'OrganismeConsultation' => 4, 'DocumentRedac' => 5, 'IdRedac' => 6, 'Statut' => 7, 'TypePiece' => 8, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'nomPiece' => 1, 'idBlob' => 2, 'refConsultation' => 3, 'organismeConsultation' => 4, 'documentRedac' => 5, 'idRedac' => 6, 'statut' => 7, 'typePiece' => 8, ),
        BasePeer::TYPE_COLNAME => array (CommonPiecesDCEPeer::ID => 0, CommonPiecesDCEPeer::NOM_PIECE => 1, CommonPiecesDCEPeer::ID_BLOB => 2, CommonPiecesDCEPeer::REF_CONSULTATION => 3, CommonPiecesDCEPeer::ORGANISME_CONSULTATION => 4, CommonPiecesDCEPeer::DOCUMENT_REDAC => 5, CommonPiecesDCEPeer::ID_REDAC => 6, CommonPiecesDCEPeer::STATUT => 7, CommonPiecesDCEPeer::TYPE_PIECE => 8, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NOM_PIECE' => 1, 'ID_BLOB' => 2, 'REF_CONSULTATION' => 3, 'ORGANISME_CONSULTATION' => 4, 'DOCUMENT_REDAC' => 5, 'ID_REDAC' => 6, 'STATUT' => 7, 'TYPE_PIECE' => 8, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'nom_Piece' => 1, 'id_blob' => 2, 'ref_consultation' => 3, 'organisme_consultation' => 4, 'document_Redac' => 5, 'id_Redac' => 6, 'statut' => 7, 'Type_Piece' => 8, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonPiecesDCEPeer::DOCUMENT_REDAC => array(
            CommonPiecesDCEPeer::DOCUMENT_REDAC_0,
            CommonPiecesDCEPeer::DOCUMENT_REDAC_1,
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
        $toNames = CommonPiecesDCEPeer::getFieldNames($toType);
        $key = isset(CommonPiecesDCEPeer::$fieldKeys[$fromType][$name]) ? CommonPiecesDCEPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonPiecesDCEPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonPiecesDCEPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonPiecesDCEPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonPiecesDCEPeer::$enumValueSets;
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
        $valueSets = CommonPiecesDCEPeer::getValueSets();

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
        $values = CommonPiecesDCEPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonPiecesDCEPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonPiecesDCEPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonPiecesDCEPeer::ID);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::NOM_PIECE);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::REF_CONSULTATION);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::ORGANISME_CONSULTATION);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::DOCUMENT_REDAC);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::ID_REDAC);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::STATUT);
            $criteria->addSelectColumn(CommonPiecesDCEPeer::TYPE_PIECE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.nom_Piece');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.ref_consultation');
            $criteria->addSelectColumn($alias . '.organisme_consultation');
            $criteria->addSelectColumn($alias . '.document_Redac');
            $criteria->addSelectColumn($alias . '.id_Redac');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.Type_Piece');
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
        $criteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPiecesDCE
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonPiecesDCEPeer::doSelect($critcopy, $con);
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
        return CommonPiecesDCEPeer::populateObjects(CommonPiecesDCEPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

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
     * @param      CommonPiecesDCE $obj A CommonPiecesDCE object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonPiecesDCEPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonPiecesDCE object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonPiecesDCE) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonPiecesDCE object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonPiecesDCEPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonPiecesDCE Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonPiecesDCEPeer::$instances[$key])) {
                return CommonPiecesDCEPeer::$instances[$key];
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
        foreach (CommonPiecesDCEPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonPiecesDCEPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Pieces_DCE
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
        $cls = CommonPiecesDCEPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonPiecesDCEPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonPiecesDCEPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonPiecesDCE object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonPiecesDCEPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonPiecesDCEPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonPiecesDCEPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByRefConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultationRelatedByRefConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPiecesDCEPeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

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
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByOrganismeConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonConsultationRelatedByOrganismeConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, CommonConsultationPeer::ORGANISME, $join_behavior);

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
     * Selects a collection of CommonPiecesDCE objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPiecesDCE objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultationRelatedByRefConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);
        }

        CommonPiecesDCEPeer::addSelectColumns($criteria);
        $startcol = CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonPiecesDCEPeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPiecesDCEPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonPiecesDCEPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPiecesDCEPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonPiecesDCE) to $obj2 (CommonConsultation)
                $obj2->addCommonPiecesDCERelatedByRefConsultation($obj1);

            } // if joined row was not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonPiecesDCE objects pre-filled with their CommonConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPiecesDCE objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonConsultationRelatedByOrganismeConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);
        }

        CommonPiecesDCEPeer::addSelectColumns($criteria);
        $startcol = CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS;
        CommonConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, CommonConsultationPeer::ORGANISME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPiecesDCEPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonPiecesDCEPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPiecesDCEPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonPiecesDCE) to $obj2 (CommonConsultation)
                $obj2->addCommonPiecesDCERelatedByOrganismeConsultation($obj1);

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
        $criteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonPiecesDCEPeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $criteria->addJoin(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, CommonConsultationPeer::ORGANISME, $join_behavior);

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
     * Selects a collection of CommonPiecesDCE objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPiecesDCE objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);
        }

        CommonPiecesDCEPeer::addSelectColumns($criteria);
        $startcol2 = CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        CommonConsultationPeer::addSelectColumns($criteria);
        $startcol4 = $startcol3 + CommonConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonPiecesDCEPeer::REF_CONSULTATION, CommonConsultationPeer::REFERENCE, $join_behavior);

        $criteria->addJoin(CommonPiecesDCEPeer::ORGANISME_CONSULTATION, CommonConsultationPeer::ORGANISME, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPiecesDCEPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPiecesDCEPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPiecesDCEPeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonPiecesDCE) to the collection in $obj2 (CommonConsultation)
                $obj2->addCommonPiecesDCERelatedByRefConsultation($obj1);
            } // if joined row not null

            // Add objects for joined CommonConsultation rows

            $key3 = CommonConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol3);
            if ($key3 !== null) {
                $obj3 = CommonConsultationPeer::getInstanceFromPool($key3);
                if (!$obj3) {

                    $cls = CommonConsultationPeer::getOMClass();

                    $obj3 = new $cls();
                    $obj3->hydrate($row, $startcol3);
                    CommonConsultationPeer::addInstanceToPool($obj3, $key3);
                } // if obj3 loaded

                // Add the $obj1 (CommonPiecesDCE) to the collection in $obj3 (CommonConsultation)
                $obj3->addCommonPiecesDCERelatedByOrganismeConsultation($obj1);
            } // if joined row not null

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByRefConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonConsultationRelatedByRefConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Returns the number of rows matching criteria, joining the related CommonConsultationRelatedByOrganismeConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinAllExceptCommonConsultationRelatedByOrganismeConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesDCEPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY should not affect count

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
    
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
     * Selects a collection of CommonPiecesDCE objects pre-filled with all related objects except CommonConsultationRelatedByRefConsultation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPiecesDCE objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonConsultationRelatedByRefConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);
        }

        CommonPiecesDCEPeer::addSelectColumns($criteria);
        $startcol2 = CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPiecesDCEPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPiecesDCEPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPiecesDCEPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            $results[] = $obj1;
        }
        $stmt->closeCursor();

        return $results;
    }


    /**
     * Selects a collection of CommonPiecesDCE objects pre-filled with all related objects except CommonConsultationRelatedByOrganismeConsultation.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonPiecesDCE objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAllExceptCommonConsultationRelatedByOrganismeConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        // $criteria->getDbName() will return the same object if not set to another value
        // so == check is okay and faster
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);
        }

        CommonPiecesDCEPeer::addSelectColumns($criteria);
        $startcol2 = CommonPiecesDCEPeer::NUM_HYDRATE_COLUMNS;


        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonPiecesDCEPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonPiecesDCEPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonPiecesDCEPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonPiecesDCEPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

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
        return Propel::getDatabaseMap(CommonPiecesDCEPeer::DATABASE_NAME)->getTable(CommonPiecesDCEPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonPiecesDCEPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonPiecesDCEPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonPiecesDCETableMap());
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
        return CommonPiecesDCEPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonPiecesDCE or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPiecesDCE object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonPiecesDCE object
        }

        if ($criteria->containsKey(CommonPiecesDCEPeer::ID) && $criteria->keyContainsValue(CommonPiecesDCEPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonPiecesDCEPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonPiecesDCE or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPiecesDCE object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonPiecesDCEPeer::ID);
            $value = $criteria->remove(CommonPiecesDCEPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonPiecesDCEPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPiecesDCEPeer::TABLE_NAME);
            }

        } else { // $values is CommonPiecesDCE object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Pieces_DCE table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonPiecesDCEPeer::TABLE_NAME, $con, CommonPiecesDCEPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonPiecesDCEPeer::clearInstancePool();
            CommonPiecesDCEPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonPiecesDCE or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonPiecesDCE object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonPiecesDCEPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonPiecesDCE) { // it's a model object
            // invalidate the cache for this single object
            CommonPiecesDCEPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);
            $criteria->add(CommonPiecesDCEPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonPiecesDCEPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesDCEPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonPiecesDCEPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonPiecesDCE object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonPiecesDCE $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonPiecesDCEPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonPiecesDCEPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonPiecesDCEPeer::DATABASE_NAME, CommonPiecesDCEPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonPiecesDCE
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonPiecesDCEPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);
        $criteria->add(CommonPiecesDCEPeer::ID, $pk);

        $v = CommonPiecesDCEPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonPiecesDCE[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesDCEPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonPiecesDCEPeer::DATABASE_NAME);
            $criteria->add(CommonPiecesDCEPeer::ID, $pks, Criteria::IN);
            $objs = CommonPiecesDCEPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonPiecesDCEPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonPiecesDCEPeer::buildTableMap();

