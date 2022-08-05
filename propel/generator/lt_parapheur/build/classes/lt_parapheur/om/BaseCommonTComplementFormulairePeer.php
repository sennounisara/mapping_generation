<?php


/**
 * Base static class for performing query and update operations on the 't_complement_formulaire' table.
 *
 * 
 *
 * @package propel.generator.lt_parapheur.om
 */
abstract class BaseCommonTComplementFormulairePeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 't_complement_formulaire';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonTComplementFormulaire';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonTComplementFormulaireTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 8;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 8;

    /** the column name for the id_complement_formulaire field */
    const ID_COMPLEMENT_FORMULAIRE = 't_complement_formulaire.id_complement_formulaire';

    /** the column name for the id_dossier_formulaire field */
    const ID_DOSSIER_FORMULAIRE = 't_complement_formulaire.id_dossier_formulaire';

    /** the column name for the numero_complement field */
    const NUMERO_COMPLEMENT = 't_complement_formulaire.numero_complement';

    /** the column name for the date_a_remettre field */
    const DATE_A_REMETTRE = 't_complement_formulaire.date_a_remettre';

    /** the column name for the date_remis_le field */
    const DATE_REMIS_LE = 't_complement_formulaire.date_remis_le';

    /** the column name for the motif field */
    const MOTIF = 't_complement_formulaire.motif';

    /** the column name for the commentaire field */
    const COMMENTAIRE = 't_complement_formulaire.commentaire';

    /** the column name for the statut_demande field */
    const STATUT_DEMANDE = 't_complement_formulaire.statut_demande';

    /** The enumerated values for the statut_demande field */
    const STATUT_DEMANDE_1 = '1';
    const STATUT_DEMANDE_2 = '2';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonTComplementFormulaire objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonTComplementFormulaire[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonTComplementFormulairePeer::$fieldNames[CommonTComplementFormulairePeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('IdComplementFormulaire', 'IdDossierFormulaire', 'NumeroComplement', 'DateARemettre', 'DateRemisLe', 'Motif', 'Commentaire', 'StatutDemande', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idComplementFormulaire', 'idDossierFormulaire', 'numeroComplement', 'dateARemettre', 'dateRemisLe', 'motif', 'commentaire', 'statutDemande', ),
        BasePeer::TYPE_COLNAME => array (CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE, CommonTComplementFormulairePeer::NUMERO_COMPLEMENT, CommonTComplementFormulairePeer::DATE_A_REMETTRE, CommonTComplementFormulairePeer::DATE_REMIS_LE, CommonTComplementFormulairePeer::MOTIF, CommonTComplementFormulairePeer::COMMENTAIRE, CommonTComplementFormulairePeer::STATUT_DEMANDE, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_COMPLEMENT_FORMULAIRE', 'ID_DOSSIER_FORMULAIRE', 'NUMERO_COMPLEMENT', 'DATE_A_REMETTRE', 'DATE_REMIS_LE', 'MOTIF', 'COMMENTAIRE', 'STATUT_DEMANDE', ),
        BasePeer::TYPE_FIELDNAME => array ('id_complement_formulaire', 'id_dossier_formulaire', 'numero_complement', 'date_a_remettre', 'date_remis_le', 'motif', 'commentaire', 'statut_demande', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonTComplementFormulairePeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('IdComplementFormulaire' => 0, 'IdDossierFormulaire' => 1, 'NumeroComplement' => 2, 'DateARemettre' => 3, 'DateRemisLe' => 4, 'Motif' => 5, 'Commentaire' => 6, 'StatutDemande' => 7, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('idComplementFormulaire' => 0, 'idDossierFormulaire' => 1, 'numeroComplement' => 2, 'dateARemettre' => 3, 'dateRemisLe' => 4, 'motif' => 5, 'commentaire' => 6, 'statutDemande' => 7, ),
        BasePeer::TYPE_COLNAME => array (CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE => 0, CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE => 1, CommonTComplementFormulairePeer::NUMERO_COMPLEMENT => 2, CommonTComplementFormulairePeer::DATE_A_REMETTRE => 3, CommonTComplementFormulairePeer::DATE_REMIS_LE => 4, CommonTComplementFormulairePeer::MOTIF => 5, CommonTComplementFormulairePeer::COMMENTAIRE => 6, CommonTComplementFormulairePeer::STATUT_DEMANDE => 7, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID_COMPLEMENT_FORMULAIRE' => 0, 'ID_DOSSIER_FORMULAIRE' => 1, 'NUMERO_COMPLEMENT' => 2, 'DATE_A_REMETTRE' => 3, 'DATE_REMIS_LE' => 4, 'MOTIF' => 5, 'COMMENTAIRE' => 6, 'STATUT_DEMANDE' => 7, ),
        BasePeer::TYPE_FIELDNAME => array ('id_complement_formulaire' => 0, 'id_dossier_formulaire' => 1, 'numero_complement' => 2, 'date_a_remettre' => 3, 'date_remis_le' => 4, 'motif' => 5, 'commentaire' => 6, 'statut_demande' => 7, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonTComplementFormulairePeer::STATUT_DEMANDE => array(
            CommonTComplementFormulairePeer::STATUT_DEMANDE_1,
            CommonTComplementFormulairePeer::STATUT_DEMANDE_2,
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
        $toNames = CommonTComplementFormulairePeer::getFieldNames($toType);
        $key = isset(CommonTComplementFormulairePeer::$fieldKeys[$fromType][$name]) ? CommonTComplementFormulairePeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonTComplementFormulairePeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonTComplementFormulairePeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonTComplementFormulairePeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonTComplementFormulairePeer::$enumValueSets;
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
        $valueSets = CommonTComplementFormulairePeer::getValueSets();

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
        $values = CommonTComplementFormulairePeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonTComplementFormulairePeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonTComplementFormulairePeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::ID_DOSSIER_FORMULAIRE);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::NUMERO_COMPLEMENT);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::DATE_A_REMETTRE);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::DATE_REMIS_LE);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::MOTIF);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::COMMENTAIRE);
            $criteria->addSelectColumn(CommonTComplementFormulairePeer::STATUT_DEMANDE);
        } else {
            $criteria->addSelectColumn($alias . '.id_complement_formulaire');
            $criteria->addSelectColumn($alias . '.id_dossier_formulaire');
            $criteria->addSelectColumn($alias . '.numero_complement');
            $criteria->addSelectColumn($alias . '.date_a_remettre');
            $criteria->addSelectColumn($alias . '.date_remis_le');
            $criteria->addSelectColumn($alias . '.motif');
            $criteria->addSelectColumn($alias . '.commentaire');
            $criteria->addSelectColumn($alias . '.statut_demande');
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
        $criteria->setPrimaryTableName(CommonTComplementFormulairePeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonTComplementFormulairePeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonTComplementFormulairePeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonTComplementFormulaire
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonTComplementFormulairePeer::doSelect($critcopy, $con);
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
        return CommonTComplementFormulairePeer::populateObjects(CommonTComplementFormulairePeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonTComplementFormulairePeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTComplementFormulairePeer::DATABASE_NAME);

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
     * @param      CommonTComplementFormulaire $obj A CommonTComplementFormulaire object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getIdComplementFormulaire();
            } // if key === null
            CommonTComplementFormulairePeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonTComplementFormulaire object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonTComplementFormulaire) {
                $key = (string) $value->getIdComplementFormulaire();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonTComplementFormulaire object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonTComplementFormulairePeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonTComplementFormulaire Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonTComplementFormulairePeer::$instances[$key])) {
                return CommonTComplementFormulairePeer::$instances[$key];
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
        foreach (CommonTComplementFormulairePeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonTComplementFormulairePeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to t_complement_formulaire
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
        $cls = CommonTComplementFormulairePeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonTComplementFormulairePeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonTComplementFormulairePeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonTComplementFormulairePeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonTComplementFormulaire object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonTComplementFormulairePeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonTComplementFormulairePeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonTComplementFormulairePeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonTComplementFormulairePeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonTComplementFormulairePeer::addInstanceToPool($obj, $key);
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
        return Propel::getDatabaseMap(CommonTComplementFormulairePeer::DATABASE_NAME)->getTable(CommonTComplementFormulairePeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonTComplementFormulairePeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonTComplementFormulairePeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonTComplementFormulaireTableMap());
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
        return CommonTComplementFormulairePeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonTComplementFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTComplementFormulaire object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonTComplementFormulaire object
        }

        if ($criteria->containsKey(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE) && $criteria->keyContainsValue(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonTComplementFormulairePeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonTComplementFormulaire or Criteria object.
     *
     * @param      mixed $values Criteria or CommonTComplementFormulaire object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonTComplementFormulairePeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE);
            $value = $criteria->remove(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE);
            if ($value) {
                $selectCriteria->add(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonTComplementFormulairePeer::TABLE_NAME);
            }

        } else { // $values is CommonTComplementFormulaire object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonTComplementFormulairePeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the t_complement_formulaire table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonTComplementFormulairePeer::TABLE_NAME, $con, CommonTComplementFormulairePeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonTComplementFormulairePeer::clearInstancePool();
            CommonTComplementFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonTComplementFormulaire or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonTComplementFormulaire object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonTComplementFormulairePeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonTComplementFormulaire) { // it's a model object
            // invalidate the cache for this single object
            CommonTComplementFormulairePeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonTComplementFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonTComplementFormulairePeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonTComplementFormulairePeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonTComplementFormulairePeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonTComplementFormulaire object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonTComplementFormulaire $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonTComplementFormulairePeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonTComplementFormulairePeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonTComplementFormulairePeer::DATABASE_NAME, CommonTComplementFormulairePeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonTComplementFormulaire
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonTComplementFormulairePeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonTComplementFormulairePeer::DATABASE_NAME);
        $criteria->add(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $pk);

        $v = CommonTComplementFormulairePeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonTComplementFormulaire[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonTComplementFormulairePeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonTComplementFormulairePeer::DATABASE_NAME);
            $criteria->add(CommonTComplementFormulairePeer::ID_COMPLEMENT_FORMULAIRE, $pks, Criteria::IN);
            $objs = CommonTComplementFormulairePeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonTComplementFormulairePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonTComplementFormulairePeer::buildTableMap();

