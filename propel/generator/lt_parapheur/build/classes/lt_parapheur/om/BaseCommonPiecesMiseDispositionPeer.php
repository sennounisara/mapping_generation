<?php


/**
 * Base static class for performing query and update operations on the 'Pieces_Mise_Disposition' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonPiecesMiseDispositionPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Pieces_Mise_Disposition';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonPiecesMiseDisposition';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonPiecesMiseDispositionTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 16;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 16;

    /** the column name for the id field */
    const ID = 'Pieces_Mise_Disposition.id';

    /** the column name for the Id_type_doc field */
    const ID_TYPE_DOC = 'Pieces_Mise_Disposition.Id_type_doc';

    /** the column name for the id_decision_enveloppe field */
    const ID_DECISION_ENVELOPPE = 'Pieces_Mise_Disposition.id_decision_enveloppe';

    /** the column name for the id_externe field */
    const ID_EXTERNE = 'Pieces_Mise_Disposition.id_externe';

    /** the column name for the org field */
    const ORG = 'Pieces_Mise_Disposition.org';

    /** the column name for the lot field */
    const LOT = 'Pieces_Mise_Disposition.lot';

    /** the column name for the consultation_ref field */
    const CONSULTATION_REF = 'Pieces_Mise_Disposition.consultation_ref';

    /** the column name for the Date_mise_disposition field */
    const DATE_MISE_DISPOSITION = 'Pieces_Mise_Disposition.Date_mise_disposition';

    /** the column name for the Statut_disposition field */
    const STATUT_DISPOSITION = 'Pieces_Mise_Disposition.Statut_disposition';

    /** the column name for the Date_recuperation field */
    const DATE_RECUPERATION = 'Pieces_Mise_Disposition.Date_recuperation';

    /** the column name for the Statut_recuperation field */
    const STATUT_RECUPERATION = 'Pieces_Mise_Disposition.Statut_recuperation';

    /** the column name for the Message field */
    const MESSAGE = 'Pieces_Mise_Disposition.Message';

    /** the column name for the Id_blob field */
    const ID_BLOB = 'Pieces_Mise_Disposition.Id_blob';

    /** the column name for the Id_destinataire field */
    const ID_DESTINATAIRE = 'Pieces_Mise_Disposition.Id_destinataire';

    /** the column name for the type field */
    const TYPE = 'Pieces_Mise_Disposition.type';

    /** the column name for the url_externe field */
    const URL_EXTERNE = 'Pieces_Mise_Disposition.url_externe';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonPiecesMiseDisposition objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonPiecesMiseDisposition[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonPiecesMiseDispositionPeer::$fieldNames[CommonPiecesMiseDispositionPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'IdTypeDoc', 'IdDecisionEnveloppe', 'IdExterne', 'Org', 'Lot', 'ConsultationRef', 'DateMiseDisposition', 'StatutDisposition', 'DateRecuperation', 'StatutRecuperation', 'Message', 'IdBlob', 'IdDestinataire', 'Type', 'UrlExterne', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'idTypeDoc', 'idDecisionEnveloppe', 'idExterne', 'org', 'lot', 'consultationRef', 'dateMiseDisposition', 'statutDisposition', 'dateRecuperation', 'statutRecuperation', 'message', 'idBlob', 'idDestinataire', 'type', 'urlExterne', ),
        BasePeer::TYPE_COLNAME => array (CommonPiecesMiseDispositionPeer::ID, CommonPiecesMiseDispositionPeer::ID_TYPE_DOC, CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, CommonPiecesMiseDispositionPeer::ID_EXTERNE, CommonPiecesMiseDispositionPeer::ORG, CommonPiecesMiseDispositionPeer::LOT, CommonPiecesMiseDispositionPeer::CONSULTATION_REF, CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION, CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION, CommonPiecesMiseDispositionPeer::DATE_RECUPERATION, CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION, CommonPiecesMiseDispositionPeer::MESSAGE, CommonPiecesMiseDispositionPeer::ID_BLOB, CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, CommonPiecesMiseDispositionPeer::TYPE, CommonPiecesMiseDispositionPeer::URL_EXTERNE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'ID_TYPE_DOC', 'ID_DECISION_ENVELOPPE', 'ID_EXTERNE', 'ORG', 'LOT', 'CONSULTATION_REF', 'DATE_MISE_DISPOSITION', 'STATUT_DISPOSITION', 'DATE_RECUPERATION', 'STATUT_RECUPERATION', 'MESSAGE', 'ID_BLOB', 'ID_DESTINATAIRE', 'TYPE', 'URL_EXTERNE', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'Id_type_doc', 'id_decision_enveloppe', 'id_externe', 'org', 'lot', 'consultation_ref', 'Date_mise_disposition', 'Statut_disposition', 'Date_recuperation', 'Statut_recuperation', 'Message', 'Id_blob', 'Id_destinataire', 'type', 'url_externe', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonPiecesMiseDispositionPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'IdTypeDoc' => 1, 'IdDecisionEnveloppe' => 2, 'IdExterne' => 3, 'Org' => 4, 'Lot' => 5, 'ConsultationRef' => 6, 'DateMiseDisposition' => 7, 'StatutDisposition' => 8, 'DateRecuperation' => 9, 'StatutRecuperation' => 10, 'Message' => 11, 'IdBlob' => 12, 'IdDestinataire' => 13, 'Type' => 14, 'UrlExterne' => 15, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'idTypeDoc' => 1, 'idDecisionEnveloppe' => 2, 'idExterne' => 3, 'org' => 4, 'lot' => 5, 'consultationRef' => 6, 'dateMiseDisposition' => 7, 'statutDisposition' => 8, 'dateRecuperation' => 9, 'statutRecuperation' => 10, 'message' => 11, 'idBlob' => 12, 'idDestinataire' => 13, 'type' => 14, 'urlExterne' => 15, ),
        BasePeer::TYPE_COLNAME => array (CommonPiecesMiseDispositionPeer::ID => 0, CommonPiecesMiseDispositionPeer::ID_TYPE_DOC => 1, CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE => 2, CommonPiecesMiseDispositionPeer::ID_EXTERNE => 3, CommonPiecesMiseDispositionPeer::ORG => 4, CommonPiecesMiseDispositionPeer::LOT => 5, CommonPiecesMiseDispositionPeer::CONSULTATION_REF => 6, CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION => 7, CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION => 8, CommonPiecesMiseDispositionPeer::DATE_RECUPERATION => 9, CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION => 10, CommonPiecesMiseDispositionPeer::MESSAGE => 11, CommonPiecesMiseDispositionPeer::ID_BLOB => 12, CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE => 13, CommonPiecesMiseDispositionPeer::TYPE => 14, CommonPiecesMiseDispositionPeer::URL_EXTERNE => 15, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'ID_TYPE_DOC' => 1, 'ID_DECISION_ENVELOPPE' => 2, 'ID_EXTERNE' => 3, 'ORG' => 4, 'LOT' => 5, 'CONSULTATION_REF' => 6, 'DATE_MISE_DISPOSITION' => 7, 'STATUT_DISPOSITION' => 8, 'DATE_RECUPERATION' => 9, 'STATUT_RECUPERATION' => 10, 'MESSAGE' => 11, 'ID_BLOB' => 12, 'ID_DESTINATAIRE' => 13, 'TYPE' => 14, 'URL_EXTERNE' => 15, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'Id_type_doc' => 1, 'id_decision_enveloppe' => 2, 'id_externe' => 3, 'org' => 4, 'lot' => 5, 'consultation_ref' => 6, 'Date_mise_disposition' => 7, 'Statut_disposition' => 8, 'Date_recuperation' => 9, 'Statut_recuperation' => 10, 'Message' => 11, 'Id_blob' => 12, 'Id_destinataire' => 13, 'type' => 14, 'url_externe' => 15, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, )
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
        $toNames = CommonPiecesMiseDispositionPeer::getFieldNames($toType);
        $key = isset(CommonPiecesMiseDispositionPeer::$fieldKeys[$fromType][$name]) ? CommonPiecesMiseDispositionPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonPiecesMiseDispositionPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonPiecesMiseDispositionPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonPiecesMiseDispositionPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonPiecesMiseDispositionPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonPiecesMiseDispositionPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ID);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ID_TYPE_DOC);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ID_EXTERNE);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ORG);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::LOT);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::CONSULTATION_REF);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::DATE_MISE_DISPOSITION);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::STATUT_DISPOSITION);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::DATE_RECUPERATION);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::STATUT_RECUPERATION);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::MESSAGE);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ID_BLOB);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::TYPE);
            $criteria->addSelectColumn(CommonPiecesMiseDispositionPeer::URL_EXTERNE);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Id_type_doc');
            $criteria->addSelectColumn($alias . '.id_decision_enveloppe');
            $criteria->addSelectColumn($alias . '.id_externe');
            $criteria->addSelectColumn($alias . '.org');
            $criteria->addSelectColumn($alias . '.lot');
            $criteria->addSelectColumn($alias . '.consultation_ref');
            $criteria->addSelectColumn($alias . '.Date_mise_disposition');
            $criteria->addSelectColumn($alias . '.Statut_disposition');
            $criteria->addSelectColumn($alias . '.Date_recuperation');
            $criteria->addSelectColumn($alias . '.Statut_recuperation');
            $criteria->addSelectColumn($alias . '.Message');
            $criteria->addSelectColumn($alias . '.Id_blob');
            $criteria->addSelectColumn($alias . '.Id_destinataire');
            $criteria->addSelectColumn($alias . '.type');
            $criteria->addSelectColumn($alias . '.url_externe');
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
        $criteria->setPrimaryTableName(CommonPiecesMiseDispositionPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonPiecesMiseDispositionPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonPiecesMiseDispositionPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonPiecesMiseDisposition
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonPiecesMiseDispositionPeer::doSelect($critcopy, $con);
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
        return CommonPiecesMiseDispositionPeer::populateObjects(CommonPiecesMiseDispositionPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonPiecesMiseDispositionPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesMiseDispositionPeer::DATABASE_NAME);

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
     * @param      CommonPiecesMiseDisposition $obj A CommonPiecesMiseDisposition object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = serialize(array((string) $obj->getId(), (string) $obj->getIdDecisionEnveloppe(), (string) $obj->getOrg(), (string) $obj->getIdDestinataire()));
            } // if key === null
            CommonPiecesMiseDispositionPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonPiecesMiseDisposition object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonPiecesMiseDisposition) {
                $key = serialize(array((string) $value->getId(), (string) $value->getIdDecisionEnveloppe(), (string) $value->getOrg(), (string) $value->getIdDestinataire()));
            } elseif (is_array($value) && count($value) === 4) {
                // assume we've been passed a primary key
                $key = serialize(array((string) $value[0], (string) $value[1], (string) $value[2], (string) $value[3]));
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonPiecesMiseDisposition object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonPiecesMiseDispositionPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonPiecesMiseDisposition Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonPiecesMiseDispositionPeer::$instances[$key])) {
                return CommonPiecesMiseDispositionPeer::$instances[$key];
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
        foreach (CommonPiecesMiseDispositionPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonPiecesMiseDispositionPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Pieces_Mise_Disposition
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
        if ($row[$startcol] === null && $row[$startcol + 2] === null && $row[$startcol + 4] === null && $row[$startcol + 13] === null) {
            return null;
        }

        return serialize(array((string) $row[$startcol], (string) $row[$startcol + 2], (string) $row[$startcol + 4], (string) $row[$startcol + 13]));
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

        return array((int) $row[$startcol], (int) $row[$startcol + 2], (string) $row[$startcol + 4], (int) $row[$startcol + 13]);
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
        $cls = CommonPiecesMiseDispositionPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonPiecesMiseDispositionPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonPiecesMiseDispositionPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonPiecesMiseDispositionPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonPiecesMiseDisposition object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonPiecesMiseDispositionPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonPiecesMiseDispositionPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonPiecesMiseDispositionPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonPiecesMiseDispositionPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonPiecesMiseDispositionPeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonPiecesMiseDispositionPeer::DATABASE_NAME)->getTable(CommonPiecesMiseDispositionPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonPiecesMiseDispositionPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonPiecesMiseDispositionPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonPiecesMiseDispositionTableMap());
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
        return CommonPiecesMiseDispositionPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonPiecesMiseDisposition or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPiecesMiseDisposition object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonPiecesMiseDisposition object
        }

        if ($criteria->containsKey(CommonPiecesMiseDispositionPeer::ID) && $criteria->keyContainsValue(CommonPiecesMiseDispositionPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonPiecesMiseDispositionPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonPiecesMiseDispositionPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonPiecesMiseDisposition or Criteria object.
     *
     * @param      mixed $values Criteria or CommonPiecesMiseDisposition object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonPiecesMiseDispositionPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonPiecesMiseDispositionPeer::ID);
            $value = $criteria->remove(CommonPiecesMiseDispositionPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonPiecesMiseDispositionPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPiecesMiseDispositionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE);
            $value = $criteria->remove(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE);
            if ($value) {
                $selectCriteria->add(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPiecesMiseDispositionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPiecesMiseDispositionPeer::ORG);
            $value = $criteria->remove(CommonPiecesMiseDispositionPeer::ORG);
            if ($value) {
                $selectCriteria->add(CommonPiecesMiseDispositionPeer::ORG, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPiecesMiseDispositionPeer::TABLE_NAME);
            }

            $comparison = $criteria->getComparison(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE);
            $value = $criteria->remove(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE);
            if ($value) {
                $selectCriteria->add(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonPiecesMiseDispositionPeer::TABLE_NAME);
            }

        } else { // $values is CommonPiecesMiseDisposition object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonPiecesMiseDispositionPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Pieces_Mise_Disposition table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonPiecesMiseDispositionPeer::TABLE_NAME, $con, CommonPiecesMiseDispositionPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonPiecesMiseDispositionPeer::clearInstancePool();
            CommonPiecesMiseDispositionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonPiecesMiseDisposition or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonPiecesMiseDisposition object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonPiecesMiseDispositionPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonPiecesMiseDisposition) { // it's a model object
            // invalidate the cache for this single object
            CommonPiecesMiseDispositionPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonPiecesMiseDispositionPeer::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = array($values);
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(CommonPiecesMiseDispositionPeer::ID, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $value[1]));
                $criterion->addAnd($criteria->getNewCriterion(CommonPiecesMiseDispositionPeer::ORG, $value[2]));
                $criterion->addAnd($criteria->getNewCriterion(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $value[3]));
                $criteria->addOr($criterion);
                // we can invalidate the cache for this single PK
                CommonPiecesMiseDispositionPeer::removeInstanceFromPool($value);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonPiecesMiseDispositionPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonPiecesMiseDispositionPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonPiecesMiseDisposition object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonPiecesMiseDisposition $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonPiecesMiseDispositionPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonPiecesMiseDispositionPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonPiecesMiseDispositionPeer::DATABASE_NAME, CommonPiecesMiseDispositionPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve object using using composite pkey values.
     * @param   int $id
     * @param   int $id_decision_enveloppe
     * @param   string $org
     * @param   int $id_destinataire
     * @param      PropelPDO $con
     * @return   CommonPiecesMiseDisposition
     */
    public static function retrieveByPK($id, $id_decision_enveloppe, $org, $id_destinataire, PropelPDO $con = null) {
        $_instancePoolKey = serialize(array((string) $id, (string) $id_decision_enveloppe, (string) $org, (string) $id_destinataire));
         if (null !== ($obj = CommonPiecesMiseDispositionPeer::getInstanceFromPool($_instancePoolKey))) {
             return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonPiecesMiseDispositionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        $criteria = new Criteria(CommonPiecesMiseDispositionPeer::DATABASE_NAME);
        $criteria->add(CommonPiecesMiseDispositionPeer::ID, $id);
        $criteria->add(CommonPiecesMiseDispositionPeer::ID_DECISION_ENVELOPPE, $id_decision_enveloppe);
        $criteria->add(CommonPiecesMiseDispositionPeer::ORG, $org);
        $criteria->add(CommonPiecesMiseDispositionPeer::ID_DESTINATAIRE, $id_destinataire);
        $v = CommonPiecesMiseDispositionPeer::doSelect($criteria, $con);

        return !empty($v) ? $v[0] : null;
    }
} // BaseCommonPiecesMiseDispositionPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonPiecesMiseDispositionPeer::buildTableMap();

