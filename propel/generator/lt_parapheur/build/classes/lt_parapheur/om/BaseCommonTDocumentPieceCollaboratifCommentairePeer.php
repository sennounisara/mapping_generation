<?php


/**
 * Base static class for performing query and update operations on the 't_document_piece_collaboratif_commentaire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifCommentairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_document_piece_collaboratif_commentaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDocumentPieceCollaboratifCommentaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDocumentPieceCollaboratifCommentaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 11;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 11;

    /** the column name for the id field */
    const ID = 't_document_piece_collaboratif_commentaire.id';

    /** the column name for the id_piece field */
    const ID_PIECE = 't_document_piece_collaboratif_commentaire.id_piece';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 't_document_piece_collaboratif_commentaire.commentaire';

    /** the column name for the id_blob_pj field */
    const ID_BLOB_PJ = 't_document_piece_collaboratif_commentaire.id_blob_pj';

    /** the column name for the nom_pj field */
    const NOM_PJ = 't_document_piece_collaboratif_commentaire.nom_pj';

    /** the column name for the date_commentaire field */
    const DATE_COMMENTAIRE = 't_document_piece_collaboratif_commentaire.date_commentaire';

    /** the column name for the id_agent field */
    const ID_AGENT = 't_document_piece_collaboratif_commentaire.id_agent';

    /** the column name for the nom_agent field */
    const NOM_AGENT = 't_document_piece_collaboratif_commentaire.nom_agent';

    /** the column name for the prenom_agent field */
    const PRENOM_AGENT = 't_document_piece_collaboratif_commentaire.prenom_agent';

    /** the column name for the statut_commentaire field */
    const STATUT_COMMENTAIRE = 't_document_piece_collaboratif_commentaire.statut_commentaire';

    /** the column name for the nouvelle_version field */
    const NOUVELLE_VERSION = 't_document_piece_collaboratif_commentaire.nouvelle_version';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDocumentPieceCollaboratifCommentaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDocumentPieceCollaboratifCommentaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentPieceCollaboratifCommentairePeer::$fieldNames[CommonTDocumentPieceCollaboratifCommentairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdPiece', 'Commentaire', 'IdBlobPj', 'NomPj', 'DateCommentaire', 'IdAgent', 'NomAgent', 'PrenomAgent', 'StatutCommentaire', 'NouvelleVersion', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idPiece', 'commentaire', 'idBlobPj', 'nomPj', 'dateCommentaire', 'idAgent', 'nomAgent', 'prenomAgent', 'statutCommentaire', 'nouvelleVersion', ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentPieceCollaboratifCommentairePeer::ID, CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, CommonTDocumentPieceCollaboratifCommentairePeer::COMMENTAIRE, CommonTDocumentPieceCollaboratifCommentairePeer::ID_BLOB_PJ, CommonTDocumentPieceCollaboratifCommentairePeer::NOM_PJ, CommonTDocumentPieceCollaboratifCommentairePeer::DATE_COMMENTAIRE, CommonTDocumentPieceCollaboratifCommentairePeer::ID_AGENT, CommonTDocumentPieceCollaboratifCommentairePeer::NOM_AGENT, CommonTDocumentPieceCollaboratifCommentairePeer::PRENOM_AGENT, CommonTDocumentPieceCollaboratifCommentairePeer::STATUT_COMMENTAIRE, CommonTDocumentPieceCollaboratifCommentairePeer::NOUVELLE_VERSION, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_PIECE', 'COMMENTAIRE', 'ID_BLOB_PJ', 'NOM_PJ', 'DATE_COMMENTAIRE', 'ID_AGENT', 'NOM_AGENT', 'PRENOM_AGENT', 'STATUT_COMMENTAIRE', 'NOUVELLE_VERSION', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'id_piece', 'commentaire', 'id_blob_pj', 'nom_pj', 'date_commentaire', 'id_agent', 'nom_agent', 'prenom_agent', 'statut_commentaire', 'nouvelle_version', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentPieceCollaboratifCommentairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdPiece' => 1, 'Commentaire' => 2, 'IdBlobPj' => 3, 'NomPj' => 4, 'DateCommentaire' => 5, 'IdAgent' => 6, 'NomAgent' => 7, 'PrenomAgent' => 8, 'StatutCommentaire' => 9, 'NouvelleVersion' => 10, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idPiece' => 1, 'commentaire' => 2, 'idBlobPj' => 3, 'nomPj' => 4, 'dateCommentaire' => 5, 'idAgent' => 6, 'nomAgent' => 7, 'prenomAgent' => 8, 'statutCommentaire' => 9, 'nouvelleVersion' => 10, ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentPieceCollaboratifCommentairePeer::ID => 0, CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE => 1, CommonTDocumentPieceCollaboratifCommentairePeer::COMMENTAIRE => 2, CommonTDocumentPieceCollaboratifCommentairePeer::ID_BLOB_PJ => 3, CommonTDocumentPieceCollaboratifCommentairePeer::NOM_PJ => 4, CommonTDocumentPieceCollaboratifCommentairePeer::DATE_COMMENTAIRE => 5, CommonTDocumentPieceCollaboratifCommentairePeer::ID_AGENT => 6, CommonTDocumentPieceCollaboratifCommentairePeer::NOM_AGENT => 7, CommonTDocumentPieceCollaboratifCommentairePeer::PRENOM_AGENT => 8, CommonTDocumentPieceCollaboratifCommentairePeer::STATUT_COMMENTAIRE => 9, CommonTDocumentPieceCollaboratifCommentairePeer::NOUVELLE_VERSION => 10, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_PIECE' => 1, 'COMMENTAIRE' => 2, 'ID_BLOB_PJ' => 3, 'NOM_PJ' => 4, 'DATE_COMMENTAIRE' => 5, 'ID_AGENT' => 6, 'NOM_AGENT' => 7, 'PRENOM_AGENT' => 8, 'STATUT_COMMENTAIRE' => 9, 'NOUVELLE_VERSION' => 10, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'id_piece' => 1, 'commentaire' => 2, 'id_blob_pj' => 3, 'nom_pj' => 4, 'date_commentaire' => 5, 'id_agent' => 6, 'nom_agent' => 7, 'prenom_agent' => 8, 'statut_commentaire' => 9, 'nouvelle_version' => 10, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
        $toNames = CommonTDocumentPieceCollaboratifCommentairePeer::getFieldNames($toType);
        $key = isset(CommonTDocumentPieceCollaboratifCommentairePeer::$fieldKeys[$fromType][$name]) ? CommonTDocumentPieceCollaboratifCommentairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDocumentPieceCollaboratifCommentairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTDocumentPieceCollaboratifCommentairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDocumentPieceCollaboratifCommentairePeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTDocumentPieceCollaboratifCommentairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::ID);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::ID_BLOB_PJ);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::NOM_PJ);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::DATE_COMMENTAIRE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::ID_AGENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::NOM_AGENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::PRENOM_AGENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::STATUT_COMMENTAIRE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifCommentairePeer::NOUVELLE_VERSION);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.id_piece');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.id_blob_pj');
            $criteria->addSelectColumn($alias . '.nom_pj');
            $criteria->addSelectColumn($alias . '.date_commentaire');
            $criteria->addSelectColumn($alias . '.id_agent');
            $criteria->addSelectColumn($alias . '.nom_agent');
            $criteria->addSelectColumn($alias . '.prenom_agent');
            $criteria->addSelectColumn($alias . '.statut_commentaire');
            $criteria->addSelectColumn($alias . '.nouvelle_version');
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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifCommentairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentPieceCollaboratifCommentaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDocumentPieceCollaboratifCommentairePeer::doSelect($critcopy, $con);
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
        return CommonTDocumentPieceCollaboratifCommentairePeer::populateObjects(CommonTDocumentPieceCollaboratifCommentairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDocumentPieceCollaboratifCommentairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

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
     * @param      CommonTDocumentPieceCollaboratifCommentaire $obj A CommonTDocumentPieceCollaboratifCommentaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonTDocumentPieceCollaboratifCommentairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTDocumentPieceCollaboratifCommentaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDocumentPieceCollaboratifCommentaire) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDocumentPieceCollaboratifCommentaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDocumentPieceCollaboratifCommentairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDocumentPieceCollaboratifCommentaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDocumentPieceCollaboratifCommentairePeer::$instances[$key])) {
                return CommonTDocumentPieceCollaboratifCommentairePeer::$instances[$key];
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
        foreach (CommonTDocumentPieceCollaboratifCommentairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDocumentPieceCollaboratifCommentairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_document_piece_collaboratif_commentaire
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
        $cls = CommonTDocumentPieceCollaboratifCommentairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDocumentPieceCollaboratifCommentairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDocumentPieceCollaboratifCommentairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDocumentPieceCollaboratifCommentairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTDocumentPieceCollaboratifCommentaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDocumentPieceCollaboratifCommentairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDocumentPieceCollaboratifCommentairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDocumentPieceCollaboratifCommentairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDocumentPieceCollaboratifCommentairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDocumentPieceCollaboratifCommentairePeer::addInstanceToPool($obj, $key);
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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifCommentairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

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
     * Selects a collection of CommonTDocumentPieceCollaboratifCommentaire objects pre-filled with their CommonTDocumentPieceCollaboratif objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDocumentPieceCollaboratifCommentaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTDocumentPieceCollaboratif(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
        }

        CommonTDocumentPieceCollaboratifCommentairePeer::addSelectColumns($criteria);
        $startcol = CommonTDocumentPieceCollaboratifCommentairePeer::NUM_HYDRATE_COLUMNS;
        CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDocumentPieceCollaboratifCommentairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDocumentPieceCollaboratifCommentairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTDocumentPieceCollaboratifCommentairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDocumentPieceCollaboratifCommentairePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonTDocumentPieceCollaboratifCommentaire) to $obj2 (CommonTDocumentPieceCollaboratif)
                $obj2->addCommonTDocumentPieceCollaboratifCommentaire($obj1);

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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifCommentairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

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
     * Selects a collection of CommonTDocumentPieceCollaboratifCommentaire objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDocumentPieceCollaboratifCommentaire objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
        }

        CommonTDocumentPieceCollaboratifCommentairePeer::addSelectColumns($criteria);
        $startcol2 = CommonTDocumentPieceCollaboratifCommentairePeer::NUM_HYDRATE_COLUMNS;

        CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTDocumentPieceCollaboratifPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTDocumentPieceCollaboratifCommentairePeer::ID_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDocumentPieceCollaboratifCommentairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDocumentPieceCollaboratifCommentairePeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTDocumentPieceCollaboratifCommentairePeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDocumentPieceCollaboratifCommentairePeer::addInstanceToPool($obj1, $key1);
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

                // Add the $obj1 (CommonTDocumentPieceCollaboratifCommentaire) to the collection in $obj2 (CommonTDocumentPieceCollaboratif)
                $obj2->addCommonTDocumentPieceCollaboratifCommentaire($obj1);
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
        return Propel::getDatabaseMap(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME)->getTable(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDocumentPieceCollaboratifCommentaireTableMap());
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
        return CommonTDocumentPieceCollaboratifCommentairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDocumentPieceCollaboratifCommentaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratifCommentaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDocumentPieceCollaboratifCommentaire object
        }

        if ($criteria->containsKey(CommonTDocumentPieceCollaboratifCommentairePeer::ID) && $criteria->keyContainsValue(CommonTDocumentPieceCollaboratifCommentairePeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDocumentPieceCollaboratifCommentairePeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTDocumentPieceCollaboratifCommentaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratifCommentaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDocumentPieceCollaboratifCommentairePeer::ID);
            $value = $criteria->remove(CommonTDocumentPieceCollaboratifCommentairePeer::ID);
            if ($value) {
                $selectCriteria->add(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME);
            }

        } else { // $values is CommonTDocumentPieceCollaboratifCommentaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_document_piece_collaboratif_commentaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME, $con, CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDocumentPieceCollaboratifCommentairePeer::clearInstancePool();
            CommonTDocumentPieceCollaboratifCommentairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDocumentPieceCollaboratifCommentaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratifCommentaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDocumentPieceCollaboratifCommentairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDocumentPieceCollaboratifCommentaire) { // it's a model object
            // invalidate the cache for this single object
            CommonTDocumentPieceCollaboratifCommentairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentPieceCollaboratifCommentairePeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDocumentPieceCollaboratifCommentairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDocumentPieceCollaboratifCommentairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDocumentPieceCollaboratifCommentaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDocumentPieceCollaboratifCommentaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, CommonTDocumentPieceCollaboratifCommentairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentPieceCollaboratifCommentaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDocumentPieceCollaboratifCommentairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $pk);

        $v = CommonTDocumentPieceCollaboratifCommentairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentPieceCollaboratifCommentaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDocumentPieceCollaboratifCommentairePeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentPieceCollaboratifCommentairePeer::ID, $pks, Criteria::IN);
            $objs = CommonTDocumentPieceCollaboratifCommentairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDocumentPieceCollaboratifCommentairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDocumentPieceCollaboratifCommentairePeer::buildTableMap();

