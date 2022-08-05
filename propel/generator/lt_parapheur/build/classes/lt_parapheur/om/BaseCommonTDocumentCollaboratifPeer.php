<?php


/**
 * Base static class for performing query and update operations on the 't_document_collaboratif' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTDocumentCollaboratifPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_document_collaboratif';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTDocumentCollaboratif';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTDocumentCollaboratifTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 14;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 14;

    /** the column name for the id_document field */
    const ID_DOCUMENT = 't_document_collaboratif.id_document';

    /** the column name for the id_parapheur field */
    const ID_PARAPHEUR = 't_document_collaboratif.id_parapheur';

    /** the column name for the id_theme_parapheur field */
    const ID_THEME_PARAPHEUR = 't_document_collaboratif.id_theme_parapheur';

    /** the column name for the id_objet field */
    const ID_OBJET = 't_document_collaboratif.id_objet';

    /** the column name for the organisme field */
    const ORGANISME = 't_document_collaboratif.organisme';

    /** the column name for the titre_document field */
    const TITRE_DOCUMENT = 't_document_collaboratif.titre_document';

    /** the column name for the type_document field */
    const TYPE_DOCUMENT = 't_document_collaboratif.type_document';

    /** the column name for the type_objet field */
    const TYPE_OBJET = 't_document_collaboratif.type_objet';

    /** the column name for the statut field */
    const STATUT = 't_document_collaboratif.statut';

    /** the column name for the date_creation field */
    const DATE_CREATION = 't_document_collaboratif.date_creation';

    /** the column name for the date_modification field */
    const DATE_MODIFICATION = 't_document_collaboratif.date_modification';

    /** the column name for the id_createur field */
    const ID_CREATEUR = 't_document_collaboratif.id_createur';

    /** the column name for the nom_createur field */
    const NOM_CREATEUR = 't_document_collaboratif.nom_createur';

    /** the column name for the prenom_createur field */
    const PRENOM_CREATEUR = 't_document_collaboratif.prenom_createur';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTDocumentCollaboratif objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTDocumentCollaboratif[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentCollaboratifPeer::$fieldNames[CommonTDocumentCollaboratifPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocument', 'IdParapheur', 'IdThemeParapheur', 'IdObjet', 'Organisme', 'TitreDocument', 'TypeDocument', 'TypeObjet', 'Statut', 'DateCreation', 'DateModification', 'IdCreateur', 'NomCreateur', 'PrenomCreateur', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocument', 'idParapheur', 'idThemeParapheur', 'idObjet', 'organisme', 'titreDocument', 'typeDocument', 'typeObjet', 'statut', 'dateCreation', 'dateModification', 'idCreateur', 'nomCreateur', 'prenomCreateur', ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentCollaboratifPeer::ID_DOCUMENT, CommonTDocumentCollaboratifPeer::ID_PARAPHEUR, CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR, CommonTDocumentCollaboratifPeer::ID_OBJET, CommonTDocumentCollaboratifPeer::ORGANISME, CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT, CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT, CommonTDocumentCollaboratifPeer::TYPE_OBJET, CommonTDocumentCollaboratifPeer::STATUT, CommonTDocumentCollaboratifPeer::DATE_CREATION, CommonTDocumentCollaboratifPeer::DATE_MODIFICATION, CommonTDocumentCollaboratifPeer::ID_CREATEUR, CommonTDocumentCollaboratifPeer::NOM_CREATEUR, CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT', 'ID_PARAPHEUR', 'ID_THEME_PARAPHEUR', 'ID_OBJET', 'ORGANISME', 'TITRE_DOCUMENT', 'TYPE_DOCUMENT', 'TYPE_OBJET', 'STATUT', 'DATE_CREATION', 'DATE_MODIFICATION', 'ID_CREATEUR', 'NOM_CREATEUR', 'PRENOM_CREATEUR', ),
        BasePeer::TYPE_FIELDNAME => array ('id_document', 'id_parapheur', 'id_theme_parapheur', 'id_objet', 'organisme', 'titre_document', 'type_document', 'type_objet', 'statut', 'date_creation', 'date_modification', 'id_createur', 'nom_createur', 'prenom_createur', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTDocumentCollaboratifPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdDocument' => 0, 'IdParapheur' => 1, 'IdThemeParapheur' => 2, 'IdObjet' => 3, 'Organisme' => 4, 'TitreDocument' => 5, 'TypeDocument' => 6, 'TypeObjet' => 7, 'Statut' => 8, 'DateCreation' => 9, 'DateModification' => 10, 'IdCreateur' => 11, 'NomCreateur' => 12, 'PrenomCreateur' => 13, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idDocument' => 0, 'idParapheur' => 1, 'idThemeParapheur' => 2, 'idObjet' => 3, 'organisme' => 4, 'titreDocument' => 5, 'typeDocument' => 6, 'typeObjet' => 7, 'statut' => 8, 'dateCreation' => 9, 'dateModification' => 10, 'idCreateur' => 11, 'nomCreateur' => 12, 'prenomCreateur' => 13, ),
        BasePeer::TYPE_COLNAME => array (CommonTDocumentCollaboratifPeer::ID_DOCUMENT => 0, CommonTDocumentCollaboratifPeer::ID_PARAPHEUR => 1, CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR => 2, CommonTDocumentCollaboratifPeer::ID_OBJET => 3, CommonTDocumentCollaboratifPeer::ORGANISME => 4, CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT => 5, CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT => 6, CommonTDocumentCollaboratifPeer::TYPE_OBJET => 7, CommonTDocumentCollaboratifPeer::STATUT => 8, CommonTDocumentCollaboratifPeer::DATE_CREATION => 9, CommonTDocumentCollaboratifPeer::DATE_MODIFICATION => 10, CommonTDocumentCollaboratifPeer::ID_CREATEUR => 11, CommonTDocumentCollaboratifPeer::NOM_CREATEUR => 12, CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR => 13, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_DOCUMENT' => 0, 'ID_PARAPHEUR' => 1, 'ID_THEME_PARAPHEUR' => 2, 'ID_OBJET' => 3, 'ORGANISME' => 4, 'TITRE_DOCUMENT' => 5, 'TYPE_DOCUMENT' => 6, 'TYPE_OBJET' => 7, 'STATUT' => 8, 'DATE_CREATION' => 9, 'DATE_MODIFICATION' => 10, 'ID_CREATEUR' => 11, 'NOM_CREATEUR' => 12, 'PRENOM_CREATEUR' => 13, ),
        BasePeer::TYPE_FIELDNAME => array ('id_document' => 0, 'id_parapheur' => 1, 'id_theme_parapheur' => 2, 'id_objet' => 3, 'organisme' => 4, 'titre_document' => 5, 'type_document' => 6, 'type_objet' => 7, 'statut' => 8, 'date_creation' => 9, 'date_modification' => 10, 'id_createur' => 11, 'nom_createur' => 12, 'prenom_createur' => 13, ),
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
        $toNames = CommonTDocumentCollaboratifPeer::getFieldNames($toType);
        $key = isset(CommonTDocumentCollaboratifPeer::$fieldKeys[$fromType][$name]) ? CommonTDocumentCollaboratifPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTDocumentCollaboratifPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTDocumentCollaboratifPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTDocumentCollaboratifPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonTDocumentCollaboratifPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTDocumentCollaboratifPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::ID_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::ID_PARAPHEUR);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::ID_THEME_PARAPHEUR);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::ID_OBJET);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::ORGANISME);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::TITRE_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::TYPE_DOCUMENT);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::TYPE_OBJET);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::STATUT);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::DATE_CREATION);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::DATE_MODIFICATION);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::ID_CREATEUR);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::NOM_CREATEUR);
            $criteria->addSelectColumn(CommonTDocumentCollaboratifPeer::PRENOM_CREATEUR);
        } else {
            $criteria->addSelectColumn($alias . '.id_document');
            $criteria->addSelectColumn($alias . '.id_parapheur');
            $criteria->addSelectColumn($alias . '.id_theme_parapheur');
            $criteria->addSelectColumn($alias . '.id_objet');
            $criteria->addSelectColumn($alias . '.organisme');
            $criteria->addSelectColumn($alias . '.titre_document');
            $criteria->addSelectColumn($alias . '.type_document');
            $criteria->addSelectColumn($alias . '.type_objet');
            $criteria->addSelectColumn($alias . '.statut');
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
        $criteria->setPrimaryTableName(CommonTDocumentCollaboratifPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTDocumentCollaboratifPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTDocumentCollaboratifPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTDocumentCollaboratif
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTDocumentCollaboratifPeer::doSelect($critcopy, $con);
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
        return CommonTDocumentCollaboratifPeer::populateObjects(CommonTDocumentCollaboratifPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTDocumentCollaboratifPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentCollaboratifPeer::DATABASE_NAME);

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
     * @param      CommonTDocumentCollaboratif $obj A CommonTDocumentCollaboratif object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdDocument();
            } // if key === null
            CommonTDocumentCollaboratifPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTDocumentCollaboratif object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTDocumentCollaboratif) {
                $key = (string) $value->getIdDocument();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTDocumentCollaboratif object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTDocumentCollaboratifPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTDocumentCollaboratif Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTDocumentCollaboratifPeer::$instances[$key])) {
                return CommonTDocumentCollaboratifPeer::$instances[$key];
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
        foreach (CommonTDocumentCollaboratifPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTDocumentCollaboratifPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_document_collaboratif
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
        $cls = CommonTDocumentCollaboratifPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTDocumentCollaboratifPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTDocumentCollaboratifPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTDocumentCollaboratifPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTDocumentCollaboratif object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTDocumentCollaboratifPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTDocumentCollaboratifPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTDocumentCollaboratifPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTDocumentCollaboratifPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTDocumentCollaboratifPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTDocumentCollaboratifPeer::DATABASE_NAME)->getTable(CommonTDocumentCollaboratifPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTDocumentCollaboratifPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTDocumentCollaboratifPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTDocumentCollaboratifTableMap());
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
        return CommonTDocumentCollaboratifPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTDocumentCollaboratif or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentCollaboratif object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTDocumentCollaboratif object
        }

        if ($criteria->containsKey(CommonTDocumentCollaboratifPeer::ID_DOCUMENT) && $criteria->keyContainsValue(CommonTDocumentCollaboratifPeer::ID_DOCUMENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTDocumentCollaboratifPeer::ID_DOCUMENT.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentCollaboratifPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTDocumentCollaboratif or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTDocumentCollaboratif object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTDocumentCollaboratifPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTDocumentCollaboratifPeer::ID_DOCUMENT);
            $value = $criteria->remove(CommonTDocumentCollaboratifPeer::ID_DOCUMENT);
            if ($value) {
                $selectCriteria->add(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTDocumentCollaboratifPeer::TABLE_NAME);
            }

        } else { // $values is CommonTDocumentCollaboratif object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTDocumentCollaboratifPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_document_collaboratif table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTDocumentCollaboratifPeer::TABLE_NAME, $con, CommonTDocumentCollaboratifPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTDocumentCollaboratifPeer::clearInstancePool();
            CommonTDocumentCollaboratifPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTDocumentCollaboratif or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTDocumentCollaboratif object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTDocumentCollaboratifPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTDocumentCollaboratif) { // it's a model object
            // invalidate the cache for this single object
            CommonTDocumentCollaboratifPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTDocumentCollaboratifPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTDocumentCollaboratifPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTDocumentCollaboratifPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTDocumentCollaboratifPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTDocumentCollaboratif object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTDocumentCollaboratif $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTDocumentCollaboratifPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTDocumentCollaboratifPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTDocumentCollaboratifPeer::DATABASE_NAME, CommonTDocumentCollaboratifPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentCollaboratif
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTDocumentCollaboratifPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTDocumentCollaboratifPeer::DATABASE_NAME);
        $criteria->add(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $pk);

        $v = CommonTDocumentCollaboratifPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTDocumentCollaboratif[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTDocumentCollaboratifPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTDocumentCollaboratifPeer::DATABASE_NAME);
            $criteria->add(CommonTDocumentCollaboratifPeer::ID_DOCUMENT, $pks, Criteria::IN);
            $objs = CommonTDocumentCollaboratifPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTDocumentCollaboratifPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTDocumentCollaboratifPeer::buildTableMap();

