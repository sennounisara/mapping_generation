<?php


/**
 * Base static class for performing query and update operations on the 't_document_piece_collaboratif' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentPieceCollaboratifPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_document_piece_collaboratif';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDocumentPieceCollaboratif';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDocumentPieceCollaboratifTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id_document_piece field */
    const ID_DOCUMENT_PIECE = 't_document_piece_collaboratif.id_document_piece';

    /** the column name for the id_document field */
    const ID_DOCUMENT = 't_document_piece_collaboratif.id_document';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 't_document_piece_collaboratif.id_parapheur';

    /** the column name for the nom_piece field */
    const NOM_PIECE = 't_document_piece_collaboratif.nom_piece';

    /** the column name for the titre_piece field */
    const TITRE_PIECE = 't_document_piece_collaboratif.titre_piece';

    /** the column name for the type_piece field */
    const TYPE_PIECE = 't_document_piece_collaboratif.type_piece';

    /** the column name for the type_objet field */
    const TYPE_OBJET = 't_document_piece_collaboratif.type_objet';

    /** the column name for the statut field */
    const STATUT = 't_document_piece_collaboratif.statut';

    /** the column name for the id_derniere_version field */
    const ID_DERNIERE_VERSION = 't_document_piece_collaboratif.id_derniere_version';

    /** the column name for the date_creation field */
    const DATE_CREATION = 't_document_piece_collaboratif.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 't_document_piece_collaboratif.date_modification';

    /** the column name for the id_createur field */
    const ID_CREATEUR = 't_document_piece_collaboratif.id_createur';

    /** the column name for the nom_createur field */
    const NOM_CREATEUR = 't_document_piece_collaboratif.nom_createur';

    /** the column name for the prenom_createur field */
    const PRENOM_CREATEUR = 't_document_piece_collaboratif.prenom_createur';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDocumentPieceCollaboratif objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDocumentPieceCollaboratif[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentPieceCollaboratifPeer::$fieldNames[CommonTDocumentPieceCollaboratifPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocumentPiece', 'IdDocument', 'IdParapheur', 'NomPiece', 'TitrePiece', 'TypePiece', 'TypeObjet', 'Statut', 'IdDerniereVersion', 'DateCreation', 'DateModification', 'IdCreateur', 'NomCreateur', 'PrenomCreateur', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocumentPiece', 'idDocument', 'idParapheur', 'nomPiece', 'titrePiece', 'typePiece', 'typeObjet', 'statut', 'idDerniereVersion', 'dateCreation', 'dateModification', 'idCreateur', 'nomCreateur', 'prenomCreateur', ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT, CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR, CommonTDocumentPieceCollaboratifPeer::NOM_PIECE, CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE, CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET, CommonTDocumentPieceCollaboratifPeer::STATUT, CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION, CommonTDocumentPieceCollaboratifPeer::DATE_CREATION, CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION, CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR, CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR, CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT_PIECE', 'ID_DOCUMENT', 'ID_PARAPHEUR', 'NOM_PIECE', 'TITRE_PIECE', 'TYPE_PIECE', 'TYPE_OBJET', 'STATUT', 'ID_DERNIERE_VERSION', 'DATE_CREATION', 'DATE_MODIFICATION', 'ID_CREATEUR', 'NOM_CREATEUR', 'PRENOM_CREATEUR', ),
        BasePeer::TYPE_FIELDNAME => array ('id_document_piece', 'id_document', 'id_parapheur', 'nom_piece', 'titre_piece', 'type_piece', 'type_objet', 'statut', 'id_derniere_version', 'date_creation', 'date_modification', 'id_createur', 'nom_createur', 'prenom_createur', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentPieceCollaboratifPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocumentPiece' => 0, 'IdDocument' => 1, 'IdParapheur' => 2, 'NomPiece' => 3, 'TitrePiece' => 4, 'TypePiece' => 5, 'TypeObjet' => 6, 'Statut' => 7, 'IdDerniereVersion' => 8, 'DateCreation' => 9, 'DateModification' => 10, 'IdCreateur' => 11, 'NomCreateur' => 12, 'PrenomCreateur' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocumentPiece' => 0, 'idDocument' => 1, 'idParapheur' => 2, 'nomPiece' => 3, 'titrePiece' => 4, 'typePiece' => 5, 'typeObjet' => 6, 'statut' => 7, 'idDerniereVersion' => 8, 'dateCreation' => 9, 'dateModification' => 10, 'idCreateur' => 11, 'nomCreateur' => 12, 'prenomCreateur' => 13, ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE => 0, CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT => 1, CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR => 2, CommonTDocumentPieceCollaboratifPeer::NOM_PIECE => 3, CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE => 4, CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE => 5, CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET => 6, CommonTDocumentPieceCollaboratifPeer::STATUT => 7, CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION => 8, CommonTDocumentPieceCollaboratifPeer::DATE_CREATION => 9, CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION => 10, CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR => 11, CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR => 12, CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT_PIECE' => 0, 'ID_DOCUMENT' => 1, 'ID_PARAPHEUR' => 2, 'NOM_PIECE' => 3, 'TITRE_PIECE' => 4, 'TYPE_PIECE' => 5, 'TYPE_OBJET' => 6, 'STATUT' => 7, 'ID_DERNIERE_VERSION' => 8, 'DATE_CREATION' => 9, 'DATE_MODIFICATION' => 10, 'ID_CREATEUR' => 11, 'NOM_CREATEUR' => 12, 'PRENOM_CREATEUR' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id_document_piece' => 0, 'id_document' => 1, 'id_parapheur' => 2, 'nom_piece' => 3, 'titre_piece' => 4, 'type_piece' => 5, 'type_objet' => 6, 'statut' => 7, 'id_derniere_version' => 8, 'date_creation' => 9, 'date_modification' => 10, 'id_createur' => 11, 'nom_createur' => 12, 'prenom_createur' => 13, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
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
        $toNames = CommonTDocumentPieceCollaboratifPeer::getFieldNames($toType);
        $key = isset(CommonTDocumentPieceCollaboratifPeer::$fieldKeys[$fromType][$name]) ? CommonTDocumentPieceCollaboratifPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDocumentPieceCollaboratifPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTDocumentPieceCollaboratifPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDocumentPieceCollaboratifPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTDocumentPieceCollaboratifPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::NOM_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::TITRE_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::TYPE_OBJET);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::STATUT);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::ID_DERNIERE_VERSION);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::ID_CREATEUR);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::NOM_CREATEUR);
            $criteria->addSelectColumn(CommonTDocumentPieceCollaboratifPeer::PRENOM_CREATEUR);
        } else {
            $criteria->addSelectColumn($alias . '.id_document_piece');
            $criteria->addSelectColumn($alias . '.id_document');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.nom_piece');
            $criteria->addSelectColumn($alias . '.titre_piece');
            $criteria->addSelectColumn($alias . '.type_piece');
            $criteria->addSelectColumn($alias . '.type_objet');
            $criteria->addSelectColumn($alias . '.statut');
            $criteria->addSelectColumn($alias . '.id_derniere_version');
            $criteria->addSelectColumn($alias . '.date_creation');
            $criteria->addSelectColumn($alias . '.date_modification');
            $criteria->addSelectColumn($alias . '.id_createur');
            $criteria->addSelectColumn($alias . '.nom_createur');
            $criteria->addSelectColumn($alias . '.prenom_createur');
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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentPieceCollaboratif
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDocumentPieceCollaboratifPeer::doSelect($critcopy, $con);
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
        return CommonTDocumentPieceCollaboratifPeer::populateObjects(CommonTDocumentPieceCollaboratifPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

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
     * @param      CommonTDocumentPieceCollaboratif $obj A CommonTDocumentPieceCollaboratif object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDocumentPiece();
            } // if key === null
            CommonTDocumentPieceCollaboratifPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTDocumentPieceCollaboratif object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDocumentPieceCollaboratif) {
                $key = (string) $value->getIdDocumentPiece();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDocumentPieceCollaboratif object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDocumentPieceCollaboratifPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDocumentPieceCollaboratif Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDocumentPieceCollaboratifPeer::$instances[$key])) {
                return CommonTDocumentPieceCollaboratifPeer::$instances[$key];
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
        foreach (CommonTDocumentPieceCollaboratifPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDocumentPieceCollaboratifPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_document_piece_collaboratif
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
        $cls = CommonTDocumentPieceCollaboratifPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDocumentPieceCollaboratifPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTDocumentPieceCollaboratif object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDocumentPieceCollaboratifPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDocumentPieceCollaboratifPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDocumentPieceCollaboratifPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonTTypePiece table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonTTypePiece(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, CommonTTypePiecePeer::ID, $join_behavior);

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
     * Selects a collection of CommonTDocumentPieceCollaboratif objects pre-filled with their CommonTTypePiece objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDocumentPieceCollaboratif objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonTTypePiece(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
        }

        CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        $startcol = CommonTDocumentPieceCollaboratifPeer::NUM_HYDRATE_COLUMNS;
        CommonTTypePiecePeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, CommonTTypePiecePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDocumentPieceCollaboratifPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonTDocumentPieceCollaboratifPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonTTypePiecePeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonTTypePiecePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTTypePiecePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonTTypePiecePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonTDocumentPieceCollaboratif) to $obj2 (CommonTTypePiece)
                $obj2->addCommonTDocumentPieceCollaboratif($obj1);

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
        $criteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, CommonTTypePiecePeer::ID, $join_behavior);

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
     * Selects a collection of CommonTDocumentPieceCollaboratif objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonTDocumentPieceCollaboratif objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
        }

        CommonTDocumentPieceCollaboratifPeer::addSelectColumns($criteria);
        $startcol2 = CommonTDocumentPieceCollaboratifPeer::NUM_HYDRATE_COLUMNS;

        CommonTTypePiecePeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonTTypePiecePeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonTDocumentPieceCollaboratifPeer::TYPE_PIECE, CommonTTypePiecePeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonTDocumentPieceCollaboratifPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonTDocumentPieceCollaboratifPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonTDocumentPieceCollaboratifPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonTTypePiece rows

            $key2 = CommonTTypePiecePeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonTTypePiecePeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonTTypePiecePeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonTTypePiecePeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonTDocumentPieceCollaboratif) to the collection in $obj2 (CommonTTypePiece)
                $obj2->addCommonTDocumentPieceCollaboratif($obj1);
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
        return Propel::getDatabaseMap(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME)->getTable(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDocumentPieceCollaboratifPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDocumentPieceCollaboratifTableMap());
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
        return CommonTDocumentPieceCollaboratifPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDocumentPieceCollaboratif or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratif object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDocumentPieceCollaboratif object
        }

        if ($criteria->containsKey(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE) && $criteria->keyContainsValue(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTDocumentPieceCollaboratif or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratif object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE);
            $value = $criteria->remove(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE);
            if ($value) {
                $selectCriteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME);
            }

        } else { // $values is CommonTDocumentPieceCollaboratif object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_document_piece_collaboratif table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME, $con, CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDocumentPieceCollaboratifPeer::clearInstancePool();
            CommonTDocumentPieceCollaboratifPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDocumentPieceCollaboratif or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDocumentPieceCollaboratif object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDocumentPieceCollaboratifPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDocumentPieceCollaboratif) { // it's a model object
            // invalidate the cache for this single object
            CommonTDocumentPieceCollaboratifPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDocumentPieceCollaboratifPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDocumentPieceCollaboratifPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDocumentPieceCollaboratif object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDocumentPieceCollaboratif $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDocumentPieceCollaboratifPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, CommonTDocumentPieceCollaboratifPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentPieceCollaboratif
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDocumentPieceCollaboratifPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $pk);

        $v = CommonTDocumentPieceCollaboratifPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentPieceCollaboratif[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDocumentPieceCollaboratifPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentPieceCollaboratifPeer::ID_DOCUMENT_PIECE, $pks, Criteria::IN);
            $objs = CommonTDocumentPieceCollaboratifPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDocumentPieceCollaboratifPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDocumentPieceCollaboratifPeer::buildTableMap();

