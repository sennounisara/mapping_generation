<?php


/**
 * Base static class for performing query and update operations on the 'Ligne_DA' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonLigneDAPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'Ligne_DA';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonLigneDA';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonLigneDATableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 12;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 12;

    /** the column name for the id field */
    const ID = 'Ligne_DA.id';

    /** the column name for the Num_ordre field */
    const NUM_ORDRE = 'Ligne_DA.Num_ordre';

    /** the column name for the code_article_specifique field */
    const CODE_ARTICLE_SPECIFIQUE = 'Ligne_DA.code_article_specifique';

    /** the column name for the libelle_article_specifique field */
    const LIBELLE_ARTICLE_SPECIFIQUE = 'Ligne_DA.libelle_article_specifique';

    /** the column name for the detail_article_specifique field */
    const DETAIL_ARTICLE_SPECIFIQUE = 'Ligne_DA.detail_article_specifique';

    /** the column name for the quantite field */
    const QUANTITE = 'Ligne_DA.quantite';

    /** the column name for the unite field */
    const UNITE = 'Ligne_DA.unite';

    /** the column name for the prix_unitaire field */
    const PRIX_UNITAIRE = 'Ligne_DA.prix_unitaire';

    /** the column name for the Montant_total field */
    const MONTANT_TOTAL = 'Ligne_DA.Montant_total';

    /** the column name for the quantite_min field */
    const QUANTITE_MIN = 'Ligne_DA.quantite_min';

    /** the column name for the quantite_max field */
    const QUANTITE_MAX = 'Ligne_DA.quantite_max';

    /** the column name for the DA_Consultation_ref field */
    const DA_CONSULTATION_REF = 'Ligne_DA.DA_Consultation_ref';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonLigneDA objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonLigneDA[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonLigneDAPeer::$fieldNames[CommonLigneDAPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'NumOrdre', 'CodeArticleSpecifique', 'LibelleArticleSpecifique', 'DetailArticleSpecifique', 'Quantite', 'Unite', 'PrixUnitaire', 'MontantTotal', 'QuantiteMin', 'QuantiteMax', 'DaConsultationRef', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'numOrdre', 'codeArticleSpecifique', 'libelleArticleSpecifique', 'detailArticleSpecifique', 'quantite', 'unite', 'prixUnitaire', 'montantTotal', 'quantiteMin', 'quantiteMax', 'daConsultationRef', ),
        BasePeer::TYPE_COLNAME => array (CommonLigneDAPeer::ID, CommonLigneDAPeer::NUM_ORDRE, CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE, CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE, CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE, CommonLigneDAPeer::QUANTITE, CommonLigneDAPeer::UNITE, CommonLigneDAPeer::PRIX_UNITAIRE, CommonLigneDAPeer::MONTANT_TOTAL, CommonLigneDAPeer::QUANTITE_MIN, CommonLigneDAPeer::QUANTITE_MAX, CommonLigneDAPeer::DA_CONSULTATION_REF, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'NUM_ORDRE', 'CODE_ARTICLE_SPECIFIQUE', 'LIBELLE_ARTICLE_SPECIFIQUE', 'DETAIL_ARTICLE_SPECIFIQUE', 'QUANTITE', 'UNITE', 'PRIX_UNITAIRE', 'MONTANT_TOTAL', 'QUANTITE_MIN', 'QUANTITE_MAX', 'DA_CONSULTATION_REF', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'Num_ordre', 'code_article_specifique', 'libelle_article_specifique', 'detail_article_specifique', 'quantite', 'unite', 'prix_unitaire', 'Montant_total', 'quantite_min', 'quantite_max', 'DA_Consultation_ref', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonLigneDAPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'NumOrdre' => 1, 'CodeArticleSpecifique' => 2, 'LibelleArticleSpecifique' => 3, 'DetailArticleSpecifique' => 4, 'Quantite' => 5, 'Unite' => 6, 'PrixUnitaire' => 7, 'MontantTotal' => 8, 'QuantiteMin' => 9, 'QuantiteMax' => 10, 'DaConsultationRef' => 11, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'numOrdre' => 1, 'codeArticleSpecifique' => 2, 'libelleArticleSpecifique' => 3, 'detailArticleSpecifique' => 4, 'quantite' => 5, 'unite' => 6, 'prixUnitaire' => 7, 'montantTotal' => 8, 'quantiteMin' => 9, 'quantiteMax' => 10, 'daConsultationRef' => 11, ),
        BasePeer::TYPE_COLNAME => array (CommonLigneDAPeer::ID => 0, CommonLigneDAPeer::NUM_ORDRE => 1, CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE => 2, CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE => 3, CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE => 4, CommonLigneDAPeer::QUANTITE => 5, CommonLigneDAPeer::UNITE => 6, CommonLigneDAPeer::PRIX_UNITAIRE => 7, CommonLigneDAPeer::MONTANT_TOTAL => 8, CommonLigneDAPeer::QUANTITE_MIN => 9, CommonLigneDAPeer::QUANTITE_MAX => 10, CommonLigneDAPeer::DA_CONSULTATION_REF => 11, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'NUM_ORDRE' => 1, 'CODE_ARTICLE_SPECIFIQUE' => 2, 'LIBELLE_ARTICLE_SPECIFIQUE' => 3, 'DETAIL_ARTICLE_SPECIFIQUE' => 4, 'QUANTITE' => 5, 'UNITE' => 6, 'PRIX_UNITAIRE' => 7, 'MONTANT_TOTAL' => 8, 'QUANTITE_MIN' => 9, 'QUANTITE_MAX' => 10, 'DA_CONSULTATION_REF' => 11, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'Num_ordre' => 1, 'code_article_specifique' => 2, 'libelle_article_specifique' => 3, 'detail_article_specifique' => 4, 'quantite' => 5, 'unite' => 6, 'prix_unitaire' => 7, 'Montant_total' => 8, 'quantite_min' => 9, 'quantite_max' => 10, 'DA_Consultation_ref' => 11, ),
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
        $toNames = CommonLigneDAPeer::getFieldNames($toType);
        $key = isset(CommonLigneDAPeer::$fieldKeys[$fromType][$name]) ? CommonLigneDAPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonLigneDAPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonLigneDAPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonLigneDAPeer::$fieldNames[$type];
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
     * @param      string $column The column name for current table. (i.e. CommonLigneDAPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonLigneDAPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonLigneDAPeer::ID);
            $criteria->addSelectColumn(CommonLigneDAPeer::NUM_ORDRE);
            $criteria->addSelectColumn(CommonLigneDAPeer::CODE_ARTICLE_SPECIFIQUE);
            $criteria->addSelectColumn(CommonLigneDAPeer::LIBELLE_ARTICLE_SPECIFIQUE);
            $criteria->addSelectColumn(CommonLigneDAPeer::DETAIL_ARTICLE_SPECIFIQUE);
            $criteria->addSelectColumn(CommonLigneDAPeer::QUANTITE);
            $criteria->addSelectColumn(CommonLigneDAPeer::UNITE);
            $criteria->addSelectColumn(CommonLigneDAPeer::PRIX_UNITAIRE);
            $criteria->addSelectColumn(CommonLigneDAPeer::MONTANT_TOTAL);
            $criteria->addSelectColumn(CommonLigneDAPeer::QUANTITE_MIN);
            $criteria->addSelectColumn(CommonLigneDAPeer::QUANTITE_MAX);
            $criteria->addSelectColumn(CommonLigneDAPeer::DA_CONSULTATION_REF);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.Num_ordre');
            $criteria->addSelectColumn($alias . '.code_article_specifique');
            $criteria->addSelectColumn($alias . '.libelle_article_specifique');
            $criteria->addSelectColumn($alias . '.detail_article_specifique');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.unite');
            $criteria->addSelectColumn($alias . '.prix_unitaire');
            $criteria->addSelectColumn($alias . '.Montant_total');
            $criteria->addSelectColumn($alias . '.quantite_min');
            $criteria->addSelectColumn($alias . '.quantite_max');
            $criteria->addSelectColumn($alias . '.DA_Consultation_ref');
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
        $criteria->setPrimaryTableName(CommonLigneDAPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonLigneDAPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonLigneDA
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonLigneDAPeer::doSelect($critcopy, $con);
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
        return CommonLigneDAPeer::populateObjects(CommonLigneDAPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonLigneDAPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);

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
     * @param      CommonLigneDA $obj A CommonLigneDA object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonLigneDAPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonLigneDA object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonLigneDA) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonLigneDA object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonLigneDAPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonLigneDA Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonLigneDAPeer::$instances[$key])) {
                return CommonLigneDAPeer::$instances[$key];
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
        foreach (CommonLigneDAPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonLigneDAPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to Ligne_DA
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
        $cls = CommonLigneDAPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonLigneDAPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonLigneDAPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonLigneDAPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonLigneDA object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonLigneDAPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonLigneDAPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonLigneDAPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonLigneDAPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonLigneDAPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonDAConsultation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonDAConsultation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonLigneDAPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonLigneDAPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonLigneDAPeer::DA_CONSULTATION_REF, CommonDAConsultationPeer::ID, $join_behavior);

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
     * Selects a collection of CommonLigneDA objects pre-filled with their CommonDAConsultation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonLigneDA objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonDAConsultation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);
        }

        CommonLigneDAPeer::addSelectColumns($criteria);
        $startcol = CommonLigneDAPeer::NUM_HYDRATE_COLUMNS;
        CommonDAConsultationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonLigneDAPeer::DA_CONSULTATION_REF, CommonDAConsultationPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonLigneDAPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonLigneDAPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonLigneDAPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonLigneDAPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonDAConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonDAConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonDAConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonDAConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonLigneDA) to $obj2 (CommonDAConsultation)
                $obj2->addCommonLigneDA($obj1);

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
        $criteria->setPrimaryTableName(CommonLigneDAPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonLigneDAPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonLigneDAPeer::DA_CONSULTATION_REF, CommonDAConsultationPeer::ID, $join_behavior);

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
     * Selects a collection of CommonLigneDA objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonLigneDA objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);
        }

        CommonLigneDAPeer::addSelectColumns($criteria);
        $startcol2 = CommonLigneDAPeer::NUM_HYDRATE_COLUMNS;

        CommonDAConsultationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonDAConsultationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonLigneDAPeer::DA_CONSULTATION_REF, CommonDAConsultationPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonLigneDAPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonLigneDAPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonLigneDAPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonLigneDAPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonDAConsultation rows

            $key2 = CommonDAConsultationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonDAConsultationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonDAConsultationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonDAConsultationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonLigneDA) to the collection in $obj2 (CommonDAConsultation)
                $obj2->addCommonLigneDA($obj1);
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
        return Propel::getDatabaseMap(CommonLigneDAPeer::DATABASE_NAME)->getTable(CommonLigneDAPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonLigneDAPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonLigneDAPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonLigneDATableMap());
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
        return CommonLigneDAPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonLigneDA or Criteria object.
     *
     * @param      mixed $values Criteria or CommonLigneDA object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonLigneDA object
        }

        if ($criteria->containsKey(CommonLigneDAPeer::ID) && $criteria->keyContainsValue(CommonLigneDAPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonLigneDAPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonLigneDA or Criteria object.
     *
     * @param      mixed $values Criteria or CommonLigneDA object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonLigneDAPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonLigneDAPeer::ID);
            $value = $criteria->remove(CommonLigneDAPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonLigneDAPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonLigneDAPeer::TABLE_NAME);
            }

        } else { // $values is CommonLigneDA object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the Ligne_DA table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonLigneDAPeer::TABLE_NAME, $con, CommonLigneDAPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonLigneDAPeer::clearInstancePool();
            CommonLigneDAPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonLigneDA or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonLigneDA object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonLigneDAPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonLigneDA) { // it's a model object
            // invalidate the cache for this single object
            CommonLigneDAPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonLigneDAPeer::DATABASE_NAME);
            $criteria->add(CommonLigneDAPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonLigneDAPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonLigneDAPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonLigneDAPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonLigneDA object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonLigneDA $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonLigneDAPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonLigneDAPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonLigneDAPeer::DATABASE_NAME, CommonLigneDAPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonLigneDA
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonLigneDAPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonLigneDAPeer::DATABASE_NAME);
        $criteria->add(CommonLigneDAPeer::ID, $pk);

        $v = CommonLigneDAPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonLigneDA[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonLigneDAPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonLigneDAPeer::DATABASE_NAME);
            $criteria->add(CommonLigneDAPeer::ID, $pks, Criteria::IN);
            $objs = CommonLigneDAPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonLigneDAPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonLigneDAPeer::buildTableMap();

