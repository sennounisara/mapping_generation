<?php


/**
 * Base static class for performing query and update operations on the 'EnveloppeItemCritereEvaluation' table.
 *
 * 
 *
 * @package propel.generator.mpe.om
 */
abstract class BaseCommonEnveloppeItemCritereEvaluationPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'mpe';

    /** the table name for this class */
    const TABLE_NAME = 'EnveloppeItemCritereEvaluation';

    /** the related Propel class for this table */
    const OM_CLASS = 'CommonEnveloppeItemCritereEvaluation';

    /** the related TableMap class for this table */
    const TM_CLASS = 'CommonEnveloppeItemCritereEvaluationTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 13;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 13;

    /** the column name for the id field */
    const ID = 'EnveloppeItemCritereEvaluation.id';

    /** the column name for the idItemCritereEvaluation field */
    const IDITEMCRITEREEVALUATION = 'EnveloppeItemCritereEvaluation.idItemCritereEvaluation';

    /** the column name for the idEnveloppeCritereEvaluation field */
    const IDENVELOPPECRITEREEVALUATION = 'EnveloppeItemCritereEvaluation.idEnveloppeCritereEvaluation';

    /** the column name for the libelle field */
    const LIBELLE = 'EnveloppeItemCritereEvaluation.libelle';

    /** the column name for the prix field */
    const PRIX = 'EnveloppeItemCritereEvaluation.prix';

    /** the column name for the quantite field */
    const QUANTITE = 'EnveloppeItemCritereEvaluation.quantite';

    /** the column name for the ponderation field */
    const PONDERATION = 'EnveloppeItemCritereEvaluation.ponderation';

    /** the column name for the numero field */
    const NUMERO = 'EnveloppeItemCritereEvaluation.numero';

    /** the column name for the regle_evaluation field */
    const REGLE_EVALUATION = 'EnveloppeItemCritereEvaluation.regle_evaluation';

    /** the column name for the type_item field */
    const TYPE_ITEM = 'EnveloppeItemCritereEvaluation.type_item';

    /** the column name for the reponse_fournisseur field */
    const REPONSE_FOURNISSEUR = 'EnveloppeItemCritereEvaluation.reponse_fournisseur';

    /** the column name for the note field */
    const NOTE = 'EnveloppeItemCritereEvaluation.note';

    /** the column name for the commentaire_acheteur field */
    const COMMENTAIRE_ACHETEUR = 'EnveloppeItemCritereEvaluation.commentaire_acheteur';

    /** The enumerated values for the prix field */
    const PRIX_0 = '0';
    const PRIX_1 = '1';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identity map to hold any loaded instances of CommonEnveloppeItemCritereEvaluation objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array CommonEnveloppeItemCritereEvaluation[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. CommonEnveloppeItemCritereEvaluationPeer::$fieldNames[CommonEnveloppeItemCritereEvaluationPeer::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('Id', 'Iditemcritereevaluation', 'Idenveloppecritereevaluation', 'Libelle', 'Prix', 'Quantite', 'Ponderation', 'Numero', 'RegleEvaluation', 'TypeItem', 'ReponseFournisseur', 'Note', 'CommentaireAcheteur', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'iditemcritereevaluation', 'idenveloppecritereevaluation', 'libelle', 'prix', 'quantite', 'ponderation', 'numero', 'regleEvaluation', 'typeItem', 'reponseFournisseur', 'note', 'commentaireAcheteur', ),
        BasePeer::TYPE_COLNAME => array (CommonEnveloppeItemCritereEvaluationPeer::ID, CommonEnveloppeItemCritereEvaluationPeer::IDITEMCRITEREEVALUATION, CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, CommonEnveloppeItemCritereEvaluationPeer::LIBELLE, CommonEnveloppeItemCritereEvaluationPeer::PRIX, CommonEnveloppeItemCritereEvaluationPeer::QUANTITE, CommonEnveloppeItemCritereEvaluationPeer::PONDERATION, CommonEnveloppeItemCritereEvaluationPeer::NUMERO, CommonEnveloppeItemCritereEvaluationPeer::REGLE_EVALUATION, CommonEnveloppeItemCritereEvaluationPeer::TYPE_ITEM, CommonEnveloppeItemCritereEvaluationPeer::REPONSE_FOURNISSEUR, CommonEnveloppeItemCritereEvaluationPeer::NOTE, CommonEnveloppeItemCritereEvaluationPeer::COMMENTAIRE_ACHETEUR, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID', 'IDITEMCRITEREEVALUATION', 'IDENVELOPPECRITEREEVALUATION', 'LIBELLE', 'PRIX', 'QUANTITE', 'PONDERATION', 'NUMERO', 'REGLE_EVALUATION', 'TYPE_ITEM', 'REPONSE_FOURNISSEUR', 'NOTE', 'COMMENTAIRE_ACHETEUR', ),
        BasePeer::TYPE_FIELDNAME => array ('id', 'idItemCritereEvaluation', 'idEnveloppeCritereEvaluation', 'libelle', 'prix', 'quantite', 'ponderation', 'numero', 'regle_evaluation', 'type_item', 'reponse_fournisseur', 'note', 'commentaire_acheteur', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. CommonEnveloppeItemCritereEvaluationPeer::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Iditemcritereevaluation' => 1, 'Idenveloppecritereevaluation' => 2, 'Libelle' => 3, 'Prix' => 4, 'Quantite' => 5, 'Ponderation' => 6, 'Numero' => 7, 'RegleEvaluation' => 8, 'TypeItem' => 9, 'ReponseFournisseur' => 10, 'Note' => 11, 'CommentaireAcheteur' => 12, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'iditemcritereevaluation' => 1, 'idenveloppecritereevaluation' => 2, 'libelle' => 3, 'prix' => 4, 'quantite' => 5, 'ponderation' => 6, 'numero' => 7, 'regleEvaluation' => 8, 'typeItem' => 9, 'reponseFournisseur' => 10, 'note' => 11, 'commentaireAcheteur' => 12, ),
        BasePeer::TYPE_COLNAME => array (CommonEnveloppeItemCritereEvaluationPeer::ID => 0, CommonEnveloppeItemCritereEvaluationPeer::IDITEMCRITEREEVALUATION => 1, CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION => 2, CommonEnveloppeItemCritereEvaluationPeer::LIBELLE => 3, CommonEnveloppeItemCritereEvaluationPeer::PRIX => 4, CommonEnveloppeItemCritereEvaluationPeer::QUANTITE => 5, CommonEnveloppeItemCritereEvaluationPeer::PONDERATION => 6, CommonEnveloppeItemCritereEvaluationPeer::NUMERO => 7, CommonEnveloppeItemCritereEvaluationPeer::REGLE_EVALUATION => 8, CommonEnveloppeItemCritereEvaluationPeer::TYPE_ITEM => 9, CommonEnveloppeItemCritereEvaluationPeer::REPONSE_FOURNISSEUR => 10, CommonEnveloppeItemCritereEvaluationPeer::NOTE => 11, CommonEnveloppeItemCritereEvaluationPeer::COMMENTAIRE_ACHETEUR => 12, ),
        BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'IDITEMCRITEREEVALUATION' => 1, 'IDENVELOPPECRITEREEVALUATION' => 2, 'LIBELLE' => 3, 'PRIX' => 4, 'QUANTITE' => 5, 'PONDERATION' => 6, 'NUMERO' => 7, 'REGLE_EVALUATION' => 8, 'TYPE_ITEM' => 9, 'REPONSE_FOURNISSEUR' => 10, 'NOTE' => 11, 'COMMENTAIRE_ACHETEUR' => 12, ),
        BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'idItemCritereEvaluation' => 1, 'idEnveloppeCritereEvaluation' => 2, 'libelle' => 3, 'prix' => 4, 'quantite' => 5, 'ponderation' => 6, 'numero' => 7, 'regle_evaluation' => 8, 'type_item' => 9, 'reponse_fournisseur' => 10, 'note' => 11, 'commentaire_acheteur' => 12, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, )
    );

    /** The enumerated values for this table */
    protected static $enumValueSets = array(
        CommonEnveloppeItemCritereEvaluationPeer::PRIX => array(
            CommonEnveloppeItemCritereEvaluationPeer::PRIX_0,
            CommonEnveloppeItemCritereEvaluationPeer::PRIX_1,
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
        $toNames = CommonEnveloppeItemCritereEvaluationPeer::getFieldNames($toType);
        $key = isset(CommonEnveloppeItemCritereEvaluationPeer::$fieldKeys[$fromType][$name]) ? CommonEnveloppeItemCritereEvaluationPeer::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(CommonEnveloppeItemCritereEvaluationPeer::$fieldKeys[$fromType], true));
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
        if (!array_key_exists($type, CommonEnveloppeItemCritereEvaluationPeer::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }

        return CommonEnveloppeItemCritereEvaluationPeer::$fieldNames[$type];
    }

    /**
     * Gets the list of values for all ENUM columns
     * @return array
     */
    public static function getValueSets()
    {
      return CommonEnveloppeItemCritereEvaluationPeer::$enumValueSets;
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
        $valueSets = CommonEnveloppeItemCritereEvaluationPeer::getValueSets();

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
        $values = CommonEnveloppeItemCritereEvaluationPeer::getValueSet($colname);
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
     * @param      string $column The column name for current table. (i.e. CommonEnveloppeItemCritereEvaluationPeer::COLUMN_NAME).
     * @return string
     */
    public static function alias($alias, $column)
    {
        return str_replace(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::ID);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::IDITEMCRITEREEVALUATION);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::LIBELLE);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::PRIX);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::QUANTITE);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::PONDERATION);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::NUMERO);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::REGLE_EVALUATION);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::TYPE_ITEM);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::REPONSE_FOURNISSEUR);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::NOTE);
            $criteria->addSelectColumn(CommonEnveloppeItemCritereEvaluationPeer::COMMENTAIRE_ACHETEUR);
        } else {
            $criteria->addSelectColumn($alias . '.id');
            $criteria->addSelectColumn($alias . '.idItemCritereEvaluation');
            $criteria->addSelectColumn($alias . '.idEnveloppeCritereEvaluation');
            $criteria->addSelectColumn($alias . '.libelle');
            $criteria->addSelectColumn($alias . '.prix');
            $criteria->addSelectColumn($alias . '.quantite');
            $criteria->addSelectColumn($alias . '.ponderation');
            $criteria->addSelectColumn($alias . '.numero');
            $criteria->addSelectColumn($alias . '.regle_evaluation');
            $criteria->addSelectColumn($alias . '.type_item');
            $criteria->addSelectColumn($alias . '.reponse_fournisseur');
            $criteria->addSelectColumn($alias . '.note');
            $criteria->addSelectColumn($alias . '.commentaire_acheteur');
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
        $criteria->setPrimaryTableName(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnveloppeItemCritereEvaluationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
     * @return                 CommonEnveloppeItemCritereEvaluation
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = CommonEnveloppeItemCritereEvaluationPeer::doSelect($critcopy, $con);
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
        return CommonEnveloppeItemCritereEvaluationPeer::populateObjects(CommonEnveloppeItemCritereEvaluationPeer::doSelectStmt($criteria, $con));
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
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            CommonEnveloppeItemCritereEvaluationPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

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
     * @param      CommonEnveloppeItemCritereEvaluation $obj A CommonEnveloppeItemCritereEvaluation object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getId();
            } // if key === null
            CommonEnveloppeItemCritereEvaluationPeer::$instances[$key] = $obj;
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
     * @param      mixed $value A CommonEnveloppeItemCritereEvaluation object or a primary key value.
     *
     * @return void
     * @throws PropelException - if the value is invalid.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof CommonEnveloppeItemCritereEvaluation) {
                $key = (string) $value->getId();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or CommonEnveloppeItemCritereEvaluation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(CommonEnveloppeItemCritereEvaluationPeer::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return   CommonEnveloppeItemCritereEvaluation Found object or null if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(CommonEnveloppeItemCritereEvaluationPeer::$instances[$key])) {
                return CommonEnveloppeItemCritereEvaluationPeer::$instances[$key];
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
        foreach (CommonEnveloppeItemCritereEvaluationPeer::$instances as $instance) {
          $instance->clearAllReferences(true);
        }
      }
        CommonEnveloppeItemCritereEvaluationPeer::$instances = array();
    }
    
    /**
     * Method to invalidate the instance pool of all tables related to EnveloppeItemCritereEvaluation
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
        $cls = CommonEnveloppeItemCritereEvaluationPeer::getOMClass();
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = CommonEnveloppeItemCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = CommonEnveloppeItemCritereEvaluationPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                CommonEnveloppeItemCritereEvaluationPeer::addInstanceToPool($obj, $key);
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
     * @return array (CommonEnveloppeItemCritereEvaluation object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = CommonEnveloppeItemCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = CommonEnveloppeItemCritereEvaluationPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + CommonEnveloppeItemCritereEvaluationPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = CommonEnveloppeItemCritereEvaluationPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            CommonEnveloppeItemCritereEvaluationPeer::addInstanceToPool($obj, $key);
        }

        return array($obj, $col);
    }


    /**
     * Returns the number of rows matching criteria, joining the related CommonEnveloppeCritereEvaluation table
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return int Number of matching rows.
     */
    public static function doCountJoinCommonEnveloppeCritereEvaluation(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        // we're going to modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnveloppeItemCritereEvaluationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, CommonEnveloppeCritereEvaluationPeer::ID, $join_behavior);

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
     * Selects a collection of CommonEnveloppeItemCritereEvaluation objects pre-filled with their CommonEnveloppeCritereEvaluation objects.
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnveloppeItemCritereEvaluation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinCommonEnveloppeCritereEvaluation(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
        }

        CommonEnveloppeItemCritereEvaluationPeer::addSelectColumns($criteria);
        $startcol = CommonEnveloppeItemCritereEvaluationPeer::NUM_HYDRATE_COLUMNS;
        CommonEnveloppeCritereEvaluationPeer::addSelectColumns($criteria);

        $criteria->addJoin(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, CommonEnveloppeCritereEvaluationPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnveloppeItemCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnveloppeItemCritereEvaluationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {

                $cls = CommonEnveloppeItemCritereEvaluationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnveloppeItemCritereEvaluationPeer::addInstanceToPool($obj1, $key1);
            } // if $obj1 already loaded

            $key2 = CommonEnveloppeCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, $startcol);
            if ($key2 !== null) {
                $obj2 = CommonEnveloppeCritereEvaluationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEnveloppeCritereEvaluationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol);
                    CommonEnveloppeCritereEvaluationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 already loaded

                // Add the $obj1 (CommonEnveloppeItemCritereEvaluation) to $obj2 (CommonEnveloppeCritereEvaluation)
                $obj2->addCommonEnveloppeItemCritereEvaluation($obj1);

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
        $criteria->setPrimaryTableName(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            CommonEnveloppeItemCritereEvaluationPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria->addJoin(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, CommonEnveloppeCritereEvaluationPeer::ID, $join_behavior);

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
     * Selects a collection of CommonEnveloppeItemCritereEvaluation objects pre-filled with all related objects.
     *
     * @param      Criteria  $criteria
     * @param      PropelPDO $con
     * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
     * @return array           Array of CommonEnveloppeItemCritereEvaluation objects.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
    {
        $criteria = clone $criteria;

        // Set the correct dbName if it has not been overridden
        if ($criteria->getDbName() == Propel::getDefaultDB()) {
            $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
        }

        CommonEnveloppeItemCritereEvaluationPeer::addSelectColumns($criteria);
        $startcol2 = CommonEnveloppeItemCritereEvaluationPeer::NUM_HYDRATE_COLUMNS;

        CommonEnveloppeCritereEvaluationPeer::addSelectColumns($criteria);
        $startcol3 = $startcol2 + CommonEnveloppeCritereEvaluationPeer::NUM_HYDRATE_COLUMNS;

        $criteria->addJoin(CommonEnveloppeItemCritereEvaluationPeer::IDENVELOPPECRITEREEVALUATION, CommonEnveloppeCritereEvaluationPeer::ID, $join_behavior);

        $stmt = BasePeer::doSelect($criteria, $con);
        $results = array();

        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key1 = CommonEnveloppeItemCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj1 = CommonEnveloppeItemCritereEvaluationPeer::getInstanceFromPool($key1))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj1->hydrate($row, 0, true); // rehydrate
            } else {
                $cls = CommonEnveloppeItemCritereEvaluationPeer::getOMClass();

                $obj1 = new $cls();
                $obj1->hydrate($row);
                CommonEnveloppeItemCritereEvaluationPeer::addInstanceToPool($obj1, $key1);
            } // if obj1 already loaded

            // Add objects for joined CommonEnveloppeCritereEvaluation rows

            $key2 = CommonEnveloppeCritereEvaluationPeer::getPrimaryKeyHashFromRow($row, $startcol2);
            if ($key2 !== null) {
                $obj2 = CommonEnveloppeCritereEvaluationPeer::getInstanceFromPool($key2);
                if (!$obj2) {

                    $cls = CommonEnveloppeCritereEvaluationPeer::getOMClass();

                    $obj2 = new $cls();
                    $obj2->hydrate($row, $startcol2);
                    CommonEnveloppeCritereEvaluationPeer::addInstanceToPool($obj2, $key2);
                } // if obj2 loaded

                // Add the $obj1 (CommonEnveloppeItemCritereEvaluation) to the collection in $obj2 (CommonEnveloppeCritereEvaluation)
                $obj2->addCommonEnveloppeItemCritereEvaluation($obj1);
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
        return Propel::getDatabaseMap(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME)->getTable(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
      $dbMap = Propel::getDatabaseMap(BaseCommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
      if (!$dbMap->hasTable(BaseCommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME)) {
        $dbMap->addTableObject(new CommonEnveloppeItemCritereEvaluationTableMap());
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
        return CommonEnveloppeItemCritereEvaluationPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a CommonEnveloppeItemCritereEvaluation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnveloppeItemCritereEvaluation object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return mixed           The new primary key.
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from CommonEnveloppeItemCritereEvaluation object
        }

        if ($criteria->containsKey(CommonEnveloppeItemCritereEvaluationPeer::ID) && $criteria->keyContainsValue(CommonEnveloppeItemCritereEvaluationPeer::ID) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.CommonEnveloppeItemCritereEvaluationPeer::ID.')');
        }


        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

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
     * Performs an UPDATE on the database, given a CommonEnveloppeItemCritereEvaluation or Criteria object.
     *
     * @param      mixed $values Criteria or CommonEnveloppeItemCritereEvaluation object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(CommonEnveloppeItemCritereEvaluationPeer::ID);
            $value = $criteria->remove(CommonEnveloppeItemCritereEvaluationPeer::ID);
            if ($value) {
                $selectCriteria->add(CommonEnveloppeItemCritereEvaluationPeer::ID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME);
            }

        } else { // $values is CommonEnveloppeItemCritereEvaluation object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the EnveloppeItemCritereEvaluation table.
     *
     * @param      PropelPDO $con the connection to use
     * @return int             The number of affected rows (if supported by underlying database driver).
     * @throws PropelException
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME, $con, CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            CommonEnveloppeItemCritereEvaluationPeer::clearInstancePool();
            CommonEnveloppeItemCritereEvaluationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a CommonEnveloppeItemCritereEvaluation or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or CommonEnveloppeItemCritereEvaluation object or primary key or array of primary keys
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
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            CommonEnveloppeItemCritereEvaluationPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof CommonEnveloppeItemCritereEvaluation) { // it's a model object
            // invalidate the cache for this single object
            CommonEnveloppeItemCritereEvaluationPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
            $criteria->add(CommonEnveloppeItemCritereEvaluationPeer::ID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                CommonEnveloppeItemCritereEvaluationPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            
            $affectedRows += BasePeer::doDelete($criteria, $con);
            CommonEnveloppeItemCritereEvaluationPeer::clearRelatedInstancePool();
            $con->commit();

            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given CommonEnveloppeItemCritereEvaluation object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      CommonEnveloppeItemCritereEvaluation $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME);

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

        return BasePeer::doValidate(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, CommonEnveloppeItemCritereEvaluationPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      int $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return CommonEnveloppeItemCritereEvaluation
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = CommonEnveloppeItemCritereEvaluationPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
        $criteria->add(CommonEnveloppeItemCritereEvaluationPeer::ID, $pk);

        $v = CommonEnveloppeItemCritereEvaluationPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }

    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @return CommonEnveloppeItemCritereEvaluation[]
     * @throws PropelException Any exceptions caught during processing will be
     *		 rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(CommonEnveloppeItemCritereEvaluationPeer::DATABASE_NAME);
            $criteria->add(CommonEnveloppeItemCritereEvaluationPeer::ID, $pks, Criteria::IN);
            $objs = CommonEnveloppeItemCritereEvaluationPeer::doSelect($criteria, $con);
        }

        return $objs;
    }

} // BaseCommonEnveloppeItemCritereEvaluationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseCommonEnveloppeItemCritereEvaluationPeer::buildTableMap();

