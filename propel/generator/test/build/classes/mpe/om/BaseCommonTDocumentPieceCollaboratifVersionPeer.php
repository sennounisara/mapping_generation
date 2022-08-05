<?php


/**
 * Base static class for performing query and update operations on the 't_document_piece_collaboratif_version' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifVersionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_document_piece_collaboratif_version';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDocumentPieceCollaboratifVersion';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDocumentPieceCollaboratifVersionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id_version_piece_document field */
    const ID_VERSION_PIECE_DOCUMENT = 't_document_piece_collaboratif_version.id_version_piece_document';

    /** the column name for the id_piece field */
    const ID_PIECE = 't_document_piece_collaboratif_version.id_piece';

    /** the column name for the date_creation field */
    const DATE_CREATION = 't_document_piece_collaboratif_version.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 't_document_piece_collaboratif_version.date_modification';

    /** the column name for the hash field */
    const HASH = 't_document_piece_collaboratif_version.hash';

    /** the column name for the id_blob field */
    const ID_BLOB = 't_document_piece_collaboratif_version.id_blob';

    /** the column name for the taille_piece field */
    const TAILLE_PIECE = 't_document_piece_collaboratif_version.taille_piece';

    /** the column name for the extension_document field */
    const EXTENSION_DOCUMENT = 't_document_piece_collaboratif_version.extension_document';

    /** the column name for the version field */
    const VERSION = 't_document_piece_collaboratif_version.version';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 't_document_piece_collaboratif_version.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 't_document_piece_collaboratif_version.prenom_agent';

    /** the column name for the nom_document field */
    const NOM_DOCUMENT = 't_document_piece_collaboratif_version.nom_document';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDocumentPieceCollaboratifVersion objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDocumentPieceCollaboratifVersion[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentPieceCollaboratifVersionPeer::$fieldNames[CommonTDocumentPieceCollaboratifVersionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdVersionPieceDocument', 'IdPiece', 'DateCreation', 'DateModification', 'Hash', 'IdBlob', 'TaillePiece', 'ExtensionDocument', 'Version', 'NomAgent', 'PrenomAgent', 'NomDocument', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idVersionPieceDocument', 'idPiece', 'dateCreation', 'dateModification', 'hash', 'idBlob', 'taillePiece', 'extensionDocument', 'version', 'nomAgent', 'prenomAgent', 'nomDocument', ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION, CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION, CommonTDocumentPieceCollaboratifVersionPeer::HASH, CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB, CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE, CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT, CommonTDocumentPieceCollaboratifVersionPeer::VERSION, CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT, CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT, CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_VERSION_PIECE_DOCUMENT', 'ID_PIECE', 'DATE_CREATION', 'DATE_MODIFICATION', 'HASH', 'ID_BLOB', 'TAILLE_PIECE', 'EXTENSION_DOCUMENT', 'VERSION', 'NOM_AGENT', 'PRENOM_AGENT', 'NOM_DOCUMENT', ),
        BasePeer::TYPE_FIELDNAME => array ('id_version_piece_document', 'id_piece', 'date_creation', 'date_modification', 'hash', 'id_blob', 'taille_piece', 'extension_document', 'version', 'nom_agent', 'prenom_agent', 'nom_document', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentPieceCollaboratifVersionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdVersionPieceDocument' => 0, 'IdPiece' => 1, 'DateCreation' => 2, 'DateModification' => 3, 'Hash' => 4, 'IdBlob' => 5, 'TaillePiece' => 6, 'ExtensionDocument' => 7, 'Version' => 8, 'NomAgent' => 9, 'PrenomAgent' => 10, 'NomDocument' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idVersionPieceDocument' => 0, 'idPiece' => 1, 'dateCreation' => 2, 'dateModification' => 3, 'hash' => 4, 'idBlob' => 5, 'taillePiece' => 6, 'extensionDocument' => 7, 'version' => 8, 'nomAgent' => 9, 'prenomAgent' => 10, 'nomDocument' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT => 0, CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE => 1, CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION => 2, CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION => 3, CommonTDocumentPieceCollaboratifVersionPeer::HASH => 4, CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB => 5, CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE => 6, CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT => 7, CommonTDocumentPieceCollaboratifVersionPeer::VERSION => 8, CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT => 9, CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT => 10, CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_VERSION_PIECE_DOCUMENT' => 0, 'ID_PIECE' => 1, 'DATE_CREATION' => 2, 'DATE_MODIFICATION' => 3, 'HASH' => 4, 'ID_BLOB' => 5, 'TAILLE_PIECE' => 6, 'EXTENSION_DOCUMENT' => 7, 'VERSION' => 8, 'NOM_AGENT' => 9, 'PRENOM_AGENT' => 10, 'NOM_DOCUMENT' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id_version_piece_document' => 0, 'id_piece' => 1, 'date_creation' => 2, 'date_modification' => 3, 'hash' => 4, 'id_blob' => 5, 'taille_piece' => 6, 'extension_document' => 7, 'version' => 8, 'nom_agent' => 9, 'prenom_agent' => 10, 'nom_document' => 11, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
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
        $toNames = CommonTDocumentPieceCollaboratifVersionPeer::getFieldNames($toType);
        $key = isset(CommonTDocumentPieceCollaboratifVersionPeer::$fieldKeys[$fromType][$name]) ? CommonTDocumentPieceCollaboratifVersionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDocumentPieceCollaboratifVersionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTDocumentPieceCollaboratifVersionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDocumentPieceCollaboratifVersionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTDocumentPieceCollaboratifVersionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::HASH);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::TAILLE_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::EXTENSION_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::VERSION);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifVersionPeer::NOM_DOCUMENT);
        } else {
            $criteria->addSelectColumn($alias . '.id_version_piece_document');
            $criteria->addSelectColumn($alias . '.id_piece');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.hash');
            $criteria->addSelectColumn($alias . '.id_blob');
            $criteria->addSelectColumn($alias . '.taille_piece');
            $criteria->addSelectColumn($alias . '.extension_document');
            $criteria->addSelectColumn($alias . '.version');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.nom_document');
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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifVersionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentPieceCollaboratifVersion
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDocumentPieceCollaboratifVersionPeer::doSelect($critcopy, $con);
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
        return CommonTDocumentPieceCollaboratifVersionPeer::populateObjects(CommonTDocumentPieceCollaboratifVersionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDocumentPieceCollaboratifVersionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

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
     * @param      CommonTDocumentPieceCollaboratifVersion $obj A CommonTDocumentPieceCollaboratifVersion object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdVersionPieceDocument();
            } // if key === null
            CommonTDocumentPieceCollaboratifVersionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTDocumentPieceCollaboratifVersion object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDocumentPieceCollaboratifVersion) {
                $key = (string) $value->getIdVersionPieceDocument();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDocumentPieceCollaboratifVersion object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDocumentPieceCollaboratifVersionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDocumentPieceCollaboratifVersion Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDocumentPieceCollaboratifVersionPeer::$instances[$key])) {
                return CommonTDocumentPieceCollaboratifVersionPeer::$instances[$key];
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
        foreach (CommonTDocumentPieceCollaboratifVersionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDocumentPieceCollaboratifVersionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_document_piece_collaboratif_version
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
        $cls = CommonTDocumentPieceCollaboratifVersionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDocumentPieceCollaboratifVersionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDocumentPieceCollaboratifVersionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDocumentPieceCollaboratifVersionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTDocumentPieceCollaboratifVersion object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDocumentPieceCollaboratifVersionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDocumentPieceCollaboratifVersionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDocumentPieceCollaboratifVersionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDocumentPieceCollaboratifVersionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDocumentPieceCollaboratifVersionPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTDocumentPieceCollaboratif table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTDocumentPieceCollaboratif(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifVersionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

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
     * Selects a collection of CommonTDocumentPieceCollaboratifVersion objects pre-filled with their CommonTDocumentPieceCollaboratif objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDocumentPieceCollaboratifVersion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTDocumentPieceCollaboratif(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
        }

        CommonTDocumentPieceCollaboratifVersionPeer::addSelectColumns($criteria);
        $startcol = CommonTDocumentPieceCollaboratifVersionPeer::NUM_HYDRATE_COLUMNS;
        CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDocumentPieceCollaboratifVersionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDocumentPieceCollaboratifVersionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTDocumentPieceCollaboratifVersionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDocumentPieceCollaboratifVersionPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTDocumentPieceCollaboratifPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTDocumentPieceCollaboratifPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTDocumentPieceCollaboratifVersion) to $obj2 (CommonTDocumentPieceCollaboratif)
                $obj2->addCommonTDocumentPieceCollaboratifVersion($obj1);

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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifVersionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

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
     * Selects a collection of CommonTDocumentPieceCollaboratifVersion objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDocumentPieceCollaboratifVersion objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
        }

        CommonTDocumentPieceCollaboratifVersionPeer::addSelectColumns($criteria);
        $startcol2 = CommonTDocumentPieceCollaboratifVersionPeer::NUM_HYDRATE_COLUMNS;

        CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTDocumentPieceCollaboratifPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTDocumentPieceCollaboratifVersionPeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDocumentPieceCollaboratifVersionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDocumentPieceCollaboratifVersionPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTDocumentPieceCollaboratifVersionPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDocumentPieceCollaboratifVersionPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTDocumentPieceCollaboratif rows

            $key2 = CommonTDocumentPieceCollaboratifPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTDocumentPieceCollaboratifPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTDocumentPieceCollaboratifVersion) to the collection in $obj2 (CommonTDocumentPieceCollaboratif)
                $obj2->addCommonTDocumentPieceCollaboratifVersion($obj1);
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
        return Propel::getDatabaseMap(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME)->getTable(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDocumentPieceCollaboratifVersionTableMap());
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
        return CommonTDocumentPieceCollaboratifVersionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDocumentPieceCollaboratifVersion or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratifVersion object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDocumentPieceCollaboratifVersion object
        }

        if ($criteria->containsKey(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT) && $criteria->keyContainsValue(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTDocumentPieceCollaboratifVersion or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratifVersion object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT);
            $value = $criteria->remove(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT);
            if ($value) {
                $selectCriteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME);
            }

        } else { // $values is CommonTDocumentPieceCollaboratifVersion object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_document_piece_collaboratif_version table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME, $con, CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDocumentPieceCollaboratifVersionPeer::clearInstancePool();
            CommonTDocumentPieceCollaboratifVersionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDocumentPieceCollaboratifVersion or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratifVersion object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDocumentPieceCollaboratifVersionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDocumentPieceCollaboratifVersion) { // it's a model object
            // invalidate the cache for this single object
            CommonTDocumentPieceCollaboratifVersionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDocumentPieceCollaboratifVersionPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDocumentPieceCollaboratifVersionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDocumentPieceCollaboratifVersion object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDocumentPieceCollaboratifVersion $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, CommonTDocumentPieceCollaboratifVersionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentPieceCollaboratifVersion
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDocumentPieceCollaboratifVersionPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $pk);

        $v = CommonTDocumentPieceCollaboratifVersionPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentPieceCollaboratifVersion[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDocumentPieceCollaboratifVersionPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentPieceCollaboratifVersionPeer::ID_VERSION_PIECE_DOCUMENT, $pks, Criteria::IN);
            $objs = CommonTDocumentPieceCollaboratifVersionPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDocumentPieceCollaboratifVersionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDocumentPieceCollaboratifVersionPeer::buildTableMap();

